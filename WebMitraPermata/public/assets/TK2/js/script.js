// ========================================
// HERO SLIDER FUNCTIONALITY
// ========================================

let currentSlideIndex = 0;
const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.dot');

/**
 * Show specific slide based on index
 * @param {number} n - Slide index to show
 */
function showSlide(n) {
    // Remove active class from all slides and dots
    slides.forEach(slide => slide.classList.remove('active'));
    dots.forEach(dot => dot.classList.remove('active'));
    
    // Update current slide index with wrap-around logic
    currentSlideIndex = n;
    if (currentSlideIndex >= slides.length) currentSlideIndex = 0;
    if (currentSlideIndex < 0) currentSlideIndex = slides.length - 1;
    
    // Add active class to current slide and dot
    slides[currentSlideIndex].classList.add('active');
    dots[currentSlideIndex].classList.add('active');
}

/**
 * Navigate to specific slide (called from dot click)
 * @param {number} n - Slide index
 */
function currentSlide(n) {
    showSlide(n);
}

/**
 * Move to next slide
 */
function nextSlide() {
    showSlide(currentSlideIndex + 1);
}

/**
 * Move to previous slide
 */
function prevSlide() {
    showSlide(currentSlideIndex - 1);
}

// Auto advance slider every 5 seconds
setInterval(nextSlide, 5000);


// ========================================
// SMOOTH SCROLL FOR ANCHOR LINKS
// ========================================

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        
        const targetId = this.getAttribute('href');
        const target = document.querySelector(targetId);
        
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});


// ========================================
// ANIMATION ON SCROLL (Intersection Observer)
// ========================================

const observerOptions = {
    threshold: 0.1, // Trigger when 10% of element is visible
    rootMargin: '0px 0px -100px 0px' // Start animation 100px before element enters viewport
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            // Add fade-in animation when element enters viewport
            entry.target.style.animation = 'fadeInUp 1s ease forwards';
            
            // Optional: Stop observing after animation (performance optimization)
            // observer.unobserve(entry.target);
        }
    });
}, observerOptions);

// Select all elements that should animate on scroll
// PENTING: .gallery-item DIHAPUS agar tidak mengganggu rotasi polaroid!
const animatedElements = document.querySelectorAll(
    '.program-card, .facility-item, .teacher-card'
);

// Observe each element
animatedElements.forEach(el => {
    observer.observe(el);
});


// ========================================
// OPTIONAL: CTA BUTTON ACTIONS
// ========================================

const ctaButtons = document.querySelectorAll('.cta-button');

ctaButtons.forEach(button => {
    button.addEventListener('click', function() {
        // You can add custom actions here
        // Example: Open registration form, show modal, etc.
        console.log('CTA Button clicked!');
        
        // Example: Scroll to contact section
        const contactSection = document.querySelector('#contact');
        if (contactSection) {
            contactSection.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});


// ========================================
// OPTIONAL: NAVBAR SCROLL EFFECT
// ========================================

window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    
    if (window.scrollY > 100) {
        navbar.style.boxShadow = '0 5px 20px rgba(0,0,0,0.2)';
    } else {
        navbar.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
    }
});


// ========================================
// OPTIONAL: MOBILE MENU TOGGLE
// ========================================

// Uncomment this section if you add a hamburger menu for mobile

/*
const menuToggle = document.querySelector('.menu-toggle');
const navLinks = document.querySelector('.nav-links');

if (menuToggle) {
    menuToggle.addEventListener('click', function() {
        navLinks.classList.toggle('active');
    });
}
*/

function toggleAnimal(card) {
    card.classList.toggle('active');
    
    // Auto close after 3 seconds
    if (card.classList.contains('active')) {
        setTimeout(() => {
            card.classList.remove('active');
        }, 3000);
    }
}

// Optional: Add click sound effect simulation
document.querySelectorAll('.card').forEach(card => {
    card.addEventListener('click', function() {
        // You can add sound effects here if needed
        console.log('Card clicked!');
    });
});