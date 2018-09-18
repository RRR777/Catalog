<!-- Firstname Field -->
<div class="form-group col-sm-12">
    {{ Form::label('firstName', 'Firstname:') }}
    {{ Form::text('firstName', null, ['class' => 'form-control', 'placeholder' => "Enter First Name"]) }}
</div>

<!-- Lastname Field -->
<div class="form-group col-sm-12">
    {{ Form::label('lastName', 'Lastname:') }}
    {{ Form::text('lastName', null, ['class' => 'form-control', 'placeholder' => "Enter Last Name"]) }}
</div>

<!-- Email Field -->
<div class="form-group col-sm-12">
    {{ Form::label('email', 'Email:') }}
    {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => "Enter Email"]) }}
</div>

<!-- Country Field -->
<div class="form-group col-sm-12">
    {{ Form::label('country', 'Country:') }}
    {{ Form::text('country', null, ['class' => 'form-control', 'placeholder' => "Enter Country"]) }}
</div>

@if (Auth::check() && Auth::user()->role_id == 1)
    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
    </div>
@endif
