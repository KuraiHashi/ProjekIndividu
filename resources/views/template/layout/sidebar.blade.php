<div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-white logo-dark">
    <!-- Brand demo (see assets/css/demo/demo.css) -->
    <div class="app-brand demo">
        <span class="app-brand-logo demo">
            <img src="assets/img/logo.png" alt="Brand Logo" class="img-fluid">
        </span>
        <a href="index.html" class="app-brand-text demo sidenav-text font-weight-normal ml-2">Empire</a>
        <a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
            <i class="ion ion-md-menu align-middle"></i>
        </a>
    </div>
    <div class="sidenav-divider mt-0"></div>

    <!-- Links -->
    <ul class="sidenav-inner py-1">

        @auth
            <!-- Dashboards -->
            <li class="sidenav-item">
                <a href="/dashboard" class="sidenav-link">
                    <i class="sidenav-icon feather icon-home"></i>
                    <div>Dashboards</div>
                </a>
            </li>

        @endauth

        <!-- Layouts -->
        <li class="sidenav-divider mb-1"></li>
        <li class="sidenav-header small font-weight-semibold">Halaman</li>
        <li class="sidenav-item">
            <a href="/" class="sidenav-link">
                <i class="sidenav-icon feather icon-file-text"></i>
                <div>Mahasiswa Berprestasi</div>
            </a>
        </li>

        <!-- Aksi -->
        <li class="sidenav-divider mb-1"></li>
        <li class="sidenav-header small font-weight-semibold">Aksi</li>
        <li class="sidenav-item">
            <a href="/form-pendataan-mapres" class="sidenav-link">
                <i class="sidenav-icon feather icon-file"></i>
                <div>Form Mapres</div>
            </a>
        </li>

        @guest
        <li class="sidenav-item">
            <a href="/login" class="sidenav-link">
                <i class="sidenav-icon feather icon-lock"></i>
                <div>Login</div>
            </a>
        </li>
        <li class="sidenav-item">
            <a href="/register" class="sidenav-link">
                <i class="sidenav-icon feather icon-user"></i>
                <div>Signup</div>
            </a>
        </li>
    @endguest

        @auth
        <li class="sidenav-item">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="sidenav-link border-0 bg-transparent w-100 text-left d-flex align-items-center">
                    <i class="sidenav-icon feather icon-log-out"></i>
                    <div>Logout</div>
                </button>
            </form>
        </li>
        @endauth

    </ul>
</div>
