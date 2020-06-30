<!DOCTYPE html>
<html lang="en" class="homepage-box">


<!-- Mirrored from templates.aucreative.co/arch/index6.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Nov 2018 16:03:46 GMT -->
<head>
    <!-- ================== Basics =================== -->
    <title>BathroomBuddy</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- ================== Font =================== -->
    <link rel="stylesheet" type="text/css" href="/websiteAssets/font/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/websiteAssets/font/mdi-font/css/material-design-iconic-font.min.css">
    <!-- ================== Vendor CSS =================== -->
    <link rel="stylesheet" type="text/css" href="/websiteAssets/vendor/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/websiteAssets/vendor/owl-carousel/animate.css">
    <link rel="stylesheet" type="text/css" href="/websiteAssets/vendor/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="/websiteAssets/vendor/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="/websiteAssets/vendor/revolution/settings.css">
    <link rel="stylesheet" type="text/css" href="/websiteAssets/vendor/revolution/navigation.css">
    <link rel="stylesheet" type="text/css" href="/websiteAssets/vendor/revolution/layers.css">
    <link rel="stylesheet" type="text/css" href="/websiteAssets/vendor/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="/websiteAssets/vendor/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="/websiteAssets/vendor/lightbox2/src/css/lightbox.css">
    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="/websiteAssets/css/font.css">
    <link rel="stylesheet" type="text/css" href="/websiteAssets/css/style.css">

    <style>
        .page-item.active .page-link {
            z-index: 2;
            color: #fff;
            background-color: black;
            border-color: black;
        }

    </style>

    @yield('styling')

</head>


<body class="box">
<!-- Page Loader -->
<div id="page-loader">
    <div class="page-loader__inner">
        <div class="page-loader__spin"></div>
    </div>
</div>
<!-- End Page Loader -->
<!-- Page Wrap  -->
<div class="page-wrap" id="fullWrap">
    <!-- Header Stick -->
    <header class="header-stick header-stick6">
        <div class=" section-content section-content--w1140">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 clearfix">
                        <!-- <h1 class="logo pull-left">
                          <a href="#">
                            <img alt="Logo" src="img/logo-black.png">
                          </a>
                        </h1> -->
                        <nav class="menu-desktop pull-right">
                            <ul class="ul--inline ul--no-style">
                                <li class="li-has-sub">
                                    <a href="/">
                                        Home
                                    </a>
                                </li>
                                <li class="li-has-sub">
                                    <a href="/bathroomProducts">
                                        Bathroom
                                    </a>
                                </li>
                                <li class="li-has-sub">
                                    <a href="/kitchenProducts">
                                        Kitchen
                                    </a>
                                </li>
                                <li class="li-has-sub">
                                    <a href="/laundryProducts">
                                        Laundry
                                    </a>
                                </li>
                                <li>
                                    <a href="/contactUs">
                                        Contact
                                    </a>
                                </li>
                                <li>
                                    <a href="/gallery">
                                        Gallery
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Stick -->
    <!-- Header Mobile -->
    <header class="header-mobile">
        <div class="container clearfix">
            <!-- <h1 class="logo pull-left">
              <a href="#">
                <img alt="Logo" src="img/logo-black.png">
              </a>
            </h1> -->
            <a class="menu-mobile__button">
                <i class="fa fa-bars"></i>
            </a>
            <nav class="menu-mobile hidden">
                <ul class="ul--no-style">
                    <li>
                        <i class="fa fa-plus menu-mobile__more"></i>
                        <a href="/">
                            Home
                        </a>
                    </li>
                    <li>
                        <i class="fa fa-plus menu-mobile__more"></i>
                        <a href="/bathroomProducts">
                            Bathroom
                        </a>
                    </li>
                    <li>
                        <i class="fa fa-plus menu-mobile__more"></i>
                        <a href="/kitchenProducts">
                            Kitchen
                        </a>
                    </li>
                    <li>
                        <i class="fa fa-plus menu-mobile__more"></i>
                        <a href="/laundryProducts">
                            Laundry
                        </a>
                    </li>
                    <li>
                        <a href="/contactUs">
                            Contact
                        </a>
                    </li>
                    <li>
                        <a href="/gallery">
                            Gallery
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- End Header Mobile -->
    <!-- Top contact -->
    <section class="top-contact1">
        <div class=" section-content section-content--w1140">
            <div class="container">
                <div class="top-contact1-wrap clearfix">
            <span class="pull-right">
              Email : support@bathroombuddy.com
            </span>
                </div>
            </div>
        </div>
    </section>
    <!-- End Top contact -->
    <!-- Header Desktop -->
    <header class="header-desktop header6">
        <div class=" section-content section-content--w1140">
            <div class="container clearfix">
                <!-- <h1 class="logo pull-left">
                  <a href="#">
                    <img alt="Logo" src="img/logo-black.png">
                  </a>
                </h1> -->

                <div id="updateCart">
                <div class="header-button pull-right clearfix">
                  <div class="mini-cart pull-right">
                    <a target="_blank" href="/cart">
                      <i class="zmdi zmdi-case"></i>
                      <span class="mini-cart-counter">{{ Session::has('cart') ? Session::get('cart')->totalQty : '0' }}</span>
                    </a>
                  </div>
                </div>
                </div>


                <nav class="menu-desktop menu-desktop--show pull-right">
                    <ul class="ul--inline ul--no-style">
                        <li class="li-has-sub">
                            <a href="/">
                                Home
                            </a>
                        </li>
                        <li class="li-has-sub">
                        <a href="/bathroomProducts ">
                                Bathroom
                            </a>
                        </li>
                        <li class="li-has-sub">
                            <a href="/kitchenProducts">
                                Kitchen
                            </a>
                        </li>
                        <li class="li-has-sub">
                            <a href="/laundryProducts">
                                Laundry
                            </a>
                        </li>
                        <li>
                            <a href="/contactUs">
                                Contact
                            </a>
                        </li>
                        <li>
                            <a href="/gallery">
                                Gallery
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- End Header Desktop -->

    @yield('content')

            <!-- Footer -->
    <footer class="footer-3">
        <div class=" section-content section-content--w1140">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <!-- <h2 class="logo-footer">
                          <a href="index-2.html">
                            <img alt="Logo" src="img/logo-white.png">
                          </a>
                        </h2> -->
                        <h5 class="title-footer m-b-26">
                            contact information
                        </h5>
                        <p class="con__item">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            support@bathroommate.com.au
                        </p>
                        <p class="con__item">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            Monday- Friday : 9am - 5pm
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h5 class="title-footer">
                            Bathroom Gallery
                        </h5>
                        <p style="margin-bottom: 30px;font-size: 17px;color: #ebcd1e;">
                            Bathrooms Supplied by Bathroom Buddy
                        </p>
                        <div class="gallery clearfix">
                            <div class="gallery__item">
                                <img alt="Gallery 1" src="/websiteAssets/img/gallery-01.jpg">
                                <a href="/gallery" class="pro-link">
                                    <div class="overlay overlay--invisible overlay--yellow">
                                    </div>
                                </a>
                            </div>
                            <div class="gallery__item">
                                <img alt="Gallery 2" src="/websiteAssets/img/gallery-02.jpg">
                                <a href="/gallery" class="pro-link">
                                    <div class="overlay overlay--invisible overlay--yellow">
                                    </div>
                                </a>
                            </div>
                            <div class="gallery__item">
                                <img alt="Gallery 3" src="/websiteAssets/img/gallery-03.jpg">
                                <a href="/gallery" class="pro-link">
                                    <div class="overlay overlay--invisible overlay--yellow">
                                    </div>
                                </a>
                            </div>
                            <div class="gallery__item">
                                <img alt="Gallery 4" src="/websiteAssets/img/gallery-04.jpg">
                                <a href="/gallery" class="pro-link">
                                    <div class="overlay overlay--invisible overlay--yellow">
                                    </div>
                                </a>
                            </div>
                            <div class="gallery__item">
                                <img alt="Gallery 5" src="/websiteAssets/img/gallery-05.jpg">
                                <a href="/gallery" class="pro-link">
                                    <div class="overlay overlay--invisible overlay--yellow">
                                    </div>
                                </a>
                            </div>
                            <div class="gallery__item">
                                <img alt="Gallery 6" src="/websiteAssets/img/gallery-06.jpg">
                                <a href="/gallery" class="pro-link">
                                    <div class="overlay overlay--invisible overlay--yellow">
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="copyright-2">
                    <div>
                        Copyright &copy; 2019 Designed by
                        <span>Innovative Devbugs</span>. All rights reserved.
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <!-- Back to top -->
    <a href="#" id="btn-to-top">
        <i class="fa fa-chevron-up"></i>
    </a>
    <!-- End Back to top -->
