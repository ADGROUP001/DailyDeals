<?php // $servername = "localhost";
$username = "root";
$password = "";
$dbname = "DailyDeals";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize response array
$response = [];

// Check if ProductID is set
if (isset($_GET['ProductID'])) {
    $productId = $_GET['ProductID'];

    // Fetch product details
    $stmt = $conn->prepare("SELECT * FROM product WHERE ProductID = ?");
    $stmt->bind_param("i", $productId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetch data as associative array
        $response = $result->fetch_assoc();
    }
    $stmt->close();
}

// Close connection
$conn->close();

// Set content type to JSON and output response
header('Content-Type: application/json');
echo json_encode($response);
?>
