<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--favicon icon-->
    <link rel="shortcut icon" href="https://grostore.themetags.com/public/backend/assets/img/favicon.png?v=v4.3.0">

    <!--title-->
    <title>
            Add Product : DailyDeals Online Store
    </title>
    <style>/* Form container */
#product-form {
    background: #f9f9f9;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Card styling */
.card {
    background: #ffffff;
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    margin-bottom: 20px;
    padding: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
}

/* Headings */
.card h5 {
    color: #333;
    font-size: 1.25rem;
    margin-bottom: 15px;
}

/* Form labels */
label {
    display: block;
    font-weight: 600;
    margin-bottom: 5px;
    color: #555;
}

/* Form inputs */
input[type="text"],
input[type="number"],
textarea,
select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
    margin-bottom: 15px;
}

input[type="file"] {
    border: none;
}

/* Submit button */
button[type="submit"] {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

/* Checkbox */
input[type="checkbox"] {
    margin-right: 10px;
}

/* Responsive design */
@media (max-width: 768px) {
    .card {
        padding: 15px;
    }

    button[type="submit"] {
        width: 100%;
    }
}
.container {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    background-color: #f9f9f9;
}

h5 {
    font-size: 24px;
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
    margin-top: 15px;
}

input[type="text"], input[type="number"], textarea, select {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="file"] {
    margin-bottom: 15px;
}

.error-message {
    color: #d9534f;
    background-color: #f2dede;
    border: 1px solid #ebccd1;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 5px;
}

.success-message {
    color: #3c763d;
    background-color: #dff0d8;
    border: 1px solid #d6e9c6;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 5px;
}

.btn-primary {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn-primary:hover {
    background-color: #0056b3;
}

</style>
    <!--build:css-->
    <link href="https://grostore.themetags.com/public/backend/assets/css/main.css?v=v4.3.0" rel="stylesheet" type="text/css" />
<link href="https://grostore.themetags.com/public/backend/custom/custom.css?v=v4.3.0" rel="stylesheet" type="text/css" />
    <!-- end build -->
</head>

<body>
   <!--preloader start-->
    <div id="preloader" class="bg-light-subtle">
        <div class="preloader-wrap">
 <img src="https://grostore.themetags.com/public/uploads/media/yqqPV512Gk5DMpvCj2UllKrCl52bam3yD6QvfiPP.png" class="tt-brand-favicon ms-1" alt="favicon" />
               <h3>DailyDeals</h3>
               <div class="loading-bar"></div>
        </div>
    </div>
    <!--preloader end-->

    <aside class="tt-sidebar bg-light-subtle" id="sidebar">
    <div class="tt-brand">
        <a href="https://grostore.themetags.com/admin"
            class="tt-brand-link">
 <img src="https://grostore.themetags.com/public/uploads/media/yqqPV512Gk5DMpvCj2UllKrCl52bam3yD6QvfiPP.png" class="tt-brand-favicon ms-1" alt="favicon" />

            <h2>DailyDeals</h2>
            </a>
        <a href="javascript:void(0);" class="tt-toggle-sidebar">
            <span><i data-feather="chevron-left"></i></span>
        </a>
    </div>

    <div class="tt-sidebar-nav pb-9 pt-4" data-simplebar>

        <ul class="tt-side-nav">
            <li class="side-nav-item nav-item tt-sidebar-user">
                <div class="side-nav-link bg-secondary-subtle mx-2 rounded-3 px-2">
                    <div class="tt-user-avatar lh-1">
                        <div class="avatar avatar-md status-online">
                            <img class="rounded-circle" src="https://grostore.themetags.com/public/uploads/media/dtkoInw3SD3IF3Q2I1jFtEDiE96mDD46RHB9RdxN.jpg"
                                alt="avatar">
                        </div>
                    </div>
                    <div class="tt-nav-link-text ms-2">
                        <h6 class="mb-0 lh-1 tt-line-clamp tt-clamp-1">Aayush</h6>
                                                    <span
                                class="text-muted fs-sm">Super Admin</span>
                                            </div>
                </div>
            </li>
        </ul>
        <nav class="navbar navbar-vertical navbar-expand-lg">
            <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                <div class="w-100" id="leftside-menu-container">
                                            <ul class="tt-side-nav searchMenu">

    <!-- dashboard -->
    <li class="side-nav-item nav-item">
        <a href="/DailyDeals/Dashboard/Test_Dashboard.php" class="side-nav-link">
            <span class="tt-nav-link-icon"><i data-feather="pie-chart"></i></span>
            <span class="tt-nav-link-text">Dashboard</span>
        </a>
    </li>

    <!-- products -->
    
            <li class="side-nav-item nav-item ">
            <a data-bs-toggle="collapse" href="#sidebarProducts"
                aria-expanded="" aria-controls="sidebarProducts"
                class="side-nav-link tt-menu-toggle">
                <span class="tt-nav-link-icon"><i data-feather="shopping-bag"></i></span>
                <span class="tt-nav-link-text">Products</span>
            </a>

            <div class="collapse " id="sidebarProducts">
                <ul class="side-nav-second-level">

                                            <li
                            class="">
                            <a href="/DailyDeals/Dashboard/products.php" class="">All Products</a>

                        </li>
                    
                                            <li
                            class="">
                            <a href="/DailyDeals/Dashboard/category.php"
                                class="">All Categories</a>
                        </li>
                    
                                           
                                    </ul>
            </div>
        </li>
    
   
    <!-- orders -->
            <li
            class="side-nav-item nav-item ">
            <a href="http://localhost/DailyDeals/Dashboard/Order.php"
                class="side-nav-link ">
                <span class="tt-nav-link-icon"><i data-feather="shopping-cart"></i></span>
                <span class="tt-nav-link-text">
                    <span>Orders</span>

                    
                                            <small class="badge bg-danger">New</small>
                                    </span>
            </a>
        </li>
    
  
  
    <!-- Users -->
    <li class="side-nav-title side-nav-item nav-item mt-3">
        <span class="tt-nav-title-text">Users</span>
    </li>

    <!-- customers -->
            <li class="side-nav-item nav-item">
            <a href="http://localhost/DailyDeals/Dashboard/Customer.php" class="side-nav-link">
                <span class="tt-nav-link-icon"> <i data-feather="users"></i></span>
                <span class="tt-nav-link-text">Customers</span>
            </a>
        </li>
    
    <!-- Reports -->
    <li class="side-nav-title side-nav-item nav-item mt-3">
        <span class="tt-nav-title-text">Reports</span>
    </li>

    <!-- reports -->
    
            <li class="side-nav-item nav-item ">
            <a data-bs-toggle="collapse" href="#reports"
                aria-expanded="" aria-controls="reports"
                class="side-nav-link tt-menu-toggle">
                <span class="tt-nav-link-icon"><i data-feather="bar-chart"></i></span>
                <span class="tt-nav-link-text">Reports</span>
            </a>
            <div class="collapse " id="reports">
                <ul class="side-nav-second-level">

                                       <li class="">
                            <a href="http://localhost/DailyDeals/Dashboard/TPS_Report.php"
                                class="">TPS Report</a>
                        </li>
                    
                                            <li class="">
                            <a href="http://localhost/DailyDeals/Dashboard/MIS_Report.php"
                                class="">MIS Report</a>
                        </li>     
                                    </ul>
            </div>
        </li>
    
                                    </div>
            </div>
        </nav>
    </div>
</aside>     <!--sidebar section end-->


    <!--main content wrapper start-->
    <main class="tt-main-wrapper bg-secondary-subtle"
         id="content" >
        <!--header section start-->
        <header class="tt-top-fixed bg-light-subtle">
    <div class="container-fluid">
        <nav class="navbar navbar-top navbar-expand" id="navbarDefault">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="tt-mobile-toggle-brand d-lg-none d-md-none">
                    <a class="tt-toggle-sidebar pe-3" href="#offcanvasLeft" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasLeft">
                        <i data-feather="menu"></i>
                    </a>
                    <div class="tt-brand pe-3">
                        <a
                            href="https://grostore.themetags.com/admin">
                            <img src="https://grostore.themetags.com/public/uploads/media/yqqPV512Gk5DMpvCj2UllKrCl52bam3yD6QvfiPP.png" class="tt-brand-favicon"
                                alt="favicon" />
                        </a>
                    </div>
                </div>

                
                <div class="tt-search-box d-none d-md-block d-lg-block flex-grow-1 me-4">
                   
                        <div class="input-group">
                            <span class="position-absolute top-50 start-0 translate-middle-y ms-2"> <i
                                    data-feather="search"></i></span>
                            <input class="form-control rounded-start w-100 border-0 bg-transparent searchNav" type="text" name="search">
                            <ul class="search-item">

                            </ul>
                        </div>
                    
                </div>
                <ul class="navbar-nav flex-row align-items-center tt-top-navbar">

                    <li class="nav-item">
                        <a href="http://localhost/DailyDeals/DailyDeals_UI/Homepage.php" class="nav-link tt-visit-store" target="_blank">
                            <i data-feather="globe" class="me-2"></i>
                            Visit Store
                        </a>
                    </li>



                    <li class="nav-item dropdown">
                        
                    <li class="nav-item dropdown tt-curency-lang-dropdown d-none d-md-block">
                        <a href="javascript:void(0);" class="nav-link" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img src="https://grostore.themetags.com/public/backend/assets/img/flags/en.png?v=v4.3.0"
                                alt="country" class="img-fluid me-1"> English
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end py-0 shadow border-0">
                                                            <!-- item-->
                                <li>
                                    <a href="javascript:void(0);"
                                        class="dropdown-item  active "
                                        onclick="changeLocaleLanguage(this)" data-flag="en">
                                        <img src="https://grostore.themetags.com/public/backend/assets/img/flags/en.png?v=v4.3.0"
                                            alt="en" class="img-fluid me-1"> <span
                                            class="align-middle">English</span>
                                    </a>
                                </li>
                                                            <!-- item-->
                                <li>
                                    <a href="javascript:void(0);"
                                        class="dropdown-item "
                                        onclick="changeLocaleLanguage(this)" data-flag="ar-sa">
                                        <img src="https://grostore.themetags.com/public/backend/assets/img/flags/sa.png?v=v4.3.0"
                                            alt="ar-sa" class="img-fluid me-1"> <span
                                            class="align-middle">Arabic</span>
                                    </a>
                                </li>
                                                            <!-- item-->
                                <li>
                                    <a href="javascript:void(0);"
                                        class="dropdown-item "
                                        onclick="changeLocaleLanguage(this)" data-flag="fr">
                                        <img src="https://grostore.themetags.com/public/backend/assets/img/flags/fr.png?v=v4.3.0"
                                            alt="fr" class="img-fluid me-1"> <span
                                            class="align-middle">Français</span>
                                    </a>
                                </li>
                                                            <!-- item-->
                                <li>
                                    <a href="javascript:void(0);"
                                        class="dropdown-item "
                                        onclick="changeLocaleLanguage(this)" data-flag="fr/FR">
                                        <img src="https://grostore.themetags.com/public/backend/assets/img/flags/ad.png?v=v4.3.0"
                                            alt="fr/FR" class="img-fluid me-1"> <span
                                            class="align-middle">French</span>
                                    </a>
                                </li>
                                                            <!-- item-->
                                <li>
                                    <a href="javascript:void(0);"
                                        class="dropdown-item "
                                        onclick="changeLocaleLanguage(this)" data-flag="es">
                                        <img src="https://grostore.themetags.com/public/backend/assets/img/flags/es.png?v=v4.3.0"
                                            alt="es" class="img-fluid me-1"> <span
                                            class="align-middle">es</span>
                                    </a>
                                </li>
                                                            <!-- item-->
                                <li>
                                    <a href="javascript:void(0);"
                                        class="dropdown-item "
                                        onclick="changeLocaleLanguage(this)" data-flag="pt-BR">
                                        <img src="https://grostore.themetags.com/public/backend/assets/img/flags/br.png?v=v4.3.0"
                                            alt="pt-BR" class="img-fluid me-1"> <span
                                            class="align-middle">Portugues</span>
                                    </a>
                                </li>
                                                    </ul>
                    </li>


                    
                    <li class="nav-item dropdown tt-curency-lang-dropdown d-none d-md-block">
                        <a href="#" class="nav-link text-uppercase" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">₹ INR</a>
                        <ul class="dropdown-menu dropdown-menu-end py-0 shadow border-0">

                                                            <li>
                                    <a class="dropdown-item fs-xs text-uppercase" href="javascript:void(0);"
                                        onclick="changeLocaleCurrency(this)" data-currency="usd">
                                        $ usd
                                    </a>
                                </li>
                                                            <li>
                                    <a class="dropdown-item fs-xs text-uppercase" href="javascript:void(0);"
                                        onclick="changeLocaleCurrency(this)" data-currency="INR">
                                        ₹ INR
                                    </a>
                                </li>
                                                            <li>
                                    <a class="dropdown-item fs-xs text-uppercase" href="javascript:void(0);"
                                        onclick="changeLocaleCurrency(this)" data-currency="NGN">
                                        ₦ NGN
                                    </a>
                                </li>
                                                    </ul>
                    </li>


                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link tt-theme-toggle">
                            <div class="tt-theme-light"><i data-feather="moon" class="fs-xm"></i></div>
                            <div class="tt-theme-dark"><i data-feather="sun" class="fs-xm"></i></div>
                        </a>
                    </li>

                    <li>
                        <a class="nav-link position-relative tt-notification" href="#" role="button" id="notificationDropdown"
    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside">
    <i data-feather="bell"></i>
            <span class="tt-notification-dot bg-danger rounded-circle"></span>
    </a>

<div class="dropdown-menu dropdown-menu-end py-0 shadow-sm border-0" aria-labelledby="notificationDropdown">
    <div class="card position-relative border-0">
        <div class="card-body p-0">
            <div class="scrollbar-overlay">

                                                            <div class="p-3 position-relative border-bottom">
                            <a href="https://grostore.themetags.com/admin/orders" class="d-flex align-items-center">
                                <h4 class="fs-md mb-0"><i data-feather="shopping-cart" class="me-1 text-accent"
                                        width="18"></i>
                                    New Order Placed (96)</h4>
                            </a>
                        </div>
                                    

                                                    

                                    
                                                    <div class="p-3 position-relative border-bottom">
                                <a href="dashboard/support/ticket" class="d-flex align-items-center">
                                    <h4 class="fs-md mb-0"><i data-feather="mail" width="18"
                                            class="me-1 text-success"></i>
                                        Blessan Jacobs Submit A ticket</h4>
                                </a>
                            </div>
                                                    <div class="p-3 position-relative border-bottom">
                                <a href="dashboard/support/ticket" class="d-flex align-items-center">
                                    <h4 class="fs-md mb-0"><i data-feather="mail" width="18"
                                            class="me-1 text-success"></i>
                                        Blessan Jacobs Submit A ticket</h4>
                                </a>
                            </div>
                                                    <div class="p-3 position-relative border-bottom">
                                <a href="https://grostore.themetags.com/admin/orders" class="d-flex align-items-center">
                                    <h4 class="fs-md mb-0"><i data-feather="mail" width="18"
                                            class="me-1 text-success"></i>
                                        An order has been procced to delivered</h4>
                                </a>
                            </div>
                                                    <div class="p-3 position-relative border-bottom">
                                <a href="https://grostore.themetags.com/admin/orders" class="d-flex align-items-center">
                                    <h4 class="fs-md mb-0"><i data-feather="mail" width="18"
                                            class="me-1 text-success"></i>
                                        An order has been procced to out_for_delivery</h4>
                                </a>
                            </div>
                                                    <div class="p-3 position-relative border-bottom">
                                <a href="https://grostore.themetags.com/admin/orders" class="d-flex align-items-center">
                                    <h4 class="fs-md mb-0"><i data-feather="mail" width="18"
                                            class="me-1 text-success"></i>
                                        An order has been procced to picked_up</h4>
                                </a>
                            </div>
                        
                                    


                
                            </div>
        </div>
    </div>
</div>
                    </li>

                    <li class="nav-item dropdown tt-user-dropdown">
                        <a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                            aria-expanded="true">
                            <div class="avatar avatar-sm status-online">
                                <img class="rounded-circle" src="https://grostore.themetags.com/public/uploads/media/dtkoInw3SD3IF3Q2I1jFtEDiE96mDD46RHB9RdxN.jpg"
                                    alt="avatar">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end py-0 shadow-sm border-0"
                            aria-labelledby="navbarDropdownUser">
                            <div class="card position-relative border-0">
                                <div class="card-body py-2">
                                    <ul class="tt-user-nav list-unstyled d-flex flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link px-0"
                                                href="https://grostore.themetags.com/admin/profile">
                                                <i data-feather="user" class="me-1 fs-sm"></i>
                                                My Account
                                            </a>
                                        </li>
                                                                                    <li class="nav-item">
                                                <a class="nav-link px-0" href="https://grostore.themetags.com/admin/settings/general-settings">
                                                    <i data-feather="settings" class="me-1 fs-sm"></i>
                                                    Settings
                                                </a>
                                            </li>
                                                                                <li class="nav-item">
                                            <a class="nav-link px-0" href="https://grostore.themetags.com/logout">
                                                <i data-feather="log-out"
                                                    class="me-1 fs-sm"></i>Sign out
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<!--mobile offcanvas menu start-->
<div class="offcanvas offcanvas-start tt-aside-navbar" id="offcanvasLeft" tabindex="-1">
    <div class="offcanvas-header border-bottom">
        <div class="tt-brand">
            <a href="index.html" class="tt-brand-link">
                <img src="https://grostore.themetags.com/public/uploads/media/yqqPV512Gk5DMpvCj2UllKrCl52bam3yD6QvfiPP.png" class="tt-brand-favicon ms-1"
                    alt="favicon" />
                <img src="https://grostore.themetags.com/public/uploads/media/LOa3BqX3ydhVC0V1fwYEyvEpM5N9NaoA0E7u3EQs.png" class="tt-brand-logo ms-2"
                    alt="logo" />
            </a>
        </div>
        <button class="btn-close" type="button" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body p-2 pb-9" data-simplebar>
        <div class="tt-sidebar-nav">
            <nav class="navbar navbar-vertical">
                <div class="w-100">
                    <ul class="tt-side-nav searchMenu">

    <!-- dashboard -->
    <li class="side-nav-item nav-item">
        <a href="https://grostore.themetags.com/admin" class="side-nav-link">
            <span class="tt-nav-link-icon"><i data-feather="pie-chart"></i></span>
            <span class="tt-nav-link-text">Dashboard</span>
        </a>
    </li>

    <!-- products -->
    
            <li class="side-nav-item nav-item tt-menu-item-active">
            <a data-bs-toggle="collapse" href="#sidebarProducts"
                aria-expanded="true" aria-controls="sidebarProducts"
                class="side-nav-link tt-menu-toggle">
                <span class="tt-nav-link-icon"><i data-feather="shopping-bag"></i></span>
                <span class="tt-nav-link-text">Products</span>
            </a>

            <div class="collapse show" id="sidebarProducts">
                <ul class="side-nav-second-level">

                                            <li
                            class="tt-menu-item-active">
                            <a href="https://grostore.themetags.com/admin/products"
                                class="active">All Products</a>
                        </li>
                    
                                            <li
                            class="">
                            <a href="https://grostore.themetags.com/admin/products/category"
                                class="">All Categories</a>
                        </li>
                    
                                            <li
                            class="">
                            <a href="https://grostore.themetags.com/admin/products/variations"
                                class="">All Variations</a>
                        </li>
                    
                                            <li class="">
                            <a href="https://grostore.themetags.com/admin/products/brands"
                                class="">All Brands</a>
                        </li>
                    
                                            <li class="">
                            <a href="https://grostore.themetags.com/admin/products/units"
                                class="">All Units</a>
                        </li>
                    
                                            <li class="">
                            <a href="https://grostore.themetags.com/admin/products/taxes"
                                class="">All Taxes</a>
                        </li>
                                    </ul>
            </div>
        </li>
    
    <!-- pos -->
            <li class="side-nav-item nav-item">
            <a href="https://grostore.themetags.com/admin/pos" class="side-nav-link">
                <span class="tt-nav-link-icon"><i data-feather="table"></i></span>
                <span class="tt-nav-link-text">Pos System</span>
            </a>
        </li>
    
    <!-- orders -->
            <li
            class="side-nav-item nav-item ">
            <a href="https://grostore.themetags.com/admin/orders"
                class="side-nav-link ">
                <span class="tt-nav-link-icon"><i data-feather="shopping-cart"></i></span>
                <span class="tt-nav-link-text">
                    <span>Orders</span>

                    
                                            <small class="badge bg-danger">New</small>
                                    </span>
            </a>
        </li>
    
    <!-- stock -->
                <li class="side-nav-item nav-item ">
            <a data-bs-toggle="collapse" href="#manageStock"
                aria-expanded="" aria-controls="manageStock"
                class="side-nav-link tt-menu-toggle">
                <span class="tt-nav-link-icon"><i data-feather="database"></i></span>
                <span class="tt-nav-link-text">Stocks</span>
            </a>
            <div class="collapse " id="manageStock">
                <ul class="side-nav-second-level">

                                            <li class="">
                            <a href="https://grostore.themetags.com/admin/stocks/add"
                                class="">Add Stock</a>
                        </li>
                    
                                            <li
                            class="">
                            <a href="https://grostore.themetags.com/admin/stocks/locations">All Locations</a>
                        </li>
                                    </ul>
            </div>
        </li>
    

    <!-- Refunds -->
    
            <li class="side-nav-item nav-item ">
            <a data-bs-toggle="collapse" href="#manageRefunds"
                aria-expanded="" aria-controls="manageRefunds"
                class="side-nav-link tt-menu-toggle">
                <span class="tt-nav-link-icon"><i data-feather="corner-up-left"></i></span>
                <span class="tt-nav-link-text">Refunds</span>
            </a>
            <div class="collapse " id="manageRefunds">
                <ul class="side-nav-second-level">

                                            <li class="">
                            <a href="https://grostore.themetags.com/admin/refunds"
                                class="">Refund Configurations</a>
                        </li>
                    
                                            <li class="">
                            <a href="https://grostore.themetags.com/admin/refunds/requests">Refund Requests</a>
                        </li>
                    
                                            <li class="">
                            <a href="https://grostore.themetags.com/admin/refunds/refunded">Approved Refunds</a>
                        </li>
                    
                                            <li class="">
                            <a href="https://grostore.themetags.com/admin/refunds/rejected">Rejected Refunds</a>
                        </li>
                    
                </ul>
            </div>
        </li>
    

    <!-- Rewards & Wallet -->
                <li class="side-nav-item nav-item ">
            <a data-bs-toggle="collapse" href="#manageRewards"
                aria-expanded="" aria-controls="manageRewards"
                class="side-nav-link tt-menu-toggle">
                <span class="tt-nav-link-icon"><i data-feather="award"></i></span>
                <span class="tt-nav-link-text">Rewards &amp; Wallet</span>
            </a>
            <div class="collapse " id="manageRewards">
                <ul class="side-nav-second-level">

                                            <li class="">
                            <a href="https://grostore.themetags.com/admin/rewards"
                                class="">Reward Configurations</a>
                        </li>
                    
                                            <li class="">
                            <a href="https://grostore.themetags.com/admin/rewards/set-points">Set Reward Points</a>
                        </li>
                    
                                            <li class="">
                            <a href="https://grostore.themetags.com/admin/rewards/wallet-configurations"
                                class="">Wallet Configurations</a>
                        </li>
                                    </ul>
            </div>
        </li>
    
    <!-- Users -->
    <li class="side-nav-title side-nav-item nav-item mt-3">
        <span class="tt-nav-title-text">Users</span>
    </li>

    <!-- customers -->
            <li class="side-nav-item nav-item">
            <a href="https://grostore.themetags.com/admin/customers" class="side-nav-link">
                <span class="tt-nav-link-icon"> <i data-feather="users"></i></span>
                <span class="tt-nav-link-text">Customers</span>
            </a>
        </li>
    
    <!-- staffs -->
            <li
            class="side-nav-item nav-item ">
            <a href="https://grostore.themetags.com/admin/staffs" class="side-nav-link">
                <span class="tt-nav-link-icon"> <i data-feather="user-check"></i></span>
                <span class="tt-nav-link-text">Employee Staffs</span>
            </a>
        </li>
    


    <!-- delivery -->
    
            <li class="side-nav-item nav-item ">
            <a data-bs-toggle="collapse" href="#manageDeliverymen"
                aria-expanded="" aria-controls="manageDeliverymen"
                class="side-nav-link tt-menu-toggle">
                <span class="tt-nav-link-icon"><i data-feather="send"></i></span>
                <span class="tt-nav-link-text">Delivery Men</span>
            </a>
            <div class="collapse " id="manageDeliverymen">
                <ul class="side-nav-second-level">


                                            <li
                            class="">
                            <a href="https://grostore.themetags.com/admin/delivery-man"
                                class="">All Deliverymen</a>
                        </li>
                    
                                            <li class="">
                            <a href="https://grostore.themetags.com/admin/delivery-man/add-delivery-man"
                                class="">Add Deliveryman</a>
                        </li>
                    
                                            <li class="">
                            <a href="https://grostore.themetags.com/admin/delivery-man/delivery-man/cancel-request">Cancel Requests</a>
                        </li>
                    
                                            <li class="">
                            <a
                                href="https://grostore.themetags.com/admin/delivery-man/payout-history">Payout Histories</a>
                        </li>
                    
                                            <li class="">
                            <a href="https://grostore.themetags.com/admin/delivery-man/deliverman-configuraton">Configurations</a>
                        </li>
                    
                                            <li class="">
                            <a href="https://grostore.themetags.com/admin/delivery-man/generate-payroll">Deliveryman Payroll</a>
                        </li>
                    

                                            <li class="">
                            <a
                                href="https://grostore.themetags.com/admin/delivery-man/payroll-list">Deliveryman Payroll List</a>
                        </li>
                    

                </ul>
            </div>
        </li>
    
    <!-- Contents -->
    <li class="side-nav-title side-nav-item nav-item mt-3">
        <span class="tt-nav-title-text">Contents</span>
    </li>

    <!-- tags -->
                <li class="side-nav-item nav-item ">
            <a href="https://grostore.themetags.com/admin/tags" class="side-nav-link">
                <span class="tt-nav-link-icon"> <i data-feather="tag"></i></span>
                <span class="tt-nav-link-text">Tags</span>
            </a>
        </li>
    
    <!-- pages -->
                <li class="side-nav-item nav-item ">
            <a href="https://grostore.themetags.com/admin/pages" class="side-nav-link">
                <span class="tt-nav-link-icon"> <i data-feather="copy"></i></span>
                <span class="tt-nav-link-text">Pages</span>
            </a>
        </li>
    

    <!-- Blog Systems -->
                <li class="side-nav-item nav-item ">
            <a data-bs-toggle="collapse" href="#blogSystem"
                aria-expanded="" aria-controls="blogSystem"
                class="side-nav-link tt-menu-toggle">
                <span class="tt-nav-link-icon"><i data-feather="file-text"></i></span>
                <span class="tt-nav-link-text">Blogs</span>
            </a>
            <div class="collapse " id="blogSystem">
                <ul class="side-nav-second-level">
                                            <li
                            class="">
                            <a href="https://grostore.themetags.com/admin/blogs"
                                class="">All Blogs</a>
                        </li>
                    
                                            <li
                            class="">
                            <a href="https://grostore.themetags.com/admin/blogs/categories">Categories</a>
                        </li>
                                    </ul>
            </div>
        </li>
    
    <!-- media manager -->
            <li class="side-nav-item">
            <a href="https://grostore.themetags.com/admin/media-manager" class="side-nav-link">
                <span class="tt-nav-link-icon"> <i data-feather="folder"></i></span>
                <span class="tt-nav-link-text">Media Manager</span>
            </a>
        </li>
    
    <!-- Promotions -->
    <li class="side-nav-title side-nav-item nav-item mt-3">
        <span class="tt-nav-title-text">Promotions</span>
    </li>
    <!-- newsletter -->
                <li class="side-nav-item nav-item ">
            <a data-bs-toggle="collapse" href="#newsletter"
                aria-expanded="" aria-controls="newsletter"
                class="side-nav-link tt-menu-toggle">
                <span class="tt-nav-link-icon"><i data-feather="map"></i></span>
                <span class="tt-nav-link-text">Newsletters</span>
            </a>
            <div class="collapse " id="newsletter">
                <ul class="side-nav-second-level">

                                            <li class="">
                            <a href="https://grostore.themetags.com/admin/bulk-emails"
                                class="">Bulk Emails</a>
                        </li>
                    
                                            <li class="">
                            <a href="https://grostore.themetags.com/admin/subscribers"
                                lass="">Subscribers</a>
                        </li>
                                    </ul>
            </div>
        </li>
    
    <!-- Coupons -->
            <li
            class="side-nav-item nav-item ">
            <a href="https://grostore.themetags.com/admin/coupons"
                class="side-nav-link ">
                <span class="tt-nav-link-icon"> <i data-feather="scissors"></i></span>
                <span class="tt-nav-link-text">Coupons</span>
            </a>
        </li>
    
    <!-- campaigns -->
            <li
            class="side-nav-item nav-item ">
            <a href="https://grostore.themetags.com/admin/campaigns" class="side-nav-link">
                <span class="tt-nav-link-icon"> <i data-feather="zap"></i></span>
                <span class="tt-nav-link-text">Campaigns</span>
            </a>
        </li>
    
    <!-- Fulfillment -->
    <li class="side-nav-title side-nav-item nav-item mt-3">
        <span class="tt-nav-title-text">Fulfillment</span>
    </li>
    <!-- Logistics -->
            <li
            class="side-nav-item nav-item ">
            <a href="https://grostore.themetags.com/admin/logistics" class="side-nav-link">
                <span class="tt-nav-link-icon"><i data-feather="cpu"></i></span>
                <span class="tt-nav-link-text">Logistics</span>
            </a>
        </li>
    
    <!-- shipping zones -->
                <li class="side-nav-item nav-item ">
            <a href="https://grostore.themetags.com/admin/logistics/zones" class="side-nav-link">
                <i class="uil-ship"></i>
                <span class="tt-nav-link-icon"><i data-feather="truck"></i></span>
                <span class="tt-nav-link-text">Shipping Zones</span>
            </a>
        </li>
    
    <!-- Reports -->
    <li class="side-nav-title side-nav-item nav-item mt-3">
        <span class="tt-nav-title-text">Reports</span>
    </li>

    <!-- reports -->
    
            <li class="side-nav-item nav-item ">
            <a data-bs-toggle="collapse" href="#reports"
                aria-expanded="" aria-controls="reports"
                class="side-nav-link tt-menu-toggle">
                <span class="tt-nav-link-icon"><i data-feather="bar-chart"></i></span>
                <span class="tt-nav-link-text">Reports</span>
            </a>
            <div class="collapse " id="reports">
                <ul class="side-nav-second-level">

                                            <li class="">
                            <a href="https://grostore.themetags.com/admin/reports/orders"
                                class="">Orders Report</a>
                        </li>
                    
                                            <li class="">
                            <a href="https://grostore.themetags.com/admin/reports/product-sales"
                                class="">Product Sales</a>
                        </li>
                    
                                            <li class="">
                            <a href="https://grostore.themetags.com/admin/reports/category-wise-sales"
                                class="">Category Wise Sales</a>
                        </li>
                    
                                            <li class="">
                            <a href="https://grostore.themetags.com/admin/reports/sales-amount-report"
                                class="">Sales Amount Report</a>
                        </li>
                    
                                            <li class="">
                            <a href="https://grostore.themetags.com/admin/reports/delivery-status-report"
                                class="">Delivery Status Report</a>
                        </li>
                                    </ul>
            </div>
        </li>
    

    <!-- Support -->
    <li class="side-nav-title side-nav-item nav-item mt-3">
        <span class="tt-nav-title-text">Support</span>
    </li>

            <li class="side-nav-item nav-item ">
            <a href="https://grostore.themetags.com/admin/contacts"
                class="side-nav-link ">
                <span class="tt-nav-link-icon"><i data-feather="hash"></i></span>
                <span class="tt-nav-link-text">
                    <span>Queries</span>

                    
                                    </span>
            </a>
        </li>
                <li class="side-nav-item nav-item ">
    <a data-bs-toggle="collapse" href="#support-ticket"
        aria-expanded="" aria-controls="support-ticket"
        class="side-nav-link tt-menu-toggle">
        <span class="tt-nav-link-icon"><i data-feather="life-buoy"></i></span>
        <span class="tt-nav-link-text">Support Ticket</span>
    </a>
    <div class="collapse " id="support-ticket">
        <ul class="side-nav-second-level">
                        <li class="">
                <a href="https://grostore.themetags.com/dashboard/support/category">Category</a>
            </li>
                       
                        <li class="">
                <a href="https://grostore.themetags.com/dashboard/support/priority">Priority</a>
            </li>
                       
            
                            <li class="">
                    <a href="https://grostore.themetags.com/dashboard/support/ticket">Tickets</a>
                </li>
                    </ul>
    </div>
</li>
        <!-- Appearance -->
    <li class="side-nav-title side-nav-item nav-item mt-3">
        <span class="tt-nav-title-text">Appearance</span>
    </li>


    <!-- Grocery -->
    
            <li class="side-nav-item nav-item ">
            <a data-bs-toggle="collapse" href="#groceryOutlook"
                aria-expanded="" aria-controls="groceryOutlook"
                class="side-nav-link tt-menu-toggle">
                <span class="tt-nav-link-icon"><i data-feather="home"></i></span>
                <span class="tt-nav-link-text">Grocery</span>
            </a>
            <div class="collapse " id="groceryOutlook">
                <ul class="side-nav-second-level">

                                            <li class="">
                            <a href="https://grostore.themetags.com/admin/appearance/homepage/hero"
                                class="">Homepage</a>
                        </li>
                                    </ul>
            </div>
        </li>
    
    <!-- halal -->
    
            <li class="side-nav-item nav-item ">
            <a data-bs-toggle="collapse" href="#halalOutlook"
                aria-expanded="" aria-controls="halalOutlook"
                class="side-nav-link tt-menu-toggle">
                <span class="tt-nav-link-icon"><i data-feather="heart"></i></span>
                <span class="tt-nav-link-text">Halal Foods</span>
            </a>
            <div class="collapse " id="halalOutlook">
                <ul class="side-nav-second-level">

                                            <li class="">
                            <a href="https://grostore.themetags.com/admin/appearance/halal/homepage/hero"
                                class="">Homepage</a>
                        </li>
                                    </ul>
            </div>
        </li>
    

    <!-- commonOutlook -->
    
            <li class="side-nav-item nav-item ">
            <a data-bs-toggle="collapse" href="#commonOutlook"
                aria-expanded="" aria-controls="commonOutlook"
                class="side-nav-link tt-menu-toggle">
                <span class="tt-nav-link-icon"><i data-feather="layout"></i></span>
                <span class="tt-nav-link-text">Common Outlook</span>
            </a>
            <div class="collapse " id="commonOutlook">
                <ul class="side-nav-second-level">

                                            <li class="">
                            <a href="https://grostore.themetags.com/admin/appearance/homepage/products"
                                class="">Products Page</a>
                        </li>
                    
                                            <li
                            class="">
                            <a href="https://grostore.themetags.com/admin/appearance/homepage/products-details"
                                class="">Product Details</a>
                        </li>
                    
                                            
                        <li class="">
                            <a href="https://grostore.themetags.com/admin/appearance/about-us"
                                class="">About Us</a>
                        </li>
                    
                                            <li class="">
                            <a href="https://grostore.themetags.com/admin/appearance/header"
                                class="">Header</a>
                        </li>
                    
                                            <li class="">
                            <a href="https://grostore.themetags.com/admin/appearance/footer"
                                class="">Footer</a>
                        </li>
                    
                    <li class="">
                        <a href="https://grostore.themetags.com/admin/appearance/appearance/theme"
                            class="">Themes</a>
                    </li>
                </ul>
            </div>
        </li>
    

    <!-- Settings -->
    <li class="side-nav-title side-nav-item nav-item mt-3">
        <span class="tt-nav-title-text">Settings</span>
    </li>


    <!-- affiliateSystem -->
    



    <!-- Roles & Permission -->
                <li class="side-nav-item nav-item ">
            <a href="https://grostore.themetags.com/admin/roles" class="side-nav-link">
                <span class="tt-nav-link-icon"><i data-feather="unlock"></i></span>
                <span class="tt-nav-link-text">Roles &amp; Permissions</span>
            </a>
        </li>
    

    <!-- system settings -->
    
            <li class="side-nav-item nav-item ">
            <a data-bs-toggle="collapse" href="#systemSetting"
                aria-expanded="" aria-controls="systemSetting"
                class="side-nav-link tt-menu-toggle">
                <span class="tt-nav-link-icon"><i data-feather="settings"></i></span>
                <span class="tt-nav-link-text">System Settings</span>
            </a>
            <div class="collapse " id="systemSetting">
                <ul class="side-nav-second-level">

                                            <li class="">
                            <a href="https://grostore.themetags.com/admin/settings/auth"
                                class="">Auth Settings</a>
                        </li>
                    
                                            <li class="">
                            <a href="https://grostore.themetags.com/admin/appearance/appearance/fonts"
                                class="">Invoice Settings</a>
                        </li>
                    
                                            <li class="">
                            <a href="https://grostore.themetags.com/admin/settings/otp"
                                class="">OTP Settings</a>
                        </li>
                    
                                            <li
                            class="">
                            <a href="https://grostore.themetags.com/admin/settings/order-settings"
                                class="">Order Settings</a>
                        </li>
                    
                    <li class="d-none ">
                        <a href="https://grostore.themetags.com/admin/settings/smtp-settings"
                            class="">Admin Store</a>
                    </li>

                                            <li class="">
                            <a href="https://grostore.themetags.com/admin/settings/smtp-settings"
                                class="">Smtp Settings</a>
                        </li>
                    
                                            <li class="">
                            <a href="https://grostore.themetags.com/admin/settings/general-settings"
                                class="">General Settings</a>
                        </li>
                                                                                            <li class="">
    <a href="https://grostore.themetags.com/payment-gateway/settings"
        class="">Payment Methods</a>
</li>
                                            
                                            <li class="">
                            <a href="https://grostore.themetags.com/admin/settings/social-media-login"
                                class="">Social Media Login</a>
                        </li>
                    




                                            <li
                            class="">
                            <a href="https://grostore.themetags.com/admin/settings/languages"
                                class="">Multilingual Settings</a>
                        </li>
                    
                                            <li
                            class="">
                            <a href="https://grostore.themetags.com/admin/settings/currencies"
                                class="">Multi Currency Settings</a>
                        </li>
                                                                <li class="">
                            <a href="https://grostore.themetags.com/admin/settings/update-system"
                                class="">System Update</a>
                        </li>

                        <li class="">
                            <a href="https://grostore.themetags.com/admin/utilities"
                                class="">
                                Utilities
                            </a>
                        </li>
                    
                </ul>
            </div>
        </li>
    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
<!--mobile offcanvas menu end-->
        <!--header section end-->

        <!-- Start Content-->
            <section class="tt-section pt-4">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12">
                    <div class="card tt-page-header">
                        <div class="card-body d-lg-flex align-items-center justify-content-lg-between">
                            <div class="tt-page-title">
                                <h2 class="h5 mb-lg-0">Add Product</h2>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-4 g-4">

                <!--left sidebar-->
                <!-- Include jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Your form HTML -->
<div class="col-xl-9 order-2 order-md-2 order-lg-2 order-xl-1">
   <form action="" method="POST" enctype="multipart/form-data" class="pb-650" id="product-form">
    <input type="hidden" name="_token" value="jWrIUYL5E59SINTNKdMmoqvWbXA9RaAXlnramIGO" autocomplete="off">
    <div id="error-messages"></div>
    <div id="success-message"></div>

    <!-- Basic Information -->
    <div class="card mb-4" id="section-1">
        <div class="card-body">
            <h5 class="mb-4">Basic Information</h5>

            <label for="product_name">Product Name:</label>
            <input type="text" id="product_name" name="product_name" required><br><br>

            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea><br><br>

            <label for="category">Category:</label>
            <select id="category" name="category_id" required>
                <option value="">Loading categories...</option>
            </select><br><br>

            <label for="price">Price:</label>
            <input type="number" id="price" name="price" step="0.01" required><br><br>

            <label for="image">Upload Image (JPG, PNG, JPEG - Max 3MB):</label>
            <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png" required><br><br>

            <label for="stock_quantity">Stock Quantity:</label>
            <input type="number" id="stock_quantity" name="stock_quantity" required><br><br>

            <label for="active">Active:</label>
            <input type="checkbox" id="active" name="active" value="1"><br><br>

            <!-- Submit Button -->
            <div class="row">
                <div class="col-12">
                    <div class="mb-4">
                        <button class="btn btn-primary" type="submit">
                            <i data-feather="save" class="me-1"></i> Save Product
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Add CSS styles for error and success messages -->
<style>
    #error-messages {
        color: red;
        font-size: 14px;
        margin-bottom: 10px;
    }
    
    #success-message {
        color: green;
        font-size: 14px;
        margin-bottom: 10px;
    }

    .input-error {
        border: 1px solid red;
    }

    .input-success {
        border: 1px solid green;
    }
