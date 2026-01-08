<!-- Header Section with Dropdowns -->
<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" as="style">
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Fallback Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" crossorigin="anonymous" />
<!-- Additional fallback -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css" crossorigin="anonymous" />
<!-- Backup Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" 
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" 
      crossorigin="anonymous" referrerpolicy="no-referrer" />

<header>
    <div class="container header-container">
        <a href="index.php" class="logo">
            <img src="images/homestyle_logo.webp" alt="Homestyle Interiors Logo" class="logo-img" loading="lazy">
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
                        <input type="text" class="search-input-inline" id="searchInputInline" placeholder="Search products...">
                        <button class="search-btn-inline" id="searchBtnInline">
                            <i class="fas fa-search" aria-hidden="true"></i>
                            <span class="search-icon-fallback" style="display: none;">🔍</span>
                        </button>
                    </div>
                    <div class="search-suggestions-dropdown" id="searchSuggestions"></div>
                </div>
                <button class="mobile-menu-toggle" id="mobileMenuToggle">
                    <i class="fas fa-bars"></i>
                </button>
                <a href="https://wa.me/919945689996?text=Hi%2C%20I%20would%20like%20to%20book%20a%20consultation"
                   target="_blank"
                   class="cta-button">
                   Book Consultation
                </a>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Slide-in -->
    <div class="mobile-menu" id="mobileMenu">
        <div class="mobile-menu-header">
            <a href="index.php" class="logo">
                <img src="images/homestyle_logo.webp" alt="Homestyle Interiors Logo" class="logo-img" loading="lazy">
            </a>
            <button class="mobile-menu-close" id="mobileMenuClose">
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

    <!-- Mobile Menu Overlay -->
    <div class="menu-overlay" id="menuOverlay"></div>
    
    <!-- Search Modal -->
    <div class="search-modal" id="searchModal">
        <div class="search-container">
            <div class="search-header">
                <h3>Search Products</h3>
                <button class="close-search" id="closeSearch">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="search-input-group">
                <input type="text" class="search-input" id="searchInput" placeholder="Search for mattresses, kitchen appliances, curtains...">
                <button class="search-button" id="searchButton">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <div class="search-suggestions">
                <h4>Popular Searches</h4>
                <div class="suggestion-tags">
                    <span class="suggestion-tag" data-search="mattress">Mattresses</span>
                    <span class="suggestion-tag" data-search="chimney">Kitchen Chimneys</span>
                    <span class="suggestion-tag" data-search="curtains">Curtains</span>
                    <span class="suggestion-tag" data-search="sofa">Sofas</span>
                    <span class="suggestion-tag" data-search="hob">Hob Tops</span>
                    <span class="suggestion-tag" data-search="sink">Sinks & Faucets</span>
                </div>
            </div>
        </div>
    </div>
