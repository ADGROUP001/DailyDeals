<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Your Cart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Shopping Cart</h2>
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <?php
                        // Start the session
                        session_start();

                        // Database connection
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

                        // Fetch the customer's email from session
                        $email = $_SESSION['Email'] ?? null;

                        if (!$email) {
                            echo '<p>Please log in to view your cart.</p>';
                            exit;
                        }

                        // Sanitize email
                        $email = $conn->real_escape_string($email);

                        // Fetch customer ID based on email
                        $query = "SELECT CID FROM customers WHERE email = ?";
                        $stmt = $conn->prepare($query);
                        if (!$stmt) {
                            die("Prepare failed: " . $conn->error);
                        }
                        $stmt->bind_param('s', $email);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        $customer = $result->fetch_assoc();

                        if ($customer) {
                            $customerId = $customer['CID'];

                            // Prepare query for the cart
                            $cartQuery = "SELECT * FROM cart WHERE CID = ?";
                            $cartStmt = $conn->prepare($cartQuery);

                            if (!$cartStmt) {
                                die("Prepare failed: " . $conn->error);
                            }

                            $cartStmt->bind_param("i", $customerId);
                            $cartStmt->execute();
                            $cartResult = $cartStmt->get_result();

                            if ($cartResult->num_rows > 0) {
                                $cart = $cartResult->fetch_assoc();
                                $cartID = $cart['CartID'];

                                // Fetch cart items for the given CartID
                                $itemQuery = "SELECT ci.ProductID, ci.Quantity, p.Name, p.Price, p.ImageURL
                                              FROM cartitem ci
                                              JOIN product p ON ci.ProductID = p.ProductID
                                              WHERE ci.CartID = ?";
                                $itemStmt = $conn->prepare($itemQuery);

                                if (!$itemStmt) {
                                    die("Prepare failed: " . $conn->error);
                                }

                                $itemStmt->bind_param("i", $cartID);
                                $itemStmt->execute();
                                $itemResult = $itemStmt->get_result();

                                if ($itemResult->num_rows > 0) {
                                    echo '<table class="table table-hover">';
                                    echo '<thead class="thead-light">
                                            <tr>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                            </tr>
                                          </thead>';
                                    echo '<tbody>';
                                    $grandTotal = 0;

                                    while ($row = $itemResult->fetch_assoc()) {
                                        $totalPrice = $row['Price'] * $row['Quantity'];
                                        $grandTotal += $totalPrice;

                                        echo '<tr>
                                                <td>' . htmlspecialchars($row['Name']) . '</td>
                                                <td>$' . number_format($row['Price'], 2) . '</td>
                                                <td>
                                                    <form action="update_cart.php" method="post" class="d-inline-block">
                                                        <input type="hidden" name="product_id" value="' . $row['ProductID'] . '">
                                                        <input type="hidden" name="cart_id" value="' . $cartID . '">
                                                        <input type="number" name="quantity" value="' . $row['Quantity'] . '" class="form-control w-75 d-inline" min="1">
                                                        <button type="submit" class="btn btn-sm btn-primary">Update</button>
                                                    </form>
                                                </td>
                                                <td>$' . number_format($totalPrice, 2) . '</td>
                                                <td>
                                                    <form action="remove_from_cart.php" method="post" class="d-inline-block">
                                                        <input type="hidden" name="product_id" value="' . $row['ProductID'] . '">
                                                        <input type="hidden" name="cart_id" value="' . $cartID . '">
                                                        <button type="submit" class="btn btn-sm btn-danger">Remove</button>
                                                    </form>
                                                </td>
                                              </tr>';
                                    }
                                    echo '</tbody>';
                                    echo '</table>';
                                    echo '<h5 class="text-right">Grand Total: $' . number_format($grandTotal, 2) . '</h5>';

                                    // Update the TotalAmount in the cart
                                    $updateCartQuery = "UPDATE cart SET TotalAmount = ? WHERE CartID = ?";
                                    $updateCartStmt = $conn->prepare($updateCartQuery);
                                    if ($updateCartStmt) {
                                        $updateCartStmt->bind_param("di", $grandTotal, $cartID);
                                        $updateCartStmt->execute();
                                        $updateCartStmt->close();
                                    }
                                } else {
                                    echo '<p>Your cart is empty.</p>';
                                }

                                $itemStmt->close();
                            } else {
                                echo '<p>No cart found for the customer.</p>';
                            }

                            $cartStmt->close();
                        } else {
                            echo '<p>Customer not found.</p>';
                        }

                        $stmt->close();
                        $conn->close();
                        ?>
                        <div class="text-right mt-3">
                            <a href="checkout.php" class="btn btn-success">Proceed to Checkout</a>
                            <a href="index.php" class="btn btn-secondary">Continue Shopping</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
