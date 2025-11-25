<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Berita - <?= strtoupper($jenjang) ?></title>
    
    <style>
        body { margin:0; font-family:Arial, sans-serif; background:#f1f5f9; }
        .dashboard-container { display:flex; min-height:100vh; }

        /* SIDEBAR */
        .sidebar { width:260px; background:#0f172a; color:white; display:flex; flex-direction:column; box-shadow:2px 0 10px rgba(0,0,0,0.2); }
        .sidebar-header { padding:24px; border-bottom:1px solid #1e293b; }
        .sidebar-header h1 { font-size:22px; font-weight:bold; margin:0; }
        .sidebar-header p { margin:4px 0 0; color:#94a3b8; font-size:13px; }
        .sidebar-menu { flex-grow:1; padding-top:15px; }
        .menu-item { display:block; padding:14px 22px; color:#cbd5e1; text-decoration:none; font-size:15px; transition:0.25s; position:relative; }
        .menu-item:hover { background:#1e293b; color:#fff; padding-left:28px; }
        .menu-item.active { background:#1e293b; color:#fff; }
        .menu-item::before { content:""; position:absolute; left:0; top:0; height:100%; width:4px; background:#3b82f6; opacity:0; transition:0.25s; }
        .menu-item:hover::before, .menu-item.active::before { opacity:1; }

        .sidebar-footer { padding:20px; border-top:1px solid #1e293b; }
        .user-profile { display:flex; align-items:center; }
        .user-avatar { width:45px; height:45px; border-radius:12px; background:#334155; color:white; display:flex; justify-content:center; align-items:center; font-weight:bold; font-size:20px; margin-right:12px; box-shadow:0 3px 6px rgba(0,0,0,0.25); }
        .logout-btn { display:block; margin-top:15px; background:#ef4444; color:white; text-align:center; padding:11px; border-radius:10px; font-weight:bold; text-decoration:none; transition:0.25s; }
        .logout-btn:hover { background:#dc2626; transform:scale(1.03); }

        /* MAIN */
        .main-content { flex-grow:1; padding:30px; }
        .topbar { display:flex; justify-content:space-between; align-items:center; margin-bottom:30px; }
        .topbar h2 { margin:0; font-size:26px; font-weight:bold; color:#0f172a; }

        .btn { padding:10px 20px; border-radius:8px; text-decoration:none; font-weight:bold; display:inline-block; transition:0.25s; }
        .btn-primary { background:#3b82f6; color:white; }
        .btn-primary:hover { background:#2563eb; }
        .btn-warning { background:#f59e0b; color:white; font-size:12px; padding:6px 12px; }
        .btn-warning:hover { background:#d97706; }
        .btn-danger { background:#ef4444; color:white; font-size:12px; padding:6px 12px; }
        .btn-danger:hover { background:#dc2626; }

        table { width:100%; border-collapse:collapse; margin-top:15px; background:white; border-radius:12px; overflow:hidden; box-shadow:0 3px 10px rgba(0,0,0,0.08); }
        th { background:#f8fafc; font-weight:bold; padding:14px; font-size:14px; color:#475569; }
        td { padding:13px; border-bottom:1px solid #e2e8f0; font-size:14px; }
        tr:hover td { background:#f1f5f9; }

        .alert { padding:15px; border-radius:8px; margin-bottom:20px; }
        .alert-success { background:#d1fae5; color:#065f46; border-left:4px solid #10b981; }
        .alert-error { background:#fee2e2; color:#991b1b; border-left:4px solid #ef4444; }
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
            <a href="<?= base_url('admin/pendaftaran') ?>" class="menu-item">Data Pendaftaran</a>
            <a href="<?= base_url('admin/berita') ?>" class="menu-item active">Data Berita</a>
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
            <h2>Data Berita <?= strtoupper($jenjang) ?></h2>
            <a href="<?= base_url('admin/berita/create') ?>" class="btn btn-primary">+ Tambah Berita</a>
        </div>

        <?php if(session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>

        <?php if(session()->getFlashdata('error')): ?>
            <div class="alert alert-error"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>

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
                <?php if(!empty($berita)): $no=1; foreach($berita as $b): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    
                    <!-- TAMPILKAN GAMBAR -->
                    <td>
                        <img src="<?= base_url('assets/images/berita/'.$b['gambar']) ?>" 
                             alt="<?= esc($b['judul']) ?>" 
                             style="width:80px; height:60px; object-fit:cover; border-radius:6px;">
                    </td>
                    
                    <td><?= strtoupper($b['jenjang']) ?></td>
                    <td><?= esc($b['judul']) ?></td>
                    <td><?= esc(substr($b['deskripsi'], 0, 60)) ?>...</td>
                    <td><?= date('d-m-Y', strtotime($b['tanggal'])) ?></td>
                    <td>
                        <a href="<?= base_url('admin/berita/edit/'.$b['id']) ?>" class="btn btn-warning">Edit</a>
                        <a href="<?= base_url('admin/berita/delete/'.$b['id']) ?>" class="btn btn-danger" onclick="return confirm('Yakin hapus berita ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; else: ?>
                <tr>
                    <td colspan="7" style="text-align:center; padding:20px; color:#6b7280;">Belum Ada Data Berita</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>

    </main>

</div>

</body>
</html>