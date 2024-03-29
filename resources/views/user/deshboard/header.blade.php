<div class="page-wrapper">
    <!-- Start of Header -->
    <header class="header">

        <!-- End of Header Top -->

        <div style="
            z-index: 44444;
            background-color: rgb(188,220,223);
            background: linear-gradient(90deg, rgba(188,220,223,1) 0%,
             rgba(246,246,255,1) 44%, rgba(208,229,236,1) 98%);
            box-shadow: 0px 0px 8px 1px #888888;"
            class="header-middle ">
            <div class="container">
                <div class="header-left mr-md-4">
                    <a href="{#}" class="mobile-menu-toggle menumobile w-icon-hamburger" aria-label="menu-toggle">
                    </a>
                    <a href="{{ route('home') }}" class="logo ml-lg-0">
                        <img src="{{ asset('img\20230109_014602.png') }}" alt="logo" width="144"
                            height="45" />
                    </a>


                    <form action="{{ route('search') }}" method="GET"
                        class="header-search hs-expanded hs-round d-none d-md-flex input-wrapper">
                        @csrf
                        <div class="select-box">
                            <select id="category" name="category">
                                <option value="">All Categories</option>
                                <option value="fashion">Fashion</option>
                                <option value="furniture">Furniture</option>
                                <option value="shoes">Shoes</option>
                                <option value="sports">Sports</option>
                                <option value="games">Games</option>
                                <option value="computers">Computers</option>
                                <option value="electronics">Electronics</option>
                                <option value="kitchen">Kitchen</option>
                                <option value="clothing">Clothing</option>
                            </select>
                        </div>
                        <input type="text" class="form-control" name="name" id="search"
                            placeholder="Search in..." required />
                        <button class="btn btn-search" type="submit"><i class="w-icon-search"></i>
                        </button>
                    </form>
                </div>
                <div class="header-right ml-4">
                    <div class="header-call d-xs-show d-lg-flex align-items-center">
                        <a href="tel:#" class=""><i style="font-size:24px" class="fa">&#xf0e0;</i></a>
                        <div class="call-info d-lg-show">
                            <h4 class="chat font-weight-normal font-size-md text-normal ls-normal text-light mb-0">
                                <a href="mailto:#" class="text-capitalize">Live Chat</a>
                            </h4>

                        </div>
                    </div>
                    <a class="wishlist label-down link d-xs-show" href="{{ route('watchlist') }}">
                        <i class="w-icon-heart"></i>
                        <span class="wishlist-label d-lg-show">Wishlist</span>
                    </a>
                    <a class="compare label-down link d-xs-show" href="{{ route('watchlist') }}">
                        <i class="w-icon-compare"></i>
                        <span class="compare-label d-lg-show">Compare</span>
                    </a>
                    <div class="dropdown cart-dropdown cart-offcanvas mr-0 mr-lg-2">

                        @include('user\deshboard\addtocard')

                    </div>
                </div>
            </div>
        </div>
        <!-- End of Header Middle -->


    </header>
    <!-- End of Header -->


</div>
<!-- End of Page Wrapper -->



<!-- Start of Scroll Top -->
<a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i class="w-icon-angle-up"></i> <svg
        version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
        <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35"
            cy="35" r="34" style="stroke-dasharray: 16.4198, 400;">
        </circle>
    </svg> </a>
<!-- End of Scroll Top -->
<div class="mobile-menu-wrapper">
    <div class="mobile-menu-overlay"></div>
    <!-- End of .mobile-menu-overlay -->

    <a href="#" class="mobile-menu-close"><i class="close-icon"></i></a>
    <!-- End of .mobile-menu-close -->

    <div style="background-color: rgb(181, 200, 200)" class="mobile-menu-container scrollable">
        <form action=" {{ route('search') }}" method="get" class="input-wrapper form-group">
            @csrf
            <select id="category" class="form-control col-4 p-0" name="category">
                <option value="">All Categories</option>
                <option value="fashion">Fashion</option>
                <option value="furniture">Furniture</option>
                <option value="shoes">Shoes</option>
                <option value="sports">Sports</option>
                <option value="games">Games</option>
                <option value="computers">Computers</option>
                <option value="electronics">Electronics</option>
                <option value="kitchen">Kitchen</option>
                <option value="clothing">Clothing</option>
            </select>
            <input type="text" class="form-control" name="name" autocomplete="off" placeholder="Search"
                required />
            <button class="btn btn-search" type="submit">
                <i class="w-icon-search"></i>
            </button>
        </form>
        <!-- End of Search Form -->



        <div class="tab-content">

            @include('user/deshboard/sidebar')



        </div>
    </div>



</div>
