-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 28, 2021 at 09:52 AM
-- Server version: 8.0.27-0ubuntu0.20.04.1
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `einvitation`
--

-- --------------------------------------------------------

--
-- Table structure for table `boy_family_details`
--

CREATE TABLE `boy_family_details` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relationship` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wedding_id` int NOT NULL,
  `sort` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `boy_family_details`
--

INSERT INTO `boy_family_details` (`id`, `image`, `name`, `relationship`, `wedding_id`, `sort`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, '61b72febedd09_Sunny-Kaushal-1.jpg', 'Sunny Kaushal', 'Brother', 4, 2, '2021-12-13 11:35:07', '2021-12-13 11:42:53', NULL),
(4, '61b730a832163_127624.jpg', 'Sham Kaushal', 'Father', 4, 1, '2021-12-13 11:38:16', '2021-12-13 11:42:53', NULL),
(5, '61b7311b12d35_vkau8814361.jpg', 'Veena Kaushal', 'Mother', 4, 3, '2021-12-13 11:40:11', '2021-12-13 11:42:53', NULL),
(14, '61c43a7cb9b2d.png', 'Saroj Kohli', 'Mother', 74, 0, '2021-12-23 08:55:44', '2021-12-23 08:59:40', NULL),
(15, '61c43a22dadbd.png', 'Saroj Kohli', 'Mother', 74, 0, '2021-12-23 08:58:10', '2021-12-23 08:58:15', '2021-12-23 08:58:15'),
(16, '61c69db468ed4.png', 'શામ કૌશલ', 'પિતા', 88, 0, '2021-12-25 04:27:32', '2021-12-25 04:27:32', NULL),
(17, '61c69dd9e6e0a.png', 'સની કૌશલ', 'ભાઈ', 88, 0, '2021-12-25 04:28:09', '2021-12-25 04:28:09', NULL),
(18, '61c69e124de83.png', 'વીણા કૌશલ', 'માતા', 88, 0, '2021-12-25 04:29:06', '2021-12-25 04:29:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wedding_id` int NOT NULL,
  `sort` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `wedding_id`, `sort`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, '1639398282677bear_lilly_malala_wish_katrina_vicky_on_wedding_pics.jpg', 4, 0, '2021-12-13 12:24:43', '2021-12-13 12:24:43', NULL),
