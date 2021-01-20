-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 12:36 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) NOT NULL,
  `discription` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload_file` varchar(255) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `image`, `discription`, `upload_file`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Catch and Kill', '1.jpg', 'Like its much-loved television counterparts, true crime books chronicle and examine actual crimes and events in exacting detail, with many focusing on infamous murders, kidnappings, and the exploits of serial killers.', NULL, 10, '2021-01-04 01:21:00', NULL),
(2, 'I\'ll Be Gone in the Dark', '2.jpg', 'Like its much-loved television counterparts, true crime books chronicle and examine actual crimes and events in exacting detail, with many focusing on infamous murders, kidnappings, and the exploits of serial killers.', NULL, 10, '2021-01-06 08:11:25', NULL),
(3, 'the secret', '3.png', 'Whether the focus is on emotional well-being, finances, or spirituality, self-help books center on encouraging personal improvement and confidence in a variety of facets of your life.', NULL, 9, '2021-01-03 21:00:47', NULL),
(4, 'Everything Is F*cked', '4.jpg', 'Whether the focus is on emotional well-being, finances, or spirituality, self-help books center on encouraging personal improvement and confidence in a variety of facets of your life.', NULL, 9, '2021-01-10 11:17:07', NULL),
(15, 'Homo Deus: A Brief History of Tomorrow', '1611180936.jpg', 'In Homo Deus ? A Brief History of Tomorrow, historian and author of the bestselling Sapiens, Yuval Noah Harari turns to the past to predict the future.', '1611180936.pdf', 7, '2021-01-20 20:15:36', '2021-01-20 20:15:36'),
(16, 'Sapiens and Homo Deus', '1611181106.jpg', 'These two books by Yuval Noah Harari have received worldwide acclaim and have been praised for their insights on the history and future of humankind.', '1611181106.pdf', 7, '2021-01-20 20:18:26', '2021-01-20 20:18:26'),
(17, 'Hillbilly Elegy: A Memoir of a Family and Culture in Crisis description', '1611181437.jpg', 'Hillbilly Elegy: A Memoir of a Family and Culture in Crisis is a 2016 memoir by J. D. Vance about the Appalachian values of his Kentucky family and their relation to the social problems of his hometown of Middletown, Ohio, where his mother\'s parents moved when they were young.', '1611181437.pdf', 8, '2021-01-20 20:23:58', '2021-01-20 20:23:58'),
(18, 'Women & Islamic Cultures Family, Law and Politics', '1611181898.png', 'Family, Law and Politics, Volume II of the Encyclopedia of Women & Islamic Cultures, brings together over 360 entries on women, family, law, politics, and Islamic cultures around the world.   The Encyclopedia of Women & Islamic Cultures is also available online. For more information see Encyclopedia of Women & Islamic Cultures Online.', '1611181898.pdf', 8, '2021-01-20 20:31:38', '2021-01-20 20:31:38'),
(19, 'If You Hear Her: A Novel of Romantic Suspense', '1611182236.jpg', 'The scream Lena Riddle hears in the woods behind her house is enough to curdle her blood?she has no doubt that a woman is in real danger. Unfortunately, with no physical evidence, the local law officers in small-town Ash, Kentucky, dismiss her claim. But Lena knows what she heard?and it leaves her filled with fear and frustration.', '1611182236.mobi', 1, '2021-01-20 20:37:17', '2021-01-20 20:37:17'),
(20, 'THE BET AND OTHER STORIES', '1611182451.jpg', 'It was a dark autumn night. The old banker was pacing from corner to corner of his study, recalling to his mind the party he gave in the autumn fifteen years ago. There were many clever people at the party and much interesting conversation. They talked among other things of capital punishment. The guests, among them not a few scholars and journalists, for the most part disapproved of capital punishment.', '1611182451.pdf', 2, '2021-01-20 20:40:51', '2021-01-20 20:40:51'),
(21, 'The Lake House Secret, A Romantic Suspense Novel', '1611182584.jpg', 'A reluctant homecoming, two men from her past, and a chilling murder to solve... Home is the last place reporter Jenessa Jones wants to be. It\'s been 12 years since her father sent her away to hide a pregnancy, and the only thing that could bring her back was the man\'s funeral.', '1611182584.pdf', 1, '2021-01-20 20:43:04', '2021-01-20 20:43:04'),
(22, 'الزوجه المفقوده', '1611183293.jpg', 'في هذه الرواية تأخذنا \"غيليان فلين\" إلى زمن النكسة الاقتصادية الأخيرة في الولايات المتحدة الأميركية حيث كان الناس يفقدون وظائفهم التي أمضوا فيها عمراً، نكِ هو أحد هؤلاء الأشخاص الذي عمل كاتباً في المجلات لإحدى عشر سنة قبل أن يجد نفسه عاطلاً عن العمل، وكذلك هي حال شقيقته التوأم مارجو.', '1611183293.pdf', 3, '2021-01-20 20:54:53', '2021-01-20 20:54:53'),
(23, 'cake creations', '1611183374.jpg', 'Well i have collected these recipies from different websites & cook books.I want to share all these recipes with all who like to cook & bake. Do let me know if you like it.', '1611183374.epub', 5, '2021-01-20 20:56:14', '2021-01-20 20:56:14'),
(24, 'chocolate  good and  tastful trait', '1611183508.jpg', 'Can\'t go wrong with chocolate!', '1611183508.epub', 5, '2021-01-20 20:58:28', '2021-01-20 20:58:28'),
(25, 'obsessed', '1611183810.jpg', 'A brave teen recounts her debilitating struggle with obsessive-compulsive disorder—and brings readers through every painful step as she finds her way to the other side—in this powerful and inspiring memoir. Until sophomore year of high school, fifteen..', '1611183810.epub', 3, '2021-01-20 21:03:30', '2021-01-20 21:03:30');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Romance', NULL, NULL),
(2, 'Short Stories', NULL, '2021-01-20 16:54:35'),
(3, 'Suspense and Thrillers', NULL, NULL),
(5, 'Cookbooks', NULL, NULL),
(7, 'History', NULL, NULL),
(8, 'Memoir', NULL, NULL),
(9, 'Self-Help', NULL, NULL),
(10, 'True Crime', NULL, NULL),
(11, 'Action and Adventure', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `readers`
--

CREATE TABLE `readers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(150) NOT NULL,
  `userpass` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `readers`
