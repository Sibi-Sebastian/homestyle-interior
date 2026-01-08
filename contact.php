<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Gallery | Homestyle Interiors</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        :root {
            --blue: #0d4f9e;
            --violet: #8b2fa3;
            --pink: #cf3fa6;
            --white: #ffffff;
            --light-blue: #e8f0fe;
            --light-violet: #f5e9f8;
            --light-pink: #fce8f5;
            --dark: #1a1a2e;
            --gray: #666;
            --light-gray: #f8f9fa;
            --transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--light-gray);
            color: var(--dark);
            overflow-x: hidden;
        }

        /* ================= HEADER ================= */
        .gallery-header {
            background: linear-gradient(135deg, var(--blue), var(--violet));
            color: var(--white);
            padding: 60px 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .header-content {
            position: relative;
            z-index: 2;
            max-width: 1200px;
            margin: 0 auto;
        }

        .gallery-header h1 {
            font-size: 3.2rem;
            font-weight: 800;
            margin-bottom: 1rem;
            text-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        .gallery-header p {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 700px;
            margin: 0 auto 2rem;
            line-height: 1.6;
        }

        .brand-tagline {
            display: inline-block;
            padding: 8px 24px;
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(10px);
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 2rem;
            border: 1px solid rgba(255,255,255,0.2);
        }

        /* ================= CATEGORY NAVIGATION ================= */
        .category-nav {
            position: sticky;
            top: 0;
            z-index: 100;
            background: var(--white);
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            padding: 15px 40px;
        }

        .category-container {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            overflow-x: auto;
            gap: 10px;
            padding: 10px 0;
        }

        .category-container::-webkit-scrollbar {
            height: 6px;
        }

        .category-container::-webkit-scrollbar-track {
            background: var(--light-gray);
        }

        .category-container::-webkit-scrollbar-thumb {
            background: var(--blue);
            border-radius: 3px;
        }

        .category-btn {
            padding: 12px 28px;
            border: none;
            border-radius: 50px;
            background: var(--light-gray);
            color: var(--blue);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            white-space: nowrap;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.95rem;
        }

        .category-btn:hover {
            background: var(--light-blue);
            transform: translateY(-2px);
        }

        .category-btn.active {
            background: linear-gradient(135deg, var(--blue), var(--violet));
            color: var(--white);
            box-shadow: 0 5px 15px rgba(13,79,158,0.2);
        }

        .category-btn i {
            font-size: 1.1rem;
        }

        /* ================= PRODUCT CATEGORIES ================= */
        .products-section {
            padding: 60px 40px;
            max-width: 1400px;
            margin: 0 auto;
        }

        .category-section {
            margin-bottom: 80px;
            animation: fadeInUp 0.6s ease;
        }

        .category-header {
            margin-bottom: 40px;
            padding-bottom: 20px;
            border-bottom: 2px solid rgba(13,79,158,0.1);
        }

        .category-header h2 {
            color: var(--blue);
            font-size: 2.2rem;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .category-header p {
            color: var(--gray);
            max-width: 800px;
            font-size: 1.1rem;
            line-height: 1.6;
        }

        /* ================= GRID LAYOUTS ================= */
        /* Mattress Grid - Clean, Comfortable Layout */
        .mattress-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .mattress-card {
            background: var(--white);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: var(--transition);
            cursor: pointer;
        }

        .mattress-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(13,79,158,0.15);
        }

        .mattress-img {
            height: 250px;
            overflow: hidden;
        }

        .mattress-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 1.2s ease;
        }

        .mattress-card:hover .mattress-img img {
            transform: scale(1.1);
        }

        .mattress-content {
            padding: 25px;
        }

        .mattress-content h3 {
            color: var(--blue);
            font-size: 1.4rem;
            margin-bottom: 10px;
        }

        .mattress-features {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin: 15px 0;
        }

        .mattress-feature {
            padding: 6px 15px;
            background: var(--light-blue);
            color: var(--blue);
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        /* Kitchen Grid - Modern, Sleek Layout */
        .kitchen-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .kitchen-card {
            background: var(--white);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            transition: var(--transition);
            cursor: pointer;
            border-top: 4px solid var(--violet);
        }

        .kitchen-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(139,47,163,0.15);
        }

        .kitchen-img {
            height: 200px;
            overflow: hidden;
        }

        .kitchen-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 1s ease;
        }

        .kitchen-card:hover .kitchen-img img {
            transform: scale(1.1);
        }

        .kitchen-content {
            padding: 20px;
        }

        .kitchen-content h3 {
            color: var(--violet);
            font-size: 1.3rem;
            margin-bottom: 8px;
        }

        .kitchen-specs {
            color: var(--gray);
            font-size: 0.9rem;
            line-height: 1.5;
            margin: 10px 0;
        }

        /* Window Treatments Grid - Elegant Layout */
        .window-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        .window-card {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            cursor: pointer;
            height: 320px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            transition: var(--transition);
        }

        .window-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(207,63,166,0.15);
        }

        .window-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 1.2s ease;
        }

        .window-card:hover img {
            transform: scale(1.1);
        }

        .window-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            padding: 20px;
            color: var(--white);
            transform: translateY(10px);
            opacity: 0;
            transition: var(--transition);
        }

        .window-card:hover .window-overlay {
            transform: translateY(0);
            opacity: 1;
        }

        .window-overlay h4 {
            font-size: 1.2rem;
            margin-bottom: 5px;
        }

        .window-overlay p {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        /* Furniture Grid - Premium Layout */
        .furniture-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 35px;
        }

        .furniture-card {
            background: var(--white);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 12px 30px rgba(0,0,0,0.1);
            transition: var(--transition);
            cursor: pointer;
            border: 1px solid rgba(0,0,0,0.05);
        }

        .furniture-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 25px 50px rgba(13,79,158,0.15);
            border-color: var(--blue);
        }

        .furniture-img {
            height: 220px;
            overflow: hidden;
            position: relative;
        }

        .furniture-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 1.2s ease;
        }

        .furniture-card:hover .furniture-img img {
            transform: scale(1.15);
        }

        .furniture-content {
            padding: 25px;
            position: relative;
        }

        .furniture-content h3 {
            color: var(--blue);
            font-size: 1.4rem;
            margin-bottom: 10px;
        }

        .furniture-price {
            position: absolute;
            top: -20px;
            right: 25px;
            background: linear-gradient(135deg, var(--pink), var(--violet));
            color: var(--white);
            padding: 8px 20px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 1.1rem;
            box-shadow: 0 5px 15px rgba(207,63,166,0.3);
        }

        /* ================= PRODUCT FEATURES ================= */
        .product-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            padding: 6px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            color: var(--white);
            z-index: 2;
        }

        .badge-peps { background: linear-gradient(135deg, var(--blue), #1a5ca8); }
        .badge-carysil { background: linear-gradient(135deg, var(--violet), #9d36b8); }
        .badge-furniture { background: linear-gradient(135deg, var(--pink), #e04ab5); }

        .product-rating {
            display: flex;
            align-items: center;
            gap: 5px;
            margin: 10px 0;
        }

        .rating-stars {
            color: #ffc107;
            font-size: 0.9rem;
        }

        .rating-count {
            color: var(--gray);
            font-size: 0.85rem;
        }

        .product-action {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .wishlist-btn {
            background: none;
            border: none;
            color: var(--gray);
            font-size: 1.2rem;
            cursor: pointer;
            transition: var(--transition);
            padding: 8px;
            border-radius: 50%;
        }

        .wishlist-btn:hover {
            color: var(--pink);
            background: var(--light-pink);
        }

        .view-details {
            padding: 10px 25px;
            background: linear-gradient(135deg, var(--blue), var(--violet));
            color: var(--white);
            border: none;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            font-size: 0.9rem;
        }

        .view-details:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(13,79,158,0.3);
        }

        /* ================= IMAGE VIEWER ================= */
        #imageViewer {
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.95);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            backdrop-filter: blur(10px);
        }

        #imageViewer img {
            max-width: 90%;
            max-height: 90%;
            border-radius: 10px;
            box-shadow: 0 30px 60px rgba(0,0,0,0.5);
        }

        .viewer-close,
        .viewer-prev,
        .viewer-next {
            position: absolute;
            color: var(--white);
            font-size: 28px;
            cursor: pointer;
            transition: var(--transition);
            background: rgba(255,255,255,0.1);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255,255,255,0.2);
        }

        .viewer-close:hover,
        .viewer-prev:hover,
        .viewer-next:hover {
            background: linear-gradient(135deg, var(--blue), var(--violet));
            transform: scale(1.1);
        }

        .viewer-close { top: 30px; right: 30px; }
        .viewer-prev { left: 30px; top: 50%; transform: translateY(-50%); }
        .viewer-next { right: 30px; top: 50%; transform: translateY(-50%); }

        /* ================= ANIMATIONS ================= */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ================= RESPONSIVE ================= */
        @media (max-width: 1200px) {
            .products-section {
                padding: 40px 30px;
            }
        }

        @media (max-width: 992px) {
            .gallery-header {
                padding: 40px 30px;
            }
            
            .gallery-header h1 {
                font-size: 2.5rem;
            }
            
            .category-nav {
                padding: 15px 30px;
            }
            
            .mattress-grid,
            .kitchen-grid,
            .window-grid,
            .furniture-grid {
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 25px;
            }
        }

        @media (max-width: 768px) {
            .gallery-header {
                padding: 40px 20px;
            }
            
            .gallery-header h1 {
                font-size: 2rem;
            }
            
            .category-nav {
                padding: 15px 20px;
            }
            
            .category-btn {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
            
            .products-section {
                padding: 30px 20px;
            }
            
            .category-section {
                margin-bottom: 60px;
            }
            
            .category-header h2 {
                font-size: 1.8rem;
            }
            
            .mattress-grid,
            .kitchen-grid,
            .window-grid,
            .furniture-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            .category-container {
                justify-content: flex-start;
            }
            
            .category-btn {
                padding: 8px 16px;
                font-size: 0.85rem;
            }
            
            .mattress-content,
            .kitchen-content,
            .furniture-content {
                padding: 20px;
            }
            
            .viewer-close,
            .viewer-prev,
            .viewer-next {
                width: 50px;
                height: 50px;
                font-size: 24px;
            }
        }
    </style>
</head>
<body>

<!-- Header -->
<header class="gallery-header">
    <div class="header-content">
        <h1>Premium Home Products Gallery</h1>
        <p class="brand-tagline">Crafting Comfort Since 2000</p>
        <p>Explore our curated collection of premium mattresses, modern kitchen solutions, elegant window treatments, and bespoke furniture—all designed to transform your house into a home.</p>
    </div>
</header>

<!-- Category Navigation -->
<nav class="category-nav">
    <div class="category-container">
        <button class="category-btn active" data-category="all">
            <i class="fas fa-th-large"></i> All Products
        </button>
        <button class="category-btn" data-category="mattress">
            <i class="fas fa-bed"></i> Mattresses
        </button>
        <button class="category-btn" data-category="kitchen">
            <i class="fas fa-kitchen-set"></i> Kitchen Appliances
        </button>
        <button class="category-btn" data-category="chimneys">
            <i class="fas fa-fan"></i> Chimneys
        </button>
        <button class="category-btn" data-category="hobs">
            <i class="fas fa-fire"></i> Hob Tops
        </button>
        <button class="category-btn" data-category="sinks">
            <i class="fas fa-sink"></i> Sinks & Faucets
        </button>
        <button class="category-btn" data-category="curtains">
            <i class="fas fa-blinds"></i> Curtains & Blinds
        </button>
        <button class="category-btn" data-category="sofas">
            <i class="fas fa-couch"></i> Sofas
        </button>
    </div>
</nav>

<!-- Products Section -->
<main class="products-section">
    
    <!-- Mattress Section -->
    <section class="category-section" id="mattress-section">
        <div class="category-header">
            <h2><i class="fas fa-bed"></i> Premium Mattresses</h2>
            <p>Experience unparalleled comfort with our range of orthopedic, memory foam, and latex mattresses. Engineered for support and durability.</p>
        </div>
        <div class="mattress-grid">
            <!-- Product 1 -->
            <div class="mattress-card" data-category="mattress">
                <div class="product-badge badge-peps">Peps</div>
                <div class="mattress-img">
                    <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Ortho Support Mattress">
                </div>
                <div class="mattress-content">
                    <h3>Ortho Support Pro</h3>
                    <p>Advanced orthopedic mattress with zone support system</p>
                    <div class="product-rating">
                        <div class="rating-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="rating-count">(128 reviews)</span>
                    </div>
                    <div class="mattress-features">
                        <span class="mattress-feature">Orthopedic Support</span>
                        <span class="mattress-feature">Memory Foam</span>
                        <span class="mattress-feature">10 Year Warranty</span>
                    </div>
                    <div class="product-action">
                        <button class="wishlist-btn" title="Add to Wishlist">
                            <i class="far fa-heart"></i>
                        </button>
                        <button class="view-details">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="mattress-card" data-category="mattress">
                <div class="product-badge badge-peps">Peps</div>
                <div class="mattress-img">
                    <img src="https://images.unsplash.com/photo-1541140532154-b024d705b90a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Memory Foam Mattress">
                </div>
                <div class="mattress-content">
                    <h3>Memory Foam Supreme</h3>
                    <p>Pressure-relieving memory foam for restful sleep</p>
                    <div class="product-rating">
                        <div class="rating-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="rating-count">(94 reviews)</span>
                    </div>
                    <div class="mattress-features">
                        <span class="mattress-feature">Gel Memory Foam</span>
                        <span class="mattress-feature">Motion Isolation</span>
                        <span class="mattress-feature">Hypoallergenic</span>
                    </div>
                    <div class="product-action">
                        <button class="wishlist-btn" title="Add to Wishlist">
                            <i class="far fa-heart"></i>
                        </button>
                        <button class="view-details">View Details</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kitchen Appliances Section -->
    <section class="category-section" id="kitchen-section">
        <div class="category-header">
            <h2><i class="fas fa-kitchen-set"></i> Kitchen Appliances</h2>
            <p>Transform your kitchen with our premium appliances designed for modern living. Experience efficiency, durability, and style.</p>
        </div>
        
        <!-- Chimneys -->
        <div class="category-header" style="margin-top: 40px;">
            <h3 style="font-size: 1.6rem; color: var(--violet);"><i class="fas fa-fan"></i> Chimneys</h3>
        </div>
        <div class="kitchen-grid">
            <div class="kitchen-card" data-category="chimneys">
                <div class="product-badge badge-carysil">Carysil</div>
                <div class="kitchen-img">
                    <img src="https://images.unsplash.com/photo-1588614959060-4d144f28b207?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Auto Clean Chimney">
                </div>
                <div class="kitchen-content">
                    <h3>Auto-Clean Chimney Pro</h3>
                    <p class="kitchen-specs">1400 CFM | Touch Control | Baffle Filter</p>
                    <div class="product-rating">
                        <div class="rating-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <div class="product-action">
                        <button class="view-details">View Details</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hob Tops -->
        <div class="category-header" style="margin-top: 40px;">
            <h3 style="font-size: 1.6rem; color: var(--violet);"><i class="fas fa-fire"></i> Hob Tops & Cooktops</h3>
        </div>
        <div class="kitchen-grid">
            <div class="kitchen-card" data-category="hobs">
                <div class="product-badge badge-carysil">Carysil</div>
                <div class="kitchen-img">
                    <img src="https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Glass Hob Top">
                </div>
                <div class="kitchen-content">
                    <h3>Glass Hob Top - 4 Burner</h3>
                    <p class="kitchen-specs">Touch Control | Child Lock | Residual Heat Indicator</p>
                    <div class="product-action">
                        <button class="view-details">View Details</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sinks & Faucets -->
        <div class="category-header" style="margin-top: 40px;">
            <h3 style="font-size: 1.6rem; color: var(--violet);"><i class="fas fa-sink"></i> Sinks & Faucets</h3>
        </div>
        <div class="kitchen-grid">
            <div class="kitchen-card" data-category="sinks">
                <div class="product-badge badge-carysil">Carysil</div>
                <div class="kitchen-img">
                    <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Granite Sink">
                </div>
                <div class="kitchen-content">
                    <h3>Granite Composite Sink</h3>
                    <p class="kitchen-specs">Single Bowl | Soundproof | Anti-Bacterial</p>
                    <div class="product-action">
                        <button class="view-details">View Details</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Curtains & Blinds Section -->
    <section class="category-section" id="curtains-section">
        <div class="category-header">
            <h2><i class="fas fa-blinds"></i> Curtains & Blinds</h2>
            <p>Enhance your windows with our elegant collection of curtains and blinds. Perfect balance of light control, privacy, and style.</p>
        </div>
        <div class="window-grid">
            <div class="window-card" data-category="curtains">
                <img src="https://images.unsplash.com/photo-1525904097878-94fb15835963?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Sheer Curtains">
                <div class="window-overlay">
                    <h4>Luxury Sheer Curtains</h4>
                    <p>Elegant light-filtering sheer curtains</p>
                </div>
            </div>
            <div class="window-card" data-category="curtains">
                <img src="https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Blackout Curtains">
                <div class="window-overlay">
                    <h4>Premium Blackout Curtains</h4>
                    <p>Complete light blocking for better sleep</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sofas Section -->
    <section class="category-section" id="sofas-section">
        <div class="category-header">
            <h2><i class="fas fa-couch"></i> Premium Sofas</h2>
            <p>Our collection of sofas combines comfort, style, and durability. Perfect for family living rooms and entertainment spaces.</p>
        </div>
        <div class="furniture-grid">
            <div class="furniture-card" data-category="sofas">
                <div class="product-badge badge-furniture">Premium</div>
                <div class="furniture-img">
                    <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="L-shaped Sofa">
                </div>
                <div class="furniture-content">
                    <div class="furniture-price">₹89,999</div>
                    <h3>Modern L-Shaped Sofa</h3>
                    <p>Premium leather with memory foam cushions</p>
                    <div class="product-rating">
                        <div class="rating-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="rating-count">(76 reviews)</span>
                    </div>
                    <div class="mattress-features">
                        <span class="mattress-feature">Premium Leather</span>
                        <span class="mattress-feature">Modular Design</span>
                        <span class="mattress-feature">Storage Ottoman</span>
                    </div>
                    <div class="product-action">
                        <button class="wishlist-btn" title="Add to Wishlist">
                            <i class="far fa-heart"></i>
                        </button>
                        <button class="view-details">View Details</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Image Viewer -->
<div id="imageViewer">
    <span class="viewer-close" title="Close">
        <i class="fas fa-times"></i>
    </span>
    <span class="viewer-prev" title="Previous">
        <i class="fas fa-chevron-left"></i>
    </span>
    <img id="viewerImage" alt="Product Image">
    <span class="viewer-next" title="Next">
        <i class="fas fa-chevron-right"></i>
    </span>
</div>

<?php include "floating-buttons.php" ?>
</body>
</html>
    document.addEventListener('DOMContentLoaded', () => {
        // Category Navigation
        const categoryButtons = document.querySelectorAll('.category-btn');
        const categorySections = document.querySelectorAll('.category-section');
        
        // Filter products by category
        function filterProducts(category) {
            // Update active button
            categoryButtons.forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');
            
            // Show/Hide sections
            if (category === 'all') {
                categorySections.forEach(section => {
                    section.style.display = 'block';
                    setTimeout(() => {
                        section.style.opacity = '1';
                        section.style.transform = 'translateY(0)';
                    }, 10);
                });
            } else {
                categorySections.forEach(section => {
                    if (section.id === `${category}-section`) {
                        section.style.display = 'block';
                        setTimeout(() => {
                            section.style.opacity = '1';
                            section.style.transform = 'translateY(0)';
                        }, 10);
                    } else {
                        section.style.opacity = '0';
                        section.style.transform = 'translateY(20px)';
                        setTimeout(() => {
                            section.style.display = 'none';
                        }, 300);
                    }
                });
            }
            
            // Scroll to top of products section
            document.querySelector('.products-section').scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
        
        // Add click event to category buttons
        categoryButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                const category = e.target.dataset.category;
                filterProducts(category);
            });
        });
        
        // Image Viewer
        const viewer = document.getElementById('imageViewer');
        const viewerImage = document.getElementById('viewerImage');
        const prevBtn = document.querySelector('.viewer-prev');
        const nextBtn = document.querySelector('.viewer-next');
        const closeBtn = document.querySelector('.viewer-close');
        
        let currentImages = [];
        let currentImageIndex = 0;
        
        // Open viewer when clicking on any product image
        document.addEventListener('click', (e) => {
            const img = e.target.closest('img');
            if (!img || img.id === 'viewerImage') return;
            
            // Get all images in current category section
            const activeSection = document.querySelector('.category-section[style*="display: block"]');
            if (activeSection) {
                currentImages = Array.from(activeSection.querySelectorAll('img:not(.rating-stars i)'));
                currentImageIndex = currentImages.indexOf(img);
                
                if (currentImageIndex !== -1) {
                    viewerImage.src = img.src;
                    viewer.style.display = 'flex';
                    document.body.style.overflow = 'hidden';
                }
            }
        });
        
        // Viewer Navigation
        nextBtn.addEventListener('click', () => {
            currentImageIndex = (currentImageIndex + 1) % currentImages.length;
            viewerImage.src = currentImages[currentImageIndex].src;
        });
        
        prevBtn.addEventListener('click', () => {
            currentImageIndex = (currentImageIndex - 1 + currentImages.length) % currentImages.length;
            viewerImage.src = currentImages[currentImageIndex].src;
        });
        
        // Close viewer
        closeBtn.addEventListener('click', () => {
            viewer.style.display = 'none';
            document.body.style.overflow = '';
        });
        
        viewer.addEventListener('click', (e) => {
            if (e.target === viewer) {
                viewer.style.display = 'none';
                document.body.style.overflow = '';
            }
        });
        
        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (viewer.style.display === 'flex') {
                if (e.key === 'Escape') closeBtn.click();
                if (e.key === 'ArrowRight') nextBtn.click();
                if (e.key === 'ArrowLeft') prevBtn.click();
            }
        });
        
        // Wishlist functionality
        const wishlistButtons = document.querySelectorAll('.wishlist-btn');
        wishlistButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                e.stopPropagation();
                const icon = button.querySelector('i');
                if (icon.classList.contains('far')) {
                    icon.classList.remove('far');
                    icon.classList.add('fas');
                    button.style.color = 'var(--pink)';
                    showNotification('Added to wishlist!');
                } else {
                    icon.classList.remove('fas');
                    icon.classList.add('far');
                    button.style.color = 'var(--gray)';
                    showNotification('Removed from wishlist!');
                }
            });
        });
        
        // View Details functionality
        const viewDetailsButtons = document.querySelectorAll('.view-details');
        viewDetailsButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                e.stopPropagation();
                const productCard = button.closest('.mattress-card, .kitchen-card, .furniture-card');
                const productTitle = productCard.querySelector('h3').textContent;
                showNotification(`Details for ${productTitle} will open in a new page.`);
                // In real implementation, this would redirect to product detail page
            });
        });
        
        // Notification function
        function showNotification(message) {
            // Create notification element
            const notification = document.createElement('div');
            notification.style.cssText = `
                position: fixed;
                bottom: 30px;
                left: 50%;
                transform: translateX(-50%);
                background: linear-gradient(135deg, var(--blue), var(--violet));
                color: white;
                padding: 15px 30px;
                border-radius: 50px;
                font-weight: 600;
                box-shadow: 0 10px 25px rgba(13,79,158,0.3);
                z-index: 1000;
                animation: slideUp 0.3s ease;
            `;
            notification.textContent = message;
            document.body.appendChild(notification);
            
            // Remove after 3 seconds
            setTimeout(() => {
                notification.style.animation = 'slideDown 0.3s ease';
                setTimeout(() => {
                    document.body.removeChild(notification);
                }, 300);
            }, 3000);
        }
        
        // Add CSS for notifications
        const style = document.createElement('style');
        style.textContent = `
            @keyframes slideUp {
                from {
                    transform: translateX(-50%) translateY(100%);
                    opacity: 0;
                }
                to {
                    transform: translateX(-50%) translateY(0);
                    opacity: 1;
                }
            }
            @keyframes slideDown {
                from {
                    transform: translateX(-50%) translateY(0);
                    opacity: 1;
                }
                to {
                    transform: translateX(-50%) translateY(100%);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);
        
        // Initialize animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = 'fadeInUp 0.6s ease forwards';
                }
            });
        }, { threshold: 0.1 });
        
        // Observe all product cards
        document.querySelectorAll('.mattress-card, .kitchen-card, .window-card, .furniture-card').forEach(card => {
            observer.observe(card);
        });
    });
</script>

</body>
</html>