</header>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    :root {
        --blue: #0d4f9e;
        --violet: #8b2fa3;
        --pink: #cf3fa6;
        --white: #ffffff;
        --dark: #111;
        --light-gray: #f8f9fa;
        --gold: #FFD700;
        --teal: #008080;
        --coral: #FF6B6B;
        --transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
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
        overflow: visible;
    }
    .container {
        width: 90%;
        max-width: 1400px;
        margin: 0 auto;
        position: relative;
        z-index: 1;
    }
    .nav-item {
        position: relative;
        font-size: 14px !important;
        flex: 0 0 auto; /* Prevent flex shrinking/growing */
        white-space: nowrap;
        text-align: center;
        margin: 0 2px; /* Add small margin between items */
    }
    
    /* Header container styles */
    .header-container {
        display: flex;
        align-items: center;
        overflow: visible; /* Allow button to be fully visible */
        position: relative;
        z-index: 10;
    }
    
    /* Mobile and tablet layout */
    @media (max-width: 992px) {
        .header-container {
            justify-content: space-between;
            overflow: visible;
            padding: 0 15px;
        }
        
        .header-actions {
            min-width: max-content;
            flex-shrink: 0;
        }
    }
    
    /* Desktop navbar layout: logo left, nav left, button right */
    @media (min-width: 993px) {
        .header-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1400px;
            margin: 0 auto;
            gap: 10px; /* Reduced gap for tighter layout */
        }
        
        .logo {
            flex-shrink: 0;
        }
        
        .header-right-group {
            display: flex;
            align-items: center;
            gap: 10px; /* Reduced gap for tighter layout */
            flex: 1;
            min-width: 0; /* Allow shrinking */
        }
        
        #mainNav {
            flex: 0 0 auto;
            margin-left: 0;
        }
        
        .header-actions {
            display: flex;
            align-items: center;
            gap: 15px;
            min-width: max-content;
            overflow: visible;
            flex-shrink: 0;
            margin-left: auto;
            position: relative;
            z-index: 10;
        }
    }
    
    /* Large screens optimization */
    @media (min-width: 1400px) {
        .header-container {
            gap: 15px;
        }
        
        .header-right-group {
            gap: 15px; /* Reduced gap for tighter layout */
        }
        
        .nav-link {
            padding: 10px 16px;
            font-size: 14px;
        }
        
        .search-container-inline {
            min-width: 200px;
            max-width: 170px;
        }
        
        .cta-button {
            padding: 12px 24px;
            font-size: 14px;
        }
    }
    
    /* Navigation styles */
    .main-nav {
        display: flex;
        list-style: none;
        gap: 0;
        margin: 0;
        padding: 0;
        justify-content: flex-start;
        align-items: center;
        flex-wrap: nowrap;
    }
    
    .nav-link {
        text-decoration: none;
        color: var(--dark);
        font-weight: 600;
        font-size: 14px;
        position: relative;
        transition: var(--transition);
        padding: 10px 12px; /* Increased padding for better spacing */
        display: flex;
        align-items: center;
        gap: 4px;
        white-space: nowrap;
        min-width: max-content;
    }
    
    .nav-link:after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        background: linear-gradient(90deg, var(--blue), var(--violet));
        bottom: 0;
        left: 0;
        transition: var(--transition);
    }
    
    .nav-link:hover {
        color: var(--blue);
    }
    
    .nav-link:hover:after {
        width: 100%;
    }
    
    .nav-link.active {
        color: var(--blue);
    }
    
    .nav-link.active:after {
        width: 100%;
    }
    
    /* Dropdown Styles */
    .dropdown {
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%) translateY(10px);
        min-width: 220px;
        background: white;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        z-index: 1001;
        padding: 10px 0;
    }
    
    .dropdown::before {
        content: '';
        position: absolute;
        top: -10px;
        left: 50%;
        transform: translateX(-50%);
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-bottom: 10px solid white;
    }
    
    .nav-item:hover .dropdown {
        opacity: 1;
        visibility: visible;
        transform: translateX(-50%) translateY(0);
    }
    
    .dropdown-link {
        display: block;
        padding: 12px 25px;
        color: var(--dark);
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
        position: relative;
    }
    
    .dropdown-link:hover {
        background: linear-gradient(90deg, rgba(13, 79, 158, 0.05), rgba(139, 47, 163, 0.05));
        color: var(--blue);
        padding-left: 30px;
    }
    .mobile-menu-toggle {
        display: none;
        font-size: 24px;
        color: var(--dark);
        cursor: pointer;
        transition: var(--transition);
        z-index: 1002;
        background: none;
        border: none;
    }
    .mobile-menu-toggle:hover {
        color: var(--blue);
    }
    .cta-button {
        background: linear-gradient(90deg, #0d4f9e, #8b2fa3);
        color: white;
        border: none;
        padding: 10px 20px;
        font-weight: 600;
        border-radius: 4px;
        cursor: pointer;
        transition: var(--transition);
        font-size: 13px;
        letter-spacing: 0.5px;
        white-space: nowrap;
        text-decoration: none;
        min-width: max-content;
        flex-shrink: 0;
        display: inline-block;
        text-align: center;
        overflow: visible;
        position: relative;
        z-index: 10;
    }
    .cta-button:hover {
        background: linear-gradient(90deg, #8b2fa3, #0d4f9e);
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(139, 47, 163, 0.2);
    }
    .menu-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1000;
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    .menu-overlay.active {
        display: block;
        opacity: 1;
    }
    .mobile-menu {
        position: fixed;
        top: 0;
        right: -100%;
        width: 80%;
        max-width: 320px;
        height: 100vh;
        background: white;
        box-shadow: -5px 0 15px rgba(0,0,0,0.1);
        transition: right 0.3s ease;
        z-index: 1001;
        overflow-y: auto;
    }
    .mobile-menu.active {
        right: 0;
    }
    .mobile-menu-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 20px;
        border-bottom: 1px solid #eee;
    }
    .mobile-menu-close {
        background: none;
        border: none;
        font-size: 24px;
        color: var(--dark);
        cursor: pointer;
    }
    .mobile-nav {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .mobile-nav-link, .toggle-dropdown {
        display: block;
        padding: 15px 20px;
        color: var(--dark);
        text-decoration: none;
        font-weight: 600;
        font-size: 14px;
        border-bottom: 1px solid #f0f0f0;
        cursor: pointer;
    }
    .toggle-dropdown {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .mobile-dropdown {
        display: none;
        padding-left: 20px;
        background: #f9f9f9;
    }
    .mobile-dropdown li a {
        display: block;
        padding: 12px 20px;
        color: #555;
        font-size: 15px;
        text-decoration: none;
        border-bottom: 1px solid #f0f0f0;
    }
    .mobile-dropdown li:last-child a {
        border-bottom: none;
    }
    .mobile-nav-link.active {
        color: var(--blue);
        background: rgba(13, 79, 158, 0.05);
    }
    @media (max-width: 992px) {
        .main-nav {
            display: none;
        }
        .mobile-menu-toggle {
            display: block;
        }
        .cta-button {
            display: none; /* Hide on mobile */
        }
        .header-actions {
            gap: 12px;
            flex-shrink: 0; /* Prevent shrinking */
            overflow: visible;
            position: relative;
            z-index: 10;
        }
        
        /* Mobile Search Modal Centering Fix */
        .search-modal {
            display: none !important;
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            bottom: 0 !important;
            width: 100vw !important;
            height: 100vh !important;
            background: rgba(0, 0, 0, 0.95) !important;
            z-index: 99999 !important;
            justify-content: center !important;
            align-items: center !important;
            padding: 20px !important;
            box-sizing: border-box !important;
        }
        
        .search-modal.active {
            display: flex !important;
        }
        
        .search-modal .search-container {
            width: calc(100% - 40px) !important;
            max-width: 400px !important;
            background: white !important;
            border-radius: 15px !important;
            padding: 25px 20px !important;
            position: relative !important;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3) !important;
            margin: 0 auto !important;
            max-height: 80vh !important;
            overflow-y: auto !important;
            box-sizing: border-box !important;
            left: auto !important;
            right: auto !important;
            top: auto !important;
            bottom: auto !important;
            transform: none !important;
        }
    }

    /* Very small screens */
    @media (max-width: 480px) {
        .cta-button {
            display: none; /* Keep hidden on very small screens */
        }
        
        .header-actions {
            gap: 8px;
            overflow: visible;
        }
        
        .header-container {
            padding: 0 10px;
            overflow: visible;
        }
        
        /* Extra small mobile search modal adjustments */
        .search-modal {
            padding: 15px !important;
        }
        
        .search-modal .search-container {
            width: calc(100% - 30px) !important;
            max-width: 95vw !important;
            padding: 20px 15px !important;
            border-radius: 12px !important;
            margin: 0 auto !important;
        }
    }
    @media (max-width: 1200px) {
        .header-container {
            gap: 15px;
        }
        
        .header-right-group {
            gap: 10px; /* Reduced gap for tighter layout */
        }
        
        .main-nav {
            gap: 0;
        }
        .nav-link {
            font-size: 12px;
            padding: 10px 10px;
        }
        .cta-button {
            padding: 10px 18px;
            font-size: 13px;
        }
    }
    
    /* Additional responsive adjustments for medium screens */
    @media (max-width: 1100px) and (min-width: 993px) {
        .header-container {
            gap: 12px;
        }
        
        .header-right-group {
            gap: 12px;
        }
        
        .nav-link {
            font-size: 11px;
            padding: 10px 8px;
        }
    }
    
    /* Compact layout for smaller desktop screens */
    @media (max-width: 1050px) and (min-width: 993px) {
        .header-container {
            gap: 10px;
        }
        
        .header-right-group {
            gap: 10px;
        }
        
        .nav-link {
            font-size: 10px;
            padding: 10px 6px;
        }
        
        .cta-button {
            display: none; /* Keep hidden on compact desktop screens */
        }
    }
    
    /* Professional Inline Search Bar */
    .search-container-inline {
        position: relative;
        min-width: 180px; /* Increased for better usability */
        max-width: 200px; /* Reduced to prevent overlap */
        flex-shrink: 0; /* Prevent shrinking */
        margin-right: 10px; /* Add margin to separate from button */
    }
    
    .search-input-wrapper {
        position: relative;
        display: flex;
        align-items: center;
        background: white;
        border: 2px solid #e1e5e9;
        border-radius: 25px;
        overflow: hidden;
        transition: all 0.3s ease;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        width: 100%; /* Proper width constraint */
        height: 42px; /* Fixed height for consistency */
    }
    
    .search-input-wrapper:focus-within {
        border-color: var(--blue);
        box-shadow: 0 4px 15px rgba(13, 79, 158, 0.15), 0 0 0 3px rgba(13, 79, 158, 0.1);
        transform: translateY(-1px);
    }
    
    .search-input-inline {
        flex: 1;
        border: none;
        outline: none;
        padding: 12px 16px;
        font-size: 14px;
        background: transparent;
        color: var(--dark);
        font-weight: 500;
        height: 100%;
    }
    
    .search-input-inline::placeholder {
        color: #9ca3af;
        font-weight: 400;
        font-size: 13px;
    }
    
    .search-btn-inline {
        background: linear-gradient(135deg, var(--blue), var(--violet));
        border: none;
        padding: 0;
        width: 42px;
        height: 42px;
        color: white !important;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 0 25px 25px 0;
        margin: 0;
        flex-shrink: 0;
        position: relative;
        z-index: 2;
    }
    
    /* Enhanced search icon visibility */
    .search-btn-inline i {
        font-size: 16px;
        color: white !important;
        transition: transform 0.2s ease;
        display: inline-block !important;
        visibility: visible !important;
        opacity: 1 !important;
        position: relative;
        z-index: 3;
        line-height: 1;
        font-weight: 900 !important;
        font-family: "Font Awesome 6 Free", "Font Awesome 5 Free", "FontAwesome" !important;
    }
    
    /* Fallback search icon using CSS content */
    .search-btn-inline::after {
        content: "🔍";
        font-size: 16px;
        display: none;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1;
        color: white;
    }
    
    /* Show fallback if Font Awesome fails */
    .search-btn-inline:not(:has(i))::after,
    .search-btn-inline i:empty + .search-btn-inline::after {
        display: block;
    }
    
    /* Fallback for search icon if Font Awesome doesn't load */
    .search-btn-inline::before {
        content: "🔍";
        font-size: 16px;
        display: block;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1;
    }
    
    /* Hide fallback when Font Awesome icon is present */
    .search-btn-inline i + .search-btn-inline::before,
    .search-btn-inline:has(i)::before {
        display: none;
    }
    
    .search-btn-inline:hover {
        background: linear-gradient(135deg, var(--violet), var(--pink));
        transform: scale(1.05);
    }
    
    /* Fallback search icon styling */
    .search-icon-fallback {
        font-size: 16px;
        display: none;
        color: white;
        line-height: 1;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 4;
    }
    
    /* Show fallback when Font Awesome fails */
    .search-btn-inline:not(:has(.fas:not(:empty))) .search-icon-fallback {
        display: inline-block !important;
    }
    
    /* Ensure Font Awesome icons are visible */
    .fas, .fa {
        font-family: "Font Awesome 6 Free", "Font Awesome 5 Free", "FontAwesome" !important;
        font-weight: 900 !important;
        display: inline-block !important;
        font-style: normal !important;
        font-variant: normal !important;
        text-rendering: auto !important;
        -webkit-font-smoothing: antialiased !important;
    }
    
    /* Specific fix for search icons */
    .search-btn-inline .fas.fa-search {
        font-family: "Font Awesome 6 Free", "Font Awesome 5 Free", "FontAwesome" !important;
        font-weight: 900 !important;
        content: "\f002" !important;
        display: inline-block !important;
        visibility: visible !important;
        opacity: 1 !important;
    }
    
    /* Fallback for search icon if Font Awesome fails */
    .search-btn-inline .fas.fa-search::before {
        content: "\f002" !important;
        font-family: "Font Awesome 6 Free", "Font Awesome 5 Free" !important;
        font-weight: 900 !important;
    }
    
    .search-btn-inline i {
        font-size: 16px;
        color: white !important;
        transition: transform 0.2s ease;
        display: inline-block !important;
        visibility: visible !important;
        opacity: 1 !important;
        position: relative;
        z-index: 3;
        line-height: 1;
        font-weight: 900 !important;
    }
    
    /* Ensure Font Awesome icons are loaded */
    .search-btn-inline i.fas,
    .search-btn-inline i.fa {
        font-family: "Font Awesome 6 Free", "Font Awesome 5 Free", "FontAwesome" !important;
        font-weight: 900 !important;
    }
    
    /* Alternative approach - use Unicode for search icon */
    .search-btn-inline i.fa-search::before {
        content: "\f002" !important;
        font-family: "Font Awesome 6 Free", "Font Awesome 5 Free" !important;
        font-weight: 900 !important;
        display: inline-block !important;
    }
    
    .search-btn-inline:hover i {
        transform: scale(1.1) rotate(15deg);
    }
    
    .search-btn-inline:focus {
        outline: 2px solid var(--blue);
        outline-offset: 2px;
    }
    
    /* Ultimate fallback - ensure search icon is always visible */
    .search-btn-inline {
        position: relative;
    }
    
    .search-btn-inline::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='white' viewBox='0 0 24 24'%3E%3Cpath d='M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z'/%3E%3C/svg%3E");
        background-size: 16px 16px;
        background-repeat: no-repeat;
        background-position: center;
        opacity: 0;
        pointer-events: none;
        z-index: 1;
    }
    
    /* Show SVG fallback only if Font Awesome icon is not visible */
    .search-btn-inline:not(:has(.fas:not(:empty)))::before {
        opacity: 1;
    }
    
    /* Search Suggestions Dropdown */
    .search-suggestions-dropdown {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: white;
        border-radius: 12px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.15);
        border: 1px solid #e1e5e9;
        max-height: 400px;
        overflow-y: auto;
        z-index: 1002;
        display: none;
        margin-top: 8px;
    }
    
    .search-suggestions-dropdown.show {
        display: block;
        animation: slideDown 0.2s ease;
    }
    
    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .suggestion-item {
        padding: 12px 20px;
        cursor: pointer;
        transition: all 0.2s ease;
        border-bottom: 1px solid #f3f4f6;
        display: flex;
        align-items: center;
        gap: 12px;
    }
    
    .suggestion-item:last-child {
        border-bottom: none;
    }
    
    .suggestion-item:hover {
        background: linear-gradient(90deg, rgba(13, 79, 158, 0.05), rgba(139, 47, 163, 0.05));
        color: var(--blue);
    }
    
    .suggestion-item i {
        color: var(--blue);
        font-size: 12px;
        opacity: 0.7;
    }
    
    .suggestion-text {
        flex: 1;
        font-weight: 500;
    }
    
    .suggestion-category {
        font-size: 11px;
        color: #6b7280;
        background: #f3f4f6;
        padding: 2px 8px;
        border-radius: 10px;
        text-transform: uppercase;
        font-weight: 600;
        letter-spacing: 0.5px;
    }
    
    .no-results {
        padding: 20px;
        text-align: center;
        color: #6b7280;
        font-style: italic;
    }
    
    /* Popular searches section */
    .popular-searches {
        padding: 15px 20px;
        border-top: 1px solid #f3f4f6;
        background: #fafbfc;
    }
    
    .popular-searches h4 {
        font-size: 12px;
        color: #6b7280;
        margin-bottom: 10px;
        text-transform: uppercase;
        font-weight: 600;
        letter-spacing: 0.5px;
    }
    
    .popular-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }
    
    .popular-tag {
        background: white;
        border: 1px solid #e1e5e9;
        padding: 6px 12px;
        border-radius: 15px;
        font-size: 12px;
        color: var(--dark);
        text-decoration: none;
        transition: all 0.2s ease;
        font-weight: 500;
    }
    
    .popular-tag:hover {
        background: var(--blue);
        color: white;
        border-color: var(--blue);
        transform: translateY(-1px);
    }
    
    /* ===== ADDITIONAL HEADER STYLES MOVED FROM INDEX.CSS ===== */
    
    /* Logo Styles */
    .logo {
        display: flex;
        align-items: center;
        gap: 10px;
        text-decoration: none;
    }
    .logo-img {
        height: 55px;
        width: auto;
        transition: var(--transition);
    }
    .logo:hover .logo-img {
        transform: scale(1.05);
    }
    .logo-text {
        font-size: 28px;
        font-weight: 700;
        color: var(--blue);
        letter-spacing: 1px;
    }
    .logo-text span {
        color: var(--violet);
    }
    
    /* Updated Navigation Styles */
    nav {
        position: relative;
    }
    
    /* Dropdown icon styles */
    .dropdown-icon {
        margin-left: auto;
        font-size: 12px;
        opacity: 0.7;
    }
    
    .dropdown-link::before {
        content: '';
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        width: 0;
        height: 2px;
        background: var(--blue);
        transition: width 0.3s ease;
    }
    
    .dropdown-link:hover::before {
        width: 8px;
    }
    
    /* Header Actions Search Icon */
    .header-actions i {
        font-size: 20px;
        color: var(--dark);
        cursor: pointer;
        transition: var(--transition);
        position: relative;
    }
    
    .header-actions i:hover {
        color: var(--blue);
    }
    
    /* Responsive Styles for Navigation - Mobile Menu */
    @media (max-width: 992px) {
        nav {
            position: fixed;
            top: 0;
            left: -100%;
            width: 80%;
            height: 100vh;
            background: white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: left 0.3s ease;
            z-index: 1001;
            overflow-y: auto;
            padding-top: 80px;
        }
       
        nav.active {
            left: 0;
        }
       
        .main-nav {
            flex-direction: column;
            gap: 0;
            padding: 20px;
        }
       
        .nav-item {
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }
       
        .nav-link {
            padding: 15px 0;
            font-size: 14px;
            justify-content: space-between;
        }
       
        .dropdown {
            position: static;
            opacity: 1;
            visibility: visible;
            transform: none;
            box-shadow: none;
            padding: 0 0 0 20px;
            display: none;
            background: rgba(13, 79, 158, 0.03);
            border-radius: 0;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }
       
        .dropdown.active {
            display: block;
            max-height: 500px;
        }
       
        .dropdown::before {
            display: none;
        }
       
        .mobile-menu-toggle {
            display: block;
        }
       
        .cta-button {
            display: none; /* Hide on mobile */
        }
        
        /* Overlay when menu is open */
        .menu-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }
    }
    
    /* Responsive Logo Styles */
    @media (max-width: 992px) {
        .logo-img {
            height: 50px;
        }
       
        .logo-text {
            font-size: 24px;
        }
    }
    
    @media (max-width: 480px) {
        .logo-img {
            height: 45px;
        }
       
        .logo-text {
            font-size: 20px;
        }
    }
    
    /* Search icon mobile styles */
    @media (max-width: 992px) {
        .search-container-inline {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: white;
            border-radius: 0 0 15px 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transform: translateY(-10px);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 1003;
            padding: 20px;
            min-width: auto;
        }
        
        .search-container-inline.mobile-active {
            transform: translateY(0);
            opacity: 1;
            visibility: visible;
        }
        
        .header-actions {
            gap: 10px;
            position: relative;
        }
    }
    
    @media (max-width: 1200px) {
        .search-container-inline {
            min-width: 160px; /* Adjusted for medium screens */
            max-width: 170px; /* Reduced to prevent overlap */
            margin-right: 8px;
        }
        
        .search-input-inline {
            font-size: 13px;
            padding: 10px 14px;
        }
        
        .search-input-inline::placeholder {
            font-size: 12px;
        }
        
        .search-btn-inline {
            width: 38px;
            height: 38px;
            margin: 0;
        }
        
        .search-btn-inline i {
            font-size: 14px;
        }
        
        .search-input-wrapper {
            height: 38px;
        }
        
        .header-actions {
            gap: 25px;
        }
    }
    
    @media (max-width: 1100px) {
        .search-container-inline {
            min-width: 140px; /* Adjusted for smaller screens */
            max-width: 150px; /* Reduced to prevent overlap */
            margin-right: 6px;
        }
        
        .search-input-inline {
            font-size: 12px;
            padding: 9px 12px;
        }
        
        .search-input-inline::placeholder {
            font-size: 11px;
        }
        
        .search-btn-inline {
            width: 36px;
            height: 36px;
            margin: 0;
        }
        
        .search-btn-inline i {
            font-size: 13px;
        }
        
        .search-input-wrapper {
            height: 36px;
        }
        
        .header-actions {
            gap: 18px;
        }
    }

    @media (max-width: 1050px) and (min-width: 993px) {
        .search-container-inline {
            min-width: 120px; /* Compact for smallest desktop screens */
            max-width: 130px; /* Reduced to prevent overlap */
            margin-right: 5px;
        }
        
        .search-input-inline {
            font-size: 11px;
            padding: 8px 10px;
        }
        
        .search-input-inline::placeholder {
            font-size: 10px;
        }
        
        .search-btn-inline {
            width: 32px;
            height: 32px;
            margin: 0;
        }
        
        .search-btn-inline i {
            font-size: 12px;
        }
        
        .search-input-wrapper {
            height: 32px;
        }
        
        .header-actions {
            gap: 10px;
        }
    }
        }
    }
        
        /* Ensure mobile nav has solid background and better visibility */
        nav {
            background: #ffffff !important; /* Solid white to avoid any transparency issues */
        }

        .main-nav {
            background: #ffffff; /* Extra safety */
        }

        .nav-link {
            color: #111 !important; /* Darker text for better contrast */
            font-size: 16px; /* Slightly larger on mobile for readability */
        }
    }
