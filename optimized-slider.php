<!-- Optimized Hero Slider Section -->
<section class="hero-section">
    <div class="hero-slider">
        <!-- Slide 1 -->
        <div class="slide slide-3 active">
            <div class="slide-content">
                <div class="slide-tag">SLEEP WELL</div>
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
                    <img src="images/hero2.png" alt="Premium Mattress" width="500" height="450" loading="eager">
                    <div class="image-overlay">
                        <div class="image-caption">Orthopaedic Mattress</div>
                        <div class="image-price">Superior Spinal Support</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="slide slide-2">
            <div class="slide-content">
                <div class="slide-tag">KITCHEN ESSENTIALS</div>
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
                    <img src="images/hero3.png" alt="Modern Kitchen Appliances" width="500" height="450" loading="lazy">
                    <div class="image-overlay">
                        <div class="image-caption">Smart Induction Hob</div>
                        <div class="image-price">Energy Efficient Cooking</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="slide slide-4">
            <div class="slide-content">
                <div class="slide-tag">LUXURY CURTAINS & BLINDS</div>
                <h1 class="slide-title">Dress Your Windows with Elegance</h1>
                <p class="slide-description">
                    Explore our curated collection of premium curtains and blinds, thoughtfully designed to balance light, privacy, and style—bringing warmth and refinement to every living space
                </p>
                <div class="hero-buttons">
                    <button class="btn-primary">Explore Curtains</button>
                    <button class="btn-secondary">View Collection</button>
                </div>
            </div>
            <div class="slide-image desktop-only">
                <div class="image-container">
                    <img src="https://www.intoblinds.com.au/wp-content/uploads/2024/07/Blinds-and-Curtains.jpg" alt="Premium Curtains & Blinds" width="500" height="450" loading="lazy">
                    <div class="image-overlay">
                        <div class="image-caption">Elegant Curtains & Blinds</div>
                        <div class="image-price">Light, Privacy & Style Perfectly Balanced</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 4 -->
        <div class="slide slide-1">
            <div class="slide-content">
                <div class="slide-tag">PREMIUM COLLECTION</div>
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
                    <img src="images/hero1.png" alt="Luxury Furniture Collection" width="500" height="450" loading="lazy">
                    <div class="image-overlay">
                        <div class="image-caption">Luxury Velvet Sofa</div>
                        <div class="image-price">Premium Comfort & Style</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slider Controls -->
        <div class="slider-arrows">
            <button id="prev-slide" aria-label="Previous slide"><i class="fas fa-chevron-left"></i></button>
            <button id="next-slide" aria-label="Next slide"><i class="fas fa-chevron-right"></i></button>
        </div>

        <div class="slider-controls">
            <div class="slider-dots">
                <div class="dot active" data-slide="0" aria-label="Slide 1"></div>
                <div class="dot" data-slide="1" aria-label="Slide 2"></div>
                <div class="dot" data-slide="2" aria-label="Slide 3"></div>
                <div class="dot" data-slide="3" aria-label="Slide 4"></div>
            </div>
        </div>
    </div>
</section>

<style>
/* Optimized Hero Slider Styles */
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

