@php
    use Illuminate\Support\Facades\URL;
@endphp


<li class="link-item ">
    <a href="{{ route('dashboard') }}"  class="link-link @if (URL::current()==URL::to('dashboard'))
    activeside @endif">Dashboard</a>
</li>
<li class="link-item">
    <a href="{{ route('order') }}" class="link-link @if (URL::current()==URL::to('order'))
    activeside @endif">Orders</a>
</li>
@if (isset(Auth::user()->role) && Auth::user()->role ==='2')

    <li class="link-item"> 
    <a href="{{route('order.manage')}}" class="link-link @if (URL::current()==URL::to('order/manage'))
    activeside @endif">Orders Manage</a>
</li>


@endif
<li class="link-item">
    <a href="{{route('card')}}" class="link-link @if (URL::current()==URL::to('card'))
    activeside @endif">Card</a>
</li>
<li class="link-item">
    <a href="{{ route('add.product') }}" class="link-link ">Add Product</a>
</li>
<li class="nav-item">
    <a href="#account-downloads" class="nav-link @if (URL::current()==URL::to('download'))
    activeside @endif">Downloads</a>
</li>
<li class="nav-item">
    <a href="#account-addresses" class="nav-link @if (URL::current()==URL::to('addresses'))
    activeside @endif">Addresses</a>
</li>
<li class="link-item">
    <a href="{{route('accountdetails')}}" class="link-link @if (URL::current()==URL::to('accountdetails'))
    activeside @endif">Account details</a>
</li>

<li class="link-item">
    <a href="wishlist.html" class="link-link">Wishlist</a>
</li>
<form class="link-item" action="{{ route('logout') }}" method="post">
    @csrf
    <label class="link-link" for="Logout">Logout</label>
    <button class="d-none" id="Logout" type="submit">Logout</button>
</form>


