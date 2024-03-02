-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 02, 2024 at 03:59 PM
-- Server version: 10.3.39-MariaDB-cll-lve
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ggafrika_ggafrika`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'gg la wananchi', '2022-01-29 12:34:56', '2022-01-29 12:34:56'),
(2, 'startup and smes', '2022-01-29 12:37:01', '2022-01-29 12:37:01');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `body` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_07_115014_create_post_table', 1),
(6, '2022_01_07_115047_create_comment_table', 1),
(7, '2022_01_19_061011_create_category_table', 1),
(8, '2022_01_19_065058_add_category_id_to_posts', 1),
(9, '2022_01_19_065849_add_columns_to_comments', 1),
(10, '2022_01_21_165038_create_videos_table', 1),
(11, '2022_01_22_162611_add_columns_to_videos_table', 1),
(12, '2022_01_22_165042_add_column_to_posts_table', 1),
(13, '2022_01_30_164139_add-to-videos-table', 2),
(14, '2022_01_30_170344_add_to_posts_table', 3),
(15, '2022_02_02_163946_add_category_id_to_videos_table', 3),
(16, '2022_02_02_170953_add_category_id_to_videos_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('wawinyedwin44@gmail.com', '$2y$10$qMBl9.Vn7dLfPxrHQEDREOB.4YzIfg7al1A/E1XFUJDi9RkHjO8Hy', '2022-02-07 17:11:36');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `title` text NOT NULL,
  `about` text NOT NULL,
  `body` text NOT NULL,
  `user_id` text NOT NULL,
  `potrait` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Author` varchar(255) DEFAULT NULL,
  `published` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `slug`, `category_id`, `title`, `about`, `body`, `user_id`, `potrait`, `created_at`, `updated_at`, `Author`, `published`) VALUES
