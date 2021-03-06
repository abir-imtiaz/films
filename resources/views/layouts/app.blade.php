<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}"}>
        <script>window.Laravel = {csrfToken:'{{ csrf_token() }}'}</script>
        <title>WMovies</title>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            @include('inc/navbar')
            <div class= 'container'>
                @yield('content')
            </div>
        </div>
    </body>
</html>