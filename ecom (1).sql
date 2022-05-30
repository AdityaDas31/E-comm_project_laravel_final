-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2022 at 09:04 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
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
-- Table structure for table `manage__categories__posts`
--

CREATE TABLE `manage__categories__posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categories` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(255) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manage__categories__posts`
--

INSERT INTO `manage__categories__posts` (`id`, `categories`, `status`, `created_at`, `updated_at`) VALUES
(1, 'test1', 1, '2022-05-28 09:20:29', '2022-05-28 09:20:29');

-- --------------------------------------------------------

--
-- Table structure for table `manage__products__posts`
--

CREATE TABLE `manage__products__posts` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) DEFAULT NULL,
  `mrp` varchar(1000) DEFAULT NULL,
  `price` varchar(1000) DEFAULT NULL,
  `qty` varchar(1000) DEFAULT NULL,
  `img_name` varchar(1000) DEFAULT NULL,
  `img_path` varchar(1000) DEFAULT NULL,
  `short_desc` varchar(1000) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `meta_title` varchar(1000) DEFAULT NULL,
  `meta_desc` varchar(1000) DEFAULT NULL,
  `meta_keyword` varchar(1000) DEFAULT NULL,
  `created_at` varchar(1000) NOT NULL DEFAULT current_timestamp(),
  `updated_at` varchar(1000) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage__products__posts`
--

INSERT INTO `manage__products__posts` (`id`, `name`, `mrp`, `price`, `qty`, `img_name`, `img_path`, `short_desc`, `description`, `meta_title`, `meta_desc`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(6, 'test1', '134', '100', '22', '04_gettyimages-507724738_resized.jpg', 'public/images/j3ybZu24QWRnzfzqT41oMDkX9xjxtPfP176drdcr.jpg', 'test', 'test', 'test', 'test', 'test', '2022-05-29 06:52:28', '2022-05-29 06:52:28'),
(7, 'test2', '150', '120', '22', '04_gettyimages-455839075_resized.jpg', 'public/images/bHhxIFwyO8jAmjEf7uGn6DUzQk6XN7cPyOhvLDxp.jpg', 'test', 'test', 'test', 'test', 'test', '2022-05-29 07:02:53', '2022-05-29 07:02:53'),
(8, 'test3', '147', '123', '22', '02_gettyimages_559175997_small_resized.jpg', 'public/images/BY60GNhzxS2cG87ZlawaKLsGMAQvkAtRo0YU4yAA.jpg', 'test', 'test', 'test', 'test', 'test', '2022-05-29 07:03:40', '2022-05-29 07:03:40');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_28_140154_create_manage__categories__posts_table', 2),
(6, '2022_05_28_174436_create_manage__products__posts_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('subhodeep2000@gmail.com', '$2y$10$U5LDiCq6b56.DoNuaBnoh.aN9Z5CxusW3oH5czMoAdrItqV9bZJd6', '2022-05-23 06:58:34'),
('adityadas@gmail.com', '$2y$10$pA//q9roW.e9g4oeRG7Y3eZeAqV1eVsYZcyy8vuawQF5695EO2NtO', '2022-05-23 22:22:33'),
('adityadas39e@gmail.com', '$2y$10$VaxxPqe10Uq/N4tSLDRkMueP.qZBknAyVxnvmov5/MxXRgCak2LHu', '2022-05-23 22:23:51');

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
(1, 'test', 'test@gmail.com', NULL, '$2y$10$h8FVJLGaZOQ92hQ0Rw69b..TgZmwydkpDg6hdq8RMS1tKV7fjuQeC', NULL, '2022-05-23 01:22:03', '2022-05-23 01:22:03'),
(2, 'Subhodeep Moitra', 'subhodeep2000@gmail.com', NULL, '$2y$10$UwfeY3ayaLlLuyxq1KLxG.esL0GSexQWNe3dsiq.PpvH0nmVKVXf6', NULL, '2022-05-23 02:26:37', '2022-05-23 02:26:37'),
(3, 'Vimdhayak Ji', 'cheems@gmail.com', NULL, '$2y$10$Pv/ZImcIyvjg518ZZSbxjeRpu01ZapZl9Cwzyyqi.eCMX3XEPAre.', NULL, '2022-05-23 06:39:55', '2022-05-23 06:39:55'),
(4, 'user', 'adityadas@gmail.com', NULL, '$2y$10$Mh8Q7WP0fWgGYVQfO6VXcugmCEhj154t1CcfMmqybo5Qr0okliwSy', NULL, '2022-05-23 22:20:39', '2022-05-23 22:20:39'),
(5, 'Vimdhayak Ji', 'adityadas39e@gmail.com', NULL, '$2y$10$Oe31Z9.jx10.7HNl2dJEOOg0wz0torrL0Wc5OGgbfOiZlnJC3YzkS', NULL, '2022-05-23 22:23:41', '2022-05-23 22:23:41');

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
-- Indexes for table `manage__categories__posts`
--
ALTER TABLE `manage__categories__posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage__products__posts`
--
ALTER TABLE `manage__products__posts`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `manage__categories__posts`
--
ALTER TABLE `manage__categories__posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manage__products__posts`
--
ALTER TABLE `manage__products__posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
