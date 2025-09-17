/* ================================
   PRESTASI PAGE JAVASCRIPT
   ================================ */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS (Animate On Scroll)
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        offset: 100
    });

    // Initialize all components
    initStatCounters();
    initFilterSystem();
    initLoadMore();
    initImageLazyLoading();
    initRippleEffects();
    initScrollAnimations();
});

/* ================================
   ANIMATED STATISTICS COUNTERS
   ================================ */

function initStatCounters() {
    const statNumbers = document.querySelectorAll('[data-count]');
    const observerOptions = {
        threshold: 0.5,
        rootMargin: '0px 0px -100px 0px'
    };

    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                statsObserver.unobserve(entry.target);
            }
        });
    }, observerOptions);

    statNumbers.forEach(stat => {
        statsObserver.observe(stat);
    });
}

function animateCounter(element) {
    const target = parseInt(element.dataset.count);
    const duration = 2000; // 2 seconds
    const step = target / (duration / 16); // 60fps
    let current = 0;

    const timer = setInterval(() => {
        current += step;
        if (current >= target) {
            element.textContent = target;
            clearInterval(timer);
        } else {
            element.textContent = Math.floor(current);
        }
    }, 16);

    // Add a pulsing animation effect
    element.style.transform = 'scale(1.1)';
    setTimeout(() => {
        element.style.transform = 'scale(1)';
        element.style.transition = 'transform 0.3s ease';
    }, 100);
}

/* ================================
   ACHIEVEMENT FILTER SYSTEM
   ================================ */

function initFilterSystem() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const achievementCards = document.querySelectorAll('.achievement-card');

    filterButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            
            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            
            // Add ripple effect
            addRippleEffect(button, e);
            
            // Filter achievements
            const filterValue = button.dataset.filter;
            filterAchievements(achievementCards, filterValue);
        });
    });
}

