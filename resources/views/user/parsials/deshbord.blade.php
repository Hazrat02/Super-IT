@extends('user\deshboard\app2')
@section('content')
<div class=" active in" id="account-dashboard">
                        <p class="greeting">
                            Hello
                            <span class="text-dark font-weight-bold">{{ auth()->user()->name }}</span>
                            @if (Auth::user()->role=='2')
                            (Seller)
                            @endif
                            
                            @if (Auth::user()->role=='1')
                            (user)
                            @endif
                            
                            @if (Auth::user()->role=='0')
                            (Admin)
                            @endif
                            

                        </p>

                      
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 mb-4 col-6">
                                <a href="#account-orders" class="link-to-tab">
                                    <div class="icon-box text-center">
                                        <span class="icon-box-icon icon-orders">
                                            <i class="w-icon-orders"></i>
                                        </span>
                                        <div class="icon-box-content">
                                            <p class="text-uppercase mb-0">Orders</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-6 mb-4">
                                <a href="{{ route('add.product') }}" class="link-to-tab">
                                    <div class="icon-box text-center">

                                        <span class="icon-box-icon icon-download">
                                            <i class="w-icon-cart"></i>
                                        </span>
                                        <div class="icon-box-content">
                                            <p class="text-uppercase mb-0">Add Product</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-6 mb-4">
                                <a href="#account-downloads" class="link-to-tab">
                                    <div class="icon-box text-center">
                                        <span class="icon-box-icon icon-download">
                                            <i class="w-icon-download"></i>
                                        </span>
                                        <div class="icon-box-content">
                                            <p class="text-uppercase mb-0">Downloads</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 col-6 mb-4">
                                <a href="#account-addresses" class="link-to-tab">
                                    <div class="icon-box text-center">
                                        <span class="icon-box-icon icon-address">
                                            <i class="w-icon-map-marker"></i>
                                        </span>
                                        <div class="icon-box-content">
                                            <p class="text-uppercase mb-0">Addresses</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 col-6 mb-4">
                                <a href="#account-details" class="link-to-tab">
                                    <div class="icon-box text-center">
                                        <span class="icon-box-icon icon-account">
                                            <i class="w-icon-user"></i>
                                        </span>
                                        <div class="icon-box-content">
                                            <p class="text-uppercase mb-0">Account Details</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 col-6  mb-4">
                                <a href="wishlist.html" class="link-to-tab">
                                    <div class="icon-box text-center">
                                        <span class="icon-box-icon icon-wishlist">
                                            <i class="w-icon-heart"></i>
                                        </span>
                                        <div class="icon-box-content">
                                            <p class="text-uppercase mb-0">Wishlist</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 col-6 mb-0">

                                <form class="" action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <div class="icon-box text-center">
                                        <span class="icon-box-icon icon-logout">
                                            <i class="w-icon-logout"></i>
                                        </span>

                                        <div class="icon-box-content">
                                            <label class="text-uppercase mb-0" for="Logout">Logout</label>
                                            <button class="d-none" id="Logout" type="submit"></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>




@endsection


