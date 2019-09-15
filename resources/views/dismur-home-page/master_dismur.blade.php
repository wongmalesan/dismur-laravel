<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dismur</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="utf-8">
    <meta name="author" content="Harry Boo">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('/main-asset-dismur/img/favicon.png') }}">

    <!-- Load Core CSS 
        =====================================-->
    <link rel="stylesheet" href="{{ asset('/main-asset-dismur/css/core/bootstrap-3.3.7.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/main-asset-dismur/css/core/animate.min.css') }}">

    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/dismur.css') }}') }}"> -->

    <!-- Load Main CSS 
        =====================================-->
    <link rel="stylesheet" href="{{ asset('/main-asset-dismur/css/main/main.css') }}">
    <link rel="stylesheet" href="{{ asset('/main-asset-dismur/css/main/setting.css') }}">
    <link rel="stylesheet" href="{{ asset('/main-asset-dismur/css/main/hover.css') }}">
    <link rel="stylesheet" href="{{ asset('/main-asset-dismur/css/typed/typed.css') }}">

    <link rel="stylesheet" href="{{ asset('/main-asset-dismur/css/main/mystyle.css') }}">

    <!-- Load Magnific Popup CSS 
        =====================================-->
    <link rel="stylesheet" href="{{ asset('/main-asset-dismur/css/magnific/magic.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/main-asset-dismur/css/magnific/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('/main-asset-dismur/css/magnific/magnific-popup-zoom-gallery.css') }}">

    <!-- Load OWL Carousel CSS 
        =====================================-->
    <link rel="stylesheet" href="{{ asset('/main-asset-dismur/css/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('/main-asset-dismur/css/owl-carousel/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('/main-asset-dismur/css/owl-carousel/owl.transitions.css') }}">

    <!-- Load Color CSS - Please uncomment to apply the color.
        =====================================-->
    <link rel="stylesheet" href="{{ asset('/main-asset-dismur/css/color/pasific.css') }}">

    <!-- Load Fontbase Icons - Please Uncomment to use linea icons
        =====================================-->
    <link rel="stylesheet" href="{{ asset('/main-asset-dismur/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/main-asset-dismur/css/icon/et-line-font.css') }}">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar" data-offset="100">

    <!-- Page Loader
        ===================================== -->
    <div id="pageloader" class="bg-grad-animation-1">
        <div class="loader-item">
            <img src="{{ url('main-asset-dismur/img/other/oval.svg') }}" alt="page loader">
        </div>
    </div>

    <a href="#page-top" class="go-to-top">
        <i class="fa fa-long-arrow-up"></i>
    </a>


    <!-- Navigation Area
        ===================================== -->
    <nav class="navbar navbar-pasific navbar-mp megamenu navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="/">
                    <img src="{{ url('main-asset-dismur/logo/logo1-01.png') }}">
                </a>
                <a class="navbar-brand page-scroll pt20" href="#page-top" style="margin-left: 40px; font-size: 15px;">
                    Kategori
                </a>
            </div>

            <!-- Search Area
                =============================================================================== -->
            <div style="padding-top: 10px; position: relative;">
                <form class="form-horizontal" style="float: left; width: 30em;">
                    <input type="text" class="input-md input-rounded form-control" placeholder="input-md input-rounded" maxlength="100">
                </form>
                <button class="button" style="position: absolute; margin:auto;">
                    <i class="fa fa-search" style="margin-left: 0; margin-right: 0; font-size: 20px;"></i>
                </button>
            </div>

            <div class="navbar-collapse collapse navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown megamenu-fw has-dropdown-menu"><a href="/">Home</a></li>

                    <li class="dropdown megamenu-fw"><a href="#">Sale</a></li>

                    <!-- <li class="dropdown"><a href="#">Contact Us</a></li> -->

                    <!-- <li><a href="#" data-toggle="modal" data-target="#loginModal">Login</a></li> -->
                    <li><a href="/login">Login</a></li>

                    <!-- <li><a href="#" data-toggle="modal" data-target="#searchModal"><i class="fa fa-search fa-fw color-pasific"></i></a></li> -->
                </ul>

            </div>
        </div>
    </nav>


    <!-- Search Modal Dialog Box
        ===================================== -->
    <div id="searchModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-gray">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title text-center"><i class="fa fa-search fa-fw"></i> Search here</h5>
                </div>
                <div class="modal-body">
                    <form action="#" class="inline-form">
                        <input type="text" class="modal-search-input" autofocus>
                    </form>
                </div>
                <div class="modal-footer bg-gray">
                    <span class="text-center"><a href="#" class="color-dark">Advanced Search</a></span>
                </div>
            </div>

        </div>
    </div>

    <!-- Login Modal Dialog Box
        ===================================== -->
    <div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="contact contact-us-one" style="background: white">
                    <div class="col-sm-12 col-xs-12 text-center mb20">
                        <h4 class="pb25 bb-solid-1 text-uppercase">
                            Login Form
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <small class="text-lowercase">Use your username and password to enter.</small>
                        </h4>
                    </div>
                    <form name="contact">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input type="text" class="input-md input-rounded form-control" placeholder="username" maxlength="100" required>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input type="password" class="input-md input-rounded form-control" placeholder="password" maxlength="100" required>
                            </div>
                        </div>

                        <div class="col-sm-12 mt10 text-center mb20">
                            <button type="submit" class="button-3d button-md button-block button-green hover-ripple-out">Login</button>
                        </div>
                        <div class="col-sm-12 text-center"><a href="#" class="color-dark">Forgot Password?</a></div>

                    </form>
                </div>
            </div>

        </div>
    </div>

    @yield('konten')

    <!-- footer Area
        ===================================== -->
    <div id="footer" class="footer-two pt50">
        <div class="container-fluid bb-solid-1">
            <div class="container pb35">
                <div class="row">

                    <!-- footer about start -->
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <h6 class="font-montserrat text-uppercase color-dark">About Us</h6>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit morbi sagittis.
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                    </div>
                    <!-- footer about end -->

                    <!-- footer menu one start -->
                    <div class="col-md-2 col-md-offset-1 col-sm-3 col-xs-4">
                        <h6 class="font-montserrat text-uppercase color-dark">Menu</h6>
                        <ul class="no-icon-list">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Service</a></li>
                            <li><a href="#">Member</a></li>
                        </ul>
                    </div>
                    <!-- footer menu one end -->

                    <!-- footer menu two start -->
                    <div class="col-md-2 col-sm-3 col-xs-4">
                        <h6 class="font-montserrat text-uppercase color-dark">Learn more</h6>
                        <ul class="no-icon-list">
                            <li><a href="#">Tour</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">New Features</a></li>
                            <li><a href="#">Payment</a></li>
                        </ul>
                    </div>
                    <!-- footer menu two end -->

                    <!-- footer menu three start -->
                    <div class="col-md-2 col-sm-3 col-xs-4">
                        <h6 class="font-montserrat text-uppercase color-dark">Support</h6>
                        <ul class="no-icon-list">
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Knowledgebase</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <!-- footer menu three end -->

                    <!-- footer social icons start -->
                    <div class="col-md-2 col-sm-3 col-xs-12">
                        <h6 class="font-montserrat text-uppercase color-dark">Social Media</h6>
                        <div class="social social-two">
                            <a href="#"><i class="fa fa-twitter color-blue"></i></a>
                            <a href="#"><i class="fa fa-facebook color-primary"></i></a>
                            <a href="#"><i class="fa fa-linkedin color-blue"></i></a><br><br>
                            <a href="#"><i class="fa fa-github color-dark"></i></a>
                            <a href="#"><i class="fa fa-pinterest color-red"></i></a>
                        </div>
                    </div>
                    <!-- footer social icons end -->

                </div><!-- row end -->
            </div><!-- container end -->
        </div><!-- container-fluid end -->

        <div class="container-fluid pt20">
            <div class="container">
                <div class="row">

                    <!-- copyright start -->
                    <div class="col-md-6 col-sm-6 col-xs-6 pull-left">
                        <p>Copyright &copy;2019 <a href="#">Dismur</a>. All rights reserved.</p>
                    </div>
                    <!-- copyright end -->

                    <!-- footer bottom start -->
                    <div class="col-md-6 col-sm-6 col-xs-6 pull-right">
                        <p class="text-right">
                            <a href="#" class="mr20">Privacy Policy</a>
                            <a href="#" class="mr20">Term of Use</a>
                            <a href="#" class="mr50">Site Map</a>
                        </p>
                    </div>
                    <!-- footer bottom end -->

                </div><!-- row end -->
            </div><!-- container end -->
        </div><!-- container-fluid end -->
    </div><!-- footer end -->

    <!-- JQuery Core
        =====================================-->
    <script src="{{ asset('main-asset-dismur/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('main-asset-dismur/js/core/bootstrap-3.3.7.min.js') }}"></script>

    <!-- Magnific Popup
        =====================================-->
    <script src="{{ asset('main-asset-dismur/js/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('main-asset-dismur/js/magnific-popup/magnific-popup-zoom-gallery.js') }}"></script>

    <!-- Progress Bars
        =====================================-->
    <script src="{{ asset('main-asset-dismur/js/progress-bar/bootstrap-progressbar.js') }}"></script>
    <script src="{{ asset('main-asset-dismur/js/progress-bar/bootstrap-progressbar-main.js') }}"></script>

    <!-- Typed
        =====================================-->
    <script src="{{ asset('main-asset-dismur/js/typed/typed.min.js') }}"></script>

    <!-- JQuery Main
        =====================================-->
    <script src="{{ asset('main-asset-dismur/js/main/jquery.appear.js') }}"></script>
    <script src="{{ asset('main-asset-dismur/js/main/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('main-asset-dismur/js/main/parallax.min.js') }}"></script>
    <script src="{{ asset('main-asset-dismur/js/main/jquery.countTo.js') }}"></script>
    <script src="{{ asset('main-asset-dismur/js/main/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('main-asset-dismur/js/main/jquery.sticky.js') }}"></script>
    <script src="{{ asset('main-asset-dismur/js/main/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('main-asset-dismur/js/main/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('main-asset-dismur/js/main/main.js') }}"></script>

</body>

<!-- Mirrored from myboodesign.com/pasific/mp-index-parallax-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Jul 2019 08:07:51 GMT -->

</html>