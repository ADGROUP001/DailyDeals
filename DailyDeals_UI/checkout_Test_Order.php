<?php
session_start();
include 'dbconnection.php'; // Database connection

// Check if the user is logged in
if (!isset($_SESSION['Email'])) {
    header("Location: sing.php"); // Redirect to login if not logged in
    exit();
}

$userEmail = $_SESSION['Email'];

// Step 1: Retrieve the CID (Customer ID) from the customers table using the Email
$customerQuery = "SELECT CID FROM customers WHERE Email = ?";
$stmt = $conn->prepare($customerQuery);
$stmt->bind_param('s', $userEmail);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $cid = $row['CID']; // Get the customer ID
} else {
    echo "Error: Customer not found.";
    exit();
}

// Get the cart details from POST request
$cartItems = $_POST['cartItems']; // Array of cart items (productId, quantity, price)
$totalAmount = $_POST['totalAmount'];

// Step 2: Insert the order into the `order` table using the retrieved CID
$orderInsertQuery = "INSERT INTO `order` (CID, TotalAmount, OrderDate, OrderStatus, IsActive) 
                     VALUES (?, ?, NOW(), 'Pending', 1)";
$stmt = $conn->prepare($orderInsertQuery);
$stmt->bind_param('sd', $cid, $totalAmount);

if ($stmt->execute()) {
    $orderId = $conn->insert_id; // Get the generated OrderID

    // Insert the order items into the `orderitem` table
    foreach ($cartItems as $item) {
        $productId = $item['id'];
        $quantity = $item['quantity'];
        $price = $item['price'];

        $orderItemQuery = "INSERT INTO `orderitem` (OrderID, ProductID, Quantity, PriceAtPurchase) 
                           VALUES (?, ?, ?, ?)";
        $stmtItem = $conn->prepare($orderItemQuery);
        $stmtItem->bind_param('iiid', $orderId, $productId, $quantity, $price);
        $stmtItem->execute();
    }

    // Redirect to payment page with order details
    header("Location: payment_Test.php?orderId=$orderId&totalAmount=$totalAmount");
    exit();
} else {
    echo "Error: Unable to place order.";
}
?>
