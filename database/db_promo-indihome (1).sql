-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jan 2023 pada 17.06
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_promo-indihome`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Paket 2P', NULL, NULL),
(2, 'Paket 3P', NULL, NULL),
(3, 'Paket Gamer', NULL, NULL),
(4, 'Paket Pelajar', NULL, NULL),
(5, 'Promo Internet + Telepon', NULL, NULL),
(6, 'Promo Internet + telepon + TV', NULL, '2023-01-09 04:11:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_07_020116_create_paket_datas_table', 1),
(6, '2023_01_07_021246_create_transaksis_table', 2),
(7, '2023_01_07_122947_create_kategoris_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_datas`
--

CREATE TABLE `paket_datas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kecepatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1673232119752-20mbps',
  `harga_pemasangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '500000',
  `ppn` tinyint(4) NOT NULL DEFAULT 10,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `paket_datas`
--

INSERT INTO `paket_datas` (`id`, `kecepatan`, `nama`, `kategori_id`, `harga`, `harga_pemasangan`, `ppn`, `label`, `created_at`, `updated_at`, `image`) VALUES
(11, '20', 'Paket 2P Internet + TV', 1, '345000', '500000', 10, 'promo', '2023-01-06 19:25:04', '2023-01-06 19:25:04', ''),
(13, '30', 'Paket 2P Internet + TV', 1, '420000', '500000', 10, 'promo', '2023-01-06 19:31:45', '2023-01-06 19:35:06', ''),
(14, '40', 'Paket 2P Internet + TV', 1, '495000', '500000', 10, 'promo', NULL, NULL, ''),
(15, '50', 'Paket 2P Internet + TV', 1, '560000', '500000', 10, 'promo', '2023-01-06 19:51:45', '2023-01-06 19:51:45', ''),
(21, '100', 'Reguler IdiHome 3p Internet + Phone + TV', 2, '945000', '500000', 10, 'promo', '2023-01-06 20:12:19', '2023-01-06 20:12:19', ''),
(35, '100', 'Paket 2P Internet + TV', 1, '915.000', '500000', 10, 'promo', NULL, NULL, ''),
(55, '100', 'Paket 2P + telepon', 6, '885000', '500000', 10, 'promo', '2023-01-08 18:31:55', '2023-01-08 18:31:55', '1673231515285-100mbps.PNG'),
(57, '20', 'Paket 2P + telepon', 6, '315000', '500000', 10, 'promo', '2023-01-08 18:47:29', '2023-01-08 18:47:29', '1673232449792-20mbps.PNG'),
(58, '30', 'Paket 2P + telepon', 6, '390000', '500000', 10, 'promo', '2023-01-08 18:48:08', '2023-01-08 18:48:08', '1673232488276-30mbps.PNG'),
(59, '40', 'Paket 2P + telepon', 6, '465000', '500000', 10, 'promo', '2023-01-08 18:48:42', '2023-01-08 18:48:42', '1673232522003-40mbps.PNG'),
(60, '50', 'Paket 2P + telepon', 6, '530000', '500000', 10, 'promo', '2023-01-08 18:49:10', '2023-01-08 18:49:10', '1673232550362-50mbps.PNG'),
(62, '50', 'Paket 3P (Dengan Akses Disney+ Hotstar)', 6, '615000', '500000', 10, 'promo', '2023-01-08 18:50:58', '2023-01-08 18:50:58', '1673232658644-50mbps.PNG'),
(63, '100', 'Paket 3P (Dengan Akses Disney+ Hotstar)', 6, '965000', '500000', 10, 'promo', '2023-01-08 18:51:37', '2023-01-08 18:51:37', '1673232697064-100mbps.PNG'),
(64, '30', 'Paket 3P (Dengan Akses Disney+ Hotstar)', 6, '385000', '500000', 10, 'promo', '2023-01-08 18:52:16', '2023-01-08 18:52:16', '1673232735987-30mbps.PNG'),
(65, '50', 'Paket 2P Internet + Telepon (Dengan Akses Disney+ Hotstar)', 6, '475000', '500000', 10, 'promo', '2023-01-08 18:52:43', '2023-01-08 18:52:43', '1673232763804-50mbps.PNG'),
(66, '30', 'Paket 2P Internet + Telepon (Dengan Akses Disney+ Hotstar)', 6, '335000', '500000', 10, 'promo', '2023-01-08 18:53:46', '2023-01-08 18:53:46', '1673232826763-30mbps.PNG'),
(67, '100', 'Paket 2P Internet + Telepon (Dengan Akses Disney+ Hotstar)', 6, '795.000', '500000', 10, 'promo', '2023-01-08 18:55:30', '2023-01-08 18:55:30', '1673232930242-100mbps.PNG'),
(68, '30', 'Paket Pelajar', 6, '275000', '500000', 10, 'promo', '2023-01-08 18:58:21', '2023-01-08 18:58:21', '1673233101546-30mbps.PNG'),
(69, '20', 'Paket Gamers', 6, '315000', '500000', 10, 'promo', '2023-01-08 18:58:52', '2023-01-08 18:58:52', '1673233132272-20mbps.PNG'),
(70, '50', 'Paket Gamers', 6, '600000', '500000', 10, 'promo', '2023-01-08 18:59:18', '2023-01-08 18:59:18', '1673233158588-50mbps.PNG'),
(71, '100', 'Paket Gamers', 6, '955000', '500000', 10, 'promo', '2023-01-08 19:00:16', '2023-01-08 19:00:16', '1673233216519-100mbps.PNG'),
(72, '20', 'Reguler IndiHome 3p Internet + Phone + TV', 6, '375000', '500000', 10, 'promo', '2023-01-08 19:00:50', '2023-01-08 19:00:50', '1673233250333-20mbps.PNG'),
(73, '30', 'Reguler IndiHome 3p Internet + Phone + TV', 6, '450000', '500000', 10, 'promo', '2023-01-08 19:01:18', '2023-01-08 19:01:18', '1673233278842-30mbps.PNG'),
(74, '40', 'Reguler IndiHome 3p Internet + Phone + TV', 6, '525000', '500000', 10, 'promo', '2023-01-08 19:02:16', '2023-01-08 19:02:16', '1673233336550-40mbps.PNG'),
(75, '50', 'Reguler 3p Internet + Phone + TV', 6, '590000', '500000', 10, 'promo', '2023-01-08 19:02:44', '2023-01-08 19:02:44', '1673233364498-50mbps.PNG'),
(76, '100', 'Reguler IndiHome 3p Internet + Phone + TV', 6, '945000', '500000', 10, 'promo', '2023-01-08 19:03:31', '2023-01-09 02:18:52', '1673233411763-100mbps.PNG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(65, 'Reskiyanti Widia', 'admin@gmail.com', '2023-01-09 06:42:58', '$2y$10$VWPGAS7rkO7.vVvav8Rste5sdmX51GYAFLBcE7YL4E/KVmUXZNOBm', 'admin', 'MJ1JdrO9N7ilCzZsRuxTlittxuaGRCeiuWTUA4pbKFIenlxv3Wbq6SveNdct', '2023-01-09 06:42:58', '2023-01-09 06:42:58');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `paket_datas`
--
ALTER TABLE `paket_datas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `paket_datas`
--
ALTER TABLE `paket_datas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
