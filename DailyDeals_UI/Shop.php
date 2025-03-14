

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
                            <a href="./Homepage.php"><img src="img/logo.png" alt="DailyDeals Logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <nav class="header__menu">
                            <ul>
                                <li><a href="./Homepage.php">Home</a></li>
                                <li class="active"><a href="./Shop.php">Shop</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="header__menu__dropdown">
                                        <li><a href="./shop-details.php">Shop Details</a></li>
                                        <li><a href="./cart.php">Shoping Cart</a></li>
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
                            <h2>dailydeals</h2>
                            <div class="breadcrumb__option">
                                <a href="./index.html">Home</a>
                                <span>Shop</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Section End -->

        <!-- Product Section Begin -->
        <section class="product spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-5">
                        <div class="sidebar">
                            <div class="sidebar__item">
                                <h4>Department</h4>
                                <ul>
                                    <li><a href="Shop.php?category=2">Vegetables</a></li>
                                    <!-- <li><a href="#">Fruit </a></li> -->
                                    <li><a href="Shop.php?category=3">Dairy </a></li>
                                    <!-- <li><a href="#">Cold Drink </a></li> -->
                                    <li><a href="Shop.php?category=1">Fruits </a></li>
                                    <!-- <li><a href="#">Fresh Meat</a></li>
                                            <li><a href="#">Fruit & Nut Gifts</a></li>
                                            <li><a href="#">Fresh Berries</a></li>
                                            <li><a href="#">Ocean Foods</a></li>
                                            <li><a href="#">Butter & Eggs</a></li>
                                            <li><a href="#">Fastfood</a></li>
                                            <li><a href="#">Fresh Onion</a></li>
                                            <li><a href="#">Papayaya & Crisps</a></li>
                                            <li><a href="#">Oatmeal</a></li> -->
                                </ul>
                            </div>
                            <!-- <div class="sidebar__item">
                                          <h4>Price</h4>
                                          <div class="price-range-wrap">
                                              <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                                  data-min="10" data-max="540">
                                                  <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                                  <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                                  <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                              </div>
                                              <div class="range-slider">
                                                  <div class="price-input">
                                                      <input type="text" id="minamount">
                                                      <input type="text" id="maxamount">
                                                  </div>
                                              </div>
                                          </div>
                                      </div> -->
                            <!-- <div class="sidebar__item sidebar__item__color--option"> 
                                          <h4>Colors</h4>
                                          <div class="sidebar__item__color sidebar__item__color--white">
                                              <label for="white">
                                                  White
                                                  <input type="radio" id="white">
                                              </label>
                                          </div>
                                          <div class="sidebar__item__color sidebar__item__color--gray">
                                              <label for="gray">
                                                  Gray
                                                  <input type="radio" id="gray">
                                              </label>
                                          </div>
                                          <div class="sidebar__item__color sidebar__item__color--red">
                                              <label for="red">
                                                  Red
                                                  <input type="radio" id="red">
                                              </label>
                                          </div>
                                          <div class="sidebar__item__color sidebar__item__color--black">
                                              <label for="black">
                                                  Black
                                                  <input type="radio" id="black">
                                              </label>
                                          </div>
                                          <div class="sidebar__item__color sidebar__item__color--blue">
                                              <label for="blue">
                                                  Blue
                                                  <input type="radio" id="blue">
                                              </label>
                                          </div>
                                          <div class="sidebar__item__color sidebar__item__color--green">
                                              <label for="green">
                                                  Green
                                                  <input type="radio" id="green">
                                              </label>
                                          </div>
                                      </div>
                                      <div class="sidebar__item">
                                          <h4>Popular Size</h4>
                                          <div class="sidebar__item__size">
                                              <label for="large">
                                                  Large
                                                  <input type="radio" id="large">
                                              </label>
                                          </div>
                                          <div class="sidebar__item__size">
                                              <label for="medium">
                                                  Medium
                                                  <input type="radio" id="medium">
                                              </label>
                                          </div>
                                          <div class="sidebar__item__size">
                                              <label for="small">
                                                  Small
                                                  <input type="radio" id="small">
                                              </label>
                                          </div>
                                          <div class="sidebar__item__size">
                                              <label for="tiny">
                                                  Tiny
                                                  <input type="radio" id="tiny">
                                              </label>
                                          </div>
                                      </div> -->
                            <!--                  <div class="sidebar__item">
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
                                                                <span> ₹ 60.00</span>
                                                             </div>
                                                          </a>
                                                          <a href="#" class="latest-product__item">
                                                             <div class="latest-product__item__pic">
                                                                <img src="img/latest-product/lp-2.jpg" alt="">
                                                             </div>
                                                             <div class="latest-product__item__text">
                                                                <h6> capsicum chilli</h6>
                                                                <span>₹ 70.00</span>
                                                             </div>
                                                          </a>
                                                          <a href="#" class="latest-product__item">
                                                             <div class="latest-product__item__pic">
                                                                <img src="img/latest-product/lp-3.jpg" alt="">
                                                             </div>
                                                             <div class="latest-product__item__text">
                                                                <h6>Cucumber</h6>
                                                                <span>₹ 80.00</span>
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
                                                                <span> ₹ 60.00</span>
                                                             </div>
                                                          </a>
                                                          <a href="#" class="latest-product__item">
                                                             <div class="latest-product__item__pic">
                                                                <img src="img/latest-product/lp-5.jpg" alt="">
                                                             </div>
                                                             <div class="latest-product__item__text">
                                                                <h6> Broccoli</h6>
                                                                <span>₹ 70.00</span>
                                                             </div>
                                                          </a>
                                                          <a href="#" class="latest-product__item">
                                                             <div class="latest-product__item__pic">
                                                                <img src="img/latest-product/lp-7.jpg" alt="">
                                                             </div>
                                                             <div class="latest-product__item__text">
                                                                <h6>Popato</h6>
                                                                <span>₹ 40.00</span>
                                                             </div>
                                                          </a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>-->
                            <!-- Include jQuery -->
                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                            <!-- Latest Products HTML Structure -->
                            <div class="sidebar__item">
                                <div class="latest-product__text">
                                    <h4>Latest Products</h4>
                                    <div class="latest-product__slider owl-carousel" id="latest-products-container">
                                        <!-- Latest products will be inserted here -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-9 col-md-7">
                        <!--               <div class="product__discount">
                                          <div class="section-title product__discount__title">
                                             <h2>Sale Off</h2>
                                          </div>
                                          <div class="row">
                                             <div class="product__discount__slider owl-carousel">
                                                <div class="col-lg-4">
                                                   <div class="product__discount__item">
                                                      <div class="product__discount__item__pic set-bg"
                                                         data-setbg="img/product/discount/pd-1.jpg">
                                                         <div class="product__discount__percent">-20%</div>
                                                         <ul class="product__item__pic__hover">
                                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                         </ul>
                                                      </div>
                                                      <div class="product__discount__item__text">
                                                         <span>Vegetable</span>
                                                         <h5><a href="#"> Potato’package</a></h5>
                                                         <div class="product__item__price">₹420.00 <span>₹460.00</span></div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-lg-4">
                                                   <div class="product__discount__item">
                                                      <div class="product__discount__item__pic set-bg"
                                                         data-setbg="img/product/discount/pd-2.jpg">
                                                         <div class="product__discount__percent">-20%</div>
                                                         <ul class="product__item__pic__hover">
                                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                         </ul>
                                                      </div>
                                                      <div class="product__discount__item__text">
                                                         <span>Vegetables</span>
                                                         <h5><a href="#">Vegetables’package</a></h5>
                                                         <div class="product__item__price">₹300.00 <span>₹ 360.00</span></div>
                                                      </div>
                                                   </div>
                                                </div>
                                                 <div class="col-lg-4">
                                                                <div class="product__discount__item">
                                                                    <div class="product__discount__item__pic set-bg"
                                                                        data-setbg="img/product/discount/pd-3.jpg">
                                                                        <div class="product__discount__percent">-20%</div>
                                                                        <ul class="product__item__pic__hover">
                                                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product__discount__item__text">
                                                                        <span>Dried Fruit</span>
                                                                        <h5><a href="#">Mixed Fruitss</a></h5>
                                                                        <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                <div class="col-lg-4">
                                                   <div class="product__discount__item">
                                                      <div class="product__discount__item__pic set-bg"
                                                         data-setbg="img/product/discount/pd-4.jpg">
                                                         <div class="product__discount__percent">-20%</div>
                                                         <ul class="product__item__pic__hover">
                                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                         </ul>
                                                      </div>
                                                      <div class="product__discount__item__text">
                                                         <span>Vegetable</span>
                                                         <h5><a href="#">Cucumber’package</a></h5>
                                                         <div class="product__item__price">₹700.0 <span>₹740.00</span></div>
                                                      </div>
                                                   </div>
                                                </div>
                                                 <div class="col-lg-4">
                                                                <div class="product__discount__item">
                                                                    <div class="product__discount__item__pic set-bg"
                                                                        data-setbg="img/product/discount/pd-5.jpg">
                                                                        <div class="product__discount__percent">-20%</div>
                                                                        <ul class="product__item__pic__hover">
                                                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product__discount__item__text">
                                                                        <span>Dried Fruit</span>
                                                                        <h5><a href="#"></a></h5>
                                                                        <div class="product__item__price">₹30.00 <span>₹36.00</span></div>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                <div class="col-lg-4">
                                                   <div class="product__discount__item">
                                                      <div class="product__discount__item__pic set-bg"
                                                         data-setbg="img/product/discount/pd-6.jpg">
                                                         <div class="product__discount__percent">-20%</div>
                                                         <ul class="product__item__pic__hover">
                                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                         </ul>
                                                      </div>
                                                      <div class="product__discount__item__text">
                                                         <span>Vegetable</span>
                                                         <h5><a href="#">Broccoli’package</a></h5>
                                                         <div class="product__item__price">₹300.00 <span>₹330.00</span></div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>-->
                        <div class="filter__item">
                            <div class="row">
                                <div class="col-lg-4 col-md-5">
                                    <div class="filter__sort">
                                        <span>Sort By</span>
                                        <select>
                                            <option value="0">Default</option>
                                            <option value="0">Default</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="filter__found">
