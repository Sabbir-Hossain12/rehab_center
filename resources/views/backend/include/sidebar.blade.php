<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
{{--        <img src="{{asset('public/backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">--}}
        <h2 class="brand-image img-circle ">Dream House</h2>
        <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
       <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('public/backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name ?? '' }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        {{-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> --}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item  {{request()->routeIs('dashboard') ? 'menu-open' : 'inactive'}} ">
                    <a href="{{route('dashboard')}}" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item {{request()->routeIs('slider') ? 'menu-open' : 'inactive'}}">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-image"></i>
                        <p>
                            Slider
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('slider.manage') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Slider</p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item {{request()->routeIs('blogs') ? 'menu-open' : 'inactive'}}">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-blog"></i>
                        <p>
                            Blogs
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('blog.manage') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Blogs</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item {{request()->routeIs('testimonial') ? 'menu-open' : 'inactive'}}">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-blog"></i>
                        <p>
                            Testimonial
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('testimonial.manage') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Testimonial</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item {{request()->routeIs('booking') ? 'menu-open' : 'inactive'}}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-comments"></i>
                        <p>
                            Contact Message
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('contact.manage') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Contact Info</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item {{request()->routeIs('gallery') ? 'menu-open' : 'inactive'}}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-images"></i>
                        <p>
                            Gallery
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('gallery.manage') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Gallery</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item {{request()->routeIs('package') ? 'menu-open' : 'inactive'}}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-archive"></i>
                        <p>
                            Package
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('package.manage') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Package</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item {{request()->routeIs('basic') ? 'menu-open' : 'inactive'}}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-comment-alt"></i>
                        <p>
                            Basic
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('basic.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Basic Attr</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item {{request()->routeIs('team') ? 'menu-open' : 'inactive'}}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Teams
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('team.manage') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage team</p>
                            </a>
                        </li>

                    </ul>
                </li>



            </ul>
        </nav>

        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
