<?= $this->extend('smp/layout/main') ?>

<?= $this->section('title') ?>SMP Mitra Permata<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                  <img class="img-fluid" src="<?= base_url('assets/SMP/img/background1.jpg') ?>" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Pendidikan Berkualitas</h5>
                                <h1 class="display-3 text-white animated slideInDown">Selamat Datang di SMP Mitra Permata</h1>
                                <p class="fs-5 text-white mb-4 pb-2">SMP Mitra Permata merupakan sekolah menengah pertama yang berkomitmen untuk menghasilkan lulusan yang kompeten, berkarakter, dan siap melanjutkan pendidikan</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Info Selengkapnya</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Daftar Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="<?= base_url('assets/SMP/img/background2.png') ?>" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Bersama Membangun Masa Depan</h5>
                                <h1 class="display-3 text-white animated slideInDown">Penerimaan Siswa Baru</h1>
                                <p class="fs-5 text-white mb-4 pb-2">SMP Mitra Permata siap mendampingi siswa meraih masa depan yang lebih cerah. Daftarkan diri Anda dan jadilah bagian dari keluarga besar SMP Mitra Permata!</p>
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
                    <img class="img-fluid position-absolute w-100 h-100" src="<?= base_url('assets/SMP/img/rektor.jpg') ?>" alt="" style="object-fit: cover;">

                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <!-- <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6> -->
                    <h1 class="mb-4">Sambutan Kepala Sekolah</h1>
                    <p class="mb-4" style="text-align: justify;">Dengan penuh rasa syukur, kami menyambut Anda di SMP Mitra Permata, sebuah 
                        lembaga pendidikan yang berkomitmen membentuk generasi muda yang unggul, berkarakter, 
                        dan siap bersaing di dunia kerja. Melalui pembelajaran berbasis kompetensi, fasilitas 
                        yang mendukung, serta kemitraan dengan berbagai industri, kami berupaya menghadirkan 
                        lingkungan belajar yang inovatif dan inspiratif bagi seluruh peserta didik.</p>
                    <p class="mb-4" style="text-align: justify;">Kami percaya bahwa setiap siswa memiliki potensi besar yang harus 
                        dikembangkan melalui pendidikan yang tepat. Oleh karena itu, SMP Mitra Permata 
                        terus bertransformasi untuk menghadirkan pengalaman belajar yang relevan, berdaya 
                        guna, dan sejalan dengan kebutuhan perkembangan teknologi serta industri masa kini.</p>
                    <p class="mb-4" style="text-align: justify;">Semoga website ini dapat menjadi jembatan informasi bagi siswa, 
                        orang tua, mitra industri, dan masyarakat dalam mengenal lebih dekat SMP Mitra Permata.</p>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Kemitraan Start -->
     <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Kerja Sama</h6>
                <h1 class="mb-5">Kemitraan</h1>
        </div>
     </div>
    <!-- Kemitraan End -->

 <!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">

            <!-- Guru Profesional -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-user-graduate text-primary mb-4"></i>
                        <h5 class="mb-3">Guru Profesional</h5>
                        <p>Tenaga pendidik yang kompeten dan berdedikasi untuk membimbing siswa meraih prestasi terbaik.</p>
                    </div>
                </div>
            </div>

            <!-- Kegiatan Ekstrakurikuler -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-running text-primary mb-4"></i>
                        <h5 class="mb-3">Ekstrakurikuler Variatif</h5>
                        <p>Beragam kegiatan pengembangan minat dan bakat untuk meningkatkan kreativitas dan percaya diri siswa.</p>
                    </div>
                </div>
            </div>

            <!-- Fasilitas Lengkap -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-school text-primary mb-4"></i>
                        <h5 class="mb-3">Fasilitas Lengkap</h5>
                        <p>Ruang kelas, perpustakaan, laboratorium, dan sarana lainnya yang menunjang kegiatan belajar mengajar.</p>
                    </div>
                </div>
            </div>

            <!-- Lingkungan Belajar Nyaman -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-leaf text-primary mb-4"></i>
                        <h5 class="mb-3">Lingkungan Nyaman</h5>
                        <p>Suasana sekolah yang aman, bersih, dan kondusif untuk mendukung proses belajar yang optimal.</p>
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
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="<?= base_url('assets/SMP/img/team-1.jpg') ?>" alt="">

                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Muhamad Rodiyansah</h5>
                            <small>Guru Bahasa Batin</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="<?= base_url('assets/SMP/img/team-2.jpg') ?>" alt="">

                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="<?= base_url('assets/SMP/img/team-3.jpg') ?>" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Dwi Bayu Nugraha</h5>
                            <small>Guru Agama</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="<?= base_url('assets/SMP/img/team-4.jpg') ?>" alt="">

                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Guru End -->

    <!-- Prestasi  Start -->
    <div id="prestasi" class="container-xxl py-5 category">

        <div class="container">

            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Prestasi</h6>
                <h1 class="mb-5">Prestasi Terbaik Siswa</h1>
            </div>

            <div class="row g-4">

                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="prestasi-card shadow-lg rounded overflow-hidden">
                        <div class="prestasi-img">
                            <img src="<?= base_url('assets/images/achievements/Juara 1 Badminton.png') ?>" class="img-fluid" alt="Prestasi 1">
                        </div>
                        <div class="prestasi-body p-4">
                            <h5 class="fw-bold mb-2">Juara 1 Lomba Badminton</h5>
                            <p class="text-muted mb-0">
                                Siswa Mitra Permata Meraih Juara 1 Lomba Badminton dalam Kejuaraan Kota Tangerang Selatan 2025.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="prestasi-card shadow-lg rounded overflow-hidden">
                        <div class="prestasi-img">
                            <img src="<?= base_url('assets/images/achievements/Juara 1 Voly.png') ?>" class="img-fluid" alt="Prestasi 2">
                        </div>
                        <div class="prestasi-body p-4">
                            <h5 class="fw-bold mb-2">Juara 1 Volly Putra</h5>
                            <p class="text-muted mb-0">
                                Siswa SMP Mitra Permata  Meraih Juara 1 Lomba Volly OSIS CUP di SMAN 4 Kabupaten Tangerang.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="prestasi-card shadow-lg rounded overflow-hidden">
                        <div class="prestasi-img">
                            <img src="<?= base_url('assets/images/achievements/Juara 3 Voly.png') ?>" class="img-fluid" alt="Prestasi 3">
                        </div>
                        <div class="prestasi-body p-4">
                            <h5 class="fw-bold mb-2">Juara 3 Volly Putra</h5>
                            <p class="text-muted mb-0">
                               Siswa Mitra Permata Meraih Juara 3 Lomba Volly SLTA Se-Banten dalam Piala Rektor UIN SMH BANTEN 2025.
                            </p>
                        </div>
                    </div>
                </div>


                   <!-- Card 1 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="prestasi-card shadow-lg rounded overflow-hidden">
                        <div class="prestasi-img">
                            <img src="<?= base_url('assets/images/achievements/Juara 1 Badminton.png') ?>" class="img-fluid" alt="Prestasi 1">
                        </div>
                        <div class="prestasi-body p-4">
                            <h5 class="fw-bold mb-2">Juara 1 Lomba Badminton</h5>
                            <p class="text-muted mb-0">
                                Siswa Mitra Permata Meraih Juara 1 Lomba Badminton dalam Kejuaraan Kota Tangerang Selatan 2025.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="prestasi-card shadow-lg rounded overflow-hidden">
                        <div class="prestasi-img">
                            <img src="<?= base_url('assets/images/achievements/Juara 1 Voly.png') ?>" class="img-fluid" alt="Prestasi 2">
                        </div>
                        <div class="prestasi-body p-4">
                            <h5 class="fw-bold mb-2">Juara 1 Volly Putra</h5>
                            <p class="text-muted mb-0">
                                Siswa SMP Mitra Permata  Meraih Juara 1 Lomba Volly OSIS CUP di SMAN 4 Kabupaten Tangerang.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="prestasi-card shadow-lg rounded overflow-hidden">
                        <div class="prestasi-img">
                            <img src="<?= base_url('assets/images/achievements/Juara 3 Voly.png') ?>" class="img-fluid" alt="Prestasi 3">
                        </div>
                        <div class="prestasi-body p-4">
                            <h5 class="fw-bold mb-2">Juara 3 Volly Putra</h5>
                            <p class="text-muted mb-0">
                               Siswa Mitra Permata Meraih Juara 3 Lomba Volly SLTA Se-Banten dalam Piala Rektor UIN SMH BANTEN 2025.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Prestasi  End -->

    <!-- Ekstrakurikuler Start -->
    <div id="eskul" class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Ekstrakurikuler</h6>
                <h1 class="mb-2">Kegiatan Ekstrakurikuler</h1>
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
                <h1 class="mb-5">Kegiatan Sekolah</h1>
            </div>

            <div class="row g-4">
            
            <!-- Kegiatan Card 1 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="kegiatan-card">
                    <div class="kegiatan-image">
                        <img src="<?= base_url('assets/SMP/img/pramuka.jpg') ?>" alt="Upacara Hari Pahlawan">
                        <div class="kegiatan-date">15 Jan 2025</div>
                    </div>
                    <div class="kegiatan-content">
                        <h5 class="kegiatan-title">Upacara Hari Pahlawan</h5>
                        <p class="kegiatan-desc">Pelaksanaan upacara bendera dalam rangka memperingati Hari Pahlawan Nasional yang dihadiri seluruh siswa dan guru SMP Mitra Permata.</p>
                        <a href="#" class="kegiatan-link">
                            Lihat Detail <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Kegiatan Card 2 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="kegiatan-card">
                    <div class="kegiatan-image">
                        <img src="<?= base_url('assets/SMP/img/paskibra.jpg') ?>" alt="Kunjungan Industri">
                        <div class="kegiatan-date">20 Jan 2025</div>
                    </div>
                    <div class="kegiatan-content">
                        <h5 class="kegiatan-title">Kunjungan Industri</h5>
                        <p class="kegiatan-desc">Siswa jurusan TKJ berkunjung ke perusahaan teknologi untuk menambah wawasan dan pengalaman kerja di dunia industri teknologi informasi.</p>
                        <a href="#" class="kegiatan-link">
                            Lihat Detail <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Kegiatan Card 3 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="kegiatan-card">
                    <div class="kegiatan-image">
                        <img src="<?= base_url('assets/SMP/img/marawis.jpg') ?>" alt="Class Meeting 2025">
                        <div class="kegiatan-date">25 Jan 2025</div>
                    </div>
                    <div class="kegiatan-content">
                        <h5 class="kegiatan-title">Class Meeting 2025</h5>
                        <p class="kegiatan-desc">Kompetisi olahraga dan seni antar kelas dalam rangka mempererat tali persaudaraan dan mengembangkan sportivitas siswa SMP Mitra Permata.</p>
                        <a href="#" class="kegiatan-link">
                            Lihat Detail <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>
    <!-- Kegiatan End-->

    <!-- Berita Start-->
    <div id="berita" class="container-xxl py-5 category">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">News</h6>
            <h1 class="mb-5">Berita Sekolah</h1>
        </div>

        <div class="row g-4">
            
            <!-- Berita Card 1 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="berita-card">
                    <div class="berita-image">
                        <img src="<?= base_url('assets/images/berita/spnb.png') ?>" alt="PPDB">
                        <div class="berita-badge">
                            <i class="fa fa-calendar"></i> 10 Feb 2025
                        </div>
                    </div>
                    <div class="berita-content">
                        <h5 class="berita-title">Pendaftaran Siswa Baru 2025/2026 Resmi Dibuka</h5>
                        <p class="berita-desc">SMP Mitra Permata membuka pendaftaran siswa baru untuk tahun ajaran 2025/2026. Segera daftarkan putra-putri Anda dan raih masa depan cerah bersama kami!</p>
                        <a href="#" class="berita-link">
                            Baca Selengkapnya <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Berita Card 2 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="berita-card">
                    <div class="berita-image">
                        <img src="<?= base_url('assets/images/berita/hut ri.webp') ?>" alt="Kerja Sama">
                        <div class="berita-badge">
                            <i class="fa fa-calendar"></i> 08 Feb 2025
                        </div>
                    </div>
                    <div class="berita-content">
                        <h5 class="berita-title">Peringatan HUT RI dengan Berbagai Lomba Menarik</h5>
                        <p class="berita-desc">Kemeriahan HUT RI ke-80 terasa di lingkungan SMP Mitra Permata dengan berbagai kompetisi seru dan kegiatan yang melibatkan seluruh siswa.</p>
                        <a href="#" class="berita-link">
                            Baca Selengkapnya <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Berita Card 3 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="berita-card">
                    <div class="berita-image">
                        <img src="<?= base_url('assets/images/berita/Juara 1 Badminton.jpg') ?>" alt="Pelatihan">
                        <div class="berita-badge">
                            <i class="fa fa-calendar"></i> 05 Feb 2025
                        </div>
                    </div>
                    <div class="berita-content">
                        <h5 class="berita-title">Juara 1 Lomba Badminton Tingkat Nasional</h5>
                        <p class="berita-desc">Atlet badminton SMP Mitra Permata berhasil meraih juara pertama dalam turnamen bergengsi tingkat nasional. Prestasi luar biasa ini merupakan hasil dari latihan intensif dan dedikasi tinggi.</p>
                        <a href="#" class="berita-link">
                            Baca Selengkapnya <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Berita Card 4 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="berita-card">
                    <div class="berita-image">
                        <img src="<?= base_url('assets/images/berita/tips ujian.png') ?>" alt="Prestasi">
                        <div class="berita-badge">
                            <i class="fa fa-calendar"></i> 01 Feb 2025
                        </div>
                    </div>
                    <div class="berita-content">
                        <h5 class="berita-title">Tips Sukses Menghadapi Ujian Akhir Semester</h5>
                        <p class="berita-desc">Persiapan matang adalah kunci kesuksesan. Berikut tips dan strategi belajar efektif dari para guru untuk menghadapi ujian dengan percaya diri</p>
                        <a href="#" class="berita-link">
                            Baca Selengkapnya <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Berita Card 5 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="berita-card">
                    <div class="berita-image">
                        <img src="<?= base_url('assets/images/berita/pkk.png') ?>" alt="Seminar">
                        <div class="berita-badge">
                            <i class="fa fa-calendar"></i> 28 Jan 2025
                        </div>
                    </div>
                    <div class="berita-content">
                        <h5 class="berita-title">Sidang PKL Siswa/Siswi SMP Mitra Permata Tahun 2025</h5>
                        <p class="berita-desc">SMP Mitra Permata mengadakan Sidang PKL untuk membekali siswa dengan mindset dan skill.</p>
                        <a href="#" class="berita-link">
                            Baca Selengkapnya <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Berita Card 6 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="berita-card">
                    <div class="berita-image">
                        <img src="<?= base_url('assets/images/berita/kunjungan industri.jpg') ?>" alt="Fasilitas">
                        <div class="berita-badge">
                            <i class="fa fa-calendar"></i> 25 Jan 2025
                        </div>
                    </div>
                    <div class="berita-content">
                        <h5 class="berita-title">Kunjungan Industri ke Perusahaan Teknologi Terkemuka</h5>
                        <p class="berita-desc">Siswa jurusan TKJ mendapat kesempatan emas untuk berkunjung langsung ke perusahaan teknologi startup unicorn. Pengalaman berharga ini memberikan insight dunia kerja</p>
                        <a href="#" class="berita-link">
                            Baca Selengkapnya <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
    <!-- Berita End-->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">Kata Siswa Kami!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                   <img class="border rounded-circle p-2 mx-auto mb-3" src="<?= base_url('assets/SMP/img/testimonial-1.jpg') ?>" style="width: 80px; height: 80px;">

                    <h5 class="mb-0">Yunita</h5>
                    <p>Siswi</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">“Saya merasa bangga menjadi bagian dari SMP Mitra Permata karena setiap hari saya mendapatkan pengalaman belajar baru yang membantu saya berkembang baik secara akademik maupun keterampilan praktis.”</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                   <img class="border rounded-circle p-2 mx-auto mb-3" src="<?= base_url('assets/SMP/img/testimonial-2.jpg') ?>" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Agung Rizki Saputra</h5>
                    <p>Siswa</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">“Lingkungan belajar di SMP Mitra Permata sangat mendukung, para guru selalu memberikan bimbingan yang jelas sehingga saya lebih percaya diri dalam memahami materi dan menghadapi tantangan baru.”</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                  <img class="border rounded-circle p-2 mx-auto mb-3" src="<?= base_url('assets/SMP/img/testimonial-3.jpg') ?>" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Irvandy Zainur</h5>
                    <p>Siswa</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">“Program pembelajaran yang terstruktur di SMP Mitra Permata mendorong saya untuk lebih disiplin, sehingga saya mampu mengembangkan potensi dengan baik dan siap menghadapi dunia kerja.”</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                   <img class="border rounded-circle p-2 mx-auto mb-3" src="<?= base_url('assets/SMP/img/testimonial-4.jpg') ?>" style="width: 80px; height: 80px;">
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
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Kontak Kami</h6>
                <h1 class="mb-5">Hubungi kami untuk pertanyaan apa pun.</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h5>Kami Siap Membantu</h5>
                    <p class="mb-3" style= "text-align:justify;">Hubungi kami untuk mendapatkan informasi terbaru seputar program pendidikan, pendaftaran siswa baru, dan layanan akademik. Tim kami siap membantu Anda dengan respon yang cepat dan ramah.</p>
                    <div class="d-flex align-items-left mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Lokasi</h5>
                            <p class="mb-1">Perumahan Villa Permata, Blok. D8 - D9 No.1, Sindangsari, Kec. Ps. Kemis, Kabupaten Tangerang, Banten 15560</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">No Telepon</h5>
                            <p class="mb-1  ">(021) 123456</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Email</h5>
                            <p class="mb-0">info@mitrapermata.sch.id</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.9391231209147!2d106.52772367366288!3d-6.13888099384802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a000100000001%3A0x78b8d9a04432be9f!2sTK-SD-SMP-SMK-PKBM%20-%20LKP%20MITRA%20PERMATA!5e0!3m2!1sid!2sid!4v1759418850999!5m2!1sid!2sid"
                        frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Nama Anda</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Email Anda</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subjek</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                    <label for="message">Pesan</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Kirim Pesan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
 
<?= $this->endSection() ?>  