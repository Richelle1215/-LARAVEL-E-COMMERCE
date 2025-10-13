<header class="sticky top-0 z-50 bg-card/95 bg-white border-b border-border shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Parent div for desktop/mobile top bar --}}
        <div class="flex justify-between items-center h-16">
            
            {{-- Logo & Desktop Nav Group --}}
            <div class="flex items-center space-x-8">
                <a href="/" class="text-2xl font-bold tracking-tight text-foreground hover:text-accent transition-colors">
                    LUXE BAGS
                </a>
                
                {{-- Desktop Navigation Links --}}
                <nav class="hidden md:flex items-center space-x-6">
                    <a href="#shop" class="text-foreground hover:text-accent transition-colors font-medium">Shop</a>
                    <a href="#collections" class="text-foreground hover:text-accent transition-colors font-medium">Collections</a>
                    <a href="#about" class="text-foreground hover:text-accent transition-colors font-medium">About</a>
                    <a href="#contact" class="text-foreground hover:text-accent transition-colors font-medium">Contact</a>
                </nav>
            </div>

            {{-- Utility & Auth Group (Desktop and Mobile Toggle) --}}
            <div x-data="{ mobileMenuOpen: false }" class="flex items-center space-x-4">
                
                {{-- Desktop Utility (Cart) --}}
                <div class="hidden md:flex items-center space-x-4">
                    {{-- Cart Button --}}
                    <button class="relative p-2 rounded-md hover:bg-secondary transition-colors">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" /></svg>
                        <span class="absolute -top-1 -right-1 bg-accent text-accent-foreground text-xs rounded-full w-5 h-5 flex items-center justify-center">
                            0
                        </span>
                    </button>
                    
                    {{-- Desktop Auth Links --}}
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/redirect') }}" class="text-sm font-bold bg-accent text-accent-foreground px-3 py-1 rounded-md hover:bg-accent/90 transition duration-300">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm font-bold text-foreground hover:text-accent transition-colors">
                                Log in
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-sm font-bold bg-accent text-accent-foreground px-3 py-1 rounded-md hover:bg-accent/90 transition duration-300">
                                    Register
                                </a>
                            @endif
                        @endauth
                    @endif
                </div>

                {{-- Mobile Menu Toggle Button --}}
                <button
                    @click="mobileMenuOpen = !mobileMenuOpen"
                    class="md:hidden p-2 rounded-lg hover:bg-secondary transition-colors"
                    aria-label="Toggle Menu"
                >
                    <svg x-show="mobileMenuOpen" class="h-6 w-6 text-foreground" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                    <svg x-show="!mobileMenuOpen" class="h-6 w-6 text-foreground" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
                </button>

            </div>
        </div>
    </div>

    {{-- Mobile Menu Dropdown --}}
    <div x-show="mobileMenuOpen" x-cloak x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90" class="md:hidden bg-card border-t border-border absolute w-full shadow-lg">
        <nav class="flex flex-col p-4 space-y-3">
            <a href="#shop" class="text-foreground hover:text-accent transition-colors font-medium py-2 border-b border-border">Shop</a>
            <a href="#collections" class="text-foreground hover:text-accent transition-colors font-medium py-2 border-b border-border">Collections</a>
            <a href="#about" class="text-foreground hover:text-accent transition-colors font-medium py-2 border-b border-border">About</a>
            <a href="#contact" class="text-foreground hover:text-accent transition-colors font-medium py-2">Contact</a>
            
            {{-- Mobile Auth/Utility --}}
            <div class="flex flex-col space-y-3 pt-3 border-t border-border">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/redirect') }}" class="text-sm font-bold bg-accent text-accent-foreground px-3 py-2 rounded-md text-center">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm font-bold bg-secondary text-foreground px-3 py-2 rounded-md text-center hover:bg-secondary/80">
                            Log in
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-sm font-bold bg-accent text-accent-foreground px-3 py-2 rounded-md text-center hover:bg-accent/90">
                                Register
                            </a>
                        @endif
                    @endauth
                @endif
                
                {{-- Cart on Mobile --}}
                <button class="relative flex items-center justify-center p-2 border border-border rounded-md hover:bg-secondary transition-colors">
                    <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" /></svg>
                    <span class="text-sm font-medium">View Cart (0)</span>
                </button>
            </div>
        </nav>
    </div>
</header>