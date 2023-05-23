<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')
    
    <main class="text-bg-dark">
        <div class="jumbotron"></div>
        <div class="ms-label text-uppercase" id="ms-overlap">@yield('label')</div>
        @yield('content')
    </main>

    @include('partials.footer')

</body>

</html>