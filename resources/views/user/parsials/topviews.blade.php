<style>
    @media (max-width: 767px) {
        .carousel-inner .carousel-item>div {
            display: none;
        }

        .carousel-inner .carousel-item>div:first-child {
            display: block;
        }
    }

    .carousel-inner .carousel-item.active,
    .carousel-inner .carousel-item-next,
    .carousel-inner .carousel-item-prev {
        display: flex;
    }

    /* medium and up screens */
    @media (min-width: 768px) {

        .carousel-inner .carousel-item-end.active,
        .carousel-inner .carousel-item-next {
            transform: translateX(25%);
        }

        .carousel-inner .carousel-item-start.active,
        .carousel-inner .carousel-item-prev {
            transform: translateX(-25%);
        }
    }

    .carousel-inner .carousel-item-end,
    .carousel-inner .carousel-item-start {
        transform: translateX(0);
    }
</style>

<div style="background-color: #D0E5EC ; box-shadow: 0px 0px 8px 1px #888888;" class="card px-3 my-5 m-3">
    <div class=" container d-flex justify-content-between">
        <h3>Top Views</h3>
        <a href="">see all</a>
    </div>


    <div class="container text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">









                    @foreach ($topproduct as $item)
                        <div class="carousel-item @if ($topproduct->max('views') == $item->views) active @endif">
                            <div class="col-md-3">
                                @if (strpos($item->photo, '|') !== false)
                                    @php
                                        $photo = Str::afterLast($item->photo, '|');
                                        
                                    @endphp
                                @else
                                    @php
                                        $photo = $item->photo;
                                        
                                    @endphp
                                @endif

                                <div class="card product-single-hover hidden rounded my-2 bg-info " style="">
                                    <a href=""><img style=" height: 15rem;"
                                            src="{{ asset('product') }}\{{$photo}}"
                                            class="card-img-top" alt="..."></a>

                                    <div class="justify-content-between text-center v mb-2">
                                        <h5 class="card-title">{{ $item->product_name }}</h5>
                                        <div class="product-price text-center">
                                            <strike style="font-size: 16px!important;color: #ff0000!important;">
                                                {{ $item->discount }}$
                                            </strike><br>
                                            <strong class="">
                                                {{ $item->price }}$

                                            </strong>
                                        </div>
                                    </div>


                                    <div class="card-body quick-view single-product-details mb-0 rounded ">
                                        <h5 class="card-title">{{ Str::limit($item->title, '20') }}</h5>
                                        <div class=" card-text">
                                            <p class="card-text">{{ Str::limit($item->discription, '70') }}</p>
                                            <div class="d-flex justify-content-evenly">
                                                <a href="{{ route('views.product', ['id' => $item->id]) }}"
                                                    class="btn btn-primary   ">Views</a>
                                                <a href="{{ route('addtocard') }}">

                                                    <img style="width: 30px"
                                                        src="data:image/png;base64,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"
                                                        alt="">
                                                </a>
                                            </div>


                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>
                    @endforeach

                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button"
                    data-bs-slide="prev">
                    <span style="color: white ;background-color: black" class=" rounded carousel-control-prev-icon"
                        aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button"
                    data-bs-slide="next">
                    <span style="color: white ;background-color: black" class="rounded carousel-control-next-icon"
                        aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>
</div>
