<?php // Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dailydeals";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetching total order count for each category
$sql = "SELECT c.Name, SUM(oi.Quantity) AS TotalSales
        FROM orderitem oi
        JOIN product p ON oi.ProductID = p.ProductID
        JOIN category c ON p.CategoryID = c.CategoryID
        GROUP BY c.CategoryID";
$result = $conn->query($sql);

$categories = [];
$sales = [];

while ($row = $result->fetch_assoc()) {
    $categories[] = $row['Name'];
    $sales[] = $row['TotalSales'];
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>TPS Report - Orders by Category</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .R1{
            width: 400px;
            height: 500px;
        }
        </style>
</head>
<body>
    <h1>TPS Report: Orders by Category</h1>
    <div class="R1">
    <canvas id="tpsChart"></canvas>
    </div>
    <style>
        
        #tpsChart {
            width: -100px;  /* Smaller width */
            height: -100px; /* Smaller height */
        }
    </style>
    <div class="col-sm-6 col-md-4 col-lg-4" style="width: 500px; margin-top: -100px; margin-left: 500px;">
                                <div class="card h-100 flex-column">
                                    <div class="card-body d-flex flex-column h-100">
                                        <span class="text-muted">Number of Category </span>
                                        <h4 class="fw-bold">3</h4>
                                        <div id="topFive"></div>
                                    </div>
                                </div>
                            </div>-->
    <script>
        var ctx = document.getElementById('tpsChart').getContext('2d');
        var tpsChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: <?php echo json_encode($categories); ?>,
                datasets: [{
                    label: 'Total Sales',
                    data: <?php echo json_encode($sales); ?>,
                    backgroundColor: ['#ff6384', '#36a2eb', '#cc65fe', '#ffce56'],
                }]
            }
        });
    </script>
</body>
</html>
<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dailydeals";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch Total Sales (sum of all product prices in orders)
$sqlTotalSales = "SELECT SUM(oi.Quantity * p.Price) AS TotalSales
                  FROM orderitem oi
                  JOIN product p ON oi.ProductID = p.ProductID";
$resultTotalSales = $conn->query($sqlTotalSales);
$totalSales = $resultTotalSales->fetch_assoc()['TotalSales'] ?? 0;

// Fetch Total Orders
$sqlTotalOrders = "SELECT COUNT(DISTINCT OrderID) AS TotalOrders FROM orderitem";
$resultTotalOrders = $conn->query($sqlTotalOrders);
$totalOrders = $resultTotalOrders->fetch_assoc()['TotalOrders'] ?? 0;

// Fetch Top-Selling Categories
$sqlTopCategories = "SELECT c.Name, SUM(oi.Quantity) AS TotalSales
                     FROM orderitem oi
                     JOIN product p ON oi.ProductID = p.ProductID
                     JOIN category c ON p.CategoryID = c.CategoryID
                     GROUP BY c.CategoryID
                     ORDER BY TotalSales DESC
                     LIMIT 5";
$resultTopCategories = $conn->query($sqlTopCategories);

// Prepare data for the bar chart
$categories = [];
$sales = [];
while ($row = $resultTopCategories->fetch_assoc()) {
    $categories[] = $row['Name'];
    $sales[] = $row['TotalSales'];
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIS Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            background-color: #f5f5f5;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        .report-container {
            width: 80%;
            margin: 0 auto;
            text-align: center;
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        td {
            text-align: center;
        }
        canvas {
            display: block;
            margin: 30px auto;
            width: 600px;
            height: 400px;
        }
        .card {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            background-color: #fff;
        }
        .card-body {
            margin-bottom: 20px;
        }
        .fw-bold {
            font-weight: bold;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<h1>MIS Report - Key Performance Indicators</h1>

<div class="report-container">
    <h2>Total Sales and Orders</h2>
    <table>
        <tr>
            <th>Total Sales (in $)</th>
            <th>Total Orders</th>
        </tr>
        <tr>
            <td><?php echo number_format($totalSales, 2); ?></td>
            <td><?php echo $totalOrders; ?></td>
        </tr>
    </table>

    <h2>Top-Selling Categories (Bar Chart)</h2>
    <div class="card">
        <div class="card-body pb-0">
            <div class="d-flex align-items-center justify-content-between">
                <span class="text-muted">Sales This Month</span>
            </div>
            <h4 class="fw-bold mb-0">₹<?php echo number_format($totalSales, 2); ?></h4>
        </div>
        <div id="thisMonthChart" class="px-3"> 
            <canvas id="salesChart"></canvas>
        </div>
    </div>
</div>

<script>
    var ctx = document.getElementById('salesChart').getContext('2d');
    var salesChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($categories); ?>,
            datasets: [{
                label: 'Total Sales (Units)',
                data: <?php echo json_encode($sales); ?>,
                backgroundColor: '#4CAF50',
                borderColor: '#388E3C',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

</body>
</html>