<!--                                        <h6><span>1</span> Products found</h6>-->
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-3">
                                    <div class="filter__option">
                                        <span class="icon_grid-2x2"></span>
                                        <span class="icon_ul"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        


                        <div id="product-container" class="row">
                            <?php
                            //// Database connection details
                            //                            $servername = "localhost";
                            //                            $username = "root";
                            //                            $password = "";
                            //                            $dbname = "dailydeals";
                            //
                            //// Create connection
                            //                            $conn = new mysqli($servername, $username, $password, $dbname);
                            //
                            //// Check connection
                            //                            if ($conn->connect_error) {
                            //                                die("Connection failed: " . $conn->connect_error);
                            //                            }
                            //
                            //// Fetch all products from the database
                            //                            $sql = "SELECT ProductID , Name, Price, ImageURL  FROM product";
                            //                            $result = $conn->query($sql);
                            //
                            //                            if ($result->num_rows > 0) {
                            //                                // Output data of each row
                            //                                while ($row = $result->fetch_assoc()) {
                            //                                    $productID = htmlspecialchars($row['ProductID'], ENT_QUOTES, 'UTF-8');
                            //                                    $name = htmlspecialchars($row['Name'], ENT_QUOTES, 'UTF-8');
                            //                                    $price = htmlspecialchars($row['Price'], ENT_QUOTES, 'UTF-8');
                            //                                    $imageUrl = htmlspecialchars($row['ImageURL'], ENT_QUOTES, 'UTF-8');
                            //
                            //                                    echo '
                            //        <div class="col-lg-4 col-md-6 col-sm-6">
                            //            <div class="product__item">
                            //                <div class="product__item__pic set-bg" data-setbg="' . $imageUrl . '">
                            //                    <ul class="product__item__pic__hover">
                            //                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            //                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            //<li><a href="#"><i data-id="' . $row['ProductID'] . '" data-name="' . $name . '" data-price="' . $price . '" class="fa fa-shopping-cart add-to-cart"></i></a></li>
                            //
                            //                    </ul>
                            //                </div>
                            //                <div class="product__item__text">
                            //                    <h6><a href="#">' . $name . '</a></h6>
                            //                    <h5>₹ ' . $price . '</h5>
                            //                </div>
                            //            </div>
                            //        </div>';
                            //                                }
                            //                            } else {
                            //                                echo "No products found.";
                            //                            }
                            //
                            //                            $conn->close();
                            //                            
                            ?><?php
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

