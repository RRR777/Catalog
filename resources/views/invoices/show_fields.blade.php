<!-- Id Field -->
<div class="form-group">
    {{ Form::label('id', 'Id:') }}
    <p>{{ $invoice->id }}</p>
</div>

<!-- Orders Id Field -->
<div class="form-group">
    {{ Form::label('order_id', 'Order Id:') }}
    <p>{{ $invoice->order_id }}</p>
</div>

<!-- Issue Date Field -->
<div class="form-group">
    {{ Form::label('issue_date', 'Issue Date:') }}
    <p>{{ $invoice->issue_date }}</p>
</div>

<!-- Due Date Field -->
<div class="form-group">
    {{ Form::label('due_date', 'Due Date:') }}
    <p>{{ $invoice->due_date }}</p>
</div>

<!-- Total Field -->
<div class="form-group">
    {{ Form::label('total', 'Total:') }}
    <p>{{ $invoice->total }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {{ Form::label('created_at', 'Created At:') }}
    <p>{{ $invoice->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {{ Form::label('updated_at', 'Updated At:') }}
    <p>{{ $invoice->updated_at }}</p>
</div>
