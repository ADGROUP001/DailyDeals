<?php
include_once 'dbconnection.php'; // Ensure this file contains your DB connection

// Check whether the Stripe token is not empty
if (!empty($_POST['stripeToken'])) {
    // Get token, card, and user info from the form
    $token  = $_POST['stripeToken'];
    $email = $_SESSION['Email'];  // Assuming email is stored in session
//    $OrderID = $_POST['OrderID'];
//     $totalAmount = $_POST['TotalAmount'];

    $card_num = $_POST['card_num'];
    $card_cvc = $_POST['cvc'];
    $card_exp_month = $_POST['exp_month'];
    $card_exp_year = $_POST['exp_year'];

    // Include Stripe PHP library
    require_once('stripe-php/init.php');

    // Set API key
    \Stripe\Stripe::setApiKey('sk_test_51QBf1bEgRBp0AIR3FAu85Qa49JYXCPagWQTBF6sCGYXXIgLwDBVV9toOeZD8lXPHUdJ6X5BqUibvJRgiDqxoBX2e00kUHxcJE9');

    // Add customer to Stripe
    $customer = \Stripe\Customer::create(array(
        'email' => $email,
        'source' => $token
    ));

    // Item information
    $itemName = "Premium Script CodexWorld";
    $itemNumber = "PS123456";
    $itemPrice = 55 * 100; // Stripe works in cents, so $55 is 5500
    $currency = "usd";

    // Charge a credit or debit card
    $charge = \Stripe\Charge::create(array(
        'customer' => $customer->id,
        'amount' => $itemPrice,
        'currency' => $currency,
        'description' => $itemName,
        'metadata' => array(
            'order_id' => $OrderID
        )
    ));

    // Retrieve charge details
    $chargeJson = $charge->jsonSerialize();

    // Check whether the charge is successful
    if ($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1) {
        // Payment details
        $amount =100; // Convert cents to dollars
        $balance_transaction = $chargeJson['balance_transaction'];
        $status = $chargeJson['status'];
        $date = date("Y-m-d H:i:s");

        // Generate a new PaymentID (e.g., Pay_01, Pay_02, etc.)
        $paymentCountQuery = "SELECT COUNT(*) as paymentCount FROM payment";
        $resultCount = $conn->query($paymentCountQuery);
        $countRow = $resultCount->fetch_assoc();
        $paymentNumber = $countRow['paymentCount'] + 1;
        $paymentID = 'Pay_' . str_pad($paymentNumber, 2, '0', STR_PAD_LEFT);  // Generates Pay_01, Pay_02, etc.

        try {
            // Store the payment details in the database
            $paymentQuery = "INSERT INTO payment (PaymentID, OrderID, PaymentAmount, PaymentMethod, PaymentStatus, TransactionID) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($paymentQuery);
            $paymentMethod = 'Card'; // Assuming it's a card payment
            $transactionID = $balance_transaction;
            $stmt->bind_param('sidsss', $paymentID, $OrderID, $amount, $paymentMethod, $status, $transactionID);

            if (!$stmt->execute()) {
                throw new Exception($stmt->error);
            }

            // Update the order status
            $orderStatusQuery = "UPDATE `order` SET OrderStatus = 'Shipped' WHERE OrderID = ?";
            $stmtUpdate = $conn->prepare($orderStatusQuery);
            $stmtUpdate->bind_param('i', $OrderID);

            if ($stmtUpdate->execute()) {
                $statusMsg = "";
//                $statusMsg = "<!DOCTYPE html>
//        <html lang='en'>
//        <head>
//            <meta charset='UTF-8'>
//            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
//            <title>Payment Confirmation</title>
//            <style>
//        body {
//            font-family: 'Arial', sans-serif;
//            background-color: #f4f4f4;
//            margin: 0;
//            padding: 0;
//            display: flex;
//            justify-content: center;
//            align-items: center;
//            height: 100vh;
//        }
//        .container {
//            background-color: white;
//            border-radius: 10px;
//            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
//            padding: 40px;
//            max-width: 500px;
//            text-align: center;
//        }
//        h1 {
//            color: #4CAF50;
//            font-size: 2em;
//            margin-bottom: 10px;
//        }
//        p {
//            color: #333;
//            font-size: 1.1em;
//            margin-bottom: 20px;
//        }
//        .transaction-details {
//            background-color: #f8f8f8;
//            padding: 15px;
//            border-radius: 8px;
//            margin-bottom: 20px;
//            text-align: left;
//        }
//        .transaction-details p {
//            margin: 5px 0;
//            font-size: 1em;
//            color: #555;
//        }
//        .btn {
//            background-color: #4CAF50;
//            color: white;
//            padding: 10px 20px;
//            text-decoration: none;
//            border-radius: 5px;
//            transition: background-color 0.3s ease;
//            margin-top: 10px;
//        }
//        .btn:hover {
//            background-color: #45a049;
//        }
//        .btn-primary {
//            background-color: #007bff;
//        }
//        .btn-primary:hover {
//            background-color: #0056b3;
//        }
//    </style>
//        </head>
//        <body>
//            <div class='container'>
//                <h1>Payment Successful!</h1>
//                <p>Your payment has been processed successfully.</p>
//                <div class='transaction-details'>
//                    <p><strong>Transaction ID:</strong> " . htmlspecialchars($transactionID) . "</p>
//                    <p><strong>Total Amount:</strong> ₹" . number_format($totalAmount, 2) . " Rupees</p>
//                    <p><strong>Order Status:</strong> Shipped</p>
//                </div>
//                <a href='Homepage.php' class='btn btn-primary'>Go Back to Homepage</a>
//               <a href='BillGenerate.php?OrderID=" . htmlspecialchars($orderID) . "' class='btn'>Generate Invoice</a> <!-- Generate Invoice Button -->
//            </div>
//        </body>
//        </html>";
            } else {
                throw new Exception($stmtUpdate->error);
            }
        } catch (Exception $e) {
            $statusMsg = "Transaction failed: " . $e->getMessage();
        }
    } else {
        $statusMsg = "Transaction failed.";
    }
} else {
    $statusMsg = "Form submission error.";
}

// Show success or error message
echo $statusMsg;
?>