function filterAchievements(cards, filter) {
    cards.forEach((card, index) => {
        const category = card.dataset.category;
        const shouldShow = filter === 'all' || category === filter;
        
        if (shouldShow) {
            // Show with staggered animation
            setTimeout(() => {
                card.style.display = 'block';
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                
                // Trigger animation
                setTimeout(() => {
                    card.style.transition = 'all 0.5s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, 50);
            }, index * 100);
        } else {
            // Hide with animation
            card.style.transition = 'all 0.3s ease';
            card.style.opacity = '0';
            card.style.transform = 'translateY(-20px)';
            
            setTimeout(() => {
                card.style.display = 'none';
            }, 300);
        }
    });
}

/* ================================
   LOAD MORE FUNCTIONALITY
   ================================ */

function initLoadMore() {
    const loadMoreBtn = document.getElementById('loadMoreBtn');
    if (!loadMoreBtn) return;

    // Mock additional achievement data
    const additionalAchievements = [
        {
            category: 'olahraga',
            title: 'Juara 2 Basket Putri',
            year: '2024',
            level: 'city',
            levelText: 'Tingkat Kota',
            description: 'Tim basket putri berhasil meraih juara 2 dalam turnamen basket antar sekolah tingkat kota dengan permainan yang kompetitif.',
            participant: 'Tim Basket Putri',
            date: 'April 2024',
            image: 'https://images.unsplash.com/photo-1546519638-68e109498ffc?w=400&h=250&fit=crop'
        },
        {
            category: 'seni',
            title: 'Juara 1 Lomba Lukis',
            year: '2023',
            level: 'provincial',
            levelText: 'Tingkat Provinsi',
            description: 'Karya seni lukis dengan tema alam Indonesia berhasil menyabet juara pertama dengan teknik yang menawan.',
            participant: 'Maya Sari Indah',
            date: 'November 2023',
            image: 'https://images.unsplash.com/photo-1460661419201-fd4cecdf8a8b?w=400&h=250&fit=crop'
        },
        {
            category: 'teknologi',
            title: 'Juara 2 Coding Competition',
            year: '2024',
            level: 'provincial',
            levelText: 'Tingkat Provinsi',
            description: 'Algoritma inovatif dalam pemecahan masalah computational thinking berhasil meraih posisi runner-up.',
            participant: 'Tim Programming Ace',
            date: 'Mei 2024',
            image: 'https://images.unsplash.com/photo-1517077304055-6e89abbf09b0?w=400&h=250&fit=crop'
        }
    ];

    let currentIndex = 0;
    let isLoading = false;

    loadMoreBtn.addEventListener('click', (e) => {
        e.preventDefault();
        
        if (isLoading || currentIndex >= additionalAchievements.length) return;
        
        isLoading = true;
        loadMoreBtn.classList.add('loading');
        loadMoreBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i><span>Memuat...</span>';
        
        // Simulate API call delay
        setTimeout(() => {
            loadAdditionalAchievements();
            isLoading = false;
            loadMoreBtn.classList.remove('loading');
            loadMoreBtn.innerHTML = '<i class="fas fa-plus-circle"></i><span>Muat Lebih Banyak</span>';
            
            if (currentIndex >= additionalAchievements.length) {
                loadMoreBtn.style.display = 'none';
            }
        }, 1500);
    });

    function loadAdditionalAchievements() {
        const achievementsGrid = document.querySelector('.achievements-grid');
        const batchSize = 3;
        const endIndex = Math.min(currentIndex + batchSize, additionalAchievements.length);
        
        for (let i = currentIndex; i < endIndex; i++) {
            const achievement = additionalAchievements[i];
            const cardHTML = createAchievementCard(achievement);
            
            const tempDiv = document.createElement('div');
            tempDiv.innerHTML = cardHTML;
            const newCard = tempDiv.firstElementChild;
            
            // Add initial hidden state
            newCard.style.opacity = '0';
            newCard.style.transform = 'translateY(30px)';
            
            achievementsGrid.appendChild(newCard);
            
            // Animate in
            setTimeout(() => {
                newCard.style.transition = 'all 0.6s ease';
                newCard.style.opacity = '1';
                newCard.style.transform = 'translateY(0)';
            }, (i - currentIndex) * 200);
        }
        
        currentIndex = endIndex;
    }

    function createAchievementCard(achievement) {
        const categoryClasses = {
            'akademik': 'academic',
            'olahraga': 'sports',
            'seni': 'arts',
            'teknologi': 'technology'
        };
        
        const categoryIcons = {
            'akademik': 'fas fa-graduation-cap',
            'olahraga': 'fas fa-running',
            'seni': 'fas fa-theater-masks',
            'teknologi': 'fas fa-microchip'
        };
        
        const categoryNames = {
            'akademik': 'Akademik',
            'olahraga': 'Olahraga',
            'seni': 'Seni & Budaya',
            'teknologi': 'Teknologi'
        };

        return `
            <article class="achievement-card" data-category="${achievement.category}">
                <div class="card-image">
                    <img src="${achievement.image}" alt="${achievement.title}" loading="lazy">
                    <div class="image-overlay">
                        <div class="overlay-content">
                            <i class="${categoryIcons[achievement.category]}"></i>
                            <span>Lihat Detail</span>
                        </div>
                    </div>
                    <div class="category-badge ${categoryClasses[achievement.category]}">
                        <i class="${categoryIcons[achievement.category]}"></i>
                        <span>${categoryNames[achievement.category]}</span>
                    </div>
                </div>
                
                <div class="card-content">
                    <div class="card-header">
                        <h3 class="achievement-title">${achievement.title}</h3>
                        <div class="achievement-meta">
                            <span class="year-badge">${achievement.year}</span>
                            <span class="level-badge ${achievement.level}">${achievement.levelText}</span>
                        </div>
                    </div>
                    
                    <p class="achievement-description">${achievement.description}</p>
                    
                    <div class="card-footer">
                        <div class="achievement-info">
                            <i class="fas fa-${achievement.participant.includes('Tim') ? 'users' : 'user-graduate'}"></i>
                            <span>${achievement.participant}</span>
                        </div>
                        <div class="achievement-info">
                            <i class="fas fa-calendar-alt"></i>
                            <span>${achievement.date}</span>
                        </div>
                    </div>
                </div>
            </article>
        `;
    }
}

/* ================================
   IMAGE LAZY LOADING
   ================================ */

function initImageLazyLoading() {
    const images = document.querySelectorAll('img[loading="lazy"]');
    
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.classList.add('fade-in');
                    imageObserver.unobserve(img);
                }
            });
        });

        images.forEach(img => {
            imageObserver.observe(img);
        });
    }
}

/* ================================
   RIPPLE EFFECTS
   ================================ */

function initRippleEffects() {
    const rippleElements = document.querySelectorAll('.filter-btn, .btn-load-more, .btn-primary, .btn-secondary');
    
    rippleElements.forEach(element => {
        element.addEventListener('click', (e) => {
            addRippleEffect(element, e);
        });
    });
}

