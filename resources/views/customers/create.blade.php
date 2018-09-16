@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            <i class="fa fa-group"></i>
            Customer
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
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="box box-primary">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Input Order Information</h3>
                                    </div>
                                    <div class="box-body">
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
