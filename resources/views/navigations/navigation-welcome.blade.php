<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-full mx-auto px-10 sm:px-6 lg:px-12">
        
        {{-- MAIN NAVIGATION BAR --}}
        <div class="h-20 flex items-center justify-between">
            
            {{-- LOGO & NAVIGATION LINKS (Left Side) --}}
            <div class="flex items-center text-sm font-semibold tracking-wider uppercase">
                
                {{-- Logo --}}
                <div class="flex items-left mr-10">
                    <img
                        src="{{ asset('image/logo/blacktext-logo.png') }}" 
                        alt="logo"
                        class="h-20 w-auto" 
                    >
                </div>
                
                {{-- Navigation Links --}}
                <div class="flex items-center space-x-6">
                    <a href="#" class="text-gray-700 hover:text-[#8C5B56] transition">CATEGORIES</a>
                    <a href="#" class="text-gray-700 hover:text-[#8C5B56] transition">NEW ARRIVALS</a>
                    <a href="#" class="text-gray-700 hover:text-[#8C5B56] transition">SALE</a>
                </div>
            </div>

            {{-- SEARCH BAR (Center) --}}
            <div class="w-1/3 flex justify-center">
                <div class="relative w-full max-w-sm">
                    <input 
                        type="search" 
                        placeholder="Search for clothes, bags, and more..." 
                        class="w-full pl-5 pr-12 py-2 border border-gray-300 rounded-lg text-base focus:ring-[#8C5B56] focus:border-[#8C5B56] transition"
                    >
                    
                    {{-- SEARCH ICON --}}
                    <button type="submit" 
                        class="absolute right-0 top-0 h-full w-10 bg-[#8C5B56] hover:bg-[#7A4E49] text-white rounded-r-lg flex items-center justify-center font-bold text-xl transition"
                    >
                        &#x1F50D; 
                    </button>
                </div>
            </div>

            {{-- USER ICONS / AUTH LINKS (Right Side) --}}
            <div class="flex items-center space-x-4">
                
                {{-- Icons --}}
                <a href="#" class="text-xl text-gray-700 hover:text-[#8C5B56] transition">&#x1F6D2;</a> {{-- Cart Icon --}}
                {{-- Profile icon ay nasa Jetstream user dropdown na --}}
                
                {{-- Auth Links (Inalis ang sobrang <nav> tag at inayos ang styling) --}}
                @if (Route::has('login'))
                    @auth
                        {{-- Kung naka-login, gamitin ang built-in user dropdown (Jetstream) --}}
                        {{-- Ang Jetstream ay nag-a-assume na gagamitin mo ang <x-app-layout> para dito --}}
                        <a href="{{ url('/admin') }}" class="text-sm font-semibold text-gray-700 hover:text-[#8C5B56] transition">Admin</a>
                        {{-- Maaari mo ring ilagay dito ang <x-app-layout> kung may user dropdown ka --}}
                    @else
                        {{-- Login link --}}
                        <a href="{{ route('login') }}" 
                           class="text-sm font-semibold text-gray-700 hover:text-[#8C5B56] transition">
                           LOGIN
                        </a>

                        @if (Route::has('register'))
                            {{-- Register link (Mas inayos ang styling para mag-match sa accent color) --}}
                            <a href="{{ route('register') }}"
                                class="text-sm font-semibold text-white px-3 py-1 rounded transition" 
                                style="background-color: #8C5B56; hover:background-color: #7A4E49;">
                                REGISTER
                            </a>
                        @endif
                    @endauth     
                @endif
            </div>
            
        </div>
        
    </div>
</header>