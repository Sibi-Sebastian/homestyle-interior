<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services | HomeStyle Interior & Kitchen Solutions</title>
    <meta name="description" content="Premium interior design services & modern kitchen appliances. Transform your spaces with HomeStyle's expert solutions in Davanagere.">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-blue: #155aa5;
            --primary-violet: #ae419c;
            --secondary-blue: #2c7bc4;
            --secondary-violet: #c86bb4;
            --light-blue: #f0f7ff;
            --light-violet: #f9f0f7;
            --dark: #1a1a1a;
            --gray: #666666;
            --light-gray: #f8f9fa;
            --white: #ffffff;
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            --shadow-hover: 0 20px 40px rgba(0, 0, 0, 0.15);
            --transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            --border-radius: 20px;
            --gradient: linear-gradient(135deg, var(--primary-blue), var(--primary-violet));
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            color: var(--dark);
            background-color: var(--white);
            line-height: 1.6;
            overflow-x: hidden;
            padding-top: 80px;
        }

        h1, h2, h3, h4 {
            font-weight: 600;
            line-height: 1.2;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* ================= HERO ================= */
        .services-hero {
            position: relative;
            height: 70vh;
            min-height: 550px;
            background: 
                linear-gradient(135deg, rgba(21, 90, 165, 0.85), rgba(174, 65, 156, 0.85)),
                url('https://images.unsplash.com/photo-1616594039964-ae9021a400a0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .hero-content {
            position: relative;
            text-align: center;
            color: var(--white);
            z-index: 2;
            padding: 0 20px;
            animation: fadeInUp 1s ease;
        }

        .hero-content h1 {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
        }

        .hero-content p {
            font-size: 1.3rem;
            max-width: 600px;
            margin: 0 auto 30px;
            opacity: 0.9;
            font-weight: 300;
        }

        .hero-scroll {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            color: var(--white);
            font-size: 1.5rem;
            animation: bounce 2s infinite;
        }

        /* ================= COMMON ================= */
        .section {
            padding: 100px 0;
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-header h2 {
            font-size: 3rem;
            margin-bottom: 20px;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .section-header .section-intro {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto;
            color: var(--gray);
            line-height: 1.8;
        }

        /* ================= SERVICE ROW ================= */
        .service-row {
            display: grid;
            grid-template-columns: 1.2fr 1fr;
            gap: 70px;
            align-items: center;
            margin-bottom: 100px;
        }

        .service-row:nth-child(even) {
            direction: rtl;
        }

        .service-row:nth-child(even) > * {
            direction: ltr;
        }

        .service-img {
            position: relative;
            overflow: hidden;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            transform: perspective(1000px) rotateY(-5deg);
            transition: var(--transition);
        }

        .service-row:nth-child(even) .service-img {
            transform: perspective(1000px) rotateY(5deg);
        }

        .service-img:hover {
            transform: perspective(1000px) rotateY(0deg);
            box-shadow: var(--shadow-hover);
        }

        .service-img img {
            width: 100%;
            height: 450px;
            object-fit: cover;
            transition: var(--transition);
        }

        .service-img:hover img {
            transform: scale(1.05);
        }

        .service-img-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: var(--gradient);
            color: var(--white);
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9rem;
            z-index: 2;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .service-content {
            padding: 20px 0;
        }

        .service-content h3 {
            font-size: 2.3rem;
            margin-bottom: 25px;
            color: var(--dark);
            line-height: 1.3;
        }

        .service-content p {
            font-size: 1.1rem;
            color: var(--gray);
            margin-bottom: 30px;
            line-height: 1.8;
        }

        /* ================= ICON BOXES ================= */
        .icon-boxes {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            margin-top: 40px;
        }

        .icon-box {
            background: var(--white);
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            box-shadow: var(--shadow);
            transition: var(--transition);
            border: 2px solid transparent;
            height: 100%;
        }

        .icon-box:hover {
            transform: translateY(-10px);
            border-color: var(--primary-blue);
            box-shadow: var(--shadow-hover);
        }

        .icon-box i {
            font-size: 2.5rem;
            margin-bottom: 20px;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .icon-box h4 {
            font-size: 1.3rem;
            margin-bottom: 12px;
            color: var(--primary-blue);
        }

        .icon-box p {
            font-size: 0.95rem;
            color: var(--gray);
            line-height: 1.6;
            margin: 0;
        }

        /* ================= KEY SERVICES ================= */
        .key-services {
            margin-top: 80px;
        }

        .key-services h3 {
            text-align: center;
            font-size: 2.3rem;
            margin-bottom: 50px;
            color: var(--dark);
        }

        .service-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
        }

        .service-box {
            background: var(--white);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
            height: 100%;
        }

        .service-box:hover {
            transform: translateY(-15px);
            box-shadow: var(--shadow-hover);
        }

        .service-box::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--gradient);
            z-index: 2;
        }

        .service-box img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: var(--transition);
        }

        .service-box:hover img {
            transform: scale(1.05);
        }

        .service-box .info {
            padding: 30px;
            height: calc(100% - 220px);
            display: flex;
            flex-direction: column;
        }

        .service-box .number {
            display: inline-block;
            width: 40px;
            height: 40px;
            background: var(--gradient);
            color: var(--white);
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .service-box h4 {
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: var(--primary-blue);
            line-height: 1.3;
        }

        .service-box p {
            color: var(--gray);
            line-height: 1.7;
            flex-grow: 1;
            margin-bottom: 0;
        }

        /* ================= FULL IMAGE ================= */
        .full-image {
            margin-top: 80px;
            position: relative;
            cursor: pointer;
            overflow: hidden;
            border-radius: var(--border-radius);
        }

        .full-image img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .full-image:hover img {
            transform: scale(1.02);
            box-shadow: var(--shadow-hover);
        }

        .full-image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.4) 50%, transparent 100%);
            color: var(--white);
            padding: 40px;
            border-radius: var(--border-radius);
            opacity: 0;
            transform: translateY(20px);
            transition: var(--transition);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .full-image:hover .full-image-overlay {
            opacity: 1;
            transform: translateY(0);
        }

        .full-image-overlay h4 {
            font-size: 1.8rem;
            margin-bottom: 10px;
            transform: translateY(10px);
            transition: var(--transition);
        }

        .full-image:hover .full-image-overlay h4 {
            transform: translateY(0);
        }

        .full-image-overlay p {
            opacity: 0.9;
            font-size: 1.1rem;
            transform: translateY(10px);
            transition: var(--transition);
            transition-delay: 0.1s;
        }

        .full-image:hover .full-image-overlay p {
            transform: translateY(0);
        }

        /* ================= CTA SECTION ================= */
        .cta-section {
            padding: 100px 0;
            background: var(--gradient);
            color: var(--white);
            text-align: center;
        }

        .cta-section h2 {
            font-size: 2.8rem;
            margin-bottom: 20px;
        }

        .cta-section p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 40px;
            opacity: 0.9;
            line-height: 1.8;
        }

        .cta-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            padding: 16px 40px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            text-decoration: none;
            transition: var(--transition);
            cursor: pointer;
            border: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-primary {
            background: var(--white);
            color: var(--primary-blue);
        }

        .btn-primary:hover {
            background: var(--light-gray);
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }

        .btn-secondary {
            background: transparent;
            color: var(--white);
            border: 2px solid var(--white);
        }

        .btn-secondary:hover {
            background: var(--white);
            color: var(--primary-blue);
            transform: translateY(-5px);
        }

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

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateX(-50%) translateY(0);
            }
            40% {
                transform: translateX(-50%) translateY(-10px);
            }
            60% {
                transform: translateX(-50%) translateY(-5px);
            }
        }

        /* ================= RESPONSIVE ================= */
        @media (max-width: 1100px) {
            .service-row {
                grid-template-columns: 1fr 1fr;
                gap: 50px;
            }
            
            .service-img img {
                height: 400px;
            }
        }

        @media (max-width: 992px) {
            .hero-content h1 {
                font-size: 3rem;
            }
            
            .service-row {
                grid-template-columns: 1fr;
                gap: 50px;
            }
            
            .service-img {
                transform: none !important;
                max-width: 600px;
                margin: 0 auto;
            }
            
            .service-content {
                text-align: center;
            }
            
            .icon-boxes {
                grid-template-columns: repeat(2, 1fr);
                max-width: 700px;
                margin: 40px auto 0;
            }
            
            .service-grid {
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            }
            
            .services-hero {
                height: 65vh;
                min-height: 500px;
            }
        }

        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }
            
            .hero-content p {
                font-size: 1.1rem;
            }
            
            .section-header h2 {
                font-size: 2.3rem;
            }
            
            .section {
                padding: 80px 0;
            }
            
            .icon-boxes {
                grid-template-columns: 1fr;
                max-width: 400px;
            }
            
            .service-content h3 {
                font-size: 2rem;
            }
            
            .key-services h3 {
                font-size: 2rem;
            }
            
            .cta-buttons {
                flex-direction: column;
                align-items: center;
                gap: 15px;
            }
            
            .btn {
                width: 100%;
                max-width: 300px;
                justify-content: center;
            }
            
            .services-hero {
                height: 60vh;
                min-height: 450px;
            }
            
            .hero-scroll {
                bottom: 20px;
            }
        }

        @media (max-width: 576px) {
            .section {
                padding: 60px 0;
            }
            
            .services-hero {
                height: 55vh;
                min-height: 400px;
            }
            
            .hero-content h1 {
                font-size: 2rem;
            }
            
            .hero-content p {
                font-size: 1rem;
                margin-bottom: 20px;
            }
            
            .service-box .info {
                padding: 20px;
            }
            
            .service-grid {
                grid-template-columns: 1fr;
            }
            
            .full-image img {
                height: 300px;
            }
            
            .full-image-overlay {
                padding: 25px;
            }
            
            .service-img-badge {
                padding: 8px 20px;
                font-size: 0.8rem;
            }
        }

        /* ================= SCROLL PROGRESS ================= */
        .scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 4px;
            background: var(--gradient);
            z-index: 9999;
            transition: width 0.1s ease;
        }
    </style>
