@extends('layouts.frontend_template')

@section('content')
    <!-- banner -->
    <div class="banner_top" id="home">
        <div class="wrapper_top_w3layouts">

            <div class="header_agileits">
                <div class="logo">
                    <h1><a class="navbar-brand" href="{{ url('/') }}"><span>Laser</span> <i>Shop</i></a></h1>
                </div>

                <div class="clearfix"></div>
            </div>
            <!-- /slider -->
            <div class="slider">
                <div class="callbacks_container">
                    <ul class="rslides callbacks callbacks1" id="slider4">
                        <li>
                            <div class="banner-top2">
                                <div class="banner-info-wthree">
                                    <h3>Laser Standard</h3>
                                    <p>World's most popular racing class boat.</p>

                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="banner-top3">
                                <div class="banner-info-wthree">
                                    <h3>Laser Radial</h3>
                                    <p>The perfect racing class boat for women.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="banner-top">
                                <div class="banner-info-wthree">
                                    <h3>Laser 4.7</h3>
                                    <p>A competitive youth class boat.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="banner-top1">
                                <div class="banner-info-wthree">
                                    <h3>Laser Radial</h3>
                                    <p>The perfect racing class boat for women.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <!-- //slider -->
        </div>
    </div>
    <!-- //banner -->
    <!-- /girds_bottom-->
    <div class="grids_bottom">
        <div class="style-grids">
            <div class="col-md-6 style-grid style-grid-1">
                <img src="{{ asset('frontend_template/images/b1.jpg') }}" alt="image">
            </div>
        </div>
        <div class="col-md-6 style-grid style-grid-2">
            <div class="style-image-1_info">
                <div class="style-grid-2-text_info">
                    <h3>Laser Race Standard</h3>
                    <p>The Laser is the world’s most popular adult racing class boat. </p>
                    <p>Each Laser in the world is identical ensuring the best sailor on the water wins the race, not the boat.</p>
                    <div class="shop-button">
                        <a href="{{ route('items.index') }}">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="style-image-2">
                <img src="{{ asset('frontend_template/images/b2.jpg') }}" alt="boat">
                <div class="style-grid-2-text">
                    <h3>Speed Race</h3>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //grids_bottom-->
@endsection
