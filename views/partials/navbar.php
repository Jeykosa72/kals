<nav class="sticky top-0 z-30 bg-brand-pink-50/90 backdrop-blur-md transition-all">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <button @click="mobileMenuOpen = !mobileMenuOpen"
            class="md:hidden text-gray-600 hover:text-brand-pink-600 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <a href="#" class="text-3xl font-bold text-brand-pink-600 tracking-tighter">Kals.</a>

        <div class="hidden md:flex space-x-12 text-gray-600 font-medium">
            <a href="#" class="text-brand-pink-600">Home</a>
            <a href="#shop" class="hover:text-brand-pink-600 transition">Shop</a>
            <a href="#floriography" class="hover:text-brand-pink-600 transition">Floriography</a>
            <a href="#gallery" class="hover:text-brand-pink-600 transition">Gallery</a>
            <a href="#gallery" class="hover:text-brand-pink-600 transition">FAQ</a>
            <a href="#gallery" class="hover:text-brand-pink-600 transition">Contact</a>
        </div>

        <div class="flex items-center space-x-4">
            <div class="relative hidden sm:block">
                <input type="text" x-model="searchQuery" placeholder="Search flowers..."
                    class="pl-3 pr-8 py-1 rounded-full border border-brand-pink-200 focus:outline-none focus:border-brand-pink-500 bg-white/50 text-sm w-40 focus:w-56 transition-all duration-300" />
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4 text-gray-400 absolute right-3 top-1/2 transform -translate-y-1/2" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>

            <button @click="cartOpen = true" class="hover:text-brand-pink-600 transition relative p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
                <span x-show="cart.length > 0" x-transition.scale
                    class="absolute -top-1 -right-1 bg-brand-pink-600 text-white text-[10px] font-bold rounded-full h-5 w-5 flex items-center justify-center border-2 border-brand-pink-50"
                    x-text="cart.length"></span>
            </button>
        </div>
    </div>

    <div x-show="mobileMenuOpen" x-collapse
        class="md:hidden bg-white border-t border-brand-pink-100 px-6 py-4 shadow-lg">
        <div class="flex flex-col space-y-4 font-medium text-gray-600">
            <input type="text" x-model="searchQuery" placeholder="Search..."
                class="w-full p-2 border rounded-lg mb-2" />
            <a href="#" @click="mobileMenuOpen = false" class="text-brand-pink-600">Home</a>
            <a href="#shop" @click="mobileMenuOpen = false">Shop</a>
            <a href="#floriography" @click="mobileMenuOpen = false">Floriography</a>
            <a href="#gallery" @click="mobileMenuOpen = false">Gallery</a>
        </div>
    </div>
</nav>