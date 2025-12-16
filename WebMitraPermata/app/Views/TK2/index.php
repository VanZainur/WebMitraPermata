<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Title dari controller (optional) -->
    <title><?= isset($title) ? $title : 'TK Mitra Permata' ?></title>
    
    <!-- Meta description (optional) -->
    <?php if(isset($meta_description)): ?>
    <meta name="description" content="<?= $meta_description ?>">
    <?php endif; ?>

    <!-- Tambahkan FAVICON di sini -->
    <link rel="icon" type="image/png" href="<?= base_url('assets/images/logo.png') ?>">
    
    <!-- Link CSS - Cara 1: Langsung -->
    <link rel="stylesheet" href="<?= base_url('assets/TK2/css/style.css') ?>">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <a href="index.php" class="logo">
            <img src="assets/images/logo.png" alt="">
            <span>TK Mitra Permata</span>
        </a>
        <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul class="nav-links">
            <li><a href="#home">Beranda</a></li>
            <li><a href="#about">Tentang</a></li>
            <li><a href="#program">Program</a></li>
            <li><a href="#contact">Kontak</a></li>
            <li class="btn-daftar">
                  <a href="javascript:void(0)" onclick="openRegistrationPopup()">Pendaftaran</a>
            </li>
        </ul>
    </nav>

    <!-- Hero Slider -->
    <div class="hero-slider" id="home">
        <div class="slide slide1 active">
            <div class="floating cloud1">☁️</div>
            <div class="floating cloud2">☁️</div>
            <div class="floating star1">⭐</div>
            <div class="floating star2">✨</div>
            <div class="hero-content">
                <h1>Selamat Datang di<br>TK Mitra Permata</h1>
                <p>Tempat Terbaik untuk Anak Bermain & Belajar</p>
                <button class="cta-button">Daftar Sekarang!</button>
            </div>
        </div>
        
        <div class="slide slide2">
            <div class="floating cloud1">🎈</div>
            <div class="floating cloud2">🎨</div>
            <div class="floating star1">🌟</div>
            <div class="floating star2">💫</div>
            <div class="hero-content">
                <h1>Berkembang Bersama Kami</h1>
                <p>Program Pendidikan Modern & Menyenangkan</p>
                <button class="cta-button">Lihat Program</button>
            </div>
        </div>

        <div class="slider-dots">
            <span class="dot active" onclick="currentSlide(0)"></span>
            <span class="dot" onclick="currentSlide(1)"></span>
        </div>
    </div>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <h2 class="section-title">📖 Tentang Kami</h2>
            <div class="about-content">
                <div class="about-image">
                    <img src="<?= base_url('assets/images/hero/1.jpg') ?>" alt="Gedung TK Mitra Permata">
                </div>
                <div class="about-text">
                    <p>TK Mitra Permata adalah lembaga pendidikan anak usia dini yang berkomitmen untuk mengembangkan potensi anak melalui metode pembelajaran yang menyenangkan dan inovatif. Dengan tenaga pengajar berpengalaman dan fasilitas lengkap, kami siap menjadi mitra terbaik dalam tumbuh kembang buah hati Anda! 🌟</p>
                    <p style="margin-top: 20px;"><strong>Visi:</strong> Menjadi TK terbaik yang mencetak generasi cerdas, kreatif, dan berakhlak mulia.</p>
                    <p style="margin-top: 10px;"><strong>Misi:</strong> Memberikan pendidikan berkualitas dengan pendekatan yang ramah anak dan mengutamakan perkembangan holistik.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Cards Section -->
    <section class="cards-section" id="program">
        <h2>✨ Program Kami ✨</h2>
        <div class="cards-container">
            <!-- Card 1 - Rabbit -->
            <div class="card" onclick="toggleAnimal(this)">
                <span class="star">⭐</span>
                <span class="star">⭐</span>
                <span class="star">⭐</span>
                <h3>🎨 Seni & Kreasi</h3>
                <p>Berkembang melalui seni, menggambar, mewarnai, dan membuat kerajinan tangan yang mengasah kreativitas anak!</p>
                <div class="animal rabbit">🐰</div>
            </div>

            <!-- Card 2 - Butterfly -->
            <div class="card" onclick="toggleAnimal(this)">
                <span class="star">⭐</span>
                <span class="star">⭐</span>
                <span class="star">⭐</span>
                <h3>📚 Baca & Tulis</h3>
                <p>Belajar huruf, angka, dan membaca cerita seru yang meningkatkan kemampuan berbahasa anak dengan cara yang menyenangkan!</p>
                <div class="animal butterfly">🦋</div>
            </div>

            <!-- Card 3 - Owl -->
            <div class="card" onclick="toggleAnimal(this)">
                <span class="star">⭐</span>
                <span class="star">⭐</span>
                <span class="star">⭐</span>
                <h3>🎵 Musik & Gerak</h3>
                <p>Bermain musik, menyanyi, dan menari untuk mengembangkan kemampuan motorik dan rasa percaya diri anak!</p>
                <div class="animal owl">🦉</div>
            </div>
        </div>
    </section>

    <!-- Facilities Section -->
    <section class="facilities" id="fasilitas">
        <h2 class="section-title">🏫 Fasilitas</h2>
        <div class="facilities-grid">
            <div class="facility-item">
                <span>🏢</span>
                <h3>Ruang Kelas Ber-AC</h3>
                <p>Nyaman & Bersih</p>
            </div>
            <div class="facility-item">
                <span>🎪</span>
                <h3>Playground</h3>
                <p>Area Bermain Aman</p>
            </div>
            <div class="facility-item">
                <span>📚</span>
                <h3>Perpustakaan</h3>
                <p>Koleksi Buku Anak</p>
            </div>
            <div class="facility-item">
                <span>🍎</span>
                <h3>Kantin Sehat</h3>
                <p>Menu Bergizi</p>
            </div>
            <div class="facility-item">
                <span>🎨</span>
                <h3>Ruang Seni</h3>
                <p>Lengkap & Kreatif</p>
            </div>
            <div class="facility-item">
                <span>🔒</span>
                <h3>Keamanan 24/7</h3>
                <p>CCTV & Satpam</p>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery" id="kegiatan">
        <h2 class="section-title">📸 Galeri Kegiatan</h2>
        <div class="gallery-grid">
            <div class="gallery-item">
                <a href="#">
                    <img src="<?= base_url('assets/tk2/img/tk1.jpg') ?>">
                    <p class="gallery-caption">Praktek Sholat</p>
                </a>
            </div>

            <div class="gallery-item">
                <a href="#">
                    <img src="<?= base_url('assets/tk2/img/tk2.jpg') ?>">
                    <p class="gallery-caption">Kegiatan Memasak</p>
                </a>
            </div>

            <div class="gallery-item">
                <a href="#">
                    <img src="<?= base_url('assets/tk2/img/tk3.jpg') ?>">
                    <p class="gallery-caption">Praktek Menggambar</p>
                </a>
            </div>

            <div class="gallery-item">
                <a href="#">
                    <img src="<?= base_url('assets/tk2/img/tk4.jpg') ?>">
                    <p class="gallery-caption">Makan Bersama</p>
                </a>
            </div>

            <div class="gallery-item">
                <a href="#">
                    <img src="<?= base_url('assets/tk2/img/tk5.jpg') ?>">
                    <p class="gallery-caption">Proses Mengajar</p>
                </a>
            </div>

        </div>
    </section>

    <!-- Teachers Section -->
    <section class="teachers">
        <h2 class="section-title">👩‍🏫 Tenaga Pendidik Dan Kependidikan</h2>
        <div class="teachers-grid">
            <div class="teacher-card">
                <div class="teacher-avatar">👩‍🏫</div>
                <h3>Ibu Sarah</h3>
                <p>Kepala Sekolah</p>
                <p style="font-size: 0.9rem; color: #666; margin-top: 10px;">S.Pd, 15 Tahun Pengalaman</p>
            </div>
            <div class="teacher-card">
                <div class="teacher-avatar">👩‍💼</div>
                <h3>Ibu Maya</h3>
                <p>Guru TK A</p>
                <p style="font-size: 0.9rem; color: #666; margin-top: 10px;">S.Pd, Bersertifikat PAUD</p>
            </div>
            <div class="teacher-card">
                <div class="teacher-avatar">👩‍🎓</div>
                <h3>Ibu Dina</h3>
                <p>Guru TK B</p>
                <p style="font-size: 0.9rem; color: #666; margin-top: 10px;">S.Pd, Psikologi Anak</p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <h2 class="section-title">💬 Kata Orang Tua</h2>
        <div class="testimonial-container">
            <div class="testimonial-text">
                "Anak saya sangat senang bersekolah di TK Pelangi Ceria! Guru-gurunya ramah dan sabar. Perkembangan anak saya sangat pesat, terutama dalam bersosialisasi dan kreativitas. Terima kasih TK Pelangi! 🌟"
            </div>
            <div class="testimonial-author">- Ibu Rina, Orang Tua Murid TK B</div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
      <h2 class="section-title">📍 Hubungi Kami</h2>
      <div class="contact-container">

        <!-- KIRI -->
        <div class="contact-left">
            <h2>Kami Siap Membantu</h2>
            <p>
                Hubungi kami untuk mendapatkan informasi terbaru seputar program pendidikan,
                pendaftaran siswa baru, dan layanan akademik. Tim kami siap
                membantu Anda dengan respon yang cepat dan ramah.
            </p>

            <div class="contact-box">
                <div class="contact-icon">📍</div>
                <div>
                    <h3>Lokasi</h3>
                    <p>Perumahan Villa Permata, Blk. D8 - D9 No.1, Sindangsari, Ps. Kemis,
                    Kabupaten Tangerang, Banten 15540</p>
                </div>
            </div>

            <div class="contact-box">
                <div class="contact-icon">📞</div>
                <div>
                    <h3>No Telepon</h3>
                    <p>0858-4632-5633 (Miss Tita)</p>
                </div>
            </div>

            <div class="contact-box">
                <div class="contact-icon">📧</div>
                <div>
                    <h3>Email</h3>
                    <p>info@mitrapermata.sch.id</p>
                </div>
            </div>
        </div>

        <!-- MAP -->
        <div class="contact-map">
            <iframe class="position-relative rounded w-100 h-100"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.9391231209147!2d106.52772367366288!3d-6.13888099384802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a000100000001%3A0x78b8d9a04432be9f!2sTK-SD-SMP-SMK-PKBM%20-%20LKP%20MITRA%20PERMATA!5e0!3m2!1sid!2sid!4v1759418850999!5m2!1sid!2sid"
            frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
        </div>
    </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-float">🎈</div>
        <div class="footer-float">⭐</div>
        <div class="footer-float">🌟</div>
        <div class="footer-float">✨</div>

        <div class="footer-container">

            <div class="footer-section">
                <h3>Akses Cepat</h3>
                <ul>
                    <li><a href="#home">🏠 Beranda</a></li>
                    <li><a href="#about">📖 Tentang Kami</a></li>
                    <li><a href="#program">✨ Program</a></li>
                    <li><a href="#kegiatan">📸 Galeri</a></li>
                    <li><a href="#contact">💬 Kontak</a></li>
                </ul>
            </div>

            <div class="footer-section footer-contact">
                <h3>Kontak</h3>
                <p>📍 Perumahan Villa Permata, Blk. D8 - D9 No.1, Sindangsari, Kec. Ps. Kemis, Kabupaten Tangerang, Banten 15540.</p>
                <p>📞 (021) 12456789</p>
                <p>📧 info@mitrapermata.sch.id</p>
            </div>

            <div class="footer-section">
                <h3>Sekolah Mitra Permata</h3>
                <p>Lembaga pendidikan dari TK, SD, SMP, hingga SMK yang berkomitmen memberikan 
                layanan pendidikan berkualitas dengan lingkungan belajar yang aman, nyaman, dan 
                berkarakter.</p>
            </div>

        </div>
        
        <div class="footer-bottom">
            <p>© 2025 Sekolah Mitra Permata. All Rights Reserved</p>
            <p>By ShōtenLab</p>
        </div>
    </footer>

    <!-- Link JavaScript - Cara 1: Langsung -->
    <script src="<?= base_url('assets/TK2/js/script.js') ?>"></script>
    
    <!-- Link JavaScript - Cara 2: Pakai helper -->
    <!-- <script src="<?php // echo base_url('assets/TK2/js/script.js') ?>"></script> -->
    
    <!-- Optional: Pass data dari PHP ke JavaScript -->
    <script>
        // Contoh passing data dari controller ke JS
        const siteUrl = "<?= base_url() ?>";
        console.log('Base URL:', siteUrl);
    </script>


  <!-- Popup Pendaftaran PPDB - TK -->
