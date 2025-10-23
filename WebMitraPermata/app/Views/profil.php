<?= $this->extend('layout/navbar.php') ?>
<?= $this->section('content') ?>

<link rel="stylesheet" href="<?= base_url('assets/css/profil.css') ?>">

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<!-- Hero Section -->
<section class="hero-profil">
    <div class="hero-pattern"></div>
    <div class="hero-container">
        <div class="hero-image">
            <img src="<?= base_url('assets/images/1.jpg') ?>" alt="Yayasan Mitra Permata" class="hero-img">
        </div>
        <div class="hero-content">
            <div class="hero-badge">
                <i class="fas fa-heart"></i>
                <span>Peduli & Berakhlak</span>
            </div>
            <h1>Yayasan Mitra Permata</h1>
            <p class="hero-subtitle">Membangun generasi yang berilmu, peduli, dan berakhlak mulia sejak tahun 2004</p>
            <div class="hero-stats">
                <div class="stat-item">
                    <strong>20+</strong>
                    <span>Tahun Pengalaman</span>
                </div>
                <div class="stat-item">
                    <strong>1000+</strong>
                    <span>Penerima Manfaat</span>
                </div>
                <div class="stat-item">
                    <strong>50+</strong>
                    <span>Program Sosial</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<div class="main-container">
    <!-- Deskripsi Section -->
    <section class="content-section intro-section">
        <div class="section-content">
            <div class="intro-text">
                <h2>Tentang Kami</h2>
                <p>
                    Yayasan Mitra Permata hadir sebagai lembaga yang berkomitmen tinggi dalam bidang pendidikan, sosial, dan kemanusiaan. 
                    Selama lebih dari dua dekade, kami telah konsisten memberikan kontribusi nyata dalam mencetak generasi yang tidak hanya 
                    berilmu pengetahuan, tetapi juga memiliki kepedulian sosial yang tinggi dan berakhlak mulia.
                </p>
                <p>
                    Berbagai program unggulan seperti pemberian beasiswa pendidikan, pelatihan keterampilan, kegiatan sosial kemasyarakatan, 
                    dan program pemberdayaan ekonomi menjadi wujud nyata komitmen kami untuk terus berkontribusi positif bagi kemajuan bangsa.
                </p>
            </div>
            <div class="intro-visual">
                <div class="visual-card">
                    <i class="fas fa-graduation-cap"></i>
                    <h3>Pendidikan</h3>
                    <p>Program beasiswa dan peningkatan kualitas pendidikan</p>
                </div>
                <div class="visual-card">
                    <i class="fas fa-hands-helping"></i>
                    <h3>Sosial</h3>
                    <p>Kegiatan bakti sosial dan pemberdayaan masyarakat</p>
                </div>
                <div class="visual-card">
                    <i class="fas fa-heart"></i>
                    <h3>Kemanusiaan</h3>
                    <p>Bantuan kemanusiaan dan program kesehatan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Visi Misi Section -->
    <section class="content-section visi-misi-section">
        <div class="section-content">
            <!-- Visi -->
            <div class="visi-card">
                <div class="card-header">
                    <div class="icon-wrapper visi-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h2>Visi</h2>
                </div>
                <div class="card-content">
                    <p>
                        Menjadi yayasan yang unggul dan terpercaya dalam bidang pendidikan, sosial, dan kemanusiaan 
                        demi terciptanya generasi yang berilmu, peduli, dan berakhlak mulia untuk kemajuan bangsa dan negara.
                    </p>
                </div>
            </div>

            <!-- Misi -->
            <div class="misi-card">
                <div class="card-header">
                    <div class="icon-wrapper misi-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h2>Misi</h2>
                </div>
                <div class="card-content">
                    <div class="misi-grid">
                        <div class="misi-item">
                            <div class="misi-number">01</div>
                            <div class="misi-content">
                                <h3>Pendidikan Berkualitas</h3>
                                <p>Menyelenggarakan dan mendukung pendidikan yang berkualitas, inklusif, dan dapat diakses oleh semua kalangan</p>
                            </div>
                        </div>
                        <div class="misi-item">
                            <div class="misi-number">02</div>
                            <div class="misi-content">
                                <h3>Kepedulian Sosial</h3>
                                <p>Mendorong dan mengimplementasikan program kepedulian sosial yang memberikan dampak nyata di masyarakat</p>
                            </div>
                        </div>
                        <div class="misi-item">
                            <div class="misi-number">03</div>
                            <div class="misi-content">
                                <h3>Kegiatan Kemanusiaan</h3>
                                <p>Mengembangkan kegiatan kemanusiaan yang berkesinambungan dan memberikan manfaat jangka panjang</p>
                            </div>
                        </div>
                        <div class="misi-item">
                            <div class="misi-number">04</div>
                            <div class="misi-content">
                                <h3>Pemberdayaan Masyarakat</h3>
                                <p>Memberdayakan masyarakat melalui pelatihan keterampilan, pendampingan, dan program pengembangan ekonomi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="content-section cta-section">
        <div class="cta-content">
            <h2>Mari Bergabung Bersama Kami</h2>
            <p>Jadilah bagian dari perubahan positif dan berkontribusilah untuk kemajuan bangsa</p>
            <div class="cta-buttons">
                <a href="/kontak" class="btn btn-primary">
                    <i class="fas fa-hands-helping"></i>
                    Kontak Kami
                </a>
                <a href="/akademik" class="btn btn-secondary">
                    <i class="fas fa-users"></i>
                    Akademik
                </a>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection() ?>