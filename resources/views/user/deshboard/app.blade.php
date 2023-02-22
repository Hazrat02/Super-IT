<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Super-it eCommmerce Marketplace HTML Template</title>

    <meta name="keywords" content="Marketplace ecommerce responsive HTML5 Template" />
    <meta name="description" content="Wolmart is powerful marketplace &amp; ecommerce responsive Html5 Template.">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('userstyle') }}/assets/images/icons/favicon.png">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: {
                families: ['Poppins:400,500,600,700']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = {{ asset('userstyle') }} '/assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>
    <!-- Bootstrap CSS v5.2.1 -->

    <link rel="preload" href="{{ asset('userstyle') }}/assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="{{ asset('userstyle') }}/assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="{{ asset('userstyle') }}/assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="{{ asset('userstyle') }}/assets/fonts/wolmart87d5.woff?png09e" as="font"
        type="font/woff" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('userstyle') }}/assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('userstyle') }}/assets/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('userstyle') }}/assets/css/style.min.css">

    <style>
      
        @media only screen and (max-width: 990px) {

            .menuhide {
                display: none;
            }
        }
    </style>
</head>



<body>


    <header class="header">
        @include('user\deshboard\header')
    </header>
    <!-- Start of PageContent -->
    <div class="my-account page-wrapper">
        <div class="page-content pt-0 ">
            <div class="container">
                <div  class="tab tab-vertical row gutter-lg">

                   

                    <ul style="
                    background-color:#CFE5EA ; width: 20rem;height: 90vh;
                        " class="nav nav-tabs mb-6 menuhide" role="tablist">
                        @include('user\deshboard\sidebar')
                    </ul>
                    <div class="tab-content mb-6 ">
                        <div class="tab-pane active in" id="account-dashboard">
                            <p class="greeting">
                                Hello
                                <span class="text-dark font-weight-bold">John Doe</span>
                                (not
                                <span class="text-dark font-weight-bold">John Doe</span>?
                                <a href="#" class="text-primary">Log out</a>)
                            </p>

                            <p class="mb-4">
                                From your account dashboard you can view your <a href="#account-orders"
                                    class="text-primary link-to-tab">recent orders</a>,
                                manage your <a href="#account-addresses" class="text-primary link-to-tab">shipping
                                    and billing
                                    addresses</a>, and
                                <a href="#account-details" class="text-primary link-to-tab">edit your password and
                                    account details.</a>
                            </p>

                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
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
                                <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
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
                                <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
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
                                <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
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
                                <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
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
                                <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
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
                                <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-0">

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

    <!-- Plugin JS File -->
    <script src="{{ asset('userstyle') }}/assets/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('userstyle') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('userstyle') }}/assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('userstyle') }}/assets/js/main.min.js"></script>
</body>

</html>
