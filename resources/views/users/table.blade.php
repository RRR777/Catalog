<div class="row">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-2 pull-right">
                <form action="{{ URL::to('/searchuser') }}" method="get" role="search">
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
<table class="table table-bordered table-striped table-hover table-responsive" id="users-table">
    <thead>
        <tr>
            <th>@sortablelink('id', 'Id')</th>
            <th>@sortablelink('name', 'Name')</th>
            <th>@sortablelink('email', 'Email')</th>
            <th>@sortablelink('role_id', 'Role')</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role->name }}</td>
                <td>
{{--                     {{ Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) }} --}}
                        <div class='btn-group'>
                            <a href="{{ route('users.show', [$user->id]) }}"
                                class='btn btn-default btn-xs'>
                                <i class="glyphicon glyphicon-eye-open"></i>
                            </a>
{{--                             <a href="{{ route('users.edit', [$user->id]) }}"
                                class='btn btn-default btn-xs'>
                                <i class="glyphicon glyphicon-edit"></i>
                            </a> --}}
{{--                             {{ Form::button('<i class="glyphicon glyphicon-trash"></i>',
                                ['type' => 'submit',
                                'class' => 'btn btn-danger btn-xs',
                                'onclick' => "return confirm('Are you sure?')"
                            ]) }} --}}
                        </div>
{{--                     {{ Form::close() }} --}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="row">
    <div class="col-sm-3">
        <br>
        <span>Total records found: {{ $users->total() }}</span>
    </div>
    <div class="col-sm-4 col-sm-offset-1 text-center">
        {{ $users->appends(\Request::except('page'))->render() }}
    </div>
</div>
<div class="row">
    <div class="col-sm-2">
        <br>
        @if (isset($q))
            <a href="{{ route('users.index') }}" class="btn btn-default">Back</a>
        @endif
    </div>
</div>
