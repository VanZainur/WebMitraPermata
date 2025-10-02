<?= $this->extend('layout/navbar.php') ?>
<?= $this->section('content') ?>

<link rel="stylesheet" href="<?= base_url('assets/css/kontak.css') ?>">
<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<div class="contact-wrapper">
    <div class="contact-form">
        <h2>Kontak Form</h2>
        <form action="#" method="post">
            <label for="nama">Nama</label>
            <div class="name-group">
                <input type="text" name="name" placeholder="Nama Anda" required>
            </div>

            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Email Anda" required>

            <label for="pesan">Pesan</label>
            <textarea name="pesan" rows="4" placeholder="Tulis Pesan Anda ..."></textarea>

            <button type="submit">Kirim Pesan</button>
        </form>
    </div>

    <div class="contact-info">
        <h2>Alamat</h2>
        <div class="contact-info-name">
            <img src="<?= base_url('assets/images/logo.png') ?>" class="contact-logo">
            <p>Yayasan Mitra Permata</p>
        </div>
        <p>Perumahan Villa Permata, Blk. D8 - D9 No.1, Sindangsari, 
        Kec. Ps. Kemis, Kabupaten Tangerang, Banten 15560</p>
        <p>Telp : (021) 123456</p>
        <p>Email : info@mitrapermata.sch.id</p>
        <p>Senin - Jumat <br> 08:00 AM – 16:00 PM</p>
        <div class="social-media">
            <h3>Ikuti Kami</h3>
            <a href="https://facebook.com/mitrapermata" target="_blank">
                <i class="fab fa-facebook-f"></i>Facebook
            </a>
            <a href="https://instagram.com/mitrapermata" target="_blank">
                <i class="fab fa-instagram"></i>Instagram
            </a>
            <a href="https://youtube.com/@mitrapermata" target="_blank">
                <i class="fab fa-youtube"></i>YouTube
            </a>
        </div>
    </div>
</div>

<!-- Google Maps -->
<div class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.9391231209147!2d106.52772367366288!3d-6.13888099384802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a000100000001%3A0x78b8d9a04432be9f!2sTK-SD-SMP-SMK-PKBM%20-%20LKP%20MITRA%20PERMATA!5e0!3m2!1sid!2sid!4v1759418850999!5m2!1sid!2sid" 
        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>

<?= $this->endSection() ?>
