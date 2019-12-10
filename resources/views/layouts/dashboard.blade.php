<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dashboard') }}</title>


    <link href="{{ asset('vendors/css/bootstrap-grid.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/css/bootstrap-reboot.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/css/bootstrap.min.js') }}" rel="stylesheet">
    <link href="{{ asset('vendors/css/jquery-3.3.1.min.js') }}" rel="stylesheet">



    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div>

            @yield('content')

    </div>
</body>
</html>
