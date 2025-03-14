<?php
session_start();
include 'dbconnection.php';

if (!isset($_SESSION['Email'])) {
    header("Location: login.php");
    exit();
}

$orderId = $_GET['orderId'];
$totalAmount = $_GET['totalAmount'];

// Fetch the order details
$orderQuery = "SELECT p.Name, oi.Quantity, oi.PriceAtPurchase 
               FROM `orderitem` oi 
               JOIN `product` p ON oi.ProductID = p.ProductID 
               WHERE oi.OrderID = ?";
$stmt = $conn->prepare($orderQuery);
$stmt->bind_param('i', $orderId);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
</head>
<body>
    <h1>Order Summary</h1>
    <ul>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <li><?php echo $row['Name']; ?> - ₹<?php echo $row['PriceAtPurchase']; ?> x <?php echo $row['Quantity']; ?></li>
        <?php } ?>
    </ul>

    <h2>Total Amount: ₹<?php echo $totalAmount; ?></h2>

    <h3>Payment Details</h3>
    <form action="process_payment_Test.php" method="POST">
        <input type="hidden" name="orderId" value="<?php echo $orderId; ?>">
        <input type="hidden" name="totalAmount" value="<?php echo $totalAmount; ?>">

        <label for="paymentMethod">Payment Method:</label>
        <select name="paymentMethod" required>
            <option value="Credit Card">Credit Card</option>
            <option value="Debit Card">Debit Card</option>
            <option value="Net Banking">Net Banking</option>
        </select><br><br>

        <label for="paymentDetails">Enter Payment Details:</label>
        <input type="text" name="paymentDetails" required><br><br>

        <button type="submit">Submit Payment</button>
    </form>
</body>
</html>
