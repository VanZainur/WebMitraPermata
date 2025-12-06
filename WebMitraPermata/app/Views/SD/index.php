<?= $this->extend('SD/layout/main') ?>

<?= $this->section('title') ?>SD Mitra Permata<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                  <img class="img-fluid" src="<?= base_url('assets/sd/img/background1.jpg') ?>" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Pendidikan Berkualitas</h5>
                                <h1 class="display-3 text-white animated slideInDown">Selamat Datang di SD Mitra Permata</h1>
                                <p class="fs-5 text-white mb-4 pb-2">SD Mitra Permata merupakan sekolah dasar yang berkomitmen untuk menghasilkan lulusan yang kompeten, berkarakter, dan siap belajar</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Info Selengkapnya</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Daftar Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="<?= base_url('assets/sd/img/background2.png') ?>" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Bersama Membangun Masa Depan</h5>
                                <h1 class="display-3 text-white animated slideInDown">Penerimaan Siswa Baru</h1>
                                <p class="fs-5 text-white mb-4 pb-2">SD Mitra Permata siap mendampingi siswa meraih masa depan yang lebih cerah. Daftarkan diri Anda dan jadilah bagian dari keluarga besar SD Mitra Permata!</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Info Selengkapnya</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Daftar Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div id="about" class="container-xxl py-5 category">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="<?= base_url('assets/sd/img/kepsek.png') ?>" alt="" style="object-fit: cover;">

                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="mb-4">Sambutan Kepala Sekolah</h1>
                    <p class="mb-4" style="text-align: justify;">Dengan penuh rasa syukur kepada Tuhan Yang Maha Esa, kami menyambut Anda di SD Mitra Permata, sebuah lembaga pendidikan yang berkomitmen membentuk generasi muda yang unggul, berkarakter, dan siap menghadapi tantangan masa depan. Melalui pembelajaran yang inovatif dan menyenangkan, fasilitas yang mendukung perkembangan anak, kami berupaya menghadirkan lingkungan belajar yang inspiratif, penuh kasih sayang, dan kondusif bagi seluruh peserta didik kami.</p>
                    <p class="mb-4" style="text-align: justify;">Kami percaya bahwa setiap siswa memiliki potensi besar yang harus dikembangkan melalui pendidikan yang tepat dan bermakna. Setiap anak adalah unik, dengan bakat dan minat yang berbeda-beda. Oleh karena itu, SD Mitra Permata terus bertransformasi untuk menghadirkan pengalaman belajar yang tidak hanya fokus pada aspek akademik, tetapi juga pengembangan karakter, kreativitas, dan keterampilan sosial yang akan membentuk pribadi yang tangguh dan berakhlak mulia.</p>
                    <p class="mb-4" style="text-align: justify;">Semoga website ini dapat menjadi jembatan informasi yang efektif bagi siswa, orang tua, calon orang tua murid, dan masyarakat dalam mengenal lebih dekat SD Mitra Permata. Mari bersama-sama kita wujudkan cita-cita untuk menciptakan generasi Indonesia yang cerdas, berkarakter, dan berprestasi. Terima kasih atas kepercayaan yang telah diberikan kepada SD Mitra Permata.</p>
                    <!-- <a class="btn btn-primary py-3 px-5 mt-2" href="">Lihat Selengkapnya</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">

                <!-- Guru Profesional -->
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                            <h5 class="mb-3">Guru Profesional & Berpengalaman</h5>
                            <p>Tenaga pendidik berkualifikasi tinggi dan berpengalaman di bidangnya untuk memastikan kualitas pembelajaran terbaik.</p>
                        </div>
                    </div>
                </div>

                <!-- Kurikulum Nasional -->
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h5 class="mb-3">Kurikulum Nasional</h5>
                            <p>Menggunakan kurikulum resmi Kemendikbud yang selalu diperbarui agar sesuai dengan perkembangan dunia pendidikan serta kebutuhan peserta didik.</p>
                        </div>
                    </div>
                </div>

                <!-- Fasilitas Lengkap & Modern -->
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-school text-primary mb-4"></i>
                            <h5 class="mb-3">Fasilitas Lengkap & Modern</h5>
                            <p>Dilengkapi ruang kelas nyaman, laboratorium, area bermain, serta sarana pembelajaran yang mendukung siswa.</p>
                        </div>
                    </div>
                </div>

                <!-- Terakreditasi -->
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-certificate text-primary mb-4"></i>
                            <h5 class="mb-3">Terakreditasi</h5>
                            <p>Sekolah dengan status akreditasi resmi yang menjamin mutu dan kualitas pendidikan serta memastikan proses pembelajaran berjalan amandan terpercaya.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Service End -->

