<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Yayasan</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/admin-dashboard.css') ?>">
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <h1>Admin Yayasan</h1>
                <p>Multi-Jenjang System</p>
            </div>

            <nav class="sidebar-menu" id="sidebarMenu">
                <!-- Menu akan di-generate oleh JavaScript -->
            </nav>

            <div class="sidebar-footer">
                <div class="user-profile">
                    <div class="user-avatar">A</div>
                    <div>
                        <div style="font-weight: 500; font-size: 14px;">Admin</div>
                        <div style="font-size: 12px; color: #9ca3af;">Super Admin</div>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <header class="topbar">
                <div class="topbar-left">
                    <button class="menu-toggle" onclick="toggleSidebar()">
                        <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                    <h2 id="pageTitle" style="font-size: 24px; font-weight: bold;">Dashboard</h2>
                </div>
                <div id="currentDate" style="font-size: 14px; color: #6b7280;"></div>
            </header>

            <div class="content-area" id="contentArea">
                <!-- Content akan di-render oleh JavaScript -->
            </div>
        </main>
    </div>

    <!-- Modal Form -->
    <div class="modal" id="dataModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="modalTitle">Tambah Data</h3>
            </div>
            <div class="modal-body">
                <form id="dataForm">
                    <!-- Form fields akan di-generate oleh JavaScript -->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-save" onclick="saveData()">Simpan</button>
                <button type="button" class="btn btn-cancel" onclick="closeModal()">Batal</button>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="<?= base_url('assets/admin/js/admin-dashboard.js') ?>"></script>
</body>
</html>