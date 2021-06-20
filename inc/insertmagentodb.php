<?php
## Functions that relate only to magento databas
function cataloginventory_stock_item( $array )
{
    $product_id = $array[0];                // ID of Product
    $stock_id = $array[1];                  // ID of Stock
    $qty =  '' . $array[2] . '';            // Quantity of stock
    $min_qty = '' . $array[3] . '';         // Minimum st quantity
    $use_config_min_qty = $array[4];        // ??
    $is_qty_decimal = $array[5];            // Check if can be ! INT
    $backorders = $array[6];
    $use_config_backorders = $array[7]; 
    $min_sale_qty = '' . $array[8] . '';    
    $use_config_min_sale_qty = $array[9];
    $max_sale_qty = '' . $array[10] . '';
    $use_config_max_sale_qty = $array[11];
    $is_in_stock = $array[12];
    $low_stock_date = '' . $array[13] . ''; // NULL
    $notify_stock_qty = $array[14];
    $use_config_notify_stock_qty = $array[15];
    $manage_stock = $array[16];
    $use_config_manage_stock = $array[17]; 
    $stock_status_changed_auto = $array[18];
    $use_config_qty_increments = $array[19]; 
    $qty_increments = $array[20];
    $qty =  '' . $array[21] . '';
    $use_config_enable_qty_inc = $array[22];
    $enable_qty_increments = $array[23];
    $is_decimal_divided = $array[24];
    $website_id = $array[25];


    $q = "INSERT INTO `cataloginventory_stock_item` (`item_id`, `product_id`, `stock_id`, `qty`, `min_qty`, `use_config_min_qty`, `is_qty_decimal`, `backorders`, `use_config_backorders`, `min_sale_qty`, `use_config_min_sale_qty`, `max_sale_qty`, `use_config_max_sale_qty`, `is_in_stock`, `low_stock_date`, `notify_stock_qty`, `use_config_notify_stock_qty`, `manage_stock`, `use_config_manage_stock`, `stock_status_changed_auto`, `use_config_qty_increments`, `qty_increments`, `use_config_enable_qty_inc`, `enable_qty_increments`, `is_decimal_divided`, `website_id`) 
    VALUES ('', $product_id, $stock_id, '$qty', '$min_qty', $use_config_min_qty, $is_qty_decimal, $backorders, $use_config_backorders, '$min_sale_qty', $use_config_min_sale_qty, '$max_sale_qty', $use_config_max_sale_qty, $is_in_stock, $low_stock_date, '$notify_stock_qty', $use_config_notify_stock_qty, $manage_stock, $use_config_manage_stock, $stock_status_changed_auto, $use_config_qty_increments, '$qty_increments', $use_config_enable_qty_inc, $enable_qty_increments, $is_decimal_divided, $website_id)";

    $r = $insert;
    

// check row inserted
    $insert = true;

    // get the key=>value pairs and insert into db
    return ( $insert )? true : false;
}

function cataloginventory_stock_status( $array )
{    
    $product_id = $array[0];
    $website_id = $array[1];
    $stock_id = $array[2];
    $qty = $array[3];
    $stock_status = $array[4];

    $q = "INSERT INTO `cataloginventory_stock_status` (`product_id`, `website_id`, `stock_id`, `qty`, `stock_status`) VALUES ($product_id, $website_id, $stock_id, '$qty', $tock_status)";
$insert = true;

    return ($insert)? true : false;
}

function cataloginventory_stock_status_replica( $array )
{    
    $product_id = $array[0];
    $website_id = $array[1];
    $stock_id = $array[2];
    $qty = $array[3];
    $stock_status = $array[4];
    // (1, 0, 1, '1000.0000', 1)

    $q = "INSERT INTO `cataloginventory_stock_status_replica` (`product_id`, `website_id`, `stock_id`, `qty`, `stock_status`) VALUES ($product_id, $website_id, $stock_id, '$qty', $stock_status)";
    $insert = true;

    return ($insert)? true : false;
}


function catalog_category_entity( $array )
{    
    $entity_id = $array[0];
    $attribute_set_id = $array[1];
    $parent_id = $array[2];
    $created_at = $array[3];
    $updated_at = $array[4];
    $path = $array[5];
    $position = $array[6];
    $level = $array[7];
    $children_count = $array[8];
    // (1, 3, 0, '2021-06-10 23:14:24', '2021-06-17 16:17:51', '1', 0, 0, 2)

    $q = "INSERT INTO `catalog_category_entity` (`entity_id`, `attribute_set_id`, `parent_id`, `created_at`, `updated_at`, `path`, `position`, `level`, `children_count`) VALUES ($entity_id, $attribute_set_id, $parent_id, '$created_at', $updated_at, $path, $position, '$level', $children_count)";
    
    $insert = true;

    return ($insert)? true : false;
}


