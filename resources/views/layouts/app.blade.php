<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Icons -->
         <link rel="icon" href="{{ asset('img/icons/android-chrome-192x192.png') }}" type="image/png" sizes="192x192" />
         <link rel="icon" href="{{ asset('img/icons/android-chrome-512x512.png') }}" type="image/png" sizes="512x512" />
         <link rel="icon" href="{{ asset('img/icons/favicon-16x16.png') }}" type="image/png" sizes="16x16" />
         <link rel="icon" href="{{ asset('img/icons/favicon-32x32.png') }}" type="image/png" sizes="32x32" />
         <link rel="apple-touch-icon" href="{{ asset('img/icons/android-chrome-192x192.png') }}">
         <link rel="manifest" href="{{ asset('build/manifest.json') }}" type="application/json"> 
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
