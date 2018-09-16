@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            <i class="fa fa-shield"></i>
            Role
            <small>
                <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                Create New Role
            </small>
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="row">
                        {{ Form::open(['route' => 'roles.store']) }}

                            @include('roles.fields')

                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
