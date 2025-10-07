<nav class="bg-white shadow-sm border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            
            {{-- LEFT SIDE: Logo --}}
            <div class="flex items-center">
                {{-- Logo Image Component (Palitan ito ng inyong actual logo component o <img> tag) --}}
                <a href="{{ url('/') }}" class="flex-shrink-0">
                    <img
                        src="{{ asset('image/logo/blacktext-logo.png') }}" 
                        alt="Brand Logo" 
                        class="h-10 w-auto" 
                    />
                </a>
            </div>

            {{-- RIGHT SIDE: Need Help Link//papalitan ang #{{ route('help') }} --}}
            <div class="flex items-center">
                <a href="#') }}" class="text-sm font-normal text-gray-500 hover:text-[#EE4D2D] transition ease-in-out duration-150">
                    Need help?
                </a>
            </div>
            
        </div>
    </div>
</nav>