(7, '1639398305405katrina_vicky_haldi_photos.jpg', 4, 0, '2021-12-13 12:25:06', '2021-12-13 12:25:06', NULL),
(8, '1639398336128vickykaushal4_17da00f7147_large.jpg', 4, 0, '2021-12-13 12:25:36', '2021-12-13 12:25:36', NULL),
(9, '163939843950388238210 (1).jpg', 4, 0, '2021-12-13 12:27:20', '2021-12-13 12:27:20', NULL),
(10, '1639398486713katrina_bride_pics_sister_vicky_kaushal.jpg', 4, 0, '2021-12-13 12:28:07', '2021-12-13 12:28:07', NULL),
(13, '1639479796204ranveer-deepika-wedding_1542345774.jpeg', 4, 0, '2021-12-14 11:03:16', '2021-12-14 11:17:01', '2021-12-14 11:17:01'),
(14, '163947980174988052606.jpg', 4, 0, '2021-12-14 11:03:21', '2021-12-14 11:16:55', '2021-12-14 11:16:55'),
(15, '1639479807284maxresdefault.jpg', 4, 0, '2021-12-14 11:03:27', '2021-12-14 11:16:58', '2021-12-14 11:16:58'),
(16, '1639479809467Vicky-Kaushal-Katrina-Kaif-Married-Bollywod-Entertainment-DKODING.jpg', 4, 0, '2021-12-14 11:03:29', '2021-12-14 11:03:29', NULL),
(17, '1639479815169jaya-bachchan-katrina-kaif-amitabh-bachchan.jpg', 4, 0, '2021-12-14 11:03:35', '2021-12-14 11:03:35', NULL),
(18, '1639479826553jaya-bachchan-katrina-kaif-amitabh-bachchan.jpg', 4, 0, '2021-12-14 11:03:46', '2021-12-14 11:17:15', '2021-12-14 11:17:15'),
(19, '1639479839953jaya-bachchan-katrina-kaif-amitabh-bachchan.jpg', 4, 0, '2021-12-14 11:03:59', '2021-12-14 11:17:07', '2021-12-14 11:17:07'),
(20, '1639479857272Vicky-Kaushal-Katrina-Kaif-Married-Bollywod-Entertainment-DKODING.jpg', 4, 0, '2021-12-14 11:04:17', '2021-12-14 11:17:10', '2021-12-14 11:17:10'),
(21, '1639479859086maxresdefault.jpg', 4, 0, '2021-12-14 11:04:19', '2021-12-14 11:17:17', '2021-12-14 11:17:17'),
(23, '16396303112641639398566929Katrina-Kaif,--Vicky-Kaushal-Wedding-Photos-(4).png', 4, 0, '2021-12-16 04:51:54', '2021-12-16 04:51:54', NULL),
(24, '16396303191361639398573435Katrina-Kaif,--Vicky-Kaushal-Wedding-Photos-(5).png', 4, 0, '2021-12-16 04:52:00', '2021-12-16 04:52:00', NULL),
(35, '16402420401471513058323-566.jpg', 74, 0, '2021-12-23 06:47:20', '2021-12-23 06:47:20', NULL),
(36, '16402420401502Anushka-Sharma-and-Virat-Kohli-in-their-wedding-mandap.jpg', 74, 0, '2021-12-23 06:47:21', '2021-12-23 06:47:41', '2021-12-23 06:47:41'),
(37, '16402420519542Anushka-Sharma-and-Virat-Kohli-in-their-wedding-mandap.jpg', 74, 0, '2021-12-23 06:47:32', '2021-12-23 06:47:32', NULL),
(38, '16402492288812Anushka-Sharma-and-Virat-Kohli-in-their-wedding-mandap.jpg', 74, 0, '2021-12-23 08:47:09', '2021-12-23 08:47:09', NULL),
(39, '16402492380801513058323-566.jpg', 74, 0, '2021-12-23 08:47:18', '2021-12-23 08:47:18', NULL),
(40, '1640249263631Virat Kohli and Anushka Sharma wedding.jpg', 74, 0, '2021-12-23 08:47:44', '2021-12-23 08:47:44', NULL),
(41, '1640249436323e33887f16e1d8c23e45226a81778665e.jpg', 74, 0, '2021-12-23 08:50:36', '2021-12-23 08:50:36', NULL),
(42, '164033940935461c4052d033b2_1531373783toys-wallpaper-hd-16339-17046-hd-wallpapers.jpg', 87, 0, '2021-12-24 09:50:12', '2021-12-24 09:50:12', NULL),
(43, '164033956855761c4052d033b2_1531373783toys-wallpaper-hd-16339-17046-hd-wallpapers.jpg', 87, 0, '2021-12-24 09:52:50', '2021-12-24 09:52:50', NULL),
(44, '1640339901792SampleJPGImage_20mbmb.jpg', 87, 0, '2021-12-24 09:58:35', '2021-12-24 09:58:45', '2021-12-24 09:58:45'),
(45, '1640346390198download.jpeg', 87, 0, '2021-12-24 11:46:30', '2021-12-24 11:46:40', '2021-12-24 11:46:40'),
(46, '164040631449116396303191361639398573435Katrina-Kaif,--Vicky-Kaushal-Wedding-Photos-(5).png', 88, 0, '2021-12-25 04:25:15', '2021-12-25 04:25:15', NULL),
(47, '164040632025016396303112641639398566929Katrina-Kaif,--Vicky-Kaushal-Wedding-Photos-(4).png', 88, 0, '2021-12-25 04:25:21', '2021-12-25 04:25:21', NULL),
(48, '16404063252021639479815169jaya-bachchan-katrina-kaif-amitabh-bachchan.jpg', 88, 0, '2021-12-25 04:25:25', '2021-12-25 04:25:25', NULL),
(49, '16404063303061639479809467Vicky-Kaushal-Katrina-Kaif-Married-Bollywod-Entertainment-DKODING.jpg', 88, 0, '2021-12-25 04:25:30', '2021-12-25 04:25:30', NULL),
(50, '16404063360651639398486713katrina_bride_pics_sister_vicky_kaushal.jpg', 88, 0, '2021-12-25 04:25:36', '2021-12-25 04:25:36', NULL),
(51, '1640406341065163939843950388238210 (1).jpg', 88, 0, '2021-12-25 04:25:41', '2021-12-25 04:25:41', NULL),
(52, '16404063457701639398336128vickykaushal4_17da00f7147_large.jpg', 88, 0, '2021-12-25 04:25:46', '2021-12-25 04:25:46', NULL),
(53, '16404063510491639398305405katrina_vicky_haldi_photos.jpg', 88, 0, '2021-12-25 04:25:51', '2021-12-25 04:25:51', NULL),
(54, '16404063553781639398282677bear_lilly_malala_wish_katrina_vicky_on_wedding_pics.jpg', 88, 0, '2021-12-25 04:25:55', '2021-12-25 04:25:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `girl_family_details`
--

CREATE TABLE `girl_family_details` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relationship` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wedding_id` int NOT NULL,
  `sort` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `girl_family_details`
--

INSERT INTO `girl_family_details` (`id`, `image`, `name`, `relationship`, `wedding_id`, `sort`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, '61b73395f0dc6_vicky-kaushal-katrina-kaif-wedding-1200-1.jpg', 'Jemisha Bhuva', 'Father', 4, 0, '2021-12-13 11:50:45', '2021-12-13 11:50:50', '2021-12-13 11:50:50'),
(4, '61b734089f046_695143095.jpg', 'Suzanne Turquotte', 'Mother', 4, 3, '2021-12-13 11:52:40', '2021-12-13 11:55:19', NULL),
(5, '61b734227c177_Kaif (1).jpg', 'Mohammed Kaif', 'Father', 4, 1, '2021-12-13 11:53:06', '2021-12-13 11:55:06', NULL),
(6, '61b7347fbb73d_27manish-malhotra5.jpg', 'Isabelle Kaif', 'Sister', 4, 2, '2021-12-13 11:54:39', '2021-12-13 11:55:19', NULL),
(14, '61c41ebddff9d.png', 'Ajay Kumar Sharma', 'Father', 74, 1, '2021-12-23 06:53:05', '2021-12-23 07:01:17', NULL),
(15, '61c41d6be10d1.png', 'Ashima Sharma', 'Mother', 74, 2, '2021-12-23 06:55:39', '2021-12-23 06:58:37', NULL),
(16, '61c41dfe71860.png', 'Karnesh Sharma', 'Brother', 74, 3, '2021-12-23 06:58:06', '2021-12-23 06:58:27', NULL),
(17, '61c46ad9ae82a.png', 'hfgh', 'hgh', 74, 0, '2021-12-23 12:26:01', '2021-12-23 12:26:07', '2021-12-23 12:26:07'),
(18, '61c69e6a8f2f2.png', 'મોહમ્મદ કૈફ', 'પિતા', 88, 0, '2021-12-25 04:30:34', '2021-12-25 04:30:34', NULL),
(19, '61c69e9454015.png', 'ઈસાબેલ કૈફ', 'બહેન', 88, 0, '2021-12-25 04:31:16', '2021-12-25 04:31:16', NULL),
(20, '61c69ed10c771.png', 'સુઝાન ટર્કોટ', 'માતા', 88, 0, '2021-12-25 04:32:17', '2021-12-25 04:32:17', NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_11_29_040923_create_occasions_table', 1),
(5, '2021_11_30_044100_create_weddings_table', 1),
(6, '2021_11_30_115235_create_gallery_table', 1),
(7, '2021_12_04_050754_create_boy_family_details_table', 1),
(8, '2021_12_06_035437_create_girl_family_details_table', 1),
(9, '2021_12_06_042129_create_video_galleries_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `occasions`
--

CREATE TABLE `occasions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `AM_PM` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int NOT NULL DEFAULT '0',
  `wedding_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `occasions`
--

INSERT INTO `occasions` (`id`, `name`, `date`, `time`, `AM_PM`, `description`, `location`, `image`, `sort`, `wedding_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'dandiya', '2021-12-13', '16:32:00', 'AM', '<p><em>test</em></p>', 'surat,surat,Gujarat,395001', 'dandiya-ras.jpg', 0, 4, '2021-12-13 11:03:12', '2021-12-13 11:56:05', '2021-12-13 11:56:05'),
(8, 'ENGAGEMENT', '2022-02-12', '10:30:00', 'AM', '<p>This Is an ENGAGEMENT Event</p>', 'Six Senses Fort Barwara Chauth Ka Barwara Rajasthan 322702,Rajasthan,Rajasthan,322702', 'engage.jpg', 1, 4, '2021-12-13 12:00:04', '2021-12-17 11:35:25', NULL),
(9, 'VINAYAK STHAPANA', '2022-02-13', '09:30:00', 'AM', '<p>This Is an VINAYAK STHAPANAEvent</p>', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702,Rajasthan,Rajasthan,322702', 'ganesha.jpg', 2, 4, '2021-12-13 12:01:28', '2021-12-16 06:55:35', NULL),
(10, 'MEHANDI', '2022-02-13', '15:00:00', 'PM', '<p>This Is an MEHANDI Event</p>', 'Six Senses Fort Barwara Chauth Ka Barwara Rajasthan 322702,Rajasthan,Rajasthan,322702', 'mehndi.jpg', 3, 4, '2021-12-13 12:02:34', '2021-12-16 06:55:35', NULL),
(11, 'HALDI', '2022-02-13', '21:30:00', 'PM', '<p>This Is an HALDIEvent</p>', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702,Rajasthan,Rajasthan,322702', 'haldi.jpg', 4, 4, '2021-12-13 12:03:26', '2021-12-16 06:55:38', NULL),
(12, 'HATH DHAN', '2022-02-14', '09:30:00', 'AM', '<p>This Is an HATH DHAN Event</p>', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702,Rajasthan,Rajasthan,322702', 'hath-dhan.jpg', 5, 4, '2021-12-13 12:06:20', '2021-12-16 06:55:38', NULL),
(13, 'MAYRA', '2022-02-14', '10:00:00', 'AM', '<p>This Is an MAYRA Event</p>', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702,Rajasthan,Rajasthan,322702', 'mayra.jpg', 6, 4, '2021-12-13 12:07:23', '2021-12-15 08:22:53', NULL),
(14, 'SANGEET', '2022-02-14', '11:30:00', 'AM', '<p>This Is an SANGEET Event</p>', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702,Rajasthan,Rajasthan,322702', 'sangit.jpg', 7, 4, '2021-12-13 12:08:31', '2021-12-15 08:22:53', NULL),
(15, 'DANDIYA RAAS', '2022-02-14', '16:00:00', 'PM', '<p>This Is an DANDIYA RAAS Event</p>', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702,Rajasthan,Rajasthan,322702', 'dandiya-ras.jpg', 8, 4, '2021-12-13 12:09:40', '2021-12-16 06:55:44', NULL),
(16, 'WEDDING CEREMONY', '2022-02-14', '19:30:00', 'PM', '<p>This Is a WEDDING CEREMONY Event</p>', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702,Rajasthan,Rajasthan,322702', 'wedding.jpg', 9, 4, '2021-12-13 12:10:37', '2021-12-16 06:55:46', NULL),
(17, 'RECEPTION', '2022-02-15', '19:30:00', 'PM', '<p>This Is an RECEPTION Event</p>', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702,Rajasthan,Rajasthan,322702', 'reception.jpg', 10, 4, '2021-12-13 12:11:39', '2021-12-16 06:55:46', NULL),
(212, 'ENGAGEMENT', '2022-02-12', '10:30:00', 'AM', '<p>This Is an ENGAGEMENT Event</p>', 'Six Senses Fort Barwara Chauth Ka Barwara Rajasthan 322702,Rajasthan,Rajasthan,322702', 'sangit.jpg', 1, 67, '2021-12-22 10:26:08', '2021-12-22 10:33:42', NULL),
(213, 'VINAYAK STHAPANA', '2022-02-13', '09:30:00', 'AM', '<p>This Is an VINAYAK STHAPANAEvent</p>', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702,Rajasthan,Rajasthan,322702', 'ganesha.jpg', 2, 67, '2021-12-22 10:26:08', '2021-12-22 10:26:08', NULL),
(214, 'MEHANDI', '2022-02-13', '15:00:00', 'PM', '<p>This Is an MEHANDI Event</p>', 'Six Senses Fort Barwara Chauth Ka Barwara Rajasthan 322702,Rajasthan,Rajasthan,322702', 'mehndi.jpg', 3, 67, '2021-12-22 10:26:08', '2021-12-22 10:26:08', NULL),
(215, 'HALDI', '2022-02-13', '21:30:00', 'PM', '<p>This Is an HALDIEvent</p>', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702,Rajasthan,Rajasthan,322702', 'haldi.jpg', 4, 67, '2021-12-22 10:26:08', '2021-12-22 10:26:08', NULL),
(216, 'HATH DHAN', '2022-02-14', '09:30:00', 'AM', '<p>This Is an HATH DHAN Event</p>', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702,Rajasthan,Rajasthan,322702', 'hath-dhan.jpg', 5, 67, '2021-12-22 10:26:08', '2021-12-22 10:26:08', NULL),
(217, 'MAYRA', '2022-02-14', '10:00:00', 'AM', '<p>This Is an MAYRA Event</p>', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702,Rajasthan,Rajasthan,322702', 'mayra.jpg', 6, 67, '2021-12-22 10:26:08', '2021-12-22 10:26:08', NULL),
(218, 'SANGEET', '2022-02-14', '11:30:00', 'AM', '<p>This Is an SANGEET Event</p>', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702,Rajasthan,Rajasthan,322702', 'sangit.jpg', 7, 67, '2021-12-22 10:26:08', '2021-12-22 10:26:08', NULL),
(219, 'DANDIYA RAAS', '2022-02-14', '16:00:00', 'PM', '<p>This Is an DANDIYA RAAS Event</p>', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702,Rajasthan,Rajasthan,322702', 'dandiya-ras.jpg', 8, 67, '2021-12-22 10:26:08', '2021-12-22 10:26:08', NULL),
(220, 'WEDDING CEREMONY', '2022-02-14', '19:30:00', 'PM', '<p>This Is a WEDDING CEREMONY Event</p>', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702,Rajasthan,Rajasthan,322702', 'wedding.jpg', 9, 67, '2021-12-22 10:26:08', '2021-12-22 10:26:08', NULL),
(221, 'RECEPTION', '2022-02-15', '19:30:00', 'PM', '<p>This Is an RECEPTION Event</p>', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702,Rajasthan,Rajasthan,322702', 'reception.jpg', 10, 67, '2021-12-22 10:26:08', '2021-12-22 10:26:08', NULL),
(222, 'ENGAGEMENT', '2022-02-12', '10:30:00', 'AM', '<p>This Is an ENGAGEMENT Event</p>', 'Six Senses Fort Barwara Chauth Ka Barwara Rajasthan 322702,Rajasthan,Rajasthan,322702', 'engage.jpg', 1, 68, '2021-12-22 11:18:45', '2021-12-22 11:18:45', NULL),
(223, 'VINAYAK STHAPANA', '2022-02-13', '09:30:00', 'AM', '<p>This Is an VINAYAK STHAPANAEvent</p>', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702,Rajasthan,Rajasthan,322702', 'ganesha.jpg', 2, 68, '2021-12-22 11:18:45', '2021-12-22 11:18:45', NULL),
(224, 'MEHANDI', '2022-02-13', '15:00:00', 'PM', '<p>This Is an MEHANDI Event</p>', 'Six Senses Fort Barwara Chauth Ka Barwara Rajasthan 322702,Rajasthan,Rajasthan,322702', 'mehndi.jpg', 3, 68, '2021-12-22 11:18:45', '2021-12-23 04:05:28', NULL),
(225, 'HALDI', '2022-02-13', '21:30:00', 'PM', '<p>This Is an HALDIEvent</p>', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702,Rajasthan,Rajasthan,322702', 'haldi.jpg', 4, 68, '2021-12-22 11:18:45', '2021-12-22 11:18:45', NULL),
(226, 'HATH DHAN', '2022-02-14', '09:30:00', 'AM', '<p>This Is an HATH DHAN Event</p>', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702,Rajasthan,Rajasthan,322702', 'hath-dhan.jpg', 5, 68, '2021-12-22 11:18:45', '2021-12-22 11:18:45', NULL),
(227, 'MAYRA', '2022-02-14', '10:00:00', 'AM', '<p>This Is an MAYRA Event</p>', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702,Rajasthan,Rajasthan,322702', 'mayra.jpg', 6, 68, '2021-12-22 11:18:45', '2021-12-22 11:18:45', NULL),
(228, 'SANGEET', '2022-02-14', '11:30:00', 'AM', '<p>This Is an SANGEET Event</p>', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702,Rajasthan,Rajasthan,322702', 'sangit.jpg', 7, 68, '2021-12-22 11:18:45', '2021-12-22 11:18:45', NULL),
(229, 'DANDIYA RAAS', '2022-02-14', '16:00:00', 'PM', '<p>This Is an DANDIYA RAAS Event</p>', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702,Rajasthan,Rajasthan,322702', 'dandiya-ras.jpg', 8, 68, '2021-12-22 11:18:45', '2021-12-22 11:18:45', NULL),
(230, 'WEDDING CEREMONY', '2022-02-14', '19:30:00', 'PM', '<p>This Is a WEDDING CEREMONY Event</p>', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702,Rajasthan,Rajasthan,322702', 'wedding.jpg', 9, 68, '2021-12-22 11:18:45', '2021-12-22 11:18:45', NULL),
(231, 'RECEPTION', '2022-02-15', '19:30:00', 'PM', '<p>This Is an RECEPTION Event</p>', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702,Rajasthan,Rajasthan,322702', 'reception.jpg', 10, 68, '2021-12-22 11:18:45', '2021-12-22 11:18:45', NULL),
(232, 'test', '2022-02-22', '10:10:00', 'AM', '<p>This is test event</p>', 'Rajhance 2,Surat,Gujarat,3940105', '61c405c60e38d.png', 0, 68, '2021-12-23 05:14:46', '2021-12-23 05:14:46', NULL),
(233, 'ENGAGEMENT', '2021-12-24', '12:00:00', 'PM', NULL, 'DLF City Phase -1  Block-C Gurgaon,Delhi,Delhi,395001', '61c46b57a747d.png', 0, 74, '2021-12-23 09:07:16', '2021-12-23 12:28:07', NULL),
(234, 'VINAYAK STHAPANA', '2021-12-25', '08:00:00', 'AM', NULL, 'DLF City Phase -1  Block-C Gurgaon,Delhi,Gujarat,395001', 'ganesha.jpg', 0, 74, '2021-12-23 09:30:55', '2021-12-23 09:39:21', NULL),
(235, 'Mahendi', '2021-12-25', '20:00:00', 'PM', NULL, '35th floor of the Omkar ‘1973’  Worli,Mumbai,Maharashtra,40030', '61c442910289b.png', 0, 74, '2021-12-23 09:34:09', '2021-12-23 09:40:51', NULL),
(236, 'ENGAGEMENT', '2022-02-12', '10:30:00', 'AM', '<p>This Is an ENGAGEMENT Event</p>', 'Six Senses Fort Barwara Chauth Ka Barwara Rajasthan 322702,Rajasthan,Rajasthan,322702', 'engage.jpg', 2, 87, '2021-12-24 09:24:14', '2021-12-24 11:45:06', NULL),
(237, 'VINAYAK STHAPANA', '2022-02-13', '09:30:00', 'AM', '<p>This Is an VINAYAK STHAPANAEvent</p>', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702,Rajasthan,Rajasthan,322702', 'ganesha.jpg', 3, 87, '2021-12-24 09:24:14', '2021-12-24 11:45:06', NULL),
(238, 'MEHANDI', '2022-02-13', '15:00:00', 'PM', '<p>This Is an MEHANDI Event</p>', 'Six Senses Fort Barwara Chauth Ka Barwara Rajasthan 322702,Rajasthan,Rajasthan,322702', 'mehndi.jpg', 4, 87, '2021-12-24 09:24:14', '2021-12-24 11:45:06', NULL),
(239, 'HALDI', '2022-02-13', '21:30:00', 'PM', '<p>This Is an HALDIEvent</p>', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702,Rajasthan,Rajasthan,322702', 'haldi.jpg', 5, 87, '2021-12-24 09:24:14', '2021-12-24 11:45:06', NULL),
(240, 'HATH DHAN', '2022-02-14', '09:30:00', 'AM', '<p>This Is an HATH DHAN Event</p>', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702,Rajasthan,Rajasthan,322702', 'hath-dhan.jpg', 6, 87, '2021-12-24 09:24:14', '2021-12-24 11:45:06', NULL),
(241, 'MAYRA', '2022-02-14', '10:00:00', 'AM', '<p>This Is an MAYRA Event</p>', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702,Rajasthan,Rajasthan,322702', 'mayra.jpg', 7, 87, '2021-12-24 09:24:14', '2021-12-24 11:45:06', NULL),
(242, 'SANGEET', '2022-02-14', '11:30:00', 'AM', '<p>This Is an SANGEET Event</p>', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702,Rajasthan,Rajasthan,322702', 'sangit.jpg', 8, 87, '2021-12-24 09:24:14', '2021-12-24 11:45:06', NULL),
(243, 'DANDIYA RAAS', '2022-02-14', '16:00:00', 'PM', '<p>This Is an DANDIYA RAAS Event</p>', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702,Rajasthan,Rajasthan,322702', 'dandiya-ras.jpg', 9, 87, '2021-12-24 09:24:14', '2021-12-24 11:45:08', NULL),
(244, 'WEDDING CEREMONY', '2022-02-14', '19:30:00', 'PM', '<p>This Is a WEDDING CEREMONY Event</p>', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702,Rajasthan,Rajasthan,322702', 'wedding.jpg', 10, 87, '2021-12-24 09:24:14', '2021-12-24 11:45:08', NULL),
(245, 'RECEPTION', '2022-02-15', '19:30:00', 'PM', '<p>This Is an RECEPTION Event</p>', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702,Rajasthan,Rajasthan,322702', 'reception.jpg', 10, 87, '2021-12-24 09:24:14', '2021-12-24 09:24:14', NULL),
(246, 'test', '2022-02-22', '10:10:00', 'AM', '<p>this is test event&nbsp;</p>', 'Rajhance 2,Surat,Gujarat,3940105', 'wedding.jpg', 1, 87, '2021-12-24 09:24:14', '2021-12-28 09:23:55', NULL),
(247, 'સગાઈ', '2022-02-12', '10:30:00', 'AM', NULL, 'સિક્સ સેંસેસ ફોર્ટ બરવાર ચૌથ કે બરવાર રાજસ્થાન ૩૨૨૭૦૨,રાજસ્થાન,રાજસ્થાન,322702', 'engage.jpg', 1, 88, '2021-12-25 03:35:49', '2021-12-25 04:02:15', NULL),
(248, 'વિનાયક સ્થાપના', '2022-02-13', '09:30:00', 'AM', NULL, 'સિક્સ સેંસેસ ફોર્ટ બરવાર ચૌથ કે બરવાર રાજસ્થાન ૩૨૨૭૦૨,રાજસ્થાન,રાજસ્થાન,322702', 'ganesha.jpg', 2, 88, '2021-12-25 03:35:49', '2021-12-25 04:11:40', NULL),
(249, 'મહેંદી', '2022-02-13', '15:00:00', 'PM', NULL, 'સિક્સ સેંસેસ ફોર્ટ બરવાર ચૌથ કે બરવાર રાજસ્થાન ૩૨૨૭૦૨,રાજસ્થાન,રાજસ્થાન,322702', 'mehndi.jpg', 3, 88, '2021-12-25 03:35:49', '2021-12-25 04:12:33', NULL),
(250, 'હલ્દી', '2022-02-13', '21:30:00', 'PM', NULL, 'સિક્સ સેંસેસ ફોર્ટ બરવાર ચૌથ કે બરવાર રાજસ્થાન ૩૨૨૭૦૨,રાજસ્થાન,રાજસ્થાન,322702', 'haldi.jpg', 4, 88, '2021-12-25 03:35:49', '2021-12-25 04:14:14', NULL),
(251, 'હાથ ધન', '2022-02-14', '09:30:00', 'AM', NULL, 'સિક્સ સેંસેસ ફોર્ટ બરવાર ચૌથ કે બરવાર રાજસ્થાન ૩૨૨૭૦૨,રાજસ્થાન,રાજસ્થાન,322702', 'hath-dhan.jpg', 5, 88, '2021-12-25 03:35:49', '2021-12-25 04:14:00', NULL),
(252, 'માયરા', '2022-02-14', '10:00:00', 'AM', NULL, 'સિક્સ સેંસેસ ફોર્ટ બરવાર ચૌથ કે બરવાર રાજસ્થાન ૩૨૨૭૦૨,રાજસ્થાન,રાજસ્થાન,322702', 'mayra.jpg', 6, 88, '2021-12-25 03:35:49', '2021-12-25 04:14:56', NULL),
(253, 'સંગીત', '2022-02-14', '11:30:00', 'AM', NULL, 'સિક્સ સેંસેસ ફોર્ટ બરવાર ચૌથ કે બરવાર રાજસ્થાન ૩૨૨૭૦૨,રાજસ્થાન,રાજસ્થાન,322702', 'sangit.jpg', 7, 88, '2021-12-25 03:35:49', '2021-12-25 04:15:33', NULL),
(254, 'દાંડિયા રાસ', '2022-02-14', '16:00:00', 'PM', NULL, 'સિક્સ સેંસેસ ફોર્ટ બરવાર ચૌથ કે બરવાર રાજસ્થાન ૩૨૨૭૦૨,રાજસ્થાન,રાજસ્થાન,322702', 'dandiya-ras.jpg', 8, 88, '2021-12-25 03:35:49', '2021-12-25 04:16:04', NULL),
(255, 'લગ્ન સમારોહ', '2022-02-14', '19:30:00', 'PM', NULL, 'સિક્સ સેંસેસ ફોર્ટ બરવાર ચૌથ કે બરવાર રાજસ્થાન ૩૨૨૭૦૨,રાજસ્થાન,રાજસ્થાન,322702', 'wedding.jpg', 9, 88, '2021-12-25 03:35:49', '2021-12-25 04:16:39', NULL),
(256, 'સ્વાગત', '2022-02-15', '19:30:00', 'PM', NULL, 'સિક્સ સેંસેસ ફોર્ટ બરવાર ચૌથ કે બરવાર રાજસ્થાન ૩૨૨૭૦૨,રાજસ્થાન,રાજસ્થાન,322702', 'reception.jpg', 10, 88, '2021-12-25 03:35:49', '2021-12-25 04:17:21', NULL);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$dg1moDSeepcEpCyzWOl0ZOzwxHZSBZWTPx60kSLxnmgW.1ZEZcTIS', NULL, 'Superadmin', '2021-12-13 10:00:11', '2021-12-13 10:00:11', NULL),
(4, 'Dilip Kheni', 'kheni1001@gmail.com', NULL, '$2y$10$8uOPBfxnqFQQRa9O7xBLBuB.WpOFkCVsdM4GARk8YPR/uqXXuIOaS', NULL, 'Admin', '2021-12-15 11:45:37', '2021-12-15 11:45:37', NULL),
(9, 'Akash Gajera', 'gajeraakash8@gmail.com', NULL, '$2y$10$.PrUrGgK8cJSIgWGvxF1CutYnCTYnscN3mu7yG9tK.bh4XcUB8aza', NULL, 'Admin', '2021-12-22 12:50:01', '2021-12-22 12:50:01', NULL),
(10, 'Discussionforall', 'discussionforall@gmail.com', NULL, '$2y$10$msJpF1TfNo2U2efe5rQj4uRi4Vst5P6mhU1/bA6W7vUTR6pGYvRs2', NULL, 'Admin', '2021-12-23 05:15:37', '2021-12-23 05:15:37', NULL),
(11, 'Keval Hirapara', 'kevitheindian@gmail.com', NULL, '$2y$10$dY/hTPZ5Ti1Fs5QjogR6xOHA2vCy8QIbBcMCB2Q/t0wYK.yObv2bi', NULL, 'Admin', '2021-12-23 05:21:37', '2021-12-23 05:21:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `video_galleries`
--

CREATE TABLE `video_galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wedding_id` int NOT NULL,
  `sort` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video_galleries`
--

INSERT INTO `video_galleries` (`id`, `link`, `wedding_id`, `sort`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'https://www.youtube.com/embed/-nZDtvVICT0', 4, 0, '2021-12-13 12:21:20', '2021-12-13 12:21:20', NULL),
(3, 'https://www.youtube.com/embed/ySjscqSIrO4', 4, 0, '2021-12-13 12:21:34', '2021-12-13 12:21:34', NULL),
(4, 'https://www.youtube.com/embed/pisAiWTnU6s', 4, 0, '2021-12-13 12:21:42', '2021-12-13 12:22:45', '2021-12-13 12:22:45'),
(5, 'https://www.youtube.com/embed/eR49GCErN3w', 4, 0, '2021-12-13 12:21:52', '2021-12-13 12:21:52', NULL),
(6, 'https://www.youtube.com/embed/8h29dkazulc', 4, 0, '2021-12-13 12:22:01', '2021-12-13 12:22:01', NULL),
(15, 'https://www.youtube.com/embed/JNKZN8uq1H8', 74, 0, '2021-12-23 10:08:15', '2021-12-23 10:08:15', NULL),
(16, 'https://www.youtube.com/embed/8tAlxMlNWUQ', 74, 0, '2021-12-23 10:09:54', '2021-12-23 10:09:54', NULL),
(17, 'https://www.youtube.com/embed/8h29dkazulc', 88, 0, '2021-12-25 04:36:32', '2021-12-25 04:36:32', NULL),
(18, 'https://www.youtube.com/embed/eR49GCErN3w', 88, 0, '2021-12-25 04:37:00', '2021-12-25 04:37:00', NULL),
(19, 'https://www.youtube.com/embed/4lCLyPn2nYM', 88, 0, '2021-12-25 04:37:41', '2021-12-25 04:37:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `weddings`
--

CREATE TABLE `weddings` (
  `id` bigint UNSIGNED NOT NULL,
  `boy_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `boy_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `boy_instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `boy_facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `boy_twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `boy_pinterest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `girl_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `girl_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `girl_instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `girl_facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `girl_twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `girl_pinterest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wedding_date` date NOT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invited_by_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invited_by_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invited_by_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `random_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int NOT NULL,
  `audio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `weddings`
--

INSERT INTO `weddings` (`id`, `boy_name`, `boy_image`, `boy_instagram`, `boy_facebook`, `boy_twitter`, `boy_pinterest`, `girl_name`, `girl_image`, `girl_instagram`, `girl_facebook`, `girl_twitter`, `girl_pinterest`, `wedding_date`, `banner_image`, `invited_by_name`, `invited_by_address`, `country_code`, `invited_by_phone`, `uuid`, `random_number`, `user_id`, `audio`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'Vicky', '61c2fb4587213.png', 'https://www.instagram.com/vickykaushal09/?hl=en', 'Bhaveshhttps://www.facebook.com/VickyKaushalOfficial', 'https://twitter.com/vickykaushal09?lang=en', 'https://in.pinterest.com/rutabarve/vicky-kaushal/', 'katrina', '61c2fb4587a90.png', 'https://www.instagram.com/katrinakaif/?hl=en', 'https://www.facebook.com/KatrinaKaif', 'https://twitter.com/hashtag/katrinakaif?lang=en', 'https://in.pinterest.com/vaidyanikhil22359/katrina-kaif/', '2022-02-14', '61c2fb4587e5c_61b996ebc1ba5_vicky-kaushal-katrina-kaif-wedding-1200-1.jpg', 'Vicky Kaushal,Katrina Kaif', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702', '91', '9876543210,9852367410', 'Vicky-Weds-Katrina', '906702081978685', 3, '61c2fcb4eb4cd_Jug Jug Jeeve - Shiddat.mp3', '2021-12-13 10:53:31', '2021-12-22 10:23:48', NULL),
(67, 'Vicky', '61c31a7f7bda4.png', 'https://www.instagram.com/vickykaushal09/?hl=en', 'Bhaveshhttps://www.facebook.com/VickyKaushalOfficial', 'https://twitter.com/vickykaushal09?lang=en', 'https://in.pinterest.com/rutabarve/vicky-kaushal/', 'katrina', '61c2fd65514b6.png', 'https://www.instagram.com/katrinakaif/?hl=en', 'https://www.facebook.com/KatrinaKaif', 'https://twitter.com/hashtag/katrinakaif?lang=en', 'https://in.pinterest.com/vaidyanikhil22359/katrina-kaif/', '2022-02-14', '61c58f4cd1ca8_61c4052d033b2_1531373783toys-wallpaper-hd-16339-17046-hd-wallpapers.jpg', 'Vicky Kaushal,Katrina Kaif', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702', '91', '9876543210,9852367410', 'Vicky-Weds-Katrina', '555748091296485', 3, '61c2fecb7828c_Soch Liya Radhe Shyam Hindi 2021 320 Kbps.mp3', '2021-12-22 10:26:08', '2021-12-24 09:13:48', NULL),
(68, 'Abc', '61c309b968cf2.png', 'https://www.instagram.com/vickykaushal09/?hl=en', NULL, 'https://twitter.com/vickykaushal09?lang=en', 'https://in.pinterest.com/rutabarve/vicky-kaushal/', 'Xyz', '61c309b969442.png', 'https://www.instagram.com/katrinakaif/?hl=en', 'https://www.facebook.com/KatrinaKaif', 'https://twitter.com/hashtag/katrinakaif?lang=en', NULL, '2022-02-14', '61c4052d033b2_1531373783toys-wallpaper-hd-16339-17046-hd-wallpapers.jpg', 'Vicky Kaushal,Katrina Kaif', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702', '91', '9876543210,9852367410', 'Abc-Weds-Xyz', '180146015035289', 3, '61c4052d039ee_Ellie Goulding - Love Me Like You Do (Official Video).mp3', '2021-12-22 11:18:45', '2021-12-23 05:12:13', NULL),
(69, 'test', '61c30b69eeaac.png', NULL, NULL, NULL, NULL, 'test', '61c30b69ef182.png', NULL, NULL, NULL, NULL, '2021-12-23', '61c30b69ef2fb_61b996ebc1ba5_vicky-kaushal-katrina-kaif-wedding-1200-1.jpg', NULL, 'fdgfgdfg', '375', NULL, 'Test-Weds-Test', '461687467207530', 1, '', '2021-12-22 11:26:33', '2021-12-22 11:58:13', '2021-12-22 11:58:13'),
(70, 'test', '61c30c6d137c8.png', NULL, NULL, NULL, NULL, 'test', '61c30c6d13c57.png', NULL, NULL, NULL, NULL, '2021-12-24', '61c30c6d13d7a_61b996ebc1ba5_vicky-kaushal-katrina-kaif-wedding-1200-1.jpg', 'hgfhf,hfghfg', 'ghfghgfhhgfhfgh', '501', 'hfghfgh,hfghfghfg', 'Test-Weds-Test', '878183418275672', 1, '', '2021-12-22 11:30:53', '2021-12-22 11:32:37', '2021-12-22 11:32:37'),
(71, 'test', '61c30fe283ebd.png', NULL, NULL, NULL, NULL, 'Joshua', '61c30fe2843de.png', NULL, NULL, NULL, NULL, '2021-12-22', '61c30fe284544_61b996ebc1ba5_vicky-kaushal-katrina-kaif-wedding-1200-1.jpg', 'fdsf', 'fdsfdsf', '375', NULL, 'Test-Weds-Joshua', '845091669002529', 1, '', '2021-12-22 11:45:38', '2021-12-22 11:58:19', '2021-12-22 11:58:19'),
(72, 'India', '61c3101e5ce77.png', NULL, NULL, NULL, NULL, 'gdfgdfg', '61c3101e5d25e.png', NULL, NULL, NULL, NULL, '2021-12-22', '61c3101e5d36f_61b996ebc1ba5_vicky-kaushal-katrina-kaif-wedding-1200-1.jpg', NULL, 'surat', '973', NULL, 'India-Weds-Gdfgdfg', '577180094540010', 1, '', '2021-12-22 11:46:38', '2021-12-22 11:58:22', '2021-12-22 11:58:22'),
(73, 'India', '61c312589e018.png', NULL, NULL, NULL, NULL, 'riya', '61c312589e5b9.png', NULL, NULL, NULL, NULL, '2021-12-24', '61c312589e72d_61b996ebc1ba5_vicky-kaushal-katrina-kaif-wedding-1200-1.jpg', NULL, 'surat', '229', NULL, 'India-Weds-Riya', '223368005904469', 1, '', '2021-12-22 11:56:08', '2021-12-22 11:58:25', '2021-12-22 11:58:25'),
(74, 'Virat', '61c40343e4ad5.png', NULL, NULL, NULL, NULL, 'Anushka', '61c40343e500e.png', NULL, NULL, NULL, NULL, '2021-12-26', '61c45e515ee64_Virat Kohli and Anushka Sharma wedding.jpg', 'Virat,Anushka', 'Delhi', '91', '1234567890,22256', 'Virat-Weds-Anushka', '232700265908513', 1, '61c41a96bd27d_Jug Jug Jeeve - Shiddat.mp3', '2021-12-23 05:04:03', '2021-12-24 05:29:06', NULL),
(75, 'dfdsfdssdf', '61c4680fa37d9.png', NULL, NULL, NULL, NULL, 'fdsf', '61c4680fa3fcf.png', NULL, NULL, NULL, NULL, '2021-12-24', '61c4680fa4168_0732-anushka-sharma-karnesh-sharma.jpg', 'fdsf', 'fdsfds', '375', NULL, 'Dfdsfdssdf-Weds-Fdsf', '693647703013807', 1, '', '2021-12-23 12:14:07', '2021-12-23 12:14:15', '2021-12-23 12:14:15'),
(76, 'test', '61c545e79a359.png', NULL, NULL, NULL, NULL, 'Joshua', '61c545e79a9c1.png', NULL, NULL, NULL, NULL, '2021-12-25', '61c545e79ab01_0732-anushka-sharma-karnesh-sharma.jpg', NULL, 'bvbvb', '32', NULL, 'Test-Weds-Joshua', '961905437599359', 1, '', '2021-12-24 04:00:39', '2021-12-24 04:01:42', '2021-12-24 04:01:42'),
(77, 'bbvb', '61c54641c738f.png', NULL, NULL, NULL, NULL, 'bvbvcb', '61c54641c786e.png', NULL, NULL, NULL, NULL, '2021-12-26', '61c54641c79ae_59876337_122938115567614_6235992488061023508_n.jpg', NULL, 'vbvb', '229', NULL, 'Bbvb-Weds-Bvbvcb', '512278227124925', 1, '', '2021-12-24 04:02:09', '2021-12-24 04:02:46', '2021-12-24 04:02:46'),
(78, 'India', '61c554436cbe9.png', NULL, NULL, NULL, NULL, 'Chandni', '61c554436d0d3.png', NULL, NULL, NULL, NULL, '2021-12-25', '61c554436d1fa_59876337_122938115567614_6235992488061023508_n.jpg', NULL, 'surat', '375', NULL, 'India-Weds-Chandni', '845700154196632', 1, '', '2021-12-24 05:01:55', '2021-12-24 05:29:40', '2021-12-24 05:29:40'),
(79, 'fdf', '61c557065c911.png', NULL, NULL, NULL, NULL, 'fdf', '61c557065cffb.png', NULL, NULL, NULL, NULL, '2021-12-25', '61c557065d17a_59876337_122938115567614_6235992488061023508_n.jpg', NULL, 'fdf', '501', NULL, 'Fdf-Weds-Fdf', '197755539684651', 1, '', '2021-12-24 05:13:42', '2021-12-24 05:14:48', '2021-12-24 05:14:48'),
(80, 'gfgfg', '61c55c1ec640a.png', NULL, NULL, NULL, NULL, 'cvbc', '61c55c1ec6afb.png', NULL, NULL, NULL, NULL, '2021-12-26', '61c55c1ec6c63_0732-anushka-sharma-karnesh-sharma.jpg', NULL, 'bvbvb', '501', NULL, 'Gfgfg-Weds-Cvbc', '418703298664834', 1, '', '2021-12-24 05:35:26', '2021-12-24 05:35:34', '2021-12-24 05:35:34'),
(81, 'India', '61c568a0b0307.png', NULL, NULL, NULL, NULL, 'Joshua', '61c568a0b0816.png', NULL, NULL, NULL, NULL, '2021-12-25', '61c568a0b0947_0732-anushka-sharma-karnesh-sharma.jpg', 'jghjhgj', 'surat', '375', 'jhj', 'India-Weds-Joshua', '247363668661699', 1, '', '2021-12-24 06:28:48', '2021-12-24 06:29:01', '2021-12-24 06:29:01'),
(82, 'India', '61c569902dc99.png', NULL, NULL, NULL, NULL, 'hghfgh', '61c569902e18a.png', NULL, NULL, NULL, NULL, '2021-12-25', '61c569902e2bc_0732-anushka-sharma-karnesh-sharma.jpg', 'hfgg', 'surat', '1246', 'hghgf', 'India-Weds-Hghfgh', '425097514490574', 1, '', '2021-12-24 06:32:48', '2021-12-24 06:35:11', '2021-12-24 06:35:11'),
(83, 'India', '61c56a48a17ab.png', NULL, NULL, NULL, NULL, 'Chandni', '61c56a48a1c54.png', NULL, NULL, NULL, NULL, '2021-12-26', '61c56a48a1d86_0732-anushka-sharma-karnesh-sharma.jpg', 'gfgdfg', 'surat', '973', 'gfgdfg,gdfgdfg', 'India-Weds-Chandni', '989279936892167', 1, '', '2021-12-24 06:35:52', '2021-12-24 06:36:12', '2021-12-24 06:36:12'),
(84, 'India', '61c56b52863f3.png', NULL, NULL, NULL, NULL, 'Chandni', '61c56b5286921.png', NULL, NULL, NULL, NULL, '2021-12-26', '61c56b5286a32_59876337_122938115567614_6235992488061023508_n.jpg', 'fdf,hhfg', 'surat', '1246', '5554,45454,656546546', 'India-Weds-Chandni', '496283226406123', 1, '', '2021-12-24 06:40:18', '2021-12-24 06:41:40', '2021-12-24 06:41:40'),
(85, 'gfgdfg', '61c56f081be42.png', NULL, NULL, NULL, NULL, 'Joshua', '61c56f081c54a.png', NULL, NULL, NULL, NULL, '2021-12-25', '61c56f081c6a9_1513058323-566.jpg', 'bf', 'bvb', '880', 'bbv', 'Gfgdfg-Weds-Joshua', '740350179028458', 1, '', '2021-12-24 06:56:08', '2021-12-24 06:56:16', '2021-12-24 06:56:16'),
(86, 'India', '61c570ae282a2.png', NULL, NULL, NULL, NULL, 'ggf', '61c570ae2896c.png', NULL, NULL, NULL, NULL, '2021-12-25', '61c570ae28ad8_975662-anushkasharma-mother-actor-fengshui.jpg', 'gfg', 'surat', '501', 'gfdgf', 'India-Weds-Ggf', '120329443298716', 1, '', '2021-12-24 07:03:10', '2021-12-24 07:03:14', '2021-12-24 07:03:14'),
(87, 'Abc1', '61c59279731d3.png', 'https://www.instagram.com/vickykaushal09/?hl=en', NULL, 'https://twitter.com/vickykaushal09?lang=en', 'https://in.pinterest.com/rutabarve/vicky-kaushal/', 'Xyz1', '61c5927973ba5.png', 'https://www.instagram.com/katrinakaif/?hl=en', 'https://www.facebook.com/KatrinaKaif', 'https://twitter.com/hashtag/katrinakaif?lang=en', NULL, '2022-02-14', 'banner_61c4052d033b2_1531373783toys-wallpaper-hd-16339-17046-hd-wallpapers.jpg', 'Vicky Kaushal,Katrina Kaif', 'Six Senses Fort Barwara, Chauth Ka Barwara, Rajasthan 322702', '91', '9876543210,9852367410', 'Abc1-Weds-Xyz1', '903274241320963', 3, 'audio_61c4052d039ee_Ellie Goulding - Love Me Like You Do (Official Video).mp3', '2021-12-24 09:24:14', '2021-12-24 09:27:54', NULL),
(88, 'વિકી', '61c692d99134b.png', 'https://www.instagram.com/vickykaushal09/?hl=en', 'Bhaveshhttps://www.facebook.com/VickyKaushalOfficial', 'https://twitter.com/vickykaushal09?lang=en', 'https://in.pinterest.com/rutabarve/vicky-kaushal/', 'કેટરિના', '61c692d991c07.png', 'https://www.instagram.com/katrinakaif/?hl=en', 'https://www.facebook.com/KatrinaKaif', 'https://twitter.com/hashtag/katrinakaif?lang=en', 'https://in.pinterest.com/vaidyanikhil22359/katrina-kaif/', '2022-02-17', 'banner_61c2fb4587e5c_61b996ebc1ba5_vicky-kaushal-katrina-kaif-wedding-1200-1.jpg', 'વિકી કૌશલ,કેટરીના કૈફ', 'સિક્સ સેંસેસ ફોર્ટ બરવાર, ચૌથ કે બરવાર, રાજસ્થાન ૩૨૨૭૦૨', '91', '૯૮૭૬૫૪૩૨૧૦,૯૮૫૨૩૬૭૪૧૦', 'વિકી-Weds-કેટરિના', '810292464852340', 3, 'audio_61c2fcb4eb4cd_Jug Jug Jeeve - Shiddat.mp3', '2021-12-25 03:35:49', '2021-12-27 07:27:05', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boy_family_details`
--
ALTER TABLE `boy_family_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `girl_family_details`
--
ALTER TABLE `girl_family_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `occasions`
--
ALTER TABLE `occasions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video_galleries`
--
ALTER TABLE `video_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weddings`
--
ALTER TABLE `weddings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boy_family_details`
--
ALTER TABLE `boy_family_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `girl_family_details`
--
ALTER TABLE `girl_family_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `occasions`
--
ALTER TABLE `occasions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=257;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `video_galleries`
--
ALTER TABLE `video_galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `weddings`
--
ALTER TABLE `weddings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