<!-- Guru Start -->
<div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Guru</h6>
                <h1 class="mb-5">Tenaga Pendidik Dan Kependidikan</h1>
            </div>
            <div class="row g-4">

                <?php if (!empty($guru)): ?>
                    <?php foreach ($guru as $item): ?>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item bg-light">
                                <div class="overflow-hidden">
                                    <img class="img-fluid" 
                                         src="<?= base_url('uploads/' . strtolower($item['jenjang']) . '/guru/' . $item['foto']) ?>" 
                                         alt="<?= esc($item['nama']) ?>">
                                </div>
                                <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                    <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                        <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <h5 class="mb-0"><?= esc($item['nama']) ?></h5>
                                    <small><?= esc($item['jabatan']) ?></small>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-12">
                        <p class="text-center text-muted">Belum ada data guru tersedia.</p>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
    <!-- Guru End -->

   <!-- Prestasi Start -->
   <div id="prestasi" class="container-xxl py-5 category">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Prestasi</h6>
            <h1 class="mb-3">Terbaik Siswa</h1>
            <p class="text-muted mb-4">Siswa-siswi kami berhasil meraih berbagai prestasi yang membanggakan</p>
        </div>

        <div class="row g-4">
            <?php if (!empty($prestasi)): ?>
                <?php foreach ($prestasi as $item): ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="prestasi-card shadow-lg rounded overflow-hidden">
                            <div class="prestasi-img">
                                <img src="<?= base_url('uploads/' . strtolower($item['jenjang']) . '/prestasi/' . $item['gambar']) ?>" 
                                    alt="<?= esc($item['judul']) ?>">
                            </div>
                            <div class="prestasi-body p-4">
                                <h5 class="fw-bold mb-2"><?= esc($item['judul']) ?></h5>
                                <p class="text-muted mb-3">
                                    <?= esc(substr($item['deskripsi'], 0, 100)) ?>...
                                </p>
                                <small class="text-muted d-block mb-3">
                                    <i class="fa fa-calendar"></i> 
                                    <?= date('d M Y', strtotime($item['tanggal'])) ?>
                                </small>
                                <!-- Tombol Lihat Detail -->
                                <button class="btn btn-primary btn-sm" 
                                        onclick="openModal('prestasi', <?= htmlspecialchars(json_encode($item), ENT_QUOTES, 'UTF-8') ?>)">
                                    <i class="fa fa-eye"></i> Lihat Detail
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12">
                    <p class="text-center text-muted">Belum ada prestasi tersedia.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
    <!-- Prestasi End -->

    <!-- Ekstrakurikuler Start -->
    <div id="eskul" class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Kegiatan</h6>
                <h1 class="mb-2">Ekstrakurikuler</h1>
                <p class="text-muted mb-4">Di sekolah kami, kegiatan ekstrakurikuler menjadi wadah untuk mengembangkan bakat, minat, dan kreativitas siswa. Melalui berbagai kegiatan yang seru dan bermanfaat, siswa dapat belajar hal baru, melatih kedisiplinan, serta membangun kerja sama dalam tim. Setiap kegiatan dirancang agar mendukung perkembangan karakter sekaligus memberikan pengalaman belajar yang menyenangkan di luar kelas.</p>
            </div>

            <!-- Eskul Slider Container -->
            <div class="eskul-slider-wrapper">
                
                <!-- Navigation Button Left -->
                <button class="eskul-nav eskul-prev" onclick="eskulSlide(-1)">
                    <i class="fas fa-chevron-left"></i>
                </button>

                <!-- Eskul Cards Container -->
                <div class="eskul-cards-container">
                    <div class="eskul-cards-track" id="eskulTrack">
                        
                        <!-- Eskul Card 1 - Pramuka -->
                        <div class="eskul-slider-card">
                            <div class="eskul-slider-image">
                                <img src="<?= base_url('assets/images/kegiatan/pramuka.jpg') ?>" alt="Pramuka">
                            </div>
                            <h5 class="eskul-slider-title">Pramuka</h5>
                            <p class="eskul-slider-desc">Kegiatan kepramukaan yang melatih kedisiplinan, kemandirian, dan kepemimpinan siswa melalui berbagai aktivitas outdoor.</p>
                            <p class="eskul-slider-schedule">Setiap Sabtu</p>
                        </div>

                        <!-- Eskul Card 2 - Paskibra -->
                        <div class="eskul-slider-card">
                            <div class="eskul-slider-image">
                                <img src="<?= base_url('assets/images/kegiatan/paskibra.jpg') ?>" alt="Paskibra">
                            </div>
                            <h5 class="eskul-slider-title">Paskibra</h5>
                            <p class="eskul-slider-desc">Pasukan Pengibar Bendera yang melatih kekompakan, ketegasan, dan nasionalisme dalam upacara bendera.</p>
                            <p class="eskul-slider-schedule">Setiap Jumat</p>
                        </div>

                        <!-- Eskul Card 3 - Seni Musik -->
                        <div class="eskul-slider-card">
                            <div class="eskul-slider-image">
                                <img src="<?= base_url('assets/images/kegiatan/seni musik.jpeg') ?>" alt="Seni Musik">
                            </div>
                            <h5 class="eskul-slider-title">Seni Musik</h5>
                            <p class="eskul-slider-desc">Mengembangkan kreativitas dan bakat seni musik siswa melalui berbagai alat musik modern dan tradisional.</p>
                            <p class="eskul-slider-schedule">Setiap Minggu</p>
                        </div>

                        <!-- Eskul Card 4 - Seni Tari -->
                        <div class="eskul-slider-card">
                            <div class="eskul-slider-image">
                                <img src="<?= base_url('assets/images/kegiatan/seni tari.jpeg') ?>" alt="Seni Tari">
                            </div>
                            <h5 class="eskul-slider-title">Seni Tari</h5>
                            <p class="eskul-slider-desc">Melatih kemampuan seni tari tradisional dan modern untuk mengembangkan kepercayaan diri dan ekspresi siswa.</p>
                            <p class="eskul-slider-schedule">Setiap Rabu</p>
                        </div>

                        <!-- Eskul Card 5 - Marawis -->
                        <div class="eskul-slider-card">
                            <div class="eskul-slider-image">
                                <img src="<?= base_url('assets/images/kegiatan/marawis.jpg') ?>" alt="Marawis">
                            </div>
                            <h5 class="eskul-slider-title">Marawis</h5>
                            <p class="eskul-slider-desc">Seni musik tradisional Islam yang mengembangkan bakat seni dan memperkuat nilai-nilai keagamaan siswa.</p>
                            <p class="eskul-slider-schedule">Setiap Selasa</p>
                        </div>

                        <!-- Eskul Card 6 - Futsal -->
                        <div class="eskul-slider-card">
                            <div class="eskul-slider-image">
                                <img src="<?= base_url('assets/images/kegiatan/futsal.jpg') ?>" alt="Futsal">
                            </div>
                            <h5 class="eskul-slider-title">Futsal</h5>
                            <p class="eskul-slider-desc">Olahraga futsal untuk meningkatkan kebugaran, kerja sama tim, dan sportivitas siswa dalam kompetisi.</p>
                            <p class="eskul-slider-schedule">Setiap Kamis</p>
                        </div>

                        <!-- Eskul Card 7 - Voli -->
                        <div class="eskul-slider-card">
                            <div class="eskul-slider-image">
                                <img src="<?= base_url('assets/images/kegiatan/olahraga.png') ?>" alt="Voli">
                            </div>
                            <h5 class="eskul-slider-title">Voli</h5>
                            <p class="eskul-slider-desc">Olahraga bola voli yang melatih koordinasi, kekuatan, dan kekompakan tim dalam pertandingan.</p>
                            <p class="eskul-slider-schedule">Setiap Senin</p>
                        </div>

                    </div>
                </div>

                <!-- Navigation Button Right -->
                <button class="eskul-nav eskul-next" onclick="eskulSlide(1)">
                    <i class="fas fa-chevron-right"></i>
                </button>

            </div>

            <!-- Slider Dots -->
            <div class="eskul-dots" id="eskulDots"></div>

        </div>
    </div>
    <!-- Ekstrakurikuler End -->

        <!-- kegiatan Start-->
        <div id="kegiatan" class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Acara</h6>
            <h1 class="mb-3">Kegiatan Sekolah</h1>
            <p class="text-muted mb-4">Kegiatan sekolah kami mencakup berbagai program yang edukatif</p>
        </div>

        <div class="row g-4">
            <?php if (!empty($kegiatan)): ?>
                <?php foreach ($kegiatan as $item): ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="kegiatan-card">
                            <div class="kegiatan-image">
                                <img src="<?= base_url('uploads/' . strtolower($item['jenjang']) . '/kegiatan/' . $item['gambar']) ?>" 
                                    alt="<?= esc($item['judul']) ?>">
                                <div class="kegiatan-date">
                                    <?= date('d M Y', strtotime($item['tanggal'])) ?>
                                </div>
                            </div>
                            <div class="kegiatan-content">
                                <h5 class="kegiatan-title"><?= esc($item['judul']) ?></h5>
                                <p class="kegiatan-desc"><?= esc(substr($item['deskripsi'], 0, 100)) ?>...</p>
                                <!-- Tombol Lihat Detail -->
                                <button class="btn btn-primary btn-sm" 
                                        onclick="openModal('kegiatan', <?= htmlspecialchars(json_encode($item), ENT_QUOTES, 'UTF-8') ?>)">
                                    Lihat Detail <i class="fa fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center text-muted">Belum ada kegiatan tersedia.</div>
            <?php endif; ?>
        </div>
    </div>
