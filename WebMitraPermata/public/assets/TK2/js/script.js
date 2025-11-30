// ========================================
// HERO SLIDER
// ========================================

let currentSlideIndex = 0;
const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.dot');

function showSlide(n) {
    slides.forEach(slide => slide.classList.remove('active'));
    dots.forEach(dot => dot.classList.remove('active'));
    
    currentSlideIndex = n;
    if (currentSlideIndex >= slides.length) currentSlideIndex = 0;
    if (currentSlideIndex < 0) currentSlideIndex = slides.length - 1;
    
    slides[currentSlideIndex].classList.add('active');
    dots[currentSlideIndex].classList.add('active');
}

function currentSlide(n) {
    showSlide(n);
}

function nextSlide() {
    showSlide(currentSlideIndex + 1);
}

setInterval(nextSlide, 5000);


// ========================================
// MOBILE MENU - SIMPLE VERSION
// ========================================

document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');
    const navItems = document.querySelectorAll('.nav-links a');
    const body = document.body;

    // Buka/Tutup menu saat hamburger diklik
    if (menuToggle) {
        menuToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            navLinks.classList.toggle('active');
            body.classList.toggle('menu-open');
        });
    }

    // Tutup menu saat link diklik
    navItems.forEach(item => {
        item.addEventListener('click', function() {
            navLinks.classList.remove('active');
            body.classList.remove('menu-open');
        });
    });

    // Tutup menu saat klik overlay
    body.addEventListener('click', function(e) {
        if (body.classList.contains('menu-open') && 
            !navLinks.contains(e.target) && 
            !menuToggle.contains(e.target)) {
            navLinks.classList.remove('active');
            body.classList.remove('menu-open');
        }
    });
});


// ========================================
// SMOOTH SCROLL
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
// ANIMATION ON SCROLL
// ========================================

const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -100px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.animation = 'fadeInUp 1s ease forwards';
        }
    });
}, observerOptions);

const animatedElements = document.querySelectorAll(
    '.program-card, .facility-item, .teacher-card'
);

animatedElements.forEach(el => {
    observer.observe(el);
});


// ========================================
// CTA BUTTONS
// ========================================

const ctaButtons = document.querySelectorAll('.cta-button');

ctaButtons.forEach(button => {
    button.addEventListener('click', function() {
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
// NAVBAR SCROLL EFFECT
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
// CARD ANIMATION
// ========================================

function toggleAnimal(card) {
    card.classList.toggle('active');
    
    if (card.classList.contains('active')) {
        setTimeout(() => {
            card.classList.remove('active');
        }, 3000);
    }
}

document.querySelectorAll('.card').forEach(card => {
    card.addEventListener('click', function() {
        console.log('Card clicked!');
    });
});