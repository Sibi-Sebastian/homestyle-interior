<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homestyle Interiors | Premium Home Solutions</title>

    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" as="style">
    <link rel="stylesheet" href="index.css">
    <script src="active.js" defer></script>
    <link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
crossorigin="anonymous" referrerpolicy="no-referrer" />

<meta http-equiv="x-dns-prefetch-control" content="on">
<link rel="dns-prefetch" href="//pepsindia.b-cdn.net">
<link rel="dns-prefetch" href="//carysil.com">
<link rel="dns-prefetch" href="//m.media-amazon.com">

<!-- whatsapp icon -->
 <link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
crossorigin="anonymous" referrerpolicy="no-referrer">

</head>
<body>
 <?php include "header.php" ?>
   

    
<!-- Hero Slider Section -->
<section class="hero-section">
    <div class="hero-slider">

        <!-- Slide 1 - Gold to Goldenrod (NOW FIRST) -->
        <div class="slide slide-3 active">
            <div class="slide-content">
                <div class="slide-tag">SLEEP WELL</div>
<!-- 25+ Years Badge - Top Center of Entire Slider -->
<!-- <div class="anniversary-badge-top">
    <img src="images/25years1.png" alt="25+ Years in Service">
</div> -->
                <h1 class="slide-title">Luxury Sleep Experience</h1>
                <p class="slide-description">
                    Indulge in our premium mattresses and bedroom furniture designed to provide unparalleled comfort and support for a restful night's sleep.
                </p>
                <div class="hero-buttons">
                    <button class="btn-primary">Shop Mattresses</button>
                    <button class="btn-secondary">Bedroom Ideas</button>
                </div>
            </div>
            <div class="slide-image">
                <div class="image-container">
                    <img src="images/hero2.png" alt="Premium Mattress" loading="lazy">
                    <div class="image-overlay">
                        <div class="image-caption">Orthopaedic Mattress</div>
                        <div class="image-price">Superior Spinal Support</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 - Teal to Light Sea Green (UNCHANGED) -->
        <div class="slide slide-2">
            <div class="slide-content">
                <div class="slide-tag">KITCHEN ESSENTIALS</div>
                <!-- 25+ Years Badge - Top Center of Entire Slider -->
<!-- <div class="anniversary-badge-top">
    <img src="images/25years1.png" alt="25+ Years in Service">
</div> -->
                <h1 class="slide-title">Modern Kitchen Solutions</h1>
                <p class="slide-description">
                    Upgrade your culinary space with our premium kitchen appliances including chimneys, hobs, faucets, and sinks designed for performance and style.
                </p>
                <div class="hero-buttons">
                    <button class="btn-primary">Explore Kitchen</button>
                    <button class="btn-secondary">View Appliances</button>
                </div>
            </div>
            <div class="slide-image">
                <div class="image-container">
                    <img src="images/hero3.png" alt="Modern Kitchen Appliances" loading="lazy">
                    <div class="image-overlay">
                        <div class="image-caption">Smart Induction Hob</div>
                        <div class="image-price">Energy Efficient Cooking</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3 - Bathroom Essentials (UNCHANGED) -->
        <div class="slide slide-4">
            <div class="slide-content">
                <div class="slide-tag">LUXURY CURTAINS & BLINDS</div>
                <!-- 25+ Years Badge - Top Center of Entire Slider -->
<!-- <div class="anniversary-badge-top">
    <img src="images/25years1.png" alt="25+ Years in Service">
</div> -->
                <h1 class="slide-title">Dress Your Windows with Elegance</h1>
                <p class="slide-description">
                    Explore our curated collection of premium curtains and blinds,
                    thoughtfully designed to balance light, privacy, and style—bringing
                    warmth and refinement to every living space
                </p>
                <div class="hero-buttons">
                    <button class="btn-primary">Explore Curtains</button>
                    <button class="btn-secondary">View Collection</button>
                </div>
            </div>

            <div class="slide-image desktop-only">
                <div class="image-container">
                    <img src="https://www.intoblinds.com.au/wp-content/uploads/2024/07/Blinds-and-Curtains.jpg" alt="Premium Bathroom Suite" loading="lazy">
                    <div class="image-overlay">
                        <div class="image-caption">Elegant Curtains & Blinds</div>
                        <div class="image-price">Light, Privacy & Style Perfectly Balanced</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 4 - Premium Furniture Collection (NOW LAST) -->
        <div class="slide slide-1">
            <div class="slide-content">
                <div class="slide-tag">PREMIUM COLLECTION</div>
                <!-- 25+ Years Badge - Top Center of Entire Slider -->
