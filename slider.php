<style>
/* Hero Slider Styles */
.hero-section {
    margin-top: 80px;
    height: 85vh;
    min-height: 650px;
    position: relative;
    overflow: hidden;
    border-radius: 0 0 30px 30px;
}
.hero-slider {
    height: 100%;
    position: relative;
}
.slide {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    visibility: hidden;
    z-index: 1;
    transition: opacity 0.8s ease-in-out, visibility 0.8s ease-in-out;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 80px;
    background-size: cover;
    background-position: center;
}
.slide.active {
    opacity: 1;
    visibility: visible;
    z-index: 2;
}

/* New Hero Slide Colors */
.slide-1 {
    background: linear-gradient(90deg, rgba(32, 49, 28, 0.80) 0%, rgba(67, 75, 64, 0.80) 100%), 
                url('https://images.unsplash.com/photo-1600210492493-0946911123ea?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
    background-size: cover;
    background-position: center;
}

.slide-2 {
    background: linear-gradient(90deg, rgba(0, 0, 0, 0.80) 0%, rgba(0, 0, 0, 0.80) 100%), 
                url('https://images.unsplash.com/photo-1556911220-bff31c812dba?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
    background-size: cover;
    background-position: center;
}

.slide-3 {
    background: linear-gradient(90deg, rgba(6, 40, 87, 0.80) 80%, rgba(6, 40, 87, 0.80) 100%), 
                url('https://images.woodenstreet.de/image/data%2FLooks%2F3.jpg');
    background-size: cover;
    background-position: center;
}

.slide-4 {
    background: linear-gradient(90deg,       rgba(14, 30, 50, 0.85) 0%,   /* Darker Brand Blue */
      rgba(71, 21, 83, 0.8) 80%, /* Darker Violet */
      rgba(95, 29, 76, 0.75) 100% /* Controlled Pink */), 
                url('https://www.theblindssource.com/wp-content/uploads/2019/09/Made-to-measure-blinds.jpg');
    background-size: cover;
    background-position: center;
}

.slide-content {
    max-width: 550px;
    color: white;
    transform: translateX(-50px);
    opacity: 0;
    transition: all 1s ease 0.3s;
    position: relative;
    z-index: 2;
}
.slide.active .slide-content {
    transform: translateX(0);
    opacity: 1;
}

.slide-image {
    width: 500px;
    height: 450px;
    position: relative;
    z-index: 2;
    transform: translateX(50px) scale(0.95);
    opacity: 0;
    transition: all 1s ease 0.5s;
}
.slide.active .slide-image {
    transform: translateX(0) scale(1);
    opacity: 1;
}

.image-container {
    width: 100%;
    height: 100%;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
    transform: perspective(1000px) rotateY(-5deg);
    transition: var(--transition);
}
.slide.active .image-container {
    transform: perspective(1000px) rotateY(0deg);
}
.image-container:hover {
    transform: perspective(1000px) rotateY(0deg) scale(1.02);
    box-shadow: 0 30px 60px rgba(0, 0, 0, 0.4);
}

.image-container img {
    width: 100%;
    height: 100%;
    object-fit: initial;
    transition: transform 0.8s ease;
}
.image-container:hover img {
    transform: scale(1.08);
}

.image-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(transparent, rgba(0, 0, 0, 0.9));
    color: white;
    padding: 25px;
    transform: translateY(100%);
    transition: transform 0.6s ease;
}
.image-container:hover .image-overlay {
    transform: translateY(0);
}

.image-caption {
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 5px;
}
.image-price {
    font-size: 16px;
    opacity: 0.9;
    font-weight: 500;
}

.slide-tag {
    background-color: rgba(255, 255, 255, 0.25);
    color: white;
    padding: 10px 22px;
    border-radius: 30px;
    display: inline-block;
    font-size: 14px;
    font-weight: 700;
    letter-spacing: 1.5px;
    margin-bottom: 25px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.4);
    text-transform: uppercase;
}
.slide-title {
    font-size: 58px;
    font-weight: 800;
    line-height: 1.1;
    margin-bottom: 20px;
    text-shadow: 2px 2px 15px rgba(0, 0, 0, 0.4);
}
.slide-description {
    font-size: 18px;
    line-height: 1.6;
    margin-bottom: 35px;
    opacity: 0.95;
    max-width: 550px;
    text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3);
}
.hero-buttons {
    display: flex;
    gap: 15px;
}
.btn-primary, .btn-secondary {
    padding: 15px 32px;
    border-radius: 4px;
    font-weight: 600;
    font-size: 16px;
    cursor: pointer;
    transition: var(--transition);
    border: none;
}
.btn-primary {
    background: linear-gradient(90deg, var(--blue), var(--violet));
    color: white;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}
