/**
 * SmeaTeh - Landing Page & Order System
 * Pure Vanilla JavaScript Frontend Architecture
 */

// ==========================================
// 1. CONFIGURATION & DATA (Tanpa Database)
// ==========================================

// Nomor WhatsApp Toko SmeaTeh (Satu konfigurasi terpusat)
const WHATSAPP_NUMBER = "6281234567890";

// Data Produk Resmi SmeaTeh
const PRODUCTS = [
    {
        id: "es-teh-original",
        name: "Es Teh Original",
        price: 5000,
        category: "Es Teh",
        desc: "Teh manis klasik yang segar dan cocok dinikmati kapan saja.",
        image: "/images/es-teh-original-2.png",
        badge: "Paling Laris"
    },
    {
        id: "es-teh-lemon",
        name: "Es Teh Lemon",
        price: 7000,
        category: "Es Teh",
        desc: "Perpaduan teh segar dengan rasa lemon yang menyegarkan.",
        image: "/images/es-teh-lemon-2.png",
        badge: "Ekstra Segar"
    },
    {
        id: "es-teh-lychee",
        name: "Es Teh Lychee",
        price: 8000,
        category: "Es Teh",
        desc: "Teh segar dengan sentuhan rasa lychee yang manis dan fruity.",
        image: "/images/es-teh-lychee-2.png",
        badge: "Favorit Buah"
    },
    {
        id: "milk-tea",
        name: "Milk Tea",
        price: 10000,
        category: "Milk Tea",
        desc: "Perpaduan teh dan susu yang creamy dengan rasa lembut.",
        image: "/images/milk-tea-2.png",
        badge: "Creamy Spesial"
    }
];

// State Keranjang Belanja Frontend
let cartState = {
    "es-teh-original": 0,
    "es-teh-lemon": 0,
    "es-teh-lychee": 0,
    "milk-tea": 0
};

// ==========================================
// 2. HELPER FUNCTIONS
// ==========================================

function formatRupiah(number) {
    return "Rp" + new Intl.NumberFormat("id-ID").format(number);
}

function showToast(message, type = "info") {
    const toastContainer = document.getElementById("toast-container");
    if (!toastContainer) return;

    const toast = document.createElement("div");
    toast.className = `flex items-center gap-3 px-4 py-3 rounded-2xl shadow-xl text-sm font-medium transition-all duration-300 transform translate-y-4 opacity-0 pointer-events-auto ${
        type === "warning" 
            ? "bg-amber-500 text-white shadow-amber-500/20" 
            : type === "success" 
                ? "bg-emerald-600 text-white shadow-emerald-600/20" 
                : "bg-[#221C18] text-white shadow-stone-900/30"
    }`;

    let iconSvg = "";
    if (type === "warning") {
        iconSvg = `<svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>`;
    } else if (type === "success") {
        iconSvg = `<svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>`;
    } else {
        iconSvg = `<svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>`;
    }

    toast.innerHTML = `
        ${iconSvg}
        <span>${message}</span>
    `;

    toastContainer.appendChild(toast);

    // Animate In
    requestAnimationFrame(() => {
        toast.classList.remove("translate-y-4", "opacity-0");
    });

    // Auto Remove
    setTimeout(() => {
        toast.classList.add("translate-y-4", "opacity-0");
        setTimeout(() => {
            toast.remove();
        }, 300);
    }, 3200);
}

// ==========================================
// 3. CART & ORDER LOGIC
// ==========================================

function updateCartUI() {
    let totalItems = 0;
    let totalPrice = 0;

    PRODUCTS.forEach(product => {
        const qty = cartState[product.id] || 0;
        totalItems += qty;
        totalPrice += qty * product.price;

        // Update modal product item counter if element exists
        const modalQtyEl = document.getElementById(`modal-qty-${product.id}`);
        const modalSubtotalEl = document.getElementById(`modal-subtotal-${product.id}`);
        if (modalQtyEl) {
            modalQtyEl.textContent = qty;
        }
        if (modalSubtotalEl) {
            modalSubtotalEl.textContent = formatRupiah(qty * product.price);
        }
    });

    // Update Floating Cart Badge & Nav Badge
    const cartBadges = document.querySelectorAll(".cart-count-badge");
    cartBadges.forEach(badge => {
        badge.textContent = totalItems;
        if (totalItems > 0) {
            badge.classList.remove("hidden");
            badge.classList.add("flex");
        } else {
            badge.classList.add("hidden");
            badge.classList.remove("flex");
        }
    });

    // Update Modal Total Summary
    const modalTotalItemsEl = document.getElementById("modal-total-items");
    const modalTotalPriceEl = document.getElementById("modal-total-price");
    if (modalTotalItemsEl) {
        modalTotalItemsEl.textContent = totalItems + " item";
    }
    if (modalTotalPriceEl) {
        modalTotalPriceEl.textContent = formatRupiah(totalPrice);
    }

    // Toggle Empty Cart State inside modal
    const emptyNotice = document.getElementById("modal-empty-notice");
    const orderFormSection = document.getElementById("modal-order-form");
    if (emptyNotice && orderFormSection) {
        if (totalItems === 0) {
            emptyNotice.classList.remove("hidden");
        } else {
            emptyNotice.classList.add("hidden");
        }
    }
}