<div id="brosurPopupTK">
  <div id="popupContainerTK">
    <!-- Tombol Close -->
    <button onclick="document.getElementById('brosurPopupTK').style.display='none'" id="btnCloseTK">
      ✕
    </button>

    <!-- Header Popup -->
    <div class="popup-header-tk">
      <div class="header-logo-tk">
        <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo TK">
      </div>
      <h3 class="form-title-tk">Pendaftaran Peserta Didik Baru</h3>
      <p class="form-subtitle-tk">TK - Tahun Ajaran 2025/2026</p>
    </div>

    <!-- Form Content -->
    <div id="formSectionTK">
      <!-- NOTIF / ALERT -->
      <div id="alertContainerTK"></div>

      <form id="formPendaftaranTK">
        <!-- Nama Lengkap -->
        <div class="form-group-tk">
          <label class="form-label-tk">
            <i class="fa fa-user icon-label-tk"></i>
            Nama Lengkap Anak <span class="required-tk">*</span>
          </label>
          <input type="text" name="nama" class="form-control-tk" 
                 placeholder="Contoh: Aira Putri Azzahra" required>
        </div>

        <!-- Nama Panggilan -->
        <div class="form-group-tk">
          <label class="form-label-tk">
            <i class="fa fa-smile icon-label-tk"></i>
            Nama Panggilan <span class="required-tk">*</span>
          </label>
          <input type="text" name="nama_panggilan" class="form-control-tk" 
                 placeholder="Contoh: Aira" required>
        </div>

        <!-- Tempat Lahir & Tanggal Lahir -->
        <div class="row-tk">
          <div class="col-md-6-tk form-group-tk">
            <label class="form-label-tk">
              <i class="fa fa-map-marker-alt icon-label-tk"></i>
              Tempat Lahir <span class="required-tk">*</span>
            </label>
            <input type="text" name="tempat_lahir" class="form-control-tk" 
                   placeholder="Contoh: Jakarta" required>
          </div>
          <div class="col-md-6-tk form-group-tk">
            <label class="form-label-tk">
              <i class="fa fa-calendar icon-label-tk"></i>
              Tanggal Lahir <span class="required-tk">*</span>
            </label>
            <input type="date" name="tanggal_lahir" class="form-control-tk" required>
          </div>
        </div>

        <!-- Jenis Kelamin & Anak Ke -->
        <div class="row-tk">
          <div class="col-md-6-tk form-group-tk">
            <label class="form-label-tk">
              <i class="fa fa-venus-mars icon-label-tk"></i>
              Jenis Kelamin <span class="required-tk">*</span>
            </label>
            <select name="jenis_kelamin" class="form-control-tk" required>
              <option value="">-- Pilih --</option>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
          <div class="col-md-6-tk form-group-tk">
            <label class="form-label-tk">
              <i class="fa fa-child icon-label-tk"></i>
              Anak Ke- <span class="required-tk">*</span>
            </label>
            <input type="number" name="anak_ke" class="form-control-tk" 
                   placeholder="Contoh: 1" min="1" required>
          </div>
        </div>

        <!-- Nama Ayah & Nama Ibu -->
        <div class="row-tk">
          <div class="col-md-6-tk form-group-tk">
            <label class="form-label-tk">
              <i class="fa fa-male icon-label-tk"></i>
              Nama Ayah <span class="required-tk">*</span>
            </label>
            <input type="text" name="nama_ayah" class="form-control-tk" 
                   placeholder="Contoh: Budi Santoso" required>
          </div>
          <div class="col-md-6-tk form-group-tk">
            <label class="form-label-tk">
              <i class="fa fa-female icon-label-tk"></i>
              Nama Ibu <span class="required-tk">*</span>
            </label>
            <input type="text" name="nama_ibu" class="form-control-tk" 
                   placeholder="Contoh: Siti Aminah" required>
          </div>
        </div>

        <!-- Pekerjaan Ayah & Pekerjaan Ibu -->
        <div class="row-tk">
          <div class="col-md-6-tk form-group-tk">
            <label class="form-label-tk">
              <i class="fa fa-briefcase icon-label-tk"></i>
              Pekerjaan Ayah <span class="required-tk">*</span>
            </label>
            <input type="text" name="pekerjaan_ayah" class="form-control-tk" 
                   placeholder="Contoh: Wiraswasta" required>
          </div>
          <div class="col-md-6-tk form-group-tk">
            <label class="form-label-tk">
              <i class="fa fa-briefcase icon-label-tk"></i>
              Pekerjaan Ibu <span class="required-tk">*</span>
            </label>
            <input type="text" name="pekerjaan_ibu" class="form-control-tk" 
                   placeholder="Contoh: Ibu Rumah Tangga" required>
          </div>
        </div>

        <!-- Agama -->
        <div class="form-group-tk">
          <label class="form-label-tk">
            <i class="fa fa-book icon-label-tk"></i>
            Agama <span class="required-tk">*</span>
          </label>
          <select name="agama" class="form-control-tk" required>
            <option value="">-- Pilih Agama --</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghucu">Konghucu</option>
          </select>
        </div>

        <!-- Alamat Lengkap -->
        <div class="form-group-tk">
          <label class="form-label-tk">
            <i class="fa fa-home icon-label-tk"></i>
            Alamat Lengkap <span class="required-tk">*</span>
          </label>
          <textarea name="alamat" class="form-control-tk" rows="3" 
                    placeholder="Contoh: Jl. Merdeka No. 123, RT 01/RW 05, Kelurahan ABC, Kecamatan XYZ" 
                    required></textarea>
        </div>

        <!-- Nomor WhatsApp -->
        <div class="form-group-tk">
          <label class="form-label-tk">
            <i class="fa fa-phone icon-label-tk"></i>
            Nomor WhatsApp Orang Tua <span class="required-tk">*</span>
          </label>
          <input type="tel" name="no_hp" class="form-control-tk" 
                 placeholder="Contoh: 081234567890" required>
          <small class="form-text-tk">Gunakan format: 08xxxxxxxxxx</small>
        </div>

        <!-- Hidden Fields -->
        <input type="hidden" name="jenjang" value="tk">
        <input type="hidden" name="jurusan" value="-">
        <input type="hidden" name="asal_sekolah" value="-">

        <!-- Tombol Submit -->
        <button type="submit" id="btnSubmitTK" class="btn-submit-tk">
          <i class="fa fa-paper-plane me-2"></i>Kirim Pendaftaran
        </button>

        <p class="form-footer-tk">
          <span class="required-tk">*</span> Wajib diisi
        </p>
      </form>
    </div>
  </div>
