-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 02, 2024 at 03:51 PM
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
-- Database: `ggafrika_ggdb`
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
(1, 'Tourism and Eco-Culture', '2022-06-23 12:32:33', '2022-06-23 12:32:33'),
(2, 'GG  La Wananchi', '2022-06-23 13:19:21', '2022-06-23 13:19:21'),
(4, 'GG la Soko', '2022-06-24 09:28:21', '2022-06-24 09:28:21'),
(5, 'GG La Usani', '2022-06-24 11:22:46', '2022-06-24 11:22:46');

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
(6, '2022_01_19_061011_create_category_table', 1),
(7, '2022_01_19_065058_add_category_id_to_posts', 1),
(8, '2022_01_21_165038_create_videos_table', 1),
(9, '2022_01_22_162611_add_columns_to_videos_table', 1),
(10, '2022_01_22_165042_add_column_to_posts_table', 1),
(11, '2022_01_30_164139_add-to-videos-table', 1),
(12, '2022_01_30_170344_add_to_posts_table', 1),
(13, '2022_02_02_170953_add_category_id_to_videos_table', 1),
(14, '2022_06_22_054646_create_slides_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `category_name` varchar(255) DEFAULT NULL,
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

INSERT INTO `posts` (`id`, `slug`, `category_name`, `title`, `about`, `body`, `user_id`, `potrait`, `created_at`, `updated_at`, `Author`, `published`) VALUES
(3, 'Magical Kenya', 'Tourism and Eco-Culture', 'Magical Kenya', 'Kenya has long been a fascinating destination of choice for travelers both domestic and international. The East African nation flaunts diverse landscapes, from savannahs to lakes and mountainous ranges, while encompassing ethnic diversity and vibrant, bygone cultures. It’s clear to see what draws people to the place they call ‘Magical Kenya’.', '<p style=\"box-sizing: border-box; margin: 0px 0px 1.5em; overflow-wrap: break-word; border: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: Ubuntu, sans-serif; font-size: 17px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"box-sizing: border-box; font-weight: 700; border: 0px; margin: 0px; padding: 0px;\">Kenya</strong><span>&nbsp;</span>has long been a fascinating destination of choice for travelers both domestic and international. The East African nation flaunts diverse landscapes, from savannahs to lakes and mountainous ranges, while encompassing ethnic diversity and vibrant, bygone cultures. It’s clear to see<span>&nbsp;</span><a href=\"https://www.worldfootprints.com/radio_show/discover-kenya-and-the-caribbean/\" target=\"_blank\" rel=\"noreferrer noopener\" style=\"box-sizing: border-box; color: rgb(30, 114, 189); text-decoration: none; background-color: transparent; border: 0px; margin: 0px; padding: 0px; transition: all 0s ease-in-out 0s;\">what draws people to the place they call ‘Magical<span>&nbsp;</span><strong style=\"box-sizing: border-box; font-weight: 700; border: 0px; margin: 0px; padding: 0px;\">Kenya</strong>’</a>. I even set foot on these lands way back in 2013 on an overland safari with a group of twenty other wandering souls, creating moments unforgettable and learning what it is that makes this country so appealing to travelers like myself.&nbsp;</p><p style=\"box-sizing: border-box; margin: 0px 0px 1.5em; overflow-wrap: break-word; border: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: Ubuntu, sans-serif; font-size: 17px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">Since 2013, tourism has expanded and evolved in the region, welcoming a more sustainable narrative — one far more inclusive of a positive social and environmental impact than at any time in<span>&nbsp;</span><strong style=\"box-sizing: border-box; font-weight: 700; border: 0px; margin: 0px; padding: 0px;\">Kenya</strong>’s tourism history. This sustainable narrative comes at a time of necessary spotlight on the intersection of travel and sustainability, as the tourism industry itself evolves to focus more on sustainable development over economic growth.&nbsp;</p><p style=\"box-sizing: border-box; margin: 0px 0px 1.5em; overflow-wrap: break-word; border: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: Ubuntu, sans-serif; font-size: 17px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">Historically, and not uncommon to the general nature of the tourism industry, the Kenyan government had maintained inadequate capacity in social and environmental factors when employing tourism to bring about rapid economic growth. According to&nbsp;<a target=\"_blank\" href=\"https://www.scirp.org/(S(vtj3fa45qm1ean45vvffcz55))/reference/ReferencesPapers.aspx?ReferenceID=2461237\" rel=\"noreferrer noopener\" style=\"box-sizing: border-box; color: rgb(30, 114, 189); text-decoration: none; background-color: transparent; border: 0px; margin: 0px; padding: 0px; transition: all 0s ease-in-out 0s;\">scholarly research</a>, early tourism development in<span>&nbsp;</span><strong style=\"box-sizing: border-box; font-weight: 700; border: 0px; margin: 0px; padding: 0px;\">Kenya</strong><span>&nbsp;</span>was characterized by minimal Indigenous involvement and enveloped a colonialist approach. As a result of rapid and unplanned growth, this left the industry economically, socially, and environmentally unbalanced, perpetuating inequality and lacking authenticity.&nbsp;&nbsp;</p><p style=\"box-sizing: border-box; margin: 0px 0px 1.5em; overflow-wrap: break-word; border: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: Ubuntu, sans-serif; font-size: 17px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">Today, changes in tourism practices are looking to fill these gaps.</p><figure class=\"wp-block-image size-large\" style=\"box-sizing: border-box; display: block; margin: 0px 0px 1em; max-width: 100%; height: auto; color: rgb(102, 102, 102); font-family: Ubuntu, sans-serif; font-size: 17px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><img loading=\"eager\" width=\"1024\" height=\"688\" src=\"https://www.worldfootprints.com/wp-content/uploads/2021/08/02.Ngurunit-Kenya-Credit-NOTP-1024x688.jpeg\" alt=\"Ngurunit, Kenya. Photo: David Murphy NOTM: NOTP\" class=\"wp-image-30587 jetpack-lazy-image jetpack-lazy-image--handled\" srcset=\"https://www.worldfootprints.com/wp-content/uploads/2021/08/02.Ngurunit-Kenya-Credit-NOTP-1024x688.jpeg 1024w, https://www.worldfootprints.com/wp-content/uploads/2021/08/02.Ngurunit-Kenya-Credit-NOTP-300x201.jpeg 300w, https://www.worldfootprints.com/wp-content/uploads/2021/08/02.Ngurunit-Kenya-Credit-NOTP-768x516.jpeg 768w, https://www.worldfootprints.com/wp-content/uploads/2021/08/02.Ngurunit-Kenya-Credit-NOTP-1536x1031.jpeg 1536w, https://www.worldfootprints.com/wp-content/uploads/2021/08/02.Ngurunit-Kenya-Credit-NOTP.jpeg 2048w\" data-lazy-loaded=\"1\" sizes=\"(max-width: 1024px) 100vw, 1024px\" style=\"box-sizing: border-box; vertical-align: bottom; border-style: none; height: auto; max-width: 100%; border-radius: inherit;\"><figcaption style=\"box-sizing: border-box; display: block; margin-top: 0.5em; margin-bottom: 1em; font-size: 13px; text-align: center;\">Ngurunit, Kenya. Photo:<span>&nbsp;</span><a href=\"https://www.notonthemap.net/\" target=\"_blank\" rel=\"noreferrer noopener\" style=\"box-sizing: border-box; color: rgb(30, 114, 189); text-decoration: none; background-color: transparent; border: 0px; margin: 0px; padding: 0px; transition: all 0s ease-in-out 0s;\">David Murphy NOTM</a></figcaption></figure><p><br></p>', '1', 'images/mDa4ICREU3tHyld9F74OCg5umstGvxaVkqUsSiZZ.jpg', '2022-06-24 10:55:12', '2022-06-24 11:52:25', NULL, 0),
(5, 'DanceFit', 'GG la Soko', 'DanceFit', 'DanceFit(dance and fitness) stands out from technical or traditional dance model. GG Dancefit primary objective is to create personal feel good effect in a workout session for participants.', '<p><br></p><p>DanceFit(dance and fitness) stands out from technical or traditional dance model. GG Dancefit primary objective is to create personal feel good effect in a workout session for participants.</p><br><p>GG Dancefit classes are divided into two: cardio based and slow paced</p><p><img src=\"content://com.android.chrome.FileProvider/images/screenshot/1657658122096273282251.jpg\" alt=\"\" width=\"300px\" style=\"display: block; margin-left: auto; margin-right: auto;\"><br></p><br><br><p>Cardio based dance focuses on cardiovascular training. GG dancefit instructors  plan easy-to-follow choreography aiming to increase the participant\'s  heart rates. </p><br><p>They include Styles like Zumba, Jazzercise, LaBlast, Hip Hop Abs, TurboJam, and Bokwa</p><br><br><p> While slow paced dancefit focuses on different elements of physical fitness such as balance, coordination, flexibility and core power,  they include martial art, barre classes and yoga</p><br><br><p>GG Dancefit is suitable for all level, carefully designed for low impact with unlikelihood of injuries or excessive soreness.</p><br><p>GG DanceFit instructors have crafted simple movements which are easy to modify and less challenging to the participants. However certain specialized classes have varying  skills and intensities i.e martial arts and barre classes.</p><br><p>Take Note</p><br><p>Aside from people with major injuries or health issues, most can comfortably join dance fitness classes and feel good about the experience. We highly advuse to consult with your doctor before starting an exercise program if you have any concerns.</p><br><br><p>GG Dancefit is wholesome other classes are purposefully crafted to be adventurous than others. Hence participants should familiarize with,   different styles of dance workouts before settling on one. Cardio dance are fast pacing, involve rhythmic raising of joints,swaying if hips chest pops e.t.c. the exercise synchronizes with certain dances  such as Bokwa afrikan dance, zumba a latin dance, donya Indian, jazzer exercise on jazz dance.</p><br><br><p>Slow paced dancefit workout routine such as barre workout are as major inspiration of ballet with sprinkle of yoga, palates and  use of light weights for muscle strengthening.</p><br><p>Posture and body form  are the primary objective as GG instructors leads participants through motions that challenge state of equilibrium, stability and core strength</p><br><br><p>As new member of GG DanceFit</p><br><p>We\'ve carefully done the following to enable you have the best and productive experience throughout the process</p><br><br><p>-We\'ve specialize in outcall training sessions and online.</p><br><p>- extensive pool of  talented and qualified instructors.</p><br><p>- Well designed and set aside instructions for apparel and gears.</p><br><p>- other extra benefits for members such as synchronized tours and trips, mobile beauty and massage sessions etc</p>', '1', 'images/rubEKfcLbLQuXTou0Sc1PwdU2ElcUQ1ihUWYODx2.jpg', '2022-07-12 17:39:10', '2022-07-12 17:39:34', NULL, 1),
(6, 'Nomino Afrikana', 'GG La Usani', 'Nomino Afrikana', 'This is a story about the rest of Afrika with an East Afrikan encounter of the tales of Kenyan exploits, love, hope and dreams of a liberated Afrikan continent.', '<p><span style=\"font-size: 1rem;\">This is a story about the rest of Afrika with an East Afrikan encounter of the tales of Kenyan exploits, love, hope and dreams of a liberated Afrikan continent. The tales and co-values of true enigma that aligns on the Afrikan dreams and culture gave birth to Nomino Afrikana.</span></p><br><p>Nomino is a noun in swahili, Afrikana is for Afrika. Thus Nomino Afrikana is the name of young prolific singer/song writer and a visionnaire  about Afrikanism with objective of celebrating the culture of Afrika with the rest of the world.</p><br><p>Hails from the Coastal roots of Kenya in the dynamic East African music heritage of both Swahili rhythm and blues. Born and bred on the error of affirmed musicians such as   Mushrooms, the Eagles lupopo, Maroon comandos, the Mombasa vikings, Daudi Kabaka, Ayub Ogada, Samba Mapangala and Fadhili Williams, Nomino Afrikana is a partaker of a rich chronological music and heritage baton.</p><br><br><p>Nomino Afrikana sound is a fusion of afro pop and funk.</p><br><p>\"The world is a global village and sure let\'s hope it remains that way,\" Nomino Afrikana. He seeks to bring Africa closer through musical exposition on social and global issues.</p><br><p>Inspired by the likes of  African artists; the famed Fela Kuti,Tony Allen, Sean Dampte and popular western culture by James Brown and the Temptations.</p><br><p>We at GG Afrika welcome Nomino Afrikana as the first artist to work with us in celebrating, empowering and transforming Afrika through music and tales.</p><br><br><p>Checkout </p><p><a href=\"https://youtu.be/QIeG0u9p6lo\">huba</a>&nbsp;Nomino afrikana masterpiece&nbsp;</p><br><p>Historia by Nomino Afrikana&nbsp;<a href=\"https://youtu.be/HHms6ZWGMtI\">https://youtu.be/HHms6ZWGMtI</a></p><p><span style=\"font-size: 1rem;\">&nbsp;</span><span style=\"font-size: 1rem;\"><a href=\"https://youtu.be/t0EArpdT4bE\">Mwanamwali</a></span><span style=\"font-size: 1rem;\"> by Nomino Afrikana&nbsp;</span></p>', '1', 'images/rtWsewrBMJalDfYuST4IUXPdTBrR1pTEpjSYkdR8.png', '2022-07-12 19:27:29', '2022-07-12 19:27:42', NULL, 1),
(7, 'Ecommerce is taking hold in Afrika.', 'GG la Soko', 'Ecommerce is taking hold in Afrika.', 'As internet access expands, trust grows and logistics modernize. No market has more room to grow than Afrika.', '<p style=\"font-size: 16px; font-family: &quot;Times New Roman&quot;, serif; margin: 0px 0px 24px; background: white;\"><span style=\"color: rgb(112, 112, 112); background: white;\"><span>&nbsp;</span></span><span lang=\"EN-US\" style=\"color: rgb(112, 112, 112); background: white;\">A</span><span style=\"color: rgb(112, 112, 112); background: white;\">s internet access expands, trust grows and logistics\r\n        modernize. No market has more room to grow than Afri</span><span lang=\"EN-US\" style=\"color: rgb(112, 112, 112); background: white;\">k</span><span style=\"color: rgb(112, 112, 112); background: white;\">a.</span><span style=\"color: rgb(46, 46, 51);\">\r\n        It’s common for people in the West to have a simple view of Afri</span><span lang=\"EN-US\" style=\"color: rgb(46, 46, 51);\">k</span><span style=\"color: rgb(46, 46, 51);\">a as an impoverished continent, where anything that is\r\n        not strictly necessary – like online shopping – is a luxury for a tiny elite.\r\n        The reality, of course, is much more complex.</span></p>\r\n\r\n<p style=\"font-size: 16px; font-family: &quot;Times New Roman&quot;, serif; margin: 0px 0px 24px; background: white; box-sizing: inherit; overflow-wrap: break-word; -webkit-font-smoothing: antialiased; text-size-adjust: 100%; font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; widows: 2; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; word-spacing: 0px;\"><span style=\"color: rgb(46, 46, 51);\">Afri</span><span lang=\"EN-US\" style=\"color: rgb(46, 46, 51);\">k</span><span style=\"color: rgb(46, 46, 51);\">a has a young\r\n        population, fast-growing cities and rapidly increasing disposable income. It is\r\n        home to 54 countries, each at their own stage of economic development. Afri</span><span lang=\"EN-US\" style=\"color: rgb(46, 46, 51);\">k</span><span style=\"color: rgb(46, 46, 51);\">a’s most populous country, Nigeria, also has the largest\r\n        economy, ahead of many developed countries including Ireland, Israel and\r\n        Norway. </span></p>\r\n\r\n<p style=\"font-size: 16px; font-family: &quot;Times New Roman&quot;, serif; margin: 0px 0px 24px; background: white;\"><span style=\"color: rgb(46, 46, 51);\">Online retail revenue in Afri</span><span lang=\"EN-US\" style=\"color: rgb(46, 46, 51);\">k</span><span style=\"color: rgb(46, 46, 51);\">a is estimated at around $20 billion annually, which is\r\n        only 3.5% of total retail sales. This puts online sales for the whole of Afri</span><span lang=\"EN-US\" style=\"color: rgb(46, 46, 51);\">k</span><span style=\"color: rgb(46, 46, 51);\">a at a lower level than Australia. But Afri</span><span lang=\"EN-US\" style=\"color: rgb(46, 46, 51);\">k</span><span style=\"color: rgb(46, 46, 51);\">a’s population, at 1.35 billion, is on par with China.\r\n        Unlike China, Afri</span><span lang=\"EN-US\" style=\"color: rgb(46, 46, 51);\">k</span><span style=\"color: rgb(46, 46, 51);\">a’s population is growing fast, so\r\n        the demographics will remain skewed to younger people for decades to come.</span></p>\r\n\r\n<p style=\"font-size: 16px; font-family: &quot;Times New Roman&quot;, serif; margin: 0px 0px 24px; background: white; box-sizing: inherit; overflow-wrap: break-word; -webkit-font-smoothing: antialiased; text-size-adjust: 100%; font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; widows: 2; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; word-spacing: 0px;\"><span style=\"color: rgb(46, 46, 51);\">This means that Afri</span><span lang=\"EN-US\" style=\"color: rgb(46, 46, 51);\">k</span><span style=\"color: rgb(46, 46, 51);\">a\r\n        has all the components for a rapid expansion both in its overall economy and in\r\n        ecommerce. It will take several years for it to overtake the likes of China,\r\n        the US and Japan, but the Afri</span><span lang=\"EN-US\" style=\"color: rgb(46, 46, 51);\">k</span><span style=\"color: rgb(46, 46, 51);\">an ecommerce\r\n        market of the future could be the largest in the world.</span></p>', '1', 'images/RxcUBfQ8ZV7OIGK7bh0yyUlojPFPs7xuSH7VStPg.png', '2022-08-18 12:38:06', '2022-08-18 12:47:06', NULL, 1),
(8, 'Afrika Roaring Tourism', 'Tourism and Eco-Culture', 'Afrika Roaring Tourism', 'Tourism is one of the primary drivers of economic  growth and job creation in emerging economies throughout the world. Afrika’s unique history and natural wonders are gaining attention amid the local and global increase in cultural, heritage, and development tourism.', '<p><p class=\"MsoNormal\" style=\"margin: 0px 0px 11px; font-size: 15px; font-family: Calibri, sans-serif; line-height: 200%;\"><span style=\"font-size: 16px; line-height: 200%; font-family: &quot;Times New Roman&quot;, serif; color: black; background: white;\">&nbsp;</span><br></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin: 0px; font-size: 15px; font-family: Calibri, sans-serif; line-height: 200%; background: rgb(250, 250, 250); vertical-align: baseline;\"><span lang=\"EN-US\" style=\"font-size: 16px; line-height: 200%; font-family: &quot;Times New Roman&quot;, serif; color: black;\">T</span><span style=\"font-size: 16px; line-height: 200%; font-family: &quot;Times New Roman&quot;, serif; color: black;\">ourism is one of the primary drivers of economic\r\n        growth and job creation in emerging economies throughout the world. Afri</span><span lang=\"EN-US\" style=\"font-size: 16px; line-height: 200%; font-family: &quot;Times New Roman&quot;, serif; color: black;\">k</span><span style=\"font-size: 16px; line-height: 200%; font-family: &quot;Times New Roman&quot;, serif; color: black;\">a’s unique history and natural wonders are gaining\r\n        attention amid the local and global increase in cultural, heritage, and\r\n        development tourism.&nbsp;<a href=\"https://www.brookings.edu/wp-content/uploads/2018/12/Africas-tourism-potential_LandrySigne1.pdf\"><span style=\"color: black; padding: 0px;\">Based on analyses of various\r\n                countries’ governance and business environments</span></a>, it is clear that\r\n        numerous Afri</span><span lang=\"EN-US\" style=\"font-size: 16px; line-height: 200%; font-family: &quot;Times New Roman&quot;, serif; color: black;\">k</span><span style=\"font-size: 16px; line-height: 200%; font-family: &quot;Times New Roman&quot;, serif; color: black;\">an countries present tremendous promise to become\r\n        or remain vibrant hosts for tourists, investors, and entrepreneurs, which can\r\n        drive employment for low-skilled workers and economic inclusion for women and\r\n        youth.</span></p><br></p><p><img src=\"https://www.un.org/africarenewal/sites/www.un.org.africarenewal/files/styles/ar_main_story_big_picture/public/ssimg_210.jpg?itok=bZW8v5Q8\" alt=\"South African tourism holding steady | Africa Renewal\"><br></p><p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin: 0px; font-size: 15px; font-family: Calibri, sans-serif; line-height: 200%; background: rgb(250, 250, 250); vertical-align: baseline;\"><span style=\"font-size: 16px; line-height: 200%; font-family: &quot;Times New Roman&quot;, serif; color: black;\">International\r\n        tourists traveling to emerging countries often inject similar amounts of wealth\r\n        into national economies as private and public sector investments and development\r\n        assistance from foreign governments. In 2015,&nbsp;<a href=\"https://www.ictsd.org/bridges-news/bridges-africa/news/unctad-global-fdi-rises-in-2015-slows-in-africa\"><span style=\"color: black; padding: 0px;\">foreign direct investment</span></a>&nbsp;to\r\n        the Afri</span><span lang=\"EN-US\" style=\"font-size: 16px; line-height: 200%; font-family: &quot;Times New Roman&quot;, serif; color: black;\">k</span><span style=\"font-size: 16px; line-height: 200%; font-family: &quot;Times New Roman&quot;, serif; color: black;\">an continent totaled $54 billion and&nbsp;<a href=\"https://www.oecd.org/dac/stats/documentupload/Africa-Development-Aid-at-a-Glance.pdf\"><span style=\"color: black; padding: 0px;\">official development assistance</span></a>&nbsp;totaled\r\n        $51.04 billion, while&nbsp;<a href=\"https://www.brookings.edu/wp-content/uploads/2018/12/Africas-tourism-potential_LandrySigne1.pdf\"><span style=\"color: black; padding: 0px;\">tourism generated $39.2 billion</span></a>&nbsp;and\r\n        created 9.1 million direct jobs within the sector. Clearly, the tourism\r\n        industry has an increasingly important role in the global economy by\r\n        contributing to GDP, service exports, and employment.</span></p><p class=\"MsoNormal\" style=\"margin: 0px; font-size: 15px; font-family: Calibri, sans-serif; line-height: 200%; background: rgb(250, 250, 250); vertical-align: baseline;\"><span style=\"font-size: 16px; line-height: 200%; font-family: &quot;Times New Roman&quot;, serif; color: black;\"><br></span></p><p class=\"MsoNormal\" style=\"margin: 0px; font-size: 15px; font-family: Calibri, sans-serif; line-height: 200%; background: rgb(250, 250, 250); vertical-align: baseline;\"><span style=\"font-size: 16px; line-height: 200%; font-family: &quot;Times New Roman&quot;, serif; color: black;\"><img src=\"https://sokodirectory.com/wp-content/uploads/2015/03/Tourism.jpg\" alt=\"Tourism in East Africa: Top Ten Tourist Destinations and why Revival in the  Sector is Needed - Soko Directory\"><br></span></p><p class=\"MsoNormal\" style=\"margin: 0px; font-size: 15px; font-family: Calibri, sans-serif; line-height: 200%; background: rgb(250, 250, 250); vertical-align: baseline;\"><span style=\"font-size: 16px; line-height: 200%; font-family: &quot;Times New Roman&quot;, serif; color: black;\"><br></span></p><p class=\"MsoNormal\" style=\"margin: 0px; font-size: 15px; font-family: Calibri, sans-serif; line-height: 200%; background: rgb(250, 250, 250); vertical-align: baseline;\"><span style=\"font-size: 16px; line-height: 200%; font-family: &quot;Times New Roman&quot;, serif; color: black;\"><p class=\"MsoNormal\" style=\"margin: 0px; font-size: 15px; font-family: Calibri, sans-serif; line-height: 200%; background: rgb(250, 250, 250); vertical-align: baseline;\"><span style=\"font-size: 16px; line-height: 200%; font-family: &quot;Times New Roman&quot;, serif; color: black;\">How\r\n        well are African countries capitalizing on this opportunity offered by tourism?\r\n        A recent World Bank study classified&nbsp;<a href=\"https://openknowledge.worldbank.org/bitstream/handle/10986/12841/700990ESW0P1170ing0the0Economic0Pow.pdf?sequence=1&amp;isAllowed=y\"><span style=\"color: black; padding: 0px;\">Afri</span><span lang=\"EN-US\" style=\"color: black; padding: 0px;\">k</span><span style=\"color: black; padding: 0px;\">an countries into four\r\n                performance categories</span></a>: “pre-emergent,” “potential,” “emerging,” and\r\n        “consolidating” tourism destinations. The performance of countries was based\r\n        on&nbsp;<a href=\"https://openknowledge.worldbank.org/bitstream/handle/10986/12841/700990ESW0P1170ing0the0Economic0Pow.pdf?sequence=1&amp;isAllowed=y\"><span style=\"color: black; padding: 0px;\">indicators</span></a>&nbsp;such\r\n        as the ease of doing business; the competitiveness in terms of tourism\r\n        regulation, infrastructure, and resources; the tourism receipts per long-haul\r\n        arrivals; the international arrival per head of population; and the forecast of\r\n        growth in tourism arrivals. The&nbsp;<a href=\"http://documents.worldbank.org/curated/en/738471468299123752/pdf/886560PUB0978100Box385230B00PUBLIC0.pdf\"><span style=\"color: black; padding: 0px;\">pre-emerging countries</span></a>,\r\n        such as Somalia and Sudan, have faced significant security and governance\r\n        challenges as well as low government commitments to the tourism sector. The\r\n        potential countries, such as Madagascar, Ethiopia, and Gabon, have shown\r\n        relative interest and initiative in the sector, but are still facing governance\r\n        challenges and market limitations. The emerging countries, such as Rwanda and\r\n        the Seychelles, are prioritizing and scaling up tourism and relatively\r\n        competitive. Finally, the consolidating countries, such as Morocco, South\r\n        Africa, and Mauritius, are among the top performers with a relatively mature\r\n        tourism sector.</span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin: 0px; font-size: 15px; font-family: Calibri, sans-serif; line-height: 200%; background: rgb(250, 250, 250); vertical-align: baseline;\"><span style=\"font-size: 16px; line-height: 200%; font-family: &quot;Times New Roman&quot;, serif; color: black;\">Fifteen\r\n        years ago, the Afri</span><span lang=\"EN-US\" style=\"font-size: 16px; line-height: 200%; font-family: &quot;Times New Roman&quot;, serif; color: black;\">k</span><span style=\"font-size: 16px; line-height: 200%; font-family: &quot;Times New Roman&quot;, serif; color: black;\">an Union and the New Partnership for Afri</span><span lang=\"EN-US\" style=\"font-size: 16px; line-height: 200%; font-family: &quot;Times New Roman&quot;, serif; color: black;\">k</span><span style=\"font-size: 16px; line-height: 200%; font-family: &quot;Times New Roman&quot;, serif; color: black;\">a’s Development (renamed African Union Development\r\n        Agency) adopted the&nbsp;<a href=\"https://au.int/sites/default/files/documents/32251-doc-2017_nepad_proposed_tourism_work_plan.pdf\"><span style=\"color: black; padding: 0px;\">Tourism Action Plan</span></a>&nbsp;to\r\n        bring visibility to tourism on the continent. This came about after a&nbsp;<a href=\"https://www.brookings.edu/wp-content/uploads/2018/12/Africas-tourism-potential_LandrySigne1.pdf\"><span style=\"color: black; padding: 0px;\">300-percent increase in\r\n                international arrivals</span></a>&nbsp;in the 1990s, reaching 26.2 million\r\n        arrivals in 2000. Tourism has since become integral to economic development\r\n        policies. Several countries recently increased their efforts to advance their\r\n        travel and tourism industries, including the Gambia, Kenya, South Africa, and\r\n        Tanzania, to accommodate the nearly&nbsp;<a href=\"https://www.brookings.edu/wp-content/uploads/2018/12/Africas-tourism-potential_LandrySigne1.pdf\"><span style=\"color: black; padding: 0px;\">62 million annual visitors</span></a>&nbsp;to\r\n        the continent. South Africa and Kenya receive the largest amounts of&nbsp;<a href=\"https://www.brookings.edu/wp-content/uploads/2018/12/Africas-tourism-potential_LandrySigne1.pdf\"><span style=\"color: black; padding: 0px;\">tourism-focused investment</span></a>&nbsp;at\r\n        $6.1 billion and $404 million respectively.</span></p>\r\n\r\n<span style=\"font-size: 16px; line-height: 107%; font-family: &quot;Times New Roman&quot;, serif; color: black;\">Generally,\r\n    investments have been focused on countries with well-developed infrastructure,\r\n    easily navigable travel policies, and business-friendly environments. There is\r\n    great potential to increase tourism-related investment to the continent, particularly\r\n    after the 15 member states of the Economic Community of West Afri</span><span lang=\"EN-US\" style=\"font-size: 16px; line-height: 107%; font-family: &quot;Times New Roman&quot;, serif; color: black;\">k</span><span style=\"font-size: 16px; line-height: 107%; font-family: &quot;Times New Roman&quot;, serif; color: black;\">an\r\n    States, often referred to as ECOWAS, introduced a visa policy allowing for free\r\n    movement among its member states. Continent-wide efforts to increase\r\n    integration and free movement, such as the impending implementation of the Afri</span><span lang=\"EN-US\" style=\"font-size: 16px; line-height: 107%; font-family: &quot;Times New Roman&quot;, serif; color: black;\">k</span><span style=\"font-size: 16px; line-height: 107%; font-family: &quot;Times New Roman&quot;, serif; color: black;\">an\r\n    Continental Free Trade Area, will create a more stable business environment for\r\n    investors and entrepreneurs to capitalize on the continent’s tourism potential.</span></span></p><p class=\"MsoNormal\" style=\"margin: 0px; font-size: 15px; font-family: Calibri, sans-serif; line-height: 200%; background: rgb(250, 250, 250); vertical-align: baseline;\"><span style=\"font-size: 16px; line-height: 200%; font-family: &quot;Times New Roman&quot;, serif; color: black;\"><span style=\"font-size: 16px; line-height: 107%; font-family: &quot;Times New Roman&quot;, serif; color: black;\"><br></span></span></p><p class=\"MsoNormal\" style=\"margin: 0px; font-size: 15px; font-family: Calibri, sans-serif; line-height: 200%; background: rgb(250, 250, 250); vertical-align: baseline;\"><span style=\"font-size: 16px; line-height: 200%; font-family: &quot;Times New Roman&quot;, serif; color: black;\"><span style=\"font-size: 16px; line-height: 107%; font-family: &quot;Times New Roman&quot;, serif; color: black;\"><p><img src=\"https://media-cdn.tripadvisor.com/media/photo-s/1d/41/28/7b/sol-azur-beach-hotel.jpg\" alt=\"THE 10 BEST Africa Beach Resorts - Aug 2022 (with Prices) - Tripadvisor\"><br></p><p class=\"MsoNormal\" style=\"margin: 0px 0px 32px; font-size: 15px; font-family: Calibri, sans-serif; line-height: 200%; background: rgb(250, 250, 250); vertical-align: baseline;\"><span style=\"font-size: 16px; line-height: 200%; font-family: &quot;Times New Roman&quot;, serif; color: black;\">        Potentialinvestors in other countries’ tourism sectors will face challenges in\r\n        infrastructure development and government support. Though, there will be high\r\n        rewards for those who make well-informed choices and take the necessary risks\r\n        to partner with policymakers and industry leaders in potentially high-rewarding\r\n        countries.</span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin: 0px; font-size: 15px; font-family: Calibri, sans-serif; line-height: 200%; background: rgb(250, 250, 250); vertical-align: baseline;\"><span style=\"font-size: 16px; line-height: 200%; font-family: &quot;Times New Roman&quot;, serif; color: black;\">While\r\n        motivations for travel may change periodically, the tourism industry has always\r\n        been a major economic contributor of jobs and opportunity. Tourism accounts\r\n        for&nbsp;<a href=\"http://cf.cdn.unwto.org/sites/all/files/pdf/item_6-_women_empowerment_in_the_tourism_sector_0.pdf\"><span style=\"color: black; padding: 0px;\">10 percent of the world’s jobs\r\n                and GDP</span></a>, and generally provides high levels of employment for women\r\n        and young people. As Afri</span><span lang=\"EN-US\" style=\"font-size: 16px; line-height: 200%; font-family: &quot;Times New Roman&quot;, serif; color: black;\">k</span><span style=\"font-size: 16px; line-height: 200%; font-family: &quot;Times New Roman&quot;, serif; color: black;\">a’s emerging\r\n        economies begin to shift away from relying on commodities and agriculture and\r\n        toward boosting their service industries, the tourism industry has become a\r\n        major focus of national development strategies.</span></p>\r\n\r\n<p style=\"font-size: 16px; font-family: &quot;Times New Roman&quot;, serif; margin: 0px 0px 24px; line-height: 200%; background: white;\"><span style=\"color: black;\">&nbsp;</span><br></p></span><br></span></p><br></p><p><br></p><p><br></p>', '1', 'images/dquwNT8czEZnl00C4xiT4SiofKXr5olGc1ceVFo5.jpg', '2022-08-18 14:19:31', '2022-08-18 14:19:46', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `published` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `name`, `image`, `published`, `created_at`, `updated_at`) VALUES
(3, 'Re', 'images/jSc77CZzgM2I9zvDNheHCpk4WjkD1O7bdqJHCCu7.jpg', 1, '2022-06-24 08:16:14', '2022-06-24 08:16:33'),
(5, 'DanceFit', 'images/pndXaWnVNg9VPADHvT4pgPTcrLfcIA5w81NJ5mnF.jpg', 1, '2022-07-12 17:52:20', '2022-07-12 17:52:32'),
(6, 'DanceFit', 'images/lcr1fTI9Zg6UKE5BbhqXJpaZTpW1k3AWwHm4EauC.jpg', 1, '2022-07-12 17:55:23', '2022-07-12 17:55:30'),
(7, 'Nomino', 'images/6jFV4koPzoPFA2omHZKlLR11UMf6XmlIHtIiOF1a.png', 1, '2022-07-12 19:30:05', '2022-07-12 19:30:13');

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
(1, 'GG. Writer', 'ggafrika@mail.com', NULL, '$2y$10$fRlhL.vvh4jLRtoGABQpdeXtNm.UvwXkuwldf7oZGehVhKpQJpI/i', 1, NULL, '2022-06-23 12:32:19', '2022-06-25 13:07:26'),
(2, 'User', 'user@itsolutionstuff.com', NULL, '$2y$10$PcsmS3DvcHH7iZ1nJ9UVCO31X0vvbuVpX2B6yHcPyk4vgg90zTvBq', 1, NULL, '2022-06-23 12:32:19', '2022-06-23 12:32:19');

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
  `published` varchar(255) NOT NULL DEFAULT '0',
  `category_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `url`, `created_at`, `updated_at`, `published`, `category_name`) VALUES
(3, 'Mwanamwali by Nomino Afrikana', 't0EArpdT4bE', '2022-07-12 19:33:41', '2022-07-12 19:33:47', '1', 'GG La Usani'),
(4, 'Huba by Nomino Afrikana', 'QIeG0u9p6lo', '2022-07-12 19:35:20', '2022-07-12 19:35:30', '1', 'GG La Usani'),
(6, 'Historia by Nomino Afrikana', 'HHms6ZWGMtI', '2022-07-12 19:39:36', '2022-07-12 19:39:48', '1', 'GG La Usani');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
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
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
