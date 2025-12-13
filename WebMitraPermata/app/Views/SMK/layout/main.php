<?php 
$uri = service('uri');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SMK | Mitra Permata</title>
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
    <!-- Popup Pendaftaran PPDB - SMK -->
    <div id="brosurPopupSMK">
        <div id="popupContainerSMK">

            <!-- Tombol Close -->
            <button onclick="document.getElementById('brosurPopupSMK').style.display='none'" id="btnCloseSMK">
                ✕
            </button>

            <!-- Header Popup -->
            <div class="popup-header-smk">
                <div class="header-logo-smk">
                    <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo SMK">
                </div>
                <h3 class="form-title-smk">Pendaftaran Peserta Didik Baru</h3>
                <p class="form-subtitle-smk">SMK - Tahun Ajaran 2025/2026</p>
            </div>

            <!-- Form Content -->
            <div id="formSectionSMK">

                <!-- NOTIF / ALERT -->
                <div id="alertContainerSMK"></div>

                <form id="formPendaftaranSMK">

                    <!-- ============================================ -->
                    <!-- SECTION 1: DATA PRIBADI SISWA -->
                    <!-- ============================================ -->
                    <div class="form-section-smk">
                        <h4 class="section-title-smk">
                            <i class="fa fa-user-circle"></i> Data Pribadi Siswa
                        </h4>

                        <!-- Nama Lengkap -->
                        <div class="form-group-smk">
                            <label class="form-label-smk">
                                <i class="fa fa-user icon-label-smk"></i>
                                Nama Lengkap <span class="required-smk">*</span>
                            </label>
                            <input type="text" name="nama" class="form-control-smk" 
                                placeholder="Contoh: Ahmad Rizki Maulana" required>
                        </div>

                        <!-- Tempat Lahir & Tanggal Lahir -->
                        <div class="row-smk">
                            <div class="col-md-6-smk form-group-smk">
                                <label class="form-label-smk">
                                    <i class="fa fa-map-marker-alt icon-label-smk"></i>
                                    Tempat Lahir <span class="required-smk">*</span>
                                </label>
                                <input type="text" name="tempat_lahir" class="form-control-smk" 
                                    placeholder="Contoh: Jakarta" required>
                            </div>
                            <div class="col-md-6-smk form-group-smk">
                                <label class="form-label-smk">
                                    <i class="fa fa-calendar icon-label-smk"></i>
                                    Tanggal Lahir <span class="required-smk">*</span>
                                </label>
                                <input type="date" name="tanggal_lahir" class="form-control-smk" required>
                            </div>
                        </div>

                        <!-- NIK Siswa -->
                        <div class="form-group-smk">
                            <label class="form-label-smk">
                                <i class="fa fa-id-card icon-label-smk"></i>
                                NIK Siswa (16 Digit) <span class="required-smk">*</span>
                            </label>
                            <input type="text" name="nik_siswa" class="form-control-smk" 
                                placeholder="Contoh: 3201234567890001" 
                                maxlength="16" required>
                            <small class="form-text-smk">Sesuai KTP/Kartu Keluarga</small>
                        </div>
                    </div>

                    <!-- ============================================ -->
                    <!-- SECTION 2: DATA DOKUMEN -->
                    <!-- ============================================ -->
                    <div class="form-section-smk">
                        <h4 class="section-title-smk">
                            <i class="fa fa-file-alt"></i> Data Dokumen
                        </h4>

                        <!-- No Kartu Keluarga & No Akte -->
                        <div class="row-smk">
                            <div class="col-md-6-smk form-group-smk">
                                <label class="form-label-smk">
                                    <i class="fa fa-users icon-label-smk"></i>
                                    No. Kartu Keluarga
                                </label>
                                <input type="text" name="no_kk" class="form-control-smk" 
                                    placeholder="Contoh: 3201234567890001" maxlength="16">
                                <small class="form-text-smk">Opsional - 16 digit</small>
                            </div>
                            <div class="col-md-6-smk form-group-smk">
                                <label class="form-label-smk">
                                    <i class="fa fa-certificate icon-label-smk"></i>
                                    No. Akte Kelahiran
                                </label>
                                <input type="text" name="no_akte" class="form-control-smk" 
                                    placeholder="Contoh: 1234/AB/2010">
                                <small class="form-text-smk">Opsional</small>
                            </div>
                        </div>

                        <!-- NPWP -->
                        <div class="form-group-smk">
                            <label class="form-label-smk">
                                <i class="fa fa-file-invoice icon-label-smk"></i>
                                NPWP Siswa
                            </label>
                            <input type="text" name="npwp" class="form-control-smk" 
                                placeholder="Contoh: 12.345.678.9-012.000" maxlength="20">
                            <small class="form-text-smk">Opsional - Jika sudah memiliki</small>
                        </div>
                    </div>

                    <!-- ============================================ -->
                    <!-- SECTION 3: KONTAK & ALAMAT SISWA -->
                    <!-- ============================================ -->
                    <div class="form-section-smk">
                        <h4 class="section-title-smk">
                            <i class="fa fa-map-marked-alt"></i> Kontak & Alamat Siswa
                        </h4>

                        <!-- Alamat Lengkap Siswa -->
                        <div class="form-group-smk">
                            <label class="form-label-smk">
                                <i class="fa fa-home icon-label-smk"></i>
                                Alamat Lengkap Siswa <span class="required-smk">*</span>
                            </label>
                            <textarea name="alamat" class="form-control-smk" rows="3" 
                                    placeholder="Contoh: Jl. Merdeka No. 123, RT 01/RW 05, Kelurahan ABC, Kecamatan XYZ" 
                                    required></textarea>
                        </div>

                        <!-- No Telepon Siswa -->
                        <div class="form-group-smk">
                            <label class="form-label-smk">
                                <i class="fa fa-phone icon-label-smk"></i>
                                No. Telepon/WhatsApp Siswa
                            </label>
                            <input type="tel" name="no_hp_siswa" class="form-control-smk" 
                                placeholder="Contoh: 081234567890">
                            <small class="form-text-smk">Opsional - Format: 08xxxxxxxxxx</small>
                        </div>
                    </div>

                    <!-- ============================================ -->
                    <!-- SECTION 4: ASAL SEKOLAH -->
                    <!-- ============================================ -->
                    <div class="form-section-smk">
                        <h4 class="section-title-smk">
                            <i class="fa fa-school"></i> Asal Sekolah
                        </h4>

                        <div class="form-group-smk">
                            <label class="form-label-smk">
                                <i class="fa fa-building icon-label-smk"></i>
                                Asal Sekolah (SMP/MTs)
                            </label>
                            <input type="text" name="asal_sekolah" class="form-control-smk" 
                                placeholder="Contoh: SMP Negeri 1 Jakarta">
                            <small class="form-text-smk">Opsional</small>
                        </div>
                    </div>

                    <!-- ============================================ -->
                    <!-- SECTION 5: DATA ORANG TUA/WALI -->
                    <!-- ============================================ -->
                    <div class="form-section-smk">
                        <h4 class="section-title-smk">
                            <i class="fa fa-user-friends"></i> Data Orang Tua/Wali
                        </h4>

                        <!-- Nama Orang Tua/Wali -->
                        <div class="form-group-smk">
                            <label class="form-label-smk">
                                <i class="fa fa-user-tie icon-label-smk"></i>
                                Nama Orang Tua/Wali
                            </label>
                            <input type="text" name="nama_wali" class="form-control-smk" 
                                placeholder="Contoh: Budi Santoso">
                            <small class="form-text-smk">Opsional</small>
                        </div>

                        <!-- NIK Wali -->
                        <div class="form-group-smk">
                            <label class="form-label-smk">
                                <i class="fa fa-id-card icon-label-smk"></i>
                                NIK Orang Tua/Wali
                            </label>
                            <input type="text" name="nik_wali" class="form-control-smk" 
                                placeholder="Contoh: 3201234567890001" maxlength="16">
                            <small class="form-text-smk">Opsional - 16 digit</small>
                        </div>

                        <!-- Alamat Orang Tua/Wali -->
                        <div class="form-group-smk">
                            <label class="form-label-smk">
                                <i class="fa fa-map-marker-alt icon-label-smk"></i>
                                Alamat Lengkap Orang Tua/Wali
                            </label>
                            <textarea name="alamat_wali" class="form-control-smk" rows="3" 
                                    placeholder="Contoh: Jl. Merdeka No. 123, RT 01/RW 05..."></textarea>
                            <small class="form-text-smk">Opsional - Jika berbeda dengan alamat siswa</small>
                        </div>
                    </div>

                    <!-- ============================================ -->
                    <!-- SECTION 6: PILIHAN JURUSAN -->
                    <!-- ============================================ -->
                    <div class="form-section-smk">
                        <h4 class="section-title-smk">
                            <i class="fa fa-graduation-cap"></i> Pilihan Jurusan
                        </h4>

                        <div class="form-group-smk">
                            <label class="form-label-smk">
                                <i class="fa fa-cogs icon-label-smk"></i>
                                Jurusan yang Dipilih <span class="required-smk">*</span>
                            </label>
                            <select name="jurusan" class="form-control-smk" required>
                                <option value="">-- Pilih Jurusan --</option>
                                <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan (TKJ)</option>
                                <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif (TKRO)</option>
                            </select>
                        </div>
                    </div>

                    <!-- Hidden Fields -->
                    <input type="hidden" name="jenjang" value="smk">

                    <!-- Tombol Submit -->
                    <button type="submit" id="btnSubmitSMK" class="btn-submit-smk">
                        <i class="fa fa-paper-plane me-2"></i>Kirim Pendaftaran
                    </button>

                    <p class="form-footer-smk">
                        <span class="required-smk">*</span> Wajib diisi
                    </p>
                </form>

            </div>
        </div>
    </div>

    <!-- Script Popup -->
    <script>
    (function() {
        'use strict';

        // ========================================
        // FUNGSI GET CSRF TOKEN
        // ========================================
        function getCsrfToken() {
            const meta = document.querySelector('meta[name="X-CSRF-TOKEN"]');
            if (meta) return meta.getAttribute('content');

            const cookies = document.cookie.split(';');
            for (let c of cookies) {
                const [k, v] = c.trim().split('=');
                if (k === 'csrf_cookie_name' || k === 'csrf_token') {
                    return decodeURIComponent(v);
                }
            }
            return null;
        }

        // ========================================
        // 1. TAMPILKAN POPUP SETELAH 2 DETIK
        // ========================================
        window.addEventListener("load", function () {
            <?php if (session()->has('popup_errors') || session()->has('popup_success')): ?>
                document.getElementById('brosurPopupSMK').style.display = 'flex';
            <?php else: ?>
                setTimeout(() => {
                    document.getElementById('brosurPopupSMK').style.display = 'flex';
                }, 2000);
            <?php endif ?>
        });

        // ========================================
        // 2. VALIDASI NIK (16 DIGIT)
        // ========================================
        const nikInputs = document.querySelectorAll('input[name="nik_siswa"], input[name="nik_wali"]');
        nikInputs.forEach(input => {
            input.addEventListener('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
                
                if (this.value.length > 0 && this.value.length !== 16) {
                    this.setCustomValidity('NIK harus 16 digit');
                } else {
                    this.setCustomValidity('');
                }
            });
        });

        // ========================================
        // 3. VALIDASI NO KK (16 DIGIT)
        // ========================================
        const kkInput = document.querySelector('input[name="no_kk"]');
        if (kkInput) {
            kkInput.addEventListener('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
            });
        }

        // ========================================
        // 4. VALIDASI NO TELEPON
        // ========================================
        const noHpInput = document.querySelector('input[name="no_hp_siswa"]');
        if (noHpInput) {
            noHpInput.addEventListener('input', function() {
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
        // 5. FORMAT NPWP (XX.XXX.XXX.X-XXX.XXX)
        // ========================================
        const npwpInput = document.querySelector('input[name="npwp"]');
        if (npwpInput) {
            npwpInput.addEventListener('input', function(e) {
                let value = this.value.replace(/[^0-9]/g, '');
                
                if (value.length > 15) value = value.substr(0, 15);
                
                if (value.length >= 2) {
                    value = value.substr(0, 2) + '.' + value.substr(2);
                }
                if (value.length >= 6) {
                    value = value.substr(0, 6) + '.' + value.substr(6);
                }
                if (value.length >= 10) {
                    value = value.substr(0, 10) + '.' + value.substr(10);
                }
                if (value.length >= 12) {
                    value = value.substr(0, 12) + '-' + value.substr(12);
                }
                if (value.length >= 16) {
                    value = value.substr(0, 16) + '.' + value.substr(16);
                }
                
                this.value = value;
            });
        }

        // ========================================
        // 6. SUBMIT FORM
        // ========================================
        const form = document.getElementById('formPendaftaranSMK');
        
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const btnSubmit = document.getElementById('btnSubmitSMK');
            const originalText = btnSubmit.innerHTML;
            const alertContainer = document.getElementById('alertContainerSMK');
            
            // Clear previous alerts
            alertContainer.innerHTML = '';
            
            // Disable button
            btnSubmit.disabled = true;
            btnSubmit.innerHTML = '<i class="fa fa-spinner fa-spin me-2"></i>Mengirim...';
            
            const formData = new FormData(this);
            const jenjang = formData.get('jenjang');
            
            // Debug
            console.log('=== FORM DATA SMK ===');
            for (let pair of formData.entries()) {
                console.log(pair[0] + ': ' + pair[1]);
            }
            
            // Get CSRF token
            const csrf = getCsrfToken();
            console.log('CSRF Token:', csrf);
            
            // Setup headers
            const headers = {
                'X-Requested-With': 'XMLHttpRequest'
            };
            
            if (csrf) {
                headers['X-CSRF-TOKEN'] = csrf;
            }
            
            // Send request
            fetch('<?= base_url("pendaftaran/submit") ?>/' + jenjang, {
                method: 'POST',
                headers: headers,
                body: formData,
                credentials: 'same-origin'
            })
            .then(response => {
                console.log('Response status:', response.status);
                
                if (!response.ok) {
                    throw new Error('HTTP Error! Status: ' + response.status);
                }
                
                return response.json();
            })
            .then(data => {
                console.log('Response data:', data);
                
                if (data.success) {
                    // ✅ SUKSES
                    alertContainer.innerHTML = `
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fa fa-check-circle me-2"></i><strong>Berhasil!</strong> ${data.message}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    `;
                    
                    form.reset();
                    
                    setTimeout(() => {
                        document.getElementById('brosurPopupSMK').style.display = 'none';
                        alertContainer.innerHTML = '';
                    }, 3000);
                    
                } else {
                    // ❌ GAGAL
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
                
                // Re-enable button
                btnSubmit.disabled = false;
                btnSubmit.innerHTML = originalText;
                
                // Scroll to alert
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
        // 7. TUTUP POPUP
        // ========================================
        document.getElementById('brosurPopupSMK').addEventListener('click', function(e) {
            if (e.target === this) {
                this.style.display = 'none';
            }
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                document.getElementById('brosurPopupSMK').style.display = 'none';
            }
        });

    })();
    </script>
    <!-- POP UP BROSUR SMK END -->

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img src="<?= base_url('assets/SMK/img/logo.png') ?>" alt="Logo" style="height: 45px; width: auto;" class="me-3">
            <h2 class="m-0 text-primary">SMK Mitra Permata</h2>
        </a>

        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="#about" class="nav-item nav-link">Tentang Kami</a>
            <a href="#jurusan" class="nav-item nav-link">Kejuruan</a>
            
            <div class="nav-item dropdown">
                <a href="#kegiatan" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kegiatan</a>
                <div class="dropdown-menu">
                    <a href="#prestasi" class="dropdown-item">Prestasi</a>
                    <a href="#eskul" class="dropdown-item">Extrakulikuler</a>
                    <a href="#berita" class="dropdown-item">Berita</a>
                </div>
            </div>

            <a href="#kontak" class="nav-item nav-link">Kontak</a>
            
        <!-- PINDAHKAN BUTTON KE DALAM NAVBAR-NAV -->
                <a href="javascript:void(0)"  onclick="document.getElementById('brosurPopupSMK')
                .style.display='flex'" class="btn-daftar ms-lg-3"> PENDAFTARAN <i class="fas fa-arrow-right"></i>
                </a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Content Section -->
    <?= $this->renderSection('content') ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


   <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5">
        <div class="container py-5">
        <div class="row g-5">

            <!-- QUICK LINK -->
            <div class="col-lg-4 col-md-6">
                <h4 class="text-white mb-3">Akses Cepat</h4>
                <a class="btn btn-link" href="#beranda">Beranda</a>
                <a class="btn btn-link" href="#about">Tentang</a>
                <a class="btn btn-link" href="#eskul">Ekstrakulikuler</a>
                <a class="btn btn-link" href="#jurusan">Jurusan</a>
                <a class="btn btn-link" href="#prestasi">Prestasi</a>
                <a class="btn btn-link" href="#kontak">Kontak</a>
                <!-- <a class="btn btn-link" href="#">Pendaftaran</a> -->
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
            &copy; 2025 Sekolah Mitra Permata. All Rights Reserved
            <p>By ShōtenLab</p>
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



   <!-- ======================================== -->
   <!-- SECTION EKSTRAKURIKULER - SLIDER STYLE   -->
   <!-- ======================================== -->
   <script>
let eskulCurrentIndex = 0;
const eskulCardsPerView = getEskulCardsPerView();

function getEskulCardsPerView() {
    if (window.innerWidth <= 576) return 1;
    if (window.innerWidth <= 768) return 2;
    if (window.innerWidth <= 1200) return 3;
    return 4;
}

function eskulSlide(direction) {
    const track = document.getElementById('eskulTrack');
    const cards = track.children;
    const totalCards = cards.length;
    const maxIndex = totalCards - eskulCardsPerView;

    eskulCurrentIndex += direction;

    if (eskulCurrentIndex < 0) {
        eskulCurrentIndex = 0;
    } else if (eskulCurrentIndex > maxIndex) {
        eskulCurrentIndex = maxIndex;
    }

    const cardWidth = cards[0].offsetWidth;
    const gap = 30;
    const translateX = -(eskulCurrentIndex * (cardWidth + gap));

    track.style.transform = `translateX(${translateX}px)`;
    updateEskulDots();
}

function updateEskulDots() {
    const dotsContainer = document.getElementById('eskulDots');
    const totalCards = document.getElementById('eskulTrack').children.length;
    const totalDots = totalCards - eskulCardsPerView + 1;

    dotsContainer.innerHTML = '';

    for (let i = 0; i < totalDots; i++) {
        const dot = document.createElement('div');
        dot.className = 'eskul-dot' + (i === eskulCurrentIndex ? ' active' : '');
        dot.onclick = () => goToEskulSlide(i);
        dotsContainer.appendChild(dot);
    }
}

function goToEskulSlide(index) {
    const track = document.getElementById('eskulTrack');
    const cards = track.children;
    eskulCurrentIndex = index;

    const cardWidth = cards[0].offsetWidth;
    const gap = 30;
    const translateX = -(eskulCurrentIndex * (cardWidth + gap));

    track.style.transform = `translateX(${translateX}px)`;
    updateEskulDots();
}

// Initialize dots on page load
window.addEventListener('load', updateEskulDots);

// Update on window resize
let resizeTimer;
window.addEventListener('resize', function() {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function() {
        eskulCurrentIndex = 0;
        document.getElementById('eskulTrack').style.transform = 'translateX(0)';
        updateEskulDots();
    }, 250);
});
</script>



    <!--======================================== -->
   <!--Smooth scroll polyfill untuk semua browser -->
   <!-- ======================================== -->
   <script>
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scroll polyfill untuk semua browser
    document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
        anchor.addEventListener('click', function(e) {
            var href = this.getAttribute('href');
            if (!href || href === '#') return;
            
            var target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                
                var navbar = document.querySelector('.navbar');
                var offset = navbar ? navbar.offsetHeight + 20 : 100;
                var targetPosition = target.offsetTop - offset;
                var startPosition = window.pageYOffset;
                var distance = targetPosition - startPosition;
                var duration = 800; // 800ms = 0.8 detik
                var start = null;
                
                function animation(currentTime) {
                    if (start === null) start = currentTime;
                    var timeElapsed = currentTime - start;
                    var run = ease(timeElapsed, startPosition, distance, duration);
                    window.scrollTo(0, run);
                    if (timeElapsed < duration) requestAnimationFrame(animation);
                }
                
                // Easing function untuk smooth effect
                function ease(t, b, c, d) {
                    t /= d / 2;
                    if (t < 1) return c / 2 * t * t + b;
                    t--;
                    return -c / 2 * (t * (t - 2) - 1) + b;
                }
                
                requestAnimationFrame(animation);
            }
        });
    });
});
</script>

