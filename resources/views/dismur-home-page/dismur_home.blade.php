<!-- Menghubungkan dengan view template master -->
@extends('dismur-home-page.master_dismur')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
<!-- @section('judul_halaman', 'Registration') -->


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<!-- Intro Area
        ===================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item carousel-img carousel-img7 active">
            <div class="container">
                <div class="carousel-caption animated" data-animation="bounceInLeft" data-animation-delay="100">
                    <h1 class="font-pacifico text-capitalize color-light mt-50 text-right"><span class="alpha10">No.
                            #1 Recommended<br>Web Service</span><br>
                    </h1>
                    <p class="color-light text-right mt20 ml10">
                        <a href="#" class="color-light alpha5 font-pacifico">~ George Webb. Themeforest.net</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="item carousel-img carousel-img8">
            <div class="container">
                <div class="carousel-caption mt-50 animated" data-animation="bounceInUp" data-animation-delay="100">
                    <h1 class="font-pacifico text-capitalize color-dark mt-25">
                        The One Stop<br>Website Service
                    </h1>
                    <p class="color-dark mt25">
                        Wordpress. Joomla. eCommerce. HTML. Etc.<br>
                        <a href="#" class="button button-md button-pasific hover-ripple-out mt30">Start Project</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="item carousel-img carousel-img9">
            <div class="container">
                <div class="carousel-caption animated" data-animation="bounceInLeft" data-animation-delay="100">
                    <h1 class="font-pacifico text-capitalize text-left color-dark mt-50">We <i class="fa fa-wordpress"></i>Wordpress<br>Developer.</h1>
                    <p class="mt25 text-left color-light">The most powerfull website engine so far.<br>
                        <a href="#" class="button button-pasific hover-ripple-out button-md mt30">Start Project</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>

    <div class="svg-container-bottom">
        <svg id="svgLineTop" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="250" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 2000 250" preserveAspectRatio="xMinYMax">

            <polygon points="-150,450 0,100 600,300 2000,100 5200,450" fill="#fff" stroke="none"></polygon>

        </svg>
    </div>

</div>

<!-- Clients Area
        ===================================== -->
<div id="client" class="bg-gray pt50 pb20">
    <div class="container">
        <div class="row">

            <!-- logo client start -->
            <div class="col-md-2 col-sm-3 col-xs-4">
                <img src="{{ url('main-asset-dismur/img/client/Alfamart.svg') }}" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="300">
            </div>
            <!-- logo client end -->

            <!-- logo client start -->
            <div class="col-md-2 col-sm-3 col-xs-4">
                <img src="{{ url('main-asset-dismur/img/client/Indomaret.png') }}" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="150">
            </div>
            <!-- logo client end -->

            <!-- logo client start -->
            <div class="col-md-2 col-sm-3 col-xs-4">
                <img src="{{ url('main-asset-dismur/img/client/Transmart_Carrefour.png') }}" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="300">
            </div>
            <!-- logo client end -->

            <!-- logo client start -->
            <div class="col-md-2 col-sm-3 col-xs-4">
                <img src="{{ url('main-asset-dismur/img/client/giant.png') }}" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="150">
            </div>
            <!-- logo client end -->

            <!-- logo client start -->
            <div class="col-md-2 col-sm-3 col-xs-4">
                <img src="{{ url('main-asset-dismur/img/client/hypermart.png') }}" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="200">
            </div>
            <!-- logo client end -->

        </div><!-- row end -->

        <div class="row">
            <!-- logo client start -->
            <div class="col-md-2 col-sm-3 col-xs-4">
                <img src="{{ url('main-asset-dismur/img/client/lottemart.png') }}" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="300">
            </div>
            <!-- logo client end -->

            <!-- logo client start -->
            <div class="col-md-2 col-sm-3 col-xs-4">
                <img src="{{ url('main-asset-dismur/img/client/mirota kampus.png') }}" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="300">
            </div>
            <!-- logo client end -->

            <!-- logo client start -->
            <div class="col-md-2 col-sm-3 col-xs-4">
                <img src="{{ url('main-asset-dismur/img/client/pamela.png') }}" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="300">
            </div>
            <!-- logo client end -->

            <!-- logo client start -->
            <div class="col-md-2 col-sm-3 col-xs-4">
                <img src="{{ url('main-asset-dismur/img/client/carerefour.png') }}" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="100">
            </div>
            <!-- logo client end -->

            <!-- logo client start -->
            <div class="col-md-2 col-sm-3 col-xs-4">
                <img src="{{ url('main-asset-dismur/img/client/superindo.png') }}" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="300">
            </div>
            <!-- logo client end -->
        </div>
    </div><!-- container end -->