</style>

<script>
// === FIX FOR ACTIVE NAVIGATION HIGHLIGHT ===
document.addEventListener("DOMContentLoaded", function () {
    // Enhanced Font Awesome fallback system
    setTimeout(function() {
        const searchButtons = document.querySelectorAll('.search-btn-inline');
        searchButtons.forEach(function(button) {
            const icon = button.querySelector('.fas.fa-search');
            
            if (icon) {
                // Check if Font Awesome is loaded
                const computedStyle = window.getComputedStyle(icon, '::before');
                const content = computedStyle.getPropertyValue('content');
                
                // If Font Awesome is not loaded properly, create a fallback
                if (!content || content === 'none' || content === '""' || content === 'normal') {
                    // Remove the icon and show emoji fallback
                    icon.style.display = 'none';
                    
                    // Create a fallback element
                    const fallback = document.createElement('span');
                    fallback.innerHTML = '🔍';
                    fallback.style.fontSize = '16px';
                    fallback.style.color = 'white';
                    fallback.style.display = 'inline-block';
                    fallback.style.lineHeight = '1';
                    
                    button.appendChild(fallback);
                }
            } else {
                // No icon found, add emoji fallback
                const fallback = document.createElement('span');
                fallback.innerHTML = '🔍';
                fallback.style.fontSize = '16px';
                fallback.style.color = 'white';
                fallback.style.display = 'inline-block';
                fallback.style.lineHeight = '1';
                
                button.appendChild(fallback);
            }
        });
    }, 200);

    const currentPage = window.location.pathname.split("/").pop() || "index.php";

    // Desktop navigation
    document.querySelectorAll("#mainNav .nav-link").forEach(link => {
        const href = link.getAttribute("href");
        if (href && (href === currentPage || (currentPage === "" && href === "index.php"))) {
            link.classList.add("active");
        }
    });

    // Mobile navigation
    document.querySelectorAll(".mobile-nav-link").forEach(link => {
        const href = link.getAttribute("href");
        if (href && (href === currentPage || (currentPage === "" && href === "index.php"))) {
            link.classList.add("active");
        }
    });
});

