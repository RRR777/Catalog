<div class="row">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-2 pull-right">
                <form action="{{ URL::to('/searchinvoice') }}" method="get" role="search">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search..."/>
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<table class="table table-responsive" id="invoices-table">
    <thead>
        <tr>
            <th>@sortablelink('id', 'Invoice Id')</th>
            <th>@sortablelink('order_id', 'Oder Id')</th>
            <th>@sortablelink('customerName', 'Customer Name')</th>
            <th>@sortablelink('itemName', 'Item')</th>
            <th>@sortablelink('itemQuantity', 'Quantity')</th>
            <th>@sortablelink('itemPrice', 'Unit Price')</th>
            <th>@sortablelink('total', 'Total')</th>
            <th>@sortablelink('issue_date', 'Issue Date')</th>
            <th>@sortablelink('due_date', 'Due Date')</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($invoices as $invoice)
        <tr>
            <td>{{ $invoice->id }}</td>
            <td>{{ $invoice->order_id }}</td>
            <td>{{ $invoice->customerName }}</td>
            <td>{{ $invoice->itemName }}</td>
            <td>{{ $invoice->itemQuantity }}</td>
            <td>{{ $invoice->itemPrice }}</td>
            <td>{{ $invoice->total }}</td>
            <td>{{ $invoice->issue_date->format('Y-m-d') }}</td>
            <td>{{ $invoice->due_date->format('Y-m-d') }}</td>
            <td>
                {{ Form::open(['route' => ['invoices.destroy', $invoice->id], 'method' => 'delete']) }}
                <div class='btn-group'>
                    <a href="{{ route('invoices.show', [$invoice->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                </div>
                {{ Form::close() }}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="row">
    <div class="col-sm-3">
        <br>
        <span>Total records found: {{ $invoices->total() }}</span>
    </div>
    <div class="col-sm-7 col-sm-offset-1 text-center">
        {{ $invoices->appends(\Request::except('page'))->render() }}
    </div>
</div>
<div class="row">
    <div class="col-sm-2">
        <br>
        @if (isset($q))
            <a href="{{ route('invoices.index') }}" class="btn btn-default">Back</a>
        @endif
    </div>
</div>