function setProductQty(productId, qty) {
    if (qty < 0) qty = 0;
    cartState[productId] = qty;
    updateCartUI();
}

function incrementProductQty(productId) {
    cartState[productId] = (cartState[productId] || 0) + 1;
    updateCartUI();
}

function decrementProductQty(productId) {
    if ((cartState[productId] || 0) > 0) {
        cartState[productId] -= 1;
        updateCartUI();
    }
}

function quickOrderProduct(productId) {
    // If 0, set to 1
    if (!cartState[productId] || cartState[productId] === 0) {
        cartState[productId] = 1;
    }
    updateCartUI();
    openOrderModal();
    const product = PRODUCTS.find(p => p.id === productId);
    if (product) {
        showToast(`${product.name} ditambahkan ke pesanan!`, "success");
    }
}

// ==========================================
// 4. MODAL MANAGEMENT
// ==========================================

function openOrderModal() {
    const modal = document.getElementById("order-modal");
    if (!modal) return;

    // Check if cart is empty, preselect Es Teh Original with 1 if completely 0
    let totalItems = 0;
    Object.values(cartState).forEach(qty => totalItems += qty);
    if (totalItems === 0) {
        cartState["es-teh-original"] = 1;
    }

    updateCartUI();

    modal.classList.remove("hidden");
    document.body.classList.add("overflow-hidden");

    requestAnimationFrame(() => {
        const backdrop = modal.querySelector(".modal-backdrop");
        const panel = modal.querySelector(".modal-panel");
        if (backdrop) backdrop.classList.remove("opacity-0");
        if (panel) panel.classList.remove("opacity-0", "scale-95");
    });

    // Focus on customer name input
    setTimeout(() => {
        const nameInput = document.getElementById("customer-name");
        if (nameInput) nameInput.focus();
    }, 150);
}

function closeOrderModal() {
    const modal = document.getElementById("order-modal");
    if (!modal) return;

    const backdrop = modal.querySelector(".modal-backdrop");
    const panel = modal.querySelector(".modal-panel");
    if (backdrop) backdrop.classList.add("opacity-0");
    if (panel) panel.classList.add("opacity-0", "scale-95");

    setTimeout(() => {
        modal.classList.add("hidden");
        document.body.classList.remove("overflow-hidden");
    }, 200);
}

// ==========================================
// 5. WHATSAPP ORDER GENERATOR
// ==========================================

function sendWhatsAppOrder() {
    const nameInput = document.getElementById("customer-name");
    const notesInput = document.getElementById("customer-notes");

    const customerName = nameInput ? nameInput.value.trim() : "";
    const customerNotes = notesInput ? notesInput.value.trim() : "";

    // 1. Validasi Nama
    if (!customerName) {
        showToast("Silakan masukkan nama terlebih dahulu.", "warning");
        if (nameInput) nameInput.focus();
        return;
    }

    // 2. Validasi Jumlah Item
    let totalItems = 0;
    let totalPrice = 0;
    const orderLines = [];

    PRODUCTS.forEach(product => {
        const qty = cartState[product.id] || 0;
        if (qty > 0) {
            totalItems += qty;
            const subtotal = qty * product.price;
            totalPrice += subtotal;
            orderLines.push(`- ${product.name} x${qty} = ${formatRupiah(subtotal)}`);
        }
    });

    if (totalItems === 0) {
        showToast("Pilih minimal satu produk minuman.", "warning");
        return;
    }

    // 3. Format Pesan WhatsApp Sesuai Spesifikasi Resmi
    let message = `Halo SmeaTeh,\n\n`;
    message += `Saya ingin memesan:\n\n`;
    message += `Nama: ${customerName}\n\n`;
    message += `Pesanan:\n`;
    message += orderLines.join("\n") + "\n\n";
    message += `Total: ${formatRupiah(totalPrice)}\n\n`;
    message += `Catatan:\n`;
    message += `${customerNotes ? customerNotes : "Tidak ada catatan khusus"}\n\n`;
    message += `Terima kasih.`;

    // 4. Encode & Direct to WhatsApp
    const encodedMessage = encodeURIComponent(message);
    const whatsappUrl = `https://wa.me/${62881026844604}?text=${encodedMessage}`;

    // Open WhatsApp
    window.open(whatsappUrl, "_blank");

    showToast("Membuka WhatsApp...", "success");
}

