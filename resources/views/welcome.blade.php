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
        @include("layouts.menu")
        <div class="top-left"><h1 class="p3">When the grass gets growing </br> we get mowing</h1></div>
        <div class="bottom-right"><h1 class="p3">Gardening </br> services</h1></div>
    </div>
    <div class="main-content">
        <div class="d-flex align-items-start flex-column first-wrap">
            <div class="card first-element-main-content rounded-end-4">
                <div class="card-body p-md-5">
                    <h1 class="card-title">Why Chose Us</h1>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.
                        With supporting text below as a natural lead-in to additional content.
                        With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
        </div>
        <div class=" d-flex align-items-end flex-column ">
            <div class="card  second-element-main-content rounded-start-4">
                <div class="card-body p-md-5">
                    <h1 class="card-title">What We Do</h1>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.
                        With supporting text below as a natural lead-in to additional content.
                        With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-start flex-column third-wrap">
            <div class="card third-element-main-content rounded-end-4">
                <div class="card-body p-md-5">
                    <h1 class="card-title">Get In Touch</h1>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.
                        With supporting text below as a natural lead-in to additional content.
                        With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@include("layouts.footer")
</body>
</html>
