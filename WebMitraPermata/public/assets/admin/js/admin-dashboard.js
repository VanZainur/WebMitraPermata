// ============================================
// ADMIN DASHBOARD JAVASCRIPT - MODERN VERSION
// ============================================

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    initDashboard();
    initTableFeatures();
    initAnimations();
});

// === MAIN INITIALIZATION ===
function initDashboard() {
    // Set active menu based on current URL
    setActiveMenu();
    
    // Add smooth scroll behavior
    document.documentElement.style.scrollBehavior = 'smooth';
    
    // Initialize tooltips (if needed)
    initTooltips();
}

// === SIDEBAR TOGGLE ===
function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('active');
    
    // Prevent body scroll when sidebar is open on mobile
    if (window.innerWidth <= 768) {
        document.body.style.overflow = sidebar.classList.contains('active') ? 'hidden' : '';
    }
}

// Close sidebar when clicking outside on mobile
document.addEventListener('click', function(e) {
    const sidebar = document.getElementById('sidebar');
    const menuToggle = document.querySelector('.menu-toggle');
    
    if (window.innerWidth <= 768 && 
        sidebar.classList.contains('active') && 
        !sidebar.contains(e.target) && 
        !menuToggle.contains(e.target)) {
        toggleSidebar();
    }
});

// === SEARCH FUNCTIONALITY ===
function toggleSearch() {
    const searchContainer = document.getElementById('searchContainer');
    const searchInput = searchContainer.querySelector('.search-input');
    
    if (searchContainer.style.display === 'none') {
        searchContainer.style.display = 'block';
        setTimeout(() => searchInput.focus(), 100);
    } else {
        searchContainer.style.display = 'none';
        searchInput.value = '';
        filterTable('');
    }
}

function filterTable(searchTerm) {
    const table = document.getElementById('dataTable');
    const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');
    const term = searchTerm.toLowerCase().trim();
    
    let visibleCount = 0;
    
    for (let i = 0; i < rows.length; i++) {
        const row = rows[i];
        const cells = row.getElementsByTagName('td');
        
        // Skip empty state row
        if (cells.length === 1 && cells[0].classList.contains('empty-state')) {
            continue;
        }
        
        let found = false;
        
        // Search in nama, asal sekolah, and jurusan columns
        for (let j = 1; j <= 3; j++) {
            if (cells[j]) {
                const text = cells[j].textContent || cells[j].innerText;
                if (text.toLowerCase().indexOf(term) > -1) {
                    found = true;
                    break;
                }
            }
        }
        
        // Show/hide row with animation
        if (found || term === '') {
            row.style.display = '';
            visibleCount++;
            // Add fade-in animation
            row.style.animation = 'fadeIn 0.3s ease';
        } else {
            row.style.display = 'none';
        }
    }
    
    // Update data count
    updateDataCount(visibleCount);
}

function updateDataCount(count) {
    const dataCountElement = document.querySelector('.data-count');
    if (dataCountElement) {
        dataCountElement.textContent = `${count} data`;
    }
}

// === TABLE FEATURES ===
function initTableFeatures() {
    // Add hover effect to table rows
    const tableRows = document.querySelectorAll('.data-table tbody tr');
    tableRows.forEach(row => {
        row.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.01)';
        });
        row.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });
    
    // Add sort functionality to table headers (optional)
    initTableSort();
}

function initTableSort() {
    const headers = document.querySelectorAll('.data-table th');
    
    headers.forEach((header, index) => {
        // Skip action column
        if (index === 0 || header.textContent.includes('Aksi')) return;
        
        header.style.cursor = 'pointer';
        header.style.userSelect = 'none';
        
        header.addEventListener('click', function() {
            sortTable(index);
        });
    });
}

function sortTable(columnIndex) {
    const table = document.getElementById('dataTable');
    const tbody = table.getElementsByTagName('tbody')[0];
    const rows = Array.from(tbody.getElementsByTagName('tr'));
    
    // Remove empty state row if exists
    const filteredRows = rows.filter(row => {
        const cells = row.getElementsByTagName('td');
        return !(cells.length === 1 && cells[0].classList.contains('empty-state'));
    });
    
    // Determine sort direction
    const isAscending = tbody.getAttribute('data-sort-dir') !== 'asc';
    
    // Sort rows
    filteredRows.sort((a, b) => {
        const aText = a.getElementsByTagName('td')[columnIndex].textContent.trim();
        const bText = b.getElementsByTagName('td')[columnIndex].textContent.trim();
        
        // Try to parse as number
        const aNum = parseFloat(aText);
        const bNum = parseFloat(bText);
        
        if (!isNaN(aNum) && !isNaN(bNum)) {
            return isAscending ? aNum - bNum : bNum - aNum;
        }
        
        // Sort as string
        return isAscending ? 
            aText.localeCompare(bText) : 
            bText.localeCompare(aText);
    });
    
    // Clear tbody
    tbody.innerHTML = '';
    
    // Append sorted rows
    filteredRows.forEach(row => tbody.appendChild(row));
    
    // Update sort direction
    tbody.setAttribute('data-sort-dir', isAscending ? 'asc' : 'desc');
    
    // Update row numbers
    updateRowNumbers();
}

