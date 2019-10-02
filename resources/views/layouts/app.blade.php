<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap&subset=cyrillic" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">
    <div class="position-relative" id="app" aria-live="polite" aria-atomic="true">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand text-blue-tone-dark-50 pl-md-3 ml-md-3" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse pr-md-2 mr-md-3" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @include('layouts.navbar.navleft')

                    <!-- Right Side Of Navbar -->
                    @include('layouts.navbar.navright')
                </div>
            </div>
        </nav>
        <div class="container position-relative">
            @yield('filter')
        </div>
        <div class="include_cabinet_menu" style="    background-color: #e9ecef;">
            <div class="container">
                <div class="row">
                    @yield('cabinet_nav')
                </div>
            </div>
        </div>

        <main class="app-content py-0 py-md-3" style="background: @yield('bgColor')">
            <div class="container ">
                <div class="d-none d-md-block">
                    @section('breadcrumbs', Breadcrumbs::render())
                    @yield('breadcrumbs')
                </div>
                @include('layouts.partials.flash_alert')
                @yield('content')
            </div>
        </main>

        {{-- FLASH --}}
        <div style="position: absolute; top: 70px; left: 15px;">
            @include('layouts.partials.flash')
        </div>
    </div>

    <footer class="footer mt-auto py-3">
        <div class="container">
            <div class="border-top pt-3">
                <p>&copy; {{ date('Y') }} - {{ config('app.name', 'Laravel') }}</p>
            </div>
        </div>
    </footer>
</body>
</html>
