<?= $this->extend('layout/navbar.php') ?>
<?= $this->section('content') ?>

<link rel="stylesheet" href="<?= base_url('assets/css/berita.css') ?>">

<!-- Hero Section Simple -->
<div class="berita-hero">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <div class="hero-badge">
                <i class="fas fa-newspaper"></i>
                <span>Berita & Informasi</span>
            </div>
            <h1>Berita Yayasan</h1>
            <p>Informasi terkini seputar prestasi, kegiatan, dan pengumuman penting dari SMK Mitra Permata</p>
        </div>
    </div>
</div>

<!-- Berita Terbaru Section -->
<div class="trending-section">
    <div class="container">
        <div class="section-label">
            <span class="label-icon">📰</span>
            <span class="label-text">Berita Terbaru</span>
        </div>
        
        <div class="trending-grid">
            <div class="trending-main">
                <div class="trending-card large">
                    <div class="trending-image">
                        <img src="<?= base_url('assets/images/berita/Juara 1 Badminton.jpg') ?>" alt="Trending News">
                        <div class="trending-badge">
                            <i class="fas fa-newspaper"></i> Berita Baru
                        </div>
                        <div class="trending-overlay">
                            <div class="trending-meta">
                                <span class="category prestasi">Prestasi</span>
                                <span class="date">25 Sept 2025</span>
                            </div>
                            <h3>Siswi Mitra Permata Raih Medali Emas di Lomba Badminton Tingkat Nasional 2025</h3>
                            <p>Atlet badminton SMK Mitra Permata berhasil meraih juara pertama dalam turnamen bergengsi tingkat nasional. Prestasi luar biasa ini merupakan hasil dari latihan intensif dan dedikasi tinggi...</p>
                            <a href="#" class="read-link">
                                Baca Selengkapnya
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="trending-side">
                <div class="trending-card small">
                    <div class="trending-image">
                        <img src="<?= base_url('assets/images/berita/pkk.png') ?>" alt="Trending News">
                        <div class="trending-overlay">
                            <span class="category kegiatan">Kegiatan</span>
                            <h4> Sidang PKL Siswa/Siswi SMK Mitra Permata Tahun 2025</h4>
                            <span class="date">23 Sept 2025</span>
                        </div>
                    </div>
                </div>
                
                <div class="trending-card small">
                    <div class="trending-image">
                        <img src="<?= base_url('assets/images/berita/spnb.png') ?>" alt="Trending News">
                        <div class="trending-overlay">
                            <span class="category pengumuman">Pengumuman</span>
                            <h4>Sistem Penerimaan Murid Baru Tahun Ajaran 2025/2026</h4>
                            <span class="date">22 Sept 2025</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Category Tabs Premium -->
<div class="category-section">
    <div class="container">
        <div class="category-tabs-premium">
            <button class="tab-premium active" data-category="all">
                <i class="fas fa-th-large"></i>
                <span>Semua</span>
            </button>
            <button class="tab-premium" data-category="prestasi">
                <i class="fas fa-trophy"></i>
                <span>Prestasi</span>
            </button>
            <button class="tab-premium" data-category="kegiatan">
                <i class="fas fa-calendar-alt"></i>
                <span>Kegiatan</span>
            </button>
            <button class="tab-premium" data-category="artikel">
                <i class="fas fa-book-open"></i>
                <span>Artikel</span>
            </button>
            <button class="tab-premium" data-category="pengumuman">
                <i class="fas fa-bullhorn"></i>
                <span>Pengumuman</span>
            </button>
        </div>
    </div>
</div>

