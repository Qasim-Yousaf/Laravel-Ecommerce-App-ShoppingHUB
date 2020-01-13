-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2019 at 05:13 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppinghub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$dpOb8/Fahpu5UJ2ZIbkqTeajBLh3mcu1IcAViJsmGtKoyqEyakzhO', 1, '2018-12-31 05:49:46', '2018-12-31 05:49:46'),
(10, 'ali', 'ali@gmail.com', '$2y$10$694XFqB2eIeCcpWjPzQVMeFhtfI7.gmtgvCzH/0iYbSPXrzzCo6mq', 1, '2019-04-29 14:55:31', '2019-04-29 14:55:31'),
(11, 'bukhari', 'bukhari@gmail.com', '$2y$10$u3cPnE9Ebl66lELuX68VFOJaEVBJtBPe.g7P34A65yMaDiA4ZSL8u', 1, '2019-04-29 14:58:28', '2019-04-29 14:58:28'),
(13, 'Qasim', 'admin2@gmail.com', '$2y$10$x9fidAB6RkRbRAIuDzr//eduV2dV42M9H2nh5PObwzW1z8tcKWpcu', 1, '2019-04-29 15:03:12', '2019-04-29 15:03:12');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `title`, `subtitle`, `created_at`, `updated_at`) VALUES
(3, '1556537541.jpg', 'Nokia', 'Mad10', '2019-04-29 06:32:23', '2019-04-29 06:32:23'),
(6, '1556994485.jpg', 'xx', 'll', '2019-05-04 13:28:06', '2019-05-04 13:28:06');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(11, 'Multiple Product', '2019-05-27 04:07:27', '2019-06-22 16:38:54'),
(12, 'Shoe', '2019-06-22 16:27:31', '2019-06-22 16:27:31');

-- --------------------------------------------------------

--
-- Table structure for table `massages`
--