function catalog_category_entity_datetime( $array )
{    
    $value_id = $array[0];
    $attribute_id = $array[1];
    $store_id = $array[2];
    $entity_id = $array[3];
    $value = $array[4];

    // (1, 61, 0, 2, NULL)

    $q = "INSERT INTO `catalog_category_entity_datetime` (`value_id`, `attribute_id`, `store_id`, `entity_id`, `value`) VALUES ($value_id, $attribute_id, $store_id, '$entity_id', $value )";
    
    $insert = true;

    return ($insert)? true : false;
}

function catalog_category_entity_int( $array )
{    
    $value_id = $array[0];
    $attribute_id = $array[1];
    $store_id = $array[2];
    $entity_id = $array[3];
    $value = $array[4];
    
    // (1, 69, 0, 1, 1)
    // (2, 69, 0, 2, 1),

    $q = "INSERT INTO `catalog_category_entity_int` (`value_id`, `attribute_id`, `store_id`, `entity_id`, `value`) VALUES ($value_id, $attribute_id, $store_id, '$entity_id', $value )";
    
    $insert = true;

    return ($insert)? true : false;
}

function catalog_category_entity_text( $array )
{    
    $value_id = $array[0];
    $attribute_id = $array[1];
    $store_id = $array[2];
    $entity_id = $array[3];
    $value = $array[4];
    
    // (1, 69, 0, 1, 1)
    // (2, 69, 0, 2, 1),

    $q = "INSERT INTO `catalog_category_entity_text` (`value_id`, `attribute_id`, `store_id`, `entity_id`, `value`) VALUES ($value_id, $attribute_id, $store_id, '$entity_id', $value )";
    
    $insert = true;

    return ($insert)? true : false;
}

function catalog_category_entity_varchar( $array )
{
    $value_id = $array[0];
    $attribute_id = $array[1];
    $store_id = $array[2];
    $entity_id = $array[3];
    $value = $array[4];

    $q = "INSERT INTO `catalog_category_entity_varchar` (`value_id`, `attribute_id`, `store_id`, `entity_id`, `value`) VALUES ($value_id, $attribute_id, $store_id, '$entity_id', $value )";

   /*  (1, 45, 0, 1, 'Root Catalog'),
(2, 52, 0, 2, 'PRODUCTS'),
(3, 45, 0, 2, 'Produce'),
(4, 48, 0, 2, NULL),
(5, 49, 0, 2, NULL),
(6, 60, 0, 2, '1'),
(7, 63, 0, 2, NULL),
(8, 119, 0, 2, 'fruit'),
(9, 120, 0, 2, NULL),
(10, 45, 0, 3, 'Fruit'),
(11, 52, 0, 3, 'PRODUCTS'),
(12, 119, 0, 3, 'fruit'),
(13, 120, 0, 3, 'fruit'),
(15, 48, 0, 3, NULL),
(16, 49, 0, 3, NULL),
(17, 60, 0, 3, NULL),
(18, 63, 0, 3, NULL); */
$insert = true;

return ($insert)? true : false;
}

function catalog_category_product( $array )
{
    $entity_id = $array[0];
    $category_id = $array[1];
    $product_id = $array[2];
    $position = $array[3];

    // (2, 3, 1, 0);

    $q = "INSERT INTO `catalog_category_product` (`entity_id`, `category_id`, `product_id`, `position`) VALUES ($entity_id, $category_id, $product_id, '$position')";
    $insert = true;

    return ($insert)? true : false;
}

function catalog_category_product_index_store1( $array )
{
    $category_id = $array[0];
    $product_id = $array[1];
    $position = $array[2];
    $is_parent = $array[3];
    $store_id = $array[2];
    $visibility = $array[3];

    /* (2, 1, 10000, 0, 1, 4),
    (3, 1, 0, 1, 1, 4); */

    $q = "INSERT INTO `catalog_category_product_index_store1` (`category_id`, `product_id`, `position`, `is_parent`, `store_id`, `visibility`) VALUES ($category_id, $product_id, $position, $is_parent, $store_id, $visibility)";
    $insert = true;

    return ($insert)? true : false;
}

