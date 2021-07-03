<?php
session_start();
$id = 1003;
/*
if (!isset($_SESSION['id'])) {
    header("location: login.php");
}
*/
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
                            <div class="logo">
                                <a href="../index.php"><img src="../assets/images/logo.png" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="header-top-right text-md-right">
                            <div class="shop-menu">
                                <p>Farmlist for Delivery</p>
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
    $query = "SELECT * FROM orders WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);
    ?>
    <main>

        <!-- breadcrumb-area-start -->

        <!-- breadcrumb-area-end -->

        <!-- blog-area-start -->
        <div class="blog-area pt-55 pb-30">
            <div class="container">
                <div class="row">

                    <div class="col-xl-12 mb-30">
                        <div class="blog-details blog-standard">
                            <div class="blog-wrapper">
                                <div class="blog-img pos-rel">
                                    <img src="../assets/img/blog/b-01.jpg" alt="">
                                </div>
                                <div class="blog-text">
                                    <h4>Ordering History with FarmList</h4>
                                </div>
                                <div class="post-text  mb-20">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#Order Number</th>
                                                <th scope="col">Address</th>
                                                <th scope="col">Date/Time</th>
                                                <th scope="col">View Order</th>
                                                <th scope="col">Order Total</th>
                                                <th scope="col">Complete</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            if (mysqli_num_rows($query_run) > 0) {
                                                while ($row = mysqli_fetch_assoc($query_run)) {
                                            ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $row['orderid']; ?></th>
                                                        <td><span><i class="far fa-calendar-alt"></i> <?php echo $row['time']; ?></span></td>
                                                        <td>
                                                            <form method="POST" action="address.php">
                                                            <input type="text" value="<?php echo (isset($row['user'])) ? $row['user']: ''?>" name="userid">
                                                            <input class="btn btn-primary" type="submit" value="Address">
                                                            </form>
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    Onion<br>Tomato<br>potato<br>cabbage<br>cauliflower<br>spinach<br>coriander<br>okra<br>ginger<br>chilli<br>garlic<br>Bottle Gourd<br>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <?php echo $row['101'] . "<br>" . $row['102'] . "<br>" . $row['103'] . "<br>" . $row['104'] . "<br>" . $row['105'] . "<br>" . $row['106'] . "<br>" . $row['107'] . "<br>" . $row['108'] . "<br>" . $row['109'] . "<br>" . $row['110'] . "<br>" . $row['111'] . "<br>" . $row['112'] . "<br>"; ?>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><?php echo $row['total']; ?></td>
                                                        <td><a href="" class="btn btn-success">Complete</a> </td>
                                                    </tr>

                                                    <div id="myModal" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Order</h4>
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                                                                </div>
                                                                <div class="modal-body">

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">OKAY</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                            <?php
                                                }
                                            } else {
                                                echo "No Record Found";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
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
                                    <li><a href="about.html">Shipping Options</a></li>
                                    <li><a href="our-history.html">My Wishlist</a></li>
                                    <li><a href="about.html">My Account</a></li>
                                    <li><a href="team.html">Return Policy</a></li>
                                    <li><a href="about.html">Shopping FAQs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-wrapper ml-80 mb-30">
                            <h3 class="footer-title">Product</h3>
                            <div class="footer-link">
                                <ul>
                                    <li><a href="about.html">Thermometer</a></li>
                                    <li><a href="our-history.html">Vitamins & Supplements</a></li>
                                    <li><a href="about.html">Temperature Gun</a></li>
                                    <li><a href="team.html">Oxygen Mmeter & Mask</a></li>
                                    <li><a href="about.html">Shipping & Returns</a></li>
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