</div><!-- section clients end -->

<!-- Portfolio Area
        ===================================== -->
<div id="portfolioGrid">
    <div class="pt50">&nbsp;</div>
    <div class="container-fluid bg-gray pt30">

        <div class="row">
            <div class="col-md-12">

                <!-- filters start -->
                <ul class="filters text-center  mt25 mb50">
                    <li><a class="active" data-filter="*">All Category</a></li>
                    <li><a data-filter=".food-product">makanan dan minuman</a></li>
                    <li><a data-filter=".mother-product">ibu dan anak</a></li>
                    <li><a data-filter=".healthy-product">kesehatan</a></li>
                    <li><a data-filter=".beauty-product">kecantikan</a></li>
                    <li><a data-filter=".house-product">kebutuhan rumah tangga</a></li>
                    <li><a data-filter=".fresh-product">produk segar</a></li>
                </ul>
                <!-- filters end -->

                <div class="portfolio center-block">

                    <!-- portfolio item one start -->
                    <div class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-xs-12 fresh-product woocommerce" data-category="">
                        <a href="product-detail.html">
                            <i class="fas fa-eye"></i>
                        </a>
                        <img src="{{ url('main-asset-dismur/img/barang/Untitled-1buah.jpg') }}" alt="portfolio woocommerce" class="img-responsive">
                    </div>
                    <!-- portfolio item one end -->

                    <!-- portfolio item one start -->
                    <div class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-xs-12 food-product woocommerce" data-category="">
                        <a href="product-detail.html">
                            <i class="fas fa-eye"></i>
                        </a>
                        <img src="{{ url('main-asset-dismur/img/barang/Untitled-1beras.jpg') }}" alt="portfolio woocommerce" class="img-responsive">
                    </div>
                    <!-- portfolio item one end -->

                    <!-- portfolio item one start -->
                    <div class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-xs-12 house-product woocommerce" data-category="">
                        <a href="product-detail.html">
                            <i class="fas fa-eye"></i>
                        </a>
                        <img src="{{ url('main-asset-dismur/img/barang/Untitled-1detergen.jpg') }}" alt="portfolio woocommerce" class="img-responsive">
                    </div>
                    <!-- portfolio item one end -->

                    <!-- portfolio item one start -->
                    <div class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-xs-12 food-product woocommerce" data-category="">
                        <a href="product-detail.html">
                            <i class="fas fa-eye"></i>
                        </a>
                        <img src="{{ url('main-asset-dismur/img/barang/Untitled-1minuman.jpg') }}" alt="portfolio woocommerce" class="img-responsive">
                    </div>
                    <!-- portfolio item one end -->

                    <!-- portfolio item one start -->
                    <div class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-xs-12 house-product woocommerce" data-category="">
                        <a href="product-detail.html">
                            <i class="fas fa-eye"></i>
                        </a>
                        <img src="{{ url('main-asset-dismur/img/barang/Untitled-1minyak_2.jpg') }}" alt="portfolio woocommerce" class="img-responsive">
                    </div>
                    <!-- portfolio item one end -->

                    <!-- portfolio item one start -->
                    <div class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-xs-12 beauty-product woocommerce" data-category="">
                        <a href="product-detail.html">
                            <i class="fas fa-eye"></i>
                        </a>
                        <img src="{{ url('main-asset-dismur/img/barang/Untitled-1pasta gigi.jpg') }}" alt="portfolio woocommerce" class="img-responsive">
                    </div>
                    <!-- portfolio item one end -->

                    <!-- portfolio item one start -->
                    <div class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-xs-12 fresh-product woocommerce" data-category="">
                        <a href="product-detail.html">
                            <i class="fas fa-eye"></i>
                        </a>
                        <img src="{{ url('main-asset-dismur/img/barang/Untitled-1sayur.jpg') }}" alt="portfolio woocommerce" class="img-responsive">
                    </div>
                    <!-- portfolio item one end -->

                    <!-- portfolio item one start -->
                    <div class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-xs-12 beauty-product woocommerce" data-category="">
                        <a href="product-detail.html">
                            <i class="fas fa-eye"></i>
                        </a>
                        <img src="{{ url('main-asset-dismur/img/barang/Untitled-1shampoo.jpg') }}" alt="portfolio woocommerce" class="img-responsive">
                    </div>
                    <!-- portfolio item one end -->

                    <!-- portfolio item one start -->
                    <div class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-xs-12 house-product woocommerce" data-category="">
                        <a href="product-detail.html">
                            <i class="fas fa-eye"></i>
                        </a>
                        <img src="{{ url('main-asset-dismur/img/barang/Untitled-1tepung.jpg') }}" alt="portfolio woocommerce" class="img-responsive">
                    </div>
                    <!-- portfolio item one end -->

                    <!-- portfolio item one start -->
                    <div class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-xs-12 food-product woocommerce" data-category="">
                        <a href="product-detail.html">
                            <i class="fas fa-eye"></i>
                        </a>
                        <img src="{{ url('main-asset-dismur/img/barang/Untitled-1snack.jpg') }}" alt="portfolio woocommerce" class="img-responsive">
                    </div>
                    <!-- portfolio item one end -->

                </div><!-- portfolio end -->

            </div><!-- col-md-12 end -->
        </div><!-- row end -->
    </div><!-- container end -->
