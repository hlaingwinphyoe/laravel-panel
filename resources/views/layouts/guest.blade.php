<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title',config('app.name'))</title>

    <!-- Scripts -->
    @vite(['resources/sass/signup.scss','resources/js/signup.js'])
</head>
<body data-bs-theme="light" class="bg-body">
<div>
    <main class="py-4">
        @yield('content')
    </main>
</div>
<script src="{{ asset('jquery.min.js') }}"></script>
</body>
</html>
