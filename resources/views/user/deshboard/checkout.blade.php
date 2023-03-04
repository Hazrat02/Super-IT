@extends('user\deshboard\app2')
@section('content')
    <main class="main checkout container-fluid">
        <!-- Start of Breadcrumb -->
        <nav class="breadcrumb-nav mb-0">
            <div class="container">
                <ul class="breadcrumb shop-breadcrumb bb-no">
                    <li class="passed"><a href="cart.html">Shopping Cart</a></li>
                    <li class="active"><a href="checkout.html">Checkout</a></li>
                    <li><a href="order.html">Order Complete</a></li>
                </ul>
            </div>
        </nav>
        <!-- End of Breadcrumb -->


        <!-- Start of PageContent -->
        <div class="page-content mt-0">
            <div class="container">


                <form class="form checkout-form" action="#" method="post">
                    <div class="row mb-2">
                        <div class="col-lg-7 pr-lg-4 mb-4">
                            <h3 class="title billing-title text-uppercase ls-10 pt-1 pb-3 mb-0">
                                Billing Details
                            </h3>
                            <div class="row gutter-sm">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>First name *</label>
                                        <input type="text" class="form-control form-control-md" name="firstname"
                                            required>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Last name *</label>
                                        <input type="text" class="form-control form-control-md" name="lastname" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Country / Region *</label>
                                <div class="select-box">
                                    <select name="country" class="form-control form-control-md">
                                        <option value="default" selected="selected">United States
                                            (US)
                                        </option>
                                        <option value="uk">United Kingdom (UK)</option>
                                        <option value="us">United States</option>
                                        <option value="fr">France</option>
                                        <option value="aus">Australia</option>
                                        <option value="bangladesh">Bangladesh</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Street address *</label>
                                <input type="text" placeholder="House number and street name"
                                    class="form-control form-control-md mb-2" name="street-address-1" required>

                            </div>
                            <div class="row gutter-sm">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Town / City *</label>
                                        <input type="text" class="form-control form-control-md" name="town" required>
                                    </div>
                                    <div class="form-group">
                                        <label>ZIP *</label>
                                        <input type="text" class="form-control form-control-md" name="zip" required>
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label>Phone *</label>
                                        <input type="text" class="form-control form-control-md" name="phone" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-7">
                                <label>Email address *</label>
                                <input type="email" class="form-control form-control-md" name="email" required>
                            </div>


                            <div class="form-group mt-3">
                                <label for="order-notes">Order notes (optional)</label>
                                <textarea class="form-control mb-0" id="order-notes" name="order-notes" cols="30" rows="4"
                                    placeholder="Notes about your order, e.g special notes for delivery"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-5 mb-4 sticky-sidebar-wrapper">
                            <div class="order-summary-wrapper sticky-sidebar">
                                <h3 class="title text-uppercase ls-10">Your Order</h3>
                                <div class="order-summary">
                                    <table class="order-table">
                                        <thead>
                                            <tr>
                                                <th colspan="2">
                                                    <b>Product</b>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <div class="products">
                                                @foreach ($addtocard->take(3) as $item)
                                                    <div class="product product-cart">
                                                        <div class="product-detail">
                                                            <h3 class="product-name">
                                                                <a
                                                                    href="product-default.html">{{ $item->product->product_name }}</a>

                                                            </h3>




                                                            <div class="price-box">
                                                                <span class="product-quantity">{{ $item->quantity }}</span>
                                                                <span
                                                                    class="product-price">{{ $item->product->price }}</span>

                                                                <span class="ml-1">=</span>


                                                                <span class="product-price">{{ $item->total_price }}</span>
                                                            </div>
                                                        </div>
                                                        <figure class="product-media">
                                                            <a href="#">
                                                                @if (strpos($item->product->photo, '|') !== false)
                                                                    @php
                                                                        $photo = Str::afterLast($item->product->photo, '|');
                                                                        
                                                                    @endphp
                                                                @else
                                                                    @php
                                                                        $photo = $item->product->photo;
                                                                        
                                                                    @endphp
                                                                @endif
                                                                <img src="{{ asset('storage\product') }}\{{ $photo }}"
                                                                    alt="product" height="84" width="94" />
                                                            </a>
                                                        </figure>
                                                        
                                                    </div>
                                                @endforeach
                                            </div>

                                        </tbody>
                                        <tfoot>

                                            <tr class="order-total">
                                                <th>
                                                    <b>Total</b>
                                                </th>
                                                <td>
                                                    <b>{{ $addtocard->sum('total_price') }}</b>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>

                                    <div class="payment-methods" id="payment_method">
                                        <h4 class="title font-weight-bold ls-25 pb-0 mb-1">Payment Methods</h4>
                                        <div class="accordion payment-accordion">
                                            <div class="card-header">
                                                <a href="#payment" class="expand">Check Payments</a>
                                            </div>
                                            <div id="payment" class="card-body collapsed">
                                                <p class="mb-0">
                                                    Please send a check to Store Name, Store Street, Store Town, Store State
                                                    / County, Store Postcode.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#delivery" class="expand">Cash on delivery</a>
                                            </div>
                                            <div id="delivery" class="card-body collapsed">
                                                <p class="mb-0">
                                                    Pay with cash upon delivery.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card p-relative">
                                            <div class="card-header">
                                                <a href="#paypal" class="expand">Paypal</a>
                                            </div>

                                            <div id="paypal" class="card-body collapsed">
                                                <p class="mb-0">
                                                    Pay via PayPal, you can pay with your credit cart if you
                                                    don't have a PayPal account.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group place-order pt-6">
                                    <button type="submit" class="btn btn-dark btn-block btn-rounded">Place Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>

        <!-- End of PageContent -->
    </main>
@endsection
