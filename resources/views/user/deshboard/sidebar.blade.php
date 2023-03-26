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
@if (isset(Auth::user()->role) && Auth::user()->role ==='2')
<li class="link-item">
    <a href="{{route('myproduct')}}" class="link-link @if (URL::current()==URL::to('myproduct'))
    activeside @endif">My Product</a>
</li>
@endif

<li class="link-item">
    <a href="{{route('accountdetails')}}" class="link-link @if (URL::current()==URL::to('accountdetails'))
    activeside @endif">Account details</a>
</li>

<li class="link-item">
    <a href="{{route('watchlist')}}" class="link-link @if (URL::current()==URL::to('watchlist'))
    activeside @endif">Wishlist</a>
</li>
<li class="link-item">
    <label class="link-link" for="Logout">Logout</label>
    <form class="link-item d-none" action="{{ route('logout') }}" method="post">
    @csrf
    
    <button class="d-none" id="Logout" type="submit"></button>
</form>


</li>


