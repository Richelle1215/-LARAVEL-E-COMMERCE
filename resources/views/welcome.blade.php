<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ELLE FASHION | Timeless Style</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* Define colors based on the Elle Fashion image (muted rose/brown for accent) */
        :root {
            --primary-text: #222222; 
            --secondary-text: #666666; 
            --accent-color: #8C5B56; /* Muted Rose/Brown from the image's buttons */
            --light-bg: #F5F5F5; /* Light grey background */
        }
        
        /* Importing an elegant serif font (Playfair Display) for titles and a clean sans-serif (Inter) for body text */
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Inter:wght@100..900&display=swap');
        
        body {
            font-family: 'Inter', sans-serif; /* Default for body text */
            background-color: var(--light-bg); 
            color: var(--primary-text);
        }
        
        .font-serif-elegant {
            font-family: 'Playfair Display', serif; /* Custom class for high-fashion headings */
        }

        /* Custom Tailwind classes for the new style */
        .text-accent { color: var(--accent-color); }
        .bg-accent { background-color: var(--accent-color); }
        .hover\:bg-accent-dark:hover { background-color: #7A4E49; }
        
        /* Custom height utility for better responsiveness on the hero section to fit the screen */
        .h-hero {
            height: 50vh; 
            max-height: 600px; 
        }
        @media (min-width: 640px) {
            .h-hero {
                height: 70vh; 
            }
        }
    </style>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <script>
      
    </script>
</head>
<body class="antialiased">

    @include('navigations.navigation-welcome')

<section class="relative h-hero mb-16 bg-white flex items-center justify-center">
    <div class="relative max-w-7xl mx-auto px-8 md:px-16 flex flex-col md:flex-row items-center justify-between w-full h-full">

        {{-- Left Content Area --}}
        <div class="flex flex-col justify-center text-primary-text md:w-1/2 lg:w-2/5 p-4 md:p-0">
            <h1 class="text-5xl md:text-6xl font-extrabold leading-tight mb-4 font-serif-elegant">
                Step Into Elegance
            </h1>
            <p class="text-lg md:text-xl mb-8 max-w-lg font-light text-secondary-text">
                Discover our curated collection of premium sandals, designed for the modern woman who values both style and comfort.
            </p>
            <div class="flex space-x-4">
                <a href="#" class="bg-accent hover:bg-accent-dark text-white font-semibold py-3 px-8 w-fit rounded-md transition duration-300">
                    Shop Collection
                </a>
                <a href="#" class="border border-gray-300 text-primary-text font-semibold py-3 px-8 w-fit rounded-md hover:bg-gray-100 transition duration-300">
                    New Arrivals
                </a>
            </div>
        </div>

        {{-- Right Image Area --}}
        <div class="md:w-1/2 lg:w-3/5 h-full flex items-center justify-center p-4">
            <img
                {{-- IMPORTANT: Replace the placeholder below with your actual image path: --}}
                src="{{ asset('image/CoverPage/cover-page.jpg') }}" 
                alt="Elegant Sandals"
                class="w-full h-auto max-h-full object-contain"
            >
        </div>
    </div>
</section>

    <main class="max-w-7xl mx-auto">
        
        <section class="py-16 px-4 sm:px-6 lg:px-8 bg-light">
            <h2 class="text-3xl font-bold text-primary text-center mb-12 font-serif-elegant">Fall/Winter Collection</h2>
            <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                    <img src="{{ asset('image/products/sandal-1.jpg') }}"  alt="Classic Block Heel Sandal" class="w-full h-72 object-cover">
                    <div class="p-4 text-center">
                        <h3 class="text-lg font-medium text-primary">Classic Block Heel Sandal</h3>
                        <p class="text-accent font-bold mt-1 mb-3">₱2,899</p>
                        <a href="#" class="mt-3 text-sm inline-block bg-accent text-white font-semibold py-2 px-5 w-full rounded-md hover:bg-accent-dark transition duration-200">
                            View Details
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                    <img src="{{ asset('image/products/sandal-2.jpg') }}" alt="Elegant Strappy Heels" class="w-full h-72 object-cover">
                    <div class="p-4 text-center">
                        <h3 class="text-lg font-medium text-primary">Elegant Strappy Heels</h3>
                        <p class="text-accent font-bold mt-1 mb-3">₱3,299</p>
                        <a href="#" class="mt-3 text-sm inline-block bg-accent text-white font-semibold py-2 px-5 w-full rounded-md hover:bg-accent-dark transition duration-200">
                            View Details
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                    <img src="{{ asset('image/products/sandal-3.jpg') }}" alt="Minimalist Flat Sandal" class="w-full h-72 object-cover">
                    <div class="p-4 text-center">
                        <h3 class="text-lg font-medium text-primary">Minimalist Flat Sandal</h3>
                        <p class="text-accent font-bold mt-1 mb-3">₱1,899</p>
                        <a href="#" class="mt-3 text-sm inline-block bg-accent text-white font-semibold py-2 px-5 w-full rounded-md hover:bg-accent-dark transition duration-200">
                            View Details
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                    <img src="{{ asset('image/products/sandal-4.jpg') }}" alt="Platform Wedge Sandal" class="w-full h-72 object-cover">
                    <div class="p-4 text-center">
                        <h3 class="text-lg font-medium text-primary">Platform Wedge Sandal</h3>
                        <p class="text-accent font-bold mt-1 mb-3">₱2,899</p>
                        <a href="#" class="mt-3 text-sm inline-block bg-accent text-white font-semibold py-2 px-5 w-full rounded-md hover:bg-accent-dark transition duration-200">
                            View Details
                        </a>
                    </div>
                </div>

            </div>

            <div class="text-center mt-12">
                <a href="#" class="inline-block text-lg font-medium text-accent hover:underline decoration-accent transition duration-300">
                    Explore the Full Lookbook &rarr;
                </a>
            </div>
        </section>

    </main>
    @include('footers.footer-welcome')
</body>
</html>