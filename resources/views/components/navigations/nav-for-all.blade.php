<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-full mx-auto px-10 sm:px-6 lg:px-12">
        
        {{-- MAIN NAVIGATION BAR --}}
        <div class="h-20 flex items-center justify-between">
            
            {{-- LOGO & NAVIGATION LINKS (Left Side) --}}
            <div class="flex items-center text-sm font-semibold tracking-wider uppercase">
                
                {{-- Logo (Gamitin ang tamang sizing at idadagdag ang mr-8 para sa extra space) --}}
                <div class="flex items-left mr-10"> {{-- Ihiwalay ang logo sa links --}}
                    <img
                        {{-- Tiyakin na TAMA ang image path --}}
                        src="{{ asset('image/logo/blacktext-logo.png') }}" 
                        alt="logo"
                        class="h-20 w-auto" {{-- Maaaring h-10 or h-12 depende sa aktuwal na logo size --}}
                    >
                </div>
                
                {{-- Navigation Links (Nasa tabi ng Logo) --}}
                <div class="flex items-center space-x-6">
                    <a href="#" class="text-gray-700 hover:text-[#8C5B56] transition">CATEGORIES</a>
                    <a href="#" class="text-gray-700 hover:text-[#8C5B56] transition">NEW ARRIVALS</a>
                    <a href="#" class="text-gray-700 hover:text-[#8C5B56] transition">LOOKBOOK</a>
                    <a href="#" class="text-gray-700 hover:text-[#8C5B56] transition">SALE</a>
                </div>
            </div>

            {{-- SEARCH BAR (Center) --}}
            <div class="w-1/3 flex justify-center">
                <div class="relative w-full max-w-sm"> {{-- Ginawang max-w-sm para hindi masyadong malapad --}}
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

            {{-- LOGIN / REGISTER (Right Side) --}}
            <div class="flex items-center space-x-4">
                <div class="flex items-center space-x-3 text-base">
                    {{-- I-link sa Login Route --}}
                    <a href="{{ route('login') }}" class="font-medium text-gray-600 hover:text-[#8C5B56] transition">Log in</a>
                    <span class="text-gray-300">|</span>
                    {{-- I-link sa Register Route --}}
                    <a href="{{ route('register') }}" class="font-medium text-gray-600 hover:text-[#8C5B56] transition">Register</a>
                </div>
            </div>
        </div>
        
    </div>
</nav>