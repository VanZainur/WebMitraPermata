<?= $this->extend('layout/navbar.php') ?>

<?= $this->section('title') ?>Sekolah Mitra Permata<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Include CSS -->
<link rel="stylesheet" href="<?= base_url('assets/css/home.css') ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

<!-- ========================================
     HERO SECTION WITH CAROUSEL
     ======================================== -->
<section class="hero-section">
  <!-- Background Carousel -->
  <div class="carousel-container">
    <div class="carousel-slide active slide-1"></div>
    <div class="carousel-slide slide-2"></div>
    <div class="carousel-slide slide-3"></div>
    <div class="carousel-slide slide-4"></div>
    <div class="carousel-slide slide-5"></div>
  </div>
  
  <!-- Navigation Controls -->
  <button class="carousel-nav carousel-prev" onclick="prevSlide()">❮</button>
  <button class="carousel-nav carousel-next" onclick="nextSlide()">❯</button>
  
  <!-- Carousel Indicators -->
  <div class="carousel-indicators">
    <span class="carousel-dot active" onclick="currentSlide(1)"></span>
    <span class="carousel-dot" onclick="currentSlide(2)"></span>
    <span class="carousel-dot" onclick="currentSlide(3)"></span>
    <span class="carousel-dot" onclick="currentSlide(4)"></span>
    <span class="carousel-dot" onclick="currentSlide(5)"></span>
  </div>
  
  <!-- Main Content -->
  <div class="hero-content">
    <div class="hero-text">
      <h1 class="hero-title">Kembangkan Potensi Belajar Hal-Hal Baru</h1>
      <p class="hero-subtitle">
        Bergabunglah dengan TK-SD-SMP-SMK-PKBM-LKP Mitra Permata dan rasakan pengalaman 
        pendidikan yang lengkap dari usia dini hingga siap kerja.
      </p>
      <p class="hero-location">
        📍 Villa Permata Blok D8 No.1, Sindang Sari, Pasar Kemis, Tangerang
      </p>
    </div>
  </div>
</section>

<!-- ========================================
     PARTNERS & SPONSORS SECTION
     ======================================== -->
<section id="achievements" class="achievements-section">
  <div class="container">
    <h2 class="section-title">Mitra & Sponsor Kami</h2>
    
    <div class="partners-slider-wrapper">
      <div class="partners-slider" id="partnersSlider">
        <!-- First Set -->
        <div class="partner-box">
          <img src="<?= base_url('assets/images/partners/honda.png') ?>" alt="Honda">
        </div>
        <div class="partner-box">
          <img src="<?= base_url('assets/images/partners/mikrotik.png') ?>" alt="Mikrotik">
        </div>
        <div class="partner-box">
          <img src="<?= base_url('assets/images/partners/logitech.png') ?>" alt="Logitech">
        </div>
        <div class="partner-box">
          <img src="<?= base_url('assets/images/partners/acer.png') ?>" alt="Acer">
        </div>
        <div class="partner-box">
          <img src="<?= base_url('assets/images/partners/intel.png') ?>" alt="Intel">
        </div>
        
        <!-- Duplicate Set for Seamless Loop -->
        <div class="partner-box">
          <img src="<?= base_url('assets/images/partners/honda.png') ?>" alt="Honda">
        </div>
        <div class="partner-box">
          <img src="<?= base_url('assets/images/partners/mikrotik.png') ?>" alt="Mikrotik">
        </div>
        <div class="partner-box">
          <img src="<?= base_url('assets/images/partners/logitech.png') ?>" alt="Logitech">
        </div>
        <div class="partner-box">
          <img src="<?= base_url('assets/images/partners/acer.png') ?>" alt="Acer">
        </div>
        <div class="partner-box">
          <img src="<?= base_url('assets/images/partners/intel.png') ?>" alt="Intel">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========================================
     ACHIEVEMENTS SECTION
     ======================================== -->
<section id="achievements" class="achievements-section">
  <div class="container">
    <h2 class="section-title">Prestasi Kami</h2>
    
    <div class="achievements-grid">
      <div class="achievement-card">
        <img src="<?= base_url('assets/images/achievements/1.jpg') ?>" 
             alt="Juara 1 Lomba Matematika" 
             class="achievement-image">
        <h3 class="achievement-title">Juara 1 Lomba Matematika</h3>
        <p class="achievement-description">
          Siswa Mitra Permata meraih juara 1 dalam lomba Matematika tingkat kabupaten 2025.
        </p>
      </div>

      <div class="achievement-card">
        <img src="<?= base_url('assets/images/achievements/OIP.webp') ?>" 
             alt="Juara 2 Lomba Fisika" 
             class="achievement-image">
        <h3 class="achievement-title">Juara 2 Lomba Fisika</h3>
        <p class="achievement-description">
          Prestasi membanggakan di bidang sains dengan juara 2 Lomba Fisika tingkat provinsi.
        </p>
      </div>

      <div class="achievement-card">
        <img src="<?= base_url('assets/images/achievements/OIP.jpeg') ?>" 
             alt="Juara 3 Lomba Seni" 
             class="achievement-image">
        <h3 class="achievement-title">Juara 3 Lomba Seni</h3>
        <p class="achievement-description">
          Siswa aktif berprestasi di lomba seni, menempati posisi juara 3 tingkat nasional.
        </p>
      </div>
    </div>

    <!-- More Button -->
    <div class="more-button-wrapper">
      <a href="<?= base_url('prestasi') ?>" class="btn-more">Lebih Banyak</a>
    </div>
  </div>
