// Admin Dashboard JavaScript

// Data Store
let dataStore = {
    'yayasan-berita': [],
    'yayasan-kegiatan': [],
    'yayasan-prestasi': [],
    'yayasan-mitra': [],
    'yayasan-eskul': [],
    'yayasan-galeri': [],
    'yayasan-pendaftaran': [],
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
    'smp-pendaftaran': [],
    'smk-berita': [],
    'smk-kegiatan': [],
    'smk-prestasi': [],
    'smk-eskul': [],
    'smk-guru': [],
    'smk-program': [],
    'smk-mitra': [],
    'smk-galeri': [],
    'smk-testimoni': [],
    'smk-pendaftaran': []
};

let activeMenu = 'dashboard';
let editingId = null;
let formData = {};
let openDropdowns = {}; // Simpan state dropdown
let isLoadingData = false; // Flag untuk loading state

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
            { id: 'yayasan-galeri', label: 'Galeri', icon: '🖼️', type: 'galeri' },
        ]
    },
    {
        id: 'tk',
        label: 'TK',
        icon: '🎓',
        badge: { color: 'badge-green', text: 'TK' },
        children: [
            { id: 'tk-kegiatan', label: 'Kegiatan', icon: '📅', type: 'kegiatan' },
            { id: 'tk-galeri', label: 'Galeri Foto', icon: '🖼️', type: 'galeri' },
            { id: 'tk-pendaftaran', label: 'Pendaftaran', icon: '👥', type: 'pendaftaran' }
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
            { id: 'smp-testimoni', label: 'Testimoni', icon: '💬', type: 'testimoni' },
            { id: 'smp-pendaftaran', label: 'Pendaftaran', icon: '👥', type: 'pendaftaran' }
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
            { id: 'smk-testimoni', label: 'Testimoni', icon: '💬', type: 'testimoni' },
            { id: 'smk-pendaftaran', label: 'Pendaftaran', icon: '👥', type: 'pendaftaran' }
        ]
    }
];

// Initialize
document.addEventListener('DOMContentLoaded', function() {
    renderMenu();
    renderContent();
    updateDate();
});

/**
 * Fetch data pendaftaran dari database
 */
async function fetchPendaftaranFromDB(jenjang) {
    try {
        isLoadingData = true;
        
        // Ambil base URL dari window location
        const baseUrl = window.location.origin;
        const response = await fetch(`${baseUrl}/admin/api/pendaftaran/${jenjang}`);
        
        if (!response.ok) {
            throw new Error('Gagal mengambil data');
        }
        
        const result = await response.json();
        
        if (result.success && result.data) {
            // Update dataStore dengan data dari database
            dataStore[activeMenu] = result.data.map(item => ({
                id: item.id,
                nama: item.nama,
                alamat: item.alamat,
                asal_sekolah: item.asal_sekolah,
                no_hp: item.no_hp,
                jurusan: item.jurusan,
                created_at: item.created_at
            }));
            
            return true;
        }
        
        return false;
    } catch (error) {
        console.error('Error fetching data:', error);
        alert('Gagal mengambil data dari database');
        return false;
    } finally {
        isLoadingData = false;
    }
}

function updateDate() {
    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    document.getElementById('currentDate').textContent = 
        new Date().toLocaleDateString('id-ID', options);
}

/**
 * Format tanggal ke format Indonesia
 * Input: "2024-01-15 10:30:00" 
 * Output: "15 Jan 2024"
 */
function formatTanggal(dateString) {
    if (!dateString) return '-';
    
    const date = new Date(dateString);
    const options = { year: 'numeric', month: 'short', day: 'numeric' };
    return date.toLocaleDateString('id-ID', options);
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
        
        // Jika menu adalah pendaftaran, fetch data dari database
        if (menuInfo.type === 'pendaftaran') {
            // Tampilkan loading dulu
            contentArea.innerHTML = `
                <div class="data-table-container">
                    <div style="text-align: center; padding: 60px 20px;">
                        <div style="font-size: 48px; margin-bottom: 16px;">⏳</div>
                        <p style="font-size: 16px; color: #6b7280;">Memuat data...</p>
                    </div>
                </div>
            `;
            
            // Ambil jenjang dari activeMenu (misal: 'smk-pendaftaran' -> 'smk')
            const jenjang = activeMenu.split('-')[0];
            
            // Fetch data dari database
            fetchPendaftaranFromDB(jenjang).then(success => {
                if (success || dataStore[activeMenu].length >= 0) {
                    contentArea.innerHTML = renderDataTable(menuInfo.type);
                } else {
                    contentArea.innerHTML = `
                        <div class="data-table-container">
                            <div style="text-align: center; padding: 60px 20px; color: #ef4444;">
                                <div style="font-size: 48px; margin-bottom: 16px;">❌</div>
                                <p style="font-size: 16px;">Gagal memuat data dari database</p>
                            </div>
                        </div>
                    `;
                }
            });
        } else {
            // Menu lain tetap pakai dataStore lokal
            contentArea.innerHTML = renderDataTable(menuInfo.type);
        }
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
        tableHeaders += '<th>Nama</th><th>Alamat</th><th>Asal Sekolah</th><th>No. HP</th><th>Jurusan</th><th>Tanggal Daftar</th>';
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
        // Gunakan nomor urut (index + 1) bukan ID dari database
        let row = `<tr><td>${index + 1}</td>`;
        
        if (type === 'berita' || type === 'kegiatan' || type === 'prestasi') {
            row += `<td>${item.judul}</td><td>${item.tanggal}</td>`;
        } else if (type === 'pendaftaran') {
            // Format tanggal created_at
            const tanggalDaftar = item.created_at ? formatTanggal(item.created_at) : '-';
            row += `
                <td>${item.nama || '-'}</td>
                <td>${item.alamat || '-'}</td>
                <td>${item.asal_sekolah || '-'}</td>
                <td>${item.no_hp || '-'}</td>
                <td>${item.jurusan || '-'}</td>
                <td>${tanggalDaftar}</td>
            `;
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
                    <button class="btn-icon edit" onclick="openModal(${item.id})" title="Edit">✏️</button>
                    <button class="btn-icon delete" onclick="deleteData(${item.id})" title="Hapus">🗑️</button>
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
                { 
                    name: 'jurusan', 
                    label: 'Jurusan', 
                    type: 'select', 
                    required: true,
                    options: ['Teknik Komputer Jaringan', 'Teknik Kendaraan Ringan']
                }
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