// Header scroll effect
window.addEventListener('scroll', function() {
    const header = document.querySelector('header');
    if (window.scrollY > 50) {
        header.style.padding = '8px 0';
        header.style.boxShadow = '0 5px 20px rgba(0, 0, 0, 0.1)';
    } else {
        header.style.padding = '10px 0';
        header.style.boxShadow = '0 5px 20px rgba(0, 0, 0, 0.05)';
    }
});

// Mobile Menu Controls
const mobileMenuToggle = document.getElementById('mobileMenuToggle');
const mobileMenu = document.getElementById('mobileMenu');
const menuOverlay = document.getElementById('menuOverlay');
const mobileMenuClose = document.getElementById('mobileMenuClose');

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

mobileMenuToggle.addEventListener('click', openMobileMenu);
mobileMenuClose.addEventListener('click', closeMobileMenu);
menuOverlay.addEventListener('click', closeMobileMenu);

// Close on ESC key
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
        closeMobileMenu();
    }
});

// Mobile Dropdown Toggle
document.querySelectorAll('.toggle-dropdown').forEach(toggle => {
    toggle.addEventListener('click', function(e) {
        e.preventDefault();
        const dropdown = this.nextElementSibling;
        dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
        this.querySelector('i').classList.toggle('fa-chevron-down');
        this.querySelector('i').classList.toggle('fa-chevron-up');
    });
});