<!-- <div class="anniversary-badge-top">
    <img src="images/25years1.png" alt="25+ Years in Service">
</div> -->
                <h1 class="slide-title">Elevate Your <br>Living Space</h1>
                <p class="slide-description">
                    Discover our exclusive range of luxury curtains, furniture, and blinds that blend timeless elegance with modern functionality to transform your home.
                </p>
                <div class="hero-buttons">
                    <button class="btn-primary">Shop Now</button>
                    <button class="btn-secondary">View Collection</button>
                </div>
            </div>
            <div class="slide-image">
                <div class="image-container">
                    <img src="images/hero1.png" alt="Luxury Furniture Collection" loading="lazy">
                    <div class="image-overlay">
                        <div class="image-caption">Luxury Velvet Sofa</div>
                        <div class="image-price">Premium Comfort & Style</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slider Controls -->
        <div class="slider-arrows">
            <button id="prev-slide"><i class="fas fa-chevron-left"></i></button>
            <button id="next-slide"><i class="fas fa-chevron-right"></i></button>
        </div>

        <div class="slider-controls">
            <div class="slider-dots">
                <div class="dot active" data-slide="0"></div>
                <div class="dot" data-slide="1"></div>
                <div class="dot" data-slide="2"></div>
                <div class="dot" data-slide="3"></div>
            </div>
        </div>

    </div>