.slide-1 {
    background: linear-gradient(90deg, rgba(32, 49, 28, 0.80) 0%, rgba(67, 75, 64, 0.80) 100%), 
                url('https://images.unsplash.com/photo-1600210492493-0946911123ea?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
}

.slide-2 {
    background: linear-gradient(90deg, rgba(0, 0, 0, 0.80) 0%, rgba(0, 0, 0, 0.80) 100%), 
                url('https://images.unsplash.com/photo-1556911220-bff31c812dba?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
}

.slide-3 {
    background: linear-gradient(90deg, rgba(6, 40, 87, 0.80) 80%, rgba(6, 40, 87, 0.80) 100%), 
                url('https://images.woodenstreet.de/image/data%2FLooks%2F3.jpg');
}

.slide-4 {
    background: linear-gradient(90deg, rgba(14, 30, 50, 0.85) 0%, rgba(71, 21, 83, 0.8) 80%, rgba(95, 29, 76, 0.75) 100%), 
                url('https://www.theblindssource.com/wp-content/uploads/2019/09/Made-to-measure-blinds.jpg');
}

.slide-content {
    max-width: 550px;
    color: white;
    transform: translateX(-50px);
    opacity: 0;
    transition: all 1s ease 0.3s;
}

.slide.active .slide-content {
    transform: translateX(0);
    opacity: 1;
}

.slide-image {
    width: 500px;
    height: 450px;
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
    transition: var(--transition);
}

.image-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.8s ease;
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

.btn-secondary {
    background-color: transparent;
    color: white;
    border: 2px solid rgba(255, 255, 255, 0.4);
    backdrop-filter: blur(5px);
}

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

.slider-arrows {
    position: absolute;
    top: 50%;
    left: 0;
    width: 100%;
    transform: translateY(-50%);
    display: flex;
    justify-content: space-between;
    padding: 0 20px;
    pointer-events: none;
    z-index: 10;
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
}

/* Responsive Styles */
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
        margin-bottom: 40px;
    }
    
    .slide-image {
        width: 500px;
        height: 350px;
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
    
    .hero-buttons {
        flex-direction: column;
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
}
</style>

<script>
// Optimized Carousel JavaScript
document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    const prevBtn = document.getElementById('prev-slide');
    const nextBtn = document.getElementById('next-slide');
    
    if (slides.length === 0 || dots.length === 0) return;
    
    let currentSlide = 0;
    let slideInterval;
    let isTransitioning = false;
    
    function goToSlide(slideIndex) {
        if (slideIndex < 0 || slideIndex >= slides.length || isTransitioning || slideIndex === currentSlide) {
            return;
        }
        
        isTransitioning = true;
        
        // Remove active classes
        slides[currentSlide].classList.remove('active');
        dots[currentSlide].classList.remove('active');
        
        // Update current slide
        currentSlide = slideIndex;
        
        // Add active classes
        slides[currentSlide].classList.add('active');
        dots[currentSlide].classList.add('active');
        
        // Allow next transition
        setTimeout(() => {
            isTransitioning = false;
        }, 800);
    }
    
    function startSlideInterval() {
        clearInterval(slideInterval);
        slideInterval = setInterval(() => {
            if (!isTransitioning) {
                const nextSlide = (currentSlide + 1) % slides.length;
                goToSlide(nextSlide);
            }
        }, 5000);
    }
    
    // Event listeners
    dots.forEach((dot, index) => {
        dot.addEventListener('click', (e) => {
            e.preventDefault();
            clearInterval(slideInterval);
            goToSlide(index);
            setTimeout(startSlideInterval, 100);
        });
    });
    
    if (prevBtn) {
        prevBtn.addEventListener('click', (e) => {
            e.preventDefault();
            clearInterval(slideInterval);
            const prevSlide = currentSlide - 1 < 0 ? slides.length - 1 : currentSlide - 1;
            goToSlide(prevSlide);
            setTimeout(startSlideInterval, 100);
        });
    }
    
    if (nextBtn) {
        nextBtn.addEventListener('click', (e) => {
            e.preventDefault();
            clearInterval(slideInterval);
            const nextSlide = (currentSlide + 1) % slides.length;
            goToSlide(nextSlide);
            setTimeout(startSlideInterval, 100);
        });
    }
    
    // Touch support
    let touchStartX = 0;
    let touchEndX = 0;
    
    const heroSlider = document.querySelector('.hero-slider');
    if (heroSlider) {
        heroSlider.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });
        
        heroSlider.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            const diff = touchStartX - touchEndX;
            
            if (Math.abs(diff) > 50) {
                clearInterval(slideInterval);
                
                if (diff > 0) {
                    const nextSlide = (currentSlide + 1) % slides.length;
                    goToSlide(nextSlide);
                } else {
                    const prevSlide = currentSlide - 1 < 0 ? slides.length - 1 : currentSlide - 1;
                    goToSlide(prevSlide);
                }
                
                setTimeout(startSlideInterval, 100);
            }
        }, { passive: true });
        
        // Pause on hover
        heroSlider.addEventListener('mouseenter', () => {
            clearInterval(slideInterval);
        });
        
        heroSlider.addEventListener('mouseleave', () => {
            startSlideInterval();
        });
    }
    
    // Initialize
    startSlideInterval();
});
</script>