</div><!-- section portfolio end -->

<!-- Fun Fact Area
        ===================================== -->
<div id="fact" class="bg-grad-stellar pt100 pb100">
    <div class="container">

        <!-- title and short description start -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center mb50">
                <h1 class="font-size-normal color-light">
                    <small class="color-light">Your Business Partner</small>
                    Better Solution for Better Business
                </h1>

            </div>
        </div>
        <!-- title and short description end -->

        <div class="row">

            <!-- fun fact left start -->
            <div class="col-md-3">
                <div class="row">

                    <!-- fun fact one start -->
                    <div class="col-md-12 col-sm-6 col-xs-6">
                        <div class="fact">
                            <div class="fact-number timer" data-perc="387">
                                <span class="factor color-light"></span>
                            </div>
                            <span class="fact-title color-light alpha7">Swalayan yang bekerja sama</span>
                        </div>
                    </div>
                    <!-- fun fact one end -->

                    <!-- fun fact two start -->
                    <div class="col-md-12 col-sm-6 col-xs-6">
                        <div class="fact">
                            <div class="fact-number timer" data-perc="578">
                                <span class="factor color-light"></span>
                            </div>
                            <span class="fact-title color-light alpha7">Happy Clients</span>
                        </div>
                    </div>
                    <!-- fun fact two end -->

                </div>
            </div>
            <!-- fun fact left end -->

            <!-- fun fact right start -->
            <div class="col-md-3 col-md-push-6">
                <div class="row">

                    <!-- fun fact three start -->
                    <div class="col-md-12 col-sm-6 col-xs-6">
                        <div class="fact">
                            <div class="fact-number timer" data-perc="175">
                                <span class="factor color-light"></span>
                            </div>
                            <span class="fact-title color-light alpha7">Jumlah Promo</span>
                        </div>
                    </div>
                    <!-- fun fact three end -->

                    <!-- fun fact four start -->
                    <div class="col-md-12 col-sm-6 col-xs-6">
                        <div class="fact">
                            <div class="fact-number timer" data-perc="350">
                                <span class="factor color-light"></span>
                            </div>
                            <span class="fact-title color-light alpha7">Jumlah Member</span>
                        </div>
                    </div>
                    <!-- fun fact four end -->

                </div>
            </div>
            <!-- fun fact right end -->

            <div class="col-md-6 col-md-pull-3">
                <img src="{{ url('main-asset-dismur/img/other/map.png') }}" alt="macbook" class="img-responsive">
            </div>

        </div>

        <div class="row">
            <div class="col-sm-8 col-sm-push-2 text-center">
                <h4 class="pt25 color-light">Have an idea? We will do the rest!</h4>
                <p class="pb10 color-light alpha8">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
                    aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque
                    porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia
                    non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                </p>
                <a href="#" class="button button-md button-gray hover-ripple-out"><span class="color-primary">Start
                        Project</span></a>
            </div>
        </div>

    </div><!-- container end -->
