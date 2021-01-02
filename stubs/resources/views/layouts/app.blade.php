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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/timeago.js/4.0.2/timeago.full.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100">
@include('layouts.navigation')

<!-- Page Heading -->
    <header class="bg-gray-800 shadow hidden md:block sm:pb-5">
        <div class="max-w-7xl mx-auto py-10 px-10">
            <h2 class="font-semibold text-xl text-gray-100 leading-tight">
                {{ $pageTitle }}
            </h2>
        </div>
    </header>

    <!-- Page Content -->
    <main>
        <div class="py-5 sm:pt-0 sm:-mt-5">
            <div class="max-w-7xl mx-auto px-5">
                <div class="bg-white text-gray-600 shadow rounded mb-5 px-5 py-10">
                    {{ $slot }}
                </div>

                <div class="mb-20">
                    {{ $footer }}
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