</section>

<!-- ========================================
     JENJANG PENDIDIKAN SECTION
     ======================================== -->
<section id="achievements" class="achievements-section">
  <div class="container">
    <h2 class="section-title">Jenjang Pendidikan Kami</h2>
    
    <div class="jenjang-grid">
      <div class="jenjang-card">
        <div class="jenjang-img-wrapper">
          <img src="<?= base_url('assets/images/jenjang/Tk.jpeg') ?>" 
               alt="TK" 
               class="jenjang-img">
        </div>
        <h3 class="jenjang-title">Taman Kanak-Kanak (TK)</h3>
        <p class="jenjang-desc">
          Fasilitas pendidikan usia dini dengan metode belajar kreatif dan menyenangkan.
        </p>
      </div>

      <div class="jenjang-card">
        <div class="jenjang-img-wrapper">
          <img src="<?= base_url('assets/images/jenjang/sd.png') ?>" 
               alt="SD" 
               class="jenjang-img">
        </div>
        <h3 class="jenjang-title">Sekolah Dasar (SD)</h3>
        <p class="jenjang-desc">
          Program pendidikan dasar dengan pendekatan holistik dan karakter.
        </p>
      </div>

      <div class="jenjang-card">
        <div class="jenjang-img-wrapper">
          <img src="<?= base_url('assets/images/jenjang/smp.png') ?>" 
               alt="SMP" 
               class="jenjang-img">
        </div>
        <h3 class="jenjang-title">Sekolah Menengah Pertama (SMP)</h3>
        <p class="jenjang-desc">
          Mengembangkan potensi akademik dan kreativitas siswa secara optimal.
        </p>
      </div>

      <div class="jenjang-card">
        <div class="jenjang-img-wrapper">
          <img src="<?= base_url('assets/images/jenjang/smk.png') ?>" 
               alt="SMK" 
               class="jenjang-img">
        </div>
        <h3 class="jenjang-title">Sekolah Menengah Kejuruan (SMK)</h3>
        <p class="jenjang-desc">
          Fokus pada keterampilan profesional dan siap kerja di industri.
        </p>
      </div>

      <div class="jenjang-card">
        <div class="jenjang-img-wrapper">
          <img src="<?= base_url('assets/images/jenjang/pkbm.png') ?>" 
               alt="PKBM" 
               class="jenjang-img">
        </div>
        <h3 class="jenjang-title">PKBM</h3>
        <p class="jenjang-desc">
          Pusat Kegiatan Belajar Masyarakat untuk pendidikan berkelanjutan.
        </p>
      </div>

      <div class="jenjang-card">
        <div class="jenjang-img-wrapper">
          <img src="<?= base_url('assets/images/jenjang/lkp.png') ?>" 
               alt="LKP" 
               class="jenjang-img">
        </div>
        <h3 class="jenjang-title">LKP</h3>
        <p class="jenjang-desc">
          Lembaga Kursus & Pelatihan untuk keterampilan praktis dan profesional.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- ========================================
     STATISTICS SECTION
     ======================================== -->
<section class="stats-section">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-item">
        <div class="stat-number">20+</div>
        <div class="stat-label">Tahun Berpengalaman</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">6</div>
        <div class="stat-label">Jenjang Pendidikan</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">10</div>
        <div class="stat-label">Prestasi</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">500</div>
        <div class="stat-label">Alumni Sukses</div>
      </div>
    </div>
  </div>
</section>

<!-- ========================================
     NEWS & ACTIVITIES SECTION
     ======================================== -->
<section id="achievements" class="achievements-section">
  <div class="container">
    <h2 class="section-title">Berita & Kegiatan Terbaru</h2>
    
    <div class="news-grid">
      <article class="news-card">
        <div class="news-image">📋</div>
        <div class="news-content">
          <h3 class="news-title">Pendaftaran Siswa Baru 2025/2026</h3>
          <p class="news-excerpt">
            PPDB Mitra Permata telah dibuka! Daftarkan putra-putri Anda untuk tahun ajaran 
            baru di semua jenjang pendidikan...
          </p>
          <div class="news-date">Agustus 2025</div>
        </div>
      </article>
      
      <article class="news-card">
        <div class="news-image">🎓</div>
        <div class="news-content">
          <h3 class="news-title">Program SMK Berkualitas Akreditasi B</h3>
          <p class="news-excerpt">
            SMK Mitra Permata dengan akreditasi B siap mencetak lulusan yang kompeten 
            dan siap kerja di dunia industri...
          </p>
          <div class="news-date">Juli 2025</div>
        </div>
      </article>
      
      <article class="news-card">
        <div class="news-image">🏫</div>
        <div class="news-content">
          <h3 class="news-title">Fasilitas PKBM & LKP Terlengkap</h3>
          <p class="news-excerpt">
            Mitra Permata menyediakan program pendidikan berkelanjutan melalui PKBM 
            dan LKP untuk masyarakat umum...
          </p>
          <div class="news-date">Juni 2025</div>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- Include JavaScript -->
<script src="<?= base_url('assets/js/home.js') ?>"></script>
<?= $this->endSection() ?>