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

</head>



<body class="my-account">
    <!-- Start of PageContent -->
    <div class="page-content pt-2">
        <div class="container">
            <div class="tab tab-vertical row gutter-lg">
                <ul class="nav nav-tabs mb-6" role="tablist">
                    <li class="nav-item">
                        <a href="#account-dashboard" class="nav-link active">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="#account-orders" class="nav-link">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('add.product') }}"
                            style="hazrat-nav">Add
                            Product</a>
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
                        <a href="wishlist.html">Wishlist</a>
                    </li>
                    <form class="link-item" action="{{ route('logout') }}" method="post">
                        @csrf
                        <label class="link-link" for="Logout">Logout</label>
                        <button class="d-none" id="Logout" type="submit">Logout</button>
                    </form>

                </ul>

                <div class="tab-content mb-6">
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
                            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                                <a href="#">
                                    <div class="icon-box text-center">
                                        <span class="icon-box-icon icon-logout">
                                            <i class="w-icon-logout"></i>
                                        </span>
                                        <div class="icon-box-content">
                                            <p class="text-uppercase mb-0">Logout</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @yield('content')

                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <!-- Plugin JS File -->
    <script src="{{ asset('userstyle') }}/assets/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('userstyle') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('userstyle') }}/assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('userstyle') }}/assets/js/main.min.js"></script>
</body>

</html>
