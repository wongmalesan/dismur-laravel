-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2019 at 02:35 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dismur`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id_admin` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_admin` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_admin` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_admin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon_admin` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id_admin`, `nama_admin`, `email_admin`, `alamat_admin`, `telepon_admin`, `created_at`, `updated_at`) VALUES
('AD1', 'admin', 'admin@gmail.com', 'admin', 'admin', '2019-09-13 17:00:00', '2019-09-13 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produks`
--

CREATE TABLE `kategori_produks` (
  `id_kategori` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kategori` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_produks`
--

INSERT INTO `kategori_produks` (`id_kategori`, `nama_kategori`, `created_at`, `updated_at`) VALUES
('KP1', 'makanan dan minuman', '2019-09-13 23:48:35', '2019-09-13 23:48:35'),
('KP2', 'ibu dan anak', '2019-09-13 23:50:19', '2019-09-13 23:50:19'),
('KP3', 'kesehatan', '2019-09-13 23:50:30', '2019-09-13 23:50:30'),
('KP4', 'kecantikan', '2019-09-13 23:50:40', '2019-09-13 23:50:40'),
('KP5', 'kebutuhan rumah tangga', '2019-09-13 23:50:52', '2019-09-13 23:50:52'),
('KP6', 'produk segar', '2019-09-14 00:19:28', '2019-09-14 00:19:28');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id_member` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_member` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_member` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `foto_member` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_referal` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id_member`, `nama_member`, `email_member`, `tanggal_daftar`, `foto_member`, `id_referal`, `created_at`, `updated_at`) VALUES
('MB1', 'indra1', 'indra@gmail.com', '2019-09-14', 'default.png', '', '2019-09-14 02:20:14', '2019-09-14 08:53:49'),
('MB2', 'sadewo', 'ade@gmail.com', '2019-09-14', '1568536470_Untitled-1beras.jpg', '611568454627', '2019-09-14 02:50:27', '2019-09-15 01:34:30'),
('MB3', 'member baru', 'member@gmail.com', '2019-09-17', 'default.png', '161568734656', '2019-09-17 08:37:36', '2019-09-17 08:37:36'),
('MB4', 'member23', 'member3@gmail.com', '2019-09-17', 'default.png', '141568735702', '2019-09-17 08:55:02', '2019-09-17 08:55:02'),
('MB5', 'member23', 'member3@gmail.com', '2019-09-17', 'default.png', '961568735740', '2019-09-17 08:55:40', '2019-09-17 08:55:40'),
('MB6', 'member23', 'member3@gmail.com', '2019-09-17', 'default.png', '631568735756', '2019-09-17 08:55:56', '2019-09-17 08:55:56');

-- --------------------------------------------------------

--
-- Table structure for table `merchants`
--

CREATE TABLE `merchants` (
  `id_merchant` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_merchant` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_merchant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map_location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `merchants`
--

INSERT INTO `merchants` (`id_merchant`, `nama_merchant`, `alamat_merchant`, `map_location`, `logo`, `created_at`, `updated_at`) VALUES
('M1', 'merchantOks', 'mercan', 'mercan', '1234', NULL, '2019-09-14 07:06:15'),
('M10', 'merchantOks', 'Jalan yang pernah ada', NULL, '1568534087_logo 2.png', '2019-09-15 00:37:59', '2019-09-15 00:54:47'),
('M11', 'merchant1', 'admin', NULL, 'default.png', '2019-09-17 08:48:49', '2019-09-17 08:48:49'),
('M2', '123', '123', '123', '123', '2019-09-13 06:48:43', '2019-09-13 06:48:43'),
('M3', '1234', '1234', NULL, NULL, '2019-09-13 06:49:33', '2019-09-13 06:49:33'),
('M4', '12345', '12345', NULL, NULL, '2019-09-13 06:50:04', '2019-09-13 06:50:04'),
('M5', '123456', '123456', NULL, NULL, '2019-09-13 06:50:51', '2019-09-13 06:50:51'),
('M6', '556', '23253', NULL, '1234', '2019-09-13 06:51:09', '2019-09-14 00:23:01'),
('M8', 'merchantOks123', '1231', NULL, '12112', '2019-09-14 00:24:12', '2019-09-14 00:24:12'),
('M9', 'merchantOks', 'mercan', 'mercan', NULL, '2019-09-14 07:03:52', '2019-09-14 07:03:52');

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
(2, '2019_09_11_131712_create_kategori_produks_table', 1),
(3, '2019_09_11_160000_create_admins_table', 2),
(4, '2019_09_12_131444_create_mercants_table', 3),
(5, '2019_09_12_133922_create_merchants_table', 4),
(6, '2019_09_12_135519_create_nama_produks_table', 5),
(7, '2019_09_12_140414_create_merchants_table', 6),
(8, '2019_09_12_140629_create_produks_table', 7),
(9, '2019_09_12_142721_create_logo_merchants_table', 8),
(10, '2019_09_14_085230_create_members_table', 9),
(11, '2019_09_14_085902_create_members_table', 10),
(12, '2019_09_17_131357_create_user_dismurs_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id_produk` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_input` datetime NOT NULL,
  `event_begin` date DEFAULT NULL,
  `event_end` date DEFAULT NULL,
  `diskon` int(11) DEFAULT NULL,
  `harga` int(20) NOT NULL,
  `id_merchant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id_produk`, `nama_produk`, `tanggal_input`, `event_begin`, `event_end`, `diskon`, `harga`, `id_merchant`, `id_kategori`, `foto_produk`, `created_at`, `updated_at`) VALUES
('P2', 'produk12', '2019-09-15 07:47:58', NULL, NULL, 12, 12000, 'iduser', 'KP1', '1568533678_Untitled-1pasta gigi.jpg', '2019-09-14 02:56:06', '2019-09-15 00:47:58'),
('P3', 'produk123', '2019-09-15 07:46:03', NULL, NULL, 12, 1200, 'iduser', 'KP1', '1568533563_Untitled-1minyak_2.jpg', '2019-09-14 07:31:00', '2019-09-15 00:46:03'),
('P4', 'produk12', '2019-09-15 07:03:06', NULL, NULL, 12, 12300, 'iduser', 'KP4', '', '2019-09-14 07:31:57', '2019-09-15 00:03:06'),
('P5', '123123121213', '2019-09-14 15:02:39', NULL, NULL, 12, 12, 'M1', 'KP3', '123', '2019-09-14 07:32:41', '2019-09-14 08:02:39'),
('P6', 'produk12', '2019-09-15 08:02:54', NULL, NULL, 12, 12000, '000', 'KP1', '1568534574_Untitled-1tepung.png', '2019-09-15 01:02:54', '2019-09-15 01:02:54'),
('P7', 'aq', '2019-09-15 08:10:55', NULL, NULL, 16, 12, 'M2', 'KP1', '1568534775_Untitled-1snack.png', '2019-09-15 01:06:15', '2019-09-15 01:10:55');

-- --------------------------------------------------------

--
-- Table structure for table `user_dismurs`
--

CREATE TABLE `user_dismurs` (
  `id_user` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_user` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_detail_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_dismurs`
--

INSERT INTO `user_dismurs` (`id_user`, `email_user`, `password`, `id_detail_user`, `role_user`, `created_at`, `updated_at`) VALUES
('UD1', 'admin@gmail.com', 'admin', 'admin', 'admin', NULL, NULL),
('UM1', 'member@gmail.com', 'member', 'member', 'MEMBER', NULL, NULL),
('UM11', 'merchantbos', '$2y$10$5M84RKBwE.5knHusFyZwP.uwMy2ouXKKzIGtaUTNIqhnNzisJpFJ2', 'M11', 'merchant', '2019-09-17 08:48:49', '2019-09-17 08:48:49'),
('UMB3', 'member2', '$2y$10$YovMzrKcOMUACNPs0q66KeV6M2KVkHMRTxa7MtHbk1vK6CtibzFVO', 'MB3', 'member', '2019-09-17 08:37:36', '2019-09-17 08:37:36'),
('UMB4', 'member3', '$2y$10$R/L7776JuvbRR5MOBTmm/u8FFi14HrIJSDKDHmdk3zmDMmXDQOppS', 'MB4', 'member', '2019-09-17 08:55:02', '2019-09-17 08:55:02'),
('UMB6', 'member34', '$2y$10$l7ll2xxW33N/4sMuB89zi.8pcPzAQVlFNi.fygLyT7nCGn2tBa57i', 'MB6', 'member', '2019-09-17 08:55:57', '2019-09-17 08:55:57'),
('UMR1', 'merchant@gmail.com', 'merchant', 'merchant', 'merchant', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id_wishlist` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_member` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_produk` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_wish` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id_wishlist`, `id_member`, `id_produk`, `tanggal_wish`, `created_at`, `updated_at`) VALUES
('W1', 'MB3', 'P5', '2019-09-18', '2019-09-17 17:07:44', '2019-09-17 17:07:44'),
('W2', 'MB3', 'P5', '2019-09-18', '2019-09-17 17:08:27', '2019-09-17 17:08:27'),
('W3', 'MB3', 'P5', '2019-09-18', '2019-09-17 17:08:28', '2019-09-17 17:08:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `admins_email_admin_unique` (`email_admin`);

--
-- Indexes for table `kategori_produks`
--
ALTER TABLE `kategori_produks`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `merchants`
--
ALTER TABLE `merchants`
  ADD PRIMARY KEY (`id_merchant`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `user_dismurs`
--
ALTER TABLE `user_dismurs`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `user_dismurs_email_user_unique` (`email_user`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id_wishlist`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
