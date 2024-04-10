<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Laravel</title>
    <link href="{{ config('app.url') }}assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="{{ config('app.url') }}assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="{{ config('app.url') }}assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="{{ config('app.url') }}assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ config('app.url') }}assets/css/master.css" rel="stylesheet">
    <link href="{{ config('app.url') }}assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
    link
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @livewireStyles
</head>

<body class="clinic_version">
 @include('patient.layouts.header')
    <br>
    <div class="content">
    <div class="container">
        <br><br><br>
        {{ $slot }}
        @livewireScripts

        <script src="{{ config('app.url') }}js/livewire-turbolinks.js"></script>
        <script src="{{ config('app.url') }}js/alpine.js"></script>
        <script src="{{ config('app.url') }}assets/vendor/jquery/jquery.min.js"></script>
        <script src="{{ config('app.url') }}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ config('app.url') }}assets/js/script.js"></script>
</body>

</html>