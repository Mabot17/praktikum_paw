<!-- Sidebar -->

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('admin/dashboard') }}" class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pengunjung -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('home') }}" class="{{ Request::is('home') ? 'active' : '' }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Home</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Wisata -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('teater') }}" class="{{ Request::is('teater') ? 'active' : '' }}">
            <i class="fas fa-fw fa-mountain"></i>
            <span>Teater</span>
        </a>
    </li>

</ul>
<!-- End of Sidebar -->