// Professional Inline Search Functionality
const searchInputInline = document.getElementById('searchInputInline');
const searchBtnInline = document.getElementById('searchBtnInline');
const searchSuggestions = document.getElementById('searchSuggestions');
const searchContainer = document.querySelector('.search-container-inline');

// Enhanced Product Mapping with more comprehensive search terms
const productDatabase = {
    // Mattresses
    "peps mattress": { url: "affordable.php", category: "Mattresses", title: "PEPS Mattress Collection" },
    "mattress": { url: "affordable.php", category: "Mattresses", title: "Premium Mattresses" },
    "peps": { url: "affordable.php", category: "Mattresses", title: "PEPS Brand" },
    "orthopedic mattress": { url: "ortho.php", category: "Mattresses", title: "Orthopedic Mattresses" },
    "ortho": { url: "ortho.php", category: "Mattresses", title: "Orthopedic Support" },
    "memory foam": { url: "ortho.php", category: "Mattresses", title: "Memory Foam Mattresses" },
    "spring mattress": { url: "affordable.php", category: "Mattresses", title: "Spring Mattresses" },
    "luxury mattress": { url: "ultraluxury.php", category: "Mattresses", title: "Ultra Luxury Mattresses" },
    "elite mattress": { url: "elite.php", category: "Mattresses", title: "Elite Luxury Collection" },
    "restomic": { url: "restomic.php", category: "Mattresses", title: "Restomic American Comfort" },
    "american comfort": { url: "restomic.php", category: "Mattresses", title: "American Comfort Series" },
    "sleep": { url: "affordable.php", category: "Mattresses", title: "Better Sleep Solutions" },
    "bed": { url: "affordable.php", category: "Mattresses", title: "Bedroom Solutions" },
    
    // Kitchen Appliances
    "chimney": { url: "chimneys.php", category: "Kitchen", title: "Kitchen Chimneys" },
    "kitchen chimney": { url: "chimneys.php", category: "Kitchen", title: "Kitchen Chimneys" },
    "chimneys": { url: "chimneys.php", category: "Kitchen", title: "Auto-Clean Chimneys" },
    "carysil chimney": { url: "chimneys.php", category: "Kitchen", title: "Carysil Chimneys" },
    "auto clean chimney": { url: "chimneys.php", category: "Kitchen", title: "Auto-Clean Technology" },
    
    "hob": { url: "hobtops.php", category: "Kitchen", title: "Gas Hobs & Cooktops" },
    "hobtop": { url: "hobtops.php", category: "Kitchen", title: "Premium Hobtops" },
    "hobtops": { url: "hobtops.php", category: "Kitchen", title: "Built-in Hobs" },
    "gas hob": { url: "hobtops.php", category: "Kitchen", title: "Gas Hobs" },
    "cooktop": { url: "hobtops.php", category: "Kitchen", title: "Modern Cooktops" },
    "induction": { url: "hobtops.php", category: "Kitchen", title: "Induction Cooktops" },
    "cooking": { url: "hobtops.php", category: "Kitchen", title: "Cooking Solutions" },
    
    "faucet": { url: "sinks.php", category: "Kitchen", title: "Kitchen Faucets" },
    "faucets": { url: "sinks.php", category: "Kitchen", title: "Premium Faucets" },
    "sink": { url: "sinks.php", category: "Kitchen", title: "Kitchen Sinks" },
    "sinks": { url: "sinks.php", category: "Kitchen", title: "Stainless Steel Sinks" },
    "kitchen sink": { url: "sinks.php", category: "Kitchen", title: "Kitchen Sinks & Faucets" },
    "tap": { url: "sinks.php", category: "Kitchen", title: "Kitchen Taps" },
    "carysil": { url: "sinks.php", category: "Kitchen", title: "Carysil Products" },
    "stainless steel": { url: "sinks.php", category: "Kitchen", title: "Stainless Steel Products" },
    
    // Home Furnishing
    "curtains": { url: "curtains.php", category: "Furnishing", title: "Designer Curtains" },
    "curtain": { url: "curtains.php", category: "Furnishing", title: "Premium Curtains" },
    "blinds": { url: "curtains.php", category: "Furnishing", title: "Window Blinds" },
    "blind": { url: "curtains.php", category: "Furnishing", title: "Custom Blinds" },
    "window treatment": { url: "curtains.php", category: "Furnishing", title: "Window Treatments" },
    "blackout curtains": { url: "curtains.php", category: "Furnishing", title: "Blackout Curtains" },
    "roller blinds": { url: "curtains.php", category: "Furnishing", title: "Roller Blinds" },
    "vertical blinds": { url: "curtains.php", category: "Furnishing", title: "Vertical Blinds" },
    
    "sofa": { url: "sofa.php", category: "Furnishing", title: "Custom Sofas" },
    "custom sofa": { url: "sofa.php", category: "Furnishing", title: "Customized Sofas" },
    "sofas": { url: "sofa.php", category: "Furnishing", title: "Premium Sofas" },
    "furniture": { url: "sofa.php", category: "Furnishing", title: "Living Room Furniture" },
    "seating": { url: "sofa.php", category: "Furnishing", title: "Seating Solutions" },
    "living room": { url: "sofa.php", category: "Furnishing", title: "Living Room Furniture" },
    "sectional": { url: "sofa.php", category: "Furnishing", title: "Sectional Sofas" },
    
    // General
    "home": { url: "index.php", category: "General", title: "Home - Homestyle Interiors" },
    "about": { url: "aboutus.php", category: "General", title: "About Us" },
    "services": { url: "services.php", category: "General", title: "Our Services" },
    "gallery": { url: "gallery.php", category: "General", title: "Product Gallery" },
    "contact": { url: "contact-us.php", category: "General", title: "Contact Us" },
    "interior": { url: "services.php", category: "General", title: "Interior Design Services" },
    "design": { url: "services.php", category: "General", title: "Interior Design" },
    "consultation": { url: "contact-us.php", category: "General", title: "Free Consultation" }
};

