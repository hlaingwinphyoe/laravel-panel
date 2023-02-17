<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title',config('app.name'))</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body data-bs-theme="light" class="bg-body">
    <div id="app" class="wrapper">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        @include('layouts.sidebar')

       <div class="main">
           @include('layouts.header')
           <main class="py-4 content">
               @yield('content')
           </main>
       </div>
    </div>
    <script src="{{ asset('jquery.min.js') }}"></script>
</body>
</html>
