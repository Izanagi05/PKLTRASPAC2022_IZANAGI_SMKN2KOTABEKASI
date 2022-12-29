-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2022 at 11:14 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_tim`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pribadis`
--

CREATE TABLE `data_pribadis` (
  `nis` int(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tempat_lahir` varchar(40) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `organisasi` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pribadis`
--

INSERT INTO `data_pribadis` (`nis`, `nama`, `tempat_lahir`, `tanggal_lahir`, `kelamin`, `status`, `alamat`, `no_telp`, `email`, `organisasi`) VALUES
(212210319, 'Delshady Rachmadina', 'Jakarta', '2006-05-20', 'Perempuan', 'Pelajar', 'Bekasi Timur Regency 3\r\nCluster Malachite M3 No.07 RT 007 RW\r\n022 Kel. Mustika Jaya Kec. Cimuning', '+62-813-8527-7864', 'delshae256@gmail.com', ''),
(212210325, 'Izanagi Faris Aslam', 'Jakarta', '2005-12-30', 'Laki-laki', 'Pelajar', 'Bekasi Timur Regensi Blok L5/02 Jl. NURI 04 Rt. 01 Rw. 07 Kel. Burangkeng Kec.Setu', '+62-812-9099-1181', 'izanagifarisaslam5@gmail.com', 'Software Club'),
(212210329, 'Nadhifal Azharuddiya A', 'Bekasi', '2006-08-02', 'Laki-laki', 'Pelajar', 'Kab.Bogor', '+62-896-3683-5581', 'nadhifalazharuddiya@gmail.com', 'Software Club');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggotas`
--

CREATE TABLE `tb_anggotas` (
  `kd_anggota` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `id_kemampuan` int(11) NOT NULL,
  `id_pengalaman` int(11) NOT NULL,
  `id_sd` int(11) NOT NULL,
  `id_smp` int(11) NOT NULL,
  `id_smk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_anggotas`
--

INSERT INTO `tb_anggotas` (`kd_anggota`, `nis`, `id_kemampuan`, `id_pengalaman`, `id_sd`, `id_smp`, `id_smk`) VALUES
(1, 202210325, 1, 3, 2, 2, 1),
(4, 212210325, 2, 2, 2, 2, 2),
(5, 212210329, 1, 2, 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kemampuans`
--

CREATE TABLE `tb_kemampuans` (
  `kode_kemampuan` int(11) NOT NULL,
  `kemampuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kemampuans`
--

INSERT INTO `tb_kemampuans` (`kode_kemampuan`, `kemampuan`) VALUES
(1, 'HTML'),
(2, 'CSS'),
(3, 'Mysql'),
(4, 'Bootstrap'),
(5, 'PHP'),
(6, 'Laravel'),
(7, 'Beginner Designer'),
(8, 'Kerja sama tim'),
(9, 'Mengatasi Masalah'),
(10, 'Editing Video'),
(11, 'Adobe After Effect');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendidikans`
--

CREATE TABLE `tb_pendidikans` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pendidikans`
--

INSERT INTO `tb_pendidikans` (`id_sekolah`, `nama_sekolah`) VALUES
(1, 'SDN Baru 05 Pagi '),
(2, 'SMPN 26 Kota Bekasi '),
(4, 'MI Miftahul Ulum'),
(5, ' SMPIT Al-Azhar Jaya Indonesia'),
(6, 'SD Gen-R'),
(7, 'SMP Gen-R'),
(8, 'TK Gen-R');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengalaman`
--

CREATE TABLE `tb_pengalaman` (
  `id_pengalaman` int(11) NOT NULL,
  `pengalaman` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengalaman`
--

INSERT INTO `tb_pengalaman` (`id_pengalaman`, `pengalaman`) VALUES
(1, 'Mengenal Coding saat melihat orang tua bekerja'),
(2, 'Menyusun acara sekolah saat menjadi anggota OSIS '),
(3, 'Membuat website pada saat Project Based	Learning (PJBL)\r\n'),
(4, 'Mempelajari aplikasi Editing Video'),
(5, 'Membuat sebuah game melalui aplikasi Unity');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sds`
--

CREATE TABLE `tb_sds` (
  `id_sd` int(11) NOT NULL,
  `nama_sd` varchar(30) NOT NULL,
  `id_tahun_ajaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sds`
--

INSERT INTO `tb_sds` (`id_sd`, `nama_sd`, `id_tahun_ajaran`) VALUES
(1, 'SDN Baru 05 Pagi', 1),
(2, 'MI Miftahul Ulum', 1),
(3, 'SD Gen-R', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_smks`
--

CREATE TABLE `tb_smks` (
  `id_smk` int(11) NOT NULL,
  `nama_smk` varchar(30) NOT NULL,
  `id_tahun_ajaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_smks`
--

INSERT INTO `tb_smks` (`id_smk`, `nama_smk`, `id_tahun_ajaran`) VALUES
(1, 'SMKN 2 Kota Bekasi', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_smps`
--

CREATE TABLE `tb_smps` (
  `id_smp` int(11) NOT NULL,
  `nama_smp` varchar(30) NOT NULL,
  `id_tahun_ajaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_smps`
--

INSERT INTO `tb_smps` (`id_smp`, `nama_smp`, `id_tahun_ajaran`) VALUES
(1, 'SMPN 26 Kota Bekasi', 2),
(2, 'SMPIT Al-Azhar Jaya Indonesia', 2),
(3, 'SMP Gen-R', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tahun_ajarans`
--

CREATE TABLE `tb_tahun_ajarans` (
  `id_tahun_ajaran` int(11) NOT NULL,
  `tahun_ajaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tahun_ajarans`
--

INSERT INTO `tb_tahun_ajarans` (`id_tahun_ajaran`, `tahun_ajaran`) VALUES
(1, '2010-2018'),
(2, '2018-2021'),
(3, '2021-sekarang');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pribadis`
--
ALTER TABLE `data_pribadis`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tb_anggotas`
--
ALTER TABLE `tb_anggotas`
  ADD PRIMARY KEY (`kd_anggota`);

--
-- Indexes for table `tb_kemampuans`
--
ALTER TABLE `tb_kemampuans`
  ADD PRIMARY KEY (`kode_kemampuan`);

--
-- Indexes for table `tb_pendidikans`
--
ALTER TABLE `tb_pendidikans`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `tb_pengalaman`
--
ALTER TABLE `tb_pengalaman`
  ADD PRIMARY KEY (`id_pengalaman`);

--
-- Indexes for table `tb_sds`
--
ALTER TABLE `tb_sds`
  ADD PRIMARY KEY (`id_sd`);

--
-- Indexes for table `tb_smks`
--
ALTER TABLE `tb_smks`
  ADD PRIMARY KEY (`id_smk`);

--
-- Indexes for table `tb_smps`
--
ALTER TABLE `tb_smps`
  ADD PRIMARY KEY (`id_smp`);

--
-- Indexes for table `tb_tahun_ajarans`
--
ALTER TABLE `tb_tahun_ajarans`
  ADD PRIMARY KEY (`id_tahun_ajaran`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pribadis`
--
ALTER TABLE `data_pribadis`
  MODIFY `nis` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212210330;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_anggotas`
--
ALTER TABLE `tb_anggotas`
  MODIFY `kd_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_kemampuans`
--
ALTER TABLE `tb_kemampuans`
  MODIFY `kode_kemampuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_pendidikans`
--
ALTER TABLE `tb_pendidikans`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_pengalaman`
--
ALTER TABLE `tb_pengalaman`
  MODIFY `id_pengalaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_sds`
--
ALTER TABLE `tb_sds`
  MODIFY `id_sd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_smks`
--
ALTER TABLE `tb_smks`
  MODIFY `id_smk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_smps`
--
ALTER TABLE `tb_smps`
  MODIFY `id_smp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_tahun_ajarans`
--
ALTER TABLE `tb_tahun_ajarans`
  MODIFY `id_tahun_ajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