// Popular search terms
const popularSearches = [
    { term: "PEPS Mattress", url: "affordable.php" },
    { term: "Kitchen Chimney", url: "chimneys.php" },
    { term: "Designer Curtains", url: "curtains.php" },
    { term: "Custom Sofas", url: "sofa.php" },
    { term: "Gas Hobs", url: "hobtops.php" },
    { term: "Kitchen Sinks", url: "sinks.php" }
];

let searchTimeout;

// Search input event listener
searchInputInline.addEventListener('input', function() {
    const query = this.value.trim().toLowerCase();
    
    // Clear previous timeout
    clearTimeout(searchTimeout);
    
    // Debounce search to avoid too many calls
    searchTimeout = setTimeout(() => {
        if (query.length > 0) {
            showSuggestions(query);
        } else {
            showPopularSearches();
        }
    }, 150);
});

// Show suggestions when input is focused
searchInputInline.addEventListener('focus', function() {
    const query = this.value.trim().toLowerCase();
    if (query.length > 0) {
        showSuggestions(query);
    } else {
        showPopularSearches();
    }
});

// Hide suggestions when clicking outside
document.addEventListener('click', function(e) {
    if (!e.target.closest('.search-container-inline')) {
        hideSuggestions();
        // Hide mobile search on mobile devices
        if (window.innerWidth <= 992) {
            searchContainer.classList.remove('mobile-active');
        }
    }
});

