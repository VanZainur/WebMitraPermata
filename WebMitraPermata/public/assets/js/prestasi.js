// Prestasi Page JavaScript - Complete Fixed Logic
document.addEventListener('DOMContentLoaded', function() {
    initializePrestasiPage();
});

// Global variables
let currentFilter = 'all';
let prestasiData = [];
let visibleCardsCount = 6; // Show 6 cards initially
let totalCards = 0;
let isAnimating = false;

function initializePrestasiPage() {
    // Initialize all components
    collectPrestasiData();
    initializeCounterAnimation();
    setupFilterSystem();
    setupLoadMoreButton();
    setupModal();
    setupCardInteractions();
    setupSearch();
    setupLazyLoading();
    setupImageErrorHandling();
    enhanceAccessibility();
    
    // Show initial cards
    showCards();
    
    console.log('Prestasi page initialized successfully');
}

// Collect prestasi data from DOM
function collectPrestasiData() {
    const cards = document.querySelectorAll('.prestasi-card');
    prestasiData = Array.from(cards).map((card, index) => {
        return {
            element: card,
            category: card.dataset.category || 'all',
            title: card.querySelector('h3')?.textContent || '',
            description: card.querySelector('p')?.textContent || '',
            date: card.querySelector('.card-footer .date span')?.textContent || '',
            location: card.querySelector('.card-footer .location span')?.textContent || '',
            image: card.querySelector('img')?.src || '',
            level: card.querySelector('.achievement-level')?.textContent || '',
            categoryTag: card.querySelector('.category-tag')?.textContent || '',
            index: index
        };
    });
    
    totalCards = prestasiData.length;
    console.log(`Collected ${totalCards} prestasi cards`);
}

// Counter animation for stats
function initializeCounterAnimation() {
    const counters = document.querySelectorAll('.stat-number');
    const observerOptions = {
        threshold: 0.5,
        rootMargin: '0px'
    };

    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.classList.contains('animated')) {
                animateCounter(entry.target);
                entry.target.classList.add('animated');
            }
        });
    }, observerOptions);

    counters.forEach(counter => {
        counterObserver.observe(counter);
    });
}

function animateCounter(element) {
    const target = parseInt(element.dataset.count) || 0;
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
}

// Filter system
function setupFilterSystem() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            if (isAnimating) return;
            
            const filter = this.dataset.filter;
            
            // Update active button
            filterButtons.forEach(btn => {
                btn.classList.remove('active');
                btn.setAttribute('aria-selected', 'false');
            });
            this.classList.add('active');
            this.setAttribute('aria-selected', 'true');
            
            // Apply filter
            applyFilter(filter);
        });
    });
}

function applyFilter(filter) {
    if (currentFilter === filter) return;
    
    isAnimating = true;
    currentFilter = filter;
    visibleCardsCount = 6; // Reset visible count
    
    // Hide all cards with animation
    const allCards = document.querySelectorAll('.prestasi-card');
    allCards.forEach((card, index) => {
        setTimeout(() => {
            card.style.transform = 'translateY(20px)';
            card.style.opacity = '0';
        }, index * 50);
    });
    
    // Filter and show cards after animation
    setTimeout(() => {
        showCards();
        isAnimating = false;
        
        // Dispatch event for other components
        document.dispatchEvent(new CustomEvent('prestasiFiltered', {
            detail: { filter: currentFilter }
        }));
    }, (allCards.length * 50) + 300);
}

function showCards() {
    // Filter cards based on current filter
    const filteredData = currentFilter === 'all' 
        ? prestasiData 
        : prestasiData.filter(item => item.category === currentFilter);
    
    // Hide all cards first
    prestasiData.forEach(item => {
        item.element.classList.add('hidden');
        item.element.style.display = 'none';
    });
    
    // Show filtered cards with limit
    const cardsToShow = filteredData.slice(0, visibleCardsCount);
    
    cardsToShow.forEach((item, index) => {
        setTimeout(() => {
            item.element.style.display = 'block';
            item.element.classList.remove('hidden');
            item.element.style.transform = 'translateY(0)';
            item.element.style.opacity = '1';
        }, index * 100);
    });
    
    // Update load more button
    updateLoadMoreButton(filteredData.length);
    
    console.log(`Showing ${cardsToShow.length} of ${filteredData.length} cards for filter: ${currentFilter}`);
}

