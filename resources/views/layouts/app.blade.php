<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
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
