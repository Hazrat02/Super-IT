@extends('user\deshboard\app2')
@section('content')
    <main class="main cart mt-1">
        <!-- Start of Breadcrumb -->
        <nav class="breadcrumb-nav mb-0 mt-0">
            <div class="container">
                <ul class="breadcrumb shop-breadcrumb bb-no">
                    <li class="active"><a href="cart.html">Shopping Cart</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="order.html">Order Complete</a></li>
                </ul>
            </div>
        </nav>
        <!-- End of Breadcrumb -->

        <!-- Start of PageContent -->
        <div class="page-content mt-0">
            <div class="container">
                <div class="row gutter-lg mb-10">
                    <div class="container">
                        <table class="shop-table cart-table">
                            <thead>
                                <tr>
                                    <th class="product-name"><span>Product</span></th>
                                    <th></th>
                                    <th class="product-price"><span>Price</span></th>
                                    <th class="product-quantity"><span>Quantity</span></th>
                                    <th class="product-subtotal"><span>Subtotal</span></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($addtocard as $item)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <div class="p-relative">
                                                <a href="{{ route('views.product', ['id' => $item->product->id]) }}">
                                                    @if (strpos($item->product->photo, '|') !== false)
                                                        @php
                                                            $photo = Str::afterLast($item->product->photo, '|');
                                                            
                                                        @endphp
                                                    @else
                                                        @php
                                                            $photo = $item->product->photo;
                                                            
                                                        @endphp
                                                    @endif

                                                    <figure>
                                                        <img src="{{ asset('product') }}\{{ $photo }}"
                                                            alt="product" width="300" height="338">
                                                    </figure>
                                                </a>
                                                <form action="{{ route('card.remove') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                                    <button type="submit" class="btn btn-link btn-close"
                                                        aria-label="button">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                        <td class="product-name">
                                            <a href="product-default.html">
                                                {{ $item->product->title }}
                                            </a>
                                        </td>
                                        <td class="product-price"><span class="amount">${{ $item->product->price }}</span>
                                        </td>
                                        <td class="product-quantity">
                                            {{ $item->quantity }}
                                        </td>
                                        <td class="product-subtotal">
                                            <span class="amount">${{ $item->total_price }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>

                        <hr class="product-divider">

                        <div style="justify-content: space-evenly" class="d-flex order-total">
                            <span>Total Price:</span>
                            <span><b>${{ $addtocard->sum('total_price') }}</b></span>
                        </div>

                        <div class="cart-action mb-6">
                            <a href="{{route('home')}}" class="btn btn-dark btn-rounded btn-icon-left btn-shopping mr-auto"><i
                                    class="w-icon-long-arrow-left"></i>Continue Shopping</a>
                            <div class="cart-action">

                                <a href="{{ route('checkout') }}" class="btn btn-primary  btn-rounded">Checkout</a>
                            </div>

                        </div>


                    </div>

                </div>
            </div>
        </div>
        <!-- End of PageContent -->
    </main>
@endsection
