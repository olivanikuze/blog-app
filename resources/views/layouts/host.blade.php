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
    </head>
    <body class="font-sans text-gray-300 antialiased">
         <nav class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <a href="/viewers" class="text-xl font-bold text-gray-800 dark:text-white">The Posts</a>
                    </div>
                    <div class="flex items-center space-x-4">

                        <a href="/about" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-white">About</a>
                        <a href="/contact" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-white">Contact</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="w-full px-4 py-10 flex flex-col  items-center pt-0 sm:pt-0 bg-gray-100 dark:bg-gray-100">
            {{-- <div> --}}
                {{-- <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a> --}}
            {{-- </div> --}}

            <div class="w-full  sm:max-w-3xl mt-6 px-6 py-20 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
             <footer class="bg-gray-200 py-6 text-center text-gray-600">
    &copy; 2025 BLOG&BLOG. All rights reserved.
  </footer>
    </body>
</html>
