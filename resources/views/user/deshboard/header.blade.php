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
                    <form method="get" action="#"
                        class="header-search hs-expanded hs-round d-none d-md-flex input-wrapper">
                        <div class="select-box">
                            <select id="category" name="category">
                                <option value="">All Categories</option>
                                <option value="4">Fashion</option>
                                <option value="5">Furniture</option>
                                <option value="6">Shoes</option>
                                <option value="7">Sports</option>
                                <option value="8">Games</option>
                                <option value="9">Computers</option>
                                <option value="10">Electronics</option>
                                <option value="11">Kitchen</option>
                                <option value="12">Clothing</option>
                            </select>
                        </div>
                        <input type="text" class="form-control" name="search" id="search"
                            placeholder="Search in..." required />
                        <button class="btn btn-search" type="submit"><i class="w-icon-search"></i>
                        </button>
                    </form>
                </div>
                <div class="header-right ml-4">
                    <div class="header-call d-xs-show d-lg-flex align-items-center">
                        <a href="tel:#" class="w-icon-call"></a>
                        <div class="call-info d-lg-show">
                            <h4 class="chat font-weight-normal font-size-md text-normal ls-normal text-light mb-0">
                                <a href="mailto:#" class="text-capitalize">Live Chat</a> or :
                            </h4>
                            <a href="tel:#" class="phone-number font-weight-bolder ls-50">0(800)123-456</a>
                        </div>
                    </div>
                    <a class="wishlist label-down link d-xs-show" href="wishlist.html">
                        <i class="w-icon-heart"></i>
                        <span class="wishlist-label d-lg-show">Wishlist</span>
                    </a>
                    <a class="compare label-down link d-xs-show" href="compare.html">
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
<a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i
        class="w-icon-angle-up"></i> <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
        <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35"
            cy="35" r="34" style="stroke-dasharray: 16.4198, 400;">
        </circle>
    </svg> </a>
<!-- End of Scroll Top -->

<!-- Start of Mobile Menu -->
<div style="" class="mobile-menu-wrapper ">
    <div class="mobile-menu-overlay"></div>
    <!-- End of .mobile-menu-overlay -->

    <a href="#" class="mobile-menu-close"><i class="close-icon"></i></a>
    <!-- End of .mobile-menu-close -->

    <div style="background-color: hsla(188, 82%, 85%, 0.745) !important;" class="mobile-menu-container scrollable">
        <form action="#" method="get" class="input-wrapper">
            <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search"
                required />
            <button class="btn btn-search" type="submit">
                <i class="w-icon-search text-dark"></i>
            </button>
        </form>
        <!-- End of Search Form -->
        <div class="tab tab-vertical row ">

            <ul class="nav nav-tabs mb-6 " role="tablist">
                @include('user\deshboard\sidebar')
            </ul>

        </div>
    </div>
</div>