</style>

<script>
document.getElementById("product-form").addEventListener("submit", function(event) {
    var errors = [];
    var productName = document.getElementById("product_name").value;
    var description = document.getElementById("description").value;
    var price = document.getElementById("price").value;
    var stockQuantity = document.getElementById("stock_quantity").value;
    var category = document.getElementById("category").value;
    var image = document.getElementById("image").files[0];

    // Clear previous error and success messages
    document.getElementById("error-messages").innerHTML = '';
    document.getElementById("success-message").innerHTML = '';
    document.querySelectorAll('input, textarea, select').forEach(function(input) {
        input.classList.remove('input-error');
        input.classList.remove('input-success');
    });

    // Validate Product Name
    if (!productName.trim()) {
        errors.push("Product name is required.");
        document.getElementById("product_name").classList.add("input-error");
    } else {
        document.getElementById("product_name").classList.add("input-success");
    }

    // Validate Description
    if (!description.trim()) {
        errors.push("Description is required.");
        document.getElementById("description").classList.add("input-error");
    } else {
        document.getElementById("description").classList.add("input-success");
    }

    // Validate Category
    if (category === "") {
        errors.push("Category is required.");
        document.getElementById("category").classList.add("input-error");
    } else {
        document.getElementById("category").classList.add("input-success");
    }

    // Validate Price
    if (!price || price <= 0) {
        errors.push("Price must be a positive number.");
        document.getElementById("price").classList.add("input-error");
    } else {
        document.getElementById("price").classList.add("input-success");
    }

    // Validate Stock Quantity
    if (!stockQuantity || stockQuantity <= 0) {
        errors.push("Stock quantity must be a positive number.");
        document.getElementById("stock_quantity").classList.add("input-error");
    } else {
        document.getElementById("stock_quantity").classList.add("input-success");
    }

    // Validate Image File
    if (!image) {
        errors.push("Image is required.");
        document.getElementById("image").classList.add("input-error");
    } else {
        var fileExtension = image.name.split('.').pop().toLowerCase();
        var allowedExtensions = ['jpg', 'jpeg', 'png'];
        var fileSize = image.size;

        // Check file extension
        if (!allowedExtensions.includes(fileExtension)) {
            errors.push("Allowed image formats are JPG, JPEG, PNG.");
            document.getElementById("image").classList.add("input-error");
        } else {
            document.getElementById("image").classList.add("input-success");
        }

        // Check file size (max 3MB)
        if (fileSize > 3145728) {
            errors.push("File size must be less than 3MB.");
            document.getElementById("image").classList.add("input-error");
        } else {
            document.getElementById("image").classList.add("input-success");
        }
    }

    // If there are errors, prevent form submission and display errors
    if (errors.length > 0) {
        event.preventDefault();
        var errorMessages = document.getElementById("error-messages");
        errorMessages.innerHTML = errors.join("<br>");
    } else {
        // Display success message if no errors
        document.getElementById("success-message").innerHTML = "Form is valid and ready to submit!";
    }
});
</script>

 <?php
 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Initialize an array to hold error messages
