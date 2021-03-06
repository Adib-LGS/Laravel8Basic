<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">

    </head>
    <body>
    @include('partials.navbar')
    <div class="container mx-auto">
        @yield('content')
    </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
