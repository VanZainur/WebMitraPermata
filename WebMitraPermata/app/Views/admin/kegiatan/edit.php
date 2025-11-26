<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit kegiatan</title>
    
    <style>
        body { margin:0; font-family:Arial, sans-serif; background:#f1f5f9; }
        .dashboard-container { display:flex; min-height:100vh; }

        /* SIDEBAR */
        .sidebar { width:260px; background:#0f172a; color:white; display:flex; flex-direction:column; box-shadow:2px 0 10px rgba(0,0,0,0.2); }
        .sidebar-header { padding:24px; border-bottom:1px solid #1e293b; }
        .sidebar-header h1 { font-size:22px; font-weight:bold; margin:0; }
        .sidebar-header p { margin:4px 0 0; color:#94a3b8; font-size:13px; }
        .sidebar-menu { flex-grow:1; padding-top:15px; }
        .menu-item { display:block; padding:14px 22px; color:#cbd5e1; text-decoration:none; font-size:15px; transition:0.25s; }
        .menu-item:hover { background:#1e293b; color:#fff; }
         .menu-item:hover::before, .menu-item.active::before { opacity:1; }
        .menu-item.active { background:#1e293b; color:#fff; }

        .sidebar-footer { padding:20px; border-top:1px solid #1e293b; }
        .user-profile { display:flex; align-items:center; }
        .user-avatar { width:45px; height:45px; border-radius:12px; background:#334155; color:white; display:flex; justify-content:center; align-items:center; font-weight:bold; font-size:20px; margin-right:12px; }
        .logout-btn { display:block; margin-top:15px; background:#ef4444; color:white; text-align:center; padding:11px; border-radius:10px; font-weight:bold; text-decoration:none; }

        /* MAIN */
        .main-content { flex-grow:1; padding:30px; }
        .form-container { background:white; padding:30px; border-radius:12px; box-shadow:0 3px 10px rgba(0,0,0,0.08); max-width:700px; }
        .form-group { margin-bottom:20px; }
        .form-group label { display:block; margin-bottom:8px; font-weight:bold; color:#475569; }
        .form-group input, .form-group select, .form-group textarea { width:100%; padding:12px; border:1px solid #e2e8f0; border-radius:8px; font-size:14px; box-sizing:border-box; }
        .form-group textarea { min-height:120px; }
        .btn { padding:12px 24px; border-radius:8px; border:none; font-weight:bold; cursor:pointer; transition:0.25s; text-decoration:none; display:inline-block; }
        .btn-primary { background:#3b82f6; color:white; }
        .btn-primary:hover { background:#2563eb; }
        .btn-secondary { background:#6b7280; color:white; }
        .btn-secondary:hover { background:#4b5563; }
        
        .image-preview { margin-top:10px; max-width:200px; border-radius:8px; display:none; }
    </style>
</head>
<body>

<div class="dashboard-container">

    <!-- SIDEBAR -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <h1><?= strtoupper($jenjang ?? 'ADMIN') ?> ADMIN</h1>
            <p>Panel <?= strtoupper($jenjang ?? 'ADMIN') ?></p>
        </div>
        <div class="sidebar-menu">
            <a href="<?= base_url('admin') ?>" class="menu-item">Dashboard</a>
            <a href="<?= base_url('admin/berita') ?>" class="menu-item">Data Berita</a>
            <a href="<?= base_url('admin/kegiatan') ?>" class="menu-item active">Data Kegiatan</a>
            <a href="<?= base_url('admin/prestasi') ?>" class="menu-item">Data Prestasi</a>
        </div>
        <div class="sidebar-footer">
            <div class="user-profile">
                <div class="user-avatar"><?= strtoupper(substr($nama ?? 'A', 0, 1)) ?></div>
                <div>
                    <div style="font-weight:bold;"><?= $nama ?? 'Admin' ?></div>
                    <div style="font-size:12px; color:#94a3b8;"><?= strtoupper($jenjang ?? 'ADMIN') ?></div>
                </div>
            </div>
            <a href="<?= base_url('admin/logout') ?>" class="logout-btn">Logout</a>
        </div>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="main-content">
        <h2>Edit kegiatan</h2>

        <div class="form-container">
            <form action="<?= base_url('admin/kegiatan/update/'.$kegiatan['id']) ?>" method="POST" enctype="multipart/form-data">
                  <?= csrf_field() ?>  <!-- ✅ TAMBAHKAN INI -->
                  
                <!-- JIKA SUPERADMIN, TAMPILKAN DROPDOWN JENJANG -->
                <?php if(isset($role) && $role === 'superadmin'): ?>
                <div class="form-group">
                    <label>Jenjang</label>
                    <select name="jenjang" required>
                        <option value="smk" <?= $kegiatan['jenjang'] === 'smk' ? 'selected' : '' ?>>SMK</option>
                        <option value="smp" <?= $kegiatan['jenjang'] === 'smp' ? 'selected' : '' ?>>SMP</option>
                        <option value="sd" <?= $kegiatan['jenjang'] === 'sd' ? 'selected' : '' ?>>SD</option>
                        <option value="tk" <?= $kegiatan['jenjang'] === 'tk' ? 'selected' : '' ?>>TK</option>
                    </select>
                </div>
                <?php else: ?>
                <!-- JIKA ADMIN BIASA, TAMPILKAN JENJANG READONLY -->
                <div class="form-group">
                    <label>Jenjang</label>
                    <input type="text" value="<?= strtoupper($kegiatan['jenjang']) ?>" readonly style="background:#f1f5f9; cursor:not-allowed;">
                </div>
                <?php endif; ?>

                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" name="judul" value="<?= esc($kegiatan['judul']) ?>" required>
                </div>

                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" required><?= esc($kegiatan['deskripsi']) ?></textarea>
                </div>

                <div class="form-group">
                    <label>Gambar</label>
                    
                   <!-- Tampilkan gambar lama -->
                    <?php if(!empty($kegiatan['gambar'])): ?>
                        <div style="margin-bottom:10px;">
                            <img src="<?= base_url('uploads/' . strtolower($kegiatan['jenjang']) . '/kegiatan/' . $kegiatan['gambar']) ?>" 
                                alt="Gambar Lama" 
                                style="max-width:200px; border-radius:8px;">
                            <p style="font-size:12px; color:#6b7280;">Gambar saat ini</p>
                        </div>
                    <?php endif; ?>
                    
                    <!-- Input untuk upload gambar baru (opsional) --> 
                    <input type="file" name="gambar" accept="image/*" id="gambarInput">
                    <img id="imagePreview" class="image-preview" alt="Preview">
                    <small style="color:#6b7280;">Kosongkan jika tidak ingin mengganti gambar</small>
                </div>

                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" name="tanggal" value="<?= $kegiatan['tanggal'] ?>" required>
                </div>

                <button type="submit" class="btn btn-primary">Update kegiatan</button>
                <a href="<?= base_url('admin/kegiatan') ?>" class="btn btn-secondary">Batal</a>

            </form>
        </div>

    </main>

</div>

<!-- SCRIPT UNTUK PREVIEW IMAGE -->
<script>
    const gambarInput = document.getElementById('gambarInput');
    const imagePreview = document.getElementById('imagePreview');

    gambarInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                imagePreview.style.display = 'block';
            }
            reader.readAsDataURL(file);
        }
    });
</script>

</body>
</html>