<!-- News Masonry Grid -->
<div class="news-masonry-section">
    <div class="container">
        <div class="masonry-grid">
            
            <!-- Card 1 - Prestasi -->
            <div class="masonry-card" data-category="prestasi">
                <div class="card-image">
                    <img src="<?= base_url('assets/images/berita/Juara 1 Badminton.jpg') ?>" alt="Berita">
                    <div class="card-badge prestasi">
                        <i class="fas fa-trophy"></i> Prestasi
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-meta">
                        <span class="author">
                            <img src="https://ui-avatars.com/api/?name=Admin&background=059669&color=fff" alt="Avatar">
                            Admin SMK
                        </span>
                        <span class="date">
                            <i class="far fa-clock"></i> 2 jam lalu
                        </span>
                    </div>
                    <h3>Juara 1 Lomba Badminton Tingkat Nasional</h3>
                    <p>Atlet badminton SMK Mitra Permata berhasil meraih juara pertama dalam turnamen bergengsi tingkat nasional. Prestasi luar biasa ini merupakan hasil dari latihan intensif dan dedikasi tinggi...</p>
                    <div class="card-footer">
                        <div class="engagement">
                            <span><i class="far fa-eye"></i> 1.2k</span>
                            <span><i class="far fa-heart"></i> 245</span>
                        </div>
                        <a href="#" class="read-more-btn">
                            Selengkapnya <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 2 - Kegiatan -->
            <div class="masonry-card" data-category="kegiatan">
                <div class="card-image">
                    <img src="<?= base_url('assets/images/berita/hut ri.webp') ?>" alt="Berita">
                    <div class="card-badge kegiatan">
                        <i class="fas fa-calendar-alt"></i> Kegiatan
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-meta">
                        <span class="author">
                            <img src="https://ui-avatars.com/api/?name=Admin&background=059669&color=fff" alt="Avatar">
                            Admin SMK
                        </span>
                        <span class="date">
                            <i class="far fa-clock"></i> 5 jam lalu
                        </span>
                    </div>
                    <h3>Peringatan HUT RI dengan Berbagai Lomba Menarik</h3>
                    <p>Kemeriahan HUT RI ke-80 terasa di lingkungan SMK Mitra Permata dengan berbagai kompetisi seru dan kegiatan yang melibatkan seluruh siswa...</p>
                    <div class="card-footer">
                        <div class="engagement">
                            <span><i class="far fa-eye"></i> 856</span>
                            <span><i class="far fa-heart"></i> 189</span>
                        </div>
                        <a href="#" class="read-more-btn">
                            Selengkapnya <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 3 - Pengumuman -->
            <div class="masonry-card" data-category="pengumuman">
                <div class="card-image">
                    <img src="<?= base_url('assets/images/berita/spnb.png') ?>" alt="Berita">
                    <div class="card-badge pengumuman">
                        <i class="fas fa-bullhorn"></i> Pengumuman
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-meta">
                        <span class="author">
                            <img src="https://ui-avatars.com/api/?name=Admin&background=059669&color=fff" alt="Avatar">
                            Admin SMK
                        </span>
                        <span class="date">
                            <i class="far fa-clock"></i> 1 hari lalu
                        </span>
                    </div>
                    <h3>Sistem Penerimaan Murid Baru Tahun Ajaran 2025/2026</h3>
                    <p>Dibuka penererimaan murid baru untuk tahun ajaran 2025/2026. Segera daftarkan putra-putri Anda di  Mitra Permata dan raih masa depan gemilang.</p>
                    <div class="card-footer">
                        <div class="engagement">
                            <span><i class="far fa-eye"></i> 532</span>
                            <span><i class="far fa-heart"></i> 127</span>
                        </div>
                        <a href="#" class="read-more-btn">
                            Selengkapnya <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 4 - Artikel -->
            <div class="masonry-card" data-category="artikel">
                <div class="card-image">
                    <img src="<?= base_url('assets/images/berita/tips ujian.png') ?>" alt="Berita">
                    <div class="card-badge artikel">
                        <i class="fas fa-book-open"></i> Artikel
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-meta">
                        <span class="author">
                            <img src="https://ui-avatars.com/api/?name=Guru&background=059669&color=fff" alt="Avatar">
                            Pak Budi
                        </span>
                        <span class="date">
                            <i class="far fa-clock"></i> 2 hari lalu
                        </span>
                    </div>
                    <h3>Tips Sukses Menghadapi Ujian Akhir Semester</h3>
                    <p>Persiapan matang adalah kunci kesuksesan. Berikut tips dan strategi belajar efektif dari para guru untuk menghadapi ujian dengan percaya diri...</p>
                    <div class="card-footer">
                        <div class="engagement">
                            <span><i class="far fa-eye"></i> 643</span>
                            <span><i class="far fa-heart"></i> 98</span>
                        </div>
                        <a href="#" class="read-more-btn">
                            Selengkapnya <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 5 - Kegiatan -->
            <div class="masonry-card" data-category="kegiatan">
                <div class="card-image">
                    <img src="<?= base_url('assets/images/berita/kunjungan industri.jpg') ?>" alt="Berita">
                    <div class="card-badge kegiatan">
                        <i class="fas fa-calendar-alt"></i> Kegiatan
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-meta">
                        <span class="author">
                            <img src="https://ui-avatars.com/api/?name=Admin&background=059669&color=fff" alt="Avatar">
                            Admin SMK
                        </span>
                        <span class="date">
                            <i class="far fa-clock"></i> 3 hari lalu
                        </span>
                    </div>
                    <h3>Kunjungan Industri ke Perusahaan Teknologi Terkemuka</h3>
                    <p>Siswa jurusan TKJ mendapat kesempatan emas untuk berkunjung langsung ke perusahaan teknologi startup unicorn. Pengalaman berharga ini memberikan insight dunia kerja...</p>
                    <div class="card-footer">
                        <div class="engagement">
                            <span><i class="far fa-eye"></i> 1.5k</span>
                            <span><i class="far fa-heart"></i> 312</span>
                        </div>
                        <a href="#" class="read-more-btn">
                            Selengkapnya <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 6 - Prestasi -->
            <div class="masonry-card" data-category="prestasi">
                <div class="card-image">
                    <img src="<?= base_url('assets/images/berita/Juara 1 Volly.png') ?>" alt="Berita">
                    <div class="card-badge prestasi">
                        <i class="fas fa-trophy"></i> Prestasi
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-meta">
                        <span class="author">
                            <img src="https://ui-avatars.com/api/?name=Admin&background=059669&color=fff" alt="Avatar">
                            Admin SMK
                        </span>
                        <span class="date">
                            <i class="far fa-clock"></i> 4 hari lalu
                        </span>
                    </div>
                    <h3>Tim Voli Putra Juara 1 Turnamen OSIS Cup 2025</h3>
                    <p>Tim voli putra SMK Mitra Permata berhasil menjuarai turnamen OSIS Cup di SMAN 4 Kabupaten Tangerang dengan penampilan yang sangat memukau...</p>
                    <div class="card-footer">
                        <div class="engagement">
                            <span><i class="far fa-eye"></i> 213</span>
                            <span><i class="far fa-heart"></i> 87</span>
                        </div>
                        <a href="#" class="read-more-btn">
                            Selengkapnya <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Pagination -->
        <div class="pagination-section">
            <div class="pagination">
                <button class="page-btn prev" disabled><i class="fas fa-chevron-left"></i></button>
                <button class="page-btn active">1</button>
                <button class="page-btn">2</button>
                <button class="page-btn">3</button>
                <button class="page-btn">4</button>
                <button class="page-btn next"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </div>
