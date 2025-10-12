// Enhanced Prestasi Page Initialization
// This script should be loaded after prestasi.js

(function() {
    'use strict';
    
    // Configuration
    const CONFIG = {
        animationDuration: 1000,
        debounceDelay: 300,
        intersectionThreshold: 0.1,
        mobileBreakpoint: 768,
        enableDebugMode: window.location.hash === '#debug'
    };
    
    // Initialize AOS (Animate On Scroll)
    function initializeAOS() {
        if (typeof AOS === 'undefined') {
            console.warn('AOS library not loaded');
            return;
        }
        
        AOS.init({
            duration: CONFIG.animationDuration,
            easing: 'ease-out-cubic',
            once: true,
            offset: 120,
            delay: 0,
            anchorPlacement: 'top-bottom',
            mirror: false,
            disable: function() {
                return window.innerWidth < CONFIG.mobileBreakpoint;
            }
        });
        
        // Refresh AOS when content changes
        document.addEventListener('prestasiContentUpdated', function() {
            AOS.refresh();
        });
        
        if (CONFIG.enableDebugMode) {
            console.log('AOS initialized successfully');
        }
    }
    
    // Smooth scrolling for navigation
    function initializeSmoothScrolling() {
        const links = document.querySelectorAll('a[href^="#"]');
        
        links.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                
                // Skip empty or just hash links
                if (href === '#' || href === '') return;
                
                e.preventDefault();
                
                const targetId = href.substring(1);
                const targetElement = document.getElementById(targetId);
                
                if (targetElement) {
                    const headerHeight = document.querySelector('header')?.offsetHeight || 80;
                    const elementPosition = targetElement.offsetTop;
                    const offsetPosition = elementPosition - headerHeight;
                    
                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                    
                    // Update URL without triggering scroll
                    history.pushState(null, null, href);
                }
            });
        });
    }
    
    // Parallax effects
    function initializeParallax() {
        const heroSection = document.querySelector('.prestasi-hero');
        if (!heroSection) return;
        
        let ticking = false;
        
        function updateParallax() {
            const scrolled = window.pageYOffset;
            const heroHeight = heroSection.offsetHeight;
            
            // Only apply parallax when hero is visible
            if (scrolled < heroHeight) {
                const parallaxSpeed = 0.5;
                heroSection.style.transform = `translateY(${scrolled * parallaxSpeed}px)`;
            }
            
            ticking = false;
        }
        
        function requestParallaxUpdate() {
            if (!ticking) {
                requestAnimationFrame(updateParallax);
                ticking = true;
            }
        }
        
        // Use passive listener for better performance
        window.addEventListener('scroll', requestParallaxUpdate, { passive: true });
        
        if (CONFIG.enableDebugMode) {
            console.log('Parallax effects initialized');
        }
    }
    
    // Touch gesture support for mobile
    function initializeTouchGestures() {
        if (!('ontouchstart' in window)) return;
        
        const cards = document.querySelectorAll('.prestasi-card');
        
        cards.forEach(card => {
            let touchStartY = 0;
            let touchStartTime = 0;
            let touchMoved = false;
            
            card.addEventListener('touchstart', function(e) {
                touchStartY = e.touches[0].clientY;
                touchStartTime = Date.now();
                touchMoved = false;
                
                // Add touch feedback
                this.style.transform = 'scale(0.98)';
            }, { passive: true });
            
            card.addEventListener('touchmove', function(e) {
                const touchMoveY = e.touches[0].clientY;
                const moveDistance = Math.abs(touchMoveY - touchStartY);
                
                if (moveDistance > 10) {
                    touchMoved = true;
                    // Remove touch feedback on move
                    this.style.transform = '';
                }
            }, { passive: true });
            
            card.addEventListener('touchend', function(e) {
                // Remove touch feedback
                this.style.transform = '';
                
                if (touchMoved) return;
                
                const touchEndTime = Date.now();
                const touchDuration = touchEndTime - touchStartTime;
                
                // Simulate click if touch was quick and didn't move
                if (touchDuration < 500) {
                    this.click();
                }
            });
        });
    }
    
    // Intersection Observer for progressive loading
    function initializeProgressiveLoading() {
        const observerOptions = {
            threshold: CONFIG.intersectionThreshold,
            rootMargin: '0px 0px 50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    
                    // Add animation class
                    element.classList.add('animate-in');
                    
                    // Load image if it has data-src
                    const img = element.querySelector('img[data-src]');
                    if (img) {
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                    }
                    
                    // Stop observing this element
                    observer.unobserve(element);
                }
            });
        }, observerOptions);
        
        // Observe all cards and stats
        document.querySelectorAll('.prestasi-card, .stat-item').forEach(element => {
            observer.observe(element);
        });
    }
    
    // Dark mode toggle (if dark mode support exists)
    function initializeDarkMode() {
        const darkModeToggle = document.querySelector('[data-theme-toggle]');
        if (!darkModeToggle) return;
        
        // Check for saved theme preference
        const savedTheme = localStorage.getItem('theme');
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        
        // Apply saved theme or system preference
        if (savedTheme) {
            document.documentElement.setAttribute('data-theme', savedTheme);
        } else if (prefersDark) {
            document.documentElement.setAttribute('data-theme', 'dark');
        }
        
        // Toggle event
        darkModeToggle.addEventListener('click', function() {
            const currentTheme = document.documentElement.getAttribute('data-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            
            document.documentElement.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            
            // Update button state
            this.setAttribute('aria-pressed', newTheme === 'dark');
        });
        
        // Listen for system theme changes
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
            if (!localStorage.getItem('theme')) {
                document.documentElement.setAttribute('data-theme', e.matches ? 'dark' : 'light');
            }
        });
    }
    
    // Progressive Web App installation
    function initializePWA() {
        let deferredPrompt = null;
        
        // Listen for install prompt
        window.addEventListener('beforeinstallprompt', (e) => {
            e.preventDefault();
            deferredPrompt = e;
            showInstallButton();
        });
        
        function showInstallButton() {
            // Check if install button already exists
            if (document.querySelector('.pwa-install-btn')) return;
            
            const installButton = document.createElement('button');
            installButton.className = 'pwa-install-btn';
            installButton.innerHTML = `
                <i class="fas fa-download" aria-hidden="true"></i>
                <span>Install App</span>
            `;
            installButton.setAttribute('aria-label', 'Install this app');
            
            // Style the button
            Object.assign(installButton.style, {
                position: 'fixed',
                bottom: '20px',
                right: '20px',
                background: 'var(--primary-color)',
                color: 'white',
                border: 'none',
                padding: '12px 20px',
                borderRadius: '25px',
                cursor: 'pointer',
                boxShadow: 'var(--shadow-lg)',
                zIndex: '1000',
                display: 'flex',
                alignItems: 'center',
                gap: '8px',
                fontWeight: '500',
                fontSize: '14px',
                transition: 'var(--transition)',
                fontFamily: 'inherit'
            });
            
            // Add hover effect
            installButton.addEventListener('mouseenter', () => {
                installButton.style.transform = 'translateY(-2px)';
                installButton.style.boxShadow = 'var(--shadow-xl)';
            });
            
            installButton.addEventListener('mouseleave', () => {
                installButton.style.transform = 'translateY(0)';
                installButton.style.boxShadow = 'var(--shadow-lg)';
            });
            
            // Install event
            installButton.addEventListener('click', async () => {
                if (!deferredPrompt) return;
                
                deferredPrompt.prompt();
                const { outcome } = await deferredPrompt.userChoice;
                
                if (outcome === 'accepted') {
                    installButton.remove();
                    console.log('PWA installed successfully');
                }
                
                deferredPrompt = null;
            });
            
            document.body.appendChild(installButton);
        }
        
        // Handle successful installation
        window.addEventListener('appinstalled', () => {
            const installButton = document.querySelector('.pwa-install-btn');
            if (installButton) {
                installButton.remove();
            }
            console.log('PWA installed successfully');
        });
    }
    
    // Performance monitoring
    function initializePerformanceMonitoring() {
        if (!CONFIG.enableDebugMode) return;
        
        // Monitor Core Web Vitals
        if ('PerformanceObserver' in window) {
            // Largest Contentful Paint
            new PerformanceObserver((entryList) => {
                const entries = entryList.getEntries();
                const lastEntry = entries[entries.length - 1];
                console.log('LCP:', lastEntry.startTime);
            }).observe({ entryTypes: ['largest-contentful-paint'] });
            
            // First Input Delay
            new PerformanceObserver((entryList) => {
                const entries = entryList.getEntries();
                entries.forEach((entry) => {
                    console.log('FID:', entry.processingStart - entry.startTime);
                });
            }).observe({ entryTypes: ['first-input'] });
            
            // Cumulative Layout Shift
            let clsValue = 0;
            new PerformanceObserver((entryList) => {
                for (const entry of entryList.getEntries()) {
                    if (!entry.hadRecentInput) {
                        clsValue += entry.value;
                        console.log('CLS:', clsValue);
                    }
                }
            }).observe({ entryTypes: ['layout-shift'] });
        }
        
        // Monitor page load time
        window.addEventListener('load', () => {
            setTimeout(() => {
                const perfData = performance.getEntriesByType('navigation')[0];
                console.log('Page Load Time:', perfData.loadEventEnd - perfData.fetchStart, 'ms');
            }, 0);
        });
    }
    
    // Error handling and reporting
    function initializeErrorHandling() {
        window.addEventListener('error', (e) => {
            console.error('JavaScript Error:', {
                message: e.message,
                filename: e.filename,
                lineno: e.lineno,
                colno: e.colno,
                error: e.error
            });
            
            // You can send errors to your logging service here
        });
        
        window.addEventListener('unhandledrejection', (e) => {
            console.error('Unhandled Promise Rejection:', e.reason);
            
            // You can send errors to your logging service here
        });
    }
    
    // Accessibility enhancements
    function initializeA11yEnhancements() {
        // Announce filter changes to screen readers
        const filterButtons = document.querySelectorAll('.filter-btn');
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                const filterName = this.textContent.trim();
                announceToScreenReader(`Filter changed to ${filterName}`);
            });
        });
        
        // Focus management for modal
        let lastFocusedElement = null;
        
        document.addEventListener('modalOpened', () => {
            lastFocusedElement = document.activeElement;
            const modal = document.getElementById('achievementModal');
            const focusableElements = modal.querySelectorAll(
                'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
            );
            if (focusableElements.length > 0) {
                focusableElements[0].focus();
            }
        });
        
        document.addEventListener('modalClosed', () => {
            if (lastFocusedElement) {
                lastFocusedElement.focus();
                lastFocusedElement = null;
            }
        });
        
        // Add keyboard navigation hints
        addKeyboardHints();
    }
    
    function announceToScreenReader(message) {
        const announcement = document.createElement('div');
        announcement.setAttribute('aria-live', 'polite');
        announcement.setAttribute('aria-atomic', 'true');
        announcement.classList.add('sr-only');
        announcement.textContent = message;
        
        document.body.appendChild(announcement);
        
        setTimeout(() => {
            document.body.removeChild(announcement);
        }, 1000);
    }
    
    function addKeyboardHints() {
        const cards = document.querySelectorAll('.prestasi-card');
        cards.forEach(card => {
            card.setAttribute('title', 'Press Enter or Space to open details');
        });
    }
    
    // Initialize everything when DOM is ready
    function initialize() {
        try {
            initializeAOS();
            initializeSmoothScrolling();
            initializeParallax();
            initializeTouchGestures();
            initializeProgressiveLoading();
            initializeDarkMode();
            initializePWA();
            initializePerformanceMonitoring();
            initializeErrorHandling();
            initializeA11yEnhancements();
            
            // Dispatch custom event when initialization is complete
            document.dispatchEvent(new CustomEvent('prestasiPageEnhanced'));
            
            if (CONFIG.enableDebugMode) {
                console.log('All enhancements initialized successfully');
            }
        } catch (error) {
            console.error('Error during initialization:', error);
        }
    }
    
    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initialize);
    } else {
        initialize();
    }
    
    // Export for debugging
    if (CONFIG.enableDebugMode) {
        window.PrestasiPageEnhancements = {
            CONFIG,
            reinitialize: initialize
        };
    }
    
})();