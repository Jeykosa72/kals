 <div x-cloak class="relative z-50">
     <div x-show="cartOpen" x-transition.opacity.duration.300ms @click="cartOpen = false"
         class="fixed inset-0 bg-black/40 backdrop-blur-sm"></div>

     <div x-show="cartOpen" x-transition:enter="transition ease-out duration-300 transform"
         x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
         x-transition:leave="transition ease-in duration-300 transform" x-transition:leave-start="translate-x-0"
         x-transition:leave-end="translate-x-full"
         class="fixed right-0 top-0 h-full w-full md:w-[30%] bg-white shadow-2xl flex flex-col">
         <div class="p-6 flex justify-between items-center border-b border-gray-100 bg-brand-pink-50/50">
             <h2 class="text-xl font-bold text-gray-800">Your Bouquets</h2>
             <button @click="cartOpen = false" class="hover:text-red-500 transition">
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         d="M6 18L18 6M6 6l12 12" />
                 </svg>
             </button>
         </div>

         <div class="flex-1 overflow-y-auto p-6 space-y-6">
             <template x-if="cart.length === 0">
                 <div class="h-full flex flex-col items-center justify-center text-gray-400">
                     <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-2 opacity-50" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                             d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                     </svg>
                     <p>Your cart is empty.</p>
                 </div>
             </template>
             <template x-for="(item, index) in cart" :key="index">
                 <div class="flex items-center gap-4 bg-white p-3 rounded-xl shadow-sm border border-gray-100">
                     <img :src="item.image" class="w-16 h-16 object-cover rounded-lg bg-gray-100" />
                     <div class="flex-1">
                         <h3 class="font-semibold text-gray-800 text-sm" x-text="item.name"></h3>
                         <p class="text-brand-pink-600 font-bold text-xs" x-text="item.price"></p>
                     </div>
                     <button @click="removeFromCart(index)" class="text-gray-400 hover:text-red-500 p-2">
                         <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                             fill="currentColor">
                             <path fill-rule="evenodd"
                                 d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 000-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                 clip-rule="evenodd" />
                         </svg>
                     </button>
                 </div>
             </template>
         </div>

         <div class="p-6 border-t border-gray-100 bg-white">
             <div class="flex justify-between mb-4 text-sm font-medium text-gray-600">
                 <span>Subtotal</span>
                 <span class="text-gray-900 font-bold" x-text="'$' + cartTotal"></span>
             </div>
             <button
                 class="w-full bg-brand-pink-600 text-white py-4 rounded-xl font-bold hover:bg-brand-pink-700 transition shadow-lg shadow-brand-pink-200">
                 Checkout Now
             </button>
         </div>
     </div>
 </div>

 <section class="container mx-auto px-6 py-8">
     <div
         class="relative overflow-hidden md:overflow-visible bg-brand-pink-100 rounded-[40px] h-[500px] flex flex-col md:flex-row shadow-xl shadow-brand-pink-100/50">
         <div class="absolute top-10 left-10 w-32 h-32 bg-dots-pattern opacity-50 z-0"></div>

         <div class="w-full md:w-1/2 p-12 md:p-24 flex flex-col justify-center z-10 relative pointer-events-none">
             <h1 class="text-5xl md:text-6xl font-bold text-gray-900 leading-tight mb-6 drop-shadow-sm">
                 Feel The <br />
                 Blossom
             </h1>
             <p class="text-gray-600 text-lg mb-10 max-w-md">
                 Experience the language of flowers. Hand-picked arrangements
                 delivered to your door.
             </p>
             <button
                 class="bg-brand-pink-600 text-white px-10 py-4 rounded-full font-semibold hover:bg-brand-pink-700 transition shadow-lg shadow-brand-pink-200 w-max pointer-events-auto">
                 Explore Collections
             </button>
         </div>

         <div class="absolute md:relative w-full md:w-1/2 h-full z-0 md:z-auto">
             <template x-for="(slide, index) in heroSlides" :key="index">
                 <img :src="slide" x-show="heroActiveSlide === index"
                     x-transition:enter="transition opacity duration-1000" x-transition:enter-start="opacity-0"
                     x-transition:enter-end="opacity-100" x-transition:leave="transition opacity duration-1000"
                     x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                     class="absolute inset-0 w-full h-full object-cover md:rounded-3xl md:translate-x-10 md:scale-105 origin-right" />
             </template>
         </div>

         <button @click="prevSlide()"
             class="absolute left-8 top-1/2 -translate-y-1/2 bg-white/80 p-3 rounded-full text-gray-600 hover:bg-white z-20 shadow-sm hidden md:block hover:scale-110 transition">
             <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor" stroke-width="2">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
             </svg>
         </button>
         <button @click="nextSlide()"
             class="absolute right-8 top-1/2 -translate-y-1/2 bg-white/80 p-3 rounded-full text-gray-600 hover:bg-white z-20 shadow-sm hidden md:block hover:scale-110 transition">
             <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor" stroke-width="2">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
             </svg>
         </button>
     </div>
 </section>

 <section class="container mx-auto px-6 py-20">
     <div class="relative mb-16 text-center">
         <div
             class="absolute top-0 left-4 md:left-20 -translate-x-1/2 -translate-y-1/2 w-24 h-24 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMiIgY3k9IjIiIHI9IjIiIGZpbGw9IiNlN2U1ZTQiLz48L3N2Zz4=')] opacity-50 hidden md:block">
         </div>

         <h2 class="text-3xl font-bold text-gray-900 relative inline-block">
             Plant Categories
         </h2>
     </div>

     <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
         <template x-for="(cat, index) in categories" :key="cat.name">
             <div class="relative rounded-[30px] overflow-hidden group cursor-pointer shadow-sm hover:shadow-xl transition-all duration-300 h-64 md:h-96"
                 :class="{
                    'md:col-span-2': index % 4 === 0 || index % 4 === 3,
                    'md:col-span-1': index % 4 === 1 || index % 4 === 2
                }">
                 <div class="absolute inset-0 bg-brand-pink-50 z-0"></div>

                 <img :src="cat.image" :alt="cat.name" loading="lazy"
                     class="relative z-10 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />

                 <div
                     class="absolute inset-0 z-20 bg-gradient-to-t from-black/70 via-black/10 to-transparent opacity-80 transition-opacity">
                 </div>

                 <div
                     class="absolute bottom-6 left-8 z-30 transition-transform duration-300 group-hover:translate-x-2">
                     <h3 class="text-2xl font-bold text-white mb-2 drop-shadow-md" x-text="cat.name"></h3>

                     <div
                         class="inline-flex items-center gap-2 text-white/90 text-xs font-semibold uppercase tracking-wider bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full border border-white/30 group-hover:bg-white group-hover:text-brand-pink-600 transition-colors duration-300">
                         View Collection
                         <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M17 8l4 4m0 0l-4 4m4-4H3" />
                         </svg>
                     </div>
                 </div>
             </div>
         </template>
     </div>
 </section>

 <section id="shop" class="container mx-auto px-6 py-20">
     <div class="flex justify-between items-center mb-12">
         <h2 class="text-3xl font-bold text-gray-900 flex items-center">
             <span class="inline-block w-3 h-3 bg-brand-pink-600 rounded-full mr-4"></span>
             New Arrivals
         </h2>
         <button @click="searchQuery = ''" x-show="searchQuery" class="text-sm text-red-500 hover:underline">
             Clear Search
         </button>
         <a href="#" x-show="!searchQuery" class="text-gray-500 hover:text-brand-pink-600 font-medium">See all</a>
     </div>

     <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
         <template x-for="product in filteredProducts" :key="product.id">
             <div
                 class="bg-white rounded-[30px] p-6 shadow-lg shadow-gray-100/50 relative group hover:-translate-y-2 transition-all duration-300">
                 <div class="relative h-56 mb-6 flex items-center justify-center z-10">
                     <div
                         class="absolute inset-4 bg-brand-pink-50 rounded-[20px] transform rotate-3 group-hover:rotate-6 transition-transform">
                     </div>
                     <img :src="product.image" :alt="product.name"
                         class="relative h-full w-auto object-contain drop-shadow-xl transform group-hover:scale-110 transition-transform duration-300" />
                 </div>

                 <div class="flex justify-between items-start mb-2">
                     <h3 class="text-lg font-bold text-gray-900" x-text="product.name"></h3>
                     <span class="text-lg font-bold text-gray-900" x-text="'$' + product.price"></span>
                 </div>

                 <p class="text-xs text-gray-500 leading-relaxed mb-6" x-text="product.description"></p>

                 <button @click="addToCart(product)"
                     class="absolute bottom-0 right-0 bg-brand-lilac-500 text-white p-4 rounded-tl-[25px] rounded-br-[30px] hover:bg-brand-lilac-600 transition-colors z-20">
                     <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="2">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                     </svg>
                 </button>
             </div>
         </template>

         <div x-show="filteredProducts.length === 0" class="col-span-full text-center py-10 text-gray-500">
             No flowers found matching "<span x-text="searchQuery"></span>"
         </div>
     </div>
 </section>

 <section id="floriography" class="container mx-auto px-6 py-20">
     <div class="bg-brand-lilac-100 rounded-[40px] overflow-hidden flex flex-col md:flex-row">
         <div class="w-full md:w-1/2 p-12 md:p-20 flex flex-col justify-center order-2 md:order-1">
             <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">
                 The Language of Flowers
             </h2>
             <p class="text-gray-700 text-lg leading-relaxed mb-8">
                 Floriography is a means of cryptological communication through the
                 use or arrangement of flowers. Every bloom whispers a secret.
             </p>
             <div class="bg-white/60 p-6 rounded-2xl border-l-4 border-brand-lilac-600">
                 <h4 class="font-bold text-brand-lilac-700 mb-2">Did you know?</h4>
                 <p class="text-gray-800 italic">
                     The Purple Lilac symbolizes the first emotions of love, while the
                     White Lilac represents youthful innocence.
                 </p>
             </div>
             <button
                 class="mt-10 bg-brand-lilac-600 text-white px-10 py-4 rounded-full font-semibold hover:bg-brand-lilac-700 transition shadow-lg shadow-brand-lilac-200 w-max">
                 Read Our Journal
             </button>
         </div>
         <div class="w-full md:w-1/2 min-h-[400px] relative order-1 md:order-2">
             <img src="lavender.jpg"
                 alt="Lilacs" class="absolute inset-0 w-full h-full object-cover" />
         </div>
     </div>
 </section>

 <section id="gallery" class="container mx-auto px-6 py-20">
     <div class="text-center mb-16">
         <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Gallery</h2>
         <p class="text-gray-600">Snapshots of happiness in full bloom.</p>
     </div>

     <div class="columns-2 md:columns-3 gap-4 space-y-4">

         <template x-for="item in gallery" :key="item.id">
             <div class="break-inside-avoid rounded-[20px] overflow-hidden shadow-lg group relative">
                 <img :src="item.src" :alt="item.alt" loading="lazy"
                     class="w-full object-cover group-hover:scale-105 transition-transform duration-500 block">

                 <div
                     class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors duration-300 pointer-events-none">
                 </div>
             </div>
         </template>

     </div>
 </section>