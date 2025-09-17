// ========================================
// CAROUSEL FUNCTIONALITY
// ========================================
let currentSlideIndex = 0;
const slides = document.querySelectorAll('.carousel-slide');
const dots = document.querySelectorAll('.carousel-dot');
const totalSlides = slides.length;

/**
 * Auto slide function - changes slide automatically
 */
function autoSlide() {
  currentSlideIndex = (currentSlideIndex + 1) % totalSlides;
  showSlide(currentSlideIndex);
}

/**
 * Show specific slide by index
 * @param {number} n - slide index to show
 */
function showSlide(n) {
  // Remove active class from all slides and dots
  slides.forEach(slide => slide.classList.remove('active'));
  dots.forEach(dot => dot.classList.remove('active'));
  
  // Add active class to current slide and dot
  slides[n].classList.add('active');
  dots[n].classList.add('active');
}

/**
 * Go to next slide
 */
function nextSlide() {
  currentSlideIndex = (currentSlideIndex + 1) % totalSlides;
  showSlide(currentSlideIndex);
}

/**
 * Go to previous slide
 */
function prevSlide() {
  currentSlideIndex = (currentSlideIndex - 1 + totalSlides) % totalSlides;
  showSlide(currentSlideIndex);
}

/**
 * Go to specific slide (called from dot indicators)
 * @param {number} n - slide number (1-based)
 */
function currentSlide(n) {
  currentSlideIndex = n - 1;
  showSlide(currentSlideIndex);
}

// Start auto-slide (change every 5 seconds)
setInterval(autoSlide, 5000);

// ========================================
// SMOOTH SCROLLING FOR ANCHOR LINKS
// ========================================
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const targetElement = document.querySelector(this.getAttribute('href'));
    if (targetElement) {
      targetElement.scrollIntoView({
        behavior: 'smooth'
      });
    }
  });
});

// ========================================
// COUNTER ANIMATION FOR STATISTICS
// ========================================

/**
 * Animate counter from 0 to target value
 * @param {HTMLElement} el - element containing the number to animate
 */
const animateCounter = (el) => {
  const target = parseInt(el.textContent);
  const duration = 2000; // 2 seconds
  const step = target / (duration / 16); // 60fps
  let current = 0;
  
  const updateCounter = () => {
    current += step;
    if (current < target) {
      el.textContent = Math.floor(current) + (el.textContent.includes('%') ? '%' : '+');
      requestAnimationFrame(updateCounter);
    } else {
      el.textContent = target + (el.textContent.includes('%') ? '%' : '+');
    }
  };
  
  updateCounter();
};

// ========================================
// INTERSECTION OBSERVER FOR ANIMATIONS
// ========================================
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      if (entry.target.classList.contains('stat-number')) {
        animateCounter(entry.target);
      }
    }
  });
});

// Observe all stat numbers for animation
document.querySelectorAll('.stat-number').forEach(el => {
  observer.observe(el);
});

// ========================================
// PARTNERS SLIDER FUNCTIONALITY
// ========================================
const slider = document.getElementById('partnersSlider');
let speed = 0.5; // pixels per frame
let pos = 0;

/**
 * Continuous loop animation for partners slider
 */
function loopSlider() {
  if (slider) {
    pos += speed;
    const totalWidth = slider.scrollWidth / 2; // because of duplicate content
    
    // Reset position when reaching end
    if (pos >= totalWidth) {
      pos = 0;
    }
    
    slider.style.transform = `translateX(-${pos}px)`;
    requestAnimationFrame(loopSlider);
  }
}

// Start the slider animation when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
  if (slider) {
    loopSlider();

    // Pause slider on hover
    slider.addEventListener('mouseenter', () => {
      speed = 0;
    });

    slider.addEventListener('mouseleave', () => {
      speed = 0.5;
    });
  }
});

// ========================================
// SEARCH FUNCTIONALITY
// ========================================
document.addEventListener('DOMContentLoaded', function() {
  const searchBtn = document.querySelector('.search-btn');
  const searchInput = document.querySelector('.search-input');
  
  if (searchBtn && searchInput) {
    /**
     * Handle search button click
     */
    searchBtn.addEventListener('click', function() {
      const searchTerm = searchInput.value.trim();
      if (searchTerm) {
        // Add your search functionality here
        console.log('Searching for:', searchTerm);
        // You can redirect to search results page or implement search logic
        // window.location.href = `/search?q=${encodeURIComponent(searchTerm)}`;
        alert(`Mencari: ${searchTerm}`);
      }
    });
    
    /**
     * Handle search on Enter key press
     */
    searchInput.addEventListener('keypress', function(e) {
      if (e.key === 'Enter') {
        searchBtn.click();
      }
    });
  }
});

// ========================================
// NAVBAR SCROLL EFFECT (Optional)
// ========================================
window.addEventListener('scroll', function() {
  const navbar = document.querySelector('.navbar');
  if (navbar) {
    if (window.scrollY > 100) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  }
});

// ========================================
// LOADING ANIMATION (Optional)
// ========================================
window.addEventListener('load', function() {
  const loader = document.querySelector('.loader');
  if (loader) {
    loader.style.display = 'none';
  }
});

// ========================================
// BACK TO TOP BUTTON (Optional)
// ========================================
const backToTopBtn = document.querySelector('.back-to-top');

if (backToTopBtn) {
  window.addEventListener('scroll', function() {
    if (window.scrollY > 300) {
      backToTopBtn.style.display = 'block';
    } else {
      backToTopBtn.style.display = 'none';
    }
  });

  backToTopBtn.addEventListener('click', function() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });
}