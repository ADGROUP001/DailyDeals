
<?php
session_start();?>
<!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Ogani Template">
        <meta name="keywords" content="Ogani, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>DailyDeals</title>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
        <style>
            /* Overall styling for cart item */
            .cart-items {
                list-style-type: none;
                padding: 0;
                margin: 0;
            }

            .cart-items li {
                display: flex;
                align-items: center;
                margin-bottom: 10px;
                padding: 10px;
                border: 1px solid #ddd;
                border-radius: 5px;
                background-color: #f9f9f9;
            }

            .item-image {
                width: 70px;
                height: 50px;
                margin-right: 10px;
            }

            .item-details {
                flex-grow: 1;
            }

            button {
                padding: 5px 10px;
                border: none;
                color: #fff;
                background-color: #7fad39;
                border-radius: 5px;
                cursor: pointer;
                margin-left: 5px;
            }

            button.remove-item {
                padding: 10px 20px;
                border-radius: 10px;
            }

        </style>
           <style>
            .whatsapp-button {
                display: inline-block;
                width: 60px;  /* Adjust the size as needed */
                height: 60px; /* Adjust the size as needed */
                background-color: #25D366; /* WhatsApp green color */
                border-radius: 50%; /* Makes the button circular */
                text-align: center;
                color: white;
                text-decoration: none;
                position: fixed; /* Fixed position */
                bottom: 20px; /* Distance from the bottom */
                right: 20px; /* Distance from the right */
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3); /* Optional: Add shadow for better visibility */
                z-index: 1000; /* Ensures it stays on top */
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .whatsapp-button svg {
                width: 32px; /* Adjust the size as needed */
                height: 32px; /* Adjust the size as needed */
            }

        </style>
        <style>
    .shoping__cart__item img {
    max-width: 100px; /* Set your desired width */
    max-height: 100px; /* Set your desired height */
    width: auto; /* Maintain aspect ratio */
    height: auto; /* Maintain aspect ratio */
    object-fit: cover; /* Ensure the image covers the area */
}
</style>

        <!-- Css Styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
        <link rel="stylesheet" href="css/nice-select.css" type="text/css">
        <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
        <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>

    <body>
        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>

        <!-- Humberger Begin -->
        <div class="humberger__menu__overlay"></div>
        <div class="humberger__menu__wrapper">
            <div class="humberger__menu__logo">
                <a href="#"><img src="img/logo.png" alt=""></a>
            </div>
            <div class="humberger__menu__cart">
                <ul>
                    <li><a href="#"><i class="fa fa-heart"></i> <span></span></a></li>
                    <li><a href="#"><i class="fa fa-shopping-bag"></i> <span></span></a></li>
                </ul>
                <div class="header__cart__price">item: <span>$0.00</span></div>
            </div>
            <div class="humberger__menu__widget">
                <div class="header__top__right__language">
                   <!-- <img src="img/language.png" alt="">
                           <div>English</div>
                           <span class="arrow_carrot-down"></span>
                           <ul>
                               <li><a href="#">Spanis</a></li>
                               <li><a href="#">English</a></li>
                           </ul> -->
                </div>
                <div class="header__top__right__auth">
                    <a href="C:\Users\man\OneDrive\Desktop\Project\DailyDeals\colorlib-regform-7\Sing.html"><i
                            class="fa fa-user"></i> Login</a>
                </div>
            </div>
            <nav class="humberger__menu__nav mobile-menu">
                <ul>
                    <li class="active"><a href="./index.html">Home</a></li>
                    <li><a href="./shop.html">Shop</a></li>
                    <li><a href="#">Pages</a>
                        <ul class="header__menu__dropdown">
                            <li><a href="./shop-details.html">Shop Details</a></li>
                            <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                            <!-- <li><a href="./checkout.html">Check Out</a></li>
                                      <li><a href="./blog-details.html">Blog Details</a></li> -->
                        </ul>
                    </li>
                    <!-- <li><a href="./blog.html">Blog</a></li> -->
                    <li><a href="./contact.html">Contact</a></li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
            <div class="header__top__right__social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
            <div class="humberger__menu__contact">
                <ul>
                    <li><i class="fa fa-envelope"></i> dailydeals12@gmail.com</li>
                    <li>Free Shipping for all Order</li>
                </ul>
            </div>
        </div>
        <!-- Humberger End -->

        <!-- Header Section Begin -->
        <header class="header">
            <div class="header__top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="header__top__left">
                                <ul>
                                    <li><i class="fa fa-envelope"></i> dailydeals12@gmail.com</li>
                                    <li>Free Shipping for all Order</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="header__top__right">
                                <div class="header__top__right__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                                <div class="header__top__right__language">
                                   <!-- <img src="img/language.png" alt="">
                                               <div>English</div>
                                               <span class="arrow_carrot-down"></span>
                                               <ul>
                                                   <li><a href="#">Spanis</a></li>
                                                   <li><a href="#">English</a></li>
                                               </ul> -->
                                </div>
                                <div class="header__top__right__auth">
                                    <?php
                                    if (isset($_GET['Email']) && !isset($_SESSION['Email'])) {
    $_SESSION['Email'] = $_GET['Email'];
}
                                    // Start session to maintain user login state
                                    if (isset($_SESSION['Email'])) {
                                        // User is logged in, display logout link and manage profile button
                                        echo '<div class="auth-buttons"style=" margin-right:100px; margin-top:-15px; ">';
                                        echo '<a href="/DailyDeals/Forms/Manage_Profile.php" id="Manage_Profile">Manage Profile</a>';
                                        echo '</div>';
                                        echo '<div class="auth-buttons"style=" margin-left: 130px; margin-top:-30px;  ">';
                                        echo '<a href="/DailyDeals/Forms/logout.php"><i class="fa fa-sign-out"></i> Logout</a>';

                                        echo '</div>';
                                    } else {
                                        // User is not logged in, display login link
                                        echo '<a href="/DailyDeals/Forms/Sing.php"><i class="fa fa-user"></i> Login</a>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="https://api.whatsapp.com/send?phone=919662520277&amp;text=Hello%20sir%20we%20have%20some%20query%20about%20your%20delivery%20and%20services%20would%20you%20please%20be%20kind%20to%20answer%20them" class="whatsapp-button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                <path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"></path>
                <path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"></path>
                <path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"></path>
                <path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"></path>
                <path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"></path>
                </svg>
            </a>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="header__logo">
                            <a href="./Homepage.php"><img src="img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <nav class="header__menu">
                            <ul>
                                <li><a href="./Homepage.php">Home</a></li>
                                <li ><a href="./Shop.php">Shop</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="header__menu__dropdown">
                                        <li><a href="./shop-details.php">Shop Details</a></li>
                                        <li class="active"><a href="./cart.php">Shoping Cart</a></li>
                                        <!-- <li><a href="./checkout.html">Check Out</a></li> -->
                                        <!-- <li><a href="./blog-details.html">Blog Details</a></li> -->
                                    </ul>
                                </li>
                                <!-- <li><a href="./blog.html">Blog</a></li> -->
                                <li><a href="./contact.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3">
                        <div class="header__cart">
                            <ul>
                                <!-- <button id="toggle-wish">
                                               <li><a href="#"><i id="wish-icon" class="fa fa-heart"></i> <span></span></a></li>
                                           </button> -->
                                <!-- <button id="toggle-cart"> -->
                                <li id="toggle-cart"><a href="#"><i id="cart-icon" class="fa fa-shopping-bag"><span
                                                id="cart-count">0</span></i></a></li>
                                <!-- </button> -->
                            </ul>

                            <div id="cart" style="display: none;">
                                <ul id="cart-items"></ul>
                                <p>Total: ₹<span id="cart-total">0.0</span></p>
                               
                                <button id="checkout-cart">Checkout</button>
                                
                                <button id="cancel-cart">Cancel</button>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="humberger__open">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </header>
        <!-- Header Section End -->

        <!-- Hero Section Begin -->
        <section class="hero hero-normal">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="hero__categories">
                            <div class="hero__categories__all">
                                <i class="fa fa-bars"></i>
                                <span>Menu</span>
                            </div>
                            <ul id="category-list">
                                <li><a href="Shop.php" data-category="all">All</a></li>
                                <li><a href="Shop.php?category=2" data-category="vegetables">Vegetables</a></li>
                                <li><a href="Shop.php?category=3" data-category="dairy">Milk Product</a></li>
                                <li><a href="Shop.php?category=1" data-category="grocery">Fruit</a></li>
                            </ul>
                        </div>


                    </div>

                    <div class="col-lg-9">
                        <div class="hero__search">
                            <div class="hero__search__form">
                                <form method="GET">
                                    <div id="search-container">
                                        <input type="text" id="search-bar" name="search" placeholder="What do you need?"
                                               value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
                                        <button type="submit" id="search-btn" class="site-btn">SEARCH</button>
                                    </div>
                                </form>
                            </div>


                            <div class="hero__search__phone">
                                <div class="hero__search__phone__icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="hero__search__phone__text">
                                    <h5>+91 7016433988</h5>
                                    <span>support 24/7 time</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
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
// Assuming user is logged in and we have their CID
$cid = 'C_03'; // This should be retrieved from the session or a login mechanism

// Query to fetch cart and related cart items
$sql = "SELECT c.CartID, ci.CartItemID, p.ProductID, p.Name, p.ImageURL, ci.Quantity, ci.price 
        FROM cart c 
        JOIN cartitem ci ON c.CartID = ci.CartID 
        JOIN product p ON ci.ProductID = p.ProductID 
        WHERE c.CID = '$cid'";

$result = $conn->query($sql);
?>

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th class="shoping__product">Products</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $totalAmount = 0;
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $itemTotal = $row['Quantity'] * $row['price'];
                                    $totalAmount += $itemTotal;
                                    ?>
                                    <tr data-cart-item-id="<?php echo $row['CartItemID']; ?>">
                                        <td class="shoping__cart__item" style="">
                                            <img src="<?php echo $row['ImageURL']; ?>" alt="">
                                            <h5><?php echo $row['Name']; ?></h5>
                                        </td>
                                        <td class="shoping__cart__price">
                                            ₹ <?php echo number_format($row['price'], 2); ?>
                                        </td>
                                        <td class="shoping__cart__quantity">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="number" value="<?php echo $row['Quantity']; ?>" min="1" class="quantity-input">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="shoping__cart__total">
                                            ₹ <?php echo number_format($itemTotal, 2); ?>
                                        </td>
                                        <td class="shoping__cart__item__close">
                                            <span class="icon_close" onclick="deleteCartItem(<?php echo $row['CartItemID']; ?>)"></span>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                echo "<tr><td colspan='5'>Your cart is empty.</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__btns">
                  <a href="Shop.php" class="primary-btn cart-btn">CONTINUE SHOPPING</a>

                    <a href="#" class="primary-btn cart-btn cart-btn-right" onclick="updateCart()">Update Cart</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__checkout">
                    <h5>Cart Total</h5>
                    <ul>
                        <li>Total <span>₹ <?php echo number_format($totalAmount, 2); ?></span></li>
                    </ul>
                    <a href="#" class="primary-btn" onclick="proceedToCheckout()">PROCEED TO CHECKOUT</a>

                </div>
            </div>
        </div>
    </div>
</section>

<script>
       
function proceedToCheckout() {
    // Your checkout logic here
    console.log("Proceeding to checkout...");
    // Redirect to checkout page or perform any other action
    window.location.href = 'checkout_page.php'; // Redirecting to checkout page
    }
function updateCart() {
    const cartItems = document.querySelectorAll('tr[data-cart-item-id]');
    cartItems.forEach(item => {
        const cartItemID = item.getAttribute('data-cart-item-id');
        const quantity = item.querySelector('.quantity-input').value;

        // AJAX request to update cart item quantity
        fetch('update_cart.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: new URLSearchParams({
                'cartItemID': cartItemID,
                'quantity': quantity
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                alert('Cart updated successfully.');
                location.reload(); // Reload to see updated totals
            } else {
                alert('Error updating cart: ' + data.message);
            }
        });
    });
}

function deleteCartItem(cartItemID) {
    // AJAX request to delete cart item
    fetch('delete_cart_item.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: new URLSearchParams({
            'cartItemID': cartItemID
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            alert('Item removed from cart.');
            location.reload(); // Reload to see updated cart
        } else {
            alert('Error removing item: ' + data.message);
        }
    });
}
<script>
 
</script>

</script>

    <!-- Shoping Cart Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <!-- <li>Address: 60-49 Road 11378 New York</li> -->
                            <li>Phone: +91 7016433988</li>
                            <li>Email: dailydeals12@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <!-- <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div> -->
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>


</body>

</html>