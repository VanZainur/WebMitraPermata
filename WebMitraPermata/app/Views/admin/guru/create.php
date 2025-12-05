<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Guru - <?= strtoupper($jenjang ?? 'ADMIN') ?></title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        * { margin:0; padding:0; box-sizing:border-box; }
        
        :root {
            --primary: #3b82f6;
            --primary-dark: #2563eb;
            --danger: #ef4444;
            --dark: #0f172a;
            --dark-lighter: #1e293b;
            --gray-50: #f9fafb;
            --gray-100: #f3f4f6;
            --gray-200: #e5e7eb;
            --gray-400: #9ca3af;
            --gray-500: #6b7280;
            --gray-700: #374151;
            --gray-900: #111827;
            --radius-md: 10px;
            --radius-lg: 14px;
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.05);
            --shadow-lg: 0 10px 20px rgba(0,0,0,0.1);
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--gray-50);
            color: var(--gray-900);
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
            transition: transform 0.25s;
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
            color: var(--gray-400);
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: 0.15s;
            position: relative;
        }

        .menu-item:hover, .menu-item.active {
            background: var(--dark-lighter);
            color: white;
        }

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
        .user-role { font-size: 12px; color: var(--gray-400); }

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
            align-items: center;
            gap: 16px;
            position: sticky;
            top: 0;
            z-index: 100;
        }

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

        .content-area { flex: 1; padding: 24px; max-width: 900px; width: 100%; margin: 0 auto; }

        /* === ALERT === */
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

        .alert-error {
            background: #fee2e2;
            color: #991b1b;
            border-left: 4px solid var(--danger);
        }

        /* === FORM === */
        .form-container {
            background: white;
            padding: 32px;
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-sm);
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            font-size: 14px;
            color: var(--gray-700);
        }

        .form-group label .required {
            color: var(--danger);
            margin-left: 4px;
        }

        .form-control {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid var(--gray-200);
            border-radius: 8px;
            font-size: 14px;
            font-family: inherit;
            transition: 0.15s;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        .form-control[readonly] {
            background: var(--gray-100);
            cursor: not-allowed;
            color: var(--gray-500);
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        .form-hint {
            display: block;
            margin-top: 8px;
            font-size: 12px;
            color: var(--gray-500);
        }

        /* === IMAGE UPLOAD === */
        .image-upload-wrapper {
            position: relative;
        }

        .image-upload-label {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 32px;
            border: 2px dashed var(--gray-300);
            border-radius: 8px;
            cursor: pointer;
            transition: 0.15s;
            background: var(--gray-50);
        }

        .image-upload-label:hover {
            border-color: var(--primary);
            background: rgba(59, 130, 246, 0.05);
        }

        .upload-icon {
            font-size: 48px;
            margin-bottom: 12px;
            opacity: 0.5;
        }

        .upload-text {
            font-weight: 600;
            color: var(--gray-700);
            margin-bottom: 4px;
        }

        .upload-hint {
            font-size: 12px;
            color: var(--gray-500);
        }

        input[type="file"] {
            display: none;
        }

        .image-preview-container {
            display: none;
            margin-top: 16px;
            position: relative;
        }

        .image-preview-container.show {
            display: block;
        }

        .image-preview {
            width: 100%;
            max-width: 400px;
            border-radius: 8px;
            box-shadow: var(--shadow-sm);
        }

        .remove-image {
            position: absolute;
            top: 8px;
            right: 8px;
            width: 32px;
            height: 32px;
            background: var(--danger);
            color: white;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: 0.15s;
        }

        .remove-image:hover {
            transform: scale(1.1);
        }

        /* === BUTTONS === */
        .form-actions {
            display: flex;
            gap: 12px;
            margin-top: 32px;
        }

        .btn {
            padding: 12px 24px;
            border-radius: 8px;
            border: none;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: 0.15s;
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

        .btn-secondary {
            background: var(--gray-200);
            color: var(--gray-700);
        }

        .btn-secondary:hover {
            background: var(--gray-400);
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

            .form-container {
                padding: 20px;
            }

            .form-actions {
                flex-direction: column;
            }

            .btn {
                width: 100%;
                justify-content: center;
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
                    <div class="logo-icon"><?= strtoupper(substr($jenjang ?? 'AD',0,2)) ?></div>
                    <div class="logo-text">
                        <h1><?= strtoupper($jenjang ?? 'ADMIN') ?> ADMIN</h1>
                        <p>Panel <?= strtoupper($jenjang ?? 'ADMIN') ?></p>
                    </div>
                </div>
                <button class="close-sidebar" onclick="toggleSidebar()">✕</button>
            </div>

            <nav class="sidebar-menu">
                <a href="<?= base_url('admin') ?>" class="menu-item">
                    <span class="menu-icon">📊</span>
                    <span>Dashboard</span>
                </a>
                <a href="<?= base_url('admin/berita') ?>" class="menu-item">
                    <span class="menu-icon">📰</span>
                    <span>Data Berita</span>
                </a>
                <a href="<?= base_url('admin/kegiatan') ?>" class="menu-item">
                    <span class="menu-icon">📅</span>
                    <span>Data Kegiatan</span>
                </a>
                <a href="<?= base_url('admin/prestasi') ?>" class="menu-item">
                    <span class="menu-icon">🏆</span>
                    <span>Data Prestasi</span>
                </a>
                <a href="<?= base_url('admin/guru') ?>" class="menu-item active">
                    <span class="menu-icon">👨‍🏫</span>
                    <span>Data Guru</span>
                </a>
            </nav>

            <div class="sidebar-footer">
                <div class="user-profile">
                    <div class="user-avatar"><?= strtoupper(substr($nama ?? 'A', 0, 1)) ?></div>
                    <div>
                        <div class="user-name"><?= $nama ?? 'Admin' ?></div>
                        <div class="user-role"><?= strtoupper($jenjang ?? 'ADMIN') ?></div>
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
            <button class="menu-toggle" onclick="toggleSidebar()">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <h2>Tambah Guru Baru</h2>
        </div>

        <div class="content-area">

            <?php if(session()->getFlashdata('error')): ?>
                <div class="alert alert-error">
                    <span>⚠</span>
                    <span><?= session()->getFlashdata('error') ?></span>
                </div>
            <?php endif; ?>

            <div class="form-container">
                <form action="<?= base_url('admin/guru/store') ?>" method="POST" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    
                    <!-- JENJANG -->
                    <?php if(isset($role) && $role === 'superadmin'): ?>
                    <div class="form-group">
                        <label>Jenjang<span class="required">*</span></label>
                        <select name="jenjang" class="form-control" required>
                            <option value="">Pilih Jenjang</option>
                            <option value="smk">SMK</option>
                            <option value="smp">SMP</option>
                            <option value="sd">SD</option>
                            <option value="tk">TK</option>
                        </select>
                    </div>
                    <?php else: ?>
                    <div class="form-group">
                        <label>Jenjang</label>
                        <input type="text" class="form-control" value="<?= strtoupper($jenjang ?? '') ?>" readonly>
                    </div>
                    <?php endif; ?>

                    <!-- NAMA GURU -->
                    <div class="form-group">
                        <label>Nama Guru<span class="required">*</span></label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan nama guru" required>
                        <span class="form-hint">Contoh: Ahmad Fauzi, S.Pd</span>
                    </div>

                    <!-- JABATAN -->
                    <div class="form-group">
                        <label>Jabatan<span class="required">*</span></label>
                        <input type="text" name="jabatan" class="form-control" placeholder="Masukkan jabatan guru" required>
                        <span class="form-hint">Contoh: Kepala Sekolah, Guru Matematika, Wali Kelas 1A</span>
                    </div>

                    <!-- FOTO -->
                    <div class="form-group">
                        <label>Foto Guru<span class="required">*</span></label>
                        <div class="image-upload-wrapper">
                            <label for="fotoInput" class="image-upload-label" id="uploadLabel">
                                <div class="upload-icon">📷</div>
                                <div class="upload-text">Klik untuk upload foto</div>
                                <div class="upload-hint">Format: JPG, PNG (Max 2MB)</div>
                            </label>
                            <input type="file" name="foto" accept="image/*" required id="fotoInput">
                            <div class="image-preview-container" id="previewContainer">
                                <img id="imagePreview" class="image-preview" alt="Preview">
                                <button type="button" class="remove-image" onclick="removeImage()">✕</button>
                            </div>
                        </div>
                    </div>

                    <!-- ACTIONS -->
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">
                            <span>💾</span>
                            <span>Simpan Guru</span>
                        </button>
                        <a href="<?= base_url('admin/guru') ?>" class="btn btn-secondary">
                            <span>↩️</span>
                            <span>Batal</span>
                        </a>
                    </div>

                </form>
            </div>

        </div>

    </main>

</div>

<script>
// Sidebar Toggle
function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('active');
    
    if (window.innerWidth <= 768) {
        document.body.style.overflow = sidebar.classList.contains('active') ? 'hidden' : '';
    }
}

// Image Preview
const fotoInput = document.getElementById('fotoInput');
const imagePreview = document.getElementById('imagePreview');
const previewContainer = document.getElementById('previewContainer');
const uploadLabel = document.getElementById('uploadLabel');

fotoInput.addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        // Validate file size (2MB)
        if (file.size > 2 * 1024 * 1024) {
            alert('Ukuran file maksimal 2MB!');
            this.value = '';
            return;
        }
        
        const reader = new FileReader();
        reader.onload = function(e) {
            imagePreview.src = e.target.result;
            previewContainer.classList.add('show');
            uploadLabel.style.display = 'none';
        }
        reader.readAsDataURL(file);
    }
});

function removeImage() {
    fotoInput.value = '';
    previewContainer.classList.remove('show');
    uploadLabel.style.display = 'flex';
}

// Close sidebar on outside click (mobile)
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

// Auto-close sidebar on resize
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