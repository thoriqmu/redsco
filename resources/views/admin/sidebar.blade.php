<div class="container-fluid position-relative d-flex p-0">
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Sidebar Start -->
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-secondary navbar-dark">
            <a href="{{ route('admin.dashboard') }}" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary">
                    </i>RedsCo Admin
                </h3>
            </a>
            <div class="navbar-nav w-100">
                <a href="{{ route('admin.dashboard') }}"
                    class="nav-item nav-link @if (Request::is('dashboard')) active @endif"><i
                        class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="{{ route('admin.showProduct') }}"
                    class="nav-item nav-link @if (Request::is('product')) active @endif"><i
                        class="fa fa-th me-2"></i>Produk</a>
                <a href="{{ route('admin.sales') }}"
                    class="nav-item nav-link @if (Request::is('sales')) active @endif"><i
                        class="fa fa-table me-2"></i>Penjualan</a>
            </div>
        </nav>
    </div>
    <!-- Sidebar End -->
</div>
