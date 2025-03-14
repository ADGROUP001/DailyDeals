<?php
session_start();
?>
<!DOCTYPE html>
<html>

    
    <head>
    <!-- Basic Meta Tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- SEO Meta Tags -->
    <meta name="keywords" content="DailyDeals, Online Shopping, Discounts, Best Deals, Buy Online, E-commerce, Flash Sales" />
    <meta name="description" content="Shop the best deals on DailyDeals! Get discounts on top products, enjoy fast delivery, and secure payments. Limited-time offers available now!" />
    <meta name="author" content="DailyDeals Team" />
    <meta name="robots" content="index, follow" />

    <!-- Open Graph Meta Tags (For Social Media Sharing) -->
    <meta property="og:title" content="DailyDeals - Best Online Shopping Deals" />
    <meta property="og:description" content="Find amazing discounts on your favorite products! Shop online now and save big with exclusive deals on DailyDeals." />
    <meta property="og:image" content="https://www.dailydeals.com/images/logo.jpg" />
    <meta property="og:url" content="https://www.dailydeals.com/" />
    <meta property="og:type" content="website" />

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="DailyDeals - Best Online Shopping Deals" />
    <meta name="twitter:description" content="Shop the latest deals and enjoy discounts on a wide range of products. Limited-time offers on DailyDeals!" />
    <meta name="twitter:image" content="https://www.dailydeals.com/images/twitter-card.jpg" />
    <meta name="twitter:site" content="@DailyDeals" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="https://www.dailydeals.com/favicon.png" />


        <title>Buy Best Daily Deals - Discounts on Vegetables & Fruits </title>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

        <!-- Css Styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
        <link rel="stylesheet" href="css/nice-select.css" type="text/css">
        <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
        <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/Logi_Registratio.css" type="text/css">
        <link rel="stylesheet" href="cs/f.css" type="text/css">
        <link rel="stylesheet" href="cs/p.css" type="text/css">
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
                <a href="#"><img src="img/logo.png" alt="DailyDeals Logo "></a>
            </div>
            <div class="humberger__menu__cart">
                <ul>
                    <!-- <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                    <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li> -->
                </ul>
                <div class="header__cart__price">item: <span>₹ 00</span></div>
            </div>
            <div class="humberger__menu__widget">
                <div class="header__top__right__language">
                    <!-- <img src="img/language.png" alt=""> -->
                    <!-- <div>English</div>
                    <span class="arrow_carrot-down"></span>
                    <ul>
                        <li><a href="#">Spanis</a></li>
                        <li><a href="#">English</a></li>
                    </ul> -->
                </div>
                <div class="header__top__right__auth">
                    <a href="/Forms/Sing.php"><i class="fa fa-user"></i> Login</a>
                    <div class="login-form">
                        <form action="">
                            <!-- <h3>Login now</h3>
                        <input type="email" placeholder="Enter your Email" class="box">
                        <input type="password" placeholder="Enter your Password" class="box">
                        <p>forget your Password <a href="#">Click here</a></p>
                        <p>don't have an account<a href="#">Create now</a></p>
                        <input type="submit" value="Login now" class="btn"> -->

                        </form>
                    </div>
                </div>
            </div>
            <nav class="humberger__menu__nav mobile-menu">
                <ul>
                    <li class="active"><a href="./Homepage.php">Home</a></li>
                    <li><a href="./CartShopPageTEST.php">Shop</a></li>
                    <li><a href="#">Pages</a>
                        <ul class="header__menu__dropdown">
                            <li><a href="./shop-details.html">Shop Details</a></li>
                            <li><a href="./cart.php">Shoping Cart</a></li>
                            <!-- <li><a href="./checkout.html">Check Out</a></li> -->
                            <!-- <li><a href="./blog-details.html">Blog Details</a></li> -->
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
                        <div class="col-lg-6 col-md-6">
                            <div class="header__top__left">
                                <ul>
                                    <li><i class="fa fa-envelope"></i> dailydeals12@gmail.com</li>
                                    <li>Free Shipping for all Order</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="header__top__right">
                                <!--                                <div class="header__top__right__social">
                                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                                                </div>-->
                                <!-- <div class="header__top__right__language">
                                     <img src="img/language.png" alt="">
                                    <div>English</div>
                                    <span class="arrow_carrot-down"></span>
                                    <ul>
                                        <li><a href="#">Spanis</a></li>
                                        <li><a href="#">English</a></li>
                                    </ul> 
                                </div> -->

                                <!-- Login Button 
                                <div class="header__top__right__auth">
                                    <a href="/Form_Database/Sing.php"><i class="fa fa-user"></i> Login</a>
                                   
    
                                </div> -->
                                <div class="header__top__right__auth">
                                    <?php
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
                            <a href="./Homepage.php"><img src="img/logo.png" alt="DailyDeals Logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <nav class="header__menu">
                            <ul>
                                <li class="active"><a href="./Homepage.php">Home</a></li>
                                <li><a href="./Shop.php<?php
                                    if (isset($_SESSION['Email'])) {
                                        echo '?Email=' . urlencode($_SESSION['Email']);
                                    }
                                    ?>">Shop</a></li>                                
                                <li><a href="#">Pages</a>
                                    <ul class="header__menu__dropdown">
                                        <li><a href="./shop-details.php<?php
                                    if (isset($_SESSION['Email'])) {
                                        echo '?Email=' . urlencode($_SESSION['Email']);
                                    }
                                    ?>">Shop Details</a></li>
                                        <li><a href="./cart.php<?php
                                               if (isset($_SESSION['Email'])) {
                                                   echo '?Email=' . urlencode($_SESSION['Email']);
                                               }
                                    ?>">Shopping Cart</a></li>
                                        <!-- <li><a href="./checkout.html">Check Out</a></li> -->
                                        <!-- <li><a href="./blog-details.html">Blog Details</a></li> -->
                                    </ul>
                                </li>
                                <!-- <li><a href="./blog.html">Blog</a></li> -->
                                <li><a href="./contact.php<?php
                                               if (isset($_SESSION['Email'])) {
                                                   echo '?Email=' . urlencode($_SESSION['Email']);
                                               }
                                    ?>">Contact</a></li>
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
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Menu</span>
                        </div>
                        <ul>
                            <!-- <li><a href="#">Fresh Meat</a></li> -->
                          <li><a href="shop.php?category=2">Vegetables</a></li>
                            <!-- <li><a href="#">Fruit </a></li> -->
                            <!-- <li><a href="#">Vegitable </a></li> -->
                            <li><a href="shop.php?category=3">Dairy </a></li>
                            <!-- <li><a href="#">Cold Drink </a></li> -->
                            <li><a href="shop.php?category=1">Fruits </a></li>
                            <!-- <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
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
                    <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                        <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable <br />100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="#" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <div class="Main">
