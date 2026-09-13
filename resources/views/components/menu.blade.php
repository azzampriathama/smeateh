<section id="menu" class="py-20 bg-[#FFF8F0] relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16 reveal">
            <span class="inline-block px-3.5 py-1 rounded-full bg-orange-100 text-[#FF8C42] text-xs font-bold uppercase tracking-wider mb-3">
                Menu Favorit
            </span>
            <h2 class="text-3xl sm:text-4xl font-bold font-heading text-[#221C18] mb-4">
                Daftar Menu Minuman SmeaTeh
            </h2>
            <p class="text-base sm:text-lg text-[#5C524A]">
                Pilihan minuman segar racikan istimewa untuk menemani harimu. Pilih minuman favoritmu sekarang!
            </p>
        </div>

        <!-- 4 Product Cards Grid (4 cols on lg, 2 cols on md, 1 col on mobile) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Product 1: Es Teh Original -->
            <div class="glass-card bg-white rounded-3xl p-6 shadow-sm hover:shadow-2xl hover:shadow-orange-500/15 hover:-translate-y-2.5 transition-all duration-300 border border-orange-100/80 flex flex-col justify-between group reveal reveal-delay-1">
                <div>
                    <!-- Product Image Box -->
                    <div class="relative w-full aspect-square rounded-2xl bg-gradient-to-b from-[#FFF8F0] to-[#FFEBD4] overflow-hidden mb-5 flex items-center justify-center p-4">
                        <span class="absolute top-3 left-3 bg-[#FF8C42] text-white text-[11px] font-bold px-3 py-1 rounded-full shadow-sm">
                            Paling Laris
                        </span>
                        <img 
                            src="{{ asset('images/es-teh-original-2.png') }}" 
                            alt="Es Teh Original" 
                            class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500"
                            loading="lazy"
                        >
                    </div>

                    <!-- Category & Title -->
                    <span class="text-xs font-semibold text-[#FF8C42] uppercase tracking-wider">Es Teh</span>
                    <h3 class="text-xl font-bold font-heading text-[#221C18] mt-1 mb-2">
                        Es Teh Original
                    </h3>
                    <p class="text-sm text-[#5C524A] leading-relaxed mb-6">
                        Teh manis klasik yang segar dan cocok dinikmati kapan saja.
                    </p>
                </div>

                <!-- Price & Order Button -->
                <div class="pt-4 border-t border-orange-100 flex items-center justify-between">
                    <div>
                        <span class="text-xs text-gray-500 block">Harga</span>
                        <span class="text-xl font-extrabold font-heading text-[#FF8C42]">Rp5.000</span>
                    </div>
                    <button 
                        onclick="quickOrderProduct('es-teh-original')"
                        class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full font-heading font-semibold text-sm text-white bg-gradient-to-r from-[#FF8C42] to-[#FFAD60] hover:shadow-md hover:shadow-orange-500/30 hover:scale-105 active:scale-95 transition-all duration-200 cursor-pointer"
                        aria-label="Pesan Es Teh Original"
                    >
                        <span>Pesan</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Product 2: Es Teh Lemon -->
            <div class="glass-card bg-white rounded-3xl p-6 shadow-sm hover:shadow-2xl hover:shadow-orange-500/15 hover:-translate-y-2.5 transition-all duration-300 border border-orange-100/80 flex flex-col justify-between group reveal reveal-delay-2">
                <div>
                    <!-- Product Image Box -->
                    <div class="relative w-full aspect-square rounded-2xl bg-gradient-to-b from-[#FFFDF0] to-[#FEF08A]/40 overflow-hidden mb-5 flex items-center justify-center p-4">
                        <span class="absolute top-3 left-3 bg-amber-500 text-white text-[11px] font-bold px-3 py-1 rounded-full shadow-sm">
                            Ekstra Segar
                        </span>
                        <img 
                            src="{{ asset('images/es-teh-lemon-2.png') }}" 
                            alt="Es Teh Lemon" 
                            class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500"
                            loading="lazy"
                        >
                    </div>

                    <!-- Category & Title -->
                    <span class="text-xs font-semibold text-amber-600 uppercase tracking-wider">Es Teh</span>
                    <h3 class="text-xl font-bold font-heading text-[#221C18] mt-1 mb-2">
                        Es Teh Lemon
                    </h3>
                    <p class="text-sm text-[#5C524A] leading-relaxed mb-6">
                        Perpaduan teh segar dengan rasa lemon yang menyegarkan.
                    </p>
                </div>

                <!-- Price & Order Button -->
                <div class="pt-4 border-t border-orange-100 flex items-center justify-between">
                    <div>
                        <span class="text-xs text-gray-500 block">Harga</span>
                        <span class="text-xl font-extrabold font-heading text-[#FF8C42]">Rp6.000</span>
                    </div>
                    <button 
                        onclick="quickOrderProduct('es-teh-lemon')"
                        class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full font-heading font-semibold text-sm text-white bg-gradient-to-r from-[#FF8C42] to-[#FFAD60] hover:shadow-md hover:shadow-orange-500/30 hover:scale-105 active:scale-95 transition-all duration-200 cursor-pointer"
                        aria-label="Pesan Es Teh Lemon"
                    >
                        <span>Pesan</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Product 3: Es Teh Lychee -->
            <div class="glass-card bg-white rounded-3xl p-6 shadow-sm hover:shadow-2xl hover:shadow-orange-500/15 hover:-translate-y-2.5 transition-all duration-300 border border-orange-100/80 flex flex-col justify-between group reveal reveal-delay-3">
                <div>
                    <!-- Product Image Box -->
                    <div class="relative w-full aspect-square rounded-2xl bg-gradient-to-b from-[#FFF1F2] to-[#FECDD3]/50 overflow-hidden mb-5 flex items-center justify-center p-4">
                        <span class="absolute top-3 left-3 bg-rose-500 text-white text-[11px] font-bold px-3 py-1 rounded-full shadow-sm">
                            Favorit Buah
                        </span>
                        <img 
                            src="{{ asset('images/es-teh-lychee-2.png') }}" 
                            alt="Es Teh Lychee" 
                            class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500"
                            loading="lazy"
                        >
                    </div>

                    <!-- Category & Title -->
                    <span class="text-xs font-semibold text-rose-500 uppercase tracking-wider">Es Teh</span>
                    <h3 class="text-xl font-bold font-heading text-[#221C18] mt-1 mb-2">
                        Es Teh Lychee
                    </h3>
                    <p class="text-sm text-[#5C524A] leading-relaxed mb-6">
                        Teh segar dengan sentuhan rasa lychee yang manis dan fruity.
                    </p>
                </div>

                <!-- Price & Order Button -->
                <div class="pt-4 border-t border-orange-100 flex items-center justify-between">
                    <div>
                        <span class="text-xs text-gray-500 block">Harga</span>
                        <span class="text-xl font-extrabold font-heading text-[#FF8C42]">Rp7.000</span>
                    </div>
                    <button 
                        onclick="quickOrderProduct('es-teh-lychee')"
                        class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full font-heading font-semibold text-sm text-white bg-gradient-to-r from-[#FF8C42] to-[#FFAD60] hover:shadow-md hover:shadow-orange-500/30 hover:scale-105 active:scale-95 transition-all duration-200 cursor-pointer"
                        aria-label="Pesan Es Teh Lychee"
                    >
                        <span>Pesan</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Product 4: Milk Tea -->
            <div class="glass-card bg-white rounded-3xl p-6 shadow-sm hover:shadow-2xl hover:shadow-orange-500/15 hover:-translate-y-2.5 transition-all duration-300 border border-orange-100/80 flex flex-col justify-between group reveal reveal-delay-4">
                <div>
                    <!-- Product Image Box -->
                    <div class="relative w-full aspect-square rounded-2xl bg-gradient-to-b from-[#FFFBEB] to-[#FDE68A]/40 overflow-hidden mb-5 flex items-center justify-center p-4">
                        <span class="absolute top-3 left-3 bg-[#B45309] text-white text-[11px] font-bold px-3 py-1 rounded-full shadow-sm">
                            Creamy Spesial
                        </span>
                        <img 
                            src="{{ asset('images/milk-tea-2.png') }}" 
                            alt="Milk Tea" 
                            class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500"
                            loading="lazy"
                        >
                    </div>

                    <!-- Category & Title -->
                    <span class="text-xs font-semibold text-[#B45309] uppercase tracking-wider">Milk Tea</span>
                    <h3 class="text-xl font-bold font-heading text-[#221C18] mt-1 mb-2">
                        Milk Tea
                    </h3>
                    <p class="text-sm text-[#5C524A] leading-relaxed mb-6">
                        Perpaduan teh dan susu yang creamy dengan rasa lembut.
                    </p>
                </div>

                <!-- Price & Order Button -->
                <div class="pt-4 border-t border-orange-100 flex items-center justify-between">
                    <div>
                        <span class="text-xs text-gray-500 block">Harga</span>
                        <span class="text-xl font-extrabold font-heading text-[#FF8C42]">Rp7.000</span>
                    </div>
                    <button 
                        onclick="quickOrderProduct('milk-tea')"
                        class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full font-heading font-semibold text-sm text-white bg-gradient-to-r from-[#FF8C42] to-[#FFAD60] hover:shadow-md hover:shadow-orange-500/30 hover:scale-105 active:scale-95 transition-all duration-200 cursor-pointer"
                        aria-label="Pesan Milk Tea"
                    >
                        <span>Pesan</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                    </button>
                </div>
            </div>

        </div>

    </div>
</section>
