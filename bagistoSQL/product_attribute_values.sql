-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 17, 2021 at 04:23 AM
-- Server version: 8.0.25
-- PHP Version: 8.0.7RC1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bagisto`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_attribute_values`
--

CREATE TABLE `product_attribute_values` (
  `id` int UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `channel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_value` text COLLATE utf8mb4_unicode_ci,
  `boolean_value` tinyint(1) DEFAULT NULL,
  `integer_value` int DEFAULT NULL,
  `float_value` decimal(12,4) DEFAULT NULL,
  `datetime_value` datetime DEFAULT NULL,
  `date_value` date DEFAULT NULL,
  `json_value` json DEFAULT NULL,
  `product_id` int UNSIGNED NOT NULL,
  `attribute_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `product_attribute_values`
--

INSERT INTO `product_attribute_values` (`id`, `locale`, `channel`, `text_value`, `boolean_value`, `integer_value`, `float_value`, `datetime_value`, `date_value`, `json_value`, `product_id`, `attribute_id`) VALUES
(1, 'en', 'default', '<p>Red Apple</p>', NULL, NULL, NULL, NULL, NULL, NULL, 1, 9),
(2, 'en', 'default', '<p>Red Apple Long Description</p>', NULL, NULL, NULL, NULL, NULL, NULL, 1, 10),
(3, NULL, NULL, 'apple-red-110', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1),
(4, 'en', 'default', 'Red Apple', NULL, NULL, NULL, NULL, NULL, NULL, 1, 2),
(5, NULL, NULL, 'red-apple', NULL, NULL, NULL, NULL, NULL, NULL, 1, 3),
(6, NULL, 'default', NULL, NULL, 0, NULL, NULL, NULL, NULL, 1, 4),
(7, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, 5),
(8, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, 6),
(9, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, 7),
(10, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, 8),
(11, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, 23),
(12, NULL, NULL, NULL, NULL, 6, NULL, NULL, NULL, NULL, 1, 24),
(13, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 1, 26),
(14, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, 1, 27),
(15, 'en', 'default', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 16),
(16, 'en', 'default', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 17),
(17, 'en', 'default', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 18),
(18, NULL, NULL, NULL, NULL, NULL, '1.0000', NULL, NULL, NULL, 1, 11),
(19, NULL, 'default', NULL, NULL, NULL, '0.4000', NULL, NULL, NULL, 1, 12),
(20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 13),
(21, NULL, 'default', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 14),
(22, NULL, 'default', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 15),
(23, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 19),
(24, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 20),
(25, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 21),
(26, NULL, NULL, '110', NULL, NULL, NULL, NULL, NULL, NULL, 1, 22),
(27, 'en', 'default', '<p>Cavendish Banana</p>', NULL, NULL, NULL, NULL, NULL, NULL, 2, 9),
(28, 'en', 'default', '<p>Yellow Cavendish Banana</p>', NULL, NULL, NULL, NULL, NULL, NULL, 2, 10),
(29, NULL, NULL, 'banana-cavendish-150', NULL, NULL, NULL, NULL, NULL, NULL, 2, 1),
(30, 'en', 'default', 'Cavendish Banana', NULL, NULL, NULL, NULL, NULL, NULL, 2, 2),
(31, NULL, NULL, 'cavendish-banana', NULL, NULL, NULL, NULL, NULL, NULL, 2, 3),
(32, NULL, 'default', NULL, NULL, 0, NULL, NULL, NULL, NULL, 2, 4),
(33, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 2, 5),
(34, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 2, 6),
(35, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 2, 7),
(36, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 2, 8),
(37, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, NULL, 2, 23),
(38, NULL, NULL, NULL, NULL, 8, NULL, NULL, NULL, NULL, 2, 24),
(39, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 2, 26),
(40, NULL, NULL, '1000', NULL, NULL, NULL, NULL, NULL, NULL, 2, 27),
(41, 'en', 'default', '', NULL, NULL, NULL, NULL, NULL, NULL, 2, 16),
(42, 'en', 'default', '', NULL, NULL, NULL, NULL, NULL, NULL, 2, 17),
(43, 'en', 'default', '', NULL, NULL, NULL, NULL, NULL, NULL, 2, 18),
(44, NULL, NULL, NULL, NULL, NULL, '1.0000', NULL, NULL, NULL, 2, 11),
(45, NULL, 'default', NULL, NULL, NULL, '0.4000', NULL, NULL, NULL, 2, 12),
(46, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 13),
(47, NULL, 'default', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 14),
(48, NULL, 'default', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 15),
(49, NULL, NULL, '10', NULL, NULL, NULL, NULL, NULL, NULL, 2, 19),
(50, NULL, NULL, '10', NULL, NULL, NULL, NULL, NULL, NULL, 2, 20),
(51, NULL, NULL, '10', NULL, NULL, NULL, NULL, NULL, NULL, 2, 21),
(52, NULL, NULL, '150', NULL, NULL, NULL, NULL, NULL, NULL, 2, 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_attribute_values`
--
ALTER TABLE `product_attribute_values`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `chanel_locale_attribute_value_index_unique` (`channel`,`locale`,`attribute_id`,`product_id`),
  ADD KEY `product_attribute_values_product_id_foreign` (`product_id`),
  ADD KEY `product_attribute_values_attribute_id_foreign` (`attribute_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_attribute_values`
--
ALTER TABLE `product_attribute_values`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_attribute_values`
--
ALTER TABLE `product_attribute_values`
  ADD CONSTRAINT `product_attribute_values_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_attribute_values_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
