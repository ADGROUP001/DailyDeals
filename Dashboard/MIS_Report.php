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
            Dashboard : DailyDeals Online Store
    </title>
    <!--build:css-->
    <link rel="stylesheet" href="main.css" type="text/css">
    <link rel="stylesheet" href="custom.css" type="text/css">
  
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
    
]                                    </div>
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
                        <a href="https://grostore.themetags.com" class="nav-link tt-visit-store" target="_blank">
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
                            <a href="https://grostore.themetags.com/admin/products"
                                class="">All Products</a>
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
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="card tt-page-header">
                            <div class="card-body d-lg-flex align-items-center justify-content-lg-between">
                                <div class="tt-page-title">
                                    <h2 class="h5 mb-lg-0">MIS Report</h2>
                                </div>
                                <div class="tt-action">

                                                                            <!--<a href="https://grostore.themetags.com/admin/orders" class="btn btn-secondary"><i
                                                data-feather="shopping-cart" class="me-2"></i>Manage Sales</a>
                                    
                                                                            <a href="/SEM_4_DailyDeals/Dashboard/add_products.php" class="btn btn-primary ms-2"><i
                                                data-feather="plus" class="me-2"></i>
                                            Add Product</a>-->
                                                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                
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

// Query to get the count of customers
$sql_customer = "SELECT COUNT(*) AS customer_count FROM customers";
$result_customer = $conn->query($sql_customer);
$customer_count = ($result_customer->num_rows > 0) ? $result_customer->fetch_assoc()["customer_count"] : 0;

// Query to get the count of products
$sql_products = "SELECT COUNT(*) AS product_count FROM product";
$result_products = $conn->query($sql_products);
$product_count = ($result_products->num_rows > 0) ? $result_products->fetch_assoc()["product_count"] : 0;

// Fetch monthly sales performance
$query = "SELECT MONTH(OrderDate) AS Month, COUNT(OrderID) AS TotalOrders, SUM(TotalAmount) AS TotalSales 
          FROM `order` 
          WHERE OrderStatus != 'Cancelled' 
          GROUP BY MONTH(OrderDate)";
$result = $conn->query($query);
$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = [
        'Month' => $row['Month'],
        'TotalOrders' => $row['TotalOrders'],
        'TotalSales' => $row['TotalSales']
    ];
}
$months = array_column($data, 'Month');
$totalOrders = array_column($data, 'TotalOrders');
$totalSales = array_column($data, 'TotalSales');

// Calculate total sales for the current month
$currentMonth = date('n');
$currentMonthSales = 0;
foreach ($data as $monthData) {
    if ($monthData['Month'] == $currentMonth) {
        $currentMonthSales = $monthData['TotalSales'];
        break;
    }
}

// Fetch customer activity (Top 5 customers by order count)
$query = "SELECT CID, COUNT(OrderID) AS TotalOrders 
          FROM `order` 
          GROUP BY CID 
          ORDER BY TotalOrders DESC 
          LIMIT 5";
$result = $conn->query($query);
$customerData = [];
while ($row = $result->fetch_assoc()) {
    $customerData[] = [
        'CID' => $row['CID'],
        'TotalOrders' => $row['TotalOrders']
    ];
}
$customerIDs = array_column($customerData, 'CID');
$customerOrders = array_column($customerData, 'TotalOrders');

// Fetch inventory status
$query = "SELECT p.Name, p.StockQuantity 
          FROM product p";
$result = $conn->query($query);

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = [
        'ProductName' => $row['Name'],
        'StockQuantity' => $row['StockQuantity']
    ];
}

$productNames = array_column($data, 'ProductName');
$stockQuantities = array_column($data, 'StockQuantity');

$conn->close();
?>

<!-- Display Dashboard Data -->
<div class="row g-3 mb-3">
    <div class="col-xl-9">
        <div class="row g-3">
            <!-- Display Number of Customers -->
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="card h-100 flex-column">
                    <div class="card-body">
                        <span class="text-muted">Number of Customers</span>
                        <h4 class="fw-bold"><?php echo $customer_count; ?></h4>
                    </div>
                </div>
            </div>

            <!-- Display Number of Products -->
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="card h-100 flex-column">
                    <div class="card-body">
                        <span class="text-muted">Number of Products</span>
                        <h4 class="fw-bold"><?php echo $product_count; ?></h4>
                    </div>
                </div>
            </div>

            <!-- Top 5 Customer Orders Placeholder -->
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="card h-100 flex-column">
                    <div class="card-body">
                        <span class="text-muted">Top 5 Customer Activity</span>
                        <canvas id="customerActivityChart"></canvas> <!-- Canvas for Pie Chart -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sales this month chart -->
