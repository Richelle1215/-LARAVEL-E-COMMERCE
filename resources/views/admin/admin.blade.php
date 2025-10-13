<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - {{ config('app.name', 'Laravel') }}</title>

    <script src="https://cdn.tailwindcss.com"></script>
    
    {{-- FONT: Inter from Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.4/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLMDJ8u7tQO4E+JtB2UjYhT/T42f3Q7I1a0dJ3e1b7D6d75U/61fQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Applying your Welcome Page's base styles (since admin views use Tailwind classes like bg-[var(--...)] --}}
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            :root {
                /* BAGONG LIGHT COLOR SCHEME */
                --color-primary-bg: #FFFFFF; /* Purong puti para sa ultra-light look */
                --color-header-bg: #F8F9FA; /* Napakagaan na grey para sa header/topbar */
                --color-primary-text: #343A40; /* Darker greyish-black para sa basahing text */
                --color-border-subtle: #E9ECEF; /* Halos hindi nakikita ang border */
                --color-accent-peach: #66CCFF; /* Fresh at Light Blue/Cyan accent (pinalitan ko ang peach) */
                --color-secondary-grey: #ADB5BD; /* Light-medium grey */
                --color-sidebar-bg: #FFFFFF; /* Puting sidebar (kung gagamitin) */
            }
            body {
                font-family: 'Inter', sans-serif;
            }
        </style>
    @endif

    {{-- A spot for page-specific CSS --}}
    @stack('styles')

    <style>
        /* CSS to make text bold on hover for all sidebar links */

        /* Target the main navigation links */
        #accordionSidebar .nav-link:hover span {
            font-weight: bold !important;
        }

        /* Target the submenu collapse items */
        #accordionSidebar .collapse-item:hover {
            font-weight: bold !important;
        }

        /* Optional: To maintain a better visual state, 
        also apply the bold style to the currently active link */
        #accordionSidebar .nav-item.active .nav-link span {
            font-weight: bold; 
        }
    </style>
</head>
<body class="bg-[var(--color-primary-bg)] text-[var(--color-primary-text)] min-h-screen flex antialiased">
    
    <div id="wrapper" class="flex flex-grow"> 
        
        @include('Admin.sidebar')

        <div id="content-wrapper" class="flex flex-col flex-grow">

            <main id="content" class="flex-grow p-4 sm:p-6 lg:p-8">
                <div class="container-fluid">
                    {{-- 3. Main Content Area (Dashboard or other views) --}}
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    {{-- Main JavaScript bundle (from your welcome page code) --}}
    @if (file_exists(public_path('build/manifest.json')) || file-exists(public_path('hot')))
        {{-- Vite already included above, this is for older Mix setups --}}
    @else
        <script src="{{ asset('js/app.js') }}"></script>
    @endif
    
    {{-- A spot for page-specific JavaScript --}}
    @stack('scripts') 

</body>
</html>