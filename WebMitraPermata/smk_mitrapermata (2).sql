-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Des 2025 pada 20.31
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
(1, 'smk', 'Pendaftaran Siswa Baru 2025/2026 Resmi Dibuka', 'SMK Mitra Permata membuka Penerimaan Peserta Didik Baru (PPDB) untuk Tahun Ajaran 2025/2026 dengan sistem pendaftaran yang mudah dan transparan. Calon peserta didik dapat melakukan pendaftaran secara online melalui website resmi sekolah atau datang langsung ke sekretariat PPDB di kampus SMK Mitra Permata. Pendaftaran dibuka untuk lulusan SMP/MTs yang ingin melanjutkan pendidikan kejuruan dengan berbagai pilihan jurusan/kompetensi keahlian yang tersedia. Proses seleksi dilakukan secara objektif berdasarkan nilai rapor, prestasi akademik dan non-akademik, serta hasil tes masuk. SMK Mitra Permata menawarkan fasilitas pembelajaran modern, tenaga pengajar profesional, program magang industri, serta berbagai kegiatan ekstrakurikuler untuk mengembangkan potensi siswa secara maksimal. Informasi lengkap mengenai jadwal pendaftaran, persyaratan, biaya pendidikan, dan jalur pendaftaran dapat diakses melalui website resmi atau menghubungi kontak yang tersedia. Mari bergabung bersama SMK Mitra Permata untuk meraih masa depan gemilang melalui pendidikan kejuruan yang berkualitas!', '1764950571_520535f32746e00c1514.png', '2025-12-05'),
(2, 'smk', 'Tips Sukses Menghadapi Ujian Akhir Semester', 'Persiapan matang adalah kunci kesuksesan. Berikut tips dan strategi belajar efektif dari para guru untuk menghadapi Ujian Akhir Semester dengan percaya diri dan meraih hasil maksimal. Pertama, buatlah jadwal belajar yang teratur dengan membagi waktu untuk setiap mata pelajaran secara proporsional, prioritaskan materi yang dianggap sulit terlebih dahulu. Kedua, gunakan metode belajar yang sesuai dengan gaya belajar masing-masing, seperti membuat ringkasan, mind mapping, atau belajar kelompok untuk saling berdiskusi. Ketiga, jaga kesehatan dengan istirahat cukup, konsumsi makanan bergizi, dan hindari begadang berlebihan yang justru dapat menurunkan konsentrasi. Keempat, latihan soal-soal ujian tahun sebelumnya untuk memahami pola soal dan mengukur kemampuan diri. Kelima, manfaatkan waktu konsultasi dengan guru untuk menanyakan materi yang belum dipahami. Terakhir, tetap tenang dan berdoa sebelum ujian, percaya pada kemampuan diri sendiri, dan baca soal dengan teliti sebelum menjawab. Ingat, ujian bukan hanya mengukur pengetahuan tetapi juga kedisiplinan dan kesiapan mental, jadi persiapkan diri sebaik mungkin dan raih kesuksesan', '1764950702_d31037ab035cd4c2f794.png', '2025-12-05'),
(3, 'smk', 'Juara 1 Lomba Badminton Tingkat Nasional', 'Prestasi monumental berhasil diukir oleh Siswi Mitra Permata dengan meraih juara 1 dalam lomba badminton tingkat nasional yang mempertemukan atlet-atlet terbaik dari seluruh Indonesia. Pencapaian luar biasa ini menempatkan nama Mitra Permata di peta prestasi olahraga nasional dan membuktikan kualitas pembinaan atlet yang dilakukan sekolah. Dalam perjalanan menuju podium tertinggi, perwakilan Mitra Permata harus menghadapi pertandingan-pertandingan berat melawan pemain-pemain unggulan dari berbagai provinsi, namun dengan teknik permainan yang matang, mental juara yang kuat, dan stamina yang prima, sang atlet berhasil tampil dominan hingga menyabet gelar juara pertama. Kemenangan di tingkat nasional ini merupakan buah dari latihan keras bertahun-tahun, dedikasi tinggi, bimbingan pelatih profesional, serta dukungan penuh dari keluarga besar sekolah. Selamat kepada sang juara nasional dan seluruh tim pendukung, prestasi gemilang ini tidak hanya membanggakan sekolah tetapi juga mengharumkan nama daerah, semoga menjadi inspirasi bagi generasi muda untuk terus berprestasi dan membawa Indonesia berjaya di kancah internasional', '1764707378_3126e9dd20ae7f11cf2d.jpg', '2025-02-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `jenjang` varchar(10) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `jabatan` varchar(150) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `jenjang`, `nama`, `jabatan`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'smk', 'Habibi', 'Guru', '1764738454_32f797869f78836f3b90.png', '2025-12-02 21:54:43', '2025-12-05 09:42:43'),
(2, 'smk', 'Erika Juli Agustin', 'Guru', '1764952927_bd24fe6f5a629c919dbb.png', '2025-12-05 09:42:07', '2025-12-05 09:42:07'),
(3, 'smk', 'Siti Nurjannah', 'Guru', '1764953066_fd6d35d5ce1ef6db83bf.png', '2025-12-05 09:44:26', '2025-12-05 09:44:26'),
(4, 'smk', 'Vita Nuraina', 'Guru', '1764953098_c0af57dd46a4d18670f8.png', '2025-12-05 09:44:58', '2025-12-05 09:45:09');

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
(1, 'smk', 'Peringatan HUT RI ke-80 dengan Berbagai Lomba Menarik', 'Kemeriahan HUT RI ke-80 terasa di lingkungan SMK Mitra Permata dengan berbagai kompetisi seru dan kegiatan yang penuh semangat nasionalisme. Rangkaian acara peringatan kemerdekaan ini diselenggarakan dengan meriah melalui berbagai lomba tradisional seperti balap karung, tarik tambang, makan kerupuk, panjat pinang, dan lomba kreativitas lainnya yang diikuti oleh seluruh siswa, guru, dan staff sekolah. Antusiasme peserta sangat tinggi dalam setiap pertandingan, menciptakan suasana kebersamaan dan kekeluargaan yang erat di lingkungan sekolah. Selain lomba, kegiatan ini juga dimeriahkan dengan upacara bendera, pentas seni, dan dekorasi bernuansa merah putih yang menghiasi seluruh area sekolah. Melalui perayaan HUT RI ini, diharapkan dapat menumbuhkan rasa cinta tanah air, mempererat persaudaraan antar warga sekolah, serta mengingatkan generasi muda akan pentingnya nilai-nilai perjuangan dan semangat kemerdekaan yang harus terus dijaga dan dilestarikan.', '1764950351_a6562fc22e98b6b5d703.webp', '2025-12-05'),
(3, 'smk', 'Upacara Peringatan HUT RI ke-80', 'SMK Mitra Permata menggelar Upacara Bendera dalam rangka memperingati HUT Kemerdekaan Republik Indonesia ke-80 pada tanggal 17 Agustus 2025. Upacara berlangsung khidmat dan penuh kekhusyukan dengan diikuti oleh seluruh siswa, guru, dan staff sekolah yang mengenakan pakaian adat serta atribut merah putih. Dalam upacara ini, dibacakan teks Proklamasi, Pembacaan UUD 1945, serta sambutan dari Kepala Sekolah yang mengingatkan akan pentingnya makna kemerdekaan dan perjuangan para pahlawan bangsa. Suasana penuh haru dan nasionalisme terpancar dari wajah para peserta upacara, terutama saat pengibaran bendera merah putih diiringi lagu Indonesia Raya yang dinyanyikan dengan penuh semangat. Melalui upacara bendera ini, diharapkan dapat menumbuhkan jiwa patriotisme, rasa syukur atas kemerdekaan, serta memupuk kesadaran generasi muda untuk terus berkontribusi dalam membangun Indonesia yang lebih maju dan sejahtera.', '1764950447_a6438da2cfc0c8f7c0fd.jpg', '2025-08-20'),
(4, 'smk', 'Kunjungan Industri ke Perusahaan Teknologi Terkemuka', 'Siswa-siswi kelas 12 TKJ Mitra Permata melaksanakan kegiatan Kunjungan Industri ke perusahaan teknologi pada tanggal 12 Juni 2025 sebagai bagian dari program persiapan memasuki dunia kerja. Kegiatan ini bertujuan untuk memberikan gambaran nyata tentang dinamika industri teknologi, mulai dari proses pengembangan produk, sistem kerja tim, hingga budaya kerja profesional di era digital. Para siswa berkesempatan untuk mengobservasi langsung berbagai divisi seperti IT development, product management, dan quality assurance, serta berinteraksi dengan para praktisi teknologi yang berpengalaman. Melalui kunjungan ini, siswa mendapatkan wawasan berharga tentang peluang karir di bidang teknologi, skill yang dibutuhkan, serta tantangan dan inovasi dalam industri digital yang terus berkembang pesat. Diharapkan pengalaman lapangan ini dapat memotivasi siswa untuk lebih siap menghadapi dunia kerja, menentukan pilihan karir yang tepat, serta menginspirasi mereka untuk terus mengembangkan kompetensi di bidang teknologi.', '1764950235_e6832cf8d34d874b2f76.jpg', '2025-01-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL,
  `jenjang` enum('smk','smp','sd','tk') NOT NULL,
  `nama` varchar(150) NOT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `nama_ayah` varchar(150) DEFAULT NULL,
  `nama_ibu` varchar(150) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `asal_sekolah` varchar(150) DEFAULT NULL,
  `no_hp` varchar(20) NOT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `jenjang`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `nama_ayah`, `nama_ibu`, `agama`, `alamat`, `asal_sekolah`, `no_hp`, `jurusan`, `created_at`) VALUES
(1, 'smk', 'Ahmad Fauzan', NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Melati No. 12, Jakarta', 'SMPN 5 Jakarta', '081200000001', 'Teknik Komputer dan Jaringan', '2025-01-10 08:30:00'),
(2, 'smk', 'Budi Santoso', NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Kenanga No. 7, Bandung', 'SMPN 3 Bandung', '081200000002', 'Teknik Kendaraan Ringan', '2025-01-10 08:35:00'),
(3, 'smk', 'Citra Ayu', NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Mawar No. 21, Surabaya', 'SMPN 12 Surabaya', '081200000003', 'Teknik Komputer dan Jaringan', '2025-01-10 08:40:00'),
(4, 'smk', 'Dewi Rahma', NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Anggrek No. 15, Bekasi', 'SMPN 7 Bekasi', '081200000004', 'Teknik Kendaraan Ringan', '2025-01-10 08:45:00'),
(5, 'smk', 'Eko Prasetyo', NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Dahlia No. 9, Depok', 'SMPN 2 Depok', '081200000005', 'Teknik Komputer dan Jaringan', '2025-01-10 08:50:00'),
(6, 'smk', 'Farhan Maulana', NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Cempaka No. 6, Bogor', 'SMPN 4 Bogor', '081200000006', 'Teknik Kendaraan Ringan', '2025-01-10 08:55:00'),
(7, 'smk', 'Gita Lestari', NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Seruni No. 30, Tangerang', 'SMPN 8 Tangerang', '081200000007', 'Teknik Komputer dan Jaringan', '2025-01-10 09:00:00'),
(8, 'smk', 'Hendra Wijaya', NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Flamboyan No. 11, Malang', 'SMPN 10 Malang', '081200000008', 'Teknik Kendaraan Ringan', '2025-01-10 09:05:00'),
(9, 'smk', 'Indah Permata', NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Kamboja No. 17, Semarang', 'SMPN 6 Semarang', '081200000009', 'Teknik Komputer dan Jaringan', '2025-01-10 09:10:00'),
(10, 'smk', 'Joko Saputra', NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Teratai No. 25, Yogyakarta', 'SMPN 1 Yogyakarta', '081200000010', 'Teknik Kendaraan Ringan', '2025-01-10 09:15:00');

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
(1, 'smk', 'Juara 2 & 3 Lomba Volly', 'Prestasi membanggakan kembali diraih oleh Siswa dan Siswi Mitra Permata dalam ajang Olimpiade Olahraga Siswa Nasional (O2SN) cabang voli antar gugus se-Kabupaten Tangerang. Tim voli putra berhasil meraih juara 2, sementara tim voli putri mempersembahkan juara 3 dalam kompetisi bergengsi ini. Pencapaian ini merupakan hasil dari kerja keras, latihan intensif, dan semangat pantang menyerah yang ditunjukkan oleh para atlet muda, serta bimbingan dari pelatih yang berpengalaman. Selamat kepada seluruh atlet dan tim pendukung, semoga prestasi ini menjadi motivasi untuk terus mengharumkan nama sekolah di kompetisi-kompetisi mendatang.', '1764949418_120d4fb3579572d0817e.png', '2025-12-05'),
(2, 'smk', 'Juara 1 Lomba Volly', 'Prestasi gemilang berhasil ditorehkan oleh Siswa Mitra Permata dengan meraih juara 1 dalam lomba voli OSIS CUP yang diselenggarakan oleh SMAN 4 Kabupaten Tangerang. Dalam turnamen yang diikuti oleh berbagai sekolah menengah atas se-Kabupaten Tangerang ini, tim voli Mitra Permata menunjukkan performa luar biasa dan berhasil mengalahkan tim-tim tangguh lainnya hingga meraih posisi juara pertama. Kemenangan ini tidak lepas dari kerja sama tim yang solid, strategi permainan yang matang, serta dukungan penuh dari pelatih dan seluruh pihak sekolah. Selamat kepada para atlet yang telah berjuang keras dan mengharumkan nama Mitra Permata, semoga pencapaian ini menjadi awal dari prestasi-prestasi gemilang lainnya di masa mendatang.', '1764949378_570a89c49bcd974961e4.png', '2025-12-05'),
(3, 'smk', 'Juara 1 Lomba Badminton', 'Prestasi membanggakan kembali ditorehkan oleh Siswa Mitra Permata dengan meraih juara 1 dalam lomba badminton Olimpiade Olahraga Siswa Nasional (O2SN) tingkat SMK antar gugus se-Kabupaten Tangerang. Dalam kompetisi yang mempertemukan atlet-atlet terbaik dari berbagai SMK se-Kabupaten Tangerang, perwakilan Mitra Permata berhasil menunjukkan kemampuan teknik, ketahanan fisik, dan mental juara yang luar biasa. Pencapaian ini merupakan buah dari latihan rutin yang disiplin, bimbingan pelatih yang berdedikasi, serta semangat pantang menyerah untuk memberikan yang terbaik. Selamat kepada sang juara dan seluruh tim pendukung yang telah berkontribusi dalam meraih prestasi gemilang ini, semoga menjadi inspirasi bagi siswa-siswi lainnya untuk terus berprestasi dan mengharumkan nama Mitra Permata di tingkat yang lebih tinggi.', '1764949344_9a73b632affa54185394.png', '2025-12-05'),
(4, 'smk', 'Juara 3 Lomba Voly', 'Prestasi luar biasa berhasil diraih oleh Siswa Mitra Permata dengan meraih juara 3 dalam lomba voli tingkat SLTA se-Banten yang digelar dalam ajang bergengsi Piala Rektor UIN Sultan Maulana Hasanuddin Banten 2025. Kompetisi yang mempertemukan tim-tim terbaik dari seluruh sekolah menengah atas di Provinsi Banten ini menjadi ajang pembuktian kualitas dan kemampuan para atlet muda Mitra Permata di tingkat yang lebih luas. Dengan menghadapi lawan-lawan tangguh dari berbagai daerah di Banten, tim voli Mitra Permata menampilkan permainan yang kompak, strategi yang matang, serta sportivitas tinggi hingga berhasil menembus podium juara. Selamat kepada seluruh atlet, pelatih, dan tim pendukung atas dedikasi dan kerja keras yang luar biasa, semoga pencapaian di tingkat provinsi ini menjadi motivasi untuk terus mengukir prestasi gemilang dan membawa nama Mitra Permata ke kancah kompetisi yang lebih tinggi.', '1764949314_213f8036d2fc5278382d.png', '2025-12-05'),
(5, 'smk', 'Juara 2 Lomba Badminton', 'Prestasi spektakuler berhasil ditorehkan oleh Siswa Mitra Permata dengan meraih juara 2 dalam ajang bergengsi BNI Sirkuit Nasional NTB 2025. Kompetisi badminton tingkat nasional ini mempertemukan para atlet muda terbaik dari seluruh Indonesia, menjadikan pencapaian ini sebagai bukti nyata kualitas dan dedikasi atlet Mitra Permata di kancah nasional. Menghadapi persaingan ketat dari pemain-pemain handal se-Indonesia, perwakilan Mitra Permata menunjukkan performa luar biasa dengan teknik permainan yang apik, stamina yang prima, dan mental juara yang tangguh hingga berhasil meraih posisi runner-up. Pencapaian di tingkat nasional ini merupakan hasil dari latihan intensif, bimbingan pelatih profesional, serta dukungan penuh dari keluarga besar sekolah. Selamat kepada sang juara dan seluruh tim pendukung, prestasi ini membuktikan bahwa Mitra Permata mampu bersaing dan berprestasi di level tertinggi, semoga menjadi inspirasi untuk terus mengharumkan nama bangsa di kompetisi-kompetisi internasional mendatang.', '1764949267_b53bb6a850f9567ce47b.png', '2025-12-05'),
(6, 'smk', 'Juara 1 Lomba Badminton', 'Prestasi gemilang kembali ditorehkan oleh Siswa Mitra Permata dengan meraih juara 1 dalam lomba badminton Kejuaraan Kota Tangerang Selatan 2025. Dalam turnamen yang mempertemukan atlet-atlet terbaik dari berbagai sekolah se-Kota Tangerang Selatan, perwakilan Mitra Permata berhasil tampil dominan dan membuktikan keunggulannya dengan menyabet gelar juara pertama. Perjalanan menuju podium tertinggi ini diwarnai dengan pertandingan-pertandingan sengit yang menguji kemampuan teknik, kekuatan mental, dan stamina fisik sang atlet. Kemenangan ini merupakan hasil dari dedikasi tinggi, latihan rutin yang konsisten, strategi permainan yang matang, serta bimbingan dari pelatih yang berpengalaman. Selamat kepada sang juara dan seluruh tim pendukung atas pencapaian luar biasa ini, semoga prestasi gemilang ini menjadi motivasi untuk terus berkembang dan meraih kesuksesan di kompetisi-kompetisi yang lebih tinggi, serta terus mengharumkan nama Mitra Permata di dunia olahraga badminton.', '1764948918_3ca81bcf623321aca586.png', '2025-12-05');

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
(3, 'superadmin', '$2y$10$uY0Qy3S6Us9W0p6uE07MjOBaZukWvIYQoPnFro99rmQgLyVNR7n1i', 'superadmin', NULL, '2025-11-25 23:36:29'),
(4, 'admin1', '123', 'admin', 'smk', '2025-12-03 03:09:08');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
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
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
