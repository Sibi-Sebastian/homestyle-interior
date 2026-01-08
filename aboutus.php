<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Homestyle Interiors</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --blue: #0d4f9e;
            --violet: #8b2fa3;
            --pink: #cf3fa6;
            --white: #ffffff;
            --light-gray: #f9f9f9;
            --dark-gray: #333333;
            --transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--dark-gray);
            overflow-x: hidden;
            background-color: var(--white);
            padding-top: 80px;
        }

        h1, h2, h3, h4 {
            font-weight: 600;
            line-height: 1.2;
            margin-bottom: 1rem;
        }

        .container {
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 40px;
        }

        section {
            padding: 50px 0;
            position: relative;
            overflow: hidden;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }

        .section-title h2 {
            font-size: 2.8rem;
            color: var(--blue);
            display: inline-block;
            padding-bottom: 10px;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: linear-gradient(to right, var(--blue), var(--violet));
        }

        .section-subtitle {
            font-size: 1.1rem;
            color: #666;
            max-width: 700px;
            margin: 0 auto 2rem;
            text-align: center;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 14px 32px;
            text-decoration: none;
            font-weight: 600;
            border-radius: 5px;
            transition: var(--transition);
            cursor: pointer;
            border: none;
            font-size: 1rem;
            position: relative;
            overflow: hidden;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--blue), #1a66b8);
            color: var(--white);
        }

        .btn-secondary {
            background: linear-gradient(135deg, #f86f48, #fec33b);
            color: var(--white);
        }

        .btn-accent {
            background: linear-gradient(135deg, #25D366, #128C7E);
            color: var(--white);
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        /* ========== 1️⃣ HERO SECTION ========== */
        .hero {
            height: 85vh;
            min-height: 600px;
            display: flex;
            align-items: center;
            position: relative;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5)), url('images/bedroom.jpg');
            background-size: cover;
            background-position: center;
            color: var(--white);
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
            position: relative;
            z-index: 2;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s ease forwards 0.3s;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            line-height: 1.1;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
            line-height: 1.8;
        }

        /* ========== 2️⃣ OUR STORY SECTION ========== */
        .story {
            background-color: var(--white);
        }

        .story-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .story-text {
            opacity: 0;
            transform: translateX(-40px);
            transition: all 0.8s ease;
        }

        .story-text.visible {
            opacity: 1;
            transform: translateX(0);
        }

        .story-text h2 {
            color: var(--blue);
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .story-text p {
            margin-bottom: 1.5rem;
            color: #555;
            line-height: 1.7;
        }

        .story-highlight {
            background: linear-gradient(135deg, rgba(13, 79, 158, 0.05), rgba(139, 47, 163, 0.05));
            padding: 25px;
            border-radius: 10px;
            margin-top: 2rem;
            border-left: 4px solid var(--blue);
        }

        .story-highlight p {
            font-style: italic;
            color: var(--blue);
            margin: 0;
            font-size: 1.1rem;
        }

        .story-image {
            opacity: 0;
            transform: translateX(40px);
            transition: all 0.8s ease;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            height: 450px;
        }

        .story-image.visible {
            opacity: 1;
            transform: translateX(0);
        }

        .story-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 1s ease;
        }

        .story-image:hover img {
            transform: scale(1.05);
        }

        /* ========== 3️⃣ DESIGN PHILOSOPHY ========== */
        .philosophy {
            background: linear-gradient(135deg, #f8f9ff 0%, #f0f2ff 100%);
        }

        .philosophy-intro {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 3rem;
            color: #555;
            line-height: 1.7;
        }

        .philosophy-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .philosophy-card {
            background-color: var(--white);
            padding: 40px 30px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(13, 79, 158, 0.08);
            transition: var(--transition);
            opacity: 0;
            transform: translateY(30px);
        }

        .philosophy-card.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .philosophy-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(13, 79, 158, 0.15);
        }

        .philosophy-icon {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: var(--blue);
        }

        .philosophy-card h3 {
            font-size: 1.4rem;
            color: var(--blue);
            margin-bottom: 15px;
        }

        .philosophy-card p {
            color: #666;
            line-height: 1.6;
        }

        /* ========== 4️⃣ VISION & MISSION ========== */
        .vision-mission {
            background-color: var(--white);
        }

        .vm-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
        }

        .vision, .mission {
            opacity: 0;
            padding: 40px;
            border-radius: 15px;
            min-height: 300px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .vision {
            background: linear-gradient(135deg, rgba(13, 79, 158, 0.05), rgba(13, 79, 158, 0.01));
            border-left: 4px solid var(--blue);
        }

        .mission {
            background: linear-gradient(135deg, rgba(139, 47, 163, 0.05), rgba(139, 47, 163, 0.01));
            border-left: 4px solid var(--violet);
        }

        .vision.visible {
            animation: slideFromLeft 1s ease forwards;
        }

        .mission.visible {
            animation: slideFromRight 1s ease forwards;
        }

        @keyframes slideFromLeft {
            from {
                opacity: 0;
                transform: translateX(-40px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideFromRight {
            from {
                opacity: 0;
                transform: translateX(40px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .vision h2, .mission h2 {
            color: var(--blue);
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .vision p, .mission p {
            color: #555;
            line-height: 1.7;
            margin-bottom: 1rem;
        }

        /* ========== 5️⃣ GALLERY ========== */
        .gallery {
            background-color: var(--light-gray);
        }

        .gallery-description {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 3rem;
            color: #666;
            line-height: 1.7;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-top: 40px;
        }

        .gallery-item {
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            height: 300px;
            opacity: 0;
            transform: scale(0.95);
            transition: all 0.6s ease;
        }

        .gallery-item.visible {
            opacity: 1;
            transform: scale(1);
        }

        .gallery-item:hover {
            transform: scale(1.02);
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 1s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 20px;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            color: white;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }

        .gallery-item:hover .gallery-caption {
            transform: translateY(0);
        }

        /* ========== 6️⃣ BRANDS ========== */
        .brands {
            background-color: var(--white);
        }

        .brands-intro {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 3rem;
            color: #666;
            line-height: 1.7;
        }

        .brand-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 60px;
            margin-top: 40px;
        }

        .brand-item {
            width: 140px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--white);
            border-radius: 10px;
            padding: 20px;
            opacity: 0;
            /* filter: grayscale(100%); */
            transition: var(--transition);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        }

        .brand-item.visible {
            opacity: 1;
        }

        .brand-item:hover {
            filter: grayscale(0%);
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(13, 79, 158, 0.15);
        }

        .brand-item i {
            font-size: 2.2rem;
            color: var(--blue);
        }

        /* ========== 7️⃣ OUR PROMISE ========== */
        .promise {
            background: linear-gradient(135deg, rgba(13, 79, 158, 0.03) 0%, rgba(139, 47, 163, 0.03) 100%);
            text-align: center;
        }

        .promise-content {
            max-width: 800px;
            margin: 0 auto;
            opacity: 0;
            transform: translateY(30px);
            transition: all 1s ease;
        }

        .promise-content.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .promise-content h2 {
            color: var(--blue);
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .promise-content p {
            color: #555;
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }

        .promise-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 2rem;
        }

        .promise-item {
            background: var(--white);
            padding: 15px 25px;
            border-radius: 50px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            font-size: 0.9rem;
            color: var(--blue);
            font-weight: 500;
        }

        /* ========== 8️⃣ LOCAL PRESENCE ========== */
        .local {
            background-color: var(--white);
        }

        .local-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .local-text {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }

        .local-text.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .local-text h2 {
            color: var(--blue);
            font-size: 2.2rem;
            margin-bottom: 1.5rem;
        }

        .local-text p {
            color: #555;
            line-height: 1.7;
            margin-bottom: 1.5rem;
        }

        .local-stats {
            display: flex;
            gap: 30px;
            margin-top: 2rem;
        }

        .stat {
            text-align: center;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--blue);
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 0.9rem;
            color: #666;
        }

        .local-image {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
            border-radius: 10px;
            overflow: hidden;
            height: 400px;
        }

        .local-image.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .local-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* ========== 9️⃣ CTA SECTION ========== */
        .cta {
            background: linear-gradient(135deg, #050e8f, #dc3169);
            color: var(--white);
            text-align: center;
        }

        .cta-content {
            max-width: 700px;
            margin: 0 auto;
        }

        .cta h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .cta p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            opacity: 0.9;
            line-height: 1.8;
        }

        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        /* ========== RESPONSIVE ========== */
        @media (max-width: 992px) {
            .story-content, .vm-container, .local-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            
            .hero h1 {
                font-size: 2.8rem;
            }
            
            .section-title h2 {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 768px) {
            section {
                padding: 40px 0;
            }
            
            .container {
                padding: 0 20px;
            }
            
            .hero {
                height: 70vh;
                min-height: 500px;
            }
            
            .hero h1 {
                font-size: 2.2rem;
            }
            
            .hero p {
                font-size: 1.1rem;
            }
            
            /* Make buttons more rounded and button-like on mobile */
            .btn {
                border-radius: 25px;
                padding: 16px 36px;
                font-size: 1rem;
                box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
                transition: all 0.3s ease;
            }
            
            .btn:hover {
                transform: translateY(-2px);
                box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            }
            
            /* Special styling for hero button */
            .hero .btn {
                border-radius: 30px;
                padding: 18px 40px;
                font-size: 1.05rem;
                box-shadow: 0 8px 25px rgba(13, 79, 158, 0.3);
                font-weight: 600;
            }
            
            .hero .btn:hover {
                transform: translateY(-3px);
                box-shadow: 0 12px 30px rgba(13, 79, 158, 0.4);
            }
            
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .cta-buttons .btn {
                width: 100%;
                max-width: 280px;
            }
            
            .philosophy-grid, .gallery-grid {
                grid-template-columns: 1fr;
            }
            
            .brand-grid {
                gap: 20px;
            }
            
            .brand-item {
                width: 120px;
                height: 70px;
            }
            
            /* .local-stats {
                flex-wrap: wrap;
            } */
            
            .story-highlight {
                padding: 20px;
            }
        }

        @media (max-width: 576px) {
            .hero h1 {
                font-size: 1.8rem;
            }
            
            .section-title h2 {
                font-size: 1.8rem;
            }
            
            .vision, .mission {
                padding: 30px 20px;
            }
            
            .story-image, .local-image {
                height: 250px;
            }
            
            .promise-list {
                flex-direction: column;
                align-items: center;
            }
            
            .stat-number {
                font-size: 2rem;
            }
            
            /* Mobile button improvements */
            .btn {
                border-radius: 25px;
                padding: 16px 28px;
                font-size: 0.95rem;
                min-height: 50px;
            }
            
            .hero .btn {
                border-radius: 30px;
                padding: 18px 32px;
                font-size: 1rem;
                box-shadow: 0 8px 20px rgba(13, 79, 158, 0.3);
            }
        }

        .brand-item {
  background: rgba(255,255,255,0.75);
  backdrop-filter: blur(10px);
}


/* Section wrapper */
.brand-logos {
  padding: 60px 20px;
  background: #f8f9fb;
}

/* Grid layout */
.brand-grid {
  max-width: 1200px;
  margin: auto;
  /* display: grid; */
  grid-template-columns: repeat(6, 1fr);
  gap: 64px;
}

/* Logo card */
.brand-item {
  background: #ffffff;
  border-radius: 14px;
  padding: 20px;
  height: 100px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 8px 20px rgba(0,0,0,0.08);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

/* Logo image */
.brand-item img {
  max-width: 300%;
  max-height: 200px;
  /* object-fit: contain; */
}

/* Hover effect */
.brand-item:hover {
  transform: translateY(-6px);
  box-shadow: 0 14px 30px rgba(0,0,0,0.12);
}

/* ===================== */
/* 📱 Tablet */
@media (max-width: 1024px) {
  .brand-grid {
    grid-template-columns: repeat(4, 1fr);
  }
}

/* 📱 Mobile */
@media (max-width: 768px) {
  .brand-logos {
    padding: 40px 15px;
  }

  .brand-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 36px;
  }

  .brand-item {
    height: 80px;
    padding: 14px;
  }

  .brand-item img {
    max-height: 48px;
  }
}

/* 📱 Small mobile */
@media (max-width: 480px) {
  .brand-grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .brand-item {
    height: 70px;
  }

  .brand-item img {
    max-height: 150px;
  }
}


    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <!-- 1️⃣ HERO -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Crafting Beautiful Homes for Over 25 Years</h1>
                <p>At Homestyle Interiors, we design more than spaces—we create homes that feel warm, elegant, and effortlessly functional.</p>
                <a href="#cta" class="btn btn-primary">Begin Your Home Transformation</a>
            </div>
        </div>
    </section>

    <!-- 2️⃣ STORY -->
    <section class="story" id="story">
        <div class="container">
            <div class="story-content">
                <div class="story-text">
                    <h2>Our Journey Through the Years</h2>
                    <p>Founded in the year 2000, Homestyle Interiors began with a simple purpose—to bring refined comfort and honest design guidance into everyday homes. What started as a small interior studio has grown into a trusted destination for premium mattresses, modern kitchens, curtains, furniture, and lifestyle interiors.</p>
                    <p>Over the years, our journey has been shaped by trust, long-term relationships, and a deep understanding of how people live within their spaces. Every project we take on is guided by care, craftsmanship, and attention to detail—because your home deserves nothing less.</p>
                    <div class="story-highlight">
                        <p>"Our mission has always been clear: create spaces where families can build memories, find comfort, and truly thrive."</p>
                    </div>
                </div>
                <div class="story-image">
                    <img src="images/about.png" alt="Our Studio">
                </div>
            </div>
        </div>
    </section>

    <!-- 3️⃣ PHILOSOPHY -->
    <section class="philosophy">
        <div class="container">
            <div class="section-title">
                <h2>Our Design Philosophy</h2>
            </div>
            <p class="philosophy-intro">We approach every project with a set of core principles that ensure your space is not just beautiful, but truly functional for your lifestyle. Our philosophy centers around creating environments that support wellbeing, connection, and everyday joy.</p>
            <div class="philosophy-grid">
                <div class="philosophy-card">
                    <div class="philosophy-icon"><i class="fas fa-heart"></i></div>
                    <h3>Comfort-First Design</h3>
                    <p>We believe beautiful spaces should feel as good as they look. Every element is selected with comfort and livability in mind, ensuring your home is a true sanctuary.</p>
                </div>
                <div class="philosophy-card">
                    <div class="philosophy-icon"><i class="fas fa-lightbulb"></i></div>
                    <h3>Thoughtful Innovation</h3>
                    <p>Blending timeless design with modern functionality to create spaces that work for today's lifestyle while remaining elegant and relevant for years to come.</p>
                </div>
                <div class="philosophy-card">
                    <div class="philosophy-icon"><i class="fas fa-handshake"></i></div>
                    <h3>Personal Collaboration</h3>
                    <p>Your home should reflect you. We work closely with you throughout the process to ensure the final design aligns perfectly with your vision and daily needs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4️⃣ VISION & MISSION -->
    <section class="vision-mission">
        <div class="container">
            <div class="vm-container">
                <div class="vision">
                    <h2>Our Vision</h2>
                    <p>To create homes that feel warm, comfortable, and timeless—where thoughtful design, quality craftsmanship, and everyday living come together in perfect harmony.</p>
                    <!-- <p>Our goal is to transform not just spaces, but how people experience their daily lives within those spaces, creating environments that nurture both family life and personal growth.</p> -->
                </div>
                <div class="mission">
                    <h2>Our Mission</h2>
                    <p>To deliver curated interior solutions through honest guidance, premium products, and dependable service—helping homeowners design spaces that truly reflect their lifestyle and comfort.</p>
                    <!-- <p>We commit to understanding our clients' unique needs and translating them into beautiful, functional spaces that stand the test of time, backed by our 25+ years of expertise.</p> -->
                </div>
            </div>
        </div>
    </section>

    <!-- 5️⃣ GALLERY -->
    <section class="gallery">
        <div class="container">
            <div class="section-title">
                <h2>Our Transformations</h2>
            </div>
            <p class="gallery-description">From cozy living rooms to elegant kitchens, each project tells a unique story of transformation. Here's a glimpse of how we've helped families create spaces they love coming home to.</p>
            <div class="gallery-grid">
                                <div class="gallery-item">
                    <img src="https://res.cloudinary.com/dw4e01qx8/f_auto,q_auto/images/gmspokj36gmy5qb8ilfa" alt="Serene Bedroom">
                    <div class="gallery-caption">
                        <h4>Serene Bedroom</h4>
                        <p>A sanctuary designed for rest and rejuvenation</p>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="https://media.designcafe.com/wp-content/uploads/2020/03/21013403/angular-kitchen-chimney-design.jpg" alt="Elegant Kitchen">
                    <div class="gallery-caption">
                        <h4>Elegant Kitchen</h4>
                        <p>Functional design meets culinary inspiration</p>
                    </div>
                </div>
                                <div class="gallery-item">
                    <img src="https://shopps.in/wp-content/uploads/2023/07/Hc86b688810f0404abae7ab3fe3061a74U.jpg" alt="Modern Living Room">
                    <div class="gallery-caption">
                        <h4>Modern Living Room</h4>
                        <p>Family-friendly comfort meets contemporary design</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6️⃣ BRANDS -->
    <section class="brands">
        <div class="container">
            <div class="section-title">
                <h2>Partnered with Leading Brands</h2>
            </div>
            <p class="brands-intro">We partner with industry-leading brands like Carysil and Peps, known for their innovation, durability, and comfort. These collaborations allow us to offer premium kitchen solutions and sleep essentials that meet our high standards of quality, craftsmanship, and everyday living</p>
            <div class="brand-grid">
<div class="brand-item">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaDEzyBBKjbqlR6P3srF6WMX_vlblefKgemQ&s" alt="Premium Interior Brand">
</div>

<div class="brand-item">
    <img src="https://images.seeklogo.com/logo-png/36/2/carysil-logo-png_seeklogo-368284.png" alt="Luxury Furniture Brand">
</div>

<!-- <div class="brand-item">
    <img src="images/brand-logos/brand3.png" alt="Trusted Interior Partner">
</div>

<div class="brand-item">
    <img src="images/brand-logos/brand4.png" alt="Award Winning Brand">
</div> -->
            </div>
        </div>
    </section>

    <!-- 7️⃣ PROMISE -->
    <section class="promise">
        <div class="container">
            <div class="promise-content">
                <h2>Our Promise to You</h2>
                <p>At Homestyle Interiors, our promise is simple—transparent guidance, refined products, and interiors designed with care. We focus on solutions that feel right today and continue to add value for years to come.</p>
                <p>We stand behind every project with integrity, ensuring that your experience with us is as exceptional as the final result. Your satisfaction isn't just a goal—it's our commitment and the foundation of everything we do.</p>
                <div class="promise-list">
                    <div class="promise-item">✓ 25+ Years Expertise</div>
                    <div class="promise-item">✓ Premium Materials</div>
                    <div class="promise-item">✓ Personal Guidance</div>
                    <div class="promise-item">✓ Quality Craftsmanship</div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8️⃣ LOCAL -->
    <section class="local">
        <div class="container">
            <div class="local-content">
                <div class="local-text">
                    <h2>Rooted in Davanagere</h2>
                    <p>Proudly serving Davanagere and surrounding regions for over two decades, Homestyle Interiors has been a part of countless homes—helping families create spaces filled with warmth, comfort, and everyday elegance.</p>
                    <p>Our deep-rooted connection to the community ensures we understand local tastes, needs, and lifestyles, allowing us to deliver solutions that truly resonate with our clients and stand the test of time.</p>
                    <div class="local-stats">
                        <div class="stat">
                            <div class="stat-number">26+</div>
                            <div class="stat-label">Years Serving</div>
                        </div>
                        <div class="stat">
                            <div class="stat-number">3689+</div>
                            <div class="stat-label">Homes Transformed</div>
                        </div>
                        <div class="stat">
                            <div class="stat-number">93%</div>
                            <div class="stat-label">Client Satisfaction</div>
                        </div>
                    </div>
                </div>
                <div class="local-image">
                    <img src="images/about1.png" alt="Davanagere Community">
                </div>
            </div>
        </div>
    </section>

    <!-- 9️⃣ CTA -->
    <section class="cta" id="cta">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Transform Your Home?</h2>
                <p>Let's create a space that reflects your style, supports your lifestyle, and feels like home from the moment you walk in. Connect with our experts today for a personalized consultation.</p>
                <div class="cta-buttons">
                    <a href="https://wa.me/9945689996" class="btn btn-accent"><i class="fab fa-whatsapp"></i> WhatsApp Consultation</a>
                    <a href="tel:+919945689996" class="btn btn-secondary"><i class="fas fa-phone"></i> Call Us Today</a>
                    <a href="https://www.google.com/maps?q=Homestyle+Interiors+Davangere" class="btn btn-primary"><i class="fas fa-map-marker-alt"></i> Visit Our Showroom</a>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Enhanced scroll animation
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    
                    // Add delay for staggered animations
                    if (entry.target.classList.contains('philosophy-card') || 
                        entry.target.classList.contains('gallery-item') ||
                        entry.target.classList.contains('brand-item')) {
                        const index = Array.from(entry.target.parentNode.children).indexOf(entry.target);
                        entry.target.style.transitionDelay = `${index * 0.15}s`;
                    }
                }
            });
        }, { threshold: 0.1 });

        // Observe all elements
        document.addEventListener('DOMContentLoaded', () => {
            const animateElements = document.querySelectorAll(
                '.story-text, .story-image, .philosophy-card, .vision, .mission, .gallery-item, .brand-item, .promise-content, .local-text, .local-image'
            );
            
            animateElements.forEach(el => {
                observer.observe(el);
            });

            // Smooth scroll for navigation
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;
                    
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // Gallery caption hover effect
            const galleryItems = document.querySelectorAll('.gallery-item');
            galleryItems.forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.querySelector('.gallery-caption').style.transform = 'translateY(0)';
                });
                item.addEventListener('mouseleave', function() {
                    this.querySelector('.gallery-caption').style.transform = 'translateY(100%)';
                });
            });
        });
    </script>
    
    <?php include "floating-buttons.php" ?>
    <?php include 'footer.php'; ?>
</body>
</html>