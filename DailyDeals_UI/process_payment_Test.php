<?php
session_start();
include 'dbconnection.php';

$orderId = $_POST['orderId'];
$totalAmount = $_POST['totalAmount'];
$paymentMethod = $_POST['paymentMethod'];
$paymentDetails = $_POST['paymentDetails'];

// Insert payment details into `payment` table
$paymentInsertQuery = "INSERT INTO `payment` (OrderID, PaymentAmount, PaymentMethod, PaymentStatus, PaymentDate) 
                       VALUES (?, ?, ?, 'Completed', NOW())";
$stmt = $conn->prepare($paymentInsertQuery);
$stmt->bind_param('ids', $orderId, $totalAmount, $paymentMethod);

if ($stmt->execute()) {
    // Payment successful, redirect to success page
    header("Location: success.php");
    exit();
} else {
    echo "Error: Payment failed.";
}
?>
