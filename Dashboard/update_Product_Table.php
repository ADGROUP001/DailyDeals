<?php
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

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize input data
    $productID = isset($_POST['ProductID']) ? intval($_POST['ProductID']) : 0;
    $productName = htmlspecialchars($_POST['product_name'], ENT_QUOTES, 'UTF-8');
    $description = htmlspecialchars($_POST['description'], ENT_QUOTES, 'UTF-8');
    $categoryId = isset($_POST['category_id']) ? intval($_POST['category_id']) : null;
    $price = floatval($_POST['price']);
    $stockQuantity = isset($_POST['stock_quantity']) ? intval($_POST['stock_quantity']) : null;
    $isActive = isset($_POST['active']) ? 'Active' : 'Inactive';

    // Handle file upload
    $imageUrl = null;
    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/';
        $uploadFile = $uploadDir . basename($_FILES['image']['name']);

        // Create directory if not exists
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        // Check if file was moved successfully
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
            $imageUrl = htmlspecialchars($uploadFile, ENT_QUOTES, 'UTF-8');
        } else {
            echo "Error moving uploaded file.<br>";
            exit;
        }
    } else {
        if ($_FILES['image']['error'] != UPLOAD_ERR_NO_FILE) {
            echo "File upload error: " . $_FILES['image']['error'] . "<br>";
            exit;
        }
    }

    // Prepare and execute the update query
    $sql = "UPDATE product 
            SET Name = ?, Description = ?, CategoryID = ?, Price = ?, ImageURL = ?, StockQuantity = ?, IsActive = ? 
            WHERE ProductID = ?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssisdisi", $productName, $description, $categoryId, $price, $imageUrl, $stockQuantity, $isActive, $productID);
        if ($stmt->execute()) {
            echo "Product updated successfully!";
        } else {
            echo "Error executing statement: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
