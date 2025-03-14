<?php
// PaymentDetails.php
header('Content-Type: text/html; charset=UTF-8');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dailydeals";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize orderID
$orderID = $_GET['orderID'];

// Handle payment processing if form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $orderID = $_POST['orderID'];
    $paymentMethod = $_POST['paymentMethod'];
    $transactionID = $_POST['transactionID'];

    // Calculate the payment amount based on the order details
    $orderSql = "SELECT TotalAmount FROM `order` WHERE OrderID = '$orderID'";
    $result = $conn->query($orderSql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $paymentAmount = $row['TotalAmount']; // Fetch total amount for the order

        // Insert payment details into the 'payment' table
        $paymentSql = "INSERT INTO `payment` (OrderID, PaymentAmount, PaymentMethod, PaymentStatus, TransactionID) 
                       VALUES ('$orderID', '$paymentAmount', '$paymentMethod', 'Pending', '$transactionID')";
        
        if ($conn->query($paymentSql) === TRUE) {
            // Update the order status
            $updateOrderSql = "UPDATE `order` SET OrderStatus = 'Completed' WHERE OrderID = '$orderID'";
            $conn->query($updateOrderSql);
            
            // Success message
            echo "<script>alert('Payment processed successfully.'); window.location.href = 'success_page.php';</script>";
        } else {
            // Error message
            echo "<script>alert('Error processing payment: " . $conn->error . "');</script>";
        }
    } else {
        echo "<script>alert('Order not found.');</script>";
    }
}

// Fetch order details to display
$orderDetailsSql = "SELECT * FROM `order` WHERE OrderID = '$orderID'";
$orderResult = $conn->query($orderDetailsSql);
$orderDetails = $orderResult->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Details</title>
</head>
<body>
    <h1>Order Summary</h1>
    <h2>Order ID: <?php echo $orderDetails['OrderID']; ?></h2>
    <p>Total Amount: ₹<?php echo $orderDetails['TotalAmount']; ?></p>

    <form action="" method="POST">
        <input type="hidden" name="orderID" value="<?php echo $orderID; ?>">
        <label for="paymentMethod">Payment Method:</label>
        <select name="paymentMethod" id="paymentMethod" required>
            <option value="Credit Card">Credit Card</option>
            <option value="PayPal">PayPal</option>
            <option value="Cash on Delivery">Cash on Delivery</option>
        </select>
        <br>
        <label for="transactionID">Transaction ID:</label>
        <input type="text" name="transactionID" id="transactionID" required>
        <br>
        <button type="submit">Submit Payment</button>
    </form>

    <h3>Order Items</h3>
    <table border="1">
        <tr>
            <th>Product ID</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
        <?php
        // Fetch and display order items
        $orderItemsSql = "SELECT * FROM `orderitem` WHERE OrderID = '$orderID'";
        $orderItemsResult = $conn->query($orderItemsSql);

        while ($item = $orderItemsResult->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $item['ProductID'] . "</td>";
            echo "<td>" . $item['Quantity'] . "</td>";
            echo "<td>₹" . $item['PriceAtPurchase'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
// Close the connection
$conn->close();
?>
