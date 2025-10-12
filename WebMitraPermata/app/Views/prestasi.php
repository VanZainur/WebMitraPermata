<?= $this->extend('layout/navbar.php') ?>
<?= $this->section('content') ?>

<link rel="stylesheet" href="<?= base_url('assets/css/prestasi.css') ?>">

<!-- Prestasi Grid -->
<div class="prestasi-section">
    <div class="container">
        <div class="section-header">
            <h2>Prestasi & Penghargaan</h2>
            <p>Berbagai pencapaian membanggakan yang diraih siswa-siswi dalam bidang akademik, olahraga, seni, dan karakter</p>
        </div>
        
        <div class="prestasi-grid">
            <!-- Prestasi Olahraga Badminton -->
            <div class="prestasi-item">
                <div class="prestasi-rank rank-1">
                    <i class="fas fa-medal"></i>
                    <span>Juara 1</span>
                </div>
                <div class="prestasi-image">
                    <img src="<?= base_url('assets/images/achievements/Juara 1 Badminton.png') ?>" alt="Lomba Badminton">
                </div>
                <div class="prestasi-content">
                    <h3>Juara 1 Lomba Badminton</h3>
                    <p>Siswa Mitra Permata Meraih Juara 1 Lomba Badminton dalam Kejuaraan Kota Tangerang Selatan 2025.</p>
                </div>
            </div>

            <!-- Prestasi Olahraga Badminton -->
            <div class="prestasi-item">
                <div class="prestasi-rank rank-2">
                    <i class="fas fa-crown"></i>
                    <span>Juara 2</span>
                </div>
                <div class="prestasi-image">
                    <img src="<?= base_url('assets/images/achievements/Juara 2 BNI Sirkuit.png') ?>"alt="Lomba Badminton">
                </div>
                <div class="prestasi-content">
                    <h3>Juara 2 Lomba Badminton</h3>
                    <p>Siswa Mitra Permata Meraih Juara 2 Lomba Badminton dalam BNI SIRKUIT NASIONAL NTB 2025.</p>
                </div>
            </div>

            <!-- Prestasi Olahraga Badminton -->
            <div class="prestasi-item">
                <div class="prestasi-rank rank-3">
                    <i class="fas fa-crown"></i>
                    <span>Juara 3</span>
                </div>
                <div class="prestasi-image">
                    <img src="<?= base_url('assets/images/achievements/Juara 3 Voly.png') ?>"alt="Lomba Badminton">
                </div>
                <div class="prestasi-content">
                    <h3>Juara 3 Lomba Voly</h3>
                    <p>Siswa Mitra Permata Meraih Juara 3 Lomba Volly SLTA Se-Banten dalam Piala Rektor UIN SMH BANTEN 2025.</p>
                </div>
            </div>

            <!-- Prestasi Olahraga Badminton -->
            <div class="prestasi-item">
                <div class="prestasi-rank rank-1">
                    <i class="fas fa-medal"></i>
                    <span>Juara 1</span>
                </div>
                <div class="prestasi-image">
                    <img src="<?= base_url('assets/images/achievements/Juara 1 Badminton a.png') ?>" alt="Lomba Badminton">
                </div>
                <div class="prestasi-content">
                    <h3>Juara 1 Lomba Badminton</h3>
                    <p>Siswa Mitra Permata Meraih Juara 1 Lomba Badminton O2SN SMK Antar Gugus Se-Kabupaten Tangerang.</p>
                </div>
            </div>

            <!-- Prestasi Olahraga Volly -->
            <div class="prestasi-item">
                <div class="prestasi-rank rank-1">
                    <i class="fas fa-medal"></i>
                    <span>Juara 1</span>
                </div>
                <div class="prestasi-image">
                    <img src="<?= base_url('assets/images/achievements/Juara 1 Voly.png') ?>" alt="Lomba Badminton">
                </div>
                <div class="prestasi-content">
                    <h3>Juara 1 Lomba Volly</h3>
                    <p>Siswa Mitra Permata Meraih Juara 1 Lomba Volly OSIS CUP di SMAN 4 Kabupaten Tangerang.</p>
                </div>
            </div>

            <!-- Prestasi English Speech -->
            <div class="prestasi-item">
                <div class="prestasi-rank rank-2">
                    <i class="fas fa-crown"></i>
                    <span>Juara 2</span>
                </div>
                <div class="prestasi-image">
                    <img src="<?= base_url('assets/images/achievements/Juara 2 dan 3 Voly.png') ?>" alt="Lomba Badminton">
                </div>
                <div class="prestasi-content">
                    <h3>Juara 2 & 3 Lomba Volly</h3>
                    <p>Siswa & Siswi Mitra Permata Meraih Juara 2 & 3 Lomba Volly O2SN Antar Gugus Se-Kabupaten Tangerang.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Statistics Section -->
