-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2022 at 02:11 PM
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
  `id` int(10) NOT NULL,
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
(2, 'Boys Graphic Print Hosiery TShirt', '425', '400', '10', '417562076_gallery-2B.jpg', NULL, 'Shirt', 'Give your summer wardrobe a style upgrade with the HRX Boys Active T\'Shirt. Team it with a pair of shorts for your morning workout or a denim for an evening out wioth the guys.', 'Shirt', 'Shirt', 'Shirt', '2022-05-30 10:46:39', '2022-05-30 10:46:39'),
(3, 'New Gen-India Casual TShirt', '375', '350', '5', '591941084_gallery-4D.jpg', NULL, 'Shirt', 'Give your summer wardrobe a style upgrade with the HRX Men\'s Active T\'Shirt. Team it with a pair of shorts for your morning workout or a denim for an evening out wioth the guys.', 'Shirt', 'Shirt', 'Shirt', '2022-05-30 10:46:39', '2022-05-30 10:46:39'),
(4, 'Graphic Print Pure Cotton Yellow TShirt', '450', '400', '6', '845595782_gallery-5B.jpg', NULL, 'Shirt', 'Give your summer wardrobe a style upgrade with the HRX Men\'s Active T\'Shirt. Team it with a pair of shorts for your morning workout or a denim for an evening out wioth the guys.', 'Shirt', 'Shirt', 'Shirt', '2022-05-30 10:46:39', '2022-05-30 10:46:39'),
(5, 'Graphic Print Pure Cotton Green TShirt', '500', '450', '6', '561832256_gallery-5A.jpg', NULL, 'Shirt', 'Give your summer wardrobe a style upgrade with the HRX Men\'s Active T\'Shirt. Team it with a pair of shorts for your morning workout or a denim for an evening out wioth the guys.', 'Shirt', 'Shirt', 'Shirt', '2022-05-30 10:46:39', '2022-05-30 10:46:39'),
(6, 'Graphic Print Yellow TShirt', '415', '400', '10', '256378022_gallery-5D.jpg', NULL, 'Shirt', 'Give your summer wardrobe a style upgrade with the HRX Men\'s Active T\'Shirt. Team it with a pair of shorts for your morning workout or a denim for an evening out wioth the guys.', 'Shirt', 'Shirt', 'Shirt', '2022-05-30 10:46:39', '2022-05-30 10:46:39'),
(7, 'Girls Long Skirt', '500', '450', '7', '318765813_Girl 1.jpg', NULL, 'Long Skirt', 'Girl\'s Classic Versatile Stretchy Skirt All Time Trendy Long Skirt Skater', 'Long Skirt', 'Long Skirt', 'Long Skirt', '2022-05-30 10:46:39', '2022-05-30 10:46:39'),
(8, 'Girls Top Short', '475', '450', '4', '216658794_Girl 5.jpg', NULL, 'Skirt', 'Printed skirt, has a zip closure and slit on the back', 'Skirt', 'Skirt', 'Skirt', '2022-05-30 10:46:39', '2022-05-30 10:46:39'),
(9, 'Girls Red Skirt', '500', '450', '5', '508615995_Girl 2.jpeg', NULL, 'Skirt', 'Burgundy solid accordion pleats woven flared  red skirt, has an elasticated waistband, flared hem', 'Skirt', 'Skirt', 'Skirt', '2022-05-30 10:46:39', '2022-05-30 10:46:39'),
(10, 'Rainbow Skirt', '500', '500', '5', '149637547_Girl 4.jpg', NULL, 'Skirt', 'Rainbow printed flared skirt with pom-pom and tiered detail, has an elasticated waistband with drawstring closure, flared hem', 'Skirt', 'Skirt', 'Skirt', '2022-05-30 10:46:39', '2022-05-30 10:46:39'),
(11, 'Girls Black Skirt', '375', '350', '10', '449992476_Girl 3.jpg', NULL, 'Skirt', 'Black solid pencil skirt, has an elasticated waistband, straight hem', 'Skirt', 'Skirt', 'Skirt', '2022-05-30 10:46:39', '2022-05-30 10:46:39'),
(12, 'Boys Yellow Shirt Pant', '600', '500', '3', '241244209_img1.jpeg', NULL, 'TShirt', 'Yellow self-design T-shirt and has a polo collar and  a Pant', 'TShirt', 'TShirt', 'TShirt', '2022-05-30 10:46:39', '2022-05-30 10:46:39'),
(13, 'Boys Red Kurta Pajama', '550', '500', '7', '319460977_img2.jpg', NULL, 'Kurta Pajama', 'Red printed kurta with dhoti pants', 'Kurta Pajama', 'Kurta Pajama', 'Kurta Pajama', '2022-05-30 10:46:39', '2022-05-30 10:46:39'),
(14, 'Winter Jacket', '500', '500', '3', '860091744_exclusive.png', NULL, 'Jacket', 'Exclusive Green Jacket with zip', 'Jacket', 'Jacket', 'Jacket', '2022-05-30 10:46:39', '2022-05-30 10:46:39'),
(15, 'Girls Yellow Short Skirt', '450', '400', '5', '567722764_img3.jpg', NULL, 'Skirt', 'Bring in the ethnic vibe with this tiered yellow skirt. Printed with floral motifs, it is easy to pair and flatters the waist with smocked detailing. Time to add a touch of style to your every spin.', 'Skirt', 'Skirt', 'Skirt', '2022-05-30 10:46:39', '2022-05-30 10:46:39'),
(16, 'MammyPoko Pants Extra-L', '500', '500', '15', '396692613_buy-1.jpg', NULL, 'Dippers', 'Set of 2 Premium Wonder Pullups Diapers - Medium - 36 Pieces each', 'Dippers', 'Dippers', 'Dippers', '2022-05-30 10:46:39', '2022-05-30 10:46:39'),
(17, 'HIMALAYA Happy Gift Pack', '675', '600', '10', '911623107_product-6.jpg', NULL, 'Gift Pack', 'Himalaya Babies necessary product gift pack, 100 ml each', 'Gift Pack', 'Gift Pack', 'Gift Pack', '2022-05-30 10:46:39', '2022-05-30 10:46:39'),
(18, 'HIMALAYA Baby Lotion and Massage Oil', '425', '400', '7', '982799407_gallery-7B.jpg', NULL, 'Lotion', 'Himalaya babies Lotion and  Massage Oil 100 ml', 'Lotion', 'Lotion', 'Lotion', '2022-05-30 10:46:39', '2022-05-30 10:46:39'),
(19, 'Cheesy Baby Sleeping Bed Combo', '650', '600', '8', '566945768_buy-3.jpg', NULL, 'Bed Combo', 'TC Multi Floral Polycotton net bed with Pillow Covers', 'Bed Combo', 'Bed Combo', 'Bed Combo', '2022-05-30 10:46:39', '2022-05-30 10:46:39'),
(20, 'Fareto Cotton Bedding Set', '675', '600', '5', '306893207_gallery-11C.jpg', NULL, 'Bed Set', 'Set content: 2 bedsheet with 4 pillow covers, Quality: fine, Colour: blue , Pattern: graphic', 'Bed Set', 'Bed Set', 'Bed Set', '2022-05-30 10:46:39', '2022-05-30 10:46:39'),
(21, 'YNA Baby Kick Play Gym Mosquito Net', '500', '450', '6', '664139462_gallery-10B.jpg', NULL, 'Mosquito Net', 'Babies Long-lasting superior quality zippers and double-stitched lining which stays like new even post washing Mosquito Net', 'mosquito net', 'mosquito net', 'mosquito net', '2022-05-30 10:46:39', '2022-05-30 10:46:39'),
(22, 'Subhodeep Moitra', '134', '100', '1', '20220530120214_gettyimages-538653565_resized.jpg', NULL, 'test', 'test', 'test', 'test', 'test', '2022-05-30 12:02:21', '2022-05-30 12:02:21'),
(23, 'test', '122', '100', '22', '20220530120302_gettyimages-525884721_resized.jpg', NULL, 'test', 'test', 'test', 'test', 'test', '2022-05-30 12:03:57', '2022-05-30 12:03:57'),
(24, 'test', '134', '111', '22', '20220530120402_gettyimages-906588980_resized.jpg', NULL, 'test', 'test', 'test', 'test', 'test', '2022-05-30 12:04:53', '2022-05-30 12:04:53');

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
(6, '2022_05_28_174436_create_manage__products__posts_table', 3),
(7, '2022_05_26_203627_create_signup_table', 4);

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
-- Table structure for table `signups`
--

