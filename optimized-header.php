<!-- Optimized Header Section -->
<link rel="preconnect" href="https://cdnjs.cloudflare.com">
<link rel="preconnect" href="https://pepsindia.b-cdn.net">
<link rel="preconnect" href="https://carysil.com">

<!-- Single Font Awesome Load with Fallback -->
<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"></noscript>

<header>
    <div class="container header-container">
        <a href="index.php" class="logo">
            <img src="images/homestyle_logo.webp" alt="Homestyle Interiors Logo" class="logo-img" width="55" height="55" loading="eager">
        </a>
      
        <div class="header-right-group">
            <nav id="mainNav">
                <ul class="main-nav">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="aboutus.php" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            PEPS Mattress
                            <i class="fas fa-chevron-down dropdown-icon"></i>
                        </a>
                        <div class="dropdown">
                            <a href="affordable.php" class="dropdown-link">Affordable Luxury</a>
                            <a href="restomic.php" class="dropdown-link">Restomic American Comfort</a>
                            <a href="ortho.php" class="dropdown-link">Ortho/Health</a>
                            <a href="elite.php" class="dropdown-link">Elite Luxury</a>
                            <a href="ultraluxury.php" class="dropdown-link">Ultra Luxury</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Carysil
                            <i class="fas fa-chevron-down dropdown-icon"></i>
                        </a>
                        <div class="dropdown">
                            <a href="chimneys.php" class="dropdown-link">Chimneys</a>
                            <a href="hobtops.php" class="dropdown-link">Hobtops</a>
                            <a href="sinks.php" class="dropdown-link">Faucets</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Home Furnishing
                            <i class="fas fa-chevron-down dropdown-icon"></i>
                        </a>
                        <div class="dropdown">
                            <a href="curtains.php" class="dropdown-link">Curtains</a>
                            <a href="sofa.php" class="dropdown-link">Customized Sofas</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="services.php" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="gallery.php" class="nav-link">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact-us.php" class="nav-link">Contact Us</a>
                    </li>
                </ul>
            </nav>
          
            <div class="header-actions">
                <div class="search-container-inline">
                    <div class="search-input-wrapper">
                        <input type="text" class="search-input-inline" id="searchInputInline" placeholder="Search products..." autocomplete="off">
                        <button class="search-btn-inline" id="searchBtnInline" aria-label="Search">
                            <i class="fas fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                    <div class="search-suggestions-dropdown" id="searchSuggestions"></div>
                </div>
                <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Toggle Menu">
                    <i class="fas fa-bars"></i>
                </button>
                <a href="https://wa.me/919945689996?text=Hi%2C%20I%20would%20like%20to%20book%20a%20consultation"
                   target="_blank"
                   rel="noopener"
                   class="cta-button">
                   Book Consultation
                </a>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <div class="mobile-menu-header">
            <a href="index.php" class="logo">
                <img src="images/homestyle_logo.webp" alt="Homestyle Interiors Logo" class="logo-img" width="55" height="55" loading="lazy">
            </a>
            <button class="mobile-menu-close" id="mobileMenuClose" aria-label="Close Menu">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <ul class="mobile-nav">
            <li><a href="index.php" class="mobile-nav-link">Home</a></li>
            <li><a href="aboutus.php" class="mobile-nav-link">About Us</a></li>
            <li class="has-dropdown">
                <span class="mobile-nav-link toggle-dropdown">PEPS Mattress <i class="fas fa-chevron-down"></i></span>
                <ul class="mobile-dropdown">
                    <li><a href="affordable.php" class="mobile-dropdown-link">Affordable Luxury</a></li>
                    <li><a href="restomic.php" class="mobile-dropdown-link">Restomic American Comfort</a></li>
                    <li><a href="ortho.php" class="mobile-dropdown-link">Ortho/Health</a></li>
                    <li><a href="elite.php" class="mobile-dropdown-link">Elite Luxury</a></li>
                    <li><a href="ultraluxury.php" class="mobile-dropdown-link">Ultra Luxury</a></li>
                </ul>
            </li>
            <li class="has-dropdown">
                <span class="mobile-nav-link toggle-dropdown">Carysil <i class="fas fa-chevron-down"></i></span>
                <ul class="mobile-dropdown">
                    <li><a href="chimneys.php" class="mobile-dropdown-link">Chimneys</a></li>
                    <li><a href="hobtops.php" class="mobile-dropdown-link">Hobtops</a></li>
                    <li><a href="sinks.php" class="mobile-dropdown-link">Faucets</a></li>
                </ul>
            </li>
            <li class="has-dropdown">
                <span class="mobile-nav-link toggle-dropdown">Home Furnishing <i class="fas fa-chevron-down"></i></span>
                <ul class="mobile-dropdown">
                    <li><a href="curtains.php" class="mobile-dropdown-link">Curtains</a></li>
                    <li><a href="sofa.php" class="mobile-dropdown-link">Customized Sofas</a></li>
                </ul>
            </li>
            <li><a href="services.php" class="mobile-nav-link">Services</a></li>
            <li><a href="gallery.php" class="mobile-nav-link">Gallery</a></li>
            <li><a href="contact-us.php" class="mobile-nav-link">Contact Us</a></li>
        </ul>
    </div>

    <div class="menu-overlay" id="menuOverlay"></div>
