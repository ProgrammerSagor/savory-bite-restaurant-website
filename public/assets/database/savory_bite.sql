-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2025 at 10:31 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `savory_bite`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `occasion` varchar(255) DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `guests` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `table_preference` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `status` enum('pending','approved','booked','cancelled') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(3, 'Appetizers', 'appetizers', '2025-11-26 07:41:11', '2025-11-26 07:41:11'),
(4, 'Main Courses', 'main-courses', '2025-11-26 07:41:21', '2025-11-26 07:41:21'),
(5, 'Bruschetta', 'bruschetta', '2025-11-26 11:48:36', '2025-11-26 11:48:36'),
(6, 'Spring Rolls', 'spring-rolls', '2025-11-26 11:49:56', '2025-11-26 11:49:56'),
(10, 'Chicken Wings', 'chicken-wings', '2025-11-26 12:02:15', '2025-11-26 12:02:15');

-- --------------------------------------------------------

--
-- Table structure for table `dietaries`
--

CREATE TABLE `dietaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dietaries`
--

INSERT INTO `dietaries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Vegan', '2025-11-26 11:21:45', '2025-11-26 11:21:45'),
(2, 'Vegetarian ', '2025-11-26 12:15:12', '2025-11-26 12:15:12'),
(3, 'Gluten-Free ', '2025-11-26 12:15:24', '2025-11-26 12:15:24'),
(4, 'Dairy-Free', '2025-11-26 12:15:36', '2025-11-26 12:15:36'),
(5, 'Nut-Free', '2025-11-26 12:15:44', '2025-11-26 12:15:44'),
(6, 'Pescatarian ', '2025-11-26 12:15:53', '2025-11-26 12:15:53'),
(7, 'Keto / Low-Carb', '2025-11-26 12:16:05', '2025-11-26 12:16:05'),
(8, 'Halal ', '2025-11-26 12:16:15', '2025-11-26 12:16:15'),
(9, 'Kosher ', '2025-11-26 12:16:25', '2025-11-26 12:16:25');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food_products`
--

