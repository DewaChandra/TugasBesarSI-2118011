-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2023 at 07:32 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdm1_2118011`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensis`
--

CREATE TABLE `absensis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ID_Absensi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tgl` date NOT NULL,
  `NIP` bigint(20) UNSIGNED NOT NULL,
  `Jam_Masuk` time NOT NULL,
  `Keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absensis`
--

INSERT INTO `absensis` (`id`, `ID_Absensi`, `Tgl`, `NIP`, `Jam_Masuk`, `Keterangan`, `created_at`, `updated_at`) VALUES
(1, 'ABS0001', '2023-06-01', 1, '06:30:00', 'Masuk', '2023-06-01 07:42:27', '2023-06-01 07:56:15'),
(2, 'ABS0002', '2023-06-01', 2, '06:07:00', 'Masuk', '2023-06-01 08:02:55', '2023-06-01 08:03:16'),
(3, 'ABS0003', '2023-06-01', 3, '06:24:00', 'Izin', '2023-06-01 08:04:18', '2023-06-01 08:04:18');

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
-- Table structure for table `gajis`
--

CREATE TABLE `gajis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ID_Gaji` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NIP` bigint(20) UNSIGNED NOT NULL,
  `Gaji_Pokok` int(11) NOT NULL,
  `ID_Tunjangan` bigint(20) UNSIGNED NOT NULL,
  `Jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Total_Gaji` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gajis`
--

INSERT INTO `gajis` (`id`, `ID_Gaji`, `NIP`, `Gaji_Pokok`, `ID_Tunjangan`, `Jabatan`, `Total_Gaji`, `created_at`, `updated_at`) VALUES
(2, 'GJ00001', 1, 5000000, 1, 'Staff Keuangan', 4500000, '2023-06-01 08:40:43', '2023-06-01 08:40:43'),
(3, 'GJ00002', 2, 5000000, 1, 'Staf Sumber Daya Manusia', 4500000, '2023-06-01 08:48:26', '2023-06-01 08:48:26');

-- --------------------------------------------------------

--
-- Table structure for table `karyawans`
--

CREATE TABLE `karyawans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NIP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tempat_Lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Jenis_Kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status_Kawin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Kewarganegaraan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `karyawans`
--

INSERT INTO `karyawans` (`id`, `NIP`, `Nama`, `Tempat_Lahir`, `Tanggal_Lahir`, `Jenis_Kelamin`, `Agama`, `Alamat`, `Status_Kawin`, `Kewarganegaraan`, `Pendidikan`, `Jurusan`, `Jabatan`, `created_at`, `updated_at`) VALUES
(1, '1', 'Dazel Sucipto', 'Surabaya', '1997-01-16', 'Laki-Laki', 'Kristen Protestan', 'JL. Laptop gang 2', 'Kawin', 'Indonesia', 'S1', 'Akuntansi', 'Staff Keuangan', '2023-06-01 00:36:30', '2023-06-01 08:38:35'),
(2, '2', 'Sherly Salsa', 'Malang', '1999-05-17', 'Perempuan', 'Kristen Katolik', 'Perum. Laptop blok A', 'Kawin', 'Indonesia', 'S1', 'Manajemen', 'Staf Sumber Daya Manusia', '2023-06-01 06:46:47', '2023-06-01 08:38:43'),
(3, '3', 'Salman Robi', 'Malang', '2000-07-27', 'Laki-Laki', 'Islam', 'JL. Petruk gang 1', 'Belum Kawin', 'Indonesia', 'S1', 'Psikologi', 'Staf Sumber Daya Manusia', '2023-06-01 06:50:20', '2023-06-01 08:38:50');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_30_121315_create_karyawans_table', 1),
(6, '2023_05_01_070319_create_tunjangans_table', 1),
(7, '2023_05_01_070320_create_gajis_table', 1),
(8, '2023_05_01_075328_create_absensis_table', 1),
(9, '2023_05_01_085651_create_perizinans_table', 1),
(10, '2023_05_01_112228_create_pengajuanizins_table', 1),
(11, '2023_05_01_124228_create_trainings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengajuanizins`
--

CREATE TABLE `pengajuanizins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ID_PengajuanIzin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tgl_Pengajuan` date NOT NULL,
  `Tgl_Mulai` date NOT NULL,
  `Tgl_Akhir` date NOT NULL,
  `Alasan_Cuti` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NIP` bigint(20) UNSIGNED NOT NULL,
  `Validasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengajuanizins`
--

INSERT INTO `pengajuanizins` (`id`, `ID_PengajuanIzin`, `Tgl_Pengajuan`, `Tgl_Mulai`, `Tgl_Akhir`, `Alasan_Cuti`, `NIP`, `Validasi`, `created_at`, `updated_at`) VALUES
(1, 'PI00001', '2023-06-01', '2023-06-01', '2023-06-01', 'Sakit', 3, 'Disetujui', '2023-06-01 10:22:10', '2023-06-01 10:22:10');

-- --------------------------------------------------------

--
-- Table structure for table `perizinans`
--

CREATE TABLE `perizinans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ID_Izin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Total_Izin` int(11) NOT NULL,
  `Jumlah_Izin` int(11) NOT NULL,
  `NIP` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perizinans`