CREATE TABLE `massages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `massage` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `massages`
--

INSERT INTO `massages` (`id`, `name`, `email`, `subject`, `massage`, `created_at`, `updated_at`) VALUES
(1, 'Qasim', 'qmughal126@gmail.com', 'web security', 'uuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu', '2019-04-29 04:50:07', '2019-04-29 04:50:07'),
(2, 'bukhari', 'qmughal126@gmail.com', 'web security', 'ahmed nawazish bukhari', '2019-04-29 04:50:58', '2019-04-29 04:50:58'),
(3, 'ahmed', 'ahmed@gmail.com', 'policy', 'this is policy massage', '2019-04-29 06:00:15', '2019-04-29 06:00:15'),
(4, 'Bag', 'admin@gmail.com', 'pakistan', 'Java performance is slower than C\r\nProvisions are added to reduce overhead at runtime.\r\nIncorporation of multithreading enhance the overall execution speed.\r\nJust-in-Time (JIT) can compile the byte code into machine code.\r\nCan sometimes be even faster than compiled C code!', '2019-04-29 06:08:09', '2019-04-29 06:08:09'),
(5, 'Qasim', 'user@gmail.com', 'opoo', 'hhhhhhhhhhojij n uh      h uhh', '2019-04-29 11:47:59', '2019-04-29 11:47:59'),
(6, 'bukhari', 'bukhari@gmail.com', 'web security', 'this is not issue', '2019-04-29 22:46:57', '2019-04-29 22:46:57'),
(7, 'sheraz', 'qmughal126@gmail.com', 'weeeeeb', 'sjkdnnfckjjsndfcnslkfdnmksdm', '2019-04-30 02:38:34', '2019-04-30 02:38:34'),
(8, 'Shahzaib', 'shahzaib.nayyar@gmail.com', 'Remarks', 'Good', '2019-04-30 02:43:10', '2019-04-30 02:43:10'),
(9, 'Qasim', 'admin@gmail.com', 'web security', 'this is pakistan', '2019-05-10 22:40:21', '2019-05-10 22:40:21');

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
(12, '2018_12_24_102951_create_admins_table', 1),
(15, '2014_10_12_000000_create_users_table', 2),
(16, '2018_12_17_031904_create_products_table', 2),
(17, '2018_12_17_033247_create_categories_table', 2),
(18, '2018_12_23_082208_create_banners_table', 2),
(19, '2018_12_24_103848_create_product_category_table', 2),
(20, '2018_12_31_192521_create_admins_table', 2),
(24, '2019_04_28_184027_create_massages_table', 3),
(25, '2019_06_22_193248_create_cart_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `famous` int(25) DEFAULT NULL,
  `feature` int(25) DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` int(255) NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`, `price`, `brand`, `quantity`, `created_at`, `updated_at`, `famous`, `feature`, `color`, `product_code`, `size`) VALUES
(11, 'Nike Shoe', 'Explore the latest shoes for men for every sport, workout and everyday look. Built for ultimate performance and sneaker style, Nike shoes for men deliver cutting-edge technologies specific to your sport in iconic designs', '1558963152.jpg', 1000, 'nike', 33, '2019-05-27 08:19:13', '2019-05-27 08:19:13', 1, NULL, 'black', 11, 'medium'),
(12, 'Airpod', 'The new AirPods — complete with Wireless Charging Case — deliver the wireless headphone experience, reimagined. Just pull them out of the case and they’re ready to use with your iPhone, Apple Watch, iPad, or Mac.\r\n\r\nAfter a simple one-tap setup, AirPods work like magic. They’re automatically on and always connected. AirPods can even sense when they’re in your ears and pause when you take them out.', '1558963926.jpg', 900, 'Apple', 23, '2019-05-27 08:32:06', '2019-06-22 16:39:11', NULL, NULL, 'bkue', 12, 'small'),
(13, 'Cotton Pent', 'he skinny jeans are surprisingly slimming. ... The comfortable fit is from the design of the jeans as well as the fabric. The fabric content is a blend of of 81 %: Cotton, 17 %: Polyester, and 2 %: Elastane designed to S-T-R-E-T-C-H. It\'s about the stretch with LEVI”s deNiZEN jeans', '1558964806.jpg', 2300, 'mark', 2, '2019-05-27 08:46:46', '2019-05-27 08:46:46', 1, NULL, 'white', 33, 'large'),
(14, 'Dell Latitude', 'Latitude is Dell\'s business laptop brand, designed and manufactured mainly by Compal and Quanta. The Latitude competes with the ThinkPad series from Lenovo (formerly IBM), the EliteBook series from HP and Travelmate series from Acer.', '1558964951.jpg', 10000, 'Dell', 23, '2019-05-27 08:49:11', '2019-05-27 08:49:11', NULL, NULL, 'white', 33, 'medium'),
(15, 'Cotton Shirt', 'this is women shirt the one of the best in the market.Latitude is Dell\'s business laptop brand, designed and manufactured mainly by Compal and Quanta. The Latitude competes with the ThinkPad series from Lenovo (formerly IBM), the EliteBook series from HP and Travelmate series from Acer.', '1558965182.jpg', 2000, 'Alpha', 23, '2019-05-27 08:53:02', '2019-05-27 08:53:02', NULL, NULL, 'yellow', 44, 'large'),
(20, 'Women Hoodie', 'Et tempora id nostrum saepe amet doloribus deserunt totam officiis cupiditate asperiores quasi accusantium voluptatum dolorem quae sapiente voluptatem ratione odio iure blanditiis earum fuga molestiae alias dicta perferendis inventore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus soluta assumenda sed optio, error at?', '1561237981.jpg', 120000, 'Apple', 1, '2019-05-29 09:48:07', '2019-06-22 16:13:01', NULL, 1, 'green', 55, 'small'),
(21, 'Regular Shirt', 'this is rregular shirt and i am the owner of this shirt', '1559143558.jpg', 1200, 'Alphet', 12, '2019-05-29 10:25:58', '2019-05-29 10:25:58', 1, NULL, 'blue', 552, 'large'),
(22, 'Shirt', 'Et tempora id nostrum saepe amet doloribus deserunt totam officiis cupiditate asperiores quasi accusantium voluptatum dolorem quae sapiente voluptatem ratione odio iure blanditiis earum fuga molestiae alias dicta perferendis inventore!\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus soluta assumenda sed optio, error at?', '1559143744.jpg', 120000, 'zara', 12, '2019-05-29 10:29:04', '2019-05-29 10:29:04', 1, 1, 'red', 334, 'medium'),
(23, 'Qmobile A10', 'Qmobile Qmobile Qmobile Qmobile Qmobile Qmobile Qmobile Qmobile Qmobile Qmobile Qmobile Qmobile Qmobile Qmobile Qmobile Qmobile Qmobile Qmobile Qmobile Qmobile Qmobile Qmobile', '1561236806.png', 12000, 'Qmmobile', 12, '2019-06-22 15:53:26', '2019-06-22 15:53:26', 1, NULL, 'red', 1122, 'large'),
(24, 'S10', 'samsung Galaxy S10 samsung Galaxy S10 samsung Galaxy S10 samsung Galaxy S10 samsung Galaxy S10 samsung Galaxy S10 samsung Galaxy S10 samsung Galaxy S10 samsung Galaxy S10 samsung Galaxy S10', '1561237011.png', 12000, 'Samsung', 22, '2019-06-22 15:56:51', '2019-06-22 15:56:51', NULL, NULL, 'red', 12222, 'large'),
(25, 'Dress pent', 'Suspenders or braces (British English, Australian English) are fabric or leather straps worn over ... Life magazine stated in 1938 that 60% of American men chose belts over ... To accurately measure suspenders, first start by measuring from the back pant line, then cross over the opposite shoulder down to the front pant line.', '1561239200.jpg', 1000, 'Alpha', 1200, '2019-06-22 16:00:11', '2019-06-22 16:33:20', NULL, NULL, 'Black', 1000, 'small');

-- --------------------------------------------------------

--
-- Table structure for table `product_categorys`
--

CREATE TABLE `product_categorys` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categorys`
--

