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
//$action = $_POST['action'] ?? null;
//
//$productID = $_POST['productID'] ?? null;
//$quantity = $_POST['quantity'] ?? null;
//$Price= $_POST['productPrice'] ?? null;
//$email = $_POST['email'] ?? null;

// Static data for testing
$action = "add"; // Example action
$productID = 1; // Example product ID
$quantity = 1;   // Example quantity
$price = 19.99;  // Example price
$email = "projectit6789@gmail.com"; // Example email

// Fetch CID based on email
$sql = "SELECT CID FROM customers WHERE Email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $CID = $row['CID'];
} else {
    die("Customer not found for the provided email.");
}

// Fetch CartID based on CID
$sql = "SELECT CartID FROM cart WHERE CID = '$CID'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $cartID = $row['CartID'];
} else {
    // Insert a new record into the cart table
    $sql = "INSERT INTO cart (CID, TotalAmount) VALUES ('$CID', 0)";
    if ($conn->query($sql) === TRUE) {
        $cartID = $conn->insert_id; // Get the newly created CartID
    } else {
        die("Failed to create a new cart: " . $conn->error);
    }
}

if ($action) {
    if ($action == 'add') {
        // Add item to cart
        $sql = "INSERT INTO cartitem (CartID, ProductID, Quantity, Price)
                VALUES (?, ?, ?, ?)
                ON DUPLICATE KEY UPDATE Quantity = Quantity + VALUES(Quantity), Price = VALUES(Price)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iiid", $cartID, $productID, $quantity, $price);
        $stmt->execute();

        // Update TotalAmount in Cart table
        $sql = "UPDATE cart
                SET TotalAmount = (SELECT SUM(p.Price * ci.Quantity)
                                   FROM cartitem ci
                                   JOIN product p ON ci.ProductID = p.ProductID
                                   WHERE ci.CartID = ?)
                WHERE CartID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $cartID, $cartID);
        $stmt->execute();
    }

    if ($action == 'update') {
        // Update item quantity and price in cart
        $sql = "UPDATE cartitem
                SET Quantity = ?, Price = ?
                WHERE CartID = ? AND ProductID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("idii", $quantity, $price, $cartID, $productID);
        $stmt->execute();

        // Update TotalAmount in Cart table
        $sql = "UPDATE cart
                SET TotalAmount = (SELECT SUM(p.Price * ci.Quantity)
                                   FROM cartitem ci
                                   JOIN product p ON ci.ProductID = p.ProductID
                                   WHERE ci.CartID = ?)
                WHERE CartID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $cartID, $cartID);
        $stmt->execute();
    }

    if ($action == 'remove') {
        // Remove item from cart
        $sql = "DELETE FROM cartitem
                WHERE CartID = ? AND ProductID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $cartID, $productID);
        $stmt->execute();

        // Update TotalAmount in Cart table
        $sql = "UPDATE cart
                SET TotalAmount = (SELECT SUM(p.Price * ci.Quantity)
                                   FROM cartitem ci
                                   JOIN product p ON ci.ProductID = p.ProductID
                                   WHERE ci.CartID = ?)
                WHERE CartID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $cartID, $cartID);
        $stmt->execute();
    }

    if ($action == 'clear') {
        // Clear the entire cart
        $sql = "DELETE FROM cartitem
                WHERE CartID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $cartID);
        $stmt->execute();

        // Reset TotalAmount to 0
        $sql = "UPDATE cart
                SET TotalAmount = 0
                WHERE CartID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $cartID);
        $stmt->execute();
    }

    echo "Cart updated successfully!";
} else {
    echo "No action specified.";
}

$conn->close();
?>
