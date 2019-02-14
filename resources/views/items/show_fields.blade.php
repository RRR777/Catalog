<div class="card col-6 col-md-4" style="width: 36rem;">
    <div class="thumbnail">
        <img class="card-img-top" src="{{ asset('images/items/' . $item->id . '/' . $item->image) }}"
             alt="Card image cap">
        <div class="card-body">
            <h3></h3>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Name</b><span class="pull-right">{{ $item->name }}</span></li>
                <li class="list-group-item"><b>Price</b><span class="pull-right">{{ $item->price }} <i
                                class="fa fa-eur"></i></span></li>
                @if (isset(Auth::user()->role_id) && Auth::user()->role_id == 1)
                    <li class="list-group-item"><b>Created</b><span
                                class="pull-right">{{ $item->created_at->format('Y-m-d') }}</span></li>
                    <li class="list-group-item"><b>Item id</b><span class="pull-right">{{ $item->id }}</span></li>
                    <li class="list-group-item"><a href="{{ route('items.edit', [$item->id]) }}"
                                                   class='btn btn-primary btn-block'><i
                                    class="glyphicon glyphicon-edit"></i> Edit</a></li>
                @endif
            </ul>
        </div>
    </div>
</div>