<!--        <section class="categories">
            <div class="container">
                <div class="row">
                    <div class="categories__slider owl-carousel">
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="img/categories/cat-1.jpg">
                                <h5><a href="#">Oli</a></h5>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="img/categories/cat-2.jpg">
                                <h5><a href="#">Coffee</a></h5>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="img/categories/cat-3.jpg">
                                <h5><a href="#">Vegetables</a></h5>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="img/categories/cat-4.jpg">
                                <h5><a href="#">Grains</a></h5>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="img/categories/cat-5.jpg">
                                <h5><a href="#">Milk</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         Categories Section End -->
       <?php
// Database connection details
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

// Fetch category data from the database and sort categories
$query = "SELECT CategoryID, Name FROM category ORDER BY Name ASC";
$result = mysqli_query($conn, $query);

if ($result) {
    $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // Manually render each category
    echo '
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">';

    if (isset($categories[0])) {
        $categoryID = $categories[0]['CategoryID'];
        $name = $categories[0]['Name'];
        $imageURL = 'img/categories/cat-3.jpg'; // Replace with the path to your default image
        echo '<div class="col-lg-3">
            <div class="categories__item set-bg" data-setbg="' . $imageURL . '">
                <h5><a href="Shop.php?category=' . $categoryID . '">' . $name . '</a></h5>
            </div>
          </div>';
    }

    if (isset($categories[1])) {
        $categoryID = $categories[1]['CategoryID'];
        $name = $categories[1]['Name'];
        $imageURL = 'img/categories/Dairy.png'; // Replace with the path to your default image
        echo '<div class="col-lg-3">
            <div class="categories__item set-bg" data-setbg="' . $imageURL . '">
                <h5><a href="Shop.php?category=' . $categoryID . '">' . $name . '</a></h5>
            </div>
          </div>';
    }

    if (isset($categories[2])) {
        $categoryID = $categories[2]['CategoryID'];
        $name = $categories[2]['Name'];
        $imageURL = 'img/categories/cat-3.jpg'; // Replace with the path to your default image
        echo '<div class="col-lg-3">
            <div class="categories__item set-bg" data-setbg="' . $imageURL . '">
                <h5><a href="Shop.php?category=' . $categoryID . '">' . $name . '</a></h5>
            </div>
          </div>';
    }

    // Add more blocks if you have more categories

    echo '      </div>
        </div>
    </div>
</section>';
}
?>

        <div></div>



        <!--Featured Section Begin -->

