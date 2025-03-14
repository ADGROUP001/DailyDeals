<?php
// create_order.php
header('Content-Type: application/json');

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dailydeals";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(['status' => 'error', 'message' => 'Connection failed: ' . $conn->connect_error]));
}

// Get order details from the request
$orderData = json_decode(file_get_contents("php://input"), true);

// Assuming user is logged in and we have their CID
$cid = 'C_03'; // This should be retrieved from the session or a login mechanism
$totalAmount = $orderData['totalAmount'];

// Insert order into the 'order' table
$orderSql = "INSERT INTO `order` (CID, TotalAmount, OrderStatus) VALUES ('$cid', '$totalAmount', 'Pending')";
if ($conn->query($orderSql) === TRUE) {
    $orderID = $conn->insert_id;

    // Insert order items into the 'orderitem' table
    foreach ($orderData['items'] as $item) {
        $productID = $item['productID'];
        $quantity = $item['quantity'];
        $priceAtPurchase = $item['price'];

        $orderItemSql = "INSERT INTO `orderitem` (OrderID, ProductID, Quantity, PriceAtPurchase) VALUES ('$orderID', '$productID', '$quantity', '$priceAtPurchase')";
        $conn->query($orderItemSql);
    }

    // Respond with success
    echo json_encode(['status' => 'success', 'orderID' => $orderID]);
} else {
    // Respond with error
    echo json_encode(['status' => 'error', 'message' => 'Error: ' . $conn->error]);
}

$conn->close();
?>
