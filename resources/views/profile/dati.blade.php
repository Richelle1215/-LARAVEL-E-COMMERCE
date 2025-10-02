<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MENDREA Goods | Simply Unique</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f7f7f7; /* Soft light background */
        }
    </style>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <script>
        // Walang functions ang inilagay dito.
    </script>
</head>
<body class="text-gray-800 antialiased">

    <header class="w-full max-w-7xl mx-auto p-4 flex justify-end sticky top-0 bg-white/95 backdrop-blur-sm z-10 shadow-sm">
        @if (Route::has('login'))
            <nav class="flex items-center space-x-4 text-sm font-medium">
                @auth
                    <a href="{{ url('/redirect') }}" class="text-gray-700 hover:text-teal-600 transition">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="text-gray-700 hover:text-teal-600 transition py-2 px-4">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="bg-teal-600 hover:bg-teal-700 text-white py-2 px-4 rounded-lg transition shadow-md">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>

    <main class="max-w-7xl mx-auto">
        </main>
    
    <footer class="bg-gray-800 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                
                <div class="col-span-2 md:col-span-1">
                    <h3 class="text-2xl font-bold text-teal-400">MENDREA</h3>
                    <p class="text-gray-400 text-sm mt-2">Simply Unique.</p>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-3 text-gray-200">Shop</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-teal-400">All Products</a></li>
                        <li><a href="#" class="hover:text-teal-400">New Arrivals</a></li>
                        <li><a href="#" class="hover:text-teal-400">Best Sellers</a></li>
                        <li><a href="#" class="hover:text-teal-400">Gift Cards</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-3 text-gray-200">Company</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-teal-400">Our Story</a></li>
                        <li><a href="#" class="hover:text-teal-400">Careers</a></li>
                        <li><a href="#" class="hover:text-teal-400">Press</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-3 text-gray-200">Help</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-teal-400">FAQs</a></li>
                        <li><a href="#" class="hover:text-teal-400">Shipping & Returns</a></li>
                        <li><a href="#" class="hover:text-teal-400">Contact Us</a></li>
                    </ul>
                </div>

            </div>

            <div class="mt-10 pt-6 border-t border-gray-700 text-center text-sm text-gray-500">
                &copy; 2025 MENDREA Goods. All rights reserved.
            </div>
        </div>
    </footer>

</body>
</html>