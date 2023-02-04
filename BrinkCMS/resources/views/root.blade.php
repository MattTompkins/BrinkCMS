<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->

    @vite(['resources/assets/css/vendor/bootstrap.min.css'])
    @vite(['resources/assets/css/vendor/font-awesome.css'])
    @vite(['resources/assets/css/vendor/slick.css'])
    @vite(['resources/assets/css/vendor/slick-theme.css'])
    @vite(['resources/assets/css/vendor/base.css'])
    @vite(['resources/assets/css/plugins/plugins.css'])
    @vite(['resources/assets/css/style.css'])

    @vite(['resources/assets/js/vendor/modernizr.min.js'])
    @vite(['resources/assets/js/vendor/jquery.js'])
    @vite(['resources/assets/js/vendor/bootstrap.min.js'])
    @vite(['resources/assets/js/vendor/slick.min.js'])
    @vite(['resources/assets/js/vendor/tweenmax.min.js'])
    @vite(['resources/assets/js/vendor/js.cookie.js'])
    @vite(['resources/assets/js/vendor/jquery.style.switcher.js'])
    @vite(['resources/assets/js/main.js'])

    @vite(['resources/js/app.js'])
    @spladeHead
</head>

<body class="active-dark-mode">
    @splade
</body>

</html>