function catalog_category_product_index_store1_replica( $array )
{
    $category_id = $array[0];
    $product_id = $array[1];
    $position = $array[2];
    $is_parent = $array[3];
    $store_id = $array[2];
    $visibility = $array[3];

    /* (2, 1, 10000, 0, 1, 4),
    (3, 1, 0, 1, 1, 4); */

    $q = "INSERT INTO `catalog_category_product_index_store1_replica` (`category_id`, `product_id`, `position`, `is_parent`, `store_id`, `visibility`) VALUES ($category_id, $product_id, $position, $is_parent, $store_id, $visibility)";
    $insert = true;

    return ($insert)? true : false;
}

function catalog_eav_attribute( $array )
{
    /* $attribute_id = $array[0];
    $frontend_input_renderer = $array[1];
    $is_global = $array[2];
    $is_visible = $array[3];
    $is_searchable = $array[4];
    $is_filterable = $array[5];
    $is_comparable = $array[6];
    $is_visible_on_front = $array[7];
    $is_html_allowed_on_front = $array[8];
    $is_used_for_price_rules = $array[9];
    $is_filterable_in_search = $array[10];
    $used_in_product_listing = $array[11];
    $used_for_sort_by = $array[12];
    $apply_to = $array[13];
    $is_visible_in_advanced_search = $array[14];
    $position = $array[15];
    $is_wysiwyg_enabled = $array[16];
    $is_used_for_promo_rules = $array[17];
    $is_required_in_admin_store = $array[18];
    $is_used_in_grid = $array[19];
    $is_visible_in_grid = $array[20];
    $is_filterable_in_grid = $array[21];
    $search_weight = $array[22];
    $additional_data = $array[23]; */

    /* (2, 1, 10000, 0, 1, 4),
    (3, 1, 0, 1, 1, 4); */

   /*  $q = "INSERT INTO `catalog_eav_attribute` (`attribute_id`, `frontend_input_renderer`, `is_global`, `is_visible`, `is_searchable`, `is_filterable`, `is_comparable`, `is_visible_on_front`, `is_html_allowed_on_front`, `is_used_for_price_rules`, `is_filterable_in_search`, `used_in_product_listing`, `used_for_sort_by`, `apply_to`, `is_visible_in_advanced_search`, `position`, `is_wysiwyg_enabled`, `is_used_for_promo_rules`, `is_required_in_admin_store`, `is_used_in_grid`, `is_visible_in_grid`, `is_filterable_in_grid`, `search_weight`, `additional_data`) VALUES ($attribute_id, $frontend_input_renderer, $is_global, $is_visible, $is_searchable, $is_filterable, $is_comparable, $is_visible_on_front, $is_html_allowed_on_front, $is_used_for_price_rules, $is_filterable_in_search, $used_in_product_listing,$used_for_sort_by, $apply_to, $is_visible_in_advanced_search, $position, $is_wysiwyg_enabled, $is_used_for_promo_rules, $is_required_in_admin_store, $is_used_in_grid, $is_visible_in_grid, $is_filterable_in_grid, $search_weight, $additional_data )"; */

}

function catalog_product_entity( $array )
{
    $entity_id = $array[0];
    $attribute_set_id = $array[1];
    $type_id = $array[2];
    $sku = $array[3];
    $has_options = $array[4];
    $required_options = $array[5];
    $created_at = $array[6];
    $updated_at = $array[7];

    /* (1, 4, 'virtual', 'Red Apple 110', 0, 0, '2021-06-17 16:13:35', '2021-06-18 09:33:03') */

    $q = "INSERT INTO `catalog_product_entity` (`entity_id`, `attribute_set_id`, `type_id`, `sku`, `has_options`, `required_options`, `created_at`, `updated_at`) VALUES ($entity_id, $attribute_set_id, $is_global, '$type_id', '$sku', $has_options, $required_options, $created_at, $updated_at)";

    $insert = mysql_query($q);

    return ($insert)? true : false;

}

function catalog_product_entity_decimal( $array )
{
    $entity_id = $array[0];
    $attribute_set_id = $array[1];
    $type_id = $array[2];
    $sku = $array[3];
    $has_options = $array[4];
    $required_options = $array[5];
    $created_at = $array[6];
    $updated_at = $array[7];

    /* (1, 4, 'virtual', 'Red Apple 110', 0, 0, '2021-06-17 16:13:35', '2021-06-18 09:33:03') */

    $q = "INSERT INTO `catalog_product_entity_decimal` (`value_id`, `attribute_id`, `store_id`, `entity_id`, `value`) VALUES ($value_id, $attribute_id, $store_id, '$entity_id', '$value')";

    $insert = mysql_query($q);

    return ($insert)? true : false;

}