</div>

<!-- Script Popup - CSRF FIXED -->
<script>
(function() {
  'use strict';

  // ========================================
  // FUNGSI GET CSRF TOKEN
  // ========================================
  function getCsrfToken() {
    const metaToken = document.querySelector('meta[name="X-CSRF-TOKEN"]');
    if (metaToken) {
      return metaToken.getAttribute('content');
    }
    
    const cookies = document.cookie.split(';');
    for (let cookie of cookies) {
      const [name, value] = cookie.trim().split('=');
      if (name === 'csrf_cookie_name' || name === 'csrf_token') {
        return decodeURIComponent(value);
      }
    }
    
    return null;
  }

  // ========================================
  // 1. TAMPILKAN POPUP SETELAH 2 DETIK
  // ========================================
  window.addEventListener("load", function () {
    <?php if (session()->has('popup_errors') || session()->has('popup_success')): ?>
      document.getElementById('brosurPopupTK').style.display = 'flex';
    <?php else: ?>
      setTimeout(() => {
        document.getElementById('brosurPopupTK').style.display = 'flex';
      }, 2000);
    <?php endif ?>
  });

  // ========================================
  // 2. VALIDASI NOMOR WHATSAPP
  // ========================================
  const noHpInput = document.querySelector('#formPendaftaranTK input[name="no_hp"]');
  if (noHpInput) {
    noHpInput.addEventListener('input', function(e) {
      this.value = this.value.replace(/[^0-9]/g, '');
      
      if (this.value.length > 0 && !this.value.startsWith('08')) {
        this.setCustomValidity('Nomor harus diawali dengan 08');
      } else if (this.value.length > 0 && this.value.length < 10) {
        this.setCustomValidity('Nomor minimal 10 digit');
      } else {
        this.setCustomValidity('');
      }
    });
  }

  // ========================================
  // 3. VALIDASI ANAK KE
  // ========================================
  const anakKeInput = document.querySelector('#formPendaftaranTK input[name="anak_ke"]');
  if (anakKeInput) {
    anakKeInput.addEventListener('input', function(e) {
      if (this.value < 1) {
        this.value = 1;
      }
    });
  }

  // ========================================
  // 4. SUBMIT FORM - WITH CSRF FIX
  // ========================================
  const form = document.getElementById('formPendaftaranTK');
  
  form.addEventListener('submit', function(e) {
    e.preventDefault();
    
    const btnSubmit = document.getElementById('btnSubmitTK');
    const originalText = btnSubmit.innerHTML;
    const alertContainer = document.getElementById('alertContainerTK');
    
    alertContainer.innerHTML = '';
    btnSubmit.disabled = true;
    btnSubmit.innerHTML = '<i class="fa fa-spinner fa-spin me-2"></i>Mengirim...';
    
    const formData = new FormData(this);
    const jenjang = formData.get('jenjang');
    
    // ✅ AMBIL CSRF TOKEN
    const csrfToken = getCsrfToken();
    console.log('CSRF Token:', csrfToken);
    
    // Debug
    console.log('=== FORM DATA TK ===');
    for (let pair of formData.entries()) {
      console.log(pair[0] + ': ' + pair[1]);
    }
    
    // ✅ KIRIM DENGAN CSRF TOKEN
    const headers = {
      'X-Requested-With': 'XMLHttpRequest'
    };
    
    if (csrfToken) {
      headers['X-CSRF-TOKEN'] = csrfToken;
    }
    
    fetch('<?= base_url("pendaftaran/submit") ?>/' + jenjang, {
      method: 'POST',
      headers: headers,
      body: formData,
      credentials: 'same-origin'
    })
    .then(response => {
      console.log('Response status:', response.status);
      console.log('Response headers:', [...response.headers.entries()]);
      
      if (!response.ok) {
        throw new Error('HTTP Error! Status: ' + response.status);
      }
      
      return response.json();
    })
    .then(data => {
      console.log('Response data:', data);
      
      if (data.success) {
        alertContainer.innerHTML = `
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa-check-circle me-2"></i><strong>Berhasil!</strong> ${data.message}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>
        `;
        
        form.reset();
        
        setTimeout(() => {
          document.getElementById('brosurPopupTK').style.display = 'none';
          alertContainer.innerHTML = '';
        }, 3000);
        
      } else {
        let errorMsg = data.message || 'Pendaftaran gagal';
        
        if (data.errors && Object.keys(data.errors).length > 0) {
          errorMsg += '<ul class="mb-0 mt-2 text-start small">';
          for (let field in data.errors) {
            errorMsg += '<li>' + data.errors[field] + '</li>';
          }
          errorMsg += '</ul>';
        }
        
        alertContainer.innerHTML = `
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i><strong>Gagal!</strong> ${errorMsg}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>
        `;
      }
      
      btnSubmit.disabled = false;
      btnSubmit.innerHTML = originalText;
      alertContainer.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    })
    .catch(error => {
      console.error('Fetch Error:', error);
      
      alertContainer.innerHTML = `
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <i class="fa fa-exclamation-circle me-2"></i>
          <strong>Error!</strong> Terjadi kesalahan koneksi.<br>
          <small class="text-muted">${error.message}</small>
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
      `;
      
      btnSubmit.disabled = false;
      btnSubmit.innerHTML = originalText;
    });
  });

  // ========================================
  // 5. TUTUP POPUP
  // ========================================
  document.getElementById('brosurPopupTK').addEventListener('click', function(e) {
    if (e.target === this) {
      this.style.display = 'none';
    }
  });

  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
      document.getElementById('brosurPopupTK').style.display = 'none';
    }
  });

})();
</script>
<!-- POP UP PENDAFTARAN TK END -->


<!-- TAMBAHKAN SCRIPT INI SEBELUM PENUTUP </body> atau DI DALAM script.js -->
<script>
// Fungsi untuk membuka popup pendaftaran
function openRegistrationPopup() {
    document.getElementById('brosurPopupTK').style.display = 'flex';
    
    // Scroll ke atas popup (opsional)
    const popupContainer = document.getElementById('popupContainerTK');
    if (popupContainer) {
        popupContainer.scrollTop = 0;
    }
}

// Fungsi untuk menutup popup (bisa dipanggil dari mana saja)
function closeRegistrationPopup() {
    document.getElementById('brosurPopupTK').style.display = 'none';
}
</script>
</body>
</html>