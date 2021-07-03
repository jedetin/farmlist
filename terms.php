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
            <section class="section section-header text-dark pb-md-8">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="main">
                    <h1>Privacy Policy for FarmList Marketplace</h1>
                        <hr>
                        <div class="preview">
                        
                        <p>At FarmList - Find local grocery vendors, Order Online, accessible from farmlist.in, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by FarmList - Find local grocery vendors, Order Online and how we use it.</p>
                        <p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>
                        <p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in FarmList - Find local grocery vendors, Order Online. This policy is not applicable to any information collected offline or via channels other than this website. Our Privacy Policy was created with the help of the <a href="https://www.privacypolicyonline.com/privacy-policy-generator/">Free Privacy Policy Generator</a>.</p>
                        <h2>Consent</h2>
                        <p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>
                        <h2>Information we collect</h2>
                        <p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>
                        <p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>
                        <p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>
                        <h2>How we use your information</h2>
                        <p>We use the information we collect in various ways, including to:</p>
                        <ul>
                        <li>Provide, operate, and maintain our webste</li>
                        <li>Improve, personalize, and expand our webste</li>
                        <li>Understand and analyze how you use our webste</li>
                        <li>Develop new products, services, features, and functionality</li>
                        <li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the webste, and for marketing and promotional purposes</li>
                        <li>Send you emails</li>
                        <li>Find and prevent fraud</li>
                        </ul>
                        <h2>Log Files</h2>
                        <p>FarmList - Find local grocery vendors, Order Online follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering demographic information.</p>
                        <h2>Cookies and Web Beacons</h2>
                        <p>Like any other website, FarmList - Find local grocery vendors, Order Online uses 'cookies'. These cookies are used to store information including visitors' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users' experience by customizing our web page content based on visitors' browser type and/or other information.</p>
                        <p>For more general information on cookies, please read <a href="https://www.cookieconsent.com/what-are-cookies/">"What Are Cookies" from Cookie Consent</a>.</p>
                        <h2>Our Advertising Partners</h2>
                        <p>Some of advertisers on our site may use cookies and web beacons. Our advertising partners are listed below. Each of our advertising partners has their own Privacy Policy for their policies on user data. For easier access, we hyperlinked to their Privacy Policies below.</p>
                        <ul>
                        <li>
                        <p>Google</p>
                        <p><a href="https://policies.google.com/technologies/ads">https://policies.google.com/technologies/ads</a></p>
                        </li>
                        </ul>
                        <h2>Advertising Partners Privacy Policies</h2>
                        <p>You may consult this list to find the Privacy Policy for each of the advertising partners of FarmList - Find local grocery vendors, Order Online.</p>
                        <p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on FarmList - Find local grocery vendors, Order Online, which are sent directly to users' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>
                        <p>Note that FarmList - Find local grocery vendors, Order Online has no access to or control over these cookies that are used by third-party advertisers.</p>
                        <h2>Third Party Privacy Policies</h2>
                        <p>FarmList - Find local grocery vendors, Order Online's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. </p>
                        <p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites.</p>
                        <h2>Children's Information</h2>
                        <p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>
                        <p>FarmList - Find local grocery vendors, Order Online does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p> </div>
                        </div>
                </div>
            </div>
        </section>
            </div>
            <!-- about-area-end -->

            

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