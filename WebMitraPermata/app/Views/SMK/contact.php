<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kontak Kami</title>
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
        <a href="<?= base_url('smk'); ?>" class="nav-item nav-link">Home</a>
        <a href="<?= base_url('smk/about'); ?>" class="nav-item nav-link">About</a>
        <a href="<?= base_url('smk/courses'); ?>" class="nav-item nav-link">Courses</a>

        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
            <div class="dropdown-menu fade-down m-0">
                <a href="<?= base_url('smk/team'); ?>" class="dropdown-item">Our Team</a>
                <a href="<?= base_url('smk/testimonial'); ?>" class="dropdown-item">Testimonial</a>
                <a href="<?= base_url('smk/404'); ?>" class="dropdown-item">404 Page</a>
            </div>
        </div>

        <a href="<?= base_url('smk/contact'); ?>" class="nav-item nav-link active">Contact</a>
    </div>

    <a href="#" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">
        Join Now <i class="fa fa-arrow-right ms-3"></i>
    </a>
</div>

    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Kontak</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Kontak</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


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