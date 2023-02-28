-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jun 2021 pada 08.32
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `betacourse`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblabout`
--

CREATE TABLE `tblabout` (
  `about_id` int(11) NOT NULL,
  `about_message` longtext CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblabout`
--

INSERT INTO `tblabout` (`about_id`, `about_message`) VALUES
(8, 'Halo semuanya, selamat datang di Beta Course :)'),
(9, 'Beta Course adalah tempat kursus pelajaran bagi murid SD, SMP, dan SMA yang dilaksanakan secara online. Beta Course dibuka sejak tahun 2020. Mengingat dimasa pandemi ini banyak anak yang kurang paham dengan materi yang diajarkan disekolahnya, kami Beta Course akan mengajari anda sampai bisa!! Kami memiliki guru pengajar yang berpengalaman dan professional.'),
(10, 'Kami memiliki 2 macam sistem kursus :'),
(11, '- 2 hari dalam seminggu.'),
(12, '- 3 hari dalam seminggu.'),
(13, 'Kami juga memiliki 2 varian waktu kursus yang dapat dipilih untuk menyesuaikan dengan jadwal sekolah anda :\r\n'),
(14, '- Pkl 16.00-18.00\r\n'),
(15, '\r\n- Pkl 19.00-21.00'),
(16, 'Cek harganya di menu Promo yahhhh.... Kami tunggu pendaftaranmu :)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id_admin` int(4) NOT NULL,
  `nama_depan` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbladmin`
--

INSERT INTO `tbladmin` (`id_admin`, `nama_depan`, `nama_belakang`, `email`, `password`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'yonatan', 'yonatan', 'yonatan28@gmail.com', '4ab85793d15c9d0e83e67e7b5d184ce2'),
(5, 'dewa', 'fabian', 'dewafabian@gmail.com', '9bbe64b8d6700cff14f12ae596b0ee7f'),
(6, 'Steffi', 'Kristianti', 'steffikristianti@gmail.com', '85bc8e82d5d76964291e7aef65501421'),
(7, 'Malvin', 'adrianus', 'malvinadrianus@gmail.com', '3dbe148f7a34e30c0d9ca0add8f2d4a3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblcontactus`
--

CREATE TABLE `tblcontactus` (
  `contactus_id` int(11) NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pesan` longtext CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblcontactus`
--

INSERT INTO `tblcontactus` (`contactus_id`, `nama`, `email`, `pesan`) VALUES
(20, 'yonatan', 'yonatan28@gmail.com', 'Kak ada diskon gak ?'),
(21, 'ahmad', 'ahmad13@yahoo.com', 'kak apakah dalam les ini bisa untuk anak yang akan mengikuti UN ?\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbldaftar`
--

CREATE TABLE `tbldaftar` (
  `no_pendaftaran` int(11) NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `no_hp` bigint(15) NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `jenis_kelamin` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `jenjang_sekolah` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `jenis_kursus` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `jam_kursus` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbldaftar`
--

INSERT INTO `tbldaftar` (`no_pendaftaran`, `nama`, `no_hp`, `email`, `jenis_kelamin`, `jenjang_sekolah`, `jenis_kursus`, `jam_kursus`) VALUES
(12, 'yonatan', 87760691570, 'yonatanhokianto35@gmail.com', 'Laki-laki', 'SMA', '3X Seminggu', '19.00 - 21.00 WIB'),
(13, 'Steffi Kristianti', 85775185960, 'steffikristianti@gmail.com', 'Perempuan', 'SMA', '2X Seminggu', '16.00 - 18.00 WIB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblpic_promo`
--

CREATE TABLE `tblpic_promo` (
  `pic_id` int(11) NOT NULL,
  `pic_title` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `pic_detail` longtext CHARACTER SET latin1 DEFAULT NULL,
  `pic_file` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `pic_status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblpic_promo`
--

INSERT INTO `tblpic_promo` (`pic_id`, `pic_title`, `pic_detail`, `pic_file`, `pic_status`) VALUES
(1, 'promo1', '', 'pngegg.png', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblpromo`
--

CREATE TABLE `tblpromo` (
  `id_promo` int(11) NOT NULL,
  `jenjang_sekolah` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `jenis_kursus` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `diskon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblpromo`
--

INSERT INTO `tblpromo` (`id_promo`, `jenjang_sekolah`, `jenis_kursus`, `harga`, `diskon`) VALUES
(3, 'SD', '2X Seminggu', 200000, 10),
(4, 'SMP', '2X Seminggu', 250000, 10),
(5, 'SMA', '2X Seminggu', 300000, 10),
(6, 'SD', '3X Seminggu', 250000, 10),
(7, 'SMP', '3X Seminggu', 300000, 10),
(8, 'SMA', '3X Seminggu', 350000, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblvid_home`
--

CREATE TABLE `tblvid_home` (
  `vid_id` int(11) NOT NULL,
  `vid_title` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `vid_detail` longtext CHARACTER SET latin1 DEFAULT NULL,
  `vid_file` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `vid_status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblvid_home`
--

INSERT INTO `tblvid_home` (`vid_id`, `vid_title`, `vid_detail`, `vid_file`, `vid_status`) VALUES
(1, 'video_home', '', 't_video6143196056814354955.mp4', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tblabout`
--
ALTER TABLE `tblabout`
  ADD PRIMARY KEY (`about_id`);

--
-- Indeks untuk tabel `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tblcontactus`
--
ALTER TABLE `tblcontactus`
  ADD PRIMARY KEY (`contactus_id`);

--
-- Indeks untuk tabel `tbldaftar`
--
ALTER TABLE `tbldaftar`
  ADD PRIMARY KEY (`no_pendaftaran`);

--
-- Indeks untuk tabel `tblpic_promo`
--
ALTER TABLE `tblpic_promo`
  ADD PRIMARY KEY (`pic_id`);

--
-- Indeks untuk tabel `tblpromo`
--
ALTER TABLE `tblpromo`
  ADD PRIMARY KEY (`id_promo`);

--
-- Indeks untuk tabel `tblvid_home`
--
ALTER TABLE `tblvid_home`
  ADD PRIMARY KEY (`vid_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tblabout`
--
ALTER TABLE `tblabout`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id_admin` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tblcontactus`
--
ALTER TABLE `tblcontactus`
  MODIFY `contactus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tbldaftar`
--
ALTER TABLE `tbldaftar`
  MODIFY `no_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tblpic_promo`
--
ALTER TABLE `tblpic_promo`
  MODIFY `pic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tblpromo`
--
ALTER TABLE `tblpromo`
  MODIFY `id_promo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tblvid_home`
--
ALTER TABLE `tblvid_home`
  MODIFY `vid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
