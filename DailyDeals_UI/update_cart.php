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
    $quantity = $_POST['quantity'];

    // Step 1: Fetch the current price and quantity of the product
    $sql = "SELECT price, Quantity FROM cartitem WHERE CartItemID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $cartItemID);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $price = $row['price'];
        $oldQuantity = $row['Quantity'];

        // Step 2: Update the quantity and price in the cartitem table
        $updateSql = "UPDATE cartitem SET Quantity = ?, Price = ? WHERE CartItemID = ?";
        $updateStmt = $conn->prepare($updateSql);
        $updateStmt->bind_param("idi", $quantity, $price, $cartItemID);

        if ($updateStmt->execute()) {
            // Step 3: Update TotalAmount in the Cart table
            // Assuming CartID is available in the cartitem table
            $cartIDSql = "SELECT CartID FROM cartitem WHERE CartItemID = ?";
            $cartIDStmt = $conn->prepare($cartIDSql);
            $cartIDStmt->bind_param("i", $cartItemID);
            $cartIDStmt->execute();
            $cartIDResult = $cartIDStmt->get_result();

            if ($cartIDResult->num_rows > 0) {
                $cartIDRow = $cartIDResult->fetch_assoc();
                $cartID = $cartIDRow['CartID'];

                // Calculate the new total amount for the cart without any additional charges
                $cartTotalSql = "UPDATE cart
                                 SET TotalAmount = (
                                     SELECT COALESCE(SUM(p.Price * ci.Quantity), 0)
                                     FROM cartitem ci
                                     JOIN product p ON ci.ProductID = p.ProductID
                                     WHERE ci.CartID = ?
                                 )
                                 WHERE CartID = ?";
                $cartTotalStmt = $conn->prepare($cartTotalSql);
                $cartTotalStmt->bind_param("ii", $cartID, $cartID);
                
                if ($cartTotalStmt->execute()) {
                    echo json_encode(["status" => "success"]);
                } else {
                    echo json_encode(["status" => "error", "message" => "Failed to update total amount: " . $cartTotalStmt->error]);
                }
            } else {
                echo json_encode(["status" => "error", "message" => "Cart ID not found"]);
            }

            $updateStmt->close();
            $cartIDStmt->close();
            $cartTotalStmt->close();
        } else {
            echo json_encode(["status" => "error", "message" => "Failed to update cart item: " . $stmt->error]);
        }
    } else {
        echo json_encode(["status" => "error", "message" => "Cart item not found"]);
    }
}

$conn->close();
?>
