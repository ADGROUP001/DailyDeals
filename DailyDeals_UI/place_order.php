<?php
session_start();
header('Content-Type: application/json'); // Set content type to JSON

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dailydeals";

try {
    // Create a new PDO instance for database connection
    $dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    // If the connection fails, return an error response
    echo json_encode([
        'success' => false,
        'message' => 'Database connection failed: ' . $e->getMessage()
    ]);
    exit;
}

// Check if request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $cartID = $_POST['cartID'];
    $cartItems = json_decode($_POST['cartItems'], true); // Decode JSON string to PHP array
    $totalAmount = $_POST['totalAmount'];

    try {
        // Validate total amount
        if (!is_numeric($totalAmount) || $totalAmount < 0) {
            throw new Exception('Invalid total amount.');
        }

        // Fetch the customer's ID using email
        $stmt = $pdo->prepare("SELECT CID FROM customers WHERE Email = ?");
        $stmt->execute([$email]);
        $customer = $stmt->fetch();
        if (!$customer) {
            throw new Exception('Customer not found.');
        }
        $CID = $customer['CID'];

        // Check stock levels for each cart item
        foreach ($cartItems as $item) {
            if (isset($item['ProductID'], $item['Quantity'])) {
                $stmt = $pdo->prepare("SELECT StockQuantity FROM product WHERE ProductID = ?");
                $stmt->execute([$item['ProductID']]);
                $product = $stmt->fetch();
                if (!$product) {
                    throw new Exception('Product not found.');
                }
                if ($item['Quantity'] > $product['StockQuantity']) {
                    throw new Exception('Not enough stock for product ID ' . $item['ProductID']);
                }
            } else {
                throw new Exception('Missing ProductID or Quantity in cart item.');
            }
        }

        // Insert the order into the database
       // Insert the order into the database including the CartID
$stmt = $pdo->prepare("INSERT INTO `order` (CID, OrderDate, TotalAmount, CartID) VALUES (?, NOW(), ?, ?)");
$stmt->execute([$CID, $totalAmount, $cartID]); // Pass the $cartID parameter
  
        $orderId = $pdo->lastInsertId();

        // Insert order items and update stock levels
        $stmtOrderItem = $pdo->prepare("INSERT INTO `orderItem` (OrderID, ProductID, Quantity, PriceAtPurchase) VALUES (?, ?, ?, ?)");
        $stmtUpdateStock = $pdo->prepare("UPDATE product SET StockQuantity = StockQuantity - ? WHERE ProductID = ?");

        foreach ($cartItems as $item) {
            if (isset($item['ProductID'], $item['Quantity'], $item['Price'])) {
                // Insert order item
                $stmtOrderItem->execute([$orderId, $item['ProductID'], $item['Quantity'], $item['Price']]);
                // Update stock quantity
                $stmtUpdateStock->execute([$item['Quantity'], $item['ProductID']]);
            }
        }

        // Clear the cart session
        unset($_SESSION['cart_items']);
        $_SESSION['total_amount'] = 0;

        // Send JSON response indicating success
        echo json_encode([
            'success' => true,
            'orderID' => $orderId
        ]);
        exit;

    } catch (PDOException $e) {
        // Capture any database errors and return them in the response
        echo json_encode([
            'success' => false,
            'message' => 'Database error: ' . $e->getMessage()
        ]);
        exit;
    } catch (Exception $e) {
        // Handle other exceptions
        echo json_encode([
            'success' => false,
            'message' => $e->getMessage()
        ]);
        exit;
    }
} else {
    // Invalid request method
    echo json_encode([
        'success' => false,
        'message' => 'Invalid request method.'
    ]);
    exit;
}
?>
