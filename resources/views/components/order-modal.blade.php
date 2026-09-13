<!-- Order Modal Container -->
<div id="order-modal" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 sm:p-6 overflow-y-auto" role="dialog" aria-modal="true" aria-labelledby="modal-title">
    
    <!-- Modal Backdrop Overlay -->
    <div class="modal-backdrop fixed inset-0 bg-stone-900/60 backdrop-blur-sm transition-opacity duration-300 opacity-0 close-order-modal-btn"></div>

    <!-- Modal Dialog Panel -->
    <div class="modal-panel relative w-full max-w-lg bg-white rounded-3xl shadow-2xl border border-orange-100 overflow-hidden transform scale-95 opacity-0 transition-all duration-300 z-10 my-8">
        
        <!-- Modal Header -->
        <div class="px-6 py-5 bg-gradient-to-r from-[#FFF8F0] via-[#FFEBD4] to-[#FFF8F0] border-b border-orange-100/80 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-[#FF8C42] text-white flex items-center justify-center shadow-md shadow-orange-500/20">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                    </svg>
                </div>
                <div>
                    <h3 id="modal-title" class="text-xl font-bold font-heading text-[#221C18]">Form Pemesanan</h3>
                    <p class="text-xs text-[#5C524A]">Atur pesanan minuman favoritmu</p>
                </div>
            </div>

            <!-- Close Button -->
            <button class="close-order-modal-btn p-2 rounded-full text-stone-400 hover:text-stone-700 hover:bg-white/80 transition-colors focus:outline-none" aria-label="Tutup Modal">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Modal Body Content -->
        <div class="p-6 max-h-[70vh] overflow-y-auto space-y-6">
            
            <!-- Products Selection List -->
            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-[#5C524A] mb-3">
                    Pilih Menu & Jumlah:
                </label>

                <div class="space-y-3">
                    
                    <!-- Product Item 1: Es Teh Original -->
                    <div class="flex items-center justify-between p-3.5 rounded-2xl bg-[#FFF8F0]/70 border border-orange-100 hover:border-orange-200 transition-colors">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-xl bg-white p-1 border border-orange-100 flex items-center justify-center shrink-0">
                                <img src="{{ asset('images/es-teh-original-2.png') }}" alt="Es Teh Original" class="w-full h-full object-contain">
                            </div>
                            <div>
                                <div class="text-sm font-bold font-heading text-[#221C18]">Es Teh Original</div>
                                <div class="text-xs text-[#FF8C42] font-semibold">Rp5.000</div>
                            </div>
                        </div>

                        <div class="flex items-center gap-2.5">
                            <button 
                                type="button" 
                                onclick="decrementProductQty('es-teh-original')"
                                class="w-8 h-8 rounded-full bg-white border border-orange-200 text-stone-700 font-bold hover:bg-orange-50 active:scale-90 flex items-center justify-center transition-all cursor-pointer"
                                aria-label="Kurangi Es Teh Original"
                            >
                                -
                            </button>
                            <span id="modal-qty-es-teh-original" class="w-6 text-center font-bold text-sm text-[#221C18]">
                                0
                            </span>
                            <button 
                                type="button" 
                                onclick="incrementProductQty('es-teh-original')"
                                class="w-8 h-8 rounded-full bg-[#FF8C42] text-white font-bold hover:bg-[#E86400] active:scale-90 flex items-center justify-center transition-all shadow-sm shadow-orange-500/30 cursor-pointer"
                                aria-label="Tambah Es Teh Original"
                            >
                                +
                            </button>
                        </div>
                    </div>

                    <!-- Product Item 2: Es Teh Lemon -->
                    <div class="flex items-center justify-between p-3.5 rounded-2xl bg-[#FFF8F0]/70 border border-orange-100 hover:border-orange-200 transition-colors">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-xl bg-white p-1 border border-orange-100 flex items-center justify-center shrink-0">
                                <img src="{{ asset('images/es-teh-lemon-2.png') }}" alt="Es Teh Lemon" class="w-full h-full object-contain">
                            </div>
                            <div>
                                <div class="text-sm font-bold font-heading text-[#221C18]">Es Teh Lemon</div>
                                <div class="text-xs text-[#FF8C42] font-semibold">Rp6.000</div>
                            </div>
                        </div>

                        <div class="flex items-center gap-2.5">
                            <button 
                                type="button" 
                                onclick="decrementProductQty('es-teh-lemon')"
                                class="w-8 h-8 rounded-full bg-white border border-orange-200 text-stone-700 font-bold hover:bg-orange-50 active:scale-90 flex items-center justify-center transition-all cursor-pointer"
                                aria-label="Kurangi Es Teh Lemon"
                            >
                                -
                            </button>
                            <span id="modal-qty-es-teh-lemon" class="w-6 text-center font-bold text-sm text-[#221C18]">
                                0
                            </span>
                            <button 
                                type="button" 
                                onclick="incrementProductQty('es-teh-lemon')"
                                class="w-8 h-8 rounded-full bg-[#FF8C42] text-white font-bold hover:bg-[#E86400] active:scale-90 flex items-center justify-center transition-all shadow-sm shadow-orange-500/30 cursor-pointer"
                                aria-label="Tambah Es Teh Lemon"
                            >
                                +
                            </button>
                        </div>
                    </div>

                    <!-- Product Item 3: Es Teh Lychee -->
                    <div class="flex items-center justify-between p-3.5 rounded-2xl bg-[#FFF8F0]/70 border border-orange-100 hover:border-orange-200 transition-colors">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-xl bg-white p-1 border border-orange-100 flex items-center justify-center shrink-0">
                                <img src="{{ asset('images/es-teh-lychee-2.png') }}" alt="Es Teh Lychee" class="w-full h-full object-contain">
                            </div>
                            <div>
                                <div class="text-sm font-bold font-heading text-[#221C18]">Es Teh Lychee</div>
                                <div class="text-xs text-[#FF8C42] font-semibold">Rp7.000</div>
                            </div>
                        </div>

                        <div class="flex items-center gap-2.5">
                            <button 
                                type="button" 
                                onclick="decrementProductQty('es-teh-lychee')"
                                class="w-8 h-8 rounded-full bg-white border border-orange-200 text-stone-700 font-bold hover:bg-orange-50 active:scale-90 flex items-center justify-center transition-all cursor-pointer"
                                aria-label="Kurangi Es Teh Lychee"
                            >
                                -
                            </button>
                            <span id="modal-qty-es-teh-lychee" class="w-6 text-center font-bold text-sm text-[#221C18]">
                                0
                            </span>
                            <button 
                                type="button" 
                                onclick="incrementProductQty('es-teh-lychee')"
                                class="w-8 h-8 rounded-full bg-[#FF8C42] text-white font-bold hover:bg-[#E86400] active:scale-90 flex items-center justify-center transition-all shadow-sm shadow-orange-500/30 cursor-pointer"
                                aria-label="Tambah Es Teh Lychee"
                            >
                                +
                            </button>
                        </div>
                    </div>

                    <!-- Product Item 4: Milk Tea -->
                    <div class="flex items-center justify-between p-3.5 rounded-2xl bg-[#FFF8F0]/70 border border-orange-100 hover:border-orange-200 transition-colors">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-xl bg-white p-1 border border-orange-100 flex items-center justify-center shrink-0">
                                <img src="{{ asset('images/milk-tea-2.png') }}" alt="Milk Tea" class="w-full h-full object-contain">
                            </div>
                            <div>
                                <div class="text-sm font-bold font-heading text-[#221C18]">Milk Tea</div>
                                <div class="text-xs text-[#FF8C42] font-semibold">Rp7.000</div>
                            </div>
                        </div>

                        <div class="flex items-center gap-2.5">
                            <button 
                                type="button" 
                                onclick="decrementProductQty('milk-tea')"
                                class="w-8 h-8 rounded-full bg-white border border-orange-200 text-stone-700 font-bold hover:bg-orange-50 active:scale-90 flex items-center justify-center transition-all cursor-pointer"
                                aria-label="Kurangi Milk Tea"
                            >
                                -
                            </button>
                            <span id="modal-qty-milk-tea" class="w-6 text-center font-bold text-sm text-[#221C18]">
                                0
                            </span>
                            <button 
                                type="button" 
                                onclick="incrementProductQty('milk-tea')"
                                class="w-8 h-8 rounded-full bg-[#FF8C42] text-white font-bold hover:bg-[#E86400] active:scale-90 flex items-center justify-center transition-all shadow-sm shadow-orange-500/30 cursor-pointer"
                                aria-label="Tambah Milk Tea"
                            >
                                +
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Customer Details Form -->
            <div id="modal-order-form" class="space-y-4 pt-2 border-t border-stone-100">
                
                <!-- Customer Name -->
                <div>
                    <label for="customer-name" class="block text-xs font-bold uppercase tracking-wider text-[#5C524A] mb-1.5">
                        Nama Pemesan <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="text" 
                        id="customer-name" 
                        placeholder="Masukkan nama kamu (contoh: Azzam)" 
                        class="w-full px-4 py-3 rounded-2xl bg-stone-50 border border-stone-200 text-sm text-[#221C18] focus:bg-white focus:border-[#FF8C42] focus:ring-2 focus:ring-orange-200 transition-all outline-none"
                        required
                    >
                </div>

                <!-- Custom Notes -->
                <div>
                    <label for="customer-notes" class="block text-xs font-bold uppercase tracking-wider text-[#5C524A] mb-1.5">
                        Catatan Pesanan (Opsional)
                    </label>
                    <input 
                        type="text" 
                        id="customer-notes" 
                        placeholder="Contoh: sedikit es, manis sedang, tanpa sedotan" 
                        class="w-full px-4 py-3 rounded-2xl bg-stone-50 border border-stone-200 text-sm text-[#221C18] focus:bg-white focus:border-[#FF8C42] focus:ring-2 focus:ring-orange-200 transition-all outline-none"
                    >
                </div>

            </div>

            <!-- Total Price Summary Box -->
            <div class="p-4 rounded-2xl bg-gradient-to-r from-[#FFF8F0] to-[#FFEBD4] border border-orange-200/80 flex items-center justify-between">
                <div>
                    <div class="text-xs text-[#5C524A]">Total Pembayaran:</div>
                    <div id="modal-total-items" class="text-[11px] text-gray-500">0 item</div>
                </div>
                <div id="modal-total-price" class="text-2xl font-black font-heading text-[#FF8C42]">
                    Rp0
                </div>
            </div>

        </div>

        <!-- Modal Footer: Submit Button -->
        <div class="p-6 bg-stone-50 border-t border-stone-100 flex flex-col sm:flex-row gap-3">
            <button 
                type="button" 
                class="close-order-modal-btn w-full sm:w-1/3 py-3 px-4 rounded-full text-sm font-semibold text-stone-600 bg-white border border-stone-200 hover:bg-stone-100 transition-colors cursor-pointer"
            >
                Batal
            </button>
            <button 
                id="submit-whatsapp-order"
                type="button" 
                class="w-full sm:w-2/3 inline-flex items-center justify-center gap-2.5 py-3.5 px-6 rounded-full font-heading font-bold text-sm text-white bg-emerald-600 hover:bg-emerald-700 shadow-lg shadow-emerald-600/30 hover:shadow-emerald-600/50 hover:scale-[1.02] active:scale-[0.98] transition-all cursor-pointer"
            >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                </svg>
                <span>Pesan melalui WhatsApp</span>
            </button>
        </div>

    </div>
</div>
