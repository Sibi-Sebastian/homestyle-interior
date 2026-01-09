// Counter Animation System
// Animates numbers from 0 to target value when elements come into view

document.addEventListener('DOMContentLoaded', function() {
    let counterAnimationTriggered = false;
    let counterObserver = null;
    
    // Main counter animation function
    function animateCounters() {
        const statNumbers = document.querySelectorAll('.stat-number[data-count]');
        
        if (statNumbers.length === 0) {
            return;
        }
        
        statNumbers.forEach((stat, index) => {
            const targetValue = stat.getAttribute('data-count');
            const target = parseInt(targetValue);
            
            if (isNaN(target) || target <= 0) {
                return;
            }
            
            // Reset to 0 and make visible
            stat.style.opacity = '1';
            stat.textContent = '0';
            
            // Animation parameters
            const duration = 2500; // 2.5 seconds
            const startTime = performance.now();
            
            function updateCounter(currentTime) {
                const elapsed = currentTime - startTime;
                const progress = Math.min(elapsed / duration, 1);
                
                // Smooth easing function
                const easeOutCubic = 1 - Math.pow(1 - progress, 3);
                const current = Math.floor(target * easeOutCubic);
                
                // Format number with commas for large numbers
                if (target >= 1000) {
                    stat.textContent = current.toLocaleString();
                } else {
                    stat.textContent = current.toString();
                }
                
                if (progress < 1) {
                    requestAnimationFrame(updateCounter);
                } else {
                    // Ensure final value is exact
                    stat.textContent = target >= 1000 ? target.toLocaleString() : target.toString();
                }
            }
            
            // Start animation with staggered delay
            setTimeout(() => {
                requestAnimationFrame(updateCounter);
            }, index * 200); // 200ms delay between each counter
        });
    }
    
    // Trigger animation once
    function triggerCounterAnimation() {
        if (counterAnimationTriggered) {
            return;
        }
        
        counterAnimationTriggered = true;
        
        // Disconnect observer to prevent multiple triggers
        if (counterObserver) {
            counterObserver.disconnect();
            counterObserver = null;
        }
        
        animateCounters();
    }
    
    // Setup Intersection Observer for automatic triggering
    function setupCounterObserver() {
        if (!('IntersectionObserver' in window)) {
            // Fallback for older browsers
            setupScrollListener();
            return;
        }
        
        const statsSection = document.querySelector('.about-stats');
        if (!statsSection) {
            return;
        }
        
        counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && entry.intersectionRatio > 0.1) {
                    triggerCounterAnimation();
                }
            });
        }, {
            threshold: [0.1, 0.3, 0.5],
            rootMargin: '0px 0px -50px 0px'
        });
        
        counterObserver.observe(statsSection);
    }
    
    // Fallback scroll listener for older browsers
    function setupScrollListener() {
        let scrollTimeout;
        
        function checkCounterScrollPosition() {
            if (counterAnimationTriggered) return;
            
            const statsSection = document.querySelector('.about-stats');
            if (!statsSection) return;
            
            const rect = statsSection.getBoundingClientRect();
            const windowHeight = window.innerHeight;
            const triggerPoint = windowHeight * 0.75;
            
            if (rect.top < triggerPoint && rect.bottom > 0) {
                triggerCounterAnimation();
            }
        }
        
        window.addEventListener('scroll', () => {
            clearTimeout(scrollTimeout);
            scrollTimeout = setTimeout(checkCounterScrollPosition, 50);
        }, { passive: true });
        
        // Check immediately in case stats are already visible
        checkCounterScrollPosition();
    }
    
    // Check if stats section is already visible on load
    function checkIfStatsVisible() {
        const statsSection = document.querySelector('.about-stats');
        if (!statsSection) {
            return;
        }
        
        const rect = statsSection.getBoundingClientRect();
        const windowHeight = window.innerHeight;
        
        // If stats section is already in view, trigger after a short delay
        if (rect.top < windowHeight && rect.bottom > 0) {
            setTimeout(triggerCounterAnimation, 500);
        }
    }
    
    // Initialize the counter system
    function initializeCounterSystem() {
        // Check if stats section exists
        const statsSection = document.querySelector('.about-stats');
        if (!statsSection) {
            return;
        }
        
        const statNumbers = document.querySelectorAll('.stat-number[data-count]');
        if (statNumbers.length === 0) {
            return;
        }
        
        // Setup intersection observer
        setupCounterObserver();
        
        // Check if already visible
        setTimeout(checkIfStatsVisible, 100);
        
        // Final fallback - force trigger after 4 seconds if not triggered
        setTimeout(() => {
            if (!counterAnimationTriggered) {
                triggerCounterAnimation();
            }
        }, 4000);
    }
    
    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initializeCounterSystem);
    } else {
        initializeCounterSystem();
    }
});