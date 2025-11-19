<?php 
$uri = service('uri');
?>


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
    <a href="<?= base_url('smk'); ?>"  class="navbar-brand d-flex align-items-center px-4 px-lg-5">

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
        <a href="<?= base_url('smk'); ?>" 
            class="nav-item nav-link <?= ($uri->getSegment(1) == 'smk' && $uri->getTotalSegments() == 1 ? 'active' : '') ?>">
            Beranda
            </a>

        <a href="<?= base_url('smk/about'); ?>" 
            class="nav-item nav-link <?= ($uri->getSegment(2) == 'about' ? 'active' : '') ?>">
            Tentang
            </a>

        <a href="<?= base_url('smk/courses'); ?>" 
            class="nav-item nav-link <?= ($uri->getSegment(2) == 'courses' ? 'active' : '') ?>">
            Jurusan
            </a>


        <?php  $pagesActive = in_array($uri->getSegment(2), ['kegiatan', 'prestasi', 'berita']); ?>


        <div class="nav-item dropdown">
            <a href="<?= base_url('smk/kegiatan'); ?>" class="nav-link dropdown-toggle <?= $pagesActive ? 'active' : '' ?>" data-bs-toggle="dropdown"> Kegiatan </a>
            <div class="dropdown-menu fade-down m-0">
            
            <a href="<?= base_url('smk/prestasi'); ?>" class="dropdown-item <?= ($uri->getSegment(2) == 'prestasi' ? 'active' : '') ?>"> Prestasi </a>
            
            <a href="<?= base_url('smk/berita'); ?>" class="dropdown-item <?= ($uri->getSegment(2) == 'berita' ? 'active' : '') ?>"> Berita </a>

        </div>
    </div>

       <a href="<?= base_url('smk/contact'); ?>" class="nav-item nav-link <?= ($uri->getSegment(2) == 'contact' ? 'active' : '') ?>"> Kontak </a>


    <a href="#" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">
        Daftar Sekarang<i class="fa fa-arrow-right ms-3"></i>
    </a>
</div>

    </nav>
    <!-- Navbar End -->

      <!-- Content Section -->
    <?= $this->renderSection('content') ?>


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
    <script>
document.querySelectorAll('.nav-item.dropdown > a.dropdown-toggle').forEach(function(el) {
    let clickedOnce = false;
    
    el.addEventListener('click', function(e) {
        // kalau klik pertama → buka dropdown saja
        if (!clickedOnce) {
            e.preventDefault(); // cegah buka halaman
            clickedOnce = true;
            
            // reset kalau user klik di luar dropdown
            document.addEventListener('click', function reset(e2) {
                if (!el.parentElement.contains(e2.target)) {
                    clickedOnce = false;
                    document.removeEventListener('click', reset);
                }
            });

        } else {
            // klik kedua → pergi ke halaman normal
            window.location = el.getAttribute('href');
        }
    });
});
</script>

</body>

</html>