</section>

    
    <!-- About Us Section -->
    <section class="about-section" id="about">
        <div class="container">
            <div class="about-container">
                <div class="about-content slide-up">
                    <h2>Crafting Beautiful Homes Since 2000</h2>
                    <p>At Homestyle Interior, we believe your home should be a reflection of your personality and a sanctuary for your soul. For nearly two decades, we've been transforming living spaces with premium interior solutions that combine elegance, functionality, and timeless design.</p>
                    <p>Our team of experienced designers and craftsmen work closely with you to understand your vision, lifestyle, and preferences, creating customized solutions that perfectly match your needs and exceed your expectations.</p>
                   
                    <div class="about-stats">
                        <div class="stat-item">
                            <div class="stat-number" data-count="26">26+</div>
                            <div class="stat-label">Years Experience</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number" data-count="2568">2568+</div>
                            <div class="stat-label">Happy Clients</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number" data-count="3689">3689+</div>
                            <div class="stat-label">Projects Completed</div>
                        </div>
                    </div>
                </div>
               
                <div class="about-image rotate-in">
                    <img src="images/aboutus3.0.png" alt="About Homestyle Interiors" loading="lazy">
                    <div class="image-decoration"></div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Why Choose Us Section -->
    <section class="why-choose-us">
        <div class="container">
            <div class="section-title">
                <h2>The Value We Deliver</h2>
                <p>WWe create interiors that reflect timeless elegance and everyday comfort. Through superior craftsmanship, curated products, and attention to detail, Homestyle Interiors ensures every space delivers lasting quality and meaningful value.</p>
            </div>
           
            <div class="features-grid">
                    <div class="feature-card slide-up">
                    <div class="feature-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>25+ Years of Trusted Excellence</h3>
                    <p>For over two decades, Homestyle Interiors has delivered refined craftsmanship, consistent quality, and dependable service to countless homes.</p>
                </div>

                <div class="feature-card slide-up">
                    <div class="feature-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>Premium Quality</h3>
                    <p>All our products are crafted from the finest materials with attention to detail and built to last for years of enjoyment.</p>
                </div>
               
                <div class="feature-card slide-up">
                    <div class="feature-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3>Custom Design</h3>
                    <p>Our design team creates personalized solutions that match your style, space requirements, and functional needs perfectly.</p>
                </div>
               
                <div class="feature-card slide-up">
                    <div class="feature-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3>Free Installation</h3>
                    <p>We provide professional installation services at no extra cost, ensuring your products are set up perfectly and safely.</p>
                </div>
               

            </div>
        </div>
    </section>
    
    <!-- Featured Products Section -->
    <section class="container featured-products">
        <div class="section-title fade-in">
            <h2>Featured Products</h2>
            <p>Discover our handpicked selection of premium home products that combine exceptional quality with timeless design.</p>
        </div>
       
        <div class="product-grid">

                    <!-- Product 1 -->
            <div class="product-card fade-in">
                <div class="product-image" style="background-image: url('https://pepsindia.b-cdn.net/wp-content/uploads/2018/02/Springkoil-Bonnell-Pillow-Top-Maroon.webp');"></div>
                <div class="product-info">
                    <div class="product-category">MATTRESSES</div>
                    <h3 class="product-name">Orthopedic Memory Foam</h3>
                    <p class="product-description">Advanced memory foam mattress with orthopedic support, perfect for back pain relief and deep sleep.</p>
                    <a href="ortho.php?item=sofa" class="see-more-btn">See More</a>
                </div>
            </div> 

                        <!-- Product 2 -->
            <div class="product-card fade-in">
                <div class="product-image" style="background-image: url('https://5.imimg.com/data5/SELLER/Default/2023/4/297637283/WJ/YC/AX/122987992/carysil-sam-60-cms-90-cms-chimney-.jpg');"></div>
                <div class="product-info">
                    <div class="product-category">CHIMNEYS</div>
                    <h3 class="product-name">Stuttgurt Island Chimney</h3>
                    <p class="product-description">Powerful island chimney with auto-clean technology, perfect for open kitchen designs.</p>
                    <a href="chimneys.php?item=sofa" class="see-more-btn">See More</a>
                </div>
            </div>

                        <!-- Product 3 -->
            <div class="product-card fade-in">
                <div class="product-image" style="background-image: url('https://studioonyx.in/wp-content/uploads/2023/04/ALTIUS-378-live-800x800.png.webp');"></div>
                <div class="product-info">
                    <div class="product-category">KITCHEN APPLIANCES</div>
                    <h3 class="product-name">Smart Induction Hob</h3>
                    <p class="product-description">Energy-efficient induction cooktop with touch controls, safety features, and rapid heating technology.</p>
                    <a href="hobtops.php?item=sofa" class="see-more-btn">See More</a>
                </div>
            </div>
           
                        <!-- Product 4 -->
            <div class="product-card fade-in">
                <div class="product-image" style="background-image: url('https://carysil.com/wp-content/uploads/2025/07/black-cut-3.webp');"></div>
                <div class="product-info">
                    <div class="product-category">FAUCETS</div>
                    <h3 class="product-name">ALA 01507</h3>
                    <p class="product-description">Modern kitchen faucet with pull-out spray, ceramic cartridge, and corrosion-resistant finish.</p>
                    <a href="sinks.php?item=sofa" class="see-more-btn">See More</a>
                </div>
            </div>
            
                        <!-- Product 5 -->
            <div class="product-card fade-in">
                <div class="product-image" style="background-image: url('https://carysil.com/wp-content/uploads/2025/07/Carysil-Quartz-Sink.png');"></div>
                <div class="product-info">
                    <div class="product-category">SINKS</div>
                    <h3 class="product-name">PVD Collection</h3>
                    <p class="product-description">Stainless steel sink with PVD coating, offering durability and scratch resistance for busy kitchens.</p>
                    <a href="sinks.php?item=sofa" class="see-more-btn">See More</a>
                </div>
            </div>


                        <!-- Product 6 -->
            <div class="product-card fade-in">
                <div class="product-image" style="background-image: url('https://www.louvolite.com/wp-content/webp-express/webp-images/uploads/Roller-Feature-Benefits.jpg.webp');"></div>
                <div class="product-info">
                    <div class="product-category">CURTAINS</div>
                    <h3 class="product-name">Silk Blackout Curtains</h3>
                    <p class="product-description">Premium silk fabric with blackout lining, providing complete light control and thermal insulation.</p>
                    <a href="curtains.php?item=sofa" class="see-more-btn">See More</a>
                </div>
            </div>
           


            <!-- Product 7 -->
            <div class="product-card fade-in">
                <div class="product-image" style="background-image: url('https://homestyleinteriordvg.in/wp-content/uploads/2024/10/B1.jpg');"></div>
                <div class="product-info">
                    <div class="product-category">BLINDS</div>
                    <h3 class="product-name">Wood Blinds</h3>
                    <p class="product-description">Natural wood blinds with UV protection, offering privacy and light control with classic elegance.</p>
                    <a href="curtains.php?item=sofa" class="see-more-btn">See More</a>
                </div>
            </div>

            <!-- Product 8 -->
            <div class="product-card fade-in">
                <div class="product-image" style="background-image: url('https://dukaan.b-cdn.net/700x700/webp/upload_file_service/9c27378c-b9ff-4b07-8b5d-8dd4b9165220/c69edf52284c4a80adfa6e8086149541.webp');"></div>
                <div class="product-info">
                    <div class="product-category">FURNITURE</div>
                    <h3 class="product-name">Luxury Velvet Sofa</h3>
                    <p class="product-description">Premium velvet fabric with solid wood frame, offering superior comfort and elegant design for your living room.</p>
                    <a href="sofa.php?item=sofa" class="see-more-btn">See More</a>
                </div>
            </div>
        </div>
        
        <div class="center-button">
            <a href="gallery.php" class="see-more-btn">View All Products</a>
        </div>
    </section>
    
    <!-- Sleep Environments Gallery Section -->
    <section class="masonry-layout" id="gallery">
        <div class="container">
            <div class="section-title fade-in">
                <h2>Designed for Peaceful Nights</h2>
                <p>Refined comfort crafted to create quiet, relaxing nights and refreshing mornings.</p>
            </div>
            
            <!-- Transformation Gallery Grid -->
            <div class="transformation-grid">
                <!-- Card 1 -->
                <div class="transformation-card fade-in" data-category="mattress">
                    <div class="image-container">
                        <img src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N3-Spring-koil-Crown-top-Lifestyle.jpg" alt="Spring Koil Mattress" class="before-image" loading="lazy">
                        <img src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N03-Maroon-Spring-koil-Grown-top-14.png.jpg" alt="Spring Koil Details" class="after-image" loading="lazy">
                        <div class="before-label">Lifestyle</div>
                        <div class="after-label">Details</div>
                    </div>
                    <div class="hover-indicator">
                        <!-- <i class="fas fa-hand-pointer"></i> Hover to see details -->
                    </div>
                    <div class="card-overlay">
                        <span class="transformation-tag">Affordable Luxury</span>
                        <h3>Peps Springkoil Bonnell Crown Top</h3>
                        <p>Premium comfort, quality, and style at a price that fits your everyday lifestyle</p>
                    </div>
                </div>
                
                <!-- Card 2 -->
                <div class="transformation-card fade-in" data-category="mattress">
                    <div class="image-container">
                        <img src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N11-Grand-Palais-Lifestyle.jpg" alt="Grand Palais Lifestyle" class="before-image" loading="lazy">
                        <img src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N11-Grand-Palais-img1.jpg" alt="Grand Palais Details" class="after-image" loading="lazy">
                        <div class="before-label">Lifestyle</div>
                        <div class="after-label">Details</div>
                    </div>
                    <div class="hover-indicator">
                        <!-- <i class="fas fa-hand-pointer"></i> Hover to see details -->
                    </div>
                    <div class="card-overlay">
                        <span class="transformation-tag">Ultra Luxury</span>
                        <h3>Grand Palais Collection</h3>
                        <p>Premium comfort with high-end materials and craftsmanship for deep, restful sleep</p>
                    </div>
                </div>
                
                <!-- Card 3 -->
                <div class="transformation-card fade-in" data-category="mattress">
                    <div class="image-container">
                        <img src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N6-Spine-Guard-lifestyle.jpg" alt="Spine Guard Lifestyle" class="before-image" loading="lazy">
                        <img src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N6-Spine-Guard-img1.jpg" alt="Spine Guard Details" class="after-image" loading="lazy">
                        <div class="before-label">Lifestyle</div>
                        <div class="after-label">Details</div>
                    </div>
                    <div class="hover-indicator">
                        <!-- <i class="fas fa-hand-pointer"></i> Hover to see details -->
                    </div>
                    <div class="card-overlay">
                        <span class="transformation-tag">Orthopaedic</span>
                        <h3>Spine Guard Mattress</h3>
                        <p>Engineered for superior spinal support and pressure relief with therapeutic alignment</p>
                    </div>
                </div>
                
                <!-- Card 4 -->
                <div class="transformation-card fade-in" data-category="mattress">
                    <div class="image-container">
                        <img src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/06/N4-Sanibel-Plush-Memory-Foam-Euro-Top-purple-Lifestyle-600x600.jpg" alt="Ardene Lifestyle" class="before-image" loading="lazy">
                        <img src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/04/N4-Sanibel-Plush-Memory-Foam-Euro-Top-purple-img1.jpg" alt="Ardene Details" class="after-image" loading="lazy">
                        <div class="before-label">Lifestyle</div>
                        <div class="after-label">Details</div>
                    </div>
                    <div class="hover-indicator">
                        <!-- <i class="fas fa-hand-pointer"></i> Hover to see details -->
                    </div>
                    <div class="card-overlay">
                        <span class="transformation-tag">American Comfort</span>
                        <h3>Restonic Ardene</h3>
                        <p>Crafted with American-inspired comfort and advanced support for restorative nights</p>
                    </div>
                </div>
                
                <!-- Card 5 -->
                <div class="transformation-card fade-in" data-category="mattress">
                    <div class="image-container">
                        <img src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N9-Zenimo-PillowTop-lifestyle.jpg" alt="Zenimo Lifestyle" class="before-image" loading="lazy">
                        <img src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N9-Zenimo-PillowTop-img1.jpg" alt="Zenimo Details" class="after-image" loading="lazy">
                        <div class="before-label">Lifestyle</div>
                        <div class="after-label">Details</div>
                    </div>
                    <div class="hover-indicator">
                        <!-- <i class="fas fa-hand-pointer"></i> Hover to see details -->
                    </div>
                    <div class="card-overlay">
                        <span class="transformation-tag">Elite Comfort</span>
                        <h3>Zenimo Pillow Top</h3>
                        <p>Enhanced support and plush comfort designed for restful sleep and everyday luxury</p>
                    </div>
                </div>
                
                <!-- Card 6 -->
                <div class="transformation-card fade-in" data-category="mattress">
                    <div class="image-container">
                        <img src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/03/N14-Magnifico-Italiano-lifestyle.jpg" alt="Cloudtex Lifestyle" class="before-image" loading="lazy">
                        <img src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/03/N14-Magnifico-Italiano-img1.jpg" alt="Cloudtex Details" class="after-image" loading="lazy">
                        <div class="before-label">Lifestyle</div>
                        <div class="after-label">Details</div>
                    </div>
                    <div class="hover-indicator">
                        <!-- <i class="fas fa-hand-pointer"></i> Hover to see details -->
                    </div>
                    <div class="card-overlay">
                        <span class="transformation-tag">Italiano</span>
                        <h3>Peps Italiano Magnifico Pocketed Faux Top</h3>
                        <p>Cloud-like comfort with advanced memory foam technology for ultimate relaxation</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Kitchen Essentials Section -->
    <!-- Kitchen Essentials Gallery Section -->
    <section class="masonry-layout" id="gallery">
        <div class="container">
            <div class="section-title fade-in">
                <h2>Make your cooking feel effortless.</h2>
                <p>Thoughtfully designed kitchen solutions that simplify everyday cooking and bring comfort to your space.</p>
            </div>
            
            <!-- Transformation Gallery Grid -->
            <div class="transformation-grid">
                <!-- Card 1: Chimney -->
                <div class="transformation-card fade-in" data-category="chimney">
                    <div class="image-container">
                        <img src="https://carysil.com/wp-content/uploads/2025/07/milan-60-1.webp" alt="Kitchen Chimney Lifestyle" class="before-image" loading="lazy">
                        <img src="https://carysil.com/wp-content/uploads/2025/07/milan-60-2.webp" alt="Kitchen Chimney Details" class="after-image" loading="lazy">
                        <div class="before-label">Lifestyle</div>
                        <div class="after-label">Details</div>
                    </div>
                    <div class="hover-indicator">
                        <!-- <i class="fas fa-hand-pointer"></i> Hover to see details -->
                    </div>
                    <div class="card-overlay">
                        <span class="transformation-tag">Smoke-Free Cooking</span>
                        <h3>Auto-Clean Kitchen Chimney</h3>
                        <p>Powerful suction with sleek design for a clean, odor-free modern kitchen</p>
                    </div>
                </div>
                
                <!-- Card 2: Hob -->
                <div class="transformation-card fade-in" data-category="hob">
                    <div class="image-container">
                        <img src="https://carysil.com/wp-content/uploads/2025/06/1-Tek-Plus-90-5-Front-1.webp" alt="Kitchen Hob Lifestyle" class="before-image" loading="lazy">
                        <img src="https://carysil.com/wp-content/uploads/2025/06/Tek-Plus-90-5-Top.webp" alt="Kitchen Hob Details" class="after-image" loading="lazy">
                        <div class="before-label">Lifestyle</div>
                        <div class="after-label">Details</div>
                    </div>
                    <div class="hover-indicator">
                        <!-- <i class="fas fa-hand-pointer"></i> Hover to see details -->
                    </div>
                    <div class="card-overlay">
                        <span class="transformation-tag">Precision Cooking</span>
                        <h3>Built-In Gas Hob</h3>
                        <p>High-efficiency burners with toughened glass for stylish and durable cooking</p>
                    </div>
                </div>
                
                <!-- Card 3: Cooktop -->
                <div class="transformation-card fade-in" data-category="cooktop">
                    <div class="image-container">
                        <img src="https://carysil.com/wp-content/uploads/2025/07/pvd-yellow-gold-3-0.webp" alt="Cooktop Lifestyle" class="before-image" loading="lazy">
                        <img src="https://carysil.com/wp-content/uploads/2025/07/pvd-yellow-gold-3-1.webp" alt="Cooktop Details" class="after-image" loading="lazy">
                        <div class="before-label">Lifestyle</div>
                        <div class="after-label">Details</div>
                    </div>
                    <div class="hover-indicator">
                        <!-- <i class="fas fa-hand-pointer"></i> Hover to see details -->
                    </div>
                    <div class="card-overlay">
                        <span class="transformation-tag">Seamless Integration</span>
                        <h3>Premium Gas Cooktop</h3>
                        <p>Sealed burners and cast iron grates for professional-grade performance</p>
                    </div>
                </div>
                
                <!-- Card 4: Faucet -->
                <div class="transformation-card fade-in" data-category="faucet">
                    <div class="image-container">
                        <img src="https://carysil.com/wp-content/uploads/2025/06/Chrome-4.webp" alt="Kitchen Faucet Lifestyle" class="before-image" loading="lazy">
                        <img src="https://carysil.com/wp-content/uploads/2025/06/Chrome-5.webp" alt="Kitchen Faucet Details" class="after-image" loading="lazy">
                        <div class="before-label">Lifestyle</div>
                        <div class="after-label">Details</div>
                    </div>
                    <div class="hover-indicator">
                        <!-- <i class="fas fa-hand-pointer"></i> Hover to see details -->
                    </div>
                    <div class="card-overlay">
                        <span class="transformation-tag">Everyday Elegance</span>
                        <h3>Pull-Down Kitchen Faucet</h3>
                        <p>Flexible functionality with modern design for effortless daily use</p>
                    </div>
                </div>
                
                <!-- Card 5: Premium Faucet -->
                <div class="transformation-card fade-in" data-category="premium-faucet">
                    <div class="image-container">
                        <img src="https://carysil.com/wp-content/uploads/2025/07/SingleLeverHandle.webp" alt="Premium Faucet Lifestyle" class="before-image" loading="lazy">
                        <img src="https://carysil.com/wp-content/uploads/2025/07/SingleLeverHandle2.webp" alt="Premium Faucet Details" class="after-image" loading="lazy">
                        <div class="before-label">Lifestyle</div>
                        <div class="after-label">Details</div>
                    </div>
                    <div class="hover-indicator">
                        <!-- <i class="fas fa-hand-pointer"></i> Hover to see details -->
                    </div>
                    <div class="card-overlay">
                        <span class="transformation-tag">Luxury Touch</span>
                        <h3>Premium Pull-Down Faucet</h3>
                        <p>High-end finishes and advanced features for a sophisticated kitchen experience</p>
                    </div>
                </div>
                
                <!-- Card 6: Sink -->
                <div class="transformation-card fade-in" data-category="sink">
                    <div class="image-container">
                        <img src="https://carysil.com/wp-content/uploads/2025/07/step-up-sink-2.webp" alt="Kitchen Sink Lifestyle" class="before-image" loading="lazy">
                        <img src="https://carysil.com/wp-content/uploads/2025/07/step-up-sink.webp" alt="Kitchen Sink Details" class="after-image" loading="lazy"> <!-- Note: Placeholder; replace with actual sink detail if available -->
                        <div class="before-label">Lifestyle</div>
                        <div class="after-label">Details</div>
                    </div>
                    <div class="hover-indicator">
                        <!-- <i class="fas fa-hand-pointer"></i> Hover to see details -->
                    </div>
                    <div class="card-overlay">
                        <span class="transformation-tag">Durable Beauty</span>
                        <h3>Stainless Steel Kitchen Sink</h3>
                        <p>Deep basins and soundproofing for functional, long-lasting elegance</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BLIND AND CURTAINS -->
         <!-- Window Treatments & Furniture Gallery Section -->
    <section class="masonry-layout" id="gallery">
        <div class="container">
            <div class="section-title fade-in">
                <h2>A Collection of Comfort & Style</h2>
                <p>Explore thoughtfully curated curtains, blinds, and furniture designed to bring comfort, elegance, and harmony to every room</p>
            </div>
            
            <!-- Transformation Gallery Grid -->
            <div class="transformation-grid">
                <!-- Card 1: Luxury Curtains -->
                <div class="transformation-card fade-in" data-category="curtains">
                    <div class="image-container">
                        <img src="https://m.media-amazon.com/images/I/61W+huh97rL._AC_UF894,1000_QL80_.jpg" alt="Luxury Curtains Lifestyle" class="before-image" loading="lazy">
                        <img src="https://i.etsystatic.com/15149985/r/il/545918/6084945096/il_570xN.6084945096_l5sf.jpg" alt="Luxury Curtains Fabric Detail" class="after-image" loading="lazy">
                        <div class="before-label">Lifestyle</div>
                        <div class="after-label">Details</div>
                    </div>
                    <div class="hover-indicator">
                        <!-- <i class="fas fa-hand-pointer"></i> Hover to see details -->
                    </div>
                    <div class="card-overlay">
                        <span class="transformation-tag">Elegant Flow</span>
                        <h3>Luxury Linen Curtains</h3>
                        <p>Soft, flowing fabrics that add warmth, privacy, and timeless elegance to any room</p>
                    </div>
                </div>
                
                <!-- Card 2: Sheer Curtains -->
                <div class="transformation-card fade-in" data-category="curtains">
                    <div class="image-container">
                        <img src="https://m.media-amazon.com/images/I/71p7A3u5KJL._AC_UF894,1000_QL80_.jpg" alt="Sheer Curtains Lifestyle" class="before-image" loading="lazy">
                        <img src="https://www.fabricmill.com/media/wysiwyg/blog/polyster800.jpg" alt="Sheer Curtains Texture Detail" class="after-image" loading="lazy">
                        <div class="before-label">Lifestyle</div>
                        <div class="after-label">Details</div>
                    </div>
                    <div class="hover-indicator">
                        <!-- <i class="fas fa-hand-pointer"></i> Hover to see details -->
                    </div>
                    <div class="card-overlay">
                        <span class="transformation-tag">Light & Airy</span>
                        <h3>Sheer Voile Curtains</h3>
                        <p>Delicate layers that filter natural light while maintaining privacy and softness</p>
                    </div>
                </div>
                
                <!-- Card 3: Roller Blinds -->
                <div class="transformation-card fade-in" data-category="blinds">
                    <div class="image-container">
                        <img src="https://5.imimg.com/data5/SELLER/Default/2021/1/TE/UP/SG/21063510/roller-blinds-500x500.jpg" alt="Roller Blinds Lifestyle" class="before-image" loading="lazy">
                        <img src="https://images.squarespace-cdn.com/content/v1/6054d185e94f5975342c7d5e/1630679636402-GWOARH2XSBVK249JESET/Basic+Components-08.png" alt="Roller Blinds Mechanism Detail" class="after-image" loading="lazy">
                        <div class="before-label">Lifestyle</div>
                        <div class="after-label">Details</div>
                    </div>
                    <div class="hover-indicator">
                        <!-- <i class="fas fa-hand-pointer"></i> Hover to see details -->
                    </div>
                    <div class="card-overlay">
                        <span class="transformation-tag">Modern Control</span>
                        <h3>Custom Roller Blinds</h3>
                        <p>Sleek, functional designs for precise light control and contemporary style</p>
                    </div>
                </div>
                
                <!-- Card 4: Blackout Blinds -->
                <div class="transformation-card fade-in" data-category="blinds">
                    <div class="image-container">
                        <img src="https://halfpriceblinds.com.au/cdn/shop/files/roller-blinds-cascata-blockout-pepe_a2f7ba3c-c947-4f8b-9202-2ec9170d7224.jpg?v=1693873581" alt="Blackout Blinds Lifestyle" class="before-image" loading="lazy">
                        <img src="https://www.theshadestore.com/blog/wp-content/uploads/the-shade-store-labelled-diagram-numbers-and-installation-parts-roller-shade-parts-pieces-of-roller-shade-content-2023-port-chester-950x700px.png.webp" alt="Blackout Blinds Detail" class="after-image" loading="lazy">
                        <div class="before-label">Lifestyle</div>
                        <div class="after-label">Details</div>
                    </div>
                    <div class="hover-indicator">
                        <!-- <i class="fas fa-hand-pointer"></i> Hover to see details -->
                    </div>
                    <div class="card-overlay">
                        <span class="transformation-tag">Complete Privacy</span>
                        <h3>Blackout Roller Blinds</h3>
                        <p>Superior light-blocking for better sleep and enhanced room ambiance</p>
                    </div>
                </div>
                
                <!-- Card 5: Modern Sofa -->
                <div class="transformation-card fade-in" data-category="furniture">
                    <div class="image-container">
                        <img src="https://m.media-amazon.com/images/I/61wsXDMApSL._AC_UF894,1000_QL80_.jpg" alt="Modern Sofa Lifestyle" class="before-image" loading="lazy">
                        <img src="https://www.shutterstock.com/image-photo/vertical-shot-stylish-white-couch-600nw-2626571105.jpg" alt="Sofa Upholstery Detail" class="after-image" loading="lazy">
                        <div class="before-label">Lifestyle</div>
                        <div class="after-label">Details</div>
                    </div>
                    <div class="hover-indicator">
                        <!-- <i class="fas fa-hand-pointer"></i> Hover to see details -->
                    </div>
                    <div class="card-overlay">
                        <span class="transformation-tag">Timeless Comfort</span>
                        <h3>Elegant Modern Sofa</h3>
                        <p>Premium upholstery and ergonomic design for luxurious relaxation and style</p>
                    </div>
                </div>
                
                <!-- Card 6: Sectional Furniture -->
                <div class="transformation-card fade-in" data-category="furniture">
                    <div class="image-container">
                        <img src="https://m.media-amazon.com/images/I/815LATD9XCL._AC_UF894,1000_QL80_.jpg" alt="Sectional Sofa Lifestyle" class="before-image" loading="lazy">
                        <img src="https://5.imimg.com/data5/SE/XI/WZ/ANDROID-34947990/product-jpeg-500x500.jpg" alt="Sectional Fabric Detail" class="after-image" loading="lazy">
                        <div class="before-label">Lifestyle</div>
                        <div class="after-label">Details</div>
                    </div>
                    <div class="hover-indicator">
                        <!-- <i class="fas fa-hand-pointer"></i> Hover to see details -->
                    </div>
                    <div class="card-overlay">
                        <span class="transformation-tag">Spacious Luxury</span>
                        <h3>Premium Sectional Sofa</h3>
                        <p>Versatile, plush seating crafted for comfort and sophisticated living spaces</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Google Reviews Section -->
    <?php include "google-reviews.php" ?>

    <!-- CTA Section -->
    <section class="cta-section" id="contact">
        <div class="container">
            <div class="cta-content">
                <h2 class="slide-up">Upgrade Your Home Today</h2>
                <p class="slide-up">Ready to transform your living space? Our design experts are waiting to help you create the home of your dreams.</p>
               
