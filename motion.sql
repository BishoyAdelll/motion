-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 06, 2023 at 03:44 PM
-- Server version: 5.7.36
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `motion`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutcards`
--

DROP TABLE IF EXISTS `aboutcards`;
CREATE TABLE IF NOT EXISTS `aboutcards` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutcards`
--

INSERT INTO `aboutcards` (`id`, `title`, `content`, `icon`, `created_at`, `updated_at`) VALUES
(6, 'Mission', 'We aim to be the first leading marketing agency in the Arabic world to help companies’ wheels move.', 'fas fa-star', NULL, NULL),
(7, 'Vission', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'flaticon-group', NULL, NULL),
(8, 'History', 'Success starts by a move. It all started in 2017 when our founders met and matched\n             their mindsets together to get the wheels in motion. Then, they decided to make your wheels in motion\n              through different marketing solutions. At the hands of a professional and experienced team of experts,\n               we established our marketing agency 5 years ago, to be one of the leading agencies that serves in Egypt,\n                UAE, Saudi Arabia, and other Arabic countries.', 'flaticon-web', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

DROP TABLE IF EXISTS `abouts`;
CREATE TABLE IF NOT EXISTS `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'ABOUT MOTIONROUND', 'We always stay with our clients and respect their business. We deliver 100% and provide instant response to help them succeed in constantly changing and challenging business world.', '1668948951.jpg', NULL, '2022-11-20 10:55:51');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `subtitle`, `content`, `image`, `author`, `created_at`, `updated_at`) VALUES
(1, 'How to add a count up animation the webflow site.', 'At Motion Round we specialize in designing, building, shipping and scaling beautiful, usable products with blazing-fast', 'At Motion Round we specialize in designing, building, shipping and scaling beautiful, usable products with blazing-fast', 'blog-1.jpg', 'Admin', NULL, NULL),
(2, 'How to grow your business with Motion Round digital solution.', 'At Motion Round we specialize in designing, building, shipping and scaling beautiful, usable products with blazing-fast', 'At Motion Round we specialize in designing, building, shipping and scaling beautiful, usable products with blazing-fast', 'blog-2.jpg', 'Admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'brand-1.png', NULL, NULL),
(2, 'brand-2.png', NULL, NULL),
(3, 'brand-3.png', NULL, NULL),
(4, 'brand-4.png', NULL, NULL),
(5, 'brand-5.png', NULL, NULL),
(6, 'brand-6.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `service`, `message`, `created_at`, `updated_at`) VALUES
(1, 'name', '0134564654654', 'info@test.com', 'service', 'message', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `creatives`
--

DROP TABLE IF EXISTS `creatives`;
CREATE TABLE IF NOT EXISTS `creatives` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_card_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_card_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_card_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_card_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_card_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_card_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `creatives`
--

INSERT INTO `creatives` (`id`, `content`, `video_id`, `video_title`, `first_card_title`, `first_card_subtitle`, `first_card_icon`, `second_card_title`, `second_card_subtitle`, `second_card_icon`, `created_at`, `updated_at`) VALUES
(1, 'Let\'s partner up to create out-of-the-box videos that convey an idea,\r\neducate, and promote your brand and values. We are an Explainer Video\r\nProduction Company that\'s here to help you succeed!', 'https://www.youtube.com/watch?v=PO_fBTkoznc', 'See why you should make an Explainer Video ?', '100%', 'Client Setisfaction', 'flaticon-satisfaction', '1200+', 'Complete Project', 'flaticon-clipboard', NULL, '2023-02-04 18:04:44');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
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
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `job_title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Darrell Steward', 'Founder of (Rirax)', 'Motion Round was very diligent, polite and extremely customer oriented. I think Monika will\n                         go far with that attitude and ...he is such a honest, decent and reliable.', 'testi-1.png', NULL, NULL),
(2, 'Floyd Miles', 'CEO of (Orix)', 'Motion Round was very diligent, polite and extremely customer oriented. I think Monika will\n                         go far with that attitude and ...he is such a honest, decent and reliable.', 'testi-2.jpg', NULL, NULL),
(3, 'Albert Flores', 'Founder of (Rirax)', 'Motion Round was very diligent, polite and extremely customer oriented. I think Monika will\n                         go far with that attitude and ...he is such a honest, decent and reliable.', 'testi-3.png', NULL, NULL),
(4, 'Dianne Russell', 'CEO of (Orix)', 'Motion Round was very diligent, polite and extremely customer oriented. I think Monika will\n                         go far with that attitude and ...he is such a honest, decent and reliable.', 'testi-4.jpg', NULL, NULL),
(5, 'Jerome Bell', 'CEO of (Orix)', 'Motion Round was very diligent, polite and extremely customer oriented. I think Monika will\n                         go far with that attitude and ...he is such a honest, decent and reliable.', 'testi-5.jpg', NULL, NULL),
(6, 'Floyd Miles', 'CEO of (Orix)', 'Motion Round was very diligent, polite and extremely customer oriented. I think Monika will\n                         go far with that attitude and ...he is such a honest, decent and reliable.', 'testi-6.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `heroes`
--

DROP TABLE IF EXISTS `heroes`;
CREATE TABLE IF NOT EXISTS `heroes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button1Title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button1URL` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button2Title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button2URL` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `heroes`
--

INSERT INTO `heroes` (`id`, `title`, `subtitle`, `button1Title`, `button1URL`, `button2Title`, `button2URL`, `image`, `created_at`, `updated_at`) VALUES
(1, 'More than an Explainer video Company. A Partner', 'Elevate your brand with fully customized videos.', 'Visit Case Studies', 'https://www.google.com/', 'About Motionround', 'https://www.google.com/', 'shape-1.png', NULL, '2023-02-04 17:28:21');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_20_121802_create_records_table', 2),
(7, '2022_11_14_163731_create_heroes_table', 3),
(8, '2022_11_14_170607_create_socials_table', 4),
(9, '2022_11_15_122911_create_creatives_table', 5),
(10, '2022_11_15_132841_create_clients_table', 6),
(11, '2022_11_16_141312_create_services_sections_table', 7),
(12, '2022_11_16_142902_create_services_table', 8),
(13, '2022_11_16_170556_create_projects_table', 9),
(14, '2022_11_17_163422_create_feedback_table', 10),
(15, '2022_11_20_113708_create_blogs_table', 11),
(16, '2022_11_20_120753_create_newsletters_table', 12),
(17, '2022_11_20_123716_create_abouts_table', 13),
(18, '2022_11_20_125754_create_aboutcards_table', 14),
(19, '2022_11_20_133839_create_teams_table', 15),
(21, '2022_12_06_134622_create_portfolios_table', 16),
(22, '2022_11_21_115131_create_contacts_table', 17),
(23, '2022_12_06_151355_create_settings_table', 18),
(25, '2023_01_28_142441_create_comments_table', 19),
(27, '2023_02_06_084503_create_recordings_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

DROP TABLE IF EXISTS `newsletters`;
CREATE TABLE IF NOT EXISTS `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

DROP TABLE IF EXISTS `portfolios`;
CREATE TABLE IF NOT EXISTS `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `subtitle`, `image`, `content`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Web Application Design', 'At Motion Round we specialize in designing, building, shipping...', 'brand-1.jpg', '', '#', NULL, NULL),
(2, 'Globar Art Deisgn', 'At Motion Round we specialize in designing, building, shipping...', 'brand-2.jpg', '', '#', NULL, NULL),
(3, 'Modern Branding Design', 'At Motion Round we specialize in designing, building, shipping...', 'brand-2.jpg', '', '#', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

DROP TABLE IF EXISTS `records`;
CREATE TABLE IF NOT EXISTS `records` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `f_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `budget` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `industry` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_program` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `subtitle`, `icon`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Explainer Videos', 'Explainer videos are short videos that help to\r\nillustrate complex ideas in simple, engaging, and\r\nmeaningful ways in less than 2 minutes.', 'service-1.png', NULL, NULL, NULL, '2023-02-04 18:23:23'),
(2, 'Social Media', 'Videos Your video adapted to the specific technical\r\nneeds of each social media platform in terms of\r\nlength and aspect ratio (16:9, 4:5, 9:16).', 'service-2.png', NULL, NULL, NULL, '2023-02-04 18:24:16'),
(3, 'Commercial Videos', 'Animated commercial ads are short 10 to 30-\r\nsecond videos promoting your company\'s\r\nproducts and services.', 'service-3.png', NULL, NULL, NULL, '2023-02-04 18:25:08'),
(4, 'Branding', 'Explainer videos are short videos that help to illustrate\r\ncomplex ideas in simple, engaging, and meaningful ways in\r\nless than 2 minutes.', 'service-3.png', NULL, NULL, NULL, '2023-02-04 18:25:58');

-- --------------------------------------------------------

--
-- Table structure for table `services_sections`
--

DROP TABLE IF EXISTS `services_sections`;
CREATE TABLE IF NOT EXISTS `services_sections` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services_sections`
--

INSERT INTO `services_sections` (`id`, `title`, `subtitle`, `button_title`, `button_url`, `created_at`, `updated_at`) VALUES
(1, 'What We Do?', 'What we bring to the\r\ntable.', 'View All Services', 'https://www.google.com/', NULL, '2023-02-04 18:19:53');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_btn_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_btn_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `terms_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `policy_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `site_email`, `site_address`, `site_phone`, `logo`, `footer_title`, `footer_btn_title`, `footer_btn_url`, `terms_url`, `policy_url`, `created_at`, `updated_at`) VALUES
(1, 'Motion Round.', 'hello@motionround.com', '210 T , Hdayq Elahram , Giza , Egypt', '00201098936104 - +966 115 206079', 'logo.png', 'More than 10 years in the game and we\'re  just getting started. 🤝', 'Available for new Project', 'https://www.google.com/', 'https://www.google.com/', 'https://www.google.com/', NULL, '2022-12-06 13:48:37');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

DROP TABLE IF EXISTS `socials`;
CREATE TABLE IF NOT EXISTS `socials` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `title`, `icon`, `url`, `created_at`, `updated_at`) VALUES
(1, 'facebook', 'fab fa-facebook-f', '#', NULL, NULL),
(2, 'youtube', 'fab fa-youtube', '#', NULL, NULL),
(3, 'instagram', 'fab fa-instagram', '#', NULL, NULL),
(4, 'behance', 'fab fa-behance', '#', NULL, NULL),
(8, 'Dribbble', 'fab fa-dribbble', '#', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
CREATE TABLE IF NOT EXISTS `teams` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `job_title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Mohamed Ali', 'CEO', 'pmi0Iy9tS9zKBGPmPoWj_.png', NULL, NULL),
(2, 'Taha Eldesouki', 'Head Of Art', 'GH5VcZZMgddL9gmsURDn.png', NULL, NULL),
(3, 'Enass Abdallah', 'Content Creator', 'i5RH77abTIGx75oiY2lk.png', NULL, NULL),
(4, 'Manar', 'Community Manager', 'Hvypw8fszjT4ed9vS6qD.png', NULL, NULL),
(5, 'Mohamed Foly', 'Runner', 'JosUXjjdCMo0UgmxqUGR.png', NULL, NULL),
(6, 'Noura Alshayea', 'Account executive', 'nNWsUixzTHfUAkGs8gWt.png', NULL, NULL),
(7, 'Dina', 'Illustration Artist', 'HbqqQvJEjX6pUxdcy334.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
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
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$8PrEYFlaS9co9yK7sh.13ef03v2N9TOD7aSux1ktyclO7tFm9vwNS', NULL, '2022-07-19 09:32:49', '2022-07-19 09:32:49');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