--

INSERT INTO `readers` (`id`, `name`, `username`, `userpass`, `email`, `created_at`, `updated_at`) VALUES
(1, 'reem', 'Remo', '222', 'reemyasserfcis@gmail.com', '2021-01-14 13:38:24', '2021-01-20 21:34:58'),
(8, 'err', 'rew', '123', 'reem@gmail.com', '2021-01-14 19:26:23', '2021-01-14 19:26:23'),
(9, 'reem', 'reemyasserfcis@gmail.com', '11', 'alaa@gmail.com', '2021-01-14 21:12:55', '2021-01-14 21:12:55');

-- --------------------------------------------------------

--
-- Table structure for table `reader_books`
--

CREATE TABLE `reader_books` (
  `id` int(11) NOT NULL,
  `reader_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `count`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-01-18 14:17:46', '2021-01-18 14:17:46'),
(2, 1, '2021-01-18 14:18:06', '2021-01-18 14:18:06'),
(3, 1, '2021-01-18 15:34:48', '2021-01-18 15:34:48'),
(4, 1, '2021-01-18 15:35:26', '2021-01-18 15:35:26'),
(5, 1, '2021-01-18 15:49:32', '2021-01-18 15:49:32'),
(6, 1, '2021-01-18 21:08:47', '2021-01-18 21:08:47'),
(7, 1, '2021-01-18 23:24:16', '2021-01-18 23:24:16'),
(8, 1, '2021-01-19 14:09:26', '2021-01-19 14:09:26'),
(9, 1, '2021-01-19 15:08:29', '2021-01-19 15:08:29'),
(10, 1, '2021-01-19 15:08:39', '2021-01-19 15:08:39'),
(11, 1, '2021-01-19 15:08:39', '2021-01-19 15:08:39'),
(12, 1, '2021-01-19 15:16:53', '2021-01-19 15:16:53'),
(13, 1, '2021-01-19 15:22:14', '2021-01-19 15:22:14'),
(14, 1, '2021-01-19 15:28:39', '2021-01-19 15:28:39'),
(15, 1, '2021-01-19 15:31:29', '2021-01-19 15:31:29'),
(16, 1, '2021-01-19 15:51:35', '2021-01-19 15:51:35'),
(17, 1, '2021-01-19 16:03:25', '2021-01-19 16:03:25'),
(18, 1, '2021-01-19 16:04:03', '2021-01-19 16:04:03'),
(19, 1, '2021-01-19 16:07:30', '2021-01-19 16:07:30'),
(20, 1, '2021-01-19 18:45:18', '2021-01-19 18:45:18'),
(21, 1, '2021-01-20 16:46:51', '2021-01-20 16:46:51'),
(22, 1, '2021-01-20 16:51:12', '2021-01-20 16:51:12'),
(23, 1, '2021-01-20 17:22:53', '2021-01-20 17:22:53'),
(24, 1, '2021-01-20 17:26:42', '2021-01-20 17:26:42'),
(25, 1, '2021-01-20 17:37:23', '2021-01-20 17:37:23'),
(26, 1, '2021-01-20 21:04:26', '2021-01-20 21:04:26'),
(27, 1, '2021-01-20 21:06:12', '2021-01-20 21:06:12'),
(28, 1, '2021-01-20 21:14:51', '2021-01-20 21:14:51'),
(29, 1, '2021-01-20 21:21:09', '2021-01-20 21:21:09'),
(30, 1, '2021-01-20 21:21:24', '2021-01-20 21:21:24'),
(31, 1, '2021-01-20 21:21:31', '2021-01-20 21:21:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `readers`
--
ALTER TABLE `readers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reader_books`
--
ALTER TABLE `reader_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `readers`
--
ALTER TABLE `readers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reader_books`
--
ALTER TABLE `reader_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
