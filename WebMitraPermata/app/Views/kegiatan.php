<?= $this->extend('layout/navbar.php') ?>
<?= $this->section('content') ?>

<link rel="stylesheet" href="<?= base_url('assets/css/kegiatan.css') ?>">

<!-- Hero Section -->
<div class="kegiatan-hero">
    <div class="hero-content">
        <div class="hero-badge">
            <i class="fas fa-trophy"></i>
            <span>Kegiatan & Ekstrakurikuler</span>
        </div>
        <h1>Kembangkan Potensi dan Bakat Terbaik</h1>
        <p>Berbagai kegiatan menarik dan ekstrakurikuler berkualitas untuk mengembangkan potensi, bakat, dan minat siswa dalam suasana yang menyenangkan dan edukatif.</p>
        <div class="hero-stats">
            <div class="stat-item">
                <span class="stat-number">15+</span>
                <span class="stat-label">Ekstrakurikuler</span>
            </div>
            <div class="stat-divider"></div>
            <div class="stat-item">
                <span class="stat-number">500+</span>
                <span class="stat-label">Siswa Aktif</span>
            </div>
            <div class="stat-divider"></div>
            <div class="stat-item">
                <span class="stat-number">25</span>
                <span class="stat-label">Prestasi/Tahun</span>
            </div>
        </div>
    </div>
    <div class="hero-decoration">
        <div class="floating-element element-1"></div>
        <div class="floating-element element-2"></div>
        <div class="floating-element element-3"></div>
    </div>
</div>

<!-- Categories Section -->
<div class="categories-section">
    <div class="container">
        <div class="section-header">
            <h2>Kategori Kegiatan</h2>
            <p>Pilihan beragam kegiatan yang disesuaikan dengan minat dan bakat setiap siswa</p>
        </div>
        <div class="category-tabs">
            <button class="tab-btn active" data-category="all">Semua Kegiatan</button>
            <button class="tab-btn" data-category="olahraga">Olahraga</button>
            <button class="tab-btn" data-category="seni">Seni & Budaya</button>
            <button class="tab-btn" data-category="akademik">Akademik</button>
            <button class="tab-btn" data-category="karakter">Pembentukan Karakter</button>
        </div>
    </div>
</div>

