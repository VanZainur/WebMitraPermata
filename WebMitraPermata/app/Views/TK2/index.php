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
        <ul class="nav-links">
            <li><a href="#home">Beranda</a></li>
            <li><a href="#about">Tentang</a></li>
            <li><a href="#program">Program</a></li>
            <li><a href="#contact">Kontak</a></li>
            <li class="btn-daftar">
                <a href="#daftar">Pendaftaran</a>
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
        <h2 class="section-title">📖 Tentang Kami</h2>
        <div class="about-content">
            <p>TK Mitra Permata adalah lembaga pendidikan anak usia dini yang berkomitmen untuk mengembangkan potensi anak melalui metode pembelajaran yang menyenangkan dan inovatif. Dengan tenaga pengajar berpengalaman dan fasilitas lengkap, kami siap menjadi mitra terbaik dalam tumbuh kembang buah hati Anda! 🌟</p>
            <p style="margin-top: 20px;"><strong>Visi:</strong> Menjadi TK terbaik yang mencetak generasi cerdas, kreatif, dan berakhlak mulia.</p>
            <p style="margin-top: 10px;"><strong>Misi:</strong> Memberikan pendidikan berkualitas dengan pendekatan yang ramah anak dan mengutamakan perkembangan holistik.</p>
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

        <!-- FORM -->
        <div class="contact-form">
            <form>
                <div class="form-grid">
                    <input type="text" placeholder="Nama Anda">
                    <input type="email" placeholder="Email Anda">
                </div>

                <input type="text" placeholder="Subjek">

                <textarea placeholder="Pesan"></textarea>

                <button class="btn-kirimpesan" type="submit">Kirim Pesan</button>
            </form>
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
                    <li>🏠 Beranda</li>
                    <li>📖 Tentang Kami</li>
                    <li>✨ Program</li>
                    <li>👩‍🏫 Guru</li>
                    <li>📸 Galeri</li>
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
</body>
</html>