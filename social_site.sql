-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 12, 2022 at 01:06 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','block') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1 dummy Blog name', '<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of plea sure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belon gs to those who fail in their duty through weakness of will, which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour.</p>\n\n                                    <div class=\"quote-author pl-30\">\n                                        <p class=\"quote-border pl-30\">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charm of pleas ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will</p>\n                                    </div>\n\n                                    <p>Which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour. One the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of plea sure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belong to those who fail in their duty through weakness of will, which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish.</p>\n\n                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of plea sure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belon gs to those who fail in their duty through weakness of will, which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour.</p>', '1.jpg', 'active', '2022-02-17 16:42:18', '2022-02-17 16:42:18', NULL),
(2, '2 dummy Blog name', '<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of plea sure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belon gs to those who fail in their duty through weakness of will, which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour.</p>\n\n                                    <div class=\"quote-author pl-30\">\n                                        <p class=\"quote-border pl-30\">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charm of pleas ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will</p>\n                                    </div>\n\n                                    <p>Which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour. One the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of plea sure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belong to those who fail in their duty through weakness of will, which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish.</p>\n\n                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of plea sure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belon gs to those who fail in their duty through weakness of will, which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour.</p>', '2.jpg', 'active', '2022-02-17 16:42:18', '2022-02-17 16:42:18', NULL),
(3, '3 dummy Blog name', '<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of plea sure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belon gs to those who fail in their duty through weakness of will, which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour.</p>\n\n                                    <div class=\"quote-author pl-30\">\n                                        <p class=\"quote-border pl-30\">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charm of pleas ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will</p>\n                                    </div>\n\n                                    <p>Which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour. One the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of plea sure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belong to those who fail in their duty through weakness of will, which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish.</p>\n\n                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of plea sure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belon gs to those who fail in their duty through weakness of will, which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour.</p>', '3.jpg', 'active', '2022-02-17 16:42:18', '2022-02-17 16:42:18', NULL),
(4, '4 dummy Blog name', '<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of plea sure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belon gs to those who fail in their duty through weakness of will, which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour.</p>\r\n\r\n                                    <div class=\"quote-author pl-30\">\r\n                                        <p class=\"quote-border pl-30\">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charm of pleas ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will</p>\r\n                                    </div>\r\n\r\n                                    <p>Which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour. One the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of plea sure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belong to those who fail in their duty through weakness of will, which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish.</p>\r\n\r\n                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of plea sure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belon gs to those who fail in their duty through weakness of will, which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour.</p>', '4.jpg', 'active', '2022-02-17 16:42:18', '2022-02-17 16:42:18', NULL),
(5, '5 dummy Blog name', '<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of plea sure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belon gs to those who fail in their duty through weakness of will, which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour.</p>\r\n\r\n                                    <div class=\"quote-author pl-30\">\r\n                                        <p class=\"quote-border pl-30\">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charm of pleas ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will</p>\r\n                                    </div>\r\n\r\n                                    <p>Which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour. One the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of plea sure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belong to those who fail in their duty through weakness of will, which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish.</p>\r\n\r\n                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of plea sure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belon gs to those who fail in their duty through weakness of will, which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour.</p>', '5.jpg', 'active', '2022-02-17 16:42:18', '2022-02-17 16:42:18', NULL),
(6, '6 dummy Blog name', '<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of plea sure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belon gs to those who fail in their duty through weakness of will, which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour.</p>\r\n\r\n                                    <div class=\"quote-author pl-30\">\r\n                                        <p class=\"quote-border pl-30\">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charm of pleas ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will</p>\r\n                                    </div>\r\n\r\n                                    <p>Which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour. One the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of plea sure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belong to those who fail in their duty through weakness of will, which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish.</p>\r\n\r\n                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of plea sure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belon gs to those who fail in their duty through weakness of will, which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour.</p>', '6.jpg', 'active', '2022-02-17 16:42:18', '2022-02-17 16:42:18', NULL),
(7, '7 dummy Blog name', '<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of plea sure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belon gs to those who fail in their duty through weakness of will, which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour.</p>\r\n\r\n                                    <div class=\"quote-author pl-30\">\r\n                                        <p class=\"quote-border pl-30\">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charm of pleas ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will</p>\r\n                                    </div>\r\n\r\n                                    <p>Which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour. One the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of plea sure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belong to those who fail in their duty through weakness of will, which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish.</p>\r\n\r\n                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of plea sure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belon gs to those who fail in their duty through weakness of will, which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour.</p>', '7.jpg', 'active', '2022-02-17 16:42:18', '2022-02-17 16:42:18', NULL),
(8, '8 dummy Blog name', '<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of plea sure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belon gs to those who fail in their duty through weakness of will, which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour.</p>\r\n\r\n                                    <div class=\"quote-author pl-30\">\r\n                                        <p class=\"quote-border pl-30\">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charm of pleas ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will</p>\r\n                                    </div>\r\n\r\n                                    <p>Which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour. One the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of plea sure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belong to those who fail in their duty through weakness of will, which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish.</p>\r\n\r\n                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of plea sure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belon gs to those who fail in their duty through weakness of will, which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour.</p>', '8.jpg', 'active', '2022-02-17 16:42:18', '2022-02-17 16:42:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brand_name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Xiaomi', 'active', '2022-03-01 11:00:59', '2022-03-01 11:00:59', NULL),
(2, 'Samsung', 'active', '2022-03-01 11:00:59', '2022-03-01 11:00:59', NULL),
(3, 'Vivo', 'active', '2022-03-01 11:00:59', '2022-03-01 11:00:59', NULL),
(4, 'Micromax', 'active', '2022-03-01 11:00:59', '2022-03-01 11:00:59', NULL),
(5, 'Intex', 'active', '2022-03-01 11:00:59', '2022-03-01 11:00:59', NULL),
(6, 'Lava', 'active', '2022-03-01 11:00:59', '2022-03-01 11:00:59', NULL),
(7, 'Realme', 'active', '2022-03-01 11:00:59', '2022-03-01 11:00:59', NULL),
(8, 'OPPO', 'active', '2022-03-01 11:00:59', '2022-03-01 11:00:59', NULL),
(9, 'Apple', 'active', '2022-03-01 11:00:59', '2022-03-01 11:00:59', NULL),
(10, 'Google', 'active', '2022-03-01 11:00:59', '2022-03-01 11:00:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `total_price` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `price`, `quantity`, `total_price`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '4', '12', '869', '1', '869', 'inactive', '2022-03-09 04:35:38', '2022-03-09 04:48:29', '2022-03-09 04:48:29'),
(2, '4', '11', '869', '1', '869', 'inactive', '2022-03-09 04:35:41', '2022-03-09 04:48:35', '2022-03-09 04:48:35'),
(3, '4', '10', '869', '1', '869', 'inactive', '2022-03-09 04:35:43', '2022-03-09 04:48:44', '2022-03-09 04:48:44'),
(4, '4', '9', '869', '1', '869', 'inactive', '2022-03-09 04:35:47', '2022-03-15 05:39:37', '2022-03-15 05:39:37'),
(5, '4', '8', '869', '1', '869', 'inactive', '2022-03-09 04:35:51', '2022-03-15 05:39:32', '2022-03-15 05:39:32'),
(6, '4', '7', '869', '1', '869', 'inactive', '2022-03-09 04:35:55', '2022-03-09 04:48:23', '2022-03-09 04:48:23'),
(7, '4', '12', '869', '1', '869', 'inactive', '2022-03-15 05:39:47', '2022-03-15 05:39:47', NULL),
(8, '4', '10', '869', '1', '869', 'inactive', '2022-03-15 05:39:55', '2022-03-15 05:39:55', NULL),
(9, '4', '12', '869', '3', '2607', 'inactive', '2022-03-15 05:40:05', '2022-03-15 05:40:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('active','block') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'about_us', '<div class=\"row\">\n                <div class=\"col-lg-5\">\n                    <div class=\"about-photo p-20 bg-img-1\">\n                        <img src=\"http://127.0.0.1:8000/assets/front/img/others/about.jpg\" alt=\"\">\n                    </div>\n                </div>\n                <div class=\"col-lg-7\">\n                    <div class=\"about-description mt-50\">\n                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labo et dolore magn aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequa. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\n                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia is be deserunt mollit anim est laborum. Sed ut perspiciatis unde omnis iste natus error sit. voluptatem accusantium doloremque laudantium,</p>\n                        <p>totam remes aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam.</p>\n                    </div>\n                </div>\n            </div>', 'active', '2022-01-12 06:48:20', '2022-01-24 20:04:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(11) NOT NULL,
  `color_name` varchar(255) DEFAULT NULL,
  `color_code` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `color_name`, `color_code`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'LightSalmon', '#ffa07a', 'active', '2022-03-01 12:32:17', '2022-03-01 12:32:17', NULL),
(2, 'Dark Salmon', '#e9967a', 'active', '2022-03-01 12:32:17', '2022-03-01 12:32:17', NULL),
(3, 'Tomato', '#fe5858', 'active', '2022-03-01 12:32:17', '2022-03-01 12:32:17', NULL),
(4, 'Deep Sky Blue', '#00b2ee', 'active', '2022-03-01 12:32:17', '2022-03-01 12:32:17', NULL),
(5, 'Electric Purple', '#00eeb3', 'active', '2022-03-01 12:32:17', '2022-03-01 12:32:17', NULL),
(6, 'Atlantis', '#8dc63f', 'active', '2022-03-01 12:32:17', '2022-03-03 04:07:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `only_id` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `only_id`, `type`, `comment`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '4', '8', 'blog', 'No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursu pleasure rationally encounter conseques ences that are extremely painful.', '2022-02-28 04:47:51', '2022-02-28 04:47:54', NULL),
(2, '5', '8', 'blog', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis atestese bibendum feugiat ut eget eni Praesent  messages in con sectetur posuere dolor non.', '2022-02-27 04:47:51', '2022-02-28 04:47:54', NULL),
(7, '4', '7', 'blog', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis atestese bibendum feugiat ut eget eni Praesent  messages in con sectetur posuere dolor non.', '2022-03-09 02:20:23', '2022-03-09 02:20:23', NULL),
(10, '4', '7', 'blog', 'No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursu pleasure rationally encounter conseques ences that are extremely painful', '2022-03-09 02:51:28', '2022-03-09 02:51:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `first_name`, `last_name`, `email`, `message`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'jaymin', 'modi', 'modijaymin86@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2022-01-06 19:48:52', '2022-01-06 19:48:52', NULL),
(3, 'Bharat', 'Patel', 'bharat@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2022-01-06 19:50:08', '2022-01-06 19:50:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `answer` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('active','block') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Collapsible Group Item #1', 'Pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.', 'active', '2022-01-07 02:14:33', '2022-01-07 02:14:33', NULL),
(2, 'Collapsible Group Item #2', 'Cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.', 'active', '2022-01-07 02:14:33', '2022-01-07 02:14:33', NULL),
(3, 'Collapsible Group Item #3', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.', 'active', '2022-01-07 02:14:33', '2022-01-07 02:14:33', NULL),
(4, 'Collapsible Group Item #4', 'Pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.', 'active', '2022-01-07 02:14:33', '2022-01-07 02:14:33', NULL),
(5, 'Collapsible Group Item #5', 'Cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.', 'active', '2022-01-07 02:14:33', '2022-01-07 02:14:33', NULL),
(6, 'Collapsible Group Item #6', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.', 'active', '2022-01-07 02:14:33', '2022-03-04 04:44:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `like`
--

CREATE TABLE `like` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `only_id` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `like`
--

INSERT INTO `like` (`id`, `user_id`, `only_id`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '5', '8', 'blog', '2022-03-08 07:26:00', '2022-03-08 07:27:14', NULL),
(2, '6', '8', 'blog', '2022-03-08 07:34:24', '2022-03-08 07:36:18', NULL),
(3, '4', '8', 'blog', '2022-03-08 07:36:39', '2022-03-08 07:36:52', '2022-03-08 07:36:52'),
(4, '4', '8', 'blog', '2022-03-08 07:37:03', '2022-03-08 07:37:11', '2022-03-08 07:37:11'),
(5, '4', '8', 'blog', '2022-03-08 07:37:18', '2022-03-08 07:37:21', '2022-03-08 07:37:21'),
(6, '4', '8', 'blog', '2022-03-09 02:51:14', '2022-03-09 02:51:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0000_00_00_000000_create_settings_table', 1),
(2, '2021_02_03_000000_create_failed_jobs_table', 1),
(3, '2021_02_03_000000_create_users_table', 1),
(4, '2021_02_03_100000_create_password_resets_table', 1),
(5, '2022_01_12_065638_create_blog_table', 1),
(6, '2022_01_12_065638_create_cms_table', 1),
(7, '2022_01_12_065638_create_contact_table', 1),
(8, '2022_01_12_065638_create_faq_table', 1),
(9, '2022_01_12_065639_create_slider_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `brand_id` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `information` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `color_id` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `brand_id`, `images`, `product_name`, `information`, `description`, `color_id`, `price`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1.jpg', 'Xiaomi 11i 5G', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, neque fugit inventore quo dignissimos est iure natus quis nam illo officiis, deleniti consectetur non ,aspernatur.</p>\n                                            <p>rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem.</p>', '<p>There are many variations of passages of Lorem Ipsum available, but the majo Rity have be suffered alteration in some form, by injected humou or randomis Rity have be suffered alteration in some form, by injected humou or randomis words which donot look even slightly believable. If you are going to use a passage Lorem Ipsum.</p>\r\n<p>rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem. rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem.</p>', '1', '869', 'active', '2022-03-01 06:59:11', '2022-03-01 06:59:14', NULL),
(2, '2', '2.jpg', 'Samsung Galaxy S22', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, neque fugit inventore quo dignissimos est iure natus quis nam illo officiis, deleniti consectetur non ,aspernatur.</p>\n                                            <p>rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem.</p>', '<p>There are many variations of passages of Lorem Ipsum available, but the majo Rity have be suffered alteration in some form, by injected humou or randomis Rity have be suffered alteration in some form, by injected humou or randomis words which donot look even slightly believable. If you are going to use a passage Lorem Ipsum.</p>\r\n<p>rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem. rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem.</p>', '2', '869', 'active', '2022-03-01 06:59:11', '2022-03-01 06:59:14', NULL),
(3, '3', '3.jpg', 'Vivo Y21A', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, neque fugit inventore quo dignissimos est iure natus quis nam illo officiis, deleniti consectetur non ,aspernatur.</p>\n                                            <p>rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem.</p>', '<p>There are many variations of passages of Lorem Ipsum available, but the majo Rity have be suffered alteration in some form, by injected humou or randomis Rity have be suffered alteration in some form, by injected humou or randomis words which donot look even slightly believable. If you are going to use a passage Lorem Ipsum.</p>\r\n<p>rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem. rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem.</p>', '3', '869', 'active', '2022-03-01 06:59:11', '2022-03-01 06:59:14', NULL),
(4, '4', '4.jpg', 'Micromax IN Note 1', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, neque fugit inventore quo dignissimos est iure natus quis nam illo officiis, deleniti consectetur non ,aspernatur.</p>\n                                            <p>rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem.</p>', '<p>There are many variations of passages of Lorem Ipsum available, but the majo Rity have be suffered alteration in some form, by injected humou or randomis Rity have be suffered alteration in some form, by injected humou or randomis words which donot look even slightly believable. If you are going to use a passage Lorem Ipsum.</p>\r\n<p>rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem. rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem.</p>', '4', '869', 'active', '2022-03-01 06:59:11', '2022-03-01 06:59:14', NULL),
(5, '5', '5.jpg', 'Intex Turbo Plus 4G', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, neque fugit inventore quo dignissimos est iure natus quis nam illo officiis, deleniti consectetur non ,aspernatur.</p>\n                                            <p>rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem.</p>', '<p>There are many variations of passages of Lorem Ipsum available, but the majo Rity have be suffered alteration in some form, by injected humou or randomis Rity have be suffered alteration in some form, by injected humou or randomis words which donot look even slightly believable. If you are going to use a passage Lorem Ipsum.</p>\r\n<p>rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem. rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem.</p>', '5', '869', 'active', '2022-03-01 06:59:11', '2022-03-01 06:59:14', NULL),
(6, '6', '6.jpg', 'Lava Agni 5G', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, neque fugit inventore quo dignissimos est iure natus quis nam illo officiis, deleniti consectetur non ,aspernatur.</p>\n                                            <p>rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem.</p>', '<p>There are many variations of passages of Lorem Ipsum available, but the majo Rity have be suffered alteration in some form, by injected humou or randomis Rity have be suffered alteration in some form, by injected humou or randomis words which donot look even slightly believable. If you are going to use a passage Lorem Ipsum.</p>\r\n<p>rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem. rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem.</p>', '6', '869', 'active', '2022-03-01 06:59:11', '2022-03-01 06:59:14', NULL),
(7, '7', '7.jpg', 'Realme 9 Pro', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, neque fugit inventore quo dignissimos est iure natus quis nam illo officiis, deleniti consectetur non ,aspernatur.</p>\n                                            <p>rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem.</p>', '<p>There are many variations of passages of Lorem Ipsum available, but the majo Rity have be suffered alteration in some form, by injected humou or randomis Rity have be suffered alteration in some form, by injected humou or randomis words which donot look even slightly believable. If you are going to use a passage Lorem Ipsum.</p>\r\n<p>rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem. rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem.</p>', '1', '869', 'active', '2022-03-01 06:59:11', '2022-03-01 06:59:14', NULL),
(8, '8', '8.jpg', 'OPPO Reno7', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, neque fugit inventore quo dignissimos est iure natus quis nam illo officiis, deleniti consectetur non ,aspernatur.</p>\n                                            <p>rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem.</p>', '<p>There are many variations of passages of Lorem Ipsum available, but the majo Rity have be suffered alteration in some form, by injected humou or randomis Rity have be suffered alteration in some form, by injected humou or randomis words which donot look even slightly believable. If you are going to use a passage Lorem Ipsum.</p>\r\n<p>rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem. rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem.</p>', '2', '869', 'active', '2022-03-01 06:59:11', '2022-03-01 06:59:14', NULL),
(9, '9', '9.jpg', 'Apple iPhone 12', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, neque fugit inventore quo dignissimos est iure natus quis nam illo officiis, deleniti consectetur non ,aspernatur.</p>\n                                            <p>rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem.</p>', '<p>There are many variations of passages of Lorem Ipsum available, but the majo Rity have be suffered alteration in some form, by injected humou or randomis Rity have be suffered alteration in some form, by injected humou or randomis words which donot look even slightly believable. If you are going to use a passage Lorem Ipsum.</p>\r\n<p>rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem. rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem.</p>', '3', '869', 'active', '2022-03-01 06:59:11', '2022-03-01 06:59:14', NULL),
(10, '10', '10.jpg', 'Google Pixel 6 Pro', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, neque fugit inventore quo dignissimos est iure natus quis nam illo officiis, deleniti consectetur non ,aspernatur.</p>\n                                            <p>rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem.</p>', '<p>There are many variations of passages of Lorem Ipsum available, but the majo Rity have be suffered alteration in some form, by injected humou or randomis Rity have be suffered alteration in some form, by injected humou or randomis words which donot look even slightly believable. If you are going to use a passage Lorem Ipsum.</p>\r\n<p>rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem. rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem.</p>', '4', '869', 'active', '2022-03-01 06:59:11', '2022-03-01 06:59:14', NULL),
(11, '1', '11.jpg', 'Xiaomi 11i HyperCharge 5G', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, neque fugit inventore quo dignissimos est iure natus quis nam illo officiis, deleniti consectetur non ,aspernatur.</p>\n                                            <p>rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem.</p>', '<p>There are many variations of passages of Lorem Ipsum available, but the majo Rity have be suffered alteration in some form, by injected humou or randomis Rity have be suffered alteration in some form, by injected humou or randomis words which donot look even slightly believable. If you are going to use a passage Lorem Ipsum.</p>\r\n<p>rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem. rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem.</p>', '5', '869', 'active', '2022-03-01 06:59:11', '2022-03-01 06:59:14', NULL),
(12, '2', '12.jpg', 'Samsung Galaxy S21', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, neque fugit inventore quo dignissimos est iure natus quis nam illo officiis, deleniti consectetur non ,aspernatur.</p>\r\n\r\n<p>rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem.</p>', '<p>There are many variations of passages of Lorem Ipsum available, but the majo Rity have be suffered alteration in some form, by injected humou or randomis Rity have be suffered alteration in some form, by injected humou or randomis words which donot look even slightly believable. If you are going to use a passage Lorem Ipsum.</p>\r\n\r\n<p>rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem. rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem.</p>', '6', '869', 'active', '2022-03-01 06:59:11', '2022-03-04 02:40:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_imges`
--

CREATE TABLE `product_imges` (
  `id` int(11) NOT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_imges`
--

INSERT INTO `product_imges` (`id`, `product_id`, `images`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', 'product/1.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(2, '1', 'product/2.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(3, '1', 'product/3.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(4, '1', 'product/4.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(5, '2', 'product/1.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(6, '2', 'product/2.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(7, '2', 'product/3.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(8, '2', 'product/4.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(9, '3', 'product/1.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(10, '3', 'product/2.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(11, '3', 'product/3.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(12, '3', 'product/4.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(13, '4', 'product/1.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(14, '4', 'product/2.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(15, '4', 'product/3.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(16, '4', 'product/4.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(17, '5', 'product/1.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(18, '5', 'product/2.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(19, '5', 'product/3.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(20, '5', 'product/4.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(21, '6', 'product/1.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(22, '6', 'product/2.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(23, '6', 'product/3.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(24, '6', 'product/4.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(25, '7', 'product/1.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(26, '7', 'product/2.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(27, '7', 'product/3.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(28, '7', 'product/4.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(29, '8', 'product/1.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(30, '8', 'product/2.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(31, '8', 'product/3.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(32, '8', 'product/4.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(33, '9', 'product/1.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(34, '9', 'product/2.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(35, '9', 'product/3.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(36, '9', 'product/4.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(37, '10', 'product/1.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(38, '10', 'product/2.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(39, '10', 'product/3.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(40, '10', 'product/4.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(41, '11', 'product/1.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(42, '11', 'product/2.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(43, '11', 'product/3.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(44, '11', 'product/4.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(45, '12', 'product/1.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(46, '12', 'product/2.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(47, '12', 'product/3.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL),
(48, '12', 'product/4.jpg', '2022-03-02 01:04:06', '2022-03-02 01:04:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('BOOLEAN','NUMBER','DATE','TEXT','SELECT','FILE','TEXTAREA') COLLATE utf8_unicode_ci NOT NULL,
  `label` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `hidden` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `code`, `type`, `label`, `value`, `hidden`, `created_at`, `updated_at`) VALUES
(1, 'site_logo', 'FILE', 'Site Logo', 'site_logo.png', 0, '2022-01-11 20:01:44', '2022-01-11 20:14:28'),
(2, 'project_title', 'TEXT', 'Project Title', 'Subas', 0, '2022-01-11 20:01:44', '2022-01-11 20:01:44'),
(3, 'favicon_logo', 'FILE', 'Favicon Logo', 'favicon_logo.png', 0, '2022-01-11 20:01:44', '2022-01-11 20:35:07'),
(4, 'copyright', 'TEXT', 'Copy Right', 'Subas', 0, '2022-01-11 20:01:44', '2022-01-11 20:01:44');

-- --------------------------------------------------------

--
-- Table structure for table `site_setting`
--

CREATE TABLE `site_setting` (
  `id` int(11) NOT NULL,
  `meta_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_value` varchar(191) COLLATE utf8_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `site_setting`
--

INSERT INTO `site_setting` (`id`, `meta_key`, `meta_value`, `created_at`, `updated_at`) VALUES
(1, 'site_maintenance', '0', '2019-11-17 03:19:20', '2021-04-22 20:04:03');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('active','block') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `sub_title`, `description`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'WaterProof smartphone', '<p>There are many variations of passages of Lorem Ipsum available, but the majority\n                                        have suffered alteration in some form, by injected humour, or randomised words\n                                        which don\'t look even slightly believable. If you are going to use a passage of\n                                        Lorem Ipsum,</p>', '1.jpg', 'active', '2022-01-10 20:53:42', '2022-01-10 20:53:42', NULL),
(2, 'WaterProof smartphone', '<p>There are many variations of passages of Lorem Ipsum available, but the majority\n                                        have suffered alteration in some form, by injected humour, or randomised words\n                                        which don\'t look even slightly believable. If you are going to use a passage of\n                                        Lorem Ipsum,</p>', '2.jpg', 'active', '2022-01-10 20:53:42', '2022-01-10 20:53:42', NULL),
(3, 'WaterProof smartphone', '<p>There are many variations of passages of Lorem Ipsum available, but the majority\n                                        have suffered alteration in some form, by injected humour, or randomised words\n                                        which don\'t look even slightly believable. If you are going to use a passage of\n                                        Lorem Ipsum,</p>', '1.jpg', 'active', '2022-01-10 20:53:42', '2022-03-03 00:38:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('active','block') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `avatar`, `name`, `email`, `email_verified_at`, `phone`, `password`, `user_type`, `status`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 'Admin', 'admin@admin.com', NULL, NULL, '$2y$10$y7.AJPwHjanvlgorsMO27uao8tc9xGPoXukAlj/2k/ACtmBM9ZWHS', 'superadmin', 'active', NULL, '2022-01-11 20:01:44', '2022-02-28 01:02:42', NULL),
(4, '1.jpg', 'jaymin', 'jaymin@gmail.com', NULL, '8488080145', '$2y$10$y7.AJPwHjanvlgorsMO27uao8tc9xGPoXukAlj/2k/ACtmBM9ZWHS', 'users', 'active', NULL, '2022-01-11 20:01:44', '2022-03-09 07:16:13', NULL),
(5, '2.jpg', 'bharat', 'bharat@gmail.com', NULL, NULL, '$2y$10$eaZ198wV06HUOjZCIcfiW.tMJpjh6hqAHR6v2eNyLpl2myPNhuE3u', 'users', 'active', NULL, '2022-01-11 20:01:44', '2022-01-11 20:01:44', NULL),
(6, '3.jpg', 'sagar', 'sagar@gmail.com', NULL, NULL, '$2y$10$eaZ198wV06HUOjZCIcfiW.tMJpjh6hqAHR6v2eNyLpl2myPNhuE3u', 'users', 'active', NULL, '2022-01-11 20:01:44', '2022-03-03 00:34:46', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `like`
--
ALTER TABLE `like`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_imges`
--
ALTER TABLE `product_imges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_code_unique` (`code`);

--
-- Indexes for table `site_setting`
--
ALTER TABLE `site_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
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
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `like`
--
ALTER TABLE `like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_imges`
--
ALTER TABLE `product_imges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `site_setting`
--
ALTER TABLE `site_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
