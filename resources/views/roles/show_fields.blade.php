<table class="table table-responsive" id="role-table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Deleted At</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $role->id }}</td>
            <td>{{ $role->name }}</td>
            <td>{{ $role->created_at }}</td>
            <td>{{ $role->updated_at }}</td>
            <td>{{ $role->deleted_at }}</td>
            <td>
                {{ Form::open(['route' => ['roles.destroy', $role->id], 'method' => 'delete']) }}
                    <div class='btn-group'>
                        <a href="{{ route('roles.edit', [$role->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {{ Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) }}
                    </div>
                {{ Form::close() }}
            </td>
        </tr>
    </tbody>
</table>
