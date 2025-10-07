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

    <x-navigations.nav-for-all />

    <section class="relative h-hero overflow-hidden mb-16">
        

        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/40 to-transparent">
            <img
            {{-- Heto ang bagong src --}}
            src="{{ asset('image/CoverPage/cover-page.png') }}" 
            alt="cover"
            class="absolute inset-0 w-full h-full object-cover object-top"
            >
        </div>



        <div class="absolute inset-0 max-w-7xl mx-auto px-8 md:px-16 flex flex-col justify-center text-white">


            <h1 class="text-5xl md:text-6xl font-extrabold leading-tight mb-4 font-serif-elegant">
                The Signature Trench Coat
            </h1>
            <p class="text-lg md:text-xl mb-8 max-w-lg font-light text-gray-200">
                Crafted from premium Italian wool. An iconic piece.
            </p>
            <a href="#" class="bg-accent hover:bg-accent-dark text-white font-semibold py-3 px-8 w-fit rounded-md transition duration-300">
                Shop Now
            </a>
        </div>
    </section>

    <main class="max-w-7xl mx-auto">
        
        <section class="py-16 px-4 sm:px-6 lg:px-8 bg-light">
            <h2 class="text-3xl font-bold text-primary text-center mb-12 font-serif-elegant">Fall/Winter Collection</h2>
            <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                    <img src="https://placehold.co/600x600/E8E5E0/E8E5E0?text=" alt="Silk Gathered Blouse" class="w-full h-72 object-cover">
                    <div class="p-4 text-center">
                        <h3 class="text-lg font-medium text-primary">Silk Gathered Blouse</h3>
                        <p class="text-accent font-bold mt-1 mb-3">$149.00</p>
                        <a href="#" class="mt-3 text-sm inline-block bg-accent text-white font-semibold py-2 px-5 w-full rounded-md hover:bg-accent-dark transition duration-200">
                            View Details
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                    <img src="https://placehold.co/600x600/4F4F4F/4F4F4F?text=" alt="Wool-Blend Trousers" class="w-full h-72 object-cover">
                    <div class="p-4 text-center">
                        <h3 class="text-lg font-medium text-primary">Wool-Blend Trousers</h3>
                        <p class="text-accent font-bold mt-1 mb-3">$195.00</p>
                        <a href="#" class="mt-3 text-sm inline-block bg-accent text-white font-semibold py-2 px-5 w-full rounded-md hover:bg-accent-dark transition duration-200">
                            View Details
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                    <img src="https://placehold.co/600x600/D9D5D0/D9D5D0?text=" alt="Lux Cashmere Sweater" class="w-full h-72 object-cover">
                    <div class="p-4 text-center">
                        <h3 class="text-lg font-medium text-primary">Lux Cashmere Sweater</h3>
                        <p class="text-accent font-bold mt-1 mb-3">$320.00</p>
                        <a href="#" class="mt-3 text-sm inline-block bg-accent text-white font-semibold py-2 px-5 w-full rounded-md hover:bg-accent-dark transition duration-200">
                            View Details
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                    <img src="https://placehold.co/600x600/C08B6B/C08B6B?text=" alt="Italian Leather Tote" class="w-full h-72 object-cover">
                    <div class="p-4 text-center">
                        <h3 class="text-lg font-medium text-primary">Italian Leather Tote</h3>
                        <p class="text-accent font-bold mt-1 mb-3">$450.00</p>
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

    <x-footer />
</body>
</html>