<?php
// Include the TCPDF library
require_once(__DIR__ . '/TCPDF-main/tcpdf.php');

// Database connection
$host = 'localhost';
$db = 'DailyDeals';
$user = 'root';
$pass = '';

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch order details from the database based on order ID
$order_id = $_GET['OrderID']; // Pass the order ID dynamically via URL
$sql = "SELECT * FROM `order` WHERE OrderID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $order_id);
$stmt->execute();
$orderResult = $stmt->get_result();
$orderData = $orderResult->fetch_assoc();

if (!$orderData) {
    die("Order not found or query failed.");
}

// Fetch customer details
$customer_id = $orderData['CID']; // Using the actual CID from the order data
$sqlCustomer = "SELECT * FROM customers WHERE CID = ?";
$stmt = $conn->prepare($sqlCustomer);
$stmt->bind_param("s", $customer_id);
$stmt->execute();
$customerResult = $stmt->get_result();
$customerData = $customerResult->fetch_assoc();

if (!$customerData) {
    die("Customer not found or query failed.");
}

// Fetch order items
$sqlItems = "SELECT * FROM orderitem WHERE OrderID = ?";
$stmt = $conn->prepare($sqlItems);
$stmt->bind_param("i", $order_id);
$stmt->execute();
$itemsResult = $stmt->get_result();

if ($itemsResult->num_rows === 0) {
    die("No items found for this order.");
}

// Ensure the directory exists
$directory = __DIR__ . '/invoices';
if (!is_dir($directory)) {
    mkdir($directory, 0755, true); // Create the directory with appropriate permissions
}

// Create a new PDF
$pdf = new TCPDF();

// Set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Daily Deals');
$pdf->SetTitle('Order Invoice');

// Set default header data
$pdf->SetHeaderData('', 0, 'Daily Deals', "Order Invoice No: {$orderData['OrderID']} | Date: " . date("Y-m-d"));

// Add a page
$pdf->AddPage();

// Set font and colors for title
$pdf->SetFont('helvetica', 'B', 16);
$pdf->SetTextColor(0, 51, 153); // Dark blue
$pdf->Cell(0, 10, 'Order Invoice', 0, 1, 'C');
$pdf->Ln(5);

// Set font and color for customer details
$pdf->SetFont('helvetica', 'B', 12);
$pdf->SetTextColor(0, 0, 0); // Black
$pdf->Cell(0, 10, 'Customer Information:', 0, 1, 'L');

$pdf->SetFont('helvetica', '', 11);
$pdf->Cell(0, 8, 'Name: ' . ($customerData['C_Name'] ?? 'N/A'), 0, 1);
$pdf->Cell(0, 8, 'Email: ' . ($customerData['Email'] ?? 'N/A'), 0, 1);
$pdf->Cell(0, 8, 'Phone: ' . ($customerData['Contact_No'] ?? 'N/A'), 0, 1);
$pdf->Ln(5);

// Set font and color for order details
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 10, 'Order Information:', 0, 1, 'L');

$pdf->SetFont('helvetica', '', 11);
$pdf->Cell(0, 8, 'Order Date: ' . ($orderData['OrderDate'] ?? 'N/A'), 0, 1);
$pdf->Cell(0, 8, 'Total Amount: $' . number_format($orderData['TotalAmount'] ?? '0.00', 2), 0, 1);
$pdf->Ln(5);

// Order items table with enhanced layout
$pdf->SetFillColor(220, 220, 220); // Light gray for header background
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(40, 10, 'Product', 1, 0, 'C', 1);
$pdf->Cell(30, 10, 'Quantity', 1, 0, 'C', 1);
$pdf->Cell(30, 10, 'Price', 1, 0, 'C', 1);
$pdf->Cell(30, 10, 'Total', 1, 1, 'C', 1);

// Set font and background for order items
$pdf->SetFont('helvetica', '', 10);
$pdf->SetFillColor(255, 255, 255); // White background for items

// Loop through order items
while ($item = $itemsResult->fetch_assoc()) {
    // Fetch product name from the `product` table using ProductID
    $productId = $item['ProductID'];
    $sqlProduct = "SELECT Name FROM product WHERE ProductID = ?";
    $stmtProduct = $conn->prepare($sqlProduct);
    $stmtProduct->bind_param("i", $productId);
    $stmtProduct->execute();
    $productResult = $stmtProduct->get_result();
    $productData = $productResult->fetch_assoc();

    $productName = $productData['Name'] ?? 'Unknown Product';
    $quantity = $item['Quantity'] ?? 0;
    $price = $item['PriceAtPurchase'] ?? 0.00;
    $total = $quantity * $price;

    $pdf->Cell(40, 10, $productName, 1, 0, 'L', 1);
    $pdf->Cell(30, 10, $quantity, 1, 0, 'C', 1);
    $pdf->Cell(30, 10, '$' . number_format($price, 2), 1, 0, 'R', 1);
    $pdf->Cell(30, 10, '$' . number_format($total, 2), 1, 1, 'R', 1);
}

// Add additional order summary details if needed
$pdf->Ln(10);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 10, 'Thank you for shopping with Daily Deals!', 0, 1, 'C');

// Generate a unique filename for each invoice
$filename = "invoice_order_{$order_id}_" . time() . ".pdf";
$file_path = $directory . '/' . $filename;

// Save the PDF to the server
$pdf->Output($file_path, 'F'); // 'F' for file saving

// Update the BillURL in the order table
$sqlUpdateBillURL = "UPDATE `order` SET BillURL = ? WHERE OrderID = ?";
$stmtUpdate = $conn->prepare($sqlUpdateBillURL);
$stmtUpdate->bind_param("si", $file_path, $order_id);
$stmtUpdate->execute();

// Close database connection
$conn->close();

// Provide file download
if (file_exists($file_path)) {
    // Set headers to force download
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    // Output the file
    readfile($file_path);
    exit;
} else {
    echo "Invoice generation failed or file not found.";
}
?>
