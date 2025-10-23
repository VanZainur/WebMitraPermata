<?= $this->extend('layout/navbar.php') ?>
<?= $this->section('content') ?>

<link rel="stylesheet" href="<?= base_url('assets/css/struktur.css') ?>">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">


<!-- Hero Section -->
<section class="hero-struktur">
    <div class="hero-decoration"></div>
    <div class="hero-decoration"></div>
    <div class="hero-decoration"></div>
    
    <div class="hero-overlay">
        <h1>Struktur Organisasi</h1>
        <p>Yayasan Mitra Permata</p>
    </div>
</section>

<!-- Main Content -->
<div class="main-content">
    <section class="struktur-section">
        <div class="section-title">
            <h2>Tim Kepemimpinan</h2>
            <p>Berkenalan dengan para pemimpin yang berdedikasi memajukan pendidikan di Yayasan Mitra Permata</p>
        </div>

        <div class="struktur-grid">
            <!-- Ketua Yayasan -->
            <div class="struktur-card">
                <h3>Ibu Siti Aminah</h3>
                <div class="position-badge">Ketua Yayasan</div>
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>ketua@mitrapermata.edu</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+62 812-3456-7890</span>
                    </div>
                </div>
            </div>

            <!-- Kepala Sekolah SMK -->
            <div class="struktur-card">
                <h3>Ibu Dewi Lestari</h3>
                <div class="position-badge">Kepala Sekolah SMK</div>
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>kepsek.smk@mitrapermata.edu</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+62 813-4567-8901</span>
                    </div>
                </div>
            </div>

            <!-- Kepala Sekolah SMP -->
            <div class="struktur-card">
                <h3>Bapak Ahmad Fauzi</h3>
                <div class="position-badge">Kepala Sekolah SMP</div>
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>kepsek.smp@mitrapermata.edu</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+62 814-5678-9012</span>
                    </div>
                </div>
            </div>

            <!-- Bendahara -->
            <div class="struktur-card">
                <h3>Ibu Nur Aisyah</h3>
                <div class="position-badge">Kepala Sekolah SD</div>
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>bendahara@mitrapermata.edu</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+62 815-6789-0123</span>
                    </div>
                </div>
            </div>


          <!-- Ketua Yayasan -->
            <div class="struktur-card">
                <h3>Ibu Siti Aminah</h3>
                <div class="position-badge">Kepala Sekolah TK</div>
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>ketua@mitrapermata.edu</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+62 812-3456-7890</span>
                    </div>
                </div>
            </div>

            <!-- Kepala Sekolah SMK -->
            <div class="struktur-card">
                <h3>Ibu Dewi Lestari</h3>
                <div class="position-badge">Kepala PKBM</div>
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>kepsek.smk@mitrapermata.edu</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+62 813-4567-8901</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
// Add smooth reveal animation when scrolling
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observe all cards
document.querySelectorAll('.struktur-card').forEach((card, index) => {
    card.style.opacity = '0';
    card.style.transform = 'translateY(50px)';
    card.style.transition = `all 0.6s ease ${index * 0.1}s`;
    observer.observe(card);
});

// Add parallax effect to hero decorations
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const decorations = document.querySelectorAll('.hero-decoration');
    
    decorations.forEach((decoration, index) => {
        const speed = (index + 1) * 0.5;
        decoration.style.transform = `translateY(${scrolled * speed}px)`;
    });
});
</script>

<?= $this->endSection() ?>