--

INSERT INTO `perizinans` (`id`, `ID_Izin`, `Total_Izin`, `Jumlah_Izin`, `NIP`, `created_at`, `updated_at`) VALUES
(1, 'IZ00001', 12, 0, 1, '2023-06-01 09:35:01', '2023-06-01 09:35:01'),
(2, 'IZ00002', 12, 0, 2, '2023-06-01 09:36:38', '2023-06-01 09:36:38'),
(3, 'IZ00003', 11, 1, 3, '2023-06-01 09:37:51', '2023-06-01 09:37:51');

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
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ID_Training` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tgl_Training` date NOT NULL,
  `Nama_Training` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NIP` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `ID_Training`, `Tgl_Training`, `Nama_Training`, `NIP`, `created_at`, `updated_at`) VALUES
(1, 'TR00001', '2023-06-12', 'Manajemen Perusahaan', 2, '2023-06-01 10:30:07', '2023-06-01 10:30:07'),
(2, 'TR00002', '2023-06-05', 'Manajemen Perusahaan', 3, '2023-06-01 10:30:42', '2023-06-01 10:30:42');

-- --------------------------------------------------------

--
-- Table structure for table `tunjangans`
--

CREATE TABLE `tunjangans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ID_Tunjangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nama_Tunjangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Besar_Tunjangan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tunjangans`
--

INSERT INTO `tunjangans` (`id`, `ID_Tunjangan`, `Nama_Tunjangan`, `Besar_Tunjangan`, `created_at`, `updated_at`) VALUES
(1, '1', 'Tunjangan Kesehatan', 500000, '2023-06-01 08:36:31', '2023-06-01 08:36:31'),
(2, '2', 'Tunjangan Transportasi', 100000, '2023-06-01 08:37:57', '2023-06-01 08:37:57');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dewa', 'it@gmail.com', NULL, '12345678', NULL, '2023-06-01 10:24:09', '2023-06-01 10:24:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensis`
--
ALTER TABLE `absensis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `absensis_nip_foreign` (`NIP`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gajis`
--
ALTER TABLE `gajis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gajis_nip_foreign` (`NIP`),
  ADD KEY `gajis_id_tunjangan_foreign` (`ID_Tunjangan`);

--
-- Indexes for table `karyawans`
--
ALTER TABLE `karyawans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pengajuanizins`
--
ALTER TABLE `pengajuanizins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengajuanizins_nip_foreign` (`NIP`);

--
-- Indexes for table `perizinans`
--
ALTER TABLE `perizinans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perizinans_nip_foreign` (`NIP`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trainings_nip_foreign` (`NIP`);

--
-- Indexes for table `tunjangans`
--
ALTER TABLE `tunjangans`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `absensis`
--
ALTER TABLE `absensis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gajis`
--
ALTER TABLE `gajis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `karyawans`
--
ALTER TABLE `karyawans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pengajuanizins`
--
ALTER TABLE `pengajuanizins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `perizinans`
--
ALTER TABLE `perizinans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tunjangans`
--
ALTER TABLE `tunjangans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensis`
--
ALTER TABLE `absensis`
  ADD CONSTRAINT `absensis_nip_foreign` FOREIGN KEY (`NIP`) REFERENCES `karyawans` (`id`);

--
-- Constraints for table `gajis`
--
ALTER TABLE `gajis`
  ADD CONSTRAINT `gajis_id_tunjangan_foreign` FOREIGN KEY (`ID_Tunjangan`) REFERENCES `tunjangans` (`id`),
  ADD CONSTRAINT `gajis_nip_foreign` FOREIGN KEY (`NIP`) REFERENCES `karyawans` (`id`);

--
-- Constraints for table `pengajuanizins`
--
ALTER TABLE `pengajuanizins`
  ADD CONSTRAINT `pengajuanizins_nip_foreign` FOREIGN KEY (`NIP`) REFERENCES `karyawans` (`id`);

--
-- Constraints for table `perizinans`
--
ALTER TABLE `perizinans`
  ADD CONSTRAINT `perizinans_nip_foreign` FOREIGN KEY (`NIP`) REFERENCES `karyawans` (`id`);

--
-- Constraints for table `trainings`
--
ALTER TABLE `trainings`
  ADD CONSTRAINT `trainings_nip_foreign` FOREIGN KEY (`NIP`) REFERENCES `karyawans` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
