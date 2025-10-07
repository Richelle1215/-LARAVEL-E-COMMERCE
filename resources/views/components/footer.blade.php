<footer class="bg-gray-800 mt-12" style="background-color: #333333;">
    {{-- Nag-set tayo ng Dark Charcoal background --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4"> 
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

        <div class="col-span-2 md:col-span-1">
            {{-- Logo --}}
            <img
                {{-- Heto ang bagong src --}}
                src="{{ asset('image/logo/whitetext-logo.png') }}" 
                alt="logo"
                {{-- Pinalitan ang mx-auto ng w-32 at pinalitan ang mb-2 ng mb-1 --}}
                class="mb-1 w-32 h-auto" 
            >
            
        </div>

            <div>
                {{-- Heading, Light Grey --}}
                <h4 class="text-base font-semibold mb-2 text-gray-200">Shop</h4> 
                {{-- Links, Light Grey, may hover effect na Muted Beige/Brown --}}
                <ul class="space-y-1.5 text-xs text-gray-400" style="color: #CCCCCC;"> 
                    <li><a href="#" class="hover:underline" style="color: #CCCCCC; transition: color 0.2s;" onmouseover="this.style.color='#C5B099'" onmouseout="this.style.color='#CCCCCC'">All Products</a></li>
                    <li><a href="#" class="hover:underline" style="color: #CCCCCC; transition: color 0.2s;" onmouseover="this.style.color='#C5B099'" onmouseout="this.style.color='#CCCCCC'">New Arrivals</a></li>
                    <li><a href="#" class="hover:underline" style="color: #CCCCCC; transition: color 0.2s;" onmouseover="this.style.color='#C5B099'" onmouseout="this.style.color='#CCCCCC'">Best Sellers</a></li>
                    <li><a href="#" class="hover:underline" style="color: #CCCCCC; transition: color 0.2s;" onmouseover="this.style.color='#C5B099'" onmouseout="this.style.color='#CCCCCC'">Gift Cards</a></li>
                </ul>
            </div>

            <div>
                {{-- Heading, Light Grey --}}
                <h4 class="text-base font-semibold mb-2 text-gray-200">Company</h4>
                {{-- Links, Light Grey, may hover effect na Muted Beige/Brown --}}
                <ul class="space-y-1.5 text-xs text-gray-400" style="color: #CCCCCC;">
                    <li><a href="#" class="hover:underline" style="color: #CCCCCC; transition: color 0.2s;" onmouseover="this.style.color='#C5B099'" onmouseout="this.style.color='#CCCCCC'">Our Story</a></li>
                    <li><a href="#" class="hover:underline" style="color: #CCCCCC; transition: color 0.2s;" onmouseover="this.style.color='#C5B099'" onmouseout="this.style.color='#CCCCCC'">Careers</a></li>
                    <li><a href="#" class="hover:underline" style="color: #CCCCCC; transition: color 0.2s;" onmouseover="this.style.color='#C5B099'" onmouseout="this.style.color='#CCCCCC'">Press</a></li>
                </ul>
            </div>

            <div>
                {{-- Heading, Light Grey --}}
                <h4 class="text-base font-semibold mb-2 text-gray-200">Help</h4>
                {{-- Links, Light Grey, may hover effect na Muted Beige/Brown --}}
                <ul class="space-y-1.5 text-xs text-gray-400" style="color: #CCCCCC;">
                    <li><a href="#" class="hover:underline" style="color: #CCCCCC; transition: color 0.2s;" onmouseover="this.style.color='#C5B099'" onmouseout="this.style.color='#CCCCCC'">FAQs</a></li>
                    <li><a href="#" class="hover:underline" style="color: #CCCCCC; transition: color 0.2s;" onmouseover="this.style.color='#C5B099'" onmouseout="this.style.color='#CCCCCC'">Shipping & Returns</a></li>
                    <li><a href="#" class="hover:underline" style="color: #CCCCCC; transition: color 0.2s;" onmouseover="this.style.color='#C5B099'" onmouseout="this.style.color='#CCCCCC'">Contact Us</a></li>
                </ul>
            </div>

        </div>

        {{-- Footer line at copyright --}}
        <div class="mt-6 pt-4 border-t" style="border-color: #555555; opacity: 0.8;">
            <p class="text-center text-xs" style="color: #AAAAAA;">
                &copy; 2025 MENDREA Goods. All rights reserved.
            </p>
        </div>
    </div>
</footer>