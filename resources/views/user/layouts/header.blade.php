<nav style="
background: rgb(188,220,223);
background: linear-gradient(90deg, rgba(188,220,223,1) 0%,
 rgba(246,246,255,1) 44%, rgba(208,229,236,1) 98%);
box-shadow: 0px 0px 8px 1px #888888;"
    class="container-fluid navbar sticky top-0 pb-0 pt-0">
    <div class="container-fluid searchhide">

        <!-----------------nav-profile-------------
          /
          /
          /
          /             profile
          /
          /
          /
          /
          /
          /---------------_--------------------------->
        <div class="d-flex">
            <div>
                <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
                    aria-controls="offcanvasScrolling">
                    
                    <img style="width: 30px;background: white;border-radius: 100px"
                        src=" @if (isset(Auth::user()->socialite_id))
                        {{Auth::user()->profile_photo_path}}
                        @else
                        
                        @if (isset(Auth::user()->profile_photo_path))

                            {{asset('storage\profile')}}\{{Auth::user()->profile_photo_path}}
                            @else
                            https://cdn-icons-png.flaticon.com/512/149/149071.png @endif 
                            @endif"
                        alt="/icon/free-user-icon-3296-thumb.png">
                </button>


                @guest
                    <div style="border: solid rgb(95, 95, 95)" class="offcanvas offcanvas-start h-50 border-bottom-2"
                        data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling"
                        aria-labelledby="offcanvasScrollingLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Log-In</h5>
                            <img style="width:100px" src="{{ asset('img\20230109_014602.png') }}" alt="">
                            <div type="button" class="" data-bs-dismiss="offcanvas" aria-label="Close">
                                <img style="width: 30px;border-radius: 3px;"
                                    src="https://cdn-icons-png.flaticon.com/512/9148/9148975.png" alt="image.png">
                            </div>
                        </div>
                        <div class="offcanvas-body text-center">
                            <img style="width: 50px;background: white;border-radius: 100px"
                                src="https://cdn-icons-png.flaticon.com/512/149/149071.png"
                                alt="/icon/free-user-icon-3296-thumb.png">
                            <p>guest430@gmail.com</p>
                            <div class="d-grid gap-2 col-6 mx-auto mb-5">
                                <a href="{{ route('login') }}" class="btn btn-outline-success  btn-group-lg"> Sing In</a>
                                <a href="{{ route('register') }}" class="btn btn-outline-success  btn-group-lg"> Sing Up</a>

                            </div>

                            <div class="text-center">
                                <hr class="m-0 p-0">
                                <p class="m-0 p-0">or log in with:</p>
                                <hr class="mt-0 pt-0">
                                <button type="button" class="btn btn-link btn-floating btn-outline-info mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>

                                <a href="{{ route('log.google') }}" type="button"
                                    class="btn btn-link btn-floating btn-outline-info mx-1">
                                    <i class="fab fa-google"></i>
                                </a>

                                <a href="{{ route('log.fb') }}" type="button"
                                    class="btn btn-link btn-floating btn-outline-info mx-1">
                                    <i class="fab fa-facebook"></i>
                                </a>

                                <a href="{{route('log.github')}}" type="button" class="btn btn-link btn-outline-info mx-1">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                @endguest



                @auth
                    <div style="border: solid rgb(95, 95, 95)"
                        class="offcanvas offcanvas-start h-50 border-bottom-2 rounded" data-bs-scroll="true"
                        data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling"
                        aria-labelledby="offcanvasScrollingLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">{{ Auth::user()->name }}</h5>
                            <img style="width:100px" src="{{ asset('img\20230109_014602.png') }}" alt="">
                            <div type="button" class="" data-bs-dismiss="offcanvas" aria-label="Close">
                                <img style="width: 30px;border-radius: 3px;"
                                    src="https://cdn-icons-png.flaticon.com/512/9148/9148975.png" alt="image.png">
                            </div>
                        </div>
                        <div class="offcanvas-body text-center">
                            <img style="width: 50px;background: white;border-radius: 100px"
                           
                            src="
                            @if (isset(Auth::user()->socialite_id))
                            {{Auth::user()->profile_photo_path}}
                            @else
                            
                            @if (isset(Auth::user()->profile_photo_path))

                                {{asset('storage\profile')}}\{{Auth::user()->profile_photo_path}}
                                @else
                                https://cdn-icons-png.flaticon.com/512/149/149071.png @endif 
                                @endif
                                "

                                alt="/icon/free-user-icon-3296-thumb.png">

                            <p>{{ Auth::user()->email }}</p>

                            <div class="d-grid gap-2 col-6 mx-auto mb-5">
                                <a href="{{ route('login') }}" class="btn btn-outline-success  btn-group-lg"> Profile</a>


                            </div>

                            <div class="text-center mb-4">
                                Add social+
                            </div>
                            <form action=" {{ route('logout') }} " method="POST" class="text-center">
                                @csrf
                                <button class="btn btn-dark" type="submit"> logout</button>
                            </form>

                        </div>

                    </div>
                @endauth


            </div>
            <div>
                <a href="{{ route('home') }}">
                    <img style="width:20vw" src="{{ asset('img\20230109_014602.png') }}" alt="">
                </a>
            </div>
        </div>






        <!-----------------search-bar-------------
          /
          /
          /
          /            search-bar
          /
          /
          /
          /
          /
       /---------------_--------------------------->

        <style>
            .searchbody:hover>.searchtext {
                width: 150px;
                transition: 0.7s;

            }

            .searchbody:hover>.searchbtn {
                background-color: azure
            }

            .searchbody:hover>.searchhide {
                display: none;

            }

            .searchbody {

                border-radius: 40px;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 5px
            }

            .searchtext {
                background: none;
                border: none;
                width: 0px;
                outline: none;
                font-size: 16px;
                color: aliceblue;

            }

            .searchbtn {
                background: none;
                padding: 1px;
                border: none;
                border-radius: 30px;
                outline: none;
                width: 20px;


            }
        </style>

        <form class="bg-black searchbody">

            <input type="search" class="searchtext rounded-100" placeholder="Username">


            <button class="searchbtn" href="">

                <i style="color: #2CACFC" class="fa fa-search" aria-hidden="true"></i>



            </button>

        </form>









        <!-----------------menu-bar-------------
          /
          /
          /
          /            menu-bar
          /
          /
          /
          /
          /
       /---------------_--------------------------->
        <div class="d-flex gap-5">
            <div>
                <a style="color: black" href="{{ route('add.card') }}">



                    <i style="width: 20px ;position: relative;" class="fas fa-shopping-cart"></i>

                    <h4 style="position: absolute;top: 30% ; color: red">
                        1
                    </h4>
                </a>
            </div>
            <div style="border: solid 2px rgb(13, 6, 6)" class="navbar-toggler" type="button"
                data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="" style="">
                    <img style="width: 15px;" src="https://cdn-icons-png.flaticon.com/512/5259/5259008.png">
                </span>
            </div>
        </div>



        @include('user\layouts\sidebar')

    </div>
</nav>
