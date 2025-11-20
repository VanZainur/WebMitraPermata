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

    <!-- Popup Brosur Start -->
    <div id="brosurPopup"
        style="position: fixed; inset: 0; background: rgba(0,0,0,0.6); 
            display: none; align-items: center; justify-content: center; 
            z-index: 99999; padding: 20px;">

        <div style="background: #fff; width: 100%; max-width: 750px; 
                border-radius: 15px; overflow: hidden; box-shadow: 0 0 30px rgba(0,0,0,0.3); 
                display: flex; flex-wrap: wrap; position: relative;
                max-height: 90vh;"> <!-- BATAS TINGGI 90% LAYAR -->

        <!-- Tombol Close -->
        <button onclick="document.getElementById('brosurPopup').style.display='none'"
            style="position: absolute; top: 15px; right: 15px; background: white; border: none; 
                   color: #000000 ; width: 35px; height: 35px; font-size: 18px;
                   border-radius: 50%; cursor: pointer;">
            ✕
        </button>

        <!-- KIRI (GAMBAR PROMO) -->
        <div style="flex: 1; min-width: 40%; max-height: 90vh;">
            <img src="<?= base_url('assets/images/berita/brosur.jpg') ?>"
                 style="width: 100%; height: 100%; object-fit: cover;">
        </div>

        <!-- KANAN (FORM) -->
        <div style="flex: 1; min-width: 60%; padding: 25px; overflow-y: auto; max-height: 90vh;">

            <h3 class="text-center mb-4" style="font-weight: 800;">
                Pendaftaran Peserta Didik Baru 2025
            </h3>

            <form>
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" placeholder="Masukkan nama lengkap">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tempat, Tanggal Lahir</label>
                    <input type="text" class="form-control" placeholder="Tangerang, 01-01-2010">
                </div>
                <div class="mb-3">
                    <label class="form-label">Asal Sekolah</label>
                    <input type="text" class="form-control" placeholder="SMP Negeri 5">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nomor WhatsApp</label>
                    <input type="text" class="form-control" placeholder="0812xxxxxxx">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jurusan</label>
                    <select class="form-control">
                        <option>Teknik Komputer Jaringan</option>
                        <option>Teknik Kendaraan Ringan</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary w-100 py-2">Kirim Pendaftaran</button>
            </form>

            </div>
        </div>
    </div>

    <script>
    window.onload = function() {
        document.getElementById('brosurPopup').style.display = 'flex';
    };
    </script>
    <!-- POP UP BROSUR END -->


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

       <a href="#about" class="nav-item nav-link">Tentang Kami</a>
        <a href="#jurusan" class="nav-item nav-link">Kejuruan</a>
            <div class="nav-item dropdown">
            <a href="#kegiatan" 
            class="nav-link dropdown-toggle" 
            data-bs-toggle="dropdown">
            Kegiatan
            </a>

            <div class="dropdown-menu">
                <a href="#prestasi" class="dropdown-item">Prestasi</a>
                <a href="#eskul" class="dropdown-item">Extrakulikuler</a>
                <a href="#berita" class="dropdown-item">Berita</a>
            </div>
            </div>

            <a href="#kontak" class="nav-item nav-link">Kontak</a>

            <!-- <a href="#" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">
                Daftar Sekarang<i class="fa fa-arrow-right ms-3"></i>
            </a> -->
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Content Section -->
    <?= $this->renderSection('content') ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


   <!-- Footer Start -->
    <div class="bg-dark text-light footer pt-5">
    <!-- ☝️ HAPUS mt-5 nya! -->

    <div class="container py-5">
        <div class="row g-5">

            <!-- QUICK LINK -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Akses Cepat</h4>
                <a class="btn btn-link text-light" href="<?= base_url('smk'); ?>">Beranda</a>
                <a class="btn btn-link text-light" href="#about">Tentang</a>
                <a class="btn btn-link text-light" href="#eskul">Ekstrakulikuler</a>
                <a class="btn btn-link text-light" href="#jurusan">Jurusan</a>
                <a class="btn btn-link text-light" href="#prestasi">Prestasi</a>
                <a class="btn btn-link text-light" href="#kontak">Kontak</a>
            </div>

            <!-- CONTACT -->
            <div class="col-lg-5 col-md-6">
                <h4 class="text-white mb-4">Kontak</h4>
                <p class="mb-2">
                    <i class="fa fa-map-marker-alt me-3"></i>
                    Perumahan Villa Permata, Blk. D8 - D9 No.1, Sindangsari, Kec. Ps. Kemis, Kabupaten Tangerang, Banten 15560
                </p>
                <p class="mb-2">
                    <i class="fa fa-phone-alt me-3"></i>(021) 123456
                </p>
                <p class="mb-2">
                    <i class="fa fa-envelope me-3"></i>info@mitrapermata.sch.id
                </p>

                <!-- SOCIAL MEDIA -->
                <div class="d-flex pt-3">
                    <a class="btn btn-outline-light btn-social me-2" href="#" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="btn btn-outline-light btn-social me-2" href="#" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="btn btn-outline-light btn-social me-2" href="#" target="_blank">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a class="btn btn-outline-light btn-social" href="#" target="_blank">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>

            <!-- ABOUT SCHOOL -->
            <div class="col-lg-4 col-md-6">
                <h4 class="text-white mb-4">Sekolah Mitra Permata</h4>
                <p class="mb-0" style="text-align: justify;">
                    Lembaga pendidikan dari TK, SD, SMP, hingga SMK yang berkomitmen memberikan layanan pendidikan berkualitas 
                    dengan lingkungan belajar yang aman, nyaman, dan berkarakter.
                </p>
            </div>

        </div>
    </div>

    <!-- COPYRIGHT -->
    <div class="copyright">
    <!-- ☝️ HAPUS div container di sini -->
        <div class="row">
            <div class="col-md-12 text-center py-4">
            <!-- ☝️ Tambah py-4 buat padding atas-bawah -->
                <p class="mb-0">&copy; 2025 <a class="border-bottom text-white" href="<?= base_url('smk'); ?>">Sekolah Mitra Permata</a>. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->



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