$errors = array();
$success_message = '';

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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = $_POST['product_name'];
    $description = $_POST['description'];
    $categoryID = $_POST['category_id'];
    $price = $_POST['price'];
    $stockQuantity = $_POST['stock_quantity'];
    $isActive = isset($_POST['active']) ? 'Active' : 'Inactive';

    
    // Server-Side Validation
    // Validate product name
    if (empty($name)) {
        $errors[] = "Product name is required.";
    }

    // Validate description
    if (empty($description)) {
        $errors[] = "Description is required.";
    }

    // Validate category ID
    if (empty($categoryID)) {
        $errors[] = "Category is required.";
    }

    // Validate price
    if (!is_numeric($price) || $price <= 0) {
        $errors[] = "Price must be a positive number.";
    }

    // Validate stock quantity
    if (!is_numeric($stockQuantity) || $stockQuantity <= 0) {
        $errors[] = "Stock quantity must be a positive number.";
    }

    // Handle file upload
    $imageURL = '';

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];

        // Extract file extension
        $file_parts = explode('.', $file_name);
        $file_ext = strtolower(end($file_parts));

        // Allowed file extensions
        $extensions = array("jpeg", "jpg", "png");

        // Validate file extension
        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "Extension not allowed, please choose a JPEG or PNG file.";
        }

        // Validate file size (3 MB limit)
        if ($file_size > 3145728) { // 3 MB = 3 * 1024 * 1024 bytes
            $errors[] = 'File size must be exactly 3 MB or less';
        }

        // Check for errors before uploading the file
        if (empty($errors)) {
            // Move the uploaded file to the "uploads" directory
            $upload_path = "uploads/" . $file_name;
            if (move_uploaded_file($file_tmp, $upload_path)) {
                $imageURL = $upload_path;
            } else {
                $errors[] = "File upload failed!";
            }
        }
    } else {
        $errors[] = "No image uploaded or upload failed.";
    }

    // If there are no errors, insert data into the database
    if (empty($errors)) {
        try {
            $stmt = $conn->prepare("
                INSERT INTO product (Name, Description, CategoryID, Price, ImageURL, StockQuantity, IsActive)
                VALUES (?, ?, ?, ?, ?, ?, ?)
            ");
            $stmt->bind_param('ssidsis', $name, $description, $categoryID, $price, $imageURL, $stockQuantity, $isActive);

            if ($stmt->execute()) {
                $success_message = "Product added successfully!";
            } else {
                $errors[] = "Error: " . $stmt->error;
            }

            $stmt->close();
        } catch (Exception $e) {
            $errors[] = 'Data insertion failed: ' . $e->getMessage();
        }
    }

    // Close connection
    $conn->close();
}


