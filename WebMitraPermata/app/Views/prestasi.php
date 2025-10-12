<?= $this->extend('layout/navbar.php') ?>
<?= $this->section('content') ?>

<link rel="stylesheet" href="<?= base_url('assets/css/prestasi.css') ?>">

<<<<<<< HEAD
<section class="prestasi-hero">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <div class="container">
      <h1 class="hero-title">Prestasi Membanggakan</h1>
      <p class="hero-subtitle">Dedikasi dan kerja keras siswa-siswi Mitra Permata membuahkan hasil yang luar biasa</p>
    </div>
  </div>
</section>

<section class="prestasi-section" id="prestasi-content">
  <div class="container">
    <!-- Stats Section -->
    <div class="stats-container">
      <div class="stat-item">
        <div class="stat-number" data-count="150">0</div>
        <div class="stat-label">Total Prestasi</div>
      </div>
      <div class="stat-item">
        <div class="stat-number" data-count="25">0</div>
        <div class="stat-label">Juara Nasional</div>
      </div>
      <div class="stat-item">
        <div class="stat-number" data-count="75">0</div>
        <div class="stat-label">Juara Provinsi</div>
      </div>
      <div class="stat-item">
        <div class="stat-number" data-count="50">0</div>
        <div class="stat-label">Juara Regional</div>
      </div>
    </div>

    <!-- Search Bar (Optional Enhancement) -->
    <div class="search-container" style="text-align: center; margin-bottom: 30px;">
      <div style="position: relative; display: inline-block; width: 100%; max-width: 400px;">
        <input 
          type="text" 
          id="searchInput" 
          placeholder="Cari prestasi..." 
          style="width: 100%; padding: 12px 20px 12px 45px; border: 2px solid var(--gray-200); border-radius: 25px; font-size: 16px; transition: var(--transition);"
          aria-label="Cari prestasi"
        >
        <i class="fas fa-search" style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: var(--gray-400);"></i>
      </div>
    </div>

    <!-- Filter Buttons -->
    <div class="filter-container" role="tablist" aria-label="Filter kategori prestasi">
      <button class="filter-btn active" data-filter="all" role="tab" aria-selected="true">
        <i class="fas fa-th-large" aria-hidden="true"></i>
        <span>Semua Prestasi</span>
      </button>
      <button class="filter-btn" data-filter="akademik" role="tab" aria-selected="false">
        <i class="fas fa-graduation-cap" aria-hidden="true"></i>
        <span>Akademik</span>
      </button>
      <button class="filter-btn" data-filter="olahraga" role="tab" aria-selected="false">
        <i class="fas fa-trophy" aria-hidden="true"></i>
        <span>Olahraga</span>
      </button>
      <button class="filter-btn" data-filter="seni" role="tab" aria-selected="false">
        <i class="fas fa-palette" aria-hidden="true"></i>
        <span>Seni & Budaya</span>
      </button>
      <button class="filter-btn" data-filter="teknologi" role="tab" aria-selected="false">
        <i class="fas fa-laptop-code" aria-hidden="true"></i>
        <span>Teknologi</span>
      </button>
    </div>

    <!-- Loading Indicator -->
    <div class="loading" id="loadingIndicator">
      <div class="spinner"></div>
      <p>Memuat prestasi...</p>
    </div>

    <!-- Prestasi Grid -->
    <div class="prestasi-grid" role="grid" aria-label="Daftar prestasi">
      <!-- Prestasi 1 -->
      <div class="prestasi-card" data-category="akademik" data-aos="fade-up" data-aos-delay="100" role="gridcell">
        <div class="card-image-container">
          <img src="<?= base_url('assets/images/prestasi/prestasi1.jpg') ?>" alt="Olimpiade Matematika - Siswa meraih medali emas" loading="lazy">
          <div class="card-overlay">
            <div class="overlay-content">
              <i class="fas fa-trophy trophy-icon" aria-hidden="true"></i>
              <span class="achievement-level">Nasional</span>
            </div>
          </div>
        </div>
        <div class="prestasi-info">
          <div class="category-tag akademik">Akademik</div>
          <h3>Juara 1 Olimpiade Matematika</h3>
          <p>Siswa SMK Mitra Permata berhasil meraih medali emas dalam Olimpiade Matematika tingkat nasional 2024, mengalahkan ribuan peserta dari seluruh Indonesia dengan kemampuan analisis matematika yang luar biasa.</p>
          <div class="card-footer">
            <div class="date">
              <i class="far fa-calendar" aria-hidden="true"></i>
              <span>Maret 2024</span>
            </div>
            <div class="location">
              <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
              <span>Jakarta</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Prestasi 2 -->
      <div class="prestasi-card" data-category="olahraga" data-aos="fade-up" data-aos-delay="200" role="gridcell">
        <div class="card-image-container">
          <img src="<?= base_url('assets/images/prestasi/prestasi2.jpg') ?>" alt="Tim Futsal SMP Mitra Permata meraih juara 2" loading="lazy">
          <div class="card-overlay">
            <div class="overlay-content">
              <i class="fas fa-medal trophy-icon" aria-hidden="true"></i>
              <span class="achievement-level">Regional</span>
            </div>
          </div>
        </div>
        <div class="prestasi-info">
          <div class="category-tag olahraga">Olahraga</div>
          <h3>Juara 2 Turnamen Futsal</h3>
          <p>Tim futsal SMP Mitra Permata tampil memukau dan berhasil meraih posisi runner-up dalam turnamen bergengsi se-Tangerang Raya dengan menampilkan permainan yang solid dan sportif.</p>
          <div class="card-footer">
            <div class="date">
              <i class="far fa-calendar" aria-hidden="true"></i>
              <span>November 2023</span>
            </div>
            <div class="location">
              <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
              <span>Tangerang</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Prestasi 3 -->
      <div class="prestasi-card" data-category="akademik" data-aos="fade-up" data-aos-delay="300" role="gridcell">
        <div class="card-image-container">
          <img src="<?= base_url('assets/images/prestasi/prestasi3.jpg') ?>" alt="Siswa SMA meraih juara harapan 1 pidato bahasa Inggris" loading="lazy">
          <div class="card-overlay">
            <div class="overlay-content">
              <i class="fas fa-award trophy-icon" aria-hidden="true"></i>
              <span class="achievement-level">Provinsi</span>
            </div>
          </div>
        </div>
        <div class="prestasi-info">
          <div class="category-tag akademik">Akademik</div>
          <h3>Juara Harapan 1 Pidato Bahasa Inggris</h3>
          <p>Siswa SMA menunjukkan kemampuan berbahasa Inggris yang luar biasa dalam kompetisi pidato tingkat provinsi Banten dengan tema "Future of Education in Digital Era".</p>
          <div class="card-footer">
            <div class="date">
              <i class="far fa-calendar" aria-hidden="true"></i>
              <span>September 2023</span>
            </div>
            <div class="location">
              <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
              <span>Serang</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Prestasi 4 -->
      <div class="prestasi-card" data-category="teknologi" data-aos="fade-up" data-aos-delay="100" role="gridcell">
        <div class="card-image-container">
          <img src="<?= base_url('assets/images/prestasi/prestasi4.jpg') ?>" alt="Tim Programming SMK meraih juara 1 lomba coding" loading="lazy">
          <div class="card-overlay">
            <div class="overlay-content">
              <i class="fas fa-trophy trophy-icon" aria-hidden="true"></i>
              <span class="achievement-level">Nasional</span>
            </div>
          </div>
        </div>
        <div class="prestasi-info">
          <div class="category-tag teknologi">Teknologi</div>
          <h3>Juara 1 Lomba Programming</h3>
          <p>Tim programming SMK berhasil menjadi yang terbaik dalam kompetisi coding nasional dengan solusi inovatif untuk sistem manajemen sekolah berbasis AI dan machine learning.</p>
          <div class="card-footer">
            <div class="date">
              <i class="far fa-calendar" aria-hidden="true"></i>
              <span>Januari 2024</span>
            </div>
            <div class="location">
              <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
              <span>Bandung</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Prestasi 5 -->
      <div class="prestasi-card" data-category="seni" data-aos="fade-up" data-aos-delay="200" role="gridcell">
        <div class="card-image-container">
          <img src="<?= base_url('assets/images/prestasi/prestasi5.jpg') ?>" alt="Karya seni lukis siswa SMA meraih juara 2" loading="lazy">
          <div class="card-overlay">
            <div class="overlay-content">
              <i class="fas fa-medal trophy-icon" aria-hidden="true"></i>
              <span class="achievement-level">Provinsi</span>
            </div>
          </div>
        </div>
        <div class="prestasi-info">
          <div class="category-tag seni">Seni & Budaya</div>
          <h3>Juara 2 Lomba Seni Lukis</h3>
          <p>Karya seni siswa SMA berhasil meraih pengakuan dalam kompetisi seni lukis tingkat provinsi dengan tema "Budaya Nusantara dalam Mata Modern" yang menggabungkan teknik tradisional dan kontemporer.</p>
          <div class="card-footer">
            <div class="date">
              <i class="far fa-calendar" aria-hidden="true"></i>
              <span>Agustus 2023</span>
            </div>
            <div class="location">
              <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
              <span>Cilegon</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Prestasi 6 -->
      <div class="prestasi-card" data-category="olahraga" data-aos="fade-up" data-aos-delay="300" role="gridcell">
        <div class="card-image-container">
          <img src="<?= base_url('assets/images/prestasi/prestasi6.jpg') ?>" alt="Tim basket putra SMA meraih juara 1" loading="lazy">
          <div class="card-overlay">
            <div class="overlay-content">
              <i class="fas fa-trophy trophy-icon" aria-hidden="true"></i>
              <span class="achievement-level">Regional</span>
            </div>
          </div>
        </div>
        <div class="prestasi-info">
          <div class="category-tag olahraga">Olahraga</div>
          <h3>Juara 1 Turnamen Basket</h3>
          <p>Tim basket putra SMA Mitra Permata menunjukkan permainan yang solid dan memenangkan turnamen regional Jabodetabek dengan strategi permainan yang matang dan kerjasama tim yang excellent.</p>
          <div class="card-footer">
            <div class="date">
              <i class="far fa-calendar" aria-hidden="true"></i>
              <span>Juni 2024</span>
            </div>
            <div class="location">
              <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
              <span>Depok</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Prestasi 7 -->
      <div class="prestasi-card" data-category="seni" data-aos="fade-up" data-aos-delay="100" role="gridcell">
        <div class="card-image-container">
          <img src="<?= base_url('assets/images/prestasi/prestasi7.jpg') ?>" alt="Grup tari tradisional meraih juara 1" loading="lazy">
          <div class="card-overlay">
            <div class="overlay-content">
              <i class="fas fa-trophy trophy-icon" aria-hidden="true"></i>
              <span class="achievement-level">Nasional</span>
            </div>
          </div>
        </div>
        <div class="prestasi-info">
          <div class="category-tag seni">Seni & Budaya</div>
          <h3>Juara 1 Festival Tari Tradisional</h3>
          <p>Grup tari SMA berhasil memukau juri dengan penampilan tari Saman yang spektakuler dalam Festival Tari Tradisional Nusantara, menampilkan kekompakan dan kearifan budaya lokal.</p>
          <div class="card-footer">
            <div class="date">
              <i class="far fa-calendar" aria-hidden="true"></i>
              <span>Mei 2024</span>
            </div>
            <div class="location">
              <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
              <span>Yogyakarta</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Prestasi 8 -->
      <div class="prestasi-card" data-category="teknologi" data-aos="fade-up" data-aos-delay="200" role="gridcell">
        <div class="card-image-container">
          <img src="<?= base_url('assets/images/prestasi/prestasi8.jpg') ?>" alt="Tim robotika meraih juara 2" loading="lazy">
          <div class="card-overlay">
            <div class="overlay-content">
              <i class="fas fa-medal trophy-icon" aria-hidden="true"></i>
              <span class="achievement-level">Regional</span>
            </div>
          </div>
        </div>
        <div class="prestasi-info">
          <div class="category-tag teknologi">Teknologi</div>
          <h3>Juara 2 Kompetisi Robotika</h3>
          <p>Tim robotika SMK berhasil menciptakan robot pintar yang mampu menyelesaikan misi rescue dengan teknologi sensor canggih dan programming yang optimal dalam kompetisi regional.</p>
          <div class="card-footer">
            <div class="date">
              <i class="far fa-calendar" aria-hidden="true"></i>
              <span>Oktober 2023</span>
            </div>
            <div class="location">
              <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
              <span>Bekasi</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Prestasi 9 -->
      <div class="prestasi-card" data-category="akademik" data-aos="fade-up" data-aos-delay="300" role="gridcell">
        <div class="card-image-container">
          <img src="<?= base_url('assets/images/prestasi/prestasi9.jpg') ?>" alt="Siswa meraih juara 1 olimpiade fisika" loading="lazy">
          <div class="card-overlay">
            <div class="overlay-content">
              <i class="fas fa-trophy trophy-icon" aria-hidden="true"></i>
              <span class="achievement-level">Provinsi</span>
            </div>
          </div>
        </div>
        <div class="prestasi-info">
          <div class="category-tag akademik">Akademik</div>
          <h3>Juara 1 Olimpiade Fisika</h3>
          <p>Siswa SMA menunjukkan pemahaman mendalam tentang konsep fisika dalam Olimpiade Sains Nasional tingkat provinsi dengan menyelesaikan soal-soal kompleks mekanika kuantum dan termodinamika.</p>
          <div class="card-footer">
            <div class="date">
              <i class="far fa-calendar" aria-hidden="true"></i>
              <span>April 2024</span>
            </div>
            <div class="location">
              <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
              <span>Tangerang Selatan</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Load More Button -->
    <div class="load-more-container">
      <button class="load-more-btn" aria-describedby="loadMoreDescription">
        <span>Lihat Lebih Banyak</span>
        <i class="fas fa-chevron-down" aria-hidden="true"></i>
      </button>
      <div id="loadMoreDescription" class="sr-only">
        Klik untuk memuat prestasi tambahan
      </div>
    </div>
  </div>
