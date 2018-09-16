<!-- Firstname Field -->
<div class="form-group col-sm-12">
    {{ Form::label('firstName', 'Firstname:') }}
    {{ Form::text('firstName', null, ['class' => 'form-control']) }}
</div>

<!-- Lastname Field -->
<div class="form-group col-sm-12">
    {{ Form::label('lastName', 'Lastname:') }}
    {{ Form::text('lastName', null, ['class' => 'form-control']) }}
</div>

<!-- Email Field -->
<div class="form-group col-sm-12">
    {{ Form::label('email', 'Email:') }}
    {{ Form::email('email', null, ['class' => 'form-control']) }}
</div>

<!-- Country Field -->
<div class="form-group col-sm-12">
    {{ Form::label('country', 'Country:') }}
    {{ Form::text('country', null, ['class' => 'form-control']) }}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {{ Form::submit('Save', ['class' => 'btn btn-primary btn-block']) }}
</div>