</div>
    <!-- Kegiatan End-->

     <!-- Berita Start-->
<div id="berita" class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Informasi</h6>
            <h1 class="mb-5">Berita Terkini</h1>
        </div>

        <div class="row g-4">
            <?php if (!empty($berita)): ?>
                <?php foreach ($berita as $item): ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="berita-card">
                            <div class="berita-image">
                                <img src="<?= base_url('uploads/' . strtolower($item['jenjang']) . '/berita/' . $item['gambar']) ?>" 
                                    alt="<?= esc($item['judul']) ?>">
                                <div class="berita-badge">
                                    <i class="fa fa-calendar"></i> 
                                    <?= date('d M Y', strtotime($item['tanggal'])) ?>
                                </div>
                            </div>
                            <div class="berita-content">
                                <h5 class="berita-title"><?= esc($item['judul']) ?></h5>
                                <p class="berita-desc"><?= esc(substr($item['deskripsi'], 0, 100)) ?>...</p>
                                <!-- Tombol Lihat Detail -->
                                <button class="btn btn-primary btn-sm" 
                                        onclick="openModal('berita', <?= htmlspecialchars(json_encode($item), ENT_QUOTES, 'UTF-8') ?>)">
                                    Baca Selengkapnya <i class="fa fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12">
                    <p class="text-center text-muted">Belum ada berita tersedia.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
    <!-- Berita End-->

    <!-- ============================================================
     MODAL POPUP (UNIVERSAL UNTUK SEMUA)
     ============================================================ -->
