<?php
// tps_data.php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dailydeals";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$timeframe = $_GET['timeframe'] ?? 'daily'; // Default to 'daily'

if ($timeframe === 'weekly') {
    $query = "SELECT YEARWEEK(OrderDate, 1) AS period, 
                     COUNT(OrderID) AS total_orders, 
                     CASE 
                         WHEN UNIX_TIMESTAMP(MAX(OrderDate)) = UNIX_TIMESTAMP(MIN(OrderDate)) THEN 0
                         ELSE (COUNT(OrderID) * 1.0) / (UNIX_TIMESTAMP(MAX(OrderDate)) - UNIX_TIMESTAMP(MIN(OrderDate)))
                     END AS TPS 
              FROM `order` 
              WHERE OrderStatus = 'Delivered'
              GROUP BY period";
} elseif ($timeframe === 'monthly') {
    $query = "SELECT DATE_FORMAT(OrderDate, '%Y-%m') AS period, 
                     COUNT(OrderID) AS total_orders, 
                     CASE 
                         WHEN UNIX_TIMESTAMP(MAX(OrderDate)) = UNIX_TIMESTAMP(MIN(OrderDate)) THEN 0
                         ELSE (COUNT(OrderID) * 1.0) / (UNIX_TIMESTAMP(MAX(OrderDate)) - UNIX_TIMESTAMP(MIN(OrderDate)))
                     END AS TPS 
              FROM `order` 
              WHERE OrderStatus = 'Delivered'
              GROUP BY period";
} else {
    // Default to daily
    $query = "SELECT DATE(OrderDate) AS period, 
                     COUNT(OrderID) AS total_orders, 
                     CASE 
                         WHEN TIMESTAMPDIFF(SECOND, MIN(OrderDate), MAX(OrderDate)) = 0 THEN 0
                         ELSE (COUNT(OrderID) * 1.0) / TIMESTAMPDIFF(SECOND, MIN(OrderDate), MAX(OrderDate))
                     END AS TPS 
              FROM `order` 
              WHERE OrderStatus = 'Delivered'
              GROUP BY period";
}

$result = $conn->query($query);

$labels = [];
$orders = [];
$tps = [];

while ($row = $result->fetch_assoc()) {
    $labels[] = $row['period']; // Use 'period' as label
    $orders[] = $row['total_orders'];
    $tps[] = $row['TPS'] ? number_format($row['TPS'], 2) : 0; // Format TPS or set to 0 if null
}

$data = [
    'labels' => $labels,
    'orders' => $orders,
];

echo json_encode($data);

$conn->close();
?>