.btn-primary:hover {
    background: linear-gradient(90deg, var(--violet), var(--pink));
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
}
.btn-secondary {
    background-color: transparent;
    color: white;
    border: 2px solid rgba(255, 255, 255, 0.4);
    backdrop-filter: blur(5px);
}
.btn-secondary:hover {
    background-color: rgba(255, 255, 255, 0.15);
    border-color: rgba(255, 255, 255, 0.8);
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(255, 255, 255, 0.1);
}

/* Slider Controls - CENTER ALIGNED */
.slider-controls {
    position: absolute;
    bottom: 40px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 15px;
    align-items: center;
    z-index: 3;
}
.slider-dots {
    display: flex;
    gap: 10px;
}
.dot {
    width: 14px;
    height: 14px;
    border-radius: 50%;
    background-color: rgba(255, 255, 255, 0.4);
    cursor: pointer;
    transition: var(--transition);
    border: 2px solid rgba(255, 255, 255, 0.3);
}
.dot.active {
    background-color: white;
    transform: scale(1.4);
    border-color: white;
}
/* Arrows on sides, vertically centered, with inward offset */
.slider-arrows {
    position: absolute;
    top: 50%;
    left: 0;
    width: 100%;
    transform: translateY(-50%);
    display: flex;
    justify-content: space-between;
    padding: 0 20px;        /* ← This controls the offset from edges */
    pointer-events: none;
    z-index: 10;
    box-sizing: border-box;
}

