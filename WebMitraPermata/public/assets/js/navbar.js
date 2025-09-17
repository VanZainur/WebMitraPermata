// Navbar scroll effect
window.addEventListener('scroll', function() {
  const navbar = document.getElementById('navbar');
  if (window.scrollY > 50) {
    navbar.classList.add('scrolled');
  } else {
    navbar.classList.remove('scrolled');
  }
});

// Mobile menu functionality
const mobileToggle = document.getElementById('mobileToggle');
const mobileMenu = document.getElementById('mobileMenu');
const mobileOverlay = document.getElementById('mobileOverlay');

function toggleMobileMenu() {
  mobileToggle.classList.toggle('active');
  mobileMenu.classList.toggle('active');
  mobileOverlay.classList.toggle('active');
  document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
}

function closeMobileMenu() {
  mobileToggle.classList.remove('active');
  mobileMenu.classList.remove('active');
  mobileOverlay.classList.remove('active');
  document.body.style.overflow = '';
}

mobileToggle.addEventListener('click', toggleMobileMenu);
mobileOverlay.addEventListener('click', closeMobileMenu);

// Mobile dropdown functionality (handle multiple dropdowns)
document.querySelectorAll('.mobile-dropdown-toggle').forEach(toggle => {
  toggle.addEventListener('click', function(e) {
    e.preventDefault();
    const parent = this.parentElement;

    // optional: close other dropdowns when opening a new one
    document.querySelectorAll('.mobile-dropdown').forEach(drop => {
      if (drop !== parent) {
        drop.classList.remove('active');
      }
    });

    parent.classList.toggle('active');
  });
});

// Close mobile menu when clicking on normal links (not dropdown toggles)
const mobileMenuLinks = mobileMenu.querySelectorAll('a:not(.mobile-dropdown-toggle)');
mobileMenuLinks.forEach(link => {
  link.addEventListener('click', closeMobileMenu);
});

// Smooth scrolling untuk anchor links
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

// Close mobile menu on window resize
window.addEventListener('resize', function() {
  if (window.innerWidth > 768) {
    closeMobileMenu();
  }
});
