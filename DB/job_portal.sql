-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 06:25 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `job_apply`
--

CREATE TABLE `job_apply` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `job_post_id` int(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pandding',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job_apply`
--

INSERT INTO `job_apply` (`id`, `user_id`, `job_post_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 6, 'pandding', '2019-11-22 02:45:10', '2019-11-22 02:45:10'),
(2, 1, 5, 'pandding', '2019-11-22 02:47:56', '2019-11-22 02:47:56'),
(3, 1, 6, 'reject', '2019-11-22 02:54:48', '2019-11-22 04:41:31'),
(4, 3, 7, 'select', '2019-11-22 03:59:52', '2019-11-22 04:41:29'),
(5, 3, 4, 'pending', '2019-11-22 04:00:19', '2019-11-29 08:57:06');

-- --------------------------------------------------------

--
-- Table structure for table `job_post`
--

CREATE TABLE `job_post` (
  `id` int(11) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `job_title` varchar(191) NOT NULL,
  `location` varchar(100) DEFAULT NULL,
  `job_description` longtext,
  `email` varchar(100) DEFAULT NULL,
  `salary` int(20) NOT NULL,
  `last_date` timestamp NULL DEFAULT NULL,
  `company_name` varchar(191) NOT NULL,
  `web_url` text,
  `image` text,
  `job_type` varchar(100) DEFAULT NULL,
  `short_description` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job_post`
--

INSERT INTO `job_post` (`id`, `user_id`, `job_title`, `location`, `job_description`, `email`, `salary`, `last_date`, `company_name`, `web_url`, `image`, `job_type`, `short_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'dsfdsf', 'dfds', '<p>sdf dfsdf</p>', 'ex@gmail.com', 3434, '2019-11-19 18:00:00', 'sdds', NULL, NULL, 'Full Time', 'dsfd sdsfd sdsf dsdsfds', '2019-11-20 10:27:17', '2019-11-20 10:27:17'),
(2, 1, 'dsfdsf', 'ass', '<p>srw wer wer &nbsp;ewr&nbsp;</p><p>&nbsp;rwer&nbsp;</p><p>wer&nbsp;</p>', 'ex4useonly@gmail.com', 323, '2019-11-19 18:00:00', 'sdds', NULL, NULL, 'Part Time', 'dsfds d sfd sdsfdsd sfd s', '2019-11-20 10:27:54', '2019-11-20 10:27:54'),
(3, 1, 'dsfdsf', 'dfds', '<p>&nbsp;q3 4 &nbsp;3&nbsp;</p><p>&nbsp;434&nbsp;</p><p>w3 4r</p>', 'ex@gmail.com', 2323, '2019-11-27 18:00:00', 'sdds', '3e 4w', 'images/20191120163401ab5.jpg', 'Full Time', 'fsa fs serf fswr zs', '2019-11-20 10:29:00', '2019-11-20 10:29:00'),
(4, 1, 'dsfdsf', 'sadasd', '<p>dg ddf &nbsp;z</p><p>&nbsp;</p>', 'ex@gmail.com', 5454, '2019-11-26 18:00:00', 'sdds', '3e 4w', NULL, 'Part Time', 's fsef rsefr s', '2019-11-20 10:31:17', '2019-11-20 10:31:17'),
(5, NULL, 'sdsd sd', 'ass', '<p>&nbsp;erwerf erfe r</p>', 'ex@gmail.com', 3434, '2019-12-02 18:00:00', 'sdds', NULL, 'images/20191120163401ab5.jpg', 'Full Time', ' er fwer fewr twe', '2019-11-20 10:34:01', '2019-11-20 10:34:01'),
(6, 1, 'dfsf', 'sdfs', '<p>sdf sdf sdfsdf e se</p><p>&nbsp;fsdf</p><p>&nbsp;sd &nbsp;f</p><p>sd</p>', 'ex@gmail.com', 454, '2019-11-21 18:00:00', 'sdds', '3e 4w', 'images/20191122080005ab9.jpg', NULL, NULL, '2019-11-22 02:00:05', '2019-11-22 02:00:05'),
(7, 1, 'dddd', 'ass', '<p>&nbsp;rt yr yrty r rt &nbsp;r r r r</p>', 'superadmin@gmail.com', 3333, '2019-11-29 18:00:00', 'yyyyyyyy', 'yyyyyyyy', 'images/20191122095852ab9.jpg', NULL, NULL, '2019-11-22 03:58:53', '2019-11-22 03:58:53');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `receiver_id`, `message`, `seen`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'kjk', 1, '2019-12-09 10:53:35', '2019-12-09 11:24:33'),
(2, 1, 3, 'dfgdf', 0, '2019-12-09 11:17:38', '2019-12-09 11:17:38');

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
(3, '2019_02_25_075217_entrust_setup_tables', 1);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin', NULL, NULL, NULL),
(2, 'User', 'User', NULL, NULL, NULL),
(3, 'Employer', 'Employer', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2),
(3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `training_post`
--

CREATE TABLE `training_post` (
  `id` int(11) NOT NULL,
  `training_title` varchar(191) NOT NULL,
  `user_id` int(20) NOT NULL,
  `location` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `tk` int(20) DEFAULT NULL,
  `training_description` text,
  `short_description` text,
  `last_date` timestamp NULL DEFAULT NULL,
  `total_hour` int(20) DEFAULT NULL,
  `image` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `training_post`
--

INSERT INTO `training_post` (`id`, `training_title`, `user_id`, `location`, `email`, `tk`, `training_description`, `short_description`, `last_date`, `total_hour`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Professional Web Design', 1, 'Dhaka', 'ex@gmail.com', 15000, '<h3><strong>Learning Objective</strong></h3><ul><li>- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit doloremque possimus aut libero officiis explicabo quisquam reiciendis quidem porro, excepturi quae nisi quia enim, dolorum iure totam rerum odio natus?</li><li>- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci cupiditate totam quidem? Cumque praesentium incidunt cum quis reprehenderit aspernatur velit aut recusandae alias similique aliquid nulla accusamus, officiis repellat, explicabo!</li><li>- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur suscipit perspiciatis similique dolorum illum. Ipsum ab tempore dolorem nihil eveniet.</li><li>- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt alias nobis incidunt libero, quae, cupiditate.</li></ul><h2><strong>Course Outline</strong></h2><ul><li>* Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quisquam placeat sunt reiciendis, voluptatibus odio, provident! Iste tempora voluptatem ipsam.</li><li>* Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quisquam placeat sunt reiciendis, voluptatibus odio, provident! Iste tempora voluptatem ipsam.</li><li>* Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quisquam placeat sunt reiciendis, voluptatibus odio, provident! Iste tempora voluptatem ipsam.</li><li>* Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quisquam placeat sunt reiciendis, voluptatibus odio, provident! Iste tempora voluptatem ipsam.</li><li>* Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quisquam placeat sunt reiciendis, voluptatibus odio, provident! Iste tempora voluptatem ipsam.</li><li>* Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quisquam placeat sunt reiciendis, voluptatibus odio, provident! Iste tempora voluptatem ipsam.</li></ul>', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat assumenda veritatis facere, esse harum, sapiente excepturi! Labore, minima, ea. Blanditiis laboriosam esse, provident quasi velit ipsum fugiat assumenda. Eaque nisi quis, cum, voluptates nam quo nostrum unde error sequi ad Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, doloremque minima eos accusamus, molestias accusantium tempora labore eveniet assumenda cum maxime. Officia impedit minima veniam quis provident maxime voluptas aspernatur!\r\n\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta blanditiis omnis sapiente deleniti quasi, saepe a eveniet porro quam aliquid repudiandae eum sequi minus rerum quo temporibus officiis consequuntur ratione quia sint, qui. Voluptatum libero, vel praesentium maxime facere magni iure quo obcaecati quod iusto deserunt, explicabo velit, unde dolorem.', '2019-12-30 18:00:00', 36, 'images/20191129182350ab20.jpg', '2019-11-29 12:23:50', '2019-11-29 12:23:50'),
(2, 'sdsa', 1, 'ass', 'ex4useonly@gmail.com', 23, '<p>a sasd sad as</p>', '3  sadas asd', '2019-11-27 18:00:00', 23, NULL, '2019-11-29 12:29:42', '2019-11-29 12:29:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `phone_no`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Zahid Hasan', 'Shaikot', 'ex@gmail.com', '01985986986', '$2y$10$2/I6.n.AQlGkThKkk1ejYe.0rHDq/ZqOAoLuQbkHYey0y8U.3I2qm', 'MN3rEGb7kLCqzUnSnqbMmVX98UswNk6c54O3bStW7y3Fzp7Tdb7Z5K4u0c3U', '2019-11-16 11:42:09', '2019-11-16 11:42:09'),
(2, 'sss', 'sss', 's@gmail.com', '0000000000', '$2y$10$2yu.Aaqw0uNYxchgej/ay.9KEVWvJENYxX6YMDEsYHN1nVXfNH7YW', 'JRoId81bJuBZKK4tZeSHzIr722rsBKmVuCNv6H7KtK3tZ2nVyuT2sWnpRZl2', '2019-11-22 02:16:34', '2019-11-22 02:16:34'),
(3, 'ssss', 'dddd', 'ex4useonly@gmail.com', '0123232232', '$2y$10$bxbiv5rYRKdWZWJmr1gGceWx4wbPTVSN/axz/jsii1W1pguA/OU.m', NULL, '2019-11-22 03:59:43', '2019-11-22 03:59:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job_apply`
--
ALTER TABLE `job_apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_post`
--
ALTER TABLE `job_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `training_post`
--
ALTER TABLE `training_post`
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
-- AUTO_INCREMENT for table `job_apply`
--
ALTER TABLE `job_apply`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job_post`
--
ALTER TABLE `job_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `training_post`
--
ALTER TABLE `training_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
