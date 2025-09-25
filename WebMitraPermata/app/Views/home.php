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
      <h1 class="hero-title">Mari Kembangkan Potensi Belajar Kalian Bersama Mitra Permata</h1>
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
          <img src="<?= base_url('assets/images/partners/Pt Auto2000.jpg') ?>" alt="PT. AUTO2000">
        </div>
        <div class="partner-box">
          <img src="<?= base_url('assets/images/partners/Pt Sumber Alfaria Trijaya.png') ?>" alt="PT. Sumber Alfaria Trijaya">
        </div>
        <div class="partner-box">
          <img src="<?= base_url('assets/images/partners/Pt Dynaplast.jpg') ?>" alt="PT. Dynaplast">
        </div>
        <div class="partner-box">
          <img src="<?= base_url('assets/images/partners/Tidar.png') ?>" alt="Cv. Tidar Sakti Mobilindo">
        </div>
        <div class="partner-box">
          <img src="<?= base_url('assets/images/partners/Pt. Indostation.png') ?>" alt="PT. Sentra Trada Indostation">
        </div>
        <div class="partner-box">
          <img src="<?= base_url('assets/images/partners/Universitas Yatsi Madani.png') ?>" alt="Universitas Yatsi Madani">
        </div>
        <div class="partner-box">
          <img src="<?= base_url('assets/images/partners/Global Institute.png') ?>" alt="Institut Teknologi dan Bisnis Bina Sarana Global">
        </div>
        <div class="partner-box">
          <img src="<?= base_url('assets/images/partners/UMT.png') ?>" alt="Universitas Muhammadiyah Tangerang">
        </div>
        <div class="partner-box">
          <img src="<?= base_url('assets/images/partners/Universitas Raharja.png') ?>" alt="Universitas Raharja">
        </div>
        <div class="partner-box">
          <img src="<?= base_url('assets/images/partners/Universitas Unsaka.png') ?>" alt="Universitas Salakanagara">
        </div>
        
        <!-- Duplicate Set for Seamless Loop -->
        <div class="partner-box">
          <img src="<?= base_url('assets/images/partners/Pt Auto2000.jpg') ?>" alt="PT. AUTO2000">
        </div>
        <div class="partner-box">
          <img src="<?= base_url('assets/images/partners/Pt Sumber Alfaria Trijaya.png') ?>" alt="PT. Sumber Alfaria Trijaya">
        </div>
        <div class="partner-box">
          <img src="<?= base_url('assets/images/partners/Pt Dynaplast.jpg') ?>" alt="PT. Dynaplast">
        </div>
        <div class="partner-box">
          <img src="<?= base_url('assets/images/partners/Tidar.png') ?>" alt="Cv. Tidar Sakti Mobilindo">
        </div>
        <div class="partner-box">
          <img src="<?= base_url('assets/images/partners/Pt. Indostation.png') ?>" alt="PT. Sentra Trada Indostation">
        </div>
        <div class="partner-box">
          <img src="<?= base_url('assets/images/partners/Universitas Yatsi Madani.png') ?>" alt="Universitas Yatsi Madani">
        </div>
        <div class="partner-box">
          <img src="<?= base_url('assets/images/partners/Global Institute.png') ?>" alt="Institut Teknologi dan Bisnis Bina Sarana Global">
        </div>
        <div class="partner-box">
          <img src="<?= base_url('assets/images/partners/UMT.png') ?>" alt="Universitas Muhammadiyah Tangerang">
        </div>
        <div class="partner-box">
          <img src="<?= base_url('assets/images/partners/Universitas Raharja.png') ?>" alt="Universitas Raharja">
        </div>
        <div class="partner-box">
          <img src="<?= base_url('assets/images/partners/Universitas Unsaka.png') ?>" alt="Universitas Salakanagara">
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
        <img src="<?= base_url('assets/images/achievements/Juara 1 Badminton.png') ?>" 
             alt="Juara 1 Lomba Matematika" 
             class="achievement-image">
        <h3 class="achievement-title">Juara 1 Lomba Badminton</h3>
        <p class="achievement-description">
          Siswa Mitra Permata Meraih Juara 1 Lomba Badminton dalam Kejuaraan Kota Tangerang Selatan 2025.
        </p>
      </div>

      <div class="achievement-card">
        <img src="<?= base_url('assets/images/achievements/Juara 2 BNI Sirkuit.png') ?>" 
             alt="Juara 2 Lomba Fisika" 
             class="achievement-image">
        <h3 class="achievement-title">Juara 2 Lomba Badminton</h3>
        <p class="achievement-description">
          Siswa Mitra Permata Meraih Juara 2 Lomba Badminton dalam BNI SIRKUIT NASIONAL NTB 2025.
        </p>
      </div>

      <div class="achievement-card">
        <img src="<?= base_url('assets/images/achievements/Juara 3 Voly.png') ?>" 
             alt="Juara 3 Lomba Seni" 
             class="achievement-image">
        <h3 class="achievement-title">Juara 3 Lomba Voly</h3>
        <p class="achievement-description">
          Siswa Mitra Permata Meraih Juara 3 Lomba Volly SLTA Se-Banten dalam Piala Rektor UIN SMH BANTEN 2025.
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
          <img src="<?= base_url('assets/images/jenjang/TK.jpg') ?>" 
               alt="TK" 
               class="jenjang-img">
        </div>
        <h3 class="jenjang-title">Taman Kanak-Kanak (TK)</h3>
        <p class="jenjang-desc">
          Taman Kanak-Kanak Mitra Permata menghadirkan fasilitas pendidikan usia dini dengan 
          belajar kreatif, menyenangkan, dan penuh keceriaan untuk menumbuhkan rasa ingin tahu, 
          kemandirian, serta karakter positif sejak dini.
        </p>
      </div>

      <div class="jenjang-card">
        <div class="jenjang-img-wrapper">
          <img src="<?= base_url('assets/images/jenjang/SD.png') ?>" 
               alt="SD" 
               class="jenjang-img">
        </div>
        <h3 class="jenjang-title">Sekolah Dasar (SD)</h3>
        <p class="jenjang-desc">
          Sekolah Dasar Mitra Permata menghadirkan program pendidikan dasar yang menyeimbangkan 
          akademik, karakter, dan keterampilan hidup, sehingga membentuk pribadi cerdas, berakhlak, 
          dan percaya diri.
        </p>
      </div>

      <div class="jenjang-card">
        <div class="jenjang-img-wrapper">
          <img src="<?= base_url('assets/images/jenjang/SMP.png') ?>" 
               alt="SMP" 
               class="jenjang-img">
        </div>
        <h3 class="jenjang-title">Sekolah Menengah Pertama (SMP)</h3>
        <p class="jenjang-desc">
          SMP Mitra Permata mendorong siswa untuk berprestasi secara akademik, berkreasi dengan 
          bebas, serta membangun karakter yang positif dalam menghadapi masa depan.
        </p>
      </div>

      <div class="jenjang-card">
        <div class="jenjang-img-wrapper">
          <img src="<?= base_url('assets/images/jenjang/SMK.png') ?>" 
               alt="SMK" 
               class="jenjang-img">
        </div>
        <h3 class="jenjang-title">Sekolah Menengah Kejuruan (SMK)</h3>
        <p class="jenjang-desc">
          SMK Mitra Permata berfokus pada pengembangan keterampilan profesional dan kesiapan kerja 
          di berbagai bidang industri, sehingga siswa tidak hanya terampil secara teknis tetapi 
          juga siap bersaing di dunia kerja.
        </p>
      </div>

      <div class="jenjang-card">
        <div class="jenjang-img-wrapper">
          <img src="<?= base_url('assets/images/jenjang/pkbm.jpg') ?>" 
               alt="PKBM" 
               class="jenjang-img">
        </div>
        <h3 class="jenjang-title">PKBM</h3>
        <p class="jenjang-desc">
        PKBM Mitra Permata menyediakan program pendidikan kesetaraan dan pembelajaran nonformal, 
        sehingga masyarakat tetap dapat menempuh pendidikan, mengembangkan pengetahuan, 
        serta membangun keterampilan yang berguna dalam kehidupan sehari-hari.
        </p>
      </div>

      <div class="jenjang-card">
        <div class="jenjang-img-wrapper">
          <img src="<?= base_url('assets/images/jenjang/LKP.jpg') ?>" 
               alt="LKP" 
               class="jenjang-img">
        </div>
        <h3 class="jenjang-title">LKP</h3>
        <p class="jenjang-desc">
        LKP Mitra Permata menyelenggarakan berbagai program kursus dan pelatihan keterampilan praktis
        yang dirancang untuk meningkatkan kompetensi, 
        kemandirian, serta peluang dalam mengembangkan diri.
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