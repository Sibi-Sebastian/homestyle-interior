<?php
/**
 * Floating Action Buttons
 * WhatsApp, Call, and Back to Top buttons
 * Include this file before closing </body> tag
 */
?>

<style>
/* Floating Action Buttons CSS */
.floating-btn {
    position: fixed !important;
    right: 20px !important;
    width: 60px !important;
    height: 60px !important;
    border-radius: 50% !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    text-decoration: none !important;
    font-size: 24px !important;
    color: white !important;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3) !important;
    transition: all 0.3s ease !important;
    z-index: 1000 !important;
    border: none !important;
    cursor: pointer !important;
}

.floating-btn:hover {
    transform: translateY(-3px) scale(1.1) !important;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4) !important;
}

/* WhatsApp Button - Top position */
.whatsapp-btn {
    bottom: 200px !important;
    background: linear-gradient(135deg, #25D366, #128C7E) !important;
}

.whatsapp-btn:hover {
    background: linear-gradient(135deg, #128C7E, #0DA65A) !important;
    color: white !important;
}

/* Call Button - Middle position */
.call-btn {
    bottom: 130px !important;
    background: linear-gradient(135deg, #007bff, #0056b3) !important;
}

.call-btn:hover {
    background: linear-gradient(135deg, #0056b3, #004085) !important;
    color: white !important;
}

/* Back to Top Button - Bottom position */
.back-to-top {
    position: fixed !important;
    right: 20px !important;
    bottom: 60px !important;
    width: 60px !important;
    height: 60px !important;
    background: linear-gradient(135deg, #0d4f9e, #8b2fa3) !important;
    color: white !important;
    border: none !important;
    border-radius: 50% !important;
    display: none !important;
    align-items: center !important;
    justify-content: center !important;
    font-size: 20px !important;
    cursor: pointer !important;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3) !important;
    transition: all 0.3s ease !important;
    z-index: 1001 !important;
    opacity: 0 !important;
    transform: translateY(20px) !important;
}

.back-to-top:hover {
    transform: translateY(-3px) scale(1.1) !important;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4) !important;
    background: linear-gradient(135deg, #8b2fa3, #cf3fa6) !important;
    color: white !important;
}

.back-to-top.show {
    display: flex !important;
    opacity: 1 !important;
    transform: translateY(0) !important;
    animation: fadeInUp 0.3s ease !important;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Search Modal Mobile Fix */
.search-modal {
    position: fixed !important;
    top: 0 !important;
    left: 0 !important;
    width: 100vw !important;
    height: 100vh !important;
    background: rgba(0, 0, 0, 0.95) !important;
    z-index: 99999 !important;
    display: none !important;
    justify-content: center !important;
    align-items: center !important;
    padding: 20px !important;
    box-sizing: border-box !important;
    overflow: hidden !important;
}

.search-modal.active {
    display: flex !important;
}

.search-container {
    width: calc(100% - 40px) !important;
    max-width: 500px !important;
    background: white !important;
    border-radius: 15px !important;
    padding: 25px 20px !important;
    position: relative !important;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3) !important;
    margin: 0 auto !important;
    max-height: 85vh !important;
    overflow-y: auto !important;
    box-sizing: border-box !important;
}

/* Responsive adjustments for floating buttons */
@media (max-width: 768px) {
    .floating-btn,
    .back-to-top {
        width: 50px !important;
        height: 50px !important;
        font-size: 20px !important;
        right: 15px !important;
    }
    
    .whatsapp-btn {
        bottom: 170px !important;
    }
    
    .call-btn {
        bottom: 110px !important;
    }
    
    .back-to-top {
        bottom: 50px !important;
    }
    
    /* Mobile search modal adjustments */
    .search-modal {
        padding: 20px !important;
    }
    
    .search-container {
        width: calc(100% - 40px) !important;
        padding: 25px 20px !important;
        margin: 0 auto !important;
        border-radius: 15px !important;
        max-width: 420px !important;
        max-height: 85vh !important;
        overflow-y: auto !important;
        box-sizing: border-box !important;
    }
    
    .search-header h3 {
        font-size: 18px !important;
        margin: 0 0 15px 0 !important;
    }
    
    .search-input {
        padding: 15px !important;
        font-size: 16px !important;
        width: 100% !important;
        box-sizing: border-box !important;
        border-radius: 8px !important;
    }
    
    .search-button {
        padding: 15px 25px !important;
        font-size: 14px !important;
        width: 100% !important;
        margin-top: 10px !important;
        border-radius: 8px !important;
    }
    
    .search-input-group {
        flex-direction: column !important;
        gap: 10px !important;
    }
}

@media (max-width: 480px) {
    .floating-btn,
    .back-to-top {
        width: 45px !important;
        height: 45px !important;
        font-size: 18px !important;
        right: 10px !important;
    }
    
    .whatsapp-btn {
        bottom: 150px !important;
    }
    
    .call-btn {
        bottom: 100px !important;
    }
    
    .back-to-top {
        bottom: 45px !important;
    }
    
    /* Small mobile search modal adjustments */
    .search-modal {
        padding: 15px !important;
    }
    
    .search-container {
        width: calc(100% - 30px) !important;
        padding: 20px 15px !important;
        margin: 0 auto !important;
        border-radius: 12px !important;
        max-width: 95vw !important;
        max-height: 85vh !important;
        overflow-y: auto !important;
        box-sizing: border-box !important;
    }
    
    .search-header h3 {
        font-size: 16px !important;
    }
    
    .search-input {
        padding: 12px !important;
        font-size: 16px !important;
    }
    
    .search-button {
        padding: 12px 20px !important;
        font-size: 13px !important;
    }
}
</style>

<!-- Floating WhatsApp & Call Buttons -->
<a href="tel:+919945689996" class="floating-btn call-btn" aria-label="Call Us">
    <i class="fas fa-phone"></i>
</a>

<a href="https://wa.me/919945689996?text=Hi%2C%20I%20would%20like%20to%20book%20a%20free%20consultation."
   target="_blank"
   class="floating-btn whatsapp-btn"
   aria-label="WhatsApp Us">
    <i class="fab fa-whatsapp"></i>
</a>

<!-- Back to Top Button -->
<button class="back-to-top" id="backToTop" aria-label="Back to Top">
    <i class="fas fa-chevron-up"></i>
</button>

<script>
// Floating Buttons Functionality
(function() {
    'use strict';
    
    function initFloatingButtons() {
        const backToTopBtn = document.getElementById('backToTop');
        
        if (!backToTopBtn) {
            console.log('Back to top button not found');
            return;
        }
        
        // Show/hide button based on scroll position
        function toggleButton() {
            if (window.pageYOffset > 300) {
                backToTopBtn.classList.add('show');
            } else {
                backToTopBtn.classList.remove('show');
            }
        }
        
        // Scroll to top function
        function scrollToTop(e) {
            e.preventDefault();
            
            // Fallback for older browsers
            if ('scrollBehavior' in document.documentElement.style) {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            } else {
                // Smooth scroll fallback
                const scrollStep = -window.scrollY / (500 / 15);
                const scrollInterval = setInterval(function() {
                    if (window.scrollY !== 0) {
                        window.scrollBy(0, scrollStep);
                    } else {
                        clearInterval(scrollInterval);
                    }
                }, 15);
            }
        }
        
        // Add event listeners
        window.addEventListener('scroll', toggleButton);
        backToTopBtn.addEventListener('click', scrollToTop);
        
        // Initial check
        toggleButton();
    }
    
    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initFloatingButtons);
    } else {
        initFloatingButtons();
    }
})();
</script>