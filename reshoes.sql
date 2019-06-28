-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2019 at 06:18 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dhistiro_reshoes`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_12_18_005602_create_shares_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shares`
--

CREATE TABLE `shares` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` int(11) NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shares`
--

INSERT INTO `shares` (`id`, `nama`, `email`, `no_telepon`, `alamat`, `kategori`, `jumlah`, `created_at`, `updated_at`) VALUES
(5, 'yudhis', 'yudhis@user.com', 123232, 'Jl Sukacita No 12', 'Custom', '1', '2018-12-18 07:43:32', '2018-12-18 23:04:04'),
(6, 'Bagas', 'bagas@mail.com', 616242, 'Jl Kenjeran No 1', 'Cleaning', '3', '2018-12-18 07:48:18', '2018-12-18 22:53:56'),
(7, 'Bagus', 'Bagus@mail.com', 123461, 'Jl Taktakan No 99', 'Repair', '1', '2018-12-18 22:15:15', '2018-12-18 23:04:47'),
(8, 'Raka', 'Raka@gmail.com', 112233, 'Jl Pancasila No 1', 'Cleaning', '2', '2018-12-18 22:19:12', '2018-12-18 22:19:12'),
(9, 'Adam', 'Adam@rocketmail.com', 212342, 'Jl Bersama No.2', 'Repair', '1', '2018-12-18 22:21:22', '2018-12-18 22:21:22'),
(10, 'David', 'david@yahoo.com', 546321, 'Jl Ciruas No.3', 'Repaint', '3', '2018-12-18 22:23:10', '2018-12-18 22:23:10'),
(11, 'Yudhis', 'yudhis@mail.com', 323211, 'Jl Keputih No 3', 'Custom Painting', '2', '2018-12-18 22:49:11', '2018-12-18 22:49:11'),
(12, 'Nanda', 'nanda@mail.com', 989811, 'Jl Kertajaya No 9', 'Cleaning', '1', '2018-12-18 22:50:00', '2018-12-18 22:50:00'),
(13, 'Hilman', 'hilmm@mail.com', 771192, 'Jl Sukolilo', 'Repair', '1', '2018-12-18 22:52:02', '2018-12-18 22:52:02'),
(14, 'Bima', 'bima@mail.com', 321123, 'Gebang Lor', 'Cleaning', '2', '2018-12-18 22:52:10', '2018-12-18 22:52:10'),
(15, 'Doni', 'doni@example.com', 123456, 'Keputing Tegal Timur no 3', 'Repair', '1', '2018-12-18 22:54:00', '2018-12-18 22:54:00'),
(16, 'Rini', 'rinirini@mail.com', 648281, 'Jl Gubeng No 10', 'Custom Painting', '3', '2018-12-18 22:55:50', '2018-12-18 22:55:50'),
(17, 'Rani', 'rani@mail.com', 999888, 'Jalan Garuda', 'Cleaning', '4', '2018-12-18 22:56:20', '2018-12-18 22:56:20'),
(18, 'Cintia', 'cintia@gmail.com', 123860, 'Jl Siborong-borong No 56', 'Cleaning', '4', '2018-12-18 22:57:23', '2018-12-18 22:57:23'),
(19, 'Diana', 'dianaaaa@mail.com', 123123, 'Jalan Pahlawan no 1', 'Repaint', '1', '2018-12-18 22:57:35', '2018-12-18 22:57:35'),
(20, 'Tubagus', 'tuba@mail.com', 123792, 'Jl Bekasi No 90', 'Repair', '1', '2018-12-18 22:58:21', '2018-12-18 22:58:21'),
(21, 'Bima', 'bima@mail.com', 321123, 'Gebang Lor', 'Cleaning', '2', '2018-12-18 22:59:50', '2018-12-18 22:59:50'),
(22, 'Ginanjar', 'Ginaannnn@yahoo.com', 913200, 'Jl Medan No.10', 'Custom Painting', '1', '2018-12-18 23:00:03', '2018-12-18 23:00:03'),
(23, 'Antoni', 'anton@gmail.com', 813290, 'Jl Siantar No 10', 'Repair', '2', '2018-12-18 23:01:06', '2018-12-18 23:01:06'),
(24, 'Nabil', 'nabil22@mail.com', 128983, 'Jl Bintaro No.70', 'Custom Painting', '2', '2018-12-18 23:01:57', '2018-12-18 23:01:57'),
(25, 'Hazim', 'hazzim1@mail.com', 891328, 'Jl Gresik No.22', 'Cleaning', '3', '2018-12-18 23:03:19', '2018-12-18 23:03:19'),
(26, 'Bastian', 'bastian@mail.com', 125648, 'Jalan Merdeka no 45', 'Repair', '3', '2018-12-18 23:03:19', '2018-12-18 23:03:19'),
(27, 'Satria', 'satria@mail.com', 121212, 'Jalan Kertajaya', 'Repair', '1', '2018-12-18 23:04:45', '2018-12-18 23:04:45'),
(28, 'Joko', 'joko31@mail.com', 132932, 'Jl Pembangunan No 4', 'Repair', '2', '2018-12-18 23:06:46', '2018-12-18 23:06:46'),
(29, 'Rama', 'rama@mail.com', 874321, 'Jalan Pahlawan no 14', 'Custom Painting', '4', '2018-12-18 23:06:58', '2018-12-18 23:06:58'),
(30, 'Firdaus', 'dauss2@mail.com', 328982, 'Jl Kaujon No.77', 'Cleaning', '1', '2018-12-18 23:07:40', '2018-12-18 23:07:40'),
(31, 'Budi', 'budiman@mail.com', 132800, 'Jl Pakuwon No 2', 'Custom Painting', '4', '2018-12-18 23:08:41', '2018-12-18 23:08:41'),
(32, 'Lisa', 'lisa17@mail.com', 878685, 'Jalan Garuda no 9', 'Repaint', '1', '2018-12-18 23:08:54', '2018-12-18 23:08:54'),
(33, 'Rahma', 'rahmaa@mail.com', 432890, 'Jl Madura No 88', 'Cleaning', '3', '2018-12-18 23:09:29', '2018-12-18 23:09:29'),
(34, 'Ragil', 'ragil123@mail.com', 987878, 'Jalan Merdeka no 17', 'Repaint', '2', '2018-12-18 23:10:17', '2018-12-18 23:10:17'),
(35, 'Dzaky', 'dzakkkk@yahoo.co.id', 980324, 'Jl Sukolilo No 23', 'Repaint', '2', '2018-12-18 23:10:36', '2018-12-18 23:10:36'),
(36, 'Ilham', 'ilham321@mail.com', 321654, 'Jalan Keputih no 32', 'Cleaning', '1', '2018-12-18 23:12:15', '2018-12-18 23:12:15'),
(37, 'anggar', 'anggar@mail.com', 589132, 'Jl Suramadu No 23', 'Cleaning', '2', '2018-12-18 23:12:52', '2018-12-18 23:12:52'),
(38, 'Dhana', 'dhanadhan@mail.com', 817238, 'Jalan Kertajaya Indah no 10', 'Cleaning', '2', '2018-12-18 23:13:46', '2018-12-18 23:13:46'),
(39, 'Joni', 'joni88@mail.com', 123987, 'Jl Januari No 1', 'Cleaning', '2', '2018-12-18 23:14:25', '2018-12-18 23:14:25'),
(40, 'Sinta', 'sinta17@mail.com', 666666, 'Jalan Keputih 8', 'Cleaning', '2', '2018-12-18 23:15:20', '2018-12-18 23:18:04'),
(41, 'Rizal', 'rizalrizal@mail.com', 465789, 'Jalan Garuda no 3', 'Cleaning', '5', '2018-12-18 23:15:21', '2018-12-18 23:19:11'),
(42, 'Rizky', 'rizkiy@mail.com', 999999, 'Jalan Keputih no 27', 'Cleaning', '2', '2018-12-18 23:15:21', '2018-12-18 23:20:07'),
(43, 'sandri', 'sandriii@mail.com', 672790, 'Jl Kebersihan No 7', 'Cleaning', '3', '2018-12-18 23:15:21', '2018-12-18 23:19:41'),
(44, 'angga', 'angga@mail.com', 873490, 'Jl Kenangan No 78', 'Repaint', '1', '2018-12-18 23:15:21', '2018-12-18 23:18:38'),
(45, 'Ramadhan', 'raamadhan22@mail.com', 229179, 'Jl Kebahagiaan No 99', 'Cleaning', '2', '2018-12-18 23:15:21', '2018-12-18 23:17:41'),
(46, 'rangga', 'ranggaa@mail.com', 987623, 'Jl Kebersamaan', 'Cleaning', '2', '2018-12-18 23:15:21', '2018-12-18 23:16:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `admin`) VALUES
(1, 'admin', 'admin@mail.com', NULL, '$2y$10$pt6lzsNA2r6PgFP0k2J91uPXM.cowfJIPw0qw5tSe4zDU5uSVuSSK', 'BSrmzhWZRPxp9L9CH5jIsWvVAkyBbpUVcOcmZg5cXaBVajpFfqqew8YSA8zQ', '2018-12-18 05:53:24', '2018-12-18 05:53:24', 1),
(2, 'user', 'user@mail.com', NULL, '$2y$10$bJ/apAQx0LZR5U42EP7oButV5toglazoctTqJaPZmMixPAiw.14o2', 'uUqlQNP7WN2rkbr15YDvCAgUxmzcKvMtGBYE0KSiw2RTQoKOsowfjVNz8Fr6', '2018-12-18 07:26:21', '2018-12-18 07:26:21', 0),
(3, 'yudhis', 'yudhis@user.com', NULL, '$2y$10$.NHZW6mzUBT9tWaR/1gdxOg6TlVNXvmMAE8bwMk7DHRMR2c6WwQc2', '6GMsQl8QPlkLYD2x9DXvlwYMBubSlrjbA8Rs8P6APcXCwJkC8uFR0eHTli7f', '2018-12-18 07:41:47', '2018-12-18 07:41:47', 0),
(4, 'test', 'test@test.com', NULL, '$2y$10$XGgLXVLp.lDRDMEqXPHSNu3739xmWYrG98i8ONOssdacsT3OlkHAe', NULL, '2018-12-18 22:41:55', '2018-12-18 22:41:55', 0),
(5, 'yudhis', 'yudhis@mail.com', NULL, '$2y$10$CO1ro.PD4pi2PS.prmZk/.tFuJOPu9yrvQJSO.pBg9o1teFg4mKLm', '9mT2Ol2exF2gBI0Hid90Uex9mGCgzQnsQRyhTiG5TrETYsjGJC4FX62RMD36', '2018-12-18 22:48:39', '2018-12-18 22:48:39', 0),
(6, 'Bima', 'bima@mail.com', NULL, '$2y$10$DPlCelkZOTpDwUJRpO3fweZJ5Hmyd2j0pp6qk5wcAGZnb9jRZ5XlC', 'wWjwjTFg6MAq3pSN0UWTwbkASEClmighjMGPApjoSv5HqoY8SxCXwRHk8UKa', '2018-12-18 22:49:07', '2018-12-18 22:49:07', 0),
(7, 'Doni', 'doni@example.com', NULL, '$2y$10$lSie3bPPnMQvl.MqYTzvDOIkOGPk35EWdUBHmwEFu2lcvZWZFgSRm', 'DGjIAe9tdbM3BNphZrCW3Mr5eEdIxkOSaacAXEMR8fGzuorM6NAsg3SxwYe9', '2018-12-18 22:53:14', '2018-12-18 22:53:14', 0),
(8, 'Rani', 'rani@mail.com', NULL, '$2y$10$9JwMfchJeeVV6NYxBka7ZOuwwLZtFu5GqNM1o1vCnEVORLl0qxjkG', 'KbGI5rRdJm9eWAH4W8Elr36M4n9i4egcTLuLAObsdoJfpvlYZ4GxtxiPCqjB', '2018-12-18 22:55:33', '2018-12-18 22:55:33', 0),
(9, 'Diana', 'dianaaaa@mail.com', NULL, '$2y$10$hNxdZ/TSdozH26sIDVwr2euvzLLo4U17.SVKgbDVSoq7HPAp7U4VO', 'tvM3htORKnNhD7OA78F996Ns8NL92DmFEgOiT20v4nR854Z3oAtULMxmhxOD', '2018-12-18 22:57:06', '2018-12-18 22:57:06', 0),
(10, 'Bastian', 'bastian@mail.com', NULL, '$2y$10$gvrUu0RRlKiSnYeJYPicuOHEkzwpIn0DgkmFaUWu4mIc.SwjrE4tC', 'dRdcrUNjvLmqmA9rNIsZDv1Q5FX5OxU0Yi1eB9AOHn1ltDzAUhOviAAw101E', '2018-12-18 23:01:53', '2018-12-18 23:01:53', 0),
(11, 'Satria', 'satria@mail.com', NULL, '$2y$10$r4QWen0yUoTzEVk3boL56uRYlc00Aj9yjvYIKHz/z2uTcU/y2xVqG', 'U06h3kDas55xvXlJbGfyHwb7h4JsMjlx5DtRSnUqrFKsse6mXY7DfoE3W61K', '2018-12-18 23:03:55', '2018-12-18 23:03:55', 0),
(12, 'Rama', 'rama@mail.com', NULL, '$2y$10$6VpJOAcB2it4ROq2yIeBYu.ua1LsZ7ASN6pzVvKjltF4RHzPN5.Qu', 'ZD11ipKXC8F8zHcGPdXS4DOWQjxWdFigskgFJrDQCgNETFcdUammfA6HBJeS', '2018-12-18 23:05:47', '2018-12-18 23:05:47', 0),
(13, 'Lisa', 'lisa17@mail.com', NULL, '$2y$10$aTjn/vO91sqaTA3AlQ/TKOcDNyRnWOfXt6YcO2bupBZpnf/nxmnYO', 'MctrYxLw4kdgxurMK1pOUbDKKWkzVI1kRmtZfbPwPBtNXmzoduGprVFUcyCL', '2018-12-18 23:08:21', '2018-12-18 23:08:21', 0),
(14, 'Ragil', 'ragil123@mail.com', NULL, '$2y$10$PM4xlqt2EBPtKs7.Dkjs.urG.iyqm4Zu8EtNCF.4okEVozLnpdDF2', 'TVJvy2bih4krzpmzqHzfsso4KuplM3gpkd7D7PuzNvo38ejSHDRB1L0ucZby', '2018-12-18 23:09:31', '2018-12-18 23:09:31', 0),
(15, 'Ilham', 'ilham321@mail.com', NULL, '$2y$10$ie/Ilnb6rSozz3Y3ZqYo7.uyC15e.0G2h5OK5xZShxaTVhI789qhu', 'eKEEKQWJOpbxc0uMi18anQadoZUPHVQBf7tky8pMWJlrr0JjWthShUKSVzMT', '2018-12-18 23:11:28', '2018-12-18 23:11:28', 0),
(16, 'anggar', 'anggar@mail.com', NULL, '$2y$10$dDIXs11DygVYsRtKjXstSuo8jh5LOJi4..Za7X.Woi2oH.Dhl6xiy', 'Sg2Jut1zFC3EcgvupmsjRmqMssgZazFPxFxqfXT5sJyJdYjocbvSVZARkaOZ', '2018-12-18 23:12:20', '2018-12-18 23:12:20', 0),
(17, 'Dhana', 'dhanadhan@mail.com', NULL, '$2y$10$BPnBSkxjwgEbJac19RW0O.bFZgP4JTVIfc97MYgXxlVvxhz7.NPge', 'o4Qun10z5F5aFOGVgBJkdXlPgOQUmgwGCqOaby4chWypoMf2GYbD1Lo7wNNu', '2018-12-18 23:13:04', '2018-12-18 23:13:04', 0),
(18, 'Isnaini', 'isnaini@mail.com', NULL, '$2y$10$8/Ls2FaDVyHifpcgjR/c4uKi5j.ewWmUpn7RmVIhoJM/d.LAq7HPa', 'IjdEt16WceiUMs9uhIub0dCd6lRipGPLWeaczqEzACeydymrM79MnHxsO69x', '2019-06-27 20:56:50', '2019-06-27 20:56:50', 0);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `shares`
--
ALTER TABLE `shares`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shares`
--
ALTER TABLE `shares`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
