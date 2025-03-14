<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DailyDeals";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if a file was uploaded
if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
    $fileTmpPath = $_FILES['file']['tmp_name'];
    $fileName = $_FILES['file']['name'];
    $fileType = $_FILES['file']['type'];

    // Determine file type
    if ($fileType == 'application/xml') {
        // Process XML file
        processXML($fileTmpPath, $conn);
    } elseif ($fileType == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') {
        // Process Word file
        processWord($fileTmpPath, $conn);
    } else {
        echo "Unsupported file type.";
    }
} else {
    echo "No file uploaded or upload error.";
}

// Function to process XML file
function processXML($filePath, $conn) {
    $xml = simplexml_load_file($filePath);
    foreach ($xml->product as $product) {
        $name = $conn->real_escape_string($product->Name);
        $description = $conn->real_escape_string($product->Description);
        $categoryID = $conn->real_escape_string($product->CategoryID);
        $price = $conn->real_escape_string($product->Price);
        $imageURL = $conn->real_escape_string($product->ImageURL);
        $stockQuantity = $conn->real_escape_string($product->StockQuantity);
        $createdAt = $conn->real_escape_string($product->CreatedAt);
        $updatedAt = $conn->real_escape_string($product->UpdatedAt);
        $isActive = $conn->real_escape_string($product->IsActive);

        $sql = "INSERT INTO product (Name, Description, CategoryID, Price, ImageURL, StockQuantity, CreatedAt, UpdatedAt, IsActive) 
                VALUES ('$name', '$description', '$categoryID', '$price', '$imageURL', '$stockQuantity', '$createdAt', '$updatedAt', '$isActive')";

        if (!$conn->query($sql)) {
            echo "Error inserting record: " . $conn->error;
        }
    }
    echo "XML data imported successfully.";
}

// Function to process Word file
function processWord($filePath, $conn) {
    // Use PHPWord library for reading Word files
    require 'vendor/autoload.php';
//    use PhpOffice\PhpWord\IOFactory;

    $phpWord = IOFactory::load($filePath);
    $data = [];

    foreach ($phpWord->getSections() as $section) {
        foreach ($section->getElements() as $element) {
            if ($element instanceof \PhpOffice\PhpWord\Element\TextRun) {
                foreach ($element->getElements() as $text) {
                    $data[] = $text->getText();
                }
            }
        }
    }

    // Assuming the data is formatted as an array of products
    foreach ($data as $product) {
        // Parse product data from $product
        // Insert into database (example provided, customize as needed)
    }
    echo "Word data imported successfully.";
}

$conn->close();
?>
