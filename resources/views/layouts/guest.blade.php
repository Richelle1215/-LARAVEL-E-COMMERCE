<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body>
        
        <nav class="bg-white border-b border-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="shrink-0 flex items-center">
                        <img
                            {{-- Tiyakin na TAMA ang image path --}}
                            src="{{ asset('image/logo/blacktext-logo.png') }}" 
                            alt="logo"
                            class="h-20 w-auto" {{-- Maaaring h-10 or h-12 depende sa aktuwal na logo size --}}
                        >
                    </div>

                    <div class="flex items-center">
                        <a href="#') }}" class="text-sm font-normal text-gray-500 hover:text-[#EE4D2D] transition ease-in-out duration-150">
                            Need help?
                        </a>    
                </div>
            </div>
        </nav>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        <x-footer />
        
        @livewireScripts
    </body>
</html>