// Search button click
searchBtnInline.addEventListener('click', function() {
    performSearch();
});

// Enter key press
searchInputInline.addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        performSearch();
    }
});

function showSuggestions(query) {
    const matches = [];
    
    // Search through product database
    for (let key in productDatabase) {
        if (key.includes(query) || productDatabase[key].title.toLowerCase().includes(query)) {
            matches.push({
                key: key,
                data: productDatabase[key],
                relevance: key.startsWith(query) ? 2 : 1 // Higher relevance for starts-with matches
            });
        }
    }
    
    // Sort by relevance
    matches.sort((a, b) => b.relevance - a.relevance);
    
    // Limit to top 6 results
    const topMatches = matches.slice(0, 6);
    
    if (topMatches.length > 0) {
        let html = '';
        
        topMatches.forEach(match => {
            const highlightedTitle = highlightMatch(match.data.title, query);
            html += `
                <div class="suggestion-item" onclick="navigateToProduct('${match.data.url}')">
                    <i class="fas fa-search"></i>
                    <span class="suggestion-text">${highlightedTitle}</span>
                    <span class="suggestion-category">${match.data.category}</span>
                </div>
            `;
        });
        
        searchSuggestions.innerHTML = html;
        searchSuggestions.classList.add('show');
    } else {
        searchSuggestions.innerHTML = '<div class="no-results">No products found for "' + query + '"</div>';
        searchSuggestions.classList.add('show');
    }
}