</div>

<!-- Newsletter Section -->
<div class="newsletter-section">
    <div class="container">
        <div class="newsletter-card">
            <div class="newsletter-icon">
                <i class="fas fa-envelope-open-text"></i>
            </div>
            <div class="newsletter-content">
                <h3>Dapatkan Update Terbaru</h3>
                <p>Berlangganan newsletter untuk mendapatkan berita dan informasi terkini langsung ke email Anda</p>
            </div>
            <div class="newsletter-form">
                <input type="email" placeholder="Masukkan email Anda...">
                <button class="subscribe-btn">
                    <i class="fas fa-paper-plane"></i>
                    Berlangganan
                </button>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Category Filter
    const tabs = document.querySelectorAll('.tab-premium');
    const cards = document.querySelectorAll('.masonry-card');
    
    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const category = this.dataset.category;
            
            tabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');
            
            cards.forEach(card => {
                if (category === 'all' || card.dataset.category === category) {
                    card.style.display = 'block';
                    card.style.animation = 'fadeInUp 0.6s ease forwards';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
    
    // Pagination functionality
    const pageBtns = document.querySelectorAll('.page-btn:not(.prev):not(.next)');
    const prevBtn = document.querySelector('.page-btn.prev');
    const nextBtn = document.querySelector('.page-btn.next');
    
    pageBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            pageBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            // Update prev/next buttons state
            const activeIndex = Array.from(pageBtns).indexOf(this);
            prevBtn.disabled = activeIndex === 0;
            nextBtn.disabled = activeIndex === pageBtns.length - 1;
            
            // Scroll to top
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    });
});
</script>

<?= $this->endSection() ?>