</header>

<style>
/* Critical CSS - Inline for performance */
:root {
    --blue: #0d4f9e;
    --violet: #8b2fa3;
    --pink: #cf3fa6;
    --white: #ffffff;
    --dark: #111;
    --light-gray: #f8f9fa;
    --transition: all 0.3s ease;
}

header {
    background-color: rgba(255, 255, 255, 0.95);
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
    padding: 10px 0;
    transition: var(--transition);
}

.container {
    width: 90%;
    max-width: 1400px;
    margin: 0 auto;
}

.header-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.logo {
    display: flex;
    align-items: center;
    text-decoration: none;
}

.logo-img {
    height: 55px;
    width: auto;
    transition: var(--transition);
}

.main-nav {
    display: flex;
    list-style: none;
    gap: 20px;
    margin: 0;
    padding: 0;
}

.nav-link {
    text-decoration: none;
    color: var(--dark);
    font-weight: 600;
    font-size: 14px;
    padding: 10px 12px;
    transition: var(--transition);
}

.nav-link:hover {
    color: var(--blue);
}

.cta-button {
    background: linear-gradient(90deg, var(--blue), var(--violet));
    color: white;
    border: none;
    padding: 10px 20px;
    font-weight: 600;
    border-radius: 4px;
    text-decoration: none;
    font-size: 13px;
    transition: var(--transition);
}

.mobile-menu-toggle {
    display: none;
    background: none;
    border: none;
    font-size: 24px;
    cursor: pointer;
}

@media (max-width: 992px) {
    .main-nav {
        display: none;
    }
    
    .mobile-menu-toggle {
        display: block;
    }
    
    .cta-button {
        display: none;
    }
}
</style>

<script>
// Optimized JavaScript - Essential functionality only
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    const menuOverlay = document.getElementById('menuOverlay');
    const mobileMenuClose = document.getElementById('mobileMenuClose');

    // Mobile menu controls
    function openMobileMenu() {
        mobileMenu.classList.add('active');
        menuOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeMobileMenu() {
        mobileMenu.classList.remove('active');
        menuOverlay.classList.remove('active');
        document.body.style.overflow = '';
    }

    if (mobileMenuToggle) mobileMenuToggle.addEventListener('click', openMobileMenu);
    if (mobileMenuClose) mobileMenuClose.addEventListener('click', closeMobileMenu);
    if (menuOverlay) menuOverlay.addEventListener('click', closeMobileMenu);

    // Header scroll effect
    let ticking = false;
    function updateHeader() {
        const header = document.querySelector('header');
        if (window.scrollY > 50) {
            header.style.padding = '8px 0';
        } else {
            header.style.padding = '10px 0';
        }
        ticking = false;
    }

    window.addEventListener('scroll', function() {
        if (!ticking) {
            requestAnimationFrame(updateHeader);
            ticking = true;
        }
    }, { passive: true });
});
</script>