<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
        <img src="{{ asset('vendor/admin-lte/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if (auth()->user()->image)
                    <img src="{{ asset('storage/avatars/' . Auth::user()->image )}}" class="img-circle elevation-2" alt="User Image">
                @else
                    <img src="{{ asset('vendor/admin-lte/img/user1-128x128.jpg') }}" class="img-circle elevation-2" alt="User Image">
                @endif
            </div>
            <div class="info">
                <a href="{{ route('my.profile.index') }}" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item ">
                    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-home"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>
               <li class="nav-item dropdown">
                  <a class="nav-link d-flex justify-content-between {{ Request::is('tag*') ? 'active' : '' }}" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <p><i class="nav-icon fa fa-tags"></i> Tags</p> 
                    <i class="dropdown-toggle"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('tag.create') }}">Create</a></li>
                    <li><a class="dropdown-item" href="{{ route('tag.index') }}">List tags</a></li>
                  </ul>
                </li>
                @if (auth()->user()->role == 'SuperAdmin')
                    <li class="nav-item">
                    <a href="{{ route('user.index') }}" class="nav-link {{ Request::is('user*') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            Members
                        </p>
                    </a>
                </li>
                @endif
               
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>