</div>
<!-- End Page Wrap -->

<!-- =================== PLUGIN JS ==================== -->
<script src="/websiteAssets/vendor/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="/websiteAssets/vendor/slick/slick.min.js" type="text/javascript"></script>
<script src="/websiteAssets/vendor/wow/wow.min.js" type="text/javascript"></script>
<script src="/websiteAssets/vendor/bootstrap4/popper.min.js" type="text/javascript"></script>
<script src="/websiteAssets/vendor/bootstrap4/bootstrap.min.js" type="text/javascript"></script>
<script src="/websiteAssets/vendor/isotope/isotope.pkgd.min.js" type="text/javascript"></script>
<script src="/websiteAssets/vendor/counter-up/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="/websiteAssets/vendor/counter-up/jquery.counterup.min.js" type="text/javascript"></script>
<script src="/websiteAssets/vendor/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<script src="/websiteAssets/vendor/lightbox2/src/js/lightbox.js" type="text/javascript"></script>
<script src="/websiteAssets/vendor/revolution/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
<script src="/websiteAssets/vendor/revolution/jquery.themepunch.tools.min.js" type="text/javascript"></script>
<!-- Local Revolution -->
<!-- <script type="text/javascript" src="vendor/revolution/local/revolution.extension.migration.min.js"></script> -->
<script type="text/javascript" src="/websiteAssets/vendor/revolution/local/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="/websiteAssets/vendor/revolution/local/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="/websiteAssets/vendor/revolution/local/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="/websiteAssets/vendor/revolution/local/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="/websiteAssets/vendor/revolution/local/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="/websiteAssets/vendor/revolution/local/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="/websiteAssets/vendor/revolution/local/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="/websiteAssets/vendor/revolution/local/revolution.extension.video.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': false,
            'alwaysShowNavOnTouchDevices': true,
        });
    });
</script>

<!-- =================== CUSTOM JS ==================== -->
<script type="text/javascript" src="/websiteAssets/js/main.js"></script>
<script type="text/javascript" src="/websiteAssets/js/revo-custom.js"></script>
<script type="text/javascript" src="/websiteAssets/js/wow-custom.js"></script>

<script type="text/javascript" src="/websiteAssets/js/custom.js"></script>
@yield('scripts')
</body>

<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0422'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='../../img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script>
<!-- Mirrored from templates.aucreative.co/arch/index6.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Nov 2018 16:04:11 GMT -->

</html>