// Load more functionality
function setupLoadMoreButton() {
    const loadMoreBtn = document.querySelector('.load-more-btn');
    
    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', function() {
            if (isAnimating) return;
            
            loadMoreCards();
        });
    }
}

function loadMoreCards() {
    const filteredData = currentFilter === 'all' 
        ? prestasiData 
        : prestasiData.filter(item => item.category === currentFilter);
    
    const currentlyVisible = visibleCardsCount;
    visibleCardsCount += 3; // Load 3 more cards
    
    const newCards = filteredData.slice(currentlyVisible, visibleCardsCount);
    
    newCards.forEach((item, index) => {
        setTimeout(() => {
            item.element.style.display = 'block';
            item.element.classList.remove('hidden');
            item.element.style.transform = 'translateY(0)';
            item.element.style.opacity = '1';
        }, index * 150);
    });
    
    updateLoadMoreButton(filteredData.length);
}

function updateLoadMoreButton(totalFiltered) {
    const loadMoreBtn = document.querySelector('.load-more-btn');
    const loadMoreContainer = document.querySelector('.load-more-container');
    
    if (!loadMoreBtn || !loadMoreContainer) return;
    
    if (visibleCardsCount >= totalFiltered) {
        // Hide button if all cards are shown
        loadMoreContainer.style.display = 'none';
    } else {
        // Show button with updated text
        loadMoreContainer.style.display = 'block';
        const remaining = totalFiltered - visibleCardsCount;
        loadMoreBtn.querySelector('span').textContent = `Lihat ${remaining} Lainnya`;
        loadMoreBtn.disabled = false;
    }
}

// Modal functionality
function setupModal() {
    const modal = document.getElementById('achievementModal');
    const modalClose = document.querySelector('.modal-close');
    const modalOverlay = document.querySelector('.modal-overlay');
    
    if (!modal) return;
    
    // Close modal events
    if (modalClose) {
        modalClose.addEventListener('click', closeModal);
    }
    
    if (modalOverlay) {
        modalOverlay.addEventListener('click', closeModal);
    }
    
    // Escape key to close modal
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.classList.contains('active')) {
            closeModal();
        }
    });
    
    console.log('Modal system initialized');
}

function openModal(cardData) {
    const modal = document.getElementById('achievementModal');
    if (!modal || !cardData) return;
    
    // Populate modal with card data
    populateModalContent(cardData);
    
    // Show modal
    modal.classList.add('active');
    document.body.style.overflow = 'hidden';
    
    // Focus management for accessibility
    const firstFocusableElement = modal.querySelector('button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])');
    if (firstFocusableElement) {
        firstFocusableElement.focus();
    }
    
    // Dispatch event
    document.dispatchEvent(new CustomEvent('modalOpened', { detail: cardData }));
}

function closeModal() {
    const modal = document.getElementById('achievementModal');
    if (!modal) return;
    
    modal.classList.remove('active');
    document.body.style.overflow = '';
    
    // Return focus to the last focused element
    const lastFocused = document.querySelector('.prestasi-card:focus, .prestasi-card[data-last-focused]');
    if (lastFocused) {
        lastFocused.focus();
        lastFocused.removeAttribute('data-last-focused');
    }
    
    // Dispatch event
    document.dispatchEvent(new CustomEvent('modalClosed'));
}

