<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'J@J') }}</title>

<!-- Fonts -->
<style>
    @font-face {
        font-family: "Protest Revolution";
        src: url("{{Vite::asset('resources/fonts/Protest_Revolution/ProtestRevolution-Regular.ttf')}}");
        font-weight: 400;
        font-style: normal;
    }
</style>