</section>

<!-- Achievement Modal -->
<div class="achievement-modal" id="achievementModal" role="dialog" aria-modal="true" aria-labelledby="modalTitle" aria-describedby="modalDescription">
  <div class="modal-overlay" aria-hidden="true"></div>
  <div class="modal-content">
    <button class="modal-close" aria-label="Tutup detail prestasi">
      <i class="fas fa-times" aria-hidden="true"></i>
    </button>
    <div class="modal-body">
      <img src="" alt="" class="modal-image">
      <div class="modal-info">
        <h2 class="modal-title" id="modalTitle"></h2>
        <p class="modal-description" id="modalDescription"></p>
        <div class="modal-details">
          <div class="detail-item">
            <strong>Kategori:</strong>
            <span class="modal-category"></span>
          </div>
          <div class="detail-item">
            <strong>Tingkat:</strong>
            <span class="modal-level"></span>
          </div>
          <div class="detail-item">
            <strong>Tanggal:</strong>
            <span class="modal-date"></span>
          </div>
          <div class="detail-item">
            <strong>Lokasi:</strong>
            <span class="modal-location"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Success Message Template -->
<div id="successMessageTemplate" class="sr-only">
  <div class="success-message" role="alert" aria-live="polite">
    <i class="fas fa-check-circle" aria-hidden="true"></i>
    <span class="message-text"></span>
  </div>
