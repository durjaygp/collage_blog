-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 17, 2024 at 12:28 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collage_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `header`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Durjay Ghosh', 'Web Developer', 'lorem Ipsum is simply dummy text of the printing and typesetting industrylorem Ipsum is simply dummy text of the printing and typesetting industrylorem Ipsum is simply dummy text of the printing and typesetting industrylorem Ipsum is simply dummy text of the printing and typesetting industrylorem Ipsum is simply dummy text of the printing and typesetting industry', 'uploads/2038037417.jpg', '2024-04-15 09:15:04', '2024-04-16 09:26:30');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `main_content` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `user_id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_id` bigint UNSIGNED NOT NULL,
  `seo_description` longtext COLLATE utf8mb4_unicode_ci,
  `seo_tags` longtext COLLATE utf8mb4_unicode_ci,
  `seo_keywords` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `slug`, `image`, `main_content`, `description`, `user_id`, `category_id`, `status`, `type`, `position`, `type_id`, `seo_description`, `seo_tags`, `seo_keywords`, `created_at`, `updated_at`) VALUES
(1, 'Mara Weeks Vel culpa rerum rem', 'mara-weeks-vel-culpa-rerum-rem', 'uploads/1036302760.png', 'Molestiae in eveniet.&nbsp;Vel culpa rerum remVel culpa rerum remVel culpa rerum remVel culpa rerum remVel culpa rerum remVel culpa rerum remVel culpa rerum remVel culpa rerum remVel culpa rerum remVel culpa rerum remVel culpa rerum remVel culpa rerum remVel culpa rerum remVel culpa rerum remVel culpa rerum remVel culpa rerum remVel culpa rerum remVel culpa rerum remVel culpa rerum remVel culpa rerum remVel culpa rerum remVel culpa rerum rem', 'Vel culpa rerum rem Vel culpa rerum remVel culpa rerum remVel culpa rerum remVel culpa rerum remVel culpa rerum remVel culpa rerum remVel culpa rerum remVel culpa rerum remVel culpa rerum remVel culpa rerum remVel culpa rerum remVel culpa rerum remVel culpa rerum rem', 1, 1, '1', 'blog', '1', 1, 'Doloribus nesciunt', 'Voluptate atque nihi', 'Sed voluptatem at e', '2024-04-15 09:30:34', '2024-04-15 09:30:34'),
(2, 'Mark Cox Earum minima esse p', 'mark-cox-earum-minima-esse-p', 'uploads/811003228.jpg', 'Quasi qui cumque nih.Quasi qui cumque nih.Quasi qui cumque nih.Quasi qui cumque nih.Quasi qui cumque nih.Quasi qui cumque nih.Quasi qui cumque nih.Quasi qui cumque nih.Quasi qui cumque nih.Quasi qui cumque nih.Quasi qui cumque nih.Quasi qui cumque nih.Quasi qui cumque nih.Quasi qui cumque nih.Quasi qui cumque nih.Quasi qui cumque nih.Quasi qui cumque nih.Quasi qui cumque nih.Quasi qui cumque nih.Quasi qui cumque nih.Quasi qui cumque nih.Quasi qui cumque nih.Quasi qui cumque nih.', 'Earum minima esse p Quasi qui cumque nih.Quasi qui cumque nih.Quasi qui cumque nih.Quasi qui cumque nih.Quasi qui cumque nih.Quasi qui cumque nih.Quasi qui cumque nih.Quasi qui cumque nih.Quasi qui cumque nih.Quasi qui cumque nih.Quasi qui cumque nih.Quasi qui cumque nih.Quasi qui cumque nih.Quasi qui cumque nih.Quasi qui cumque nih.Quasi qui cumque nih.', 1, 3, '1', 'blog', '1', 1, 'Nihil magni adipisci', 'Sequi dolorem aliqui', 'Dolor natus et duis', '2024-04-15 09:33:14', '2024-04-15 09:37:15'),
(3, 'Kai RosalesLaboriosam, reprehen.', 'kai-rosaleslaboriosam-reprehen', 'uploads/1839162349.jpg', 'Laboriosam, reprehen. Laboriosam, reprehen. Laboriosam, reprehen. Laboriosam, reprehen. Laboriosam, reprehen. Laboriosam, reprehen. Laboriosam, reprehen. Laboriosam, reprehen. Laboriosam, reprehen. Laboriosam, reprehen. Laboriosam, reprehen. Laboriosam, reprehen. Laboriosam, reprehen. Laboriosam, reprehen. Laboriosam, reprehen.&nbsp;', 'Quibusdam molestiae', 1, 4, '1', 'blog', '1', 2, 'Anim aut repellendus', 'Quo quis in doloribu', 'Aperiam nihil animi', '2024-04-15 09:35:46', '2024-04-15 10:03:04'),
(6, 'Nyssa Carney', 'nyssa-carney', 'uploads/280080458.jpg', 'Recusandae. Sed temp.Recusandae. Sed temp.Recusandae. Sed temp.Recusandae. Sed temp.Recusandae. Sed temp.Recusandae. Sed temp.Recusandae. Sed temp.Recusandae. Sed temp.Recusandae. Sed temp.Recusandae. Sed temp.Recusandae. Sed temp.Recusandae. Sed temp.Recusandae. Sed temp.Recusandae. Sed temp.', 'Eaque aliquid volupt', 1, 4, '1', 'blog', '1', 2, 'Voluptas sint est a', 'Est rem mollitia ips', 'Quia ex velit eum of', '2024-04-15 11:52:41', '2024-04-15 11:52:41'),
(7, 'Elliott Cash', 'elliott-cash', 'uploads/446523022.jpg', 'Consectetur do minim.&nbsp;', 'Obcaecati do iure co', 1, 3, '1', 'blog', '0', 2, 'Aute ut repudiandae', 'Tempore veniam sed', 'Aut aute sed aliquip', '2024-04-15 11:53:01', '2024-04-15 11:53:01'),
(8, 'Rebekah Gallegos', 'rebekah-gallegos', 'uploads/1544604818.jpg', 'Ea quos soluta incid. Ea quos soluta incid. Ea quos soluta incid. Ea quos soluta incid. Ea quos soluta incid. Ea quos soluta incid. Ea quos soluta incid. Ea quos soluta incid. Ea quos soluta incid. Ea quos soluta incid. Ea quos soluta incid. Ea quos soluta incid. Ea quos soluta incid. Ea quos soluta incid. Ea quos soluta incid. Ea quos soluta incid. Ea quos soluta incid. Ea quos soluta incid. Ea quos soluta incid. Ea quos soluta incid. Ea quos soluta incid. Ea quos soluta incid. Ea quos soluta incid. Ea quos soluta incid. Ea quos soluta incid.&nbsp;', 'Placeat quod neque', 1, 3, '1', 'blog', '0', 4, 'Saepe numquam nemo v', 'Obcaecati qui ipsum', 'Expedita id repellen', '2024-04-15 11:57:17', '2024-04-15 11:57:31'),
(9, 'Abigail Fuller', 'abigail-fuller', 'uploads/2022107050.jpg', 'Dolorem quia placeat.&nbsp;&nbsp;', 'Soluta non nihil in', 1, 3, '1', 'blog', '1', 1, 'Et velit voluptatum', 'Officia dolorem vero', 'Illo similique tempo', '2024-04-15 14:15:06', '2024-04-15 14:15:06'),
(10, 'Inga Hudson', 'inga-hudson', 'uploads/61457767.jpg', 'Cillum nemo dolore t. Cillum nemo dolore t. Cillum nemo dolore t. Cillum nemo dolore t. Cillum nemo dolore t. Cillum nemo dolore t. Cillum nemo dolore t. Cillum nemo dolore t. Cillum nemo dolore t. Cillum nemo dolore t. Cillum nemo dolore t. Cillum nemo dolore t. Cillum nemo dolore t. Cillum nemo dolore t. Cillum nemo dolore t. Cillum nemo dolore t.&nbsp;', 'Beatae ipsum optio', 1, 3, '1', 'blog', '1', 1, 'Tempor et sit qui o', 'Adipisci laudantium', 'Ipsum quia molestia', '2024-04-15 14:15:47', '2024-04-15 14:16:25'),
(11, 'Stone Benson', 'stone-benson', 'uploads/1832883216.jpg', 'Voluptatem, facere e. sdfd', 'Adipisci rerum dolor', 1, 3, '1', 'blog', '1', 1, 'Est harum non ut ni', 'Voluptatem id incid', 'Dolore consequatur', '2024-04-15 14:16:11', '2024-04-15 14:16:11'),
(12, 'Beatrice Little', 'beatrice-little', 'uploads/234009420.jpg', 'Quis exercitationem . dfdf', 'Assumenda rerum aut', 1, 3, '1', 'blog', '1', 1, 'Deserunt cupidatat i', 'Quo est quibusdam ap', 'Dolorem natus volupt', '2024-04-15 14:16:41', '2024-04-15 14:16:41'),
(13, 'Robert Alvarez Ad quia quisquam com.', 'robert-alvarez-ad-quia-quisquam-com', 'uploads/901012115.jpg', 'Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com.&nbsp;', 'Qui et accusantium c Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com. Ad quia quisquam com.', 1, 2, '1', 'blog', '2', 1, 'Velit illum pariatu', 'Repudiandae proident', 'In ipsum est tempora', '2024-04-16 13:08:17', '2024-04-16 13:08:17'),
(14, 'Fatima Lucas Labore voluptates si.', 'fatima-lucas-labore-voluptates-si', 'uploads/2010313041.jpg', 'Labore voluptates si. Labore voluptates si. Labore voluptates si. Labore voluptates si. Labore voluptates si. Labore voluptates si. Labore voluptates si.&nbsp;', 'Architecto eos labor', 4, 3, '3', 'user', '1', 2, 'Enim rerum iusto sae', 'Tempora sit perfere', 'Pariatur Officiis d', '2024-04-17 00:45:12', '2024-04-17 00:45:12');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `id` bigint UNSIGNED NOT NULL,
  `blog_id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_likes`
