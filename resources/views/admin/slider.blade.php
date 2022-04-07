<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center" >
    {{-- <i class="fa-regular fa-laptop"></i> --}}
    <h1> Laptop World </h1>
    {{-- <img class="animation__shake" src="" alt="LAPTOP WORLD" height="60" width="60"> --}}
    <!-- {{ asset('dist/img/LaptopLogo.png') }} -->
</div>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('admin.home') }}" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#"
                role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="add.html" class="brand-link">
        <img src="#" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Laptop World</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/avatar5.png') }}" class="img-circle elevation-2" alt="User Image">
                <div class="info">
                </div>
                <a href="#" class="d-block">Jayesh</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="{{ route('admin.home') }}" class="nav-link">
                        {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                        <p>
                            Dashboard
                            {{-- <i class="right fas fa-angle-left"></i> --}}
                        </p>
                    </a>

                </li>
                <li class="nav-item has-treeview menu-open colour-menu">
                    <a href="javascript:void(0)" class="nav-link">
                        <i class="fa-solid fa-user"></i>
                        <p>
                            Users
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ">
                            <a href="{{ route('allorder.users') }}" class="nav-link list-colour">
                                <i class="fas fa-align-justify"></i>
                                <p>User List</p>
                            </a>
  
                        </li>
                        {{-- <li class="nav-item">
                            <a href="{{ route('colour.add') }}" class="nav-link">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                <p>Add</p>
                            </a>
                        </li> --}}
                    </ul>
                <li class="nav-item has-treeview menu-open colour-menu">
                  <a href="javascript:void(0)" class="nav-link">
                      <i class="fa-solid fa-truck-fast"></i>
                      <p>
                          Orders
                          <i class="right fas fa-angle-left"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item ">
                          <a href="{{ route('allorder.index') }}" class="nav-link list-colour">
                              <i class="fas fa-align-justify"></i>
                              <p>Orders List</p>
                          </a>

                      </li>
                      
                  </ul>
                </li>

                <li class="nav-item has-treeview menu-open category-menu">
                    <a href="javascript:void(0)" class="nav-link">
                        <i class="nav-icon fas fa-tag"></i>
                        <p>
                            category
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ">
                            <a href="{{ route('category.index') }}" class="nav-link list-category">
                                <i class="fas fa-align-justify"></i>
                                <p>List</p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="{{ route('category.add') }}" class="nav-link">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                <p>Add</p>
                            </a>
                        </li>
                    </ul>
                  </li>


                <li class="nav-item has-treeview menu-open colour-menu">
                    <a href="javascript:void(0)" class="nav-link">
                        <i class="fas fa-palette"></i>
                        <p>
                            colour
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ">
                            <a href="{{ route('colour.index') }}" class="nav-link list-colour">
                                <i class="fas fa-align-justify"></i>
                                <p>List</p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="{{ route('colour.add') }}" class="nav-link">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                <p>Add</p>
                            </a>
                        </li>
                    </ul>
                  </li>


                <li class="nav-item has-treeview menu-open product-menu">
                    <a href="javascript:void(0)" class="nav-link">
                        <i class="nav-icon fas fa-laptop"></i>
                        <p>
                            product
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ">
                            <a href="{{ route('product.index') }}" class="nav-link list-product">
                                <i class="fas fa-align-justify"></i>
                                <p>List</p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="{{ route('product.add') }}" class="nav-link">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                <p>Add</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a class="nav-link " href="{{ route('logout') }}" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                        <p>Logout</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
