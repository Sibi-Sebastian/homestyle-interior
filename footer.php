     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homestyle Interiors | Premium Home Solutions</title>

    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" as="style">
    <link rel="stylesheet" href="test.css">
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
    
    
    <!-- Footer Section -->
<footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <a href="#" class="footer-logo">
                        <img src="images/homestyle_logo.webp" alt="Homestyle Interiors Logo" class="footer-logo-img" loading="lazy">
                    </a>
                    <p>Creating beautiful living spaces since 2000. We provide premium home interior products that combine quality, style, and functionality.</p>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/homestyle.davanagere.3/?_rdr"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/homestyledavanagere/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UCjqweSdAvK8eyg9WofpbGvg"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
               
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-home"></i><a href="#">Home</a></li>
                        <li><i class="fas fa-info-circle"></i><a href="about.php">About Us</a></li>
                        <li><i class="fas fa-box-open"></i><a href="#products">Products</a></li>
                        <li><i class="fas fa-utensils"></i><a href="#kitchen">Kitchen</a></li>
                        <li><i class="fas fa-phone-alt"></i><a href="#contact">Contact</a></li>
                    </ul>
                </div>
               
                <div class="footer-column">
                    <h3>Categories</h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-bed"></i><a href="#">Mattresses</a></li>
                        <li><i class="fas fa-utensil-spoon"></i><a href="#">Kitchen Appliances</a></li>
                        <li><i class="fas fa-window-maximize"></i><a href="#">Curtains</a></li>
                        <li><i class="fas fa-window-maximize"></i><a href="#">Blinds</a></li>
                        <li><i class="fas fa-couch"></i><a href="#">Furniture</a></li>

                    </ul>
                </div>
               
                <div class="footer-column">
                    <h3>Contact Us</h3>
                    <ul class="footer-links">
  <li>
    <i class="fas fa-phone"></i>
    <a href="tel:+919945689996" class="contact-link">+91 9945689996</a>
 </li>
 <li>
    <i class="fas fa-phone"></i>
    <a href="tel:+919886494432" class="contact-link">+91 9886494432</a>
 </li>
 <li>
    <i class="fas fa-envelope"></i>
    <a href="mailto:homestyleinterior@gmail.com" class="contact-link">homestyleinterior@gmail.com</a>
 </li>
                        <li><i class="fas fa-clock"></i> Mon-Sat: 10AM - 8PM</li>
                        <li><i class="fas fa-map-marker-alt"></i> Shamanur Rd, beside Savitha Kai Ruchi Hotel, SS Layout, Davanagere, Karnataka 577004</li>
                    </ul>
                </div>
            </div>
           
            <div class="copyright">
                © 2025 Homestyle Interiors. All rights reserved. | Premium Home Interior Solutions <br class="mobile-break">Designed by 
                <a href="https://tackled.co.in" target="_blank" rel="noopener"
                   style="color:#fec33b;font-weight:600;text-decoration:none;">
                  Tackle-D
                </a>
            </div>
            

        </div>