// ==========================================
// 6. INITIALIZATION & EVENT LISTENERS
// ==========================================

document.addEventListener("DOMContentLoaded", () => {
    // 1. Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById("mobile-menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");
    const mobileMenuBackdrop = document.getElementById("mobile-menu-backdrop");
    const mobileNavLinks = document.querySelectorAll(".mobile-nav-link");

    function toggleMobileMenu(forceClose = false) {
        if (!mobileMenu) return;
        const isHidden = mobileMenu.classList.contains("hidden");
        if (isHidden && !forceClose) {
            mobileMenu.classList.remove("hidden");
            if (mobileMenuBackdrop) mobileMenuBackdrop.classList.remove("hidden");
            requestAnimationFrame(() => {
                mobileMenu.classList.remove("-translate-y-full", "opacity-0");
                if (mobileMenuBackdrop) mobileMenuBackdrop.classList.remove("opacity-0");
            });
        } else {
            mobileMenu.classList.add("-translate-y-full", "opacity-0");
            if (mobileMenuBackdrop) mobileMenuBackdrop.classList.add("opacity-0");
            setTimeout(() => {
                mobileMenu.classList.add("hidden");
                if (mobileMenuBackdrop) mobileMenuBackdrop.classList.add("hidden");
            }, 250);
        }
    }

    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener("click", () => toggleMobileMenu());
    }

    if (mobileMenuBackdrop) {
        mobileMenuBackdrop.addEventListener("click", () => toggleMobileMenu(true));
    }

    mobileNavLinks.forEach(link => {
        link.addEventListener("click", () => toggleMobileMenu(true));
    });

    // 2. Fixed Navbar Scroll Shadow & Effect
    const navbar = document.getElementById("navbar");
    window.addEventListener("scroll", () => {
        if (!navbar) return;
        if (window.scrollY > 20) {
            navbar.classList.add("shadow-md", "bg-[#FFF8F0]/95");
            navbar.classList.remove("bg-[#FFF8F0]/80");
        } else {
            navbar.classList.remove("shadow-md", "bg-[#FFF8F0]/95");
            navbar.classList.add("bg-[#FFF8F0]/80");
        }
    }, { passive: true });

    // 3. Scroll Reveal Animation using IntersectionObserver
    const revealElements = document.querySelectorAll(".reveal");
    if ("IntersectionObserver" in window) {
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("active");
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.12,
            rootMargin: "0px 0px -40px 0px"
        });

        revealElements.forEach(el => revealObserver.observe(el));
    } else {
        // Fallback for older browsers
        revealElements.forEach(el => el.classList.add("active"));
    }

    // 4. Modal Event Listeners
    const openModalButtons = document.querySelectorAll(".open-order-modal-btn");
    openModalButtons.forEach(btn => {
        btn.addEventListener("click", (e) => {
            e.preventDefault();
            const productId = btn.getAttribute("data-product-id");
            if (productId) {
                quickOrderProduct(productId);
            } else {
                openOrderModal();
            }
        });
    });

    const closeModalButtons = document.querySelectorAll(".close-order-modal-btn");
    closeModalButtons.forEach(btn => {
        btn.addEventListener("click", closeOrderModal);
    });

    const submitOrderBtn = document.getElementById("submit-whatsapp-order");
    if (submitOrderBtn) {
        submitOrderBtn.addEventListener("click", sendWhatsAppOrder);
    }

    // Close modal on escape key
    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape") {
            closeOrderModal();
        }
    });

    // Expose global functions to window for onclick inline handlers if needed
    window.setProductQty = setProductQty;
    window.incrementProductQty = incrementProductQty;
    window.decrementProductQty = decrementProductQty;
    window.quickOrderProduct = quickOrderProduct;
    window.openOrderModal = openOrderModal;
    window.closeOrderModal = closeOrderModal;
    window.sendWhatsAppOrder = sendWhatsAppOrder;

    // Initial UI render
    updateCartUI();
});
