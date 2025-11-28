<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Title dari controller (optional) -->
    <title><?= isset($title) ? $title : 'TK Pelangi Ceria' ?></title>
    
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
        <ul class="nav-links">
            <li><a href="#home">Beranda</a></li>
            <li><a href="#about">Tentang</a></li>
            <li><a href="#programs">Program</a></li>
            <li><a href="#contact">Kontak</a></li>
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
                <h1>Selamat Datang di <br> TK Mitra Permata</h1>
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
        <h2 class="section-title">📖 Tentang Kami</h2>
        <div class="about-content">
            <p>TK Mitra Permata adalah lembaga pendidikan anak usia dini yang berkomitmen untuk mengembangkan potensi anak melalui metode pembelajaran yang menyenangkan dan inovatif. Dengan tenaga pengajar berpengalaman dan fasilitas lengkap, kami siap menjadi mitra terbaik dalam tumbuh kembang buah hati Anda! 🌟</p>
            <p style="margin-top: 20px;"><strong>Visi:</strong> Menjadi TK terbaik yang mencetak generasi cerdas, kreatif, dan berakhlak mulia.</p>
            <p style="margin-top: 10px;"><strong>Misi:</strong> Memberikan pendidikan berkualitas dengan pendekatan yang ramah anak dan mengutamakan perkembangan holistik.</p>
        </div>
    </section>

    <!-- Cards Section -->
    <section class="cards-section">
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

    <!-- Programs Section -->
    <!-- <section class="programs" id="programs">
        <h2 class="section-title">✨ Program Kami</h2>
        <div class="programs-grid">
            <div class="program-card">
                <span class="program-icon">🎨</span>
                <h3>Seni & Kreativitas</h3>
                <p>Mengembangkan imajinasi dan kreativitas anak melalui menggambar, mewarnai, dan kerajinan tangan.</p>
            </div>
            
            <div class="program-card">
                <span class="program-icon">📚</span>
                <h3>Literasi & Numerasi</h3>
                <p>Belajar membaca, menulis, dan berhitung dengan metode yang menyenangkan dan interaktif.</p>
            </div>
            
            <div class="program-card">
                <span class="program-icon">🎵</span>
                <h3>Musik & Gerak</h3>
                <p>Mengasah kemampuan motorik dan kepercayaan diri melalui musik, tari, dan gerakan.</p>
            </div>
            
            <div class="program-card">
                <span class="program-icon">🌍</span>
                <h3>Pengenalan Lingkungan</h3>
                <p>Mengenal alam, hewan, dan lingkungan sekitar melalui kegiatan outdoor yang seru.</p>
            </div>
            
            <div class="program-card">
                <span class="program-icon">🎭</span>
                <h3>Drama & Bercerita</h3>
                <p>Melatih kemampuan komunikasi dan ekspresi diri melalui bermain peran dan storytelling.</p>
            </div>
            
            <div class="program-card">
                <span class="program-icon">⚽</span>
                <h3>Olahraga & Permainan</h3>
                <p>Mengembangkan fisik dan kerjasama tim melalui berbagai permainan edukatif.</p>
            </div>
        </div>
    </section> -->

    <!-- Facilities Section -->
    <section class="facilities">
        <h2 class="section-title">🏫 Fasilitas Lengkap</h2>
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
    <section class="gallery">
        <h2 class="section-title">📸 Galeri Kegiatan</h2>
        <div class="gallery-grid">
            <div class="gallery-item">
                <a href="">
                    <img src="<?= base_url('assets/tk2/img/tk1.jpg') ?>">
                    <p class="gallery-caption">Praktek Sholat</p>
                </a>
            </div>

            <div class="gallery-item">
                <a href="">
                    <img src="<?= base_url('assets/tk2/img/tk2.jpg') ?>">
                    <p class="gallery-caption">Kegiatan Memasak</p>
                </a>
            </div>

            <div class="gallery-item">
                <a href="">
                    <img src="<?= base_url('assets/tk2/img/tk3.jpg') ?>">
                    <p class="gallery-caption">Praktek Menggambar</p>
                </a>
            </div>

            <div class="gallery-item">
                <a href="">
                    <img src="<?= base_url('assets/tk2/img/tk4.jpg') ?>">
                    <p class="gallery-caption">Makan Bersama</p>
                </a>
            </div>

            <div class="gallery-item">
                <a href="">
                    <img src="<?= base_url('assets/tk2/img/tk5.jpg') ?>">
                    <p class="gallery-caption">Proses Mengajar</p>
                </a>
            </div>

        </div>
    </section>

    <!-- Teachers Section -->
    <section class="teachers">
        <h2 class="section-title">👩‍🏫 Tenaga Pengajar Profesional</h2>
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
        <div class="contact-grid">
            <div class="contact-item">
                <span>📍</span>
                <h3>Alamat</h3>
                <p>Jl. Pendidikan No. 123<br>Jakarta Selatan</p>
            </div>
            <div class="contact-item">
                <span>📞</span>
                <h3>Telepon</h3>
                <p>(021) 1234-5678<br>WA: 0812-3456-7890</p>
            </div>
            <div class="contact-item">
                <span>📧</span>
                <h3>Email</h3>
                <p>info@tkpelangiceria.com<br>admin@tkpelangiceria.com</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-float">🎈</div>
        <div class="footer-float">⭐</div>
        <div class="footer-float">🌟</div>
        <div class="footer-float">✨</div>
        
        <div class="footer-content">
            <div class="footer-section">
                <h3>🌈 TK Pelangi Ceria</h3>
                <p>Tempat terbaik untuk anak Anda bermain, belajar, dan berkembang dengan gembira!</p>
                <div class="social-icons" style="margin-top: 20px;">
                    <span>📘</span>
                    <span>📷</span>
                    <span>🐦</span>
                    <span>📹</span>
                </div>
            </div>
            
            <div class="footer-section">
                <h3>Link Cepat</h3>
                <ul>
                    <li>🏠 Beranda</li>
                    <li>📖 Tentang Kami</li>
                    <li>✨ Program</li>
                    <li>👩‍🏫 Guru</li>
                    <li>📸 Galeri</li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Informasi</h3>
                <ul>
                    <li>📝 Pendaftaran</li>
                    <li>💰 Biaya Sekolah</li>
                    <li>📅 Kalender Akademik</li>
                    <li>📋 Syarat & Ketentuan</li>
                    <li>🔒 Kebijakan Privasi</li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Jam Operasional</h3>
                <p><strong>Senin - Jumat</strong><br>07.00 - 15.00 WIB</p>
                <p style="margin-top: 10px;"><strong>Sabtu</strong><br>08.00 - 12.00 WIB</p>
                <p style="margin-top: 10px;"><strong>Minggu</strong><br>Libur</p>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>© 2024 TK Pelangi Ceria. Dibuat dengan ❤️ untuk anak-anak Indonesia</p>
            <p style="margin-top: 10px;">🌈 Bersama Membangun Generasi Cerdas & Ceria! 🌈</p>
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
</body>
</html>