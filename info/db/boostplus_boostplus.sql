-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 21, 2023 at 08:41 AM
-- Server version: 5.7.43
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boostplus_boostplus`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `log_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `causer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `batch_uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Active','Not Active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `slug`, `email`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"Admin\"}', 'admin', 'admin@gmail.com', 'Active', NULL, '$2y$10$2Xy4m/E.zrk4cRJ7wM3hO.yL1.dwXWKUkMUuGHjAvBGUYDwZlQZki', NULL, '2023-08-17 06:59:19', '2023-08-17 06:59:19'),
(2, '{\"en\":\"Vergie White\"}', 'vergie-white', 'mwhite@example.net', 'Active', '2023-08-17 06:59:19', '$2y$10$2KVfihbLxBubGrZLU5Fd/uHKGxUV8M5VELKp3kmuX9zjXjz46njuy', 'qmZo9oxNnz', '2023-08-17 06:59:19', '2023-08-17 06:59:19'),
(3, '{\"en\":\"Emanuel Kessler\"}', 'emanuel-kessler', 'yazmin86@example.com', 'Active', '2023-08-17 06:59:19', '$2y$10$2KVfihbLxBubGrZLU5Fd/uHKGxUV8M5VELKp3kmuX9zjXjz46njuy', 'Qyd4G5sNY2', '2023-08-17 06:59:19', '2023-08-17 06:59:19'),
(4, '{\"en\":\"Moriah Feil\"}', 'moriah-feil', 'tatyana.von@example.org', 'Active', '2023-08-17 06:59:19', '$2y$10$2KVfihbLxBubGrZLU5Fd/uHKGxUV8M5VELKp3kmuX9zjXjz46njuy', 'wyAXJCV5nP', '2023-08-17 06:59:19', '2023-08-17 06:59:19'),
(5, '{\"en\":\"Elian Veum Jr.\"}', 'elian-veum-jr', 'albina.halvorson@example.net', 'Active', '2023-08-17 06:59:19', '$2y$10$2KVfihbLxBubGrZLU5Fd/uHKGxUV8M5VELKp3kmuX9zjXjz46njuy', 'b5ojbglODP', '2023-08-17 06:59:19', '2023-08-17 06:59:19'),
(6, '{\"en\":\"Austen Kutch\"}', 'austen-kutch', 'hermiston.kaylie@example.net', 'Active', '2023-08-17 06:59:19', '$2y$10$2KVfihbLxBubGrZLU5Fd/uHKGxUV8M5VELKp3kmuX9zjXjz46njuy', 'OX4DpcKef0', '2023-08-17 06:59:19', '2023-08-17 06:59:19'),
(7, '{\"en\":\"Cornelius Schamberger\"}', 'cornelius-schamberger', 'ramon.carroll@example.org', 'Active', '2023-08-17 06:59:19', '$2y$10$2KVfihbLxBubGrZLU5Fd/uHKGxUV8M5VELKp3kmuX9zjXjz46njuy', '0uhR9wJPJs', '2023-08-17 06:59:19', '2023-08-17 06:59:19'),
(8, '{\"en\":\"Prof. Trent McClure\"}', 'prof-trent-mcclure', 'kirlin.emelie@example.org', 'Active', '2023-08-17 06:59:19', '$2y$10$2KVfihbLxBubGrZLU5Fd/uHKGxUV8M5VELKp3kmuX9zjXjz46njuy', 'c8KImvqnG9', '2023-08-17 06:59:19', '2023-08-17 06:59:19'),
(9, '{\"en\":\"Felicity Buckridge\"}', 'felicity-buckridge', 'ernser.stacy@example.net', 'Active', '2023-08-17 06:59:19', '$2y$10$2KVfihbLxBubGrZLU5Fd/uHKGxUV8M5VELKp3kmuX9zjXjz46njuy', 'AbuK8KLA9q', '2023-08-17 06:59:19', '2023-08-17 06:59:19'),
(10, '{\"en\":\"Mrs. Gail Mueller DDS\"}', 'mrs-gail-mueller-dds', 'estell13@example.org', 'Active', '2023-08-17 06:59:19', '$2y$10$2KVfihbLxBubGrZLU5Fd/uHKGxUV8M5VELKp3kmuX9zjXjz46njuy', 'pFrx7TLmYq', '2023-08-17 06:59:19', '2023-08-17 06:59:19'),
(11, '{\"en\":\"Virgil Hagenes\"}', 'virgil-hagenes', 'lupe63@example.net', 'Active', '2023-08-17 06:59:19', '$2y$10$2KVfihbLxBubGrZLU5Fd/uHKGxUV8M5VELKp3kmuX9zjXjz46njuy', 'mYUCGX7DEa', '2023-08-17 06:59:19', '2023-08-17 06:59:19');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Active','Not Active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_tow` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title_tow` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_four` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title_four` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `sub_description` text COLLATE utf8mb4_unicode_ci,
  `button` text COLLATE utf8mb4_unicode_ci,
  `sub_button` text COLLATE utf8mb4_unicode_ci,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Active','Not Active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `slug`, `title`, `sub_title`, `title_tow`, `sub_title_tow`, `title_three`, `sub_title_three`, `title_four`, `sub_title_four`, `description`, `sub_description`, `button`, `sub_button`, `date`, `map`, `sort`, `route`, `facebook`, `twitter`, `instagram`, `status`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"subway-tile\",\"ar\":\"subway-tile\"}', '{\"en\":\"subway tile\",\"ar\":\"subway tile\"}', '{\"en\":\"brooklyn bun\",\"ar\":\"brooklyn bun\"}', '{\"en\":\"pickled bespoke\",\"ar\":\"pickled bespoke\"}', '{\"en\":\"branding design art\",\"ar\":\"branding design art\"}', '{\"en\":\"template post formats\",\"ar\":\"template post formats\"}', '{\"en\":\"Balanchaev Balancha\",\"ar\":\"Balanchaev Balancha\"}', '{\"en\":\"13\",\"ar\":\"14\"}', '{\"en\":\"15\",\"ar\":\"16\"}', '{\"en\":\"Hoodie roof party organic umami kombucha thundercats. Pok pok normcore snackwave venmo deep v, quinoa everyday carry laHoodie roof party organic umami kombucha thundercats. Pok pok normcore snackwave venmo deep v, quinoa everyday carry la Hoodie roof party organic umami kombucha thundercats. Pok pok normcore snackwave venmo deep v, quinoa everyday carry laHoodie roof party organic umami kombucha thundercats. Pok pok normcore snackwave venmo deep v, quinoa everyday carry la Hoodie roof party organic umami kombucha thundercats. Pok pok normcore snackwave venmo deep v, quinoa everyday carry laHoodie roof party organic umami kombucha thundercats. Pok pok normcore snackwave venmo deep v, quinoa everyday carry la\",\"ar\":\"Hoodie roof party organic umami kombucha thundercats. Pok pok normcore snackwave venmo deep v, quinoa everyday carry laHoodie roof party organic umami kombucha thundercats. Pok pok normcore snackwave venmo deep v, quinoa everyday carry la Hoodie roof party organic umami kombucha thundercats. Pok pok normcore snackwave venmo deep v, quinoa everyday carry laHoodie roof party organic umami kombucha thundercats. Pok pok normcore snackwave venmo deep v, quinoa everyday carry la Hoodie roof party organic umami kombucha thundercats. Pok pok normcore snackwave venmo deep v, quinoa everyday carry laHoodie roof party organic umami kombucha thundercats. Pok pok normcore snackwave venmo deep v, quinoa everyday carry la\"}', '{\"en\":\"Hoodie roof party organic umami kombucha thundercats. Pok pok normcore snackwave venmo deep v, quinoa everyday carry laHoodie roof party organic umami kombucha thundercats. Pok pok normcore snackwave venmo deep v, quinoa everyday carry la\",\"ar\":\"Hoodie roof party organic umami kombucha thundercats. Pok pok normcore snackwave venmo deep v, quinoa everyday carry laHoodie roof party organic umami kombucha thundercats. Pok pok normcore snackwave venmo deep v, quinoa everyday carry la\"}', NULL, NULL, '{\"en\":\"March 20, 2019\",\"ar\":\"March 20, 2019\"}', '25', '27', '26', '28', '29', '20', 'Not Active', '2023-08-27 07:41:08', '2023-09-12 09:49:59');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `district_id` bigint(20) UNSIGNED DEFAULT NULL,
  `type` enum('rent','buy') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stars` int(11) DEFAULT NULL,
  `seats` int(11) DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `status` enum('Active','Not Active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `sort` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Active','Not Active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_pages`
--

CREATE TABLE `cms_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `sub_title` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `sub_description` text COLLATE utf8mb4_unicode_ci,
  `button` text COLLATE utf8mb4_unicode_ci,
  `sub_button` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `page` text COLLATE utf8mb4_unicode_ci,
  `section` text COLLATE utf8mb4_unicode_ci,
  `sort` text COLLATE utf8mb4_unicode_ci,
  `status` enum('Active','Not Active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `route` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `title_tow` text COLLATE utf8mb4_unicode_ci,
  `sub_title_tow` text COLLATE utf8mb4_unicode_ci,
  `title_three` text COLLATE utf8mb4_unicode_ci,
  `sub_title_three` text COLLATE utf8mb4_unicode_ci,
  `title_four` text COLLATE utf8mb4_unicode_ci,
  `sub_title_four` text COLLATE utf8mb4_unicode_ci,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_pages`
