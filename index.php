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
<php class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FarmList - Find local grocery vendors, Order Online</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.ico">
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
                                <span><a href="#"><i class="far fa-phone"></i> Vadodara </a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="header-top-right text-md-right">
                            <div class="shop-menu">
                                
                                <!-- logged in user information -->
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
                            <a href="index.php"><img src="assets/images/logo.png" /></a>
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

        <!-- hero-area start -->
        <section class="hero-area">
            <div class="hero-slider">
                <div class="slider-active">
                    <div class="single-slider slider-height d-flex align-items-center" data-background="">
                    <!--<div>Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>-->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-5 col-lg-6">
                                    <div class="hero-text mt-90">
                                        <div class="hero-slider-caption ">
                                            <!--<span data-animation="fadeInUp" data-delay=".2s">covid -19 products</span>-->
                                            <h2 data-animation="fadeInUp" data-delay=".4s">Ordering made easy</h2>
                                            <p data-animation="fadeInUp" data-delay=".6s">The best quality groceries from local vendor is a click away.
                                                Choose a vendor, make a list and it is delivered to you. </p>
                                        </div>
                                        <div class="hero-slider-btn">
                                            <a data-animation="fadeInUp" data-delay=".8s" href="vendor/" class="c-btn green"> Find a vendor <i class="far fa-plus"></i></a>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-6">
                                    <div class="slider-img d-none d-lg-block" data-animation="fadeInRight" data-delay=".8s">
                                        <img src="assets/images/bkg-banner.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero-area end -->

        <!-- banner-area-start -->
        <div class="banner-area banner-pb pt-30 pb-70 pl-55 pr-55">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6" style="background: url('assets/images/bkg1.jpg');">
                        <div class="banner-wrapper mb-50">
                            <div class="pos-rel center" style="height: 20vh;">

                                <div class="banner-text">

                                    <div >
                                        <a class="c-btn red-c-button" href="vendor/index.php">ORDER Vegetables</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6" style="background: url('assets/images/bkg2.jpg');">
                        <div class="banner-wrapper mb-50">
                            <div class="pos-rel center" style="height: 20vh;">

                                <div class="banner-text">
                                    
                                        <a class="c-btn red-c-button" href="vendor/index.php">ORDER Fruits</a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-xl-4 col-lg-4">
                            <div class="banner-wrapper mb-30">
                                <div class="pos-rel center">
                                    <a href="product-details.php"><img src="assets/images/dairy-products.png" ></a>

                                    <div class="banner-text">
                                        
                                        <div class="c-btn">
                                            <a href="contact.php">BUY Dairy</a>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->

                </div>
            </div>
        </div>
        <!-- banner-area-end -->

        <!-- product-area-start -->
        <div class="product-area pb-50">
            <div class="container">
                <div class="tab-border mb-60">
                    <div class="row">
                        <div class="col-xl-7 col-lg-6">
                            <div class="section-title mb-25">
                                <h2>Featured Vendors</h2>
                                <p> Best Prices and Best Quality</p>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="product-tab mb-25">
                                <ul class="nav justify-content-start justify-content-lg-end product-nav" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                            <i class="far fa-shield-check"></i> Best Seller
                                        </a>
                                    </li>
                                    <!--<li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                            <i class="far fa-star"></i>  Top Rated
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                                            <i class="far fa-star"></i> Popular
                                            </a>
                                        </li>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-tab-content">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                                <div class="col-xl-4 cl-lg-4 col-md-6">
                                    <div class="product-wrapper text-center mb-45">
                                        <div class="product-img pos-rel">
                                            <a href="vendor/details.php?id=1001">
                                                <img src="assets/images/vendor.png" alt="">
                                            </a>
                                            <div class="product-action">

                                                <a class="c-btn" href="vendor/details.php?id=1001">add to cart <i class="far fa-plus"></i></a>

                                            </div>
                                        </div>
                                        <div class="product-text">
                                            <h5>Fruits and Vegetables</h5>
                                            <h4><a href="vendor/details.php?id=1001">FarmFresh</a></h4>
                                            <span>Akota</span>
                                        </div>
                                    </div>
                                </div>
                                
                            
                                <div class="col-xl-4 cl-lg-4 col-md-6">
                                    <div class="product-wrapper text-center mb-45">
                                        <div class="product-img pos-rel">
                                            <a href="vendor/details.php?id=1002">
                                                <img src="assets/images/vendor.png" alt="">
                                            </a>
                                            <div class="product-action">

                                                <a class="c-btn" href="vendor/details.php?id=1002">add to cart <i class="far fa-plus"></i></a>

                                            </div>
                                        </div>
                                        <div class="product-text">
                                            <h5>Fruits and Vegetables</h5>
                                            <h4><a href="vendor/details.php?id=1002">Agrawal's</a></h4>
                                            <span>Alkapuri</span>
                                        </div>
                                    </div>
                                </div>
                                
                            
                                <div class="col-xl-4 cl-lg-4 col-md-6">
                                    <div class="product-wrapper text-center mb-45">
                                        <div class="product-img pos-rel">
                                            <a href="vendor/details.php?id=1003">
                                                <img src="assets/images/vendor.png" alt="">
                                            </a>
                                            <div class="product-action">

                                                <a class="c-btn" href="vendor/details.php?id=1003">add to cart <i class="far fa-plus"></i></a>

                                            </div>
                                        </div>
                                        <div class="product-text">
                                            <h5>Fruits</h5>
                                            <h4><a href="vendor/details.php?id=1003">VIP Fruits</a></h4>
                                            <span>Vasna</span>
                                        </div>
                                    </div>
                                </div>
                                
                            <a href="vendor/" class="btn btn-block btn-primary">View More</a>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- product-area-end -->
        <!-- deal-area-start -->
        <div class="deal-area pb-50 pt-95">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                        <div class="section-title text-center mb-65">
                            <h2>Deals of the Week </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-8 offset-lg-2 offset-xl-3">
                        <div class="deal-wrapper text-center">
                            <div class="deal-count">
                                <div class="deal-time" data-countdown="2021/3/21"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- deal-area-end -->

        <!-- banner-area-start -->
        <div class="banner-02-area pb-70 pl-165 pr-165">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="banner-02-wrapper text-center mb-30" data-bg-color="#edf7fb">
                            <div class="banner-02-text">
                                <span>VIP Fruits</span>
                                <h2>Imported Fruits</h2>
                            </div>
                            <div class="banner-02-img pos-rel">
                                <a href="#"><img src="assets/images/feature1.jpg" alt=""></a>
                            </div>
                            <div class="banner-price">
                                <span>starting from</span>
                                <span class="new-price">₹ 230</span>
                            </div>
                            <div class="banner-button">
                                <a class="c-btn" href="#">Shop now <i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="banner-02-wrapper text-center mb-30" data-bg-color="#f8f8f8">
                            <div class="banner-02-text">
                                <span>Modi Groceries</span>
                                <h2>1kg - all Vegetable Pack </h2>
                            </div>
                            <div class="banner-02-img pos-rel">
                                <a href="#"><img src="assets/images/feature2.jpg" alt=""></a>

                            </div>
                            <div class="banner-price">
                                <span class="old-price">₹500</span>
                                <span class="new-price">₹250</span>
                            </div>
                            <div class="banner-button">
                                <a class="c-btn" href="#">Shop now <i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="banner-02-wrapper text-center mb-30" data-bg-color="#f3f8ff">
                            <div class="banner-02-text">
                                <span> FarmerMart </span>
                                <h2> Dragon Fruit</h2>
                            </div>
                            <div class="banner-02-img pos-rel">
                                <a href="#"><img src="assets/images/feature3.jpg" alt=""></a>

                            </div>
                            <div class="banner-price">
                                <span class="old-price"> ₹80/ 250g </span>
                                <span class="new-price"> ₹70/ 250g </span>
                            </div>
                            <div class="banner-button">
                                <a class="c-btn" href="#">Shop now <i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner-area-end -->

        <!-- product-area-end -->

        <!-- testimonial-area-start -->
        <div class="testimonial-area pt-100 pb-175">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                        <div class="section-title text-center mb-65">
                            <h2>What Our users say</h2>

                        </div>
                    </div>
                </div>
                <div class="row test-active">
                    <div class="col-xl-6">
                        <div class="testimonial-wrapper">
                            <div class="inner-test d-flex justify-content-between align-items-center">
                                <div class="test-img">
                                    <img src="assets/images/02.png" alt="">
                                </div>
                                <div class="test-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <div class="test-text">
                                <p>I love their system. Farmlist is the convinient service of the year.</p>
                                <h4>Surendra</h4>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="testimonial-wrapper">
                            <div class="inner-test d-flex justify-content-between align-items-center">
                                <div class="test-img">
                                    <img src="assets/images/02.png" alt="">
                                </div>
                                <div class="test-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <div class="test-text">
                                <p>"I wish I would have thought of it first. Farmlist is the most valuable grocery app we have used. Without Farmlist, we would have been getting poor quality vegetables from online markets"</p>
                                <h4>Nisha</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="testimonial-wrapper">
                            <div class="inner-test d-flex justify-content-between align-items-center">
                                <div class="test-img">
                                    <img src="assets/images/02.png" alt="">
                                </div>
                                <div class="test-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <div class="test-text">
                                <p>"I don't know what else to say. The very best. I wish I would have thought of it first."</p>
                                <h4>Rachana Ben</h4>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="testimonial-wrapper">
                            <div class="inner-test d-flex justify-content-between align-items-center">
                                <div class="test-img">
                                    <img src="assets/images/02.png" alt="">
                                </div>
                                <div class="test-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <div class="test-text">
                                <p>"Definitely worth using everytime I order."</p>
                                <h4>Ramesh Patel</h4>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonial-area-end -->

        

        <!-- brand-area-start -->
        <div class="deal-02-area mb-30">
            <div class="container">
                <div class="deal-bg" data-background="assets/images/bg02.jpg" style="background-image: url('assets/images/seller.jpg');">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="deal-02-wrapper mb-20">
                                <div class="section-title mb-20">
                                    <h2>Associate with FarmList</h2>
                                    <p>Reach more customers with us.</p>
                                   
                                </div>
                                <ul class="fa-ul">
                                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Weekly Settlements</li>
                                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Affordable Fee</li>
                                        <li><span class="fa-li"><i class="fas fa-check"></i></span>One Month Trial</li>
                                </ul>
                            </div>
                            <a class="btn btn-primary" href="#">Associate with Us <i class="far fa-plus"></i></a>
                        </div>
                        <div class="col-lg-6 col-lg-6">
                            <div class="deal-img mb-30">
                                <img src="assets/images/seller.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand-area-end -->

        <!-- features-area-start -->
        <div class="features-area pt-60 pb-30 grey-2-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="features-wrapper mb-30">
                            <div class="features-icon fe-1 f-left">
                                <i class="fal fa-truck"></i>
                            </div>
                            <div class="features-text">
                                <h3>Free Delivery</h3>
                                <p>Within 3km of your vendor, minimal charges else</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="features-wrapper mb-30">
                            <div class="features-icon fe-2 f-left">
                                <i class="fal fa-usd-circle"></i>
                            </div>
                            <div class="features-text">
                                <h3>Pay On Delivery</h3>
                                <p>Your choice of payment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="features-wrapper mb-30">
                            <div class="features-icon fe-3 f-left">
                                <i class="fal fa-check-circle"></i>
                            </div>
                            <div class="features-text">
                                <h3>100% Fresh</h3>
                                <p>Best Quality groceries guaranteed.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- features-area-end -->


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

</php>