<?= $this->extend('layout/navbar.php') ?>
<?= $this->section('content') ?>

  <link rel="stylesheet" href="<?= base_url('assets/css/kemitraan.css') ?>">

<!-- Hero Section -->
<div class="kemitraan-hero">
    <div class="hero-content">
        <div class="hero-badge">
            <i class="fas fa-handshake"></i>
            <span>Kemitraan Strategis</span>
        </div>
        <h1>Membangun Masa Depan Bersama</h1>
        <p>Yayasan Mitra Permata menjalin kerja sama strategis dengan berbagai pihak untuk menciptakan dampak positif dalam pendidikan, sosial, dan kemanusiaan di Indonesia.</p>
        <div class="hero-stats">
            <div class="stat-item">
                <span class="stat-number">50+</span>
                <span class="stat-label">Mitra Aktif</span>
            </div>
            <div class="stat-divider"></div>
            <div class="stat-item">
                <span class="stat-number">15</span>
                <span class="stat-label">Tahun Pengalaman</span>
            </div>
            <div class="stat-divider"></div>
            <div class="stat-item">
                <span class="stat-number">1000+</span>
                <span class="stat-label">Proyek Sukses</span>
            </div>
        </div>
    </div>
    <div class="hero-decoration">
        <div class="floating-element element-1"></div>
        <div class="floating-element element-2"></div>
        <div class="floating-element element-3"></div>
    </div>
</div>

<!-- Partnership Categories -->
<div class="partnership-categories">
    <div class="container">
        <div class="section-header">
            <h2>Kategori Kemitraan</h2>
            <p>Kami berkolaborasi dalam berbagai bidang untuk menciptakan dampak yang berkelanjutan</p>
        </div>
        <div class="categories-grid">
            <div class="category-card">
                <div class="category-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3>Pendidikan</h3>
                <p>Beasiswa, pelatihan guru, dan pengembangan kurikulum</p>
            </div>
            <div class="category-card">
                <div class="category-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <h3>Sosial</h3>
                <p>Program bantuan sosial dan pemberdayaan masyarakat</p>
            </div>
            <div class="category-card">
                <div class="category-icon">
                    <i class="fas fa-hands-helping"></i>
                </div>
                <h3>Kemanusiaan</h3>
                <p>Bantuan darurat dan program kemanusiaan</p>
            </div>
            <div class="category-card">
                <div class="category-icon">
                    <i class="fas fa-seedling"></i>
                </div>
                <h3>Lingkungan</h3>
                <p>Konservasi lingkungan dan pembangunan berkelanjutan</p>
            </div>
        </div>
    </div>
</div>

