<link rel="stylesheet" href="{{ asset('user/dist/') }}/assets/css/theme.bundle.css" />
@extends('user\layouts\app')

@section('usermain')
    
    <!-- Main Section-->
    <section class="mt-0  vh-lg-100">
        <!-- Page Content Goes Here -->
        <div class="container">
            <div class="row g-0 vh-lg-100">
                <div class="col-lg-7 pt-5 pt-lg-10">
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
                                <li class="me-4"><a class="nav-link-checkout " href="./cart.html">Your Cart</a></li>
                                <li class="me-4"><a class="nav-link-checkout " href="./checkout.html">Information</a></li>
                                <li class="me-4"><a class="nav-link-checkout active"
                                        href="./checkout-shipping.html">Shipping</a></li>
                                <li><a class="nav-link-checkout nav-link-last " href="./checkout-payment.html">Payment</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="mt-5">
                            <!-- Checkout Information Summary -->
                            <ul class="list-group mb-5 d-none d-lg-block rounded-0">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-start align-items-center">
                                        <span class="text-muted small me-2 f-w-36 fw-bolder">Contact</span>
                                        <span class="small">test@email.com</span>
                                    </div>
                                    <a href="./checkout.html" class="text-muted small" role="button">Change</a>
                                </li>
                            </ul><!-- / Checkout Information Summary-->

                            <!-- Checkout Panel Information-->
                            <h3 class="fs-5 fw-bolder mb-4 border-bottom pb-4">Shipping Method</h3>

                            <!-- Shipping Option-->
                            <div
                                class="form-check form-group form-check-custom form-radio-custom form-radio-highlight mb-3">
                                <input class="form-check-input" type="radio" name="checkoutShippingMethod"
                                    id="checkoutShippingMethodOne" checked>
                                <label class="form-check-label" for="checkoutShippingMethodOne">
                                    <span class="d-flex justify-content-between align-items-start">
                                        <span>
                                            <span class="mb-0 fw-bolder d-block">Click & Collect Shipping</span>
                                            <small class="fw-bolder">Collect from our London store</small>
                                        </span>
                                        <span class="small fw-bolder text-uppercase">Free</span>
                                    </span>
                                </label>
                            </div>

                            <!-- Shipping Option-->
                            <div
                                class="form-check form-group form-check-custom form-radio-custom form-radio-highlight mb-3">
                                <input class="form-check-input" type="radio" name="checkoutShippingMethod"
                                    id="checkoutShippingMethodTwo">
                                <label class="form-check-label" for="checkoutShippingMethodTwo">
                                    <span class="d-flex justify-content-between align-items-start">
                                        <span>
                                            <span class="mb-0 fw-bolder d-block">UPS Next Day</span>
                                            <small class="fw-bolder">For all orders placed before 1pm Monday to
                                                Thursday</small>
                                        </span>
                                        <span class="small fw-bolder text-uppercase">$19.99</span>
                                    </span>
                                </label>
                            </div>

                            <!-- Shipping Option-->
                            <div
                                class="form-check form-group form-check-custom form-radio-custom form-radio-highlight mb-3">
                                <input class="form-check-input" type="radio" name="checkoutShippingMethod"
                                    id="checkoutShippingMethodThree">
                                <label class="form-check-label" for="checkoutShippingMethodThree">
                                    <span class="d-flex justify-content-between align-items-start">
                                        <span>
                                            <span class="mb-0 fw-bolder d-block">DHL Priority Service</span>
                                            <small class="fw-bolder">24 - 36 hour delivery</small>
                                        </span>
                                        <span class="small fw-bolder text-uppercase">$9.99</span>
                                    </span>
                                </label>
                            </div>

                            <div
                                class="pt-5 mt-5 pb-5 border-top d-flex flex-column flex-md-row justify-content-between align-items-center">
                                <a href="./checkout.html"
                                    class="btn ps-md-0 btn-link fw-bolder w-100 w-md-auto mb-2 mb-md-0" role="button">Back
                                    to information</a>
                                <a href="{{route('order.payment')}}" class="btn btn-dark w-100 w-md-auto"
                                    role="button">Proceed to payment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 bg-light pt-lg-10 aside-checkout pb-5 pb-lg-0 my-5 my-lg-0">
                    <div class="p-4 py-lg-0 pe-lg-0 ps-lg-5">
                        <div class="pb-3">
                            <!-- Cart Item-->
                            <div class="row mx-0 py-4 g-0 border-bottom">
                                <div class="col-2 position-relative">
                                    <span class="checkout-item-qty">3</span>
                                    <picture class="d-block border">
                                        <img class="img-fluid" src="./assets/images/products/product-cart-1.jpg"
                                            alt="HTML Bootstrap Template by Pixel Rocket">
                                    </picture>
                                </div>
                                <div class="col-9 offset-1">
                                    <div>
                                        <h6 class="justify-content-between d-flex align-items-start mb-2">
                                            Nike Air VaporMax 2021
                                            <i class="ri-close-line ms-3"></i>
                                        </h6>
                                        <span class="d-block text-muted fw-bolder text-uppercase fs-9">Size: 9 / Qty:
                                            1</span>
                                    </div>
                                    <p class="fw-bolder text-end text-muted m-0">$85.00</p>
                                </div>
                            </div> <!-- / Cart Item-->
                            <!-- Cart Item-->
                            <div class="row mx-0 py-4 g-0 border-bottom">
                                <div class="col-2 position-relative">
                                    <span class="checkout-item-qty">3</span>
                                    <picture class="d-block border">
                                        <img class="img-fluid" src="./assets/images/products/product-cart-2.jpg"
                                            alt="HTML Bootstrap Template by Pixel Rocket">
                                    </picture>
                                </div>
                                <div class="col-9 offset-1">
                                    <div>
                                        <h6 class="justify-content-between d-flex align-items-start mb-2">
                                            Nike ZoomX Vaporfly
                                            <i class="ri-close-line ms-3"></i>
                                        </h6>
                                        <span class="d-block text-muted fw-bolder text-uppercase fs-9">Size: 11 / Qty:
                                            1</span>
                                    </div>
                                    <p class="fw-bolder text-end text-muted m-0">$125.00</p>
                                </div>
                            </div> <!-- / Cart Item-->
                        </div>
                        <div class="py-4 border-bottom">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <p class="m-0 fw-bolder fs-6">Subtotal</p>
                                <p class="m-0 fs-6 fw-bolder">$422.99</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center ">
                                <p class="m-0 fw-bolder fs-6">Shipping</p>
                                <p class="m-0 fs-6 fw-bolder">$8.95</p>
                            </div>
                        </div>
                        <div class="py-4 border-bottom">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="m-0 fw-bold fs-5">Grand Total</p>
                                    <span class="text-muted small">Inc $45.89 sales tax</span>
                                </div>
                                <p class="m-0 fs-5 fw-bold">$422.99</p>
                            </div>
                        </div>
                        <div class="py-4">
                            <div class="input-group mb-0">
                                <input type="text" class="form-control" placeholder="Enter your coupon code">
                                <button class="btn btn-dark btn-sm px-4">Apply</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->
    </section>
    <!-- / Main Section-->
@endsection