<div class="col-l2">
    <div class="card" style="width:1000px;">
        <div class="card-body pb-0">
            <div class="d-flex align-items-center justify-content-between">
                <span class="text-muted">Monthly Sales Performance Report</span>
            </div>
            <h4 class="fw-bold mb-0">₹<?php echo number_format($currentMonthSales, 2); ?></h4>
        </div>
        <!-- Chart Container -->
        <canvas id="monthlySalesChart" class="px-3" style="max-width: 800px; max-height: 500px;"></canvas>
    </div>
</div>
<div class="col-l2">
    <div class="card" style="width:1000px;">
        <div class="card-body pb-0">
            <div class="d-flex align-items-center justify-content-between">
                <span class="text-muted">Inventory Report</span>
            </div>
            <h4 class="fw-bold mb-0"></h4>
        </div>
        <!-- Chart Container -->
        <canvas id="inventoryChart" class="px-3" style="max-width: 800px; max-height: 500px;"></canvas>
    </div>
</div>

<!-- Load Chart.js library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Monthly Sales Chart -->
<script>
    const ctx1 = document.getElementById('monthlySalesChart').getContext('2d');
    const monthlySalesChart = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($months); ?>,
            datasets: [
                {
                    label: 'Total Orders',
                    data: <?php echo json_encode($totalOrders); ?>,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Total Sales',
                    data: <?php echo json_encode($totalSales); ?>,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

<!-- Customer Activity Chart -->
<script>
    const ctx2 = document.getElementById('customerActivityChart').getContext('2d');
    const customerActivityChart = new Chart(ctx2, {
        type: 'pie',
        data: {
            labels: <?php echo json_encode($customerIDs); ?>,
            datasets: [{
                label: 'Total Orders',
                data: <?php echo json_encode($customerOrders); ?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true,
                    position: 'top'
                }
            }
        }
    });
     
       // Corrected Inventory Chart
const ctx6 = document.getElementById('inventoryChart').getContext('2d');
const inventoryChart = new Chart(ctx6, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode($productNames); ?>,
        datasets: [{
            label: 'Stock Quantity',
            data: <?php echo json_encode($stockQuantities); ?>,
            backgroundColor: 'rgba(255, 159, 64, 0.2)',
            borderColor: 'rgba(255, 159, 64, 1)',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

   
</script>



                                                  <div class="row g-3 mb-3">
                        <a href="https://grostore.themetags.com/admin/orders" class="col-lg-3 col-sm-6">
                            <div class="card h-100 flex-column">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-lg">
                                            <div class="text-center bg-soft-primary rounded-circle">
                                                <span class="text-primary"> <i data-feather="shopping-bag"></i></span>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <h4 class="mb-1">135</h4>
                                            <span class="text-muted">Total Orders</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="https://grostore.themetags.com/admin/orders?delivery_status=pending"
                            class="col-lg-3 col-sm-6">
                            <div class="card h-100 flex-column">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-lg">
                                            <div class="text-center bg-soft-warning rounded-circle">
                                                <span class="text-warning"> <i data-feather="clock"></i></span>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <h4 class="mb-1">97</h4>
                                            <span class="text-muted">Order Pending</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="https://grostore.themetags.com/admin/orders?delivery_status=processing"
                            class="col-lg-3 col-sm-6">
                            <div class="card h-100 flex-column">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-lg">
                                            <div class="text-center bg-soft-info rounded-circle">
                                                <span class="text-info"> <i data-feather="refresh-cw"></i></span>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <h4 class="mb-1">2</h4>
                                            <span class="text-muted">Order Processing</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="https://grostore.themetags.com/admin/orders?delivery_status=delivered"
                            class="col-lg-3 col-sm-6">
                            <div class="card h-100 flex-column">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-lg">
                                            <div class="text-center bg-soft-success rounded-circle">
                                                <span class="text-success"> <i data-feather="check-circle"></i></span>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <h4 class="mb-1">34</h4>
                                            <span class="text-muted">Total Delivered</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
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
        // total earning chart
        var totalSales = {
            chart: {
                type: "area",
                height: 80,
                sparkline: {
                    enabled: true,
                },
            },
            stroke: {
                curve: "smooth",
                width: 2,
            },
            fill: {
                opacity: 1,
            },
            series: [{
                name: 'Earning',
                data: [0,0,0,0,0,0,0,0],
            }, ],
            labels: ["2024-03-21","2024-03-22","2024-03-23","2024-03-24","2024-03-25","2024-03-26","2024-03-27","2024-03-28"],
            xaxis: {
                type: "datetime",
            },
            yaxis: {
                min: 0,
            },
            colors: ["#FF7C08"],
        };
        new ApexCharts(document.querySelector("#totalSales"), totalSales).render();

        //pie chart top five
        var optionsTopFive = {
            chart: {
                type: "donut",
                height: 100,
                offsetY: 15,
                offsetX: -20,
            },
            series: [219,213,181,135,101],
            labels: ["Fresh Fruits","Fresh Organic","Vegetables","Breakfast","Beauty & Health"],
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200,
                    },
                    legend: {
                        position: "bottom",
                        show: false,
                    },
                    dataLabels: {
                        enabled: false,
                    },
                },
            }, ],
        };

        var chartTopFive = new ApexCharts(
            document.querySelector("#topFive"),
            optionsTopFive
        );
        chartTopFive.render();

        // last 30 days order chart 
        var optionsBar = {
            chart: {
                type: "bar",
                height: 80,
                width: "100%",
                stacked: true,
                offsetX: -3,
                sparkline: {
                    enabled: true,
                },
                zoom: {
                    enabled: false,
                },
                toolbar: {
                    show: false,
                },
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: false,
                    },
                    columnWidth: "60%",
                    endingShape: "rounded",
                },
            },
            colors: ["#1E90FF"],
            series: [{
                name: "Orders",
                data: [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
            }, ],
            labels: ["2024-02-27","2024-02-28","2024-02-29","2024-03-01","2024-03-02","2024-03-03","2024-03-04","2024-03-05","2024-03-06","2024-03-07","2024-03-08","2024-03-09","2024-03-10","2024-03-11","2024-03-12","2024-03-13","2024-03-14","2024-03-15","2024-03-16","2024-03-17","2024-03-18","2024-03-19","2024-03-20","2024-03-21","2024-03-22","2024-03-23","2024-03-24","2024-03-25","2024-03-26","2024-03-27","2024-03-28"],
            xaxis: {
                type: "datetime",
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false,
                },
                crosshairs: {
                    show: false,
                },
                labels: {
                    show: false,
                    style: {
                        fontSize: "14px",
                    },
                },
            },
            grid: {
                xaxis: {
                    lines: {
                        show: false,
                    },
                },
                yaxis: {
                    lines: {
                        show: false,
                    },
                },
            },
            yaxis: {
                axisBorder: {
                    show: false,
                },
                labels: {
                    show: false,
                },
            },
            legend: {
                floating: false,
                position: "bottom",
                horizontalAlign: "right",
            },
            tooltip: {
                shared: true,
                intersect: false,
            },
        };
        var chartBar = new ApexCharts(document.querySelector("#last30DaysOrders"), optionsBar);
        chartBar.render();

        // this month sales 
        var options = {
            chart: {
                height: 210,
                width: "100%",
                type: "area",
                offsetX: -10,
                zoom: {
                    enabled: false,
                },
                toolbar: {
                    show: false,
                },
            },
            dataLabels: {
                enabled: false,
            },
            stroke: {
                curve: "smooth",
                width: 2,
            },

            colors: ["#4EB529"],
            series: [{
                name: "Sales",
                data: [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
            }],
            zoom: {
                enabled: false,
            },
            legend: {
                show: false,
                enabled: false,
            },
            labels: ["01 Mar","02 Mar","03 Mar","04 Mar","05 Mar","06 Mar","07 Mar","08 Mar","09 Mar","10 Mar","11 Mar","12 Mar","13 Mar","14 Mar","15 Mar","16 Mar","17 Mar","18 Mar","19 Mar","20 Mar","21 Mar","22 Mar","23 Mar","24 Mar","25 Mar","26 Mar","27 Mar","28 Mar","29 Mar","30 Mar","31 Mar"],
            xaxis: {
                labels: {
                    show: false,
                },
                axisTicks: {
                    show: false,
                },

            }
        };
        var chart = new ApexCharts(document.querySelector("#thisMonthChart"), options);
        chart.render();
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
            window.location = 'https://grostore.themetags.com/admin?lang_key=' + langKey + '&localize';
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
