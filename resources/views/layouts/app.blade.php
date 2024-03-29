<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen antialiased leading-none font-sans">

    <div id="app">
        <header class="bg-indigo-500 py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-white no-underline">
                        TheScenicWorld
                    </a>
                </div>
                <nav class="space-x-4 text-white text-sm sm:text-base">
                    <a href="/blog" class="no-underline hover:underline">
                        Blog
                    </a>
                    <a href="{{ route('about') }}" class="no-underline hover:underline">About</a>
                    <a href="{{ route('locations') }}" class="no-underline hover:underline">Top 10 Locations</a>
                    <a href="{{ route('faq') }}" class="no-underline hover:underline">FAQ</a>
                    @guest
                    <a class=" no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                    <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                    @else
                    <span>{{ Auth::user()->name }}</span>

                    <a href="{{ route('logout') }}" class="no-underline hover:underline" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                    @endguest
                </nav>
            </div>
        </header>

        @yield('content')
    </div>

    <div>@include('layouts.footer')</div>
</body>

</html>