-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2021 at 02:57 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diary`
--

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_11_20_161036_create_sessions_table', 1),
(7, '2021_11_20_162300_create_travellers_table', 1);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('L4JTSW5ySjdHUADAhv6zzhcKz0D06C0CFaGFYc3U', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZEp3NlhSVzFYQlVwRGJvTUlqc2pZZFQwTzQyZ0FIV2M5UHZpZ3lpaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9yZWdpc3RlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1637502577);

-- --------------------------------------------------------

--
-- Table structure for table `travellers`
--

CREATE TABLE `travellers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doorno` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `streetname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college_id_card` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passedout` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `travellers`
--

INSERT INTO `travellers` (`id`, `email`, `username`, `mobile`, `firstname`, `lastname`, `gender`, `doorno`, `streetname`, `city`, `state`, `country`, `pincode`, `degree`, `branch`, `college_id_card`, `passedout`, `password`, `created_at`, `updated_at`) VALUES
(1, 'ramanathan.developer.in@gmail.com', '_mr.traveller___', '8838027432', 'Ramanathan', 'K', '1', '3/751', '36,Krishna Kovil Street, Nallamangalam', 'Virudhunagar', 'Tamil Nadu', 'India', '626111', 'BE', 'CSE', '1637426091.pdf', '2020', '$2y$10$2bPosqQUSf5OhIPuUA1S9.nin2TLo9OVDftgiBtwGqnD9cQC05g/G', '2021-11-20 11:04:52', '2021-11-20 12:22:26'),
(2, 'keerthy@gmail.com', 'keerthy', '87514514545', 'Keerthy', 'N', '2', '3/751', '36,Krishna Kovil Street, Nallamangalam', 'Virudhunagar', 'Tamil Nadu', 'India', '626111', 'BE', 'CSE', '1637426964.pdf', '2020', '$2y$10$zTO0N3S.5j4VgATrQogJOOJcCUi4Nbdc5ig2JsYnIk/lncem2aVMO', '2021-11-20 11:19:24', '2021-11-20 11:19:24'),
(5, 'ramanathan.developer.in@gmail.com', '_mr.traveller____', '+918838027431', 'Ramanathan', 'K', '1', '3/751', '36,Krishna Kovil Street, Nallamangalam', 'Virudhunagar', 'Tamil Nadu', 'India', '626111', 'BE', 'CSE', '1637501736.pdf', '2020', '$2y$10$sspMzVUnpVFIFVtguP4/reAGpMo10bo4Zv0giExjbK8HGObdFISCO', '2021-11-21 08:05:36', '2021-11-21 08:05:36'),
(6, 'ramanathan.developer.in@gmail.com', '_mr.traveller__i_', '+918838027431', 'Ramanathan', 'K', '1', '3/751', '36,Krishna Kovil Street, Nallamangalam', 'Virudhunagar', 'Tamil Nadu', 'India', '626111', 'BE', 'CSE', '1637501895.pdf', '2020', '$2y$10$hXXK3mxr8zY17/Jj7u2PTOZ9IEer8NaAYJmDd.KdZDubmzpgwwyN6', '2021-11-21 08:08:15', '2021-11-21 08:08:15'),
(7, 'ramanathan.developer.in@gmail.com', 'keerthy_daalu', '+918838027431', 'Ramanathan', 'K', '2', '3/751', '36,Krishna Kovil Street, Nallamangalam', 'Virudhunagar', 'Tamil Nadu', 'India', '626111', 'BE', 'CSE', '1637502108.jpg', '2020', '$2y$10$ds8u6QPhLNuoALyZbYjouOUF3ANJ3D1T3FvsaITKEpy4oIj30lZTW', '2021-11-21 08:11:48', '2021-11-21 08:11:48'),
(8, 'ramanathan.developer.in@gmail.com', 'keerthy_daaluu', '+918838027431', 'Ramanathan', 'K', '2', '3/751', '36,Krishna Kovil Street, Nallamangalam', 'Virudhunagar', 'Tamil Nadu', 'India', '626111', 'BE', 'CSE', '1637502270.jpg', '2020', '$2y$10$0XeN9Z32dXAgSRf7vKvR5ugH.YVEfFEE2qjf7OmcJLBAnyyVDBv/q', '2021-11-21 08:14:30', '2021-11-21 08:14:30'),
(9, 'ramanathan.developer.in@gmail.com', 'keerthy_daaluuU', '+918838027431', 'Ramanathan', 'K', '2', '3/751', '36,Krishna Kovil Street, Nallamangalam', 'Virudhunagar', 'Tamil Nadu', 'India', '626111', 'BE', 'CSE', '1637502415.jpg', '2020', '$2y$10$QbipcuyRFJVPLP2g9xOeaesQne.jgdHHSUIPFX1IlQlPTFdvnJP0u', '2021-11-21 08:16:55', '2021-11-21 08:16:55'),
(10, 'ramanathan.developer.in@gmail.com', 'keerthy_daaluuUi', '+918838027431', 'Ramanathan', 'K', '2', '3/751', '36,Krishna Kovil Street, Nallamangalam', 'Virudhunagar', 'Tamil Nadu', 'India', '626111', 'BE', 'CSE', '1637502577.jpg', '2020', '$2y$10$mNlKOmDrNsDpnmioBPGgf.Oy6JoLhXkG6N8yJxmZZ5s39ZL/MvGLi', '2021-11-21 08:19:37', '2021-11-21 08:19:37');

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `travellers`
--
ALTER TABLE `travellers`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `travellers`
--
ALTER TABLE `travellers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
