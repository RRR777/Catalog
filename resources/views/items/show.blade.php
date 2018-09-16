@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1><i class="fa fa-tag"></i> Item</h1>
    </section>
    <div class="content">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-body">
                    @include('flash::message')
                    <div class="row" style="padding-left: 20px">
                        <div class="col-md-6">
                            @include('items.show_fields')
                        </div>
                    </div>
                    <a href="{{ route('orders.create', ['item_id'=>$item->id]) }}" class="btn btn-primary"><b>Order</b></a>
                    <a href="{{ route('items.index') }}" class="btn btn-default">Cancel</a>
                </div>
            </div>
        </div>
    </div>
@endsection
