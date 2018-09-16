@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            <i class="fa fa-file-text-o"></i>
            Invoice
        </h1>
    </section>
    <div class="content">
        @include('flash::message')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('invoices.print')
                    <a href="{{ route('invoices.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
