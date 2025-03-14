<?php
// Database connection (update with your own details)
$servername = "localhost";
$username = "root";
$password = "";
$database = "DailyDeals";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch latest products (limit to 6 or as needed)
$sql = "SELECT * FROM product ORDER BY CreatedAt DESC LIMIT 6";
$result = $conn->query($sql);

$products = '';
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $products .= '
            <div class="latest-product__item">
                <a href="#" class="latest-product__item">
                    <div class="latest-product__item__pic">
                        <img src="' . $row['ImageURL'] . '" alt="">
                    </div>
                    <div class="latest-product__item__text">
                        <h6>' . $row['Name'] . '</h6>
                        <span>₹ ' . $row['Price'] . '</span>
                    </div>
                </a>
            </div>
        ';
    }
}

$conn->close();

// Output the HTML for the latest products
echo $products;
?>
