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

            <!-- contact-area-start -->
            <div class="contact-area pos-rel pt-100 pb-160">
                <div class="shape d-none d-xl-block">
                    <div class="shape-item con-01"><img src="assets/img/icon/s.png" alt=""></div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <div class="contact-address-wrapper mt-20 mb-30">
                                <div class="section-title mb-30">
                                    <h2>Conatct Us</h2>
                                    <p>Well we are there to help you</p>
                                </div>
                                <ul class="contact-address-link">
                                    <li>
                                        <div class="contact-address-icon f-left mr-25">
                                            <i class="far fa-map-marked-alt"></i>
                                        </div>
                                        <div class="contact-address-text">
                                            <span>Head Office</span>
                                            <h4>Dahmi Kalan<br> Jaipur</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-address-icon f-left mr-25">
                                            <i class="far fa-phone"></i>
                                        </div>
                                        <div class="contact-address-text">
                                            <span>phone number</span>
                                            <h4>+012 (345) 678 99 <br> +89564213</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-address-icon f-left mr-25">
                                            <i class="far fa-envelope-open"></i>
                                        </div>
                                        <div class="contact-address-text">
                                            <span>email number</span>
                                            <h4>support@farmlist.in </h4>
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                        <div class="row">
                        <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                            <div class="section-title text-center mb-65">
                                <h2 class="f-right">Send Us A Message</h2>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <form id="contacts-form" class="contacts-form" action="#">
                                <div class="row f-right">
                                    <div class="col-lg-4 col-md-12">
                                        <div class="contacts-icon contactss-name">
                                            <input type="text" placeholder="Your Full Name ">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="contacts-icon contactss-email">
                                            <input type="email" placeholder="Your Email Address">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="contacts-icon contactss-website">
                                            <input type="text" placeholder="Your Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="contacts-icon contactss-message">
                                            <textarea name="comments" id="comments" cols="30" rows="10" placeholder="Your Comments...."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="contacts-form-button text-center">
                                            <button class="c-btn">
                                                send message <i class="far fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- contact-area-end -->

            <!-- map-area-start -->
            
            <!-- map-area-end -->

            <!-- contact-area-start -->
            <div class="contact-area pt-10 pb-10">
                <div class="container">
                    
                </div>
            </div>
            <!-- contact-area-end -->


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
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/jquery.scrollUp.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>