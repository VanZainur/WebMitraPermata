<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | <?= strtoupper($jenjang) ?></title>
    <link rel="icon" type="image/png" href="<?= base_url('assets/images/logo.png') ?>">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/admin-dashboard.css') ?>">
</head>

<body>

<div class="dashboard-container">

    <!-- SIDEBAR -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-overlay" onclick="toggleSidebar()"></div>
        
        <div class="sidebar-content">
            <!-- Header -->
            <div class="sidebar-header">
                <div class="logo-section">
                    <div class="logo-icon"><?= strtoupper(substr($jenjang,0,2)) ?></div>
                    <div class="logo-text">
                        <h1><?= strtoupper($jenjang) ?> ADMIN</h1>
                        <p>Panel <?= strtoupper($jenjang) ?></p>
                    </div>
                </div>
                <button class="close-sidebar" onclick="toggleSidebar()">✕</button>
            </div>

            <!-- Menu -->
            <nav class="sidebar-menu">
                <a href="<?= base_url('admin') ?>" class="menu-item active">
                    <span class="menu-icon">📊</span>
                    <span class="menu-label">Dashboard</span>
                </a>
                <a href="<?= base_url('admin/berita') ?>" class="menu-item">
                    <span class="menu-icon">📰</span>
                    <span class="menu-label">Data Berita</span>
                </a>
                <a href="<?= base_url('admin/kegiatan') ?>" class="menu-item">
                    <span class="menu-icon">📅</span>
                    <span class="menu-label">Data Kegiatan</span>
                </a>
                <a href="<?= base_url('admin/prestasi') ?>" class="menu-item">
                    <span class="menu-icon">🏆</span>
                    <span class="menu-label">Data Prestasi</span>
                </a>
            </nav>

            <!-- Footer -->
            <div class="sidebar-footer">
                <div class="user-profile">
                    <div class="user-avatar">
                        <span><?= strtoupper(substr($nama,0,1)) ?></span>
                    </div>
                    <div class="user-info">
                        <div class="user-name"><?= $nama ?></div>
                        <div class="user-role"><?= strtoupper($jenjang) ?></div>
                    </div>
                </div>
                <a href="<?= base_url('admin/logout') ?>" class="logout-btn">
                    <span>🚪</span>
                    <span>Logout</span>
                </a>
            </div>
        </div>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="main-content">

        <!-- Topbar -->
        <div class="topbar">
            <div class="topbar-left">
                <button class="menu-toggle" onclick="toggleSidebar()">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <h2>Dashboard <?= strtoupper($jenjang) ?></h2>
            </div>
            <div class="topbar-right">
                <div class="date-display">
                    <span class="date-icon">📅</span>
                    <span><?= date('l, d F Y') ?></span>
                </div>
            </div>
        </div>

        <!-- Content Area -->
        <div class="content-area">
            
            <!-- Welcome Banner -->
            <div class="welcome-banner">
                <div class="banner-content">
                    <h3>Selamat Datang, <?= $nama ?> 👋</h3>
                    <p>Kelola data pendaftaran dan konten dengan mudah</p>
                </div>
                <div class="banner-decoration">
                    <div class="decoration-circle"></div>
                    <div class="decoration-circle"></div>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="stats-grid">
                <div class="stat-card stat-primary">
                    <div class="stat-icon">👥</div>
                    <div class="stat-info">
                        <div class="stat-label">Total Pendaftar</div>
                        <div class="stat-value"><?= $totalAll ?></div>
                    </div>
                    <div class="stat-trend positive">
                        <span>↑</span>
                        <span>12%</span>
                    </div>
                </div>

                <?php 
                $colors = ['success', 'warning', 'info', 'danger'];
                $icons = ['🏫', '📚', '🎓', '✨'];
                $index = 0;
                foreach($totalBy as $key => $val): 
                ?>
                <div class="stat-card stat-<?= $colors[$index % 4] ?>">
                    <div class="stat-icon"><?= $icons[$index % 4] ?></div>
                    <div class="stat-info">
                        <div class="stat-label"><?= strtoupper($key) ?></div>
                        <div class="stat-value"><?= $val ?></div>
                    </div>
                </div>
                <?php 
                $index++;
                endforeach; 
                ?>
            </div>

            <!-- Table Section -->
            <div class="table-section">
                <div class="table-header">
                    <div class="table-title">
                        <h3>Data Pendaftar <?= strtoupper($jenjang) ?></h3>
                        <span class="data-count"><?= count($pendaftaran) ?> data</span>
                    </div>
                    <div class="table-actions">
                        <button class="btn-action btn-search" onclick="toggleSearch()">
                            <span>🔍</span>
                            <span>Cari</span>
                        </button>
                        <a href="<?= base_url('admin/export-excel') ?>" class="btn-action btn-excel">
                            <span>📊</span>
                            <span>Excel</span>
                        </a>
                        <a href="<?= base_url('admin/export-pdf') ?>" class="btn-action btn-pdf" target="_blank">
                            <span>📄</span>
                            <span>PDF</span>
                        </a>
                    </div>
                </div>

                <!-- Search Bar (Hidden by default) -->
                <div class="search-container" id="searchContainer" style="display: none;">
                    <input type="text" class="search-input" placeholder="Cari nama, asal sekolah, atau jurusan..." onkeyup="filterTable(this.value)">
                </div>

                <!-- Table -->
                <div class="table-container">
                    <table class="data-table" id="dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Asal Sekolah</th>
                                <th>Jurusan</th>
                                <th>No HP</th>
                                <th>Tanggal Daftar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($pendaftaran)): $no=1; foreach($pendaftaran as $p): ?>
                            <tr>
                                <td><span class="cell-number"><?= $no++ ?></span></td>
                                <td>
                                    <div class="user-cell">
                                        <div class="user-avatar-small"><?= strtoupper(substr($p['nama'],0,1)) ?></div>
                                        <span class="user-name"><?= esc($p['nama']) ?></span>
                                    </div>
                                </td>
                                <td><?= esc($p['asal_sekolah']) ?></td>
                                <td><span class="badge badge-jurusan"><?= esc($p['jurusan']) ?></span></td>
                                <td><?= esc($p['no_hp']) ?></td>
                                <td>
                                    <div class="date-cell">
                                        <span class="date-icon-small">📅</span>
                                        <span><?= date('d M Y', strtotime($p['created_at'])) ?></span>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; else: ?>
                            <tr>
                                <td colspan="6" class="empty-state">
                                    <div class="empty-content">
                                        <span class="empty-icon">📋</span>
                                        <p>Belum ada data pendaftar</p>
                                    </div>
                                </td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </main>

</div>

<!-- JavaScript -->
<script src="<?= base_url('assets/admin/js/admin-dashboard.js') ?>"></script>

</body>
</html>