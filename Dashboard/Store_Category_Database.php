<?php
// Establish database connection
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

// Create category table
$sql_create_category_table = "CREATE TABLE IF NOT EXISTS category (
    id INT AUTO_INCREMENT PRIMARY KEY,
    theme_ids VARCHAR(255),
    name VARCHAR(255) NOT NULL,
    description TEXT,
    parent_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql_create_category_table) === TRUE) {
} else {
    echo "Error creating category table: " . $conn->error;
}

// Create brands table
$sql_create_brands_table = "CREATE TABLE IF NOT EXISTS brand (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
)";

if ($conn->query($sql_create_brands_table) === TRUE) {
} else {
    echo "Error creating brands table: " . $conn->error;
}

// Create category_brand table
$sql_create_category_brand_table = "CREATE TABLE IF NOT EXISTS category_brand (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_id INT,
    brand_id INT,
    FOREIGN KEY (category_id) REFERENCES category(id) ON DELETE CASCADE,
    FOREIGN KEY (brand_id) REFERENCES brands(id) ON DELETE CASCADE
)";

if ($conn->query($sql_create_category_brand_table) === TRUE) {
} else {
    echo "Error creating category_brand table: " . $conn->error;
}

// Insert data into tables if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare data for insertion
    $theme_ids = $conn->real_escape_string(implode(',', $_POST['theme_ids']));
    $name = $conn->real_escape_string($_POST['name']);
    $description = $conn->real_escape_string($_POST['description']);
    $parent_id = $conn->real_escape_string($_POST['parent_id']);
    $brand_ids = isset($_POST['brand_ids']) ? $_POST['brand_ids'] : [];

    // Insert data into the category table
    $sql_insert_category = "INSERT INTO category (theme_ids, name, description, parent_id) VALUES ('$theme_ids', '$name', '$description', '$parent_id')";
    if ($conn->query($sql_insert_category) === TRUE) {
        // Get the ID of the newly inserted category
        $category_id = $conn->insert_id;

        // Insert selected brands into category_brand table
        foreach ($brand_ids as $brand_id) {
            // Check if the brand_id exists in the brands table
            $sql_check_brand = "SELECT id FROM brands WHERE id = '$brand_id'";
            $result = $conn->query($sql_check_brand);
            if ($result->num_rows > 0) {
                $brand_id = $conn->real_escape_string($brand_id);
                $sql_insert_category_brand = "INSERT INTO category_brand (category_id, brand_id) VALUES ('$category_id', '$brand_id')";
                $conn->query($sql_insert_category_brand);
            } else {
                echo "Error: Brand with ID $brand_id does not exist<br>";
            }
        }

        echo "New category created successfully";
    } else {
        echo "Error: " . $sql_insert_category . "<br>" . $conn->error;
    }
}

$conn->close();
?>
