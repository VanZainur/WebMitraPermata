<?= $this->extend('layout/navbar.php') ?>
<?= $this->section('content') ?>

<link rel="stylesheet" href="<?= base_url('assets/css/akademik.css') ?>">

<div class="akademik-container">
    <!-- Animated Background Elements -->
    <div class="bg-decoration">
        <div class="circle circle-1"></div>
        <div class="circle circle-2"></div>
        <div class="circle circle-3"></div>
    </div>

    <!-- Header Section -->
    <div class="header-section">
        <div class="badge">Pendidikan Berkualitas</div>
        <h1 class="main-title">Program Akademik</h1>
        <p class="subtitle">Membentuk generasi unggul melalui pendidikan holistik dari TK hingga SMA dengan kurikulum berbasis karakter dan prestasi</p>
    </div>

    <!-- Stats Section -->
    <div class="stats-container">
        <div class="stat-item">
            <div class="stat-number" data-target="4">0</div>
            <div class="stat-label">Jenjang Pendidikan</div>
        </div>
        <div class="stat-item">
            <div class="stat-number" data-target="95">0</div>
            <div class="stat-label">Tingkat Kelulusan</div>
        </div>
        <div class="stat-item">
            <div class="stat-number" data-target="50">0</div>
            <div class="stat-label">Program Unggulan</div>
        </div>
    </div>

    <!-- Akademik Grid -->
    <div class="akademik-grid">
        <!-- Jenjang TK -->
        <a href="<?= base_url('akademik/tk') ?>" class="akademik-card" data-category="early">
            <div class="card-image">
                <img src="<?= base_url('assets/images/jenjang/Tk2.jpg') ?>" alt="Taman Kanak-Kanak">
                <div class="image-overlay">
                    <span class="view-details">Lihat Detail →</span>
                </div>
            </div>
            <div class="card-content">
                <div class="card-category">Usia 4-6 Tahun</div>
                <h3>Taman Kanak-Kanak (TK)</h3>
                <p>Membangun fondasi pembelajaran melalui pendekatan bermain yang menyenangkan, mengembangkan kreativitas, motorik, dan kemampuan sosial anak.</p>
                <div class="card-features">
                    <span class="feature-tag">Play-Based Learning</span>
                    <span class="feature-tag">Karakter Building</span>
                </div>
            </div>
        </a>

        <!-- Jenjang SD -->
        <a href="<?= base_url('akademik/sd') ?>" class="akademik-card" data-category="primary">
            <div class="card-image">
                <img src="<?= base_url('assets/images/jenjang/SD.png') ?>" alt="Sekolah Dasar">
                <div class="image-overlay">
                    <span class="view-details">Lihat Detail →</span>
                </div>
            </div>
            <div class="card-content">
                <div class="card-category">Kelas 1-6</div>
                <h3>Sekolah Dasar (SD)</h3>
                <p>Pendidikan dasar komprehensif yang membangun literasi, numerasi, dan karakter kuat sebagai fondasi pembelajaran berkelanjutan.</p>
                <div class="card-features">
                    <span class="feature-tag">Kurikulum Merdeka</span>
                    <span class="feature-tag">Literasi Digital</span>
                </div>
            </div>
        </a>

        <!-- Jenjang SMP -->
        <a href="<?= base_url('akademik/smp') ?>" class="akademik-card" data-category="junior">
            <div class="card-image">
                <img src="<?= base_url('assets/images/jenjang/SMP.png') ?>" alt="Sekolah Menengah Pertama">
                <div class="image-overlay">
                    <span class="view-details">Lihat Detail →</span>
                </div>
            </div>
            <div class="card-content">
                <div class="card-category">Kelas 7-9</div>
                <h3>Sekolah Menengah Pertama (SMP)</h3>
                <p>Mengasah kemampuan berpikir kritis, problem solving, dan keterampilan abad 21 untuk persiapan pendidikan lanjutan.</p>
                <div class="card-features">
                    <span class="feature-tag">STEM Education</span>
                    <span class="feature-tag">Critical Thinking</span>
                </div>
            </div>
        </a>

        <!-- Jenjang SMK -->
        <a href="<?= base_url('akademik/sma') ?>" class="akademik-card" data-category="senior">
            <div class="card-image">
                <img src="<?= base_url('assets/images/jenjang/SMK2.jpg') ?>" alt="Sekolah Menengah Kejuruan">
                <div class="image-overlay">
                    <span class="view-details">Lihat Detail →</span>
                </div>
            </div>
            <div class="card-content">
                <div class="card-category">Kelas 10-12</div>
                <h3>Sekolah Menengah Kejuruan (SMK)</h3>
                <p>Persiapan optimal menuju perguruan tinggi dan karir dengan penjurusan akademik yang mendalam dan bimbingan konseling profesional.</p>
                <div class="card-features">
                    <span class="feature-tag">Penjurusan TKJ&TKR</span>
                    <span class="feature-tag">PTN Preparation</span>
                </div>
            </div>
        </a>

        <!-- Program Unggulan -->
        <a href="<?= base_url('akademik/program-unggulan') ?>" class="akademik-card akademik-card-featured" data-category="special">
            <div class="featured-badge">✨ Featured</div>
            <div class="card-image">
                <img src="<?= base_url('assets/images/akademik/program.jpg') ?>" alt="Program Unggulan">
                <div class="image-overlay">
                    <span class="view-details">Lihat Detail →</span>
                </div>
            </div>
            <div class="card-content">
                <div class="card-category">Program Khusus</div>
                <h3>Program Unggulan</h3>
                <p>Kelas bilingual, olimpiade sains, robotika, entrepreneurship, dan program akselerasi untuk siswa berprestasi tinggi.</p>
                <div class="card-features">
                    <span class="feature-tag">Bilingual Class</span>
                    <span class="feature-tag">Olimpiade</span>
                    <span class="feature-tag">Robotika</span>
                </div>
            </div>
        </a>
    </div>

    <!-- CTA Section -->
    <div class="cta-section">
        <h2>Tertarik Bergabung?</h2>
        <p>Daftarkan putra-putri Anda dan wujudkan masa depan cemerlang bersama kami</p>
        <a href="<?= base_url('pendaftaran') ?>" class="cta-button">Daftar Sekarang</a>
    </div>
</div>

<script src="<?= base_url('assets/js/akademik.js') ?>"></script>

<?= $this->endSection() ?>