?>

<!--

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

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize input data
    $productName = htmlspecialchars($_POST['product_name'], ENT_QUOTES, 'UTF-8');
    $description = htmlspecialchars($_POST['description'], ENT_QUOTES, 'UTF-8');
    $categoryId = isset($_POST['category_id']) ? intval($_POST['category_id']) : null;
    $price = floatval($_POST['price']);
    $stockQuantity = isset($_POST['stock_quantity']) ? intval($_POST['stock_quantity']) : null;
    $isActive = isset($_POST['active']) ? 'Active' : 'Inactive';

    // Handle image upload
    $imageUrl = null;
    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES['image']['tmp_name'];
        $upload_dir = 'uploads/';
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0755, true);
        }
        $imageName = uniqid() . '-' . basename($_FILES['image']['name']);
        $imageUrl = $upload_dir . $imageName;
        if (move_uploaded_file($tmp_name, $imageUrl)) {
            // File uploaded successfully
        } else {
            echo "Error moving uploaded file.";
            exit;
        }
    } else {
        if (isset($_FILES['image']) && $_FILES['image']['error'] != UPLOAD_ERR_NO_FILE) {
            echo "File upload error: " . $_FILES['image']['error'];
            exit;
        }
    }

    // Prepare and execute the insert query
    $sql = "INSERT INTO product (Name, Description, CategoryID, Price, ImageURL, StockQuantity, IsActive) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssisdis", $productName, $description, $categoryId, $price, $imageUrl, $stockQuantity, $isActive);
        if ($stmt->execute()) {
            echo "Product added successfully!";
        } else {
            echo "Error executing statement: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}-->






</div>

<!-- AJAX Script -->
<script>
$(document).ready(function() {
    // Function to load categories
    function loadCategories() {
        $.ajax({
            url: 'Fetch_Category_Add.php',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                var $categorySelect = $('#category');
                $categorySelect.empty();
                if (data.length > 0) {
                    $categorySelect.append('<option value="">Select Category</option>');
                    $.each(data, function(index, category) {
                        $categorySelect.append('<option value="' + category.id + '">' + category.name + '</option>');
                    });
                } else {
                    $categorySelect.append('<option value="">No categories available</option>');
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('AJAX error: ' + textStatus + ' : ' + errorThrown);
            }
        });
    }

    // Load categories on page load
    loadCategories();
});

    document.addEventListener('DOMContentLoaded', function() {
        let errorMessages = <?php echo json_encode($errors); ?>;
        let successMessage = <?php echo json_encode($success_message); ?>;

        if (errorMessages.length > 0) {
            let errorContainer = document.getElementById('error-messages');
            errorMessages.forEach(function(msg) {
                let errorMessage = document.createElement('div');
                errorMessage.className = 'error-message';
                errorMessage.textContent = msg;
                errorContainer.appendChild(errorMessage);
            });
        }

        if (successMessage) {
            let successContainer = document.getElementById('success-message');
            let successElement = document.createElement('div');
            successElement.className = 'success-message';
            successElement.textContent = successMessage;
            successContainer.appendChild(successElement);
        }
    });

</script>

                
            </div>
        </div>
    </section>
        <!-- container -->

        <!--footer section start-->
                    <!--footer section start-->
<footer class="tt-footer bg-light-subtle py-3 mt-auto">
    <div class="container">
        <div class="row g-3">
            <div class="col-md-6 order-last order-md-first">
                <div class="copyright text-center text-md-start">
                    © All Designed, Developed and 💕 by <b><font color="#ff9c00">DailyDeals</font></b>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-center justify-content-md-end">
                    DailyDeals Online Store<strong class="ms-2">v4.3.0</strong>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer section end-->
                <!--footer section end-->

        <!-- media-manager -->
        <div class="offcanvas offcanvas-bottom" id="offcanvasBottom" tabindex="-1">
    <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title">Media Files</h5>
        <button class="btn-close" type="button" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body bg-secondary-subtle" data-simplebar>

        <!-- content -->
        <div class="card-body">
    <div class="row mb-4">
        
        <div class="col-12 col-lg-6">
            <h5>Recently uploaded files</h5>
            <div class="row g-2 recent-uploads  tt-media-wrap">
                
            </div>
        </div>

        
        <div class="col-12 col-lg-6 order-first order-md-last mb-2 mb-md-0 ps-md-3">
                                                <h5>Add files here</h5>
                    <div class="uppy-drag-drop-area"></div>
                            
        </div>
    </div>

    <div class="card bg-secondary-subtle">
        <div class="card-header border-bottom-0">
            

            <form action="" id="media-search-from">
                <div class="row justify-content-between align-items-center g-3">

                    <div class="col-auto flex-grow-1">
                        <h5 class="mb-0">Previously uploaded files</h5>
                    </div>
                    <div class="col-auto">

                        <div class="tt-search-box">
                            <div class="input-group">
                                <span class="position-absolute top-50 start-0 translate-middle-y ms-2"> <i
                                        data-feather="search"></i></span>
                                <input class="form-control rounded-start w-100" type="text" id="search"
                                    name="media-search" placeholder="Search by name">
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-secondary">
                            <i data-feather="search" width="18"></i>
                            Search
                        </button>
                    </div>
                </div>
            </form>
            
        </div>


        <div class="card-body row g-2 previous-uploads tt-media-wrap">
            
        </div>
    </div>

    <div class="mt-3 load-more-media d-none">
        <button class="btn btn-primary" onclick="getNextMediaFiles()">
            <span> <i data-feather="refresh-cw" class="me-2" width="18"></i>Load More</span>
        </button>
    </div>

</div>
        <!-- content -->

        <div class="d-grid g-3 tt-media-select">
            <button class="btn btn-primary" onclick="showSelectedFilePreview()"
                data-bs-dismiss="offcanvas">Select</button>
        </div>

    </div>
</div>

    </main>
    <!--main content wrapper end-->

    <!-- delete modal -->
    <div id="delete-modal" class="modal fade">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body text-center">
                <div class="display-4 text-danger"> <i data-feather="x-octagon"></i></div>
                <h6 class="my-0">Are you sure to delete this?</h6>
                <p>All data related to this may get deleted.</p>
                <div class="justify-content-center pb-3">
                    <a href="" id="delete-link" class="btn btn-danger mt-2">Proceed</a>
                    <button type="button" class="btn btn-secondary mt-2"
                        data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>

        </div>
    </div>
</div>

    <!-- delete all modal -->
    <div id="all-delete-modal" class="modal fade">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body text-center">
                <div class="display-4 text-danger"> <i data-feather="x-octagon"></i></div>
                <h6 class="my-0">Are you sure to delete all data?</h6>
                <p>All data related to this may get deleted.</p>
                <div class="justify-content-center pb-3">
                    <a href="" id="all-delete-link" class="btn btn-danger mt-2">Proceed</a>
                    <button type="button" class="btn btn-secondary mt-2"
                        data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>

        </div>
    </div>
</div>

    <!--build:js-->
    <!-- bundle -->
<script src="https://grostore.themetags.com/public/backend/assets/js/vendors/jquery-3.6.4.min.js?v=v4.3.0"></script>
<script src="https://grostore.themetags.com/public/backend/assets/js/vendors/bootstrap.bundle.min.js?v=v4.3.0"></script>
<script src="https://grostore.themetags.com/public/backend/assets/js/vendors/swiper-bundle.min.js?v=v4.3.0"></script>
<script src="https://grostore.themetags.com/public/backend/assets/js/vendors/toastr.min.js?v=v4.3.0"></script>
<script src="https://grostore.themetags.com/public/backend/assets/js/vendors/simplebar.min.js?v=v4.3.0"></script>
<script src="https://grostore.themetags.com/public/backend/assets/js/vendors/footable.min.js?v=v4.3.0"></script>
<script src="https://grostore.themetags.com/public/backend/assets/js/vendors/select2.min.js?v=v4.3.0"></script>
<script src="https://grostore.themetags.com/public/backend/assets/js/vendors/feather.min.js?v=v4.3.0"></script>
<script src="https://grostore.themetags.com/public/backend/assets/js/vendors/summernote-lite.min.js?v=v4.3.0"></script>
<script src="https://grostore.themetags.com/public/backend/assets/js/vendors/flatpickr.min.js?v=v4.3.0"></script>
<script src="https://grostore.themetags.com/public/backend/assets/js/vendors/apexcharts.min.js?v=v4.3.0"></script>
<script src="https://grostore.themetags.com/public/backend/assets/js/vendors/apex-scripts.js?v=v4.3.0"></script>
<script src="https://grostore.themetags.com/public/backend/assets/js/app.js?v=v4.3.0"></script>

<!-- localizations & others -->
<script>
    'use strict';

    var TT = TT || {};
    TT.localize = {
        no_data_found: 'No data found',
        selected_file: 'Selected File',
        selected_files: 'Selected Files',
        file_added: 'File added',
        files_added: 'Files added',
        no_file_chosen: 'No file chosen',
    };
    TT.baseUrl = 'https://grostore.themetags.com';

    // on click delete confirmation -- outside footable
    function confirmDelete(thisLink) {
        var url = $(thisLink).data("href");
        $("#delete-modal").modal("show");
        $("#delete-link").attr("href", url);
    }

    // on click all delete confirmation -- outside footable
    function confirmAllDelete(thisLink) {
        var url = $(thisLink).data("href");
        $("#all-delete-modal").modal("show");
        $("#all-delete-link").attr("href", url);
    }


    // feather icon refresh
    function initFeather() {
        feather.replace();
    }
    initFeather();
</script>

<!-- media-manager scripts -->
<script type="module">
    import {Uppy, Dashboard, ImageEditor, DropTarget, XHRUpload} from "https://grostore.themetags.com/public/backend/assets/js/vendors/uppy.min.js?v=v4.3.0"
    var uppy = new Uppy({
            restrictions: { 
                allowedFileTypes: TT.allowedFileTypes, 
            }
        })
        .use(Dashboard, {
            inline: true,
            target: '.uppy-drag-drop-area',
            proudlyDisplayPoweredByUppy: false,
            hidePauseResumeButton: true,
            width: '100%',
            height:'auto'
        })
        .use(ImageEditor, { target: Dashboard })
        // Allow dropping files on any element or the whole document
        .use(DropTarget, { 
            target: 'DashboardContainer'
        })
        .use(XHRUpload, {
            headers: {
                'X-CSRF-TOKEN': 'jWrIUYL5E59SINTNKdMmoqvWbXA9RaAXlnramIGO',
            },
            endpoint: TT.baseUrl+'/media-manager/add-files',
            fieldName: "media_file",
            formData: true,
        })

    uppy.on('complete', (result) => {
        getMediaFiles();
    })
</script>

<script>
    "use strict";

    // required
    TT.getMediaType = 'all';
    TT.getMediaSearch = '';
    TT.allowedFileTypes = [
        ".png",
        ".svg",
        ".gif",
        ".jpg",
        ".jpeg",
        ".webp"
    ];
    TT.uploadQty = "single";
    TT.selectedFiles = null;
    TT.nextPageUrl = null;
    // required 

    // get the media files via ajax
    async function getMediaFiles(getMediaType = TT.getMediaType, getMediaSearch = TT.getMediaSearch, search = false) {

        let url = 'https://grostore.themetags.com/media-manager/get-files';

        if (search == false) {
            $('.recent-uploads').empty();
        }

        $('.previous-uploads').empty();

        // get media files
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': 'jWrIUYL5E59SINTNKdMmoqvWbXA9RaAXlnramIGO'
            },
            type: "GET",
            data: {
                type: getMediaType,
                searchKey: search ? getMediaSearch : '',
            },
            url: url,
            success: function(data) {

                if (search == false) {
                    $('.recent-uploads').append(data.recentFiles); // if !searched
                }
                $('.previous-uploads').append(data.mediaFiles);


                TT.nextPageUrl = data.mediaQuery.next_page_url;
                if (data.mediaQuery.next_page_url == null) {
                    $('.load-more-media').addClass('d-none')
                } else {
                    $('.load-more-media').removeClass('d-none')
                }

                // show selected counter in the media manager
                getSelectedFilesCount();

                // add active class when initialized --> delay to ready the document
                setTimeout(() => {
                    activeSelectedFiles();
                }, 400);
                initFeather();
            }
        });
    }

    // get next paginated files
    function getNextMediaFiles() {
        if (TT.nextPageUrl != null) {
            // get media files
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': 'jWrIUYL5E59SINTNKdMmoqvWbXA9RaAXlnramIGO'
                },
                type: "GET",
                url: TT.nextPageUrl,
                success: function(data) {

                    $('.previous-uploads').append(data.mediaFiles);

                    TT.nextPageUrl = data.mediaQuery.next_page_url;

                    if (data.mediaQuery.next_page_url == null) {
                        $('.load-more-media').addClass('d-none')
                    } else {
                        $('.load-more-media').removeClass('d-none')
                    }
                    // show selected counter in the media manager
                    getSelectedFilesCount();

                    // add active class when initialized --> delay to ready the document
                    setTimeout(() => {
                        activeSelectedFiles();
                    }, 400);
                    initFeather();
                }
            });
        }
    }

    // get the media files via ajax
    async function getSelectedMediaFiles(mediaIds, target = TT.showSelectedFilesDiv) {
        // get media files
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': 'jWrIUYL5E59SINTNKdMmoqvWbXA9RaAXlnramIGO'
            },
            type: "GET",
            data: {
                mediaIds: mediaIds,
            },
            url: 'https://grostore.themetags.com/media-manager/get-selected-files',
            success: function(data) {

                if (TT.uploadQty = "single") {
                    target.children().not('.choose-media').remove();
                }

                target.prepend(data.mediaFiles);
                initFeather();
            }
        });
    }

    // show media manager
    async function showMediaManager(thisWrapper) {
        // handle -> click chose file
        let selectedFilesInput = $(thisWrapper).find('input');
        TT.uploadQty = $(thisWrapper).data("selection");

        TT.selectedFiles = selectedFilesInput.val() != '' ? selectedFilesInput.val() : null;
        TT.selectedFilesInput = selectedFilesInput;

        TT.showSelectedFilesDiv = $(thisWrapper).parent();
        // handle -> click chose file

        // show media manager showMediaManager()

        // invoke media file fetching function
        await getMediaFiles();
    }

    // add active class to the selected files
    function activeSelectedFiles() {
        if (TT.selectedFiles != null) {
            TT.selectedFiles
                .split(",").forEach(selectedImage => {
                    $('[data-active-file-id=' + selectedImage + ']').addClass('active-image');
                });
        }
    }

    // on click event handler of files 
    function handleSelectedFiles(fileId) {
        $('[data-active-file-id!=' + fileId + ']').removeClass('active-image'); // remove active class 
        if (TT.uploadQty == "single") {
            TT.selectedFiles = '' + fileId + ''
        } else {
            if (TT.selectedFiles != null) {
                let tempSelected = TT.selectedFiles.split(",");

                if (tempSelected.includes('' + fileId + '')) {

                    tempSelected = tempSelected.filter(tempId => {
                        return tempId != '' + fileId + ''
                    })

                    $('[data-active-file-id=' + fileId + ']').removeClass(
                        'active-image'); // remove active class

                } else {
                    tempSelected.push(fileId);
                }

                if (tempSelected.length > 0) {
                    TT.selectedFiles = tempSelected.toString();
                } else {
                    TT.selectedFiles = null;
                }

            } else {
                TT.selectedFiles = '' + fileId + ''
            }
        }
        activeSelectedFiles();
        getSelectedFilesCount();
    }

    // show the selected file count in the media manager card-header
    function getSelectedFilesCount() {
        //  
    }

    // show the chosen file count in specific pages
    function getChosenFilesCount() {
        //  
    }

    // show selected files preview after selecting files from media manager
    function showSelectedFilePreview() {
        // for file chosen input counter 
        TT.selectedFilesInput.val(TT.selectedFiles);
        generatePreview();
        hideMediaManager();
    }

    // show selected file preiview on load in specific pages
    function showSelectedFilePreviewOnLoad() {
        $('.choose-media').each(function() {
            let showSelectedFilesDiv = $(this).parent();
            let selectedFiles = $(this).find('input').val();
            generatePreview(selectedFiles, showSelectedFilesDiv)
        });
    }

    // remove (after clicking remove button) selected file in specific pages 
    function removeSelectedFile(thisButton, mediaFileId) {
        let removeFileDiv = $(thisButton).closest('.selected-file'); //removeFileDiv.remove();
        let showSelectedFilesDiv = removeFileDiv.parent(); // .show-selected-files
        let choseMediaDiv = showSelectedFilesDiv.find('.choose-media'); //choose media button

        let selectedFilesInput = $(choseMediaDiv).find('input');
        let selectedFiles = selectedFilesInput.val();

        if (selectedFiles != null && selectedFiles != '') {
            let tempSelected = selectedFiles.split(",");

            tempSelected = tempSelected.filter(tempId => {
                return tempId != '' + mediaFileId + ''
            })

            $('[data-active-file-id=' + mediaFileId + ']').removeClass('active-image'); // remove active class  
            selectedFilesInput.val(tempSelected);
        }
        removeFileDiv.remove();
    }

    // generate preview
    function generatePreview(mediaIds = TT.selectedFiles, target = TT.showSelectedFilesDiv) {
        if (mediaIds && mediaIds != '') {
            mediaIds = mediaIds.split(',');
            getSelectedMediaFiles(mediaIds, target);
        }
    }

    // hide media manager
    function hideMediaManager() {}

    // media search
    $('#media-search-from').on('submit', function(e) {
        e.preventDefault();
        TT.getMediaSearch = $('input[name=media-search]').val();
        getMediaFiles(TT.getMediaType, TT.getMediaSearch, TT.getMediaSearch != '' ? true : false);
    })
