@extends('layouts.frontend_template')

@section('content')
    @include('layouts.frontend_header')

    <!-- top Products -->
    <div class="ads-grid_shop">
        <div class="shop_inner_inf">
            <div class="privacy about">
                <div class="col-md-4 single-right-left ">
                    <h3>{{ $item->name }}</h3>
                    <div class="grid images_3_of_2">
                        <div class="flexslider">
                            <img src="{{ asset('/images/items/' . $item->id . '/' . $item->image) }}" class="img-responsive">
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            <div class="col-md-8 single-right-left simpleCart_shelfItem">
                <div class="checkout-right">
                    <table class="timetable_sub">
                        <thead>
                            <tr>
                                <th>SL No.</th>
                                <th>Product Name</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="rem1">
                                <td class="invert">1</td>
                                <td class="invert">{{ $item->name }}</td>
                                <td class="invert">{{ $item->price }} <i class="fa fa-eur"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br>
                <h4>Add a Oder Details</h4>
                
                    <section class="creditly-wrapper wrapper">
                        <div class="information-wrapper">
                            <div class="first-row form-group">
                                {{ Form::open(['route' => 'orders.store']) }}
                                    @include('orders.fields')
                                    @include('customers.fields')
                                    <button class="submit check_out">Save</button>
                                {{ Form::close() }}
                        </div>
                    </section>
            </div>
            <div class="clearfix"> </div>
    <!-- //top products -->

            </div>
        </div>
        <!-- //top products -->
@endsection
