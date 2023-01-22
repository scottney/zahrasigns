<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Zahrasigns') }}</title>

        <!-- Icon that shows in the browser tab when website is launched -->
        <link rel="shortcut icon" href=" {{ ('/images/icons/ZSS-NEW-LOGO-DESIGN-23RD-NOVEMBER-2022.png') }} ">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/extra.js') }}" defer></script>
        <script async defer src="https://buttons.github.io/buttons.js"></script>

        <!-- Script handler for JQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Script handler for Popper Js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"
        integrity="sha512-6UofPqm0QupIL0kzS/UIzekR73/luZdC6i/kXDbWnLOJoqwklBK6519iUnShaYceJ0y4FaiPtX/hRnV/X/xlUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Script handler for Bootstrap Js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.1/js/bootstrap.min.js"
        integrity="sha512-vyRAVI0IEm6LI/fVSv/Wq/d0KUfrg3hJq2Qz5FlfER69sf3ZHlOrsLriNm49FxnpUGmhx+TaJKwJ+ByTLKT+Yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Bootstrap script that controls dropdown boxes -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.1/js/bootstrap.bundle.min.js"
        integrity="sha512-1TK4hjCY5+E9H3r5+05bEGbKGyK506WaDPfPe1s/ihwRjr6OtL43zJLzOFQ+/zciONEd+sp7LwrfOCnyukPSsg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
        <!-- Script handler for waypoints -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"
        integrity="sha512-fHXRw0CXruAoINU11+hgqYvY/PcsOWzmj0QmcSOtjlJcqITbPyypc8cYpidjPurWpCnlB8VKfRwx6PIpASCUkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Script handler for Sweetalert notifications -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Script sources for ripple.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.js"
        integrity="sha512-wrQIZRuIVRafoAsp5i2HIXa+3oF+lQqx4eOMAdw+vt7npivM7+D4OMIZPhlkdbV18VxZLkn2QaOii6cr8c1+dA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.min.js"
        integrity="sha512-zuZ5wVszlsRbRF/vwXD0QS/tHzBYHFzCD/BT0lI3yrWhNZFWDkkF3KPEY//WTanqxwPdZkskQ+xZo0rnfHBc5A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Script source for Bootstrap 5 -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.1/css/bootstrap.min.css"
        integrity="sha512-siwe/oXMhSjGCwLn+scraPOWrJxHlUgMBMZXdPe2Tnk3I0x3ESCoLz7WZ5NTH6SZrywMY+PB1cjyqJ5jAluCOg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/extra.css') }}" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="antialiased">
        <div class="container-fluid" id="app">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-0">
                    <nav class="navbar navbar-expand-md navbar-light shadow-sm" id="mainNavMenu">
                        <div class="container-fluid">
                            <a class="ms-5 me-5" href="{{ url('/') }}">
                                <img src="/images/ZSS-NEW-LOGO-PNG.png" id="mainLogo">
                                <!-- <b class="text-white" id="mainLogoText">{{ config('app.name', 'Zahrasigns') }}</b> -->
                            </a>

                            <button class="navbar-toggler" id="navbarTogglerColor" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                @if (Route::has('login'))
                                <!-- Left Side Of Navbar -->
                                <div class="navbar-nav me-auto">
                                    <div id="mainNavMenuLinkHolder">
                                        <a href="" class="me-3 p-3" id="mainNavMenuLink">Products</a>
                                    </div>

                                    <div id="mainNavMenuLinkHolder">
                                        <a href="" class="me-3 p-3" id="mainNavMenuLink">Services</a>
                                    </div>

                                    <div id="mainNavMenuLinkHolder">
                                        <a href="" class="me-3 p-3" id="mainNavMenuLink">About Us</a>
                                    </div>

                                    <div id="mainNavMenuLinkHolder">
                                        <a href="" class="me-3 p-3" id="mainNavMenuLink">Contacts</a>
                                    </div>
                                    <!-- @auth
                                        <div id="mainNavMenuLinkHolder">
                                            <a href="{{ url('/dashboard') }}" class="nav-link text-white" id="mainNavMenuLink">Dashboard</a>
                                        </div>
                                    @else -->
                                </div>

                                <!-- Right Side Of Navbar -->
                                <!-- <div class="navbar-nav ms-auto">
                                    <div id="mainNavMenuLinkHolder">
                                        <a href="{{ route('login') }}" class="me-3" id="mainNavMenuLink">Log in</a>
                                    </div>

                                    @if (Route::has('register'))
                                        <div id="mainNavMenuLinkHolder">
                                            <a href="{{ route('register') }}" class="" id="mainNavMenuLink">Register</a>
                                        </div>
                                    @endif
                                </div>
                                    @endauth -->    
                                @endif
                            </div>
                        </div>
                    </nav>

                    <div id="mainContentHolder">
                        @yield('guest-content')
                    </div>

                </div>
            </div>
        </div>
    </body>

</html>