function catalog_product_entity_int( $array )
{
    $value_id = $array[0];
    $attribute_id = $array[1];
    $store_id = $array[2];
    $entity_id = $array[3];
    $value = $array[4];

    /* (1, 77, 0, 1, '1.000000') */

    $q = "INSERT INTO `catalog_product_entity_int` (`value_id`, `attribute_id`, `store_id`, `entity_id`, `value`) VALUES ($value_id, $attribute_id, $store_id, '$entity_id', '$value')";

    $insert = mysql_query($q);

    return ($insert)? true : false;

}

function catalog_product_entity_text( $array )
{
    $value_id = $array[0];
    $attribute_id = $array[1];
    $store_id = $array[2];
    $entity_id = $array[3];
    $value = $array[4];

    /* 
    (1, 75, 0, 1, '<p>Red Apple Description</p>'),
    (2, 85, 0, 1, 'Red Apple'),
    (3, 76, 0, 1, '<p>Red Apple Short Desc</p>');
    */

    $q = "INSERT INTO `catalog_product_entity_int` (`value_id`, `attribute_id`, `store_id`, `entity_id`, `value`) VALUES ($value_id, $attribute_id, $store_id, '$entity_id', '$value')";

    $insert = mysql_query($q);

    return ($insert)? true : false;

}

function catalog_product_entity_varchar( $array )
{
    $value_id = $array[0];
    $attribute_id = $array[1];
    $store_id = $array[2];
    $entity_id = $array[3];
    $value = $array[4];

    /* 
    (1, 134, 0, 1, '2'),
    (2, 86, 0, 1, 'Red Apple Red Apple Description'),
    (3, 84, 0, 1, 'Red Apple'),
    (4, 124, 0, 1, '0'),
    (5, 73, 0, 1, 'Red Apple'),
    (6, 106, 0, 1, 'container2'),
    (7, 121, 0, 1, 'red-apple');
    */

    $q = "INSERT INTO `catalog_product_entity_varchar` (`value_id`, `attribute_id`, `store_id`, `entity_id`, `value`) VALUES ($value_id, $attribute_id, $store_id, '$entity_id', '$value')";

    $insert = mysql_query($q);

    return ($insert)? true : false;

}

function catalog_product_index_eav( $array )
{
    $entity_id = $array[0];
    $attribute_id = $array[1];
    $store_id = $array[2];
    $value = $array[3];
    $source_id = $array[4];

    /* 
    (1, 99, 1, 4, 1); 
    */

    $q = "INSERT INTO `catalog_product_index_eav` (`entity_id`, `attribute_id`, `store_id`, `value`, `source_id`) VALUES
    ($value_id, $attribute_id, $store_id, '$entity_id', '$value')";

    $insert = mysql_query($q);

    return ($insert)? true : false;

}

function catalog_product_index_price( $array )
{
    $entity_id = $array[0];
    $customer_group_id = $array[1];
    $website_id = $array[2];
    $tax_class_id = $array[3];
    $price = $array[4];
    $final_price = $array[5];
    $min_price = $array[6];
    $max_price = $array[7];
    $tier_price = $array[8];

    /* 
    (1, 0, 1, 0, '1.000000', '1.000000', '1.000000', '1.000000', NULL),
    (1, 1, 1, 0, '1.000000', '1.000000', '1.000000', '1.000000', NULL),
    (1, 2, 1, 0, '1.000000', '1.000000', '1.000000', '1.000000', NULL),
    (1, 3, 1, 0, '1.000000', '1.000000', '1.000000', '1.000000', NULL);
    */

    $q = "INSERT INTO `catalog_product_index_price` (`entity_id`, `customer_group_id`, `website_id`, `tax_class_id`, `price`, `final_price`, `min_price`, `max_price`, `tier_price`) VALUES
    ($value_id, $attribute_id, $store_id, '$entity_id', '$value')";

    $insert = mysql_query($q);

    return ($insert)? true : false;

}

function catalog_product_index_website( $array )
{
    $website_id = $array[0];
    $customer_group_id = $array[1];
    $website_date = $array[2];
    $rate = $array[3];

    /* 
    (1, 1, '2021-06-18', 1);
    */

    $q = "INSERT INTO `catalog_product_index_website` (`website_id`, `default_store_id`, `website_date`, `rate`) VALUES ($website_id, $default_store_id, $website_date, '$rate', '$value')";

    $insert = mysql_query($q);

    return ($insert)? true : false;

}

