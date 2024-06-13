<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('admin/dashboard') }}" class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">1462200195</div>
    </a>
    <hr class="sidebar-divider">
    <li class="nav-item {{ Request::path() === '/' || Request::segment(1) === 'home' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('home') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Home</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item {{ Request::segment(1) === 'mahasiswa' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('mahasiswa') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Mahasiswa</span>
        </a>
    </li>
    <li class="nav-item {{ Request::segment(1) === 'teater' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('teater') }}">
            <i class="fas fa-fw fa-mountain"></i>
            <span>Teater</span>
        </a>
    </li>
</ul>
