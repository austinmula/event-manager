<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Tempus Dominus Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@eonasdan/tempus-dominus@6.2.10/dist/css/tempus-dominus.min.css" crossorigin="anonymous">

</head>
<body>
<div
    id="app"
>
    @include("partials.header")
        <main class="py-4">
            @yield('content')
        </main>
    </div>
<!-- Popperjs -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha256-BRqBN7dYgABqtY9Hd4ynE+1slnEw+roEPFzQ7TRRfcg=" crossorigin="anonymous"></script>
<!-- Tempus Dominus JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/@eonasdan/tempus-dominus@6.2.10/dist/js/tempus-dominus.min.js" crossorigin="anonymous"></script>

</body>
</html>
