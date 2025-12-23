document.addEventListener('alpine:init', () => {
    Alpine.data('kalsStore', () => ({
        // State UI
        cartOpen: false,
        mobileMenuOpen: false,
        searchQuery: "",
        heroActiveSlide: 0,
        heroTimer: null,
        
        // State Data (Ambil dari database.js)
        cart: [],
        products: KalsData.products,
        categories: KalsData.categories,
        gallery: KalsData.gallery,
        heroSlides: KalsData.heroSlides,

        // --- Logic Methods ---

        init() {
            this.startHeroTimer();
            // Optional: Load cart from localStorage
            // if(localStorage.getItem('kals_cart')) {
            //     this.cart = JSON.parse(localStorage.getItem('kals_cart'));
            // }
        },

        // Slider Logic
        startHeroTimer() {
            this.heroTimer = setInterval(() => {
                this.heroActiveSlide = (this.heroActiveSlide + 1) % this.heroSlides.length;
            }, 3000);
        },
        stopHeroTimer() {
            clearInterval(this.heroTimer);
        },
        nextSlide() {
            this.stopHeroTimer();
            this.heroActiveSlide = (this.heroActiveSlide + 1) % this.heroSlides.length;
            this.startHeroTimer();
        },
        prevSlide() {
            this.stopHeroTimer();
            this.heroActiveSlide = (this.heroActiveSlide - 1 + this.heroSlides.length) % this.heroSlides.length;
            this.startHeroTimer();
        },

        // Search Logic
        get filteredProducts() {
            if (this.searchQuery === "") return this.products;
            return this.products.filter((product) => {
                return product.name.toLowerCase().includes(this.searchQuery.toLowerCase());
            });
        },

        // Cart Logic
        addToCart(product) {
            this.cart.push(product);
            this.cartOpen = true;
            // localStorage.setItem('kals_cart', JSON.stringify(this.cart));
        },
        removeFromCart(index) {
            this.cart.splice(index, 1);
            // localStorage.setItem('kals_cart', JSON.stringify(this.cart));
        },
        get cartTotal() {
            return this.cart.reduce((total, item) => total + item.price, 0);
        },
    }));
});