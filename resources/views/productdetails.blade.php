@extends('user\deshboard\app')
@section('maincontent')

    <body>
        <div class="page-wrapper">
            <!-- Start of Header -->
            {{-- <header class="header header-border">
                <div class="header-top">
                    <div class="container">
                        <div class="header-left">
                            <p class="welcome-msg">Welcome to Wolmart Store message or remove it!</p>
                        </div>
                        <div class="header-right">
                            <div class="dropdown">
                                <a href="#currency">USD</a>
                                <div class="dropdown-box">
                                    <a href="#USD">USD</a>
                                    <a href="#EUR">EUR</a>
                                </div>
                            </div>
                            <!-- End of DropDown Menu -->

                            <div class="dropdown">
                                <a href="#language"><img src="assets/images/flags/eng.png" alt="ENG Flag" width="14"
                                        height="8" class="dropdown-image" /> ENG</a>
                                <div class="dropdown-box">
                                    <a href="#ENG">
                                        <img src="assets/images/flags/eng.png" alt="ENG Flag" width="14" height="8"
                                            class="dropdown-image" />
                                        ENG
                                    </a>
                                    <a href="#FRA">
                                        <img src="assets/images/flags/fra.png" alt="FRA Flag" width="14" height="8"
                                            class="dropdown-image" />
                                        FRA
                                    </a>
                                </div>
                            </div>
                            <!-- End of Dropdown Menu -->
                            <span class="divider d-lg-show"></span>
                            <a href="blog.html" class="d-lg-show">Blog</a>
                            <a href="contact-us.html" class="d-lg-show">Contact Us</a>
                            <a href="my-account.html" class="d-lg-show">My Account</a>
                            <a href="assets/ajax/login.html" class="d-lg-show login sign-in"><i
                                    class="w-icon-account"></i>Sign In</a>
                            <span class="delimiter d-lg-show">/</span>
                            <a href="assets/ajax/login.html" class="ml-0 d-lg-show login register">Register</a>
                        </div>
                    </div>
                </div>
                <!-- End of Header Top -->

                <div class="header-middle">
                    <div class="container">
                        <div class="header-left mr-md-4">
                            <a href="#" class="mobile-menu-toggle  w-icon-hamburger" aria-label="menu-toggle">
                            </a>
                            <a href="demo1.html" class="logo ml-lg-0">
                                <img src="assets/images/logo.png" alt="logo" width="144" height="45" />
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
                                <div class="cart-overlay"></div>
                                <a href="#" class="cart-toggle label-down link">
                                    <i class="w-icon-cart">
                                        <span class="cart-count">2</span>
                                    </i>
                                    <span class="cart-label">Cart</span>
                                </a>
                                <div class="dropdown-box">
                                    <div class="cart-header">
                                        <span>Shopping Cart</span>
                                        <a href="#" class="btn-close">Close<i
                                                class="w-icon-long-arrow-right"></i></a>
                                    </div>

                                    <div class="products">
                                        <div class="product product-cart">
                                            <div class="product-detail">
                                                <a href="product-default.html" class="product-name">Beige knitted
                                                    elas<br>tic
                                                    runner shoes</a>
                                                <div class="price-box">
                                                    <span class="product-quantity">1</span>
                                                    <span class="product-price">$25.68</span>
                                                </div>
                                            </div>
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="assets/images/cart/product-1.jpg" alt="product"
                                                        height="84" width="94" />
                                                </a>
                                            </figure>
                                            <button class="btn btn-link btn-close" aria-label="button">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>

                                        <div class="product product-cart">
                                            <div class="product-detail">
                                                <a href="product-default.html" class="product-name">Blue utility
                                                    pina<br>fore
                                                    denim dress</a>
                                                <div class="price-box">
                                                    <span class="product-quantity">1</span>
                                                    <span class="product-price">$32.99</span>
                                                </div>
                                            </div>
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="assets/images/cart/product-2.jpg" alt="product"
                                                        width="84" height="94" />
                                                </a>
                                            </figure>
                                            <button class="btn btn-link btn-close" aria-label="button">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="cart-total">
                                        <label>Subtotal:</label>
                                        <span class="price">$58.67</span>
                                    </div>

                                    <div class="cart-action">
                                        <a href="cart.html" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                                        <a href="checkout.html" class="btn btn-primary  btn-rounded">Checkout</a>
                                    </div>
                                </div>
                                <!-- End of Dropdown Box -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Header Middle -->

                <div class="header-bottom sticky-content fix-top sticky-header">
                    <div class="container">
                        <div class="inner-wrap">
                            <div class="header-left">
                                <div class="dropdown category-dropdown has-border" data-visible="true">
                                    <a href="#" class="category-toggle" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="true" data-display="static"
                                        title="Browse Categories">
                                        <i class="w-icon-category"></i>
                                        <span>Browse Categories</span>
                                    </a>

                                    <div class="dropdown-box">
                                        <ul class="menu vertical-menu category-menu">
                                            <li>
                                                <a href="shop-fullwidth-banner.html">
                                                    <i class="w-icon-tshirt2"></i>Fashion
                                                </a>
                                                <ul class="megamenu">
                                                    <li>
                                                        <h4 class="menu-title">Women</h4>
                                                        <hr class="divider">
                                                        <ul>
                                                            <li><a href="shop-fullwidth-banner.html">New Arrivals</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.html">Best Sellers</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.html">Trending</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Clothing</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Shoes</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Bags</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Accessories</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.html">Jewlery &
                                                                    Watches</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Sale</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <h4 class="menu-title">Men</h4>
                                                        <hr class="divider">
                                                        <ul>
                                                            <li><a href="shop-fullwidth-banner.html">New Arrivals</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.html">Best Sellers</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.html">Trending</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Clothing</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Shoes</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Bags</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Accessories</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.html">Jewlery &
                                                                    Watches</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <div class="banner-fixed menu-banner menu-banner2">
                                                            <figure>
                                                                <img src="assets/images/menu/banner-2.jpg"
                                                                    alt="Menu Banner" width="235" height="347" />
                                                            </figure>
                                                            <div class="banner-content">
                                                                <div class="banner-price-info mb-1 ls-normal">Get up to
                                                                    <strong
                                                                        class="text-primary text-uppercase">20%Off</strong>
                                                                </div>
                                                                <h3 class="banner-title ls-normal">Hot Sales</h3>
                                                                <a href="shop-banner-sidebar.html"
                                                                    class="btn btn-dark btn-sm btn-link btn-slide-right btn-icon-right">
                                                                    Shop Now<i class="w-icon-long-arrow-right"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="shop-fullwidth-banner.html">
                                                    <i class="w-icon-home"></i>Home & Garden
                                                </a>
                                                <ul class="megamenu">
                                                    <li>
                                                        <h4 class="menu-title">Bedroom</h4>
                                                        <hr class="divider">
                                                        <ul>
                                                            <li><a href="shop-fullwidth-banner.html">Beds, Frames &
                                                                    Bases</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Dressers</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Nightstands</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.html">Kid's Beds &
                                                                    Headboards</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Armoires</a></li>
                                                        </ul>

                                                        <h4 class="menu-title mt-1">Living Room</h4>
                                                        <hr class="divider">
                                                        <ul>
                                                            <li><a href="shop-fullwidth-banner.html">Coffee Tables</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.html">Chairs</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Tables</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Futons & Sofa
                                                                    Beds</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Cabinets &
                                                                    Chests</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <h4 class="menu-title">Office</h4>
                                                        <hr class="divider">
                                                        <ul>
                                                            <li><a href="shop-fullwidth-banner.html">Office Chairs</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.html">Desks</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Bookcases</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">File Cabinets</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.html">Breakroom
                                                                    Tables</a></li>
                                                        </ul>

                                                        <h4 class="menu-title mt-1">Kitchen & Dining</h4>
                                                        <hr class="divider">
                                                        <ul>
                                                            <li><a href="shop-fullwidth-banner.html">Dining Sets</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.html">Kitchen Storage
                                                                    Cabinets</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Bashers Racks</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.html">Dining Chairs</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.html">Dining Room
                                                                    Tables</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Bar Stools</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <div class="menu-banner banner-fixed menu-banner3">
                                                            <figure>
                                                                <img src="assets/images/menu/banner-3.jpg"
                                                                    alt="Menu Banner" width="235" height="461" />
                                                            </figure>
                                                            <div class="banner-content">
                                                                <h4
                                                                    class="banner-subtitle font-weight-normal text-white mb-1">
                                                                    Restroom</h4>
                                                                <h3
                                                                    class="banner-title font-weight-bolder text-white ls-normal">
                                                                    Furniture Sale</h3>
                                                                <div
                                                                    class="banner-price-info text-white font-weight-normal ls-25">
                                                                    Up to <span
                                                                        class="text-secondary text-uppercase font-weight-bold">25%
                                                                        Off</span></div>
                                                                <a href="shop-banner-sidebar.html"
                                                                    class="btn btn-white btn-link btn-sm btn-slide-right btn-icon-right">
                                                                    Shop Now<i class="w-icon-long-arrow-right"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="shop-fullwidth-banner.html">
                                                    <i class="w-icon-electronics"></i>Electronics
                                                </a>
                                                <ul class="megamenu">
                                                    <li>
                                                        <h4 class="menu-title">Laptops &amp; Computers</h4>
                                                        <hr class="divider">
                                                        <ul>
                                                            <li><a href="shop-fullwidth-banner.html">Desktop
                                                                    Computers</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Monitors</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Laptops</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Hard Drives &amp;
                                                                    Storage</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Computer
                                                                    Accessories</a></li>
                                                        </ul>

                                                        <h4 class="menu-title mt-1">TV &amp; Video</h4>
                                                        <hr class="divider">
                                                        <ul>
                                                            <li><a href="shop-fullwidth-banner.html">TVs</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Home Audio
                                                                    Speakers</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Projectors</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Media Streaming
                                                                    Devices</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <h4 class="menu-title">Digital Cameras</h4>
                                                        <hr class="divider">
                                                        <ul>
                                                            <li><a href="shop-fullwidth-banner.html">Digital SLR
                                                                    Cameras</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Sports & Action
                                                                    Cameras</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Camera Lenses</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.html">Photo Printer</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.html">Digital Memory
                                                                    Cards</a></li>
                                                        </ul>

                                                        <h4 class="menu-title mt-1">Cell Phones</h4>
                                                        <hr class="divider">
                                                        <ul>
                                                            <li><a href="shop-fullwidth-banner.html">Carrier Phones</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.html">Unlocked Phones</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.html">Phone & Cellphone
                                                                    Cases</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Cellphone
                                                                    Chargers</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <div class="menu-banner banner-fixed menu-banner4">
                                                            <figure>
                                                                <img src="assets/images/menu/banner-4.jpg"
                                                                    alt="Menu Banner" width="235" height="433" />
                                                            </figure>
                                                            <div class="banner-content">
                                                                <h4 class="banner-subtitle font-weight-normal">Deals Of The
                                                                    Week</h4>
                                                                <h3 class="banner-title text-white">Save On Smart EarPhone
                                                                </h3>
                                                                <div
                                                                    class="banner-price-info text-secondary font-weight-bolder text-uppercase text-secondary">
                                                                    20% Off</div>
                                                                <a href="shop-banner-sidebar.html"
                                                                    class="btn btn-white btn-outline btn-sm btn-rounded">Shop
                                                                    Now</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="shop-fullwidth-banner.html">
                                                    <i class="w-icon-furniture"></i>Furniture
                                                </a>
                                                <ul class="megamenu type2">
                                                    <li class="row">
                                                        <div class="col-md-3 col-lg-3 col-6">
                                                            <h4 class="menu-title">Furniture</h4>
                                                            <hr class="divider" />
                                                            <ul>
                                                                <li><a href="shop-fullwidth-banner.html">Sofas &
                                                                        Couches</a>
                                                                </li>
                                                                <li><a href="shop-fullwidth-banner.html">Armchairs</a></li>
                                                                <li><a href="shop-fullwidth-banner.html">Bed Frames</a>
                                                                </li>
                                                                <li><a href="shop-fullwidth-banner.html">Beside Tables</a>
                                                                </li>
                                                                <li><a href="shop-fullwidth-banner.html">Dressing
                                                                        Tables</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-3 col-lg-3 col-6">
                                                            <h4 class="menu-title">Lighting</h4>
                                                            <hr class="divider" />
                                                            <ul>
                                                                <li><a href="shop-fullwidth-banner.html">Light Bulbs</a>
                                                                </li>
                                                                <li><a href="shop-fullwidth-banner.html">Lamps</a></li>
                                                                <li><a href="shop-fullwidth-banner.html">Celling Lights</a>
                                                                </li>
                                                                <li><a href="shop-fullwidth-banner.html">Wall Lights</a>
                                                                </li>
                                                                <li><a href="shop-fullwidth-banner.html">Bathroom
                                                                        Lighting</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-3 col-lg-3 col-6">
                                                            <h4 class="menu-title">Home Accessories</h4>
                                                            <hr class="divider" />
                                                            <ul>
                                                                <li><a href="shop-fullwidth-banner.html">Decorative
                                                                        Accessories</a></li>
                                                                <li><a href="shop-fullwidth-banner.html">Candals &
                                                                        Holders</a></li>
                                                                <li><a href="shop-fullwidth-banner.html">Home Fragrance</a>
                                                                </li>
                                                                <li><a href="shop-fullwidth-banner.html">Mirrors</a></li>
                                                                <li><a href="shop-fullwidth-banner.html">Clocks</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-3 col-lg-3 col-6">
                                                            <h4 class="menu-title">Garden & Outdoors</h4>
                                                            <hr class="divider" />
                                                            <ul>
                                                                <li><a href="shop-fullwidth-banner.html">Garden
                                                                        Furniture</a></li>
                                                                <li><a href="shop-fullwidth-banner.html">Lawn Mowers</a>
                                                                </li>
                                                                <li><a href="shop-fullwidth-banner.html">Pressure
                                                                        Washers</a></li>
                                                                <li><a href="shop-fullwidth-banner.html">All Garden
                                                                        Tools</a></li>
                                                                <li><a href="shop-fullwidth-banner.html">Outdoor Dining</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="row">
                                                        <div class="col-6">
                                                            <div class="banner banner-fixed menu-banner5 br-xs">
                                                                <figure>
                                                                    <img src="assets/images/menu/banner-5.jpg"
                                                                        alt="Banner" width="410" height="123"
                                                                        style="background-color: #D2D2D2;" />
                                                                </figure>
                                                                <div class="banner-content text-right y-50">
                                                                    <h4
                                                                        class="banner-subtitle font-weight-normal text-default text-capitalize">
                                                                        New Arrivals</h4>
                                                                    <h3
                                                                        class="banner-title font-weight-bolder text-capitalize ls-normal">
                                                                        Amazing Sofa</h3>
                                                                    <div
                                                                        class="banner-price-info font-weight-normal ls-normal">
                                                                        Starting at <strong>$125.00</strong></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="banner banner-fixed menu-banner5 br-xs">
                                                                <figure>
                                                                    <img src="assets/images/menu/banner-6.jpg"
                                                                        alt="Banner" width="410" height="123"
                                                                        style="background-color: #9F9888;" />
                                                                </figure>
                                                                <div class="banner-content y-50">
                                                                    <h4
                                                                        class="banner-subtitle font-weight-normal text-white text-capitalize">
                                                                        Best Seller</h4>
                                                                    <h3
                                                                        class="banner-title font-weight-bolder text-capitalize text-white ls-normal">
                                                                        Chair &amp; Lamp</h3>
                                                                    <div
                                                                        class="banner-price-info font-weight-normal ls-normal text-white">
                                                                        From <strong>$165.00</strong></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="shop-fullwidth-banner.html">
                                                    <i class="w-icon-heartbeat"></i>Healthy & Beauty
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-fullwidth-banner.html">
                                                    <i class="w-icon-gift"></i>Gift Ideas
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-fullwidth-banner.html">
                                                    <i class="w-icon-gamepad"></i>Toy & Games
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-fullwidth-banner.html">
                                                    <i class="w-icon-ice-cream"></i>Cooking
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-fullwidth-banner.html">
                                                    <i class="w-icon-ios"></i>Smart Phones
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-fullwidth-banner.html">
                                                    <i class="w-icon-camera"></i>Cameras & Photo
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-fullwidth-banner.html">
                                                    <i class="w-icon-ruby"></i>Accessories
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-banner-sidebar.html"
                                                    class="font-weight-bold text-primary text-uppercase ls-25">
                                                    View All Categories<i class="w-icon-angle-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <nav class="main-nav">
                                    <ul class="menu active-underline">
                                        <li>
                                            <a href="demo1.html">Home</a>
                                        </li>
                                        <li class="active">
                                            <a href="shop-banner-sidebar.html">Shop</a>

                                            <!-- Start of Megamenu -->
                                            <ul class="megamenu">
                                                <li>
                                                    <h4 class="menu-title">Shop Pages</h4>
                                                    <ul>
                                                        <li><a href="shop-banner-sidebar.html">Banner With Sidebar</a></li>
                                                        <li><a href="shop-boxed-banner.html">Boxed Banner</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Full Width Banner</a></li>
                                                        <li><a href="shop-horizontal-filter.html">Horizontal Filter<span
                                                                    class="tip tip-hot">Hot</span></a></li>
                                                        <li><a href="shop-off-canvas.html">Off Canvas Sidebar<span
                                                                    class="tip tip-new">New</span></a></li>
                                                        <li><a href="shop-infinite-scroll.html">Infinite Ajax Scroll</a>
                                                        </li>
                                                        <li><a href="shop-right-sidebar.html">Right Sidebar</a></li>
                                                        <li><a href="shop-both-sidebar.html">Both Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h4 class="menu-title">Shop Layouts</h4>
                                                    <ul>
                                                        <li><a href="shop-grid-3cols.html">3 Columns Mode</a></li>
                                                        <li><a href="shop-grid-4cols.html">4 Columns Mode</a></li>
                                                        <li><a href="shop-grid-5cols.html">5 Columns Mode</a></li>
                                                        <li><a href="shop-grid-6cols.html">6 Columns Mode</a></li>
                                                        <li><a href="shop-grid-7cols.html">7 Columns Mode</a></li>
                                                        <li><a href="shop-grid-8cols.html">8 Columns Mode</a></li>
                                                        <li><a href="shop-list.html">List Mode</a></li>
                                                        <li><a href="shop-list-sidebar.html">List Mode With Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h4 class="menu-title">Product Pages</h4>
                                                    <ul>
                                                        <li><a href="product-variable.html">Variable Product</a></li>
                                                        <li><a href="product-featured.html">Featured &amp; Sale</a></li>
                                                        <li><a href="product-accordion.html">Data In Accordion</a></li>
                                                        <li><a href="product-section.html">Data In Sections</a></li>
                                                        <li><a href="product-swatch.html">Image Swatch</a></li>
                                                        <li><a href="product-extended.html">Extended Info</a>
                                                        </li>
                                                        <li><a href="product-without-sidebar.html">Without Sidebar</a></li>
                                                        <li><a href="product-video.html">360<sup>o</sup> &amp; Video<span
                                                                    class="tip tip-new">New</span></a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h4 class="menu-title">Product Layouts</h4>
                                                    <ul>
                                                        <li><a href="product-default.html">Default<span
                                                                    class="tip tip-hot">Hot</span></a></li>
                                                        <li><a href="product-vertical.html">Vertical Thumbs</a></li>
                                                        <li><a href="product-grid.html">Grid Images</a></li>
                                                        <li><a href="product-masonry.html">Masonry</a></li>
                                                        <li><a href="product-gallery.html">Gallery</a></li>
                                                        <li><a href="product-sticky-info.html">Sticky Info</a></li>
                                                        <li><a href="product-sticky-thumb.html">Sticky Thumbs</a></li>
                                                        <li><a href="product-sticky-both.html">Sticky Both</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <!-- End of Megamenu -->
                                        </li>
                                        <li>
                                            <a href="vendor-dokan-store.html">Vendor</a>
                                            <ul>
                                                <li>
                                                    <a href="vendor-dokan-store-list.html">Store Listing</a>
                                                    <ul>
                                                        <li><a href="vendor-dokan-store-list.html">Store listing 1</a></li>
                                                        <li><a href="vendor-wcfm-store-list.html">Store listing 2</a></li>
                                                        <li><a href="vendor-wcmp-store-list.html">Store listing 3</a></li>
                                                        <li><a href="vendor-wc-store-list.html">Store listing 4</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="vendor-dokan-store.html">Vendor Store</a>
                                                    <ul>
                                                        <li><a href="vendor-dokan-store.html">Vendor Store 1</a></li>
                                                        <li><a href="vendor-wcfm-store-product-grid.html">Vendor Store
                                                                2</a>
                                                        </li>
                                                        <li><a href="vendor-wcmp-store-product-grid.html">Vendor Store
                                                                3</a>
                                                        </li>
                                                        <li><a href="vendor-wc-store-product-grid.html">Vendor Store 4</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="blog.html">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Classic</a></li>
                                                <li><a href="blog-listing.html">Listing</a></li>
                                                <li>
                                                    <a href="blog-grid-3cols.html">Grid</a>
                                                    <ul>
                                                        <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                                        <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                                        <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                                        <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="blog-masonry-3cols.html">Masonry</a>
                                                    <ul>
                                                        <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                                        <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                                        <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                                        <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="blog-mask-grid.html">Mask</a>
                                                    <ul>
                                                        <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                                        <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="post-single.html">Single Post</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="about-us.html">Pages</a>
                                            <ul>

                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="become-a-vendor.html">Become A Vendor</a></li>
                                                <li><a href="contact-us.html">Contact Us</a></li>
                                                <li><a href="faq.html">FAQs</a></li>
                                                <li><a href="error-404.html">Error 404</a></li>
                                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="compare.html">Compare</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="elements.html">Elements</a>
                                            <ul>
                                                <li><a href="element-accordions.html">Accordions</a></li>
                                                <li><a href="element-alerts.html">Alert &amp; Notification</a></li>
                                                <li><a href="element-blog-posts.html">Blog Posts</a></li>
                                                <li><a href="element-buttons.html">Buttons</a></li>
                                                <li><a href="element-cta.html">Call to Action</a></li>
                                                <li><a href="element-icons.html">Icons</a></li>
                                                <li><a href="element-icon-boxes.html">Icon Boxes</a></li>
                                                <li><a href="element-instagrams.html">Instagrams</a></li>
                                                <li><a href="element-categories.html">Product Category</a></li>
                                                <li><a href="element-products.html">Products</a></li>
                                                <li><a href="element-tabs.html">Tabs</a></li>
                                                <li><a href="element-testimonials.html">Testimonials</a></li>
                                                <li><a href="element-titles.html">Titles</a></li>
                                                <li><a href="element-typography.html">Typography</a></li>

                                                <li><a href="element-vendors.html">Vendors</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-right">
                                <a href="#" class="d-xl-show"><i class="w-icon-map-marker mr-1"></i>Track Order</a>
                                <a href="#"><i class="w-icon-sale"></i>Daily Deals</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header> --}}
            <!-- End of Header -->


            <!-- Start of Main -->
            <main class="main mt-3 mb-10 pb-1">
                <!-- Start of Breadcrumb -->
                {{-- <nav class="breadcrumb-nav container">
                    <ul class="breadcrumb bb-no">
                        <li><a href="demo1.html">Home</a></li>
                        <li>Products</li>
                    </ul>
                    <ul class="product-nav list-style-none">
                        <li class="product-nav-prev">
                            <a href="#">
                                <i class="w-icon-angle-left"></i>
                            </a>
                            <span class="product-nav-popup">
                                <img src="assets/images/products/product-nav-prev.jpg" alt="Product" width="110"
                                    height="110" />
                                <span class="product-name">Soft Sound Maker</span>
                            </span>
                        </li>
                        <li class="product-nav-next">
                            <a href="#">
                                <i class="w-icon-angle-right"></i>
                            </a>
                            <span class="product-nav-popup">
                                <img src="assets/images/products/product-nav-next.jpg" alt="Product" width="110"
                                    height="110" />
                                <span class="product-name">Fabulous Sound Speaker</span>
                            </span>
                        </li>
                    </ul>
                </nav> --}}
                <!-- End of Breadcrumb -->

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

                                                <div class="product-price"><ins
                                                        class="new-price">${{ $item->price }}</ins></div>

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
                                                        <a href="#" class="color"
                                                            style="background-color: #ffcc01"></a>
                                                        <a href="#" class="color"
                                                            style="background-color: #ca6d00;"></a>
                                                        <a href="#" class="color"
                                                            style="background-color: #1c93cb;"></a>
                                                        <a href="#" class="color"
                                                            style="background-color: #ccc;"></a>
                                                        <a href="#" class="color"
                                                            style="background-color: #333;"></a>
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
                            <a href="#product-tab-specification" class="nav-link">Specification</a>
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
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit,
                                        sed do eiusmod tempor incididunt arcu cursus vitae congue mauris.
                                        Sagittis id consectetur purus ut. Tellus rutrum tellus pelle Vel
                                        pretium lectus quam id leo in vitae turpis massa.</p>
                                    <ul class="list-type-check">
                                        <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis
                                            elit.
                                        </li>
                                        <li>Vivamus finibus vel mauris ut vehicula.</li>
                                        <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6 mb-5">
                                    <div class="banner banner-video product-video br-xs">
                                        <figure class="banner-media">
                                            <a href="#">
                                                <img src="assets/images/products/video-banner-610x300.jpg" alt="banner"
                                                    width="610" height="300" style="background-color: #bebebe;">
                                            </a>
                                            <a class="btn-play-video btn-iframe"
                                                href="assets/video/memory-of-a-woman.mp4"></a>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="row cols-md-3">
                                <div class="mb-3">
                                    <h5 class="sub-title font-weight-bold"><span class="mr-3">1.</span>Free
                                        Shipping &amp; Return</h5>
                                    <p class="detail pl-5">We offer free shipping for products on orders
                                        above 50$ and offer free delivery for all orders in US.</p>
                                </div>
                                <div class="mb-3">
                                    <h5 class="sub-title font-weight-bold"><span>2.</span>Free and Easy
                                        Returns</h5>
                                    <p class="detail pl-5">We guarantee our products and you could get back
                                        all of your money anytime you want in 30 days.</p>
                                </div>
                                <div class="mb-3">
                                    <h5 class="sub-title font-weight-bold"><span>3.</span>Special Financing
                                    </h5>
                                    <p class="detail pl-5">Get 20%-50% off items over 50$ for a month or
                                        over 250$ for a year with our special credit card.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="product-tab-specification">
                            <ul class="list-none">
                                <li>
                                    <label>Model</label>
                                    <p>Skysuite 320</p>
                                </li>
                                <li>
                                    <label>Color</label>
                                    <p>Black</p>
                                </li>
                                <li>
                                    <label>Size</label>
                                    <p>Large, Small</p>
                                </li>
                                <li>
                                    <label>Guarantee Time</label>
                                    <p>3 Months</p>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane" id="product-tab-vendor">
                            <div class="row mb-3">
                                <div class="col-md-6 mb-4">
                                    <figure class="vendor-banner br-sm">
                                        <img src="assets/images/products/vendor-banner.jpg" alt="Vendor Banner"
                                            width="610" height="295" style="background-color: #353B55;" />
                                    </figure>
                                </div>
                                <div class="col-md-6 pl-2 pl-md-6 mb-4">
                                    <div class="vendor-user">
                                        <figure class="vendor-logo mr-4">
                                            <a href="#">
                                                <img src="assets/images/products/vendor-logo.jpg" alt="Vendor Logo"
                                                    width="80" height="80" />
                                            </a>
                                        </figure>
                                        <div>
                                            <div class="vendor-name"><a href="#">Jone Doe</a></div>
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
                                            <label>Phone:</label>
                                            <a href="#tel:">1234567890</a>
                                        </li>
                                    </ul>
                                    <a href="vendor-dokan-store.html"
                                        class="btn btn-dark btn-link btn-underline btn-icon-right">Visit
                                        Store<i class="w-icon-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <p class="mb-5"><strong class="text-dark">L</strong>orem ipsum dolor sit
                                amet,
                                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua.
                                Venenatis tellus in metus vulputate eu scelerisque felis. Vel pretium
                                lectus quam id leo in vitae turpis massa. Nunc id cursus metus aliquam.
                                Libero id faucibus nisl tincidunt eget. Aliquam id diam maecenas ultricies
                                mi eget mauris. Volutpat ac tincidunt vitae semper quis lectus. Vestibulum
                                mattis ullamcorper velit sed. A arcu cursus vitae congue mauris.
                            </p>
                            <p class="mb-2"><strong class="text-dark">A</strong> arcu cursus vitae
                                congue
                                mauris. Sagittis id consectetur purus
                                ut. Tellus rutrum tellus pellentesque eu tincidunt tortor aliquam nulla.
                                Diam in
                                arcu cursus euismod quis. Eget sit amet tellus cras adipiscing enim eu. In
                                fermentum et sollicitudin ac orci phasellus. A condimentum vitae sapien
                                pellentesque
                                habitant morbi tristique senectus et. In dictum non consectetur a erat. Nunc
                                scelerisque viverra mauris in aliquam sem fringilla.</p>
                        </div>
                        <div class="tab-pane" id="product-tab-reviews">
                            <div class="row mb-4">
                                <div class="col-xl-4 col-lg-5 mb-4">
                                    <div class="ratings-wrapper">
                                        <div class="avg-rating-container">
                                            <h4 class="avg-mark font-weight-bolder ls-50">3.3</h4>
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
                                        <form action="#" method="POST" class="review-form">
                                            <div class="rating-form">
                                                <label for="rating">Your Rating Of This Product :</label>
                                                <span class="rating-stars">
                                                    <a class="star-1" href="#">1</a>
                                                    <a class="star-2" href="#">2</a>
                                                    <a class="star-3" href="#">3</a>
                                                    <a class="star-4" href="#">4</a>
                                                    <a class="star-5" href="#">5</a>
                                                </span>
                                                <select name="rating" id="rating" required=""
                                                    style="display: none;">
                                                    <option value="">Rate…</option>
                                                    <option value="5">Perfect</option>
                                                    <option value="4">Good</option>
                                                    <option value="3">Average</option>
                                                    <option value="2">Not that bad</option>
                                                    <option value="1">Very poor</option>
                                                </select>
                                            </div>
                                            <textarea cols="30" rows="6" placeholder="Write Your Review Here..." class="form-control"
                                                id="review"></textarea>
                                            <div class="row gutter-md">
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" placeholder="Your Name"
                                                        id="author">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" placeholder="Your Email"
                                                        id="email_1">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" class="custom-checkbox" id="save-checkbox">
                                                <label for="save-checkbox">Save my name, email, and website
                                                    in this browser for the next time I comment.</label>
                                            </div>
                                            <button type="submit" class="btn btn-dark">Submit
                                                Review</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="tab tab-nav-boxed tab-nav-outline tab-nav-center">
                                <ul class="nav nav-tabs" role="tablist">
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
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="show-all">
                                        <ul class="comments list-style-none">
                                            <li class="comment">
                                                <div class="comment-body">
                                                    <figure class="comment-avatar">
                                                        <img src="assets/images/agents/1-100x100.png"
                                                            alt="Commenter Avatar" width="90" height="90">
                                                    </figure>
                                                    <div class="comment-content">
                                                        <h4 class="comment-author">
                                                            <a href="#">John Doe</a>
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
                                                            <div class="review-image">
                                                                <a href="#">
                                                                    <figure>
                                                                        <img src="assets/images/products/default/review-img-1.jpg"
                                                                            width="60" height="60"
                                                                            alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                            data-zoom-image="assets/images/products/default/review-img-1-800x900.jpg" />
                                                                    </figure>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="comment">
                                                <div class="comment-body">
                                                    <figure class="comment-avatar">
                                                        <img src="assets/images/agents/2-100x100.png"
                                                            alt="Commenter Avatar" width="90" height="90">
                                                    </figure>
                                                    <div class="comment-content">
                                                        <h4 class="comment-author">
                                                            <a href="#">John Doe</a>
                                                            <span class="comment-date">March 22, 2021 at
                                                                1:52 pm</span>
                                                        </h4>
                                                        <div class="ratings-container comment-rating">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 80%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <p>Nullam a magna porttitor, dictum risus nec,
                                                            faucibus sapien.
                                                            Ultrices eros in cursus turpis massa tincidunt
                                                            ante in nibh mauris cursus mattis.
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
                                                            <div class="review-image">
                                                                <a href="#">
                                                                    <figure>
                                                                        <img src="assets/images/products/default/review-img-2.jpg"
                                                                            width="60" height="60"
                                                                            alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                            data-zoom-image="assets/images/products/default/review-img-2.jpg" />
                                                                    </figure>
                                                                </a>
                                                                <a href="#">
                                                                    <figure>
                                                                        <img src="assets/images/products/default/review-img-3.jpg"
                                                                            width="60" height="60"
                                                                            alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                            data-zoom-image="assets/images/products/default/review-img-3.jpg" />
                                                                    </figure>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="comment">
                                                <div class="comment-body">
                                                    <figure class="comment-avatar">
                                                        <img src="assets/images/agents/3-100x100.png"
                                                            alt="Commenter Avatar" width="90" height="90">
                                                    </figure>
                                                    <div class="comment-content">
                                                        <h4 class="comment-author">
                                                            <a href="#">John Doe</a>
                                                            <span class="comment-date">March 22, 2021 at
                                                                1:21 pm</span>
                                                        </h4>
                                                        <div class="ratings-container comment-rating">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 60%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <p>In fermentum et sollicitudin ac orci phasellus. A
                                                            condimentum vitae
                                                            sapien pellentesque habitant morbi tristique
                                                            senectus et. In dictum
                                                            non consectetur a erat. Nunc scelerisque viverra
                                                            mauris in aliquam sem fringilla.</p>
                                                        <div class="comment-action">
                                                            <a href="#"
                                                                class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                <i class="far fa-thumbs-up"></i>Helpful
                                                                (0)
                                                            </a>
                                                            <a href="#"
                                                                class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                <i class="far fa-thumbs-down"></i>Unhelpful
                                                                (1)
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="helpful-positive">
                                        <ul class="comments list-style-none">
                                            <li class="comment">
                                                <div class="comment-body">
                                                    <figure class="comment-avatar">
                                                        <img src="assets/images/agents/1-100x100.png"
                                                            alt="Commenter Avatar" width="90" height="90">
                                                    </figure>
                                                    <div class="comment-content">
                                                        <h4 class="comment-author">
                                                            <a href="#">John Doe</a>
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
                                                                <i class="far fa-thumbs-up"></i>Helpful
                                                                (1)
                                                            </a>
                                                            <a href="#"
                                                                class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                <i class="far fa-thumbs-down"></i>Unhelpful
                                                                (0)
                                                            </a>
                                                            <div class="review-image">
                                                                <a href="#">
                                                                    <figure>
                                                                        <img src="assets/images/products/default/review-img-1.jpg"
                                                                            width="60" height="60"
                                                                            alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                            data-zoom-image="assets/images/products/default/review-img-1.jpg" />
                                                                    </figure>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="comment">
                                                <div class="comment-body">
                                                    <figure class="comment-avatar">
                                                        <img src="assets/images/agents/2-100x100.png"
                                                            alt="Commenter Avatar" width="90" height="90">
                                                    </figure>
                                                    <div class="comment-content">
                                                        <h4 class="comment-author">
                                                            <a href="#">John Doe</a>
                                                            <span class="comment-date">March 22, 2021 at
                                                                1:52 pm</span>
                                                        </h4>
                                                        <div class="ratings-container comment-rating">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 80%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <p>Nullam a magna porttitor, dictum risus nec,
                                                            faucibus sapien.
                                                            Ultrices eros in cursus turpis massa tincidunt
                                                            ante in nibh mauris cursus mattis.
                                                            Cras ornare arcu dui vivamus arcu felis bibendum
                                                            ut tristique.</p>
                                                        <div class="comment-action">
                                                            <a href="#"
                                                                class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                <i class="far fa-thumbs-up"></i>Helpful
                                                                (1)
                                                            </a>
                                                            <a href="#"
                                                                class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                <i class="far fa-thumbs-down"></i>Unhelpful
                                                                (0)
                                                            </a>
                                                            <div class="review-image">
                                                                <a href="#">
                                                                    <figure>
                                                                        <img src="assets/images/products/default/review-img-2.jpg"
                                                                            width="60" height="60"
                                                                            alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                            data-zoom-image="assets/images/products/default/review-img-2-800x900.jpg" />
                                                                    </figure>
                                                                </a>
                                                                <a href="#">
                                                                    <figure>
                                                                        <img src="assets/images/products/default/review-img-3.jpg"
                                                                            width="60" height="60"
                                                                            alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                            data-zoom-image="assets/images/products/default/review-img-3-800x900.jpg" />
                                                                    </figure>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="helpful-negative">
                                        <ul class="comments list-style-none">
                                            <li class="comment">
                                                <div class="comment-body">
                                                    <figure class="comment-avatar">
                                                        <img src="assets/images/agents/3-100x100.png"
                                                            alt="Commenter Avatar" width="90" height="90">
                                                    </figure>
                                                    <div class="comment-content">
                                                        <h4 class="comment-author">
                                                            <a href="#">John Doe</a>
                                                            <span class="comment-date">March 22, 2021 at
                                                                1:21 pm</span>
                                                        </h4>
                                                        <div class="ratings-container comment-rating">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 60%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <p>In fermentum et sollicitudin ac orci phasellus. A
                                                            condimentum vitae
                                                            sapien pellentesque habitant morbi tristique
                                                            senectus et. In dictum
                                                            non consectetur a erat. Nunc scelerisque viverra
                                                            mauris in aliquam sem fringilla.</p>
                                                        <div class="comment-action">
                                                            <a href="#"
                                                                class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                <i class="far fa-thumbs-up"></i>Helpful
                                                                (0)
                                                            </a>
                                                            <a href="#"
                                                                class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                <i class="far fa-thumbs-down"></i>Unhelpful
                                                                (1)
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="highest-rating">
                                        <ul class="comments list-style-none">
                                            <li class="comment">
                                                <div class="comment-body">
                                                    <figure class="comment-avatar">
                                                        <img src="assets/images/agents/2-100x100.png"
                                                            alt="Commenter Avatar" width="90" height="90">
                                                    </figure>
                                                    <div class="comment-content">
                                                        <h4 class="comment-author">
                                                            <a href="#">John Doe</a>
                                                            <span class="comment-date">March 22, 2021 at
                                                                1:52 pm</span>
                                                        </h4>
                                                        <div class="ratings-container comment-rating">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 80%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <p>Nullam a magna porttitor, dictum risus nec,
                                                            faucibus sapien.
                                                            Ultrices eros in cursus turpis massa tincidunt
                                                            ante in nibh mauris cursus mattis.
                                                            Cras ornare arcu dui vivamus arcu felis bibendum
                                                            ut tristique.</p>
                                                        <div class="comment-action">
                                                            <a href="#"
                                                                class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                <i class="far fa-thumbs-up"></i>Helpful
                                                                (1)
                                                            </a>
                                                            <a href="#"
                                                                class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                <i class="far fa-thumbs-down"></i>Unhelpful
                                                                (0)
                                                            </a>
                                                            <div class="review-image">
                                                                <a href="#">
                                                                    <figure>
                                                                        <img src="assets/images/products/default/review-img-2.jpg"
                                                                            width="60" height="60"
                                                                            alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                            data-zoom-image="assets/images/products/default/review-img-2-800x900.jpg" />
                                                                    </figure>
                                                                </a>
                                                                <a href="#">
                                                                    <figure>
                                                                        <img src="assets/images/products/default/review-img-3.jpg"
                                                                            width="60" height="60"
                                                                            alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                            data-zoom-image="assets/images/products/default/review-img-3-800x900.jpg" />
                                                                    </figure>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="lowest-rating">
                                        <ul class="comments list-style-none">
                                            <li class="comment">
                                                <div class="comment-body">
                                                    <figure class="comment-avatar">
                                                        <img src="assets/images/agents/1-100x100.png"
                                                            alt="Commenter Avatar" width="90" height="90">
                                                    </figure>
                                                    <div class="comment-content">
                                                        <h4 class="comment-author">
                                                            <a href="#">John Doe</a>
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
                                                                <i class="far fa-thumbs-up"></i>Helpful
                                                                (1)
                                                            </a>
                                                            <a href="#"
                                                                class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                <i class="far fa-thumbs-down"></i>Unhelpful
                                                                (0)
                                                            </a>
                                                            <div class="review-image">
                                                                <a href="#">
                                                                    <figure>
                                                                        <img src="assets/images/products/default/review-img-3.jpg"
                                                                            width="60" height="60"
                                                                            alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                            data-zoom-image="assets/images/products/default/review-img-3-800x900.jpg" />
                                                                    </figure>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
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
                            <div class="swiper-slide product">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="assets/images/products/default/1-1.jpg" alt="Product" width="300"
                                            height="338" />
                                        <img src="assets/images/products/default/1-2.jpg" alt="Product" width="300"
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
                                        <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                            View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat"><a href="shop-banner-sidebar.html">Accessories</a>
                                    </div>
                                    <h4 class="product-name"><a href="product-default.html">Sticky
                                            Pencil</a>
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
                                        <div class="product-price">$20.00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide product">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('userstyle') }}/assets/images/products/default/2.jpg"
                                            alt="Product" width="300" height="338" />
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
                                        <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                            View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat"><a href="shop-banner-sidebar.html">Electronics</a>
                                    </div>
                                    <h4 class="product-name"><a href="product-default.html">Mini
                                            Multi-Functional Cooker</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 80%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(5
                                            reviews)</a>
                                    </div>
                                    <div class="product-pa-wrapper">
                                        <div class="product-price">
                                            <ins class="new-price">$480.00</ins><del class="old-price">$534.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide product">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="assets/images/products/default/3.jpg" alt="Product" width="300"
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
                                        <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                            View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat"><a href="shop-banner-sidebar.html">Sports</a></div>
                                    <h4 class="product-name"><a href="product-default.html">Skate
                                            Pan</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(3
                                            reviews)</a>
                                    </div>
                                    <div class="product-pa-wrapper">
                                        <div class="product-price">
                                            <ins class="new-price">$278.00</ins><del class="old-price">$310.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide product">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="assets/images/products/default/4-1.jpg" alt="Product" width="300"
                                            height="338" />
                                        <img src="assets/images/products/default/4-2.jpg" alt="Product" width="300"
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
                                        <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                            View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat"><a href="shop-banner-sidebar.html">Accessories</a>
                                    </div>
                                    <h4 class="product-name"><a href="product-default.html">Clip
                                            Attachment</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(5
                                            reviews)</a>
                                    </div>
                                    <div class="product-pa-wrapper">
                                        <div class="product-price">$40.00</div>
                                    </div>
                                </div>
                            </div>
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
                                            <a href="{{ route('views.product', ['id' => $bal->id]) }}"
                                                class="btn-product ">
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a
                                                href="product-default.html">{{ $bal->product_name }}</a>
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
