<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DailyDeals";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$productId = $_GET['ProductID'] ?? null;

if ($productId) {
    $result = $conn->query("SELECT * FROM product WHERE ProductID='$productId'");
    $productData = $result->fetch_assoc();
    echo json_encode($productData);
}

$conn->close();
?>
