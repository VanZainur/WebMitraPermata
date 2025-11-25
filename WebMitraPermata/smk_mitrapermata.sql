-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Nov 2025 pada 18.50
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smk_mitrapermata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `jenjang` enum('smk','smp','sd','tk') NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `jenjang`, `judul`, `deskripsi`, `gambar`, `tanggal`) VALUES
(1, 'smk', 'Pendaftaran Siswa Baru 2025/2026 Resmi Dibuka', 'SMK Mitra Permata membuka pendaftaran siswa baru untuk tahun ajaran 2025/2026. Segera daftarkan putra-putri Anda dan raih masa depan cerah bersama kami!', 'spnb.png', '2025-02-10'),
(2, 'smk', 'Peringatan HUT RI dengan Berbagai Lomba Menarik', 'Kemeriahan HUT RI ke-80 terasa di lingkungan SMK Mitra Permata dengan berbagai kompetisi seru.', 'hut ri.webp', '2025-02-08'),
(3, 'smk', 'Juara 1 Lomba Badminton Tingkat Nasional', 'Atlet badminton SMK Mitra Permata berhasil meraih juara pertama dalam turnamen bergengsi tingkat nasional.', 'Juara 1 volly.png', '2025-02-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `jenjang` enum('smk','smp','sd','tk') NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `jenjang`, `judul`, `deskripsi`, `gambar`, `tanggal`) VALUES
(1, 'smk', 'Upacara Hari Pahlawan', 'Pelaksanaan upacara bendera dalam rangka memperingati Hari Pahlawan Nasional.', 'pramuka.jpg', '2025-01-15'),
(3, 'smk', 'Class Meeting 2025', 'Kompetisi olahraga dan seni antar kelas untuk mempererat persaudaraan.', 'futsal.jpg', '2025-01-25'),
(4, 'smk', 'Kunjungan Industri', 'Tes', 'kunjungan industri.jpg', '2025-01-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL,
  `jenjang` enum('smk','smp','sd','tk') NOT NULL,
  `nama` varchar(150) NOT NULL,
  `alamat` text DEFAULT NULL,
  `asal_sekolah` varchar(150) DEFAULT NULL,
  `no_hp` varchar(20) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(11) NOT NULL,
  `jenjang` enum('smk','smp','sd','tk') NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `prestasi`
--

INSERT INTO `prestasi` (`id`, `jenjang`, `judul`, `deskripsi`, `gambar`, `tanggal`) VALUES
(1, 'smk', 'TES 123', 'Siswa Mitra Permata Meraih Juara 1 Lomba Badminton dalam Kejuaraan Kota Tangerang Selatan 2025.', 'Juara 1 Badminton.png', '2025-01-15'),
(2, 'smk', 'Juara 1 Volly Putra', 'Siswa SMK Mitra Permata Meraih Juara 1 Lomba Volly OSIS CUP di SMAN 4 Kabupaten Tangerang.', 'Juara 1 Voly.png', '2025-01-20'),
(3, 'smk', 'Juara 3 Volly Putra', 'Siswa Mitra Permata Meraih Juara 3 Lomba Volly SLTA Se-Banten dalam Piala Rektor UIN SMH BANTEN 2025.', 'Juara 3 Voly.png', '2025-01-25'),
(4, 'smk', 'Juara 1 Lomba Futsal', 'Tim Futsal SMK Mitra Permata berhasil menjadi juara dalam turnamen antar sekolah tingkat provinsi.', 'Juara 1 Badminton.png', '2025-02-01'),
(5, 'smk', 'Juara 2 Lomba Cerdas Cermat', 'Siswa SMK Mitra Permata meraih juara 2 dalam lomba cerdas cermat tingkat kabupaten.', 'Juara 1 Voly.png', '2025-02-10'),
(6, 'smk', 'Juara 1 Lomba Seni Tari', 'Kelompok seni tari SMK Mitra Permata meraih juara 1 dalam festival seni budaya daerah.', 'Juara 3 Voly.png', '2025-02-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','superadmin') NOT NULL DEFAULT 'admin',
  `jenjang` enum('smk','smp','sd','tk') DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `jenjang`, `created_at`) VALUES
(1, 'admin_smk', '$2y$10$uY0Qy3S6Us9W0p6uE07MjOBaZukWvIYQoPnFro99rmQgLyVNR7n1i', 'admin', 'smk', '2025-11-25 23:36:29'),
(2, 'admin_smp', '$2y$10$uY0Qy3S6Us9W0p6uE07MjOBaZukWvIYQoPnFro99rmQgLyVNR7n1i', 'admin', 'smp', '2025-11-25 23:36:29'),
(3, 'superadmin', '$2y$10$uY0Qy3S6Us9W0p6uE07MjOBaZukWvIYQoPnFro99rmQgLyVNR7n1i', 'superadmin', NULL, '2025-11-25 23:36:29');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
