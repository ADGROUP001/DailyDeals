<?php
session_start();
include('dbconnection.php');

if (!isset($_SESSION['Email'])) {
    header("Location: login.php");
    exit();
}

$email = $_SESSION['Email'];

// Get the payment data from the request body
$data = json_decode(file_get_contents('php://input'), true);
$paymentToken = $data['paymentToken'];

// Validate and charge the payment through your payment gateway
try {
    // Example for Stripe; replace this with your payment gateway's code
    $gateway = new YourPaymentGateway(); // Instantiate your payment gateway object

    // Create a charge request
    $charge = $gateway->charge([
        'amount' => $_SESSION['totalAmount'] * 100, // Amount in cents for USD; adjust as needed for your currency
        'currency' => 'INR',
        'payment_method' => $paymentToken,
        'confirmation_method' => 'manual', // Adjust based on your payment flow
        'confirm' => true,
    ]);

    // Check if the charge was successful
    if ($charge->status === 'succeeded') {
        // Simulate successful payment for demo purposes
        $transactionID = $charge->id; // Use the ID from the payment gateway

        // Fetch customer and order details
        $query = "SELECT CID FROM customers WHERE Email = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $customer = $result->fetch_assoc();
        $customerID = $customer['CID'];

        // Fetch the most recent order ID
        $orderQuery = "SELECT OrderID FROM `order` WHERE CID = ? ORDER BY OrderDate DESC LIMIT 1";
        $stmtOrder = $conn->prepare($orderQuery);
        $stmtOrder->bind_param('s', $customerID);
        $stmtOrder->execute();
        $orderResult = $stmtOrder->get_result();
        $order = $orderResult->fetch_assoc();
        $orderID = $order['OrderID'];

        // Insert payment details into the `payment` table
        $paymentID = uniqid('Pay_');
        $paymentAmount = $_SESSION['totalAmount'];
        $paymentMethod = 'Google Pay';
        $paymentStatus = 'Completed';

        $paymentQuery = "INSERT INTO payment (PaymentID, OrderID, PaymentAmount, PaymentMethod, PaymentStatus, TransactionID) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($paymentQuery);
        $stmt->bind_param('sidsss', $paymentID, $orderID, $paymentAmount, $paymentMethod, $paymentStatus, $transactionID);
        $stmt->execute();

        // Update the order status to 'Shipped'
        $orderUpdateQuery = "UPDATE `order` SET OrderStatus = 'Shipped' WHERE OrderID = ?";
        $stmtOrderUpdate = $conn->prepare($orderUpdateQuery);
        $stmtOrderUpdate->bind_param('i', $orderID);
        $stmtOrderUpdate->execute();

        // Return success response
        echo json_encode(['success' => true]);
    } else {
        // Handle payment failure
        echo json_encode(['success' => false, 'message' => 'Payment failed']);
    }
} catch (Exception $e) {
    // Handle exceptions and log error
    error_log('Payment error: ' . $e->getMessage());
    echo json_encode(['success' => false, 'message' => 'Payment processing error']);
}
?>
