-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 15, 2021 at 09:09 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `avibilities`
--

CREATE TABLE `avibilities` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `avibilities`
--

INSERT INTO `avibilities` (`id`, `name`, `active`, `create_at`) VALUES
(1, 'In Stock', 1, '2021-08-15 08:42:22'),
(2, 'Out of Stock', 1, '2021-08-15 08:42:27'),
(3, '1test', 0, '2021-08-15 08:42:35');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `icon` varchar(150) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `active`, `icon`, `total`, `create_at`) VALUES
(3, 'Accountant', 0, 'fa-university', 230, '2019-09-22 14:43:44'),
(4, 'Web Development', 0, 'fa-android', 109, '2019-09-22 14:43:44'),
(5, 'HR', 0, 'fa-user', 100, '2019-09-22 14:43:44'),
(6, 'Economic', 0, 'fa-usd', 50, '2019-09-22 14:49:19'),
(7, 'Customer Service/Support', 0, ' fa-comments\r\n', 44, '2019-09-22 14:49:25'),
(8, 'Law', 0, ' fa-book\r\n', 60, '2019-09-24 08:01:09'),
(9, 'Health/Medicine', 0, ' fa-hospital-o\r\n', 85, '2019-09-24 08:01:09'),
(10, 'Engineer ', 0, ' fa-cog\r\n', 102, '2019-09-24 08:05:11'),
(11, 'Men', 1, NULL, NULL, '2021-08-15 06:59:55'),
(12, 'Women', 1, NULL, NULL, '2021-08-15 07:00:01'),
(13, 'Kids', 1, NULL, NULL, '2021-08-15 07:00:07'),
(14, 'Sports', 1, NULL, NULL, '2021-08-15 07:00:12'),
(15, 'Electronics', 1, NULL, NULL, '2021-08-15 07:00:17');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `gender` varchar(9) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(120) NOT NULL,
  `photo` varchar(120) DEFAULT 'uploads/members/photos/default.png',
  `address` varchar(120) DEFAULT NULL,
  `description` longtext,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `first_name`, `last_name`, `gender`, `email`, `phone`, `username`, `password`, `photo`, `address`, `description`, `active`, `create_at`) VALUES
(1, 'Teng', 'Touch', 'male', 'touchteng@gmail.com', '086836457', 'tengboss', '$2y$10$zw5FHYdGFDArk4WJf6B2Euo/YsS7iwMIcWVXH/7Jkzwewsq5rNsHq', 'uploads/backend/members/4Q9G8LM4qnm7VXdrV1KmUGqK4t9OFK1sHHtVU0Q7.jpeg', 'BTB', '<p><strong>Fuck You Bitch</strong></p>', 0, '2019-07-28 04:38:27'),
(2, 'Teng', 'Touch', 'Male', 'Touchteng@gamil.com', '086836457', 'Teng Boss', '$2y$10$rWeFH0CfEPBmIoea77.gY.hGIp7P4OMidCv0xvnsqjLyOzTPvLHU2', 'uploads/backend/members/5paxawf0QgdVZmSJLsSf62rTx9hrqS9ddIsYIOfr.jpeg', 'BTB', NULL, 0, '2019-07-28 04:57:49');

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
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` longtext NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `description`, `active`, `create_at`) VALUES
(1, 'Fuck', 'Fucking is the most popular exercise in Cambodia', 0, '2019-07-27 08:20:16'),
(2, 'Fuck', 'excursive', 0, '2019-07-27 08:20:40'),
(3, 'Love is a Feeling of Love', '<p><strong>Are born to love</strong>. <s>Love can be defined in an infinite amount of words</s>, <em>terms and definitions.</em> More important than the definition itself is the actual act of love. Love is profound and we as humans encounter love at every, albeit different stages of our lives. For most individuals, we experience love as early on as birth, our first memories of love are generally between three and five years of age, whether that memory is being tucked in by a parent or relative, or a kiss goodnight. Love is a feeling</p>', 0, '2019-07-27 09:31:03'),
(4, 'A kind of Love', '<p><strong>Intro to lit</strong>. <em>125 A Kind of Love Love is eternal</em>. <s>The boundary of love is not defined yet and can never be defined.</s> Love has created a wonderful cities and has also destroyed the wonderland. Some classify love as something that you feel for some people sometimes. It is often linked or used interchangeably with lust. Others feel that it is something that is constant and untouched by judgement and feeling. The true eternal love is hard to find in this world and few lucky people</p>', 0, '2019-07-27 10:21:42');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL DEFAULT '1',
  `size_id` int(11) NOT NULL,
  `photo` varchar(120) NOT NULL DEFAULT 'default.png',
  `detail` longtext,
  `category_id` int(11) NOT NULL,
  `avibility_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `active`) VALUES
(1, 'Administrator', 0),
(2, 'Manager', 0),
(3, 'hello World!', 0),
(4, 'TouchTeng', 0),
(5, 'TouchTeng', 0),
(6, 'Manager', 1),
(7, 'Assistant', 1),
(8, 'Sale', 1),
(9, 'CEO', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `active`, `create_at`) VALUES
(6, 'S', 1, '2021-08-15 07:00:50'),
(7, 'M', 1, '2021-08-15 07:00:53'),
(8, 'L', 1, '2021-08-15 07:00:57'),
(9, 'XL', 1, '2021-08-15 07:01:02'),
(10, 'XLL', 1, '2021-08-15 07:01:05'),
(11, 'Test1', 0, '2021-08-15 07:21:55');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `active`, `create_at`) VALUES
(1, 'For Baby', 0, '2021-08-15 08:37:20'),
(2, 'For Him', 1, '2021-08-15 08:37:50'),
(3, 'For Baby', 1, '2021-08-15 08:37:53'),
(4, 'Gift to Say Thank You', 1, '2021-08-15 08:38:17'),
(5, 'For Explorer', 1, '2021-08-15 08:38:26');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '0',
  `photo` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `username`, `role_id`, `photo`) VALUES
(8, 'Admin', 'admin@gmail.com', NULL, '$2y$10$nys70BIebDn9WAg4s8ovwueyO8GCN99rkB.JmYursOuC.zIWC/DPy', NULL, NULL, NULL, 'admin', 9, 'uploads/backend/users/C33PwMkBBptOhWFS76lAkh4tFeJV0Y6eXck8IR2f.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avibilities`
--
ALTER TABLE `avibilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avibilities`
--
ALTER TABLE `avibilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
