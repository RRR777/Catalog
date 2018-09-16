<div class="row">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-2 pull-right">
                <form action="{{ URL::to('/searchitem') }}" method="get" role="search">
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
<table class="table table-bordered table-striped table-hover table-responsive" id="items-table">
    <thead>
        <tr>
            <th>@sortablelink('name', 'Name')</th>
            <th>@sortablelink('price', 'Price') <i class="fa fa-eur"></i></th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->price }}</td>
                <td>
                    {{ Form::open(['route' => ['items.destroy', $item->id], 'method' => 'delete']) }}
                        <div class='btn-group'>
                            <a href="{{ route('items.show', [$item->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                            <a href="{{ route('items.edit', [$item->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
        <span>Total records found: {{ $items->total() }}</span>
    </div>
    <div class="col-sm-7 col-sm-offset-1 text-center">
        {{ $items->appends(\Request::except('page'))->render() }}
    </div>
</div>
<div class="row">
    <div class="col-sm-2">
        <br>
        @if (isset($q))
            <a href="{{ route('items.index') }}" class="btn btn-default">Back</a>
        @endif
    </div>
</div>
