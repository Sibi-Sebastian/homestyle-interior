// Slider functionality removed to avoid conflicts - now handled in slider.php

document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu functionality
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const nav = document.getElementById('mainNav');
    const menuOverlay = document.getElementById('menuOverlay');
    const dropdowns = document.querySelectorAll('.nav-item > .nav-link');
   
    if (mobileMenuToggle && nav && menuOverlay) {
        // Toggle mobile menu
        mobileMenuToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            nav.classList.toggle('active');
            menuOverlay.classList.toggle('active');
            this.querySelector('i').classList.toggle('fa-bars');
            this.querySelector('i').classList.toggle('fa-times');
        });
       
        // Close menu when clicking overlay
        menuOverlay.addEventListener('click', function() {
            nav.classList.remove('active');
            this.classList.remove('active');
            mobileMenuToggle.querySelector('i').classList.remove('fa-times');
            mobileMenuToggle.querySelector('i').classList.add('fa-bars');
           
            // Close all dropdowns
            document.querySelectorAll('.dropdown.active').forEach(dropdown => {
                dropdown.classList.remove('active');
                dropdown.previousElementSibling.querySelector('.dropdown-icon').classList.remove('fa-chevron-up');
                dropdown.previousElementSibling.querySelector('.dropdown-icon').classList.add('fa-chevron-down');
            });
        });
    }
   
    // Mobile dropdown functionality
    dropdowns.forEach(dropdownLink => {
        dropdownLink.addEventListener('click', function(e) {
            if (window.innerWidth <= 992) {
                e.preventDefault();
                e.stopPropagation();
                const dropdown = this.nextElementSibling;
                const icon = this.querySelector('.dropdown-icon');
               
                if (dropdown && icon) {
                    // Close other dropdowns
                    document.querySelectorAll('.dropdown.active').forEach(activeDropdown => {
                        if (activeDropdown !== dropdown) {
                            activeDropdown.classList.remove('active');
                            activeDropdown.previousElementSibling.querySelector('.dropdown-icon').classList.remove('fa-chevron-up');
                            activeDropdown.previousElementSibling.querySelector('.dropdown-icon').classList.add('fa-chevron-down');
                        }
                    });
                   
                    // Toggle current dropdown
                    dropdown.classList.toggle('active');
                   
                    // Toggle icon
                    if (dropdown.classList.contains('active')) {
                        icon.classList.remove('fa-chevron-down');
                        icon.classList.add('fa-chevron-up');
                    } else {
                        icon.classList.remove('fa-chevron-up');
                        icon.classList.add('fa-chevron-down');
                    }
                }
            }
        });
    });
   
    // Close mobile menu when clicking outside
    document.addEventListener('click', function(e) {
        if (window.innerWidth <= 992 && nav && mobileMenuToggle && menuOverlay) {
            if (!e.target.closest('#mainNav') && !e.target.closest('#mobileMenuToggle')) {
                nav.classList.remove('active');
                menuOverlay.classList.remove('active');
                mobileMenuToggle.querySelector('i').classList.remove('fa-times');
                mobileMenuToggle.querySelector('i').classList.add('fa-bars');
               
                // Close all dropdowns
                document.querySelectorAll('.dropdown.active').forEach(dropdown => {
                    dropdown.classList.remove('active');
                    dropdown.previousElementSibling.querySelector('.dropdown-icon').classList.remove('fa-chevron-up');
                    dropdown.previousElementSibling.querySelector('.dropdown-icon').classList.add('fa-chevron-down');
                });
            }
        }
    });
   
    // Highlight active nav link on scroll
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.nav-link:not(.nav-link[href="#"])');
   
    function highlightNavLink() {
        let scrollPosition = window.scrollY + 100;
       
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            const sectionId = section.getAttribute('id');
           
            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${sectionId}`) {
                        link.classList.add('active');
                    }
                });
            }
        });
    }
   
    window.addEventListener('scroll', highlightNavLink);
});

// Product redirects for search functionality
const productRedirects = {
    "sofa": "sofa.php",
    "sofas": "sofa.php",
    "furniture": "sofa.php",
    "mattress": "ortho.php",
    "mattresses": "ortho.php",
    "ortho": "ortho.php",
    "orthopedic": "ortho.php",
    "curtain": "curtains.php",
    "curtains": "curtains.php",
    "blind": "curtains.php",
    "blinds": "curtains.php",
    "chimney": "chimneys.php",
    "chimneys": "chimneys.php",
    "faucet": "sinks.php",
    "faucets": "sinks.php",
    "tap": "sinks.php",
    "taps": "sinks.php",
    "sink": "sinks.php",
    "sinks": "sinks.php",
    "hob": "hobtops.php",
    "hobtop": "hobtops.php",
    "hobtops": "hobtops.php"
};

// Search Modal Elements
const searchModal = document.getElementById('searchModal');
const searchToggle = document.getElementById('mobileSearchToggle');
const searchInput = document.getElementById('searchInput');
const searchButton = document.getElementById('searchButton');
const closeSearch = document.getElementById('closeSearch');

// Open modal
if (searchToggle && searchModal) {
    searchToggle.addEventListener('click', (e) => {
        e.preventDefault();
        e.stopPropagation();
        console.log('Search modal opening...'); // Debug log
        searchModal.classList.add('active');
        document.body.classList.add('modal-open');
        setTimeout(() => {
            if (searchInput) {
                searchInput.focus();
                console.log('Search input focused'); // Debug log
            }
        }, 300);
    });
} else {
    console.log('Search elements not found:', { searchToggle: !!searchToggle, searchModal: !!searchModal });
}

// Close modal
if (closeSearch && searchModal) {
    closeSearch.addEventListener('click', () => {
        searchModal.classList.remove('active');
        document.body.classList.remove('modal-open');
        clearSuggestions();
    });
}

if (searchModal) {
    searchModal.addEventListener('click', (e) => {
        if (e.target === searchModal) {
            searchModal.classList.remove('active');
            document.body.classList.remove('modal-open');
            clearSuggestions();
        }
    });
}

document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && searchModal && searchModal.classList.contains('active')) {
        searchModal.classList.remove('active');
        document.body.classList.remove('modal-open');
        clearSuggestions();
    }
});

// Live Suggestions (Click = Direct Redirect)
searchInput.addEventListener('input', function() {
    const query = this.value.trim().toLowerCase();
    clearSuggestions();
    if (!query) return;

    const matches = Object.keys(productRedirects).filter(term => 
        term.includes(query)
    );

    if (matches.length > 0) {
        matches.forEach(term => {
            const div = document.createElement('div');
            div.className = 'live-suggestion-item';
            div.innerHTML = `<i class="fas fa-search"></i> ${highlightMatch(term.charAt(0).toUpperCase() + term.slice(1), query)}`;
            div.addEventListener('click', () => {
                window.location.href = productRedirects[term];
            });
            liveSuggestions.appendChild(div);
        });
        liveSuggestions.style.display = 'block';
    }
});

function highlightMatch(text, query) {
    const regex = new RegExp(`(${query})`, 'gi');
    return text.replace(regex, '<strong>$1</strong>');
}

function clearSuggestions() {
    liveSuggestions.innerHTML = '';
    liveSuggestions.style.display = 'none';
}

// Main Search: On Button Click or Enter
function performSearch() {
    let query = searchInput.value.trim().toLowerCase();

    if (!query) {
        searchInput.focus();
        return;
    }

    // Check for exact or partial match
    let redirected = false;
    for (let key in productRedirects) {
        if (key.includes(query) || query.includes(key.split(' ')[0])) {
            window.location.href = productRedirects[key];
            redirected = true;
            break;
        }
    }

    // Fallback: If no match found → Go to general search results
    if (!redirected) {
        window.location.href = `search-results.php?query=${encodeURIComponent(searchInput.value)}`;
    }

    // Close modal
    if (searchModal) {
        searchModal.classList.remove('active');
        document.body.classList.remove('modal-open');
    }
    clearSuggestions();
}

// Search button and input event listeners
if (searchButton) {
    searchButton.addEventListener('click', performSearch);
}

if (searchInput) {
    searchInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            performSearch();
        }
    });
}

// Suggestion tags click
document.addEventListener('click', (e) => {
    if (e.target.classList.contains('suggestion-tag')) {
        const searchTerm = e.target.getAttribute('data-search');
        if (searchInput) {
            searchInput.value = searchTerm;
            performSearch();
        }
    }
});

// Trigger search
searchSubmit.addEventListener('click', performSearch);
searchInput.addEventListener('keypress', (e) => {
    if (e.key === 'Enter') {
        performSearch();
    }
});
            // Book Consultation button
            // const bookButton = document.querySelector('.cta-button');
            // bookButton.addEventListener('click', function() {
            //     const name = prompt('Enter your name:');
            //     if (name) {
            //         const phone = prompt('Enter your phone number:');
            //         if (phone) {
            //             alert(`Thank you ${name}!\n\nWe have received your consultation request for phone: ${phone}\nOur design expert will contact you within 24 hours.`);
            //         }
            //     }
            // });
           
            // Mobile menu functionality continues here...
           
            // Initialize animation classes
            document.querySelectorAll('.slide-up, .rotate-in').forEach(el => {
                el.classList.remove('hidden');
            });
           
            // Scroll animations
            const slideUpElements = document.querySelectorAll('.slide-up');
            const rotateInElements = document.querySelectorAll('.rotate-in');
           
            function checkScroll() {
                // Slide up animation
                slideUpElements.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;
                   
                    if (elementTop < windowHeight - 100) {
                        element.classList.remove('hidden');
                    }
                });
               
                // Rotate in animation
                rotateInElements.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;
                   
                    if (elementTop < windowHeight - 100) {
                        element.classList.remove('hidden');
                    }
                });
               
                // Fade in animations for elements on scroll
                const fadeElements = document.querySelectorAll('.fade-in');
                fadeElements.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;
                   
                    if (elementTop < windowHeight - 100) {
                        element.style.opacity = '1';
                        element.style.transform = 'translateY(0)';
                    }
                });
            }
           
            // Check on load and scroll
            window.addEventListener('load', checkScroll);
            window.addEventListener('scroll', checkScroll);
           
            // Trigger animations immediately on load
            setTimeout(checkScroll, 100);
           
            // Header scroll effect
            window.addEventListener('scroll', function() {
                const header = document.querySelector('header');
                if (window.scrollY > 50) {
                    header.style.padding = '8px 0';
                    header.style.boxShadow = '0 5px 20px rgba(0, 0, 0, 0.1)';
                } else {
                    header.style.padding = '10px 0';
                    header.style.boxShadow = '0 5px 20px rgba(0, 0, 0, 0.05)';
                }
               
                checkScroll();
            });
           
            // Enhanced Counter Animation System - ROBUST VERSION
            let counterAnimationTriggered = false;
            let counterObserver = null;
            
            function animateCounters() {
                console.log('🎯 Starting counter animation...');
                
                const statNumbers = document.querySelectorAll('.stat-number[data-count]');
                console.log(`📊 Found ${statNumbers.length} stat numbers with data-count attribute`);
                
                if (statNumbers.length === 0) {
                    console.error('❌ No stat numbers with data-count attribute found!');
                    // Try to find them with a different selector as fallback
                    const allStatNumbers = document.querySelectorAll('.stat-number');
                    console.log(`🔍 Found ${allStatNumbers.length} total stat numbers`);
                    return;
                }
               
                statNumbers.forEach((stat, index) => {
                    const targetValue = stat.getAttribute('data-count');
                    const target = parseInt(targetValue);
                    
                    console.log(`🎲 Stat ${index + 1}: "${targetValue}" → ${target}`);
                    
                    if (isNaN(target) || target <= 0) {
                        console.error(`❌ Invalid target for stat ${index + 1}:`, targetValue);
                        return;
                    }
                    
                    // Ensure element is visible and reset to 0
                    stat.style.opacity = '1';
                    stat.textContent = '0';
                    
                    // Animation parameters
                    const duration = 2500; // Slightly longer for better effect
                    const startTime = performance.now();
                    
                    function updateCounter(currentTime) {
                        const elapsed = currentTime - startTime;
                        const progress = Math.min(elapsed / duration, 1);
                        
                        // Enhanced easing function for smoother animation
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
                            console.log(`✅ Completed animation for stat ${index + 1}: ${target}`);
                        }
                    }
                    
                    // Start animation with a small delay for each counter
                    setTimeout(() => {
                        requestAnimationFrame(updateCounter);
                    }, index * 200); // Stagger animations by 200ms
                });
                
                console.log('🚀 All counter animations started!');
            }
            
            function triggerCounterAnimation() {
                if (counterAnimationTriggered) {
                    console.log('⚠️ Counter animation already triggered, skipping...');
                    return;
                }
                
                console.log('🎬 Triggering counter animation...');
                counterAnimationTriggered = true;
                
                // Disconnect observer to prevent multiple triggers
                if (counterObserver) {
                    counterObserver.disconnect();
                    counterObserver = null;
                }
                
                animateCounters();
            }
            
            // Method 1: Enhanced Intersection Observer
            function setupCounterObserver() {
                if (!('IntersectionObserver' in window)) {
                    console.log('⚠️ IntersectionObserver not supported, using fallback');
                    return false;
                }
                
                const statsSection = document.querySelector('.about-stats');
                if (!statsSection) {
                    console.error('❌ Stats section (.about-stats) not found!');
                    return false;
                }
                
                console.log('👀 Setting up IntersectionObserver for stats section');
                
                counterObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting && entry.intersectionRatio > 0.1) {
                            console.log('👁️ Stats section is visible! Intersection ratio:', entry.intersectionRatio);
                            triggerCounterAnimation();
                        }
                    });
                }, {
                    threshold: [0.1, 0.3, 0.5], // Multiple thresholds for better detection
                    rootMargin: '0px 0px -50px 0px' // Trigger when 50px from bottom of viewport
                });
                
                counterObserver.observe(statsSection);
                console.log('✅ IntersectionObserver setup complete');
                return true;
            }
            
            // Method 2: Enhanced scroll-based detection
            function checkCounterScrollPosition() {
                if (counterAnimationTriggered) return;
                
                const statsSection = document.querySelector('.about-stats');
                if (!statsSection) return;
                
                const rect = statsSection.getBoundingClientRect();
                const windowHeight = window.innerHeight;
                const triggerPoint = windowHeight * 0.75; // Trigger when 75% down the viewport
                
                if (rect.top < triggerPoint && rect.bottom > 0) {
                    console.log('📜 Stats section visible via scroll detection');
                    triggerCounterAnimation();
                }
            }
            
            // Method 3: Immediate check for already visible elements
            function checkIfStatsVisible() {
                const statsSection = document.querySelector('.about-stats');
                if (!statsSection) {
                    console.log('⚠️ Stats section not found in immediate check');
                    return;
                }
                
                const rect = statsSection.getBoundingClientRect();
                const windowHeight = window.innerHeight;
                
                console.log('📏 Stats section position check:', {
                    top: rect.top,
                    bottom: rect.bottom,
                    windowHeight: windowHeight,
                    isVisible: rect.top < windowHeight && rect.bottom > 0
                });
                
                // If stats section is already in view, trigger immediately
                if (rect.top < windowHeight && rect.bottom > 0) {
                    console.log('👁️ Stats section already visible on load');
                    setTimeout(triggerCounterAnimation, 500); // Small delay for smooth effect
                } else {
                    console.log('👁️ Stats section not yet visible, waiting for scroll/intersection');
                }
            }
            
            // Initialize counter animation system
            function initializeCounterSystem() {
                console.log('🔧 Initializing enhanced counter animation system...');
                console.log('DOM ready state:', document.readyState);
                console.log('Window loaded:', document.readyState === 'complete');
                
                // Check if stats section exists
                const statsSection = document.querySelector('.about-stats');
                console.log('Stats section found during init:', !!statsSection);
                
                if (statsSection) {
                    const statNumbers = document.querySelectorAll('.stat-number[data-count]');
                    console.log('Stat numbers found during init:', statNumbers.length);
                    
                    if (statNumbers.length === 0) {
                        console.error('❌ No stat numbers with data-count found during initialization!');
                        // Try alternative selectors
                        const allStats = document.querySelectorAll('.stat-number');
                        console.log('Total stat numbers found:', allStats.length);
                    }
                }
                
                // Method 1: Try IntersectionObserver first
                const observerSetup = setupCounterObserver();
                
                // Method 2: Add scroll listener as backup
                if (!observerSetup || !counterAnimationTriggered) {
                    console.log('📜 Adding scroll listener as backup');
                    let scrollTimeout;
                    window.addEventListener('scroll', () => {
                        clearTimeout(scrollTimeout);
                        scrollTimeout = setTimeout(checkCounterScrollPosition, 50);
                    }, { passive: true });
                }
                
                // Method 3: Check if already visible
                setTimeout(checkIfStatsVisible, 100);
                
                // Method 4: Force trigger after delay (final fallback)
                setTimeout(() => {
                    if (!counterAnimationTriggered) {
                        console.log('⏰ Force triggering counter animation after 4 seconds');
                        triggerCounterAnimation();
                    }
                }, 4000);
                
                console.log('✅ Counter animation system initialized');
            }
            
            // Test button functionality
            function setupTestButton() {
                setTimeout(() => {
                    const testBtn = document.getElementById('testCounterBtn');
                    const debugBtn = document.getElementById('debugCounterBtn');
                    const forceBtn = document.getElementById('forceCounterBtn');
                    
                    if (testBtn) {
                        testBtn.addEventListener('click', () => {
                            console.log('🧪 Manual test button clicked - resetting animation');
                            counterAnimationTriggered = false;
                            
                            // Reset all counters to 0
                            const statNumbers = document.querySelectorAll('.stat-number[data-count]');
                            statNumbers.forEach(stat => {
                                stat.textContent = '0';
                            });
                            
                            // Trigger animation after short delay
                            setTimeout(triggerCounterAnimation, 100);
                        });
                        console.log('🧪 Test button event listener attached');
                    }
                    
                    if (debugBtn) {
                        debugBtn.addEventListener('click', () => {
                            console.log('🔍 DEBUG: Counter Animation Status');
                            console.log('counterAnimationTriggered:', counterAnimationTriggered);
                            
                            const statsSection = document.querySelector('.about-stats');
                            console.log('Stats section found:', !!statsSection);
                            
                            if (statsSection) {
                                const rect = statsSection.getBoundingClientRect();
                                console.log('Stats section position:', {
                                    top: rect.top,
                                    bottom: rect.bottom,
                                    left: rect.left,
                                    right: rect.right,
                                    width: rect.width,
                                    height: rect.height
                                });
                                console.log('Window height:', window.innerHeight);
                                console.log('Is visible:', rect.top < window.innerHeight && rect.bottom > 0);
                            }
                            
                            const statNumbers = document.querySelectorAll('.stat-number[data-count]');
                            console.log('Stat numbers found:', statNumbers.length);
                            
                            statNumbers.forEach((stat, index) => {
                                console.log(`Stat ${index + 1}:`, {
                                    element: stat,
                                    dataCount: stat.getAttribute('data-count'),
                                    currentText: stat.textContent,
                                    visible: stat.offsetParent !== null
                                });
                            });
                            
                            console.log('IntersectionObserver supported:', 'IntersectionObserver' in window);
                            console.log('Counter observer active:', !!counterObserver);
                        });
                        console.log('🔍 Debug button event listener attached');
                    }
                    
                    if (forceBtn) {
                        forceBtn.addEventListener('click', () => {
                            console.log('🚀 Force button clicked - triggering animation immediately');
                            counterAnimationTriggered = false; // Reset flag
                            animateCounters(); // Direct call to animation function
                        });
                        console.log('🚀 Force button event listener attached');
                    }
                }, 1000);
            }
            
            // Initialize everything when DOM is ready
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', () => {
                    initializeCounterSystem();
                    setupTestButton();
                });
            } else {
                initializeCounterSystem();
                setupTestButton();
            }
           
            // CTA button animation
            const ctaButton = document.querySelector('.cta-button');
            ctaButton.addEventListener('mouseenter', function() {
                this.classList.add('float-animation');
            });
           
            ctaButton.addEventListener('mouseleave', function() {
                this.classList.remove('float-animation');
            });
           
            // CTA large button hover effect
            const ctaButtonLarge = document.querySelector('.cta-button-large');
            if (ctaButtonLarge) {
                ctaButtonLarge.addEventListener('mouseenter', function() {
                    this.classList.add('float-animation');
                });
               
                ctaButtonLarge.addEventListener('mouseleave', function() {
                    this.classList.remove('float-animation');
                });
            }

            // Transformation Gallery Hover Effects for Mobile
            const transformationCards = document.querySelectorAll('.transformation-card');
            
            function isTouchDevice() {
                return (('ontouchstart' in window) ||
                    (navigator.maxTouchPoints > 0) ||
                    (navigator.msMaxTouchPoints > 0));
            }
            
            if (isTouchDevice()) {
                // Update hover indicator for touch devices
                const hoverIndicators = document.querySelectorAll('.hover-indicator');
                hoverIndicators.forEach(indicator => {
                    indicator.innerHTML = '<i class="fas fa-hand-point-up"></i> Tap to see details';
                });
                
                // Add tap functionality for mobile
                transformationCards.forEach(card => {
                    card.addEventListener('click', function(e) {
                        // On mobile, toggle the transformation
                        this.classList.toggle('transformed');
                        
                        if (this.classList.contains('transformed')) {
                            this.querySelector('.before-image').style.opacity = '0';
                            this.querySelector('.after-image').style.opacity = '1';
                            this.querySelector('.before-label').style.opacity = '0';
                            this.querySelector('.after-label').style.opacity = '1';
                        } else {
                            this.querySelector('.before-image').style.opacity = '1';
                            this.querySelector('.after-image').style.opacity = '0';
                            this.querySelector('.before-label').style.opacity = '1';
                            this.querySelector('.after-label').style.opacity = '0';
                        }
                    });
                });
            }
            
            // Enhanced hover effects for desktop
            transformationCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    // Add subtle scale effect to the whole card
                    this.style.transform = 'translateY(-10px) scale(1.02)';
                    
                    // Show overlay immediately on hover
                    const overlay = this.querySelector('.card-overlay');
                    if (overlay) {
                        overlay.style.transitionDelay = '0.1s';
                    }
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(-10px) scale(1)';
                    
                    // Reset overlay delay
                    const overlay = this.querySelector('.card-overlay');
                    if (overlay) {
                        overlay.style.transitionDelay = '0s';
                    }
                });
            });
            
            // "See More" button functionality for product cards
            // const seeMoreButtons = document.querySelectorAll('.product-card .see-more-btn');
            // seeMoreButtons.forEach(button => {
            //     button.addEventListener('click', function(e) {
            //         e.preventDefault();
            //         const productType = this.getAttribute('data-product');
                    
            //         // Show detailed product information
            //         switch(productType) {
            //             case 'sofa':
            //                 alert('Luxury Velvet Sofa\n\nFeatures:\n• Premium velvet upholstery\n• Solid wood frame\n• High-density foam cushioning\n• Available in 5 colors\n• 10-year warranty\n• Free installation');
            //                 break;
            //             case 'induction':
            //                 alert('Smart Induction Hob\n\nFeatures:\n• Touch control panel\n• 7 power levels\n• Child lock safety feature\n• Auto shut-off\n• Energy efficient\n• Easy to clean');
            //                 break;
            //             case 'curtains':
            //                 alert('Silk Blackout Curtains\n\nFeatures:\n• 100% premium silk fabric\n• Thermal insulation lining\n• Complete blackout capability\n• Noise reduction\n• Available in various sizes\n• Custom measurements available');
            //                 break;
            //             case 'mattress':
            //                 alert('Orthopedic Memory Foam Mattress\n\nFeatures:\n• Advanced memory foam technology\n• Orthopedic support system\n• Temperature regulating\n• Hypoallergenic\n• 15-year warranty\n• Free delivery and setup');
            //                 break;
            //             case 'blinds':
            //                 alert('Wood Blinds\n\nFeatures:\n• Natural wood slats\n• UV protection coating\n• Easy tilt mechanism\n• Custom sizing available\n• Child safety features\n• 5-year warranty');
            //                 break;
            //             case 'chimney':
            //                 alert('Stuttgurt Island Chimney\n\nFeatures:\n• Auto-clean technology\n• 1200 m³/hr suction power\n• LED lighting\n• Touch controls\n• Baffle filter system\n• 2-year warranty');
            //                 break;
            //             case 'faucet':
            //                 alert('ALA 01507 Kitchen Faucet\n\nFeatures:\n• Pull-out spray head\n• Ceramic cartridge\n• Corrosion-resistant finish\n• Single lever control\n• Easy installation\n• 5-year warranty');
            //                 break;
            //             case 'sink':
            //                 alert('PVD Collection Kitchen Sink\n\nFeatures:\n• 304 stainless steel\n• PVD coating for durability\n• Scratch-resistant surface\n• Soundproof undercoating\n• Multiple configurations\n• 10-year warranty');
            //                 break;
            //             default:
            //                 alert('Viewing product details...');
            //         }
            //     });
            // });

// Back to Top Button Functionality
document.addEventListener('DOMContentLoaded', function() {
    const backToTopBtn = document.getElementById('backToTop');
    
    if (backToTopBtn) {
        console.log('Back to top button found'); // Debug log
        
        // Show/hide button based on scroll position
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopBtn.classList.add('show');
            } else {
                backToTopBtn.classList.remove('show');
            }
        });
        
        // Smooth scroll to top when clicked
        backToTopBtn.addEventListener('click', function(e) {
            e.preventDefault();
            console.log('Back to top clicked'); // Debug log
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    } else {
        console.log('Back to top button not found'); // Debug log
    }
});