<!--        <section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Product</h2>
                </div>
                <div class="featured__controls">
                     <ul>
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".oranges"></li>
                        <li data-filter=".fresh-meat">Fresh Meat</li>
                        <li data-filter=".vegetables">fruits</li>
                        <li data-filter=".fastfood">Vegitable</li>
                    </ul> 
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-1.jpg">
                        <ul class="featured__item__pic__hover add-to-cart,add-to-wish">
                            <li><a href="#"><i data-id="1" data-name="Tomato" data-price="50.00" class="fa fa-heart add-to-wish"></i></a></li>
                            <li><a href="#"><i data-id="1" data-name="Tomato" data-price="50.00" class="fa fa-shopping-cart add-to-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text" data-id="1" data-name="Tomato" data-price="50.00">
                        <h6><a href="#">Tomato</a></h6>
                        <h5>₹50.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-2.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Capchicame Chili</a></h6>
                        <h5>₹ 40.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-3.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Cucumber</a></h6>
                        <h5>₹ 80.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-4.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Milk</a></h6>
                        <h5>₹ 60.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-5.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Broccoli</a></h6>
                        <h5> ₹ 70.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-6.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Onion</a></h6>
                        <h5>₹ 80.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-7.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Potato</a></h6>
                        <h5>₹ 40.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-8.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Coffee</a></h6>
                        <h5>₹ 150.00</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->
        <!--  Featured Section End -->

        <!--Banner Begin -->

        <!--        <div class="banner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="banner__pic">
                                    <img src="img/banner/banner-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="banner__pic">
                                    <img src="img/banner/banner-2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
        <!--Banner End -->

        <!-- Latest Product Section Begin -->
