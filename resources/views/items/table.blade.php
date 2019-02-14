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
        <th><input type="checkbox" id="check_all"></th>
        <th>@sortablelink('status', 'Status')</th>
        <th>@sortablelink('sku', 'SKU')</th>
        <th>@sortablelink('name', 'Name')</th>
        <th>@sortablelink('price', 'Price') <i class="fa fa-eur"></i></th>
        <th>@sortablelink('specialPrice', 'Special Price') <i class="fa fa-eur"></i></th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($items as $key => $item)
        <tr id="tr_{{$item->id}}">
            <td><input type="checkbox" class="checkbox" data-id="{{$item->id}}"></td>
            <td>{{ $item->status }}</td>
            <td>{{ $item->sku }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->specialPrice }}</td>
            <td>
                {{ Form::open(['route' => ['items.destroy', $item->id], 'method' => 'delete']) }}
                <div class='btn-group'>
                    <a href="{{ route('items.show', [$item->id]) }}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{{ route('items.edit', [$item->id]) }}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-edit"></i></a>
                    {{ Form::button('<i class="glyphicon glyphicon-trash"></i>',
                        ['type' => 'submit',
                        'class' => 'btn btn-danger btn-xs',
                        'onclick' => "return confirm('Are you sure?')"]) }}
                </div>
                {{ Form::close() }}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="row">
    <div class="col-sm-3">
        <button style="margin: 5px;" class="btn btn-danger btn-xs delete-all" data-url="">Delete All Selected Items
        </button>
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
