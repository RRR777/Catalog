<!-- Orders Id Field -->
<div class="form-group col-sm-6">
    {{ Form::label('order_id', 'Order Id:') }}
    {{ Form::number('order_id', null, ['class' => 'form-control']) }}
</div>

<!-- Issue Date Field -->
<div class="form-group col-sm-6">
    {{ Form::label('issue_date', 'Issue Date:') }}
    {{ Form::date('issue_date', null, ['class' => 'form-control']) }}
</div>

<!-- Due Date Field -->
<div class="form-group col-sm-6">
    {{ Form::label('due_date', 'Due Date:') }}
    {{ Form::date('due_date', null, ['class' => 'form-control']) }}
</div>

<!-- Total Field -->
<div class="form-group col-sm-6">
    {{ Form::label('total', 'Total:') }}
    {{ Form::number('total', null, ['class' => 'form-control']) }}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
    <a href="{{ route('invoices.index') }}" class="btn btn-default">Cancel</a>
</div>
