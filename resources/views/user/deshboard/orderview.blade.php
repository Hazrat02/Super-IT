@extends('user\deshboard\app2')
@section('content')
    <main class="main checkout container-fluid ml-0 pl-0 ">

        <!-- Start of PageContent -->
        <div class="page-content mt-0">
            <div class="container">



                <div class="row mb-2">
                    <div class="col-lg-7 pr-lg-4 mb-4">
                        <h3 class="title billing-title text-uppercase ls-10 pt-1 pb-3 mb-0">
                            siping Details
                        </h3>
                        <div class="row gutter-sm">
                            <div class="">
                                <div class="form-group">
                                    <label>name *</label>
                                    <input disabled type="text" class="form-control form-control-md"
                                        value="{{ $order->customar_name }}" name="customar_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Country / Region *</label>
                                <div class="select-box">
                                    <select disabled name="customar_country" class="form-control form-control-md">

                                        <option @if ($order->customar_name == 'uk') selected="selected" @endif value="uk">
                                            United Kingdom (UK)</option>
                                        <option @if ($order->customar_country == 'us') selected="selected" @endif value="us">
                                            United States</option>
                                        <option @if ($order->customar_country == 'fr') selected="selected" @endif value="fr">
                                            France</option>
                                        <option @if ($order->customar_country == 'aus') selected="selected" @endif value="aus">
                                            Australia</option>
                                        <option @if ($order->customar_country == 'bangladesh') selected="selected" @endif
                                            value="bangladesh">Bangladesh</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <label>Street address *</label>
                            <input type="text" disabled value=" {{ $order->customar_streat }}"
                                class="form-control form-control-md mb-2" name="customar_streat" required>

                        </div>
                        <div class="row gutter-sm">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Distric / City *</label>
                                    <input disabled type="text" value="{{ $order->customar_district }}"
                                        class="form-control form-control-md" name="customar_distric" required>
                                </div>
                                <div class="form-group">
                                    <label>ZIP *</label>
                                    <input disabled value="{{ $order->zip }}" type="number"
                                        class="form-control form-control-md">
                                </div>
                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>Phone *</label>
                                    <input disabled value="{{ $order->customar_number }}" type="number"
                                        class="form-control form-control-md" name="customar_number" required>
                                </div>
                                <div class="form-group">
                                    <label>village *</label>
                                    <input disabled value=" {{ $order->customar_village }}" type="text"
                                        class="form-control form-control-md" name="customar_village" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Upozila *</label>
                                <input disabled value=" {{ $order->customar_upozila }}" type="text"
                                    class="form-control form-control-md" name="customar_upozila" required>
                            </div>

                        </div>
                        <div class="form-group mb-7">
                            <label>Email address *</label>
                            <input disabled value=" {{ $order->customar_email }}" type="email"
                                class="form-control form-control-md">
                        </div>

                    </div>
                    <div class="col-lg-5 mb-4 sticky-sidebar-wrapper mt-4">
                        <div class="order-summary-wrapper sticky-sidebar">
                            <h3 class="title text-uppercase ls-10">Product details</h3>
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
                                            @foreach ($orderitem as $item)
                                                <div class="product product-cart">
                                                    <div class="product-detail">
                                                        <h3 class="product-name">
                                                            <a
                                                                href="product-default.html">{{ $item->product->product_name }}</a>

                                                        </h3>




                                                        <div class="price-box">
                                                            <span class="product-quantity">{{ $item->quantity }}</span>
                                                            <span class="product-price">{{ $item->product->price }}</span>

                                                            <span class="ml-1">=</span>


                                                            <span class="product-price">{{ $item->subtotal }}</span>
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
                                                            <img src="{{ asset('product') }}\{{ $photo }}"
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
                                                <b>${{ $orderitem->sum('subtotal') }}</b>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>


                            </div>

                            <div class="form-group place-order pt-6">

                                <a href="{{ route('order.delivery', ['id' => $order->id]) }}"
                                    class="btn btn-dark btn-block btn-rounded">Deliveryed</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>


    </main>
@endsection