// Retrieve search term and category from query parameters
$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';
$categoryID = isset($_GET['category']) ? intval($_GET['category']) : 0;

// Sanitize search term to prevent SQL injection
$searchTerm = $conn->real_escape_string($searchTerm);

// Construct SQL query with search and category filtering
$sql = "SELECT ProductID, Name, Price, ImageURL 
FROM product 
WHERE 1=1 
AND CategoryID IN (1, 2)
 ";
if (!empty($searchTerm)) {
    $sql .= " AND Name LIKE '%$searchTerm%'";
}
if ($categoryID > 0) {
    $sql .= " AND CategoryID = $categoryID";
}

// Execute the query
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
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
                <li style="margin-right: 10px;"><a href="#"><i class="fa fa-heart"></i></a></li>
                <li style="margin-right: 30px;"><a href="#"><i class="fa fa-retweet"></i></a></li>
                <li class="cart-icon" id="cart-icon-' . $productID . '" style=" margin-top: -40px;">
                    <a href="#"><i data-id="' . $productID . '" data-name="' . $name . '" data-price="' . $price . '" data-image="' . $imageUrl . '" class="fa fa-shopping-cart add-to-cart"></i></a>
                </li>
            </ul>
        </div>
        <div class="product__item__text">
            <h6><a href="#">' . $name . '</a></h6>
            <h5 id="price-' . $productID . '">₹ ' . $price . '</h5>
            <div class="product__item__quantity">
                <label for="quantity-' . $productID . '">Select Quantity:</label>
                <select id="quantity-' . $productID . '" class="product-quantity" onchange="showCartIcon(' . $productID . ')">
                    <option value="">Select Quantity</option>
                    <option value="100 GM">100 GM</option>
                     <option value="500 GM">500 GM</option>
                    <option value="1 KG">1 KG</option>
                </select>
            </div>
        </div>
    </div>