</div><!-- section fun fact end -->


<!-- Testimonial Area
        ===================================== -->
<div id="testimonial" class="pt75 pb75">
    <div class="container">

        <!-- title start -->
        <div class="row text-center mb25">
            <h1 class="font-size-normal">
                <small>Testimonials</small>
                What Our Clients Say About Us
                <small class="heading heading-solid center-block"></small>
            </h1>
        </div>
        <!-- title end -->

        <div class="row">

            <div class="col-sm-12">
                <div class="row">

                    <div id="owlSectionThreeItem" class="owl-carousel">

                        <!-- Testimonial Item start -->
                        <div class="testimonial testimonial-triangle-isosceles bottom-left">
                            <div class="testimonial-body">
                                <p>
                                    Pasific template is the best template so far. So easy to customize and clean
                                    code. Recommended!
                                </p>
                            </div>
                            <div class="testimonial-footer">
                                <img src="{{ url('main-asset-dismur/img/other/photo-1.jpg') }}" alt="testimonial author" class="img-responsive img-circle">
                                <i class="fa fa-quote-left"></i>
                                Martin Smith <a href="#">envato.com </a>
                            </div>
                        </div>
                        <!-- Testimonial Item end -->

                        <!-- Testimonial Item start -->
                        <div class="testimonial testimonial-triangle-isosceles bottom-left">
                            <div class="testimonial-body">
                                <p>
                                    Quisque mollis lacus augue, a hendrerit leo tristique vitae. Mauris non ipsum
                                    molestie sagittis elit ac vulputate odio.
                                </p>
                            </div>
                            <div class="testimonial-footer">
                                <img src="{{ url('main-asset-dismur/img/other/photo-2.jpg') }}" alt="testimonial author" class="img-responsive img-circle">
                                <i class="fa fa-quote-left"></i>
                                Steve Austin <a href="#">facebook.com </a>
                            </div>
                        </div>
                        <!-- Testimonial Item end -->

                        <!-- Testimonial Item start -->
                        <div class="testimonial testimonial-triangle-isosceles bottom-left">
                            <div class="testimonial-body">
                                <p>
                                    Fusce quam augue, gravida tincidunt dui nec, tempor iaculis justo.
                                </p>
                            </div>
                            <div class="testimonial-footer">
                                <img src="{{ url('main-asset-dismur/img/other/photo-4.jpg') }}" alt="testimonial author" class="img-responsive img-circle">
                                <i class="fa fa-quote-left"></i>
                                Gisselse <a href="#">Smashingmagazine.com </a>
                            </div>
                        </div>
                        <!-- Testimonial Item end -->

                        <!-- Testimonial Item start -->
                        <div class="testimonial testimonial-triangle-isosceles bottom-left">
                            <div class="testimonial-body">
                                <p>
                                    Pasific template is the best template so far. So easy to customize and clean
                                    code. Recommended!
                                </p>
                            </div>
                            <div class="testimonial-footer">
                                <img src="{{ url('main-asset-dismur/img/other/photo-1.jpg') }}" alt="testimonial author" class="img-responsive img-circle">
                                <i class="fa fa-quote-left"></i>
                                Martin Smith <a href="#">Smashingmagazine.com </a>
                            </div>
                        </div>
                        <!-- Testimonial Item end -->

                        <!-- Testimonial Item start -->
                        <div class="testimonial testimonial-triangle-isosceles bottom-left">
                            <div class="testimonial-body">
                                <p>
                                    Quisque mollis lacus augue, a hendrerit leo tristique vitae. Mauris non ipsum
                                    molestie sagittis elit ac vulputate odio.
                                </p>
                            </div>
                            <div class="testimonial-footer">
                                <img src="{{ url('main-asset-dismur/img/other/photo-2.jpg') }}" alt="testimonial author" class="img-responsive img-circle">
                                <i class="fa fa-quote-left"></i>
                                Steve Austin <a href="#">envato.com </a>
                            </div>
                        </div>
                        <!-- Testimonial Item end -->

                        <!-- Testimonial Item start -->
                        <div class="testimonial testimonial-triangle-isosceles bottom-left">
                            <div class="testimonial-body">
                                <p>
                                    Fusce quam augue, gravida tincidunt dui nec, tempor iaculis justo.
                                </p>
                            </div>
                            <div class="testimonial-footer">
                                <img src="{{ url('main-asset-dismur/img/other/photo-4.jpg') }}" alt="testimonial author" class="img-responsive img-circle">
                                <i class="fa fa-quote-left"></i>
                                Goselle <a href="#">themeforest.com </a>
                            </div>
                        </div>
                        <!-- Testimonial Item end -->

                    </div><!-- owlSectionThreeItem end -->
                </div><!-- row end -->
            </div><!-- col end -->

        </div><!-- row end -->
    </div><!-- container end -->
