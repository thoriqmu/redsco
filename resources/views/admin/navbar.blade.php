<!-- Navbar Start -->
<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
    <a href="{{ route('admin.dashboard') }}" class="navbar-brand d-flex d-lg-none me-4">
        <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
    </a>
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>
    <div class="navbar-nav align-items-center ms-auto">
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img class="rounded-circle me-lg-2" src="{{ asset('img/img16.png') }}" alt=""
                    style="width: 40px; height: 40px;">
                <span class="d-none d-lg-inline-flex">Admin</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                <a href="" class="dropdown-item">Go to User Page</a>
                <a href="{{ route('logout') }}" class="dropdown-item">Log Out</a>
            </div>
        </div>
    </div>
</nav>