function populateModalContent(cardData) {
    const modalImage = document.querySelector('.modal-image');
    const modalTitle = document.querySelector('.modal-title');
    const modalDescription = document.querySelector('.modal-description');
    const modalCategory = document.querySelector('.modal-category');
    const modalLevel = document.querySelector('.modal-level');
    const modalDate = document.querySelector('.modal-date');
    const modalLocation = document.querySelector('.modal-location');
    
    if (modalImage) {
        modalImage.src = cardData.image;
        modalImage.alt = cardData.title;
    }
    if (modalTitle) modalTitle.textContent = cardData.title;
    if (modalDescription) modalDescription.textContent = cardData.description;
    if (modalCategory) modalCategory.textContent = cardData.categoryTag;
    if (modalLevel) modalLevel.textContent = cardData.level;
    if (modalDate) modalDate.textContent = cardData.date;
    if (modalLocation) modalLocation.textContent = cardData.location;
}

// Card interactions
function setupCardInteractions() {
    // Use event delegation for better performance
    const prestasiGrid = document.querySelector('.prestasi-grid');
    
    if (prestasiGrid) {
        prestasiGrid.addEventListener('click', handleCardClick);
        prestasiGrid.addEventListener('keydown', handleCardKeydown);
    }
}

function handleCardClick(e) {
    const card = e.target.closest('.prestasi-card');
    if (!card || card.classList.contains('hidden')) return;
    
    // Store reference for focus management
    card.setAttribute('data-last-focused', 'true');
    
    const cardData = prestasiData.find(item => item.element === card);
    
    if (cardData) {
        openModal(cardData);
    }
}

function handleCardKeydown(e) {
    if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        handleCardClick(e);
    }
}

// Search functionality
function setupSearch() {
    const searchInput = document.querySelector('#searchInput');
    if (!searchInput) return;
    
    const debouncedSearch = debounce(performSearch, 300);
    searchInput.addEventListener('input', debouncedSearch);
    
    // Clear search on escape
    searchInput.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            this.value = '';
            performSearch({ target: { value: '' } });
        }
    });
}

function performSearch(e) {
    const query = e.target.value.toLowerCase().trim();
    
    if (query === '') {
        // Reset to current filter
        showCards();
        return;
    }
    
    // Filter by search query
    const searchResults = prestasiData.filter(item => {
        return item.title.toLowerCase().includes(query) ||
               item.description.toLowerCase().includes(query) ||
               item.categoryTag.toLowerCase().includes(query) ||
               item.location.toLowerCase().includes(query);
    });
    
    // Apply current category filter to search results
    const filteredResults = currentFilter === 'all' 
        ? searchResults
        : searchResults.filter(item => item.category === currentFilter);
    
    showSearchResults(filteredResults);
}

function showSearchResults(results) {
    // Hide all cards
    prestasiData.forEach(item => {
        item.element.classList.add('hidden');
        item.element.style.display = 'none';
    });
    
    // Show search results
    results.forEach((item, index) => {
        setTimeout(() => {
            item.element.style.display = 'block';
            item.element.classList.remove('hidden');
            item.element.style.transform = 'translateY(0)';
            item.element.style.opacity = '1';
        }, index * 100);
    });
    
    // Hide load more button during search
    const loadMoreContainer = document.querySelector('.load-more-container');
    if (loadMoreContainer) {
        loadMoreContainer.style.display = 'none';
    }
    
    // Show search results count
    showSearchResultsCount(results.length);
}

function showSearchResultsCount(count) {
    // Remove existing result count
    const existingCount = document.querySelector('.search-results-count');
    if (existingCount) {
        existingCount.remove();
    }
    
    if (count === 0) return;
    
    // Create and show result count
    const searchContainer = document.querySelector('.search-container');
    if (searchContainer) {
        const countElement = document.createElement('div');
        countElement.className = 'search-results-count';
        countElement.textContent = `Ditemukan ${count} prestasi`;
        countElement.style.cssText = `
            text-align: center;
            margin-top: 10px;
            color: var(--gray-600);
            font-size: 0.9rem;
        `;
        searchContainer.appendChild(countElement);
    }
}

// Lazy loading for images
function setupLazyLoading() {
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                    }
                    img.classList.remove('lazy');
                    observer.unobserve(img);
                }
            });
        });
        
        document.querySelectorAll('img[loading="lazy"]').forEach(img => {
            imageObserver.observe(img);
        });
    }
}

