@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            <i class="fa fa-shopping-cart"></i>
            Order
            <small>
                <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                {{ $order->created_at->format('Y-m-d') }}
            </small>
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('orders.show_fields')
                    <a href="{{ route('orders.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
