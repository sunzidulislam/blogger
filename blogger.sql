-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2023 at 04:10 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogger`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'blog', 'This is blog', '2023-06-02 10:30:50', '2023-06-02 10:30:50'),
(2, 'Food', 'This is food category', '2023-06-05 12:04:25', '2023-06-05 12:04:25'),
(3, 'Travel', 'Travel', '2023-06-05 12:38:31', '2023-06-05 12:38:31'),
(4, 'Fashion', 'Fashion', '2023-06-05 12:38:42', '2023-06-05 12:38:42'),
(5, 'Lifestyle', 'Lifestyle', '2023-06-05 12:38:56', '2023-06-05 12:38:56');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `content`, `post_id`, `user_id`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'This is a test comment.', 6, 4, NULL, '2023-06-27 22:07:09', '2023-06-27 22:07:09'),
(2, 'This is second comment', 6, 4, NULL, '2023-06-27 22:08:09', '2023-06-27 22:08:09'),
(3, 'hjgg', 4, 4, NULL, '2023-07-03 10:00:38', '2023-07-03 10:00:38');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_06_02_171111_create_categories_table', 2),
(7, '2023_06_02_171131_create_posts_table', 3),
(8, '2023_06_02_172426_create_comments_table', 3),
(9, '2023_06_26_142620_add_column_to_posts_table', 4),
(10, '2023_06_27_035443_create_settings_table', 5),
(11, '2023_06_02_172425_create_comments_table', 6),
(12, '2023_06_02_172420_create_comments_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('sunzidulislam12@gmail.com', '$2y$10$oknnuY3OSh5DXLnkayFwzO93p71Y9X8CcbN8oIVj7RXWP1o5Dvwnq', '2023-07-03 09:57:19');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `tags` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `image`, `author_id`, `cat_id`, `created_at`, `updated_at`, `is_featured`, `tags`) VALUES
(2, 'This is first post', 'This is first post', 'admin/img/default-image.png', 2, 1, '2023-06-05 11:08:30', '2023-06-05 11:08:30', 0, NULL),
(3, 'Another post', 'another', 'uploads/posts/1685986306.png', 2, 1, '2023-06-05 11:31:46', '2023-06-05 11:31:46', 0, NULL),
(4, 'Default', 'Default', 'admin/img/default-image.png', 2, 1, '2023-06-05 11:37:07', '2023-06-05 11:37:07', 0, NULL),
(5, 'Technology', 'This is technology', 'uploads/posts/1685988473.png', 2, 2, '2023-06-05 12:07:53', '2023-06-05 12:07:53', 0, NULL),
(6, '5 Effective Ways I’m Finding Focus in a Busy Season of Life', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt distinctio...', 'uploads/posts/1685990285.jpg', 3, 2, '2023-06-05 12:38:05', '2023-06-05 12:38:05', 1, NULL),
(7, 'Get the Most Out of Iceland with our 10 Travel Tips', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt distinctio...', 'uploads/posts/1685990395.jpg', 3, 3, '2023-06-05 12:39:55', '2023-06-05 12:39:55', 1, NULL),
(8, '5 Effective Ways I’m Finding Focus in a Busy Season of Life', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt distinctio...', 'uploads/posts/1685990440.jpg', 3, 5, '2023-06-05 12:40:40', '2023-06-05 12:40:40', 1, NULL),
(9, 'What Are Your Tips for Hosting an Easy Birthday Party?', 'Are Your Tips for Hosting an Easy Birthday Party?', 'uploads/posts/1685990487.jpg', 3, 2, '2023-06-05 12:41:27', '2023-06-05 12:41:27', 1, NULL),
(10, 'Get the Most Out of Iceland with our 10 Travel Tips', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, deserunt, maiores. Accusamus ad expedita hic nesciunt reiciendis totam? Quae, tempore.', 'uploads/posts/1687832936.jpg', 4, 3, '2023-06-26 20:28:56', '2023-06-26 20:28:56', 1, 'BLOG TRAVEL FOOD'),
(11, 'What The Secrets You Will know about Jordan Petra if Visit it One Day?', '<p>\r\n                                         Its sometimes her behaviour are contented. Do listening am eagerness oh objection collected. Together gay feelings continue\r\n                                         juvenile had off Unknown may service\r\n                                         subject her letters one bed. Child years noise ye in forty. Loud in this in both\r\n                                         hold. My entrance me is disposal bachelor remember relation\r\n                                     </p>\r\n                                     <h5> 1 - Pick a sustainable travel destination </h5>\r\n\r\n                                     <p>\r\n                                         Oh acceptance apartments up sympathize astonished delightful. Waiting him new lasting towards. Continuing melancholy especially\r\n                                         so to. Me unpleasing  impossible in attachment announcing so astonished. What ask leaf may nor upon door. Tended remain\r\n                                         my do stairs. Oh smiling amiable am so visited cordial in offices hearted.\r\n                                     </p>\r\n                                     <p>\r\n                                         Oh acceptance apartments up sympathize astonished delightful. Waiting him new lasting towards. Continuing melancholy especially\r\n                                         so to. Me unpleasing impossible in attachment announcing so astonished. What ask leaf may nor upon door. Tended remain\r\n                                         my do stairs. Oh smiling amiable am so visited cordial in offices hearted.\r\n                                     </p>\r\n                                     <div class=\"row\">\r\n                                         <div class=\"col-md-12 \">\r\n                                             <div class=\"image\">\r\n                                                 <img src=\"assets/img/blog/33.jpg\" alt=\"\">\r\n                                                 <p>Caption can be used to add info</p>\r\n                                             </div>\r\n                                         </div>\r\n                                     </div>\r\n\r\n                                     <p> Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit\r\n                                         in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt\r\n                                         in culpa qui officia\r\n                                         deserunt mollit anim id est laborum.\r\n                                     </p>\r\n                                     <h5>2 -  Research before booking</h5>\r\n\r\n                                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\n                                         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute\r\n                                         irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat\r\n                                         cupidatat non proident.\r\n                                     </p>\r\n                                     <div class=\"quote\">\r\n                                         <div><i class=\"icon_quotations_alt\"></i></div>\r\n                                         <p>\r\n                                             The man who goes alone can start today; but he who\r\n                                             travels with another must wait till that other is ready.\r\n                                         </p>\r\n                                         <small>Henry David Thoreau.</small>\r\n                                     </div>\r\n\r\n                                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\n                                         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute\r\n                                         irure dolor Unknown may service in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat\r\n                                         cupidatat non proident.\r\n                                     </p>\r\n                                     <h5>3 - Pack light , Easy Sustainable Travel Tip</h5>\r\n\r\n                                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\n                                         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute\r\n                                         irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat\r\n                                         cupidatat non proident.\r\n                                         >sunt in culpa qui officia deserunt mollit anim id e st laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed\r\n                                         do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam.\r\n                                     </p>\r\n                                     <div class=\"row\">\r\n                                         <div class=\"col-md-6 \">\r\n                                             <div class=\"image\">\r\n                                                 <img src=\"assets/img/blog/1.jpg\" alt=\"\">\r\n                                                 <p>Caption can be used to add info</p>\r\n                                             </div>\r\n                                         </div>\r\n                                         <div class=\"col-md-6 \">\r\n                                             <div class=\"image\">\r\n                                                 <img src=\"assets/img/blog/4.jpg\" alt=\"\">\r\n                                                 <p>Caption can be used to add info</p>\r\n                                             </div>\r\n                                         </div>\r\n                                     </div>\r\n\r\n                                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\n                                         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute\r\n                                         irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat\r\n                                         cupidatat non proident.\r\n                                     </p>\r\n                                     <h5>4 - Be respectful of the environment</h5>\r\n                                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\n\r\n                                     </p>\r\n                                     <ul class=\"list\">\r\n                                         <li>Be respectful of the environment </li>\r\n                                         <li>Pick a sustainable travel destination instead of a popular one</li>\r\n                                         <li>Research before booking</li>\r\n                                         <li>Pack light , Easy Sustainable Travel Tip</li>\r\n                                         <li>Be respectful of the environment</li>\r\n                                     </ul>\r\n                                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\n                                         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute\r\n                                         irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.\r\n                                     </p>', 'uploads/posts/1687868352.jpg', 4, 1, '2023-06-27 06:19:12', '2023-06-27 06:19:12', 1, 'BLOG TRAVEL FOOD');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `fb_url` varchar(191) DEFAULT NULL,
  `tw_url` varchar(191) DEFAULT NULL,
  `li_url` varchar(191) DEFAULT NULL,
  `in_url` varchar(191) DEFAULT NULL,
  `be_url` varchar(191) DEFAULT NULL,
  `mode` varchar(191) NOT NULL DEFAULT 'light',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `author_id`, `fb_url`, `tw_url`, `li_url`, `in_url`, `be_url`, `mode`, `created_at`, `updated_at`) VALUES
(1, 4, 'https://www.facebook.com/imarufnahid/', 'www.twitter.com/themexplosion', 'www.linkedin.com/themexplosion', 'www.twitter.com/themexplosion', 'www.behance.com/themexplosion', 'light', '2023-06-26 22:37:56', '2023-06-26 22:47:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sunzid', 'sunzidulislam12@gmail.com', 'uploads/avatar/1.jpg', NULL, '$2y$10$dJMRGvhTjNaIHELmTCmFCei4u4R8Ag8euZ/5j.53a2SfsdggkUa/O', NULL, '2023-06-02 10:30:50', '2023-06-02 10:30:50'),
(2, 'Maruf Nahid', 'maruf155714@gmail.com', 'uploads/avatar/2.jpg', NULL, '$2y$10$2W4ZYNEscjLNaDTzRk.XQePafjbuic/Nh5QYyKA02nh7Gq.N/L2Vq', NULL, '2023-06-05 11:03:46', '2023-06-05 11:03:46'),
(3, 'New', 'm@n.com', 'uploads/avatar/3.jpg', NULL, '$2y$10$izTpZZ6LtAKBs0zXISIPK.Sb8mHf7VqJxW.OXzmNfzbJLnwpNQcD2', NULL, '2023-06-05 12:31:28', '2023-06-05 12:31:28'),
(4, 'Jhon', 'jhon@doe.com', 'uploads/avatar/4.jpg', NULL, '$2y$10$qFBC3qTRZdZqgdxMNv9VAuOLrcYTPkJZi4zRswojfKVfxtEvwJFhq', NULL, '2023-06-26 08:15:36', '2023-06-26 08:15:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_parent_id_foreign` (`parent_id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_author_id_foreign` (`author_id`),
  ADD KEY `posts_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settings_author_id_foreign` (`author_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `settings`
--
ALTER TABLE `settings`
  ADD CONSTRAINT `settings_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
