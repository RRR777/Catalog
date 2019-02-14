@extends('layouts.frontend_template')

@section('content')
    @include('layouts.frontend_header')

    <!-- top Products -->
    <div class="ads-grid_shop">
        <div class="shop_inner_inf">
            <!-- product left -->
            <div class="side-bar col-md-3">
                <!--preference -->
                <div class="left-side">
                    <h3 class="agileits-sear-head">Boat type</h3>
                    <ul>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">4.7</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">Radial</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">Standard</span>
                        </li>
                    </ul>
                </div>
                <!-- // preference -->
                <!-- reviews -->
                <div class="customer-rev left-side">
                    <h3 class="agileits-sear-head">Customer Review</h3>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <span>5.0</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>4.0</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>3.5</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>3.0</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>2.5</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- //reviews -->
            </div>
            <!-- //product left -->
            <!-- product right -->
            <div class="left-ads-display col-md-9">
                <div class="wrapper_top_shop">
                    <div class="clearfix"></div>
                    <!-- product-sec1 -->
                    <div class="product-sec1">
                        <!--/mens-->
                        @foreach($items as $item)
                            @if($item->status == 'enable')
                                <div class="col-md-4 product-men">
                                    <div class="product-shoe-info shoe">
                                        <div class="men-pro-item">
                                            <div class="men-thumb-item">
                                                <img src="{{ asset('images/items/' . $item->id . '/' . $item->image) }}"
                                                     alt="">
                                                <div class="men-cart-pro">
                                                    <div class="inner-men-cart-pro">
                                                        <a href="{{ route('items.show', [$item->id]) }}"
                                                           class="link-product-add-cart">Quick View</a>
                                                    </div>
                                                </div>
                                                <span class="product-new-top">New</span>
                                            </div>
                                            <div class="item-info-product">
                                                <h4>
                                                    <a href="{{ route('items.show', [$item->id]) }}">{{ $item->name }} </a>
                                                    <p>Item SKU: {{ $item->sku }}</p>
                                                </h4>
                                                <div class="info-product-price">
                                                    <div class="grid_meta">
                                                        <div class="product_price">
                                                            <div class="grid-price ">
                                                                @if($item->specialPrice)
                                                                    <span class="money ">Price ${{ $item->specialPrice }}</span>
                                                                    <del>${{ $item->price }}</del>
                                                                @else
                                                                    <span class="money ">Price ${{ $item->price }}</span>
                                                                    <del></del>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <ul class="stars">
                                                            <li><a href="#"><i class="fa fa-star"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-half-o"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
                                                                               aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shoe single-item hvr-outline-out">
                                                        <form action="#" method="post">
                                                            <input type="hidden" name="cmd" value="_cart">
                                                            <input type="hidden" name="add" value="1">
                                                            <input type="hidden" name="shoe_item"
                                                                   value="{{ $item->name . "(sku: " . $item->sku . ") " }}">
                                                            @if($item->specialPrice)
                                                                <input type="hidden" name="amount"
                                                                       value="{{ $item->specialPrice }}">
                                                            @else
                                                                <input type="hidden" name="amount"
                                                                       value="{{ $item->price }}">
                                                            @endif
                                                            <button type="submit" class="shoe-cart pshoe-cart"><i
                                                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                                            </button>

                                                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //top products -->
@endsection
