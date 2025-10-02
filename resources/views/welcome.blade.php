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
      
    </script>
</head>
<body class="text-gray-800 antialiased">

    <header class="w-full max-w-7xl mx-auto p-4 flex items-center justify-between sticky top-0 bg-white/95 backdrop-blur-sm z-10 shadow-sm">
        <div class="flex items-center space-x-8">
            <a href="/" class="text-2xl font-black text-gray-900 tracking-wider">
                MENDREA
            </a>

            <nav class="hidden md:flex space-x-6 text-sm font-semibold">
                <a href="#" class="text-gray-700 hover:text-teal-600 transition">
                    Categories
                </a>
                <a href="#" class="text-gray-700 hover:text-teal-600 transition">
                    New Arrivals
                </a>
            </nav>
        </div>

        <div class="flex items-center space-x-4">
            <div class="relative hidden lg:block">
                <input type="text" placeholder="Search products..." class="w-64 py-2 pl-10 pr-4 text-sm border border-gray-300 rounded-full focus:ring-teal-500 focus:border-teal-500 transition duration-150">
                <svg class="w-4 h-4 text-gray-500 absolute left-3 top-1/2 transform -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>

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
        </div>
    </header>

    <main class="max-w-7xl mx-auto">

        <section class="p-4 md:p-8 lg:p-12 mt-8 md:mt-12">
            <div class="bg-gray-900 text-white rounded-3xl overflow-hidden shadow-2xl flex flex-col lg:flex-row items-center">

                <div class="p-8 md:p-16 lg:w-1/2 flex flex-col justify-center text-center lg:text-left">
                    <p class="text-teal-400 text-sm uppercase font-semibold mb-2 tracking-widest">Outerwear Collection</p>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight mb-6">
                        The Essential Workwear Jacket
                    </h1>
                    <p class="text-gray-300 text-lg mb-8 max-w-lg mx-auto lg:mx-0">
                        Made from heavy-duty organic cotton twill, designed for a relaxed fit and built to last through every season.
                    </p>
                    <div class="flex justify-center lg:justify-start">
                        <a href="#" class="bg-teal-600 hover:bg-teal-700 text-white font-bold py-3 px-8 rounded-xl shadow-lg transition duration-300 transform hover:scale-105">
                            Shop Jackets
                        </a>
                    </div>
                </div>

                <div class="lg:w-1/2 p-4 lg:p-0">
                    <img
                        src="https://placehold.co/800x600/34d399/ffffff?text=Workwear+Jacket"
                        alt="Essential Workwear Jacket"
                        class="w-full h-auto object-cover rounded-2xl lg:rounded-none lg:rounded-l-none"
                        onerror="this.onerror=null;this.src='https://placehold.co/800x600/333/ffffff?text=Clothing+Image';"
                    >
                </div>
            </div>
        </section>
        
        <section class="py-16 px-4 sm:px-6 lg:px-8 bg-white/70 rounded-t-3xl shadow-inner">
            <h2 class="text-3xl font-bold text-center mb-12">Everyday Staples</h2>
            <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-2xl transition duration-300">
                    <div class="relative overflow-hidden">
                        <img src="https://placehold.co/600x600/a3a3a3/ffffff?text=Classic+Tee" alt="The Classic Crewneck Tee" class="w-full h-48 object-cover transition duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition duration-300"></div>
                    </div>
                    <div class="p-4 text-center">
                        <h3 class="text-lg font-medium">Classic Crewneck Tee</h3>
                        <p class="text-teal-600 font-bold mt-1">$35.00</p>
                        <a href="#" class="mt-3 text-sm inline-block bg-teal-600 text-white font-bold py-2 px-4 w-full rounded-lg hover:bg-teal-700 transition duration-200">
                            Add to Cart
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-2xl transition duration-300">
                    <div class="relative overflow-hidden">
                        <img src="https://placehold.co/600x600/525252/ffffff?text=Slim+Denim" alt="Slim-Fit Raw Denim" class="w-full h-48 object-cover transition duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition duration-300"></div>
                    </div>
                    <div class="p-4 text-center">
                        <h3 class="text-lg font-medium">Tailored Trousers</h3>
                        <p class="text-teal-600 font-bold mt-1">$95.00</p>
                        <a href="#" class="mt-3 text-sm inline-block bg-teal-600 text-white font-bold py-2 px-4 w-full rounded-lg hover:bg-teal-700 transition duration-200">
                            Add to Cart
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-2xl transition duration-300">
                    <div class="relative overflow-hidden">
                        <img src="https://placehold.co/600x600/71717a/ffffff?text=Cashmere+Knit" alt="Merino Knit Sweater" class="w-full h-48 object-cover transition duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition duration-300"></div>
                    </div>
                    <div class="p-4 text-center">
                        <h3 class="text-lg font-medium">Merino Knit Sweater</h3>
                        <p class="text-teal-600 font-bold mt-1">$120.00</p>
                        <a href="#" class="mt-3 text-sm inline-block bg-teal-600 text-white font-bold py-2 px-4 w-full rounded-lg hover:bg-teal-700 transition duration-200">
                            Add to Cart
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-2xl transition duration-300">
                    <div class="relative overflow-hidden">
                        <img src="https://placehold.co/600x600/404040/ffffff?text=Wool+Beanie" alt="Fine Wool Beanie" class="w-full h-48 object-cover transition duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition duration-300"></div>
                    </div>
                    <div class="p-4 text-center">
                        <h3 class="text-lg font-medium">Fine Wool Beanie</h3>
                        <p class="text-teal-600 font-bold mt-1">$40.00</p>
                        <a href="#" class="mt-3 text-sm inline-block bg-teal-600 text-white font-bold py-2 px-4 w-full rounded-lg hover:bg-teal-700 transition duration-200">
                            Add to Cart
                        </a>
                    </div>
                </div>

            </div>

            <div class="text-center mt-12">
                <a href="#" class="inline-block text-lg font-medium text-teal-600 hover:text-teal-800 border-b-2 border-teal-600 hover:border-teal-800 transition duration-300">
                    Explore the Full Collection &rarr;
                </a>
            </div>
        </section>

    </main>
    <x-footer />
</body>
</html>