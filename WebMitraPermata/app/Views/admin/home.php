<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | <?= strtoupper($jenjang) ?></title>
      <link rel="icon" type="image/png" href="<?= base_url('assets/images/logo.png') ?>">

    <!-- CSS KAMU SENDIRI -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/admin-dashboard.css') ?>">

    <style>
        body { margin:0; font-family:Arial, sans-serif; background:#f1f5f9; }

        .dashboard-container { display:flex; min-height:100vh; }

        /* SIDEBAR */
        .sidebar { 
            width:260px; 
            background:#0f172a; 
            color:white; 
            display:flex; 
            flex-direction:column; 
            box-shadow:2px 0 10px rgba(0,0,0,0.2); 
        }

        .sidebar-header { 
            padding:24px; 
            border-bottom:1px solid #1e293b; 
        }

        .sidebar-header h1 { 
            font-size:22px; 
            font-weight:bold; 
            margin:0; 
        }

        .sidebar-header p { 
            margin:4px 0 0; 
            color:#94a3b8; 
            font-size:13px; 
        }

        .sidebar-menu { 
            flex-grow:1; 
            padding-top:15px; 
        }

        .menu-item {
            display:block;
            padding:14px 22px;
            color:#cbd5e1;
            text-decoration:none;
            font-size:15px;
            transition:0.25s;
            position:relative;
        }

        .menu-item:hover {
            background:#1e293b;
            color:#fff;
            padding-left:28px;
        }

        .menu-item::before {
            content:"";
            position:absolute;
            left:0;
            top:0;
            height:100%;
            width:4px;
            background:#3b82f6;
            opacity:0;
            transition:0.25s;
        }

        .menu-item:hover::before {
            opacity:1;
        }

        /* FOOTER USER */
        .sidebar-footer {
            padding:20px;
            border-top:1px solid #1e293b;
        }

        .user-profile {
            display:flex;
            align-items:center;
        }

        .user-avatar {
            width:45px;
            height:45px;
            border-radius:12px;
            background:#334155;
            color:white;
            display:flex;
            justify-content:center;
            align-items:center;
            font-weight:bold;
            font-size:20px;
            margin-right:12px;
            box-shadow:0 3px 6px rgba(0,0,0,0.25);
        }

        /* MAIN CONTENT */
        .main-content {
            flex-grow:1; 
            padding:30px; 
        }

        .topbar {
            display:flex; 
            justify-content:space-between; 
            align-items:center; 
            margin-bottom:30px;
        }

        .topbar h2 {
            margin:0;
            font-size:26px;
            font-weight:bold;
            color:#0f172a;
        }

        /* CARDS */
        .stats-grid { 
            display:grid; 
            grid-template-columns:repeat(auto-fit,minmax(260px,1fr)); 
            gap:20px; 
            margin-bottom:28px; 
        }

        .stat-card {
            background:white; 
            padding:24px; 
            border-radius:14px; 
            box-shadow:0 5px 15px rgba(0,0,0,0.06); 
            display:flex; 
            justify-content:space-between; 
            align-items:center;
            transition:0.25s;
        }

        .stat-card:hover {
            transform:translateY(-4px);
            box-shadow:0 8px 18px rgba(0,0,0,0.12);
        }

        .stat-value {
            font-size:36px; 
            font-weight:800; 
            color:#0f172a;
        }

        .icon-wrapper {
            font-size:48px; 
            opacity:0.5;
        }

        /* TABLE */
        table { 
            width:100%; 
            border-collapse:collapse; 
            margin-top:15px; 
            background:white; 
            border-radius:12px; 
            overflow:hidden; 
            box-shadow:0 3px 10px rgba(0,0,0,0.08);
        }

        th { 
            background:#f8fafc; 
            font-weight:bold; 
            padding:14px; 
            font-size:14px; 
            color:#475569; 
        }

        td { 
            padding:13px; 
            border-bottom:1px solid #e2e8f0; 
            font-size:14px; 
        }

        tr:hover td {
            background:#f1f5f9;
        }

        /* LOGOUT BUTTON */
        .logout-btn {
            display:block; 
            margin-top:15px; 
            background:#ef4444; 
            color:white; 
            text-align:center; 
            padding:11px; 
            border-radius:10px; 
            font-weight:bold; 
            text-decoration:none;
            transition:0.25s;
        }

        .logout-btn:hover {
            background:#dc2626;
            transform:scale(1.03);
        }

            /* BUTTON EXPORT */
.btn-export {
    padding: 10px 20px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: bold;
    font-size: 14px;
    transition: 0.25s;
    display: inline-block;
}

.btn-excel {
    background: #10b981;
    color: white;
}

.btn-excel:hover {
    background: #059669;
    transform: translateY(-2px);
}

.btn-pdf {
    background: #ef4444;
    color: white;
}

.btn-pdf:hover {
    background: #dc2626;
    transform: translateY(-2px);
}
    </style>
    
</head>

<body>

<div class="dashboard-container">

    <!-- SIDEBAR -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <h1><?= strtoupper($jenjang) ?> ADMIN</h1>
            <p>Panel <?= strtoupper($jenjang) ?></p>
        </div>

       <div class="sidebar-menu">
    <a href="<?= base_url('admin') ?>" class="menu-item">Dashboard</a>
    <a href="<?= base_url('admin/berita') ?>" class="menu-item">Data Berita</a>
    <a href="<?= base_url('admin/kegiatan') ?>" class="menu-item">Data Kegiatan</a>
    <a href="<?= base_url('admin/prestasi') ?>" class="menu-item">Data Prestasi</a>
    </div>

        <div class="sidebar-footer">
            <div class="user-profile">
                <div class="user-avatar"><?= strtoupper(substr($nama,0,1)) ?></div>
                <div>
                    <div style="font-weight:bold;"><?= $nama ?></div>
                    <div style="font-size:12px; color:#94a3b8;"><?= strtoupper($jenjang) ?></div>
                </div>
            </div>

           <a href="<?= base_url('admin/logout') ?>" class="logout-btn">Logout</a>
        </div>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="main-content">

        <div class="topbar">
            <h2>Dashboard <?= strtoupper($jenjang) ?></h2>
            <div><?= date('l, d F Y') ?></div>
        </div>

        <!-- STAT CARDS -->
        <div class="stats-grid">

            <div class="stat-card">
                <div>
                    <div>Total Pendaftar</div>
                    <div class="stat-value"><?= $totalAll ?></div>
                </div>
                <div class="icon-wrapper">👥</div>
            </div>

            <?php foreach($totalBy as $key => $val): ?>
            <div class="stat-card">
                <div>
                    <div><?= strtoupper($key) ?></div>
                    <div class="stat-value"><?= $val ?></div>
                </div>
                <div class="icon-wrapper">🏫</div>
            </div>
            <?php endforeach; ?>

        </div>

    <div style="display:flex; justify-content:space-between; align-items:center; margin-top:20px; margin-bottom:10px;">
    
    <!-- Title -->
    <h3 style="margin:0;">Data Pendaftar <?= strtoupper($jenjang) ?></h3>

            <!-- Buttons -->
            <div style="display:flex; gap:10px;">
                <a href="<?= base_url('admin/export-excel') ?>" class="btn-export btn-excel">
                    📊 Export Excel
                </a>
                <a href="<?= base_url('admin/export-pdf') ?>" class="btn-export btn-pdf" target="_blank">
                    📄 Export PDF
                </a>
            </div>

        </div>


        <table>
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
                    <td><?= $no++ ?></td>
                    <td><?= esc($p['nama']) ?></td>
                    <td><?= esc($p['asal_sekolah']) ?></td>
                    <td><?= esc($p['jurusan']) ?></td>
                    <td><?= esc($p['no_hp']) ?></td>
                    <td><?= date('d-m-Y H:i', strtotime($p['created_at'])) ?></td>
                </tr>
                <?php endforeach; else: ?>
                <tr>
                    <td colspan="7" style="text-align:center; padding:20px; color:#6b7280;">Belum Ada Data</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>

    </main>

</div>

<!-- JS KAMU SENDIRI -->
<script src="<?= base_url('assets/admin/js/admin-dashboard.js') ?>"></script>

</body>
</html>
