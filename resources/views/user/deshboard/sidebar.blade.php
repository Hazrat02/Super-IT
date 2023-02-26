<li class="nav-item">
    <a href="#account-dashboard" class="nav-link active">Dashboard</a>
</li>
<li class="nav-item">
    <a href="#account-orders" class="nav-link">Orders</a>
</li>
<li class="link-item">
    <a href="{{ route('add.product') }}" class="link-link">Add Product</a>
</li>
<li class="nav-item">
    <a href="#account-downloads" class="nav-link">Downloads</a>
</li>
<li class="nav-item">
    <a href="#account-addresses" class="nav-link">Addresses</a>
</li>
<li class="nav-item">
    <a href="#account-details" class="nav-link">Account details</a>
</li>
<li class="link-item">
    <a href="wishlist.html" class="link-link">Wishlist</a>
</li>
<form class="link-item" action="{{ route('logout') }}" method="post">
    @csrf
    <label class="link-link" for="Logout">Logout</label>
    <button class="d-none" id="Logout" type="submit">Logout</button>
</form>


