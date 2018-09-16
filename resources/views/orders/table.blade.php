<div class="row">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-2 pull-right">
                <form action="{{ URL::to('/searchorder') }}" method="get" role="search">
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
<table class="table table-bordered table-striped table-hover table-responsive" id="orders-table">
    <thead>
        <tr>
            <th>@sortablelink('id', 'Id')</th>
            <th>@sortablelink('custome_id', 'Customer')</th>
            <th>@sortablelink('item_id', 'Item')</th>
            <th>@sortablelink('quantity', 'Quantity')</th>
            <th>@sortablelink('created_at', 'Order date')</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->customer->firstName }} {{ $order->customer->lastName }}</td>
                <td>{{ $order->item->name }}</td>
                <td>{{ $order->quantity }}</td>
                <td>{{ $order->created_at->format('Y-m-d') }}</td>
                <td>
                    {{ Form::open(['route' => ['orders.destroy', $order->id], 'method' => 'delete']) }}
                        <div class='btn-group'>
                            <a href="{{ route('orders.show', [$order->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                            {{ Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) }}
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
        Total records found: {{ $orders->total() }}
    </div>
    <div class="col-sm-7 col-sm-offset-1 text-center">
        {{ $orders->appends(\Request::except('page'))->render() }}
    </div>
</div>
<div class="row">
    <div class="col-sm-2">
        <br>
        @if (isset($q))
            <a href="{{ route('orders.index') }}" class="btn btn-default">Back</a>
        @endif
    </div>
</div>
