-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2021 at 08:05 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laranews`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `aid` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`aid`, `title`, `url`, `image`, `location`, `status`, `created_at`, `updated_at`) VALUES
(2, '2nd adv', 'http://www.instagram.com/', '2102101006161.jfif', 'Leaderboard', 'Display', '2021-02-10 17:06:16', '2021-02-13 15:05:29'),
(4, 'Supper fruits', 'http://www.webtrickshome.com/', '21021383123ad2.jfif', 'Sidebar-top', 'Display', '2021-02-13 15:31:23', NULL),
(5, 'Hot dryfruits', 'http://www.instagram.com/', '21021383157ad1.jpg', 'Sidebar-bottom', 'Display', '2021-02-13 15:31:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cid` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cid`, `title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'politics', 'politics', 'On', '2021-01-19 12:36:12', '2021-01-26 06:31:26'),
(2, 'business', 'business', 'On', '2021-01-19 12:36:19', '2021-01-25 08:51:22'),
(3, 'featured', 'entertaintment', 'On', '2021-01-19 12:36:33', NULL),
(4, 'technology', 'technology', 'On', '2021-01-19 12:36:50', NULL),
(5, 'sports', 'sports', 'On', '2021-01-19 12:36:54', NULL),
(6, 'styles', 'styles', 'On', '2021-01-19 12:37:00', '2021-01-19 12:37:49'),
(7, 'news', 'news', 'On', '2021-01-19 12:37:19', '2021-01-19 13:08:14'),
(8, 'health', 'health', 'On', '2021-01-19 12:37:24', '2021-01-19 13:08:03'),
(9, 'entertainment', 'entertainment', 'On', '2021-01-20 05:23:38', '2021-01-29 13:31:38'),
(10, 'travel', 'travel', 'On', '2021-01-26 05:46:55', '2021-01-26 06:11:48');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `mid` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`mid`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Anii', 'anii@anii.gmail.com', '03487756916', 'Hello how are you?', '2021-02-08 15:52:22', NULL),
(2, 'Qurat-ul-ain', 'anii@aniigmail.com', '03487756', 'How are you sweet', '2021-02-08 15:55:18', NULL),
(4, 'Rehber ali', 'anuj@gmail.com', '0348775691', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-02-09 13:25:18', NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_18_142059_create_categories_table', 1),
(5, '2021_01_20_060241_create_settings_table', 2),
(6, '2021_01_23_113827_create_posts_table', 3),
(7, '2021_02_07_130453_create_pages_table', 4),
(8, '2021_02_08_204427_create_messages_table', 5),
(9, '2021_02_10_204745_create_advertisements_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `pageid` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`pageid`, `title`, `slug`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'about-us', 'About Us\r\nWebtrickshome is a tutorial site with project based tutorials, video references along with forum aimed at problem solving and blogs. Webtrickshome targets to be the ultimate home for web tricks that is easy to reach and understand for prospective web designers and developers along with SEO analysts. At this point, we have more than 3000 tutorial lessons for Photoshop, HTML, CSS, Bootstrap, Jquery, PHP Basics, Procedural PHP, Object Oriented PHP, Laravel Framework, Wordpress Framework and Search Engine Optimization along with Webtrickshome Forum and Webtrickshome Blogs.\r\n\r\nThe Concept of Webtrickshome\r\nThe concept of webtrickshome was first conceptualized by Jiwan Thapa, a full stack developer and trainer in 2015 with a view to help his trainees by creating an online resource as reference that is organized as day-to-day tutorial lessons which are easy to go through and more fruitful than getting lost in the middle of a huge reference library that has every topic explained in a single page. According to him, huge reference library would be more useful for intermediate level developers in comparision to the beginners. So, webtrickshome aims to help beginners by providing them easy reference resources.\r\n\r\nTraits\r\nTo be strong enough to compete with the best, webtrickshome possess some great qualities which are stated below.\r\n\r\nWebtrickshome is simple and easy to understand.\r\nEach of the course topics are organized to reduce the number of lessons beginners need to go through and yet still acquire enough knowlegde to be able to work professionally within a short time span.\r\nAll the lessons in webtrickshome are project based that gives a feeling of real world projects.\r\nWebtrickshome also provides video references for selected topics.\r\nWebtrickshome is absolutely free with no registration required except for the forum and blogs section where we must do that to protect spams.\r\nContact Us\r\nWe have a small team that works hard to ensure your learning experience is a pleasant one while keeping the resource itself useful and updated. If you find any broken links or any other errors, please contact us and help us get it fixed. You can send us your suggestions if you feel webtrickshome can be better. You can also send us if you want some topics be covered in webtrickshome.\r\n\r\nHelp Others Discover Webtrickshome\r\nIf you liked our contents and want others to discover webtrickshome, please share our lessons, blogs or forum contents on social media. If you own a site, you can add a link to refer to this site.\r\n\r\nStatistics\r\nOnline Since 17th July 2017\r\n6000 Active Users\r\n31% From North America\r\n29% From Europe\r\n23% From Asia\r\n11% From Africa\r\n6% From Rest of the World\r\nEnter Keywords Here\r\n\r\nCategories\r\n» Photoshop\r\n» Html\r\n» Css\r\n» Bootstrap 3\r\n» Bootstrap 4\r\n» Javascript\r\n» Jquery\r\n» PHP Basic\r\n» Procedural PHP\r\n» Object Oriented PHP\r\n» Laravel\r\n» Wordpress\r\n» Seo\r\n\r\nAbout us Privacy Policy Contact Us Advertise with us', 'publish', '2021-02-08 13:23:36', '2021-02-08 14:47:07'),
(2, 'privacy policy', 'privacy-policy', 'Privacy Policy\r\nThis Privacy Policy describes how we gather, secure and use your personal information on our site and some of its aspects. This policy does not have any vital bearing to the acts of organizations that we don’t own or control. To use this website, you need to accept our terms and conditions specified below.\r\n\r\nCollection of Personal Information\r\nWe may store any electronic information you might fill up on our website like email address, name or any other personal information from our registration form, contact form or comments section.\r\n\r\nCookies and Their Use\r\nCookies are small pieces of data stored on users computer that is sent by our website\'s server to help the website load faster the next time you visit webtrickshome. You can disallow it or delete it from your browser by clearing cookies. Keep in mind, the cookies we store are only the images or associated css or javascript files that may take up a bit longer may be around 2 or 3 seconds to load in case the cookies are not stored.\r\n\r\nHowever, Google Ads use cookies to serve ads based on a user\'s preferences which may be a recent search you didi on Google or content you searched on other websites. Users may opt out of personalized advertising by visiting Ads Settings.\r\n\r\nConnections to Different Websites\r\nOur website might refer to various websites for visitors\' convenience that aren\'t maintained by us. We are not responsible for the safety practices of such sites.\r\n\r\nContent\r\nContent on this site shall not be distributed or used for any commercial purposes. But, sharing contents over social networking sites like Facebook, Twitter, Google+, Pinterest, LinkedIn etc. are not restricted.\r\n\r\nIf you find any copyright restricted materials of others websites, please contact us and we will remove those contents or provide credit link over those materials as per the consent.\r\n\r\nMaintenance\r\nWe maintain our website regularly for better user experience and protection of personal information etc.\r\n\r\nContact us\r\nIf you have any queries regarding this policy and our website, please feel free to contact us.\r\n\r\nEnter Keywords Here\r\n\r\nCategories\r\n» Photoshop\r\n» Html\r\n» Css\r\n» Bootstrap 3\r\n» Bootstrap 4\r\n» Javascript\r\n» Jquery\r\n» PHP Basic\r\n» Procedural PHP\r\n» Object Oriented PHP\r\n» Laravel\r\n» Wordpress\r\n» Seo\r\n\r\nAbout us Privacy Policy Contact Us Advertise with us', 'publish', '2021-02-08 14:38:54', NULL),
(3, 'jamana Kharab', 'jamana-kharab', 'kdjkldjfkjdkl sdfjkejfwe', 'publish', '2021-02-10 16:05:45', NULL);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `pid` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`pid`, `title`, `slug`, `description`, `category_id`, `image`, `status`, `views`, `created_at`, `updated_at`) VALUES
(1, 'Imran Khans speech', 'imran-khans-speech', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in', '1,2', '210126111333logo.png', 'publish', 0, '2021-01-26 06:13:33', NULL),
(2, 'Code with fun', 'code-with-fun', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in', '3', '210126111402logo1.png', 'publish', 0, '2021-01-26 06:14:02', NULL),
(3, 'Pak Tour', 'pak-tour', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in', '5', '21012811004h4.jfif', 'publish', 25, '2021-01-26 06:14:32', '2021-01-27 20:10:04'),
(4, 'Model Jahangir Khab', 'model-jahangir-khab', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in', '6', '210126111507logo4.png', 'publish', 0, '2021-01-26 06:15:07', NULL),
(5, 'jamana Kharab', 'jamana-kharab', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in', '3', '210126111528logo.png', 'publish', 0, '2021-01-26 06:15:28', NULL),
(6, 'Supper star abrar rahi', 'supper-star-abrar-rahi', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in', '3,6', '210126111705Screenshot_2019-01-08-15-51-42.jpeg', 'publish', 0, '2021-01-26 06:17:05', NULL),
(7, 'Rohanie\'s visit', 'rohanies-visit', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in', '1', '210126114531Screenshot_2019-01-08-15-51-42.jpeg', 'publish', 0, '2021-01-26 06:45:31', NULL),
(8, 'Such new history', 'such-new-history', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in', '3', '21012611465614.jpeg', 'draft', 0, '2021-01-26 06:46:56', NULL),
(9, 'World cup 2022', 'world-cup-2022', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in', '5', '210126114928IMG-20191122-WA0015.jpg', 'publish', 0, '2021-01-26 06:49:28', NULL),
(10, 'jamima interview', 'jamima-interview', 'Lorem Ipsum is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s \r\nstandard dummy text ever since the 1500s, when an unknown \r\nprinter took a galley of type and scrambled it to make a \r\ntype specimen book. It has survived not only five centuries, \r\nbut also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '3,7', '2101266050110.jfif', 'publish', 0, '2021-01-26 13:05:01', NULL),
(11, 'Trump\'s 5 years', 'trumps-5-years', 'Lorem Ipsum is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s \r\nstandard dummy text ever since the 1500s, when an unknown \r\nprinter took a galley of type and scrambled it to make a \r\ntype specimen book. It has survived not only five centuries, \r\nbut also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '1', '210128848125.jpg', 'publish', 0, '2021-01-26 13:05:48', '2021-01-28 15:48:12'),
(12, 'old man a commadian', 'old-man-a-commadian', 'Lorem Ipsum is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s \r\nstandard dummy text ever since the 1500s, when an unknown \r\nprinter took a galley of type and scrambled it to make a \r\ntype specimen book. It has survived not only five centuries, \r\nbut also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '3', '210126606259.jfif', 'publish', 3, '2021-01-26 13:06:25', NULL),
(13, 'dubai in summar', 'dubai-in-summar', 'Lorem Ipsum is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s \r\nstandard dummy text ever since the 1500s, when an unknown \r\nprinter took a galley of type and scrambled it to make a \r\ntype specimen book. It has survived not only five centuries, \r\nbut also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '7,10', '21012660825p5.jfif', 'publish', 0, '2021-01-26 13:08:25', '2021-01-29 14:09:35'),
(14, 'visit of gilgit', 'visit-of-gilgit', 'Lorem Ipsum is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s \r\nstandard dummy text ever since the 1500s, when an unknown \r\nprinter took a galley of type and scrambled it to make a \r\ntype specimen book. It has survived not only five centuries, \r\nbut also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '4,7', '21012660906p2.jfif', 'publish', 13, '2021-01-26 13:09:06', NULL),
(15, 'Gultari a natural place of leaving', 'gultari-a-natural-place-of-leaving', 'Lorem Ipsum is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s \r\nstandard dummy text ever since the 1500s, when an unknown \r\nprinter took a galley of type and scrambled it to make a \r\ntype specimen book. It has survived not only five centuries, \r\nbut also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '7,10', '21012660944p3.jfif', 'publish', 0, '2021-01-26 13:09:44', '2021-01-29 14:09:11'),
(16, 'Turisum', 'turisum', 'Lorem Ipsum is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s \r\nstandard dummy text ever since the 1500s, when an unknown \r\nprinter took a galley of type and scrambled it to make a \r\ntype specimen book. It has survived not only five centuries, \r\nbut also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '2,3,7,10', '21012661016p4.jfif', 'publish', 10, '2021-01-26 13:10:16', '2021-01-29 14:10:19'),
(17, 'Mahash batti sign\'s for movi fazool adami', 'mahash-batti-signs-for-movi-fazool-adami', 'Lorem Ipsum is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s \r\nstandard dummy text ever since the 1500s, when an unknown \r\nprinter took a galley of type and scrambled it to make a \r\ntype specimen book. It has survived not only five centuries, \r\nbut also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '3,6', '210126628527.jfif', 'publish', 0, '2021-01-26 13:28:52', NULL),
(18, 'photography competition 2021', 'photography-competition-2021', 'Lorem Ipsum is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s \r\nstandard dummy text ever since the 1500s, when an unknown \r\nprinter took a galley of type and scrambled it to make a \r\ntype specimen book. It has survived not only five centuries, \r\nbut also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '3', '210126629407.jfif', 'publish', 1, '2021-01-26 13:29:40', NULL),
(19, 'gang of robars', 'gang-of-robars', 'Lorem Ipsum is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s \r\nstandard dummy text ever since the 1500s, when an unknown \r\nprinter took a galley of type and scrambled it to make a \r\ntype specimen book. It has survived not only five centuries, \r\nbut also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '3', '210126630354.jfif', 'publish', 1, '2021-01-26 13:30:35', NULL),
(20, 'joni sing new pics in gym', 'joni-sing-new-pics-in-gym', 'Lorem Ipsum is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s \r\nstandard dummy text ever since the 1500s, when an unknown \r\nprinter took a galley of type and scrambled it to make a \r\ntype specimen book. It has survived not only five centuries, \r\nbut also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '8', '21012663446h1.jfif', 'publish', 0, '2021-01-26 13:34:46', NULL),
(21, 'Abrar Hussain fitness level', 'abrar-hussain-fitness-level', 'Lorem Ipsum is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s \r\nstandard dummy text ever since the 1500s, when an unknown \r\nprinter took a galley of type and scrambled it to make a \r\ntype specimen book. It has survived not only five centuries, \r\nbut also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '5,8', '21012663533h2.jfif', 'publish', 0, '2021-01-26 13:35:33', NULL),
(22, 'food panda accused of providing harmfull food', 'food-panda-accused-of-providing-harmfull-food', 'Lorem Ipsum is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s \r\nstandard dummy text ever since the 1500s, when an unknown \r\nprinter took a galley of type and scrambled it to make a \r\ntype specimen book. It has survived not only five centuries, \r\nbut also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '8', '21012663707h3.jfif', 'publish', 0, '2021-01-26 13:37:07', NULL),
(23, 'jamaima\'s new side', 'jamaimas-new-side', 'Lorem Ipsum is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s \r\nstandard dummy text ever since the 1500s, when an unknown \r\nprinter took a galley of type and scrambled it to make a \r\ntype specimen book. It has survived not only five centuries, \r\nbut also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '6,8', '21012663802h4.jpg', 'publish', 0, '2021-01-26 13:38:02', NULL),
(24, 'pak vs africa', 'pak-vs-africa', 'Browse for an image on your computer below and press ContinueBrowse for an image on your computer below and press ContinueBrowse for an image on your computer below and press ContinueBrowse for an image on your computer below and press ContinueBrowse for an image on your computer below and press ContinueBrowse for an image on your computer below and press Continue', '4,5', '210128105196.jfif', 'publish', 1, '2021-01-27 20:05:19', NULL),
(25, 'Ronaldo rejects arabia deal', 'ronaldo-rejects-arabia-deal', 'Browse for an image on your computer below and press ContinueBrowse for an image on your computer below and press ContinueBrowse for an image on your computer below and press ContinueBrowse for an image on your computer below and press ContinueBrowse for an image on your computer below and press ContinueBrowse for an image on your computer below and press Continue', '4,5', '21012810728h1.jfif', 'publish', 1, '2021-01-27 20:07:28', NULL),
(26, 'The big deal', 'the-big-deal', 'typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2', '21012873523b1.jfif', 'publish', 7, '2021-01-28 14:35:23', NULL),
(27, 'Black markeet', 'black-markeet', 'typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2', '21012874154b3.jfif', 'publish', 2, '2021-01-28 14:41:54', NULL),
(28, 'Drama khoda and muhabbat', 'drama-khoda-and-muhabbat', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but', '9', '2101296360410.jfif', 'publish', 1, '2021-01-29 13:36:04', NULL),
(29, 'Supper hit movi bakwas released', 'supper-hit-movi-bakwas-released', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but', '9', '210129636477.jfif', 'publish', 8, '2021-01-29 13:36:47', NULL),
(30, 'Kamaran\'s quick jorny', 'kamarans-quick-jorny', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but', '5,9', '210129637488.jfif', 'publish', 4, '2021-01-29 13:37:48', NULL),
(31, 'Shohabs wifes dramatic game', 'shohabs-wifes-dramatic-game', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but', '9', '210129821483.jfif', 'publish', 18, '2021-01-29 13:39:44', '2021-02-15 08:40:06');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `sid` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`sid`, `image`, `social`, `about`, `created_at`, `updated_at`) VALUES
(1, '21012175741logo1.png', 'https:www.facebook.com/codewithfun,https:www.instagram.com/codewithfun,https:www.youtube.com/codewithfun,https:www.google.com/codewithfun', 'My News collection', '2021-01-20 04:19:53', '2021-01-21 16:14:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
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
(1, 'M ishaq', 'mishaqn5@gmail.com', NULL, '$2y$10$zLNJFPH939X48ZU36aIJEO/4MP48yv4bACvARvD8CzEk120reUQqG', NULL, '2021-02-15 04:24:13', '2021-02-15 04:24:13'),
(2, 'Anii', 'anii@anii.gmail.com', NULL, '$2y$10$UfrSiWFIS9nDcsfDPhNt7ucbDqksdfqFJkUuVyR/OXHkU1nLtnG.G', NULL, '2021-02-15 04:44:55', '2021-02-15 04:44:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`pageid`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`sid`);

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
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `aid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `mid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `pageid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `pid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `sid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
