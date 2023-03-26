@extends('user\layouts\app')

@section('usermain')
    <style>
        .quick-view {
            display: none;
            padding-bottom: 8px;
        }

        .product-single-hover {
            box-shadow: 0px 0px 5px rgba(0, 113, 220, 0.15);
            border-radius: 5px;
        }

        .quick-view,
        .single-product-details {
            background: #ffffff;
        }

        .product-single-hover:hover>.single-product-details {

            margin-top: -110px;
        }

        .product-single-hover:hover>.quick-view {
            display: block;
        }

        .hidden:hover>.v {
            display: none;

        }

        .body {
            overflow: hidden;

        }

        .content:hover {
            background-image: linear-gradient(120deg, rgba(146, 199, 202, 0.657) 50%, rgba(18, 33, 36, 0.412) 50%), url('https://images.pexels.com/photos/160107/pexels-photo-160107.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            transition: 2s;

        }

        .content {


            background-image: linear-gradient(110deg, rgba(146, 199, 202, 0.719) 50%,
                        rgba(18, 33, 36, 0.412) 50%), url('https://scontent.fdac139-1.fna.fbcdn.net/v/t39.30808-6/320383437_687048936343112_7114423443231015868_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=e3f864&_nc_eui2=AeFiUXXnJHudYmcEHhu-rXumA5LYrRg7ZwkDktitGDtnCVuBFHjwIIBulhv-YAIjUBgiTytv-HP2T8AxN-t56LtZ&_nc_ohc=DRefQCtay9AAX--c_e0&_nc_zt=23&_nc_ht=scontent.fdac139-1.fna&oh=00_AfCZ9_5Ais6_MiqqovJogUeg50wPhn1u588S_HDJ2b5Gdg&oe=63C2150D');


            width: 98.5vw;
            height: 60vw;
            background-repeat: no-repeat;
            background-size: 100% 100%;
            animation: change 20s infinite ease-in-out;
            box-shadow: rgb(10, 28, 26) 1px 1px 10px 5px;
        }

        @keyframes change {

            0% {

                background-image: linear-gradient(110deg, rgba(146, 199, 202, 0.719) 50%,
                        rgba(18, 33, 36, 0.412) 50%), url('https://petapixel.com/assets/uploads/2017/03/product1.jpeg');
            }

            30% {

                background-image: linear-gradient(110deg, rgba(146, 199, 202, 0.719) 50%,
                        rgba(18, 33, 36, 0.412) 50%), url('https://images.pexels.com/photos/230544/pexels-photo-230544.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            }

            40% {

                background-image: linear-gradient(110deg, rgba(146, 199, 202, 0.742) 50%,
                        rgba(18, 33, 36, 0.412) 50%), url('https://images.pexels.com/photos/2508721/pexels-photo-2508721.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            }

            50% {

                background-image: linear-gradient(110deg, rgba(146, 199, 202, 0.72) 50%,
                        rgba(18, 33, 36, 0.412) 50%), url('https://images.pexels.com/photos/160107/pexels-photo-160107.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            }

            60% {

                background-image: linear-gradient(110deg, rgba(146, 199, 202, 0.721) 50%,
                        rgba(18, 33, 36, 0.412) 50%), url('https://images.pexels.com/photos/4974912/pexels-photo-4974912.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            }

            80% {

                background-image: linear-gradient(110deg, rgba(146, 199, 202, 0.717) 50%,
                        rgba(18, 33, 36, 0.412) 50%), url('https://images.pexels.com/photos/4439901/pexels-photo-4439901.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            }

            100% {

                background-image: linear-gradient(110deg, rgba(146, 199, 202, 0.722) 50%,
                        rgba(18, 33, 36, 0.412) 50%), url('https://images.pexels.com/photos/3888151/pexels-photo-3888151.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            }


        }



        @import url('https://fonts.googleapis.com/css2?family=Bad+Script&family=Cinzel:wght@600&family=Courgette&family=Philosopher&display=swap');

        .centercompany:hover {

            background-color: #0b0000dc;
            border: solid rgb(20, 0, 0) 2vw;
            border-color: #fffafa44;

        }

        .companylog:hover {

            width: 9.5vw;

            transition: 0.6s;
            transform: rotate(360deg);

        }

        .centercompany {

            position: absolute;
            top: 50%;
            left: 40%;
            border-radius: 100%;

            border: solid rgba(148, 118, 118, 0.399) 2vw;
            border-color: #fffafa44;


        }

        .companylog {

            width: 10vw;

            border-radius: 100%;

        }
    </style>










    <div class="content rounded position-relative">

        <div class="col-md-6 col-6 left-1 text-center pt-4 bodytext">
            <h1 style="font-family: 'Cinzel', serif; font-size: 4vw">
                Make Website with Us
            </h1>
            <h4 class="" style="font-family: 'Courgette', cursive; font-size: 3vw ;color: rgb(8, 42, 100)">
                Grow Your Business
            </h4>
            <h6 class="ms-3 p-2"
                style="font-family: 'Philosopher', sans-serif; font-size: 2vw ;color: rgba(45, 7, 70, 0.784) ;">
                We have 20+ developers with diverse experience. We have experience in html,css,bootstrap,tawailwind,vanilla
                js,react js,node js,next js,redux,php,laravel,my sqli,monggodb.
            </h6>
        </div>


        <div class="centercompany">

            <a class="centercompanya" href="https://web.facebook.com/profile.php?id=100088887035720">
                <img class="companylog" src="{{ asset('img\super it.jpg') }}" alt="">
            </a>
        </div>
    </div>















    {{-- top views card --}}
    <div>
        @include('user\parsials\topviews')

    </div>
































    <div class="container-fluid row  justify-content-between col-12 overflow-auto">



        @foreach ($product as $item)
            @if (strpos($item->photo, '|') !== false)
                @php
                    $photo = Str::afterLast($item->photo, '|');
                    
                @endphp
            @else
                @php
                    $photo = $item->photo;
                    
                @endphp
            @endif

            <div class="text-center col-12 col-sm-6 col-lg-3 col-md-4  mb-3">
                <div class="card product-single-hover hidden rounded my-2 bg-info " style="">
                    <a href=""><img style=" height: 15rem;" src="{{ asset('product') }}\{{ $photo }}"
                            class="card-img-top" alt="..."></a>



                    <div class="justify-content-between text-center v mb-2">
                        <h5 class="card-title">{{ $item->product_name }}</h5>
                        <div class="product-price text-center">
                            <strike style="font-size: 17px!important;color: #E96A6A!important;">
                                {{ $item->discount }}$
                            </strike><br>
                            <strong class="">
                                {{ $item->price }} $
                            </strong>
                        </div>
                    </div>


                    <div class="card-body quick-view single-product-details rounded">
                        <h5 class="card-title">{{ Str::limit($item->title, '20') }}</h5>
                        <div class=" card-text">
                            <p class="card-text">{{ Str::limit($item->discription, '80') }}.</p>
                            <div class="d-flex justify-content-evenly">
                                <a href="{{ route('views.product', ['id' => $item->id]) }}"
                                    class="btn btn-primary   ">Views</a>


                                <label for="submit"><i style='font-size:24px' class='fas'>&#xf217;</i></label>
                                <form class="d-none" action="{{ route('addtocard') }}" method="POST">
                                    @csrf




                                    <input type="hidden" name="size" value="medium">
                                    <input name="quantity" type="hidden" value="1">

                                    <input type="hidden" name="product_id" value="{{ $item->id }}">
                                    <input type="hidden" name="price" value="{{ $item->price }}">

                                    <button class="btn-product-icon " id="submit" type="submit"></button>



                                </form>
                            
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        @endforeach
        <div class="item-center">
            {{ $product->links() }}</div>


    </div>
@endsection