</div><!-- section testimonial end -->

<!-- Shop Area
        ===================================== -->
<div id="shop" class="pt70 pb50">
    <div class="container">

        <!-- title start -->
        <div class="row text-center mb25">
            <h1 class="font-size-normal">
                <small>eCommerce</small>
                Online Shop
                <small class="heading heading-solid center-block"></small>
            </h1>
        </div>
        <!-- title end -->

        <div class="row text-center">
            <div class="col-md-12">
                <div id="owlShop">

                    <!-- shop item start -->
                    <div class="shop-item-container-out">
                        <div class="shop-item-container-in">
                            <div class="shop-label">-50%</div>
                            <img src="{{ url('main-asset-dismur/img/barang/Untitled-1beras.png') }}" alt="shop item" class="img-responsive center-block">
                            <h4 class="shop-item-title">Beras</h4>
                            <span class="shop-item-price">$90.00</span>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 col-xs-3">
                                <a href="#" class="add-to-wishlist" data-toggle="tooltip" title="Add to wishlist">
                                    <i class="fa fa-heart"></i>
                                </a>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <a href="#" class="add-to-cart">
                                    Share
                                </a>
                            </div>
                            <div class="col-sm-3 col-xs-3">
                                <a href="#" class="send-to-friend" data-toggle="tooltip" title="Send to friend">
                                    <i class="fa fa-envelope"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- shop item end -->

                    <!-- shop item start -->
                    <div class="shop-item-container-out">
                        <div class="shop-item-container-in">
                            <div class="shop-label">-50%</div>
                            <img src="{{ url('main-asset-dismur/img/barang/Untitled-1buah.png') }}" alt="shop item" class="img-responsive center-block">
                            <h4 class="shop-item-title">Kiwi</h4>
                            <span class="shop-item-price">$90.00</span>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 col-xs-3">
                                <a href="#" class="add-to-wishlist" data-toggle="tooltip" title="Add to wishlist">
                                    <i class="fa fa-heart"></i>
                                </a>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <a href="#" class="add-to-cart">
                                    Share
                                </a>
                            </div>
                            <div class="col-sm-3 col-xs-3">
                                <a href="#" class="send-to-friend" data-toggle="tooltip" title="Send to friend">
                                    <i class="fa fa-envelope"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- shop item end -->

                    <!-- shop item start -->
                    <div class="shop-item-container-out">
                        <div class="shop-item-container-in">
                            <div class="shop-label">-50%</div>
                            <img src="{{ url('main-asset-dismur/img/barang/Untitled-1detergen.png') }}" alt="shop item" class="img-responsive center-block">
                            <h4 class="shop-item-title">Deterjen</h4>
                            <span class="shop-item-price">$90.00</span>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 col-xs-3">
                                <a href="#" class="add-to-wishlist" data-toggle="tooltip" title="Add to wishlist">
                                    <i class="fa fa-heart"></i>
                                </a>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <a href="#" class="add-to-cart">
                                    Share
                                </a>
                            </div>
                            <div class="col-sm-3 col-xs-3">
                                <a href="#" class="send-to-friend" data-toggle="tooltip" title="Send to friend">
                                    <i class="fa fa-envelope"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- shop item end -->

                    <!-- shop item start -->
                    <div class="shop-item-container-out">
                        <div class="shop-item-container-in">
                            <div class="shop-label">-50%</div>
                            <img src="{{ url('main-asset-dismur/img/barang/Untitled-1minuman.png') }}" alt="shop item" class="img-responsive center-block">
                            <h4 class="shop-item-title">Cola</h4>
                            <span class="shop-item-price">$90.00</span>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 col-xs-3">
                                <a href="#" class="add-to-wishlist" data-toggle="tooltip" title="Add to wishlist">
                                    <i class="fa fa-heart"></i>
                                </a>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <a href="#" class="add-to-cart">
                                    Share
                                </a>
                            </div>
                            <div class="col-sm-3 col-xs-3">
                                <a href="#" class="send-to-friend" data-toggle="tooltip" title="Send to friend">
                                    <i class="fa fa-envelope"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- shop item end -->

                    <!-- shop item start -->
                    <div class="shop-item-container-out">
                        <div class="shop-item-container-in">
                            <div class="shop-label">-50%</div>
                            <img src="{{ url('main-asset-dismur/img/barang/Untitled-1pasta gigi.png') }}" alt="shop item" class="img-responsive center-block">
                            <h4 class="shop-item-title">Pasta Gigi</h4>
                            <span class="shop-item-price">$90.00</span>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 col-xs-3">
                                <a href="#" class="add-to-wishlist" data-toggle="tooltip" title="Add to wishlist">
                                    <i class="fa fa-heart"></i>
                                </a>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <a href="#" class="add-to-cart">
                                    Share
                                </a>
                            </div>
                            <div class="col-sm-3 col-xs-3">
                                <a href="#" class="send-to-friend" data-toggle="tooltip" title="Send to friend">
                                    <i class="fa fa-envelope"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- shop item end -->

                    <!-- shop item start -->
                    <div class="shop-item-container-out">
                        <div class="shop-item-container-in">
                            <div class="shop-label">-50%</div>
                            <img src="{{ url('main-asset-dismur/img/barang/Untitled-1sayur.png') }}" alt="shop item" class="img-responsive center-block">
                            <h4 class="shop-item-title">Sayur</h4>
                            <span class="shop-item-price">$90.00</span>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 col-xs-3">
                                <a href="#" class="add-to-wishlist" data-toggle="tooltip" title="Add to wishlist">
                                    <i class="fa fa-heart"></i>
                                </a>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <a href="#" class="add-to-cart">
                                    Share
                                </a>
                            </div>
                            <div class="col-sm-3 col-xs-3">
                                <a href="#" class="send-to-friend" data-toggle="tooltip" title="Send to friend">
                                    <i class="fa fa-envelope"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- shop item end -->

                </div><!-- #owlShop end -->
            </div><!-- col-md end -->
        </div><!-- row end -->

        <div class="row mt25 mb50">
            <div class="col-md-2 col-md-offset-5 text-center">
                <i class="fa fa-angle-left shop-control-prev"></i>
                <i class="fa fa-angle-right shop-control-next"></i>
            </div>
        </div>

    </div><!-- container end -->
