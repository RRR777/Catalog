<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laser Shop</title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Laser, Radial, Standart, yacht, boat" />
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //custom-theme -->
    <link href="{{ asset('/frontend_template/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('/frontend_template/css/shop.css') }}" type="text/css" media="screen" property="" />
    <link href="{{ asset('/frontend_template/css/style7.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('/frontend_template/css/flexslider.css') }}" type="text/css" media="screen" />
    <link href="{{ asset('/frontend_template/css/easy-responsive-tabs.css') }}" rel='stylesheet' type='text/css' />
    <!-- Owl-carousel-CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend_template/css/jquery-ui1.css') }}">
    <link href="{{ asset('/frontend_template/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend_template/css/checkout.css') }}">
    <!-- font-awesome-icons -->
    <link href="{{ asset('/frontend_template/css/font-awesome.css') }}" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
    @yield('css')
</head>

<body>
    @yield('content')
    <!-- /Properties -->
        <div class="mid_slider_w3lsagile">
        <div class="col-md-3 mid_slider_text">
            <h5>Laser boats gallery</h5>
        </div>
        <div class="col-md-9 mid_slider_info">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="{{ asset('frontend_template/images/g1.jpg') }}" alt="Image" style="max-width:100%;"></div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="{{ asset('frontend_template/images/g2.jpg') }}" alt="Image" style="max-width:100%;"></div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="{{ asset('frontend_template/images/g3.jpg') }}" alt="Image" style="max-width:100%;"></div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="{{ asset('frontend_template/images/g4.jpg') }}" alt="Image" style="max-width:100%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="item active">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="{{ asset('frontend_template/images/g5.jpg') }}" alt="Image" style="max-width:100%;"></div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="{{ asset('frontend_template/images/g6.jpg') }}" alt="Image" style="max-width:100%;"></div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="{{ asset('frontend_template/images/g2.jpg') }}" alt="Image" style="max-width:100%;"></div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="{{ asset('frontend_template/images/g1.jpg') }}" alt="Image" style="max-width:100%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="{{ asset('frontend_template/images/g1.jpg') }}" alt="Image" style="max-width:100%;"></div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="{{ asset('frontend_template/images/g2.jpg') }}" alt="Image" style="max-width:100%;"></div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="{{ asset('frontend_template/images/g3.jpg') }}" alt="Image" style="max-width:100%;"></div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="{{ asset('frontend_template/images/g4.jpg') }}" alt="Image" style="max-width:100%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="{{ asset('frontend_template/images/g1.jpg') }}" alt="Image" style="max-width:100%;"></div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="{{ asset('frontend_template/images/g2.jpg') }}" alt="Image" style="max-width:100%;"></div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="{{ asset('frontend_template/images/g3.jpg') }}" alt="Image" style="max-width:100%;"></div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="{{ asset('frontend_template/images/g4.jpg') }}" alt="Image" style="max-width:100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="fa fa-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="fa fa-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
                <!-- The Modal -->

            </div>
        </div>

        <div class="clearfix"> </div>
    </div>
    <!--//banner -->

    <div>
        <br>
        <br>
        <br>
        <br>
    </div>

    <!-- footer -->
    <div class="footer_agileinfo_w3">
        <div class="footer_inner_info_w3ls_agileits">
            <div class="col-md-3 footer-left">
                <h2><a href="{{ url('/') }}"><span>L</span>aser Shop </a></h2>
                <p></p>
                <ul class="social-nav model-3d-0 footer-social social two">
                    <li>
                        <a href="#" class="facebook">
                            <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="twitter">
                            <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="instagram">
                            <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="pinterest">
                            <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9 footer-right">
                <div class="sign-grds">
                    <div class="col-md-4 sign-gd">
                        <h4>Our <span>Information</span> </h4>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ route('items.show', ['item_id'=>1]) }}">Item</a></li>
                        </ul>
                    </div>

                    <div class="col-md-5 sign-gd-two">
                        <h4>Store <span>Information</span></h4>
                        <div class="address">
                            <div class="address-grid">
                                <div class="address-left">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                                <div class="address-right">
                                    <h6>Phone Number</h6>
                                    <p style="color: white;">+370 678 80295</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="address-grid">
                                <div class="address-left">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <div class="address-right">
                                    <h6>Email Address</h6>
                                    <p style="color: white;">Email :<a href="mailto:example@email.com"> ritaj777@gmail.com</a></p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="address-grid">
                                <div class="address-left">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div>
                                <div class="address-right">
                                    <h6>Location</h6>
                                    <p style="color: white;">Kaunas, Lithuania

                                    </p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 sign-gd flickr-post">
                        <h4>Laser <span>Race</span></h4>
                        <ul>
                            <li><img src="{{ asset('/frontend_template/images/t1.jpg') }}" alt=" " class="img-responsive" /></li>
                            <li><img src="{{ asset('/frontend_template/images/t2.jpg') }}" alt=" " class="img-responsive" /></li>
                            <li><img src="{{ asset('/frontend_template/images/t3.jpg') }}" alt=" " class="img-responsive" /></li>
                            <li><img src="{{ asset('/frontend_template/images/t4.jpg') }}" alt=" " class="img-responsive" /></li>
                            <li><img src="{{ asset('/frontend_template/images/t1.jpg') }}" alt=" " class="img-responsive" /></li>
                            <li><img src="{{ asset('/frontend_template/images/t2.jpg') }}" alt=" " class="img-responsive" /></li>
                            <li><img src="{{ asset('/frontend_template/images/t3.jpg') }}" alt=" " class="img-responsive" /></li>
                            <li><img src="{{ asset('/frontend_template/images/t2.jpg') }}" alt=" " class="img-responsive" /></li>
                            <li><img src="{{ asset('/frontend_template/images/t4.jpg') }}" alt=" " class="img-responsive" /></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>

            <p class="copy-right-w3ls-agileits">
                &copy 2018 Laser Shop. All rights reserved | <span style="color: white;">ritaprojects </span> | Design by 
                <a href="http://w3layouts.com/" style="color: grey;">W3layouts</a>
            </p>
        </div>
    </div>
    </div>

    <!-- //footer -->
    <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    <!-- js -->
    <script type="text/javascript" src="{{ asset('/frontend_template/js/jquery-2.1.4.min.js') }}"></script>
    <!-- //js -->
    <!-- /nav -->
    <script src="{{ asset('/frontend_template/js/modernizr-2.6.2.min.js') }}"></script>
    <script src="{{ asset('/frontend_template/js/classie.js') }}"></script>
    <script src="{{ asset('/frontend_template/js/demo1.js') }}"></script>
    <!-- //nav -->
    <!-- cart-js -->
    <script src="{{ asset('/frontend_template/js/minicart.js') }}"></script>
    <script>
        shoe.render();

        shoe.cart.on('shoe_checkout', function (evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) {}
            }
        });
    </script>
    <!-- //cart-js -->
    <!-- /nav -->
    <script src="{{ asset('/frontend_template/js/modernizr-2.6.2.min.js') }}"></script>
    <script src="{{ asset('/frontend_template/js/classie.js') }}"></script>
    <script src="{{ asset('/frontend_template/js/demo1.js') }}"></script>
    <!-- //nav -->
    <!-- single -->
    <script src="{{ asset('/frontend_template/js/imagezoom.js') }}"></script>
    <!-- single -->
    <!-- script for responsive tabs -->
    <script src="{{ asset('/frontend_template/js/easy-responsive-tabs.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                activate: function (event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
            $('#verticalTab').easyResponsiveTabs({
                type: 'vertical',
                width: 'auto',
                fit: true
            });
        });
    </script>
    <!-- FlexSlider -->
    <script src="{{ asset('/frontend_template/js/jquery.flexslider.js') }}"></script>
    <script>
        // Can also be used with $(document).ready()
        $(window).load(function () {
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            });
        });
    </script>
    <!-- //FlexSlider-->

    <!--search-bar-->
    <script src="{{ asset('/frontend_template/js/search.js') }}"></script>
    <!--//search-bar-->
        <script src="{{ asset('/frontend_template/js/responsiveslides.min.js') }}"></script>
    <script>
        $(function () {
            $("#slider4").responsiveSlides({
                auto: true,
                pager: true,
                nav: true,
                speed: 1000,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });
        });
    </script>
    <!-- js for portfolio lightbox -->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{ asset('/frontend_template/js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/frontend_template/js/easing.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smoth-scrolling -->
    <script type="text/javascript" src="{{ asset('/frontend_template/js/bootstrap-3.1.1.min.js') }}"></script>
</body>

</html>