</footer>

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

                /* Footer */
        footer {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.75) 0%, rgba(222, 212, 212, 0.75) 100%);
            color: black;
            padding: 70px 0 30px;
            position: relative;
            z-index: 1;
        }
        .footer-logo {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
            text-decoration: none;
        }
        .footer-logo-img {
            height: 90px;
            width: auto;
            transition: var(--transition);
        }
        .footer-logo:hover .footer-logo-img {
            transform: scale(1.05);
        }
        .footer-logo-text {
            font-size: 24px;
            font-weight: 700;
            color: white;
        }
        .footer-logo-text span {
            color: var(--pink);
        }
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 50px;
            margin-bottom: 50px;
        }
        .footer-column h3 {
            font-size: 22px;
            margin-bottom: 25px;
            color: black;
            position: relative;
            padding-bottom: 10px;
        }
        .footer-column h3:after {
            content: '';
            position: absolute;
            width: 50px;
            height: 2px;
            background: linear-gradient(90deg, #044da2, var(--white));
            bottom: 0;
            left: 0;
        }
        .footer-column p {
            color: rgba(0, 0, 0, 0.8);
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .footer-links {
            list-style: none;
        }
        .footer-links li {
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .footer-links i {
            color: #044da2;
            width: 20px;
        }
        .footer-links a {
            color: rgba(0, 0, 0, 0.8);
            text-decoration: none;
            transition: var(--transition);
            flex: 1;
        }
        .footer-links a:hover {
            color: var(--pink);
            padding-left: 5px;
        }
        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        .social-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(0, 0, 0, 1);
            border-radius: 50%;
            color: white;
            text-decoration: none;
            transition: var(--transition);
        }
        .social-icons a:hover {
            background: linear-gradient(135deg, var(--violet), var(--pink));
            transform: translateY(-5px);
        }
        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.3);
            color: rgba(0, 0, 0, 0.7);
            font-size: 15px;
        }
        
        /* Mobile line break control */
        .mobile-break {
            display: none;
        }
        
        .mobile-break {
            display: none;
        }
        

        /* Responsive Styles */
        @media (max-width: 1100px) {
            .slide {
                padding: 0 40px;
            }
           
            .about-container {
                grid-template-columns: 1fr;
                gap: 50px;
            }
           
            .about-image {
                order: -1;
            }
           
            .cta-content h2 {
                font-size: 46px;
            }
           
            .phone-number {
                font-size: 40px;
            }
        }
        @media (max-width: 992px) {
            nav {
                display: none;
            }
           
            .slide {
                padding: 0 20px;
            }
           
            .slide-title {
                font-size: 42px;
            }
           
            .hero-buttons {
                flex-direction: row;
                width: 100%;
                display: grid;
            }
           
            .btn-primary, .btn-secondary {
                width: 100%;
                text-align: center;
            }
           
            .section-title h2 {
                font-size: 32px;
            }
           
            .categories {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }
           
            .about-content h2 {
                font-size: 36px;
            }
           
            .about-stats {
                flex-direction: column;
                gap: 30px;
            }
           
            .cta-content h2 {
                font-size: 36px;
            }
           
            .phone-number {
                font-size: 32px;
                padding: 15px 25px;
            }
           
            .kitchen-header h2 {
                font-size: 36px;
            }
           
            .logo-img {
                height: 50px;
            }
           
            .logo-text {
                font-size: 24px;
            }

            .testimonial-arrow {
                position: static;
                transform: none;
            }
        }
        @media (max-width: 768px) {
            .slide-title {
                font-size: 36px;
            }
           
            .slide-image {
                width: 400px;
                height: 300px;
            }
           
            .section-title h2 {
                font-size: 28px;
            }
           
            .categories {
                grid-template-columns: 1fr;
            }
           
            .cta-content h2 {
                font-size: 28px;
            }
           
            .phone-number {
                font-size: 26px;
                padding: 10px 20px;
            }
           
            .cta-button-large {
                padding: 15px 30px;
                font-size: 18px;
            }
            
            /* Show line break on mobile */
            .mobile-break {
                display: inline;
            }
            
            /* Hide designer credit from main copyright on mobile */
            .copyright {
                font-size: 13px;
            }
        }
        @media (max-width: 480px) {
            .logo-img {
                height: 45px;
            }
           
            .logo-text {
                font-size: 20px;
            }
           
            .slide-image {
                width: 320px;
                height: 240px;
            }
           
            .slide-title {
                font-size: 32px;
            }
           
            .slide-description {
                font-size: 16px;
            }
           
            .section-title h2 {
                font-size: 24px;
            }
           
            .cta-content h2 {
                font-size: 24px;
            }
           
            .phone-number {
                font-size: 22px;
                padding: 8px 15px;
            }
           
            .cta-button-large {
                padding: 12px 25px;
                font-size: 16px;
            }
        }

        
</style>