</div>';

    }
} else {
    echo "No products found.";
}

$conn->close();
?>
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

// Retrieve search term and category from query parameters
$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';
$categoryID = isset($_GET['category']) ? intval($_GET['category']) : 0;

// Sanitize search term to prevent SQL injection
$searchTerm = $conn->real_escape_string($searchTerm);

// Construct SQL query with search and category filtering
$sql = "SELECT ProductID, Name, Price, ImageURL 
FROM product 
WHERE 1=1 
AND CategoryID IN (3)
 ";
if (!empty($searchTerm)) {
    $sql .= " AND Name LIKE '%$searchTerm%'";
}
if ($categoryID > 0) {
    $sql .= " AND CategoryID = $categoryID";
}

// Execute the query
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
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
                <li style="margin-right: 10px;"><a href="#"><i class="fa fa-heart"></i></a></li>
                <li style="margin-right: 30px;"><a href="#"><i class="fa fa-retweet"></i></a></li>
                <li class="cart-icon" id="cart-icon-' . $productID . '" style=" margin-top: -40px;">
                    <a href="#"><i data-id="' . $productID . '" data-name="' . $name . '" data-price="' . $price . '" data-image="' . $imageUrl . '" class="fa fa-shopping-cart add-to-cart"></i></a>
                </li>
            </ul>
        </div>
        <div class="product__item__text">
            <h6><a href="#">' . $name . '</a></h6>
            <h5 id="price-' . $productID . '">₹ ' . $price . '</h5>
            <div class="product__item__quantity">
                <label for="quantity-' . $productID . '">Select Quantity:</label>
                <select id="quantity-' . $productID . '" class="product-quantity" onchange="showCartIcon(' . $productID . ')">
                    <option value="">Select Quantity</option>
                    
                    <option value="1 Liter">1 Liter</option>
                </select>
            </div>
        </div>
    </div>