<script>
// Ambil semua menu navbar yang pakai anchor #
const navLinks = document.querySelectorAll('.navbar a[href^="#"]');

// Ambil semua section yang punya ID
const sections = document.querySelectorAll("section[id], div[id]");

function setActiveNav() {
    let scrollPos = window.scrollY + 120; // tambahan offset biar pas

    sections.forEach(sec => {
        if (sec.offsetTop <= scrollPos && (sec.offsetTop + sec.offsetHeight) > scrollPos) {
            let id = sec.getAttribute("id");

            navLinks.forEach(link => {
                link.classList.remove("active");

                if (link.getAttribute("href") === "#" + id) {
                    link.classList.add("active");
                }
            });
        }
    });
}

window.addEventListener("scroll", setActiveNav);
</script>

<script>
window.onload = function() {
    <?php if (session()->has('popup_errors') || session()->has('popup_success')): ?>
        document.getElementById('brosurPopup').style.display = 'flex';
        
        // Auto close alert sukses setelah 5 detik
        <?php if (session()->has('popup_success')): ?>
            setTimeout(function() {
                const successAlert = document.querySelector('.alert-success');
                if (successAlert) {
                    successAlert.classList.remove('show');
                    setTimeout(() => successAlert.remove(), 150);
                }
            }, 5000); // 5 detik
        <?php endif ?>
    <?php else: ?>
        setTimeout(function() {
            document.getElementById('brosurPopup').style.display = 'flex';
        }, 2000);
    <?php endif ?>
};
</script>




</body>

</html>