-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: mysql-1:3306
-- Generation Time: Feb 05, 2025 at 05:32 PM
-- Server version: 8.0.32
-- PHP Version: 8.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `role` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'super_admin', 'Super Admin', 'superadmin@example.com', NULL, '$2y$12$jWdO7zMlGHS9HJgV6QIXhOkNo9ILR1WKUZj4eG9KV4/iUaCbcb2ua', NULL, '2025-02-05 01:32:38', '2025-02-05 01:32:38'),
(3, 'admin', 'Admin', 'admin@example.com', NULL, '$2y$12$SL0vkTN9JiuxsV21KXa8UefmpTwbnKsgyaTSLgYWvdQ5m0IGR7WL6', NULL, '2025-02-05 01:32:38', '2025-02-05 01:32:38'),
(4, 'author', 'Author', 'author@example.com', NULL, '$2y$12$I7BOeM4EoMUh.oKvaYkppO9iByIcv8T5ZJbtMxFwrgHNE7iGWcwGm', NULL, '2025-02-05 01:32:39', '2025-02-05 01:32:39'),
(5, 'user', 'User', 'user@example.com', NULL, '$2y$12$k8gAx1sTJVcvKB4Aihgqg.LKernUTredSeY/51y2fUQg7ygFnQEli', NULL, '2025-02-05 01:35:23', '2025-02-05 01:35:23');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
