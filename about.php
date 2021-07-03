<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['username'] = "user";
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
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/responsive.css">

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
                                    <span><a href="#"><i class="far fa-phone"></i> +91 (265) 3572553</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="header-top-right text-md-right">
                               <div class="shop-menu">
                               <?php if (isset($_SESSION['username'])) : ?>
                                    <a href="account/settings.php"><i class="fal fa-user-circle"></i> <?php echo $_SESSION['username']; ?></a>
                                    
                                    <?php if ($_SESSION['username']!="user") {?>
										<a class="btn btn-outline-primary" href="index.php?logout='1'" >Logout</a>
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
                                <a href="index.php"><img src="assets/images/logo.png"  /></a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 d-none d-lg-block">
                            <div class="header-right f-right">
                                <div class="header-lang f-right pos-rel d-none d-md-none d-lg-block">
                                    <div class="lang-icon">
                                        <img src="assets/images/flag.png" alt="">
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
                                        <li class="active"><a href="index.php">home</a>
                                            
                                        </li>
                                        <li><a href="vendor/">Vendor</a>
                                            <ul class="sub-menu text-left">
                                                <li><a href="vendor/index.php">All vendors</a>
                                                    <hr>
                                                <li><a href="vendor/">by type</a>
                                                <li><a href="vendor/">by location</a>
                                                

                                            </ul>
                                        </li>
                                        
                                        <li><a href="item/index.php">Items</a>
                                            <ul class="sub-menu text-left">
                                                <li><a href="item/index.php">Vegetables</a>
                                                <li><a href="item/index.php">Fruits</a>
                                                
                                            </ul>
                                        </li>
                                       
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="contact.php">Contact</a></li>
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

            <!-- breadcrumb-area-start -->
            
            <!-- breadcrumb-area-end -->

            <!-- about-area-start -->
            <div class="about-area about-pb pt-150 pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="about-img pos-rel mb-30">
                                <img src="assets/images/shopbkg.png" alt="">
                                <div class="about-tag">
                                    <h2>9+</h2>
                                    <span>vendors across <br> Vadodara</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="about-wrapper pos-rel mb-30">
                                <div class="section-title mb-40">
                                    <h2>Find a Grocery vendor and build a order list to get your grocery delivered home!</h2>
                                    
                                </div>
                                <div class="about-item">
                                    <ul>
                                        <li>
                                            <div class="about-text">
                                                <h4><i class="far fa-check-circle"></i>Verified Vendor Listing</h4>
                                                <p>All the grocery vendors listed on Farmlist are checked for quality. Delivery may be provided by the vendor or
                                                charged by the Farmlist services.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="about-text">
                                                <h4><i class="far fa-check-circle"></i>Covid -19 Safe</h4>
                                                <p>Our vendors practise safety measures, ensure high quality vegetables and edibly sanitise food</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- about-area-end -->

            <!-- counter-area-end -->

            <!-- features-area-start -->
            <div class="features-02-area pt-100 pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                            <div class="section-title text-center mb-65">
                                <h2>Why Farmlist?</h2>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="feature-02-wrapper text-center mb-30">
                                <div class="p-feature-text">
                                    <h3>Market Rates</h3>
                                    <div class="feature-02-icon">
                                        <img src="assets/img/icon/f-01.png" alt="">
                                    </div>
                                    <p>Vendor updates prices frequently and offers you the best prices</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="feature-02-wrapper text-center mb-30">
                                <div class="p-feature-text">
                                    <h3>12 hour delivery guarantee</h3>
                                    <div class="feature-02-icon">
                                        <img src="assets/img/icon/f-02.png" alt="">
                                    </div>
                                    <p>Order anytime, your vegetable arrives before 12 hours. Promise!</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="feature-02-wrapper text-center mb-30">
                                <div class="p-feature-text">
                                    <h3>24/7 Support</h3>
                                    <div class="feature-02-icon">
                                        <img src="assets/img/icon/f-03.png" alt="">
                                    </div>
                                    <p> Are systems are foolproof, however our awesome team is for you</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="feature-02-wrapper text-center mb-30">
                                <div class="p-feature-text">
                                    <h3>Zero Extra Charges</h3>
                                    <div class="feature-02-icon">
                                        <img src="assets/img/icon/f-04.png" alt="">
                                    </div>
                                    <p>We wont charge a single paisa from you. What you see is what you get.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- features-area-end -->

            <!-- team-area-start -->
            
            <!-- team-area-end -->

            <!-- cta-area-start -->
            <div class="cta-area mb-100">
                <div class="container">
                    <div class="cta-bg pt-80 pb-80" data-background="assets/img/bg/05.jpg">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="cta-wrapper">
                                    <div class="cta-text">
                                        <span>Be SAFE: Covid -19</span>
                                        <h2>Order from home?</h2>
                                        <a href="vendor/index.php" class="c-btn">shop now! <i class="far fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- cta-area-end -->

            <!-- testimonial-area-start -->
            
            <!-- testimonial-area-end -->

            <!-- brand-area-start -->
            
            <!-- brand-area-end -->

            <!-- instagram-area-start -->
            
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
                                          <li><a href="cart/index.php">Cart</a></li>
                                          <li><a href="shop/index.php">Search by Item</a></li>
                                          <li><a href="vendor/index.php">Search by Vendor</a></li>
                                          <li><a href="vendor/">List with FarmList</a></li>
                                          <li><a href="#">Ordering Policy</a></li>
                                                                                  
                                      </ul>
                                  </div>
                              </div>
                          </div>
                          
                          <div class="col-xl-3 col-lg-3 col-md-6">
                              <div class="footer-wrapper ml-130 mb-30">
                                  <h3 class="footer-title">Payment</h3>
                                  <div class="footer-img">
                                      <img src="assets/footer/footer.png" alt="">
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
                                  <li><a href="index.php">Home </a></li>
                                  <li><a href="about.php"> About Us</a></li>
                                  <li><a href="terms.php">Terms and Condition</a></li>
                                  <li><a href="policy.php"> Private Policy </a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          </footer>
        <!-- footer-area-end -->



		<!-- JS here -->
        <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/jquery.meanmenu.min.js"></script>
        <script src="assets/js/ajax-form.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/jquery.appear.js"></script>
        <script src="assets/js/jquery.countdown.min.js"></script>
        <script src="assets/js/jquery.knob.js"></script>
        
        <script src="assets/js/jquery.scrollUp.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>