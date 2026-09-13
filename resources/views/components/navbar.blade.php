<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 glass-nav py-3.5 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
        <!-- Brand / Logo -->
        <a href="#beranda" class="flex items-center gap-2.5 group">
            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-[#FF8C42] to-[#FFAD60] flex items-center justify-center shadow-md shadow-orange-500/20 group-hover:scale-105 transition-transform duration-300">
                <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M17 8h1a4 4 0 1 1 0 8h-1"></path>
                    <path d="M3 8h14v9a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4Z"></path>
                    <line x1="6" y1="2" x2="6" y2="4"></line>
                    <line x1="10" y1="2" x2="10" y2="4"></line>
                    <line x1="14" y1="2" x2="14" y2="4"></line>
                </svg>
            </div>
            <div>
                <span class="text-2xl font-bold font-heading text-[#221C18] tracking-tight">Smea<span class="text-[#FF8C42]">Teh</span></span>
                <span class="hidden sm:inline-block text-[10px] uppercase tracking-wider font-semibold px-2 py-0.5 ml-1.5 rounded-full bg-orange-100 text-[#FF8C42]">UMKM</span>
            </div>
        </a>

        <!-- Desktop Navigation Links -->
        <div class="hidden md:flex items-center gap-8">
            <a href="#beranda" class="text-sm font-medium text-[#5C524A] hover:text-[#FF8C42] transition-colors">Beranda</a>
            <a href="#tentang" class="text-sm font-medium text-[#5C524A] hover:text-[#FF8C42] transition-colors">Tentang</a>
            <a href="#menu" class="text-sm font-medium text-[#5C524A] hover:text-[#FF8C42] transition-colors">Menu</a>
            <a href="#cara-pesan" class="text-sm font-medium text-[#5C524A] hover:text-[#FF8C42] transition-colors">Cara Pesan</a>
            <a href="#lokasi" class="text-sm font-medium text-[#5C524A] hover:text-[#FF8C42] transition-colors">Lokasi</a>
        </div>

        <!-- Desktop Action Button -->
        <div class="hidden md:flex items-center gap-3">
            <button onclick="openOrderModal()" class="relative inline-flex items-center gap-2 px-5 py-2.5 rounded-full font-heading font-semibold text-sm text-white bg-gradient-to-r from-[#FF8C42] to-[#FFAD60] shadow-md shadow-orange-500/25 hover:shadow-lg hover:shadow-orange-500/40 hover:-translate-y-0.5 active:translate-y-0 transition-all duration-200 cursor-pointer">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                </svg>
                <span>Pesan Sekarang</span>
                <!-- Cart Counter Badge -->
                <span class="cart-count-badge hidden absolute -top-1.5 -right-1.5 w-5 h-5 bg-[#221C18] text-white text-[10px] font-bold rounded-full items-center justify-center border-2 border-white shadow-sm">
                    0
                </span>
            </button>
        </div>

        <!-- Mobile Buttons (Cart + Hamburger) -->
        <div class="flex items-center gap-2 md:hidden">
            <button onclick="openOrderModal()" class="relative p-2 rounded-xl text-[#FF8C42] bg-orange-100 hover:bg-orange-200 transition-colors" aria-label="Buka Keranjang">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                </svg>
                <span class="cart-count-badge hidden absolute -top-1 -right-1 w-5 h-5 bg-[#FF8C42] text-white text-[10px] font-bold rounded-full items-center justify-center border-2 border-white">
                    0
                </span>
            </button>
            <button id="mobile-menu-btn" class="p-2 rounded-xl text-[#221C18] hover:bg-orange-100 transition-colors focus:outline-none" aria-label="Toggle Menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>
</nav>

<!-- Mobile Menu Dropdown -->
<div id="mobile-menu-backdrop" class="fixed inset-0 bg-black/40 z-40 hidden opacity-0 transition-opacity duration-300 md:hidden"></div>
<div id="mobile-menu" class="fixed top-[65px] left-0 right-0 bg-[#FFF8F0] z-40 hidden -translate-y-full opacity-0 transition-all duration-300 shadow-2xl border-b border-orange-200/60 p-6 md:hidden">
    <div class="flex flex-col gap-4">
        <a href="#beranda" class="mobile-nav-link text-base font-semibold text-[#221C18] py-2 border-b border-orange-100">Beranda</a>
        <a href="#tentang" class="mobile-nav-link text-base font-semibold text-[#221C18] py-2 border-b border-orange-100">Tentang SmeaTeh</a>
        <a href="#menu" class="mobile-nav-link text-base font-semibold text-[#221C18] py-2 border-b border-orange-100">Menu Minuman</a>
        <a href="#cara-pesan" class="mobile-nav-link text-base font-semibold text-[#221C18] py-2 border-b border-orange-100">Cara Pemesanan</a>
        <a href="#lokasi" class="mobile-nav-link text-base font-semibold text-[#221C18] py-2 border-b border-orange-100">Lokasi Toko</a>
        
        <div class="pt-2">
            <button onclick="openOrderModal()" class="w-full flex items-center justify-center gap-2 py-3 px-6 rounded-2xl font-heading font-bold text-white bg-gradient-to-r from-[#FF8C42] to-[#FFAD60] shadow-lg shadow-orange-500/30">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                </svg>
                <span>Pesan Sekarang</span>
            </button>
        </div>
    </div>
</div>
