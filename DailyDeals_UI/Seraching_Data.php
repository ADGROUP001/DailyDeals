<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

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

// Retrieve and sanitize search query
$query = isset($_GET['query']) ? $_GET['query'] : '';
$query = $conn->real_escape_string($query);

// Perform SQL query
$sql = "SELECT * FROM product WHERE Name LIKE '%$query%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="row">';
    while ($row = $result->fetch_assoc()) {
        echo '<div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/product/' . htmlspecialchars($row["ImageURL"]) . '">
                        <ul class="product__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">' . htmlspecialchars($row["Name"]) . '</a></h6>
                        <h5>₹ ' . htmlspecialchars($row["Price"]) . '</h5>
                    </div>
                </div>
              </div>';
    }
    echo '</div>';
} else {
    echo 'No products found';
}

$conn->close();
?>
