-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 17, 2021 at 05:06 AM
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
-- Table structure for table `category_translations`
--

CREATE TABLE `category_translations` (
  `id` int UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `meta_title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `category_id` int UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale_id` int UNSIGNED DEFAULT NULL,
  `url_path` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'maintained by database triggers'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `category_translations`
--

INSERT INTO `category_translations` (`id`, `name`, `slug`, `description`, `meta_title`, `meta_description`, `meta_keywords`, `category_id`, `locale`, `locale_id`, `url_path`) VALUES
(1, 'Root', 'root', 'Root', '', '', '', 1, 'en', NULL, ''),
(2, 'Fruit', 'fresh-fruit', '<p>Fresh Fruit</p>', 'Fresh Fruit', 'Fresh fruit delivered to your door', 'fresh-fruit, fresh fruit', 2, 'en', 1, 'fresh-fruit'),
(3, 'Fruit', 'fresh-fruit', '<p>Fresh Fruit</p>', 'Fresh Fruit', 'Fresh fruit delivered to your door', 'fresh-fruit, fresh fruit', 2, 'fr', 2, 'fresh-fruit'),
(4, 'Fruit', 'fresh-fruit', '<p>Fresh Fruit</p>', 'Fresh Fruit', 'Fresh fruit delivered to your door', 'fresh-fruit, fresh fruit', 2, 'nl', 3, 'fresh-fruit'),
(5, 'Fruit', 'fresh-fruit', '<p>Fresh Fruit</p>', 'Fresh Fruit', 'Fresh fruit delivered to your door', 'fresh-fruit, fresh fruit', 2, 'tr', 4, 'fresh-fruit'),
(6, 'Vegetables', 'fresh-vegetables', '<p>Fresh Vegetables</p>', 'Vegetables', 'Fresh Vegtables', 'fresh-vegetables, Fresh Vegetables, Fresh Vegetables Tamworth', 3, 'en', 1, 'fresh-vegetables'),
(7, 'Vegetables', 'fresh-vegetables', '<p>Fresh Vegetables</p>', 'Vegetables', 'Fresh Vegtables', 'fresh-vegetables, Fresh Vegetables, Fresh Vegetables Tamworth', 3, 'fr', 2, 'fresh-vegetables'),
(8, 'Vegetables', 'fresh-vegetables', '<p>Fresh Vegetables</p>', 'Vegetables', 'Fresh Vegtables', 'fresh-vegetables, Fresh Vegetables, Fresh Vegetables Tamworth', 3, 'nl', 3, 'fresh-vegetables'),
(9, 'Vegetables', 'fresh-vegetables', '<p>Fresh Vegetables</p>', 'Vegetables', 'Fresh Vegtables', 'fresh-vegetables, Fresh Vegetables, Fresh Vegetables Tamworth', 3, 'tr', 4, 'fresh-vegetables'),
(10, 'Herbs', 'fresh-herbs', '<p>Fresh Herbs</p>', 'Herbs', 'Fresh Herbs', 'fresh-herbs, fresh herbs, fresh herbs tamworth', 4, 'en', 1, 'fresh-herbs'),
(11, 'Herbs', 'fresh-herbs', '<p>Fresh Herbs</p>', 'Herbs', 'Fresh Herbs', 'fresh-herbs, fresh herbs, fresh herbs tamworth', 4, 'fr', 2, 'fresh-herbs'),
(12, 'Herbs', 'fresh-herbs', '<p>Fresh Herbs</p>', 'Herbs', 'Fresh Herbs', 'fresh-herbs, fresh herbs, fresh herbs tamworth', 4, 'nl', 3, 'fresh-herbs'),
(13, 'Herbs', 'fresh-herbs', '<p>Fresh Herbs</p>', 'Herbs', 'Fresh Herbs', 'fresh-herbs, fresh herbs, fresh herbs tamworth', 4, 'tr', 4, 'fresh-herbs'),
(14, 'Fungi', 'fresh-fungi', '<p>Fungi</p>', 'Fungi', 'Fresh Fungi', 'fresh-fungi, fresh fungi, fresh fungi tamworth', 5, 'en', 1, 'fresh-fungi'),
(15, 'Fungi', 'fresh-fungi', '<p>Fungi</p>', 'Fungi', 'Fresh Fungi', 'fresh-fungi, fresh fungi, fresh fungi tamworth', 5, 'fr', 2, 'fresh-fungi'),
(16, 'Fungi', 'fresh-fungi', '<p>Fungi</p>', 'Fungi', 'Fresh Fungi', 'fresh-fungi, fresh fungi, fresh fungi tamworth', 5, 'nl', 3, 'fresh-fungi'),
(17, 'Fungi', 'fresh-fungi', '<p>Fungi</p>', 'Fungi', 'Fresh Fungi', 'fresh-fungi, fresh fungi, fresh fungi tamworth', 5, 'tr', 4, 'fresh-fungi'),
(18, 'Eggs', 'fresh-eggs', '<p>Fresh Eggs</p>', 'Fresh Eggs', 'Fresh Eggs', 'fresh-eggs, fresh eggs, fresh eggs tamworth', 6, 'en', 1, 'fresh-eggs'),
(19, 'Eggs', 'fresh-eggs', '<p>Fresh Eggs</p>', 'Fresh Eggs', 'Fresh Eggs', 'fresh-eggs, fresh eggs, fresh eggs tamworth', 6, 'fr', 2, 'fresh-eggs'),
(20, 'Eggs', 'fresh-eggs', '<p>Fresh Eggs</p>', 'Fresh Eggs', 'Fresh Eggs', 'fresh-eggs, fresh eggs, fresh eggs tamworth', 6, 'nl', 3, 'fresh-eggs'),
(21, 'Eggs', 'fresh-eggs', '<p>Fresh Eggs</p>', 'Fresh Eggs', 'Fresh Eggs', 'fresh-eggs, fresh eggs, fresh eggs tamworth', 6, 'tr', 4, 'fresh-eggs');

--
-- Triggers `category_translations`
--
DELIMITER $$
CREATE TRIGGER `trig_category_translations_insert` BEFORE INSERT ON `category_translations` FOR EACH ROW BEGIN
                            DECLARE parentUrlPath varchar(255);
            DECLARE urlPath varchar(255);

            IF NOT EXISTS (
                SELECT id
                FROM categories
                WHERE
                    id = NEW.category_id
                    AND parent_id IS NULL
            )
            THEN

                SELECT
                    GROUP_CONCAT(parent_translations.slug SEPARATOR '/') INTO parentUrlPath
                FROM
                    categories AS node,
                    categories AS parent
                    JOIN category_translations AS parent_translations ON parent.id = parent_translations.category_id
                WHERE
                    node._lft >= parent._lft
                    AND node._rgt <= parent._rgt
                    AND node.id = (SELECT parent_id FROM categories WHERE id = NEW.category_id)
                    AND node.parent_id IS NOT NULL
                    AND parent.parent_id IS NOT NULL
                    AND parent_translations.locale = NEW.locale
                GROUP BY
                    node.id;

                IF parentUrlPath IS NULL
                THEN
                    SET urlPath = NEW.slug;
                ELSE
                    SET urlPath = concat(parentUrlPath, '/', NEW.slug);
                END IF;

                SET NEW.url_path = urlPath;

            END IF;
            END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trig_category_translations_update` BEFORE UPDATE ON `category_translations` FOR EACH ROW BEGIN
                            DECLARE parentUrlPath varchar(255);
            DECLARE urlPath varchar(255);

            IF NOT EXISTS (
                SELECT id
                FROM categories
                WHERE
                    id = NEW.category_id
                    AND parent_id IS NULL
            )
            THEN

                SELECT
                    GROUP_CONCAT(parent_translations.slug SEPARATOR '/') INTO parentUrlPath
                FROM
                    categories AS node,
                    categories AS parent
                    JOIN category_translations AS parent_translations ON parent.id = parent_translations.category_id
                WHERE
                    node._lft >= parent._lft
                    AND node._rgt <= parent._rgt
                    AND node.id = (SELECT parent_id FROM categories WHERE id = NEW.category_id)
                    AND node.parent_id IS NOT NULL
                    AND parent.parent_id IS NOT NULL
                    AND parent_translations.locale = NEW.locale
                GROUP BY
                    node.id;

                IF parentUrlPath IS NULL
                THEN
                    SET urlPath = NEW.slug;
                ELSE
                    SET urlPath = concat(parentUrlPath, '/', NEW.slug);
                END IF;

                SET NEW.url_path = urlPath;

            END IF;
            END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_translations_category_id_slug_locale_unique` (`category_id`,`slug`,`locale`),
  ADD KEY `category_translations_locale_id_foreign` (`locale_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_translations`
--
ALTER TABLE `category_translations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD CONSTRAINT `category_translations_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_translations_locale_id_foreign` FOREIGN KEY (`locale_id`) REFERENCES `locales` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