CREATE TABLE `signups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pnum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conpass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `signups`
--

INSERT INTO `signups` (`id`, `fname`, `uname`, `pnum`, `email`, `Password`, `conpass`, `created_at`, `updated_at`) VALUES
(1, 'test1', 'cheems', '9876543210', 'cheems@gmail.com', '$2y$10$k4SnTOVzlyLE2gUwcJOinuTMLCXNJG5lx9I4.nsySO284PziyRqyq', '$2y$10$5C5opXtrESg3P0V1B2okLOde/K/bWy66mpsUeGUp3FDTL3XiewtI2', '2022-05-30 00:32:51', '2022-05-30 00:32:51'),
(2, 'test2', 'test2', '9876543210', 'subhodeep2000@gmail.com', '$2y$10$swqSBSEyOgJWGH.F1oR8fucqOnSr/wI51GUBApPbKU2pkmq.FBW5i', '$2y$10$pkqvMw5xRNHZ/OKBRBA4IurFydr4844LwyAVwNTMZK2L5gZNm7s8K', '2022-05-30 01:09:19', '2022-05-30 01:09:19'),
(3, 'user1', 'user1', '9876543210', 'test@gmail.com', '$2y$10$ENHUF0vuiHmqR4yk0qL/Z.W5AcsK2kQcak1aJbjTiwQlXaDSRdw2S', '$2y$10$n39fT.8OkT.YmEf3fRQa5.E3UiTqnb/IUMmcP2D1AJd2uOZKRxX7q', '2022-05-30 06:04:54', '2022-05-30 06:04:54'),
(4, 'user2', 'user2', '9876543210', 'test@gmail.com', '$2y$10$aq8PnPABBYFP1uOnD9i0bemdC50p5gGgZM5i3JEn3X264FsZDK4yq', '$2y$10$auAwzMy8mMb0N24F3A05veMyEu/57yYk0pif1jtBskwUMSt0efm5u', '2022-05-30 06:06:04', '2022-05-30 06:06:04'),
(5, 'user3', 'user3', '9876543210', 'adityadas@gmail.com', '$2y$10$r93oBXFahzUYxDXPjC4KK.qtStOJt8Hr5W62aUIFBR/Sxcn4ieJNC', '$2y$10$M8C7ovx0OYeiUsymGvY20OnUs9J/wnke5qUeDK5Ia/BdVLLr4S60C', '2022-05-30 06:07:00', '2022-05-30 06:07:00'),
(9, 'testuser', 'testuser', '9876543210', 'cheems@gmail.com', '$2y$10$QLuGp6TREr9DRdKl5kzeZekUgBNzxPxQqK2im0dPvHC6mm9LI9uLK', '$2y$10$XOPaQMM3nAm2WgqHJKvtE.6cbM5dH4JtkivS.znA6IWKLbQ9jUIa.', '2022-05-30 06:12:45', '2022-05-30 06:12:45'),
(11, 'subhodeep', 'subhodeep', '9876543210', 'cheemss@gmail.com', '$2y$10$sct7Z.yPA/RgM9XdZoU9gOJJKSDsBIX.rQr5MVSKGGDsw58Wl78H6', '$2y$10$j/EtkX7tAq.TSpxj6ogF2.l5NDundb4/yZHXnwCziJwD.tWI7nE5S', '2022-05-30 06:14:11', '2022-05-30 06:14:11');

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
-- Indexes for table `signups`
--
ALTER TABLE `signups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `signup_username_unique` (`uname`),
  ADD UNIQUE KEY `signup_password_unique` (`Password`);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
-- AUTO_INCREMENT for table `signups`
--
ALTER TABLE `signups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
