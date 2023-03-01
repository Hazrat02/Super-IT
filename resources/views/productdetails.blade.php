@extends('user\deshboard\app')
@section('maincontent')

    <body>


   

        <!-- Start of Main -->
        <main class="main mt-3 mb-10 pb-1">

            <!-- Start of Page Content -->
            @foreach ($product as $item)
                <div class="page-content">
                    <div class="container">
                        <div class="container">
                            <div class="main-content mb-5">
                                <div class="product product-single row">
                                    <div class="col-md-6 mb-6">
                                        <div class="product-gallery product-gallery-sticky">
                                            <div class="swiper-container product-single-swiper swiper-theme nav-inner"
                                                data-swiper-options="{
                                            'navigation': {
                                                'nextEl': '.swiper-button-next',
                                                'prevEl': '.swiper-button-prev'
                                            }
                                        }">
                                                <div class="swiper-wrapper row cols-1 gutter-no">
                                                    @php
                                                        $img = explode('|', $item->photo);
                                                        
                                                    @endphp
                                                    @foreach ($img as $imgs)
                                                        <div class="swiper-slide">
                                                            <figure class="product-image">


                                                                <img src="{{ asset('storage\product') }}\{{ $imgs }}"
                                                                    data-zoom-image="{{ asset('storage\product') }}\{{ $imgs }}"
                                                                    alt="Electronics Black Wrist Watch" width="800"
                                                                    height="900">
                                                            </figure>
                                                        </div>
                                                    @endforeach

                                                </div>
                                                <button class="swiper-button-next"></button>
                                                <button class="swiper-button-prev"></button>
                                                <a href="#" class="product-gallery-btn product-image-full"><i
                                                        class="w-icon-zoom"></i></a>
                                            </div>
                                            <div class="product-thumbs-wrap swiper-container"
                                                data-swiper-options="{
                                            'navigation': {
                                                'nextEl': '.swiper-button-next',
                                                'prevEl': '.swiper-button-prev'
                                            }
                                        }">
                                                <div class="product-thumbs swiper-wrapper row cols-4 gutter-sm">

                                                    @foreach ($img as $imgs)
                                                        <div class="product-thumb swiper-slide">
                                                            <img src="{{ asset('storage\product') }}\{{ $imgs }}"
                                                                alt="Product Thumb" width="800" height="900" />
                                                        </div>
                                                    @endforeach

                                                </div>
                                                <button class="swiper-button-next"></button>
                                                <button class="swiper-button-prev"></button>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- ================ditails============================== --}}
                                    <div class="col-md-6 mb-4 mb-md-6">
                                        <div class="product-details" data-sticky-options="{'minWidth': 767}">
                                            <h1 class="product-title">{{ $item->title }}</h1>
                                            <div class="product-bm-wrapper">
                                                <figure class="brand">
                                                    <img src="{{ asset('img\20230109_014602.png') }}" alt="Brand"
                                                        width="102" height="48" />
                                                </figure>
                                                <div class="product-meta">
                                                    <div class="product-categories">
                                                        Category:
                                                        <span class="product-category"><a
                                                                href="#">{{ $item->category }}</a></span>
                                                    </div>
                                                    <div class="product-sku">
                                                        name: <span>{{ $item->product_name }}</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr class="product-divider">

                                            <div class="product-price"><ins class="new-price">${{ $item->price }}</ins>
                                            </div>

                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 80%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#product-tab-reviews" class="rating-reviews scroll-to">(3
                                                    Reviews)</a>
                                            </div>

                                            <div class="product-short-desc">
                                                <ul class="list-type-check list-style-none">
                                                    <li>Ultrices eros in cursus turpis massa cursus mattis.</li>
                                                    <li>Volutpat ac tincidunt vitae semper quis lectus.</li>
                                                    <li>Aliquam id diam maecenas ultricies mi eget mauris.</li>
                                                </ul>
                                            </div>

                                            <hr class="product-divider">

                                            <div class="product-form product-variation-form product-color-swatch">
                                                <label>Color:</label>
                                                <div class="d-flex align-items-center product-variations">
                                                    <a href="#" class="color" style="background-color: #ffcc01"></a>
                                                    <a href="#" class="color" style="background-color: #ca6d00;"></a>
                                                    <a href="#" class="color" style="background-color: #1c93cb;"></a>
                                                    <a href="#" class="color" style="background-color: #ccc;"></a>
                                                    <a href="#" class="color" style="background-color: #333;"></a>
                                                </div>
                                            </div>
                                            <div class="product-form product-variation-form product-size-swatch">
                                                <label class="mb-1">Size:</label>
                                                <div class="flex-wrap d-flex align-items-center product-variations">
                                                    <a href="#" class="size">Small</a>
                                                    <a href="#" class="size">Medium</a>
                                                    <a href="#" class="size">Large</a>
                                                    <a href="#" class="size">Extra Large</a>
                                                </div>
                                                <a href="#" class="product-variation-clean">Clean All</a>
                                            </div>

                                            <div class="product-variation-price">
                                                <span></span>
                                            </div>

                                            <div class="fix-bottom product-sticky-content sticky-content">
                                                <div class="product-form container">
                                                    <div class="product-qty-form">
                                                        <div class="input-group">
                                                            <input class="quantity form-control" type="number"
                                                                min="1" max="10000000">
                                                            <button class="quantity-plus w-icon-plus"></button>
                                                            <button class="quantity-minus w-icon-minus"></button>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary btn-cart">
                                                        <i class="w-icon-cart"></i>
                                                        <span>Add to Cart</span>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="social-links-wrapper">
                                                <div class="social-links">
                                                    <div class="social-icons social-no-color border-thin">
                                                        <a href="#"
                                                            class="social-icon social-facebook w-icon-facebook"></a>
                                                        <a href="#"
                                                            class="social-icon social-twitter w-icon-twitter"></a>
                                                        <a href="#"
                                                            class="social-icon social-pinterest fab fa-pinterest-p"></a>
                                                        <a href="#"
                                                            class="social-icon social-whatsapp fab fa-whatsapp"></a>
                                                        <a href="#"
                                                            class="social-icon social-youtube fab fa-linkedin-in"></a>
                                                    </div>
                                                </div>
                                                <span class="divider d-xs-show"></span>
                                                <div class="product-link-wrapper d-flex">
                                                    <a href="#"
                                                        class="btn-product-icon btn-wishlist w-icon-heart"><span></span></a>
                                                    <a href="#"
                                                        class="btn-product-icon btn-compare btn-icon-left w-icon-compare"><span></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            @endforeach

            <div class="tab tab-nav-boxed tab-nav-underline product-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a href="#product-tab-description" class="nav-link active">Description</a>
                    </li>
                    <li class="nav-item">
                        <a href="#product-tab-vendor" class="nav-link">Vendor Info</a>
                    </li>
                    <li class="nav-item">
                        <a href="#product-tab-reviews" class="nav-link">Customer Reviews (3)</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="product-tab-description">
                        <div class="row mb-4">
                            <div class="col-md-6 mb-5">
                                <h4 class="title tab-pane-title font-weight-bold mb-2">Detail</h4>
                                <p class="mb-4">{{$item->discription}}</p>
                              
                            </div>

                        </div>

                    </div>
                
                    <div class="tab-pane" id="product-tab-vendor">
                        @foreach ($vendor as $vendordata)
                            
                        
                        <div class="row mb-3">
                            <div class="col-md-6 mb-4">
                                <figure class="vendor-banner br-sm">
                                    
                                    <img style="height: 30vw;" src="@if(isset($vendordata->socialite_id)){{$vendordata->profile_photo_path}}@else{{asset('storage\profile')}}\{{$vendordata->profile_photo_path}}@endif"
        
                                         alt="Vendor Banner"
                                        width="610" style="background-color: #353B55;" />
                                </figure>
                            </div>
                            <div class="col-md-6 pl-2 pl-md-6 mb-4">
                                <div class="vendor-user">
                                    
                                    <div>
                                        <div class="vendor-name"><a href="#">{{$vendordata->name}}</a></div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 90%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="#" class="rating-reviews">(32 Reviews)</a>
                                        </div>
                                    </div>
                                </div>
                                <ul class="vendor-info list-style-none">
                                    <li class="store-name">
                                        <label>Store Name:</label>
                                        <span class="detail">OAIO Store</span>
                                    </li>
                                    <li class="store-address">
                                        <label>Address:</label>
                                        <span class="detail">Steven Street, El Carjon, CA 92020, United
                                            States (US)</span>
                                    </li>
                                    <li class="store-phone">
                                        <label>Email:</label>
                                        <a href="#tel:">{{$vendordata->email}}</a>
                                    </li>
                                </ul>
                                <a href="vendor-dokan-store.html"
                                    class="btn btn-dark btn-link btn-underline btn-icon-right">Visit
                                    Store<i class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                        @endforeach
                      </div>
                    <div class="tab-pane" id="product-tab-reviews">
                        <div class="row mb-4">
                            <div class="col-xl-4 col-lg-5 mb-4">
                                <div class="ratings-wrapper">
                                    <div class="avg-rating-container">
                                        <h4 class="avg-mark font-weight-bolder ls-50">5</h4>
                                        <div class="avg-rating">
                                            <p class="text-dark mb-1">Average Rating</p>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 60%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(3
                                                    Reviews)</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ratings-value d-flex align-items-center text-dark ls-25">
                                        <span class="text-dark font-weight-bold">66.7%</span>Recommended<span
                                            class="count">(2 of 3)</span>
                                    </div>
                                    <div class="ratings-list">
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <div class="progress-bar progress-bar-sm ">
                                                <span></span>
                                            </div>
                                            <div class="progress-value">
                                                <mark>70%</mark>
                                            </div>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <div class="progress-bar progress-bar-sm ">
                                                <span></span>
                                            </div>
                                            <div class="progress-value">
                                                <mark>30%</mark>
                                            </div>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <div class="progress-bar progress-bar-sm ">
                                                <span></span>
                                            </div>
                                            <div class="progress-value">
                                                <mark>40%</mark>
                                            </div>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 40%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <div class="progress-bar progress-bar-sm ">
                                                <span></span>
                                            </div>
                                            <div class="progress-value">
                                                <mark>0%</mark>
                                            </div>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 20%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <div class="progress-bar progress-bar-sm ">
                                                <span></span>
                                            </div>
                                            <div class="progress-value">
                                                <mark>0%</mark>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-7 mb-4">
                                <div class="review-form-wrapper">
                                    <h3 class="title tab-pane-title font-weight-bold mb-1">Submit Your
                                        Review</h3>
                                    <p class="mb-3">Your email address will not be published.
                                        Required
                                        fields are marked *</p>
                                    <form action="{{route('reviews')}}" method="POST" class="review-form">
                                        @csrf
                                        <div class="rating-form">
                                            <label for="rating">Your Rating Of This Product :</label>
                                            <span class="rating-stars">
                                                <a class="star-1" href="#">1</a>
                                                <a class="star-2" href="#">2</a>
                                                <a class="star-3" href="#">3</a>
                                                <a class="star-4" href="#">4</a>
                                                <a class="star-5" href="#">5</a>
                                            </span>
                                            <select name="rating" id="rating" required="" style="display: none;">
                                                <option value="">Rate…</option>
                                                <option value="5">Perfect</option>
                                                <option value="4">Good</option>
                                                <option value="3">Average</option>
                                                <option value="2">Not that bad</option>
                                                <option value="1">Very poor</option>
                                            </select>
                                        </div>
                                        <textarea cols="30" rows="6" name="comment" placeholder="Write Your Review Here..." class="form-control"
                                            id="review"></textarea>
                                        <div class="row gutter-md">
                                            <div class="col-md-6">
                                                <input type="text" name="name" class="form-control" placeholder="Your Name"
                                                    id="author">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="email" class="form-control" placeholder="Your Email"
                                                    id="email_1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" class="custom-checkbox" id="save-checkbox">
                                            <label for="save-checkbox">Save my name, email, and website
                                                in this browser for the next time I comment.</label>
                                        </div>
                                        <input type="hidden" name="product_id" value="{{$item->id}}">
                                        <input type="hidden" name="user_id" value="{{$item->user_id}}">

                                        <button type="submit" class="btn btn-dark">Submit
                                            Review</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="tab tab-nav-boxed tab-nav-outline tab-nav-center">
                            {{-- <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a href="#show-all" class="nav-link active">Show All</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#helpful-positive" class="nav-link">Most Helpful
                                        Positive</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#helpful-negative" class="nav-link">Most Helpful
                                        Negative</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#highest-rating" class="nav-link">Highest Rating</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#lowest-rating" class="nav-link">Lowest Rating</a>
                                </li>
                            </ul> --}}
                            <div class="tab-content">
                                <div class="tab-pane active" id="show-all">
                                    <ul class="comments list-style-none">
                                        <li class="comment">
                                            <div class="comment-body">

                                                @foreach ($reviews as $review)
                                                    
                                                
                                               
                                                <div class="comment-content">
                                                    <h4 class="comment-author">
                                                        <a href="#">{{$review->name}}</a>
                                                        <span class="comment-date">March 22, 2021 at
                                                            1:54 pm</span>
                                                    </h4>
                                                    <div class="ratings-container comment-rating">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 60%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                    </div>
                                                    <p>pellentesque habitant morbi tristique senectus
                                                        et. In dictum non consectetur a erat.
                                                        Nunc ultrices eros in cursus turpis massa
                                                        tincidunt ante in nibh mauris cursus mattis.
                                                        Cras ornare arcu dui vivamus arcu felis bibendum
                                                        ut tristique.</p>
                                                    <div class="comment-action">
                                                        <a href="#"
                                                            class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                            <i class="far fa-thumbs-up"></i>Helpful (1)
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                            <i class="far fa-thumbs-down"></i>Unhelpful
                                                            (0)
                                                        </a>
                                                        
                                                    </div>
                                                </div>

                                                @endforeach
                                            </div>
                                        </li>
                                        
                                    </ul>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="vendor-product-section">
                <div class="title-link-wrapper mb-4">
                    <h4 class="title text-left">More Products From This Vendor</h4>
                    <a href="#" class="btn btn-dark btn-link btn-slide-right btn-icon-right">More
                        Products<i class="w-icon-long-arrow-right"></i></a>
                </div>
                <div class="swiper-container swiper-theme"
                    data-swiper-options="{
                                    'spaceBetween': 20,
                                    'slidesPerView': 2,
                                    'breakpoints': {
                                        '576': {
                                            'slidesPerView': 3
                                        },
                                        '768': {
                                            'slidesPerView': 4
                                        },
                                        '992': {
                                            'slidesPerView': 3
                                        }
                                    }
                                }">
                    <div class="swiper-wrapper row cols-lg-3 cols-md-4 cols-sm-3 cols-2">
                        @foreach ($vandorProduct as $Vitem)
                            @if (strpos($Vitem->photo, '|') !== false)
                                @php
                                    $photo = Str::afterLast($Vitem->photo, '|');
                                    
                                @endphp
                            @else
                                @php
                                    $photo = $Vitem->photo;
                                    
                                @endphp
                            @endif

                            <div class="swiper-slide product">
                                <figure class="product-media">
                                    <a href="{{ route('views.product', ['id' => $Vitem->id]) }}">
                                        <img style="height: 30vw ; repeat:no-repeat" src="{{ asset('storage\product') }}\{{ $photo }}" alt="Product" width="300"
                                            height="338" />
                                       
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                            title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                            title="Add to Compare"></a>
                                    </div>
                                    <div class="product-action">
                                        <a href="{{ route('views.product', ['id' => $Vitem->id]) }}" class="btn-product " title="Quick View">View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat"><a
                                            href="shop-banner-sidebar.html">{{ $Vitem->category }}</a>
                                    </div>
                                    <h4 class="product-name"><a
                                            href="product-default.html">{{ $Vitem->product_name }}</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(3
                                            reviews)</a>
                                    </div>
                                    <div class="product-pa-wrapper">
                                        <div class="product-price">{{ $Vitem->price }}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <section class="related-product-section">
                <div class="title-link-wrapper mb-4">
                    <h4 class="title">Related Products</h4>
                    <a href="#" class="btn btn-dark btn-link btn-slide-right btn-icon-right">More
                        Products<i class="w-icon-long-arrow-right"></i></a>
                </div>
                <div class="swiper-container swiper-theme"
                    data-swiper-options="{
                                    'spaceBetween': 20,
                                    'slidesPerView': 2,
                                    'breakpoints': {
                                        '576': {
                                            'slidesPerView': 3
                                        },
                                        '768': {
                                            'slidesPerView': 4
                                        },
                                        '992': {
                                            'slidesPerView': 3
                                        }
                                    }
                                }">
                    <div
                        class="swiper-wrapper row cols-lg-3 
                                        cols-md-4 cols-sm-3 cols-2 mb-5">

                        @foreach ($relative as $bal)
                            @if (strpos($bal->photo, '|') !== false)
                                @php
                                    $photo = Str::afterLast($bal->photo, '|');
                                    
                                @endphp
                            @else
                                @php
                                    $photo = $bal->photo;
                                    
                                @endphp
                            @endif


                            <div class="swiper-slide product">

                                <figure class="product-media">
                                    <a href="{{ route('views.product', ['id' => $bal->id]) }}">
                                        <img style="height: 30vw"
                                            src="{{ asset('storage\product') }}\{{ $photo }}" alt="Product"
                                            width="300" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                            title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                            title="Add to Compare"></a>
                                    </div>
                                    <div class="product-action">
                                        <a href="{{ route('views.product', ['id' => $bal->id]) }}" class="btn-product ">
                                            View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">{{ $bal->product_name }}</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(3
                                            reviews)</a>
                                    </div>
                                    <div class="product-pa-wrapper">
                                        <div class="product-price">${{ $bal->price }}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            </div>

            </div>
            </div>
            </div>
            <!-- End of Page Content -->

        </main>
        <!-- End of Main -->


        </div>
        <!-- End of Page Wrapper -->


        <!-- Start of Scroll Top -->
        <a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i
                class="w-icon-angle-up"></i> <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
                <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10"
                    cx="35" cy="35" r="34" style="stroke-dasharray: 16.4198, 400;"></circle>
            </svg> </a>
        <!-- End of Scroll Top -->

        <!-- Start of Mobile Menu -->
        <div class="mobile-menu-wrapper">
            <div class="mobile-menu-overlay"></div>
            <!-- End of .mobile-menu-overlay -->

            <a href="#" class="mobile-menu-close"><i class="close-icon"></i></a>
            <!-- End of .mobile-menu-close -->

            <div class="mobile-menu-container scrollable">
                <form action="#" method="get" class="input-wrapper">
                    <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search"
                        required />
                    <button class="btn btn-search" type="submit">
                        <i class="w-icon-search"></i>
                    </button>
                </form>
                <!-- End of Search Form -->
                <div class="tab">
                    <ul class="nav nav-tabs" role="tablist">

                        rgfrgregr
                    </ul>
                </div>

            </div>
        </div>
        <!-- End of Mobile Menu -->

        <!-- Root element of PhotoSwipe. Must have class pswp -->
        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

            <!-- Background of PhotoSwipe. It's a separate element as animating opacity is faster than rgba(). -->
            <div class="pswp__bg"></div>

            <!-- Slides wrapper with overflow:hidden. -->
            <div class="pswp__scroll-wrap">


                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>

                <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                <div class="pswp__ui pswp__ui--hidden">

                    <div class="pswp__top-bar">

                        <!--  Controls are self-explanatory. Order can be changed. -->

                        <div class="pswp__counter"></div>

                        <button class="pswp__button pswp__button--close" aria-label="Close (Esc)"></button>
                        <button class="pswp__button pswp__button--zoom" aria-label="Zoom in/out"></button>

                        <div class="pswp__preloader">
                            <div class="loading-spin"></div>
                        </div>
                    </div>

                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                    </div>

                    <button class="pswp__button--arrow--left" aria-label="Previous (arrow left)"></button>
                    <button class="pswp__button--arrow--right" aria-label="Next (arrow right)"></button>

                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of PhotoSwipe -->

        <!-- Start of Quick View -->
        <div class="product product-single product-popup">
            <div class="row gutter-lg">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="product-gallery product-gallery-sticky">
                        <div class="swiper-container product-single-swiper swiper-theme nav-inner">
                            <div class="swiper-wrapper row cols-1 gutter-no">
                                <div class="swiper-slide">
                                    <figure class="product-image">
                                        <img src="assets/images/products/popup/1-440x494.jpg"
                                            data-zoom-image="assets/images/products/popup/1-800x900.jpg"
                                            alt="Water Boil Black Utensil" width="800" height="900">
                                    </figure>
                                </div>
                                <div class="swiper-slide">
                                    <figure class="product-image">
                                        <img src="assets/images/products/popup/2-440x494.jpg"
                                            data-zoom-image="assets/images/products/popup/2-800x900.jpg"
                                            alt="Water Boil Black Utensil" width="800" height="900">
                                    </figure>
                                </div>
                                <div class="swiper-slide">
                                    <figure class="product-image">
                                        <img src="assets/images/products/popup/3-440x494.jpg"
                                            data-zoom-image="assets/images/products/popup/3-800x900.jpg"
                                            alt="Water Boil Black Utensil" width="800" height="900">
                                    </figure>
                                </div>
                                <div class="swiper-slide">
                                    <figure class="product-image">
                                        <img src="assets/images/products/popup/4-440x494.jpg"
                                            data-zoom-image="assets/images/products/popup/4-800x900.jpg"
                                            alt="Water Boil Black Utensil" width="800" height="900">
                                    </figure>
                                </div>
                            </div>
                            <button class="swiper-button-next"></button>
                            <button class="swiper-button-prev"></button>
                        </div>
                        <div class="product-thumbs-wrap swiper-container"
                            data-swiper-options="{
                        'navigation': {
                            'nextEl': '.swiper-button-next',
                            'prevEl': '.swiper-button-prev'
                        }
                    }">
                            <div class="product-thumbs swiper-wrapper row cols-4 gutter-sm">
                                <div class="product-thumb swiper-slide">
                                    <img src="assets/images/products/popup/1-103x116.jpg" alt="Product Thumb"
                                        width="103" height="116">
                                </div>
                                <div class="product-thumb swiper-slide">
                                    <img src="assets/images/products/popup/2-103x116.jpg" alt="Product Thumb"
                                        width="103" height="116">
                                </div>
                                <div class="product-thumb swiper-slide">
                                    <img src="assets/images/products/popup/3-103x116.jpg" alt="Product Thumb"
                                        width="103" height="116">
                                </div>
                                <div class="product-thumb swiper-slide">
                                    <img src="assets/images/products/popup/4-103x116.jpg" alt="Product Thumb"
                                        width="103" height="116">
                                </div>
                            </div>
                            <button class="swiper-button-next"></button>
                            <button class="swiper-button-prev"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 overflow-hidden p-relative">
                    <div class="product-details scrollable pl-0">
                        <h2 class="product-title">Electronics Black Wrist Watch</h2>
                        <div class="product-bm-wrapper">
                            <figure class="brand">
                                <img src="assets/images/products/brand/brand-1.jpg" alt="Brand" width="102"
                                    height="48" />
                            </figure>
                            <div class="product-meta">
                                <div class="product-categories">
                                    Category:
                                    <span class="product-category"><a href="#">Electronics</a></span>
                                </div>
                                <div class="product-sku">
                                    SKU: <span>MS46891340</span>
                                </div>
                            </div>
                        </div>

                        <hr class="product-divider">

                        <div class="product-price">$40.00</div>

                        <div class="ratings-container">
                            <div class="ratings-full">
                                <span class="ratings" style="width: 80%;"></span>
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <a href="#" class="rating-reviews">(3 Reviews)</a>
                        </div>

                        <div class="product-short-desc">
                            <ul class="list-type-check list-style-none">
                                <li>Ultrices eros in cursus turpis massa cursus mattis.</li>
                                <li>Volutpat ac tincidunt vitae semper quis lectus.</li>
                                <li>Aliquam id diam maecenas ultricies mi eget mauris.</li>
                            </ul>
                        </div>

                        <hr class="product-divider">

                        <div class="product-form product-variation-form product-color-swatch">
                            <label>Color:</label>
                            <div class="d-flex align-items-center product-variations">
                                <a href="#" class="color" style="background-color: #ffcc01"></a>
                                <a href="#" class="color" style="background-color: #ca6d00;"></a>
                                <a href="#" class="color" style="background-color: #1c93cb;"></a>
                                <a href="#" class="color" style="background-color: #ccc;"></a>
                                <a href="#" class="color" style="background-color: #333;"></a>
                            </div>
                        </div>
                        <div class="product-form product-variation-form product-size-swatch">
                            <label class="mb-1">Size:</label>
                            <div class="flex-wrap d-flex align-items-center product-variations">
                                <a href="#" class="size">Small</a>
                                <a href="#" class="size">Medium</a>
                                <a href="#" class="size">Large</a>
                                <a href="#" class="size">Extra Large</a>
                            </div>
                            <a href="#" class="product-variation-clean">Clean All</a>
                        </div>

                        <div class="product-variation-price">
                            <span></span>
                        </div>

                        <div class="product-form">
                            <div class="product-qty-form">
                                <div class="input-group">
                                    <input class="quantity form-control" type="number" min="1" max="10000000">
                                    <button class="quantity-plus w-icon-plus"></button>
                                    <button class="quantity-minus w-icon-minus"></button>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-cart">
                                <i class="w-icon-cart"></i>
                                <span>Add to Cart</span>
                            </button>
                        </div>

                        <div class="social-links-wrapper">
                            <div class="social-links">
                                <div class="social-icons social-no-color border-thin">
                                    <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                    <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                    <a href="#" class="social-icon social-pinterest fab fa-pinterest-p"></a>
                                    <a href="#" class="social-icon social-whatsapp fab fa-whatsapp"></a>
                                    <a href="#" class="social-icon social-youtube fab fa-linkedin-in"></a>
                                </div>
                            </div>
                            <span class="divider d-xs-show"></span>
                            <div class="product-link-wrapper d-flex">
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"><span></span></a>
                                <a href="#"
                                    class="btn-product-icon btn-compare btn-icon-left w-icon-compare"><span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Quick view -->


    </body>
@endsection