.slider-arrows button {
    pointer-events: auto;
    background-color: rgba(255, 255, 255, 0.2);
    border: none;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    color: white;
    font-size: 18px;
    cursor: pointer;
    transition: all 0.4s ease;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.slider-arrows button:hover {
    background-color: rgba(255, 255, 255, 0.4);
    transform: scale(1.15);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
}

/* Responsive Styles for Hero */
@media (max-width: 1200px) {
    .slide {
        padding: 0 40px;
    }
    .slide-image {
        width: 450px;
        height: 400px;
    }
}

@media (max-width: 992px) {
    .slide {
        flex-direction: column;
        justify-content: center;
        text-align: center;
        padding-top: 60px;
    }
    .slide-content {
        max-width: 100%;
        text-align: center;
        margin-top: 10px;
        margin-bottom: 40px;
    }
    .slide-image {
        width: 500px;
        height: 350px;
    }
    .image-container {
        transform: perspective(1000px) rotateX(-5deg);
    }
    .slide.active .image-container {
        transform: perspective(1000px) rotateX(0deg);
    }
    .hero-buttons {
        justify-content: center;
    }
    .slider-controls {
        bottom: 30px;
    }
}

@media (max-width: 768px) {
    .slide {
        padding: 0 20px;
        padding-top: 60px;
    }
    .slide-title {
        font-size: 42px;
    }
    .slide-image {
        width: 400px;
        height: 300px;
    }
    .slider-controls {
        bottom: 20px;
        flex-direction: column;
        gap: 15px;
    }
    .slider-arrows {
        margin-left: 0;
    }
    .hero-buttons {
        flex-direction: grid;
        width: 100%;
    }
    .btn-primary, .btn-secondary {
        width: 100%;
        text-align: center;
    }
}

@media (max-width: 480px) {
    .slide-image {
        width: 320px;
        height: 240px;
    }
    .slide-title {
        font-size: 36px;
    }
    .slide-description {
        font-size: 16px;
    }
    .image-overlay {
        padding: 15px;
    }
    .image-caption {
        font-size: 18px;
    }
    .image-price {
        font-size: 14px;
    }
    .slider-controls {
        bottom: 15px;
    }
}

/* side buttons */
@media (max-width: 1200px) {
    .slider-arrows {
        padding: 0 30px;
    }
}

@media (max-width: 992px) {
    .slider-arrows {
        padding: 0 25px;
    }
    .slider-arrows button {
        width: 48px;
        height: 48px;
        font-size: 17px;
    }
}

@media (max-width: 768px) {
    .slider-arrows {
        padding: 0 20px;
    }
    .slider-arrows button {
        width: 45px;
        height: 45px;
        font-size: 16px;
    }
}

@media (max-width: 480px) {
    .slider-arrows button {
        width: 40px;
        height: 40px;
        font-size: 14px;
    }
}
</style>

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

<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('🎠 DOM Content Loaded - Starting carousel initialization...');
    
    // Single initialization attempt
    setTimeout(initializeCarousel, 100);
    
    function initializeCarousel() {
        console.log('🎠 Attempting to initialize carousel...');
        
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');
        const prevBtn = document.getElementById('prev-slide');
        const nextBtn = document.getElementById('next-slide');
        const heroSlider = document.querySelector('.hero-slider');
        
        console.log('🎠 Carousel elements check:', {
            slides: slides.length,
            dots: dots.length,
            prevBtn: !!prevBtn,
            nextBtn: !!nextBtn,
            heroSlider: !!heroSlider
        });
        
        if (slides.length > 0 && dots.length > 0 && prevBtn && nextBtn && heroSlider) {
            console.log('✅ All carousel elements found, setting up...');
            setupCarousel(slides, dots, prevBtn, nextBtn, heroSlider);
        } else {
            console.warn('⚠️ Some carousel elements missing');
        }
    }
    
    function setupCarousel(slides, dots, prevBtn, nextBtn, heroSlider) {
        let currentSlide = 0;
        let slideInterval;
        let isTransitioning = false;
        
        console.log('🎠 Setting up carousel with', slides.length, 'slides');
        
        // Initialize the slider
        function initSlider() {
            console.log('🎠 Setting up initial slide state...');
            
            // Clear all active classes first
            slides.forEach((slide, index) => {
                slide.classList.remove('active');
            });
            
            dots.forEach((dot, index) => {
                dot.classList.remove('active');
            });
            
            // Activate first slide
            if (slides[0]) {
                slides[0].classList.add('active');
            }
            
            if (dots[0]) {
                dots[0].classList.add('active');
            }
            
            console.log('✅ First slide and dot activated');
            startSlideInterval();
        }
        
        // Start automatic slide rotation
        function startSlideInterval() {
            clearInterval(slideInterval);
            slideInterval = setInterval(() => {
                if (!isTransitioning) {
                    const nextSlide = (currentSlide + 1) % slides.length;
                    console.log('🔄 Auto-advancing to slide:', nextSlide);
                    goToSlide(nextSlide);
                }
            }, 5000); // 5 second intervals
            console.log('⏰ Auto-advance interval started');
        }
        
        // Go to specific slide with smooth transition
        function goToSlide(slideIndex) {
            if (slideIndex < 0 || slideIndex >= slides.length || isTransitioning || slideIndex === currentSlide) {
                return;
            }
            
            isTransitioning = true;
            console.log(`🎠 Transitioning from slide ${currentSlide} to slide ${slideIndex}`);
            
            // Remove active classes from current slide
            if (slides[currentSlide]) {
                slides[currentSlide].classList.remove('active');
            }
            
            if (dots[currentSlide]) {
                dots[currentSlide].classList.remove('active');
            }
            
            // Update current slide
            currentSlide = slideIndex;
            
            // Activate new slide
            if (slides[currentSlide]) {
                slides[currentSlide].classList.add('active');
            }
            
            if (dots[currentSlide]) {
                dots[currentSlide].classList.add('active');
            }
            
            // Allow next transition after animation completes
            setTimeout(() => {
                isTransitioning = false;
            }, 800); // Match CSS transition duration
            
            console.log('✅ Slide transition completed to slide:', currentSlide);
        }
        
        // Event listeners for dots
        dots.forEach((dot, index) => {
            dot.addEventListener('click', (e) => {
                e.preventDefault();
                console.log('🎯 Dot clicked:', index);
                clearInterval(slideInterval);
                goToSlide(index);
                setTimeout(startSlideInterval, 100);
            });
        });
        
        // Event listener for previous button
        prevBtn.addEventListener('click', (e) => {
            e.preventDefault();
            console.log('⬅️ Previous button clicked');
            clearInterval(slideInterval);
            const prevSlide = currentSlide - 1 < 0 ? slides.length - 1 : currentSlide - 1;
            goToSlide(prevSlide);
            setTimeout(startSlideInterval, 100);
        });
        
        // Event listener for next button
        nextBtn.addEventListener('click', (e) => {
            e.preventDefault();
            console.log('➡️ Next button clicked');
            clearInterval(slideInterval);
            const nextSlide = (currentSlide + 1) % slides.length;
            goToSlide(nextSlide);
            setTimeout(startSlideInterval, 100);
        });
        
        // Pause on hover
        heroSlider.addEventListener('mouseenter', () => {
            console.log('⏸️ Pausing carousel on hover');
            clearInterval(slideInterval);
        });
        
        heroSlider.addEventListener('mouseleave', () => {
            console.log('▶️ Resuming carousel after hover');
            startSlideInterval();
        });
        
        // Touch/swipe support for mobile
        let touchStartX = 0;
        let touchEndX = 0;
        
        heroSlider.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        });
        
        heroSlider.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        });
        
        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = touchStartX - touchEndX;
            
            if (Math.abs(diff) > swipeThreshold) {
                clearInterval(slideInterval);
                
                if (diff > 0) {
                    // Swipe left - next slide
                    const nextSlide = (currentSlide + 1) % slides.length;
                    goToSlide(nextSlide);
                } else {
                    // Swipe right - previous slide
                    const prevSlide = currentSlide - 1 < 0 ? slides.length - 1 : currentSlide - 1;
                    goToSlide(prevSlide);
                }
                
                setTimeout(startSlideInterval, 100);
            }
        }
        
        // Initialize the carousel
        initSlider();
        console.log('🎠 Carousel setup completed successfully!');
        
        // Mark as successfully initialized
        window.carouselInitialized = true;
    }
});
</script>