function updateRowNumbers() {
    const table = document.getElementById('dataTable');
    const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');
    
    let number = 1;
    for (let row of rows) {
        const numberCell = row.querySelector('.cell-number');
        if (numberCell) {
            numberCell.textContent = number++;
        }
    }
}

// === ANIMATIONS ===
function initAnimations() {
    // Add fade-in animation to cards
    const cards = document.querySelectorAll('.stat-card, .table-section');
    
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '0';
                entry.target.style.transform = 'translateY(20px)';
                
                setTimeout(() => {
                    entry.target.style.transition = 'all 0.5s ease';
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, 100);
                
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    cards.forEach(card => observer.observe(card));
}

// === SET ACTIVE MENU ===
function setActiveMenu() {
    const currentPath = window.location.pathname;
    const menuItems = document.querySelectorAll('.menu-item');
    
    menuItems.forEach(item => {
        const href = item.getAttribute('href');
        if (href && currentPath.includes(href)) {
            item.classList.add('active');
        }
    });
}

// === TOOLTIPS ===
function initTooltips() {
    const tooltipElements = document.querySelectorAll('[data-tooltip]');
    
    tooltipElements.forEach(element => {
        element.addEventListener('mouseenter', function(e) {
            const tooltip = document.createElement('div');
            tooltip.className = 'tooltip';
            tooltip.textContent = this.getAttribute('data-tooltip');
            document.body.appendChild(tooltip);
            
            const rect = this.getBoundingClientRect();
            tooltip.style.top = rect.top - tooltip.offsetHeight - 8 + 'px';
            tooltip.style.left = rect.left + (rect.width / 2) - (tooltip.offsetWidth / 2) + 'px';
        });
        
        element.addEventListener('mouseleave', function() {
            const tooltip = document.querySelector('.tooltip');
            if (tooltip) tooltip.remove();
        });
    });
}

// === UTILITY FUNCTIONS ===

// Format number with thousand separator
function formatNumber(num) {
    return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

// Format date to Indonesian format
function formatDate(dateString) {
    const months = [
        'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
        'Jul', 'Agt', 'Sep', 'Okt', 'Nov', 'Des'
    ];
    
    const date = new Date(dateString);
    const day = date.getDate();
    const month = months[date.getMonth()];
    const year = date.getFullYear();
    
    return `${day} ${month} ${year}`;
}

// Show notification (optional)
function showNotification(message, type = 'success') {
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.textContent = message;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.style.opacity = '1';
        notification.style.transform = 'translateY(0)';
    }, 100);
    
    setTimeout(() => {
        notification.style.opacity = '0';
        notification.style.transform = 'translateY(-20px)';
        setTimeout(() => notification.remove(), 300);
    }, 3000);
}

// === RESPONSIVE HANDLING ===
window.addEventListener('resize', function() {
    // Close sidebar on resize to desktop
    if (window.innerWidth > 768) {
        const sidebar = document.getElementById('sidebar');
        if (sidebar.classList.contains('active')) {
            sidebar.classList.remove('active');
            document.body.style.overflow = '';
        }
    }
});

// === ADD CSS ANIMATIONS ===
const style = document.createElement('style');
style.textContent = `
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .tooltip {
        position: fixed;
        background: rgba(0, 0, 0, 0.9);
        color: white;
        padding: 8px 12px;
        border-radius: 6px;
        font-size: 12px;
        z-index: 10000;
        pointer-events: none;
        animation: fadeIn 0.2s ease;
    }
    
    .notification {
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 16px 24px;
        border-radius: 10px;
        font-weight: 600;
        z-index: 10000;
        opacity: 0;
        transform: translateY(-20px);
        transition: all 0.3s ease;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }
    
    .notification-success {
        background: #10b981;
        color: white;
    }
    
    .notification-error {
        background: #ef4444;
        color: white;
    }
    
    .notification-info {
        background: #3b82f6;
        color: white;
    }
`;
document.head.appendChild(style);

// === EXPORT FUNCTIONS ===
// Make functions available globally
window.toggleSidebar = toggleSidebar;
window.toggleSearch = toggleSearch;
window.filterTable = filterTable;
window.showNotification = showNotification;