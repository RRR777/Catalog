<table class="table table-responsive" id="customers-table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Country</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Deleted At</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $customer->id }}</td>
            <td>{{ $customer->firstName }}</td>
            <td>{{ $customer->lastName }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->country }}</td>
            <td>{{ isset($customer->created_at) ? $customer->created_at->format('Y-m-d') : null }}</td>
            <td>{{ isset($customer->updated_at) ? $customer->updated_at->format('Y-m-d') : null }}</td>
            <td>{{ isset($customer->deleted_at) ? $customer->deleted_at->format('Y-m-d') : null }}</td>
            <td>
                {{ Form::open(['route' => ['customers.destroy', $customer->id], 'method' => 'delete']) }}
                <div class='btn-group'>
                    <a href="{{ route('customers.edit', [$customer->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {{ Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) }}
                </div>
                {{ Form::close() }}
            </td>
        </tr>
    </tbody>
</table>
