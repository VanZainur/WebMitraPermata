<?= $this->extend('layout/navbar.php') ?>
<?= $this->section('content') ?>

<link rel="stylesheet" href="<?= base_url('assets/css/fasilitas.css') ?>">

<div class="fasilitas-container">
    <!-- Header Section -->
    <div class="header-section">
        <h1>Fasilitas </h1>
        <p class="subtitle">Penunjang kegiatan belajar, mengajar, dan pengembangan siswa</p>
    </div>

    <!-- Fasilitas Grid -->
    <div class="fasilitas-grid">
        <!-- Ruang Kelas -->
        <div class="fasilitas-item">
            <img src="<?= base_url('assets/images/fasilitas/ruang kelas.jpg') ?>" alt="Ruang Kelas">
            <div class="content">
                <h3>Ruang Kelas</h3>
                <p>Ruang kelas yang nyaman, luas, dan dilengkapi sarana pembelajaran modern untuk menciptakan suasana belajar yang efektif dan interaktif.</p>
            </div>
        </div>

        <!-- Laboratorium -->
        <div class="fasilitas-item">
            <img src="<?= base_url('assets/images/fasilitas/Lab Komputer.png') ?>" alt="Lab Komputer">
            <div class="content">
                <h3>Lab Komputer</h3>
                <p>Lab komputer yang dilengkapi peralatan modern untuk mendukung praktik dan riset siswa.</p>
            </div>
        </div>

        <!-- Perpustakaan -->
        <div class="fasilitas-item">
            <img src="<?= base_url('assets/images/fasilitas/Perpustakaan.png') ?>" alt="Perpustakaan">
            <div class="content">
                <h3>Perpustakaan</h3>
                <p>Koleksi buku yang lengkap serta ruang baca yang nyaman dan tenang untuk mendukung kegiatan literasi siswa.</p>
            </div>
        </div>

        <!-- Lapangan Olahraga -->
        <div class="fasilitas-item">
            <img src="<?= base_url('assets/images/fasilitas/taman.jpg') ?>" alt="Taman">
            <div class="content">
                <h3>Taman</h3>
                <p>Area hijau yang asri dan tertata rapi sebagai ruang terbuka untuk bersantai, berdiskusi, maupun mencari inspirasi belajar.</p>
            </div>
        </div>

        <!-- Kantin -->
        <div class="fasilitas-item">
            <img src="<?= base_url('assets/images/fasilitas/kantin.jpg') ?>" alt="Kantin">
            <div class="content">
                <h3>Kantin</h3>
                <p>Kantin bersih dan sehat dengan berbagai pilihan makanan bergizi dan tempat duduk yang nyaman.</p>
            </div>
        </div>

        <!-- Masjid -->
        <div class="fasilitas-item">
            <img src="<?= base_url('assets/images/fasilitas/Musholla.png') ?>" alt="Musholla">
            <div class="content">
                <h3>Musholla</h3>
                <p>Musholla yang bersih dan nyaman dengan fasilitas ibadah lengkap untuk mendukung kegiatan keagamaan civitas akademika..</p>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>