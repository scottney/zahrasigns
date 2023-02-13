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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Script handler for Popper Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"
    integrity="sha512-6UofPqm0QupIL0kzS/UIzekR73/luZdC6i/kXDbWnLOJoqwklBK6519iUnShaYceJ0y4FaiPtX/hRnV/X/xlUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Script handler for Bootstrap Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap script that controls dropdown boxes -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js" integrity="sha512-i9cEfJwUwViEPFKdC1enz4ZRGBj8YQo6QByFTF92YXHi7waCqyexvRD75S5NVTsSiTv7rKWqG9Y5eFxmRsOn0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <!-- Script handler for projects counter -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Script handler for waypoints -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"
    integrity="sha512-fHXRw0CXruAoINU11+hgqYvY/PcsOWzmj0QmcSOtjlJcqITbPyypc8cYpidjPurWpCnlB8VKfRwx6PIpASCUkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Script handler for Sweetalert notifications -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Script handler for swiper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.0.0/swiper-bundle.min.js" integrity="sha512-U0YYmuLwX0Z1X7dX4z45TWvkn0f8cDXPzLL0NvlgGmGs0ugchpFAO7K+7uXBcCrjVDq5A0wAnISCcf/XhSNYiA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Script sources for ripple.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.js"
    integrity="sha512-wrQIZRuIVRafoAsp5i2HIXa+3oF+lQqx4eOMAdw+vt7npivM7+D4OMIZPhlkdbV18VxZLkn2QaOii6cr8c1+dA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.min.js"
    integrity="sha512-zuZ5wVszlsRbRF/vwXD0QS/tHzBYHFzCD/BT0lI3yrWhNZFWDkkF3KPEY//WTanqxwPdZkskQ+xZo0rnfHBc5A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- CSS script source for Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Script source for Swiper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.0.0/swiper-bundle.css" integrity="sha512-sOfEZXsVON8ymFW3Za9EYQrV3xMJhfcT42g+qUP/thg8MuH26BGvrc2484SkZMczKOkpi1haAfSs591sUFfvCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            @if (Route::has('login'))
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item">
                                    <a href="" class="p-3" id="mainNavMenuLink">Products</a>
                                </li>

                                <li class="nav-item">
                                    <a href="" class="p-3" id="mainNavMenuLink">Services</a>
                                </li>

                                <li class="nav-item">
                                    <a href="" class="p-3" id="mainNavMenuLink">About Us</a>
                                </li>
                                
                            <!-- @auth
                                <li>
                                    <a href="{{ url('/dashboard') }}" class="nav-link text-white" id="mainNavMenuLink">Dashboard</a>
                                </li>
                                @else -->

                                <!-- Right Side Of Navbar -->
                            <!-- < class="navbar-nav ms-auto">
                                <li>
                                    <a href="{{ route('login') }}" class="p-3" id="mainNavMenuLink">Log in</a>
                                </li>

                                 @if (Route::has('register'))
                                    <li>
                                        <a href="{{ route('register') }}" class="p-3" id="mainNavMenuLink">Register</a>
                                    </li>
                                @endif
                                @endauth -->
                            </ul>    
                            @endif
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

                                <a href="https://api.whatsapp.com/send?phone=254722713283" class="whatsapp" data-tooltip="WhatsApp" data-placement="left" target="_blank">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </a>

                                <a href="tel:+254722713283" class="call" data-tooltip="Call" data-placement="left">
                                    <i class="fa-solid fa-phone"></i>
                                </a>

                                <a href="mailto:zss.nairobi@gmail.com" class="mailAddress" data-tooltip="Email" data-placement="left" target="_blank">
                                    <i class="fa-solid fa-envelope"></i>
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

                <!-- Start Of Main Footer Section -->
                <footer class="bg-dark">
                    <div class="container-fluid text-center justify-content-center">
                        <div class="row pt-3 pb-3">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                <h5 class="text-white" id="footerTitleText">Contacts</h5>

                                <i class="fa-solid fa-building fa-1x p-2" id="footerContactsIcons">
                                    <span class="textFooter" id="footerContactsIconsLinks">
                                        <a href="https://goo.gl/maps/PwkXsGjCxKGoUhyw7" id="" target="_blank">Road C, Off Enterprise Road</a>
                                    </span>
                                </i>

                                <br>

                                <i class="fa-solid fa-square-phone fa-1x p-2" id="footerContactsIcons">
                                    <span class="textFooter" id="footerContactsIconsLinks">
                                        <a href="tel:+254722713283" id="">Phone Number</a>
                                    </span>
                                </i>

                                <br>

                                <i class="fa-brands fa-whatsapp fa-1x p-2" id="footerContactsIcons">
                                    <span class="textFooter" id="footerContactsIconsLinks">
                                        <a href="https://api.whatsapp.com/send?phone=254722713283" id="" target="_blank">Whatsapp</a>
                                    </span>
                                </i>

                                <br>

                                <i class="fa-brands fa-telegram fa-1x p-2" id="footerContactsIcons">
                                    <span class="textFooter" id="footerContactsIconsLinks">
                                        <a href="" id="" target="_blank">Telegram</a>
                                    </span>
                                </i>

                                <br>

                                <i class="fa-solid fa-at fa-1x p-2" id="footerContactsIcons">
                                    <span class="textFooter" id="footerContactsIconsLinks">
                                        <a href="mailto:zss.nairobi@gmail.com" id="">Zahra Signs Systems LTD</a>
                                    </span>
                                </i>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                <h5 class="text-white" id="footerTitleText">Resources</h5>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                <h5 class="text-white" id="footerTitleText">Social Media</h5>

                                <i class="fa-brands fa-facebook fa-1x p-2" id="footerContactsIcons">
                                    <span class="textFooter" id="footerContactsIconsLinks">
                                        <a href="https://www.facebook.com/profile.php?id=100068099500335" id="" target="_blank">Facebook</a>
                                    </span>
                                </i>

                                <br>

                                <i class="fa-brands fa-instagram fa-1x p-2" id="footerContactsIcons">
                                    <span class="textFooter" id="footerContactsIconsLinks">
                                        <a href="https://instagram.com/zahra_sign_systems_ltd?igshid=Yzg5MTU1MDY=" id="" target="_blank">Instagram</a>
                                    </span>
                                </i>

                                <br>

                                <i class="fa-brands fa-twitter fa-1x p-2" id="footerContactsIcons">
                                    <span class="textFooter" id="footerContactsIconsLinks">
                                        <a href="https://twitter.com/Zahra_Signs?t=NF96_XLJXoeV12pDaYv4Yg&s=08" id="" target="_blank">Twitter</a>
                                    </span>
                                </i>


                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                <a href="{{ url('/') }}">
                                    <img src="/images/ZSS-NEW-LOGO-PNG.png" id="mainFooterLogo">
                                </a>
                            </div>
                        </div>

                        <div class="row pt-3 pb-3">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <small class="text-light">Developed and Maintained by <a href="https://www.argonetech.com" class="" id="argoneTech">ArgoneTech</a></small><br>
                                <small class="text-light">All Rights Reserved.</small>
                                <small class="d-block text-light">© {{date('Y')}}</small>
                            </div>
                        </div>

                    </div>
                </footer>
                <!-- End Of Main Footer Section -->

            </div>
        </div>
    </div>

</body>
</html>
