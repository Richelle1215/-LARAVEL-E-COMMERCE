<ul
    class="navbar-nav sidebar sidebar-dark accordion"
    id="accordionSidebar"
    style="
        background-image: linear-gradient(135deg, rgba(193, 134, 93, 0.9), rgba(27, 27, 24, 0.9));
        width: 280px !important; 
        min-width: 300px !important; 
        max-width: 300px !important;
        font-size: 15px;
        text-bold;
    "
>

    
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-text mx-3">Elle Fashion - Admin</div>
    </a>

    <hr class="sidebar-divider my-0">

    <!-- Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Products -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('products.index') }}">
            <i class="fas fa-fw fa-box-open"></i>
            <span>Products</span>
        </a>
    </li>

    <!-- Categories -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('categories.index') }}">
            <i class="fas fa-fw fa-sitemap"></i>
            <span>Categories</span>
        </a>
    </li>

    <hr class="sidebar-divider">


  
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/logout') }}" onclick="event.preventDefault(); location.href='{{ url('/logout') }}';">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">
</ul>