<div class="phone-number slide-up">
    <a href="tel:+919945689996" class="phone-link">+91 9945689996</a>
</div>
<div class="phone-number slide-up">
    <a href="tel:+919886494432" class="phone-link">+91 9886494432</a>
</div>
               
                <p class="slide-up">Call now for a free consultation and get Exclusive offers!</p>
               
<a href="https://wa.me/919945689996?text=Hi%2C%20I%20would%20like%20to%20schedule%20a%20free%20consultation." 
   target="_blank" 
   class="cta-button-large slide-up"
   style="
       background: linear-gradient(90deg, #25D366, #128C7E); /* Official WhatsApp green gradient */
       color: white;
       padding: 16px 32px;
       border-radius: 50px;
       font-weight: 600;
       font-size: 18px;
       text-decoration: none;
       display: inline-flex;
       align-items: center;
       gap: 12px;
       box-shadow: 0 6px 20px rgba(37, 211, 102, 0.3);
       transition: all 0.3s ease;
   "
   onmouseover="this.style.background='linear-gradient(90deg, #128C7E, #0DA65A)'; this.style.transform='translateY(-3px)'; this.style.boxShadow='0 10px 30px rgba(37,211,102,0.4)'"
   onmouseout="this.style.background='linear-gradient(90deg, #25D366, #128C7E)'; this.style.transform='translateY(0)'; this.style.boxShadow='0 6px 20px rgba(37,211,102,0.3)'">
    <i class="fab fa-whatsapp" style="font-size: 24px;"></i> Schedule Free Consultation
</a>
            </div>
        </div>
    </section>
    
 <?php include "footer.php" ?>
    
<script src="active.js" defer></script>

<?php include "floating-buttons.php" ?>

</body>
</html>