<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap&subset=cyrillic" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">
    <div class="position-relative" id="app" aria-live="polite" aria-atomic="true">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand text-blue-tone-dark-50 mr-0 mr-md-5" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                @auth
                    <a class="nav-link font-weight-bold d-inline-block d-md-none ml-auto position-relative" href="{{ route('cabinet.dialogs.index') }}" >
                        <i class="fal fa-envelope d-md-none d-inline-block align-middle" style="font-size: 1.7rem;" @if (!empty($newMessage))data-toggle="tooltip" data-placement="left" title="У Вас есть новые сообщения" @endif></i>
                        @if (!empty($newMessage))
                            <span class="badge badge-success rounded-circle d-inline-block" style="height: 10px;width: 10px;right: 10px;"></span>
                        @endif
                    </a>
                @endauth
                <button class="navbar-toggler border-0 px-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <i class="far fa-bars px-2"></i>
                </button>

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @include('layouts.navbar.navleft')

                    <!-- Right Side Of Navbar -->
                    @include('layouts.navbar.navright')
                </div>
            </div>
        </nav>
        @section('cabinet_nav')
            @include ('cabinet._nav', ['page' => null])
        @show
        <div class="container position-relative">
            @section('search')
                @include('layouts.partials._filter', ['carBRND' => null, 'route' => route('cars.adverts.index'), 'height' => null])
            @show
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
                <p>&copy; {{ date('Y') }} - {{ config('app.name', 'AutoHire') }}</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>
