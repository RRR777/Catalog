@extends('layouts.frontend_template')

@section('content')
    @include('layouts.frontend_header')

    <div class="ads-grid_shop">
        <div class="shop_inner_inf">
            @include('invoices.print')
        </div>
    </div>
@endsection
