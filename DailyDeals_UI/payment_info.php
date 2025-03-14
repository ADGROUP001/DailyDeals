<?php
session_start();
include 'dbconnection.php'; // Database connection

// Retrieve OrderID from session or GET parameter
$orderId = isset($_SESSION['order_id']) ? $_SESSION['order_id'] : $_GET['order_id'];
if (!$orderId) {
    die('Order ID is missing.');
}

// Fetch order details
$stmt = $pdo->prepare("
    SELECT o.OrderID, o.TotalAmount, oi.ProductID, p.Name, oi.Quantity, oi.Price
    FROM `Order` o
    JOIN OrderItem oi ON o.OrderID = oi.OrderID
    JOIN Product p ON oi.ProductID = p.ProductID
    WHERE o.OrderID = ?
");
$stmt->execute([$orderId]);
$orderDetails = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Display order details
if (!$orderDetails) {
    die('No order details found.');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Information</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .order-summary { margin: 20px; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
        .order-summary h2 { margin-top: 0; }
        .order-summary table { width: 100%; border-collapse: collapse; }
        .order-summary table, .order-summary th, .order-summary td { border: 1px solid #ddd; }
        .order-summary th, .order-summary td { padding: 10px; text-align: left; }
        .google-pay-button { margin: 20px 0; }
    </style>
</head>
<body>
    <div class="order-summary">
        <h2>Order Summary</h2>
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $totalAmount = 0;
                foreach ($orderDetails as $item) {
                    $itemTotal = $item['Quantity'] * $item['Price'];
                    $totalAmount += $itemTotal;
                ?>
                    <tr>
                        <td><?php echo htmlspecialchars($item['Name']); ?></td>
                        <td><?php echo htmlspecialchars($item['Quantity']); ?></td>
                        <td>₹<?php echo htmlspecialchars(number_format($item['Price'], 2)); ?></td>
                        <td>₹<?php echo htmlspecialchars(number_format($itemTotal, 2)); ?></td>
                    </tr>
                <?php } ?>
                <tr>
                    <td colspan="3"><strong>Order Total</strong></td>
                    <td><strong>₹<?php echo number_format($totalAmount, 2); ?></strong></td>
                </tr>
            </tbody>
        </table>

        <div class="google-pay-button" id="container"></div>
    </div>

    <!-- Load Google Pay API -->
    <script async src="https://pay.google.com/gp/p/js/pay.js"></script>
    <script>
        // Create an instance of the Google Pay API client
        const paymentsClient = new google.payments.api.PaymentsClient({environment: 'TEST'});

        // Create a Google Pay button
        const button = paymentsClient.createButton({
            buttonColor: 'black',
            buttonType: 'pay',
            onClick: () => onGooglePayButtonClicked()
        });
        document.getElementById('container').appendChild(button);

        function onGooglePayButtonClicked() {
            const paymentDataRequest = {
                apiVersion: 2,
                apiVersionMinor: 0,
                allowedPaymentMethods: [{
                    type: 'CARD',
                    parameters: {
                        allowedAuthMethods: ['PAN_ONLY', 'CRYPTOGRAM_3DS'],
                        allowedCardNetworks: ['MASTERCARD', 'VISA']
                    },
                    tokenizationSpecification: {
                        type: 'PAYMENT_GATEWAY',
                        parameters: {
                            gateway: 'example',
                            gatewayMerchantId: 'exampleGatewayMerchantId'
                        }
                    }
                }],
                merchantInfo: {
                    merchantId: '12345678901234567890',
                    merchantName: 'Example Merchant'
                },
                transactionInfo: {
                    totalPriceStatus: 'FINAL',
                    totalPrice: '<?php echo number_format($totalAmount, 2); ?>',
                    currencyCode: 'INR'
                }
            };

            paymentsClient.loadPaymentData(paymentDataRequest)
                .then(function(paymentData) {
                    // Handle the response
                    console.log('Payment data received:', paymentData);

                    // TODO: Send the payment data to your server
                    // Example: Send the payment data to your server using AJAX
                    // $.post('process_payment.php', { paymentData: paymentData }, function(response) {
                    //     // Handle server response
                    // });
                })
                .catch(function(err) {
                    console.error('Error:', err);
                });
        }
    </script>
</body>
</html>
