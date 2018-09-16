<div class="row">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-5">
                <div class="row">
                    <form action="{{ route('customers.index') }}" method="get">
                        <div class="col-sm-3">
                            <label>Country Filter</label>
                        </div>
                        <div class="col-sm-7">
                            <select name="country" class="form-control">
                                <option value="">Choose the country...</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country }}">{{ $country }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">Filter</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-2 pull-right">
                <form action="{{ URL::to('/searchcustomer') }}" method="get" role="search">
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
<table class="table table-bordered table-striped table-hover table-responsive" id="customers-table">
    <thead>
        <tr>
            <th>@sortablelink('id', 'Id')</th>
            <th>@sortablelink('firstName', 'Fist Name')</th>
            <th>@sortablelink('lastName', 'Last Name')</th>
            <th>@sortablelink('email', 'Email')</th>
            <th>@sortablelink('country', 'Country')</th>
            <th>@sortablelink('totalRevenue', 'Total Revenue')</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->firstName }}</td>
                <td>{{ $customer->lastName }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->country }}</td>
                <td>{{ $customer->totalRevenue }}</td>
                <td>
                    {{ Form::open(['route' => ['customers.destroy', $customer->id], 'method' => 'delete']) }}
                    <div class='btn-group'>
                        <a href="{{ route('customers.show', [$customer->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('customers.edit', [$customer->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
        Total records found: {{ $customers->total() }}
    </div>
    <div class="col-sm-7 col-sm-offset-1 text-center">
        {{ $customers->appends(\Request::except('page'))->render() }}
    </div>
</div>
<div class="row">
    <div class="col-sm-2">
        <br>
        @if (isset($q))
            <a href="{{ route('customers.index') }}" class="btn btn-default">Back</a>
        @endif
    </div>
</div>