<div id="modalDetail" class="modal-detail">
    <div class="modal-content-detail">
        <div class="modal-header-detail">
            <span class="modal-close" onclick="closeModal()">&times;</span>
            <img id="modalImage" src="" alt="Detail Image">
        </div>
        <div class="modal-body-detail">
            <h2 class="modal-title-detail" id="modalTitle"></h2>
            <span class="modal-date-detail" id="modalDate"></span>
            <p class="modal-desc-detail" id="modalDesc"></p>
        </div>
    </div>
</div>
    
    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">Kata Siswa Kami!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                   <img class="border rounded-circle p-2 mx-auto mb-3" src="<?= base_url('assets/sd/img/testimonial-1.jpg') ?>" style="width: 80px; height: 80px;">

                    <h5 class="mb-0">Yunita</h5>
                    <p>Siswi</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">“Saya merasa bangga menjadi bagian dari SD Mitra Permata karena setiap hari saya mendapatkan pengalaman belajar baru yang membantu saya berkembang baik secara akademik maupun keterampilan praktis.”</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                   <img class="border rounded-circle p-2 mx-auto mb-3" src="<?= base_url('assets/sd/img/testimonial-2.jpg') ?>" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Agung Rizki Saputra</h5>
                    <p>Siswa</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">“Lingkungan belajar di SD Mitra Permata sangat mendukung, para guru selalu memberikan bimbingan yang jelas sehingga saya lebih percaya diri dalam memahami materi dan menghadapi tantangan baru.”</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                  <img class="border rounded-circle p-2 mx-auto mb-3" src="<?= base_url('assets/sd/img/testimonial-3.jpg') ?>" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Irvandy Zainur</h5>
                    <p>Siswa</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">“Program pembelajaran yang terstruktur di SD Mitra Permata mendorong saya untuk lebih disiplin, sehingga saya mampu mengembangkan potensi dengan baik dan siap menghadapi dunia kerja.”</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                   <img class="border rounded-circle p-2 mx-auto mb-3" src="<?= base_url('assets/sd/img/testimonial-4.jpg') ?>" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Someone</h5>
                    <p>Siswi</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">“Fasilitas sekolah yang lengkap dan suasana belajar yang nyaman membuat saya lebih termotivasi untuk terus meningkatkan kemampuan diri serta mengejar cita-cita yang ingin saya capai.”</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

