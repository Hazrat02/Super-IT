<!-- Main Sidebar Container -->
<aside style="background-color: #BBD9DD" class="main-sidebar  elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
        <img src="{{ asset('img\super it.jpg') }}" alt="Super-IT Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Super-IT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src=" @if (isset(Auth::user()->socialite_id))
                        {{Auth::user()->profile_photo_path}}
                        @else
                        
                        @if (isset(Auth::user()->profile_photo_path))

                            {{asset('storage\profile')}}\{{Auth::user()->profile_photo_path}}
                            @else
                            https://cdn-icons-png.flaticon.com/512/149/149071.png @endif 
                            @endif" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <p href="#" class="d-block">{{Auth()->user()->name}}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link @isset($page)
                                @if ($page == 'dashboard')
                                active
                                @endif
                                @endisset">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('User.Manage') }}"
                                class="nav-link
                      
                                @isset($page)
                                @if ($page == 'usermanage')
                                active
                                @endif
                                @endisset">
                                <i class="far fa-circle nav-icon"></i>
                                <p>User Manage</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('Money.Manage') }}"
                                class="nav-link
                            
                            @isset($page)
                                @if ($page == 'moneymanage')
                                active
                                @endif
                            @endisset">

                                <i class="far fa-circle nav-icon"></i>
                                <p>Money Manage</p>
                            </a>
                        </li>
                        
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link @isset($page)
                                @if ($page == 'allproduct')
                                active
                                @endif
                                @endisset">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Product Manage
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ">
                            <a href="{{route('allproduct')}}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Product</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('productreviews')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Product Comment</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/charts/inline.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Filter product</p>
                            </a>
                        </li>
                        
                    </ul>
                </li>
                <li class="nav-item ">
                    <a href="#" class="nav-link @isset($page)
                                @if ($page == 'order')
                                active
                                @endif
                                @endisset">
                        <i  class='fas'>&#xf218;</i>
                        <p>
                            Order Manage
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ">
                            <a href="{{route('order.manage')}}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Order</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/charts/flot.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Flot</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/charts/inline.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inline</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/charts/uplot.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>uPlot</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Mailbox
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/mailbox/mailbox.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inbox</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/mailbox/compose.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contact Us</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/mailbox/read-mail.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Read</p>
                            </a>
                        </li>
                    </ul>
                </li>
            
                <li class="nav-header">Action</li>
                <li class="nav-item">
                    <label class="nav-link" for="logout"> <i class="nav-icon far fa-circle text-denger"></i>
                        <p>logout</p></label>
                    <form class="d-hidden"  action="{{ route('logout') }}" method="POST">
                        @csrf
                       
                        <input id="logout" class="btn btn-primary" name="logout" type="hidden"/>
                    </form>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" >
                        <i class="nav-icon far fa-circle text-warning"></i>
                        <p>Delete Acount</p>
                    </a>
                </li>
                
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
