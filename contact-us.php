<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | HomeStyle Interior</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
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
            --gradient-reverse: linear-gradient(135deg, var(--primary-violet), var(--primary-blue));
            --gradient-light: linear-gradient(135deg, var(--light-blue), var(--light-violet));
            --gradient-dark: linear-gradient(135deg, #0d3a6d, #7c2d6d);
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
            padding-top: 80px;
            line-height: 1.6;
            overflow-x: hidden;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Hero Section */
        .hero {
            padding: 150px 0 120px;
            position: relative;
            overflow: hidden;
            background: var(--gradient-dark);
            color: white;
            text-align: center;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background:linear-gradient(135deg,rgba(21,91,165,.7),rgba(174,65,156,.7));;
            background-size: cover;
            background-position: bottom;
            z-index: 1;
        }

    

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-size: 42px;
            margin-bottom: 30px;
            color: white;
            line-height: 1.1;
            font-weight: 800;
            letter-spacing: -2px;
            animation: fadeInUp 1s ease;
            text-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .hero-subtitle {
            font-size: 1.5rem;
            max-width: 700px;
            margin: 0 auto;
            color: rgba(255, 255, 255, 0.9);
            animation: fadeInUp 1s ease 0.3s both;
            font-weight: 300;
            line-height: 1.6;
        }

        .hero-decoration {
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            filter: blur(40px);
            z-index: 1;
            animation: float 20s infinite ease-in-out;
        }

        .decoration-1 {
            top: -100px;
            right: -50px;
            animation-delay: 0s;
            width: 400px;
            height: 400px;
        }

        .decoration-2 {
            bottom: -100px;
            left: -100px;
            animation-delay: 5s;
            width: 350px;
            height: 350px;
        }

        .decoration-3 {
            top: 50%;
            left: 10%;
            width: 200px;
            height: 200px;
            animation-delay: 10s;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            33% { transform: translateY(-30px) rotate(5deg); }
            66% { transform: translateY(30px) rotate(-5deg); }
        }

        /* Main Content */
        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            margin: 100px auto 100px;
            align-items: start;
        }

        .contact-info {
            background: var(--white);
            border-radius: var(--border-radius);
            padding: 50px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .contact-info::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--gradient);
        }

        .contact-info:hover {
            transform: translateY(-15px);
            box-shadow: var(--shadow-hover);
        }

        .contact-info h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: var(--primary-blue);
            position: relative;
            display: inline-block;
        }

        .contact-info h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background: var(--gradient);
            border-radius: 2px;
        }

        .contact-info .subtitle {
            font-size: 1.2rem;
            color: var(--gray);
            margin-bottom: 40px;
            line-height: 1.7;
        }

        .contact-details {
            margin-top: 40px;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 35px;
            padding: 25px;
            border-radius: 15px;
            transition: var(--transition);
            cursor: pointer;
            background: var(--light-gray);
        }

        .contact-item:hover {
            background: var(--light-blue);
            transform: translateX(10px);
        }

        .contact-item:last-child {
            margin-bottom: 0;
        }

        .contact-icon {
            width: 60px;
            height: 60px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 25px;
            font-size: 24px;
            flex-shrink: 0;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .phone-icon {
            background: var(--light-blue);
            color: var(--primary-blue);
        }

        .email-icon {
            background: var(--light-violet);
            color: var(--primary-violet);
        }

        .location-icon {
            background: linear-gradient(135deg, var(--light-blue), var(--light-violet));
            color: var(--secondary-blue);
        }

        .contact-text h3 {
            font-size: 1.3rem;
            margin-bottom: 8px;
            color: var(--dark);
            font-weight: 700;
        }

        .contact-text a {
            color: var(--primary-blue);
            text-decoration: none;
            transition: var(--transition);
            font-weight: 600;
            display: inline-block;
            margin-top: 5px;
        }

        .contact-text a:hover {
            color: var(--primary-violet);
            transform: translateX(5px);
        }

        .contact-text p {
            color: var(--gray);
            margin-top: 5px;
        }

        .hours {
            margin-top: 30px;
            padding: 25px;
            background: var(--gradient-light);
            border-radius: 15px;
        }

        .hours h4 {
            font-size: 1.3rem;
            margin-bottom: 15px;
            color: var(--primary-blue);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .hours p {
            color: var(--gray);
            margin-bottom: 8px;
            display: flex;
            justify-content: space-between;
        }

        .hours p span {
            font-weight: 600;
            color: var(--dark);
        }

        /* Map Section */
        .map-side {
            background: var(--white);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            transition: var(--transition);
            height: 100%;
            overflow: hidden;
            position: relative;
        }

        .map-side:hover {
            transform: translateY(-15px);
            box-shadow: var(--shadow-hover);
        }

        .map-side::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--gradient);
            z-index: 2;
        }

        .map-container {
            height: 100%;
            width: 100%;
            position: relative;
        }

        #google-map {
            height: 100%;
            width: 100%;
            border-radius: var(--border-radius);
            border: none;
        }

        .map-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            color: white;
            padding: 30px;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
        }

        .map-info h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: white;
        }

        .map-info p {
            font-size: 1rem;
            opacity: 0.9;
            margin-bottom: 5px;
        }

        .map-actions {
            display: flex;
            gap: 10px;
        }

        .map-btn {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 10px;
            cursor: pointer;
            transition: var(--transition);
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .map-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-3px);
        }



        /* Responsive Design */
        @media (max-width: 1200px) {
            .container {
                max-width: 1000px;
            }
            
           
        }

        @media (max-width: 992px) {
            .contact-container {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            

            
            .hero h1 {
                font-size: 3.8rem;
            }
            
            .hero {
                padding: 120px 0 80px;
            }
        }

        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                gap: 20px;
            }
            
            nav ul {
                gap: 20px;
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .hero {
                padding: 100px 0 60px;
            }
            
            .hero h1 {
                font-size: 3.2rem;
            }
            
            .hero-subtitle {
                font-size: 1.3rem;
            }
            
            .contact-info, .contact-form {
                padding: 35px 30px;
            }
            
            .contact-item {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .contact-icon {
                margin-bottom: 20px;
            }
            

            
            .map-overlay {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
            }
            
            .map-actions {
                width: 100%;
                justify-content: flex-start;
            }
        }

        @media (max-width: 576px) {
            .hero h1 {
                font-size: 2.8rem;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
            }
            
            .contact-info h2, .map-section h2 {
                font-size: 2rem;
            }
            
            .hero-decoration {
                display: none;
            }
            
            .contact-container {
                margin: 60px auto 60px;
            }
            
            .hero::after {
                height: 100px;
            }
        }

        @media (max-width: 400px) {
            .hero h1 {
                font-size: 2.3rem;
            }
            
            .hero-subtitle {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
  <?php include "header.php" ?>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-decoration decoration-1"></div>
        <div class="hero-decoration decoration-2"></div>
        <div class="hero-decoration decoration-3"></div>
        <div class="container">
            <div class="hero-content">
                <h1>Contact Us</h1>
                <p class="hero-subtitle">Reach out to our design experts and let's create beautiful spaces together. We're here to bring your interior vision to life.</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <div class="container">
        <div class="contact-container">
            <!-- Contact Information -->
            <div class="contact-info" id="contact-info">
                <h2>Connect With Our Team</h2>
                <p class="subtitle">Our design experts are ready to guide you through every step of your interior transformation journey. Reach out to us through any of these channels for personalized assistance.</p>
                
                <div class="contact-details">
                    <div class="contact-item">
                        <div class="contact-icon phone-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Call Our Design Experts</h3>
                            <p><a href="tel:+919945689996"><i class="fas fa-phone"></i> +91 99456 89996</a></p>
                            <p><a href="tel:+919886494432"><i class="fas fa-phone"></i> +91 98864 94432</a></p>
                            <p>Speak directly with our design consultants for immediate assistance.</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon email-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Email Us Your Ideas</h3>
                            <p><a href="mailto:homestyleinterior@gmail.com"><i class="fas fa-envelope"></i> homestyleinterior@gmail.com</a></p>
                            <p>Share your vision, inspiration images, or project details with our team.</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon location-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Visit Our Design Studio</h3>
                            <p><i class="fas fa-map-pin"></i> Shamanur Rd, beside Savitha Kai Ruchi Hotel, SS Layout, Davanagere, Karnataka 577004</p>
                            <p>Experience our design collections firsthand at our flagship showroom.</p>
                        </div>
                    </div>
                </div>
                
                <div class="hours">
                    <h4><i class="far fa-clock"></i> Business Hours</h4>
                    <p>Monday to Friday <span>9:00 AM - 8:00 PM</span></p>
                    <p>Saturday <span>10:00 AM - 7:00 PM</span></p>
                    <p>Sunday <span>By Appointment Only</span></p>
                </div>
            </div>
            
            <!-- Map Section -->
            <div class="map-side">
                <div class="map-container">
                    <iframe 
                        id="google-map"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.521943021024!2d75.90278887457043!3d14.454692080633325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bba257c7c1f91df%3A0xcd41bcc4481d41f4!2sHomestyle%20Interior%20Davangere!5e0!3m2!1sen!2sin!4v1767782303473!5m2!1sen!2sin" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <div class="map-overlay">
                    <div class="map-info">
                        <h3>HomeStyle Interior Studio</h3>
                        <p><i class="fas fa-map-marker-alt"></i> Davanagere, Karnataka 577004</p>
                        <p><i class="far fa-clock"></i> Open today until 8:00 PM</p>
                    </div>
                    <div class="map-actions">
                        <button class="map-btn" id="directionsBtn">
                            <i class="fas fa-directions"></i> Get Directions
                        </button>
                        <button class="map-btn" id="viewLargerBtn">
                            <i class="fas fa-expand-alt"></i> View Larger
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include "footer.php" ?>

    <script>
        // Initialize map controls
        document.addEventListener('DOMContentLoaded', function() {
            // Directions button functionality
            document.getElementById('directionsBtn').addEventListener('click', function() {
                window.open('https://www.google.com/maps/dir//Homestyle+Interior+Davangere,+Shamanur+Rd,+beside+Savitha+Kai+Ruchi+Hotel,+SS+Layout,+Davanagere,+Karnataka+577004/@14.4546921,75.9027889,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3bba257c7c1f91df:0xcd41bcc4481d41f4!2m2!1d75.9027889!2d14.4546921?entry=ttu', '_blank');
            });
            
            // View larger button functionality
            document.getElementById('viewLargerBtn').addEventListener('click', function() {
                window.open('https://www.google.com/maps/place/Homestyle+Interior+Davangere/@14.4546921,75.9027889,17z/data=!3m1!4b1!4m6!3m5!1s0x3bba257c7c1f91df:0xcd41bcc4481d41f4!8m2!3d14.4546921!4d75.9027889!16s%2Fg%2F11v3z_w4pk?entry=ttu', '_blank');
            });
            
            // Add some interactive effects
            document.querySelectorAll('.contact-item').forEach(item => {
                item.addEventListener('mouseenter', function() {
                    const icon = this.querySelector('.contact-icon');
                    icon.style.transform = 'scale(1.1) rotate(5deg)';
                });
                
                item.addEventListener('mouseleave', function() {
                    const icon = this.querySelector('.contact-icon');
                    icon.style.transform = 'scale(1) rotate(0deg)';
                });
            });
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;
                    
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 100,
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            // Add animation to elements when they come into view
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
            document.querySelectorAll('.contact-info, .map-side').forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
                observer.observe(el);
            });
            
            // Add hover effect to map container
            const mapContainer = document.querySelector('.map-container iframe');
            if (mapContainer) {
                mapContainer.style.transition = 'transform 0.3s ease';
                document.querySelector('.map-side').addEventListener('mouseenter', function() {
                    mapContainer.style.transform = 'scale(1.02)';
                });
                
                document.querySelector('.map-side').addEventListener('mouseleave', function() {
                    mapContainer.style.transform = 'scale(1)';
                });
            }
        });
        
        // Add loading effect for hero section
        window.addEventListener('load', function() {
            const heroContent = document.querySelector('.hero-content');
            heroContent.style.opacity = '0';
            heroContent.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                heroContent.style.transition = 'opacity 1s ease, transform 1s ease';
                heroContent.style.opacity = '1';
                heroContent.style.transform = 'translateY(0)';
            }, 300);
        });
    </script>
    
    <?php include "floating-buttons.php" ?>
</body>
</html>