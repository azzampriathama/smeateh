<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- SEO Meta Tags -->
    <title>SmeaTeh — Segarnya Teh, Nikmatnya Setiap Tegukan</title>
    <meta name="description" content="SmeaTeh menyediakan Es Teh dan Milk Tea yang segar, nikmat, dan terjangkau. Pesan langsung melalui WhatsApp.">
    <meta name="keywords" content="SmeaTeh, Es Teh, Milk Tea, Minuman Segar, UMKM, Es Teh Manis, Es Teh Lemon, Es Teh Lychee">
    <meta name="author" content="SmeaTeh">
    
    <!-- Open Graph / WhatsApp Preview -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="SmeaTeh — Segarnya Teh, Nikmatnya Setiap Tegukan">
    <meta property="og:description" content="SmeaTeh menyediakan Es Teh dan Milk Tea yang segar, nikmat, dan terjangkau. Pesan langsung melalui WhatsApp.">
    <meta property="og:image" content="{{ asset('images/logo.svg') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.svg') }}">

    <!-- Google Fonts: Poppins (Heading) & Inter (Body) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Vite Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FFF8F0] text-[#221C18] antialiased min-h-screen flex flex-col font-sans selection:bg-[#FFAD60] selection:text-white">

    <!-- Fixed Navbar -->
    @include('components.navbar')

    <!-- Main Content -->
    <main class="flex-grow">
        <!-- 1. Hero Section -->
        @include('components.hero')

        <!-- 2. About Section (Tentang Kami) -->
        @include('components.about')

        <!-- 3. Menu Minuman (4 Produk) -->
        @include('components.menu')

        <!-- 4. Cara Pemesanan -->
        @include('components.steps')

        <!-- 5. Call To Action (CTA) -->
        @include('components.cta')
    </main>

    <!-- 6. Footer & Lokasi Toko -->
    @include('components.footer')

    <!-- Order & Cart Modal -->
    @include('components.order-modal')

    <!-- Toast Notification Container -->
    @include('components.toast')

    <!-- Floating WhatsApp / Cart Quick Button for Mobile -->
    <div class="fixed bottom-6 left-6 z-40 md:hidden">
        <button 
            onclick="openOrderModal()" 
            class="relative flex items-center justify-center w-14 h-14 rounded-full bg-gradient-to-r from-[#FF8C42] to-[#FFAD60] text-white shadow-xl shadow-orange-500/40 active:scale-95 transition-transform"
            aria-label="Buka Keranjang Pesanan"
        >
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
            </svg>
            <span class="cart-count-badge hidden absolute -top-1 -right-1 w-5 h-5 bg-[#221C18] text-white text-[10px] font-bold rounded-full items-center justify-center border-2 border-white">
                0
            </span>
        </button>
    </div>

</body>
</html>
