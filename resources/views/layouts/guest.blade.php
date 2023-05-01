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
    <meta name="referrer" content="no-referrer">
    <meta name="description" content="Design, print, and fabricate custom 3D signs for businesses and events with a wide range of materials and finishes available.">
    <meta name="keywords" content="3D signs, custom signs, acrylic signs, LED signs, business signs, event signs, sign design, sign printing, outdoor signs, indoor signs, channel letter signs, monument signs, retail signs, building signs, vinyl signs, metal signs, sign fabrication, sign installation, digital printing, graphic design, branding solutions, directional signs, trade show signs, promotional signs, illuminated signs, neon signs, promotional graphics, large format printing, wayfinding signs, architectural signs, vehicle wraps, dimensional letters, display signs, wall graphics, window graphics, corporate signs, lobby signs, backlit signs, digital displays, menu boards, sign repair, sign maintenance, sign consulting, sign leasing, graphics design, logo design, sign manufacturing, neon signs, illuminated signs, large format printing, 3D sign design, custom sign design, acrylic sign design, LED sign design, business sign design, event sign design, outdoor sign design, indoor sign design, channel letter sign design, monument sign design, retail sign design, building sign design, vinyl sign design, metal sign design, sign fabrication design, sign installation design, digital printing design, graphic design services, branding solutions design, directional sign design, trade show sign design, promotional sign design, illuminated sign design, neon sign design, promotional graphics design, large format printing design, wayfinding sign design, architectural sign design, vehicle wrap design, dimensional letter design, display sign design, wall graphic design, window graphic design, corporate sign design, lobby sign design, backlit sign design, digital display design, menu board design, sign repair design, sign maintenance design, sign consulting design, sign leasing design, custom sign printing, acrylic sign printing, LED sign printing, business sign printing, event sign printing, outdoor sign printing, indoor sign printing, channel letter sign printing, monument sign printing, retail sign printing, building sign printing, vinyl sign printing, metal sign printing, sign fabrication printing, sign installation printing, digital printing printing, branding solutions printing, directional sign printing, trade show sign printing, promotional sign printing, illuminated sign printing, neon sign printing, promotional graphics printing, large format printing printing, wayfinding sign printing, architectural sign printing, vehicle wrap printing, dimensional letter printing, display sign printing, wall graphic printing, window graphic printing, corporate sign printing, lobby sign printing, backlit sign printing, digital display printing, menu board printing, sign repair printing, sign maintenance printing, sign consulting printing, sign leasing printing, 3D sign printing services, custom sign fabrication, acrylic sign fabrication, LED sign fabrication, business sign fabrication, event sign fabrication, outdoor sign fabrication, indoor sign fabrication, channel letter sign fabrication, monument sign fabrication, retail sign fabrication, building sign fabrication, vinyl sign fabrication, metal sign fabrication, sign installation services, digital printing services, graphic design services, branding solutions services, directional sign services, trade show sign services, promotional sign services, illuminated sign services, neon sign services, promotional graphics services, large format printing services, wayfinding sign services, architectural sign services, vehicle wrap services, dimensional letter services, display sign services, wall graphic services, window graphic services, corporate sign services, lobby sign services, backlit sign services, digital display services, menu board services, sign repair services, sign maintenance services, sign consulting services, sign leasing services">
    <meta property="og:description" content="At our 3D signs design and printing business, we specialize in creating unique, visually stunning signs for businesses and organizations of all sizes. From custom logos and branding to directional signs and wayfinding solutions, we use state-of-the-art technology and expert craftsmanship to bring your ideas to life. Whether you're looking for indoor or outdoor signs, we have the skills and expertise to make it happen. Trust us to create the perfect sign for your business today!" xmlns:og="http://opengraphprotocol.org/schema/">

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js" integrity="sha512-i9cEfJwUwViEPFKdC1enz4ZRGBj8YQo6QByFTF92YXHi7waCqyexvRD75S5NVTsSiTv7rKWqG9Y5eFxmRsOn0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/extra.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/ColonnaMT.ttf') }}" rel="stylesheet">

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

                        <button class="navbar-toggler" id="navbarToggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon" id="navbarTogglerIcon"></span>
                        </button>

                        <div class="navbar-collapse collapse" id="navbarSupportedContent">

                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item">
                                    <a href="{{ route('mainIndex') }}#productsSection" id="mainNavMenuLink">Products & Services</a>
                                </li>
                                        <!-- <li class="nav-item">
                                            <a href="" id="mainNavMenuLink">Services</a>
                                        </li> -->

                                        <li class="nav-item">
                                            <a href="{{ route('aboutUsIndex') }}" id="mainNavMenuLink">About Us</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="" id="mainNavMenuLink">Blog</a>
                                        </li>
                                    </ul>

                                    <ul class="navbar-nav ms-auto">
                                        <!-- Right Side Of Navbar -->
                                        <li class="nav-item">
                                            <a href="{{ route('login') }}" class="p-3" id="mainNavMenuLink">Log in</a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a href="{{ route('register') }}" class="p-3" id="mainNavMenuLink">Register</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>

                        <div class="row m-0">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-0">
                                <div id="mainContentHolder">
                                    @if(Session::has('quote-request-successfull'))
                                    <div class="alert alert-success m-0">
                                        <p>{!! Session::get('quote-request-successfull') !!}<button type="button" class="btn btn-close float-end" data-bs-dismiss="alert">&times;</button></p>
                                    </div>
                                    @elseif(Session::has('quote-request-failed'))
                                    <div class="alert alert-danger m-0">
                                        <p>{!! Session::get('quote-request-failed') !!}<button type="button" class="btn btn-close float-end" data-bs-dismiss="alert">&times;</button></p>
                                    </div>
                                    @endif

                                    @yield('guest-content')
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <div id="sy-whatshelp">
                                    <div class="sywh-services">
                                        <a href="https://www.facebook.com/profile.php?id=100068099500335" class="facebook" data-tooltip="Facebook" data-placement="left" target="_blank">
                                            <i class="fa-brands fa-facebook"></i>
                                        </a>

                                        <a href="https://api.whatsapp.com/send?phone=254722713283" class="main_whatsapp" data-tooltip="Main WhatsApp" data-placement="left" target="_blank">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </a>

                                        <a href="https://api.whatsapp.com/send?phone=254700140900" class="alternative_whatsapp" data-tooltip="Alternative WhatsApp" data-placement="left" target="_blank">
                                            <i class="fa-brands fa-square-whatsapp"></i>
                                        </a>

                                        <a href="tel:+254722713283" class="main_phone_number" data-tooltip="Main Phone Number" data-placement="left">
                                            <i class="fa-solid fa-phone"></i>
                                        </a>

                                        <a href="tel:+254700140900" class="alternative_phone_number" data-tooltip="Alternative Phone Number" data-placement="left">
                                            <i class="fa-solid fa-square-phone"></i>
                                        </a>

                                        <a href="mailto:zss.nairobi@gmail.com" class="main_email_address" data-tooltip="Main Email Address" data-placement="left" target="_blank">
                                            <i class="fa-solid fa-envelope"></i>
                                        </a>

                                        <a href="mailto:hamza5253.hb@gmail.com" class="alternative_email_address" data-tooltip="Alternative Email Address" data-placement="left" target="_blank">
                                            <i class="fa-solid fa-square-envelope"></i>
                                        </a>

                                        <a href="https://instagram.com/zahra_sign_systems_ltd?igshid=Yzg5MTU1MDY=" class="instagram" data-tooltip="Instagram" data-placement="left" target="_blank">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>

                                        <a href="https://twitter.com/Zahra_Signs?t=NF96_XLJXoeV12pDaYv4Yg&s=08" class="twitter" data-tooltip="Twitter" data-placement="left" target="_blank">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    </div>

                                    <a class="sywh-open-services" data-tooltip="Contact Us" data-placement="left">
                                        <i class="fa fa-comments"></i>
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                @extends('layouts.footer')
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </body>
        </html>



