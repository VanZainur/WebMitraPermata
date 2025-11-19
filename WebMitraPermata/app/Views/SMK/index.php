<?= $this->extend('smk/layout/main') ?>

<?= $this->section('title') ?>SMK Mitra Permata<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                  <img class="img-fluid" src="<?= base_url('assets/SMK/img/background1.jpg') ?>" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Pendidikan Berkualitas</h5>
                                <h1 class="display-3 text-white animated slideInDown">Selamat Datang di SMK Mitra Permata</h1>
                                <p class="fs-5 text-white mb-4 pb-2">SMK Mitra Permata merupakan sekolah menengah kejuruan yang berkomitmen untuk menghasilkan lulusan yang kompeten, berkarakter, dan siap kerja</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Info Selengkapnya</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Daftar Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="<?= base_url('assets/SMK/img/background2.jpg') ?>" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Bersama Membangun Masa Depan</h5>
                                <h1 class="display-3 text-white animated slideInDown">Penerimaan Siswa Baru</h1>
                                <p class="fs-5 text-white mb-4 pb-2">SMK Mitra Permata siap mendampingi siswa meraih masa depan yang lebih cerah. Daftarkan diri Anda dan jadilah bagian dari keluarga besar SMK Mitra Permata!</p>
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
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="<?= base_url('assets/SMK/img/rektor.jpg') ?>" alt="" style="object-fit: cover;">

                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <!-- <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6> -->
                    <h1 class="mb-4">Sambutan Kepala Sekolah</h1>
                    <p class="mb-4" style="text-align: justify;">Dengan penuh rasa syukur, kami menyambut Anda di SMK Mitra Permata, sebuah 
                        lembaga pendidikan yang berkomitmen membentuk generasi muda yang unggul, berkarakter, 
                        dan siap bersaing di dunia kerja. Melalui pembelajaran berbasis kompetensi, fasilitas 
                        yang mendukung, serta kemitraan dengan berbagai industri, kami berupaya menghadirkan 
                        lingkungan belajar yang inovatif dan inspiratif bagi seluruh peserta didik.</p>
                    <p class="mb-4" style="text-align: justify;">Kami percaya bahwa setiap siswa memiliki potensi besar yang harus 
                        dikembangkan melalui pendidikan yang tepat. Oleh karena itu, SMK Mitra Permata 
                        terus bertransformasi untuk menghadirkan pengalaman belajar yang relevan, berdaya 
                        guna, dan sejalan dengan kebutuhan perkembangan teknologi serta industri masa kini.</p>
                    <p class="mb-4" style="text-align: justify;">Semoga website ini dapat menjadi jembatan informasi bagi siswa, 
                        orang tua, mitra industri, dan masyarakat dalam mengenal lebih dekat SMK Mitra Permata.</p>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">

                <!-- Guru Kompeten -->
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-chalkboard-teacher text-primary mb-4"></i>
                            <h5 class="mb-3">Guru Kompeten</h5>
                            <p>Guru yang memiliki keahlian sesuai bidangnya dan mampu membimbing siswa dengan baik.</p>
                        </div>
                    </div>
                </div>

                <!-- Prakerin -->
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-industry text-primary mb-4"></i>
                            <h5 class="mb-3">Praktik Kerja Lapangan</h5>
                            <p>Program magang di dunia industri yang memberikan pengalaman kerja nyata.</p>
                        </div>
                    </div>
                </div>

                <!-- Bengkel / Workshop -->
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-tools text-primary mb-4"></i>
                            <h5 class="mb-3">Bengkel Praktik</h5>
                            <p>Fasilitas praktik lengkap untuk melatih keterampilan siswa sesuai jurusan yang mereka pelajari.</p>
                        </div>
                    </div>
                </div>

                <!-- Bursa Kerja Khusus -->
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-briefcase text-primary mb-4"></i>
                            <h5 class="mb-3">Bursa Kerja Khusus</h5>
                            <p>Layanan sekolah untuk membantu siswa dan alumni mendapatkan informasi lowongan kerja.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Ekstrakulikuler Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Eskul</h6>
                <h1 class="mb-5">Ekstrakulikuler</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="<?= base_url('assets/SMK/img/pramuka.jpg') ?>" alt="">

                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Pramuka</h5>
                                    <small class="text-primary">Sabtu</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="<?= base_url('assets/SMK/img/paskibra.jpg') ?>" alt="">

                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Paskibra</h5>
                                    <small class="text-primary">Jumat</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="<?= base_url('assets/SMK/img/marawis.jpg') ?>" alt="">

                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Marawis</h5>
                                    <small class="text-primary">Selasa</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid" src="<?= base_url('assets/SMK/img/seni musik.jpeg') ?>" alt="">

                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                            <h5 class="m-0">Seni Musik</h5>
                            <small class="text-primary">Minggu</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Ekstrakulikuler Start -->


    <!-- Jurusan Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Jurusan</h6>
                <h1 class="mb-5">Program Keahlian</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="<?= base_url('assets/SMK/img/course-1.jpg') ?>" alt="">

                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">$149.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-4">Teknik Kendaraan Ringan</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                           <img class="img-fluid" src="<?= base_url('assets/SMK/img/course-2.jpg') ?>" alt="">

                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">$149.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-4">Teknik Komputer dan Jaringan</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="<?= base_url('assets/SMK/img/course-3.jpg') ?>" alt="">

                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">$149.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-4">Perhotelan</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jurusan End -->

    <!-- Prestasi  Start -->
    <div class="container-xxl py-5">
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
                            <h5 class="fw-bold mb-2">Juara 1 Lomba LKS TKJ</h5>
                            <p class="text-muted mb-0">
                                Keberhasilan siswa kami meraih juara tingkat Kabupaten pada ajang LKS.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="prestasi-card shadow-lg rounded overflow-hidden">
                        <div class="prestasi-img">
                            <img src="<?= base_url('assets/images/achievements/Juara 1 Badminton.png') ?>" class="img-fluid" alt="Prestasi 2">
                        </div>
                        <div class="prestasi-body p-4">
                            <h5 class="fw-bold mb-2">Juara 2 Desain Grafis</h5>
                            <p class="text-muted mb-0">
                                Siswa berhasil menunjukkan kreativitas dalam lomba desain tingkat Provinsi.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="prestasi-card shadow-lg rounded overflow-hidden">
                        <div class="prestasi-img">
                            <img src="<?= base_url('assets/images/achievements/Juara 1 Badminton.png') ?>" class="img-fluid" alt="Prestasi 3">
                        </div>
                        <div class="prestasi-body p-4">
                            <h5 class="fw-bold mb-2">Juara 3 Robotik Nasional</h5>
                            <p class="text-muted mb-0">
                                Tim robotik SMK Mitra Permata berhasil meraih posisi 3 besar nasional.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Prestasi  End -->

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
                            <img class="img-fluid" src="<?= base_url('assets/SMK/img/team-1.jpg') ?>" alt="">

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
                            <img class="img-fluid" src="<?= base_url('assets/SMK/img/team-2.jpg') ?>" alt="">

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
                            <img class="img-fluid" src="<?= base_url('assets/SMK/img/team-3.jpg') ?>" alt="">

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
                            <img class="img-fluid" src="<?= base_url('assets/SMK/img/team-4.jpg') ?>" alt="">

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


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">Kata Siswa Kami!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                   <img class="border rounded-circle p-2 mx-auto mb-3" src="<?= base_url('assets/SMK/img/testimonial-1.jpg') ?>" style="width: 80px; height: 80px;">

                    <h5 class="mb-0">Yunita</h5>
                    <p>Siswi</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">“Saya merasa bangga menjadi bagian dari SMK Mitra Permata karena setiap hari saya mendapatkan pengalaman belajar baru yang membantu saya berkembang baik secara akademik maupun keterampilan praktis.”</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                   <img class="border rounded-circle p-2 mx-auto mb-3" src="<?= base_url('assets/SMK/img/testimonial-2.jpg') ?>" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Agung Rizki Saputra</h5>
                    <p>Siswa</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">“Lingkungan belajar di SMK Mitra Permata sangat mendukung, para guru selalu memberikan bimbingan yang jelas sehingga saya lebih percaya diri dalam memahami materi dan menghadapi tantangan baru.”</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                  <img class="border rounded-circle p-2 mx-auto mb-3" src="<?= base_url('assets/SMK/img/testimonial-3.jpg') ?>" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Irvandy Zainur</h5>
                    <p>Siswa</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">“Program pembelajaran yang terstruktur di SMK Mitra Permata mendorong saya untuk lebih disiplin, sehingga saya mampu mengembangkan potensi dengan baik dan siap menghadapi dunia kerja.”</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                   <img class="border rounded-circle p-2 mx-auto mb-3" src="<?= base_url('assets/SMK/img/testimonial-4.jpg') ?>" style="width: 80px; height: 80px;">
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
    <div class="container-xxl py-5">
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