// Error handling
function handleImageError(img) {
    img.src = 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjZGRkIi8+PHRleHQgeD0iNTAlIiB5PSI1MCUiIGZvbnQtZmFtaWx5PSJBcmlhbCwgc2Fucy1zZXJpZiIgZm9udC1zaXplPSIxNCIgZmlsbD0iIzk5OSIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZHk9Ii4zZW0iPkltYWdlIG5vdCBmb3VuZDwvdGV4dD48L3N2Zz4=';
    img.classList.add('image-error');
    img.alt = 'Image not available';
}

// Setup image error handling
function setupImageErrorHandling() {
    document.querySelectorAll('.prestasi-card img').forEach(img => {
        img.addEventListener('error', () => handleImageError(img));
    });
}

// Accessibility enhancements
function enhanceAccessibility() {
    // Add ARIA labels and roles for filter buttons
    const filterButtons = document.querySelectorAll('.filter-btn');
    filterButtons.forEach((btn, index) => {
        btn.setAttribute('role', 'tab');
        btn.setAttribute('aria-pressed', btn.classList.contains('active'));
        btn.setAttribute('tabindex', btn.classList.contains('active') ? '0' : '-1');
    });
    
    // Add keyboard navigation for cards
    const cards = document.querySelectorAll('.prestasi-card');
    cards.forEach(card => {
        card.setAttribute('tabindex', '0');
        card.setAttribute('role', 'button');
        const title = card.querySelector('h3')?.textContent || 'prestasi';
        card.setAttribute('aria-label', `Buka detail ${title}`);
    });
    
    // Add live region for announcements
    const liveRegion = document.createElement('div');
    liveRegion.setAttribute('aria-live', 'polite');
    liveRegion.setAttribute('aria-atomic', 'true');
    liveRegion.className = 'sr-only';
    liveRegion.id = 'announcements';
    document.body.appendChild(liveRegion);
}

// Utility functions
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

function throttle(func, limit) {
    let inThrottle;
    return function() {
        const args = arguments;
        const context = this;
        if (!inThrottle) {
            func.apply(context, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    };
}

function announceToScreenReader(message) {
    const announcer = document.getElementById('announcements');
    if (announcer) {
        announcer.textContent = message;
        setTimeout(() => {
            announcer.textContent = '';
        }, 1000);
    }
}

// Performance monitoring (debug mode)
function initializePerformanceMonitoring() {
    if (window.location.hash !== '#debug') return;
    
    window.addEventListener('load', () => {
        if ('performance' in window) {
            const timing = performance.timing;
            const loadTime = timing.loadEventEnd - timing.navigationStart;
            console.log(`Page loaded in ${loadTime}ms`);
        }
    });
}

// Public API for external use
window.PrestasiPage = {
    filter: applyFilter,
    loadMore: loadMoreCards,
    openModal: openModal,
    closeModal: closeModal,
    search: (query) => {
        const searchInput = document.querySelector('#searchInput');
        if (searchInput) {
            searchInput.value = query;
            performSearch({ target: { value: query } });
        }
    },
    refresh: () => {
        collectPrestasiData();
        showCards();
    },
    getStats: () => ({
        total: totalCards,
        visible: visibleCardsCount,
        currentFilter: currentFilter,
        data: prestasiData
    })
};

// Event listeners for custom events
document.addEventListener('prestasiFiltered', function(e) {
    announceToScreenReader(`Filter berubah ke ${e.detail.filter}`);
});

document.addEventListener('modalOpened', function() {
    announceToScreenReader('Detail prestasi dibuka');
});

document.addEventListener('modalClosed', function() {
    announceToScreenReader('Detail prestasi ditutup');
});

// Initialize performance monitoring if needed
if (window.location.hash === '#debug') {
    initializePerformanceMonitoring();
}

// Export for module systems
if (typeof module !== 'undefined' && module.exports) {
    module.exports = window.PrestasiPage;
}