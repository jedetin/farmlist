<?php
session_start();

if ($_SESSION['username']=='user') {
    header('location: ../login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
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
                               <?php if (isset($_SESSION['username'])) : ?>
                                    <a href="settings.php"><i class="fal fa-user-circle"></i> <?php echo $_SESSION['username']; ?></a>
                                    
                                    <?php if ($_SESSION['username']!="user") {?>
										<a class="btn btn-outline-primary" href="../index.php?logout='1'" >Logout</a>
									<?php }
									else{ ?>
										<a class="btn btn-outline-primary" href="login.php">Login</a>
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

            
            <!-- coupon-area end -->

            <!-- checkout-area start -->
            <section class="checkout-area pb-70">
                <div class="container">
                    <form action="submit.php" method="POST">
                        <div class="row">
                            <div class="col-lg-12"><p></p>
                                <div class="checkbox-form">
                                    <h3>Order Address Details</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>Please enter your address details so that our Vendor can supply you with the deliveries!</p>
                                        </div>

                                        <input name="username" type="hidden" value="<?php echo $_SESSION['username']; ?>">

                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Your Name <span class="required">*</span></label>
                                                <input type="text" name="name" placeholder="" />
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-12">
                                            <div class="checkout-form-list" style="width: 100%;">
                                                <label>Address <span class="required">*</span></label>
                                                <textarea name="addr" type="text" placeholder="Street address" style="width: 100%;"></textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Area/Suburb <span class="required">*</span></label>
                                                <input type="text" name="area" placeholder="Area/ Suburb" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="country-select">
                                                <label>City <span class="required">*</span></label>
                                                <select>
                                                    <option value="Vadodara">Vadodara</option>
                                                    <option value="Jaipur" disabled>Jaipur</option>
                                                    <option value="Jaipur" disabled>Ahmedabad</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Pincode / Zip <span class="required">*</span></label>
                                                <input type="text" name="pinc" placeholder="Pincode / Zip" />
                                            </div>
                                        </div>
                                        
                                      <button class="btn btn-success btn-block">SAVE</button>  
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </section>
            <!-- checkout-area end -->


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
    </footer
        <!-- footer-area-end -->



		<!-- JS here -->
        <script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/owl.carousel.min.js"></script>
        <script src="../assets/js/ajax-form.js"></script>
        <script src="../assets/js/wow.min.js"></script>
        <script src="../assets/js/jquery.scrollUp.min.js"></script>
        <script src="../assets/js/jquery.magnific-popup.min.js"></script>
        <script src="../assets/js/plugins.js"></script>
        <script src="../assets/js/main.js"></script>
        <script>
        var x = document.getElementById("totalCart").innerHTML;
        var y = parseInt(x);
        document.getElementById("totalPay").innerHTML = (30 + y);
        console.log(y);
        </script>
    </body>
</html>