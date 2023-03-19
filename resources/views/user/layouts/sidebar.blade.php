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
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
        <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>


    <div class="offcanvas-body">

        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>

            <li class="nav-item dropdown">
                {{-- <div class="dropdown-menu dropdown-menu-dark">
                    <select id="category" name="category">
                        <option class="dropdown-item" value="">All Categories</option>
                        <option class="dropdown-item" value="4">Fashion</option>
                        <option class="dropdown-item" value="5">Furniture</option>
                        <option class="dropdown-item" value="6">Shoes</option>
                        <option class="dropdown-item" value="7">Sports</option>
                        <option class="dropdown-item" value="8">Games</option>
                        <option class="dropdown-item" value="9">Computers</option>
                        <option  class="dropdown-item" value="10">Electronics</option>
                        <option class="dropdown-item" value="11">Kitchen</option>
                        <option class="dropdown-item" value="12">Clothing</option>
                    </select>
                </div> --}}
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Categories
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    
                    <li><a class="dropdown-item" href="">Fashion</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>

        </ul>

        {{-- <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success" type="submit">Search</button>
        </form> --}}
    </div>
</div>
