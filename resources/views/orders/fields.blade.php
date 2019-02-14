<!-- Customer Id Field -->
<div class="form-group col-sm-12">
    {{ Form::hidden('customer_id', null, ['class' => 'form-control']) }}
</div>

<!-- Item Id Field -->
<div class="form-group col-sm-12">
    {{ Form::hidden('item_id', isset($item->id) ? $item->id : null, ['class' => 'form-control']) }}
</div>

<!-- Quantity Field -->
<div class="form-group col-sm-12">
    {{ Form::label('quantity', 'Quantity:') }}
    {{ Form::number('quantity', '1', ['class' => 'form-control', 'placeholder' => "Enter quantity"]) }}
</div>
