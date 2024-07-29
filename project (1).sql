-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 10 Jul 2024 pada 16.27
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
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `nik` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `nomor_hp` varchar(20) NOT NULL,
  `agama` enum('Islam','Kristen','Hindhu','Budha','Kong Hu Chu') DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `poto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`nik`, `nama`, `username`, `password`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `nomor_hp`, `agama`, `jenis_kelamin`, `poto`, `created_at`, `updated_at`) VALUES
(21313, 'Test', 'test', '$2y$10$mXRp2/DCY.xGjefB3cbzZO/GHbBVzLvVwux08yWN7I1UyfKsmyc8S', 'Desa Sungai Sirih', NULL, NULL, '08995245146', NULL, NULL, 'app/customer/1714398345-NS3ZQ.png', '2024-07-05 15:29:25', '2024-07-05 15:29:25'),
(198701142019031007, 'Siti Hairiah', 'siti', '$2y$10$CU9srROqojcUlpf9K4cHgOG7eSb1rrWF1If5M5.DlELywKQ2a0BmK', 'Jl. Ketapang', 'Pontianak', '1998-06-17', '-', 'Islam', 'Perempuan', 'app/customer/1720549144-yfRYh.png', '2024-07-09 11:19:04', '2024-07-09 11:19:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `formulir_aplikasi`
--

CREATE TABLE `formulir_aplikasi` (
  `id` char(36) NOT NULL,
  `id_formulir_permohonan` char(36) NOT NULL,
  `asal_barang_jaminan` varchar(255) NOT NULL,
  `status_transaksi` varchar(255) NOT NULL,
  `tujuan_transaksi` varchar(255) NOT NULL,
  `cara_pembayaran` varchar(255) NOT NULL,
  `nomor_hp` varchar(255) NOT NULL,
  `nama_ibu_kandung` varchar(255) NOT NULL,
  `status` int(4) NOT NULL,
  `alasan` text,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `formulir_aplikasi`
--

INSERT INTO `formulir_aplikasi` (`id`, `id_formulir_permohonan`, `asal_barang_jaminan`, `status_transaksi`, `tujuan_transaksi`, `cara_pembayaran`, `nomor_hp`, `nama_ibu_kandung`, `status`, `alasan`, `created_at`, `updated_at`) VALUES
('9c7386aa-54a0-4ed5-bf43-3053fca02597', '9c635926-d166-4bb3-ae1a-dceba935b013', 'Pinjaman', 'Untuk Orang Lain', 'Biaya Pendidikan', 'Tunai', '-', 'Diah Rosanti', 1, NULL, '2024-07-09 18:05:34', '2024-07-09 18:05:34'),
('9c7460f6-428f-4616-909f-693fecd7d9fe', '9c745efc-118a-46d7-9991-63df85dce0f7', 'Pinjaman', 'Untuk Diri Sendiri', 'Biaya Pendidikan', 'Tunai', '236232536253', 'Ifit', 1, '-', '2024-07-09 18:05:38', '2024-07-09 18:05:38'),
('9c7bab1d-b2e8-4a3f-8d9e-9626679b7468', '9c7baa6c-2914-4234-b5ce-e1aa503c2fd9', 'Hasil Investasi', 'Untuk Orang Lain', 'Biaya Pendidikan', 'Tunai', '236232536253', 'Erna', 2, 'Silahkan datang kekantor', '2024-07-09 19:09:07', '2024-07-09 12:09:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `formulir_permohonan_transfer`
--

CREATE TABLE `formulir_permohonan_transfer` (
  `id` char(36) NOT NULL,
  `nik_customer` char(36) NOT NULL,
  `id_upc_pegadaian` char(36) NOT NULL,
  `nomor_kredit` varchar(255) NOT NULL,
  `jumlah_uang_pinjaman` varchar(255) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `nomor_rekening` varchar(255) NOT NULL,
  `nama_pemilik_rekening` varchar(255) NOT NULL,
  `scan_ktp` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `alasan` text,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `formulir_permohonan_transfer`
--

INSERT INTO `formulir_permohonan_transfer` (`id`, `nik_customer`, `id_upc_pegadaian`, `nomor_kredit`, `jumlah_uang_pinjaman`, `nama_bank`, `nomor_rekening`, `nama_pemilik_rekening`, `scan_ktp`, `status`, `alasan`, `created_at`, `updated_at`) VALUES
('9c635926-d166-4bb3-ae1a-dceba935b013', '21313', '9bec8d36-49d5-44c4-9c16-eec345f25386', '8989898912', 'Rp. 30.000.000', 'BSI Ketapang', '89734673', 'Coba', 'app/Scan-KTP/1719505114-KScjJ.png', 1, 'Persyaratan Kurang Lengkap', '2024-06-27 09:18:34', '2024-07-05 10:19:04'),
('9c745efc-118a-46d7-9991-63df85dce0f7', '21313', '9c7b9ca6-0fbf-4802-bcef-f1092c69e795', '8232536', 'Rp. 30.000.000', 'BSI Ketapang', '89734673', 'Siti', 'app/Scan-KTP/1720236235-PdOII.jpg', 2, 'Silahkan datang kekantor', '2024-07-05 20:23:57', '2024-07-09 11:10:16'),
('9c7baa6c-2914-4234-b5ce-e1aa503c2fd9', '198701142019031007', '9c7b9ca6-0fbf-4802-bcef-f1092c69e795', '89898989', 'Rp. 30.000.000', 'BSI', '89734673', 'Siti', 'app/Scan-KTP/1720549541-5lmkD.png', 4, 'Silahkan Buat Formulir Aplikasi', '2024-07-09 11:25:41', '2024-07-09 12:06:48');

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

INSERT INTO `lelang` (`id`, `nama`, `tanggal_lelang`, `deskripsi`, `poto`, `created_at`, `updated_at`) VALUES
('9c7d4ad8-79a5-4e73-8c10-f5bdf2c680ed', 'Wisata Kuliner', '2024-07-08', '<p>sadddddddddddddddd</p>', 'app/lelang/1720619405-b0YuJ.png', '2024-07-10 13:57:47', '2024-07-10 06:57:47'),
('9c7d4aee-0e47-4cfe-b587-bcc3ed5db1f9', 'Admin', '2024-07-12', '<p>asdddddddddddddddddddddddddd</p>', 'app/lelang/1720619419-DpUOG.png', '2024-07-10 13:57:56', '2024-07-10 06:57:56'),
('9c7d4c71-967d-4592-ba3a-ae0e396e9f5e', 'Cobaaaaaa', '2024-07-22', '<p>adawddddddddddddd</p>', 'app/lelang/1720619673-2K3DE.jpg', '2024-07-10 13:58:04', '2024-07-10 06:58:04');

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
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `formulir_aplikasi`
--
ALTER TABLE `formulir_aplikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `formulir_permohonan_transfer`
--
ALTER TABLE `formulir_permohonan_transfer`
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