<div class="statistics-section">
    <div class="container">
        <div class="section-header">
            <h2>Statistik Prestasi</h2>
            <p>Data pencapaian prestasi dalam berbagai tingkatan kompetisi</p>
        </div>
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon gold">
                    <i class="fas fa-trophy"></i>
                </div>
                <h3>20</h3>
                <p>Juara 1</p>
            </div>
            <div class="stat-card">
                <div class="stat-icon silver">
                    <i class="fas fa-medal"></i>
                </div>
                <h3>30</h3>
                <p>Juara 2</p>
            </div>
            <div class="stat-card">
                <div class="stat-icon bronze">
                    <i class="fas fa-award"></i>
                </div>
                <h3>40</h3>
                <p>Juara 3</p>
            </div>
            <div class="stat-card">
                <div class="stat-icon blue">
                    <i class="fas fa-star"></i>
                </div>
                <h3>20</h3>
                <p>Penghargaan Khusus</p>
            </div>
        </div>
    </div>
</div>

<!-- Recent Achievements -->
<div class="recent-achievements">
    <div class="container">
        <div class="section-header">
            <h2>Prestasi Terbaru</h2>
            <p>Pencapaian terkini yang membanggakan dari siswa-siswi berprestasi</p>
        </div>
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-date">
                    <span>Sept 2025</span>
                </div>
                <div class="timeline-content">
                    <div class="timeline-icon gold">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <h4>Juara 1 Lomba Volly Putra</h4>
                    <p>Siswa Mitra Permata Meraih Juara 1 Lomba Volly OSIS CUP di SMAN 4 Kabupaten Tangerang.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-date">
                    <span>Sept 2025</span>
                </div>
                <div class="timeline-content">
                    <div class="timeline-icon gold">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <h4>Juara 1 Badminton</h4>
                    <p>Siswa Mitra Permata Meraih Juara 1 Lomba Badminton dalam Kejuaraan Kota Tangerang Selatan 2025.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-date">
                    <span>Sept 2025</span>
                </div>
                <div class="timeline-content">
                    <div class="timeline-icon gold">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <h4>Juara 1 Badminton</h4>
                    <p>Siswa Mitra Permata Meraih Juara 1 Lomba Badminton O2SN SMK Antar Gugus Se-Kabupaten Tangerang.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Call to Action -->
<div class="cta-section">
    <div class="container">
        <div class="cta-content">
            <div class="cta-text">
                <h2>Raih Prestasi Bersama Kami</h2>
                <p>Bergabunglah dengan sekolah yang terbukti menghasilkan siswa-siswi berprestasi di berbagai bidang.</p>
            </div>
            <div class="cta-buttons">
                <a href="/pendaftaran" class="btn-primary">
                    <i class="fas fa-user-plus"></i>
                    Daftar Sekarang
                </a>
                <a href="/kegiatan" class="btn-secondary">
                    <i class="fas fa-trophy"></i>
                    Lihat Kegiatan
                </a>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add animation to timeline items on scroll
    const timelineItems = document.querySelectorAll('.timeline-item');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
            }
        });
    });
    
    timelineItems.forEach(item => {
        observer.observe(item);
    });
});
</script>

<?= $this->endSection() ?>