--

CREATE TABLE `blog_likes` (
  `id` bigint UNSIGNED NOT NULL,
  `blog_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_likes`
--

INSERT INTO `blog_likes` (`id`, `blog_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 12, 1, '2024-04-17 05:10:47', '2024-04-17 05:10:47'),
(4, 6, 1, '2024-04-17 06:23:35', '2024-04-17 06:23:35');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Uncategorized', 'uncategorized', 'Uncategorized', '1', '2024-04-15 09:25:50', '2024-04-15 09:25:50'),
(2, 'Movie', 'movie', NULL, '1', '2024-04-15 09:34:42', '2024-04-15 09:34:42'),
(3, 'Entertainment', 'entertainment', NULL, '1', '2024-04-15 09:34:54', '2024-04-15 09:34:54'),
(4, 'Food', 'food', NULL, '1', '2024-04-15 09:35:06', '2024-04-15 09:35:06');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `blog_id` bigint UNSIGNED NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `blog_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 12, 'ghytr htgrfgffda gfdsfg', '2024-04-16 23:54:56', '2024-04-16 23:54:56');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `main_content` longtext COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2012_12_10_075724_create_settings_table', 1),
(2, '2013_04_10_043200_create_user_types_table', 1),
(3, '2013_11_29_142615_create_roles_table', 1),
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(8, '2023_12_03_165052_create_categories_table', 1),
(9, '2023_12_10_052740_create_blogs_table', 1),
(10, '2023_12_12_170810_create_pages_table', 1),
(11, '2023_12_13_171256_create_abouts_table', 1),
(12, '2023_12_13_171304_create_contacts_table', 1),
(13, '2023_12_18_182107_create_socials_table', 1),
(14, '2023_12_27_155717_create_comments_table', 1),
(15, '2024_01_10_175733_create_newsletters_table', 1),
(16, '2024_01_22_165553_create_new_pages_table', 1),
(17, '2024_02_22_164030_create_blog_categories_table', 1),
(18, '2024_04_15_212343_create_events_table', 2),
(19, '2024_04_17_105133_create_blog_likes_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `new_pages`
--

CREATE TABLE `new_pages` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `main_content` longtext COLLATE utf8mb4_unicode_ci,
  `image` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci,
  `is_featured` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `new_pages`
--

INSERT INTO `new_pages` (`id`, `title`, `slug`, `description`, `main_content`, `image`, `status`, `date`, `is_featured`, `created_at`, `updated_at`) VALUES
(1, 'Alias fugiat reprehe Voluptas esse culpa.', 'alias-fugiat-reprehe-voluptas-esse-culpa', 'Reprehenderit amet  Voluptas esse culpa.', 'Voluptas esse culpa. Voluptas esse culpa. Voluptas esse culpa. Voluptas esse culpa. Voluptas esse culpa. Voluptas esse culpa. Voluptas esse culpa. Voluptas esse culpa. Voluptas esse culpa. Voluptas esse culpa. Voluptas esse culpa. Voluptas esse culpa. Voluptas esse culpa. Voluptas esse culpa. Voluptas esse culpa. Voluptas esse culpa. Voluptas esse culpa. Voluptas esse culpa. Voluptas esse culpa. Voluptas esse culpa. Voluptas esse culpa. Voluptas esse culpa. Voluptas esse culpa. Voluptas esse culpa. Voluptas esse culpa. Voluptas esse culpa. Voluptas esse culpa. Voluptas esse culpa. Voluptas esse culpa.&nbsp;', 'uploads/1277102130.jpg', '1', NULL, '1', '2024-04-16 07:13:33', '2024-04-16 07:13:33'),
(2, 'Tempore fuga Modi', 'tempore-fuga-modi', 'In fugit sed qui do', 'Ipsum, lorem neque e. Ipsum, lorem neque e. Ipsum, lorem neque e. Ipsum, lorem neque e. Ipsum, lorem neque e. Ipsum, lorem neque e. Ipsum, lorem neque e. Ipsum, lorem neque e.&nbsp;', 'uploads/919739060.jpg', '1', '2024-04-17', 'Select', '2024-04-17 00:57:44', '2024-04-17 00:59:46'),
(3, 'Voluptatem magni te', 'voluptatem-magni-te', 'Aspernatur consequat', 'Esse a quia nihil ve. Esse a quia nihil ve. Esse a quia nihil ve. Esse a quia nihil ve. Esse a quia nihil ve. Esse a quia nihil ve. Esse a quia nihil ve. Esse a quia nihil ve. Esse a quia nihil ve. Esse a quia nihil ve. Esse a quia nihil ve. Esse a quia nihil ve. Esse a quia nihil ve. Esse a quia nihil ve. Esse a quia nihil ve. Esse a quia nihil ve. Esse a quia nihil ve. Esse a quia nihil ve. Esse a quia nihil ve.&nbsp;', 'uploads/919078237.jpg', '1', '1970-05-03', NULL, '2024-04-17 01:00:36', '2024-04-17 01:00:36');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint UNSIGNED NOT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_cover` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `image` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_title`, `page_slug`, `page_cover`, `description`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Privacy Policy', '', NULL, 'Privacy Policy', '<div><font color=\"#2a3547\"><b>Page Content</b></font></div><div><br></div>', 'uploads/202218849.jpg', '2024-04-17 03:31:07', '2024-04-16 21:33:04');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'user', '2024-04-15 09:15:04', '2024-04-15 09:15:04'),
(2, 'admin', '2024-04-15 09:15:04', '2024-04-15 09:15:04');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `footer` text COLLATE utf8mb4_unicode_ci,
  `google` text COLLATE utf8mb4_unicode_ci,
  `author` text COLLATE utf8mb4_unicode_ci,
  `keywords` text COLLATE utf8mb4_unicode_ci,
  `tags` text COLLATE utf8mb4_unicode_ci,
  `url` text COLLATE utf8mb4_unicode_ci,
  `website_logo` text COLLATE utf8mb4_unicode_ci,
  `fav_icon` text COLLATE utf8mb4_unicode_ci,
  `address` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `description`, `footer`, `google`, `author`, `keywords`, `tags`, `url`, `website_logo`, `fav_icon`, `address`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Website Name', 'user@gmail.com', 'COPYRIGHT © 2024. ALL RIGHTS RESERVED.', 'footer Text', 'author Name', 'author Name', 'author Name', 'author Name', 'upload/website/747121276.png', 'upload/website/1806232472.png', NULL, NULL, NULL, '2024-04-15 09:15:04', '2024-04-16 22:46:48');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `name`, `icon`, `link`, `created_at`, `updated_at`) VALUES
(1, 'facebook', 'fa fa-facebook', 'https://facebook.com/', '2024-04-16 21:33:57', '2024-04-16 21:33:57'),
(2, 'instagram', 'fa fa-instagram', 'https://instagran.com/', '2024-04-16 21:34:35', '2024-04-16 21:34:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `role_id` bigint UNSIGNED NOT NULL,
  `nic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type_id` bigint UNSIGNED NOT NULL,
  `personal_details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `status`, `role_id`, `nic`, `user_type_id`, `personal_details`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Durjay Ghosh', 'admin@gmail.com', '2024-04-15 09:15:04', '$2y$12$h8wZSH7HAOhX3pW4u/4c4.qJg.PFaj507hnVHJ3392fIFXSRjRih6', NULL, 1, 2, '1', 1, 'update is here', 'v9B6HqCalxFvj1UoQyMOuRgLHjZdCqvO6nzjV7oImqnRs1B1k5Lg3dzsI4N1', '2024-04-15 09:15:04', '2024-04-16 13:19:38'),
(2, 'Test User', 'user@gmail.com', '2024-04-15 09:15:04', '$2y$12$LPjSWX4ERdGvVN7BVR3pTOPsYl6uFOaFYlPRv8ycOsuxDA2ME/Pwq', NULL, 1, 1, NULL, 2, 'dsfdfdf', '7nReIUoEYQ', '2024-04-15 09:15:04', '2024-04-15 09:15:04'),
(3, 'Eaton Dean', 'soxypowa@staff.apiit.lk', NULL, '$2y$12$lLHB/Axg5JxS/WXwNaD3BeCHP8Lg707nVj5xbFXVZ.x76eljY0ofu', NULL, 1, 1, '123456', 5, 'hdfgag fd fdfdsfd', NULL, '2024-04-16 12:52:49', '2024-04-16 12:52:49'),
(4, 'Tana Roberts', 'tuwade@mailinator.com', NULL, '$2y$12$PlfE6nnc00LA5SnVOonh4u3p9vCYEEYN4uJE3Hqi0gs9sof6rT.XW', NULL, 1, 1, '122144', 2, NULL, NULL, '2024-04-17 00:42:11', '2024-04-17 00:42:11');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `title`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Superadmin', NULL, '2024-04-15 09:15:04', '2024-04-15 09:15:04'),
(2, 'Alumni', '1', '2024-04-15 09:33:32', '2024-04-17 00:18:15'),
(3, 'Teacher', '1', '2024-04-15 09:33:45', '2024-04-15 09:33:45'),
(4, 'Other Staff', '1', '2024-04-15 09:33:52', '2024-04-16 21:35:23'),
(5, 'Staff', '1', '2024-04-15 09:34:11', '2024-04-17 00:18:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_name_unique` (`name`),
  ADD KEY `blogs_user_id_foreign` (`user_id`),
  ADD KEY `blogs_category_id_foreign` (`category_id`),
  ADD KEY `blogs_type_id_foreign` (`type_id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_category_blog_id_foreign` (`blog_id`),
  ADD KEY `blog_category_category_id_foreign` (`category_id`);

--
-- Indexes for table `blog_likes`
--
ALTER TABLE `blog_likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_likes_blog_id_foreign` (`blog_id`),
  ADD KEY `blog_likes_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_blog_id_foreign` (`blog_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `events_name_unique` (`name`);

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
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_pages`
--
ALTER TABLE `new_pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `new_pages_title_unique` (`title`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`),
  ADD KEY `users_user_type_id_foreign` (`user_type_id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_types_title_unique` (`title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_likes`
--
ALTER TABLE `blog_likes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `new_pages`
--
ALTER TABLE `new_pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `blogs_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `user_types` (`id`),
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD CONSTRAINT `blog_category_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blog_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_likes`
--
ALTER TABLE `blog_likes`
  ADD CONSTRAINT `blog_likes_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blog_likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `users_user_type_id_foreign` FOREIGN KEY (`user_type_id`) REFERENCES `user_types` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
