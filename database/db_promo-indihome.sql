-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jan 2023 pada 04.27
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
(6, 'Promo Internet + telepon + TV', NULL, NULL);

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
(76, '100', 'Reguler IdiHome 3p Internet + Phone + TV', 2, '945000', '500000', 10, 'promo', '2023-01-08 19:03:31', '2023-01-08 19:03:31', '1673233411763-100mbps.PNG');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lacy Dicki', 'kellen.bins@example.net', '2023-01-06 18:34:16', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'n8PegAdOUh', '2023-01-06 18:34:16', '2023-01-06 18:34:16'),
(2, 'Anthony Walsh', 'jaylan36@example.com', '2023-01-06 18:34:16', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'zsc0aikbat', '2023-01-06 18:34:16', '2023-01-06 18:34:16'),
(3, 'Dr. Gregorio Tremblay', 'bernie.schulist@example.org', '2023-01-06 18:34:16', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'FkMJuXQtjA', '2023-01-06 18:34:16', '2023-01-06 18:34:16'),
(4, 'Wilfredo Kautzer V', 'tmiller@example.org', '2023-01-06 18:34:16', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Hahf30tbYw', '2023-01-06 18:34:16', '2023-01-06 18:34:16'),
(5, 'Caroline Schaden', 'jayme.dietrich@example.com', '2023-01-06 18:34:16', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ZPiXAYmBgD', '2023-01-06 18:34:16', '2023-01-06 18:34:16'),
(6, 'Ms. Bettye Gottlieb', 'greenfelder.melba@example.org', '2023-01-06 18:34:16', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'eB9D5x5WN9', '2023-01-06 18:34:16', '2023-01-06 18:34:16'),
(7, 'Jewell Schinner', 'fay15@example.com', '2023-01-06 18:34:16', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'p6JjoszeQB', '2023-01-06 18:34:16', '2023-01-06 18:34:16'),
(8, 'Kailey Kerluke DVM', 'dchamplin@example.org', '2023-01-06 18:34:16', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '9iaDIDpRp1', '2023-01-06 18:34:16', '2023-01-06 18:34:16'),
(9, 'Curtis Bogisich', 'zjerde@example.com', '2023-01-06 18:34:16', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '3f96lrIhtY', '2023-01-06 18:34:17', '2023-01-06 18:34:17'),
(10, 'Andreane Schimmel', 'tsmitham@example.com', '2023-01-06 18:34:16', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4TSgfx6HmB', '2023-01-06 18:34:17', '2023-01-06 18:34:17'),
(11, 'Nella Rodriguez IV', 'bankunding@example.com', '2023-01-06 18:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'aYExtMOGQ4', '2023-01-06 18:36:27', '2023-01-06 18:36:27'),
(12, 'Connie Windler', 'white.dino@example.com', '2023-01-06 18:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'g55qbfrGQL', '2023-01-06 18:36:27', '2023-01-06 18:36:27'),
(13, 'Ara Zulauf', 'johnston.brenda@example.com', '2023-01-06 18:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YcK9M4xyFz', '2023-01-06 18:36:27', '2023-01-06 18:36:27'),
(14, 'Francis Littel', 'pschowalter@example.com', '2023-01-06 18:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'G05SLSeGVm', '2023-01-06 18:36:27', '2023-01-06 18:36:27'),
(15, 'Tyrel Kuphal IV', 'keira.kuhic@example.com', '2023-01-06 18:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Bvk7jZjyjN', '2023-01-06 18:36:28', '2023-01-06 18:36:28'),
(16, 'Mohammad Friesen', 'nitzsche.russel@example.org', '2023-01-06 18:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '0jPoM1mt0A', '2023-01-06 18:36:28', '2023-01-06 18:36:28'),
(17, 'Mr. Eriberto Mann IV', 'guiseppe.dubuque@example.com', '2023-01-06 18:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qDczLt0qHF', '2023-01-06 18:36:28', '2023-01-06 18:36:28'),
(18, 'Mr. Dane Schroeder Sr.', 'jmccullough@example.com', '2023-01-06 18:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Zx2rd42Llf', '2023-01-06 18:36:28', '2023-01-06 18:36:28'),
(19, 'Citlalli O\'Hara', 'patrick09@example.org', '2023-01-06 18:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'SNGrNBKkA8', '2023-01-06 18:36:28', '2023-01-06 18:36:28'),
(20, 'Waino Ebert', 'kcorkery@example.com', '2023-01-06 18:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CdRd1eRUAx', '2023-01-06 18:36:28', '2023-01-06 18:36:28'),
(21, 'Nedra Batz', 'walker.otto@example.net', '2023-01-06 18:42:13', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '9cAUlYP93Q', '2023-01-06 18:42:14', '2023-01-06 18:42:14'),
(22, 'Elody Paucek', 'derek.mckenzie@example.com', '2023-01-06 18:42:13', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'oKBH81aFhK', '2023-01-06 18:42:14', '2023-01-06 18:42:14'),
(23, 'Mr. Kyleigh Brown', 'ogreenfelder@example.com', '2023-01-06 18:42:13', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'zRzrVQD17w', '2023-01-06 18:42:14', '2023-01-06 18:42:14'),
(24, 'Harley Schuppe', 'maryjane.walker@example.org', '2023-01-06 18:42:13', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'zpwFaDuVNR', '2023-01-06 18:42:14', '2023-01-06 18:42:14'),
(25, 'Glen Zulauf', 'larry64@example.com', '2023-01-06 18:42:13', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'x8kgyfxNN0', '2023-01-06 18:42:14', '2023-01-06 18:42:14'),
(26, 'Heaven Kub', 'jaquelin24@example.org', '2023-01-06 18:42:13', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'HtlZUSFq9r', '2023-01-06 18:42:14', '2023-01-06 18:42:14'),
(27, 'Lelah Jacobson', 'minnie52@example.com', '2023-01-06 18:42:13', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'giIU0Cd92P', '2023-01-06 18:42:14', '2023-01-06 18:42:14'),
(28, 'Janiya Beier Jr.', 'squitzon@example.com', '2023-01-06 18:42:13', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'JBLaAXfoLD', '2023-01-06 18:42:14', '2023-01-06 18:42:14'),
(29, 'Dr. Jeffrey Mante', 'yhermann@example.com', '2023-01-06 18:42:13', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ZpH6HWDEBq', '2023-01-06 18:42:14', '2023-01-06 18:42:14'),
(30, 'Charity Toy', 'karli.conn@example.net', '2023-01-06 18:42:13', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1Pvt3SgCs6', '2023-01-06 18:42:14', '2023-01-06 18:42:14'),
(31, 'Aurore Harvey DVM', 'carmel38@example.com', '2023-01-06 18:52:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'zCnaNoYVwg', '2023-01-06 18:52:25', '2023-01-06 18:52:25'),
(32, 'Mr. Vincent Sawayn', 'jewell.grady@example.net', '2023-01-06 18:52:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'HwktJHdhmP', '2023-01-06 18:52:25', '2023-01-06 18:52:25'),
(33, 'Chandler Cummings', 'rosie56@example.net', '2023-01-06 18:52:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'TZDNauUYXa', '2023-01-06 18:52:25', '2023-01-06 18:52:25'),
(34, 'Jorge Larkin', 'dcremin@example.net', '2023-01-06 18:52:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'SGArkCjX2c', '2023-01-06 18:52:25', '2023-01-06 18:52:25'),
(35, 'Cornell Wolff', 'zachariah.kirlin@example.net', '2023-01-06 18:52:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '9UcycRzpSR', '2023-01-06 18:52:25', '2023-01-06 18:52:25'),
(36, 'Prof. Alexanne Hansen DVM', 'roselyn.gleason@example.net', '2023-01-06 18:52:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'J4N8weFA0u', '2023-01-06 18:52:25', '2023-01-06 18:52:25'),
(37, 'Emilio Kohler', 'rath.oda@example.org', '2023-01-06 18:52:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'yTu0sRlZN7', '2023-01-06 18:52:25', '2023-01-06 18:52:25'),
(38, 'Nicole Casper', 'jade.dickens@example.org', '2023-01-06 18:52:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'bdaMbCdJS7', '2023-01-06 18:52:26', '2023-01-06 18:52:26'),
(39, 'Nicolette Fritsch IV', 'elfrieda.runolfsson@example.org', '2023-01-06 18:52:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'EfHVbcPUvP', '2023-01-06 18:52:26', '2023-01-06 18:52:26'),
(40, 'Bailey Simonis DDS', 'adriel07@example.net', '2023-01-06 18:52:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'iMVTQ44CgD', '2023-01-06 18:52:26', '2023-01-06 18:52:26'),
(41, 'Hal Kshlerin', 'pat.harris@example.org', '2023-01-06 18:54:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'r0tc2ROXYa', '2023-01-06 18:54:49', '2023-01-06 18:54:49'),
(42, 'Prof. Jaquan Rempel', 'hailee00@example.org', '2023-01-06 18:54:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'mjljYcl4rj', '2023-01-06 18:54:49', '2023-01-06 18:54:49'),
(43, 'Donny Stanton', 'amiya.nitzsche@example.net', '2023-01-06 18:54:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RUm6BUjA64', '2023-01-06 18:54:49', '2023-01-06 18:54:49'),
(44, 'Immanuel Ullrich', 'walsh.leanna@example.com', '2023-01-06 18:54:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'KfIp8yqdkZ', '2023-01-06 18:54:50', '2023-01-06 18:54:50'),
(45, 'Elwin Larson II', 'izaiah.jakubowski@example.org', '2023-01-06 18:54:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'u0KQMAEcZx', '2023-01-06 18:54:50', '2023-01-06 18:54:50'),
(46, 'Muriel Kreiger', 'nicole.bosco@example.com', '2023-01-06 18:54:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'FkS5PUWjRd', '2023-01-06 18:54:50', '2023-01-06 18:54:50'),
(47, 'Wyatt Kshlerin', 'kellen43@example.com', '2023-01-06 18:54:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ps8QWJDEng', '2023-01-06 18:54:50', '2023-01-06 18:54:50'),
(48, 'Claud Rippin', 'kylee09@example.net', '2023-01-06 18:54:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RTzMEWtQzr', '2023-01-06 18:54:50', '2023-01-06 18:54:50'),
(49, 'Celestine Waelchi', 'cornelius.king@example.org', '2023-01-06 18:54:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'SUjuXWVUOH', '2023-01-06 18:54:50', '2023-01-06 18:54:50'),
(50, 'Emiliano Blick', 'marina78@example.net', '2023-01-06 18:54:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '0TYNjP7J3V', '2023-01-06 18:54:50', '2023-01-06 18:54:50'),
(51, 'Cierra Halvorson', 'okeefe.vickie@example.org', '2023-01-06 18:55:13', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'oAOJyNdl9h', '2023-01-06 18:55:13', '2023-01-06 18:55:13'),
(52, 'Dr. Garnet Hoppe', 'idell.fritsch@example.com', '2023-01-06 18:55:13', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'WRQpErgIsq', '2023-01-06 18:55:13', '2023-01-06 18:55:13'),
(53, 'Prof. Quinten Hodkiewicz', 'toy.reggie@example.net', '2023-01-06 18:55:13', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'a44rpQYhmn', '2023-01-06 18:55:13', '2023-01-06 18:55:13'),
(54, 'Miss Sharon Ankunding', 'trantow.cornelius@example.org', '2023-01-06 18:55:13', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'rjjEQZ06Hx', '2023-01-06 18:55:13', '2023-01-06 18:55:13'),
(55, 'Gregory Johnston', 'ines58@example.net', '2023-01-06 18:55:13', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '06H0O88d5r', '2023-01-06 18:55:13', '2023-01-06 18:55:13'),
(56, 'Eugenia Hodkiewicz I', 'sarah92@example.org', '2023-01-06 18:55:13', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'svGWR1nWWS', '2023-01-06 18:55:13', '2023-01-06 18:55:13'),
(57, 'Jena Kertzmann', 'jaime69@example.org', '2023-01-06 18:55:13', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xQ30gdhey0', '2023-01-06 18:55:13', '2023-01-06 18:55:13'),
(58, 'Casimer Swaniawski', 'jannie.heller@example.net', '2023-01-06 18:55:13', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'rZwn4VVbMy', '2023-01-06 18:55:13', '2023-01-06 18:55:13'),
(59, 'Dewitt Sporer', 'marcel.lind@example.com', '2023-01-06 18:55:13', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LwkO3kWasM', '2023-01-06 18:55:13', '2023-01-06 18:55:13'),
(60, 'Elmo Wisoky', 'sporer.jaime@example.net', '2023-01-06 18:55:13', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '19tcina9OS', '2023-01-06 18:55:13', '2023-01-06 18:55:13');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
