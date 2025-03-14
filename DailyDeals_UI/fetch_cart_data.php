<?php
session_start(); // Start the session

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

header('Content-Type: application/json');

$response = array();

// Check if email is stored in the session
if (isset($_SESSION['Email']) && !empty($_SESSION['Email'])) {
    $email = $_SESSION['Email']; // Get the email from session
} else {
    $response['error'] = 'Email is not stored in session.';
    echo json_encode($response);
    exit();
}

// Escape the email to prevent SQL injection
$email = $conn->real_escape_string($email);

// Fetch customer ID based on email
$query = "SELECT CID FROM customers WHERE email = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();

$customer = $result->fetch_assoc();

if ($customer) {
    $cid = $customer['CID'];

    // Fetch cart details
    $query = "SELECT * FROM cart WHERE CID = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $cid);
    $stmt->execute();
    $result = $stmt->get_result();

    $cart = $result->fetch_assoc();

    if ($cart) {
        $cartID = $cart['CartID'];

        // Fetch cart items
        $query = "SELECT ci.ProductID, ci.Quantity, p.Name, ci.Price, p.ImageURL 
                  FROM cartitem ci 
                  JOIN product p ON ci.ProductID = p.ProductID 
                  WHERE ci.CartID = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('i', $cartID);
        $stmt->execute();
        $result = $stmt->get_result();

        $cartItems = $result->fetch_all(MYSQLI_ASSOC);

        $response['cartID'] = $cartID;
        $response['cartItems'] = $cartItems;
    } else {
        $response['error'] = 'No cart found for this customer.';
    }
} else {
    $response['error'] = 'Customer not found.';
}

echo json_encode($response);

// Close the connection
$conn->close();
?>