</div><!-- section shop end -->


<!-- Blog Area
        ===================================== -->
<div id="blogs" class="bg-gray pt75 pb75">
    <div class="container">

        <!-- title start -->
        <div class="row text-center mb25">
            <h1 class="font-size-normal">
                <small>Our Blog</small>
                We Have Freebies, News, Tutorial, etc.
                <small class="heading heading-solid center-block"></small>
            </h1>
        </div>
        <!-- title end -->

        <div class="row">

            <!-- blog post start -->
            <div class="col-md-4 col-sm-6 col-xs-12 mb50">
                <div class="blog-one">
                    <div class="blog-one-header">
                        <img src="{{ url('main-asset-dismur/img/blog/img-blog-2.jpg') }}" alt="image blog" class="img-responsive">
                    </div>
                    <div class="blog-one-attrib">
                        <img src="{{ url('main-asset-dismur/img/other/photo-1.jpg') }}" alt="photo blog" class="blog-author-photo">
                        <span class="blog-author-name">Harry Boo</span>
                        <span class="blog-date">PEB. 14 2016</span>
                    </div>
                    <div class="blog-one-body">
                        <h4 class="blog-title"><a href="#">Amazing Blog Post One</a></h4>
                        <p class="">
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                            consequuntur.
                        </p>
                    </div>
                    <div class="blog-one-footer">
                        <a href="#">Read More</a>
                        <i class="fa fa-heart"></i>59 Likes
                        <i class="fa fa-comments"></i><a href="#">120 Comments</a>
                    </div>
                </div>
            </div>
            <!-- blog post end -->

            <!-- blog post start -->
            <div class="col-md-4 col-sm-6 col-xs-12 mb50">
                <div class="blog-one">
                    <div class="blog-one-header">
                        <img src="{{ url('main-asset-dismur/img/blog/img-blog-4.jpg') }}" alt="image blog" class="img-responsive">
                    </div>
                    <div class="blog-one-attrib">
                        <img src="{{ url('main-asset-dismur/img/other/photo-4.jpg') }}" alt="photo blog" class="blog-author-photo">
                        <span class="blog-author-name">Melanie Boo</span>
                        <span class="blog-date">PEB. 14 2016</span>
                    </div>
                    <div class="blog-one-body">
                        <h4 class="blog-title"><a href="#">Amazing Blog Post One</a></h4>
                        <p class="">
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                            consequuntur.
                        </p>
                    </div>
                    <div class="blog-one-footer">
                        <a href="#">Read More</a>
                        <i class="fa fa-heart"></i>59 Likes
                        <i class="fa fa-comments"></i><a href="#">120 Comments</a>
                    </div>
                </div>
            </div>
            <!-- blog post end -->

            <!-- blog post start -->
            <div class="col-md-4 col-sm-6 col-xs-12 mb50">
                <div class="blog-one">
                    <div class="blog-one-header">
                        <img src="{{ url('main-asset-dismur/img/blog/img-blog-3.jpg') }}" alt="image blog" class="img-responsive">
                    </div>
                    <div class="blog-one-attrib">
                        <img src="{{ url('main-asset-dismur/img/other/photo-2.jpg') }}" alt="photo blog" class="blog-author-photo">
                        <span class="blog-author-name">Harry Boo</span>
                        <span class="blog-date">PEB. 14 2016</span>
                    </div>
                    <div class="blog-one-body">
                        <h4 class="blog-title"><a href="#">Amazing Blog Post One</a></h4>
                        <p class="">
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                            consequuntur.
                        </p>
                    </div>
                    <div class="blog-one-footer">
                        <a href="#">Read More</a>
                        <i class="fa fa-heart"></i>59 Likes
                        <i class="fa fa-comments"></i><a href="#">120 Comments</a>
                    </div>
                </div>
            </div>
            <!-- blog post end -->

        </div><!-- row end -->
    </div><!-- container end -->