</script>

<script>
    "use strict"
    $(function() {

        // footable js
        $(function() {
            $("table.tt-footable").footable({
                on: {
                    "ready.ft.table": function(e, ft) {
                        initTooltip();
                        deleteConfirmation();
                        setPoints();
                        approveRefundConfirmation();
                        rejectRefundConfirmation();
                    },
                },
            });
        });

        // approve Refund Confirmation 
        function approveRefundConfirmation() {
            $(".confirm-approval").click(function(e) {
                e.preventDefault();
                var url = $(this).data("href");
                $("#approval-modal").modal("show");
                $("#approval-link").attr("href", url);
            });
        }

        // reject Refund Confirmation 
        function rejectRefundConfirmation() {
            $(".confirm-rejection").click(function(e) {
                e.preventDefault();
                var url = $(this).data("href");
                $("#rejection-modal").modal("show");
                $(".rejection-form").attr("action", url);
            });
        }


        // set points
        function setPoints() {
            $('.points-input').on("focusout", function(e) {
                var points = $(this).val();
                var product_id = $(this).data('product');

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': 'jWrIUYL5E59SINTNKdMmoqvWbXA9RaAXlnramIGO'
                    },
                    url: "https://grostore.themetags.com/admin/rewards/store-each-product-points",
                    type: 'POST',
                    data: {
                        points: points,
                        product_id: product_id
                    },
                    success: function() {}
                });

            });
        }


        //    tooltip
        function initTooltip() {
            $('[data-bs-toggle="tooltip"]').tooltip();
        }
        initTooltip();

        // delete confirmation
        function deleteConfirmation() {
            $(".confirm-delete").click(function(e) {
                e.preventDefault();
                var url = $(this).data("href");
                $("#delete-modal").modal("show");
                $("#delete-link").attr("href", url);
            });
        }

        //    select2 js
        $(".select2").select2();
        $(".select2Max3").select2({
            maximumSelectionLength: 3
        });

        // modal select2
        function modalSelect2(parent = '.modalParentSelect2') {
            $('.modalSelect2').select2({
                dropdownParent: $(parent)
            });
        }
        modalSelect2();

        //    flatpickr 
        $(".date-picker").each(function(el) {
            var $this = $(this);
            var options = {
                dateFormat: 'm/d/Y'
            };

            var date = $this.data("date");
            if (date) {
                options.defaultDate = date;
            }

            $this.flatpickr(options);
        });



        $(".date-range-picker").each(function(el) {
            var $this = $(this);
            var options = {
                mode: "range",
                showMonths: 2,
                dateFormat: 'm/d/Y'
            };

            var start = $this.data("startdate");
            var end = $this.data("enddate");

            if (start && end) {
                options.defaultDate = [start, end];
            }

            $this.flatpickr(options);
        });

        // summernote
        $(".editor").each(function(el) {
            var $this = $(this);
            var buttons = $this.data("buttons");
            var minHeight = $this.data("min-height");
            var placeholder = $this.attr("placeholder");
            var format = $this.data("format");

            buttons = !buttons ? [
                    ["font", ["bold", "underline", "italic", "clear"]],
                    ['fontname', ['fontname']],
                    ["para", ["ul", "ol", "paragraph"]],
                    ["style", ["style"]],
                    ['fontsize', ['fontsize']],
                    ["color", ["color"]],
                    ["insert", ["link", "picture", "video"]],
                    ["view", ["undo", "redo"]],
                ] :
                buttons;
            placeholder = !placeholder ? "" : placeholder;
            minHeight = !minHeight ? 150 : minHeight;
            format = typeof format == "undefined" ? false : format;

            $this.summernote({
                toolbar: buttons,
                placeholder: placeholder,
                height: minHeight,
                codeviewFilter: false,
                codeviewIframeFilter: true,
                disableDragAndDrop: true,
                callbacks: {

                },
            });

            var nativeHtmlBuilderFunc = $this.summernote(
                "module",
                "videoDialog"
            ).createVideoNode;

            $this.summernote("module", "videoDialog").createVideoNode = function(url) {
                var wrap = $(
                    '<div class="embed-responsive embed-responsive-16by9"></div>'
                );
                var html = nativeHtmlBuilderFunc(url);
                html = $(html).addClass("embed-responsive-item");
                return wrap.append(html)[0];
            };
        });

        // add more
        $('[data-toggle="add-more"]').each(function() {
            var $this = $(this);
            var content = $this.data("content");
            var target = $this.data("target");

            $this.on("click", function(e) {
                e.preventDefault();
                $(target).append(content);
                initFeather();
                $('.select2').select2();
            });
        });

        // remove parent
        $(document).on(
            "click",
            '[data-toggle="remove-parent"]',
            function() {
                var $this = $(this);
                var parent = $this.data("parent");
                $this.closest(parent).remove();
            }
        );

        // language flag select2
        $(".country-flag-select").select2({
            templateResult: countryCodeFlag,
            templateSelection: countryCodeFlag,
            escapeMarkup: function(m) {
                return m;
            },
        });

        function countryCodeFlag(state) {
            var flagName = $(state.element).data("flag");
            if (!flagName) return state.text;
            return (
                "<div class='d-flex align-items-center'><img class='flag me-2' src='" + flagName +
                "' height='14' />" + state.text + "</div>"
            );
        }
    })

    function updateDeliveryStatusByDeliveryman(status, order_id) {
        $.post('https://grostore.themetags.com/deliveryman/orders/update-delivery-status', {
            _token: 'jWrIUYL5E59SINTNKdMmoqvWbXA9RaAXlnramIGO',
            order_id: order_id,
            status: status
        }, function(data) {
            notifyMe('success', 'Delivery status has been updated');
            window.location.reload();
        });
    }
