<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dailydeals";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the AJAX request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cartItemID = $_POST['cartItemID'];

    // Step 1: Fetch the price and quantity of the item to be deleted
    $sql = "SELECT Quantity, price FROM cartitem WHERE CartItemID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $cartItemID);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $quantity = $row['Quantity'];
        $price = $row['price'];

        // Step 2: Calculate the total amount to subtract
        $totalAmountToSubtract = $quantity * $price;

        // Step 3: Delete the cart item
        $deleteSql = "DELETE FROM cartitem WHERE CartItemID = ?";
        $deleteStmt = $conn->prepare($deleteSql);
        $deleteStmt->bind_param("i", $cartItemID);

        if ($deleteStmt->execute()) {
            // Step 4: Update the TotalAmount in the cart table
            // Assuming you have a way to retrieve the CartID associated with the CartItemID
            $cartIDSql = "SELECT CartID FROM cartitem WHERE CartItemID = ?";
            $cartIDStmt = $conn->prepare($cartIDSql);
            $cartIDStmt->bind_param("i", $cartItemID);
            $cartIDStmt->execute();
            $cartIDResult = $cartIDStmt->get_result();

            if ($cartIDResult->num_rows > 0) {
                $cartIDRow = $cartIDResult->fetch_assoc();
                $cartID = $cartIDRow['CartID'];

                // Update the TotalAmount in the cart table
                $cartTotalSql = "UPDATE cart SET TotalAmount = TotalAmount - ? WHERE CartID = ?";
                $cartTotalStmt = $conn->prepare($cartTotalSql);
                $cartTotalStmt->bind_param("di", $totalAmountToSubtract, $cartID);
                $cartTotalStmt->execute();
            }

            echo json_encode(["status" => "success"]);
        } else {
            echo json_encode(["status" => "error", "message" => $conn->error]);
        }

        $deleteStmt->close();
        $cartIDStmt->close();
        $cartTotalStmt->close();
    } else {
        echo json_encode(["status" => "error", "message" => "Cart item not found"]);
    }

    $stmt->close();
}

$conn->close();
?>