</div>';

    }
} else {
    echo "No products found.";
}

$conn->close();
?>                          

    <script>
  function showCartIcon(productID) {
    const quantitySelect = document.getElementById(`quantity-${productID}`);
    const selectedQuantity = quantitySelect.value;

    if (selectedQuantity) {
        // Fetch the updated price from the server
        const url = `get_price.php?productID=${productID}&unit=${selectedQuantity}`;
        console.log(`Fetching price: ${url}`);
        
        fetch(url)
            .then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                console.log(data); // Debug the response
                if (data.success) {
                    const priceElement = document.getElementById(`price-${productID}`);
                    priceElement.innerHTML = `₹ ${data.price}`;

                    // Update the price in the cart button's data attribute
                    const cartIcon = document.querySelector(`#cart-icon-${productID} .add-to-cart`);
                    cartIcon.setAttribute('data-price', data.price);
                } else {
                    alert(data.message || 'Failed to fetch price');
                }
            })
            .catch(error => {
                console.error('Error fetching price:', error);
            });
    }
}


    </script>

                        </div>
                        <div id="product-list" class="row">
                            <!-- Products will be loaded here dynamically -->
                        </div>
                        <!--                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                                  <div class="product__item">
                                                                      <div class="product__item__pic set-bg" data-setbg="img/product/product-11.jpg">
                                                                          <ul class="product__item__pic__hover">
                                                                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                                              <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                                              <li><a href="#"><i data-id="1" data-name="Tomato" data-price="900.00" class="fa fa-shopping-cart add-to-cart"></i></a></li>
                                  
                                                                          </ul>
                                                                      </div>
                                                                      <div class="product__item__text">
                                                                          <h6><a href="#">Gehu</a></h6>
                                                                          <h5>₹ 900.00 per 20kg</h5>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                              <div class="col-lg-4 col-md-6 col-sm-6">
                                                                  <div class="product__item">
                                                                      <div class="product__item__pic set-bg" data-setbg="img/product/product-2.jpg">
                                                                          <ul class="product__item__pic__hover">
                                                                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                                              <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                                              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                                          </ul>
                                                                      </div>
                                                                      <div class="product__item__text">
                                                                          <h6><a href="#">Capchicame Chili</a></h6>
                                                                          <h5>₹ 40.00</h5>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                              <div class="col-lg-4 col-md-6 col-sm-6">
                                                                  <div class="product__item">
                                                                      <div class="product__item__pic set-bg" data-setbg="img/product/product-3.jpg">
                                                                          <ul class="product__item__pic__hover">
                                                                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                                              <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                                              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                                          </ul>
                                                                      </div>
                                                                      <div class="product__item__text">
                                                                          <h6><a href="#">Cucumber</a></h6>
                                                                          <h5>₹ 80.00</h5>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                              <div class="col-lg-4 col-md-6 col-sm-6">
                                                                  <div class="product__item">
                                                                      <div class="product__item__pic set-bg" data-setbg="img/product/product-4.jpg">
                                                                          <ul class="product__item__pic__hover">
                                                                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                                              <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                                              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                                          </ul>
                                                                      </div>
                                                                      <div class="product__item__text">
                                                                          <h6><a href="#">Milk</a></h6>
                                                                          <h5>₹ 60.00</h5>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                              <div class="col-lg-4 col-md-6 col-sm-6">
                                                                  <div class="product__item">
                                                                      <div class="product__item__pic set-bg" data-setbg="img/product/product-12.jpg">
                                                                          <ul class="product__item__pic__hover">
                                                                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                                              <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                                              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                                          </ul>
                                                                      </div>
                                                                      <div class="product__item__text">
                                                                          <h6><a href="#">Tomato</a></h6>
                                                                          <h5>₹ 50.00</h5>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                              <div class="col-lg-4 col-md-6 col-sm-6">
                                                                  <div class="product__item">
                                                                      <div class="product__item__pic set-bg" data-setbg="img/product/product-6.jpg">
                                                                          <ul class="product__item__pic__hover">
                                                                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                                              <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                                              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                                          </ul>
                                                                      </div>
                                                                      <div class="product__item__text">
                                                                          <h6><a href="#">Potato</a></h6>
                                                                          <h5>₹ 40.00</h5>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                              <div class="col-lg-4 col-md-6 col-sm-6">
                                                                  <div class="product__item">
                                                                      <div class="product__item__pic set-bg" data-setbg="img/product/product-7.jpg">
                                                                          <ul class="product__item__pic__hover">
                                                                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                                              <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                                              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                                          </ul>
                                                                      </div>
                                                                      <div class="product__item__text">
                                                                          <h6><a href="#">Coffee</a></h6>
                                                                          <h5>₹ 150.00</h5>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                              <div class="col-lg-4 col-md-6 col-sm-6">
                                                                  <div class="product__item">
                                                                      <div class="product__item__pic set-bg" data-setbg="img/product/product-8.jpg">
                                                                          <ul class="product__item__pic__hover">
                                                                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                                              <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                                              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                                          </ul>
                                                                      </div>
                                                                      <div class="product__item__text">
                                                                          <h6><a href="#">Oil</a></h6>
                                                                          <h5>₹ 90.00</h5>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                              <div class="col-lg-4 col-md-6 col-sm-6">
                                                                  <div class="product__item">
                                                                      <div class="product__item__pic set-bg" data-setbg="img/product/product-9.jpg">
                                                                          <ul class="product__item__pic__hover">
                                                                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                                              <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                                              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                                          </ul>
                                                                      </div>
                                                                      <div class="product__item__text">
                                                                          <h6><a href="#">Moong</a></h6>
                                                                          <h5>₹ 70.00</h5>
                                                                      </div>
                                                                  </div>
                                                              </div>-->
                    </div>
                    <!-- <div class="product__pagination">
                                 <a href="#">1</a>
                                 <a href="#">2</a>
                                 <a href="#">3</a>
                                 <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                             </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

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
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
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


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#search-form').submit(function (event) {
                event.preventDefault();

                const query = $('#search-bar').val(); // Update this line

                $.ajax({
                    url: 'DailyDeals_UI/Searching_Data.php',
                    type: 'GET',
                    data: {
                        query: query
                    },
                    success: function (data) {
                        $('#product-container').html(data);
                    },
                    error: function (xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
//            var userEmail = "projectit6789@gmail.com";
//
//            $(document).ready(function () {
//                let cart = [];
//
//                function updateCart() {
//                    let cartItems = $('#cart-items');
//                    let cartTotal = 0;
//
//                    cartItems.empty();
//
//                    cart.forEach(item => {
//                        cartItems.append(`
//                     <li>
//                         <img src="${item.imageUrl}" alt="${item.name}" style="width:70px; height:50px;">
//                         ${item.name} - ₹${item.price} x ${item.quantity}
//                         <button style="padding:5px 10px; border:none; color:#fff; background-color:#7fad39;" class="update-quantity" data-id="${item.id}">+</button>
//                         <button style="padding:5px 10px; border:none; color:#fff; background-color:#7fad39;" class="decrease-quantity" data-id="${item.id}">-</button>
//                         <button style="padding:10px 20px; border:none; border-radius:10px; color:#fff; background-color:#7fad39;" class="remove-item" data-id="${item.id}">Remove</button>
//                     </li>
//                     `);
//                        cartTotal += item.price * item.quantity;
//                    });
//
//                    $('#cart-total').text(cartTotal.toFixed(2));
//                }
//
//                function updateCartInDatabase(action, data) {
//                    $.ajax({
//                        url: 'cart_actions.php',
//                        type: 'POST',
//                        data: {
//                            action: action,
//                            ...data,
//                            email: userEmail
//                        },
//                        success: function (response) {
//                            console.log('Database action successful:', response);
//                        },
//                        error: function (xhr, status, error) {
//                            alert('Error interacting with the database: ' + xhr.status + ' ' + xhr.statusText);
//                            console.log('Error details:', xhr.responseText);
//                        }
//                    });
//                }
//
//                $(document).on('click', '.add-to-cart', function () {
//                    const productId = $(this).data('id');
//                    const productName = $(this).data('name');
//                    const productPrice = parseFloat($(this).data('price'));
//                    const productImageUrl = $(this).data('image');
//
//                    let found = false;
//
//                    cart.forEach(item => {
//                        if (item.id === productId) {
//                            item.quantity += 1;
//                            found = true;
//                        }
//                    });
//
//                    if (!found) {
//                        cart.push({
//                            id: productId,
//                            name: productName,
//                            price: productPrice,
//                            quantity: 1,
//                            imageUrl: productImageUrl
//                        });
//                    }
//
//                    updateCart();
//                    updateCartInDatabase('add', {productId, quantity: 1});
//                });
//
//                $(document).on('click', '.update-quantity', function () {
//                    const productId = $(this).data('id');
//
//                    cart.forEach(item => {
//                        if (item.id === productId) {
//                            item.quantity += 1;
//                            updateCartInDatabase('update', {productId, quantity: item.quantity});
//                        }
//                    });
//
//                    updateCart();
//                });
//
//                $(document).on('click', '.decrease-quantity', function () {
//                    const productId = $(this).data('id');
//
//                    cart.forEach(item => {
//                        if (item.id === productId) {
//                            if (item.quantity > 1) {
//                                item.quantity -= 1;
//                                updateCartInDatabase('update', {productId, quantity: item.quantity});
//                            } else {
//                                cart = cart.filter(i => i.id !== productId);
//                                updateCartInDatabase('remove', {productId});
//                            }
//                        }
//                    });
//
//                    updateCart();
//                });
//
//                $(document).on('click', '.remove-item', function () {
//                    const productId = $(this).data('id');
//                    cart = cart.filter(item => item.id !== productId);
//                    updateCartInDatabase('remove', {productId});
//                    updateCart();
//                });
//
//                $('#checkout-cart').click(function () {
//                    alert('Checkout functionality is not implemented yet.');
//                });
//
//                $('#cancel-cart').click(function () {
//                    cart = [];
//                    updateCart();
//                    $('#cart').hide();
//                    updateCartInDatabase('clear');
//                });
//            });
//        </script>

    <script>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
$(document).ready(function () {
    // Assuming PHP session is already started and handled above

    // Initialize userEmail with session data
    var userEmail = "<?php echo isset($_SESSION['Email']) ? $_SESSION['Email'] : ''; ?>";
 

    var cart = [];
    var cartID = null;

                function updateCart() {
                    let cartItems = $('#cart-items');
                    let cartTotal = 0;

                    cartItems.empty();

                     cart.forEach(item => {
//                        cartItems.append(`
//                     <li>
//                         <img src="${item.imageUrl}" alt="${item.name}" style="width:70px; height:50px;">
//                         ${item.name} - ₹${item.price} x ${item.quantity}
//                         <button style="padding:5px 10px; border:none; color:#fff; background-color:#7fad39;" class="update-quantity" data-id="${item.id}">+</button>
//                         <button style="padding:5px 10px; border:none; color:#fff; background-color:#7fad39;" class="decrease-quantity" data-id="${item.id}">-</button>
//                         <button style="padding:10px 20px; border:none; border-radius:10px; color:#fff; background-color:#7fad39;" class="remove-item" data-id="${item.id}">Remove</button>
//                     </li>
//                     `);
                        cartTotal += item.price * item.quantity;
                    });

                    $('#cart-total').text(cartTotal.toFixed(2));
                }

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
    const totalProducts = cart.length; // Count unique products in the cart
    $("#cart-count").text(totalProducts);
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
            cartID: cartID,
            unitid: data.unitid // Correct field name used here
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
    updateCart();
    fetchCart();
    
$(document).on('click', '.add-to-cart', function () {
    if (userEmail === '') {
        alert('Please log in to continue.');
        window.location.href = 'http://localhost/DailyDeals/Forms/Sing.php'; // Redirect to login page
        return; // Prevent further script execution
    }

    const productId = $(this).data('id');
    const productName = $(this).data('name');
    let productPrice = parseFloat($(this).data('price'));
    const productImageUrl = $(this).data('image');

    let selectedQuantity = $(`#quantity-${productId}`).val();
    if (!selectedQuantity) {
        alert('Please select a quantity first.');
        return; // Prevent adding to cart if no quantity is selected
    }
    
// Fetch updated price based on selected quantity and unit
const url = `get_price.php?productID=${productId}&unit=${selectedQuantity}`;
console.log(`Fetching price: ${url}`);

fetch(url)
    .then(response => {
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.json();
    })
    .then(data => {
        if (data.success) {
            // Parse price and unit ID from the response
            const productPrice = parseFloat(data.price);
            const unitId = data.unit_id; // Extract unit_id from the response

            // Add or update the product in the cart array
            let found = false;

            cart.forEach(item => {
                if (item.id === productId && item.unitId === unitId) {
                    item.quantity += 1; // Update quantity if the same unit is added
                    found = true;
                }
            });

            if (!found) {
                // Add new item to the cart if not already present
                cart.push({
                    id: productId,
                    name: productName,
                    price: productPrice,
                    quantity: 1,
                     unitid: unitId,
                    imageUrl: productImageUrl
                    // Store the unit ID
                });
            }

            // Update the cart in the database
            updateCartInDatabase('add', { productID: productId, unitid: unitId, quantity: 1 , price: productPrice });
            updateCart();
            fetchCart();
        } else {
            alert(data.message || 'Failed to fetch price');
        }
    })
    .catch(error => {
        console.error('Error fetching price:', error);
    });

});

    $(document).on('click', '.update-quantity', function () {
        const productId = $(this).data('id');
           const unitid = $(this).data('unit_id');
        cart.forEach(item => {
            if (item.id === productId) {
                item.quantity += 1;
                updateCartInDatabase('update', { cartID: cartID, unitid: unitId, productID: productId, quantity: item.quantity, price: item.price });
            }
        });
    updateCart();

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
//    updateCart();

        fetchCart();
    });

    $(document).on('click', '.remove-item', function () {
        const productId = $(this).data('id');

        cart = cart.filter(item => item.id !== productId);
        updateCartInDatabase('remove', { cartID: cartID, productID: productId });
            updateCart();

        fetchCart();
    });
    
$('#checkout-cart').click(function () {
    if (cart.length === 0) {
        alert("Your cart is empty.");
        return;
    }

    // Map the cart to the required structure
    let cartData = cart.map(item => ({
        ProductID: item.id,
        Quantity: item.quantity,
        Price: item.price,
        unitid: item.unitId
        
        
    }));

    // Collect cart details
    let orderData = {
        cartID: cartID, 
        cartItems: JSON.stringify(cartData),  // Convert array to JSON string
        email: userEmail,
        totalAmount: $('#cart-total').text()
    };

    // Send order data to PHP for processing
    $.ajax({
        url: 'place_order.php',
        type: 'POST',
        data: orderData,
        success: function(response) {
            try {
                // Try to parse the response as JSON (if not already parsed)
                response = typeof response === 'object' ? response : JSON.parse(response);

                if (response.success) {
                    alert("Order placed successfully!");
                    // Redirect to order summary page
                    window.location.href = "payment_details.php?orderID=" + response.orderID;
                } else {
                    alert("Error placing order: " + response.message);
                }
            } catch (e) {
                alert("Error parsing server response.");
            }
        },
        error: function(xhr, status, error) {
            alert("Error processing order: " + xhr.responseText);
        }
    });
});

 

    $('#cancel-cart').click(function () {
        cart = [];
             updateCart();
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
        $(document).ready(function () {
            function loadLatestProducts() {
                $.ajax({
                    url: 'Latest_Product.php',
                    type: 'GET',
                    success: function (response) {
                        $('#latest-products-container').html(response);

                        // Initialize the Owl Carousel
                        $('.latest-product__slider').owlCarousel({
                            items: 1,
                            loop: true,
                            margin: 10,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true
                        });
                    },
                    error: function (xhr, status, error) {
                        console.error('Error fetching latest products:', error);
                    }
                });
            }

            // Load latest products on page load
            loadLatestProducts();
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

    <!-- Owl Carousel CSS & JS (Include these if you haven’t already) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>







</body>

</html>