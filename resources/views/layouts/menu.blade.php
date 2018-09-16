<li class="{{ Request::is('customers*') ? 'active' : '' }}">
    <a href="{{ route('customers.index') }}"><i class="fa fa-group"></i><span>Customers</span></a>
</li>

<li class="{{ Request::is('items*') ? 'active' : '' }}">
    <a href="{{ route('items.index') }}"><i class="fa fa-tag"></i><span>Items</span></a>
</li>

<li class="{{ Request::is('orders*') ? 'active' : '' }}">
    <a href="{{ route('orders.index') }}"><i class="fa fa-shopping-cart"></i><span>Orders</span></a>
</li>

<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{{ route('roles.index') }}"><i class="fa fa-shield"></i><span>Roles</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-user"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('invoices*') ? 'active' : '' }}">
    <a href="{!! route('invoices.index') !!}"><i class=" fa fa-file-text-o"></i><span>Invoices</span></a>
</li>