(21, 'sijaweka', 1, 'sijaweka', 'The Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane', 'The Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane Times', '1', 'images/CV1DWocYevgUzvnNHlyhn5rJw5iWSc8hZaFaoTkH.jpg', '2022-02-23 16:32:52', '2022-02-28 10:36:47', NULL, 1),
(22, 'Call to a member function store() on null', 1, 'Call to a member function store() on null', 'Call to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on null', '<p>Call to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on nullCall to a member function store() on null</p>', '1', 'images/cTBUNA0QqU1tOAU1wLjx1BrwZWuyNHDSdIrh2qB5.jpg', '2022-02-27 08:34:02', '2022-02-27 08:48:26', NULL, 1),
(32, 'ywett', 1, 'dkdkj', 'http://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/admin', '<p>http://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/adminhttp://127.0.0.1:8000/admin</p>', '1', 'images/wJSwxhAxfh0YZrepCq3uJrAFNW8nHzdW7H6OlvTy.jpg', '2022-02-28 08:57:26', '2022-02-28 08:57:26', NULL, 0),
(33, 'ytytry', 1, 'qiyueyiyk', 'dipaaaaaaaaaaPreturn redirect()->route(\'posts\');return redirect()->route(\'posts\');return redirect()->route(\'posts\');return redirect()->route(\'posts\');return redirect()->route(\'posts\');return redirect()->route(\'posts\');return redirect()->route(\'posts\');return redirect()->route(\'posts\');return redirect()->route(\'posts\');return redirect()->route(\'posts\');return redirect()->route(\'posts\');return redirect()->route(\'posts\');return redirect()->route(\'posts\');return redirect()->route(\'posts\');return redirect()->route(\'posts\');', '<div style=\"color: rgb(255, 255, 255); background-color: rgb(0, 0, 0); font-family: Consolas, &quot;Courier New&quot;, monospace; line-height: 19px; white-space: pre;\"><span style=\"color: #f92672;font-weight: bold;\">return</span> <span style=\"color: #a6e22e;\">redirect</span>()<span style=\"color: #f92672;font-weight: bold;\">-&gt;</span><span style=\"color: #a6e22e;\">route</span>(<span style=\"color: #e6db74;\">\'posts\'</span>);<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">return</span> <span style=\"color: rgb(166, 226, 46);\">redirect</span>()<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">-&gt;</span><span style=\"color: rgb(166, 226, 46);\">route</span>(<span style=\"color: rgb(230, 219, 116);\">\'posts\'</span>);<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">return</span> <span style=\"color: rgb(166, 226, 46);\">redirect</span>()<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">-&gt;</span><span style=\"color: rgb(166, 226, 46);\">route</span>(<span style=\"color: rgb(230, 219, 116);\">\'posts\'</span>);<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">return</span> <span style=\"color: rgb(166, 226, 46);\">redirect</span>()<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">-&gt;</span><span style=\"color: rgb(166, 226, 46);\">route</span>(<span style=\"color: rgb(230, 219, 116);\">\'posts\'</span>);<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">return</span> <span style=\"color: rgb(166, 226, 46);\">redirect</span>()<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">-&gt;</span><span style=\"color: rgb(166, 226, 46);\">route</span>(<span style=\"color: rgb(230, 219, 116);\">\'posts\'</span>);<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">return</span> <span style=\"color: rgb(166, 226, 46);\">redirect</span>()<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">-&gt;</span><span style=\"color: rgb(166, 226, 46);\">route</span>(<span style=\"color: rgb(230, 219, 116);\">\'posts\'</span>);<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">return</span> <span style=\"color: rgb(166, 226, 46);\">redirect</span>()<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">-&gt;</span><span style=\"color: rgb(166, 226, 46);\">route</span>(<span style=\"color: rgb(230, 219, 116);\">\'posts\'</span>);<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">return</span> <span style=\"color: rgb(166, 226, 46);\">redirect</span>()<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">-&gt;</span><span style=\"color: rgb(166, 226, 46);\">route</span>(<span style=\"color: rgb(230, 219, 116);\">\'posts\'</span>);<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">return</span> <span style=\"color: rgb(166, 226, 46);\">redirect</span>()<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">-&gt;</span><span style=\"color: rgb(166, 226, 46);\">route</span>(<span style=\"color: rgb(230, 219, 116);\">\'posts\'</span>);<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">return</span> <span style=\"color: rgb(166, 226, 46);\">redirect</span>()<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">-&gt;</span><span style=\"color: rgb(166, 226, 46);\">route</span>(<span style=\"color: rgb(230, 219, 116);\">\'posts\'</span>);<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">return</span> <span style=\"color: rgb(166, 226, 46);\">redirect</span>()<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">-&gt;</span><span style=\"color: rgb(166, 226, 46);\">route</span>(<span style=\"color: rgb(230, 219, 116);\">\'posts\'</span>);<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">return</span> <span style=\"color: rgb(166, 226, 46);\">redirect</span>()<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">-&gt;</span><span style=\"color: rgb(166, 226, 46);\">route</span>(<span style=\"color: rgb(230, 219, 116);\">\'posts\'</span>);<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">return</span> <span style=\"color: rgb(166, 226, 46);\">redirect</span>()<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">-&gt;</span><span style=\"color: rgb(166, 226, 46);\">route</span>(<span style=\"color: rgb(230, 219, 116);\">\'posts\'</span>);<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">return</span> <span style=\"color: rgb(166, 226, 46);\">redirect</span>()<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">-&gt;</span><span style=\"color: rgb(166, 226, 46);\">route</span>(<span style=\"color: rgb(230, 219, 116);\">\'posts\'</span>);<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">return</span> <span style=\"color: rgb(166, 226, 46);\">redirect</span>()<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">-&gt;</span><span style=\"color: rgb(166, 226, 46);\">route</span>(<span style=\"color: rgb(230, 219, 116);\">\'posts\'</span>);<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">return</span> <span style=\"color: rgb(166, 226, 46);\">redirect</span>()<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">-&gt;</span><span style=\"color: rgb(166, 226, 46);\">route</span>(<span style=\"color: rgb(230, 219, 116);\">\'posts\'</span>);<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">return</span> <span style=\"color: rgb(166, 226, 46);\">redirect</span>()<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">-&gt;</span><span style=\"color: rgb(166, 226, 46);\">route</span>(<span style=\"color: rgb(230, 219, 116);\">\'posts\'</span>);<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">return</span> <span style=\"color: rgb(166, 226, 46);\">redirect</span>()<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">-&gt;</span><span style=\"color: rgb(166, 226, 46);\">route</span>(<span style=\"color: rgb(230, 219, 116);\">\'posts\'</span>);<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">return</span> <span style=\"color: rgb(166, 226, 46);\">redirect</span>()<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">-&gt;</span><span style=\"color: rgb(166, 226, 46);\">route</span>(<span style=\"color: rgb(230, 219, 116);\">\'posts\'</span>);<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">return</span> <span style=\"color: rgb(166, 226, 46);\">redirect</span>()<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">-&gt;</span><span style=\"color: rgb(166, 226, 46);\">route</span>(<span style=\"color: rgb(230, 219, 116);\">\'posts\'</span>);<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">return</span> <span style=\"color: rgb(166, 226, 46);\">redirect</span>()<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">-&gt;</span><span style=\"color: rgb(166, 226, 46);\">route</span>(<span style=\"color: rgb(230, 219, 116);\">\'posts\'</span>);<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">return</span> <span style=\"color: rgb(166, 226, 46);\">redirect</span>()<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">-&gt;</span><span style=\"color: rgb(166, 226, 46);\">route</span>(<span style=\"color: rgb(230, 219, 116);\">\'posts\'</span>);<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">return</span> <span style=\"color: rgb(166, 226, 46);\">redirect</span>()<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">-&gt;</span><span style=\"color: rgb(166, 226, 46);\">route</span>(<span style=\"color: rgb(230, 219, 116);\">\'posts\'</span>);<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">return</span> <span style=\"color: rgb(166, 226, 46);\">redirect</span>()<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">-&gt;</span><span style=\"color: rgb(166, 226, 46);\">route</span>(<span style=\"color: rgb(230, 219, 116);\">\'posts\'</span>);<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">return</span> <span style=\"color: rgb(166, 226, 46);\">redirect</span>()<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">-&gt;</span><span style=\"color: rgb(166, 226, 46);\">route</span>(<span style=\"color: rgb(230, 219, 116);\">\'posts\'</span>);<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">return</span> <span style=\"color: rgb(166, 226, 46);\">redirect</span>()<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">-&gt;</span><span style=\"color: rgb(166, 226, 46);\">route</span>(<span style=\"color: rgb(230, 219, 116);\">\'posts\'</span>);<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">return</span> <span style=\"color: rgb(166, 226, 46);\">redirect</span>()<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">-&gt;</span><span style=\"color: rgb(166, 226, 46);\">route</span>(<span style=\"color: rgb(230, 219, 116);\">\'posts\'</span>);<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">return</span> <span style=\"color: rgb(166, 226, 46);\">redirect</span>()<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">-&gt;</span><span style=\"color: rgb(166, 226, 46);\">route</span>(<span style=\"color: rgb(230, 219, 116);\">\'posts\'</span>);<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">return</span> <span style=\"color: rgb(166, 226, 46);\">redirect</span>()<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">-&gt;</span><span style=\"color: rgb(166, 226, 46);\">route</span>(<span style=\"color: rgb(230, 219, 116);\">\'posts\'</span>);<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">return</span> <span style=\"color: rgb(166, 226, 46);\">redirect</span>()<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">-&gt;</span><span style=\"color: rgb(166, 226, 46);\">route</span>(<span style=\"color: rgb(230, 219, 116);\">\'posts\'</span>);<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">return</span> <span style=\"color: rgb(166, 226, 46);\">redirect</span>()<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">-&gt;</span><span style=\"color: rgb(166, 226, 46);\">route</span>(<span style=\"color: rgb(230, 219, 116);\">\'posts\'</span>);<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">return</span> <span style=\"color: rgb(166, 226, 46);\">redirect</span>()<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">-&gt;</span><span style=\"color: rgb(166, 226, 46);\">route</span>(<span style=\"color: rgb(230, 219, 116);\">\'posts\'</span>);<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">return</span> <span style=\"color: rgb(166, 226, 46);\">redirect</span>()<span style=\"color: rgb(249, 38, 114); font-weight: bold;\">-&gt;</span><span style=\"color: rgb(166, 226, 46);\">route</span>(<span style=\"color: rgb(230, 219, 116);\">\'posts\'</span>);</div>', '1', 'images/VF7cPZtYxbitvKAw8oR0m8wN8ruGCWiG0Ex057zt.jpg', '2022-02-28 09:03:26', '2022-02-28 09:03:26', NULL, 0),
(36, 'wioiweoqwo', 1, 'The Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane Times', 'The Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane Times', '<p>The Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane TimesThe Power of Resilience: How to Stay Sane During Insane Times</p>', '1', 'images/K4hR1T8uU64jR5lpShUw0Cvx1dHhYDQJkRZ54BoN.jpg', '2022-02-28 09:06:36', '2022-02-28 09:06:36', NULL, 0),
(51, 'uiuiuiiio', 1, 'uiuiuiiio', 'Russia is clearly going against the charter of the UN by invading and bombing Ukraine.  Throw Russia out of the UN now.  That would send a strong sign', '<p><span style=\"color: rgb(33, 33, 33); font-variant-ligatures: none; white-space: pre-wrap; font-family: Lato; font-size: 12pt; vertical-align: baseline;\"><em><span style=\"font-weight: 700; -webkit-font-smoothing: antialiased;\">Russia is clearly going against the charter of the UN by invading and bombing Ukraine.  Throw Russia out of the UN now.  That would send a strong signal to everybody in Russia, including all the people who actively or passively support Putin.</span></em></span><span style=\"font-size: 14.6667px; font-variant-ligatures: none; white-space: pre-wrap; color: rgb(0, 0, 0); font-family: Arial;\">  #KickRussiaOut  Does anyone have a copy of the UN Security Council declaration that was vetoed by Russia and abstained by China?  Would like to post it here!</span><span style=\"color: rgb(33, 33, 33); font-variant-ligatures: none; white-space: pre-wrap; font-family: Lato; font-size: 12pt; vertical-align: baseline;\"><em><span style=\"font-weight: 700; -webkit-font-smoothing: antialiased;\">Russia is clearly going against the charter of the UN by invading and bombing Ukraine.  Throw Russia out of the UN now.  That would send a strong signal to everybody in Russia, including all the people who actively or passively support Putin.</span></em></span><span style=\"font-size: 14.6667px; font-variant-ligatures: none; white-space: pre-wrap; color: rgb(0, 0, 0); font-family: Arial;\">  #KickRussiaOut  Does anyone have a copy of the UN Security Council declaration that was vetoed by Russia and abstained by China?  Would like to post it here!</span></p>', '1', 'images/bH90PUmUSQvLwyLSlxgde4AF1X16cc9DqzpvmTum.jpg', '2022-02-28 10:53:07', '2022-02-28 10:53:07', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ggAfrika', 'agola@gmail.com', NULL, '$2y$10$BPRRXk2LeTAhvuNqYL9aXOKudM1lEiszaLNQigSh4t/BH7Xm17X.C', 1, NULL, '2022-01-29 09:54:25', '2022-02-07 16:54:29'),
(3, 'edwin', 'edwin@mail.com', NULL, '$2y$10$9tHXzbuZQJ2RWRuHvmXXDeY6dmF5Xj1T9s9UWLXfzraP3thlqozlq', NULL, NULL, '2022-01-29 11:50:51', '2022-02-07 17:31:57'),
(4, 'Edwin Odhiambo', 'wawinyedwin@gmail.com', NULL, '$2y$10$iwtJ5q3yAKxXX9HirazGnO1wghIsyZ.Vj6lAqQkx/Coyy0hXMnyHq', NULL, NULL, '2022-01-29 12:09:07', '2022-01-29 12:09:07');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `published` int(11) NOT NULL DEFAULT 0,
  `category_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `url`, `created_at`, `updated_at`, `published`, `category_id`) VALUES
(1, 'Edwin Odhiambo', 'AZyMzwhnTaQ', '2022-01-29 09:52:22', '2022-01-30 09:11:41', 1, 1),
(3, 'frontend', 'gm9L67It2ls', '2022-01-30 13:51:38', '2022-01-30 14:38:50', 1, 3),
(4, 'Chinua Achebe', 'gm9L67It2ls', '2022-01-30 13:51:56', '2022-02-03 07:28:37', 0, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

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
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
