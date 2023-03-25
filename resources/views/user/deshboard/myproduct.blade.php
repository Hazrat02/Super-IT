@extends('user\deshboard\app2')
@section('content')
    <main class="main cart mt-1">
        <!-- Start of Breadcrumb -->

        <!-- End of Breadcrumb -->

        <!-- Start of PageContent -->
        <div class="page-content mt-0">
            <div class="container">
                <div class="row gutter-lg mb-10">
                    <div class="container">
                        <table class="shop-table cart-table">
                            <thead>
                                <tr>
                                    <th class=""><span>Product</span></th>
                                    <th><span>Title</span></th>
                                    <th class=""><span>Price</span></th>
                                    <th class=""><span>category</span></th>
                                    <th class=""><span>Price</span></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($myproduct as $item)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <div class="p-relative">
                                                <a href="{{ route('views.product', ['id' => $item->id]) }}">
                                                    @if (strpos($item->photo, '|') !== false)
                                                        @php
                                                            $photo = Str::afterLast($item->photo, '|');
                                                            
                                                        @endphp
                                                    @else
                                                        @php
                                                            $photo = $item->photo;
                                                            
                                                        @endphp
                                                    @endif

                                                    <figure>
                                                        <img src="{{ asset('product') }}\{{ $photo }}" alt="product"
                                                            width="300" height="338">
                                                    </figure>
                                                </a>


                                                <a href="{{ route('productdelete', ['id' => $item->id]) }}"  class="btn btn-link btn-close" aria-label="button">
                                                    <i class="fas fa-times"></i>
                                                </a>

                                            </div>
                                        </td>
                                        <td class="product-name">
                                            <a href="product-default.html">
                                                {{ $item->title }}
                                            </a>
                                        </td>
                                        <td class="product-price"><span class="amount">${{ $item->price }}</span>
                                        </td>
                                        <td class="product-quantity">
                                            {{ $item->category }}
                                        </td>
                                        <td class="product-subtotal">
                                            <span class="amount">${{ $item->price }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>

                        <hr class="product-divider">

                     
                        <div class="cart-action mb-6">
                            {{ $myproduct->links() }}

                        </div>


                    </div>

                </div>
            </div>
        </div>
        <!-- End of PageContent -->
    </main>
@endsection