</script>
    <!--endbuild-->

    <!-- scripts from different pages -->
        <script>
    "use strict";
    // runs when the document is ready --> for media files
    $(document).ready(function() {
        getChosenFilesCount();
        showSelectedFilePreviewOnLoad();
    });

    $('.themeChange').on('change', function(e) {

        e.preventDefault();
        $.ajax({
            method: "GET",
            url: "https://grostore.themetags.com/admin/products/add-product",
            data: {
                ids: $(this).val()
            },
            success: function(response) {
                $('#appendCategory').html(response)

                $('#appendCategory').trigger('change');
            }

        })
    })
    let options = $('.themeChange option:selected').val();

    if(options !== undefined) {

        if(options.length > 0){
            $.ajax({
                method: "GET",
                url: "https://grostore.themetags.com/admin/products/add-product",
                data: {
                    ids: options
                },
                success: function(response) {
                    $('#appendCategory').html(response)

                    $('#appendCategory').trigger('change');
                }

            })
        }
    }
    // swith markup based on selection
    function isVariantProduct(el) {
        $(".hasVariation").hide();
        $(".noVariation").hide();

        if ($(el).is(':checked')) {
            $(".hasVariation").show();

            // remove required field for non variations
            $("#price").removeAttr('required', true);
            $("#stock").removeAttr('required', true);
            $("#sku").removeAttr('required', true);
            $("#code").removeAttr('required', true);

        } else {
            $(".noVariation").show();

            // add required field for non variations 
            $("#price").attr('required', true);
            $("#stock").attr('required', true);
            $("#sku").attr('required', true);
            $("#code").attr('required', true);
        }
    }

    // add another variation
    function addAnotherVariation() {
        $.ajax({
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': 'jWrIUYL5E59SINTNKdMmoqvWbXA9RaAXlnramIGO'
            },
            data: $('#product-form').serialize(),
            url: 'https://grostore.themetags.com/backend/products/new-variation',
            success: function(data) {
                if (data.count > 0) {
                    $('.chosen_variation_options').find('.variation-names').find('.select2').siblings(
                        '.dropdown-toggle').addClass("disabled");
                    $('.chosen_variation_options').append(data.view);
                    $('.select2').select2();
                    initFeather();
                }
            }
        });
    }

    // get values for selected variations
    function getVariationValues(e) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': 'jWrIUYL5E59SINTNKdMmoqvWbXA9RaAXlnramIGO'
            },
            type: "POST",
            data: {
                variation_id: $(e).val()
            },
            url: 'https://grostore.themetags.com/backend/products/get-variation-values',
            success: function(data) {
                $(e).closest('.row').find('.variationvalues').html(data);
                $('.select2').select2();
                initFeather();
            }
        });
    }

    // variation combinations
    function generateVariationCombinations() {
        $.ajax({
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': 'jWrIUYL5E59SINTNKdMmoqvWbXA9RaAXlnramIGO'
            },
            url: 'https://grostore.themetags.com/backend/products/variation-combination',
            data: $('#product-form').serialize(),
            success: function(data) {
                $('#variation_combination').html(data);

                $('.table').footable();
                initFeather();
                setTimeout(() => {
                    $('.select2').select2();
                }, 300);
            }
        });
    }