<!--        <section class="latest-product spad">
           <div class="container">
               <div class="row">
                   <div class="col-lg-4 col-md-6">
                       <div class="latest-product__text">
                           <h4>Latest Products</h4>
                           <div class="latest-product__slider owl-carousel">
                               <div class="latest-prdouct__slider__item">
                                   <a href="#" class="latest-product__item">
                                       <div class="latest-product__item__pic">
                                           <img src="img/latest-product/lp-1.jpg" alt="">
                                       </div>
                                       <div class="latest-product__item__text">
                                           <h6>spinach</h6>
                                           <span>₹30.00</span>
                                       </div>
                                   </a>
                                   <a href="#" class="latest-product__item">
                                       <div class="latest-product__item__pic">
                                           <img src="img/latest-product/lp-2.jpg" alt="">
                                       </div>
                                       <div class="latest-product__item__text">
                                           <h6>Capchicame Chili</h6>
                                           <span>₹40.00</span>
                                       </div>
                                   </a>
                                   <a href="#" class="latest-product__item">
                                       <div class="latest-product__item__pic">
                                           <img src="img/latest-product/lp-3.jpg" alt="">
                                       </div>
                                       <div class="latest-product__item__text">
                                           <h6>Cucumber</h6>
                                           <span>₹80.00</span>
                                       </div>
                                   </a>
                               </div>
                               <div class="latest-prdouct__slider__item">
                                   <a href="#" class="latest-product__item">
                                       <div class="latest-product__item__pic">
                                           <img src="img/latest-product/lp-4.jpg" alt="">
                                       </div>
                                       <div class="latest-product__item__text">
                                           <h6>Milk</h6>
                                           <span>₹60.00</span>
                                       </div>
                                   </a>
                                   <a href="#" class="latest-product__item">
                                       <div class="latest-product__item__pic">
                                           <img src="img/latest-product/lp-5.jpg" alt="">
                                       </div>
                                       <div class="latest-product__item__text">
                                           <h6>Broccoli</h6>
                                           <span>₹70.00</span>
                                       </div>
                                   </a>
                                   <a href="#" class="latest-product__item">
                                       <div class="latest-product__item__pic">
                                           <img src="img/latest-product/lp-8.jpg" alt="">
                                       </div>
                                       <div class="latest-product__item__text">
                                           <h6>Coffee</h6>
                                           <span>₹150.00</span>
                                       </div>
                                   </a>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-4 col-md-6">
                       <div class="latest-product__text">
                           <h4>Top Rated Products</h4>
                           <div class="latest-product__slider owl-carousel">
                               <div class="latest-prdouct__slider__item">
                                   <a href="#" class="latest-product__item">
                                       <div class="latest-product__item__pic">
                                           <img src="img/latest-product/lp-7.jpg" alt="">
                                       </div>
                                       <div class="latest-product__item__text">
                                           <h6>Potato</h6>
                                           <span>₹40.00</span>
                                       </div>
                                   </a>
                                   <a href="#" class="latest-product__item">
                                       <div class="latest-product__item__pic">
                                           <img src="img/latest-product/lp-8.jpg" alt="">
                                       </div>
                                       <div class="latest-product__item__text">
                                           <h6>Coffee</h6>
                                           <span>₹150.00</span>
                                       </div>
                                   </a>
                                   <a href="#" class="latest-product__item">
                                       <div class="latest-product__item__pic">
                                           <img src="img/latest-product/lp-9.jpg" alt="">
                                       </div>
                                       <div class="latest-product__item__text">
                                           <h6>Oli</h6>
                                           <span>₹60.00</span>
                                       </div>
                                   </a>
                               </div>
                               <div class="latest-prdouct__slider__item">
                                   <a href="#" class="latest-product__item">
                                       <div class="latest-product__item__pic">
                                           <img src="img/latest-product/lp-10.jpg" alt="">
                                       </div>
                                       <div class="latest-product__item__text">
                                           <h6>Moong</h6>
                                           <span>₹70.00</span>
                                       </div>
                                   </a>
                                   <a href="#" class="latest-product__item">
                                       <div class="latest-product__item__pic">
                                           <img src="img/latest-product/lp-11.jpg" alt="">
                                       </div>
                                       <div class="latest-product__item__text">
                                           <h6>Onion</h6>
                                           <span>₹80.00</span>
                                       </div>
                                   </a>
                                   <a href="#" class="latest-product__item">
                                       <div class="latest-product__item__pic">
                                           <img src="img/latest-product/lp-12.jpg" alt="">
                                       </div>
                                       <div class="latest-product__item__text">
                                           <h6>Gehu</h6>
                                           <span>₹900.00 per 20kg</span>
                                       </div>
                                   </a>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-4 col-md-6">
                       <div class="latest-product__text">
                           <h4>Review Products</h4>
                           <div class="latest-product__slider owl-carousel">
                               <div class="latest-prdouct__slider__item">
                                   <a href="#" class="latest-product__item">
                                       <div class="latest-product__item__pic">
                                           <img src="img/latest-product/lp-13.jpg" alt="">
                                       </div>
                                       <div class="latest-product__item__text">
                                           <h6>Chana</h6>
                                           <span>₹70.00 per 1kg</span>
                                       </div>
                                   </a>
                                   <a href="#" class="latest-product__item">
                                       <div class="latest-product__item__pic">
                                           <img src="img/latest-product/lp-14.jpg" alt="">
                                       </div>
                                       <div class="latest-product__item__text">
                                           <h6>Moth</h6>
                                           <span>₹60.00 per 1kg</span>
                                       </div>
                                   </a>
                                   <a href="#" class="latest-product__item">
                                       <div class="latest-product__item__pic">
                                           <img src="img/latest-product/lp-15.jpg" alt="">
                                       </div>
                                       <div class="latest-product__item__text">
                                           <h6>Tomato</h6>
                                           <span>₹50.00</span>
                                       </div>
                                   </a>
                               </div>
                               <div class="latest-prdouct__slider__item">
                                   <a href="#" class="latest-product__item">
                                       <div class="latest-product__item__pic">
                                           <img src="img/latest-product/lp-1.jpg" alt="">
                                       </div>
                                       <div class="latest-product__item__text">
                                           <h6>spinach</h6>
                                           <span>₹60.00</span>
                                       </div>
                                   </a>
                                   <a href="#" class="latest-product__item">
                                       <div class="latest-product__item__pic">
                                           <img src="img/latest-product/lp-2.jpg" alt="">
                                       </div>
                                       <div class="latest-product__item__text">
                                           <h6>Capchicame Chili</h6>
                                           <span>₹70.00</span>
                                       </div>
                                   </a>
                                   <a href="#" class="latest-product__item">
                                       <div class="latest-product__item__pic">
                                           <img src="img/latest-product/lp-3.jpg" alt="">
                                       </div>
                                       <div class="latest-product__item__text">
                                           <h6>Cucumber</h6>
                                           <span>₹80.00</span>
                                       </div>
                                   </a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>-->
        <!-- Latest Product Section End -->

        <!-- Blog Section Begin
        <section class="from-blog spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title from-blog__title">
                            <h2>From The Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="img/blog/blog-1.jpg" alt="">
                            </div>
                            <div class="blog__item__text">
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                    <li><i class="fa fa-comment-o"></i> 5</li>
                                </ul>
                                <h5><a href="#">Cooking tips make cooking simple</a></h5>
                                <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="img/blog/blog-2.jpg" alt="">
                            </div>
                            <div class="blog__item__text">
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                    <li><i class="fa fa-comment-o"></i> 5</li>
                                </ul>
                                <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                                <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="img/blog/blog-3.jpg" alt="">
                            </div>
                            <div class="blog__item__text">
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                    <li><i class="fa fa-comment-o"></i> 5</li>
                                </ul>
                                <h5><a href="#">Visit the clean farm in the US</a></h5>
                                <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         Blog Section End -->
    </div>
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
    <script src="js/Logii.js"></script>
   
  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
