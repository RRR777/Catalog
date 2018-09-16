@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            <i class="fa fa-shopping-cart"></i>
            Order
            <small>
                <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                Creat New Order
            </small>
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <section class="content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="box box-primary">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Item's Information</h3>
                                    </div>
                                    <div class="box-body">
                                        @include('items.show_fields')
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="box box-primary">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Input Order Information</h3>
                                    </div>
                                    <div class="box-body">
                                        {{ Form::open(['route' => 'orders.store']) }}
                                            @include('orders.fields')
                                            @include('customers.fields')
                                        {{ Form::close() }}
                                    </div>
                                    <div class="box-body">
                                    <a href="{{ route('items.show', [$item->id]) }}" class="btn btn-default">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
