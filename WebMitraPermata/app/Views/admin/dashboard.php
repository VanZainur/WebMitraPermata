<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Yayasan</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: #f3f4f6;
        }

        .dashboard-container {
            display: flex;
            height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 280px;
            background: #1f2937;
            color: white;
            display: flex;
            flex-direction: column;
            transition: transform 0.3s;
        }

        .sidebar.closed {
            transform: translateX(-280px);
        }

        .sidebar-header {
            padding: 24px;
            border-bottom: 1px solid #374151;
        }

        .sidebar-header h1 {
            font-size: 20px;
            font-weight: bold;
        }

        .sidebar-header p {
            font-size: 14px;
            color: #9ca3af;
            margin-top: 4px;
        }

        .sidebar-menu {
            flex: 1;
            overflow-y: auto;
            padding: 16px;
        }

        .menu-item {
            margin-bottom: 4px;
        }

        .menu-button {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 12px 16px;
            background: transparent;
            border: none;
            border-radius: 8px;
            color: #d1d5db;
            cursor: pointer;
            transition: all 0.2s;
            font-size: 15px;
        }

        .menu-button:hover {
            background: #374151;
        }

        .menu-button.active {
            background: #2563eb;
            color: white;
        }

        .menu-button-content {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .badge {
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 11px;
            font-weight: 600;
        }

        .badge-red { background: #ef4444; }
        .badge-green { background: #10b981; }
        .badge-blue { background: #3b82f6; }
        .badge-orange { background: #f97316; }
        .badge-purple { background: #8b5cf6; }
        .badge-yellow { background: #eab308; }

        .submenu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s;
            margin-left: 16px;
        }

        .submenu.open {
            max-height: 500px;
        }

        .submenu-item {
            padding: 10px 16px;
            margin: 4px 0;
            border-radius: 8px;
            cursor: pointer;
            color: #9ca3af;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 14px;
            transition: all 0.2s;
        }

        .submenu-item:hover {
            background: #374151;
            color: white;
        }

        .submenu-item.active {
            background: #2563eb;
            color: white;
        }

        .sidebar-footer {
            padding: 16px;
            border-top: 1px solid #374151;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px;
            background: #374151;
            border-radius: 8px;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            background: #2563eb;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .topbar {
            background: white;
            padding: 16px 24px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .topbar-left {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .menu-toggle {
            background: none;
            border: none;
            padding: 8px;
            cursor: pointer;
            border-radius: 8px;
            transition: background 0.2s;
        }

        .menu-toggle:hover {
            background: #f3f4f6;
        }

        .content-area {
            flex: 1;
            overflow-y: auto;
            padding: 24px;
        }

        /* Dashboard Cards */
        .welcome-banner {
            background: linear-gradient(135deg, #2563eb 0%, #8b5cf6 100%);
            padding: 32px;
            border-radius: 12px;
            color: white;
            margin-bottom: 24px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .welcome-banner h2 {
            font-size: 28px;
            margin-bottom: 8px;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 24px;
            margin-bottom: 24px;
        }

        .stat-card {
            background: white;
            padding: 24px;
            border-radius: 12px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            border-left: 4px solid;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .stat-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        .stat-card.red { border-color: #ef4444; }
        .stat-card.green { border-color: #10b981; }
        .stat-card.blue { border-color: #3b82f6; }
        .stat-card.orange { border-color: #f97316; }
        .stat-card.purple { border-color: #8b5cf6; }

        .stat-card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 16px;
        }

        .stat-label {
            font-size: 12px;
            font-weight: 600;
            color: #6b7280;
            text-transform: uppercase;
        }

        .stat-value {
            font-size: 36px;
            font-weight: bold;
            color: #1f2937;
        }

        .stat-desc {
            font-size: 12px;
            color: #6b7280;
            margin-top: 4px;
        }

        .icon-wrapper {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .icon-wrapper.red { background: #fee2e2; color: #ef4444; }
        .icon-wrapper.green { background: #d1fae5; color: #10b981; }
        .icon-wrapper.blue { background: #dbeafe; color: #3b82f6; }
        .icon-wrapper.orange { background: #ffedd5; color: #f97316; }
        .icon-wrapper.purple { background: #ede9fe; color: #8b5cf6; }

        /* Quick Actions */
        .quick-actions {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 16px;
            margin-top: 24px;
        }

        .quick-action-btn {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 16px;
            background: white;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.2s;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }

        .quick-action-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        .quick-action-btn.blue { background: #eff6ff; }
        .quick-action-btn.green { background: #f0fdf4; }
        .quick-action-btn.yellow { background: #fefce8; }
        .quick-action-btn.purple { background: #faf5ff; }

        /* Data Table */
        .data-table-container {
            background: white;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }

        .table-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .btn-primary {
            background: #2563eb;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: background 0.2s;
        }

        .btn-primary:hover {
            background: #1d4ed8;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background: #f9fafb;
        }

        th {
            padding: 12px;
            text-align: left;
            font-size: 12px;
            font-weight: 600;
            color: #6b7280;
            text-transform: uppercase;
        }

        td {
            padding: 16px 12px;
            border-top: 1px solid #e5e7eb;
        }

        tbody tr:hover {
            background: #f9fafb;
        }

        .action-buttons {
            display: flex;
            gap: 8px;
        }

        .btn-icon {
            background: none;
            border: none;
            padding: 8px;
            cursor: pointer;
            border-radius: 4px;
            transition: background 0.2s;
        }

        .btn-icon:hover {
            background: #f3f4f6;
        }

        .btn-icon.edit { color: #2563eb; }
        .btn-icon.delete { color: #ef4444; }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.5);
            z-index: 1000;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .modal.open {
            display: flex;
        }

        .modal-content {
            background: white;
            border-radius: 12px;
            max-width: 600px;
            width: 100%;
            max-height: 90vh;
            overflow-y: auto;
        }

        .modal-header {
            padding: 24px;
            border-bottom: 1px solid #e5e7eb;
        }

        .modal-body {
            padding: 24px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: 500;
            margin-bottom: 8px;
            color: #374151;
        }

        .form-control {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 14px;
        }

        .form-control:focus {
            outline: none;
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        textarea.form-control {
            resize: vertical;
            min-height: 100px;
        }

        .modal-footer {
            display: flex;
            gap: 12px;
            padding: 0 24px 24px;
        }

        .btn {
            flex: 1;
            padding: 12px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.2s;
        }

        .btn-save {
            background: #2563eb;
            color: white;
        }

        .btn-save:hover {
            background: #1d4ed8;
        }

        .btn-cancel {
            background: #e5e7eb;
            color: #374151;
        }

        .btn-cancel:hover {
            background: #d1d5db;
        }

        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: #6b7280;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                z-index: 100;
                height: 100vh;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
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

    <script>
        // Data Store
        let dataStore = {
            'yayasan-berita': [],
            'yayasan-kegiatan': [],
            'yayasan-prestasi': [],
            'yayasan-mitra': [],
            'yayasan-eskul': [],
            'yayasan-galeri': [],
            'tk-kegiatan': [],
            'tk-pendaftaran': [],
            'tk-galeri': [],
            'sd-eskul': [],
            'sd-prestasi': [],
            'sd-kegiatan': [],
            'sd-pendaftaran': [],
            'smp-kegiatan': [],
            'smp-prestasi': [],
            'smp-eskul': [],
            'smp-guru': [],
            'smp-galeri': [],
            'smp-testimoni': [],
            'smk-berita': [],
            'smk-kegiatan': [],
            'smk-prestasi': [],
            'smk-eskul': [],
            'smk-guru': [],
            'smk-program': [],
            'smk-mitra': [],
            'smk-galeri': [],
            'smk-testimoni': []
        };

        let activeMenu = 'dashboard';
        let editingId = null;
        let formData = {};
        let openDropdowns = {}; // Simpan state dropdown

        // Menu Structure
        const menuStructure = [
            {
                id: 'dashboard',
                label: 'Dashboard',
                icon: '📊',
                badge: null
            },
            {
                id: 'yayasan',
                label: 'YAYASAN',
                icon: '🏛️',
                badge: { color: 'badge-red', text: 'Yayasan' },
                children: [
                    { id: 'yayasan-berita', label: 'Berita', icon: '📰', type: 'berita' },
                    { id: 'yayasan-kegiatan', label: 'Kegiatan', icon: '📅', type: 'kegiatan' },
                    { id: 'yayasan-prestasi', label: 'Prestasi', icon: '🏆', type: 'prestasi' },
                    { id: 'yayasan-mitra', label: 'Mitra Kerjasama', icon: '🤝', type: 'mitra' },
                    { id: 'yayasan-eskul', label: 'Ekstrakurikuler', icon: '📚', type: 'eskul', hasCategory: true },
                    { id: 'yayasan-galeri', label: 'Galeri', icon: '🖼️', type: 'galeri' }
                ]
            },
            {
                id: 'tk',
                label: 'TK',
                icon: '🎓',
                badge: { color: 'badge-green', text: 'TK' },
                children: [
                    { id: 'tk-kegiatan', label: 'Kegiatan', icon: '📅', type: 'kegiatan' },
                    { id: 'tk-pendaftaran', label: 'Pendaftaran', icon: '👥', type: 'pendaftaran' },
                    { id: 'tk-galeri', label: 'Galeri Foto', icon: '🖼️', type: 'galeri' }
                ]
            },
            {
                id: 'sd',
                label: 'SD',
                icon: '🎓',
                badge: { color: 'badge-blue', text: 'SD' },
                children: [
                    { id: 'sd-eskul', label: 'Ekstrakurikuler', icon: '📚', type: 'eskul' },
                    { id: 'sd-prestasi', label: 'Prestasi', icon: '🏆', type: 'prestasi' },
                    { id: 'sd-kegiatan', label: 'Kegiatan', icon: '📅', type: 'kegiatan' },
                    { id: 'sd-pendaftaran', label: 'Pendaftaran', icon: '👥', type: 'pendaftaran' }
                ]
            },
            {
                id: 'smp',
                label: 'SMP',
                icon: '🎓',
                badge: { color: 'badge-orange', text: 'SMP' },
                children: [
                    { id: 'smp-kegiatan', label: 'Kegiatan', icon: '📅', type: 'kegiatan' },
                    { id: 'smp-prestasi', label: 'Prestasi', icon: '🏆', type: 'prestasi' },
                    { id: 'smp-eskul', label: 'Ekstrakurikuler', icon: '📚', type: 'eskul' },
                    { id: 'smp-guru', label: 'Guru', icon: '👨‍🏫', type: 'guru' },
                    { id: 'smp-galeri', label: 'Galeri', icon: '🖼️', type: 'galeri' },
                    { id: 'smp-testimoni', label: 'Testimoni', icon: '💬', type: 'testimoni' }
                ]
            },
            {
                id: 'smk',
                label: 'SMK',
                icon: '🎓',
                badge: { color: 'badge-purple', text: 'SMK' },
                children: [
                    { id: 'smk-berita', label: 'Berita', icon: '📰', type: 'berita' },
                    { id: 'smk-kegiatan', label: 'Kegiatan', icon: '📅', type: 'kegiatan' },
                    { id: 'smk-prestasi', label: 'Prestasi', icon: '🏆', type: 'prestasi' },
                    { id: 'smk-eskul', label: 'Ekstrakurikuler', icon: '📚', type: 'eskul' },
                    { id: 'smk-guru', label: 'Guru', icon: '👨‍🏫', type: 'guru' },
                    { id: 'smk-program', label: 'Program Keahlian', icon: '🎓', type: 'program' },
                    { id: 'smk-mitra', label: 'Mitra Kerjasama', icon: '🤝', type: 'mitra' },
                    { id: 'smk-galeri', label: 'Galeri', icon: '🖼️', type: 'galeri' },
                    { id: 'smk-testimoni', label: 'Testimoni', icon: '💬', type: 'testimoni' }
                ]
            }
        ];

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            renderMenu();
            renderContent();
            updateDate();
        });

        function updateDate() {
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            document.getElementById('currentDate').textContent = 
                new Date().toLocaleDateString('id-ID', options);
        }

        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('closed');
        }

        function renderMenu() {
            const menuContainer = document.getElementById('sidebarMenu');
            let html = '';

            menuStructure.forEach(item => {
                if (!item.children) {
                    html += `
                        <div class="menu-item">
                            <button class="menu-button ${activeMenu === item.id ? 'active' : ''}" 
                                    onclick="navigateTo('${item.id}')">
                                <div class="menu-button-content">
                                    <span>${item.icon}</span>
                                    <span>${item.label}</span>
                                </div>
                            </button>
                        </div>
                    `;
                } else {
                    const isDropdownOpen = openDropdowns[item.id] || false;
                    html += `
                        <div class="menu-item">
                            <button class="menu-button" onclick="toggleSubmenu('${item.id}')">
                                <div class="menu-button-content">
                                    <span>${item.icon}</span>
                                    <span>${item.label}</span>
                                    ${item.badge ? `<span class="badge ${item.badge.color}">${item.badge.text}</span>` : ''}
                                </div>
                                <span id="arrow-${item.id}">${isDropdownOpen ? '▼' : '▶'}</span>
                            </button>
                            <div class="submenu ${isDropdownOpen ? 'open' : ''}" id="submenu-${item.id}">
                                ${item.children.map(child => `
                                    <div class="submenu-item ${activeMenu === child.id ? 'active' : ''}"
                                         onclick="navigateTo('${child.id}')">
                                        <span>${child.icon}</span>
                                        <span>${child.label}</span>
                                        ${child.hasCategory ? '<span class="badge badge-yellow">Kategori</span>' : ''}
                                    </div>
                                `).join('')}
                            </div>
                        </div>
                    `;
                }
            });

            menuContainer.innerHTML = html;
        }

        function toggleSubmenu(menuId) {
            const submenu = document.getElementById(`submenu-${menuId}`);
            const arrow = document.getElementById(`arrow-${menuId}`);
            const isOpen = submenu.classList.contains('open');
            
            // Close all other submenus
            Object.keys(openDropdowns).forEach(key => {
                if (key !== menuId) {
                    const otherSubmenu = document.getElementById(`submenu-${key}`);
                    const otherArrow = document.getElementById(`arrow-${key}`);
                    if (otherSubmenu && otherArrow) {
                        otherSubmenu.classList.remove('open');
                        otherArrow.textContent = '▶';
                        openDropdowns[key] = false;
                    }
                }
            });
            
            if (!isOpen) {
                submenu.classList.add('open');
                arrow.textContent = '▼';
                openDropdowns[menuId] = true;
            } else {
                submenu.classList.remove('open');
                arrow.textContent = '▶';
                openDropdowns[menuId] = false;
            }
        }

        function navigateTo(menuId) {
            activeMenu = menuId;
            
            // Update active class tanpa render ulang menu
            document.querySelectorAll('.menu-button').forEach(btn => {
                btn.classList.remove('active');
            });
            document.querySelectorAll('.submenu-item').forEach(item => {
                item.classList.remove('active');
            });
            
            // Cari dan aktifkan menu yang dipilih
            const allMenuButtons = document.querySelectorAll('.menu-button');
            const allSubmenuItems = document.querySelectorAll('.submenu-item');
            
            allMenuButtons.forEach(btn => {
                if (btn.getAttribute('onclick') === `navigateTo('${menuId}')`) {
                    btn.classList.add('active');
                }
            });
            
            allSubmenuItems.forEach(item => {
                if (item.getAttribute('onclick') === `navigateTo('${menuId}')`) {
                    item.classList.add('active');
                    // Pastikan parent dropdown tetap terbuka
                    const parentMenu = item.closest('.menu-item');
                    if (parentMenu) {
                        const parentId = parentMenu.querySelector('[id^="submenu-"]')?.id.replace('submenu-', '');
                        if (parentId && !openDropdowns[parentId]) {
                            toggleSubmenu(parentId);
                        }
                    }
                }
            });
            
            renderContent();
        }

        function navigateToAndOpen(menuId, parentMenuId) {
            // Buka dropdown parent terlebih dahulu
            if (!openDropdowns[parentMenuId]) {
                toggleSubmenu(parentMenuId);
            }
            // Tunggu sebentar untuk animasi, lalu navigate
            setTimeout(() => {
                navigateTo(menuId);
            }, 100);
        }

        function renderContent() {
            const contentArea = document.getElementById('contentArea');
            const pageTitle = document.getElementById('pageTitle');

            if (activeMenu === 'dashboard') {
                pageTitle.textContent = 'Dashboard';
                contentArea.innerHTML = renderDashboard();
            } else {
                const menuInfo = getMenuInfo(activeMenu);
                pageTitle.textContent = menuInfo.fullName;
                contentArea.innerHTML = renderDataTable(menuInfo.type);
            }
        }

        function getMenuInfo(menuId) {
            for (const menu of menuStructure) {
                if (menu.children) {
                    const child = menu.children.find(c => c.id === menuId);
                    if (child) {
                        return {
                            type: child.type,
                            fullName: `${menu.label} - ${child.label}`,
                            hasCategory: child.hasCategory || false
                        };
                    }
                }
            }
            return { type: null, fullName: '', hasCategory: false };
        }

        function renderDashboard() {
            const totalYayasan = Object.keys(dataStore).filter(k => k.startsWith('yayasan-')).reduce((acc, k) => acc + dataStore[k].length, 0);
            const totalTK = Object.keys(dataStore).filter(k => k.startsWith('tk-')).reduce((acc, k) => acc + dataStore[k].length, 0);
            const totalSD = Object.keys(dataStore).filter(k => k.startsWith('sd-')).reduce((acc, k) => acc + dataStore[k].length, 0);
            const totalSMP = Object.keys(dataStore).filter(k => k.startsWith('smp-')).reduce((acc, k) => acc + dataStore[k].length, 0);
            const totalSMK = Object.keys(dataStore).filter(k => k.startsWith('smk-')).reduce((acc, k) => acc + dataStore[k].length, 0);

            return `
                <div class="welcome-banner">
                    <h2>Selamat Datang, Admin! 👋</h2>
                    <p style="color: #dbeafe; margin-top: 8px;">Dashboard Manajemen Yayasan Pendidikan Multi-Jenjang</p>
                </div>

                <div class="stats-grid">
                    <div class="stat-card red">
                        <div class="stat-card-header">
                            <div>
                                <div class="stat-label">YAYASAN</div>
                                <div class="stat-value">${totalYayasan}</div>
                                <div class="stat-desc">Total Konten</div>
                            </div>
                            <div class="icon-wrapper red">🏛️</div>
                        </div>
                    </div>

                    <div class="stat-card green">
                        <div class="stat-card-header">
                            <div>
                                <div class="stat-label">TK</div>
                                <div class="stat-value">${totalTK}</div>
                                <div class="stat-desc">Total Konten</div>
                            </div>
                            <div class="icon-wrapper green">🎓</div>
                        </div>
                    </div>

                    <div class="stat-card blue">
                        <div class="stat-card-header">
                            <div>
                                <div class="stat-label">SD</div>
                                <div class="stat-value">${totalSD}</div>
                                <div class="stat-desc">Total Konten</div>
                            </div>
                            <div class="icon-wrapper blue">🎓</div>
                        </div>
                    </div>

                    <div class="stat-card orange">
                        <div class="stat-card-header">
                            <div>
                                <div class="stat-label">SMP</div>
                                <div class="stat-value">${totalSMP}</div>
                                <div class="stat-desc">Total Konten</div>
                            </div>
                            <div class="icon-wrapper orange">🎓</div>
                        </div>
                    </div>

                    <div class="stat-card purple">
                        <div class="stat-card-header">
                            <div>
                                <div class="stat-label">SMK</div>
                                <div class="stat-value">${totalSMK}</div>
                                <div class="stat-desc">Total Konten</div>
                            </div>
                            <div class="icon-wrapper purple">🎓</div>
                        </div>
                    </div>
                </div>

                <div class="quick-actions">
                    <button class="quick-action-btn blue" onclick="navigateToAndOpen('yayasan-berita', 'yayasan')">
                        <span style="font-size: 24px;">📰</span>
                        <span style="font-weight: 500;">Tambah Berita</span>
                    </button>
                    <button class="quick-action-btn green" onclick="navigateToAndOpen('yayasan-kegiatan', 'yayasan')">
                        <span style="font-size: 24px;">📅</span>
                        <span style="font-weight: 500;">Tambah Kegiatan</span>
                    </button>
                    <button class="quick-action-btn yellow" onclick="navigateToAndOpen('yayasan-prestasi', 'yayasan')">
                        <span style="font-size: 24px;">🏆</span>
                        <span style="font-weight: 500;">Tambah Prestasi</span>
                    </button>
                    <button class="quick-action-btn purple" onclick="navigateToAndOpen('yayasan-galeri', 'yayasan')">
                        <span style="font-size: 24px;">🖼️</span>
                        <span style="font-weight: 500;">Tambah Galeri</span>
                    </button>
                </div>
            `;
        }

        function renderDataTable(type) {
            const data = dataStore[activeMenu] || [];
            const menuInfo = getMenuInfo(activeMenu);

            let tableHeaders = '<th>No</th>';
            let tableRows = '';

            if (data.length === 0) {
                return `
                    <div class="data-table-container">
                        <div class="table-header">
                            <h3 style="font-size: 20px; font-weight: bold;">Kelola ${menuInfo.fullName}</h3>
                            <button class="btn-primary" onclick="openModal()">
                                <span>+</span> Tambah Data
                            </button>
                        </div>
                        <div class="empty-state">
                            <div style="font-size: 48px; margin-bottom: 16px;">📋</div>
                            <p style="font-size: 16px; color: #6b7280;">Belum ada data</p>
                            <p style="font-size: 14px; color: #9ca3af; margin-top: 8px;">Klik tombol "Tambah Data" untuk menambahkan</p>
                        </div>
                    </div>
                `;
            }

            // Generate table headers based on type
            if (type === 'berita' || type === 'kegiatan' || type === 'prestasi') {
                tableHeaders += '<th>Judul</th><th>Tanggal</th>';
            } else if (type === 'pendaftaran') {
                tableHeaders += '<th>Nama</th><th>Asal Sekolah</th><th>No. HP</th>';
            } else if (type === 'eskul') {
                if (menuInfo.hasCategory) tableHeaders += '<th>Kategori</th>';
                tableHeaders += '<th>Nama</th>';
            } else if (type === 'guru') {
                tableHeaders += '<th>Nama</th><th>NIP</th><th>Mata Pelajaran</th>';
            } else if (type === 'galeri') {
                tableHeaders += '<th>Judul</th><th>Tanggal</th>';
            }
            tableHeaders += '<th style="text-align: right;">Aksi</th>';

            // Generate table rows
            data.forEach((item, index) => {
                let row = `<tr><td>${index + 1}</td>`;
                
                if (type === 'berita' || type === 'kegiatan' || type === 'prestasi') {
                    row += `<td>${item.judul}</td><td>${item.tanggal}</td>`;
                } else if (type === 'pendaftaran') {
                    row += `<td>${item.nama}</td><td>${item.asal_sekolah}</td><td>${item.no_hp}</td>`;
                } else if (type === 'eskul') {
                    if (menuInfo.hasCategory) row += `<td><span class="badge badge-blue">${item.kategori}</span></td>`;
                    row += `<td>${item.judul}</td>`;
                } else if (type === 'guru') {
                    row += `<td>${item.nama}</td><td>${item.nip}</td><td>${item.mata_pelajaran}</td>`;
                } else if (type === 'galeri') {
                    row += `<td>${item.judul}</td><td>${item.tanggal}</td>`;
                }

                row += `
                    <td style="text-align: right;">
                        <div class="action-buttons">
                            <button class="btn-icon edit" onclick="openModal(${item.id})">✏️</button>
                            <button class="btn-icon delete" onclick="deleteData(${item.id})">🗑️</button>
                        </div>
                    </td>
                </tr>`;
                
                tableRows += row;
            });

            return `
                <div class="data-table-container">
                    <div class="table-header">
                        <h3 style="font-size: 20px; font-weight: bold;">Kelola ${menuInfo.fullName}</h3>
                        <button class="btn-primary" onclick="openModal()">
                            <span>+</span> Tambah Data
                        </button>
                    </div>
                    <table>
                        <thead>
                            <tr>${tableHeaders}</tr>
                        </thead>
                        <tbody>
                            ${tableRows}
                        </tbody>
                    </table>
                </div>
            `;
        }

        function openModal(id = null) {
            editingId = id;
            const modal = document.getElementById('dataModal');
            const modalTitle = document.getElementById('modalTitle');
            const dataForm = document.getElementById('dataForm');
            
            modalTitle.textContent = id ? 'Edit Data' : 'Tambah Data';
            
            if (id) {
                const data = dataStore[activeMenu].find(item => item.id === id);
                formData = data || {};
            } else {
                formData = {};
            }

            // Generate form fields
            const menuInfo = getMenuInfo(activeMenu);
            const fields = getFormFields(menuInfo.type, menuInfo.hasCategory);
            
            let formHTML = '';
            fields.forEach(field => {
                formHTML += `
                    <div class="form-group">
                        <label>${field.label} ${field.required ? '<span style="color: #ef4444;">*</span>' : ''}</label>
                        ${field.type === 'textarea' ? 
                            `<textarea class="form-control" name="${field.name}" rows="4">${formData[field.name] || ''}</textarea>` :
                        field.type === 'select' ?
                            `<select class="form-control" name="${field.name}">
                                <option value="">Pilih ${field.label}</option>
                                ${field.options.map(opt => `<option value="${opt}" ${formData[field.name] === opt ? 'selected' : ''}>${opt}</option>`).join('')}
                            </select>` :
                        field.type === 'file' ?
                            `<input type="file" class="form-control" name="${field.name}" accept="image/*">
                            ${formData[field.name] ? `<img src="${formData[field.name]}" style="margin-top: 12px; max-height: 120px; border-radius: 8px;">` : ''}` :
                            `<input type="${field.type}" class="form-control" name="${field.name}" value="${formData[field.name] || ''}">`
                        }
                    </div>
                `;
            });

            dataForm.innerHTML = formHTML;
            modal.classList.add('open');
        }

        function closeModal() {
            document.getElementById('dataModal').classList.remove('open');
            editingId = null;
            formData = {};
        }

        function getFormFields(type, hasCategory) {
            switch(type) {
                case 'berita':
                case 'kegiatan':
                case 'prestasi':
                    return [
                        { name: 'judul', label: 'Judul', type: 'text', required: true },
                        { name: 'deskripsi', label: 'Deskripsi', type: 'textarea', required: true },
                        { name: 'gambar', label: 'Gambar', type: 'file', required: true },
                        { name: 'tanggal', label: 'Tanggal', type: 'date', required: true }
                    ];
                case 'pendaftaran':
                    return [
                        { name: 'nama', label: 'Nama Lengkap', type: 'text', required: true },
                        { name: 'alamat', label: 'Alamat', type: 'textarea', required: true },
                        { name: 'asal_sekolah', label: 'Asal Sekolah', type: 'text', required: true },
                        { name: 'no_hp', label: 'No. HP', type: 'tel', required: true },
                        { name: 'jurusan', label: 'Jurusan', type: 'text', required: true }
                    ];
                case 'eskul':
                    const fields = [
                        { name: 'judul', label: 'Nama Ekstrakurikuler', type: 'text', required: true },
                        { name: 'deskripsi', label: 'Deskripsi', type: 'textarea', required: true },
                        { name: 'gambar', label: 'Gambar', type: 'file', required: true }
                    ];
                    if (hasCategory) {
                        fields.unshift({
                            name: 'kategori',
                            label: 'Kategori',
                            type: 'select',
                            required: true,
                            options: ['Olahraga', 'Seni', 'Akademik', 'Pembentukan Karakter']
                        });
                    }
                    return fields;
                case 'guru':
                    return [
                        { name: 'nama', label: 'Nama Guru', type: 'text', required: true },
                        { name: 'nip', label: 'NIP', type: 'text', required: true },
                        { name: 'mata_pelajaran', label: 'Mata Pelajaran', type: 'text', required: true },
                        { name: 'foto', label: 'Foto', type: 'file', required: true }
                    ];
                case 'galeri':
                    return [
                        { name: 'judul', label: 'Judul Foto', type: 'text', required: true },
                        { name: 'gambar', label: 'Gambar', type: 'file', required: true },
                        { name: 'tanggal', label: 'Tanggal', type: 'date', required: true }
                    ];
                default:
                    return [];
            }
        }

        function saveData() {
            const form = document.getElementById('dataForm');
            const formElements = form.elements;
            
            // Collect form data
            for (let element of formElements) {
                if (element.type === 'file') {
                    const file = element.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onloadend = function() {
                            formData[element.name] = reader.result;
                            finalizeSave();
                        };
                        reader.readAsDataURL(file);
                        return; // Wait for file reading
                    }
                } else {
                    formData[element.name] = element.value;
                }
            }
            
            finalizeSave();
        }

        function finalizeSave() {
            const newData = {
                ...formData,
                id: editingId || Date.now(),
                createdAt: editingId ? formData.createdAt : new Date().toISOString()
            };

            if (editingId) {
                dataStore[activeMenu] = dataStore[activeMenu].map(item => 
                    item.id === editingId ? newData : item
                );
            } else {
                dataStore[activeMenu].push(newData);
            }

            closeModal();
            renderContent();
        }

        function deleteData(id) {
            if (confirm('Yakin ingin menghapus data ini?')) {
                dataStore[activeMenu] = dataStore[activeMenu].filter(item => item.id !== id);
                renderContent();
            }
        }
    </script>
</body>
</html>