<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SMK Mitra Permata</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url('assets/SMK/img/logo.png') ?>" rel="icon">
    

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
     <link href="<?= base_url('assets/SMK/lib/animate/animate.min.css') ?>" rel="stylesheet">
     <link href="<?= base_url('assets/SMK/lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/SMK/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('assets/SMK/css/style.css') ?>" rel="stylesheet">

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
   <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="<?= base_url() ?>" class="navbar-brand d-flex align-items-center px-4 px-lg-5">

        <!-- LOGO -->
        <img src="<?= base_url('assets/SMK/img/logo.png') ?>" 
             alt="Logo" 
             style="height: 45px; width: auto;" 
             class="me-3">

        <h2 class="m-0 text-primary">SMK Mitra Permata</h2>
    </a>

    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

     <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="<?= base_url('smk'); ?>" class="nav-item nav-link active">Beranda</a>
        <a href="<?= base_url('smk/about'); ?>" class="nav-item nav-link">Tentang</a>
        <a href="<?= base_url('smk/courses'); ?>" class="nav-item nav-link">Jurusan</a>

        <!-- <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
            <div class="dropdown-menu fade-down m-0">
                <a href="<?= base_url('smk/team'); ?>" class="dropdown-item">Our Team</a>
                <a href="<?= base_url('smk/testimonial'); ?>" class="dropdown-item">Testimonial</a>
                <a href="<?= base_url('smk/404'); ?>" class="dropdown-item">404 Page</a>
            </div>
        </div> -->

        <a href="<?= base_url('smk/contact'); ?>" class="nav-item nav-link">Kontak</a>
    </div>

    <a href="#" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">
        Daftar Sekarang<i class="fa fa-arrow-right ms-3"></i>
    </a>
</div>

    </nav>
    <!-- Navbar End -->


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
                    <!-- <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
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
    <!-- Categories Start -->


    <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
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
    <!-- Courses End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Instructors</h6>
                <h1 class="mb-5">TENAGA PENDIDIK DAN KEPENDIDIKAN</h1>
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
    <!-- Team End -->


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
        

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5">
        <div class="container py-5">
        <div class="row g-5">

            <!-- QUICK LINK -->
            <div class="col-lg-4 col-md-6">
                <h4 class="text-white mb-3">Akses Cepat</h4>
                <a class="btn btn-link" href="<?= base_url('smk'); ?>">Beranda</a>
                <a class="btn btn-link" href="<?= base_url('smk/about'); ?>">Tentang</a>
                <a class="btn btn-link" href="<?= base_url('smk/contact'); ?>">Kontak</a>
                <a class="btn btn-link" href="#">Pendaftaran</a>
            </div>

            <!-- CONTACT -->
            <div class="col-lg-4 col-md-6">
                <h4 class="text-white mb-3">Kontak</h4>
                <p class="mb-2">
                    <i class="fa fa-map-marker-alt me-3"></i>
                    Perumahan Villa Permata, Blk. D8 - D9 No.1, Sindangsari, Kec. Ps. Kemis, Kabupaten Tangerang, Banten 15560
                </p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(021) 123456</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@mitrapermata.sch.id</p>

                <!-- SOCIAL MEDIA -->
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social me-2" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social me-2" href="#"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>

            <!-- ABOUT SCHOOL -->
            <div class="col-lg-4 col-md-6">
                <h4 class="text-white mb-3">Sekolah Mitra Permata</h4>
                <p style="text-align: justify;">
                    Lembaga pendidikan dari TK, SD, SMP, hingga SMK yang berkomitmen memberikan layanan pendidikan berkualitas 
                    dengan lingkungan belajar yang aman, nyaman, dan berkarakter.
                </p>
            </div>

        </div>
    </div>

        <!-- COPYRIGHT -->
        <div class="container">
        <div class="copyright text-center">
            &copy; 2025 Sekolah Mitra Permata. All Rights Reserved.
        </div>
    </div>
</div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
   <script src="<?= base_url('assets/SMK/lib/wow/wow.min.js') ?>"></script>
    <script src="<?= base_url('assets/SMK/lib/easing/easing.min.js') ?>"></script>
    <script src="<?= base_url('assets/SMK/lib/waypoints/waypoints.min.js') ?>"></script>
    <script src="<?= base_url('assets/SMK/lib/owlcarousel/owl.carousel.min.js') ?>"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url('assets/SMK/js/main.js') ?>"></script>
</body>

</html>