<!-- Activities Grid -->
<div class="activities-section">
    <div class="container">
        <div class="kegiatan-grid">
            <!-- Pramuka -->
            <div class="kegiatan-item" data-category="karakter">
                <div class="activity-image">
                    <img src="https://via.placeholder.com/400x250/059669/ffffff?text=PRAMUKA" alt="Pramuka">
                    <div class="activity-overlay">
                        <div class="overlay-content">
                            <i class="fas fa-campground"></i>
                            <span>Lihat Detail</span>
                        </div>
                    </div>
                    <div class="activity-badge">Karakter</div>
                </div>
                <div class="activity-content">
                    <h3>Pramuka</h3>
                    <p>Membentuk karakter disiplin, mandiri, dan kepemimpinan melalui kegiatan kepramukaan yang menantang dan edukatif.</p>
                    <div class="activity-features">
                        <div class="feature-item">
                            <i class="fas fa-users"></i>
                            <span>50+ Anggota</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-calendar"></i>
                            <span>Setiap Sabtu</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-medal"></i>
                            <span>5 Prestasi</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Paskibra -->
            <div class="kegiatan-item" data-category="karakter">
                <div class="activity-image">
                    <img src="https://via.placeholder.com/400x250/047857/ffffff?text=PASKIBRA" alt="Paskibra">
                    <div class="activity-overlay">
                        <div class="overlay-content">
                            <i class="fas fa-flag"></i>
                            <span>Lihat Detail</span>
                        </div>
                    </div>
                    <div class="activity-badge">Karakter</div>
                </div>
                <div class="activity-content">
                    <h3>Paskibra</h3>
                    <p>Latihan baris-berbaris dan upacara bendera untuk menanamkan jiwa nasionalisme dan kedisiplinan tinggi.</p>
                    <div class="activity-features">
                        <div class="feature-item">
                            <i class="fas fa-users"></i>
                            <span>30+ Anggota</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-calendar"></i>
                            <span>3x Seminggu</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-medal"></i>
                            <span>3 Prestasi</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Olahraga -->
            <div class="kegiatan-item" data-category="olahraga">
                <div class="activity-image">
                    <img src="https://via.placeholder.com/400x250/10b981/ffffff?text=OLAHRAGA" alt="Olahraga">
                    <div class="activity-overlay">
                        <div class="overlay-content">
                            <i class="fas fa-running"></i>
                            <span>Lihat Detail</span>
                        </div>
                    </div>
                    <div class="activity-badge">Olahraga</div>
                </div>
                <div class="activity-content">
                    <h3>Olahraga</h3>
                    <p>Berbagai kegiatan olahraga seperti futsal, voli, bulutangkis, dan basket untuk kesehatan fisik dan mental.</p>
                    <div class="activity-features">
                        <div class="feature-item">
                            <i class="fas fa-users"></i>
                            <span>80+ Anggota</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-calendar"></i>
                            <span>Setiap Hari</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-medal"></i>
                            <span>8 Prestasi</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Seni Musik -->
            <div class="kegiatan-item" data-category="seni">
                <div class="activity-image">
                    <img src="https://via.placeholder.com/400x250/065f46/ffffff?text=MUSIK" alt="Seni Musik">
                    <div class="activity-overlay">
                        <div class="overlay-content">
                            <i class="fas fa-music"></i>
                            <span>Lihat Detail</span>
                        </div>
                    </div>
                    <div class="activity-badge">Seni</div>
                </div>
                <div class="activity-content">
                    <h3>Seni Musik</h3>
                    <p>Ekstrakurikuler musik untuk mengasah kreativitas siswa dalam bidang seni dengan berbagai alat musik modern.</p>
                    <div class="activity-features">
                        <div class="feature-item">
                            <i class="fas fa-users"></i>
                            <span>35+ Anggota</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-calendar"></i>
                            <span>2x Seminggu</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-medal"></i>
                            <span>4 Prestasi</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Seni Tari -->
            <div class="kegiatan-item" data-category="seni">
                <div class="activity-image">
                    <img src="https://via.placeholder.com/400x250/14532d/ffffff?text=TARI" alt="Seni Tari">
                    <div class="activity-overlay">
                        <div class="overlay-content">
                            <i class="fas fa-theater-masks"></i>
                            <span>Lihat Detail</span>
                        </div>
                    </div>
                    <div class="activity-badge">Seni</div>
                </div>
                <div class="activity-content">
                    <h3>Seni Tari</h3>
                    <p>Mempelajari tarian tradisional maupun modern untuk melestarikan budaya dan mengembangkan kreativitas.</p>
                    <div class="activity-features">
                        <div class="feature-item">
                            <i class="fas fa-users"></i>
                            <span>25+ Anggota</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-calendar"></i>
                            <span>2x Seminggu</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-medal"></i>
                            <span>6 Prestasi</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- English Club -->
            <div class="kegiatan-item" data-category="akademik">
                <div class="activity-image">
                    <img src="https://via.placeholder.com/400x250/166534/ffffff?text=ENGLISH" alt="English Club">
                    <div class="activity-overlay">
                        <div class="overlay-content">
                            <i class="fas fa-globe"></i>
                            <span>Lihat Detail</span>
                        </div>
                    </div>
                    <div class="activity-badge">Akademik</div>
                </div>
                <div class="activity-content">
                    <h3>English Club</h3>
                    <p>Kegiatan berbahasa Inggris untuk meningkatkan kemampuan komunikasi global dan persiapan masa depan.</p>
                    <div class="activity-features">
                        <div class="feature-item">
                            <i class="fas fa-users"></i>
                            <span>40+ Anggota</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-calendar"></i>
                            <span>2x Seminggu</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-medal"></i>
                            <span>7 Prestasi</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Robotika -->
            <div class="kegiatan-item" data-category="akademik">
                <div class="activity-image">
                    <img src="https://via.placeholder.com/400x250/15803d/ffffff?text=ROBOTIKA" alt="Robotika">
                    <div class="activity-overlay">
                        <div class="overlay-content">
                            <i class="fas fa-robot"></i>
                            <span>Lihat Detail</span>
                        </div>
                    </div>
                    <div class="activity-badge">Akademik</div>
                </div>
                <div class="activity-content">
                    <h3>Robotika</h3>
                    <p>Mempelajari teknologi robotika dan programming untuk mempersiapkan generasi digital masa depan.</p>
                    <div class="activity-features">
                        <div class="feature-item">
                            <i class="fas fa-users"></i>
                            <span>20+ Anggota</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-calendar"></i>
                            <span>2x Seminggu</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-medal"></i>
                            <span>3 Prestasi</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Jurnalistik -->
            <div class="kegiatan-item" data-category="akademik">
                <div class="activity-image">
                    <img src="https://via.placeholder.com/400x250/22c55e/ffffff?text=JURNALISTIK" alt="Jurnalistik">
                    <div class="activity-overlay">
                        <div class="overlay-content">
                            <i class="fas fa-newspaper"></i>
                            <span>Lihat Detail</span>
                        </div>
                    </div>
                    <div class="activity-badge">Akademik</div>
                </div>
                <div class="activity-content">
                    <h3>Jurnalistik</h3>
                    <p>Mengasah kemampuan menulis, fotografi, dan jurnalistik untuk menjadi komunikator yang handal.</p>
                    <div class="activity-features">
                        <div class="feature-item">
                            <i class="fas fa-users"></i>
                            <span>15+ Anggota</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-calendar"></i>
                            <span>1x Seminggu</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-medal"></i>
                            <span>2 Prestasi</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Achievement Section -->
