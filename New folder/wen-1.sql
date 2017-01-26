-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2016 at 04:20 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wen`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `service_id` int(11) NOT NULL,
  `replay_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `user_id`, `name`, `msg`, `date`, `service_id`, `replay_id`) VALUES
(73, 1, 'Feras AlSouri', 'هلا', '2016-11-27 16:05:03', 3, 3),
(72, 1, 'Feras AlSouri', 'دكتور وسيم أنا مريض ', '2016-11-27 16:02:31', 2, 2),
(71, 1, 'Feras AlSouri', 'cacac', '2016-11-25 18:13:07', 2, 2),
(70, 1, 'Feras AlSouri', 'cdavavavca', '2016-11-24 20:23:44', 2, 2),
(52, 1, 'Feras AlSouri', 'ssssssssss', '2016-11-17 14:55:04', 7, 0),
(53, 1, 'Feras AlSouri', 'hello\r\n', '2016-11-19 10:42:22', 2, 0),
(54, 1, 'Feras AlSouri', 'hi\r\n', '2016-11-19 10:46:36', 2, 0),
(55, 1, 'Feras AlSouri', 'hello', '2016-11-19 10:47:20', 2, 0),
(56, 1, 'Feras AlSouri', 'hello', '2016-11-19 10:49:23', 2, 0),
(57, 1, 'Feras AlSouri', 'hi', '2016-11-19 10:50:20', 2, 0),
(58, 1, 'Feras AlSouri', 'fine', '2016-11-19 10:50:42', 2, 0),
(59, 1, 'Feras AlSouri', 'feras', '2016-11-19 10:52:50', 2, 0),
(60, 1, 'Feras AlSouri', 'feras', '2016-11-19 10:54:55', 2, 0),
(61, 1, 'Feras AlSouri', 'hello', '2016-11-19 10:55:03', 2, 0),
(62, 1, 'Feras AlSouri', 'hello feras', '2016-11-19 11:02:07', 2, 0),
(63, 1, 'Feras AlSouri', 'hello feras', '2016-11-19 11:02:38', 2, 0),
(64, 1, 'Feras AlSouri', 'good', '2016-11-19 11:07:26', 2, 0),
(65, 1, 'Feras AlSouri', 'Thank u', '2016-11-19 11:10:25', 2, 0),
(66, 1, 'Feras AlSouri', 'wasseem', '2016-11-19 15:00:37', 2, 0),
(67, 1, 'Feras AlSouri', 'djgdjhgdh', '2016-11-19 15:01:18', 6, 0),
(69, 1, 'Feras AlSouri', 'ddssd', '2016-11-24 15:09:53', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE `description` (
  `desc_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `subject` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `desc_chat_id`
--

CREATE TABLE `desc_chat_id` (
  `id` int(11) NOT NULL,
  `desc_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('feras2007_2007@hotmail.com', '4fb737e474ee362e6954161c788b463ebd46803b8f03734149a385c86c118994', '2016-10-31 16:23:24');

-- --------------------------------------------------------

--
-- Table structure for table `replay-comment`
--

CREATE TABLE `replay-comment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comment_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `replay-comment`
--

INSERT INTO `replay-comment` (`id`, `user_id`, `name`, `msg`, `date`, `comment_id`, `service_id`) VALUES
(1, 4, 'DR.waseem', 'asccacafca', '2016-11-24 20:10:53', 60, 0),
(2, 4, 'DR.waseem', 'cdcacac', '2016-11-24 20:30:36', 65, 0),
(3, 4, 'DR.waseem', 'cacac', '2016-11-24 20:33:21', 53, 0),
(4, 4, 'DR.waseem', 'cacac', '2016-11-24 20:34:27', 53, 0),
(5, 4, 'DR.waseem', 'cacac', '2016-11-24 20:34:53', 53, 0),
(6, 4, 'DR.waseem', 'cacac', '2016-11-24 20:35:21', 53, 0),
(7, 4, 'DR.waseem', 'cacac', '2016-11-24 20:35:26', 53, 0),
(8, 4, 'DR.waseem', 'cacac', '2016-11-24 20:36:50', 53, 0),
(9, 4, 'DR.waseem', 'asxax', '2016-11-25 10:21:19', 65, 0),
(10, 4, 'DR.waseem', 'ihiuhi', '2016-11-25 10:24:37', 60, 0),
(11, 4, 'DR.waseem', 'kuhu', '2016-11-25 10:29:21', 63, 0),
(12, 4, 'DR.waseem', 'lknl', '2016-11-25 10:29:39', 64, 0),
(13, 4, 'DR.waseem', 'dcs', '2016-11-25 13:37:20', 70, 0),
(14, 4, 'DR.waseem', ' cs s ', '2016-11-25 21:26:01', 70, 0),
(15, 4, 'DR.waseem', ' cs s ', '2016-11-25 21:27:17', 70, 0),
(16, 4, 'DR.waseem', 'gigvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv', '2016-11-27 15:40:44', 53, 0),
(17, 4, 'DR.waseem', 'kjgkugiugi', '2016-11-27 15:44:06', 53, 0),
(18, 4, 'DR.waseem', 'xxxxxxxxxxxxxxxxxxxxxxxxxx', '2016-11-27 15:46:57', 60, 0),
(19, 4, 'DR.waseem', 'jhgfyjgui', '2016-11-27 15:47:17', 62, 0),
(20, 4, 'DR.waseem', 'روح شخ على حالك', '2016-11-27 16:04:03', 72, 0);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `category_title` varchar(50) NOT NULL,
  `Catogory_icon` varchar(50) NOT NULL,
  `url` varchar(500) NOT NULL,
  `desc` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `category_title`, `Catogory_icon`, `url`, `desc`) VALUES
(2, 'Smocking Cessation', 'fa fa-bullhorn', '/Chat/comment', 'In this sectoin we will help you to stop smocking'),
(3, 'Mental Health Support', 'fa fa-comments', '/Chat/comment', 'This section will help you with your mental issues'),
(4, 'Yoth Needs', 'fa fa-cloud-download', '/Chat/comment', 'Here you will find all of Youth Needs'),
(5, 'Woman Health', 'fa fa-leaf', '/Chat/comment', 'Women should know there needs, earlier diagnoses and some advices'),
(6, 'Puplic Health', 'fa fa-cogs', '/Chat/comment', 'This sectoin contains some major advices and tips about health'),
(7, 'Tips And Advices', 'fa fa-heart', '/Chat/comment', 'Here are some Tips and Advices of General Health for every one');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Feras AlSouri', 'feras2007_2007@hotmail.com', '$2y$10$.0L0HmQMyaRgcDm2UcE3peidGPC1F0NIKMYI5EsTy7wYBLLanmNGO', 'gy7dx6e86ilORHVN64op6N8Twx77Soydi0UrWnoLCWA07cIbed3SPnuDRVHt', 0, '2016-11-01 01:45:35', '2016-11-27 14:05:45'),
(2, 'Feras AlSouri1', 'feras2007@hotmail.com', '$2y$10$N4n1D6v1H75otev1G9Eqee0e1/eIIBZW2wghIQvgkN1boGSeBdb0q', '13LwsvKvrEJuD7o3jKH28ZAS3YgMCgwBH53GcmPHrAQa7FGr37zx3kBma3FA', 0, '2016-11-05 15:36:40', '2016-11-05 15:47:59'),
(3, 'Feras AlSouri10', 'feras@hotmail.com', '$2y$10$i0gcAh2b9SAih5VE2qVFJ.MdzA.rvR4ra7Lua7ldOnLlzGO9Hgcje', NULL, 0, '2016-11-07 14:03:36', '2016-11-07 14:03:36'),
(4, 'DR.waseem', 'asd@hotmail.com', '$2y$10$7fsgSQ/Dq91WsDzfpLa4nuiHXEKzFvG.yyKdxr1BuWCxRdQFTQzjK', 'Pi3C2XEREZX7pzgJXXXrEZ2Sqik9bvpvaCtpbpkHNP1R47Ed08oJSikrsI5o', 1, '2016-11-23 06:00:28', '2016-11-27 14:04:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `service_id_2` (`service_id`);

--
-- Indexes for table `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`desc_id`);

--
-- Indexes for table `desc_chat_id`
--
ALTER TABLE `desc_chat_id`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `desc_id` (`desc_id`),
  ADD UNIQUE KEY `id_2` (`id`,`desc_id`),
  ADD KEY `id_3` (`id`,`desc_id`),
  ADD KEY `id_4` (`id`),
  ADD KEY `id_5` (`id`),
  ADD KEY `desc_id_2` (`desc_id`),
  ADD KEY `id_6` (`id`,`desc_id`),
  ADD KEY `desc_id_3` (`desc_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `replay-comment`
--
ALTER TABLE `replay-comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `description`
--
ALTER TABLE `description`
  MODIFY `desc_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `replay-comment`
--
ALTER TABLE `replay-comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
