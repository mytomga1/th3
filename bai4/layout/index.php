<!doctype html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->

    <head>
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <title>Home</title>
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- Favicon
                ============================================ -->
            <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

            <!-- FONTS
                ============================================ -->
            <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

            <!-- animate CSS
                ============================================ -->
            <link rel="stylesheet" href="css/animate.css">

            <!-- FANCYBOX CSS
                ============================================ -->
            <link rel="stylesheet" href="css/jquery.fancybox.css">

            <!-- BXSLIDER CSS
                ============================================ -->
            <link rel="stylesheet" href="css/jquery.bxslider.css">

            <!-- MEANMENU CSS
                ============================================ -->
            <link rel="stylesheet" href="css/meanmenu.min.css">

            <!-- JQUERY-UI-SLIDER CSS
                ============================================ -->
            <link rel="stylesheet" href="css/jquery-ui-slider.css">

            <!-- NIVO SLIDER CSS
                ============================================ -->
            <link rel="stylesheet" href="css/nivo-slider.css">

            <!-- OWL CAROUSEL CSS
                ============================================ -->
            <link rel="stylesheet" href="css/owl.carousel.css">

            <!-- OWL CAROUSEL THEME CSS
                ============================================ -->
            <link rel="stylesheet" href="css/owl.theme.css">

            <!-- BOOTSTRAP CSS
                ============================================ -->
            <link rel="stylesheet" href="css/bootstrap.min.css">

            <!-- FONT AWESOME CSS
                ============================================ -->
            <link rel="stylesheet" href="css/font-awesome.min.css">

            <!-- NORMALIZE CSS
                ============================================ -->
            <link rel="stylesheet" href="css/normalize.css">

            <!-- MAIN CSS
                ============================================ -->
            <link rel="stylesheet" href="css/main.css">

            <!-- STYLE CSS
                ============================================ -->
            <link rel="stylesheet" href="style.css">

            <!-- RESPONSIVE CSS
                ============================================ -->
            <link rel="stylesheet" href="css/responsive.css">

            <!-- IE CSS
                ============================================ -->
            <link rel="stylesheet" href="css/ie.css">

            <!-- MODERNIZR JS
                ============================================ -->
            <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        </head>
    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

        <!-- HEADER-TOP START -->
        <?php include_once 'header-top.php'?>
        <!-- HEADER-TOP END -->

        <!-- HEADER-MIDDLE START -->
        <?php include_once 'header-middle.php'?>
        <!-- HEADER-MIDDLE END -->

        <!-- MAIN-MENU-AREA START -->
        <?php include_once 'main_menu.php'?>
        <!-- MAIN-MENU-AREA END -->

        <!-- MAIN-CONTENT-SECTION & LATEST-NEWS-AREA START -->
        <?php include_once 'home.php'?>
        <?php
            if(!empty($_GET['page'])){
                if($_GET['page'] == 'list'){
                    include_once 'list_products.php';
                }
            }else include_once 'home.php';
        ?>
        <!-- MAIN-CONTENT-SECTION & LATEST-NEWS-AREA END -->

    <!-- BRAND-CLIENT-AREA START -->
    <section class="brand-client-area">
        <div class="container">
            <div class="row">
                <!-- BRAND-CLIENT-ROW START -->
                <div class="brand-client-row">
                    <div class="center-title-area">
                        <h2 class="center-title">BRAND & CLIENTS</h2>
                    </div>
                    <div class="col-xs-12">
                        <div class="row">
                            <!-- CLIENT-CAROUSEL START -->
                            <div class="client-carousel">
                                <!-- CLIENT-SINGLE START -->
                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="img/brand/1.png" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>
                                <!-- CLIENT-SINGLE END -->
                                <!-- CLIENT-SINGLE START -->
                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="img/brand/2.png" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>
                                <!-- CLIENT-SINGLE END -->
                                <!-- CLIENT-SINGLE START -->
                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="img/brand/3.png" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>
                                <!-- CLIENT-SINGLE END -->
                                <!-- CLIENT-SINGLE START -->
                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="img/brand/4.png" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>
                                <!-- CLIENT-SINGLE END -->
                                <!-- CLIENT-SINGLE START -->
                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="img/brand/5.png" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>
                                <!-- CLIENT-SINGLE END -->
                                <!-- CLIENT-SINGLE START -->
                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="img/brand/1.png" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>
                                <!-- CLIENT-SINGLE END -->
                                <!-- CLIENT-SINGLE START -->
                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="img/brand/3.png" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>
                                <!-- CLIENT-SINGLE END -->
                                <!-- CLIENT-SINGLE START -->
                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="img/brand/2.png" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>
                                <!-- CLIENT-SINGLE END -->
                                <!-- CLIENT-SINGLE START -->
                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="img/brand/3.png" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>
                                <!-- CLIENT-SINGLE END -->
                                <!-- CLIENT-SINGLE START -->
                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="img/brand/4.png" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>
                                <!-- CLIENT-SINGLE END -->
                                <!-- CLIENT-SINGLE START -->
                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="img/brand/5.png" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>
                                <!-- CLIENT-SINGLE END -->
                                <!-- CLIENT-SINGLE START -->
                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="img/brand/1.png" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>
                                <!-- CLIENT-SINGLE END -->
                                <!-- CLIENT-SINGLE START -->
                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="img/brand/3.png" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>
                                <!-- CLIENT-SINGLE END -->
                                <!-- CLIENT-SINGLE START -->
                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="img/brand/4.png" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>
                                <!-- CLIENT-SINGLE END -->
                                <!-- CLIENT-SINGLE START -->
                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="img/brand/5.png" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>
                                <!-- CLIENT-SINGLE END -->
                            </div>
                            <!-- CLIENT-CAROUSEL END -->
                        </div>
                    </div>
                </div>
                <!-- BRAND-CLIENT-ROW END -->
            </div>
        </div>
    </section>
    <!-- BRAND-CLIENT-AREA END -->
    <!-- COMPANY-FACALITY START -->
    <section class="company-facality">
        <div class="container">
            <div class="row">
                <div class="company-facality-row">
                    <!-- SINGLE-FACALITY START -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="single-facality">
                            <div class="facality-icon">
                                <i class="fa fa-rocket"></i>
                            </div>
                            <div class="facality-text">
                                <h3 class="facality-heading-text">FREE SHIPPING</h3>
                                <span>on order over $100</span>
                            </div>
                        </div>
                    </div>
                    <!-- SINGLE-FACALITY END -->
                    <!-- SINGLE-FACALITY START -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="single-facality">
                            <div class="facality-icon">
                                <i class="fa fa-umbrella"></i>
                            </div>
                            <div class="facality-text">
                                <h3 class="facality-heading-text">24/7 SUPPORT</h3>
                                <span>online consultations</span>
                            </div>
                        </div>
                    </div>
                    <!-- SINGLE-FACALITY END -->
                    <!-- SINGLE-FACALITY START -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="single-facality">
                            <div class="facality-icon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <div class="facality-text">
                                <h3 class="facality-heading-text">DAILY UPDATES</h3>
                                <span>Check out store for latest</span>
                            </div>
                        </div>
                    </div>
                    <!-- SINGLE-FACALITY END -->
                    <!-- SINGLE-FACALITY START -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="single-facality">
                            <div class="facality-icon">
                                <i class="fa fa-refresh"></i>
                            </div>
                            <div class="facality-text">
                                <h3 class="facality-heading-text">30-DAY RETURNS</h3>
                                <span>moneyback guarantee</span>
                            </div>
                        </div>
                    </div>
                    <!-- SINGLE-FACALITY END -->
                </div>
            </div>
        </div>
    </section>
    <!-- COMPANY-FACALITY END -->
    <!-- FOOTER-TOP-AREA START -->
    <section class="footer-top-area">
        <div class="container">
            <div class="footer-top-container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <!-- FOOTER-TOP-LEFT START -->
                        <div class="footer-top-left">
                            <!-- NEWSLETTER-AREA START -->
                            <div class="newsletter-area">
                                <h2>Newsletter</h2>
                                <p>Subscribe to our mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                                <form action="#">
                                    <div class="form-group newsletter-form-group">
                                        <input type="text" class="form-control newsletter-form" placeholder="Enter your e-mail">
                                        <input type="submit" class="newsletter-btn" name="submit" value="Subscribe" />
                                    </div>
                                </form>
                            </div>
                            <!-- NEWSLETTER-AREA END -->
                            <!-- ABOUT-US-AREA START -->
                            <div class="about-us-area">
                                <h2>About Us</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            </div>
                            <!-- ABOUT-US-AREA END -->
                            <!-- FLLOW-US-AREA START -->
                            <div class="fllow-us-area">
                                <h2>Follow us</h2>
                                <ul class="flow-us-link">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                            <!-- FLLOW-US-AREA END -->
                        </div>
                        <!-- FOOTER-TOP-LEFT END -->
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                        <!-- FOOTER-TOP-RIGHT-1 START -->
                        <div class="footer-top-right-1">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 hidden-sm">
                                    <!-- STATICBLOCK START -->
                                    <div class="staticblock">
                                        <h2>static block</h2>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s<br />when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    </div>
                                    <!-- STATICBLOCK END -->
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <!-- STORE-INFORMATION START -->
                                    <div class="Store-Information">
                                        <h2>Store Information</h2>
                                        <ul>
                                            <li>
                                                <div class="info-lefticon">
                                                    <i class="fa fa-map-marker"></i>
                                                </div>
                                                <div class="info-text">
                                                    <p>My Company, 42 avenue des Champs Elysées 75000 Paris France </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="info-lefticon">
                                                    <i class="fa fa-phone"></i>
                                                </div>
                                                <div class="info-text call-lh">
                                                    <p>Call us now : 0123-456-789</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="info-lefticon">
                                                    <i class="fa fa-envelope-o"></i>
                                                </div>
                                                <div class="info-text">
                                                    <p>Email : <a href="mailto:sales@yourcompany.com"><i class="fa fa-angle-double-right"></i> sales@yourcompany.com</a></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- STORE-INFORMATION END -->
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <!-- GOOGLE-MAP-AREA START -->
                                    <div class="google-map-area">
                                        <div class="google-map">
                                            <div id="googleMap" style="width:100%;height:150px;"></div>
                                        </div>
                                    </div>
                                    <!-- GOOGLE-MAP-AREA END -->
                                </div>
                            </div>
                        </div>
                        <!-- FOOTER-TOP-RIGHT-1 END -->
                        <div class="footer-top-right-2">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <!-- FOTTER-MENU-WIDGET START -->
                                    <div class="fotter-menu-widget">
                                        <div class="single-f-widget">
                                            <h2>Categories</h2>
                                            <ul>
                                                <li><a href="shop-gird.html"><i class="fa fa-angle-double-right"></i>Women </a></li>
                                                <li><a href="shop-gird.html"><i class="fa fa-angle-double-right"></i>Men</a></li>
                                                <li><a href="shop-gird.html"><i class="fa fa-angle-double-right"></i>clothing</a></li>
                                                <li><a href="shop-gird.html"><i class="fa fa-angle-double-right"></i>kids</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- FOTTER-MENU-WIDGET END -->
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                    <!-- FOTTER-MENU-WIDGET START -->
                                    <div class="fotter-menu-widget">
                                        <div class="single-f-widget">
                                            <h2>Information</h2>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-angle-double-right"></i>Specials</a></li>
                                                <li><a href="#"><i class="fa fa-angle-double-right"></i>New products</a></li>
                                                <li><a href="#"><i class="fa fa-angle-double-right"></i>Best sellers</a></li>
                                                <li><a href="contact-us.html"><i class="fa fa-angle-double-right"></i>Contact Us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- FOTTER-MENU-WIDGET END -->
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <!-- FOTTER-MENU-WIDGET START -->
                                    <div class="fotter-menu-widget">
                                        <div class="single-f-widget">
                                            <h2>My account</h2>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-angle-double-right"></i>My orders</a></li>
                                                <li><a href="#"><i class="fa fa-angle-double-right"></i>My credit slips</a></li>
                                                <li><a href="#"><i class="fa fa-angle-double-right"></i>My addresses</a></li>
                                                <li><a href="#"><i class="fa fa-angle-double-right"></i>My personal info</a></li>
                                                <li><a href="#"><i class="fa fa-angle-double-right"></i>Sign out</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- FOTTER-MENU-WIDGET END -->
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <!-- PAYMENT-METHOD START -->
                                    <div class="payment-method">
                                        <img class="img-responsive pull-right" src="img/payment.png" alt="payment-method" />
                                    </div>
                                    <!-- PAYMENT-METHOD END -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FOOTER-TOP-AREA END -->
    <!-- COPYRIGHT-AREA START -->
    <footer class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="copy-right">
                        <address>Copyright © 2015 <a href="http://bootexperts.com/">BootExperts</a> All Rights Reserved</address>
                    </div>
                    <div class="scroll-to-top">
                        <a href="#" class="bstore-scrollertop"><i class="fa fa-angle-double-up"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- COPYRIGHT-AREA END -->
    <!-- JS
            ===============================================-->
    <!-- jquery js -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>

    <!-- fancybox js -->
    <script src="js/jquery.fancybox.js"></script>

    <!-- bxslider js -->
    <script src="js/jquery.bxslider.min.js"></script>

    <!-- meanmenu js -->
    <script src="js/jquery.meanmenu.js"></script>

    <!-- owl carousel js -->
    <script src="js/owl.carousel.min.js"></script>

    <!-- nivo slider js -->
    <script src="js/jquery.nivo.slider.js"></script>

    <!-- jqueryui js -->
    <script src="js/jqueryui.js"></script>

    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>

    <!-- wow js -->
    <script src="js/wow.js"></script>
    <script>
        new WOW().init();
    </script>

    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
        function initialize() {
            var mapOptions = {
                zoom: 8,
                scrollwheel: false,
                center: new google.maps.LatLng(35.149868, -90.046678)
            };
            var map = new google.maps.Map(document.getElementById('googleMap'),
                mapOptions);
            var marker = new google.maps.Marker({
                position: map.getCenter(),
                map: map
            });

        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <!-- main js -->
    <script src="js/main.js"></script>
    </body>

</html>