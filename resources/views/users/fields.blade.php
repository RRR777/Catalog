<div class="form-group col-sm-12">
    <h4>User's Email: {{ $user->email }}</h4>
</div>

<!-- Name Field -->
<div class="form-group col-sm-12">
    {{ Form::label('name', 'Name:') }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>

<!-- Role_id Field -->
<div class="form-group col-sm-12">
    {{ Form::label('role_id', 'Role: *') }}
    {{ Form::select('role_id', $roles, null, ['placeholder' => 'Select a role ...', 'class' => 'form-control', 'required']) }}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
    <a href="{{ route('users.index') }}" class="btn btn-default">Cancel</a>
</div>
