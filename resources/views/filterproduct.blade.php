@extends('user\deshboard\app')
@section('maincontent')
    <main class="main">


        <!-- End of Breadcrumb -->

        <!-- Start of Page Content -->
        @if ($data->count() < '1')
            <div style="align-items: center;  height: 80vh;width: 100%;object-fit: contain; "
                class=" d-flex justify-content-center">
                <img class="col-6"
                    src="https://img.freepik.com/free-vector/no-data-concept-illustration_114360-536.jpg?w=2000" />

            </div>
        @else
            <div class="page-content mb-10 mt-5">

                <!-- End of Shop Banner -->
                <div class="container-fluid">
                    <!-- Start of Shop Content -->
                    <div class="shop-content">
                        <!-- Start of Shop Main Content -->
                        <div class="main-content">
                            <form method="GET" action="{{route('search')}}" class="toolbox sticky-toolbox sticky-content fix-top">
                                @csrf
                                <div class="toolbox-left">
                                    <input type="hidden" name="name" value="{{ $search->name }}">
                                    <input type="hidden" name="category" value="{{ $search->category}}">
                                    <button type="submit" 
                                        class="btn btn-primary btn-outline btn-rounded left-sidebar-toggle 
                                btn-icon-left"><i
                                            class="w-icon-category"></i><span>Filters</span></button>
                                    <div class="toolbox-item toolbox-sort select-box text-dark">
                                        <label>Sort By :</label>
                                        <select name="orderby" class="form-control">
                                            <option value="" selected="selected">Default sorting</option>
                                            <option value="{{ serialize(  $myArray = [
                                                'key' => 'views',
                                                'value' => 'desc',
                                            ]) }}">Sort by popularity</option>
                                            
                                            <option value="{{ serialize(  $myArray = [
                                                'key' => 'id',
                                                'value' => 'desc',
                                            ]) }}">Sort by latest</option>
                                            <option value="{{ serialize(  $myArray = [
                                                'key' => 'price',
                                                'value' => 'Asc',
                                            ]) }}">Sort by pric: low to high</option>
                                            <option value="{{ serialize(  $myArray = [
                                                'key' => 'price',
                                                'value' => 'desc',
                                            ]) }}">Sort by price: high to low</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="toolbox-right">
                                    <div class="toolbox-item toolbox-show select-box">
                                        <select name="count" class="form-control">
                                            <option value="" selected="selected">Show All Product</option>
                                            <option value="1">Show 1</option>
                                            <option value="2">Show 2</option>
                                            <option value="5">Show 5</option>
                                            <option value="10">Show 10</option>
                                            <option value="20">Show 20</option>
                                            <option value="30">Show 30</option>
                                            <option value="40">Show 40</option>
                                        </select>
                                    </div>

                                </div>
                            </form>
                            <div class="product-wrapper row cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2">

                                @foreach ($data as $item)
                                    @if (strpos($item->photo, '|') !== false)
                                        @php
                                            $photo = Str::afterLast($item->photo, '|');
                                            
                                        @endphp
                                    @else
                                        @php
                                            $photo = $item->photo;
                                            
                                        @endphp
                                    @endif



                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="{{ route('views.product', ['id' => $item->id]) }}">
                                                    <img src="{{ asset('product') }}\{{ $photo }}" alt="Product"
                                                        width="300" height="338" />
                                                </a>
                                                <div class="product-action-horizontal">

                                                    <form action="{{ route('addtocard') }}" method="POST">
                                                        @csrf




                                                        <input type="hidden" name="size" value="medium">
                                                        <input name="quantity" type="hidden" value="1">

                                                        <input type="hidden" name="product_id" value="{{ $item->id }}">
                                                        <input type="hidden" name="price" value="{{ $item->price }}">

                                                        <button class="btn-product-icon  w-icon-cart"
                                                            type="submit"></button>



                                                    </form>
                                                    <a href="{{ route('views.product', ['id' => $item->id]) }}"
                                                        class="btn-product-icon btn-quickview w-icon-search"
                                                        title="View"></a>

                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat">
                                                    <a href="shop-banner-sidebar.html">{{ $item->category }}</a>

                                                </div>
                                                <h3 class="product-name">
                                                    <a href="product-default.html">{{ $item->product_name }}</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        @php
                                                            $sum = $item->review->sum('reting');
                                                            $count = $item->review->count();
                                                            
                                                            if ($sum == '0') {
                                                                $dvided = '0';
                                                                $avarest = '0.1';
                                                            } else {
                                                                $dvided = $sum / $count;
                                                                $avarest = $dvided / 0.05;
                                                            }
                                                            
                                                        @endphp
                                                        <span class="ratings" style="width: {{ $avarest }}%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html"
                                                        class="rating-reviews">({{ $item->review->count() }})</a>
                                                </div>
                                                <div class="product-pa-wrapper">
                                                    <div class="product-price">
                                                        ${{ $item->price }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="toolbox toolbox-pagination justify-content-between">
                                <p class="showing-info mb-2 mb-sm-0">
                                    Showing<span>1-12 of 60</span>Products
                                </p>
                                {{--             
                                            <div class="item-center">
                                                {{$data->links()}}
                                            </div>
                                        --}}
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        @endif

        <!-- End of Page Content -->
    </main>
@endsection
