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
            <img src="https://images.unsplash.com/photo-1562774053-701939374585?w=400&h=250&fit=crop&crop=center" alt="Ruang Kelas">
            <div class="content">
                <h3>Ruang Kelas</h3>
                <p>Ruang kelas yang nyaman, luas, dan dilengkapi sarana pembelajaran modern untuk mendukung proses belajar mengajar yang efektif.</p>
            </div>
        </div>

        <!-- Laboratorium -->
        <div class="fasilitas-item">
            <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?w=400&h=250&fit=crop&crop=center" alt="Laboratorium">
            <div class="content">
                <h3>Laboratorium</h3>
                <p>Laboratorium sains dan komputer yang dilengkapi peralatan modern untuk mendukung praktik dan riset siswa.</p>
            </div>
        </div>

        <!-- Perpustakaan -->
        <div class="fasilitas-item">
            <img src="https://images.unsplash.com/photo-1481627834876-b7833e8f5570?w=400&h=250&fit=crop&crop=center" alt="Perpustakaan">
            <div class="content">
                <h3>Perpustakaan</h3>
                <p>Koleksi buku yang lengkap serta ruang baca yang nyaman dan tenang untuk mendukung kegiatan literasi siswa.</p>
            </div>
        </div>

        <!-- Lapangan Olahraga -->
        <div class="fasilitas-item">
            <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?w=400&h=250&fit=crop&crop=center" alt="Lapangan Olahraga">
            <div class="content">
                <h3>Lapangan Olahraga</h3>
                <p>Lapangan olahraga multifungsi untuk kegiatan fisik dan ekstrakurikuler yang mendukung kesehatan siswa.</p>
            </div>
        </div>

        <!-- Kantin -->
        <div class="fasilitas-item">
            <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?w=400&h=250&fit=crop&crop=center" alt="Kantin">
            <div class="content">
                <h3>Kantin</h3>
                <p>Kantin bersih dan sehat dengan berbagai pilihan makanan bergizi dan tempat duduk yang nyaman.</p>
            </div>
        </div>

        <!-- Masjid -->
        <div class="fasilitas-item">
            <img src="https://images.unsplash.com/photo-1591115765373-5207764f72e7?w=400&h=250&fit=crop&crop=center" alt="Masjid">
            <div class="content">
                <h3>Masjid</h3>
                <p>Masjid yang luas dan nyaman untuk kegiatan ibadah dan pembinaan spiritual siswa.</p>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>