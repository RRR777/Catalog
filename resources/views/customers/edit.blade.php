@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            <i class="fa fa-group"></i>
            Customer
            <small>
                <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                Edit
                <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                {{ $customer->firstName }} {{ $customer->lastName }}
            </small>
        </h1>
   </section>
   <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="row">
                        {{ Form::model($customer, ['route' => ['customers.update', $customer->id], 'method' => 'patch']) }}

                                @include('customers.fields')

                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
   </div>
@endsection