INSERT INTO `product_categorys` (`id`, `product_id`, `category_id`, `created_at`, `updated_at`) VALUES
(10, 11, 11, '2019-05-27 08:19:13', '2019-05-27 08:19:13'),
(11, 12, 11, '2019-05-27 08:32:06', '2019-05-27 08:32:06'),
(12, 13, 11, '2019-05-27 08:46:46', '2019-05-27 08:46:46'),
(13, 14, 11, '2019-05-27 08:49:12', '2019-05-27 08:49:12'),
(14, 15, 11, '2019-05-27 08:53:02', '2019-05-27 08:53:02'),
(19, 20, 11, '2019-05-29 09:48:07', '2019-05-29 09:48:07'),
(20, 21, 11, '2019-05-29 10:25:58', '2019-05-29 10:25:58'),
(21, 22, 11, '2019-05-29 10:29:04', '2019-05-29 10:29:04'),
(22, 23, 11, '2019-06-22 15:53:26', '2019-06-22 15:53:26'),
(23, 24, 11, '2019-06-22 15:56:51', '2019-06-22 15:56:51'),
(25, 25, 11, '2019-06-22 16:36:04', '2019-06-22 16:36:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 'user', 'user@gmail.com', NULL, '$2y$10$Djq8L3XdklaQcfn1L1Bchum6zvSEMBYcLG5u/CFfuLTcBwa9a.KTy', 'NYzpxvZBR5SlpnjXPOZT4t2V80dyIGg3bCl8QREy02ZPM4aprZSSmnnKp2vM', '2019-05-10 00:51:00', '2019-05-10 00:51:00');

-- --------------------------------------------------------

--
-- Table structure for table `_admins_`
--

CREATE TABLE `_admins_` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cart_user_email_unique` (`user_email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `massages`
--
ALTER TABLE `massages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categorys`
--
ALTER TABLE `product_categorys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_category_product_id_index` (`product_id`),
  ADD KEY `product_category_category_id_index` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `_admins_`
--
ALTER TABLE `_admins_`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `_admins__email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `massages`
--
ALTER TABLE `massages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `product_categorys`
--
ALTER TABLE `product_categorys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `_admins_`
--
ALTER TABLE `_admins_`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_categorys`
--
ALTER TABLE `product_categorys`
  ADD CONSTRAINT `product_category_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
