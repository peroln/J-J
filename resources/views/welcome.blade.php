<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>

<div id="app">
    <div class="container-fluid p-0 position-relative">
        <img src="{{Vite::asset('storage/app/images/main_bg_image.jpeg')}}" class="img-fluid">

        <nav class="navbar navbar-expand-md gradient-custom fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <i alt="Logo" class="bi bi-house-door
                d-inline-block align-text-top">LOGO</i>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                        aria-label="Переключить навигацию">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end canvas-background" tabindex="-1" id="offcanvasDarkNavbar"
                     aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                aria-label="Закрыть"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item p-xl-3 p-xxl-5">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item p-xl-3 p-xxl-5">
                                <a class="nav-link" href="#">About us</a>
                            </li>
                            <li class="nav-item p-xl-3 p-xxl-5">
                                <a class="nav-link" href="#">Services</a>
                            </li>
                            <li class="nav-item p-xl-3 p-xxl-5">
                                <a class="nav-link " aria-disabled="true">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="top-left"><h1 class="p3">When the grass gets growing </br> we get mowing</h1></div>
        <div class="bottom-right"><h1 class="p3">Gardening </br> services</h1></div>
    </div>
    <div class="main-content">
        <div class="d-flex align-items-start flex-column">
            <div class="card first-element-main-content rounded-end-4">
                <div class="card-body p-md-5">
                    <h1 class="card-title">Why Chose Us</h1>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.
                        With supporting text below as a natural lead-in to additional content.
                        With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
        </div>
        <div class="mt-5 d-flex align-items-end flex-column ">
            <div class="card  second-element-main-content rounded-start-4">
                <div class="card-body p-md-5">
                    <h1 class="card-title">What We Do</h1>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.
                        With supporting text below as a natural lead-in to additional content.
                        With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="p-3">
    <div class="card-body p-md-5">
        <h1 class="card-title">Get In Touch</h1>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.
            With supporting text below as a natural lead-in to additional content.
            With supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="hstack gap-3 mt-3 p-3">
        <div class="copyright"><p>&copy; 2024 My Web Page. All rights reserved.</p></div>
        <div class="ms-auto">
            <address class="">
                F28YP78 Lios Mor, apt.14, Newport, Co.Mayo Ireland<br>
                Phone: +353-(87) 647-0733<br>
                Email: peretjatkool@gmail.com
            </address>
        </div>

    </div>
</footer>
</body>
</html>
