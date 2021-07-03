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
                                    <li><a href="../account/settings.php"><i class="fal fa-user-circle"></i> My Account</a></li>
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
    <?php
    $connection = mysqli_connect('localhost', 'root', '', 'farmlist');
    $query = "SELECT * FROM prices WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($query_run);
    ?>
    <main>

        <!-- breadcrumb-area-start -->

        <!-- breadcrumb-area-end -->

        <!-- blog-area-start -->
        <div class="blog-area pt-55 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 mb-30">

                        <div class="widget mb-30">
                            <h3 class="widget-title">Welcome <?php echo $id; ?></h3>
                            <ul class="blog-side-list">
                                <li>
                                    <a href="settings.php">Account Settings <span>></span> </a>
                                </li>
                                <li>
                                    <a href="index.php">Order History <span>></span> </a>
                                </li>
                                <li>
                                    <a href="update.php">Update Prices <span>></span> </a>
                                </li>

                            </ul>
                        </div>



                    </div>
                    <div class="col-xl-10 col-lg-10 mb-30">
                        <div class="blog-details blog-standard">
                            <div class="blog-wrapper">
                                <div class="blog-img pos-rel">
                                    <img src="../assets/img/blog/b-01.jpg" alt="">
                                </div>
                                <div class="blog-text">
                                    <h4>Update Prices</h4>
                                    <p> Last updated: <?php echo $row['update']; ?> </p>
                                </div>
                                <div class="post-text  mb-20">


                                    <form action="updatedb.php" method="POST">
                                        <input type="hidden" value="<?php echo $id; ?>" name="id">
                                        <table width="100%" border="0" cellspacing="10" cellpadding="10" class="text-center">
                                            <tr>
                                                <th scope="col">Item</th>
                                                <th scope="col">Prices</th>
                                            </tr>
                                            <tr>
                                                <td> Onion</td>
                                                <td> <input type="number" value="<?php echo $row['101'] ?>" name="101"></td>
                                            </tr>
                                            <tr>
                                                <td>Tomato </td>
                                                <td> <input type="number" value="<?php echo $row['102']; ?>" name="102"></td>
                                            </tr>
                                            <tr>
                                                <td>potato </td>
                                                <td><input type="number" value="<?php echo $row['103']; ?>" name="103"> </td>
                                            </tr>
                                            <tr>
                                                <td>cabbage </td>
                                                <td> <input type="number" value="<?php echo $row['104']; ?>" name="104"></td>
                                            </tr>
                                            <tr>
                                                <td>cauliflower </td>
                                                <td><input type="number" value="<?php echo $row['105']; ?>" name="105"></td>
                                            </tr>
                                            <tr>
                                                <td>spinach </td>
                                                <td><input type="number" value="<?php echo $row['106']; ?>" name="106"> </td>
                                            </tr>
                                            <tr>
                                                <td>coriander </td>
                                                <td> <input type="number" value="<?php echo $row['107']; ?>" name="107"> </td>
                                            </tr>
                                            <tr>
                                                <td> okra</td>
                                                <td> <input type="number" value="<?php echo $row['108']; ?>" name="108"></td>
                                            </tr>
                                            <tr>
                                                <td>ginger </td>
                                                <td><input type="number" value="<?php echo $row['109']; ?>" name="109"> </td>
                                            </tr>
                                            <tr>
                                                <td>chilli</td>
                                                <td><input type="number" value="<?php echo $row['110']; ?>" name="110"></td>
                                            </tr>
                                            <tr>
                                                <td> garlic</td>
                                                <td> <input type="number" value="<?php echo $row['111']; ?>" name="111"></td>
                                            </tr>
                                            <tr>
                                                <td>Bottle Gourd </td>
                                                <td><input type="number" value="<?php echo $row['112']; ?>" name="112"> </td>
                                            </tr>

                                            <tr>
                                                <td> okra</td>
                                                <td> <input type="number" value="<?php echo $row['108']; ?>" name="108"></td>
                                            </tr>
                                            <tr>
                                                <td> peas</td>
                                                <td> <input type="number" value="<?php echo $row['114']; ?>" name="114"></td>
                                            </tr>
                                            <tr>
                                                <td> lemon</td>
                                                <td> <input type="number" value="<?php echo $row['115']; ?>" name="115"></td>
                                            </tr>
                                            <tr>
                                                <td> carrot</td>
                                                <td> <input type="number" value="<?php echo $row['116']; ?>" name="116"></td>
                                            </tr>
                                            <tr>
                                                <td> capsicum</td>
                                                <td> <input type="number" value="<?php echo $row['117']; ?>" name="117"></td>
                                            </tr>
                                            <tr>
                                                <td> brocolli</td>
                                                <td> <input type="number" value="<?php echo $row['118']; ?>" name="118"></td>
                                            </tr>
                                            <tr>
                                                <td> mushroom</td>
                                                <td> <input type="number" value="<?php echo $row['119']; ?>" name="119"></td>
                                            </tr>
                                            <tr>
                                                <td> baby corn</td>
                                                <td> <input type="number" value="<?php echo $row['120']; ?>" name="120"></td>
                                            </tr>
                                            <tr>
                                                <td> lettuce</td>
                                                <td> <input type="number" value="<?php echo $row['121']; ?>" name="121"></td>
                                            </tr>
                                            <tr>
                                                <td> methi</td>
                                                <td> <input type="number" value="<?php echo $row['122']; ?>" name="122"></td>
                                            </tr>
                                            <tr>
                                                <td> spinach</td>
                                                <td> <input type="number" value="<?php echo $row['123']; ?>" name="123"></td>
                                            </tr>
                                            <tr>
                                                <td> pudina</td>
                                                <td> <input type="number" value="<?php echo $row['124']; ?>" name="124"></td>
                                            </tr>
                                            <tr>
                                                <td> turmeric</td>
                                                <td> <input type="number" value="<?php echo $row['125']; ?>" name="125"></td>
                                            </tr>
                                            <tr>
                                                <td> ivy gourd (tindora)</td>
                                                <td> <input type="number" value="<?php echo $row['126']; ?>" name="126"></td>
                                            </tr>
                                            <tr>
                                                <td> sweet potato yam</td>
                                                <td> <input type="number" value="<?php echo $row['127']; ?>" name="127"></td>
                                            </tr>
                                            <tr>
                                                <td> yam (rattalu) </td>
                                                <td> <input type="number" value="<?php echo $row['128']; ?>" name="128"></td>
                                            </tr>
                                            <tr>
                                                <td> chilli (short)</td>
                                                <td> <input type="number" value="<?php echo $row['129']; ?>" name="129"></td>
                                            </tr>
                                            <tr>
                                                <td> chilli (long)</td>
                                                <td> <input type="number" value="<?php echo $row['130']; ?>" name="130"></td>
                                            </tr>
                                            <tr>
                                                <td> drumstick</td>
                                                <td> <input type="number" value="<?php echo $row['131']; ?>" name="131"></td>
                                            </tr>
                                            <tr>
                                                <td> broad beans (valor)</td>
                                                <td> <input type="number" value="<?php echo $row['132']; ?>" name="132"></td>
                                            </tr>
                                            <tr>
                                                <td> beans (guar)</td>
                                                <td> <input type="number" value="<?php echo $row['133']; ?>" name="133"></td>
                                            </tr>
                                            <tr>
                                                <td> pigeon pea (tuver)</td>
                                                <td> <input type="number" value="<?php echo $row['134']; ?>" name="134"></td>
                                            </tr>



                                        </table>
                                        <input type="submit" class="btn btn-primary btn-block" value="UPDATE">
                                    </form>

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
                                <p>But must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born </p>
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
                            <p>Copyright <i class="far fa-copyright"></i> 2020 <a href="#">Medibazar</a>. All Rights Reserved</p>
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