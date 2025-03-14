<?php
session_start();

if (!isset($_SESSION['Email'])) {
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Confirmation</title>
</head>
<body>
    <h1>Payment Successful</h1>
    <p>Your payment has been processed successfully.</p>
    <a href="order_history.php">View your order history</a>
</body>
</html>