</div><!-- section blog end -->

<!-- Contact Us Area
        =====================================-->
<div id="contact" class="pt100 pb100 bg-grad-stellar">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="row">

                    <!-- title start -->
                    <div class="col-md-12 mb50">
                        <h1 class="font-size-normal color-light">
                            <small class="color-light">Contact Us</small>
                            Drop Us a Message
                        </h1>
                        <h5 class="color-light">Please feel free to say anything to us. Our staff will reply any
                            message<br>as soon as possible.</h5>
                    </div>
                    <!-- title end -->

                    <!-- contact info start -->
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <span class="icon-map color-light el-icon2x"></span>
                        <h5 class="color-light"><strong>Address</strong></h5>
                        <p class="color-light">Address Business 123 London, UK.</p>
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <span class="icon-megaphone color-light el-icon2x"></span>
                        <h5 class="color-light"><strong>Phone</strong></h5>
                        <p class="color-light">123-456-789</p>
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <span class="icon-envelope color-light el-icon2x"></span>
                        <h5 class="color-light"><strong>Email</strong></h5>
                        <p class="color-light">email@domain.com</p>
                    </div>
                    <!-- contact info end -->

                </div><!-- row left end -->
            </div><!-- col left end -->

            <div class="col-md-6">
                <div class="contact contact-us-one">
                    <div class="col-sm-12 col-xs-12 text-center mb20">
                        <h4 class="pb25 bb-solid-1 text-uppercase">
                            Get in Touch
                            <small class="text-lowercase">Please complete the form and we will get back to
                                you.</small>
                        </h4>
                    </div>
                    <form name="contactform" id="contactForm" method="post" action="http://myboodesign.com/pasific/assets/php/send.php">

                        <!-- fullname start -->
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="senderName" id="senderName" class="input-md input-rounded form-control" placeholder="fullname" maxlength="100" required>
                        </div>
                        <!-- fullname end -->

                        <!-- email start -->
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="email" name="senderEmail" id="senderEmail" class="input-md input-rounded form-control" placeholder="email address" maxlength="100" required>
                        </div>
                        <!-- email end -->

                        <!-- website start -->
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="url" name="senderWebsite" id="senderWebsite" class="input-md input-rounded form-control" placeholder="http://" maxlength="100">
                        </div>
                        <!-- website end -->

                        <!-- security start -->
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="senderHuman" id="senderHuman" class="input-md input-rounded form-control" placeholder="" required>
                            <input type="hidden" name="checkHuman_a" id="checkHuman_a">
                            <input type="hidden" name="checkHuman_b" id="checkHuman_b">
                        </div>
                        <!-- security end -->

                        <!-- textarea start -->
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <textarea class="form-control" name="message" id="message" rows="7" required></textarea>
                        </div>
                        <!-- textarea end -->

                        <!-- button start -->
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <button type="submit" name="sendMessage" id="sendMessage" class="button button-md button-block button-grad-stellar">Send Message</button>
                        </div>
                        <!-- button end -->

                        <div id="sendingMessage" class="statusMessage sending-message">
                            <p>Sending your message. Please wait...</p>
                        </div>
                        <div id="successMessage" class="statusMessage success-message">
                            <p>Thanks for sending your message! We'll get back to you shortly.</p>
                        </div>
                        <div id="failureMessage" class="statusMessage failure-message">
                            <p>There was a problem sending your message. Please try again.</p>
                        </div>
                        <div id="incompleteMessage" class="statusMessage">
                            <p>Please complete all the fields in the form before sending.</p>
                        </div>

                    </form>
                </div><!-- div contact end -->
            </div><!-- col end -->

        </div><!-- row end -->
    </div><!-- container end -->
</div><!-- section contact end -->

@endsection