</head>

<body>
    <!-- Scroll Progress Bar -->
    <div class="scroll-progress" id="scrollProgress"></div>

    <!-- Include Header -->
    <?php include 'header.php'; ?>

    <!-- HERO SECTION -->
    <section class="services-hero">
        <div class="hero-content">
            <h1>Our Premium Services</h1>
            <p>Transform your spaces with expert interior design solutions & modern kitchen appliances</p>
            <a href="#interiors" class="btn btn-primary">Explore Our Services</a>
        </div>
        <div class="hero-scroll">
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>

    <!-- INTERIORS SECTION -->
    <section class="section" id="interiors">
        <div class="container">
            <div class="section-header">
                <h2>Interior Design Solutions</h2>
                <p class="section-intro">
                    Your space should reflect who you are. At HomeStyle, we create interiors that inspire comfort, elegance, and functionality.
                    Our certified designers work with you to transform your vision into reality.
                </p>
            </div>

            <!-- Main Interior Service Row -->
            <div class="service-row">
                <div class="service-img">
                    <div class="service-img-badge">Premium Service</div>
                    <img src="images/bedroom.jpg" 
                         alt="Modern Interior Design">
                </div>
                
                <div class="service-content">
                    <h3>Your Imagination, Our Execution</h3>
                    <p>
                        We craft bespoke interiors aligned with your lifestyle, taste, and functionality — 
                        transforming spaces into inspiring experiences that blend beauty with practicality. 
                        Our attention to detail ensures every element works in harmony.
                    </p>

                    <div class="icon-boxes">
                        <div class="icon-box">
                            <i class="fas fa-award"></i>
                            <h4>Professional</h4>
                            <p>Certified designers with years of experience in transforming spaces</p>
                        </div>
                        <div class="icon-box">
                            <i class="fas fa-users"></i>
                            <h4>Collaborative</h4>
                            <p>Working together to bring your vision to life stress-free</p>
                        </div>
                        <div class="icon-box">
                            <i class="fas fa-heart"></i>
                            <h4>Passionate</h4>
                            <p>Design isn't just our job, it's our passion and commitment</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Interior Key Services -->
            <div class="key-services">
                <h3>Our Interior Services</h3>
                
                <div class="service-grid">
                    <div class="service-box">
                        <img src="images/blinds.jpg" 
                             alt="Curtains & Blinds">
                        <div class="info">
                            <span class="number">01</span>
                            <h4>Curtains & Blinds</h4>
                            <p>Elegant window treatments in premium fabrics with custom designs, motorized options, and perfect light control solutions for every room.</p>
                        </div>
                    </div>

                    <div class="service-box">
                        <img src="images/furniture/sofas/1680685596231a1f94015a959-HLKT00000801_living-room-800x600_7-main.jpg" 
                             alt="Furniture">
                        <div class="info">
                            <span class="number">02</span>
                            <h4>Premium Furniture</h4>
                            <p>Custom-made and designer furniture pieces for living rooms, bedrooms, and offices with premium finishes and ergonomic designs.</p>
                        </div>
                    </div>

                    <div class="service-box">
                        <img src="images/peps/restonic/N4-Sanibel-Normal-blue-lifestyle.jpg" 
                             alt="Mattresses">
                        <div class="info">
                            <span class="number">03</span>
                            <h4>PEPS Mattresses</h4>
                            <p>Orthopedic and memory foam mattresses for ultimate comfort and restorative sleep experience, ensuring you wake up refreshed.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Full Width Image -->
            <div class="full-image">
                <img src="images/furniture/sofas/1681378715189588de527c069-HLKT00000841_batch-3-800x600_8-main.webp" 
                     alt="Complete Interior Solution">
                <div class="full-image-overlay">
                    <h4>Complete Interior Solutions</h4>
                    <p>From concept to completion, we handle every detail with precision and care</p>
                </div>
            </div>
        </div>
    </section>

    <!-- KITCHEN SECTION -->
    <section class="section" id="kitchens">
        <div class="container">
            <div class="section-header">
                <h2>Kitchen Appliances</h2>
                <p class="section-intro">
                    Innovation meets style — upgrade your kitchen with premium Carysil appliances for a seamless cooking experience.
                    Our products combine cutting-edge technology with elegant design.
                </p>
            </div>

            <!-- Main Kitchen Service Row -->
            <div class="service-row">
                <div class="service-img">
                    <div class="service-img-badge">Carysil</div>
                    <img src="images/kitchen.jpg" 
                         alt="Modern Kitchen">
                </div>
                
                <div class="service-content">
                    <h3>Carysil Brand Excellence</h3>
                    <p>
                        Designed to enhance functionality, efficiency, and elegance in your kitchen. 
                        Our premium appliances ensure a seamless cooking experience with innovative features, 
                        stylish designs, and reliable performance that lasts.
                    </p>

                    <div class="icon-boxes">
                        <div class="icon-box">
                            <i class="fas fa-star"></i>
                            <h4>Premium Quality</h4>
                            <p>High-end appliances from India's leading kitchen brand with superior craftsmanship</p>
                        </div>
                        <div class="icon-box">
                            <i class="fas fa-bolt"></i>
                            <h4>Efficient</h4>
                            <p>Energy-efficient designs that save time, resources, and reduce utility costs</p>
                        </div>
                        <div class="icon-box">
                            <i class="fas fa-shield-alt"></i>
                            <h4>Warranty</h4>
                            <p>Comprehensive warranty with dedicated after-sales support and service</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kitchen Key Services -->
            <div class="key-services">
                <h3>Kitchen Products</h3>
                
                <div class="service-grid">
                    <div class="service-box">
                        <img src="images/carysil/chimneys/Chimney.webp" 
                             alt="Kitchen Chimneys">
                        <div class="info">
                            <span class="number">01</span>
                            <h4>Kitchen Chimneys</h4>
                            <p>Powerful suction chimneys with auto-clean technology, baffle filters, and stylish designs to keep your kitchen smoke-free.</p>
                        </div>
                    </div>

                    <div class="service-box">
                        <img src="images/carysil/hob-tops/Tek-Plus-60-3-1-600x600.webp" 
                             alt="Hob Tops">
                        <div class="info">
                            <span class="number">02</span>
                            <h4>Hob Tops</h4>
                            <p>Glass, ceramic, and induction hobs with precise temperature control and advanced safety features for perfect cooking.</p>
                        </div>
                    </div>

                    <div class="service-box">
                        <img src="images/fauckets/sink_1.webp" 
                             alt="Kitchen Sinks and Faucets">
                        <div class="info">
                            <span class="number">03</span>
                            <h4>Kitchen Sinks and Faucets</h4>
                            <p>Granite, stainless steel, and ceramic sinks in various configurations and sizes, designed for durability and style and Modern faucets with pull-out sprays.</p>
                        </div>
                    </div>

    </div>
            <!-- Full Width Image -->
            <div class="full-image">
                <img src="images/kitchen2.webp" 
                     alt="Complete Kitchen Solution">
                <div class="full-image-overlay">
                    <h4>Complete Kitchen Makeovers</h4>
                    <p>Transform your cooking space with our comprehensive solutions and expert installation</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="cta-section">
        <div class="container">
            <h2>Ready to Transform Your Space?</h2>
            <p>
                Whether you're looking to redesign your interiors or upgrade your kitchen, 
                our team is ready to bring your vision to life with expert guidance and premium solutions.
                Contact us today for a free consultation!
            </p>
            <div class="cta-buttons">
                <a href="tel:+919945689996" class="btn btn-primary">
                    <i class="fas fa-phone"></i> Call Now
                </a>
                <a href="https://homestyleinteriordvg.in/contact-us/" class="btn btn-secondary">
                    <i class="fas fa-calendar-alt"></i> Book Consultation
                </a>
            </div>
        </div>
    </section>

    <!-- Include Footer -->
    <?php include 'footer.php'; ?>

    <script>
        // Scroll Progress Bar
        window.addEventListener('scroll', function() {
            const scrollProgress = document.getElementById('scrollProgress');
            const scrollTop = window.pageYOffset;
            const docHeight = document.documentElement.scrollHeight - window.innerHeight;
            const scrollPercent = (scrollTop / docHeight) * 100;
            scrollProgress.style.width = scrollPercent + '%';
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if(targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Animate elements on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if(entry.isIntersecting) {
                    entry.target.classList.add('animated');
                }
            });
        }, observerOptions);

        // Observe all service boxes and rows
        document.querySelectorAll('.service-row, .service-box, .icon-box').forEach(el => {
            observer.observe(el);
        });

        // Initialize animations
        document.addEventListener('DOMContentLoaded', function() {
            // Add animation classes after page load
            setTimeout(() => {
                document.querySelectorAll('.service-row, .service-box').forEach((el, index) => {
                    el.style.animationDelay = (index * 0.1) + 's';
                });
            }, 300);
        });
    </script>
    
    <?php include "floating-buttons.php" ?>
</body>
</html>