<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dailydeals";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die(json_encode(['success' => false, 'message' => 'Database connection failed']));
}

// Get product ID and unit from query parameters
$productID = isset($_GET['productID']) ? intval($_GET['productID']) : 0;
$unit = isset($_GET['unit']) ? $conn->real_escape_string($_GET['unit']) : '';

// Validate inputs
if ($productID > 0 && !empty($unit)) {
    // Fetch unit ID
    $unitQuery = "SELECT unit_id FROM units WHERE name = '$unit'";
    $unitResult = $conn->query($unitQuery);

    if ($unitResult && $unitResult->num_rows > 0) {
        $unitRow = $unitResult->fetch_assoc();
        $unitID = $unitRow['unit_id'];

        // Fetch price
        $priceQuery = "SELECT price FROM product_prices WHERE productID = $productID AND unit_id = $unitID";
        $priceResult = $conn->query($priceQuery);

        if ($priceResult && $priceResult->num_rows > 0) {
            $priceRow = $priceResult->fetch_assoc();
            echo json_encode([
                'success' => true,
                'price' => $priceRow['price'],
                'unit_id' => $unitID  // Include unit_id in the response
            ]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Price not found']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Unit not found']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid product or unit']);
}

$conn->close();
?>
