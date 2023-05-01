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
        <link rel="shortcut icon" href=" {{ ('images/icons/favicon.ico') }} ">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/extra.js') }}" defer></script>
        <script async defer src="https://buttons.github.io/buttons.js"></script>

        <!-- Script handler for JQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Script handler for Popper Js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js" integrity="sha512-6UofPqm0QupIL0kzS/UIzekR73/luZdC6i/kXDbWnLOJoqwklBK6519iUnShaYceJ0y4FaiPtX/hRnV/X/xlUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Script handler for Bootstrap Js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.1/js/bootstrap.min.js" integrity="sha512-vyRAVI0IEm6LI/fVSv/Wq/d0KUfrg3hJq2Qz5FlfER69sf3ZHlOrsLriNm49FxnpUGmhx+TaJKwJ+ByTLKT+Yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Bootstrap script that controls dropdown boxes -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.1/js/bootstrap.bundle.min.js" integrity="sha512-1TK4hjCY5+E9H3r5+05bEGbKGyK506WaDPfPe1s/ihwRjr6OtL43zJLzOFQ+/zciONEd+sp7LwrfOCnyukPSsg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Script handler for waypoints -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js" integrity="sha512-fHXRw0CXruAoINU11+hgqYvY/PcsOWzmj0QmcSOtjlJcqITbPyypc8cYpidjPurWpCnlB8VKfRwx6PIpASCUkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Script handler for Sweetalert notifications -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Script sources for ripple.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.js" integrity="sha512-wrQIZRuIVRafoAsp5i2HIXa+3oF+lQqx4eOMAdw+vt7npivM7+D4OMIZPhlkdbV18VxZLkn2QaOii6cr8c1+dA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.min.js" integrity="sha512-zuZ5wVszlsRbRF/vwXD0QS/tHzBYHFzCD/BT0lI3yrWhNZFWDkkF3KPEY//WTanqxwPdZkskQ+xZo0rnfHBc5A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Script source for Bootstrap 5 -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.1/css/bootstrap.min.css" integrity="sha512-siwe/oXMhSjGCwLn+scraPOWrJxHlUgMBMZXdPe2Tnk3I0x3ESCoLz7WZ5NTH6SZrywMY+PB1cjyqJ5jAluCOg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/extra.css') }}" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    
    <body class="antialiased">
        <div class="container-fluid" id="app">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-0">
                    @livewire('navigation-menu')
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-0">
                    <div class="d-flex" id="wrapper">
                        <!-- Sidebar -->
                        <div class="pt-3 ps-3 pe-3" id="sidebar-wrapper">
                            <ul class="pt-3 sidebar-nav">
                                <li class="p-1" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Dashboard">
                                    <a href="{{ route('dashboard') }}" class="ps-2" id="">
                                        <i class="fa-solid fa-gauge"></i>
                                            <span class="ms-2"><b>Dashboard</b></span>
                                        <i class="fa-solid fa-circle-right float-end pt-1" id="proceedIcon"></i>
                                    </a>
                                </li>

                                <li class="p-1" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Blogs">
                                    <a href="{{ route('blog.index') }}" class="ps-2" id="">
                                        <i class="fa-solid fa-file ps-1"></i>
                                            <span class="ms-2"><b>Blogs</b></span>
                                        <i class="fa-solid fa-circle-right float-end pt-1" id="proceedIcon"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Page Content -->
                        <div id="page-content-wrapper">
                            @if (isset($header))
                            <nav class="bg-light shadow border-bottom border-dark mt-3" id="mainSubNavMenu">
                                <div class="ms-3 mt-3 mb-3">
                                    <span class="pt-3 pb-3">{{ $header }}</span>
                                </div>
                            </nav>
                            @endif

                            <main class="mt-4">
                                <div class="row m-0">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        @stack('modals')
                                        @yield('auth-content')
                                    </div>
                                </div>
                            </main>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @livewireScripts
    </body>
</html>
