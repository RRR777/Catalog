@extends('layouts.frontend_template')

@section('content')
    @include('layouts.frontend_header')

    <!-- top Products -->
    <div class="ads-grid_shop">
        <div class="shop_inner_inf">
            <div class="col-md-4 single-right-left ">
                <div class="grid images_3_of_2">
                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb="{{ asset('/images/items/' . $item->id . '/' . $item->image) }}">
                                <div class="thumb-image"> <img src="{{ asset('/images/items/' . $item->id . '/' . $item->image) }}" data-imagezoom="true" class="img-responsive"> </div>
                            </li>
                            <li data-thumb="{{ asset('/images/items/' . $item->id . '/' . $item->image) }}">
                                <div class="thumb-image"> <img src="{{ asset('/images/items/' . $item->id . '/' . $item->image) }}" data-imagezoom="true" class="img-responsive"> </div>
                            </li>
                            <li data-thumb="{{ asset('/images/items/' . $item->id . '/' . $item->image) }}">
                                <div class="thumb-image"> <img src="{{ asset('/images/items/' . $item->id . '/' . $item->image) }}" data-imagezoom="true" class="img-responsive"> </div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 single-right-left simpleCart_shelfItem">
                <h3>{{ $item->name }}</h3>
                <p><span class="item_price">Price: {{ $item->price }} <i class="fa fa-eur"></i></span></p>
                <div class="rating1">
                    <ul class="stars">
                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="description">
                    <h4><strong>Item description and technical data</strong></h4>
                    <br>
                    <ul>
                        <li>Simple design allows you to sail the boat off of a dock, beach or dinghy park</li>
                        <li>The Full-Rig, Radial and 4.7m sails match sailors of any size and ability</li>
                        <li>Strict One Design class rules ensure that all Lasers are absolutely identical</li>
                        <li>Five lines control sail shape and trim, freeing you to focus on strategy and tactics</li>
                        <li>Its simple design places emphasis on sailing skill and athleticism, not equipment</li>
                        <li>Local, regional, national and international regattas ensure plenty of racing opportunities</li>
                    </ul>
                    <br>
                    <div class="shop-button">
                        <a href="{{ route('orders.create', ['item_id'=>1]) }}">Buy Now</a>
                    </div>
                </div>

            </div>
            <div class="clearfix"> </div>
            <!--/tabs-->
            <div class="responsive_tabs">
                <div id="horizontalTab">
                    <ul class="resp-tabs-list">
                        <li>Details</li>
                    </ul>
                    <div class="resp-tabs-container">
                        <!--/tab_one-->
                        <div class="tab1">
                            <div class="single_page">
                                <h6>Rigged and fitted as standard on the NEW XD PRO:</h6>
                                <ul>
                                    <li>Carbon Upper Mast</li>
                                    <li>Fully Custom Spliced Control lines with new optional 8:1 or 6:1 downhaul ratio</li>
                                    <li>Choice of Carbon Tillers</li>
                                    <li>MK2 Friction pad and Daggerboard protection</li>
                                    <li>Neil Pryde Toestrap</li>
                                    <li>New Style Clamcleat Hard Anodised Traveller cleat with becket</li>
                                    <li>Deck wear Protection with Chafe Tape</li>
                                </ul>
                            </div>
                        </div>
                        <!--//tab_one-->
                    </div>
                </div>
            </div>
            <!--//tabs-->
        </div>
    </div>
    <!-- //top products -->

@endsection