--

INSERT INTO `cms_pages` (`id`, `title`, `sub_title`, `description`, `sub_description`, `button`, `sub_button`, `image`, `page`, `section`, `sort`, `status`, `route`, `created_at`, `title_tow`, `sub_title_tow`, `title_three`, `sub_title_three`, `title_four`, `sub_title_four`, `updated_at`) VALUES
(3, '{\"en\":\"Contact us now and get\",\"ar\":\"Contact us now and get\"}', '{\"en\":\"a free marketing consultation\",\"ar\":\"a free marketing consultation\"}', '{\"en\":\"<p><span style=\\\"color:#808080\\\">We are always looking forward to communicating with our customers. Contact us now to obtain distinguished electronic marketing services and free consultations to achieve your electronic success with Boost Plus Electronic Marketing Company.<\\/span><\\/p>\",\"ar\":\"<p><span style=\\\"color:#808080\\\">We are always looking forward to communicating with our customers. Contact us now to obtain distinguished electronic marketing services and free consultations to achieve your electronic success with Boost Plus Electronic Marketing Company.<\\/span><\\/p>\"}', '{\"ar\":null}', '{\"en\":null}', '{\"en\":null}', NULL, '7', 'creative', NULL, 'Active', NULL, '2023-08-20 10:28:00', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '2023-09-20 12:27:43'),
(28, '{\"en\":\"Email marketing\",\"ar\":\"Email marketing\"}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"en\":\"Read more\"}', '{\"en\":null}', NULL, '7', 'sliders', '3', 'Active', '#1', '2023-08-24 09:57:31', '{\"ar\":null}', '{\"en\":\"We create marketing campaigns (email) customized for each\",\"ar\":\"We create marketing campaigns (email) customized for each\"}', '{\"en\":\"category of your audience, with the aim of advertising products\",\"ar\":\"category of your audience, with the aim of advertising products\"}', '{\"en\":\"and services, and attracting new customers, in an efficient\",\"ar\":\"and services, and attracting new customers, in an efficient\"}', '{\"en\":\"and effective manner\",\"ar\":\"and effective manner\"}', '{\"ar\":null}', '2023-09-20 12:26:04'),
(29, '{\"en\":\"Pay Per Click (PPC)\",\"ar\":\"Pay Per Click (PPC)\"}', '{\"en\":\"campaign management\",\"ar\":\"campaign management\"}', '{\"ar\":null}', '{\"ar\":null}', '{\"en\":\"Read more\"}', '{\"en\":null}', NULL, '7', 'sliders', '2', 'Active', '#22', '2023-08-24 10:00:46', '{\"ar\":null}', '{\"en\":\"Enjoy PPC at a cheap price and immediate impact for your advertising\",\"ar\":\"Enjoy PPC at a cheap price and immediate impact for your advertising\"}', '{\"en\":\"campaigns, to give your brand wide exposure to your target\",\"ar\":\"campaigns, to give your brand wide exposure to your target\"}', '{\"en\":\"audience, and to obtain the number 1 position in appearing on\",\"ar\":\"audience, and to obtain the number 1 position in appearing on\"}', '{\"en\":\"the first page in search .engines\",\"ar\":\"the first page in search .engines\"}', '{\"ar\":null}', '2023-09-20 13:05:35'),
(30, '{\"en\":\"Marketing via social\",\"ar\":\"Marketing via social\"}', '{\"en\":\"media platforms\",\"ar\":\"media platforms\"}', '{\"ar\":null}', '{\"ar\":null}', '{\"en\":\"Read more\"}', '{\"en\":null}', NULL, '7', 'sliders', '1', 'Active', '#33', '2023-08-24 10:01:59', '{\"ar\":null}', '{\"en\":\"Social media marketing is able to help you grow your business\",\"ar\":\"Social media marketing is able to help you grow your business\"}', '{\"en\":\",maintain your presence on social media, and engage with your\",\"ar\":\",maintain your presence on social media, and engage with your\"}', '{\"en\":\"audience on a regular basis\",\"ar\":\"audience on a regular basis\"}', '{\"ar\":\".audience on a regular basis\"}', '{\"ar\":null}', '2023-09-20 14:31:22'),
(31, '{\"en\":\"Recent Works\",\"ar\":\"Recent Works\"}', '{\"en\":\"We Offer Digital Solutions\",\"ar\":\"We Offer Digital Solutions\"}', '{\"en\":\"<p>We have extensive experience in marketing through social media platforms, and we manage and improve accounts to attract the target audience and increase the number of sales<\\/p>\",\"ar\":\"<p>We have extensive experience in marketing through social media platforms, and we manage and improve accounts to attract the target audience and increase the number of sales<\\/p>\"}', '{\"ar\":null}', '{\"en\":\"Read more\"}', '{\"en\":null}', NULL, '7', 'recent-works', '1', 'Active', '#44', '2023-08-24 11:43:37', '{\"ar\":null}', '{\"en\":\"Social Media\",\"ar\":\"Social Media Marketing\"}', '{\"en\":\"Marketing\",\"ar\":\"Marketing\"}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '2023-09-11 09:57:51'),
(32, '{\"ar\":null}', '{\"en\":\"Increase Your Site\'s\",\"ar\":\"Increase Your Site\'s\"}', '{\"en\":\"<p>We are able to improve your site&#39;s ranking in major search engines, which helps increase website reach and improve user experience<\\/p>\",\"ar\":\"<p>We are able to improve your site&#39;s ranking in major search engines, which helps increase website reach and improve user experience<\\/p>\"}', '{\"ar\":null}', '{\"en\":\"Read more\"}', '{\"en\":null}', NULL, '7', 'recent-works', '2', 'Active', '#444', '2023-08-24 11:43:39', '{\"en\":\"Ranking In Google\",\"ar\":\"Ranking In Google\"}', '{\"en\":\"And Search Engines\",\"ar\":\"And Search Engines\"}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '2023-09-11 09:58:28'),
(33, '{\"ar\":null}', '{\"en\":\"Advertising Campaign\",\"ar\":\"Advertising Campaign\"}', '{\"en\":\"<p>We manage your advertising campaigns for you. We are able to provide high-quality visits aimed at increasing sales in your company<\\/p>\",\"ar\":\"<p>We manage your advertising campaigns for you. We are able to provide high-quality visits aimed at increasing sales in your company<\\/p>\"}', '{\"ar\":null}', '{\"en\":\"Read more\"}', '{\"en\":null}', NULL, '7', 'recent-works', '3', 'Active', '#66', '2023-08-24 11:43:41', '{\"en\":\"Management\",\"ar\":\"Management\"}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '2023-09-11 09:58:53'),
(34, '{\"ar\":null}', '{\"en\":\"Content Marketing\",\"ar\":\"Content Marketing\"}', '{\"en\":\"<p>The content marketing service is considered one of the main services provided by the company, as it creates creative and attractive content that targets the target audience and increases their interaction with the website or the products offered<\\/p>\",\"ar\":\"<p>The content marketing service is considered one of the main services provided by the company, as it creates creative and attractive content that targets the target audience and increases their interaction with the website or the products offered<\\/p>\"}', '{\"ar\":null}', '{\"en\":\"Read more\"}', '{\"en\":null}', NULL, '7', 'recent-works', '4', 'Active', '#66', '2023-08-24 11:43:42', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '2023-09-11 09:59:12'),
(35, '{\"en\":\"Fine Folks\",\"ar\":\"Fine Folks\"}', '{\"en\":\"We\\u2019ve Worked\",\"ar\":\"We\\u2019ve Worked\"}', '{\"ar\":null}', '{\"ar\":null}', '{\"en\":null}', '{\"en\":null}', NULL, '7', 'partenrs', '1', 'Active', NULL, '2023-08-24 12:26:25', '{\"en\":\"With\",\"ar\":\"With\"}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '2023-08-24 12:26:25'),
(36, '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"en\":null}', '{\"en\":null}', NULL, '7', 'partenrs', '2', 'Active', NULL, '2023-08-24 12:26:40', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '2023-08-24 12:26:40'),
(37, '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"en\":null}', '{\"en\":null}', NULL, '7', 'partenrs', '3', 'Active', NULL, '2023-08-24 12:26:51', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '2023-08-24 12:26:51'),
(38, '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"en\":null}', '{\"en\":null}', NULL, '7', 'partenrs', '4', 'Active', NULL, '2023-08-24 12:27:03', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '2023-08-24 12:27:03'),
(39, '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"en\":null}', '{\"en\":null}', NULL, '7', 'partenrs', '5', 'Active', NULL, '2023-08-24 12:27:14', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '2023-08-24 12:27:14'),
(41, '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"en\":null}', '{\"en\":null}', NULL, '7', 'partenrs', NULL, 'Active', NULL, '2023-08-24 12:27:33', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '2023-08-24 12:27:33'),
(42, '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"en\":null}', '{\"en\":null}', NULL, '7', 'partenrs', NULL, 'Active', NULL, '2023-08-24 12:27:45', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '2023-08-24 12:27:45'),
(43, '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"en\":null}', '{\"en\":null}', NULL, '7', 'partenrs', NULL, 'Active', NULL, '2023-08-24 12:27:54', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '2023-08-24 12:27:54'),
(45, '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"en\":null}', '{\"en\":null}', NULL, '7', 'partenrs', NULL, 'Active', '22', '2023-08-24 12:28:08', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '2023-08-27 05:25:59'),
(46, '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"en\":null}', '{\"en\":null}', NULL, '7', 'partenrs', NULL, 'Active', NULL, '2023-08-24 12:28:14', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '2023-08-24 12:28:14'),
(47, '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"en\":null}', '{\"en\":null}', NULL, '7', 'partenrs', NULL, 'Active', NULL, '2023-08-27 05:19:50', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '2023-08-27 05:25:04'),
(48, '{\"en\":\"Balanchaev Balancha,\",\"ar\":\"Balanchaev Balancha,\"}', '{\"en\":\"Investor\",\"ar\":\"Investor\"}', '{\"en\":\"<p>Copper mug vexillologist +1 prism iPhone fashion axe portland. Hella quinoa woke blog af umami tacos freegan vinyl snackwave microdosing. Fanny pack direct trade XOXO drinking vinegar. Live-edge kinfolk master cleanse brooklyn meh organic man braid. Actually humblebrag sriracha authentic chia. IPhone glossier schlitz fam, la croix keytar retro offal. Artisan selfies mlkshk pinterest gastropub knausgaard live-edge.<\\/p>\",\"ar\":\"<p>Copper mug vexillologist +1 prism iPhone fashion axe portland. Hella quinoa woke blog af umami tacos freegan vinyl snackwave microdosing. Fanny pack direct trade XOXO drinking vinegar. Live-edge kinfolk master cleanse brooklyn meh organic man braid. Actually humblebrag sriracha authentic chia. IPhone glossier schlitz fam, la croix keytar retro offal. Artisan selfies mlkshk pinterest gastropub knausgaard live-edge.<\\/p>\"}', '{\"ar\":null}', '{\"en\":null}', '{\"en\":null}', NULL, '7', 'testimonial', NULL, 'Not Active', NULL, '2023-08-27 05:38:21', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '2023-09-12 14:01:31'),
(49, '{\"en\":\"Fred Kinney,\",\"ar\":\"Fred Kinney,\"}', '{\"en\":\"Designer\",\"ar\":\"Designer\"}', '{\"en\":\"<p>Bushwick tumeric slow-carb photo booth letterpress franzen kombucha tumblr listicle cronut waistcoat mustache. Jean shorts tilde swag cray. Microdosing heirloom wayfarers YOLO, church-key tattooed cred blue bottle viral lyft tacos retro. Bespoke drinking vinegar single-origin coffee pop-up, whatever air plant austin hexagon selfies tattooed. Fixie taxidermy forage hot chicken, locavore church-key authentic coloring book.<\\/p>\",\"ar\":\"<p>Bushwick tumeric slow-carb photo booth letterpress franzen kombucha tumblr listicle cronut waistcoat mustache. Jean shorts tilde swag cray. Microdosing heirloom wayfarers YOLO, church-key tattooed cred blue bottle viral lyft tacos retro. Bespoke drinking vinegar single-origin coffee pop-up, whatever air plant austin hexagon selfies tattooed. Fixie taxidermy forage hot chicken, locavore church-key authentic coloring book.<\\/p>\"}', '{\"ar\":null}', '{\"en\":null}', '{\"en\":null}', NULL, '7', 'testimonial', NULL, 'Not Active', NULL, '2023-08-27 05:38:49', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '2023-09-12 14:02:08'),
(50, '{\"en\":\"Steve Kong,\",\"ar\":\"Steve Kong,\"}', '{\"en\":\"Web developer\",\"ar\":\"Web developer\"}', '{\"en\":\"<p>Pitchfork vaporware hella, vice next level art party subway tile swag portland. Cliche authentic photo booth, seitan sartorial iPhone brooklyn bicycle rights whatever small batch selvage affogato yuccie adaptogen vinyl. Sartorial franzen tacos cardigan, offal gluten-free pour-over snackwave plaid four dollar toast. Messenger bag keffiyeh church-key, synth iPhone pabst leggings ethical. PBR&amp;B cred hot chicken pork belly.<\\/p>\",\"ar\":\"<p>Pitchfork vaporware hella, vice next level art party subway tile swag portland. Cliche authentic photo booth, seitan sartorial iPhone brooklyn bicycle rights whatever small batch selvage affogato yuccie adaptogen vinyl. Sartorial franzen tacos cardigan, offal gluten-free pour-over snackwave plaid four dollar toast. Messenger bag keffiyeh church-key, synth iPhone pabst leggings ethical. PBR&amp;B cred hot chicken pork belly.<\\/p>\"}', '{\"ar\":null}', '{\"en\":null}', '{\"en\":null}', NULL, '7', 'testimonial', NULL, 'Not Active', NULL, '2023-08-27 05:39:32', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '2023-09-12 14:02:37'),
(51, '{\"en\":\"Fred Kinney,\",\"ar\":\"Fred Kinney,\"}', '{\"en\":\"Designer\",\"ar\":\"Designer\"}', '{\"en\":\"<p>Chambray enamel pin synth shabby chic palo santo. Franzen 90&#39;s man bun wayfarers, put a bird on it twee four loko roof party shabby chic kale chips photo booth salvia mixtape lumbersexual. Pug kickstarter hammock unicorn, cardigan ennui celiac roof party. Ramps pitchfork direct trade, food truck tacos biodiesel craft beer. Af hammock listicle vape banjo echo park meditation organic cred subway tile. Echo park DIY.<\\/p>\",\"ar\":\"<p>Chambray enamel pin synth shabby chic palo santo. Franzen 90&#39;s man bun wayfarers, put a bird on it twee four loko roof party shabby chic kale chips photo booth salvia mixtape lumbersexual. Pug kickstarter hammock unicorn, cardigan ennui celiac roof party. Ramps pitchfork direct trade, food truck tacos biodiesel craft beer. Af hammock listicle vape banjo echo park meditation organic cred subway tile. Echo park DIY.<\\/p>\"}', '{\"ar\":null}', '{\"en\":null}', '{\"en\":null}', NULL, '7', 'testimonial', NULL, 'Not Active', NULL, '2023-08-27 05:40:38', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '2023-09-12 14:02:42'),
(52, '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"en\":null}', '{\"en\":null}', NULL, '7', 'video', NULL, 'Active', 'https://www.youtube.com/watch?v=9TGlc0Fufgk', '2023-08-27 05:53:18', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '2023-08-27 05:54:07'),
(53, '{\"en\":\"From the blog\",\"ar\":\"From the blog\"}', '{\"en\":\"Check our latest news\",\"ar\":\"Check our latest news\"}', '{\"ar\":null}', '{\"ar\":null}', '{\"en\":\"Read More\"}', '{\"en\":null}', NULL, '7', 'blog', NULL, 'Active', NULL, '2023-08-27 08:16:25', '{\"en\":\"Blogs\",\"ar\":\"Blogs\"}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '2023-09-12 16:19:30'),
(54, '{\"en\":\"Welcome\",\"ar\":\"Welcome\"}', '{\"en\":\"Best Solutions\",\"ar\":\"Best Solutions\"}', '{\"ar\":null}', '{\"ar\":null}', '{\"en\":null}', '{\"en\":null}', NULL, '8', 'slider_aboutUs', NULL, 'Active', NULL, '2023-08-28 07:04:17', '{\"en\":\"& ideas for\",\"ar\":\"& ideas for\"}', '{\"en\":\"Your Business\",\"ar\":\"Your Business\"}', '{\"en\":\"Creative team\",\"ar\":\"Creative team\"}', '{\"en\":\"Innovation ideas\",\"ar\":\"Innovation ideas\"}', '{\"en\":\"Best services\",\"ar\":\"Best services\"}', '{\"ar\":null}', '2023-09-17 12:55:21'),
(55, '{\"en\":\"Who We Are\",\"ar\":\"Who We Are\"}', '{\"ar\":null}', '{\"ar\":\"<p><span style=\\\"color:#A9A9A9\\\">We are always looking forward to communicating with our customers. Contact us<\\/span><\\/p>\\r\\n\\r\\n<p><span style=\\\"color:#A9A9A9\\\">now to obtain distinguished electronic marketing services and free consultations to<\\/span><\\/p>\\r\\n\\r\\n<p><span style=\\\"color:#A9A9A9\\\">achieve your electronic success with Boost Plus Electronic Marketing Company.<\\/span><\\/p>\",\"en\":\"<p><span style=\\\"color:#A9A9A9\\\">We are always looking forward to communicating with our customers. Contact us<\\/span><\\/p>\\r\\n\\r\\n<p><span style=\\\"color:#A9A9A9\\\">now to obtain distinguished electronic marketing services and free consultations to<\\/span><\\/p>\\r\\n\\r\\n<p><span style=\\\"color:#A9A9A9\\\">achieve your electronic success with Boost Plus Electronic Marketing Company.<\\/span><\\/p>\"}', '{\"ar\":null}', '{\"en\":null}', '{\"en\":null}', NULL, '8', 'WhoWeAre', NULL, 'Active', NULL, '2023-08-28 07:14:13', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '2023-09-17 13:07:12'),
(56, '{\"ar\":null}', '{\"en\":\"CSS Design Awards\",\"ar\":\"CSS Design Awards\"}', '{\"ar\":null}', '{\"ar\":null}', '{\"en\":null}', '{\"en\":null}', NULL, '8', 'WhoWeAre', NULL, 'Not Active', NULL, '2023-08-28 07:18:57', '{\"en\":\"Best developer\",\"ar\":\"Best developer\"}', '{\"en\":\"Best graphic design\",\"ar\":\"Best graphic design\"}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '2023-09-17 13:06:12'),
(57, '{\"ar\":null}', '{\"en\":\"Awwwards\",\"ar\":\"Awwwards\"}', '{\"ar\":null}', '{\"ar\":null}', '{\"en\":null}', '{\"en\":null}', NULL, '8', 'WhoWeAre', NULL, 'Not Active', NULL, '2023-08-28 07:19:29', '{\"en\":\"Best creative agency\",\"ar\":\"Best creative agency\"}', '{\"en\":\"Best Services\",\"ar\":\"Best Services\"}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '2023-09-17 13:08:05'),
(58, '{\"en\":\"Balanchaev Balancha\",\"ar\":\"Balanchaev Balancha\"}', '{\"en\":\"Web Designer\",\"ar\":\"Web Designer\"}', '{\"ar\":null}', '{\"ar\":null}', '{\"en\":null}', '{\"en\":null}', NULL, '8', 'team', NULL, 'Not Active', NULL, '2023-08-28 07:28:48', '{\"en\":\"Our Best Experts\",\"ar\":\"Our Best Experts\"}', '{\"en\":\"Team You\",\"ar\":\"Team You\"}', '{\"en\":\"Want to\",\"ar\":\"Want to\"}', '{\"en\":\"Work With\",\"ar\":\"Work With\"}', '{\"ar\":null}', '{\"ar\":null}', '2023-09-12 14:04:42'),
(59, '{\"en\":\"James Basinski\",\"ar\":\"James Basinski\"}', '{\"en\":\"Graphic designer\",\"ar\":\"Graphic designer\"}', '{\"ar\":null}', '{\"ar\":null}', '{\"en\":null}', '{\"en\":null}', NULL, '8', 'team', NULL, 'Not Active', NULL, '2023-08-28 07:28:51', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '2023-09-12 14:04:19'),
(60, '{\"en\":\"Steve Kong\",\"ar\":\"Steve Kong\"}', '{\"en\":\"Art director\",\"ar\":\"Art director\"}', '{\"ar\":null}', '{\"ar\":null}', '{\"en\":null}', '{\"en\":null}', NULL, '8', 'team', NULL, 'Not Active', NULL, '2023-08-28 07:28:58', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '2023-09-12 14:04:08'),
(61, '{\"en\":\"Leila York\",\"ar\":\"Leila York\"}', '{\"en\":\"Manager\",\"ar\":\"Manager\"}', '{\"ar\":null}', '{\"ar\":null}', '{\"en\":null}', '{\"en\":null}', NULL, '8', 'team', NULL, 'Not Active', NULL, '2023-08-28 07:29:03', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '2023-09-12 14:03:56'),
(62, '{\"en\":\"Balancha Balanchaevich\",\"ar\":\"Balancha Balanchaevich\"}', '{\"en\":\"web designer\",\"ar\":\"web designer\"}', '{\"ar\":null}', '{\"ar\":null}', '{\"en\":null}', '{\"en\":null}', NULL, '8', 'team', NULL, 'Not Active', NULL, '2023-08-28 07:29:08', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '2023-09-12 14:03:44'),
(63, '{\"en\":\"We are creative\",\"ar\":\"We are creative\"}', '{\"ar\":null}', '{\"en\":\"<p>Succulents mlkshk hammock jean shorts flexitarian chicharrones, skateboard 90&#39;s knausgaard heirloom sustainable fixie forage. Vegan cloud bread forage lyft, cornhole food truck salvia portland locavore mlkshk. Etsy synth taxidermy godard DIY, tote bag fingerstache<\\/p>\",\"ar\":\"<p>Succulents mlkshk hammock jean shorts flexitarian chicharrones, skateboard 90&#39;s knausgaard heirloom sustainable fixie forage. Vegan cloud bread forage lyft, cornhole food truck salvia portland locavore mlkshk. Etsy synth taxidermy godard DIY, tote bag fingerstache<\\/p>\"}', '{\"en\":\"<p>Hoodie roof party organic umami kombucha thundercats. Pok pok normcore snackwave venmo deep v, quinoa everyday carry la croix. Tattooed chia kickstarter, woke ramps subway tile meggings enamel pin. Sustainable pop-up craft beer single-origin coffee.<\\/p>\",\"ar\":\"<p>Hoodie roof party organic umami kombucha thundercats. Pok pok normcore snackwave venmo deep v, quinoa everyday carry la croix. Tattooed chia kickstarter, woke ramps subway tile meggings enamel pin. Sustainable pop-up craft beer single-origin coffee.<\\/p>\"}', '{\"en\":null}', '{\"en\":null}', NULL, '7', 'creative', NULL, 'Active', NULL, '2023-08-28 08:15:40', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '2023-09-06 08:39:45'),
(64, '{\"en\":\"The Best\",\"ar\":\"The Best\"}', '{\"en\":\"Agency For\",\"ar\":\"Agency For\"}', '{\"ar\":null}', '{\"ar\":null}', '{\"en\":null}', '{\"en\":null}', NULL, '11', 'slider_contact', NULL, 'Active', NULL, '2023-08-28 09:45:46', '{\"en\":\"Your Businnes\",\"ar\":\"Your Businnes\"}', '{\"en\":\"We are always looking forward to communicating with our customers.\",\"ar\":\"We are always looking forward to communicating with our customers.\"}', '{\"en\":\"Contact us now to obtain distinguished electronic marketing services\",\"ar\":\"Contact us now to obtain distinguished electronic marketing services\"}', '{\"en\":\"and free consultations to achieve your electronic success with\",\"ar\":\"and free consultations to achieve your electronic success with\"}', '{\"en\":\"Boost Plus Electronic Marketing Company.\",\"ar\":\"Boost Plus Electronic Marketing Company.\"}', '{\"ar\":null}', '2023-09-20 13:18:46'),
(65, '{\"en\":\"Email us\",\"ar\":\"Email us\"}', '{\"en\":\"Inquiry@boostplus.com\",\"ar\":\"Inquiry@boostplus.com\"}', '{\"en\":\"<p>We are always looking forward to communicating with our customers. Contact us now to obtain distinguished electronic marketing services and free consultations to achieve your electronic success with Boost Plus Electronic Marketing Company.<\\/p>\",\"ar\":\"<p>We are always looking forward to communicating with our customers. Contact us now to obtain distinguished electronic marketing services and free consultations to achieve your electronic success with Boost Plus Electronic Marketing Company.<\\/p>\"}', '{\"en\":\"We are always looking forward to communicating with our customers. Contact us now to obtain distinguished electronic marketing services and free consultations to achieve your electronic success with Boost Plus Electronic Marketing Company.\",\"ar\":\"We are always looking forward to communicating with our customers. Contact us now to obtain distinguished electronic marketing services and free consultations to achieve your electronic success with Boost Plus Electronic Marketing Company.\"}', '{\"en\":null}', '{\"en\":null}', NULL, '11', 'ContactUs', NULL, 'Active', NULL, '2023-08-28 10:02:40', '{\"ar\":null}', '{\"ar\":null}', '{\"en\":\"Contact us\",\"ar\":\"Contact us\"}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '2023-09-20 13:35:18'),
(66, '{\"en\":\"Visit us\",\"ar\":\"Visit us\"}', '{\"en\":\"Al Khobar -\",\"ar\":\"Al Khobar -\"}', '{\"ar\":null}', '{\"ar\":null}', '{\"en\":null}', '{\"en\":null}', NULL, '11', 'ContactUs', NULL, 'Active', NULL, '2023-08-28 10:03:26', '{\"en\":\"Kingdom of Saudi Arabia\",\"ar\":\"Kingdom of Saudi Arabia\"}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '2023-09-20 13:40:41'),
(67, '{\"en\":\"Call us\",\"ar\":\"Call us\"}', '{\"en\":\"01001919021\",\"ar\":\"01001919021\"}', '{\"ar\":null}', '{\"ar\":null}', '{\"en\":null}', '{\"en\":null}', NULL, '11', 'ContactUs', NULL, 'Active', NULL, '2023-08-28 10:04:13', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '2023-09-20 13:36:21'),
(68, '{\"en\":\"new approach\",\"ar\":\"new approach\"}', '{\"en\":\"to design\",\"ar\":\"to design\"}', '{\"ar\":null}', '{\"ar\":null}', '{\"en\":null}', '{\"en\":null}', NULL, '10', 'portfolio', NULL, 'Active', NULL, '2023-08-28 11:30:40', '{\"en\":\"& marketing\",\"ar\":\"& marketing\"}', '{\"en\":\"XOXO fam brunch\",\"ar\":\"XOXO fam brunch\"}', '{\"en\":\"retro intelligentsia\",\"ar\":\"retro intelligentsia\"}', '{\"en\":\"live-edge vegan\",\"ar\":\"live-edge vegan\"}', '{\"ar\":null}', '{\"ar\":null}', '2023-08-28 11:30:40'),
(69, '{\"ar\":null}', '{\"en\":\"Improving Local SEO\",\"ar\":\"Improving Local SEO\"}', '{\"en\":\"<p>We improve the visibility of your company or online store<br \\/>\\r\\nin local search results to bring customers to your business doors<\\/p>\",\"ar\":\"<p>We improve the visibility of your company or online store<br \\/>\\r\\nin local search results to bring customers to your business doors<\\/p>\"}', '{\"ar\":null}', '{\"en\":\"read more\"}', '{\"en\":null}', NULL, '7', 'recent-works', '1', 'Active', '#44', '2023-09-13 09:17:09', '{\"en\":\"We Offer Digital Solutions\",\"ar\":\"We Offer Digital Solutions\"}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '2023-09-13 09:36:37'),
(70, '{\"ar\":null}', '{\"en\":\"E-Store Management\",\"ar\":null}', '{\"en\":\"<p>Extensive experience in creating and managing online stores, and working to improve the performance of online stores and increase<br \\/>\\r\\nsales<\\/p>\",\"ar\":\"<p>Extensive experience in creating and managing online stores, and working to improve the performance of online stores and increase<br \\/>\\r\\nsales<\\/p>\"}', '{\"ar\":null}', '{\"en\":\"read more\"}', '{\"en\":null}', NULL, '7', 'recent-works', '2', 'Active', '#44', '2023-09-13 09:40:16', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '{\"ar\":null}', '2023-09-13 09:40:16');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `firstname`, `lastname`, `email`, `message`, `url`, `type`, `created_at`, `updated_at`) VALUES
(1, 'hatem', 'faysilasdadsasd', 'hatemfaysil16@gmail.com', 'adsadsasdsad', 'http://127.0.0.1:8000/en/contact', NULL, '2023-08-28 10:49:28', '2023-08-28 10:49:28'),
(2, 'hatem', 'faysil', 'adasasd2@gmail.com', 'adssadadsasd', 'http://127.0.0.1:8000/en/contact', NULL, '2023-08-28 10:57:50', '2023-08-28 10:57:50'),
(3, 'hatem', 'ASDDAS', 'ASDSDA@gmail.com', '21321213', 'http://127.0.0.1:8000/en/blog/subway-tile', NULL, '2023-08-28 11:04:41', '2023-08-28 11:04:41'),
(4, 'hatem', 'faysil', 'asdas21@gmail.com', 'dasdsadsa', 'http://127.0.0.1:8000/en/blog/subway-tile', 'blog', '2023-08-28 11:05:51', '2023-08-28 11:05:51'),
(5, 'SALMA', 'AHMED', 'salmaa@gmail.com', 'TEST', 'http://thetailorsweb.com/xen.thetailorsweb.com/public/en/contact', NULL, '2023-08-29 10:14:10', '2023-08-29 10:14:10'),
(6, 'SALMA', 'AHMED', 'salma@gmail.com', 'test', 'http://thetailorsweb.com/xen.thetailorsweb.com/public/en/contact', NULL, '2023-09-11 13:43:04', '2023-09-11 13:43:04'),
(7, 'salmaa', 'adca', 'salmahmeda@gmail.com', 'test', 'http://thetailorsweb.com/xen.thetailorsweb.com/public/en/contact', NULL, '2023-09-20 13:44:05', '2023-09-20 13:44:05'),
(8, 'test', 'gvhg', 'test@gmail.com', 'test', 'http://thetailorsweb.com/xen.thetailorsweb.com/public/en/contact', NULL, '2023-09-20 13:45:00', '2023-09-20 13:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Active','Not Active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Active','Not Active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `must_seen` enum('seen','Not Seen') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'seen',
  `status` enum('Active','Not Active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `sort` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `group_location`
--

CREATE TABLE `group_location` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location_id` bigint(20) UNSIGNED NOT NULL,
  `group_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_apartments`
--

CREATE TABLE `hotel_apartments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `district_id` bigint(20) UNSIGNED DEFAULT NULL,
  `stars` int(11) DEFAULT NULL,
  `rooms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `typing_live` enum('city','village') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('Hotel','Apartment') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Active','Not Active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `sort` int(11) DEFAULT NULL,
  `location` point DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `district_id` bigint(20) UNSIGNED DEFAULT NULL,
  `type` enum('Attractions','Restaurants') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `status` enum('Active','Not Active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `location` point DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ltm_translations`
--

CREATE TABLE `ltm_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `locale` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `key` text COLLATE utf8mb4_bin NOT NULL,
  `value` text COLLATE utf8mb4_bin,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(8, 'App\\Models\\CmsPage', 3, '9f7ac8a0-0d09-43d9-b1c9-549393167308', 'Home_creative_1', 'cf', 'cf.JPG', 'image/jpeg', 'media', 'media', 28355, '[]', '[]', '[]', '[]', 1, '2023-08-20 10:28:00', '2023-08-20 10:28:00'),
(14, 'App\\Models\\Setting', 13, '584e6f0a-d722-44df-9705-a1202c29dcad', 'Logo', 'BOOST-theme.png2', 'BOOST-theme.png2.png', 'image/png', 'media', 'media', 41408, '[]', '[]', '[]', '[]', 1, '2023-08-20 14:42:53', '2023-08-20 14:42:53'),
(15, 'App\\Models\\Setting', 14, 'b7e1a1ac-b33a-4c0b-9c48-4b64c79d49b9', 'Logo', 'BOOST-theme.png4', 'BOOST-theme.png4.png', 'image/png', 'media', 'media', 46497, '[]', '[]', '[]', '[]', 1, '2023-08-20 14:43:35', '2023-08-20 14:43:35'),
(81, 'App\\Models\\CmsPage', 48, 'f7c1e789-cff1-4ceb-9d10-d9152eb60ffd', 'Page', 'adult-beanie-black-background-1529350', 'adult-beanie-black-background-1529350.jpg', 'image/jpeg', 'media', 'media', 17495, '[]', '[]', '[]', '[]', 1, '2023-08-27 05:38:21', '2023-08-27 05:38:21'),
(82, 'App\\Models\\CmsPage', 49, 'a4f48ea4-9e04-4b5f-8c0d-dbfc6cb90ceb', 'Page', 'pexels-photo-428340', 'pexels-photo-428340.jpeg', 'image/jpeg', 'media', 'media', 16553, '[]', '[]', '[]', '[]', 1, '2023-08-27 05:38:49', '2023-08-27 05:38:49'),
(83, 'App\\Models\\CmsPage', 50, '9704fcbf-db35-4587-9b3c-4276c2b2d3b5', 'Page', 'pexels-photo-764529', 'pexels-photo-764529.jpeg', 'image/jpeg', 'media', 'media', 16422, '[]', '[]', '[]', '[]', 1, '2023-08-27 05:39:32', '2023-08-27 05:39:32'),
(84, 'App\\Models\\CmsPage', 51, 'f4f12c8b-af99-44ab-ad5d-c0b70f606b22', 'Page', 'pexels-photo-809433', 'pexels-photo-809433.jpeg', 'image/jpeg', 'media', 'media', 16550, '[]', '[]', '[]', '[]', 1, '2023-08-27 05:40:38', '2023-08-27 05:40:38'),
(85, 'App\\Models\\CmsPage', 52, '20f849d0-2451-4935-b095-bf2b8591ed2f', 'Page', 'business-calligraphy-chinese-lanterns-1455969', 'business-calligraphy-chinese-lanterns-1455969.jpg', 'image/jpeg', 'media', 'media', 53658, '[]', '[]', '[]', '[]', 1, '2023-08-27 05:53:18', '2023-08-27 05:53:18'),
(97, 'App\\Models\\Blogs', 1, '67415bd6-8b3a-48f9-a4cb-e86e2a5ef187', 'Blogs2', 'pexels-photo-348523', 'pexels-photo-348523.jpeg', 'image/jpeg', 'media', 'media', 241266, '[]', '[]', '[]', '[]', 2, '2023-08-27 07:57:59', '2023-08-27 07:57:59'),
(102, 'App\\Models\\Blogs', 1, '67b469d7-3cfc-4470-8c6b-e25389630153', 'Blogs', 'pexels-photo', 'pexels-photo.jpg', 'image/jpeg', 'media', 'media', 254940, '[]', '[]', '[]', '[]', 3, '2023-08-27 08:01:01', '2023-08-27 08:01:01'),
(103, 'App\\Models\\CmsPage', 53, '5f6e5955-5356-47e2-85c0-f6243023e74b', 'Page', 'pexels-photo', 'pexels-photo.jpg', 'image/jpeg', 'media', 'media', 254940, '[]', '[]', '[]', '[]', 1, '2023-08-27 10:48:22', '2023-08-27 10:48:22'),
(105, 'App\\Models\\CmsPage', 58, 'a8407cf3-c593-4595-9b3b-ea09161fda73', 'Page', '1', '1.jpg', 'image/jpeg', 'media', 'media', 57337, '[]', '[]', '[]', '[]', 1, '2023-08-28 07:28:48', '2023-08-28 07:28:48'),
(106, 'App\\Models\\CmsPage', 59, '0136a635-40ed-47c2-9aac-c8b96a6484e4', 'Page', '2', '2.jpg', 'image/jpeg', 'media', 'media', 63239, '[]', '[]', '[]', '[]', 1, '2023-08-28 07:28:51', '2023-08-28 07:28:51'),
(107, 'App\\Models\\CmsPage', 60, '4d423f9a-e398-4dea-8749-1db8bfa9a47d', 'Page', '3', '3.jpg', 'image/jpeg', 'media', 'media', 57869, '[]', '[]', '[]', '[]', 1, '2023-08-28 07:28:58', '2023-08-28 07:28:58'),
(108, 'App\\Models\\CmsPage', 61, '086e8435-3bfd-4a3c-8193-fcc51328b8fd', 'Page', '4', '4.jpg', 'image/jpeg', 'media', 'media', 66474, '[]', '[]', '[]', '[]', 1, '2023-08-28 07:29:03', '2023-08-28 07:29:03'),
(109, 'App\\Models\\CmsPage', 62, '76dfae3b-e032-4929-b7f3-3ab10c7b0746', 'Page', '5', '5.jpg', 'image/jpeg', 'media', 'media', 58882, '[]', '[]', '[]', '[]', 1, '2023-08-28 07:29:08', '2023-08-28 07:29:08'),
(148, 'App\\Models\\CmsPage', 35, '3b7589c0-5113-4699-9e25-3bacfb76917f', 'Page', 'weekenz', 'weekenz.png', 'image/png', 'media', 'media', 83448, '[]', '[]', '[]', '[]', 5, '2023-09-11 09:20:02', '2023-09-11 09:20:02'),
(149, 'App\\Models\\CmsPage', 35, '2602cb30-9f30-4ff3-aa59-e2317bb2ce05', 'Page2', 'weekenz', 'weekenz.png', 'image/png', 'media', 'media', 83448, '[]', '[]', '[]', '[]', 6, '2023-09-11 09:20:02', '2023-09-11 09:20:02'),
(150, 'App\\Models\\CmsPage', 37, '5dc67825-d1be-4efe-aa63-12757b6cb8ff', 'Page', 'flyin', 'flyin.png', 'image/png', 'media', 'media', 49055, '[]', '[]', '[]', '[]', 5, '2023-09-11 09:20:24', '2023-09-11 09:20:24'),
(151, 'App\\Models\\CmsPage', 37, '8b4e33e2-3de5-4559-a1a7-b1ffacd3dd04', 'Page2', 'flyin', 'flyin.png', 'image/png', 'media', 'media', 49055, '[]', '[]', '[]', '[]', 6, '2023-09-11 09:20:24', '2023-09-11 09:20:24'),
(152, 'App\\Models\\CmsPage', 38, '39375493-65f8-437a-9dbe-36def26ee2d8', 'Page', 'harfash', 'harfash.png', 'image/png', 'media', 'media', 99463, '[]', '[]', '[]', '[]', 5, '2023-09-11 09:20:54', '2023-09-11 09:20:54'),
(153, 'App\\Models\\CmsPage', 38, 'e6d55e5c-a07b-4c34-bae8-5c895a9cf5e1', 'Page2', 'harfash', 'harfash.png', 'image/png', 'media', 'media', 99463, '[]', '[]', '[]', '[]', 6, '2023-09-11 09:20:54', '2023-09-11 09:20:54'),
(154, 'App\\Models\\CmsPage', 39, '7656ce15-7cbd-4a58-a111-015b21cb1971', 'Page', 'araby', 'araby.png', 'image/png', 'media', 'media', 29420, '[]', '[]', '[]', '[]', 5, '2023-09-11 09:21:49', '2023-09-11 09:21:49'),
(155, 'App\\Models\\CmsPage', 39, 'ab18f55c-a508-495b-ac92-6ba0ed345c49', 'Page2', 'araby', 'araby.png', 'image/png', 'media', 'media', 29420, '[]', '[]', '[]', '[]', 6, '2023-09-11 09:21:49', '2023-09-11 09:21:49'),
(156, 'App\\Models\\CmsPage', 42, 'cd62cc27-ea4b-4fab-8683-5ba77e5e3314', 'Page', 'safa', 'safa.png', 'image/png', 'media', 'media', 109776, '[]', '[]', '[]', '[]', 5, '2023-09-11 09:22:20', '2023-09-11 09:22:20'),
(157, 'App\\Models\\CmsPage', 42, 'e2823874-eca8-43e1-b295-9fecca9c1ed4', 'Page2', 'safa', 'safa.png', 'image/png', 'media', 'media', 109776, '[]', '[]', '[]', '[]', 6, '2023-09-11 09:22:20', '2023-09-11 09:22:20'),
(158, 'App\\Models\\CmsPage', 43, '711ab6c2-de70-4174-819e-4d20bc89f7ae', 'Page', 'spell', 'spell.png', 'image/png', 'media', 'media', 82403, '[]', '[]', '[]', '[]', 5, '2023-09-11 09:22:45', '2023-09-11 09:22:45'),
(159, 'App\\Models\\CmsPage', 43, 'b181b9de-07d9-439d-a9e9-9f2cfc80080d', 'Page2', 'spell', 'spell.png', 'image/png', 'media', 'media', 82403, '[]', '[]', '[]', '[]', 6, '2023-09-11 09:22:45', '2023-09-11 09:22:45'),
(160, 'App\\Models\\CmsPage', 45, 'fb75d713-40f8-431c-a677-384dbb0145bb', 'Page', 'Alraya', 'Alraya.png', 'image/png', 'media', 'media', 97963, '[]', '[]', '[]', '[]', 5, '2023-09-11 09:23:22', '2023-09-11 09:23:22'),
(161, 'App\\Models\\CmsPage', 45, '1b41f443-f9bd-4db6-ba5d-e8519c1a74f0', 'Page2', 'Alraya', 'Alraya.png', 'image/png', 'media', 'media', 97963, '[]', '[]', '[]', '[]', 6, '2023-09-11 09:23:22', '2023-09-11 09:23:22'),
(162, 'App\\Models\\CmsPage', 46, 'b0f3e4ef-de80-4bc1-a22c-4d045441c0c4', 'Page', 'hub', 'hub.png', 'image/png', 'media', 'media', 63146, '[]', '[]', '[]', '[]', 5, '2023-09-11 09:23:51', '2023-09-11 09:23:51'),
(163, 'App\\Models\\CmsPage', 46, '2dc13275-2136-4082-b554-b4ba8418658d', 'Page2', 'hub', 'hub.png', 'image/png', 'media', 'media', 63146, '[]', '[]', '[]', '[]', 6, '2023-09-11 09:23:51', '2023-09-11 09:23:51'),
(164, 'App\\Models\\CmsPage', 36, '8c265c26-5601-45fe-858d-41869fcbbd59', 'Page', 'Ellithy', 'Ellithy.png', 'image/png', 'media', 'media', 86251, '[]', '[]', '[]', '[]', 5, '2023-09-11 09:24:17', '2023-09-11 09:24:17'),
(165, 'App\\Models\\CmsPage', 36, 'ac43ab60-bf44-4c0c-aa57-d2377af1db41', 'Page2', 'Ellithy', 'Ellithy.png', 'image/png', 'media', 'media', 86251, '[]', '[]', '[]', '[]', 6, '2023-09-11 09:24:17', '2023-09-11 09:24:17'),
(166, 'App\\Models\\CmsPage', 41, 'eb60678a-f15e-465c-b390-2aed87143434', 'Page', 'BOOST-theme.png2', 'BOOST-theme.png2.png', 'image/png', 'media', 'media', 41408, '[]', '[]', '[]', '[]', 11, '2023-09-11 09:47:42', '2023-09-11 09:47:42'),
(167, 'App\\Models\\CmsPage', 41, '2faab2ab-46de-4b95-9fc5-988a90b5c04f', 'Page2', 'BOOST-theme.png2', 'BOOST-theme.png2.png', 'image/png', 'media', 'media', 41408, '[]', '[]', '[]', '[]', 12, '2023-09-11 09:47:42', '2023-09-11 09:47:42'),
(170, 'App\\Models\\CmsPage', 47, 'bdd022e1-dfc0-40d2-8217-d1c47e6a6b03', 'Page', 'mqadhe', 'mqadhe.png', 'image/png', 'media', 'media', 88992, '[]', '[]', '[]', '[]', 9, '2023-09-11 11:38:12', '2023-09-11 11:38:12'),
(171, 'App\\Models\\CmsPage', 47, '8c1caaa5-4be4-450d-9ffd-1c9c03d5ef89', 'Page2', 'mqadhe', 'mqadhe.png', 'image/png', 'media', 'media', 88992, '[]', '[]', '[]', '[]', 10, '2023-09-11 11:38:12', '2023-09-11 11:38:12'),
(190, 'App\\Models\\CmsPage', 64, 'e5d083ce-83ce-4b7c-b8c6-891fcd5b1651', 'Page', 'WhatsApp Image 2023-09-12 at 5.55.19 PM', 'WhatsApp-Image-2023-09-12-at-5.55.19-PM.jpeg', 'image/jpeg', 'media', 'media', 105822, '[]', '[]', '[]', '[]', 1, '2023-09-12 15:34:42', '2023-09-12 15:34:42'),
(191, 'App\\Models\\CmsPage', 64, '7fafcd11-c585-4051-8013-b2f00cfabc03', 'Page2', 'WhatsApp Image 2023-09-12 at 5.55.19 PM', 'WhatsApp-Image-2023-09-12-at-5.55.19-PM.jpeg', 'image/jpeg', 'media', 'media', 105822, '[]', '[]', '[]', '[]', 2, '2023-09-12 15:34:42', '2023-09-12 15:34:42'),
(205, 'App\\Models\\CmsPage', 32, '0cdbcc62-1e5d-45b2-a07a-df7cf859c43c', 'Page', '2', '2.jpeg', 'image/jpeg', 'media', 'media', 89602, '[]', '[]', '[]', '[]', 3, '2023-09-12 16:03:11', '2023-09-12 16:03:11'),
(206, 'App\\Models\\CmsPage', 32, 'dbe70395-ddd8-42c4-ab0b-2e26a7a0785f', 'Page2', '2', '2.jpeg', 'image/jpeg', 'media', 'media', 89602, '[]', '[]', '[]', '[]', 4, '2023-09-12 16:03:11', '2023-09-12 16:03:11'),
(207, 'App\\Models\\CmsPage', 33, '11aa1a34-a7af-43f1-abba-13ba43d53573', 'Page', '6', '6.jpeg', 'image/jpeg', 'media', 'media', 102490, '[]', '[]', '[]', '[]', 3, '2023-09-12 16:03:47', '2023-09-12 16:03:47'),
(208, 'App\\Models\\CmsPage', 33, 'c671720e-3b14-4cf6-9fdc-6a8c4a20a894', 'Page2', '6', '6.jpeg', 'image/jpeg', 'media', 'media', 102490, '[]', '[]', '[]', '[]', 4, '2023-09-12 16:03:47', '2023-09-12 16:03:47'),
(209, 'App\\Models\\CmsPage', 34, '8af553f2-62fc-4265-8a9f-b5081b66e3e4', 'Page', '5', '5.jpeg', 'image/jpeg', 'media', 'media', 105822, '[]', '[]', '[]', '[]', 9, '2023-09-12 16:04:58', '2023-09-12 16:04:58'),
(210, 'App\\Models\\CmsPage', 34, '03c8fab2-6bda-48ba-a6f0-409a413b38ea', 'Page2', '5', '5.jpeg', 'image/jpeg', 'media', 'media', 105822, '[]', '[]', '[]', '[]', 10, '2023-09-12 16:04:58', '2023-09-12 16:04:58'),
(211, 'App\\Models\\CmsPage', 54, '597b59b1-e07b-4df2-9a94-44218e49f245', 'Page', '4', '4.jpeg', 'image/jpeg', 'media', 'media', 83634, '[]', '[]', '[]', '[]', 1, '2023-09-12 16:06:10', '2023-09-12 16:06:10'),
(212, 'App\\Models\\CmsPage', 54, 'a1fcd607-9bce-430a-bb43-7137c94cdb4a', 'Page2', '4', '4.jpeg', 'image/jpeg', 'media', 'media', 83634, '[]', '[]', '[]', '[]', 2, '2023-09-12 16:06:10', '2023-09-12 16:06:10'),
(213, 'App\\Models\\CmsPage', 68, '9381692f-e99a-44d7-b04b-ec82cfa9685b', 'Page', '3', '3.jpeg', 'image/jpeg', 'media', 'media', 84493, '[]', '[]', '[]', '[]', 3, '2023-09-12 16:07:41', '2023-09-12 16:07:41'),
(214, 'App\\Models\\CmsPage', 68, 'c5888843-0f04-4498-a034-65c0327944ee', 'Page2', '3', '3.jpeg', 'image/jpeg', 'media', 'media', 84493, '[]', '[]', '[]', '[]', 4, '2023-09-12 16:07:41', '2023-09-12 16:07:41'),
(215, 'App\\Models\\CmsPage', 28, 'bd9e40e8-6ddd-44ed-8c54-85f44978bf5d', 'Page', '5', '5.jpeg', 'image/jpeg', 'media', 'media', 105822, '[]', '[]', '[]', '[]', 1, '2023-09-12 16:08:38', '2023-09-12 16:08:38'),
(216, 'App\\Models\\CmsPage', 28, '51e8b393-c4fa-46ca-9074-6dac22c1122d', 'Page2', '5', '5.jpeg', 'image/jpeg', 'media', 'media', 105822, '[]', '[]', '[]', '[]', 2, '2023-09-12 16:08:38', '2023-09-12 16:08:38'),
(217, 'App\\Models\\CmsPage', 29, 'e2d7fbcb-7e74-4d8f-ba11-5b231cb2e0d1', 'Page', '2', '2.jpeg', 'image/jpeg', 'media', 'media', 89602, '[]', '[]', '[]', '[]', 1, '2023-09-12 16:10:03', '2023-09-12 16:10:03'),
(218, 'App\\Models\\CmsPage', 29, '50850a1f-c10d-413c-b30f-7d58046702ea', 'Page2', '2', '2.jpeg', 'image/jpeg', 'media', 'media', 89602, '[]', '[]', '[]', '[]', 2, '2023-09-12 16:10:03', '2023-09-12 16:10:03'),
(225, 'App\\Models\\CmsPage', 70, '87eb9ee8-ba22-46f3-95c2-7e435d07269f', 'Page', '3', '3.jpeg', 'image/jpeg', 'media', 'media', 84493, '[]', '[]', '[]', '[]', 1, '2023-09-13 09:40:16', '2023-09-13 09:40:16'),
(226, 'App\\Models\\CmsPage', 70, '0bf22f79-4ea1-4514-9fbd-4049586e6c5f', 'Page2', '3', '3.jpeg', 'image/jpeg', 'media', 'media', 84493, '[]', '[]', '[]', '[]', 2, '2023-09-13 09:40:16', '2023-09-13 09:40:16'),
(229, 'App\\Models\\CmsPage', 69, '5b3bf389-8c1d-405f-bbe3-b2a0e6e811bb', 'Page', '4', '4.jpeg', 'image/jpeg', 'media', 'media', 83634, '[]', '[]', '[]', '[]', 3, '2023-09-17 12:58:09', '2023-09-17 12:58:09'),
(230, 'App\\Models\\CmsPage', 69, 'f28141af-ae22-4110-ba8a-eefbb41fdac2', 'Page2', '4', '4.jpeg', 'image/jpeg', 'media', 'media', 83634, '[]', '[]', '[]', '[]', 4, '2023-09-17 12:58:09', '2023-09-17 12:58:09'),
(231, 'App\\Models\\CmsPage', 31, '8b1d2066-e527-4130-97a1-169f03e5c28b', 'Page', '1', '1.jpeg', 'image/jpeg', 'media', 'media', 89775, '[]', '[]', '[]', '[]', 5, '2023-09-17 13:03:27', '2023-09-17 13:03:27'),
(232, 'App\\Models\\CmsPage', 31, '6c3bec11-fab3-4e95-82e3-8a47359ae658', 'Page2', '1', '1.jpeg', 'image/jpeg', 'media', 'media', 89775, '[]', '[]', '[]', '[]', 6, '2023-09-17 13:03:27', '2023-09-17 13:03:27'),
(235, 'App\\Models\\CmsPage', 30, 'a02d41cd-34ea-451f-a867-c0ef34f65e6d', 'Page', '1', '1.jpeg', 'image/jpeg', 'media', 'media', 89775, '[]', '[]', '[]', '[]', 17, '2023-09-20 14:20:34', '2023-09-20 14:20:34'),
(236, 'App\\Models\\CmsPage', 30, '50c92e63-eefd-4c8c-b811-5edc0fe04fa6', 'Page2', '1', '1.jpeg', 'image/jpeg', 'media', 'media', 89775, '[]', '[]', '[]', '[]', 18, '2023-09-20 14:20:34', '2023-09-20 14:20:34');

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
(1, '2014_03_20_145801_create_countries_table', 1),
(2, '2014_03_20_145812_create_cities_table', 1),
(3, '2014_03_20_145900_create_districts_table', 1),
(4, '2014_04_02_193005_create_translations_table', 1),
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2023_03_05_101905_create_permission_tables', 1),
(10, '2023_03_05_102027_create_admins_table', 1),
(11, '2023_03_05_103146_create_media_table', 1),
(12, '2023_03_05_104359_create_settings_table', 1),
(13, '2023_03_08_113944_create_translation_keys_table', 1),
(14, '2023_03_08_132955_create_new_permission_table', 1),
(15, '2023_03_09_160105_create_images_table', 1),
(16, '2023_03_20_144704_create_places_table', 1),
(17, '2023_03_20_151800_create_activity_log_table', 1),
(18, '2023_03_20_151801_add_event_column_to_activity_log_table', 1),
(19, '2023_03_20_151802_add_batch_uuid_column_to_activity_log_table', 1),
(20, '2023_03_20_170138_create_cars_table', 1),
(21, '2023_03_20_172903_create_public_transportations_table', 1),
(22, '2023_03_21_080141_create_public_transportation_cities_table', 1),
(23, '2023_03_21_081314_create_hotel_apartments_table', 1),
(24, '2023_03_21_082839_create_locations_table', 1),
(25, '2023_03_21_084253_create_groups_table', 1),
(26, '2023_03_21_085047_create_tags_table', 1),
(27, '2023_03_21_085732_create_tag_group_table', 1),
(28, '2023_03_21_090608_create_group_location_table', 1),
(29, '2023_03_23_130154_create_banners_table', 1),
(30, '2023_08_16_123451_create_pages_table', 1),
(33, '2023_08_17_144431_create_cms_pages_table', 2),
(34, '2023_08_23_190528_create_projects_table', 3),
(40, '2023_08_27_091333_create_blogs_table', 4),
(42, '2023_08_28_133210_create_contact_us_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\Admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `nave` enum('Active','Not Active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `footer` enum('Active','Not Active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `status` enum('Active','Not Active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `slug`, `description`, `nave`, `footer`, `status`, `parent_id`, `created_at`, `updated_at`) VALUES
(7, '{\"en\":\"Home\",\"ar\":\"Home\"}', '{\"en\":\"home\",\"ar\":\"home\"}', '{\"ar\":null}', 'Active', 'Active', 'Active', NULL, '2023-08-17 08:55:42', '2023-08-17 08:55:42'),
(8, '{\"en\":\"About\",\"ar\":\"About\"}', '{\"en\":\"about\",\"ar\":\"about\"}', '{\"ar\":null}', 'Active', 'Active', 'Active', NULL, '2023-08-17 08:56:22', '2023-08-17 08:56:22'),
(9, '{\"en\":\"Blog\",\"ar\":\"Blog\"}', '{\"en\":\"blog\",\"ar\":\"blog\"}', '{\"ar\":null}', 'Not Active', 'Not Active', 'Not Active', NULL, '2023-08-17 08:57:18', '2023-09-12 08:58:13'),
(10, '{\"en\":\"portfolio\",\"ar\":\"portfolio\"}', '{\"en\":\"portfolio\",\"ar\":\"portfolio\"}', '{\"ar\":null}', 'Active', 'Active', 'Active', NULL, '2023-08-17 08:57:54', '2023-08-17 10:06:47'),
(11, '{\"en\":\"Contact\",\"ar\":\"Contact\"}', '{\"en\":\"contact\",\"ar\":\"contact\"}', '{\"ar\":null}', 'Active', 'Active', 'Active', NULL, '2023-08-17 08:58:55', '2023-08-20 09:04:25');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'good', 'admin', '2023-08-17 06:59:18', '2023-08-17 06:59:18'),
(2, 'bad', 'admin', '2023-08-17 06:59:18', '2023-08-17 06:59:18');

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` point DEFAULT NULL,
  `area` polygon DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `public_transportations`
--

CREATE TABLE `public_transportations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `district_id` bigint(20) UNSIGNED DEFAULT NULL,
  `days` int(11) DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `status` enum('Active','Not Active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `sort` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `public_transportation_cities`
--

CREATE TABLE `public_transportation_cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `type` enum('Train','Plan','Bus','Transfer') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_from` date DEFAULT NULL,
  `city_to` date DEFAULT NULL,
  `status` enum('Active','Not Active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `sort` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '2023-08-17 06:59:19', '2023-08-17 06:59:19');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(13, 'LogoBlack', 'Jinna Gik', '2023-08-20 05:21:02', '2023-08-20 05:21:02'),
(14, 'LogoWhite', 'Jinna Gik', '2023-08-20 05:21:02', '2023-08-20 05:21:02'),
(26, 'Email', 'Inquiry@boostplus.com', '2023-09-20 12:56:03', '2023-09-20 13:25:21'),
(27, 'Phone', '01001919021', '2023-09-20 12:56:03', '2023-09-20 12:57:19'),
(28, 'Street', 'Al Khobar - Kingdom of Saudi Arabia', '2023-09-20 12:56:03', '2023-09-20 13:41:22'),
(29, 'Instagram', 'Instagram.com', '2023-09-20 12:56:03', '2023-09-20 12:56:03'),
(30, 'Twitter', 'https://twitter.com/BoostPlusKSA', '2023-09-20 12:56:03', '2023-09-20 12:59:49'),
(31, 'LinkedIn', 'linkedin.com', '2023-09-20 12:56:03', '2023-09-20 12:56:03'),
(32, 'Snapchat', 'snapchat.com', '2023-09-20 12:56:03', '2023-09-20 12:56:03'),
(33, 'YouTube', 'youtube.com', '2023-09-20 12:56:03', '2023-09-20 12:56:03'),
(34, 'Tiktok', 'tiktok.com', '2023-09-20 12:56:03', '2023-09-20 12:56:03'),
(35, 'Facebook', 'https://www.facebook.com/BoostPlusKSA', '2023-09-20 12:56:03', '2023-09-20 13:00:15'),
(36, 'Copyright', 'Copyright 2023 Boostplus.', '2023-09-20 12:56:03', '2023-09-20 15:20:25'),
(37, 'Author', 'Jinna Gik', '2023-09-20 12:56:03', '2023-09-20 12:56:03'),
(38, 'ifram_map', 'https://www.google.com.eg/maps/@30.0824129,31.2876736,11z/data=!3m1!4b1?hl=en&entry=ttu', '2023-09-20 13:16:38', '2023-09-20 13:16:38');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` enum('Active','Not Active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `sort` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tag_group`
--

CREATE TABLE `tag_group` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `group_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `translation_keys`
--

CREATE TABLE `translation_keys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translation_keys`
--

INSERT INTO `translation_keys` (`id`, `key`, `name`, `created_at`, `updated_at`) VALUES
(1, 'en', 'english', '2023-08-17 06:59:19', NULL),
(2, 'ar', 'arabic', '2023-08-17 06:59:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('Male','Female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Active','Not Active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `location` point DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `district_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject_type`,`subject_id`),
  ADD KEY `causer` (`causer_type`,`causer_id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

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
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cars_country_id_foreign` (`country_id`),
  ADD KEY `cars_city_id_foreign` (`city_id`),
  ADD KEY `cars_district_id_foreign` (`district_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_country_id_foreign` (`country_id`);

--
-- Indexes for table `cms_pages`
--
ALTER TABLE `cms_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contact_us_email_unique` (`email`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `districts_city_id_foreign` (`city_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_location`
--
ALTER TABLE `group_location`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_location_location_id_foreign` (`location_id`),
  ADD KEY `group_location_group_id_foreign` (`group_id`);

--
-- Indexes for table `hotel_apartments`
--
ALTER TABLE `hotel_apartments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_apartments_country_id_foreign` (`country_id`),
  ADD KEY `hotel_apartments_city_id_foreign` (`city_id`),
  ADD KEY `hotel_apartments_district_id_foreign` (`district_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `locations_country_id_foreign` (`country_id`),
  ADD KEY `locations_city_id_foreign` (`city_id`),
  ADD KEY `locations_district_id_foreign` (`district_id`);

--
-- Indexes for table `ltm_translations`
--
ALTER TABLE `ltm_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `places_name_unique` (`name`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `public_transportations`
--
ALTER TABLE `public_transportations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `public_transportations_country_id_foreign` (`country_id`),
  ADD KEY `public_transportations_city_id_foreign` (`city_id`),
  ADD KEY `public_transportations_district_id_foreign` (`district_id`);

--
-- Indexes for table `public_transportation_cities`
--
ALTER TABLE `public_transportation_cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag_group`
--
ALTER TABLE `tag_group`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tag_group_tag_id_foreign` (`tag_id`),
  ADD KEY `tag_group_group_id_foreign` (`group_id`);

--
-- Indexes for table `translation_keys`
--
ALTER TABLE `translation_keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_country_id_foreign` (`country_id`),
  ADD KEY `users_city_id_foreign` (`city_id`),
  ADD KEY `users_district_id_foreign` (`district_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cms_pages`
--
ALTER TABLE `cms_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `group_location`
--
ALTER TABLE `group_location`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel_apartments`
--
ALTER TABLE `hotel_apartments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ltm_translations`
--
ALTER TABLE `ltm_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `public_transportations`
--
ALTER TABLE `public_transportations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `public_transportation_cities`
--
ALTER TABLE `public_transportation_cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tag_group`
--
ALTER TABLE `tag_group`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `translation_keys`
--
ALTER TABLE `translation_keys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cars_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cars_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `group_location`
--
ALTER TABLE `group_location`
  ADD CONSTRAINT `group_location_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `group_location_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hotel_apartments`
--
ALTER TABLE `hotel_apartments`
  ADD CONSTRAINT `hotel_apartments_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hotel_apartments_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hotel_apartments_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `locations`
--
ALTER TABLE `locations`
  ADD CONSTRAINT `locations_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `locations_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `locations_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `public_transportations`
--
ALTER TABLE `public_transportations`
  ADD CONSTRAINT `public_transportations_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `public_transportations_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `public_transportations_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tag_group`
--
ALTER TABLE `tag_group`
  ADD CONSTRAINT `tag_group_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tag_group_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
