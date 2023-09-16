<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Login Page" name="description" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('auth/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('auth/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('auth/Untitled-1.css') }}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body class="auth-body-bg">
    <div class="bg-overlay"></div>
    <div class="wrapper-page">
        <div class="container-fluid p-0">
            <div class="card">
                @yield('content')
            </div>
            <!-- end card -->
        </div>
        <!-- end container -->
    </div>
    <!-- end -->
    <!-- JAVASCRIPT -->
    <script src="{{ asset('auth/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('auth/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('auth/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('auth/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('auth/node-waves/waves.min.js') }}"></script>

    <script src="{{ asset('auth/app.js') }}"></script>

</body>

</html>