function addRippleEffect(element, event) {
    const ripple = document.createElement('span');
    const rect = element.getBoundingClientRect();
    const size = Math.max(rect.width, rect.height);
    const x = event.clientX - rect.left - size / 2;
    const y = event.clientY - rect.top - size / 2;
    
    ripple.style.cssText = `
        position: absolute;
        width: ${size}px;
        height: ${size}px;
        left: ${x}px;
        top: ${y}px;
        background: rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        transform: scale(0);
        animation: ripple 0.6s ease-out;
        pointer-events: none;
        z-index: 1000;
    `;
    
    // Add ripple styles if not already added
    if (!document.querySelector('#ripple-styles')) {
        const style = document.createElement('style');
        style.id = 'ripple-styles';
        style.textContent = `
            @keyframes ripple {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);
    }
    
    element.style.position = 'relative';
    element.style.overflow = 'hidden';
    element.appendChild(ripple);
    
    setTimeout(() => {
        ripple.remove();
    }, 600);
}

/* ================================
   SCROLL ANIMATIONS
   ================================ */

function initScrollAnimations() {
    // Parallax effect for floating icons
    const floatingIcons = document.querySelectorAll('.floating-icon');
    
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const rate = scrolled * -0.5;
        
        floatingIcons.forEach((icon, index) => {
            const speed = 0.5 + (index * 0.1);
            icon.style.transform = `translateY(${rate * speed}px) rotate(${scrolled * 0.1}deg)`;
        });
    });

    // Progress indicator for timeline
    const timeline = document.querySelector('.timeline');
    if (timeline) {
        const timelineObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateTimelineProgress();
                    timelineObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.3 });
        
        timelineObserver.observe(timeline);
    }

    // Smooth reveal for stats cards
    const statCards = document.querySelectorAll('.stat-card');
    const cardObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.add('fade-in');
                }, index * 200);
                cardObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    statCards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'all 0.6s ease';
        cardObserver.observe(card);
    });
}

function animateTimelineProgress() {
    const timelineLine = document.querySelector('.timeline::before');
    if (timelineLine) {
        // Create animated timeline line
        const animatedLine = document.createElement('div');
        animatedLine.style.cssText = `
            position: absolute;
            top: 0;
            left: 50%;
            width: 2px;
            height: 0;
            background: linear-gradient(to bottom, var(--primary-color), var(--accent-color));
            transform: translateX(-50%);
            transition: height 2s ease-in-out;
            z-index: 1;
        `;
        
        document.querySelector('.timeline').appendChild(animatedLine);
        
        setTimeout(() => {
            animatedLine.style.height = '100%';
        }, 500);
    }
}

/* ================================
   UTILITY FUNCTIONS
   ================================ */

// Smooth scrolling for anchor links
function initSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

// Debounce function for performance
function debounce(func, wait, immediate) {
    let timeout;
    return function executedFunction() {
        const context = this;
        const args = arguments;
        const later = function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        const callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
}

// Performance optimized scroll handler
const optimizedScrollHandler = debounce(function() {
    // Add any scroll-based functionality here
    requestAnimationFrame(() => {
        // Scroll-based animations
    });
}, 16); // 60fps

window.addEventListener('scroll', optimizedScrollHandler);

/* ================================
   ACCESSIBILITY ENHANCEMENTS
   ================================ */

// Keyboard navigation support
document.addEventListener('keydown', (e) => {
    if (e.key === 'Enter' || e.key === ' ') {
        const focusedElement = document.activeElement;
        if (focusedElement.classList.contains('filter-btn') || 
            focusedElement.classList.contains('btn-load-more')) {
            e.preventDefault();
            focusedElement.click();
        }
    }
});

// Focus management for dynamically added content
function manageFocus() {
    const focusableElements = document.querySelectorAll(
        'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
    );
    
    focusableElements.forEach(element => {
        element.addEventListener('focus', () => {
            element.classList.add('keyboard-focus');
        });
        
        element.addEventListener('blur', () => {
            element.classList.remove('keyboard-focus');
        });
    });
}

// Initialize accessibility enhancements
manageFocus();

/* ================================
   ERROR HANDLING
   ================================ */

// Global error handler for the prestasi page
window.addEventListener('error', (e) => {
    console.error('Prestasi page error:', e.error);
    
    // Graceful fallback for critical functionality
    if (e.error.message.includes('AOS')) {
        console.warn('AOS library not loaded, skipping animations');
        return;
    }
    
    // Show user-friendly error message if needed
    const errorBoundary = document.querySelector('.error-boundary');
    if (errorBoundary) {
        errorBoundary.style.display = 'block';
    }
});

// Handle potential network issues for image loading
document.addEventListener('error', (e) => {
    if (e.target.tagName === 'IMG') {
        e.target.style.display = 'none';
        console.warn('Image failed to load:', e.target.src);
    }
}, true);

console.log('Prestasi page JavaScript loaded successfully!');