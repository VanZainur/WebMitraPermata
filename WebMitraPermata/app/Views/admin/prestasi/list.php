<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data prestasi - <?= strtoupper($jenjang) ?></title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        * { margin:0; padding:0; box-sizing:border-box; }
        
        :root {
            --primary: #3b82f6;
            --primary-dark: #2563eb;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
            --dark: #0f172a;
            --dark-lighter: #1e293b;
            --dark-light: #334155;
            --gray-50: #f9fafb;
            --gray-100: #f3f4f6;
            --gray-200: #e5e7eb;
            --gray-300: #d1d5db;
            --gray-400: #9ca3af;
            --gray-500: #6b7280;
            --gray-700: #374151;
            --gray-900: #111827;
            --radius-md: 10px;
            --radius-lg: 14px;
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.05);
            --shadow-md: 0 4px 6px rgba(0,0,0,0.07);
            --shadow-lg: 0 10px 20px rgba(0,0,0,0.1);
            --transition-base: 0.25s ease;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: var(--gray-50);
            color: var(--gray-900);
            line-height: 1.6;
        }

        .dashboard-container { display:flex; min-height:100vh; position:relative; }

        /* === SIDEBAR === */
        .sidebar {
            width: 280px;
            background: var(--dark);
            color: white;
            display: flex;
            flex-direction: column;
            box-shadow: var(--shadow-lg);
            position: fixed;
            left: 0;
            top: 0;
            height: 100vh;
            z-index: 1000;
            transition: transform var(--transition-base);
        }

        .sidebar-overlay { display: none; }

        .sidebar-header {
            padding: 24px;
            border-bottom: 1px solid var(--dark-lighter);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-section { display: flex; align-items: center; gap: 16px; }

        .logo-icon {
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, var(--primary), #60a5fa);
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 18px;
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
        }

        .logo-text h1 { font-size: 18px; font-weight: 700; margin: 0; }
        .logo-text p { font-size: 12px; color: var(--gray-400); margin: 2px 0 0; }

        .close-sidebar {
            display: none;
            width: 32px;
            height: 32px;
            background: var(--dark-lighter);
            border: none;
            border-radius: 6px;
            color: white;
            font-size: 20px;
            cursor: pointer;
        }

        .sidebar-menu { flex: 1; overflow-y: auto; padding: 16px; }

        .menu-item {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 12px 16px;
            margin-bottom: 4px;
            border-radius: var(--radius-md);
            color: var(--gray-300);
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.15s;
            position: relative;
        }

        .menu-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 3px;
            background: var(--primary);
            opacity: 0;
            transition: 0.15s;
        }

        .menu-item:hover {
            background: var(--dark-lighter);
            color: white;
            transform: translateX(4px);
        }

        .menu-item.active {
            background: var(--dark-lighter);
            color: white;
        }

        .menu-item.active::before { opacity: 1; }

        .menu-icon { font-size: 20px; }

        .sidebar-footer { padding: 16px; border-top: 1px solid var(--dark-lighter); }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 16px;
            background: var(--dark-lighter);
            border-radius: var(--radius-md);
            margin-bottom: 16px;
        }

        .user-avatar {
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, var(--primary), #60a5fa);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 20px;
        }

        .user-name { font-weight: 600; font-size: 14px; }
        .user-role { font-size: 12px; color: var(--gray-400); margin-top: 2px; }

        .logout-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 12px;
            background: linear-gradient(135deg, var(--danger), #dc2626);
            border-radius: var(--radius-md);
            color: white;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: 0.15s;
        }

        .logout-btn:hover { transform: translateY(-2px); box-shadow: 0 8px 20px rgba(239, 68, 68, 0.3); }

        /* === MAIN CONTENT === */
        .main-content {
            flex: 1;
            margin-left: 280px;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .topbar {
            background: white;
            padding: 16px 24px;
            box-shadow: var(--shadow-sm);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .topbar-left { display: flex; align-items: center; gap: 16px; }

        .menu-toggle {
            display: none;
            flex-direction: column;
            gap: 4px;
            width: 40px;
            height: 40px;
            background: var(--gray-100);
            border: none;
            border-radius: 6px;
            cursor: pointer;
            padding: 10px;
        }

        .menu-toggle span {
            display: block;
            width: 100%;
            height: 2px;
            background: var(--gray-700);
            border-radius: 2px;
        }

        .topbar h2 { font-size: 20px; font-weight: 700; margin: 0; }

        .content-area { flex: 1; padding: 24px; max-width: 1400px; width: 100%; margin: 0 auto; }

        /* === ALERTS === */
        .alert {
            padding: 16px 20px;
            border-radius: var(--radius-md);
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 14px;
            font-weight: 500;
            animation: slideDown 0.3s ease;
        }

        @keyframes slideDown {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .alert-success {
            background: #d1fae5;
            color: #065f46;
            border-left: 4px solid var(--success);
        }

        .alert-error {
            background: #fee2e2;
            color: #991b1b;
            border-left: 4px solid var(--danger);
        }

        /* === BUTTONS === */
        .btn {
            padding: 10px 20px;
            border-radius: 8px;
            border: none;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.15s;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
        }

        .btn-warning {
            background: var(--warning);
            color: white;
            padding: 6px 12px;
            font-size: 12px;
        }

        .btn-warning:hover { background: #d97706; }

        .btn-danger {
            background: var(--danger);
            color: white;
            padding: 6px 12px;
            font-size: 12px;
        }

        .btn-danger:hover { background: #dc2626; }

        /* === TABLE === */
        .table-section {
            background: white;
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-sm);
            overflow: hidden;
        }

        .table-header {
            padding: 24px;
            border-bottom: 1px solid var(--gray-200);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 16px;
        }

        .table-title h3 {
            font-size: 18px;
            font-weight: 700;
            margin: 0;
        }

        .table-container { overflow-x: auto; }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background: var(--gray-50);
        }

        th {
            padding: 14px 16px;
            text-align: left;
            font-size: 12px;
            font-weight: 700;
            color: var(--gray-500);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        td {
            padding: 16px;
            border-top: 1px solid var(--gray-200);
            font-size: 14px;
            color: var(--gray-700);
        }

        tbody tr {
            transition: 0.15s;
        }

        tbody tr:hover {
            background: var(--gray-50);
        }

        .img-thumbnail {
            width: 80px;
            height: 60px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: var(--shadow-sm);
        }

        .badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .badge-jenjang {
            background: #dbeafe;
            color: var(--primary);
        }

        .action-buttons {
            display: flex;
            gap: 8px;
        }

        .empty-state {
            text-align: center;
            padding: 60px 20px;
        }

        .empty-icon {
            font-size: 48px;
            opacity: 0.5;
            margin-bottom: 16px;
        }

        /* === RESPONSIVE === */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .sidebar-overlay {
                display: block;
                position: fixed;
                inset: 0;
                background: rgba(0, 0, 0, 0.5);
                opacity: 0;
                visibility: hidden;
                transition: 0.25s;
            }

            .sidebar.active .sidebar-overlay {
                opacity: 1;
                visibility: visible;
            }

            .close-sidebar {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .main-content {
                margin-left: 0;
            }

            .menu-toggle {
                display: flex;
            }

            .topbar h2 {
                font-size: 16px;
            }

            .content-area {
                padding: 16px;
            }

            table {
                font-size: 13px;
            }

            th, td {
                padding: 12px;
            }

            .img-thumbnail {
                width: 60px;
                height: 45px;
            }

            /* Hide less important columns */
            th:nth-child(5),
            td:nth-child(5) {
                display: none;
            }
        }

        @media (max-width: 480px) {
            th:nth-child(3),
            td:nth-child(3) {
                display: none;
            }
        }
    </style>
</head>
<body>

<div class="dashboard-container">

    <!-- SIDEBAR -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-overlay" onclick="toggleSidebar()"></div>
        
        <div style="display:flex; flex-direction:column; height:100%;">
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

            <nav class="sidebar-menu">
                <a href="<?= base_url('admin') ?>" class="menu-item">
                    <span class="menu-icon">📊</span>
                    <span>Dashboard</span>
                </a>
                <a href="<?= base_url('admin/berita') ?>" class="menu-item ">
                    <span class="menu-icon">📰</span>
                    <span>Data Berita</span>
                </a>
                <a href="<?= base_url('admin/kegiatan') ?>" class="menu-item">
                    <span class="menu-icon">📅</span>
                    <span>Data Kegiatan</span>
                </a>
                <a href="<?= base_url('admin/prestasi') ?>" class="menu-item active">
                    <span class="menu-icon">🏆</span>
                    <span>Data Prestasi</span>
                </a>
            </nav>

            <div class="sidebar-footer">
                <div class="user-profile">
                    <div class="user-avatar"><?= strtoupper(substr($nama,0,1)) ?></div>
                    <div>
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

        <div class="topbar">
            <div class="topbar-left">
                <button class="menu-toggle" onclick="toggleSidebar()">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <h2>Data prestasi <?= strtoupper($jenjang) ?></h2>
            </div>
            <a href="<?= base_url('admin/prestasi/create') ?>" class="btn btn-primary">
                <span>+</span>
                <span>Tambah prestasi</span>
            </a>
        </div>

        <div class="content-area">

            <?php if(session()->getFlashdata('success')): ?>
                <div class="alert alert-success">
                    <span>✓</span>
                    <span><?= session()->getFlashdata('success') ?></span>
                </div>
            <?php endif; ?>

            <?php if(session()->getFlashdata('error')): ?>
                <div class="alert alert-error">
                    <span>⚠</span>
                    <span><?= session()->getFlashdata('error') ?></span>
                </div>
            <?php endif; ?>

            <div class="table-section">
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Jenjang</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($prestasi)): $no=1; foreach($prestasi as $b): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td>
                                    <img src="<?= base_url('uploads/' . strtolower($b['jenjang']) . '/prestasi/' . $b['gambar']) ?>" 
                                        alt="<?= esc($b['judul']) ?>" 
                                        class="img-thumbnail">
                                </td>
                                <td><span class="badge badge-jenjang"><?= strtoupper($b['jenjang']) ?></span></td>
                                <td><strong><?= esc($b['judul']) ?></strong></td>
                                <td><?= esc(substr($b['deskripsi'], 0, 60)) ?>...</td>
                                <td><?= date('d M Y', strtotime($b['tanggal'])) ?></td>
                                <td>
                                    <div class="action-buttons">
                                        <a href="<?= base_url('admin/prestasi/edit/'.$b['id']) ?>" class="btn btn-warning">✏️ Edit</a>
                                        <a href="<?= base_url('admin/prestasi/delete/'.$b['id']) ?>" 
                                           class="btn btn-danger" 
                                           onclick="return confirm('Yakin hapus prestasi ini?')">🗑️ Hapus</a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; else: ?>
                            <tr>
                                <td colspan="7" class="empty-state">
                                    <div class="empty-icon">📰</div>
                                    <p style="color:var(--gray-500); font-size:16px;">Belum Ada Data prestasi</p>
                                    <p style="color:var(--gray-400); font-size:14px; margin-top:8px;">
                                        Klik "Tambah prestasi" untuk membuat prestasi baru
                                    </p>
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

<script>
function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('active');
    
    if (window.innerWidth <= 768) {
        document.body.style.overflow = sidebar.classList.contains('active') ? 'hidden' : '';
    }
}

// Close sidebar when clicking outside on mobile
document.addEventListener('click', function(e) {
    const sidebar = document.getElementById('sidebar');
    const menuToggle = document.querySelector('.menu-toggle');
    
    if (window.innerWidth <= 768 && 
        sidebar.classList.contains('active') && 
        !sidebar.contains(e.target) && 
        !menuToggle.contains(e.target)) {
        toggleSidebar();
    }
});

// Close sidebar on resize to desktop
window.addEventListener('resize', function() {
    if (window.innerWidth > 768) {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.remove('active');
        document.body.style.overflow = '';
    }
});
</script>

</body>
</html>