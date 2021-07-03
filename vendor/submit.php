<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>FarmList - Find local grocery vendors, Order Online </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <!-- <link rel="stylesheet" href="../assets/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="../assets/css/animate.min.css">
        <link rel="stylesheet" href="../assets/css/magnific-popup.css">
        <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="../assets/css/themify-icons.css">
        <link rel="stylesheet" href="../assets/css/meanmenu.css">
        <link rel="stylesheet" href="../assets/css/slick.css">
        <link rel="stylesheet" href="../assets/css/main.css">
        <link rel="stylesheet" href="../assets/css/responsive.css">

    </head>
    <body>

        <!-- header-start -->
        <header>
            <div class="header-top-area pl-165 pr-165">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-8 col-lg-6 col-md-6">
                            <div class="header-top-wrapper">
                                <div class="header-top-info d-none d-xl-block f-left">
                                   
                                </div>
                                <div class="header-link f-left">
                                    <span><a href="#"><i class="far fa-phone"></i> +91 (265) 7879</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="header-top-right text-md-right">
                               <div class="shop-menu">
                                   <ul>
                                       <li><a href="../account/settings.html"><i class="fal fa-user-circle"></i> My Account</a></li>
                                       <li><a href="../cart/index.html"><i class="far fa-cart-plus"></i> Cart</a></li>
                                       <li><a href="../cart/checkout.html"><i class="far fa-heart"></i> Wishlist</a></li>
                                   </ul>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-menu-area menu-01 pl-165 pr-165">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="../index.html"><img src="../assets/images/logo.png"  /></a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 d-none d-lg-block">
                            <div class="header-right f-right">
                                <div class="header-lang f-right pos-rel d-none d-md-none d-lg-block">
                                    <div class="lang-icon">
                                        <img src="../assets/images/flag.png" alt="">
                                        <a href="#"><i class="far fa-angle-down"></i></a>
                                    </div>
                                    <ul class="header-lang-list">
                                        <li><a href="#">EN</a></li>
                                        <li><a href="#">हि</a></li>
                                    </ul>
                                </div>
                               
                                <div class="header-search f-right d-none d-xl-block">
                                    <form class="header-search-form">
                                        <input placeholder="Search" type="text">
                                        <button type="submit"><i class="far fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="active"><a href="../index.html">home</a>
                                            
                                        </li>
                                        <li><a href="../vendor/">Vendor</a>
                                            <ul class="sub-menu text-left">
                                                <li><a href="../vendor/index.html">All vendors</a>
                                                    <hr>
                                                <li><a href="../vendor/">by type</a>
                                                <li><a href="../vendor/">by location</a>
                                                

                                            </ul>
                                        </li>
                                        
                                        <li><a href="../item/index.html">Items</a>
                                            <ul class="sub-menu text-left">
                                                <li><a href="../item/index.html">Vegetables</a>
                                                <li><a href="../item/index.html">Fruits</a>
                                                
                                            </ul>
                                        </li>
                                       
                                        <li><a href="../about.html">About</a></li>
                                        <li><a href="../contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
            
        </header>
