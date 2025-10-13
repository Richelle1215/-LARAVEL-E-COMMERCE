<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ config('app.name', 'Bags Store') }}</title>

        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;600;700&display=swap" rel="stylesheet">

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                :root {
                    --color-primary-bg: #FDFDFC;
                    --color-header-bg: #eae4e4ff;
                    --color-primary-text: #1b1b18;
                    --color-border-subtle: #e3e3e0;
                    --color-accent-peach: #FFC89C;
                    --color-secondary-grey: #6b7280;
                }
                body {
                    font-family: 'Instrument Sans', sans-serif;
                }
                .product-card:hover {
                    transform: translateY(-5px);
                    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
                }
            </style>
        @endif
    </head>
    <body class="bg-[var(--color-primary-bg)] text-[var(--color-primary-text)] min-h-screen flex flex-col antialiased">
        @include('components.header') 

        <main class="flex-grow"> 

            {{-- Start of Hero Section (Corrected for "Bags E-commerce" theme) --}}
            <div class="max-w-30xl mx-auto py-12 px-4 sm:px-0 lg:px-15">
                <section class="relative min-h-[600px] flex items-center justify-center overflow-hidden">
                    
                    {{-- Background Image and Overlay --}}
                    <div 
                        class="absolute inset-0 bg-cover bg-center" 
                        style="background-image: linear-gradient(135deg, rgba(193, 134, 93, 0.9), rgba(27, 27, 24, 0.85)), url('{{ $heroImage ?? asset('images/bags-hero.jpg') }}');"
                    >
                    </div> 
                    
                    {{-- Content --}}
                    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-24 text-center">
                        <h1 class="text-5xl sm:text-6xl lg:text-7xl font-bold text-white mb-6 tracking-tight">
                            Carry Your Style with Luxury Bags
                        </h1>
                        <p class="text-xl sm:text-2xl text-white/90 mb-8 max-w-2xl mx-auto font-light">
                            Explore our exclusive collection of handcrafted bags, designed for elegance, quality, and everyday function.
                        </p>
                        
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="#featured" class="group inline-flex items-center justify-center text-lg px-8 py-4 rounded-xl font-semibold 
                                bg-[var(--color-accent-peach)] text-[var(--color-primary-text)] hover:bg-[#ffb47a] transition duration-300">
                                Shop New Arrivals
                                <svg class="ml-2 h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </section>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <section id="featured" class="mb-12"> 
                    <h2 class="text-3xl font-bold text-center mb-10 text-[var(--color-primary-text)]">Featured Bags</h2>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        
                        {{-- Product 1: The Classic Tote --}}
                        <div class="product-card bg-white rounded-2xl shadow-lg overflow-hidden transition duration-300 ease-in-out border border-gray-100">
                            <img src="https://placehold.co/600x400/966F33/FDFDFC?text=Leather+Tote+Bag" alt="The Classic Leather Tote" class="w-full h-56 object-cover" onerror="this.onerror=null;this.src='https://placehold.co/600x400/e3e3e0/6b7280?text=Image+Not+Found'">
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-1">The Classic Leather Tote</h3>
                                <p class="text-sm text-gray-500 mb-3">Spacious and elegant tote, perfect for work or travel. Made with full-grain Italian leather.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-lg font-extrabold text-gray-800">$249.00</span>
                                    <button class="bg-gray-800 text-white text-sm px-4 py-2 rounded-lg hover:bg-gray-600 transition duration-200">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>

                        {{-- Product 2: Urban Backpack --}}
                        <div class="product-card bg-white rounded-2xl shadow-lg overflow-hidden transition duration-300 ease-in-out border border-gray-100">
                            <img src="https://placehold.co/600x400/525252/FDFDFC?text=Urban+Backpack" alt="The Urban Commuter Backpack" class="w-full h-56 object-cover" onerror="this.onerror=null;this.src='https://placehold.co/600x400/e3e3e0/6b7280?text=Image+Not+Found'">
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-1">The Urban Commuter Backpack</h3>
                                <p class="text-sm text-gray-500 mb-3">Durable, water-resistant backpack with padded laptop sleeve. Ideal for the daily grind.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-lg font-extrabold text-gray-800">$129.00</span>
                                    <button class="bg-gray-800 text-white text-sm px-4 py-2 rounded-lg hover:bg-gray-600 transition duration-200">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>

                        {{-- Product 3: The Evening Clutch --}}
                        <div class="product-card bg-white rounded-2xl shadow-lg overflow-hidden transition duration-300 ease-in-out border border-gray-100">
                            <img src="https://placehold.co/600x400/966F33/FDFDFC?text=Evening+Clutch" alt="The Evening Clutch" class="w-full h-56 object-cover" onerror="this.onerror=null;this.src='https://placehold.co/600x400/e3e3e0/6b7280?text=Image+Not+Found'">
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-1">The Suede Evening Clutch</h3>
                                <p class="text-sm text-gray-500 mb-3">Compact and luxurious suede clutch, perfect for special occasions. Features a detachable chain strap.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-lg font-extrabold text-gray-800">$79.00</span>
                                    <button class="bg-gray-800 text-white text-sm px-4 py-2 rounded-lg hover:bg-gray-600 transition duration-200">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>

        @include('components.footer')
        
        <script>
            // 🟢 FIX: This event listener now targets the newly added mobile menu button.
            document.getElementById('mobile-menu-toggle').addEventListener('click', function() {
                const menu = document.getElementById('mobile-menu');
                if (menu.classList.contains('hidden')) {
                    menu.classList.remove('hidden');
                } else {
                    menu.classList.add('hidden');
                }
            });
        </script>

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>