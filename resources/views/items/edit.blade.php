@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1><i class="fa fa-tag"></i> Item</h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            {{ Form::model($item, ['route' => ['items.update', $item->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) }}
    
                                @include('items.fields')
    
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