<?php
include_once('server.php');
if (isset($_POST['id']) && $_POST['total'] != '') {

    if (!isset($_POST['101'], $_POST)) {
        $_POST['101'] = "0";
    }
    if (!isset($_POST['102'], $_POST)) {
        $_POST['102'] = "0";
    }
    if (!isset($_POST['103'], $_POST)) {
        $_POST['103'] = "0";
    }
    if (!isset($_POST['104'], $_POST)) {
        $_POST['104'] = "0";
    }
    if (!isset($_POST['105'], $_POST)) {
        $_POST['105'] = "0";
    }
    if (!isset($_POST['106'], $_POST)) {
        $_POST['106'] = "0";
    }
    if (!isset($_POST['107'], $_POST)) {
        $_POST['107'] = "0";
    }
    if (!isset($_POST['108'], $_POST)) {
        $_POST['108'] = "0";
    }
    if (!isset($_POST['109'], $_POST)) {
        $_POST['109'] = "0";
    }
    if (!isset($_POST['110'], $_POST)) {
        $_POST['110'] = "0";
    }
    if (!isset($_POST['111'], $_POST)) {
        $_POST['111'] = "0";
    }
    if (!isset($_POST['112'], $_POST)) {
        $_POST['112'] = "0";
    }

    date_default_timezone_set('Asia/Kolkata');
    $oid = date("Ymd").strtoupper(substr(uniqid(sha1(time())),0,4));

    $id = $connection->real_escape_string($_POST['id']);
    $total = $connection->real_escape_string($_POST['total']);
    $user = $connection->real_escape_string($_POST['user']);
    $time = date('Y-m-d H:i:s');
    $a01 = $connection->real_escape_string($_POST['101']);
    $a02 = $connection->real_escape_string($_POST['102']);
    $a03 = $connection->real_escape_string($_POST['103']);
    $a04 = $connection->real_escape_string($_POST['104']);
    $a05 = $connection->real_escape_string($_POST['105']);
    $a06 = $connection->real_escape_string($_POST['106']);
    $a07 = $connection->real_escape_string($_POST['107']);
    $a08 = $connection->real_escape_string($_POST['108']);
    $a09 = $connection->real_escape_string($_POST['109']);
    $a10 = $connection->real_escape_string($_POST['110']);
    $a11 = $connection->real_escape_string($_POST['111']);
    $a12 = $connection->real_escape_string($_POST['112']);


    $sql = "INSERT INTO orders (orderid, id, user, total, time, `101`, `102`, `103`, `104`, `105`, `106`, `107`, `108`, `109`, `110`, `111`, `112`) VALUES ('" . $oid . "','" . $id . "','" . $user . "','" . $total . "', '" . $time . "','" . $a01 . "','" . $a02 . "' , '" . $a03 . "','" . $a04 . "','" . $a05 . "','" . $a06 . "','" . $a07 . "','" . $a08 . "','" . $a09 . "','" . $a10 . "','" . $a11 . "','" . $a12 . "')";
    if (!$result = $connection->query($sql)) {
        die('There was an error running the query [' . $connection->error . ']');
    } else {
        ?>
            <div class="breadcrumb-area pt-125 pb-125" style="background-image:url(../assets/img/bg/04.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-wrapper">
                                <div class="breadcrumb-text">
                                    <h3>Success!</h3>
                                </div>
                                <p>Sit back and the Vendor will supply you the order.
                                    <br>
                                    <h5>Order ID :<?php echo $oid; ?></h5> 
                                <a href="../index.html" class="btn btn-primary">Home</a><a href="../account/history.html" class="btn btn-secondary">View Order History </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php 
    }
} else {
    ?>
    <div class="breadcrumb-area pt-125 pb-125" style="background-image:url(../assets/img/bg/04.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-wrapper">
                                <div class="breadcrumb-text">
                                    <h3>Failed!</h3>
                                </div>
                                <p>Please try again later.
                                    

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php 
}
?>
        <footer>
        <div class="footer-area pt-80 pb-45">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="footer-wrapper mb-30">
                            <h3 class="footer-title">About</h3>
                            <div class="footer-text">
                                <p>FarmList is a online ordering and marketplace for local vendor</p>
                            </div>
                            <div class="footer-icon">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-wrapper ml-80 mb-30">
                            <h3 class="footer-title">Useful Links</h3>
                            <div class="footer-link">
                                <ul>
                                    <li><a href="../cart/index.php">Cart</a></li>
                                    <li><a href="../shop/index.php">Search by Item</a></li>
                                    <li><a href="../vendor/index.php">Search by Vendor</a></li>
                                    <li><a href="../vendor/">List with FarmList</a></li>
                                    <li><a href="#">Ordering Policy</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-wrapper ml-130 mb-30">
                            <h3 class="footer-title">Payment</h3>
                            <div class="footer-img">
                                <img src="../assets/footer/footer.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area mr-70 ml-70 pt-25 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="copyright">
                            <p>Copyright <i class="far fa-copyright"></i> 2021 <a href="#">FarmList</a>. All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="footer-bottom-link f-right">
                            <ul>
                                <li><a href="../index.php">Home </a></li>
                                <li><a href="../about.php"> About Us</a></li>
                                <li><a href="../terms.php">Terms and Condition</a></li>
                                <li><a href="../policy.php"> Private Policy </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
        <!-- footer-area-end -->



		<!-- JS here -->
        <script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        
        <script src="../assets/js/plugins.js"></script>
        <script src="../assets/js/main.js"></script>

    </body>
</html>