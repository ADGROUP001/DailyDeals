<?php
session_start();
include('dbconnection.php'); // Include your database connection

// Check if the user is logged in
if (!isset($_SESSION['Email'])) {
    header("Location: login.php");
    exit();
}

$email = $_SESSION['Email'];

// Fetch customer details
$query = "SELECT CID FROM customers WHERE Email = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "Customer not found.";
    exit();
}

$customer = $result->fetch_assoc();
$customerID = $customer['CID'];
$cartQuery = "SELECT oi.ProductID, p.Name, oi.Quantity, oi.PriceAtPurchase, p.ImageURL 
              FROM orderitem oi
              JOIN product p ON oi.ProductID = p.ProductID
              WHERE oi.OrderID = (SELECT OrderID FROM `order` WHERE CID = ? ORDER BY OrderDate DESC LIMIT 1)";

$stmt = $conn->prepare($cartQuery);
$stmt->bind_param('s', $customerID);
$stmt->execute();
$cartItems = $stmt->get_result();

// Check if there are items in the cart
if ($cartItems->num_rows === 0) {
    echo "No items in cart.";
    exit();
}

// Calculate total price
$totalAmount = 0;
$items = [];
while ($item = $cartItems->fetch_assoc()) {
    $totalAmount += $item['Quantity'] * $item['PriceAtPurchase'];
    $items[] = $item;
}

    // Fetch the most recent OrderID
    $orderQuery = "SELECT OrderID FROM `order` WHERE CID = ? ORDER BY OrderDate DESC LIMIT 1";
    $stmtOrder = $conn->prepare($orderQuery);
    $stmtOrder->bind_param('s', $customerID);
    $stmtOrder->execute();
    $orderResult = $stmtOrder->get_result();
    $order = $orderResult->fetch_assoc();
    $orderID = $order['OrderID'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script async src="https://pay.google.com/gp/p/js/pay.js"></script>
    <title>Order Summary</title>
    <style>
        .list-group-item {
    transition: transform 0.2s; /* Smooth transition for hover effect */
}

.list-group-item:hover {
    transform: scale(1.02); /* Slightly enlarge on hover */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Add shadow on hover */
}

.text-primary {
    font-family: 'Arial', sans-serif; /* Change font family */
    font-size: 1.1rem; /* Increase font size */
}

.text-success {
    font-weight: bold; /* Bold for emphasis */
    font-size: 1.25rem; /* Larger font for total */
}

.badge {
    font-size: 1rem; /* Adjust badge size */
    padding: 10px 15px; /* More padding for badges */
}

h2 {
    font-family: 'Georgia', serif; /* Different font for heading */
    color: #343a40; /* Darker color for contrast */
}

h4 {
    font-size: 1.2rem; /* Larger size for total */
    margin-top: 20px; /* Space above the total */
}

        .payment-form {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        /* CSS to blur background when modal is open */
        body.modal-open {
            overflow: hidden; /* Prevent scrolling */
        }
        body.modal-open > div {
            filter: blur(5px); /* Apply blur effect */
        }
        .hidden {
            display: none; /* CSS class to hide elements */
        }
        .custom-margin {
    margin-left: 230px; /* Adds 200 pixels of left margin */
}
    </style>
</head>
<body>
   <div class="container mt-5">
    <h2 class="text-center mb-4">Order Summary</h2>
    <ul class="list-group">
        <?php foreach ($items as $index => $item): ?>
            <li class="list-group-item d-flex align-items-center justify-content-between 
                        <?= $index % 2 == 0 ? 'bg-light' : 'bg-white' ?> border rounded shadow-sm mb-2">
                <div class="d-flex align-items-center">
                    <img src="<?= htmlspecialchars($item['ImageURL']) ?>" 
                         alt="<?= htmlspecialchars($item['Name']) ?>" 
                         style="width: 60px; height: 60px; border-radius: 10px; margin-right: 40px; box-shadow: 0 2px 5px rgba(0,0,0,0.2);">
                    <div >
                        <strong class="text-primary" style="padding-right: 200dp"><?= htmlspecialchars($item['Name']) ?></strong> 
                        <span class="text-muted" style=" margin-right: 40px;">  Quantity - <?= htmlspecialchars($item['Quantity']) ?>  ₹<?= number_format($item['PriceAtPurchase'], 2) ?></span>
                    </div>
                </div>
                <span class="badge badge-success"  style=" margin-right: 40px;">₹<?= number_format($item['PriceAtPurchase'] * $item['Quantity'], 2) ?></span>
            </li>
        <?php endforeach; ?>
    </ul>
    <h4 class="mt-3 text-right text-success font-weight-bold">Total Amount: <span class="text-danger">₹<?= number_format($totalAmount, 2) ?></span></h4>
</div>

<!-- Add FontAwesome for Icons (Optional) -->


        <span class="payment-errors"></span>
        
        <!-- Pay Now Button -->
     <button type="button" class="btn btn-primary custom-margin" id="payNowBtn">Pay Now</button>

        
        <!-- Hidden Payment Form -->
        <div class="payment-form hidden" id="paymentForm">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h4><i class="fas fa-credit-card"></i> Payment Details</h4>
                </div>
                <div class="card-body">
                    <form action="submit.php" method="POST" id="paymentFrm">
                        <input type='hidden' name='OrderID' value="<?php echo $orderID; ?>" />
                        <input type='hidden' name='TotalAmount' value="<?php echo $totalAmount; ?>" />
                        
<!--                        <div class="form-group">
                            <label for="name"><i class="fas fa-user"></i> Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email"><i class="fas fa-envelope"></i> Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>-->
                        
                        <div class="form-group">
                            <label for="card_num"><i class="fas fa-credit-card"></i> Card Number</label>
                            <input type="text" class="form-control" id="card_num" name="card_num" placeholder="1234 1234 1234 1234" autocomplete="off" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="cvc"><i class="fas fa-lock"></i> CVC</label>
                            <input type="text" class="form-control" id="cvc" name="cvc" placeholder="CVC" autocomplete="off" required>
                        </div>
                        
                        <div class="form-row">
                            <div class="col">
                                <label for="exp_month"><i class="fas fa-calendar-alt"></i> Expiration Month</label>
                               <select id="exp_month" name="exp_month" class="form-control" required>
                        <?php for ($month = 1; $month <= 12; $month++): ?>
                            <option value="<?= str_pad($month, 2, '0', STR_PAD_LEFT) ?>"><?= str_pad($month, 2, '0', STR_PAD_LEFT) ?></option>
                        <?php endfor; ?>
                    </select>
                            </div>
                            <div class="col">
                                <label for="exp_year"><i class="fas fa-calendar-alt"></i> Expiration Year</label>
<select id="exp_year" name="exp_year" class="form-control" required>
                        <?php for ($year = date('Y'); $year <= date('Y') + 10; $year++): ?>
                            <option value="<?= $year ?>"><?= $year ?></option>
                        <?php endfor; ?>
                    </select>                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-success btn-block mt-4" id="payBtn">
                            <i class="fas fa-check-circle"></i> Submit Payment
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            // Handle Pay Now button click
            $('#payNowBtn').click(function() {
                $('#paymentForm').removeClass('hidden'); // Show the payment form
                $(this).hide(); // Hide the Pay Now button
            });
            
            // Handle modal close to remove blur (optional)
            $('#paymentModal').on('hidden.bs.modal', function () {
                $('body').removeClass('modal-open'); // Remove blur effect
            });
            
            // Existing code for Stripe payment processing...
        });
    </script>

    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript">
        // Set your publishable key
        Stripe.setPublishableKey('pk_test_51QBgZxG3pYw0XVsLhwm848dtAhJGkJvx6Ut5JiostsMfk7CtWbH6WyjaI6YE9NdBEK8wTE6heOutkxs5GbtO3hgK00k1YQvLdr');

        // Callback to handle the response from Stripe
        function stripeResponseHandler(status, response) {
            if (response.error) {
                // Enable the submit button
                $('#payBtn').removeAttr("disabled");
                // Display the errors on the form
                $(".payment-errors").html(response.error.message);
            } else {
                var form$ = $("#paymentFrm");
                // Get token id
                var token = response['id'];
                // Insert the token into the form
                form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
                // Submit form to the server
                form$.get(0).submit();
            }
        }

        $(document).ready(function() {
            // On form submit
            $("#paymentFrm").submit(function(event) {
                // Disable the submit button to prevent repeated clicks
                $('#payBtn').attr("disabled", "disabled");

                // Create single-use token to charge the user
                Stripe.createToken({
                    number: $('#card_num').val(),
                    cvc: $('#cvc').val(),
                    exp_month: $('#exp_month').val(),
                    exp_year: $('#exp_year').val()
                }, stripeResponseHandler);

                // Submit from callback
                return false;
            });
        });
    </script>
</body>
</html>
