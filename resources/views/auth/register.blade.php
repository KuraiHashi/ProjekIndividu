<!DOCTYPE html>

<html lang="en" class="material-style layout-fixed">

<head>
    <title>Register | Empire Admin</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/assets/img/favicon.ico">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Icon fonts -->
    <link rel="stylesheet" href="/assets/fonts/fontawesome.css">
    <link rel="stylesheet" href="/assets/fonts/ionicons.css">
    <link rel="stylesheet" href="/assets/fonts/linearicons.css">
    <link rel="stylesheet" href="/assets/fonts/open-iconic.css">
    <link rel="stylesheet" href="/assets/fonts/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="/assets/fonts/feather.css">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="/assets/css/bootstrap-material.css">
    <link rel="stylesheet" href="/assets/css/shreerang-material.css">
    <link rel="stylesheet" href="/assets/css/uikit.css">

    <!-- Libs -->
    <link rel="stylesheet" href="/assets/libs/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/assets/css/pages/authentication.css">

</head>

<body>

    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>

    <div class="authentication-wrapper authentication-1 px-4">
        <div class="authentication-inner py-5">

            <!-- Logo -->
            <div class="d-flex justify-content-center align-items-center">
                <div class="ui-w-60">
                    <img src="/assets/img/logo-dark.png" alt="Logo" class="img-fluid">
                </div>
            </div>

            <!-- FORM REGISTER -->
            <form class="my-5" method="POST" action="{{ route('register') }}">
                @csrf

                {{-- Name --}}
                <div class="form-group">
                    <label class="form-label">Nama</label>
                    <input 
                        type="text" 
                        name="name"
                        value="{{ old('name') }}"
                        required
                        class="form-control @error('name') is-invalid @enderror">

                    @error('name')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Email --}}
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input 
                        type="email" 
                        name="email"
                        value="{{ old('email') }}"
                        required
                        class="form-control @error('email') is-invalid @enderror">

                    @error('email')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Password --}}
                <div class="form-group">
                    <label class="form-label">Password</label>
                    <input 
                        type="password" 
                        name="password"
                        required
                        class="form-control @error('password') is-invalid @enderror">

                    @error('password')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Confirm Password --}}
                <div class="form-group">
                    <label class="form-label">Konfirmasi Password</label>
                    <input 
                        type="password" 
                        name="password_confirmation"
                        required
                        class="form-control">
                </div>

                {{-- Register Button --}}
                <button type="submit" class="btn btn-primary btn-block mt-4">
                    Daftar
                </button>

            </form>

            <!-- Login Redirect -->
            <div class="text-center text-muted">
                Sudah yakin dengan akunnya?
                <a href="{{ route('login') }}">Masuk</a>
            </div>

        </div>
    </div>

    <!-- Scripts -->
    <script src="/assets/js/pace.js"></script>
    <script src="/assets/js/jquery-3.3.1.min.js"></script>
    <script src="/assets/libs/popper/popper.js"></script>
    <script src="/assets/js/bootstrap.js"></script>
    <script src="/assets/js/sidenav.js"></script>
    <script src="/assets/js/layout-helpers.js"></script>
    <script src="/assets/js/material-ripple.js"></script>
    <script src="/assets/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

</body>
</html>