CREATE TABLE `food_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `dietary_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `food_image` varchar(255) DEFAULT NULL,
  `chef_title` varchar(255) DEFAULT NULL,
  `chef_notes` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `ingredients` longtext DEFAULT NULL,
  `nutrition` longtext DEFAULT NULL,
  `discount_percent` tinyint(3) UNSIGNED DEFAULT NULL,
  `discount_price` decimal(10,2) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food_products`
--

INSERT INTO `food_products` (`id`, `category_id`, `dietary_id`, `title`, `slug`, `food_image`, `chef_title`, `chef_notes`, `description`, `ingredients`, `nutrition`, `discount_percent`, `discount_price`, `price`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 'Truffle Mushroom Pasta', 'truffle-mushroom-pasta', 'food_images/01KB0KEKE9XZRDRCVHDB7H6FW1.jpg', 'Chef\'s Special Note', '\"This dish features hand-picked wild mushrooms and authentic Italian black truffle oil. The pasta is made fresh daily in our kitchen.\" ', '<p>&nbsp;Indulge in our signature Truffle Mushroom Pasta, a luxurious dish that combines the earthy flavors of wild mushrooms with the rich aroma of authentic Italian black truffle oil. Each bite offers a perfect harmony of creamy sauce, al dente pasta, and premium ingredients.&nbsp;</p>', '<p>&nbsp;Indulge in our signature Truffle Mushroom Pasta, a luxurious dish that combines the earthy flavors of wild mushrooms with the rich aroma of authentic Italian black truffle oil. Each bite offers a perfect harmony of creamy sauce, al dente pasta, and premium ingredients.&nbsp;</p>', '<p>&nbsp;Indulge in our signature Truffle Mushroom Pasta, a luxurious dish that combines the earthy flavors of wild mushrooms with the rich aroma of authentic Italian black truffle oil. Each bite offers a perfect harmony of creamy sauce, al dente pasta, and premium ingredients.&nbsp;</p>', NULL, NULL, 100.00, '2025-11-26 11:30:18', '2025-11-26 11:30:18'),
(2, 5, 3, 'Spicy Garlic Chicken Wings', 'spicy-garlic-chicken-wings', 'food_images/01KB7ERWM6YC41HSPSDTQBXMPX.jpg', 'Chef’s Signature Garlic Wings', 'A bold and aromatic blend of spices, slow-cooked to perfection and finished with a rich garlic glaze.', '<p><strong><em>&nbsp;Ric</em></strong></p><p>juicy, and bursting with flavor, our Spicy Garlic Chicken Wings are prepared using a traditional slow-marination technique.</p><ol><li>&nbsp; Each wing is coated&nbsp;</li><li>&nbsp;then baked and lightly fried for the perfect crisp&nbsp;</li></ol><blockquote>this is noted</blockquote><p><a href=\"https://www.google.com/\"><span style=\"text-decoration: underline;\">https://www.google.com/</span></a>&nbsp;</p><p><del>cancel</del></p><p>Each wing is coated in a handcrafted garlic–chili sauce, then baked and lightly fried for the perfect crisp.<br>&nbsp;Whether you\'re enjoying them as a snack or a full meal, these wings deliver a savory punch with every bite.&nbsp;</p>', '<h3><strong>What\'s inside:</strong></h3><blockquote>Fresh Fettuccine Pasta&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 200g<br>Wild Mushrooms Mix&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 150g<br>Black Truffle Oil&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;15ml<br>Heavy Cream&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;100ml<br>Parmesan Cheese&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;50g<br>Fresh Garlic &amp; Herbs&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; To taste<br><br></blockquote>', '<h3><strong>Per Serving (100g):</strong></h3><ul><li>Calories: 265</li><li>Protein: 22g</li><li>Carbohydrates: 4g</li><li>Fat: 18g</li><li>Saturated Fat: 3g</li><li>Sodium: 540mg</li><li>Fiber: 1g</li></ul>', 10, 13.50, 15.00, '2025-11-29 03:23:13', '2025-11-29 05:01:16'),
(4, 5, 4, 'Spicy Garlic Chicken ', 'spicy-garlic-chicken', 'food_images/01KB7HC2KHVTAH85EQV5D0317X.jpg', 'Chef’s Signature Garlic Wings', 'A bold and aromatic blend of spices with slow-cooked garlic.', '<h3><strong>&nbsp;Juicy wings coated in garlic–chili sauce, baked then lightly fried for perfect crispiness.&nbsp;</strong></h3><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam nesciunt vero fuga porro corporis sapiente ad doloribus voluptatibus magni fugiat quia obcaecati molestiae quos nulla, voluptates nostrum facilis itaque esse!</p>', '<h3>&nbsp;Chicken wings, garlic paste, chili flakes, soy sauce, olive oil, paprika, lemon juice.&nbsp;</h3><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quod repellendus laboriosam vitae tenetur cum, porro sequi optio laudantium a ex iusto similique saepe dolorum ab alias quisquam rem explicabo, sunt blanditiis quos illum odio. Officiis fugit distinctio quae voluptatibus non magnam accusantium dignissimos dolorum quia, sed vitae hic ullam. Consequatur et possimus, consequuntur quae rerum laudantium soluta aspernatur saepe cupiditate libero quas dolorem hic esse vero? Suscipit praesentium iusto dolorem voluptatem fuga consequuntur expedita et. Ut eos harum inventore minus quisquam facere eligendi odio maiores at aperiam, voluptates velit optio sapiente, quis natus, officia facilis alias quaerat quasi adipisci?</p>', '<h3>Nutrition&nbsp;</h3><ol><li>Calories 265,</li><li>&nbsp;Protein 22g,&nbsp;</li><li>Carbs 4g, Fat 18g.&nbsp;</li></ol>', 20, 16.00, 20.00, '2025-11-29 04:08:39', '2025-11-29 04:08:39'),
(5, 4, 7, 'BBQ Smoked Beef Ribs', 'bbq-smoked-beef-ribs', 'food_images/01KB7HGXN1J1RH82FJHT7AKM6Q.jpg', 'Pitmaster’s Choice Ribs', 'Slow-smoked for 6 hours for maximum tenderness.', '<p>&nbsp;Tender beef ribs glazed with smoky BBQ sauce, grilled to perfection.&nbsp;</p>', '<p>&nbsp;Beef ribs, BBQ sauce, brown sugar, garlic powder, paprika.&nbsp;</p>', '<h3><strong>Nutrition</strong></h3><ol><li>&nbsp;Calories 540,&nbsp;</li><li>Protein 35g</li><li>Carbs 12g, Fat 38g.&nbsp;</li></ol>', 10, 31.50, 35.00, '2025-11-29 04:11:18', '2025-11-29 11:50:22');

-- --------------------------------------------------------

--
-- Table structure for table `food_reviews`
--

CREATE TABLE `food_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `food_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `rating` tinyint(4) NOT NULL,
  `review` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food_reviews`
--