</div>

<!-- Scripts -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="<?= base_url('assets/js/prestasi.js') ?>"></script>
<script src="<?= base_url('assets/js/prestasi-init.js') ?>"></script>

<!-- Schema.org structured data for SEO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CollectionPage",
  "name": "Prestasi Membanggakan - SMK Mitra Permata",
  "description": "Kumpulan prestasi siswa-siswi SMK Mitra Permata di berbagai bidang akademik, olahraga, seni budaya, dan teknologi",
  "url": "<?= current_url() ?>",
  "mainEntity": {
    "@type": "ItemList",
    "numberOfItems": "9",
    "itemListElement": [
      {
        "@type": "Achievement",
        "name": "Juara 1 Olimpiade Matematika",
        "category": "Akademik",
        "level": "Nasional",
        "date": "2024-03",
        "location": "Jakarta"
      },
      {
        "@type": "Achievement", 
        "name": "Juara 2 Turnamen Futsal",
        "category": "Olahraga",
        "level": "Regional", 
        "date": "2023-11",
        "location": "Tangerang"
      },
      {
        "@type": "Achievement",
        "name": "Juara Harapan 1 Pidato Bahasa Inggris", 
        "category": "Akademik",
        "level": "Provinsi",
        "date": "2023-09", 
        "location": "Serang"
      }
    ]
  },
  "provider": {
    "@type": "EducationalOrganization",
    "name": "SMK Mitra Permata",
    "url": "<?= base_url() ?>"
  }
}
=======
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
>>>>>>> 2e4b313f11682d1435b336a17f5cf5c3e1ecebf7
</script>

<?= $this->endSection() ?>