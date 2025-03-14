<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dailydeals";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get POST data
$action = $_POST['action'] ?? null;
$productID = $_POST['productID'] ?? null;
$cartID = $_POST['cartID'] ?? null;
$quantity = $_POST['quantity'] ?? null;
$price = $_POST['price'] ?? null;
$unitID = $_POST['unitid'] ?? null; // Make sure the field name matches the JavaScript

$email = "projectit6789@gmail.com"; // Placeholder email for testing

// Check for required parameters
if (!$action || !$productID || !$email) {
    echo "Required parameters are missing.";
    exit;
}

// Fetch CID based on email
$sql = "SELECT CID FROM customers WHERE Email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $CID = $row['CID'];
} else {
    echo "Customer not found for the provided email.";
    $conn->close();
    exit;
}

// Fetch CartID based on CID
$sql = "SELECT CartID FROM cart WHERE CID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $CID);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $cartID = $row['CartID'];
} else {
    // Insert a new record into the cart table
    $sql = "INSERT INTO cart (CID, TotalAmount) VALUES (?, 0)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $CID);
    if ($stmt->execute()) {
        $cartID = $conn->insert_id; // Get the newly created CartID
    } else {
        echo "Failed to create a new cart: " . $stmt->error;
        $conn->close();
        exit;
    }
}

// Handle actions
if ($action == 'add') {
    $sql = "INSERT INTO cartitem (CartID, ProductID, Quantity, Price, unit_id)
            VALUES (?, ?, ?, ?, ?)
            ON DUPLICATE KEY UPDATE 
                Quantity = Quantity + VALUES(Quantity), 
                Price = VALUES(Price), 
                unit_id = VALUES(unit_id)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iiidi", $cartID, $productID, $quantity, $price, $unitID);
    if (!$stmt->execute()) {
        echo "Failed to add item to cart: " . $stmt->error;
        $conn->close();
        exit;
    }
} elseif ($action == 'update') {
    $sql = "UPDATE cartitem
            SET Quantity = ?, Price = ?, unit_id = ?
            WHERE CartID = ? AND ProductID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("idiii", $quantity, $price, $unitID, $cartID, $productID);
    if (!$stmt->execute()) {
        echo "Failed to update cart item: " . $stmt->error;
        $conn->close();
        exit;
    }
} elseif ($action == 'remove') {
    $sql = "DELETE FROM cartitem
            WHERE CartID = ? AND ProductID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $cartID, $productID);
    if (!$stmt->execute()) {
        echo "Failed to remove item from cart: " . $stmt->error;
        $conn->close();
        exit;
    }
} elseif ($action == 'clear') {
    $sql = "DELETE FROM cartitem WHERE CartID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $cartID);
    if (!$stmt->execute()) {
        echo "Failed to clear cart: " . $stmt->error;
        $conn->close();
        exit;
    }
}

// Update TotalAmount in Cart table
$sql = "UPDATE cart
        SET TotalAmount = (SELECT COALESCE(SUM(Price * Quantity), 0) FROM cartitem WHERE CartID = ?)
        WHERE CartID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $cartID, $cartID);
if (!$stmt->execute()) {
    echo "Failed to update total amount: " . $stmt->error;
    $conn->close();
    exit;
}

echo "Cart updated successfully!";
$conn->close();
?>
