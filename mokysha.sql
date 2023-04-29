-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2023 at 07:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mokysha`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$163vkGFvNIHRMofvqOAzSupCREHiI2qBH6LuJS0zbgOXhwC1v2SCi', NULL, '2020-09-16 03:15:20', '2020-09-16 03:15:20');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text DEFAULT NULL,
  `page_status` enum('1','0') NOT NULL,
  `blog_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `apply_for` varchar(200) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL,
  `job_id` varchar(5000) DEFAULT NULL,
  `message` varchar(2000) DEFAULT NULL,
  `file` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `number`, `email`, `apply_for`, `country`, `job_id`, `message`, `file`, `created_at`, `updated_at`) VALUES
(17, 'devraj', '9829936530', 'devraj.sah13@gmail.com', 'ab.vom', NULL, NULL, 'Hi testing this page', NULL, '2023-04-27 11:08:49', '2023-04-27 11:08:49');

-- --------------------------------------------------------

--
-- Table structure for table `dates`
--

CREATE TABLE `dates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date_yrs_month` varchar(255) DEFAULT NULL,
  `navigation_id` int(255) DEFAULT NULL,
  `nav_category` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dates`
--

INSERT INTO `dates` (`id`, `date_yrs_month`, `navigation_id`, `nav_category`, `created_at`, `updated_at`) VALUES
(140, '2019-06', NULL, 'Home', '2022-12-18 17:53:20', '2022-12-18 17:53:20'),
(141, '2019-07', NULL, 'Home', '2022-12-18 18:01:33', '2022-12-18 18:01:33'),
(142, '2019-08', NULL, 'Home', '2022-12-18 18:08:26', '2022-12-18 18:08:26'),
(143, '2019-09', NULL, 'Home', '2022-12-18 18:12:54', '2022-12-18 18:12:54'),
(144, '2020-09', NULL, 'Home', '2022-12-18 18:18:39', '2022-12-18 18:18:39'),
(145, '2020-01', NULL, 'Home', '2022-12-18 18:23:44', '2022-12-18 18:23:44'),
(147, '2020-03', NULL, 'Home', '2022-12-18 18:29:37', '2022-12-18 18:29:37'),
(148, '2020-04', NULL, 'Home', '2022-12-18 18:32:25', '2022-12-18 18:32:25'),
(149, '2020-05', NULL, 'Home', '2022-12-18 18:36:02', '2022-12-18 18:36:02'),
(150, '2020-06', NULL, 'Home', '2022-12-18 18:39:07', '2022-12-18 18:39:07'),
(151, '2020-11', NULL, 'Home', '2022-12-18 18:42:08', '2022-12-18 18:42:08'),
(152, '2020-12', NULL, 'Home', '2022-12-18 20:48:11', '2022-12-18 20:48:11'),
(181, '2023-04', NULL, 'Main', '2023-04-15 08:01:07', '2023-04-15 08:01:07'),
(182, '2023-08', NULL, 'Main', '2023-04-15 08:19:08', '2023-04-15 08:19:08'),
(184, '2022-12', NULL, 'Main', '2023-04-17 13:48:06', '2023-04-17 13:48:06'),
(186, NULL, NULL, 'Home', '2023-04-27 13:40:31', '2023-04-27 13:40:31');

-- --------------------------------------------------------

--
-- Table structure for table `global_settings`
--

CREATE TABLE `global_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) NOT NULL,
  `site_nepali_name` varchar(255) DEFAULT NULL,
  `site_email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `phone_ne` varchar(255) DEFAULT NULL,
  `website_full_address` varchar(255) DEFAULT NULL,
  `address_ne` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `other` int(255) DEFAULT NULL,
  `instagram` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `page_keyword` varchar(1000) DEFAULT NULL,
  `page_description` text DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `site_logo` varchar(255) NOT NULL,
  `site_logo_nepali` varchar(255) DEFAULT NULL,
  `site_status` enum('1','0') NOT NULL,
  `extra_one` varchar(255) DEFAULT NULL,
  `extra_two` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `global_settings`
--

INSERT INTO `global_settings` (`id`, `site_name`, `site_nepali_name`, `site_email`, `phone`, `phone_ne`, `website_full_address`, `address_ne`, `facebook`, `twitter`, `linkedin`, `other`, `instagram`, `youtube`, `page_title`, `page_keyword`, `page_description`, `favicon`, `site_logo`, `site_logo_nepali`, `site_status`, `extra_one`, `extra_two`, `created_at`, `updated_at`) VALUES
(1, 'Mokysha Infotech', NULL, 'Info@mokshyainfotech.com', '(+977)015408814, (+977) 01 5437508', '(+977)015408814', 'New-baneshwor, Sankhamul, Nepal', 'New-baneshwor, Sankhamul, Nepal', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', NULL, 'https://www.instagram.com/', 'https://www.instagram.com/', 'Mokysha Infotech', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5941.999526998369!2d85.32864122358089!3d27.68225124553272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19c0dadf0eb1%3A0xeea684375c343e0e!2sSankhamul%20Bridge%2C%2044600!5e0!3m2!1sen!2snp!4v1681126326653!5m2!1sen!2snp\" width=\"100%\" height=\"210\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Mokysha Infotech', '1681126514_main.png', '1681126754_white.png', '1681126754_color.png', '1', '', '', '2020-09-16 03:15:20', '2023-04-27 11:04:18');

-- --------------------------------------------------------

--
-- Table structure for table `home_dates`
--

CREATE TABLE `home_dates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `home_date_yrs_month` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(100) NOT NULL,
  `company_name` varchar(55) DEFAULT NULL,
  `salary` longtext DEFAULT NULL,
  `institute` longtext DEFAULT NULL,
  `no_of_recruits` varchar(10000) DEFAULT NULL,
  `no_working_hr` longtext DEFAULT NULL,
  `country` longtext DEFAULT NULL,
  `contract_time` longtext DEFAULT NULL,
  `navigation_id` bigint(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(3, '2020_08_06_040112_create_admins_table', 1),
(4, '2020_08_06_040148_create_navigations_table', 1),
(5, '2020_08_06_040229_create_navigation_items_table', 1),
(6, '2020_08_06_040251_create_page_types', 1),
(7, '2020_08_06_040325_create_subscribers_table', 1),
(8, '2020_08_06_040351_create_global_settings_table', 1),
(9, '2020_08_06_040430_create_navigation_video_items_table', 1),
(10, '2020_08_06_040522_create_comments_table', 1),
(11, '2022_07_12_231308_create_jobs_table', 2),
(13, '2022_12_01_103238_create_dates_table', 3),
(14, '2022_12_02_111230_create_home_dates_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `navigations`
--

CREATE TABLE `navigations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nav_name` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `caption_nepali` varchar(255) DEFAULT NULL,
  `nav_category` varchar(255) NOT NULL,
  `page_type` varchar(255) NOT NULL,
  `page_template` varchar(255) DEFAULT NULL,
  `position` int(11) NOT NULL,
  `short_content` text DEFAULT NULL,
  `short_content_nepali` text DEFAULT NULL,
  `long_content` text DEFAULT NULL,
  `long_content_nepali` text DEFAULT NULL,
  `parent_page_id` int(11) NOT NULL,
  `icon_image` varchar(255) DEFAULT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `icon_image_caption` varchar(1000) DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `main_attachment` varchar(255) DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `page_keyword` date DEFAULT NULL,
  `page_description` varchar(255) DEFAULT NULL,
  `page_status` enum('1','0') NOT NULL,
  `nav_status` enum('1','0') NOT NULL,
  `extra_one` varchar(255) DEFAULT NULL,
  `extra_two` varchar(255) DEFAULT NULL,
  `extra_three` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navigations`
--

INSERT INTO `navigations` (`id`, `nav_name`, `alias`, `caption`, `caption_nepali`, `nav_category`, `page_type`, `page_template`, `position`, `short_content`, `short_content_nepali`, `long_content`, `long_content_nepali`, `parent_page_id`, `icon_image`, `featured_image`, `icon_image_caption`, `banner_image`, `link`, `main_attachment`, `attachment`, `page_title`, `page_keyword`, `page_description`, `page_status`, `nav_status`, `extra_one`, `extra_two`, `extra_three`, `created_at`, `updated_at`) VALUES
(2608, 'home-mission', 'homemission', 'Mokysha’s Mission & Vision', NULL, 'Home', 'Photo Gallery', NULL, 1, '“It is only when they go wrong that machines remind you how powerful they are.”', NULL, 'Mokysha Co is the partner of choice for many of the world’s leading enterprises, SMEs and technology challengers. We help businesses elevate their value through custom software development, product design, QA and consultancy services.<br />\r\nMokysha specializes in technological and IT-related services such as product engineering, warranty management, building cloud, etc.', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2022-11-30 05:51:37', '2023-04-27 12:54:13'),
(2611, 'mokysha-technology', 'mokyshatechnology', 'Mokysha Technology', NULL, 'Home', 'Normal', NULL, 3, 'Our team can assist you in transforming your business through latest tech capabilities to stay ahead of the curve.', NULL, '<ul>\r\n	<li><i class=\"bi bi-star-fill me-3\"></i> Latest IT Solutions &amp; Integration With Blockchain</li>\r\n	<li><i class=\"bi bi-star-fill me-3\"></i> Over 100+ Payment Gateways Support</li>\r\n	<li><i class=\"bi bi-star-fill me-3\"></i> AI Machine &amp; Deep Learning</li>\r\n	<li><i class=\"bi bi-star-fill me-3\"></i> Dedicated Support 24/7</li>\r\n</ul>', NULL, 0, NULL, NULL, NULL, '/uploads/banner_image/1682600878_style_3_2.png', NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2022-11-30 05:57:37', '2023-04-27 13:07:58'),
(2613, 'services', 'services', 'Services', NULL, 'Main', 'Service Menu', NULL, 2, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2022-11-30 06:11:03', '2023-04-26 10:31:07'),
(2624, 'about-us', 'aboutus', 'About us', NULL, 'Main', 'About Menu', NULL, 1, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2022-12-01 05:14:47', '2023-04-17 13:40:57'),
(2625, 'About-Mokysha', 'aboutmokysha', 'About Mokysha', NULL, 'Main', 'Group', NULL, 1, 'Work For Your', NULL, 'Incredible Success', NULL, 2624, NULL, NULL, NULL, '/uploads/banner_image/1681381485_banner.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2022-12-01 05:15:52', '2023-04-13 10:24:54'),
(2626, 'mission', 'mission', 'Our Mission', NULL, 'Main', 'Normal', NULL, 1, 'The uploading and updating processes made by suppliers can be streamlined through front-end dashboards that create better ease of access.', NULL, NULL, NULL, 2625, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2022-12-01 05:16:32', '2023-04-15 07:30:46'),
(2627, 'vision', 'vision', 'Our Vision', NULL, 'Main', 'Normal', NULL, 2, '<p>To be the leading IT company that transforms the way businesses operate through cutting-edge technologies and exceptional customer service.</p>', NULL, NULL, NULL, 2625, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2022-12-01 05:20:53', '2023-04-13 10:28:57'),
(2632, 'career', 'career', 'Careers', NULL, 'Main', 'Carrers Menu', NULL, 6, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-12', NULL, NULL, '1', '0', NULL, NULL, NULL, '2022-12-01 06:06:57', '2023-04-22 05:48:18'),
(2669, 'blogs', 'blogs', 'Blogs', NULL, 'Main', 'Blog Menu', NULL, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-12', NULL, NULL, '1', '0', NULL, NULL, NULL, '2022-12-06 08:55:36', '2023-04-17 13:48:06'),
(2773, 'goal', 'goal', 'Our Goal', NULL, 'Main', 'Normal', NULL, 3, '<ol>\r\n	<li>\r\n	<p>Deliver exceptional customer service: Our primary goal is to provide the best customer experience possible by understanding our clients\' needs and providing them with innovative solutions that exceed their expectations.</p>\r\n	</li>\r\n	<li>\r\n	<p>Develop innovative IT solutions: We are committed to staying at the forefront of the rapidly evolving IT landscape and developing cutting-edge solutions that help our clients achieve their goals.</p>\r\n	</li>\r\n	<li>\r\n	<p>Foster a culture of continuous learning: We believe that our employees are our greatest asset, and we are dedicated to providing them with opportunities for growth and development.</p>\r\n	</li>\r\n	<li>\r\n	<p>Build strong partnerships: We strive to establish strong, long-lasting partnerships with our clients, suppliers, and other stakeholders, based on trust, transparency, and mutual benefit.</p>\r\n	</li>\r\n	<li>\r\n	<p>Promote ethical and sustainable business practices: We are committed to conducting our business in a socially responsible and sustainable manner, and to promoting ethical business practices in all our operations.</p>\r\n	</li>\r\n</ol>', NULL, NULL, NULL, 2625, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2022-12-09 20:09:17', '2023-04-13 10:29:32'),
(2991, 'team', 'team', 'Meet Our Amazing Team', NULL, 'Home', 'Group', NULL, 4, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2022-12-18 17:36:31', '2023-04-27 13:40:55'),
(3094, 'contact', 'contact', 'Contact Us', NULL, 'Main', 'Group', NULL, 14, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-12 13:51:26', '2023-04-12 13:52:22'),
(3095, 'testimonial', 'testimonial', 'Testimonial', NULL, 'Home', 'Group', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-12 14:11:34', '2023-04-13 08:56:59'),
(3096, 'robert-downey-jr', 'robertdowneyjr', 'Robert Downey Jr', NULL, 'Home', 'Normal', NULL, 1, 'Technical Leader at Airbnb', NULL, '\"We encountered a problem with processing big data and after only 1 week,&nbsp;all fixed, professional, fast &amp; affordable prices !\"', NULL, 3095, NULL, NULL, NULL, '/uploads/banner_image/1681309054_testimonial-1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-12 14:17:34', '2023-04-13 09:12:51'),
(3097, 'conor-mcgregor', 'conormcgregor', 'Conor McGregor', NULL, 'Home', 'Normal', NULL, 2, 'CTO at IBM', NULL, '\"Mokysha is 1st our choice for cloud service methods. Extremely security and&nbsp;fast support.\"', NULL, 3095, NULL, NULL, NULL, '/uploads/banner_image/1681309144_testimonial-2.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-12 14:19:04', '2023-04-13 09:13:35'),
(3098, 'lucas-digne', 'lucasdigne', 'Lucas Digne', NULL, 'Home', 'Normal', NULL, 3, 'Product Management at Invisionapp', NULL, '\"Mokysha’s Experts really is amazing! high speciality, professional and&nbsp;friendly. Our profit increased so much. Really very satisfied!\"', NULL, 3095, NULL, NULL, NULL, '/uploads/banner_image/1681309210_testimonial-4.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-12 14:20:10', '2023-04-13 09:13:48'),
(3099, 'journey', 'journey', 'Journey-Part', NULL, 'Main', 'Group', NULL, 2, 'More than 15,000 companies trust and choose Mokysha', NULL, NULL, NULL, 2624, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-14 10:47:31', '2023-04-17 12:13:34'),
(3100, 'built-new-team', 'builtnewteam', 'Built New Team', NULL, 'Main', 'Normal', NULL, 1, '2000', NULL, 'Sass which stands for \'Syntactically awesome style sheet is an extension of that enables you to use things like variables.', NULL, 3099, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-14 10:51:03', '2023-04-14 10:51:12'),
(3101, 'got-design-rewards', 'gotdesignrewards', 'Got Design Rewards', NULL, 'Main', 'Normal', NULL, 2, '2005', NULL, 'Sass which stands for \'Syntactically awesome style sheet is an extension of that enables you to use things like variables.', NULL, 3099, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-14 10:52:38', '2023-04-14 10:52:38'),
(3102, 'best-team-in-egypt', 'bestteaminegypt', 'Best Team In Egypt', NULL, 'Main', 'Normal', NULL, 3, '2015', NULL, 'Sass which stands for \'Syntactically awesome style sheet is an extension of that enables you to use things like variables.', NULL, 3099, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-14 10:53:31', '2023-04-14 10:53:31'),
(3103, 'design-rewards-in-NYC', 'designrewardsinnyc', 'Design Rewards In NYC', NULL, 'Main', 'Normal', NULL, 4, '2018', NULL, 'Sass which stands for \'Syntactically awesome style sheet is an extension of that enables you to use things like variables.', NULL, 3099, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-14 10:54:10', '2023-04-14 10:54:10'),
(3104, 'featured-on-envato', 'featuredonenvato', 'Featured On Envato', NULL, 'Main', 'Normal', NULL, 5, '2022', NULL, 'Sass which stands for \'Syntactically awesome style sheet is an extension of that enables you to use things like variables.', NULL, 3099, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-14 10:54:46', '2023-04-14 10:54:46'),
(3105, 'trusted -clients', 'trusted-clients', 'Trusted By Thousands', NULL, 'Main', 'Photo Gallery', NULL, 3, 'Business', NULL, 'More than <span class=\"color-blue5\"> 15,000 </span> Companies &amp; partners trusted &amp; choice Mokysha', NULL, 2624, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-15 07:15:41', '2023-04-17 12:37:17'),
(3106, 'about-gallery', 'aboutgallery', 'About Gallery', NULL, 'Main', 'Photo Gallery', NULL, 4, NULL, NULL, NULL, NULL, 2624, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-15 07:24:48', '2023-04-15 07:24:48'),
(3107, 'blog-slider', 'blogslider', 'Slider', NULL, 'Main', 'Group', NULL, 1, NULL, NULL, NULL, NULL, 2669, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-15 07:35:07', '2023-04-15 07:35:17'),
(3108, 'posts', 'posts', 'Blogs posts', NULL, 'Main', 'Group', NULL, 2, NULL, NULL, NULL, NULL, 2669, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-15 07:36:21', '2023-04-15 07:36:21'),
(3109, 'crypto-trend-2023', 'cryptotrend2023', 'Crypto Trend 2023', NULL, 'Main', 'blogs', NULL, 1, NULL, NULL, '<h4>To mark the first UK show of artist Henri Barande, developer&nbsp;<a href=\"#\">Moussa</a>&nbsp;and German studio Schultzschultz have created The Lodge Wooden at Berlin City</h4>\nToday most people get on average 4 to 6 hours of exercise every day, and make sure that everything they put in their mouths is not filled with sugars or preservatives, but they pay no attention to their mental health, no vacations, not even the occasional long weekend. All of this for hopes of one day getting that big promotion.<br />\n<br />\nCoventry is a city with a thousand years of history that has plenty to offer the visiting tourist.<br />\nLocated in the heart of Warwickshire.&nbsp;<br />\n<br />\n<br />\n<img alt=\"\" src=\"/ckfinder/userfiles/images/13.png\" style=\"float: left;\" /><img alt=\"\" src=\"/ckfinder/userfiles/images/14.png\" style=\"float: right;\" /><br />\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;\n<div>&nbsp;<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n&nbsp;</div>\n&nbsp;\n\n<div>&nbsp;</div>\n<br />\nThe short answer is yes. According to Kross, when you think of yourself as another person, it allows you lorem ispum lorem suo give yourself more. Notre dame at sume lorem objective, helpful feedback.', NULL, 3108, NULL, NULL, 'By Admin', '/uploads/banner_image/1681544627_1.jpeg', NULL, NULL, NULL, '2023-04', '2023-04-15', NULL, '1', '0', NULL, NULL, NULL, '2023-04-15 07:43:47', '2023-04-15 08:01:07'),
(3110, 'aI-with-fingerprint', 'aiwithfingerprint', 'AI With Fingerprint', NULL, 'Main', 'blogs', NULL, 2, NULL, NULL, '<h4>To mark the first UK show of artist Henri Barande, developer&nbsp;<a href=\"#\">Moussa</a>&nbsp;and German studio Schultzschultz have created The Lodge Wooden at Berlin City</h4>\nToday most people get on average 4 to 6 hours of exercise every day, and make sure that everything they put in their mouths is not filled with sugars or preservatives, but they pay no attention to their mental health, no vacations, not even the occasional long weekend. All of this for hopes of one day getting that big promotion.<br />\n<br />\nCoventry is a city with a thousand years of history that has plenty to offer the visiting tourist.<br />\nLocated in the heart of Warwickshire.&nbsp;<br />\n<br />\n<br />\n<img alt=\"\" src=\"/ckfinder/userfiles/images/13.png\" style=\"float: left;\" /><img alt=\"\" src=\"/ckfinder/userfiles/images/14.png\" style=\"float: right;\" /><br />\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;\n<div>&nbsp;<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n&nbsp;</div>\n&nbsp;\n\n<div>&nbsp;</div>\n<br />\nThe short answer is yes. According to Kross, when you think of yourself as another person, it allows you lorem ispum lorem suo give yourself more. Notre dame at sume lorem objective, helpful feedback.', NULL, 3108, NULL, NULL, NULL, '/uploads/banner_image/1681546748_3.jpeg', NULL, NULL, NULL, '2023-08', '2023-04-15', NULL, '1', '0', NULL, NULL, NULL, '2023-04-15 08:19:08', '2023-04-15 08:19:08'),
(3111, 'NFT-Game!-New-Oppoturnity', 'nftgamenewoppoturnity', 'NFT Game! New Oppoturnity', NULL, 'Main', 'blogs', NULL, 3, NULL, NULL, '<h4>To mark the first UK show of artist Henri Barande, developer&nbsp;<a href=\"#\">Moussa</a>&nbsp;and German studio Schultzschultz have created The Lodge Wooden at Berlin City</h4>\nToday most people get on average 4 to 6 hours of exercise every day, and make sure that everything they put in their mouths is not filled with sugars or preservatives, but they pay no attention to their mental health, no vacations, not even the occasional long weekend. All of this for hopes of one day getting that big promotion.<br />\n<br />\nCoventry is a city with a thousand years of history that has plenty to offer the visiting tourist.<br />\nLocated in the heart of Warwickshire.&nbsp;<br />\n<br />\n<br />\n<img alt=\"\" src=\"/ckfinder/userfiles/images/13.png\" style=\"float: left;\" /><img alt=\"\" src=\"/ckfinder/userfiles/images/14.png\" style=\"float: right;\" /><br />\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;\n<div>&nbsp;<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n&nbsp;</div>\n&nbsp;\n\n<div>&nbsp;</div>\n<br />\nThe short answer is yes. According to Kross, when you think of yourself as another person, it allows you lorem ispum lorem suo give yourself more. Notre dame at sume lorem objective, helpful feedback.', NULL, 3108, NULL, NULL, 'By Admin', '/uploads/banner_image/1681544627_1.jpeg', NULL, NULL, NULL, '2023-04', NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-15 07:43:47', '2023-04-15 08:22:11'),
(3112, 'How-To-Become-A-Python-Develop-Expert', 'howtobecomeapythondevelopexpert', 'How To Become A Python Develop Expert', NULL, 'Main', 'blogs', NULL, 4, NULL, NULL, '<h4>To mark the first UK show of artist Henri Barande, developer&nbsp;<a href=\"#\">Moussa</a>&nbsp;and German studio Schultzschultz have created The Lodge Wooden at Berlin City</h4>\nToday most people get on average 4 to 6 hours of exercise every day, and make sure that everything they put in their mouths is not filled with sugars or preservatives, but they pay no attention to their mental health, no vacations, not even the occasional long weekend. All of this for hopes of one day getting that big promotion.<br />\n<br />\nCoventry is a city with a thousand years of history that has plenty to offer the visiting tourist.<br />\nLocated in the heart of Warwickshire.&nbsp;<br />\n<br />\n<br />\n<img alt=\"\" src=\"/ckfinder/userfiles/images/13.png\" style=\"float: left;\" /><img alt=\"\" src=\"/ckfinder/userfiles/images/14.png\" style=\"float: right;\" /><br />\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;\n<div>&nbsp;<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n&nbsp;</div>\n&nbsp;\n\n<div>&nbsp;</div>\n<br />\nThe short answer is yes. According to Kross, when you think of yourself as another person, it allows you lorem ispum lorem suo give yourself more. Notre dame at sume lorem objective, helpful feedback.', NULL, 3108, NULL, NULL, NULL, '/uploads/banner_image/1681546748_3.jpeg', NULL, NULL, NULL, '2023-08', NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-15 08:19:08', '2023-04-15 08:23:07'),
(3113, 'VR-Game,-Oppoturnity-&-Challenge', 'vrgameoppoturnitychallenge', 'VR Game, Oppoturnity & Challenge', NULL, 'Main', 'blogs', NULL, 5, NULL, NULL, '<h4>To mark the first UK show of artist Henri Barande, developer&nbsp;<a href=\"#\">Moussa</a>&nbsp;and German studio Schultzschultz have created The Lodge Wooden at Berlin City</h4>\nToday most people get on average 4 to 6 hours of exercise every day, and make sure that everything they put in their mouths is not filled with sugars or preservatives, but they pay no attention to their mental health, no vacations, not even the occasional long weekend. All of this for hopes of one day getting that big promotion.<br />\n<br />\nCoventry is a city with a thousand years of history that has plenty to offer the visiting tourist.<br />\nLocated in the heart of Warwickshire.&nbsp;<br />\n<br />\n<img alt=\"\" src=\"/ckfinder/userfiles/images/13.png\" style=\"width: 524px; height: 295px; float: left;\" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt=\"\" src=\"/ckfinder/userfiles/images/14.png\" style=\"width: 524px; height: 295px;\" /><br />\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Images by&nbsp;<a href=\"#\">@sample</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Images by&nbsp;<a href=\"#\">@sample</a><br />\n<br />\nThe short answer is yes. According to Kross, when you think of yourself as another person, it allows you lorem ispum lorem suo give yourself more. Notre dame at sume lorem objective, helpful feedback.<h4>To mark the first UK show of artist Henri Barande, developer&nbsp;<a href=\"#\">Moussa</a>&nbsp;and German studio Schultzschultz have created The Lodge Wooden at Berlin City</h4>\nToday most people get on average 4 to 6 hours of exercise every day, and make sure that everything they put in their mouths is not filled with sugars or preservatives, but they pay no attention to their mental health, no vacations, not even the occasional long weekend. All of this for hopes of one day getting that big promotion.<br />\n<br />\nCoventry is a city with a thousand years of history that has plenty to offer the visiting tourist.<br />\nLocated in the heart of Warwickshire.&nbsp;<br />\n<br />\n<br />\n<img alt=\"\" src=\"/ckfinder/userfiles/images/13.png\" style=\"float: left;\" /><img alt=\"\" src=\"/ckfinder/userfiles/images/14.png\" style=\"float: right;\" /><br />\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;\n<div>&nbsp;<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n&nbsp;</div>\n&nbsp;\n\n<div>&nbsp;</div>\n<br />\nThe short answer is yes. According to Kross, when you think of yourself as another person, it allows you lorem ispum lorem suo give yourself more. Notre dame at sume lorem objective, helpful feedback.', NULL, 3108, NULL, NULL, 'By Admin', '/uploads/banner_image/1681544627_1.jpeg', NULL, NULL, NULL, '2023-04', NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-15 07:43:47', '2023-04-15 08:23:31'),
(3114, '6 Tips To Help You Build Your Social Media Effeciency & Better', '6-tips-to-help-you-build-your-social-media-effeciency-better', '6 Tips To Help You Build Your Social Media Effeciency & Better', NULL, 'Main', 'blogs', NULL, 6, NULL, NULL, '<h4>To mark the first UK show of artist Henri Barande, developer&nbsp;<a href=\"#\">Moussa</a>&nbsp;and German studio Schultzschultz have created The Lodge Wooden at Berlin City</h4>\nToday most people get on average 4 to 6 hours of exercise every day, and make sure that everything they put in their mouths is not filled with sugars or preservatives, but they pay no attention to their mental health, no vacations, not even the occasional long weekend. All of this for hopes of one day getting that big promotion.<br />\n<br />\nCoventry is a city with a thousand years of history that has plenty to offer the visiting tourist.<br />\nLocated in the heart of Warwickshire.&nbsp;<br />\n<br />\n<br />\n<img alt=\"\" src=\"/ckfinder/userfiles/images/13.png\" style=\"float: left;\" /><img alt=\"\" src=\"/ckfinder/userfiles/images/14.png\" style=\"float: right;\" /><br />\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;\n<div>&nbsp;<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n&nbsp;</div>\n&nbsp;\n\n<div>&nbsp;</div>\n<br />\nThe short answer is yes. According to Kross, when you think of yourself as another person, it allows you lorem ispum lorem suo give yourself more. Notre dame at sume lorem objective, helpful feedback.', NULL, 3108, NULL, NULL, NULL, '/uploads/banner_image/1681546748_3.jpeg', NULL, NULL, NULL, '2023-08', NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-15 08:19:08', '2023-04-15 08:23:53'),
(3115, 'The New Trend Of Marketing With Tiktok, Should Or Not?', 'the-new-trend-of-marketing-with-tiktok-should-or-not', 'The New Trend Of Marketing With Tiktok, Should Or Not?', NULL, 'Main', 'blogs', NULL, 7, NULL, NULL, '<h4>To mark the first UK show of artist Henri Barande, developer&nbsp;<a href=\"#\">Moussa</a>&nbsp;and German studio Schultzschultz have created The Lodge Wooden at Berlin City</h4>\nToday most people get on average 4 to 6 hours of exercise every day, and make sure that everything they put in their mouths is not filled with sugars or preservatives, but they pay no attention to their mental health, no vacations, not even the occasional long weekend. All of this for hopes of one day getting that big promotion.<br />\n<br />\nCoventry is a city with a thousand years of history that has plenty to offer the visiting tourist.<br />\nLocated in the heart of Warwickshire.&nbsp;<br />\n<br />\n<br />\n<img alt=\"\" src=\"/ckfinder/userfiles/images/13.png\" style=\"float: left;\" /><img alt=\"\" src=\"/ckfinder/userfiles/images/14.png\" style=\"float: right;\" /><br />\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;\n<div>&nbsp;<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n&nbsp;</div>\n&nbsp;\n\n<div>&nbsp;</div>\n<br />\nThe short answer is yes. According to Kross, when you think of yourself as another person, it allows you lorem ispum lorem suo give yourself more. Notre dame at sume lorem objective, helpful feedback.', NULL, 3108, NULL, NULL, 'By Admin', '/uploads/banner_image/1681544627_1.jpeg', NULL, NULL, NULL, '2023-04', NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-15 07:43:47', '2023-04-15 08:24:07'),
(3116, 'Workflow Strategy For E-Shop', 'workflow-strategy-for-eshop', 'Workflow Strategy For E-Shop', NULL, 'Main', 'blogs', NULL, 8, NULL, NULL, '<h4>To mark the first UK show of artist Henri Barande, developer&nbsp;<a href=\"#\">Moussa</a>&nbsp;and German studio Schultzschultz have created The Lodge Wooden at Berlin City</h4>\nToday most people get on average 4 to 6 hours of exercise every day, and make sure that everything they put in their mouths is not filled with sugars or preservatives, but they pay no attention to their mental health, no vacations, not even the occasional long weekend. All of this for hopes of one day getting that big promotion.<br />\n<br />\nCoventry is a city with a thousand years of history that has plenty to offer the visiting tourist.<br />\nLocated in the heart of Warwickshire.&nbsp;<br />\n<br />\n<img alt=\"\" src=\"/ckfinder/userfiles/images/5.png\" style=\"width: 385px; height: 269px; float: left;\" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt=\"\" src=\"/ckfinder/userfiles/images/6.png\" style=\"width: 400px; height: 268px;\" /><br />\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Images by&nbsp;<a href=\"#\">@sample</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Images by&nbsp;<a href=\"#\">@sample</a><br />\n<br />\nThe short answer is yes. According to Kross, when you think of yourself as another person, it allows you lorem ispum lorem suo give yourself more. Notre dame at sume lorem objective, helpful feedback.', NULL, 3108, NULL, NULL, NULL, '/uploads/banner_image/1681546748_3.jpeg', NULL, NULL, NULL, '2023-08', NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-15 08:19:08', '2023-04-15 08:24:21'),
(3117, 'our-projects', 'ourprojects', 'All Services', NULL, 'Main', 'Group', NULL, 1, 'Projects', NULL, 'We have an experienced team of production and inspection personnel to ensure quality.', NULL, 2632, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-15 08:52:50', '2023-04-22 05:44:54'),
(3118, 'it-consultation', 'itconsultation', 'IT Consultation', NULL, 'Main', 'Group', NULL, 1, NULL, NULL, 'The process of providing expert advice and guidance to businesses or individuals on how to use technology to achieve their goals and solve their problems.', NULL, 3117, NULL, NULL, NULL, '/uploads/banner_image/1682596595_consultation.png', NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-15 08:54:08', '2023-04-27 12:38:35'),
(3119, 'data-security', 'datasecurity', 'Data Security', NULL, 'Main', 'Group', NULL, 2, NULL, NULL, 'It refers to the measures and protocols put in place to protect digital information from unauthorized access, use, disclosure, modification, or destruction.', NULL, 3117, NULL, NULL, NULL, '/uploads/banner_image/1682596606_password.png', NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-15 08:54:49', '2023-04-27 12:39:22'),
(3120, 'mobile-app-development', 'mobileappdevelopment', 'Mobile App Development', NULL, 'Main', 'Group', NULL, 3, NULL, NULL, 'The process of creating software applications that run on mobile devices, such as smartphones or tablets, and are designed to provide specific functions and services to users.', NULL, 3117, NULL, NULL, NULL, '/uploads/banner_image/1682596616_development.png', NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-15 08:55:15', '2023-04-27 12:39:38'),
(3121, 'ui/ux-design', 'uiuxdesign', 'UI/UX Design', NULL, 'Main', 'Group', NULL, 4, NULL, NULL, 'UI/UX design refers to the process of designing and improving the user interface and user experience of digital products, such as websites or mobile apps, to make them intuitive, user-friendly, and aesthetically appealing.', NULL, 3117, NULL, NULL, NULL, '/uploads/banner_image/1682596625_ux.png', NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-15 08:55:40', '2023-04-27 12:35:50'),
(3122, 'cloud-service', 'cloudservice', 'Cloud Service', NULL, 'Main', 'Group', NULL, 5, NULL, NULL, 'The delivery of computing resources, such as servers, storage, software, and databases, over the internet, on-demand, and as a service.', NULL, 3117, NULL, NULL, NULL, '/uploads/banner_image/1682596636_cloud-computing.png', NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-15 08:56:17', '2023-04-27 12:40:21'),
(3123, 'web-development', 'webdevelopment', 'Web Development', NULL, 'Main', 'Group', NULL, 6, NULL, NULL, 'The process of building and maintaining websites and web applications, which involves designing, coding, testing, and deploying various components, such as web pages, servers, databases, and client-side scripts.', NULL, 3117, NULL, NULL, NULL, '/uploads/banner_image/1682596658_coding.png', NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-15 08:56:36', '2023-04-27 12:40:32'),
(3124, 'digital-marketing', 'digitalmarketing', 'Digital Marketing', NULL, 'Main', 'Group', NULL, 7, NULL, NULL, 'Digital channels, such as search engines, social media, email, and websites, to promote products, services, or brands and reach a targeted audience.', NULL, 3117, NULL, NULL, NULL, '/uploads/banner_image/1682596647_digital-marketing.png', NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-15 09:04:02', '2023-04-27 12:40:44'),
(3125, 'bigdata', 'bigdata', 'Bigdata', NULL, 'Main', 'Group', NULL, 8, NULL, NULL, 'Extremely large, complex, and diverse sets of digital data that cannot be easily managed or analyzed using traditional data processing tools and methods.', NULL, 3117, NULL, NULL, NULL, '/uploads/banner_image/1682596667_big-data.png', NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-15 09:05:20', '2023-04-27 12:40:51'),
(3126, 'data-migrations', 'datamigrations', 'Data Migration', NULL, 'Main', 'Group', NULL, 9, NULL, NULL, 'The process of transferring data from one system, storage device, or format to another, while ensuring its integrity, security, and accessibility.', NULL, 3117, NULL, NULL, NULL, '/uploads/banner_image/1682596677_exchange.png', NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-15 09:06:09', '2023-04-27 12:40:59'),
(3127, 'blog-slider1', 'blogslider1', 'Solutions For Big Data Issue, Expert Perspective', NULL, 'Main', 'blogs', NULL, 1, NULL, NULL, '<h4>To mark the first UK show of artist Henri Barande, developer&nbsp;<a href=\"#\">Moussa</a>&nbsp;and German studio Schultzschultz have created The Lodge Wooden at Berlin City</h4>\r\nToday most people get on average 4 to 6 hours of exercise every day, and make sure that everything they put in their mouths is not filled with sugars or preservatives, but they pay no attention to their mental health, no vacations, not even the occasional long weekend. All of this for hopes of one day getting that big promotion.<br />\r\n<br />\r\nCoventry is a city with a thousand years of history that has plenty to offer the visiting tourist.<br />\r\nLocated in the heart of Warwickshire.&nbsp;<br />\r\n<br />\r\n<br />\r\n<img alt=\"\" src=\"/ckfinder/userfiles/images/13.png\" style=\"float: left;\" /><img alt=\"\" src=\"/ckfinder/userfiles/images/14.png\" style=\"float: right;\" /><br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;\r\n<div>&nbsp;<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n&nbsp;</div>\r\n&nbsp;\r\n\r\n<div>&nbsp;</div>\r\n<br />\r\nThe short answer is yes. According to Kross, when you think of yourself as another person, it allows you lorem ispum lorem suo give yourself more. Notre dame at sume lorem objective, helpful feedback.', NULL, 3107, NULL, NULL, 'Mr. Devraj Sah', '/uploads/banner_image/1681818842_s_blog.png', NULL, NULL, NULL, '2023-04', '2023-04-18', NULL, '1', '0', NULL, NULL, NULL, '2023-04-18 11:54:02', '2023-04-18 13:01:06'),
(3128, 'blog-slider2', 'blogslider2', 'AI With Fingerprint', NULL, 'Main', 'blogs', NULL, 2, NULL, NULL, '<h4>To mark the first UK show of artist Henri Barande, developer&nbsp;<a href=\"#\">Moussa</a>&nbsp;and German studio Schultzschultz have created The Lodge Wooden at Berlin City</h4>\nToday most people get on average 4 to 6 hours of exercise every day, and make sure that everything they put in their mouths is not filled with sugars or preservatives, but they pay no attention to their mental health, no vacations, not even the occasional long weekend. All of this for hopes of one day getting that big promotion.<br />\n<br />\nCoventry is a city with a thousand years of history that has plenty to offer the visiting tourist.<br />\nLocated in the heart of Warwickshire.&nbsp;<br />\n<br />\n<br />\n<img alt=\"\" src=\"/ckfinder/userfiles/images/13.png\" style=\"float: left;\" /><img alt=\"\" src=\"/ckfinder/userfiles/images/14.png\" style=\"float: right;\" /><br />\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;\n<div>&nbsp;<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n&nbsp;</div>\n&nbsp;\n\n<div>&nbsp;</div>\n<br />\nThe short answer is yes. According to Kross, when you think of yourself as another person, it allows you lorem ispum lorem suo give yourself more. Notre dame at sume lorem objective, helpful feedback.', NULL, 3107, NULL, NULL, 'Mr. Devraj Sah', '/uploads/banner_image/1681819373_25.jpg', NULL, NULL, NULL, '2023-04', '2023-04-18', NULL, '1', '0', NULL, NULL, NULL, '2023-04-18 11:55:18', '2023-04-18 12:28:37'),
(3129, 'blog-slider3', 'blogslider3', 'Wireframe For UI/UX', NULL, 'Main', 'blogs', NULL, 3, NULL, NULL, '<h4>To mark the first UK show of artist Henri Barande, developer&nbsp;<a href=\"#\">Moussa</a>&nbsp;and German studio Schultzschultz have created The Lodge Wooden at Berlin City</h4>\nToday most people get on average 4 to 6 hours of exercise every day, and make sure that everything they put in their mouths is not filled with sugars or preservatives, but they pay no attention to their mental health, no vacations, not even the occasional long weekend. All of this for hopes of one day getting that big promotion.<br />\n<br />\nCoventry is a city with a thousand years of history that has plenty to offer the visiting tourist.<br />\nLocated in the heart of Warwickshire.&nbsp;<br />\n<br />\n<br />\n<img alt=\"\" src=\"/ckfinder/userfiles/images/13.png\" style=\"float: left;\" /><img alt=\"\" src=\"/ckfinder/userfiles/images/14.png\" style=\"float: right;\" /><br />\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;\n<div>&nbsp;<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n&nbsp;</div>\n&nbsp;\n\n<div>&nbsp;</div>\n<br />\nThe short answer is yes. According to Kross, when you think of yourself as another person, it allows you lorem ispum lorem suo give yourself more. Notre dame at sume lorem objective, helpful feedback.', NULL, 3107, NULL, NULL, NULL, '/uploads/banner_image/1681819402_7.png', NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-18 11:56:32', '2023-04-18 12:28:45'),
(3130, 'access-your', 'accessyour', 'like-add', NULL, 'Main', 'Normal', NULL, 2, 'Access your business potentials today &amp; find opportunity for bigger success', NULL, NULL, NULL, 2632, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-22 05:46:06', '2023-04-22 05:46:06'),
(3131, 'notero-easy-notes-app', 'noteroeasynotesapp', 'Notero - Easy Notes App', NULL, 'Main', 'career', NULL, 1, 'Micosoft Holding Ltd,<br />\r\nAustralia Area', NULL, '<h5>Stay focused and productive with a clean and clutter-free note space. The flexible ways to organize your notes: hashtags, nested notebooks, pinning notes to the top of the note list, etc</h5>\r\n<a href=\"#\">https://example.domain</a>', NULL, 3118, NULL, NULL, 'Logan Cee - Designer <br/> Martin Moussa - iOS Developer', '/uploads/banner_image/1682143409_2mobs.png', NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-22 06:03:29', '2023-04-25 11:56:19'),
(3132, 'our-challenge', 'ourchallenge', 'Our Challenge', NULL, 'Main', 'Normal', NULL, 1, 'Create an unconventional yet user-friendly website – innovative, with a clean &amp; simple design that communicates and showcases multi-media content. Site that spreads the message: \"It’s stories your love.', NULL, '<ul>\r\n	<li>Develop easy-to-find and easy-to-navigate mobile friendly website</li>\r\n	<li><i></i>Showcase each type of content: interactive books, animated stories and picture books, audio stories.<br />\r\n	Create an experience people want to share with others</li>\r\n	<li><i></i>Persuade to download app and subscribe</li>\r\n</ul>', NULL, 3131, NULL, NULL, NULL, '/uploads/banner_image/1682154824_ch_1.png', NULL, '1682154824_ch_2.png', NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-22 09:13:44', '2023-04-22 09:13:51'),
(3133, 'Solution-Result', 'solutionresult', 'Solution & Result', NULL, 'Main', 'Normal', NULL, 2, 'Our approach was to present the site as a visual editorial platform with quarterly features based on events and occasions the brand was focused on. Each quarterly focus would be marked by the hero and custom tags that filter content.', NULL, 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.<br />\r\n<i></i>\r\n<ul style=\"margin-left: 40px;\">\r\n	<li>Create &amp; Save your notes with multi-media<i></i></li>\r\n	<li>Complete note editor with rich text options<i></i></li>\r\n	<li>Web Clipper Extension<i></i></li>\r\n	<li>Automatically sync in real time</li>\r\n</ul>', NULL, 3131, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-22 09:33:20', '2023-04-22 11:27:02'),
(3134, 'careere-gallary', 'careeregallary', 'Careers Gallery', NULL, 'Main', 'Photo Gallery', NULL, 3, NULL, NULL, NULL, NULL, 3131, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-22 09:43:44', '2023-04-25 12:21:59'),
(3135, 'our-services', 'ourservices', 'Our Services', NULL, 'Main', 'Photo Gallery', NULL, 1, 'We provide perfect IT Solutions for your business', NULL, NULL, NULL, 2613, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-25 13:24:28', '2023-04-25 13:24:28'),
(3136, 'our-top-services', 'ourtopservices', 'Our Top Services', NULL, 'Main', 'Photo Gallery', NULL, 2, 'Mokysha Dashboard is a powerhouse when it comes to the feature list. This ensures you have every functionality you need to build, run, and expand your marketplace', NULL, NULL, NULL, 2613, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-25 13:33:04', '2023-04-25 13:33:04'),
(3137, 'optimized-user-experiences', 'optimizeduserexperiences', 'Optimized User Experiences', NULL, 'Main', 'Photo Gallery', NULL, 3, 'The uploading and updating processes made by suppliers can be streamlined through front-end dashboards that create better ease of access.', NULL, '<a href=\"#\">Sales Breakdown &amp; Funnel</a><br />\r\n<a href=\"#\">Abadoned Carts</a><br />\r\n<a href=\"#\">Revenue by Channel &amp; Devices</a><br />\r\n<a href=\"#\">Sales Forecast</a>', NULL, 2613, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-25 13:48:42', '2023-04-25 13:56:28'),
(3138, 'payment-gateways', 'paymentgateways', '100+ Payment Gateways', NULL, 'Main', 'Normal', NULL, 4, 'With Mokysha Marketplace, choose from hundreds of payment gateways for your customers. From PayPal to Stripe to Skrill, Visa Debit, Master Card, etc', NULL, '<ul>\r\n	<li>\r\n	<h6>100% Guarantee Secure Payment</h6>\r\n	</li>\r\n	<li><i></i>\r\n	<h6>1% Extra Fees For All</h6>\r\n	</li>\r\n	<li><i></i>\r\n	<h6>Support Dispute &amp; Refund 24/7</h6>\r\n	</li>\r\n</ul>', NULL, 2613, NULL, NULL, NULL, '/uploads/banner_image/1682507870_about_s5_2_2.png', NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-26 11:17:50', '2023-04-26 11:17:50'),
(3139, 'easy-to-customizable', 'easytocustomizable', 'Easy To Customizable', NULL, 'Main', 'Photo Gallery', NULL, 5, '42,500+', NULL, '<p>Dashboards are meant to be personal tools for website managers and suppliers to enjoy, and are therefore largely modifiable.</p>\r\n\r\n<p>When it comes to customer actions, website administrators can choose the permissions of each supplier, allowing them to limit or empower commerce activity as needed.</p>', NULL, 2613, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-26 11:23:42', '2023-04-26 11:25:04'),
(3141, 'Rakesh Gartaula', 'rakesh-gartaula', 'Rakesh Gartaula', NULL, 'Home', 'Team', NULL, 1, 'CEO Founder', NULL, 'Education masters in Artificial Intelligence', NULL, 2991, NULL, NULL, NULL, '/uploads/banner_image/1682603056_WhatsApp Image 2023-04-19 at 1.03.20 PM.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.linkedin.com/', '2023-04-27 13:44:16', '2023-04-27 14:04:22'),
(3142, 'santosh-kc', 'santoshkc', 'Santosh kc', NULL, 'Home', 'Team', NULL, 3, 'Masters in cyber security', NULL, NULL, NULL, 2991, NULL, NULL, NULL, '/uploads/banner_image/1682603257_329535853_918290252519271_2655690609592771031_n.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.linkedin.com/', '2023-04-27 13:47:37', '2023-04-27 14:03:34'),
(3143, 'sagar-kharel', 'sagarkharel', 'Sagar kharel', NULL, 'Home', 'Team', NULL, 2, 'President', NULL, 'Masters in Business Administration', NULL, 2991, NULL, NULL, NULL, '/uploads/banner_image/1682603368_WhatsApp Image 2023-04-19 at 1.11.26 PM.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.linkedin.com/', '2023-04-27 13:49:28', '2023-04-27 14:03:26'),
(3144, 'faqs', 'faqs', 'FAQS', NULL, 'Home', 'Group', NULL, 35, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-28 12:40:55', '2023-04-28 12:40:55'),
(3145, 'faqs1', 'faqs1', 'Question & Answers 1', NULL, 'Home', 'Normal', NULL, 1, 'How Benefit That I Got When Choose Basic Plan?', NULL, 'Through the collaboration with customers in discussing needs and demand, we\'re able to attain mutual understanding, gain customer trust to offer appropriate advice', NULL, 3144, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-28 12:42:09', '2023-04-28 12:42:09'),
(3146, 'faqs2', 'faqs2', 'Question & Answers 2', NULL, 'Home', 'Normal', NULL, 2, 'Can I Pay With Paypal Or Payoneer?', NULL, 'Through the collaboration with customers in discussing needs and demand, we\'re able to attain mutual understanding, gain customer trust to offer appropriate advice', NULL, 3144, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-28 12:42:43', '2023-04-28 12:42:43'),
(3147, 'faqs3', 'faqs3', 'Question & Answers 3', NULL, 'Home', 'Normal', NULL, 3, 'How Long For A Standard Project', NULL, 'Through the collaboration with customers in discussing needs and demand, we\'re able to attain mutual understanding, gain customer trust to offer appropriate advice', NULL, 3144, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-28 12:43:11', '2023-04-28 12:43:11'),
(3148, 'faqs4', 'faqs4', 'Question & Answers 4', NULL, 'Home', 'Normal', NULL, 4, 'How About Data Security &amp; NDA Agreement', NULL, 'Through the collaboration with customers in discussing needs and demand, we\'re able to attain mutual understanding, gain customer trust to offer appropriate advice', NULL, 3144, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-28 12:43:45', '2023-04-28 12:43:45'),
(3149, 'faqs5', 'faqs5', 'Question & Answers 5', NULL, 'Home', 'Normal', NULL, 5, 'Can We Make An Own Tailored-AI ?', NULL, 'Through the collaboration with customers in discussing needs and demand, we\'re able to attain mutual understanding, gain customer trust to offer appropriate advice', NULL, 3144, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', NULL, NULL, NULL, '2023-04-28 12:44:19', '2023-04-28 12:44:19');

-- --------------------------------------------------------

--
-- Table structure for table `navigation_items`
--

CREATE TABLE `navigation_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sort` int(11) NOT NULL,
  `navigation_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `name_nepali` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `content_nepali` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `extra_one` varchar(255) DEFAULT NULL,
  `extra_two` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navigation_items`
--

INSERT INTO `navigation_items` (`id`, `sort`, `navigation_id`, `name`, `name_nepali`, `file`, `content`, `content_nepali`, `link`, `extra_one`, `extra_two`, `created_at`, `updated_at`) VALUES
(74, 1, 3105, NULL, NULL, '1681543074_1.png', NULL, NULL, NULL, NULL, NULL, '2023-04-15 07:17:54', '2023-04-17 12:37:17'),
(75, 1, 3105, NULL, NULL, '1681543091_2.png', NULL, NULL, NULL, NULL, NULL, '2023-04-15 07:18:11', '2023-04-17 12:37:17'),
(76, 1, 3105, NULL, NULL, '1681543101_3.png', NULL, NULL, NULL, NULL, NULL, '2023-04-15 07:18:21', '2023-04-17 12:37:17'),
(77, 1, 3105, NULL, NULL, '1681543161_4.png', NULL, NULL, NULL, NULL, NULL, '2023-04-15 07:19:21', '2023-04-17 12:37:17'),
(78, 2, 3105, NULL, NULL, '1681543161_5.png', NULL, NULL, NULL, NULL, NULL, '2023-04-15 07:19:21', '2023-04-17 12:37:17'),
(79, 3, 3105, NULL, NULL, '1681543161_6.png', NULL, NULL, NULL, NULL, NULL, '2023-04-15 07:19:21', '2023-04-17 12:37:17'),
(80, 4, 3105, NULL, NULL, '1681543161_7.png', NULL, NULL, NULL, NULL, NULL, '2023-04-15 07:19:21', '2023-04-17 12:37:17'),
(81, 5, 3105, NULL, NULL, '1681543161_8.png', NULL, NULL, NULL, NULL, NULL, '2023-04-15 07:19:21', '2023-04-17 12:37:17'),
(82, 6, 3105, NULL, NULL, '1681543161_12.png', NULL, NULL, NULL, NULL, NULL, '2023-04-15 07:19:21', '2023-04-17 12:37:17'),
(83, 1, 3106, NULL, NULL, '1681543697_pexels-fox-1595385.jpg', NULL, NULL, NULL, NULL, NULL, '2023-04-15 07:28:17', '2023-04-15 07:28:17'),
(84, 2, 3106, NULL, NULL, '1681543697_pexels-pixabay-163064.jpg', NULL, NULL, NULL, NULL, NULL, '2023-04-15 07:28:18', '2023-04-15 07:28:18'),
(85, 3, 3106, NULL, NULL, '1681543698_pexels-fauxels-3183150.jpg', NULL, NULL, NULL, NULL, NULL, '2023-04-15 07:28:18', '2023-04-15 07:28:18'),
(86, 4, 3106, NULL, NULL, '1681543698_pexels-min-an-853168.jpg', NULL, NULL, NULL, NULL, NULL, '2023-04-15 07:28:18', '2023-04-15 07:28:18'),
(87, 5, 3106, NULL, NULL, '1681543698_pexels-fauxels-3184418.jpg', NULL, NULL, NULL, NULL, NULL, '2023-04-15 07:28:18', '2023-04-15 07:28:18'),
(93, 1, 3134, NULL, NULL, '1682156849_1.png', NULL, NULL, NULL, NULL, NULL, '2023-04-22 09:47:29', '2023-04-25 12:21:59'),
(94, 2, 3134, NULL, NULL, '1682156849_2.png', NULL, NULL, NULL, NULL, NULL, '2023-04-22 09:47:29', '2023-04-25 12:21:59'),
(95, 3, 3134, NULL, NULL, '1682156849_3.jpg', NULL, NULL, NULL, NULL, NULL, '2023-04-22 09:47:29', '2023-04-25 12:21:59'),
(96, 4, 3134, NULL, NULL, '1682156849_4.png', NULL, NULL, NULL, NULL, NULL, '2023-04-22 09:47:29', '2023-04-25 12:21:59'),
(97, 5, 3134, NULL, NULL, '1682156849_5.png', NULL, NULL, NULL, NULL, NULL, '2023-04-22 09:47:29', '2023-04-25 12:21:59'),
(98, 1, 3135, 'Store Hours and Vacation', NULL, '1682429194_1.png', 'Ideal for businesses that are seasonal or operate between fixed hours', NULL, NULL, NULL, NULL, '2023-04-25 13:26:34', '2023-04-25 13:27:48'),
(99, 2, 3135, 'Coupon Management', NULL, '1682429194_2.png', 'Set up irresistible deals and offers with flexible discount promo codes.', NULL, NULL, NULL, NULL, '2023-04-25 13:26:34', '2023-04-25 13:28:28'),
(100, 3, 3135, 'Product Import and Export', NULL, '1682429194_3.png', 'Import products from and export products to CSV from vendor dashboard.', NULL, NULL, NULL, NULL, '2023-04-25 13:26:34', '2023-04-25 13:28:57'),
(101, 4, 3135, 'Inquiry and Support Ticket System', NULL, '1682429194_4.png', 'Interaction with sellers help buyers to make better purchase decisions.', NULL, NULL, NULL, NULL, '2023-04-25 13:26:34', '2023-04-25 13:29:42'),
(102, 5, 3135, 'Membership Subscription', NULL, '1682429194_5.png', 'Offer membership plans for sellers, free and paid. Accept recurring fees.', NULL, NULL, NULL, NULL, '2023-04-25 13:26:34', '2023-04-25 13:30:15'),
(103, 6, 3135, 'Invoice and Shipping Labels', NULL, '1682429194_6.png', 'Order fulfillment made easy with store invoices and shipping labels.', NULL, NULL, NULL, NULL, '2023-04-25 13:26:34', '2023-04-25 13:30:47'),
(104, 7, 3135, 'GEO Location and Radius Search', NULL, '1682429194_7.png', 'Allow searching products or services near the user’s current location.', NULL, NULL, NULL, NULL, '2023-04-25 13:26:34', '2023-04-25 13:31:11'),
(105, 8, 3135, 'Shipment and Delivery', NULL, '1682429194_8.png', 'Share tracking of deliveries, notify when shipping status changes.', NULL, NULL, NULL, NULL, '2023-04-25 13:26:34', '2023-04-25 13:31:36'),
(106, 1, 3136, 'Email Marketing', NULL, '1682429755_14.png', 'Your website has to impress your visitors within just a few seconds', NULL, NULL, NULL, NULL, '2023-04-25 13:35:55', '2023-04-25 13:39:50'),
(107, 2, 3136, 'Google/FB Ads', NULL, '1682429755_15.png', 'Get more website traffic, more customers & more online visibility with\r\n                                            powerful SEO services.', NULL, NULL, NULL, NULL, '2023-04-25 13:35:55', '2023-04-25 13:45:31'),
(108, 3, 3136, 'Content Strategy', NULL, '1682429755_16.png', 'You can provide the answers that your potential customers are trying to\r\n                                            find, so you can become the industry.', NULL, NULL, NULL, NULL, '2023-04-25 13:35:55', '2023-04-25 13:46:01'),
(109, 4, 3136, 'Social Media', NULL, '1682429756_17.png', 'Get more website traffic, more customers for your social chanel', NULL, NULL, NULL, NULL, '2023-04-25 13:35:56', '2023-04-25 13:41:47'),
(110, 5, 3136, 'Website Design and Development', NULL, '1682429756_18.png', 'Your website has to impress your visitors within just a few seconds. If it\r\n                                            runs slow, if it feels outdated', NULL, NULL, NULL, NULL, '2023-04-25 13:35:56', '2023-04-25 13:43:23'),
(111, 6, 3136, 'TVC/ Viral Clip', NULL, '1682429756_19.png', 'Optimized your website on google result with PPC Marketing', NULL, NULL, NULL, NULL, '2023-04-25 13:35:56', '2023-04-25 13:44:15'),
(112, 7, 3136, 'PPC Ads', NULL, '1682429756_20.png', 'Optimized your website on google result with PPC Marketing', NULL, NULL, NULL, NULL, '2023-04-25 13:35:56', '2023-04-25 13:44:44'),
(113, 1, 3137, 'Product Status', NULL, '1682507187_about_s5_1_2.png', 'img-body', NULL, NULL, NULL, NULL, '2023-04-25 13:50:06', '2023-04-26 13:12:19'),
(117, 2, 3137, 'Luxury Watch', NULL, '1682430770_about_s5_1_3.png', 'card1', NULL, NULL, NULL, NULL, '2023-04-25 13:52:50', '2023-04-26 13:12:30'),
(118, 3, 3137, 'Gudshop', NULL, '1682507205_about_s5_1_4.png', 'card2', NULL, NULL, NULL, NULL, '2023-04-25 13:52:50', '2023-04-26 13:12:25'),
(119, 1, 3139, NULL, NULL, '1682508396_about_s5_3_2.png', NULL, NULL, NULL, NULL, NULL, '2023-04-26 11:26:36', '2023-04-26 11:26:36'),
(120, 2, 3139, NULL, NULL, '1682508396_about_s5_3_3.png', NULL, NULL, NULL, NULL, NULL, '2023-04-26 11:26:36', '2023-04-26 11:26:36'),
(121, 3, 3139, NULL, NULL, '1682508396_about_s5_3_4.png', NULL, NULL, NULL, NULL, NULL, '2023-04-26 11:26:36', '2023-04-26 11:26:36'),
(122, 4, 3139, NULL, NULL, '1682508396_about_s5_3_5.png', NULL, NULL, NULL, NULL, NULL, '2023-04-26 11:26:36', '2023-04-26 11:26:36'),
(123, 1, 2608, '1.2k', NULL, '1682600216_num8_circle.png', 'Projects done', NULL, NULL, NULL, NULL, '2023-04-27 12:56:56', '2023-04-27 12:58:19'),
(124, 1, 2608, '165', NULL, '1682600236_chat_back9_circle.png', 'satisfied clients', NULL, NULL, NULL, NULL, '2023-04-27 12:57:16', '2023-04-27 12:58:37'),
(125, 2, 2608, '26', NULL, '1682600236_chat_back9_circle.png', 'awards winner', NULL, NULL, NULL, NULL, '2023-04-27 12:57:16', '2023-04-27 12:58:50'),
(126, 3, 2608, '15', NULL, '1682600236_chat_back9_circle.png', 'years of experience', NULL, NULL, NULL, NULL, '2023-04-27 12:57:16', '2023-04-27 12:58:26');

-- --------------------------------------------------------

--
-- Table structure for table `navigation_video_items`
--

CREATE TABLE `navigation_video_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sort` int(11) NOT NULL,
  `nav_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `name_nepali` varchar(255) DEFAULT NULL,
  `vlink` varchar(255) NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `content_nepali` varchar(255) DEFAULT NULL,
  `extra_one` varchar(255) DEFAULT NULL,
  `extra_two` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page_types`
--

CREATE TABLE `page_types` (
  `sort` int(10) UNSIGNED NOT NULL,
  `page_type_title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_types`
--

INSERT INTO `page_types` (`sort`, `page_type_title`, `created_at`, `updated_at`) VALUES
(2, 'Group', '2020-09-16 03:15:20', '2020-09-16 03:15:20'),
(3, 'Photo Gallery', '2020-09-16 03:15:20', '2020-09-16 03:15:20'),
(11, 'Normal', NULL, NULL),
(12, 'Video Gallery', NULL, NULL),
(13, 'Team', NULL, NULL),
(27, 'clients', '2023-04-12 14:14:16', '2023-04-12 14:14:16'),
(28, 'blogs', NULL, NULL),
(29, 'About Menu', '2023-04-17 13:10:43', '2023-04-17 13:10:43'),
(30, 'Service Menu', '2023-04-17 13:10:43', '2023-04-17 13:10:43'),
(31, 'Blog Menu', NULL, NULL),
(32, 'Carrers Menu', NULL, NULL),
(33, 'Contact Menu', NULL, NULL),
(34, 'service', '2023-04-22 09:53:37', '2023-04-22 09:53:37'),
(35, 'career', NULL, NULL);

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
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dates`
--
ALTER TABLE `dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `global_settings`
--
ALTER TABLE `global_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_dates`
--
ALTER TABLE `home_dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigations`
--
ALTER TABLE `navigations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigation_items`
--
ALTER TABLE `navigation_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigation_video_items`
--
ALTER TABLE `navigation_video_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_types`
--
ALTER TABLE `page_types`
  ADD PRIMARY KEY (`sort`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `dates`
--
ALTER TABLE `dates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT for table `global_settings`
--
ALTER TABLE `global_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_dates`
--
ALTER TABLE `home_dates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `navigations`
--
ALTER TABLE `navigations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3150;

--
-- AUTO_INCREMENT for table `navigation_items`
--
ALTER TABLE `navigation_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `navigation_video_items`
--
ALTER TABLE `navigation_video_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page_types`
--
ALTER TABLE `page_types`
  MODIFY `sort` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
