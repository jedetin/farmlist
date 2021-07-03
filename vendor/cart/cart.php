<?php
//$id = $_POST['id'];
//$arr = $_POST; 
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
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <!-- <link rel="stylesheet" href="../../assets/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../assets/css/animate.min.css">
    <link rel="stylesheet" href="../../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../../assets/css/meanmenu.css">
    <link rel="stylesheet" href="../../assets/css/slick.css">
    <link rel="stylesheet" href="../../assets/css/main.css">
    <link rel="stylesheet" href="../../assets/css/responsive.css">
    <script src="../../assets/js/cart.min.js" type="text/javascript"></script>

</head>

<body>

    <!-- header-start -->
    <header>
        <div class="header-top-area pl-135 pr-135">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-8 col-lg-3 col-md-3">
                        <div class="header-top-wrapper">
                            <div class="header-top-info d-none d-xl-block f-left">

                            </div>
                            <div class="header-link f-left">
                                <span><a href="#"><i class="far fa-phone"></i> +91 (235) 7879</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-3 col-md-3">
                        <div class="header-top-right text-md-right">
                            <div class="shop-menu">
                                <ul>
                                    <li><a href="../account/settings.html"><i class="fal fa-user-circle"></i> My
                                            Account</a></li>
                                    <li><a href="../cart/index.html"><i class="far fa-cart-plus"></i> Cart</a></li>
                                    <li><a href="../cart/checkout.html"><i class="far fa-heart"></i> Wishlist</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-menu-area menu-01 pl-135 pr-135">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3">
                        <div class="logo">
                            <a href="../index.html"><img src="../../assets/images/logo.png" /></a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 d-none d-lg-block">
                        <div class="header-right f-right">
                            <div class="header-lang f-right pos-rel d-none d-md-none d-lg-block">
                                <div class="lang-icon">
                                    <img src="../../assets/images/flag.png" alt="">
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
    <!-- header-start -->

    <main>

        <!-- breadcrumb-area-start -->
        <div class="breadcrumb-area" style="background-image:url(../../assets/img/bg/04.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">



                        <div class="breadcrumb-wrapper">
                            <div class="breadcrumb-text">
                                <h4>Product Vendor: <?php //echo $_POST['name']; 
                                                    ?></h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- blog-area-start -->
        <div class="blog-area pt-105 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="row">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">Onion</h4>
                                </div>
                                <div class="card-body">
                                
                                    <p class="card-title pricing-card-title">$130</p>
                                    <button type="button" class="btn float-right btn-outline-primary" onClick="cartLS.add({id: 101, name: 'Onion', price: 30})">Add to Cart</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">Tomato</h4>
                                </div>
                                <div class="card-body">
                                    <p class="card-title pricing-card-title">$130</p>
                                    <button type="button" class="btn float-right btn-outline-primary" onClick="cartLS.add({id: 102, name: 'Tomato', price: 10})">Add to Cart</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">Potato</h4>
                                </div>
                                <div class="card-body">
                                    <p class="card-title pricing-card-title">$130</p>
                                    <button type="button" class="btn float-right btn-outline-primary" onClick="cartLS.add({id: 103, name: 'Potato', price: 20})">Add to Cart</button>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">cabbage </h4>
                                </div>
                                <div class="card-body">
                                    <p class="card-title pricing-card-title">$130</p>
                                    <button type="button" class="btn float-right btn-outline-primary" onClick="cartLS.add({id: 104, name: 'cabbage', price: 30})">Add to Cart</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">Cauliflower</h4>
                                </div>
                                <div class="card-body">
                                    <p class="card-title pricing-card-title">$130</p>
                                    <button type="button" class="btn float-right btn-outline-primary" onClick="cartLS.add({id: 105, name: 'Cauliflower', price: 10})">Add to Cart</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">Spinach</h4>
                                </div>
                                <div class="card-body">
                                    <p class="card-title pricing-card-title">$130</p>
                                    <button type="button" class="btn float-right btn-outline-primary" onClick="cartLS.add({id: 106, name: 'Spinach', price: 20})">Add to Cart</button>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">Coriander</h4>
                                </div>
                                <div class="card-body">
                                    <p class="card-title pricing-card-title">$130</p>
                                    <button type="button" class="btn float-right btn-outline-primary" onClick="cartLS.add({id: 107, name: 'Coriander', price: 30})">Add to Cart</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">Okra</h4>
                                </div>
                                <div class="card-body">
                                    <p class="card-title pricing-card-title">$130</p>
                                    <button type="button" class="btn float-right btn-outline-primary" onClick="cartLS.add({id: 108, name: 'Okra', price: 10})">Add to Cart</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">Ginger</h4>
                                </div>
                                <div class="card-body">
                                    <p class="card-title pricing-card-title">$130</p>
                                    <button type="button" class="btn float-right btn-outline-primary" onClick="cartLS.add({id: 109, name: 'Ginger', price: 20})">Add to Cart</button>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">Chilli</h4>
                                </div>
                                <div class="card-body">
                                    <p class="card-title pricing-card-title">$130</p>
                                    <button type="button" class="btn float-right btn-outline-primary" onClick="cartLS.add({id: 110, name: 'Chilli', price: 30})">Add to Cart</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">Garlic</h4>
                                </div>
                                <div class="card-body">
                                    <p class="card-title pricing-card-title">$130</p>
                                    <button type="button" class="btn float-right btn-outline-primary" onClick="cartLS.add({id: 111, name: 'Garlic', price: 10})">Add to Cart</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">Cucumber</h4>
                                </div>
                                <div class="card-body">
                                    <p class="card-title pricing-card-title">$130</p>
                                    <button type="button" class="btn float-right btn-outline-primary" onClick="cartLS.add({id: 112, name: 'Cucumber', price: 20})">Add to Cart</button>
                                </div>
                            </div>
                            
                        </div>




                    </div>
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-header">
                                <h2>Cart</h2>
                                <button class="btn float-right btn-outline-warning mr-2" onClick="cartLS.destroy()">Clear</button>
                            </div>
                            <div class="card-body">
                            <form method="POST" action="">
                                <table class="table">
                                    <tbody class="cart">
                                    </tbody>
                                    <tfoot>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-right">Total: <strong class="total"></strong></td>
                                        <td></td>
                                    </tfoot>
                                </table>
                                <input type="submit" class="btn btn-primary btn-block" value="CHECKOUT"
                            </form>
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
                    <div class="col-xl-3 col-lg-3 col-md-3">
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
                    <div class="col-xl-3 col-lg-3 col-md-3">
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
                    <div class="col-xl-3 col-lg-3 col-md-3">
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
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <div class="footer-wrapper ml-130 mb-30">
                            <h3 class="footer-title">Payment</h3>
                            <div class="footer-img">
                                <img src="../../assets/img/footer/footer.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area mr-70 ml-70 pt-25 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <div class="copyright">
                            <p>Copyright <i class="far fa-copyright"></i> 2020 <a href="#">Medibazar</a>. All Rights
                                Reserved</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3">
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
    <script src="../../assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="../../assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../../assets/js/popper.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/owl.carousel.min.js"></script>

    <script src="../../assets/js/slick.min.js"></script>
    <script src="../../assets/js/jquery.meanmenu.min.js"></script>
    <script src="../../assets/js/ajax-form.js"></script>
    <script src="../../assets/js/wow.min.js"></script>
    <script src="../../assets/js/waypoints.min.js"></script>

    <script src="../../assets/js/jquery.scrollUp.min.js"></script>

    <script src="../../assets/js/jquery.magnific-popup.min.js"></script>
    <script src="../../assets/js/plugins.js"></script>
    <script src="../../assets/js/main.js"></script>

    <script src="../../assets/test/jquery.miranda.js"></script>
    <script src="../../assets/test/source.js"></script>
    <script src="../../assets/js/cart.js"></script>
</body>

</html>