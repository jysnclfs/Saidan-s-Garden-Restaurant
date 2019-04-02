<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="has-navbar-fixed-top">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', "Saidan's Garden Restaurant") }} @yield('title')</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="/images/logo.png" type="image/x-icon">
    @yield('style')
</head>
<body>
    <div id="app">
        @include('partials.admin-nav')
        <main>
            {{-- @yield('content') --}}
            <router-view></router-view>
        </main>
        @include('partials.admin-footer')      
    </div>
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    @yield('script')
</body>
</html>
