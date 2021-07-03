<?php
session_start();
if ($_SESSION['username'] == 'user') {
    //$_POST['continue'] = true;
    header('location: ../login.php?redirect=cart.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: ../login.php");
}
$id = $_GET['id'];
include_once('server.php');
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
    <script src="../assets/js/cart.min.js" type="text/javascript"></script>

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
                                <?php if (isset($_SESSION['username'])) : ?>
                                    <a href="../account/settings.php"><i class="fal fa-user-circle"></i> <?php echo $_SESSION['username']; ?></a>

                                    <?php if ($_SESSION['username'] != "user") { ?>
                                        <a class="btn btn-outline-primary" href="../index.php?logout='1'">Logout</a>
                                    <?php } else { ?>
                                        <a class="btn btn-outline-primary" href="../login.php">Login</a>
                                    <?php } ?>
                                <?php endif ?>
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
    $records = mysqli_query($connection, "SELECT * FROM prices WHERE id='$id'");
    $row = mysqli_fetch_assoc($records);
    ?>
    <main>

        <!-- breadcrumb-area-start -->
        <div class="breadcrumb-area" style="background-image:url(../assets/img/bg/04.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">



                        <div class="breadcrumb-wrapper">
                            <div class="breadcrumb-text">
                                <h4>Product Vendor: <?php echo $_GET['name']; ?></h4>
                                <p>Prices of <?php echo $row['update']; ?></p>
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
                        <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between bg-info">
                                <div class="header-search-form">
                                    <input placeholder="Search item..." type="text" id="input">
                                    <!--<button type="submit"><i class="far fa-search"></i></button>-->
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">Onion (500g)</h6>
                                    <p class="card-title pricing-card-title">₹ <?php echo $row['101'] ?></p>
                                </div>
                                <span class="text-muted"><button type="button" class="btn float-right btn-outline-primary" onClick="cartLS.add({id: 101, name: 'Onion', price: <?php echo $row['101'] ?>})">Add to Cart</button></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">Tomato (500g)</h6>
                                    <p class="card-title pricing-card-title">₹ <?php echo $row['102'] ?></p>
                                </div>
                                <button type="button" class="btn float-right btn-outline-primary" onClick="cartLS.add({id: 102, name: 'Tomato', price: <?php echo $row['102'] ?>})">Add to Cart</button>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-condensed"> 
                                <div>
                                    <h6 class="my-0">Potato (500g)</h6>
                                    <p class="card-title pricing-card-title">₹ <?php echo $row['103'] ?></p>
                                </div>
                                <button type="button" class="btn float-right btn-outline-primary" onClick="cartLS.add({id: 103, name: 'Potato', price: <?php echo $row['103'] ?>})">Add to Cart</button>
                            </li>
                        </ul>
                        
                        <div class="row">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="my-0 font-weight-normal">cabbage </h4>
                                    <small>1 pc</small>
                                    <p class="card-title pricing-card-title">₹ <?php echo $row['104'] ?></p>
                                    <button type="button" class="btn float-right btn-outline-primary" onClick="cartLS.add({id: 104, name: 'cabbage', price: <?php echo $row['104'] ?>})">Add to Cart</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="my-0 font-weight-normal">Cauliflower</h4>
                                    <small>1 pc</small>
                                    <p class="card-title pricing-card-title">₹ <?php echo $row['105'] ?></p>
                                    <button type="button" class="btn float-right btn-outline-primary" onClick="cartLS.add({id: 105, name: 'Cauliflower', price: <?php echo $row['105'] ?>})">Add to Cart</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="my-0 font-weight-normal">Spinach</h4>
                                    <small>150g</small>
                                    <p class="card-title pricing-card-title">₹ <?php echo $row['106'] ?></p>
                                    <button type="button" class="btn float-right btn-outline-primary" onClick="cartLS.add({id: 106, name: 'Spinach', price: <?php echo $row['106'] ?>})">Add to Cart</button>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="my-0 font-weight-normal">Coriander</h4>
                                    <small>100g</small>
                                    <p class="card-title pricing-card-title">₹ <?php echo $row['107'] ?></p>
                                    <button type="button" class="btn float-right btn-outline-primary" onClick="cartLS.add({id: 107, name: 'Coriander', price: <?php echo $row['107'] ?>})">Add to Cart</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="my-0 font-weight-normal">Okra</h4>
                                    <small>150g</small>
                                    <p class="card-title pricing-card-title">₹ <?php echo $row['108'] ?></p>
                                    <button type="button" class="btn float-right btn-outline-primary" onClick="cartLS.add({id: 108, name: 'Okra', price: <?php echo $row['108'] ?>})">Add to Cart</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="my-0 font-weight-normal">Ginger</h4>
                                    <small>150g</small>
                                    <p class="card-title pricing-card-title">₹ <?php echo $row['109'] ?></p>
                                    <button type="button" class="btn float-right btn-outline-primary" onClick="cartLS.add({id: 109, name: 'Ginger', price: <?php echo $row['109'] ?>})">Add to Cart</button>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="my-0 font-weight-normal">Chilli</h4>
                                    <small>150g</small>
                                    <p class="card-title pricing-card-title">₹ <?php echo $row['110'] ?></p>
                                    <button type="button" class="btn float-right btn-outline-primary" onClick="cartLS.add({id: 110, name: 'Chilli', price: <?php echo $row['110'] ?>})">Add to Cart</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="my-0 font-weight-normal">Garlic</h4>
                                    <small>150g</small>
                                    <p class="card-title pricing-card-title">₹ <?php echo $row['111'] ?></p>
                                    <button type="button" class="btn float-right btn-outline-primary" onClick="cartLS.add({id: 111, name: 'Garlic', price: <?php echo $row['111'] ?>})">Add to Cart</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="my-0 font-weight-normal">Cucumber</h4>
                                    <small>250g</small>
                                    <p class="card-title pricing-card-title">₹ <?php echo $row['112'] ?></p>
                                    <button type="button" class="btn float-right btn-outline-primary" onClick="cartLS.add({id: 112, name: 'Cucumber', price: <?php echo $row['112'] ?>})">Add to Cart</button>
                                </div>
                            </div>

                        </div>




                    </div>
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <h2>Cart</h2>
                                <button class="btn float-right btn-outline-warning mr-2" onClick="cartLS.destroy()">Clear</button>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="submit.php">
                                    <h5>Method of Delivery</h5>
                                    <p>
                                        <input type="radio" id="homedel" name="del" value="1" required>
                                        <label for="male">Home Delivery</label><br>
                                        <input type="radio" id="selfpic" name="del" value="0" required>
                                        <label for="female">Self Pickup</label>

                                        <input type="hidden" value="<?php echo $id ?>" name="id">
                                        <input type="hidden" value="<?php echo $_SESSION['username'] ?>" name="user">
                                    </p>
                                    <table class="table">
                                        <thead>
                                            <td>Item</td>
                                            <td>Qty</td>
                                            <td></td>
                                            <td></td>
                                            <td>Price</td>
                                        </thead>
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

                                    <input type="submit" class="btn btn-primary btn-block" value="PLACE ORDER">
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
                                <img src="../assets/images/footer.png" alt="">
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

    <script src="../assets/js/slick.min.js"></script>
    <script src="../assets/js/jquery.meanmenu.min.js"></script>
    <script src="../assets/js/ajax-form.js"></script>
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/waypoints.min.js"></script>

    <script src="../assets/js/jquery.scrollUp.min.js"></script>

    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>

    <script src="../assets/test/jquery.miranda.js"></script>
    <script src="../assets/test/source.js"></script>
    <script src="../assets/js/cart.js"></script>
    <script src="../assets/js/cart.2.js"></script>
</body>

</html>