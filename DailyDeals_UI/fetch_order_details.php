<?php
header('Content-Type: application/json');

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dailydeals";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(['error' => 'Connection failed: ' . $conn->connect_error]));
}

$orderID = $_POST['orderID'];

if (!$orderID) {
    echo json_encode(['error' => 'Invalid order ID']);
    exit;
}

// Fetch order details
$stmt = $conn->prepare("SELECT TotalAmount FROM `order` WHERE OrderID = ?");
$stmt->bind_param("i", $orderID);
$stmt->execute();
$result = $stmt->get_result();
$order = $result->fetch_assoc();

if (!$order) {
    echo json_encode(['error' => 'Order not found']);
    exit;
}

$totalAmount = $order['TotalAmount'];

// Fetch order items
$stmt = $conn->prepare("SELECT p.Name, oi.Quantity, oi.PriceAtPurchase FROM orderitem oi JOIN product p ON oi.ProductID = p.ProductID WHERE oi.OrderID = ?");
$stmt->bind_param("i", $orderID);
$stmt->execute();
$result = $stmt->get_result();

$orderItems = [];
while ($row = $result->fetch_assoc()) {
    $orderItems[] = $row;
}

echo json_encode(['orderID' => $orderID, 'totalAmount' => $totalAmount, 'orderItems' => $orderItems]);

$conn->close();
?>
