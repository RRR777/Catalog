<table class="table table-responsive" id="orders-table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Customer</th>
            <th>Item</th>
            <th>Quantity</th>
            <th>Order date</th>
            <th>Update date</th>
            <th>Delete date</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->customer->firstName }} {{ $order->customer->lastName }}</td>
            <td>{{ $order->item->name }}</td>
            <td>{{ $order->quantity }}</td>
            <td>{{ isset($order->created_at) ? $order->created_at->format('Y-m-d') : null }}</td>
            <td>{{ isset($order->updated_at) ? $order->updated_at->format('Y-m-d') : null }}</td>
            <td>{{ isset($order->deleted_at) ? $order->deleted_at->format('Y-m-d') : null }}</td>
            <td>
                {{ Form::open(['route' => ['orders.destroy', $order->id], 'method' => 'delete']) }}
                    <div class='btn-group'>
                        {{ Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) }}
                    </div>
                {{ Form::close() }}
            </td>
        </tr>
    </tbody>
</table>
