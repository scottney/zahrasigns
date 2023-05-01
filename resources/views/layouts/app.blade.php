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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Script handler for Popper Js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.7/umd/popper.min.js" integrity="sha512-uaZ0UXmB7NHxAxQawA8Ow2wWjdsedpRu7nJRSoI2mjnwtY8V5YiCWavoIpo1AhWPMLiW5iEeavmA3JJ2+1idUg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Script handler for Bootstrap Js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Bootstrap script that controls dropdown boxes -->
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js" integrity="sha512-i9cEfJwUwViEPFKdC1enz4ZRGBj8YQo6QByFTF92YXHi7waCqyexvRD75S5NVTsSiTv7rKWqG9Y5eFxmRsOn0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->
        <!-- Script handler for projects counter -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Script handler for waypoints -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"
        integrity="sha512-fHXRw0CXruAoINU11+hgqYvY/PcsOWzmj0QmcSOtjlJcqITbPyypc8cYpidjPurWpCnlB8VKfRwx6PIpASCUkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Script handler for Sweetalert notifications -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Script handler for swiper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.2.4/swiper-bundle.min.js" integrity="sha512-hJrV+LKHbu+Hxkn/+ZwGOCMUkap0ZfjJbca9WT38z69+MYmRzMlvUd401TOs1b4byAm4fGDESpEcCbG2A6cibQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Script sources for ripple.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.js"
        integrity="sha512-wrQIZRuIVRafoAsp5i2HIXa+3oF+lQqx4eOMAdw+vt7npivM7+D4OMIZPhlkdbV18VxZLkn2QaOii6cr8c1+dA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.min.js"
        integrity="sha512-zuZ5wVszlsRbRF/vwXD0QS/tHzBYHFzCD/BT0lI3yrWhNZFWDkkF3KPEY//WTanqxwPdZkskQ+xZo0rnfHBc5A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- CSS script source for Bootstrap 5 -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Script source for Swiper -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.2.4/swiper-bundle.css" integrity="sha512-0x5peylECh6ad58xDrjrNZL87Zhg9rdda76yOOHrfGr41VSEwUNmYaK72U/JVScMbSWG1n4Vj35LGmq8ggsqaQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
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
