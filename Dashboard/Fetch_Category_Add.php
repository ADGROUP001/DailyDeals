<?php
header('Content-Type: application/json');

// Database connection details
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

// Fetch categories from the database
$sql = "SELECT CategoryID, Name AS CategoryName FROM category";
$result = $conn->query($sql);

$categories = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $categories[] = [
            'id' => htmlspecialchars($row['CategoryID'], ENT_QUOTES, 'UTF-8'),
            'name' => htmlspecialchars($row['CategoryName'], ENT_QUOTES, 'UTF-8')
        ];
    }
}

// Close the database connection
$conn->close();

// Return categories as JSON
echo json_encode($categories);
?>