</script>

    <!-- required scripts -->
    <script>
        "use strict";

        // change language
        function changeLocaleLanguage(e) {
            var locale = e.dataset.flag;
            $.post("https://grostore.themetags.com/backend/change-language", {
                _token: 'jWrIUYL5E59SINTNKdMmoqvWbXA9RaAXlnramIGO',
                locale: locale
            }, function(data) {
                location.reload();
            });
        }


        // change currency
        function changeLocaleCurrency(e) {
            var currency_code = e.dataset.currency;
            $.post("https://grostore.themetags.com/backend/change-currency", {
                _token: 'jWrIUYL5E59SINTNKdMmoqvWbXA9RaAXlnramIGO',
                currency_code: currency_code
            }, function(data) {
                location.reload();
            });
        }

        // change location
        function changeLocation(e) {
            var text = 'If you change the location your cart will be cleared. Do you want to proceed?'
            var confirm = window.confirm(text);
            if (confirm) {
                var location_id = e.dataset.location;
                $.post("https://grostore.themetags.com/backend/change-location", {
                    _token: 'jWrIUYL5E59SINTNKdMmoqvWbXA9RaAXlnramIGO',
                    location_id: location_id
                }, function(data) {
                    location.reload();
                });
            }
        }

        // localize data
        function localizeData(langKey) {
            window.location = 'https://grostore.themetags.com/admin/products/add-product?lang_key=' + langKey + '&localize';
        }

        // ajax toast
        function notifyMe(level, message) {
            if (level == 'danger') {
                level = 'error';
            }
            toastr.options = {
                closeButton: true,
                newestOnTop: false,
                progressBar: true,
                positionClass: "toast-top-center",
                preventDuplicates: false,
                onclick: null,
                showDuration: "3000",
                hideDuration: "1000",
                timeOut: "5000",
                extendedTimeOut: "1000",
                showEasing: "swing",
                hideEasing: "linear",
                showMethod: "fadeIn",
                hideMethod: "fadeOut",
            };
            toastr[level](message);
        }

        //laravel flash toast messages
            </script>
            
</body>

</html>
