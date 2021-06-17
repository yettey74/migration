# Categories deployment guide

#### This changelog consists of the sql instructions to update the database manually when ETL is required listed below.

## Categories deployment guide
* categories
INSERT INTO `categories` (`id`, `position`, `image`, `status`, `_lft`, `_rgt`, `parent_id`, `created_at`, `updated_at`, `display_mode`, `category_icon_path`, `additional`) VALUES
(1, 1, NULL, 1, 1, 24, NULL, '2021-06-03 09:37:20', '2021-06-03 09:37:20', 'products_and_description', NULL, NULL),
(2, 1, NULL, 1, 14, 15, 1, '2021-06-17 04:21:56', '2021-06-17 04:21:56', 'products_and_description', NULL, NULL),
(3, 2, NULL, 1, 16, 17, 1, '2021-06-17 04:33:46', '2021-06-17 04:33:46', 'products_and_description', NULL, NULL),
(4, 3, NULL, 1, 18, 19, 1, '2021-06-17 04:35:56', '2021-06-17 04:35:56', 'products_and_description', NULL, NULL),
(5, 4, NULL, 1, 20, 21, 1, '2021-06-17 04:39:20', '2021-06-17 04:39:20', 'products_and_description', NULL, NULL),
(6, 5, NULL, 1, 22, 23, 1, '2021-06-17 04:40:50', '2021-06-17 04:40:50', 'products_and_description', NULL, NULL);

* category_filterable_attributes
INSERT INTO `category_filterable_attributes` (`category_id`, `attribute_id`) VALUES
(2, 11),
(3, 11),
(4, 11),
(5, 11),
(6, 11);

* category_translations
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

## Product deployment guide
* products
INSERT INTO `products` (`id`, `sku`, `type`, `created_at`, `updated_at`, `parent_id`, `attribute_family_id`) VALUES
(1, 'apple-red-110', 'simple', '2021-06-03 09:45:28', '2021-06-03 09:45:28', NULL, 1),
(2, 'banana-cavendish-150', 'simple', '2021-06-17 04:42:32', '2021-06-17 04:42:32', NULL, 1);

* product_attribute_values
INSERT INTO `product_inventories` (`id`, `qty`, `product_id`, `inventory_source_id`, `vendor_id`) VALUES
(1, 1000, 1, 1, 0),
(2, 0, 2, 1, 0);

* product_categories
INSERT INTO `product_categories` (`product_id`, `category_id`) VALUES
(1, 2),
(2, 2);

* product_inventories
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

* product_flat
INSERT INTO `product_flat` (`id`, `sku`, `product_number`, `name`, `description`, `url_key`, `new`, `featured`, `status`, `thumbnail`, `price`, `cost`, `special_price`, `special_price_from`, `special_price_to`, `weight`, `color`, `color_label`, `size`, `size_label`, `created_at`, `locale`, `channel`, `product_id`, `updated_at`, `parent_id`, `visible_individually`, `min_price`, `max_price`, `short_description`, `meta_title`, `meta_keywords`, `meta_description`, `width`, `height`, `depth`) VALUES
(1, 'apple-red-110', '1', 'Red Apple', '<p>Red Apple Long Description</p>', 'red-apple', 1, 1, 1, NULL, '1.0000', '0.4000', NULL, NULL, NULL, '110.0000', 1, 'Red', 6, 'S', '2021-06-03 19:15:28', 'en', 'default', 1, '2021-06-03 19:15:28', NULL, 1, '1.0000', '1.0000', '<p>Red Apple</p>', '', '', '', '0.0000', '0.0000', '0.0000'),
(2, 'banana-cavendish-150', '1000', 'Cavendish Banana', '<p>Yellow Cavendish Banana</p>', 'cavendish-banana', 1, 1, 1, NULL, '1.0000', '0.4000', NULL, NULL, NULL, '150.0000', 3, 'Yellow', 8, 'L', '2021-06-17 14:12:32', 'en', 'default', 2, '2021-06-17 14:12:32', NULL, 1, '1.0000', '1.0000', '<p>Cavendish Banana</p>', '', '', '', '10.0000', '10.0000', '10.0000');