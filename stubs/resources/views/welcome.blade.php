<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 items-center p-5">

            <div class="w-full max-w-3xl mx-auto bg-gray-50 p-10 rounded-xl">
                <div class="flex flex-col justify-center items-center">
                    <div>
                        <x-application-logo class="block h-16 w-auto fill-current text-teal-500" />
                    </div>
                    <div class="text-4xl text-gray-700 font-bold mt-5">
                        {{ config('app.name') }}
                    </div>
                </div>

                <hr class="border-gray-200 mt-10">

                @if (Route::has('login'))
                    <div class="mt-10 flex justify-around">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-gray-400 hover:text-gray-700 hover:underline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-gray-400 hover:text-gray-700 hover:underline">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-gray-400 hover:text-gray-700 hover:underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>

        </div>
    </body>
</html>
