<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $this->renderSection('title') ?> | Mitra Permata</title>
  <link rel="icon" type="image/png" href="<?= base_url('assets/images/logo.png') ?>">

  <!-- Google Fonts Poppins -->
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- Navbar CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/navbar.css') ?>">
</head>
<body>
  <!-- Modern Navbar -->
  <nav class="navbar" id="navbar">
    <div class="navbar-content">
      <a href="/" class="navbar-brand">
      <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo Mitra Permata" class="navbar-logo">
      <span>Mitra Permata</span>
    </a>
      <ul class="navbar-nav">
         <li class="dropdown">
          <a href="/profil" class="dropdown-toggle">
            Profil
            <span class="arrow">▼</span>
          </a>
          <div class="dropdown-content">
            <a href="/struktur">Struktur Organisasi</a>
             <a href="/fasilitas">Fasilitas</a>
             <a href="/kemitraan">Kemitraan</a>
          </div>
        </li>


        <li class="dropdown">
          <a href="/kegiatan" class="dropdown-toggle">
            Kegiatan
            <span class="arrow">▼</span>
          </a>
          <div class="dropdown-content">
            <a href="/prestasi">Prestasi</a>
            <a href="/berita">Berita</a>
          </div>
        </li>
        
        <li class="dropdown">
          <a href="/akademik" class="dropdown-toggle">
            Akademik
          </a>
        </li>
        
        <li><a href="/kontak">Kontak</a></li>

         <li class="dropdown">
          <a href="#" class="navbar-cta">
            Jenjang Pendidikan
          </a>
          <div class="dropdown-content">
            <a href="<?= base_url('tk') ?>">TK</a>
            <a href="<?= base_url('sd') ?>">SD</a>
            <a href="<?= base_url('smp') ?>">SMP</a>
            <a href="<?= base_url('smk') ?>">SMK</a>
          </div>
        </li>
      </ul>

      <!-- Mobile Toggle Button -->
      <button class="mobile-toggle" id="mobileToggle">
        <div class="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </button>
    </div>
  </nav>

  <!-- Mobile Overlay -->
  <div class="mobile-overlay" id="mobileOverlay"></div>

<!-- Mobile Menu -->
<div class="mobile-menu" id="mobileMenu">
  <a href="/">Home</a>
  
  <!-- Profil Dropdown -->
  <div class="mobile-dropdown">
    <a href="#" class="mobile-dropdown-toggle">Profil
      <span class="arrow">▼</span>
    </a>
    <div class="mobile-dropdown-content">
      <a href="/struktur">Struktur Organisasi</a>
      <a href="/fasilitas">Fasilitas</a>
      <a href="/kemitraan">Kemitraan</a>
    </div>
  </div>

  <!-- Kegiatan Dropdown -->
  <div class="mobile-dropdown">
    <a href="#" class="mobile-dropdown-toggle">Kegiatan
      <span class="arrow">▼</span>
    </a>
    <div class="mobile-dropdown-content">
      <a href="/prestasi">Prestasi</a>
      <a href="/berita">Berita</a>
    </div>
  </div>

  <!-- Akademik Dropdown -->
  <div class="mobile-dropdown">
    <a href="#" class="mobile-dropdown-toggle">Akademik
      <span class="arrow">▼</span>
    </a>
    <div class="mobile-dropdown-content">
      <a href="/layanan/pendaftaran">Jenjang</a>
      <a href="/layanan/konsultasi">Konsultasi</a>
      <a href="/layanan/pembayaran">Pembayaran</a>
    </div>
  </div>

  <!-- Kontak -->
  <a href="/kontak">Kontak</a>

  <!-- CTA Pendaftaran -->
  <div class="mobile-dropdown">
    <a href="#" class="navbar-cta-M mobile-dropdown-toggle">Pendaftaran
      <span class="arrow">▼</span>
    </a>
    <div class="mobile-dropdown-content">
      <a href="<?= base_url('tk') ?>">TK</a>
      <a href="<?= base_url('sd') ?>">SD</a>
      <a href="<?= base_url('smp') ?>">SMP</a>
      <a href="<?= base_url('smk') ?>">SMK</a>
    </div>
  </div>
</div>


  <!-- Main Content -->
  <main>
    <?= $this->renderSection('content') ?>
  </main>

  <!-- Footer -->
<footer class="site-footer">
    <p>© 2025 Sekolah Mitra Permata. All Rights Reserved</p>
    <p>By ShōtenLab</p>
</footer>

  <!-- Navbar JavaScript -->
  <script src="<?= base_url('assets/js/navbar.js') ?>"></script>
</body>
</html>