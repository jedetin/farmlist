<?php
session_start();
$id = $_SESSION['id'];

if (!isset($_SESSION['id'])) {
    header("location: login.php");
}
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FarmList - Find local grocery vendors, Order Online</title>
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
                                    <li><a href="../account/settings.php"><i class="fal fa-user-circle"></i> My
                                            Account</a></li>
                                    <li><a href="../cart/index.php"><i class="far fa-cart-plus"></i> Cart</a></li>
                                    <li><a href="../cart/checkout.php"><i class="far fa-heart"></i> Wishlist</a></li>
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
                            <a href="../index.php"><img src="../assets/images/logo.png" /></a>
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

                    </div>
                    <div class="col-12">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- header-start -->
    <?php /*
    $connection = mysqli_connect('localhost', 'root', '', 'farmlist');
    $query = "SELECT * FROM vendors WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);*/

        $connection = new mysqli("localhost","root","","farmlist");
        //$sql = "SELECT * FROM vendors WHERE id = '$id'";
        $records = mysqli_query($connection,"SELECT * FROM vendors WHERE id = '$id'");
        $row = mysqli_fetch_assoc($records);

    ?>
    <main>

        <!-- breadcrumb-area-end -->

        <!-- blog-area-start -->
        <div class="blog-area pt-105 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-30">

                        <div class="widget mb-30">
                            <h3 class="widget-title">Admin</h3>
                            <button class="btn btn-secondary">Log out</button>
                            <p>Vendor ID: <?php echo $id; ?></p>
                            <ul class="blog-side-list">
                                <li>
                                    <a href="settings.php">Vendor Settings <span>></span> </a>
                                </li>
                                <li>
                                    <a href="index.php">View Orders<span>></span> </a>
                                </li>
                                <li>
                                    <a href="update.php">Update Prices <span>></span> </a>
                                </li>

                            </ul>
                        </div>



                    </div>
                    <div class="col-xl-8 col-lg-8 mb-30">
                        <div class="blog-details blog-standard">
                            <div class="blog-wrapper">
                                <h4 class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="text-muted">Settings</span>
                                    <span class="badge badge-secondary badge-pill"></span>
                                </h4>
                                <div class="post-text  mb-20">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Vendor ID</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="<?php echo $id; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Vendor Name</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="<?php echo $row['name']; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Access Code</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1"
                                            placeholder="Password" value="<?php echo $row['acode']; ?>" readonly><br>
                                        <input type="button" onclick="alert('Contact Farmlist Support');" class="btn btn-danger" value=" Change ">
                                    </div>
                                </div>
                                <hr> Vendor Information
                               
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address</label>
                                    <textarea class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="" readonly><?php echo $row['address']; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <textarea class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                    value="" readonly><?php echo $row['desc']; ?></textarea>
                                </div>

                            </div>
                            <div class="row blog-meta">

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
        <!-- blog-area-end -->

        <!-- instagram-area-start -->
        <div class="instagram-area pl-130 pr-130">
            <div class="container-fluid">
                <div class="row instagram-active">
                    <div class="col-xl-2 p-0">
                        <div class="instagram-wrapper">
                            <div class="instagram-img">
                                <a href="#"><img src="../assets/img/instagram/01.jpg" alt="">
                                    <div class="instagram-icon">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 p-0">
                        <div class="instagram-wrapper">
                            <div class="instagram-img">
                                <a href="#"><img src="../assets/img/instagram/02.jpg" alt="">
                                    <div class="instagram-icon">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 p-0">
                        <div class="instagram-wrapper">
                            <div class="instagram-img">
                                <a href="#"><img src="../assets/img/instagram/03.jpg" alt="">
                                    <div class="instagram-icon">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 p-0">
                        <div class="instagram-wrapper">
                            <div class="instagram-img">
                                <a href="#"><img src="../assets/img/instagram/04.jpg" alt="">
                                    <div class="instagram-icon">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 p-0">
                        <div class="instagram-wrapper">
                            <div class="instagram-img">
                                <a href="#"><img src="../assets/img/instagram/05.jpg" alt="">
                                    <div class="instagram-icon">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 p-0">
                        <div class="instagram-wrapper">
                            <div class="instagram-img">
                                <a href="#"><img src="../assets/img/instagram/06.jpg" alt="">
                                    <div class="instagram-icon">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 p-0">
                        <div class="instagram-wrapper">
                            <div class="instagram-img">
                                <a href="#"><img src="../assets/img/instagram/01.jpg" alt="">
                                    <div class="instagram-icon">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- instagram-area-end -->

    </main>

    <!-- footer-area-start -->
    <footer>
        <div class="footer-area pt-80 pb-45">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-wrapper mb-30">
                            <h3 class="footer-title">About Company</h3>
                            <div class="footer-text">
                                <p>But must explain to you how all this mistaken idea of denouncing pleasure and
                                    praising pain was born </p>
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
                                    <li><a href="about.php">Shipping Options</a></li>
                                    <li><a href="our-history.php">My Wishlist</a></li>
                                    <li><a href="about.php">My Account</a></li>
                                    <li><a href="team.php">Return Policy</a></li>
                                    <li><a href="about.php">Shopping FAQs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-wrapper ml-80 mb-30">
                            <h3 class="footer-title">Product</h3>
                            <div class="footer-link">
                                <ul>
                                    <li><a href="about.php">Thermometer</a></li>
                                    <li><a href="our-history.php">Vitamins & Supplements</a></li>
                                    <li><a href="about.php">Temperature Gun</a></li>
                                    <li><a href="team.php">Oxygen Mmeter & Mask</a></li>
                                    <li><a href="about.php">Shipping & Returns</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-wrapper ml-130 mb-30">
                            <h3 class="footer-title">Payment</h3>
                            <div class="footer-img">
                                <img src="../assets/img/footer/footer.png" alt="">
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
                            <p>Copyright <i class="far fa-copyright"></i> 2020 <a href="#">Medibazar</a>. All Rights
                                Reserved</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="footer-bottom-link f-right">
                            <ul>
                                <li><a href="#">Home </a></li>
                                <li><a href="#"> About Us</a></li>
                                <li><a href="#">Our Product</a></li>
                                <li><a href="#">Service </a></li>
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
</body>

</html>