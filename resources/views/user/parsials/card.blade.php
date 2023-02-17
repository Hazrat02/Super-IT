<link rel="stylesheet" href="{{ asset('user/dist/') }}/assets/css/theme.bundle.css" />
@extends('user\layouts\app')

@section('usermain')
    <!-- Main Section-->
    <section class="mt-0 overflow-lg-hidden  vh-lg-100">
        <!-- Page Content Goes Here -->
        <div class="container">
            <div class="row g-0 vh-lg-100">
                <div class="col-12 col-lg-7 pt-5 pt-lg-10">
                    <div class="pe-lg-5">
                        <!-- Logo-->
                        <a class="navbar-brand fw-bold fs-3 flex-shrink-0 mx-0 px-0" href="./index.html">
                            <div class="d-flex align-items-center">
                                <svg class="f-w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 77.53 72.26">
                                    <path
                                        d="M10.43,54.2h0L0,36.13,10.43,18.06,20.86,0H41.72L10.43,54.2Zm67.1-7.83L73,54.2,68.49,62,45,48.47,31.29,72.26H20.86l-5.22-9L52.15,0H62.58l5.21,9L54.06,32.82,77.53,46.37Z"
                                        fill="currentColor" fill-rule="evenodd" />
                                </svg>
                            </div>
                        </a>
                        <!-- / Logo-->
                        <nav class="d-none d-md-block">
                            <ul class="list-unstyled d-flex justify-content-start mt-4 align-items-center fw-bolder small">
                                <li class="me-4"><a class="nav-link-checkout active" href="./cart.html">Your Cart</a></li>
                                <li class="me-4"><a class="nav-link-checkout " href="./checkout.html">Information</a></li>
                                <li class="me-4"><a class="nav-link-checkout "
                                        href="./checkout-shipping.html">Shipping</a></li>
                                <li><a class="nav-link-checkout nav-link-last " href="./checkout-payment.html">Payment</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="mt-5">
                            <h3 class="fs-5 fw-bolder mb-0 border-bottom pb-4">Your Cart</h3>
                            <!-- Cart Item-->
                            <div class="row justify-content-center mt-4">
                                <div class="col-md-12 ">
                                    <div class="card shadow-0 border rounded-3">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                                    <div
                                                        class="bg-image hover-zoom ripple rounded ripple-surface">
                                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/new/img(5).webp"
                                                            class="w-100" />
                                                        <a href="#!">
                                                            <div class="hover-overlay">
                                                                <div class="mask"
                                                                    style="background-color: rgba(253, 253, 253, 0.15);">
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-xl-6">
                                                    <h5>Quant ruybi shirts</h5>
                                                    <div class="d-flex flex-row">
                                                        <div class="text-danger mb-1 me-2">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <span>145</span>
                                                    </div>
                                                    <div class="mt-1 mb-0 text-muted small">
                                                        <span>100% cotton</span>
                                                        <span class="text-primary"> • </span>
                                                        <span>Light weight</span>
                                                        <span class="text-primary"> • </span>
                                                        <span>Best finish<br /></span>
                                                    </div>
                                                    <div class="mb-2 text-muted small">
                                                        <span>Unique design</span>
                                                        <span class="text-primary"> • </span>
                                                        <span>For women</span>
                                                        <span class="text-primary"> • </span>
                                                        <span>Casual<br /></span>
                                                    </div>
                                                    
                                                </div>
                                              
                                                <div
                                                
                                                    class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none 
                                                    border-start">
                                                    <div class="text-end ">

                                                        <i  class="ri-close-line ms-3 "></i>
                                                    </div>
                                                    
                                                    <div class="d-flex flex-row align-items-center mb-1">
                                                        
                                                        <h4 class="mb-1 me-1">$17.99</h4>
                                                        <span class="text-danger"><s>$25.99</s></span>
                                                    </div>
                                                    <h6 class="text-success">Free shipping</h6>
                                                    <div class="d-flex flex-column ">
                                                        
                                                        <button class="btn btn-outline-primary btn-sm "
                                                            type="button">
                                                           Details
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- / Cart Item-->
                            <!-- Cart Item-->
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 bg-light pt-lg-10 aside-checkout pb-5 pb-lg-0 my-5 my-lg-0">
                    <div class="p-4 py-lg-0 pe-lg-0 ps-lg-5">
                        <div class="pb-4 border-bottom">
                            <div class="d-flex flex-column flex-md-row justify-content-md-between mb-4 mb-md-2">
                                <div>
                                    <p class="m-0 fw-bold fs-5">Grand Total</p>
                                    <span class="text-muted small">Inc $45.89 sales tax</span>
                                </div>
                                <p class="m-0 fs-5 fw-bold">$422.99</p>
                            </div>
                        </div>
                        <div class="py-4">
                            <div class="input-group mb-0">
                                <input type="text" class="form-control" placeholder="Enter coupon code">
                                <button class="btn btn-secondary btn-sm px-4">Apply</button>
                            </div>
                        </div>
                        <a href="{{ route('buy.information') }}" class="btn btn-dark w-100 text-center"
                            role="button">Proceed to
                            checkout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->
    </section>
    <!-- / Main Section-->
@endsection
