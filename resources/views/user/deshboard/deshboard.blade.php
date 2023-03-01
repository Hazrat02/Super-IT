@extends('user\deshboard\app')


@section('maincontent')

<div class="my-account page-wrapper">
    <div class="page-content pt-0 ">
        <div class="container">
            <div class="tab tab-vertical row gutter-lg">


                {{-- sidebar --}}
                <ul style="
                background-color:#CFE5EA ; height: 90vh;
                    "
                    class="nav nav-tabs mb-6 menuhide" role="tablist">
                    @include('user\deshboard\sidebar')
                </ul>
                <div class="tab-content mb-6 ">
                    <div class="tab-pane active in" id="account-dashboard">
                        <p class="greeting">
                            Hello
                            <span class="text-dark font-weight-bold">{{ auth()->user()->name }}</span>
                            (not
                            <span class="text-dark font-weight-bold">{{ auth()->user()->name }}</span>?
                            )

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

                    @yield('content')

                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection
