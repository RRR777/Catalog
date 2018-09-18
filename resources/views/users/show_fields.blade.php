<table class="datatables table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Email Verified At</th>
            <th>Created At:</th>
            <th>Updated At</th>
            <th>Deleted At</th>
{{--             <th>Action</th> --}}
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role->name }}</td>
            <td>{{ isset($user->email_verified_at) ? $user->email_verified_at->format('Y-m-d') : null }}</td>
            <td>{{ isset($user->created_at) ? $user->created_at->format('Y-m-d') : null }}</td>
            <td>{{ isset($user->updated_at) ? $user->updated_at->format('Y-m-d') : null }}</td>
            <td>{{ isset($user->deleted_at) ? $user->deleted_at->format('Y-m-d') : null }}</td>
{{--             <td>
                {{ Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) }}
                    <div class='btn-group'>
                        <a href="{{ route('users.edit', [$user->id]) }}"
                            class='btn btn-default btn-xs'>
                            <i class="glyphicon glyphicon-edit"></i>
                        </a>
                        {{ Form::button('<i class="glyphicon glyphicon-trash"></i>',
                            ['type' => 'submit',
                            'class' => 'btn btn-danger btn-xs',
                            'onclick' => "return confirm('Are you sure?')"
                        ]) }}
                    </div>
                {{ Form::close() }}
            </td> --}}
        </tr>
    </tbody>
</table>
