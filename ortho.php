<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peps Spine Guard | Premium Orthopaedic Mattress</title>
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
            overflow-x: hidden;
            line-height: 1.6;
            padding-top: 80px;
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

        /* Hero Section - Updated with Background Image */
.hero {
    background: linear-gradient(rgba(5, 14, 143, 0.85), rgba(5, 14, 143, 0.9)), 
                url('https://pepsindia.b-cdn.net/wp-content/uploads/2025/03/N1-Comfort-Beige-lifestyle.jpg') center/cover no-repeat;
    color: var(--white);
    padding: 100px 0 60px;
    min-height: 90vh;

    display: flex;
    align-items: center;        /* vertical center */
    justify-content: center;    /* horizontal center */
    text-align: center;         /* text center */
}


.hero-content {
    max-width: 750px;
    margin: 0 auto;
    z-index: 2;
    position: relative;
    animation: fadeIn 1s ease-out;

    display: flex;
    flex-direction: column;
    align-items: center;
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

        /* Technology Visual */
        .tech-visual {
            padding: 60px 0;
            background: linear-gradient(135deg, #f8f9ff 0%, #ffffff 100%);
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

        /* Layer Visualization */
        .layer-visual {
            padding: 60px 0;
            background: var(--light-grey);
        }

        .layer-container {
            max-width: 800px;
            margin: 40px auto;
            position: relative;
        }

        .layer-stack {
            height: 500px;
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .layer {
            position: absolute;
            left: 0;
            right: 0;
            height: 100px;
            background-size: cover;
            background-position: center;
            transition: all 0.5s ease;
            display: flex;
            align-items: center;
            padding-left: 40px;
            color: var(--white);
            font-weight: 600;
            font-size: 1.1rem;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
            cursor: pointer;
        }

        .layer:hover {
            padding-left: 60px;
            height: 120px;
        }

        .layer-1 { top: 0; background-image: linear-gradient(90deg, rgba(5,14,143,0.6), rgba(5,14,143,0.6)), url('https://image.made-in-china.com/202f0j00YcibBKNIEqoG/Anti-Pilling-Polar-Fleece-Fabric-100-Polyester-Knitted-for-Coat.webp'); }
        .layer-2 { top: 100px; background-image: linear-gradient(90deg, rgba(220,49,105,0.6), rgba(220,49,105,0.6)), url('https://getrest.in/wp-content/themes/get-rest/images/layers/layers.png'); }
        .layer-3 { top: 200px; background-image: linear-gradient(90deg, rgba(254,195,59,0.6), rgba(254,195,59,0.6)), url('https://image.made-in-china.com/202f0j00zBcEfPVtgJkZ/Bonnell-Springs.jpg'); }
        .layer-4 { top: 300px; background-image: linear-gradient(90deg, rgba(248,111,72,0.6), rgba(248,111,72,0.6)), url('https://cpimg.tistatic.com/10151522/b/7/Foam-Mattress.jpg'); }
        .layer-5 { top: 400px; background-image: linear-gradient(90deg, rgba(5,14,143,0.6), rgba(5,14,143,0.6)), url('https://blogpost.imgix.net/wp-content/uploads/2025/09/hand-pressing-edge-of-mattress-to-check-edge-support.jpg?auto=format&w=800'); }

        /* Before-After Slider */
        .comparison-slider {
            padding: 60px 0;
            background: var(--white);
        }

        .slider-container {
            max-width: 1000px;
            margin: 40px auto;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            position: relative;
        }

        .comparison-image {
            width: 100%;
            height: 500px;
            position: relative;
            overflow: hidden;
        }

        .image-before, .image-after {
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
        }

        .image-before {
            background-image: url('images/orthobefore.png');
            width: 50%;
            z-index: 2;
        }

        .image-after {
            background-image: url('images/orthoafter.png');
        }

        .slider-handle {
            position: absolute;
            top: 0;
            left: 50%;
            width: 4px;
            height: 100%;
            background: var(--gold);
            z-index: 3;
            cursor: col-resize;
            transform: translateX(-50%);
        }

        .slider-handle:after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 40px;
            height: 40px;
            background: var(--gold);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .slider-handle:before {
            content: '↔';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: var(--deep-blue);
            font-weight: bold;
            font-size: 1.2rem;
            z-index: 4;
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
            gap: 20px;
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
            min-width: 180px;
            justify-content: center;
        }

        .btn-cta:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
        }

        /* Hero Button Container */
        .hero-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .hero-buttons .btn {
            flex: 0 0 auto;
            min-width: 200px;
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
            
            .container {
                padding: 0 15px;
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
                gap: 20px;
            }
            
            .tech-grid {
                grid-template-columns: 1fr;
            }
            
            .cta-buttons {
                flex-direction: column;
                align-items: center;
                gap: 20px;
            }
            
            .btn-cta {
                width: 100%;
                max-width: 280px;
                justify-content: center;
            }
            
            /* Hero buttons mobile optimization */
            .hero-buttons {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 20px;
                margin-top: 40px;
                width: 100%;
            }
            
            .hero-buttons .btn {
                width: 100%;
                max-width: 300px;
                min-width: unset;
                padding: 18px 24px;
                font-size: 1.1rem;
                font-weight: 700;
                text-align: center;
                display: flex;
                align-items: center;
                justify-content: center;
            }
        }

        @media (max-width: 576px) {
            h1 {
                font-size: 2rem;
                margin-bottom: 1.5rem;
            }
            
            h2 {
                font-size: 1.5rem;
                margin-bottom: 2rem;
            }
            
            .container {
                padding: 0 12px;
            }
            
            .hero {
                padding: 60px 0 50px;
            }
            
            .hero-content p {
                font-size: 1.1rem;
                margin-bottom: 35px;
                padding: 0 10px;
                line-height: 1.6;
            }
            
            .main-image {
                height: 300px;
            }
            
            .thumbnails {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .size-cards {
                grid-template-columns: 1fr;
                gap: 25px;
                margin-top: 30px;
            }
            
            .size-card {
                padding: 30px 20px;
                margin-bottom: 10px;
            }
            
            .size-card h3 {
                font-size: 1.4rem;
                margin-bottom: 15px;
            }
            
            .size-visual {
                height: 120px;
                margin: 20px 0;
            }
            
            .layer-stack {
                height: 500px;
            }
            
            .layer {
                height: 80px;
                font-size: 1rem;
                padding-left: 20px;
            }
            
            .layer:hover {
                padding-left: 30px;
                height: 90px;
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
            
            /* Enhanced mobile button styling */
            .hero-buttons {
                gap: 25px;
                margin-top: 40px;
                width: 100%;
                max-width: 320px;
                margin-left: auto;
                margin-right: auto;
            }
            
            .hero-buttons .btn {
                width: 100%;
                max-width: 100%;
                padding: 20px 24px;
                font-size: 1.1rem;
                font-weight: 700;
                border-radius: 15px;
                min-height: 60px;
                box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
                transition: all 0.3s ease;
            }
            
            .hero-buttons .btn:hover {
                transform: translateY(-2px);
                box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
            }
            
            .btn-primary {
                margin-bottom: 5px;
            }
            
            /* CTA buttons mobile enhancement */
            .cta-buttons {
                gap: 25px;
                margin-top: 40px;
            }
            
            .btn-cta {
                width: 100%;
                max-width: 300px;
                padding: 20px 24px;
                font-size: 1.1rem;
                min-height: 60px;
                border-radius: 15px;
                font-weight: 700;
            }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <!-- Hero Section - Updated with Background Image -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <span class="hero-tag">Doctor Recommended</span>
                <h1>Wake Up Without Back Pain</h1>
                <p style="font-size: 1.2rem; color: rgba(255,255,255,0.9); margin-bottom: 30px;">
                    Experience premium orthopaedic support with the Peps Spine Guard mattress. Engineered for spinal alignment and lasting comfort.
                </p>
                <div class="hero-buttons">
                    <a href="#size-visualizer" class="btn btn-primary">Choose Your Size</a>
                    <a href="#gallery" class="btn" style="background: transparent; border: 2px solid var(--white); color: var(--white);">
                        View Gallery
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Gallery -->
    <section id="gallery" class="gallery">
        <div class="container">
            <h2>Explore The Peps Spine Guard</h2>
            <div class="gallery-container">
                <div class="main-image">
                    <img id="mainImage" src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N6-Spine-Guard-lifestyle.jpg" alt="Peps Spine Guard Mattress">
                </div>
                <div class="thumbnails">
                    <div class="thumb active" onclick="changeImage(0)">
                        <img src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N6-Spine-Guard-lifestyle.jpg" alt="Mattress Full View">
                    </div>
                    <div class="thumb" onclick="changeImage(1)">
                        <img src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N6-Spine-Guard-img1.jpg" alt="Mattress Layers">
                    </div>
                    <div class="thumb" onclick="changeImage(2)">
                        <img src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N6-Spine-Guard-img2.jpg" alt="Bedroom Setup">
                    </div>
                    <div class="thumb" onclick="changeImage(3)">
                        <img src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N6-Spine-Guard-img3.jpg" alt="Close-up Texture">
                    </div>
                    <div class="thumb" onclick="changeImage(4)">
                        <img src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N6-Spine-Guard-img4.jpg" alt="Comfort Feature">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Size Visualizer - Updated with Images -->
    <section id="size-visualizer" class="size-visualizer">
        <div class="container">
            <h2>Select Your Perfect Size</h2>
            <div class="size-cards">
                <div class="size-card selected" onclick="selectSize('king')">
                    <h3>King Size</h3>
                    <div class="size-visual">
                        <div class="mattress-outline king-outline"></div>
                    </div>
                    <p style="color: var(--dark-grey);">182.9L × 76.2W × 15.2Th cm</p>
                    <p style="color: var(--pink); font-weight: 600;">Perfect for Couples</p>
                </div>
                <div class="size-card" onclick="selectSize('queen')">
                    <h3>Queen Size</h3>
                    <div class="size-visual">
                        <div class="mattress-outline queen-outline"></div>
                    </div>
                    <p style="color: var(--dark-grey);">182.9L × 76.2W × 15.2Th cm</p>
                    <p style="color: var(--deep-blue); font-weight: 600;">Ideal for Couples</p>
                </div>
                <div class="size-card" onclick="selectSize('single')">
                    <h3>Single</h3>
                    <div class="size-visual">
                        <div class="mattress-outline single-outline"></div>
                    </div>
                    <p style="color: var(--dark-grey);">182.9L × 76.2W × 15.2Th cm</p>
                    <p style="color: var(--coral); font-weight: 600;">Great for Individuals</p>
                </div>
                <div class="size-card" onclick="selectSize('twin')">
                    <h3>Twin</h3>
                    <div class="size-visual">
                        <div class="mattress-outline twin-outline"></div>
                    </div>
                    <p style="color: var(--dark-grey);">182.9L × 76.2W × 15.2Th cm</p>
                    <p style="color: var(--gold); font-weight: 600;">Perfect for Kids</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Visual -->
    <section class="tech-visual">
        <div class="container">
            <h2>Advanced Sleep Technology</h2>
            <div class="tech-grid">
                <div class="tech-card">
                    <div class="tech-image" style="background-image: url('https://m.media-amazon.com/images/I/81HoSSz8keL._AC_UF894,1000_QL80_.jpg');">
                        <div class="tech-overlay">
                            <h3>Memory Foam Layer</h3>
                        </div>
                    </div>
                    <div class="tech-content">
                        <p>Contours to your body shape for pressure relief and restful sleep. Adaptive comfort technology.</p>
                    </div>
                </div>
                <div class="tech-card">
                    <div class="tech-image" style="background-image: url('https://cozycoir.com/cdn/shop/products/Comfortbonnel5_1445x.png?v=1650887265');">
                        <div class="tech-overlay">
                            <h3>Bonnell Spring System</h3>
                        </div>
                    </div>
                    <div class="tech-content">
                        <p>Ensures firm orthopaedic support and long-lasting durability with continuous coil design.</p>
                    </div>
                </div>
                <div class="tech-card">
                    <div class="tech-image" style="background-image: url('https://5.imimg.com/data5/SELLER/Default/2024/1/376554101/YA/AA/UI/3911770/bed-pillow-500x500.jpeg');">
                        <div class="tech-overlay">
                            <h3>Super Edge Plus</h3>
                        </div>
                    </div>
                    <div class="tech-content">
                        <p>Reinforced edges prevent sagging and maximize usable surface area for edge-to-edge comfort.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Layer Visualization -->
    <section class="layer-visual">
        <div class="container">
            <h2>Multi-Layer Construction</h2>
            <div class="layer-container">
                <div class="layer-stack">
                    <div class="layer layer-1" onclick="showLayerInfo(1)">
                        Polar Fleece Cover - Anti-pilled, breathable fabric
                    </div>
                    <div class="layer layer-2" onclick="showLayerInfo(2)">
                        Memory Foam Comfort Layer - Pressure relief technology
                    </div>
                    <div class="layer layer-3" onclick="showLayerInfo(3)">
                        Bonnell Spring Core - Orthopaedic support system
                    </div>
                    <div class="layer layer-4" onclick="showLayerInfo(4)">
                        High-Density Base - Durable foundation
                    </div>
                    <div class="layer layer-5" onclick="showLayerInfo(5)">
                        Super Edge Plus - Reinforced perimeter support
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison Slider -->
    <section class="comparison-slider">
        <div class="container">
            <h2>Experience The Difference</h2>
            <div class="slider-container">
                <div class="comparison-image">
                    <div class="image-after"></div>
                    <div class="image-before" id="imageBefore"></div>
                    <div class="slider-handle" id="sliderHandle"></div>
                </div>
            </div>
            <div style="display: flex; justify-content: space-between; margin-top: 20px;">
                <div style="text-align: center;">
                    <h3 style="color: var(--pink);">Regular Mattress</h3>
                    <p style="color: var(--dark-grey);">Pressure points & misalignment</p>
                </div>
                <div style="text-align: center;">
                    <h3 style="color: var(--deep-blue);">Peps Spine Guard</h3>
                    <p style="color: var(--dark-grey);">Perfect spinal alignment</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Warranty Visual -->
    <section class="warranty-visual">
        <div class="container">
            <div class="warranty-badge">
                <div class="warranty-years">10</div>
                <div class="warranty-label">YEARS</div>
            </div>
            <h2 style="color: var(--white);">10-Year Warranty</h2>
            <p style="max-width: 600px; margin: 0 auto 20px; font-size: 1.1rem; color: rgba(255,255,255,0.9);">
                Assured quality and peace of mind for a decade. Your investment in spinal health is protected.
            </p>
            <p style="font-size: 0.9rem; opacity: 0.8;">*Terms and conditions apply</p>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="final-cta">
        <div class="container">
            <h2>Ready for Pain-Free Mornings?</h2>
            <p style="max-width: 700px; margin: 0 auto 30px; font-size: 1.2rem; color: rgba(255,255,255,0.9);">
                Upgrade your sleep with Peps Spine Guard - where premium comfort meets orthopaedic science.
            </p>
            <div class="cta-buttons">
                <!-- <a href="#" class="btn-cta pulse-btn">
                    <i class="fas fa-shopping-cart"></i> Order Now
                </a> -->
                <a href="https://wa.me/919945689996" class="btn-cta" style="background: var(--white); color: var(--pink);">
                    <i class="fab fa-whatsapp"></i> Get Expert Advice
                </a>
                <a href="tel:919945689996" class="btn-cta" style="background: transparent; border: 2px solid var(--white);">
                    <i class="fas fa-phone"></i> Call for Free Demo
                </a>
            </div>
        </div>
    </section>

    <script>
        // Image Gallery Functionality
        const images = [
            'https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N6-Spine-Guard-lifestyle.jpg',
            'https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N6-Spine-Guard-img1.jpg',
            'https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N6-Spine-Guard-img2.jpg',
            'https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N6-Spine-Guard-img3.jpg',
            'https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N6-Spine-Guard-img4.jpg'
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
        }

        // Layer Information Display
        function showLayerInfo(layerNum) {
            const layers = document.querySelectorAll('.layer');
            layers.forEach(layer => {
                layer.style.background = layer.style.background.replace('0.8)', '0.6)');
            });
            
            const selectedLayer = document.querySelector(`.layer-${layerNum}`);
            selectedLayer.style.background = selectedLayer.style.background.replace('0.6)', '0.9)');
            
            // Show layer info (in a real implementation, this would display detailed info)
            // const layerInfo = [
            //     "Polar Fleece Cover: Anti-pilled, breathable fabric that stays fresh",
            //     "Memory Foam Layer: Contours to body shape for pressure relief",
            //     "Bonnell Spring Core: Continuous coil system for spinal support",
            //     "High-Density Base: Durable foundation for long-lasting comfort",
            //     "Super Edge Plus: Reinforced edges prevent sagging"
            // ];
            
            // alert(layerInfo[layerNum - 1]);
        }

        // Comparison Slider
        const sliderHandle = document.getElementById('sliderHandle');
        const imageBefore = document.getElementById('imageBefore');
        let isDragging = false;

        sliderHandle.addEventListener('mousedown', startDrag);
        document.addEventListener('mousemove', drag);
        document.addEventListener('mouseup', stopDrag);

        // Touch events for mobile
        sliderHandle.addEventListener('touchstart', (e) => {
            e.preventDefault();
            startDrag(e.touches[0]);
        });
        document.addEventListener('touchmove', (e) => {
            e.preventDefault();
            drag(e.touches[0]);
        });
        document.addEventListener('touchend', stopDrag);

        function startDrag(e) {
            isDragging = true;
            sliderHandle.style.cursor = 'col-resize';
        }

        function drag(e) {
            if (!isDragging) return;
            
            const container = document.querySelector('.comparison-image');
            const containerRect = container.getBoundingClientRect();
            const x = e.clientX - containerRect.left;
            
            // Constrain to container bounds
            const percentage = Math.max(0, Math.min(1, x / containerRect.width));
            
            // Update slider position
            sliderHandle.style.left = `${percentage * 100}%`;
            
            // Update image width
            imageBefore.style.width = `${percentage * 100}%`;
        }

        function stopDrag() {
            isDragging = false;
            sliderHandle.style.cursor = 'col-resize';
        }

        // Add click functionality to slider container
        document.querySelector('.comparison-image').addEventListener('click', (e) => {
            const container = document.querySelector('.comparison-image');
            const containerRect = container.getBoundingClientRect();
            const x = e.clientX - containerRect.left;
            const percentage = Math.max(0, Math.min(1, x / containerRect.width));
            
            sliderHandle.style.left = `${percentage * 100}%`;
            imageBefore.style.width = `${percentage * 100}%`;
        });

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
            document.querySelectorAll('.size-card, .tech-card, .layer').forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                observer.observe(el);
            });
        });
    </script>
    
    <?php include "floating-buttons.php" ?>
    <?php include 'footer.php'; ?>
</body>
</html>