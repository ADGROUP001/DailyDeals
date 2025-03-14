<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dailydeals";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve category filter from query string
$categoryID = isset($_GET['category']) ? $_GET['category'] : '';

// Prepare SQL query based on category filter
$sql = "SELECT ProductID, Name, Price, ImageURL FROM product";
if ($categoryID !== 'all' && !empty($categoryID)) {
    // Assuming $categoryID is passed as a category name
    // Retrieve CategoryID based on the category name
    $stmt = $conn->prepare("SELECT CategoryID FROM category WHERE Name = ?");
    $stmt->bind_param("s", $categoryID);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $categoryID = $row['CategoryID'];
        $stmt->close();
        
        // Use the retrieved CategoryID for filtering products
        $sql .= " WHERE CategoryID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $categoryID);
    } else {
        echo "No products found.";
        exit();
    }
} else {
    $stmt = $conn->prepare($sql);
}

$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $productID = htmlspecialchars($row['ProductID'], ENT_QUOTES, 'UTF-8');
        $name = htmlspecialchars($row['Name'], ENT_QUOTES, 'UTF-8');
        $price = htmlspecialchars($row['Price'], ENT_QUOTES, 'UTF-8');
        $imageUrl = htmlspecialchars($row['ImageURL'], ENT_QUOTES, 'UTF-8');

        echo '
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="' . $imageUrl . '">
                    <ul class="product__item__pic__hover">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                        <li><a href="#"><i data-id="' . $productID . '" data-name="' . $name . '" data-price="' . $price . '" data-image="' . $imageUrl . '" class="fa fa-shopping-cart add-to-cart"></i></a></li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6><a href="#">' . $name . '</a></h6>
                    <h5>₹ ' . $price . '</h5>
                </div>
            </div>
        </div>';
    }
} else {
    echo "No products found.";
}

$stmt->close();
$conn->close();
?>
