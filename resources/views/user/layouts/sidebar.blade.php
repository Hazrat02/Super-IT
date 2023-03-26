<div style="background-color: #D0E5EC" class="offcanvas offcanvas-end  searchhide" tabindex="-1" id="offcanvasDarkNavbar"
    aria-labelledby="offcanvasDarkNavbarLabel">
    <style>

    </style>
    <div>

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


        <div class="offcanvas-header">
            <style>
                @media only screen and (max-width: 553px) {
                    .menusearch {
                        display: inline;
                    }
                }

                @media only screen and (min-width: 554px) {
                    .menusearch {
                        display: none;
                    }
                }
            </style>



            <form class="bg-black searchbody menusearch" action="{{ route('search') }}" method="GET">
                @csrf
                <input type="search" class="searchtext rounded-100" required name="name" placeholder="Search..">



                <button class="searchbtn" type="submit">

                    <i style="color: #2CACFC" class="fa fa-search" aria-hidden="true"></i>



                </button>

            </form>

            {{-- <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5> --}}
            <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>


        <div class="offcanvas-body">

            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#ContactUs">Contact Us</a>
                </li>
            </ul>

        </div>
        
    </div>