<div class="achievement-section">
    <div class="container">
        <div class="section-header">
            <h2>Prestasi Terbaru</h2>
            <p>Pencapaian membanggakan dari berbagai kegiatan ekstrakurikuler</p>
        </div>
        <div class="achievement-grid">
            <div class="achievement-item">
                <div class="achievement-icon">
                    <i class="fas fa-trophy"></i>
                </div>
                <h4>Juara 1 Lomba Pramuka</h4>
                <p>Tingkat Kabupaten 2024</p>
            </div>
            <div class="achievement-item">
                <div class="achievement-icon">
                    <i class="fas fa-medal"></i>
                </div>
                <h4>Juara 2 Futsal</h4>
                <p>Antar Sekolah Se-Kota</p>
            </div>
            <div class="achievement-item">
                <div class="achievement-icon">
                    <i class="fas fa-award"></i>
                </div>
                <h4>Juara 3 Tari Tradisional</h4>
                <p>Festival Budaya Daerah</p>
            </div>
            <div class="achievement-item">
                <div class="achievement-icon">
                    <i class="fas fa-star"></i>
                </div>
                <h4>Juara 1 English Speech</h4>
                <p>Kompetisi Regional 2024</p>
            </div>
        </div>
    </div>
</div>

<!-- Call to Action -->
<div class="cta-section">
    <div class="container">
        <div class="cta-content">
            <div class="cta-text">
                <h2>Bergabung dengan Kegiatan Kami</h2>
                <p>Temukan dan kembangkan potensi terbaik Anda bersama teman-teman yang berprestasi.</p>
            </div>
            <div class="cta-buttons">
                <a href="/pendaftaran" class="btn-primary">
                    <i class="fas fa-user-plus"></i>
                    Daftar Sekarang
                </a>
                <a href="/kontak" class="btn-secondary">
                    <i class="fas fa-info-circle"></i>
                    Info Lebih Lanjut
                </a>
            </div>
        </div>
    </div>
</div>

<script>
// Filter functionality
document.addEventListener('DOMContentLoaded', function() {
    const tabBtns = document.querySelectorAll('.tab-btn');
    const kegiatanItems = document.querySelectorAll('.kegiatan-item');
    
    tabBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const category = this.dataset.category;
            
            // Update active tab
            tabBtns.forEach(tab => tab.classList.remove('active'));
            this.classList.add('active');
            
            // Filter items
            kegiatanItems.forEach(item => {
                if (category === 'all' || item.dataset.category === category) {
                    item.style.display = 'block';
                    item.style.animation = 'fadeInUp 0.5s ease forwards';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});
</script>

<?= $this->endSection() ?>