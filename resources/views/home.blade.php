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


            background-image: linear-gradient(110deg, rgba(146, 199, 202, 0.716) 50%, rgba(18, 33, 36, 0.412) 50%), url('https://images.pexels.com/photos/160107/pexels-photo-160107.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');


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
                        rgba(18, 33, 36, 0.412) 50%), url('https://scontent.fdac139-1.fna.fbcdn.net/v/t39.30808-6/320383437_687048936343112_7114423443231015868_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=e3f864&_nc_eui2=AeFiUXXnJHudYmcEHhu-rXumA5LYrRg7ZwkDktitGDtnCVuBFHjwIIBulhv-YAIjUBgiTytv-HP2T8AxN-t56LtZ&_nc_ohc=DRefQCtay9AAX--c_e0&_nc_zt=23&_nc_ht=scontent.fdac139-1.fna&oh=00_AfCZ9_5Ais6_MiqqovJogUeg50wPhn1u588S_HDJ2b5Gdg&oe=63C2150D');
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
                <img class="companylog"
                    src="{{asset('img\super it.jpg')}}"
                    alt="">
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
                <a href=""><img style=" height: 15rem;"
                        src="{{ asset('product') }}\{{$photo}}" class="card-img-top"
                        alt="..."></a>



                <div class="justify-content-between text-center v mb-2">
                    <h5 class="card-title">{{$item->product_name}}</h5>
                    <div class="product-price text-center">
                        <strike style="font-size: 17px!important;color: #E96A6A!important;">
                            {{$item->discount}}$
                        </strike><br>
                        <strong class="">
                            {{$item->price}} $
                        </strong>
                    </div>
                </div>


                <div class="card-body quick-view single-product-details rounded">
                    <h5 class="card-title">{{Str::limit($item->title,'20')}}</h5>
                    <div class=" card-text">
                        <p class="card-text">{{Str::limit($item->discription,'80')}}.</p>
                        <div class="d-flex justify-content-evenly">
                            <a href="{{route('views.product',['id' => $item->id])}}" class="btn btn-primary   ">Views</a>
                            <a href="{{route('addtocard')}}" >
                    
                                <img style="width: 30px" src="data:image/png;base64,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" alt="">
                            </a>
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
