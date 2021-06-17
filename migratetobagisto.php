<?php
// conn
include ('db.php');

//json
// get file in json format from db
$jsonFile = 'categories.json';
$jsonData = json_decode(file_get_contents( $jsonFile ), true );
$jsonCategories = fopen("categories.json", "w") or die("Unable to open file!");'categories.json';


//XML
//get file in xml format from db

// sql
// statements to insert into bagisto

//Catgories

// it needs to get last_id to know at what postion it is to start inserting
// it needs to get _lft && _rgt to know what is the next layout positon for the category
// establish parent id
/* 
INSERT INTO `categories` (`id`, `position`, `image`, `status`, `_lft`, `_rgt`, `parent_id`, `created_at`, `updated_at`, `display_mode`, `category_icon_path`, `additional`) VALUES
(1, 1, NULL, 1, 1, 24, NULL, '2021-06-03 09:37:20', '2021-06-03 09:37:20', 'products_and_description', NULL, NULL)
 */

// Products










?>