<?php
$dbHost     = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName     = 'dailydeals';

//Connect with the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

//Display error if failed to connect
if ($db->connect_errno) {
    printf("Connect failed: %s\n", $db->connect_error);
}
// Check whether stripe token is not empty
if (!empty($_POST['stripeToken'])) {
    // Get token, card and user info from the form
    $token = $_POST['stripeToken'];
//    $name = $_POST['name'];
    $orderID =  $_POST['OrderID'];
    $email = "projectit6789@gmail.com";
    $totalAmount = $_POST['TotalAmount'];
    $card_num = $_POST['card_num'];
    $card_cvc = $_POST['cvc'];
    $card_exp_month = $_POST['exp_month'];
    $card_exp_year = $_POST['exp_year'];
    
    // Include Stripe PHP library
    require_once('stripe-php/init.php');
    
    // Set API key
    $stripe = array(
        "secret_key" => "sk_test_51QBgZxG3pYw0XVsLxWeN4vLCFkvxVsdnMwkFYgntnLxerN0fUosaEebck0PpKbYXbiVX7mGjZKKmnByYaDPHbweN00WUQfLgHg",
        "publishable_key" => "pk_test_51QBgZxG3pYw0XVsLhwm848dtAhJGkJvx6Ut5JiostsMfk7CtWbH6WyjaI6YE9NdBEK8wTE6heOutkxs5GbtO3hgK00k1YQvLdr"
    );
    
    \Stripe\Stripe::setApiKey($stripe['secret_key']);
    
    // Add customer to Stripe
    $customer = \Stripe\Customer::create(array(
        'email' => $email,
        'source' => $token
    ));
    
    // Item information
    $itemName = "Premium Script CodexWorld";
    $itemNumber = "PS123456";
    $itemPrice = 55;
    $currency = "usd";
    
     // Example order ID
    
    // Charge a credit or a debit card
    $charge = \Stripe\Charge::create(array(
        'customer' => $customer->id,
        'amount' => $totalAmount,  // Stripe uses cents
        'currency' => $currency,
        'description' => $itemName,
        'metadata' => array(
            'order_id' => $orderID
        )
        
    ));
    
    // Retrieve charge details
    $chargeJson = $charge->jsonSerialize();

    // Check whether the charge is successful
    if ($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1) {
        // Order details
        $amount = $totalAmount; // Convert back to dollars
        $balance_transaction = $chargeJson['balance_transaction'];
        $currency = $chargeJson['currency'];
        $paymentStatus = 'Completed'; // Store 'Completed' in a variable
        $status = $chargeJson['status'];
        $date = date("Y-m-d H:i:s");
        
        // Payment table insertion

    // Generate a new PaymentID in the format Pay_01, Pay_02, etc.
    $paymentCountQuery = "SELECT COUNT(*) as paymentCount FROM payment";
    $resultCount = $db->query($paymentCountQuery);
    $countRow = $resultCount->fetch_assoc();
    $paymentNumber = $countRow['paymentCount'] + 1;
    $paymentID = 'Pay_' . str_pad($paymentNumber, 2, '0', STR_PAD_LEFT); // Generates Pay_01, Pay_02, etc.
        $paymentMethod = "Credit Card";  // Hardcoded for now
        
        // Corrected SQL query
        $paymentQuery = "INSERT INTO payment (PaymentID, OrderID, PaymentAmount, PaymentMethod, PaymentStatus, TransactionID) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $db->prepare($paymentQuery);
        
        // Bind parameters (changed to six placeholders)
        $stmt->bind_param('sidsss', $paymentID, $orderID, $amount, $paymentMethod, $paymentStatus, $balance_transaction);
        $stmt->execute();
        
        // Update the order status
        $orderStatusQuery = "UPDATE `order` SET OrderStatus = 'Shipped' WHERE OrderID = ?";
        $stmtUpdate = $db->prepare($orderStatusQuery);
        $stmtUpdate->bind_param('i', $orderID);

        if (!$stmtUpdate->execute()) {
            throw new Exception($stmtUpdate->error);
        }

        
// Get CID based on the OrderID
$orderQuery = "SELECT CID FROM `order` WHERE OrderID = ?";
$orderStmt = $db->prepare($orderQuery);
$orderStmt->bind_param('i', $orderID); // Assuming OrderID is an integer
$orderStmt->execute();
$orderStmt->bind_result($cid);
$orderStmt->fetch();
$orderStmt->close(); // Close the statement after fetching
        // Check if payment insertion was successful
// After the payment insertion check
if ($stmt->affected_rows > 0) {
    $statusMsg = "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Payment Confirmation</title>
        <style>
            body {
                font-family: 'Arial', sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            .container {
                background-color: white;
                border-radius: 10px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
                padding: 40px;
                max-width: 500px;
                text-align: center;
            }
            h1 {
                color: #4CAF50;
                font-size: 2em;
                margin-bottom: 10px;
            }
            p {
                color: #333;
                font-size: 1.1em;
                margin-bottom: 20px;
            }
            .transaction-details {
                background-color: #f8f8f8;
                padding: 15px;
                border-radius: 8px;
                margin-bottom: 20px;
                text-align: left;
            }
            .transaction-details p {
                margin: 5px 0;
                font-size: 1em;
                color: #555;
            }
            .btn {
                background-color: #4CAF50;
                color: white;
                padding: 10px 20px;
                text-decoration: none;
                border-radius: 5px;
                transition: background-color 0.3s ease;
                margin-top: 10px;
            }
            .btn:hover {
                background-color: #45a049;
            }
            .btn-primary {
                background-color: #007bff;
            }
            .btn-primary:hover {
                background-color: #0056b3;
            }
            #feedbackForm {
                display: none; /* Initially hide the feedback form */
            }
        </style>
        <script>
            // Show the feedback form after 20 seconds
            setTimeout(function() {
                document.getElementById('feedbackForm').style.display = 'block';
            }, 20000); // 20000 milliseconds = 20 seconds
        </script>
    </head>
    <body>
        <div class='container'>
            <h1>Payment Successful!</h1>
            <p>Your payment has been processed successfully.</p>
            <div class='transaction-details'>
                <p><strong>Transaction ID:</strong> " . htmlspecialchars($balance_transaction) . "</p>
                <p><strong>Total Amount:</strong> ₹" . number_format($totalAmount, 2) . " Rupees</p>
                <p><strong>Order Status:</strong> Shipped</p>
            </div>
            <a href='Homepage.php' class='btn btn-primary'>Go Back to Homepage</a>
            <a href='BillGenerate.php?OrderID=" . htmlspecialchars($orderID) . "' class='btn'>Generate Invoice</a> <!-- Generate Invoice Button -->
            
            <!-- Feedback Form -->
            <div id='feedbackForm'>
                <h2>We value your feedback!</h2>
               <form action='' method='POST'>
        <input type='hidden' name='OrderID' value='" . htmlspecialchars($orderID) . "'>
                <input type='hidden' name='CID' value='" . htmlspecialchars($cid) . "'> <!-- Added CID -->

    <!-- Star Rating Section -->
    <label for='rating'>Rate your experience:</label>
    <div class='star-rating'>
        <input type='radio' id='5-stars' name='rating' value='5' />
        <label for='5-stars' class='star'>&#9733;</label>
        <input type='radio' id='4-stars' name='rating' value='4' />
        <label for='4-stars' class='star'>&#9733;</label>
        <input type='radio' id='3-stars' name='rating' value='3' />
        <label for='3-stars' class='star'>&#9733;</label>
        <input type='radio' id='2-stars' name='rating' value='2' />
        <label for='2-stars' class='star'>&#9733;</label>
        <input type='radio' id='1-star' name='rating' value='1' />
        <label for='1-star' class='star'>&#9733;</label>
    </div>

    <!-- Textarea Section -->
    <label for='feedback'>Your feedback:</label>
    <textarea name='feedback' id='feedback' rows='4' cols='50' placeholder='Tell us about your experience...'></textarea>
    
    <br>
    <button type='submit' class='btn'>Submit Feedback</button>
</form>


<!-- Optional CSS for Star Rating -->
<style>
    .star-rating {
        direction: rtl;
        display: inline-block;
        font-size: 2rem;
        padding: 10px 0;
    }
    .star-rating input[type='radio'] {
        display: none;
    }
    .star-rating label {
        color: #ddd;
        font-size: 2em;
        cursor: pointer;
    }
    .star-rating input:checked ~ label {
        color: #FFD700;
    }
    .star-rating label:hover,
    .star-rating label:hover ~ label {
        color: #FFD700;
    }
</style>

            </div>
        </div>
    </body>
    </html>
    ";
        } else {
            $statusMsg = "Payment insertion failed.";
        }
    } else {
        $statusMsg = "Transaction has been failed.";
    }
} else {
//    $statusMsg = "Form submission error.......";
}

// Show success or error message
echo $statusMsg;
// Handle feedback submission if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['feedback']) && !empty($_POST['rating'])) {
    $orderID = $_POST['OrderID']; // Get OrderID from POST data
    $cid = $_POST['CID']; // Get CID from POST data
    $rating = $_POST['rating'];
    $feedback = $_POST['feedback'];

    // Insert feedback into the database
    $feedbackQuery = "INSERT INTO feedback (OrderID, Rating, Comments, CreatedAt) VALUES (?, ?, ?, NOW())";
    $feedbackStmt = $db->prepare($feedbackQuery);
    $feedbackStmt->bind_param('sis', $orderID, $rating, $feedback);
    $feedbackStmt->execute();

    // Check if feedback insertion was successful
    if ($feedbackStmt->affected_rows > 0) {
        echo "<script>
            alert('Thank you for your feedback!');
            window.location.href = 'Homepage.php'; // Redirect to Homepage.php
          </script>";
        
    } else {
        echo "<script>alert('Failed to submit feedback. Please try again.');</script>";
    }
}

?>