$(document).ready(function () {
    var userEmail = "projectit6789@gmail.com";
    var cart = [];
    var cartID = null;

    function fetchCart() {
        $.ajax({
            url: 'fetch_cart_data.php',
            type: 'POST',
            data: { email: userEmail },
            dataType: 'json',
            success: function (response) {
                if (response.error) {
                    console.error('Error:', response.error);
                } else {
                    let cartItems = response.cartItems;
                    if (cartItems && cartItems.length > 0) {
                        cartID = response.cartID;
                        cart = cartItems.map(item => ({
                            id: item.ProductID,
                            name: item.Name,
                            price: parseFloat(item.Price),
                            quantity: parseInt(item.Quantity),
                            imageUrl: item.ImageURL
                        }));

                        let cartTotal = 0;
                        let cartItemsContainer = $('#cart-items');
                        cartItemsContainer.empty();

                        cart.forEach(item => {
                            cartItemsContainer.append(`
                                <li>
                                    <img src="${item.imageUrl}" alt="${item.name}" style="width:70px; height:50px;">
                                    ${item.name} - ₹${item.price} x ${item.quantity}
                                    <button style="padding:5px 10px; border:none; color:#fff; background-color:#7fad39;" class="update-quantity" data-id="${item.id}">+</button>
                                    <button style="padding:5px 10px; border:none; color:#fff; background-color:#7fad39;" class="decrease-quantity" data-id="${item.id}">-</button>
                                    <button style="padding:10px 20px; border:none; border-radius:10px; color:#fff; background-color:#7fad39;" class="remove-item" data-id="${item.id}">Remove</button>
                                </li>
                            `);
                            cartTotal += item.price * item.quantity;
                        });

                        $('#cart-total').text(cartTotal.toFixed(1));
                        updateCartCount();
                    } else {
                        console.log('No items in the cart.');
                    }
                }
            },
            error: function (xhr, status, error) {
                console.error('Error fetching cart data:', xhr.responseText);
            }
        });
    }

    // Function to update the cart count
    function updateCartCount() {
        const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0); // Count total items including quantities
        $("#cart-count").text(totalItems);
    }

    function updateCartInDatabase(action, data) {
        $.ajax({
            url: 'update_quantity.php',
            type: 'POST',
            data: {
                action: action,
                productID: data.productID,
                quantity: data.quantity,
                price: data.price,
                email: userEmail,
                cartID: cartID
            },
            success: function (response) {
                console.log('Database action successful:', response);
            },
            error: function (xhr, status, error) {
                alert('Error interacting with the database: ' + xhr.status + ' ' + xhr.statusText);
                console.log('Error details:', xhr.responseText);
            }
        });
    }

    // Initial fetch of cart items when the page loads
    fetchCart();

    $(document).on('click', '.add-to-cart', function () {
        const productId = $(this).data('id');
        const productName = $(this).data('name');
        const productPrice = parseFloat($(this).data('price'));
        const productImageUrl = $(this).data('image');

        let found = false;

        cart.forEach(item => {
            if (item.id === productId) {
                item.quantity += 1;
                found = true;
            }
        });

        if (!found) {
            cart.push({
                id: productId,
                name: productName,
                price: productPrice,
                quantity: 1,
                imageUrl: productImageUrl
            });
        }

        updateCartInDatabase('add', { productID: productId, quantity: 1, price: productPrice });
        fetchCart();
    });

    $(document).on('click', '.update-quantity', function () {
        const productId = $(this).data('id');

        cart.forEach(item => {
            if (item.id === productId) {
                item.quantity += 1;
                updateCartInDatabase('update', { cartID: cartID, productID: productId, quantity: item.quantity, price: item.price });
            }
        });

        fetchCart();
    });

    $(document).on('click', '.decrease-quantity', function () {
        const productId = $(this).data('id');

        cart.forEach(item => {
            if (item.id === productId) {
                if (item.quantity > 1) {
                    item.quantity -= 1;
                    updateCartInDatabase('update', { cartID: cartID, productID: productId, quantity: item.quantity, price: item.price });
                } else {
                    cart = cart.filter(i => i.id !== productId);
                    updateCartInDatabase('remove', { cartID: cartID, productID: productId });
                }
            }
        });

        fetchCart();
    });

    $(document).on('click', '.remove-item', function () {
        const productId = $(this).data('id');

        cart = cart.filter(item => item.id !== productId);
        updateCartInDatabase('remove', { cartID: cartID, productID: productId });
        fetchCart();
    });

    $('#checkout-cart').click(function () {
        if (cart.length === 0) {
            alert('Your cart is empty.');
            return;
        }

        $.ajax({
            url: 'place_order.php',
            type: 'POST',
            data: {
                email: userEmail,
                cart: JSON.stringify(cart),
                cartID: cartID
            },
            dataType: 'json',
            success: function (response) {
                if (response.error) {
                    alert('Error placing order: ' + response.error);
                } else {
                    displayOrderDetails(response.orderID);
                }
            },
            error: function (xhr, status, error) {
                alert('Error placing order: ' + xhr.status + ' ' + xhr.statusText);
                console.log('Error details:', xhr.responseText);
            }
        });
    });

    $('#cancel-cart').click(function () {
        cart = [];
        fetchCart();
        $('#cart').hide();
        if (cartID) {
            updateCartInDatabase('clear', { cartID: cartID });
        }
    });
});
</script>

    


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const cartButtons = document.querySelectorAll('.add-to-cart');

            cartButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const productId = this.getAttribute('data-id');
                    const productName = this.getAttribute('data-name');
                    const productPrice = this.getAttribute('data-price');

                    if (productId && productName && productPrice) {
                        console.log('Product ID:', productId);
                        console.log('Product Name:', productName);
                        console.log('Product Price:', productPrice);

                        // Add your cart logic here
                    } else {
                        console.error('Missing product data');
                    }
                });
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Store a unique session ID or timestamp in localStorage
            const sessionId = Date.now().toString();
            localStorage.setItem('sessionId', sessionId);

            // Event listener for localStorage changes
            window.addEventListener('storage', function (event) {
                if (event.key === 'sessionId' && event.newValue !== sessionId) {
                    // If the session ID has changed, log out the user
                    window.location.href = '/DailyDeals/Forms/logout.php';
                }
            });

            // Listen for the page unload event to update the session ID
            window.addEventListener('beforeunload', function () {
                localStorage.removeItem('sessionId');
            });
        });
    </script>



</body>

</html>