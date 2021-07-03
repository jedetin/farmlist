<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['username'] = "user";
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: ../login.php");
}
?>
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
                               <?php if (isset($_SESSION['username'])) : ?>
                                    <a href="../account/settings.php"><i class="fal fa-user-circle"></i> <?php echo $_SESSION['username']; ?></a>
                                    
                                    <?php if ($_SESSION['username']!="user") {?>
										<a class="btn btn-outline-primary" href="../index.php?logout='1'" >Logout</a>
									<?php }
									else{ ?>
										<a class="btn btn-outline-primary" href="../login.php">Login</a>
										<?php } ?>
                                <?php endif ?>
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
                                <a href="../index.php"><img src="../assets/images/logo.png"  /></a>
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
                                        <li class="active"><a href="../index.php">home</a>
                                            
                                        </li>
                                        <li><a href="../vendor/">Vendor</a>
                                            <ul class="sub-menu text-left">
                                                <li><a href="../vendor/index.php">All vendors</a>
                                                    <hr>
                                                <li><a href="../vendor/">by type</a>
                                                <li><a href="../vendor/">by location</a>
                                                

                                            </ul>
                                        </li>
                                        
                                        <li><a href="../item/index.php">Items</a>
                                            <ul class="sub-menu text-left">
                                                <li><a href="../item/index.php">Vegetables</a>
                                                <li><a href="../item/index.php">Fruits</a>
                                                
                                            </ul>
                                        </li>
                                       
                                        <li><a href="../about.php">About</a></li>
                                        <li><a href="../contact.php">Contact</a></li>
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
        <!-- header-start -->

        <main>
<hr>
            <!-- breadcrumb-area-start -->
            <div class="breadcrumb-text">
                <h3 class="text-center">Item vendors</h3>
            </div>
            <!-- breadcrumb-area-end -->

            <!-- product-area-start -->
            <div class="product-area pt-100 pb-100">
                <div class="container">
                    <div class="row mb-20">
                        <div class="col-xl-8 col-lg-3 col-md-3">
                            <div class="pro-tab1-content pt-15 mb-20 ">
                                <h4>Showing 20 Results Of 5ages</h4>
                            </div>
                        </div>
                       
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="pro-filter mb-20 f-right">
                                <form action="#">
                                    <select name="pro-filter" id="pro-filter">
                                        <option value="1">Default Type </option>
                                        <option value="2">Top Sales </option>
                                        <option value="3">New Product </option>
                                        <option value="4">A to Z Product </option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="product-tab-content">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row" id="peopleWork">
                                    <div class="col-xl-4 cl-lg-4 col-md-6">
                                        <div class="product-wrapper text-center mb-45">
                                            <div class="product-img pos-rel">
                                                <a href="[[link]]">
                                                    <!--<img src="../assets/images/vendor.png" alt="">-->
                                                    <img src="../assets/images/SPz3JXWE3a[[id]]3KD5yckfx8.png" alt="">
                                                    <!--SPz3JXWE3a10013KD5yckfx8-->
                                                   
                                                </a>
                                                <div class="product-action">
                                                   <form action="details.php" method="GET">
                                                    <button type="submit" name="id" value="[[id]]" class="c-btn">Build list</button>
                                                   </form> 
                                                    
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <h5>[[Items]]</h5>
                                                <h4><a href="[[link]]">[[Name]]</a></h4>
                                                <span>[[Location]]</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                   <!--<div class="row">
                        <div class="col-xl-12">
                            <div class="basic-pagination mt-20 basic-pagination-2 text-center">
                                <ul>
                                    <li><a href="#"><i class="far fa-angle-left"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="far fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>--> 
                </div>
            </div>
            <!-- product-area-end -->

            <!-- instagram-area-end -->

        </main>

        <!-- footer-area-start -->
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
        <script src="../assets/js/owl.carousel.min.js"></script>
        <script src="../assets/js/isotope.pkgd.min.js"></script>
        <script src="../assets/js/slick.min.js"></script>
        <script src="../assets/js/jquery.meanmenu.min.js"></script>
        <script src="../assets/js/ajax-form.js"></script>
        <script src="../assets/js/wow.min.js"></script>
        <script src="../assets/js/waypoints.min.js"></script>
        <script src="../assets/js/jquery.appear.js"></script>
        <script src="../assets/js/jquery.countdown.min.js"></script>
        <script src="../assets/js/jquery.knob.js"></script>
        <script src="../assets/js/jquery.counterup.min.js"></script>
        <script src="../assets/js/jquery.scrollUp.min.js"></script>
        <script src="../assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="../assets/js/jquery.magnific-popup.min.js"></script>
        <script src="../assets/js/plugins.js"></script>
        <script src="../assets/js/main.js"></script>

        <script src="../assets/test/jquery.miranda.js"></script>
        <script src="../assets/test/source.js"></script>
    </body>
</html>