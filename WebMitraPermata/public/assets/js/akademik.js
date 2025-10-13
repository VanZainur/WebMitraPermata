// ====================================
// Premium Akademik Page JavaScript
// Interactive Features & Animations
// ====================================

document.addEventListener('DOMContentLoaded', function() {
    
    // Counter Animation for Stats
    function animateCounter(element, target, duration = 2000) {
        let startTime = null;
        const startValue = 0;
        
        function updateCounter(currentTime) {
            if (!startTime) startTime = currentTime;
            const progress = Math.min((currentTime - startTime) / duration, 1);
            
            // Easing function for smooth animation
            const easeOutQuart = 1 - Math.pow(1 - progress, 4);
            const currentValue = Math.floor(easeOutQuart * (target - startValue) + startValue);
            
            element.textContent = currentValue;
            
            if (progress < 1) {
                requestAnimationFrame(updateCounter);
            } else {
                element.textContent = target;
            }
        }
        
        requestAnimationFrame(updateCounter);
    }
    
    // Intersection Observer for triggering counter animation
    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const statNumbers = entry.target.querySelectorAll('.stat-number');
                statNumbers.forEach(statNumber => {
                    const target = parseInt(statNumber.getAttribute('data-target'));
                    animateCounter(statNumber, target);
                });
                statsObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.3 });
    
    const statsContainer = document.querySelector('.stats-container');
    if (statsContainer) {
        statsObserver.observe(statsContainer);
    }
    
    // Parallax Effect for Background Circles
    let ticking = false;
    
    function updateParallax() {
        const scrolled = window.pageYOffset;
        const circles = document.querySelectorAll('.circle');
        
        circles.forEach((circle, index) => {
            const speed = (index + 1) * 0.05;
            const yPos = -(scrolled * speed);
            circle.style.transform = `translate3d(0, ${yPos}px, 0)`;
        });
        
        ticking = false;
    }
    
    window.addEventListener('scroll', function() {
        if (!ticking) {
            window.requestAnimationFrame(updateParallax);
            ticking = true;
        }
    });
    
    // Card Hover 3D Tilt Effect
    const cards = document.querySelectorAll('.akademik-card');
    
    cards.forEach(card => {
        card.addEventListener('mousemove', handleCardTilt);
        card.addEventListener('mouseleave', resetCardTilt);
    });
    
    function handleCardTilt(e) {
        const card = e.currentTarget;
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
        
        const rotateX = (y - centerY) / 20;
        const rotateY = (centerX - x) / 20;
        
        card.style.transform = `
            perspective(1000px)
            rotateX(${rotateX}deg)
            rotateY(${rotateY}deg)
            translateY(-12px)
            scale3d(1.02, 1.02, 1.02)
        `;
    }
    
    function resetCardTilt(e) {
        const card = e.currentTarget;
        card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) translateY(0) scale3d(1, 1, 1)';
    }
    
    // Smooth Scroll for CTA Button
    const ctaButton = document.querySelector('.cta-button');
    if (ctaButton) {
        ctaButton.addEventListener('click', function(e) {
            // Add ripple effect
            const ripple = document.createElement('span');
            ripple.classList.add('ripple');
            this.appendChild(ripple);
            
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.style.width = ripple.style.height = size + 'px';
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            
            setTimeout(() => ripple.remove(), 600);
        });
    }
    
    // Add CSS for ripple effect dynamically
    const style = document.createElement('style');
    style.textContent = `
        .cta-button {
            position: relative;
            overflow: hidden;
        }
        
        .ripple {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            transform: scale(0);
            animation: ripple-animation 0.6s ease-out;
            pointer-events: none;
        }
        
        @keyframes ripple-animation {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
    `;
    document.head.appendChild(style);
    
    // Lazy Loading Images with Fade-in Effect
    const images = document.querySelectorAll('.card-image img');
    
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.style.opacity = '0';
                img.style.transition = 'opacity 0.6s ease-in-out';
                
                img.addEventListener('load', function() {
                    this.style.opacity = '1';
                });
                
                // Trigger load if already cached
                if (img.complete) {
                    img.style.opacity = '1';
                }
                
                imageObserver.unobserve(img);
            }
        });
    }, { threshold: 0.1 });
    
    images.forEach(img => imageObserver.observe(img));
    
    // Add stagger animation delay for cards on scroll
    const cardObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                entry.target.style.animationDelay = `${index * 0.1}s`;
                entry.target.classList.add('animate-in');
                cardObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });
    
    cards.forEach(card => cardObserver.observe(card));
    
    // Magnetic Effect for Cards (subtle attraction to cursor)
    cards.forEach(card => {
        card.addEventListener('mousemove', function(e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            
            const moveX = x * 0.05;
            const moveY = y * 0.05;
            
            this.style.transition = 'transform 0.1s ease-out';
            this.style.transform = `translate(${moveX}px, ${moveY}px)`;
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transition = 'transform 0.4s ease';
            this.style.transform = 'translate(0, 0)';
        });
    });
    
    // Feature Tags Animation on Hover
    const featureTags = document.querySelectorAll('.feature-tag');
    
    featureTags.forEach((tag, index) => {
        tag.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.1) translateY(-2px)';
            this.style.transition = 'all 0.3s ease';
        });
        
        tag.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1) translateY(0)';
        });
    });
    
    // Dynamic Background Color Change on Scroll
    let lastScrollTop = 0;
    const container = document.querySelector('.akademik-container');
    
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const scrollPercent = scrollTop / (document.documentElement.scrollHeight - window.innerHeight);
        
        // Subtle gradient shift
        if (container) {
            const hue = 158 + (scrollPercent * 10); // Shift green hue slightly
            container.style.background = `linear-gradient(135deg, 
                hsl(${hue}, 71%, 49%) 0%, 
                hsl(${hue}, 94%, 43%) 50%, 
                hsl(${hue}, 92%, 37%) 100%)`;
        }
        
        lastScrollTop = scrollTop;
    }, { passive: true });
    
    // Add hover sound effect (optional - commented out by default)
    /*
    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            // You can add audio feedback here if desired
            // const audio = new Audio('path/to/hover-sound.mp3');
            // audio.volume = 0.1;
            // audio.play();
        });
    });
    */
    
    // Smooth reveal for CTA Section
    const ctaSection = document.querySelector('.cta-section');
    
    if (ctaSection) {
        const ctaObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '0';
                    entry.target.style.transform = 'translateY(30px)';
                    
                    setTimeout(() => {
                        entry.target.style.transition = 'all 0.8s cubic-bezier(0.4, 0, 0.2, 1)';
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, 100);
                    
                    ctaObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.2 });
        
        ctaObserver.observe(ctaSection);
    }
    
    // Performance: Reduce animations on low-end devices
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
    
    if (prefersReducedMotion.matches) {
        // Disable complex animations for accessibility
        document.querySelectorAll('.circle').forEach(circle => {
            circle.style.animation = 'none';
        });
    }
    
    // Add loading state management
    window.addEventListener('load', function() {
        document.body.classList.add('page-loaded');
        
        // Trigger any delayed animations
        setTimeout(() => {
            const allCards = document.querySelectorAll('.akademik-card');
            allCards.forEach((card, index) => {
                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 100);
            });
        }, 200);
    });
    
    // Console Easter Egg (fun touch for developers)
    console.log('%c🎓 Akademik Page Loaded Successfully! ', 
        'background: #10b981; color: white; padding: 10px 20px; border-radius: 5px; font-size: 14px; font-weight: bold;');
    console.log('%cDeveloped with ❤️ for Premium Education', 
        'color: #059669; font-size: 12px; font-style: italic;');
    
    // Error handling for missing elements
    if (!statsContainer) {
        console.warn('Stats container not found. Counter animation skipped.');
    }
    
    if (cards.length === 0) {
        console.warn('No akademik cards found. Check HTML structure.');
    }
    
    // Initialize everything
    console.log('✓ All interactive features initialized');
    
});