INSERT INTO `food_reviews` (`id`, `food_id`, `user_id`, `rating`, `review`, `created_at`, `updated_at`) VALUES
(1, 5, 3, 3, 'jkjhgkhj', '2025-11-29 13:29:06', '2025-11-29 13:29:06'),
(2, 5, 3, 3, 'jkjhgkhj', '2025-11-29 13:31:04', '2025-11-29 13:31:04'),
(3, 5, 3, 3, 'jkjhgkhj', '2025-11-29 13:33:54', '2025-11-29 13:33:54'),
(4, 5, 3, 3, 'jkjhgkhj', '2025-11-29 13:33:55', '2025-11-29 13:33:55'),
(5, 1, 3, 2, 'this is good', '2025-11-29 13:35:02', '2025-11-29 13:35:02'),
(6, 1, 3, 3, 'this is good', '2025-11-29 13:36:48', '2025-11-29 13:36:48'),
(7, 2, 1, 4, 'The flavors were perfectly balanced and everything tasted fresh. Highly recommended!', '2025-11-29 13:56:13', '2025-11-29 13:56:13'),
(8, 1, 1, 5, 'The flavors were perfectly balanced and everything tasted fresh. Highly recommended!', '2025-11-29 13:56:44', '2025-11-29 13:56:44'),
(9, 4, 3, 5, 'good food', '2025-11-30 02:22:07', '2025-11-30 02:22:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(7, '2025_11_19_135710_add_extra_fields_to_users_table', 2),
(8, '2025_11_20_143917_create_settings_table', 3),
(9, '2025_11_26_131910_create_categories_table', 4),
(12, '2025_11_26_143846_create_dietaries_table', 5),
(13, '2025_11_26_151344_create_food_products_table', 6),
(14, '2025_11_29_185509_create_food_reviews_table', 7),
(15, '2025_12_02_050645_create_bookings_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('sagorar58@gmail.com', '$2y$12$uHEiSQY7CGVuwsVGWd8xje4w8r2DZpN2TiZg1HBfaYhpGNxz3P1rq', '2025-11-19 01:41:54');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `logo_dark` varchar(255) DEFAULT NULL,
  `brand_light` varchar(255) DEFAULT NULL,
  `fav_icon` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `opening_hours` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `pinterest` varchar(255) DEFAULT NULL,
  `whats_app` varchar(255) DEFAULT NULL,
  `privacy_policy` longtext DEFAULT NULL,
  `terms_conditions` longtext DEFAULT NULL,
  `refund_policy` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `brand_name`, `bio`, `logo_dark`, `brand_light`, `fav_icon`, `email`, `phone`, `address`, `opening_hours`, `facebook`, `instagram`, `youtube`, `twitter`, `linkedin`, `pinterest`, `whats_app`, `privacy_policy`, `terms_conditions`, `refund_policy`, `created_at`, `updated_at`) VALUES
(1, 'Savory Bite', 'Fine dining experience with exceptional cuisine and warm hospitality', 'settings/01KAVDTEMGNRN3DM8D7K6X40RV.png', 'settings/01KAVDTENYA5H1408BS1W0ATK9.png', 'settings/01KAVDTEP00FGFZC9GW35NVH47.png', 'info@savorybiterestaurant.com', '+8801600000013', '123 Culinary Street, Foodville, FC 12345', NULL, 'gfhjhgfj', 'ghjgh', 'ghjhg', 'gfjh', 'jghjfh', 'ghjg', 'jghjhgj', '<p>gjhhgjgj</p>', '<p>gfjhg</p>', '<p>ghjfhgjfgjghj</p>', '2025-11-23 03:00:08', '2025-11-24 11:15:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `location` text DEFAULT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `name`, `email`, `role`, `email_verified_at`, `password`, `location`, `bio`, `image`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'justen', 'Rahman', NULL, 'justen@gmail.com', 'user', NULL, '$2y$12$q6keSAs4dxW1b3ABBpvgGOwlPsgip5IJvkQbLXs.Fh4ewQmsaNGNW', NULL, NULL, NULL, NULL, 'g23M7xMnwxODOS0CuugxWeEiHU3AAEX7p0fomsNVkTQFZSq4M7imZXTTJZUv', '2025-11-18 02:21:52', '2025-11-18 02:21:52'),
(3, 'savory', 'Bite', NULL, 'savory@gmail.com', 'user', NULL, '$2y$12$9uPZrYYJrVgoDfEYRMYxj.XE4RByjZVjISc3IJqb1lO1M7gG9.Jcq', NULL, NULL, NULL, NULL, NULL, '2025-11-18 11:14:52', '2025-11-18 11:14:52'),
(5, NULL, NULL, 'admin', 'admin@gmail.com', 'user', NULL, '$2y$12$0A3B3pKb1ITQiDPQ8JcYX.bfdgMYYXEiUjl/glBiU6xifIr3ZTFmC', NULL, NULL, NULL, NULL, 'xTMOwJPlsPXjuMxO6Jv8gQ0uwU4cPedcDYdZe7E6VMRJAm1sage5hlAmJa2w', '2025-11-20 08:11:33', '2025-11-20 08:11:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `dietaries`
--
ALTER TABLE `dietaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `food_products`
--
ALTER TABLE `food_products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `food_products_slug_unique` (`slug`),
  ADD KEY `food_products_category_id_foreign` (`category_id`),
  ADD KEY `food_products_dietary_id_foreign` (`dietary_id`);

--
-- Indexes for table `food_reviews`
--
ALTER TABLE `food_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `food_reviews_food_id_foreign` (`food_id`),
  ADD KEY `food_reviews_user_id_foreign` (`user_id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dietaries`
--
ALTER TABLE `dietaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food_products`
--
ALTER TABLE `food_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `food_reviews`
--
ALTER TABLE `food_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `food_products`
--
ALTER TABLE `food_products`
  ADD CONSTRAINT `food_products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `food_products_dietary_id_foreign` FOREIGN KEY (`dietary_id`) REFERENCES `dietaries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `food_reviews`
--
ALTER TABLE `food_reviews`
  ADD CONSTRAINT `food_reviews_food_id_foreign` FOREIGN KEY (`food_id`) REFERENCES `food_products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `food_reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
