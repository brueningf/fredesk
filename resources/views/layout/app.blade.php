<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{ mix('/js/app.js') }}" data-turbolinks-track="true"></script>
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" data-turbolinks-track="true">
</head>
<body class="bg-gray-400 h-screen antialiased leading-none">
<div class="container flex flex-col mx-auto">
    <div class="flex my-12">
        <aside>
            <ul>
                <li>
                    <a class="{{ request()->is('/') ? 'active' : '' }}" href="/">Start</a>
                </li>
                <li>
                    <a class="{{ request()->is('about') ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li>
                    <a class="{{ request()->is('work') ? 'active' : '' }}" href="/work">Work</a>
                </li>
                <li>
                    <a class="{{ request()->is('contact') ? 'active' : '' }}" href="/contact">Contact</a>
                </li>
            </ul>
        </aside>
        <main>
            @yield('main')
        </main>
    </div>
</div>
</body>
</html>