{{-- <div class="tab-pane" id="account-downloads">
    <div class="icon-box icon-box-side icon-box-light">
        <span class="icon-box-icon icon-downloads mr-2">
            <i class="w-icon-download"></i>
        </span>
        <div class="icon-box-content">
            <h4 class="icon-box-title ls-normal">Downloads</h4>
        </div>
    </div>
    <p class="mb-4">No downloads available yet.</p>
    <a href="shop-banner-sidebar.html" class="btn btn-dark btn-rounded btn-icon-right">Go
        Shop<i class="w-icon-long-arrow-right"></i></a>
</div>

<div class="tab-pane" id="account-addresses">
    <div class="icon-box icon-box-side icon-box-light">
        <span class="icon-box-icon icon-map-marker">
            <i class="w-icon-map-marker"></i>
        </span>
        <div class="icon-box-content">
            <h4 class="icon-box-title mb-0 ls-normal">Addresses</h4>
        </div>
    </div>
    <p>The following addresses will be used on the checkout page
        by default.</p>
    <div class="row">
        <div class="col-sm-6 mb-6">
            <div class="ecommerce-address billing-address pr-lg-8">
                <h4 class="title title-underline ls-25 font-weight-bold">Billing Address
                </h4>
                <address class="mb-4">
                    <table class="address-table">
                        <tbody>
                            <tr>
                                <th>Name:</th>
                                <td>{{auth()->user()->name}}</td>
                            </tr>
                            <tr>
                                <th>Company:</th>
                                <td>Conia</td>
                            </tr>
                            <tr>
                                <th>Address:</th>
                                <td>Wall Street</td>
                            </tr>
                            <tr>
                                <th>City:</th>
                                <td>California</td>
                            </tr>
                            <tr>
                                <th>Country:</th>
                                <td>United States (US)</td>
                            </tr>
                            <tr>
                                <th>Postcode:</th>
                                <td>92020</td>
                            </tr>
                            <tr>
                                <th>Phone:</th>
                                <td>1112223334</td>
                            </tr>
                        </tbody>
                    </table>
                </address>
                <a href=""
                    class="btn btn-link btn-underline btn-icon-right text-primary">Edit
                    your billing address<i class="w-icon-long-arrow-right"></i></a>
            </div>
        </div>
        <div class="col-sm-6 mb-6">
            <div class="ecommerce-address shipping-address pr-lg-8">
                <h4 class="title title-underline ls-25 font-weight-bold">Shipping Address
                </h4>
                <address class="mb-4">
                    <table class="address-table">
                        <tbody>
                            <tr>
                                <th>Name:</th>
                                <td>{{auth()->user()->name}}</td>
                            </tr>
                            <tr>
                                <th>Company:</th>
                                <td>Conia</td>
                            </tr>
                            <tr>
                                <th>Address:</th>
                                <td>Wall Street</td>
                            </tr>
                            <tr>
                                <th>City:</th>
                                <td>California</td>
                            </tr>
                            <tr>
                                <th>Country:</th>
                                <td>United States (US)</td>
                            </tr>
                            <tr>
                                <th>Postcode:</th>
                                <td>92020</td>
                            </tr>
                        </tbody>
                    </table>
                </address>
                <a href="#"
                    class="btn btn-link btn-underline btn-icon-right text-primary">Edit
                    your
                    shipping address<i class="w-icon-long-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="tab-pane" id="account-details">
    <div class="icon-box icon-box-side icon-box-light">
        <span class="icon-box-icon icon-account mr-2">
            <i class="w-icon-user"></i>
        </span>
        <div class="icon-box-content">
            <h4 class="icon-box-title mb-0 ls-normal">Account Details</h4>
        </div>
    </div>
    <form class="form account-details-form" action="#" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="firstname">Name *</label>
                    <input type="text" id="firstname" name="name" value="{{auth()->user()->name}}"
                        class="form-control form-control-md">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="lastname">Last name *</label>
                    <input type="text" id="lastname" name="lastname" placeholder="Doe"
                        class="form-control form-control-md">
                </div>
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="display-name">Display name *</label>
            <input type="text" id="display-name" name="display_name" placeholder="John Doe"
                class="form-control form-control-md mb-0">
            <p>This will be how your name will be displayed in the account section and in
                reviews</p>
        </div>

        <div class="form-group mb-6">
            <label for="email_1">Email address *</label>
            <input type="email" id="email_1" name="email" value="{{auth()->user()->email}}"
                class="form-control form-control-md">
        </div>

        <h4 class="title title-password ls-25 font-weight-bold">Password change</h4>
        <div class="form-group">
            <label class="text-dark" for="cur-password">Current Password leave blank to
                leave unchanged</label>
            <input type="password" class="form-control form-control-md" id="cur-password"
                name="cur_password">
        </div>
        <div class="form-group">
            <label class="text-dark" for="new-password">New Password leave blank to leave
                unchanged</label>
            <input type="password" class="form-control form-control-md" id="new-password"
                name="new_password">
        </div>
        <div class="form-group mb-10">
            <label class="text-dark" for="conf-password">Confirm Password</label>
            <input type="password" class="form-control form-control-md" id="conf-password"
                name="conf_password">
        </div>
        <button type="submit" class="btn btn-dark btn-rounded btn-sm mb-4">Save
            Changes</button>
    </form>
</div> --}}