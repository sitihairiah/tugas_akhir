-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 24 Jul 2024 pada 16.13
-- Versi server: 5.7.33
-- Versi PHP: 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` char(36) NOT NULL,
  `id_jenis_upc` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `poto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `id_jenis_upc`, `nama`, `username`, `password`, `poto`, `created_at`, `updated_at`) VALUES
('9c7b5441-0fb6-4ec6-8e4c-7bbe9f8e49af', '9bec8d36-49d5-44c4-9c16-eec345f25386', 'Admin', 'admin', '$2y$10$P2tM34V4ZlDDW/M3mQhYwO2WrDNrYKD3ljHrS0ULwvrz9TZun6IWa', 'app/admin/1720535083-ec2Lb.png', '2024-07-09 07:24:45', '2024-07-09 07:24:45'),
('9c7b9cda-da9f-4603-ae3e-c5fea1c419d9', '9c7b9ca6-0fbf-4802-bcef-f1092c69e795', 'Admin Kauman', 'adminkauman', '$2y$10$ahb9fX/7tO7whYuWtHkpsOAavjDSs2KtUBqJRQzcHqBO8yrbyrTxy', 'app/admin/1720547264-0o4cX.png', '2024-07-09 10:47:44', '2024-07-09 10:47:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` char(36) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `poto` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `deskripsi`, `poto`, `status`, `created_at`, `updated_at`) VALUES
('9c7b9be1-2eca-4923-a2b4-3e0721c321fb', 'Sistem Informasi Pelayanan Kepegawaian Politeknik Negeri Ketapang', '<p>dsffffffffffffffffff</p>', 'app/berita/1720547101-4NUlT.png', 1, '2024-07-09 10:45:01', '2024-07-09 10:45:01'),
('9c7d4167-a2f8-463e-91a6-f32f39324c6a', 'Sistem Informasi Pelayanan Kepegawaian Politeknik Negeri Ketapang', '<p>ssssssssssssssssss</p>', 'app/berita/1720617821-aupgr.png', 1, '2024-07-10 06:23:41', '2024-07-10 06:23:41'),
('9c7d4177-50ae-4311-8e40-705f10273fb7', 'Sistem Pemasaran', '<p>werrrrrrrrrrrrrr</p>', 'app/berita/1720617831-iZvIB.jpg', 1, '2024-07-10 06:23:51', '2024-07-10 06:23:51'),
('9c7d4193-04c9-4457-b9be-306c88da89d2', 'Napak Tilas Ketapang', '<p>esfffffffffffffff</p>', 'app/berita/1720617849-KEJzR.jpg', 1, '2024-07-10 06:24:09', '2024-07-10 06:24:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` char(36) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `poto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_upc_pegadaian`
--

CREATE TABLE `jenis_upc_pegadaian` (
  `id` char(36) NOT NULL,
  `nama_upc` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_upc_pegadaian`
--

INSERT INTO `jenis_upc_pegadaian` (`id`, `nama_upc`, `alamat`, `no_telp`, `created_at`, `updated_at`) VALUES
('9bec8d36-49d5-44c4-9c16-eec345f25386', 'UPC Cabang Ketapang', 'Jl. R.suprapto', '0876353735', '2024-04-29 08:00:37', '2024-04-29 08:03:31'),
('9c7b9ca6-0fbf-4802-bcef-f1092c69e795', 'UPC Cabang Kauman', 'Jl. Rahadi Usman Desa Sungai Besar', '+6282155913491', '2024-07-09 10:47:10', '2024-07-09 10:47:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lelang`
--

CREATE TABLE `lelang` (
  `id` char(36) NOT NULL,
  `id_jenis_upc` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal_lelang` date DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `poto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lelang`
--

INSERT INTO `lelang` (`id`, `id_jenis_upc`, `nama`, `tanggal_lelang`, `deskripsi`, `poto`, `created_at`, `updated_at`) VALUES
('9c7d4ad8-79a5-4e73-8c10-f5bdf2c680ed', '9c7b9ca6-0fbf-4802-bcef-f1092c69e795', 'Wisata Kuliner', '2024-07-08', '<p>sadddddddddddddddd</p>', 'app/lelang/1720619405-b0YuJ.png', '2024-07-24 13:00:02', '2024-07-24 06:00:02'),
('9c7d4aee-0e47-4cfe-b587-bcc3ed5db1f9', '9bec8d36-49d5-44c4-9c16-eec345f25386', 'Admin', '2024-07-12', '<p>asdddddddddddddddddddddddddd</p>', 'app/lelang/1720619419-DpUOG.png', '2024-07-24 12:36:07', '2024-07-24 12:36:07'),
('9c7d4c71-967d-4592-ba3a-ae0e396e9f5e', '9bec8d36-49d5-44c4-9c16-eec345f25386', 'Cobaaaaaa', '2024-07-22', '<p>adawddddddddddddd</p>', 'app/lelang/1720619673-2K3DE.jpg', '2024-07-24 12:36:10', '2024-07-24 12:36:10'),
('9c996114-ded6-4f2d-bd86-5f7f30f11620', '9c7b9ca6-0fbf-4802-bcef-f1092c69e795', 'asdkaskdksakdkjsa', '2024-01-01', '<p>abdjbjbshhhhhhhhhdbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb</p>', 'app/lelang/1721825724-IANTT.png', '2024-07-24 13:00:13', '2024-07-24 06:00:13'),
('9c996b40-ffff-4ad3-a5cf-427b14386f16', '9c7b9ca6-0fbf-4802-bcef-f1092c69e795', 'askbdkbsabdj', '2024-01-01', '<p>,asm,dmbmnasdbvnbasvdnvasmdnvnasvdnvanbs</p><p>dsnbvfhvdsvfhvsdh</p><p>dsmvfjjjjjjjjjjjjjjjjjjjjjvmansjkbdabjf</p><p>dsvfffffffffffffffffffffffffffffbn</p>', 'app/lelang/1721827433-Xgxea.png', '2024-07-24 06:23:53', '2024-07-24 06:23:53'),
('9c996b88-0f68-404d-9f16-e779d4f6c6bf', '9c7b9ca6-0fbf-4802-bcef-f1092c69e795', 'Test', '2024-01-01', '<p>,nbdjbdsvfvnsdvfvdnvfvsdnbf</p><p>,ndsbfjvnbdsvfnmdsvfndnsvmfdsmfms</p><p>smdnfvdsbfvndsvnfdsnvfnsd&nbsp;&nbsp;&nbsp;&nbsp;</p>', 'app/lelang/1721827480-jjkQ0.png', '2024-07-24 06:24:40', '2024-07-24 06:24:40'),
('9c996fd1-0db5-44df-9f80-fc75c7c07267', '9c7b9ca6-0fbf-4802-bcef-f1092c69e795', 'Test Akses', '2024-12-31', '<p>,d,an,badmbmamfmbdavnfdna&nbsp;&nbsp;&nbsp;&nbsp;</p>', 'app/lelang/1721828198-H1lAX.png', '2024-07-24 06:36:39', '2024-07-24 06:36:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slide`
--

CREATE TABLE `slide` (
  `id` char(36) NOT NULL,
  `title` text NOT NULL,
  `poto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `slide`
--

INSERT INTO `slide` (`id`, `title`, `poto`, `created_at`, `updated_at`) VALUES
('9c633e4d-39d7-47ca-86af-9fa70361e12b', 'Pegadaian Cab. Ketapang', 'app/slide/1719500609-LeQbS.jpg', '2024-06-27 15:05:11', '2024-06-27 08:05:11'),
('9c7d3df0-d0b7-4ab4-8ed2-96cefc442568', 'Coba', 'app/slide/1720617238-Yzwri.png', '2024-07-10 06:14:01', '2024-07-10 06:14:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `super_admin`
--

CREATE TABLE `super_admin` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `poto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `super_admin`
--

INSERT INTO `super_admin` (`id`, `nama`, `username`, `password`, `poto`, `created_at`, `updated_at`) VALUES
('9ba3a864-f1c5-4435-ad0c-2c1f74a3ea2d', 'Super Admin', 'superadmin', '$2y$10$MOFer9ja/FPcNBZ2fNKNse9Z1arXGz177qSw2WTsI3Gw1DyXKKBHq', 'app/admin/1720531706-dspEN.png', '2024-07-09 13:35:14', '2024-07-09 06:35:14');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_upc_pegadaian`
--
ALTER TABLE `jenis_upc_pegadaian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lelang`
--
ALTER TABLE `lelang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `super_admin`
--
ALTER TABLE `super_admin`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