<!-- Partners Grid -->
<div class="partners-section">
    <div class="container">
        <div class="section-header">
            <h2>Mitra Strategis Kami</h2>
            <p>Bersama mitra terpercaya, kami menciptakan perubahan positif yang berkelanjutan</p>
        </div>
        
        <div class="kemitraan-grid">
            <div class="kemitraan-item">
                <div class="partner-image">
                    <img src="assets/images/partners/Pt Auto2000.jpg" alt="PT Auto2000">
                    <div class="partner-overlay">
                        <i class="fas fa-external-link-alt"></i>
                    </div>
                </div>
                <div class="partner-content">
                    <div class="partner-badge">Korporasi</div>
                    <h3>PT Auto2000</h3>
                    <p>Kerja sama dalam pengembangan infrastruktur pendidikan, pelatihan teknologi otomotif, 
                        dan program CSR yang berfokus pada peningkatan kompetensi serta kesejahteraan masyarakat. 
                        PT Auto2000 berkomitmen mendukung dunia pendidikan dan menciptakan dampak sosial yang 
                        berkelanjutan melalui inovasi dan tanggung jawab sosial perusahaan.</p>
                    <div class="partner-tags">
                        <span class="tag">CSR</span>
                        <span class="tag">Infrastruktur</span>
                        <span class="tag">Teknologi</span>
                    </div>
                </div>
            </div>

            <div class="kemitraan-item">
                <div class="partner-image">
                    <img src="assets/images/partners/Global Institute.png" alt="Institut Teknologi dan Bisnis Bina Sarana Global">
                    <div class="partner-overlay">
                        <i class="fas fa-external-link-alt"></i>
                    </div>
                </div>
                <div class="partner-content">
                    <div class="partner-badge">Pendidikan</div>
                    <h3>Institut Teknologi dan Bisnis Bina Sarana Global</h3>
                    <p>Kerja sama strategis dalam bidang pendidikan untuk meningkatkan kualitas sumber daya 
                        manusia melalui program beasiswa unggulan, penelitian terapan, dan pengembangan kurikulum 
                        berbasis industri. Institut Teknologi dan Bisnis Bina Sarana Global berperan aktif 
                        menciptakan ekosistem pembelajaran yang inovatif, berkelanjutan, dan relevan dengan 
                        kebutuhan dunia kerja.</p>
                    <div class="partner-tags">
                        <span class="tag">Beasiswa</span>
                        <span class="tag">Penelitian</span>
                        <span class="tag">Pelatihan</span>
                    </div>
                </div>
            </div>

            <div class="kemitraan-item">
                <div class="partner-image">
                    <img src="assets/images/partners/Pt Sumber Alfaria Trijaya.png" alt="Lembaga Sosial">
                    <div class="partner-overlay">
                        <i class="fas fa-external-link-alt"></i>
                    </div>
                </div>
                <div class="partner-content">
                    <div class="partner-badge">KORPORASI</div>
                    <h3>PT. Sumber Alfaria Trijaya</h3>
                    <p>Kolaborasi strategis dalam bidang kemanusiaan, bantuan sosial, dan pemberdayaan ekonomi 
                        masyarakat melalui berbagai program tanggung jawab sosial perusahaan (CSR) yang berkelanjutan. 
                        PT. Sumber Alfaria Trijaya berkomitmen untuk memberikan dampak positif bagi komunitas lokal, 
                        meningkatkan kesejahteraan masyarakat, serta mendukung pertumbuhan ekonomi yang berkelanjutan.</p>
                    <div class="partner-tags">
                        <span class="tag">Kemanusiaan</span>
                        <span class="tag">Pemberdayaan</span>
                        <span class="tag">Sosial</span>
                    </div>
                </div>
            </div>

            <div class="kemitraan-item">
                <div class="partner-image">
                    <img src="assets/images/partners/Pt Dynaplast.jpg" alt="Pemerintah">
                    <div class="partner-overlay">
                        <i class="fas fa-external-link-alt"></i>
                    </div>
                </div>
                <div class="partner-content">
                    <div class="partner-badge">KORPORASI</div>
                    <h3>PT. Dynaplast</h3>
                    <p>Kerja sama dalam bidang pengembangan industri manufaktur dan pendidikan vokasi, dengan 
                        fokus pada peningkatan kompetensi mahasiswa melalui program magang, pelatihan teknis, 
                        serta memberi pengetahuan teknologi kemasan plastik. PT. Dynaplast berperan aktif dalam 
                        mendukung terciptanya sumber daya manusia yang terampil dan siap bersaing di dunia industri.</p>
                    <div class="partner-tags">
                        <span class="tag">Kebijakan</span>
                        <span class="tag">Pelatihan</span>
                        <span class="tag">SDM</span>
                    </div>
                </div>
            </div>

            <div class="kemitraan-item">
                <div class="partner-image">
                    <img src="assets/images/partners/Universitas Yatsi Madani.png" alt="Perusahaan Teknologi">
                    <div class="partner-overlay">
                        <i class="fas fa-external-link-alt"></i>
                    </div>
                </div>
                <div class="partner-content">
                    <div class="partner-badge">Pendidikan</div>
                    <h3>Universitas Yatsi Madani</h3>
                    <p>Kerja sama dalam bidang pendidikan dan penelitian yang berfokus pada pengembangan 
                        kompetensi mahasiswa serta penerapan teknologi dalam pembelajaran. Universitas Yatsi 
                        Madani berperan aktif dalam menciptakan inovasi akademik dan kolaborasi lintas institusi 
                        untuk meningkatkan kualitas pendidikan yang berdaya saing dan berintegritas.</p>
                    <div class="partner-tags">
                        <span class="tag">Beasiswa</span>
                        <span class="tag">Penelitian</span>
                        <span class="tag">Pelatihan</span>
                    </div>
                </div>
            </div>

            <div class="kemitraan-item">
                <div class="partner-image">
                    <img src="assets/images/partners/Pt. Indostation.png" alt="Organisasi Internasional">
                    <div class="partner-overlay">
                        <i class="fas fa-external-link-alt"></i>
                    </div>
                </div>
                <div class="partner-content">
                    <div class="partner-badge">KORPORASI</div>
                    <h3>PT. Sentra Trada Indostation</h3>
                    <p>Kerja sama dalam bidang pengembangan digitalisasi layanan ritel, pelatihan kewirausahaan, 
                        dan penerapan teknologi informasi untuk meningkatkan efisiensi bisnis serta daya saing 
                        industri lokal. PT. Sentra Trada Indostation berperan aktif dalam mendukung inovasi dan 
                        kolaborasi antara dunia pendidikan dan dunia usaha.</p>
                    <div class="partner-tags">
                        <span class="tag">Global</span>
                        <span class="tag">Exchange</span>
                        <span class="tag">Capacity</span>
                    </div>
                </div>
            </div>

            <div class="kemitraan-item">
                <div class="partner-image">
                    <img src="assets/images/partners/UMT.png" alt="Perusahaan Teknologi">
                    <div class="partner-overlay">
                        <i class="fas fa-external-link-alt"></i>
                    </div>
                </div>
                <div class="partner-content">
                    <div class="partner-badge">Pendidikan</div>
                    <h3>Universitas Muhammadiyah Tangerang</h3>
                    <p>Kerja sama dalam bidang pendidikan, penelitian, dan pengabdian masyarakat untuk 
                        meningkatkan kualitas akademik dan penerapan ilmu pengetahuan. Universitas Muhammadiyah 
                        Tangerang berperan aktif dalam mendukung pengembangan sumber daya manusia yang berintegritas, 
                        inovatif, dan berkontribusi bagi kemajuan masyarakat serta dunia industri.</p>
                    <div class="partner-tags">
                        <span class="tag">Beasiswa</span>
                        <span class="tag">Penelitian</span>
                        <span class="tag">Pelatihan</span>
                    </div>
                </div>
            </div>

            <div class="kemitraan-item">
                <div class="partner-image">
                    <img src="assets/images/partners/Universitas Raharja.png" alt="Perusahaan Teknologi">
                    <div class="partner-overlay">
                        <i class="fas fa-external-link-alt"></i>
                    </div>
                </div>
                <div class="partner-content">
                    <div class="partner-badge">Pendidikan</div>
                    <h3>Universitas Raharja</h3>
                    <p>Kerja sama dalam bidang pengembangan teknologi pendidikan, penelitian inovatif, dan 
                        penguatan kompetensi digital mahasiswa. Universitas Raharja berperan aktif dalam 
                        menciptakan lingkungan akademik yang adaptif terhadap transformasi digital serta 
                        mendorong kolaborasi antara dunia kampus dan industri untuk menghasilkan lulusan 
                        yang siap bersaing di era modern.</p>
                    <div class="partner-tags">
                        <span class="tag">Beasiswa</span>
                        <span class="tag">Penelitian</span>
                        <span class="tag">Pelatihan</span>
                    </div>
                </div>
            </div>

            <div class="kemitraan-item">
                <div class="partner-image">
                    <img src="assets/images/partners/Universitas Unsaka.png" alt="Perusahaan Teknologi">
                    <div class="partner-overlay">
                        <i class="fas fa-external-link-alt"></i>
                    </div>
                </div>
                <div class="partner-content">
                    <div class="partner-badge">Pendidikan</div>
                    <h3>Universitas Salakanagara</h3>
                    <p>Kemitraan dalam bidang pendidikan dan penelitian yang berfokus pada transformasi digital 
                        pembelajaran serta pengembangan sumber daya manusia. Universitas Salakanagara 
                        berkomitmen menciptakan lingkungan akademik yang inovatif dan kolaboratif untuk 
                        mendukung kemajuan pendidikan yang relevan dengan perkembangan teknologi.</p>
                    <div class="partner-tags">
                        <span class="tag">Beasiswa</span>
                        <span class="tag">Penelitian</span>
                        <span class="tag">Pelatihan</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Call to Action -->
<div class="cta-section">
    <div class="container">
        <div class="cta-content">
            <div class="cta-text">
                <h2>Bergabung Sebagai Mitra</h2>
                <p>Mari bersama-sama menciptakan dampak positif yang berkelanjutan untuk masa depan Indonesia yang lebih baik.</p>
            </div>
            <div class="cta-buttons">
                <a href="/kontak" class="btn-primary">
                    <i class="fas fa-handshake"></i>
                    Kontak Kami
                </a>
                <a href="/profil" class="btn-secondary">
                    <i class="fas fa-info-circle"></i>
                    Tentang Kami
                </a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>