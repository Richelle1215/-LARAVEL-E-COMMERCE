<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'Admin Dashboard')</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
        
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" /> --}}
    </head>
    <body class="font-sans antialiased bg-gray-100">
        <x-banner />

        <div class="min-h-screen">
            
            {{-- 1. TOP NAVIGATION (Jetstream Default) --}}
            @livewire('navigation-menu')

            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <main class="py-6">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    
                    {{-- Flex container to split the screen --}}
                    <div class="flex flex-col lg:flex-row gap-6"> 
                        
                        <div class="lg:w-1/5 bg-white shadow-xl sm:rounded-lg p-4">
                            <h3 class="text-xl font-bold mb-4 text-gray-800 border-b pb-2">Admin Menu</h3>
                            <nav class="space-y-1">
                                {{-- Dashboard Link (Replace route with your actual admin route) --}}
                                <a href="{{ route('dashboard') }}" class="flex items-center p-3 rounded-md text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 font-medium transition duration-150">
                                    {{-- <i class="fa fa-tachometer-alt mr-3"></i> --}} Dashboard
                                </a>
                                <a href="#" class="flex items-center p-3 rounded-md text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 font-medium transition duration-150">
                                    {{-- <i class="fa fa-users mr-3"></i> --}} Manage Users
                                </a>
                                <a href="#" class="flex items-center p-3 rounded-md text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 font-medium transition duration-150">
                                    {{-- <i class="fa fa-box mr-3"></i> --}} Products
                                </a>
                                <a href="#" class="flex items-center p-3 rounded-md text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 font-medium transition duration-150">
                                    {{-- <i class="fa fa-cog mr-3"></i> --}} Settings
                                </a>
                            </nav>
                        </div>

                        <div class="lg:w-4/5">
                            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                                @yield('content')
                            </div>
                        </div>

                    </div>
                </div>
            </main>
        </div>

        @stack('modals')
        @livewireScripts
    </body>
</html>