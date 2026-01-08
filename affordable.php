<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affordable Luxury | Premium Peps Mattress</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --deep-blue: #050e8f;
            --pink: #dc3169;
            --gold: #fec33b;
            --coral: #f86f48;
            --light-grey: #f8f9fa;
            --medium-grey: #e9ecef;
            --dark-grey: #333;
            --white: #ffffff;
            --black: #000000;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: var(--white);
            color: var(--dark-grey);
            padding-top: 80px;
            overflow-x: hidden;
            line-height: 1.6;
        }

        .heroContainer {
            
            display: flex;
            justify-content: center;
        }
        
        .container {
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        section {
            padding: 60px 0;
        }

        h1, h2, h3, h4 {
            font-weight: 700;
            line-height: 1.2;
        }

        h1 {
            font-size: 3.2rem;
            margin-bottom: 1rem;
            color: var(--white);
        }

        h2 {
            font-size: 2.2rem;
            margin-bottom: 1.5rem;
            color: var(--deep-blue);
            text-align: center;
        }

        h3 {
            font-size: 1.5rem;
            margin-bottom: 0.8rem;
            color: var(--deep-blue);
        }

        p {
            font-size: 1rem;
            margin-bottom: 1rem;
            color: var(--dark-grey);
        }

        .btn {
            display: inline-block;
            padding: 16px 32px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1rem;
            text-decoration: none;
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
            border: none;
            min-width: 180px;
        }

        .btn-primary {
            background-color: var(--gold);
            color: var(--deep-blue);
            box-shadow: 0 8px 20px rgba(254, 195, 59, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(254, 195, 59, 0.4);
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(254, 195, 59, 0.7);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(254, 195, 59, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(254, 195, 59, 0);
            }
        }

        /* Hero Section - Center Aligned with Background Image */
        .hero {
            background: linear-gradient(rgba(5, 14, 143, 0.85), rgba(5, 14, 143, 0.9)), 
                        url('https://pepsindia.b-cdn.net/wp-content/uploads/2025/03/N1-Comfort-Beige-lifestyle.jpg') center/cover no-repeat;
            color: var(--white);
            padding: 100px 0 60px;
            min-height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .hero-content {
            max-width: 800px;
            z-index: 2;
            position: relative;
            animation: fadeIn 1s ease-out;
        }

        .hero-tag {
            display: inline-block;
            background: linear-gradient(135deg, var(--pink), var(--coral));
            color: var(--white);
            padding: 8px 20px;
            border-radius: 30px;
            font-weight: 600;
            margin-bottom: 20px;
            font-size: 0.9rem;
        }

        /* Product Gallery */
        .gallery {
            padding: 60px 0;
            background: var(--light-grey);
        }

        .gallery-container {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
        }

        .main-image {
            width: 100%;
            height: 500px;
            border-radius: 20px;
            overflow: hidden;
            margin-bottom: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            background: var(--white);
        }

        .main-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .thumbnails {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 15px;
        }

        .thumb {
            height: 100px;
            border-radius: 10px;
            overflow: hidden;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 3px solid transparent;
            position: relative;
        }

        .thumb:hover {
            transform: scale(1.05);
            border-color: var(--gold);
        }

        .thumb.active {
            border-color: var(--pink);
            transform: scale(1.05);
        }

        .thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Size Visualizer - Updated with Images */
        .size-visualizer {
            padding: 60px 0;
            background: var(--white);
        }

        .size-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            margin-top: 40px;
        }

        .size-card {
            background: var(--white);
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(5, 14, 143, 0.08);
            transition: all 0.3s ease;
            cursor: pointer;
            border: 2px solid transparent;
            position: relative;
            overflow: hidden;
        }

        .size-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(5, 14, 143, 0.15);
            border-color: var(--gold);
        }

        .size-card.selected {
            border-color: var(--pink);
            background: linear-gradient(145deg, var(--white), #f0f2ff);
        }

        .size-visual {
            width: 100%;
            height: 150px;
            margin: 15px 0;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .mattress-outline {
            width: 100%;
            height: 100%;
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            transition: all 0.3s ease;
        }

        .king-outline { background-image: url('https://png.pngtree.com/png-vector/20240712/ourmid/pngtree-black-silhouette-of-a-king-bed-vector-png-image_7056335.png'); }
        .queen-outline { background-image: url('https://png.pngtree.com/png-vector/20230310/ourmid/pngtree-bed-line-icon-vector-png-image_6642805.png'); }
        .single-outline { background-image: url('https://www.shutterstock.com/image-vector/single-bed-hotel-room-silhouette-260nw-2234485111.jpg'); }
        .twin-outline { background-image: url('https://cdn.vectorstock.com/i/500p/98/05/minimalist-double-bed-with-mattress-and-pillows-vector-55529805.jpg'); }
        .size-card:hover .mattress-outline {
            transform: scale(1.05);
        }

        /* Luxury Features */
        .luxury-features {
            padding: 60px 0;
            background: linear-gradient(135deg, #f8f9ff 0%, #ffffff 100%);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .feature-card {
            background: var(--white);
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(220, 49, 105, 0.1);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--gold), var(--coral));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 2rem;
            color: var(--white);
        }

        /* Price Section */
        .price-section {
            padding: 60px 0;
            background: linear-gradient(135deg, var(--deep-blue) 0%, #040a7a 100%);
            color: var(--white);
            text-align: center;
        }

        .price-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            max-width: 500px;
            margin: 0 auto;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .original-price {
            font-size: 1.5rem;
            color: rgba(255, 255, 255, 0.7);
            text-decoration: line-through;
            margin-bottom: 5px;
        }

        .current-price {
            font-size: 3rem;
            font-weight: 800;
            color: var(--gold);
            margin-bottom: 10px;
        }

        .discount-badge {
            display: inline-block;
            background: var(--pink);
            color: var(--white);
            padding: 8px 20px;
            border-radius: 20px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        /* Comfort Technology */
        .comfort-tech {
            padding: 60px 0;
            background: var(--light-grey);
        }

        .tech-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .tech-card {
            background: var(--white);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            position: relative;
        }

        .tech-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(220, 49, 105, 0.1);
        }

        .tech-image {
            height: 180px;
            width: 100%;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .tech-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, transparent, rgba(5, 14, 143, 0.7));
            display: flex;
            align-items: flex-end;
            padding: 20px;
        }

        .tech-overlay h3 {
            color: var(--white);
            margin: 0;
        }

        .tech-content {
            padding: 20px;
        }

        /* Testimonials */
        .testimonials {
            padding: 60px 0;
            background: var(--white);
        }

        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .testimonial-card {
            background: var(--white);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            border-left: 4px solid var(--gold);
        }

        .testimonial-rating {
            color: var(--gold);
            margin-bottom: 15px;
        }

        /* Warranty Visual */
        .warranty-visual {
            padding: 60px 0;
            background: linear-gradient(135deg, var(--deep-blue) 0%, #040a7a 100%);
            color: var(--white);
            text-align: center;
        }

        .warranty-badge {
            width: 200px;
            height: 200px;
            background: linear-gradient(135deg, var(--gold), #ffd700);
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            animation: pulse 2s infinite;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            border: 5px solid var(--white);
        }

        .warranty-years {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1;
            color: var(--deep-blue);
        }

        .warranty-label {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--deep-blue);
            margin-top: 5px;
        }

        /* Final CTA */
        .final-cta {
            padding: 80px 0;
            background: linear-gradient(135deg, var(--pink) 0%, var(--coral) 100%);
            color: var(--white);
            text-align: center;
        }

        .final-cta h2 {
            color: var(--white);
            margin-bottom: 20px;
        }

        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .btn-cta {
            background: var(--gold);
            color: white;
            padding: 18px 36px;
            font-size: 1.1rem;
            font-weight: 700;
            border-radius: 50px;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .btn-cta:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .hero {
                text-align: center;
                padding: 80px 0 40px;
            }
            
            .hero-content {
                max-width: 100%;
                margin: 0 auto;
            }
            
            .thumbnails {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 2.5rem;
            }
            
            h2 {
                font-size: 1.8rem;
            }
            
            section {
                padding: 40px 0;
            }
            
            .main-image {
                height: 400px;
            }
            
            .thumbnails {
                grid-template-columns: repeat(3, 1fr);
            }
            
            .thumb {
                height: 80px;
            }
            
            .size-cards {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .features-grid, .tech-grid, .testimonial-grid {
                grid-template-columns: 1fr;
            }
            
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .btn-cta {
                width: 100%;
                max-width: 300px;
                justify-content: center;
            }
            
            /* Fix View Pricing button width on mobile */
            .hero .btn {
                width: 100%;
                max-width: 280px;
                margin: 0 auto;
            }
            
            .hero div[style*="display: flex"] {
                flex-direction: column;
                align-items: center;
                gap: 15px;
            }
            
            .price-card {
                padding: 30px 20px;
            }
            
            .current-price {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 576px) {
            h1 {
                font-size: 2rem;
            }
            
            h2 {
                font-size: 1.5rem;
            }
            
            .main-image {
                height: 300px;
            }
            
            .thumbnails {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .size-cards {
                grid-template-columns: 1fr;
            }
            
            .comparison-image {
                height: 350px;
            }
            
            .warranty-badge {
                width: 150px;
                height: 150px;
            }
            
            .warranty-years {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <!-- Hero Section - Center Aligned with Background Image -->
    <section class="hero">
        <div class="container, heroContainer">
            <div class="hero-content">
                <span class="hero-tag">Premium Quality • Affordable Price</span>
                <h1>Affordable Luxury Sleep Experience</h1>
                <p style="font-size: 1.2rem; color: rgba(255,255,255,0.9); margin-bottom: 30px; max-width: 600px; margin-left: auto; margin-right: auto;">
                    Discover the perfect balance of premium comfort and exceptional value with Peps Luxury Mattress. Experience 5-star hotel comfort at home.
                </p>
                <div style="display: flex; gap: 15px; flex-wrap: wrap; justify-content: center;">
                    <a href="#price-section" class="btn btn-primary">View Pricing</a>
                    <a href="#gallery" class="btn" style="background: transparent; border: 2px solid var(--white); color: var(--white);">
                        Explore Features
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Gallery -->
    <section id="gallery" class="gallery">
        <div class="container">
            <h2>Luxury in Every Detail</h2>
            <div class="gallery-container">
                <div class="main-image">
                    <img id="mainImage" src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N3-Spring-koil-Crown-top-Lifestyle.jpg" alt="Peps Luxury Mattress">
                </div>
                <div class="thumbnails">
                    <div class="thumb active" onclick="changeImage(0)">
                        <img src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N3-Spring-koil-Crown-top-Lifestyle.jpg" alt="Mattress Full View">
                    </div>
                    <div class="thumb" onclick="changeImage(1)">
                        <img src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N03-Maroon-Spring-koil-Grown-top-15.png.jpg" alt="Mattress Layers">
                    </div>
                    <div class="thumb" onclick="changeImage(2)">
                        <img src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N03-Maroon-Spring-koil-Grown-top-17.png.jpg" alt="Bedroom Setup">
                    </div>
                    <div class="thumb" onclick="changeImage(3)">
                        <img src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N03-Maroon-Spring-koil-Grown-top-14.png.jpg" alt="Close-up Texture">
                    </div>
                    <div class="thumb" onclick="changeImage(4)">
                        <img src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N03-Maroon-Spring-koil-Grown-top-18.png.jpg" alt="Comfort Feature">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Luxury Features -->
    <section class="luxury-features">
        <div class="container">
            <h2>Premium Luxury Features</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-crown"></i>
                    </div>
                    <h3>Premium Materials</h3>
                    <p>High-quality fabrics and foams that provide exceptional comfort and durability.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-bed"></i>
                    </div>
                    <h3>Hotel-grade Comfort</h3>
                    <p>Experience the same luxurious feel found in premium hotels and resorts.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Health-focused Design</h3>
                    <p>Ergonomically designed to support your body and promote better sleep.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Size Visualizer -->
    <section id="size-visualizer" class="size-visualizer">
        <div class="container">
            <h2>Choose Your Perfect Size</h2>
            <div class="size-cards">
                <div class="size-card selected" onclick="selectSize('king')">
                    <h3>King Size</h3>
                    <div class="size-visual">
                        <div class="mattress-outline king-outline"></div>
                    </div>
                    <p style="color: var(--dark-grey);">182.9L × 76.2W × 15.2Th cm</p>
                    <p style="color: var(--pink); font-weight: 600;">Ultimate Luxury Space</p>
                </div>
                <div class="size-card" onclick="selectSize('queen')">
                    <h3>Queen Size</h3>
                    <div class="size-visual">
                        <div class="mattress-outline queen-outline"></div>
                    </div>
                    <p style="color: var(--dark-grey);">182.9L × 76.2W × 15.2Th cm</p>
                    <p style="color: var(--deep-blue); font-weight: 600;">Premium Couple Comfort</p>
                </div>
                <div class="size-card" onclick="selectSize('single')">
                    <h3>Single</h3>
                    <div class="size-visual">
                        <div class="mattress-outline single-outline"></div>
                    </div>
                    <p style="color: var(--dark-grey);">182.9L × 76.2W × 15.2Th cm</p>
                    <p style="color: var(--coral); font-weight: 600;">Personal Luxury Retreat</p>
                </div>
                <div class="size-card" onclick="selectSize('twin')">
                    <h3>Twin</h3>
                    <div class="size-visual">
                        <div class="mattress-outline twin-outline"></div>
                    </div>
                    <p style="color: var(--dark-grey);">182.9L × 76.2W × 15.2Th cm</p>
                    <p style="color: var(--gold); font-weight: 600;">Kids' Premium Comfort</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Price Section -->
    <!-- <section id="price-section" class="price-section">
        <div class="container">
            <h2 style="color: var(--white);">Incredible Value for Premium Quality</h2>
            <div class="price-card">
                <div class="discount-badge">Special Limited Time Offer</div>
                <div class="original-price">₹24,999</div>
                <div class="current-price">₹18,999</div>
                <p style="color: rgba(255,255,255,0.9); margin-bottom: 20px;">Queen Size • Free Delivery • Easy EMI Available</p>
                <div style="display: flex; gap: 15px; flex-wrap: wrap; justify-content: center;">
                    <a href="#final-cta" class="btn btn-primary">Buy Now & Save</a>
                    <a href="#" class="btn" style="background: transparent; border: 2px solid var(--white); color: var(--white);">
                        View EMI Options
                    </a>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Comfort Technology -->
    <section class="comfort-tech">
        <div class="container">
            <h2>Advanced Comfort Technology</h2>
            <div class="tech-grid">
                <div class="tech-card">
                    <div class="tech-image" style="background-image: url('https://m.media-amazon.com/images/I/81HoSSz8keL._AC_UF894,1000_QL80_.jpg');">
                        <div class="tech-overlay">
                            <h3>Memory Foam Layer</h3>
                        </div>
                    </div>
                    <div class="tech-content">
                        <p>Premium memory foam that adapts to your body shape for personalized comfort and pressure relief.</p>
                    </div>
                </div>
                <div class="tech-card">
                    <div class="tech-image" style="background-image: url('https://cozycoir.com/cdn/shop/products/Comfortbonnel5_1445x.png?v=1650887265');">
                        <div class="tech-overlay">
                            <h3>Advanced Spring System</h3>
                        </div>
                    </div>
                    <div class="tech-content">
                        <p>Premium Bonnell spring system provides optimal support and motion isolation for undisturbed sleep.</p>
                    </div>
                </div>
                <div class="tech-card">
                    <div class="tech-image" style="background-image: url('https://www.duroflexworld.com/cdn/shop/files/1_99b0fe74-97b8-4b34-b15c-c00189d093fd.png?v=1749639359');">
                        <div class="tech-overlay">
                            <h3>Edge Support Technology</h3>
                        </div>
                    </div>
                    <div class="tech-content">
                        <p>Reinforced edges prevent sagging and maximize usable sleeping area for edge-to-edge comfort.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Reviews Section -->
    <?php include "google-reviews.php" ?>

    <!-- Warranty Visual -->
    <section class="warranty-visual">
        <div class="container">
            <div class="warranty-badge">
                <div class="warranty-years">7</div>
                <div class="warranty-label">YEARS</div>
            </div>
            <h2 style="color: var(--white);">7-Year Warranty</h2>
            <p style="max-width: 600px; margin: 0 auto 20px; font-size: 1.1rem; color: rgba(255,255,255,0.9);">
                Your investment is protected with our comprehensive 7-year warranty. Sleep with confidence and peace of mind.
            </p>
            <p style="font-size: 0.9rem; opacity: 0.8;">*Terms and conditions apply</p>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="final-cta">
        <div class="container">
            <h2>Ready for Luxurious Sleep?</h2>
            <p style="max-width: 700px; margin: 0 auto 30px; font-size: 1.2rem; color: rgba(255,255,255,0.9);">
                Transform your sleep experience with Peps Luxury Mattress - where premium quality meets affordable pricing.
            </p>
            <div class="cta-buttons">
                <!-- <a href="#" class="btn-cta pulse-btn">
                    <i class="fas fa-shopping-cart"></i> Order Now & Save
                </a> -->
                <a href="#" class="btn-cta" style="background: var(--white); color: var(--pink);">
                    <i class="fab fa-whatsapp"></i> Get Expert Advice
                </a>
                <a href="#" class="btn-cta" style="background: transparent; border: 2px solid var(--white);">
                    <i class="fas fa-phone"></i> Call for Free Demo
                </a>
            </div>
        </div>
    </section>

    <script>
        // Image Gallery Functionality
        const images = [
            'https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N03-Maroon-Spring-koil-Grown-top-16.png.jpg',
            'https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N03-Maroon-Spring-koil-Grown-top-15.png.jpg',
            'https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N03-Maroon-Spring-koil-Grown-top-17.png.jpg',
            'https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N03-Maroon-Spring-koil-Grown-top-14.png.jpg',
            'https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N03-Maroon-Spring-koil-Grown-top-18.png.jpg'
        ];

        function changeImage(index) {
            const mainImage = document.getElementById('mainImage');
            const thumbs = document.querySelectorAll('.thumb');
            
            // Update main image with fade effect
            mainImage.style.opacity = '0';
            setTimeout(() => {
                mainImage.src = images[index];
                mainImage.style.opacity = '1';
            }, 200);
            
            // Update active thumbnail
            thumbs.forEach((thumb, i) => {
                if (i === index) {
                    thumb.classList.add('active');
                } else {
                    thumb.classList.remove('active');
                }
            });
        }

        // Size Selection
        function selectSize(size) {
            const sizeCards = document.querySelectorAll('.size-card');
            sizeCards.forEach(card => {
                card.classList.remove('selected');
            });
            
            event.currentTarget.classList.add('selected');
            
            // Animate selection
            event.currentTarget.style.transform = 'scale(1.05)';
            setTimeout(() => {
                event.currentTarget.style.transform = 'translateY(-5px)';
            }, 150);
            
            // Update price based on size (example logic)
            const prices = {
                'king': '₹22,999',
                'queen': '₹18,999',
                'single': '₹12,999',
                'twin': '₹14,999'
            };
            
            // In a real implementation, you would update the price display
            console.log('Selected size:', size, 'Price:', prices[size]);
        }

        // Pulse animation for CTA button
        const pulseBtn = document.querySelector('.pulse-btn');
        setInterval(() => {
            pulseBtn.style.animation = 'none';
            setTimeout(() => {
                pulseBtn.style.animation = 'pulse 2s infinite';
            }, 10);
        }, 4000);

        // Add scroll animations
        document.addEventListener('DOMContentLoaded', () => {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Observe elements for animation
            document.querySelectorAll('.size-card, .feature-card, .tech-card, .testimonial-card').forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                observer.observe(el);
            });

    </script>

    <?php include "floating-buttons.php" ?>
    <?php include 'footer.php'; ?>
</body>
</html>