<section id="beranda" class="relative pt-32 pb-16 md:pt-40 md:pb-24 overflow-hidden bg-gradient-to-b from-[#FFF8F0] via-[#FFF3E6] to-[#FFF8F0]">
    <!-- Decorative background glow / blobs -->
    <div class="absolute top-10 left-1/2 -translate-x-1/2 w-full max-w-7xl h-96 bg-gradient-to-r from-orange-200/40 via-amber-200/30 to-orange-200/40 blur-3xl -z-10 rounded-full pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Column: Hero Text Content -->
            <div class="lg:col-span-7 text-center lg:text-left reveal">
                <!-- Tagline Badge -->
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-orange-100/90 border border-orange-200/80 text-[#FF8C42] text-xs sm:text-sm font-semibold mb-6 shadow-sm">
                    <span>Minuman Teh UMKM Terfavorit & Segar</span>
                </div>

                <!-- Main Heading -->
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold font-heading text-[#221C18] leading-[1.15] tracking-tight mb-6">
                    Segarnya Teh, <br class="hidden sm:inline" />
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#FF8C42] via-[#FFAD60] to-[#E86400]">Nikmatnya Setiap Tegukan.</span>
                </h1>

                <!-- Subheadline -->
                <p class="text-base sm:text-lg text-[#5C524A] max-w-2xl mx-auto lg:mx-0 mb-8 leading-relaxed">
                    Temukan kesegaran Es Teh dan kelembutan Milk Tea favoritmu dengan harga yang bersahabat. Dibuat dari racikan teh asli pilihan setiap hari!
                </p>

                <!-- Hero CTA Buttons -->
                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                    <button onclick="openOrderModal()" class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-8 py-4 rounded-full font-heading font-bold text-base text-white bg-gradient-to-r from-[#FF8C42] to-[#FFAD60] shadow-lg shadow-orange-500/30 hover:shadow-orange-500/50 hover:-translate-y-1 transition-all duration-300 cursor-pointer">
                        <span>Pesan Sekarang</span>
                    </button>

                    <a href="#menu" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-4 rounded-full font-heading font-semibold text-base text-[#221C18] bg-white border border-orange-200/80 shadow-sm hover:bg-orange-50 hover:border-orange-300 hover:-translate-y-1 transition-all duration-300">
                        <span>Lihat Menu</span>
                        <svg class="w-4 h-4 text-[#FF8C42]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>
                </div>

                <!-- Trust Stats / Highlights -->
                <div class="mt-10 pt-8 border-t border-orange-200/60 grid grid-cols-3 gap-4 max-w-lg mx-auto lg:mx-0">
                    <div>
                        <div class="text-2xl font-bold font-heading text-[#FF8C42]">100%</div>
                        <div class="text-xs text-[#5C524A] mt-0.5">Teh Alami Pilihan</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold font-heading text-[#FF8C42]">Rp5.000</div>
                        <div class="text-xs text-[#5C524A] mt-0.5">Mulai Dari</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold font-heading text-[#FF8C42]">Instant</div>
                        <div class="text-xs text-[#5C524A] mt-0.5">Pesan via WA</div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Hero Beverage Visual -->
            <div class="lg:col-span-5 relative flex items-center justify-center reveal reveal-delay-2">
                <div class="relative w-full max-w-[420px] aspect-square flex items-center justify-center">
                    
                    <!-- Main Animated Beverage Graphic -->
                    <div class="w-full h-full animate-float">
                        <img 
                            src="{{ asset('images/es-teh-original-2.png') }}" 
                            alt="Visual SmeaTeh Minuman Segar" 
                            class="w-full h-full object-contain filter drop-shadow-2xl"
                            loading="eager"
                        >
                    </div>

                    <!-- Floating Badge 1: Mulai Rp5.000 -->
                    <div class="absolute -top-2 -left-4 sm:left-0 bg-white/95 backdrop-blur-md px-4 py-2.5 rounded-2xl shadow-xl shadow-orange-950/10 border border-orange-200/60 flex items-center gap-3 animate-badge-bounce">
                        <div class="w-8 h-8 rounded-xl bg-orange-100 flex items-center justify-center text-[#FF8C42]">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-[11px] text-gray-500 font-medium">Harga Bersahabat</div>
                            <div class="text-xs font-bold text-[#221C18]">Mulai Rp5.000</div>
                        </div>
                    </div>

                    <!-- Floating Badge 2: Dibuat Fresh -->
                    <div class="absolute -bottom-4 right-0 sm:-right-4 bg-white/95 backdrop-blur-md px-4 py-2.5 rounded-2xl shadow-xl shadow-orange-950/10 border border-orange-200/60 flex items-center gap-3 animate-float-delayed">
                        <div class="w-8 h-8 rounded-xl bg-emerald-100 flex items-center justify-center text-emerald-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-[11px] text-gray-500 font-medium">Kualitas Terjaga</div>
                            <div class="text-xs font-bold text-[#221C18]">100% Diseduh Fresh</div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