<!-- Contact Start -->

<div id="kontak" class="container-xxl py-5 category">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Kontak Kami</h6>
            <h1 class="mb-5">Hubungi kami untuk pertanyaan apa pun.</h1>
        </div>


    <!-- Alerts -->
    <?php if(session()->get('success')): ?>
        <div class="alert alert-success"><?= session()->get('success') ?></div>
    <?php endif; ?>

    <?php if(session()->get('error')): ?>
        <div class="alert alert-danger"><?= session()->get('error') ?></div>
    <?php endif; ?>

    <!-- Contact Content -->
    <div class="row g-4">
        <!-- Info Kontak -->
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <h5>Kami Siap Membantu</h5>
            <p class="mb-3 text-justify">
                Hubungi kami untuk mendapatkan informasi terbaru seputar program pendidikan, pendaftaran siswa baru, dan layanan akademik. Tim kami siap membantu Anda dengan respon yang cepat dan ramah.
            </p>

            <!-- Alamat -->
            <div class="d-flex align-items-start mb-3">
                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                    <i class="fa fa-map-marker-alt text-white"></i>
                </div>
                <div class="ms-3">
                    <h5 class="text-primary">Lokasi</h5>
                    <p class="mb-1">Perumahan Villa Permata, Blok. D8 - D9 No.1, Sindangsari, Ps. Kemis, Tangerang, Banten 15560</p>
                </div>
            </div>

            <!-- Telepon -->
            <div class="d-flex align-items-start mb-3">
                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                    <i class="fa fa-phone-alt text-white"></i>
                </div>
                <div class="ms-3">
                    <h5 class="text-primary">No Telepon</h5>
                    <p class="mb-1">0858-4632-5633 (Miss. Tita) - Staff</p>
                </div>
            </div>

            <!-- Email -->
            <div class="d-flex align-items-start">
                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                    <i class="fa fa-envelope-open text-white"></i>
                </div>
                <div class="ms-3">
                    <h5 class="text-primary">Email</h5>
                    <p class="mb-0">info@mitrapermata.sch.id</p>
                </div>
            </div>
        </div>

        <!-- Map -->
        <div class="col-lg-8 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <iframe class="position-relative rounded w-100 h-100"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.9391231209147!2d106.52772367366288!3d-6.13888099384802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a000100000001%3A0x78b8d9a04432be9f!2sTK-SD-SMP-SMK-PKBM%20-%20LKP%20MITRA%20PERMATA!5e0!3m2!1sid!2sid!4v1759418850999!5m2!1sid!2sid"
                frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
            </iframe>
        </div>
    </div>
</div>

</div>
<!-- Contact End -->

    <script>
function openModal(type, data) {
    const modal = document.getElementById('modalDetail');
    const modalImage = document.getElementById('modalImage');
    const modalTitle = document.getElementById('modalTitle');
    const modalDate = document.getElementById('modalDate');
    const modalDesc = document.getElementById('modalDesc');
    
    // Set base URL dari PHP
    const baseUrl = '<?= base_url() ?>';
    
    // Set konten modal berdasarkan tipe
    let imagePath = '';
    if (type === 'prestasi') {
        imagePath = baseUrl + 'uploads/sd/prestasi/' + data.gambar;
    } else if (type === 'kegiatan') {
        imagePath = baseUrl + 'uploads/sd/kegiatan/' + data.gambar;
    } else if (type === 'berita') {
        imagePath = baseUrl + 'uploads/sd/berita/' + data.gambar;
    }
    
    console.log('Image Path:', imagePath); // Debug
    
    modalImage.src = imagePath;
    modalImage.alt = data.judul;
    modalTitle.textContent = data.judul;
    modalDate.textContent = formatDate(data.tanggal);
    modalDesc.textContent = data.deskripsi;
    
    // Tampilkan modal
    modal.style.display = 'block';
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    const modal = document.getElementById('modalDetail');
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
}

function formatDate(dateString) {
    const months = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];
    const date = new Date(dateString);
    return date.getDate() + ' ' + months[date.getMonth()] + ' ' + date.getFullYear();
}

// Tutup modal dengan ESC
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        closeModal();
    }
});

// Tutup modal jika klik di luar konten
window.onclick = function(event) {
    const modal = document.getElementById('modalDetail');
    if (event.target == modal) {
        closeModal();
    }
}
</script>
 
<?= $this->endSection() ?>  