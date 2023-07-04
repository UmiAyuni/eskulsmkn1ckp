-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jul 2023 pada 13.31
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eskul`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_eskul`
--

CREATE TABLE `data_eskul` (
  `id_eskul` int(11) NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Pembina` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Tempat` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Jadwal` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `logo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_eskul`
--

INSERT INTO `data_eskul` (`id_eskul`, `nama`, `Pembina`, `Tempat`, `Jadwal`, `logo`, `Deskripsi`) VALUES
(8, 'Rohis', 'Fazari Wilmar Sofiyanto', 'Ruang Kelas', 'Rabu, Jumat', 'logo_rohis3.jpg', '       Ekstrakurikuler ROHIS adalah singkatan dari &quot;Rohani Islam&quot; dan merujuk pada kegiatan di sekolah yang berkaitan dengan pengembangan dan pemahaman agama Islam. Rohis biasanya merupakan sebuah kelompok atau klub yang terdiri dari siswa-siswi yang tertarik untuk mendalami ajaran dan praktik agama Islam.'),
(9, 'Kesenian', 'Dhea Adelia', 'Ruang kelas', 'Senin, Sabtu', 'logo_kesenian.jpg', '  Ekstrakurikuler kesenian di SMKN 1 Cikampek adalah kegiatan di sekolah yang berfokus pada pengembangan bakat dan minat siswa dalam bidang seni dan budaya. Melalui ekstrakurikuler kesenian, siswa dapat mengembangkan kreativitas, keterampilan artistik, dan apresiasi terhadap seni.'),
(12, 'Paskibra', 'Aditya Maulana', 'Lapangan Sekolah', 'Senin, Sabtu', 'logo_paskibra.jpg', '   Ekstrakurikuler paskibra adalah kegiatan yang bertujuan untuk mengembangkan minat siswa khusunya dalam baris berbaris selain itu dengan mengikuti ekstrakurikuler ini siswa diajarkan juga untuk memiliki jiwa kepemimpinan'),
(13, 'Sepak bola', 'Geo Adam', 'Lapangan Sekolah', 'Selasa, Sabtu', 'logo_sepakbola.jpg', ' Ekstrakurikuler sepak bola adalah kegiatan yang dilakukan diluar jam pelajaran. Ekstrakurikuler ini memiliki tujuan agar siswa dapat mengembangkan bakat mereka khususnya dibidang olahraga.'),
(14, 'Pramuka Gudep Putra', 'Aris Wirawan', 'Lapangan Sekolah', 'Senin, Sabtu', 'logo_pramuka.jpg', ' Ekstrakurikuler pramuka adalah kegiatan eskul wajib yang harus diikuti setiap siswa. Eskul ini memiliki tujuan untuk mengembangkan jiwa kepemimpinan dan tanggung jawab siswa'),
(15, 'Pramuka Gudep Putri', 'Yuyun', 'Lapangan Sekolah', 'Selasa, Sabtu', 'logo_pramuka1.jpg', ' Ekstrakurikuler pramuka adalah kegiatan eskul wajib yang harus diikuti setiap siswa. Eskul ini memiliki tujuan untuk mengembangkan jiwa kepemimpinan dan tanggung jawab siswa'),
(16, 'Seni musik &amp; Padus', 'Genta Fajarudin', 'Ruang Musik', 'Kamis, Sabtu', 'PADUAN-SUARA.png', ' Ekstrakurikuler padus adalah kegiatan ekstrakurikuler yang berfokus pada pengembangan minat dan bakat siswa dalam bidang menyanyi.'),
(20, 'Futsal', 'Dian Priatna', 'Lapangan Sekolah', 'Senin, Sabtu', 'logo_futsal1.jpg', '  Ekstrakurikuler futsal adalah kegiatan eskul yang memiliki tujuan untuk mengembangkan bakat dan minat siswa khususnya dalam bidang olahraga'),
(29, 'Basket', 'Zaenul Arifin', 'Lapangan Sekolah', 'Senin, Sabtu', 'logo_basket_2.jpg', ' Ekstrakurikuler basket adalah kegiatan eskul yang memiliki tujuan untuk mengembangkan bakat dan minat siswa khususnya dalam bidang olahraga '),
(31, 'Volly', 'Desta Nurlela', 'Lapangan Sekolah', 'Selasa, Sabtu', 'logo_volly.jpg', '   Ekstrakurikuler volly adalah kegiatan eskul yang memiliki tujuan untuk mengembangkan minat dan bakat siswa khususnya dibidang olahraga'),
(32, 'Pencak Silat', 'Oshef', 'Lapangan Sekolah', 'Kamis, Sabtu', 'logo_pencak_silat.jpg', '  Ekstrakurikuler pencaksilat adalah kegiatan eskul yang tujuan untuk mengembangkan minat dan bakat siswa khsusnya dalam bidang beladiri'),
(34, 'Taekwondo', 'Ilham Hambali', 'Lapangan Sekolah', 'Rabu, Sabtu', 'logo_taekwondo.jpg', ' Ekstrakurikuler taekwondo adalah kegiatan eskul yang memiliki tujuan untuk mengembangkan minat dan bakat siswa khususnya dalam bidang beladiri'),
(37, 'Panahan', 'Rahmat Hidayat', 'Lapangan Sekolah', 'Kamis, Sabtu', 'logo_panahan.jpg', '  Ekstrakurikuler panahan adalah kegiatan eskul yang  memiliki tujuan untuk mengembangkan minat dan bakat siswa khususnya dalam bidang olahraga panahan'),
(43, 'Bulu Tangkis', 'Solehudin', 'Lapangan Sekolah', 'Senin, Sabtu', 'logo_badminton.jpg', ' Ekstrakurikuler bulu tangkis adalah kegiatan eskul yang memiliki tujuan untuk mengembangkan minat dan bakat siswa khususnya dalam bidang olahraga bulu tangkis atau badminton'),
(44, 'Jurnalistik', 'Muhammad Bagas Darmawan', 'Ruang Kelas', 'Senin, Jumat', 'jurnalistiklogo.jpg', ' Ekstrakurikuler jurnalistik adalah kegiatan eskul yang memiliki tujuan untuk mengembangkan bakat dan minat siswa khususnya dalam bidang penyiaran dan media'),
(45, 'PMR', 'Maya Sopa', 'Ruang Kelas', 'Senin, Rabu', 'logo_pmr.jpg', ' Ekstrakurikuler PMR adalah kegiatan eskul yang memiliki tujuan untuk mengembangkan jiwa kepemimpinan dan tanggung jawab siswa '),
(46, 'Studi Club English', 'Sandra Hendra', 'Ruang Kelas', 'Senin, Rabu', 'club_english_logo.jpg', '  Ekstrakurikuler Studi Club English adalah kegiatan eskul yang memiliki tujuan untuk mengembangkan  pengetahuan siswa khususnya dalam berbahasa inggris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `formulir_daftar`
--

CREATE TABLE `formulir_daftar` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tempat` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenkel` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kelas` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_wa` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ekskul` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alasan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` enum('menunggu diverifikasi','disetujui','ditolak') NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `formulir_daftar`
--

INSERT INTO `formulir_daftar` (`id`, `nama`, `tempat`, `tgl_lahir`, `jenkel`, `kelas`, `no_wa`, `ekskul`, `alasan`, `status`, `id_user`) VALUES
(13, 'Nathanel Vega Ananta', 'Jakarta', '2009-08-13', 'Laki-laki', '10 TOI 2', '083128748900', 'Futsal', 'Karena saya suka bermain futsal ', 'disetujui', 10),
(14, 'Nathanel Vega Ananta', 'Jakarta', '2009-08-13', 'Laki-laki', '10 TOI 2', '083113080030', 'Paskibra', 'Karena ingin meningkatkan jiwa kepemimpinan', 'disetujui', 10),
(16, 'Harsa Atma Wijaya', 'Subang', '2008-06-06', 'Laki-laki', '10 APL 2', '083113080030', 'PMR', 'karena saya suka menolong org', 'disetujui', 6),
(17, 'Yuni Septiani', 'Karawang', '2008-03-06', 'Perempuan', '10 APL 3', '083876542306', 'Kesenian', 'Saya suka kesenian dan ingin mengembangkan bakat saya', 'disetujui', 13),
(18, 'Harsa Atma Wijaya', 'Subang', '2008-06-06', 'Laki-laki', '10 APL 2', '8402384093285', 'Kesenian', 'Karena saya suka tampil ditempat umum', 'menunggu diverifikasi', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `kelas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `kelas`) VALUES
(1, '10 APL 1'),
(2, '10 APL 2'),
(3, '10 APL 3'),
(4, '11 APL 1'),
(5, '11 APL 2'),
(6, '11 APL 3'),
(7, '12 APL 1'),
(8, '12 APL 2'),
(9, '12 APL 3'),
(10, '10 TOI 1'),
(11, '10 TOI 2'),
(12, '10 TOI 3'),
(13, '11 TOI 1'),
(14, '11 TOI 2'),
(15, '11 TOI 3'),
(16, '12 TOI 1'),
(17, '12 TOI 2'),
(18, '12 TOI 3'),
(19, '10 TEI 1'),
(20, '10 TEI 2'),
(21, '10 TEI 3'),
(22, '11 TEI 1'),
(23, '11 TEI 2'),
(24, '11 TEI 3'),
(25, '12 TEI 1'),
(26, '12 TEI 2'),
(27, '12 TEI 3'),
(28, '10 TPM 1'),
(29, '10 TPM 2'),
(30, '10 TPM 3'),
(31, '11 TPM 1'),
(32, '11 TPM 2'),
(33, '11 TPM 3'),
(34, '12 TPM 1'),
(35, '12 TPM 2'),
(36, '12 TPM 3'),
(37, '10 AB 1'),
(38, '10 AB 2'),
(39, '10 AB 3'),
(40, '11 AB 1'),
(41, '11 AB 2'),
(42, '11 AB 3'),
(43, '12 AB 1'),
(44, '12 AB 2'),
(45, '12 AB 3'),
(46, '10 TITL 1'),
(47, '10 TITL 2'),
(48, '10 TITL 3'),
(49, '11 TITL 1'),
(50, '11 TITL 2'),
(51, '11 TITL 3'),
(52, '12 TITL 1'),
(53, '12 TITL 2'),
(54, '12 TITL 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komplan`
--

CREATE TABLE `komplan` (
  `id` int(11) NOT NULL,
  `eskul` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kelas` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `keluhan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` enum('menunggu diverifikasi','diverifikasi') NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `komplan`
--

INSERT INTO `komplan` (`id`, `eskul`, `nama`, `kelas`, `keluhan`, `status`, `id_user`) VALUES
(8, 'Kesenian', 'Yuni Septiani', '10 APL 3', 'Ada  kesalahan input nomor wa', 'diverifikasi', 13),
(9, 'Kesenian', 'Harsa Atma Wijaya', '10 APL 2', 'ada kesalahan input nomor wa', 'menunggu diverifikasi', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Siswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `undur`
--

CREATE TABLE `undur` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kelas` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `eskul` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alasan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` enum('menunggu diverifikasi','disetujui','ditolak') NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `undur`
--

INSERT INTO `undur` (`id`, `nama`, `kelas`, `eskul`, `alasan`, `status`, `id_user`) VALUES
(9, 'Nathanel Vega Ananta', '10 TOI 2', 'Rohis', 'Karena terlalu sibuk pak', 'disetujui', 10),
(11, 'Yuni Septiani', '10 APL 3', 'Rohis', 'Saya terlalu sibuk', 'ditolak', 13),
(12, 'Harsa Atma Wijaya', '10 APL 2', 'Paskibra', 'Karena terlalu sibuk', 'menunggu diverifikasi', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `image` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `tanggal_input` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`, `tanggal_input`) VALUES
(3, 'Umi Ayuni', 'umiayuni@gmail.com', 'mr_kunnn.jpg', '$2y$10$ogOdS5EtT6PTxWW0gu5qAumeP.3jHee1cDrV18dil8zrv4J7C6wvu', 1, 1, 1684756764),
(5, 'Jevano Frederic Benjamin', 'jevan@gmail.com', 'default3.jpg', '$2y$10$aJINlBaYy2zpkLco8h5C5OGY7J3NkddE2q/Zn43TmC28mnWPCMJke', 2, 1, 1686835362),
(6, 'Harsa Atma Wijaya', 'harsa@gmail.com', 'harsa1.jpg', '$2y$10$wXT1DOKGorMkj3J/C8WDYO6U5MR/t0Kws3hlIvklEQIHgjuJQlt0y', 2, 1, 1686994870),
(8, 'Rendi Alter Prayoga', 'rendi23@gmail.com', 'FavoriteIdol_2020-06-24-16-30-00.jpg', '$2y$10$3v07/7QnsP7ALZCcBRZRiOHwvmPkQblUNG0xfjIffohswIfQzx1ni', 2, 1, 1687336565),
(10, 'Nathanel Vega Ananta', 'ananta@gmail.com', 'jaemin.jpg', '$2y$10$atKRoDdL2I5qT39PnbXLZOM1DOXPP0IMOlvahfhCBhn.4LDaYyPI.', 2, 1, 1687414446),
(11, 'Sri Ayumi Wandira', 'aeriyaaa5@gmail.com', '713d6aa636d2212c4bb2a99b059195cd.jpg', '$2y$10$IQPMisoHDsVAWqNPmqd48uwUxZswTyStCmdeh4tZV6yMmOWdhOzr6', 2, 1, 1688057677),
(12, 'Dewi Atma Sadaga', 'tournesol1330@gmail.com', 'Kak_Yerimm.jpg', '$2y$10$FiOSsatg8OOHUzFUR52BJeKvjGV8kjrg3yGJ.5LeL/QI4HrKCHQXq', 2, 1, 1688090970),
(13, 'Yuni Septiani', 'septianiyuni0@gmail.com', 'Karina.jpg', '$2y$10$FnsfFA3d1LhM5Ed7J4.JX.Pgd8A0pHM/8IZzllzu/SwCHU1f2p2xO', 2, 1, 1688280868);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(4, 1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Siswa'),
(3, 'Menu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `url` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `icon` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'Dashboard', 'user', 'fas fa-fw fa-tachometer-alt', 1),
(3, 2, 'Profile', 'user/profile', 'fas fa-fw fa-user', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'SubMenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(6, 2, 'Ekstrakurikuler', 'user/eskul_user', 'fas fa-fw fa-calendar-week', 1),
(7, 1, 'Data Pendaftar', 'admin/pendaftar', 'fas fa-fw fa-table', 1),
(8, 1, 'Data Ekstrakurikuler', 'eskul', 'fas fa-fw fa-calendar-alt', 1),
(11, 2, 'Pendaftaran', 'user/info_daftar', ' fas fa-fw fa-scroll', 1),
(12, 2, 'Komplain', 'user/info_komplain', 'fas fa-fw fa-file-signature', 1),
(13, 2, 'Undur Diri', 'user/info_undur', 'fas fa-fw fa-file', 1),
(14, 1, 'Data Komplain', 'admin/komplain_siswa', 'fas fa-fw fa-file', 1),
(15, 1, 'Data Undur Diri', 'Admin/data_undur', 'fas fa-fw fa-file-invoice', 1),
(16, 1, 'Akun Siswa', 'Admin/data_akun', 'fas fa-fw fa-users', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_eskul`
--
ALTER TABLE `data_eskul`
  ADD PRIMARY KEY (`id_eskul`);

--
-- Indeks untuk tabel `formulir_daftar`
--
ALTER TABLE `formulir_daftar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komplan`
--
ALTER TABLE `komplan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `undur`
--
ALTER TABLE `undur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_eskul`
--
ALTER TABLE `data_eskul`
  MODIFY `id_eskul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `formulir_daftar`
--
ALTER TABLE `formulir_daftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `komplan`
--
ALTER TABLE `komplan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `undur`
--
ALTER TABLE `undur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