function showPopularSearches() {
    let html = '<div class="popular-searches">';
    html += '<h4>Popular Searches</h4>';
    html += '<div class="popular-tags">';
    
    popularSearches.forEach(item => {
        html += `<a href="${item.url}" class="popular-tag">${item.term}</a>`;
    });
    
    html += '</div></div>';
    
    searchSuggestions.innerHTML = html;
    searchSuggestions.classList.add('show');
}

function hideSuggestions() {
    searchSuggestions.classList.remove('show');
}

function highlightMatch(text, query) {
    const regex = new RegExp(`(${query})`, 'gi');
    return text.replace(regex, '<strong style="color: var(--blue);">$1</strong>');
}

function navigateToProduct(url) {
    window.location.href = url;
}

function performSearch() {
    const query = searchInputInline.value.trim().toLowerCase();
    
    if (!query) {
        searchInputInline.focus();
        return;
    }
    
    // Find best match
    let bestMatch = null;
    let bestScore = 0;
    
    for (let key in productDatabase) {
        let score = 0;
        
        // Exact match gets highest score
        if (key === query) {
            score = 100;
        }
        // Starts with query gets high score
        else if (key.startsWith(query)) {
            score = 80;
        }
        // Contains query gets medium score
        else if (key.includes(query)) {
            score = 60;
        }
        // Title contains query gets lower score
        else if (productDatabase[key].title.toLowerCase().includes(query)) {
            score = 40;
        }
        
        if (score > bestScore) {
            bestScore = score;
            bestMatch = productDatabase[key];
        }
    }
    
    if (bestMatch) {
        window.location.href = bestMatch.url;
    } else {
        // If no match found, redirect to gallery with search parameter
        window.location.href = `gallery.php?search=${encodeURIComponent(query)}`;
    }
    
    hideSuggestions();
}
</script>