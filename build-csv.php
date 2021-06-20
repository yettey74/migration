<?php
// Get JSON file and decode contents into PHP arrays/values
$catleadin = 'INSERT INTO `categories` (`id`, `position`, `image`, `status`, `_lft`, `_rgt`, `parent_id`, `created_at`, `updated_at`, `display_mode`, `category_icon_path`, `additional`) VALUES (';
$catleadout = ');';
$catsql = '';
$row = 0;
$position = 1;
$parent_id = 1;
$_lft = 2;
$_rgt = 3;
$created_at = '2021-06-03 09:37:20';
$updated_at = '2021-06-03 09:37:20';
$display_mode = 'products_and_description';
$category_icon_path = 'NULL';
$additional = 'NULL';

//we will need to update categories as the _rgt needs to include all the sub_categories upto and including
$file = "fnf-category.csv";
$tableCategories = "categories";
$tableProducts= "products";

$bagisto = ["id","position","image","status","_lft","_rgt","parent_id","created_at","updated_at","display_mode","category_icon_path","additional"];
// "cid","categoryName","categoryImage","status","archive"

$fnf = ["cid","categoryName","categoryImage","status","archive"];

$category = [];
$categories = [];

$product = [];
$products = [];

//ROOT
// update rgt as it needs to conver all sub categories
$sqlRoot = "INSERT INTO `categories` (`id`, `position`, `image`, `status`, `_lft`, `_rgt`, `parent_id`, `created_at`, `updated_at`, `display_mode`, `category_icon_path`, `additional`) VALUES (1, 1, NULL, 1, 1, 24, NULL, '2021-06-03 09:37:20', '2021-06-03 09:37:20', 'products_and_description', NULL, NULL);";

// CHILD
// INSERT INTO `categories` (`id`, `position`, `image`, `status`, `_lft`, `_rgt`, `parent_id`, `created_at`, `updated_at`, `display_mode`, `category_icon_path`, `additional`) VALUES (1, 1, NULL, 1, 2, 3, 1, '2021-06-03 09:37:20', '2021-06-03 09:37:20', 'products_and_description', NULL, NULL)


// INSERT INTO `categories` (`id`, `position`, `image`, `status`, `_lft`, `_rgt`, `parent_id`, `created_at`, `updated_at`, `display_mode`, `category_icon_path`, `additional`) VALUES ('',1, NULL, 1, 1, 2, 1, '2021-06-03 09:37:20','2021-06-03 09:37:20','products_and_description',NULL,NULL);


//echo print_R( $bagisto );
function ifFileRead ( $file )
{

    if( ($handle = fopen( $file , "r" )) !== FALSE ){
        return $handle;
    }

    return false;
}
if( ($handle = fopen( $file , "r" )) !== FALSE ){
//if( ($handle = ifFileRead ( $file ) )){
    
    while( ( $data = fgetcsv( $handle, 1000, ",") ) !== FALSE )
    {   
        $catsql .= $catleadin;
        $catsql .= '\'\',';
        $catsql .= $position . ',';
        //$sql .= $data[2] . ',';
        $catsql .= 'NULL,';
        $catsql .= $data[3] . ',';
        $catsql .= $_lft . ',';
        $catsql .= $_rgt . ',';
        $catsql .= $parent_id . ',';
        $catsql .= '\'' . $created_at . '\',';
        $catsql .= '\'' . $updated_at . '\',';
        $catsql .= '\'' . $display_mode . '\',';
        $catsql .= $category_icon_path . ',';
        $catsql .= $additional;
        $catsql .= $catleadout;
        $position++;
        $_lft++;
        $_rgt++;
    }
    fclose( $handle );
} else {
    echo 'No file to find';
    die("Unable to open file!");'categories.csv';
}

echo print_r( $catsql );

?>