function catalog_product_link_attribute( $array )
{
    $product_link_attribute_id = $array[0];
    $link_type_id = $array[1];
    $product_link_attribute_code = $array[2];
    $data_type = $array[3];

    /* 
    (1, 1, '2021-06-18', 1);
    */

    $q = "INSERT INTO `catalog_product_link_attribute` (`product_link_attribute_id`, `link_type_id`, `product_link_attribute_code`, `data_type`) VALUES
    ($product_link_attribute_id, $link_type_id, '$product_link_attribute_code', $data_type)";

    $insert = mysql_query($q);

    return ($insert)? true : false;

}

function catalog_product_link_type( $array )
{
    $link_type_id = $array[0];
    $code = $array[1];
    $product_link_attribute_code = $array[2];
    $data_type = $array[3];

    /* 
    (1, 'relation'),
    (3, 'super'),
    (4, 'up_sell'),
    (5, 'cross_sell');
    */

    $q = "INSERT INTO `catalog_product_link_type` (`link_type_id`, `code`) VALUES
    ($product_link_attribute_id, $link_type_id, '$product_link_attribute_code', $data_type)";

    $insert = mysql_query($q);

    return ($insert)? true : false;

}

function catalog_product_website( $array )
{
    $link_type_id = $array[0];
    $code = $array[1];
    $product_link_attribute_code = $array[2];
    $data_type = $array[3];

    /*     
(   1, 1);
    */

    $q = "INSERT INTO `catalog_product_website` (`product_id`, `website_id`) VALUES
    ($product_id, $website_id)";

    $insert = mysql_query($q);

    return ($insert)? true : false;

}

function catalog_url_rewrite_product_category( $array )
{
    $url_rewrite_id = $array[0];
    $category_id = $array[1];
    $product_id = $array[2];

    /* 
    (13, 3, 1);
    */

    $q = "INSERT INTO `catalog_url_rewrite_product_category` (`url_rewrite_id`, `category_id`, `product_id`) VALUES
    ($url_rewrite_id, $link_tycategory_idpe_id, '$product_id')";

    $insert = mysql_query($q);

    return ($insert)? true : false;

}

function inventory_stock( $array )
{
    $stock_id = $array[0];
    $name = $array[1];

    /* 
    (1, 'Default Stock');
    */

    $q = "INSERT INTO `inventory_stock` (`stock_id`, `name`) VALUES
    ($stock_id, $name)";

    $insert = mysql_query($q);

    return ($insert)? true : false;

}

function inventory_low_stock_notification_configuration( $array )
{
    $source_code = $array[0];
    $sku = $array[1];
    $notify_stock_qty = $array[2];

    /* 
    ('default', 'Red Apple 110', NULL);
    */

    $q = "INSERT INTO `inventory_low_stock_notification_configuration` (`source_code`, `sku`, `notify_stock_qty`) VALUES ('$source_code', '$sku', $notify_stock_qty)";

    $insert = mysql_query($q);

    return ($insert)? true : false;

}

function inventory_stock_sales_channel( $array )
{
    $type = $array[0];
    $code = $array[1];
    $stock_id = $array[2];

    /*     
    ('website', 'base', 1);
    */

    $q = "INSERT INTO `inventory_stock_sales_channel` (`type`, `code`, `stock_id`) VALUES ('$type', '$code', $stock_id)";

    $insert = mysql_query($q);

    return ($insert)? true : false;

}

function inventory_source_item( $array )
{
    $source_item_id = $array[0];
    $source_code = $array[1];
    $sku = $array[2];
    $quantity = $array[3];
    $status = $array[4];

    /* 
    
    (1, 'default', 'Red Apple 110', '1000.0000', 1);
    */

    $q = "INSERT INTO `inventory_source_item` (`source_item_id`, `source_code`, `sku`, `quantity`, `status`) VALUES ($source_item_id, '$source_code', '$sku', '$quantity', $status)";

    $insert = mysql_query($q);

    return ($insert)? true : false;

}

function inventory_source_stock_link( $array )
{
    $link_id = $array[0];
    $stock_id = $array[1];
    $source_code = $array[2];
    $priority = $array[3];

    /* 
(1, 1, 'default', 1);

    */

    $q = "INSERT INTO `inventory_source_stock_link` (`link_id`, `stock_id`, `source_code`, `priority`) VALUES ( $link_id, $stock_id, '$source_code', $priority)";

    $insert = mysql_query($q);

    return ($insert)? true : false;

}