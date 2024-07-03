<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="icon" href="{{url('/images/person-mowing-the-grass.png')}}" type="image/x-icon">
    @include('layouts.base-head')
    @yield('scripts')
</head>
<body>
<div id="app">
    @include("layouts.menu")
    @yield('content')
    @include("layouts.footer")
</div>
</body>
</html>
