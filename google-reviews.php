<?php
/**
 * Google Reviews Section
 * Displays Elfsight Google Reviews widget
 */
?>

<style>
/* GOOGLE REVIEWS */
:root {
    --brand-blue: #050e8f;
    --brand-pink: #dc3169;
    --brand-gold: #fec33b;
    --brand-coral: #f86f48;
}

.google-reviews-section {
    padding: 36px 0;
    background: #f8f9fa;
}

.google-reviews-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    overflow: hidden !important;
    position: relative !important;
    text-align: center;
}

.google-reviews-title {
    text-align: center;
    margin-bottom: 24px;
    font-size: 2.5rem;
    color: var(--brand-blue);
    font-weight: 700;
}

.review-card {
    border-radius: 16px;
    background: #fff;
    box-shadow: 0 12px 40px rgba(5,14,143,0.08);
}

.review-card .rating {
    color: var(--brand-gold);
}

/* Add-ons */
.fade-in,
.slide-up,
.rotate-in {
    will-change: transform, opacity;
}

/* Clean watermark hiding solution */
.elfsight-app-d91fbf14-51da-4b78-bb38-9d6977e6335c {
    position: relative !important;
    overflow: hidden !important;
    margin-bottom: -72px !important;
    clip-path: inset(0 0 72px 0) !important;
    margin-left: auto !important;
    margin-right: auto !important;
    text-align: center !important;
}

.widget-wrapper {
    display: flex !important;
    justify-content: center !important;
    align-items: center !important;
    width: 100% !important;
}

/* Hide watermark overlay elements */
.elfsight-app-d91fbf14-51da-4b78-bb38-9d6977e6335c div[class*="es-background-overlay"],
.elfsight-app-d91fbf14-51da-4b78-bb38-9d6977e6335c .Background__Overlay-sc-fd94690c-2,
.elfsight-app-d91fbf14-51da-4b78-bb38-9d6977e6335c div[style*="background-color: rgba(255, 255, 255, 0)"] {
    display: none !important;
    visibility: hidden !important;
    opacity: 0 !important;
    height: 0 !important;
    overflow: hidden !important;
}

/* Hide watermark text and links */
.elfsight-app-d91fbf14-51da-4b78-bb38-9d6977e6335c a[href*="elfsight"],
.elfsight-app-d91fbf14-51da-4b78-bb38-9d6977e6335c div[class*="es-background-overlay"] * {
    display: none !important;
    visibility: hidden !important;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .google-reviews-section {
        padding: 24px 0;
    }
    
    .google-reviews-title {
        font-size: 2rem;
        margin-bottom: 18px;
    }
    
    .google-reviews-container {
        padding: 0 15px;
    }
}

@media (max-width: 480px) {
    .google-reviews-section {
        padding: 18px 0;
    }
    
    .google-reviews-title {
        font-size: 1.8rem;
    }
}
</style>

<!-- Google Reviews Section -->
<section class="google-reviews-section">
    <div class="google-reviews-container">
        <h2 class="google-reviews-title">What Our Customers Say</h2>
        
        <!-- Elfsight Google Reviews Widget -->
        <div class="widget-wrapper" style="position: relative; overflow: hidden; text-align: center; display: flex; justify-content: center; align-items: center;">
            <script src="https://elfsightcdn.com/platform.js" defer></script>
            <div class="elfsight-app-d91fbf14-51da-4b78-bb38-9d6977e6335c" style="margin: 0 auto; width: 100%; max-width: 100%;"></div>
        </div>
    </div>
</section>