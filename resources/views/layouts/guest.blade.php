<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield("title") | {{ config('app.name') }}</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/project/images/favicon.ico') }}">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css" rel="stylesheet">
    <link href="{{ asset('assets/theme/css/style.css') }}" rel="stylesheet">

    @stack("css-header")
    @stack("js-header")
    
</head>

<body class="h-100">
    
    <!--*******************
        Preloader start
    ********************-->
<!--     <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div> -->
    <!--*******************
        Preloader end
    ********************-->
    @yield('content')
    <!--**********************************
        Scripts
    ***********************************-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/theme/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('assets/theme/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/theme/js/settings.js') }}"></script>
    <script src="{{ asset('assets/theme/js/gleek.js') }}"></script>
    <script src="{{ asset('assets/theme/js/styleSwitcher.js') }}"></script>

    @stack("css-footer")
    @stack("js-footer")
</body>
</html>





