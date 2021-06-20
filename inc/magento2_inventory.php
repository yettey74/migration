<?php

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

/*
(1, 1, 1, '1000.0000', '0.0000', 1, 0, 0, 1, '1.0000', 1, '10000.0000', 1, 1, NULL, '1.0000', 1, 1, 1, 0, 1, '1.0000', 1, 0, 0, 0);
*/
    $q = "INSERT INTO `cataloginventory_stock_item` (`item_id`, `product_id`, `stock_id`, `qty`, `min_qty`, `use_config_min_qty`, `is_qty_decimal`, `backorders`, `use_config_backorders`, `min_sale_qty`, `use_config_min_sale_qty`, `max_sale_qty`, `use_config_max_sale_qty`, `is_in_stock`, `low_stock_date`, `notify_stock_qty`, `use_config_notify_stock_qty`, `manage_stock`, `use_config_manage_stock`, `stock_status_changed_auto`, `use_config_qty_increments`, `qty_increments`, `use_config_enable_qty_inc`, `enable_qty_increments`, `is_decimal_divided`, `website_id`) 
    VALUES ('', $product_id, $stock_id, '$qty', '$min_qty', $use_config_min_qty, $is_qty_decimal, $backorders, $use_config_backorders, '$min_sale_qty', $use_config_min_sale_qty, '$max_sale_qty', $use_config_max_sale_qty, $is_in_stock, $low_stock_date, '$notify_stock_qty', $use_config_notify_stock_qty, $manage_stock, $use_config_manage_stock, $stock_status_changed_auto, $use_config_qty_increments, '$qty_increments', $use_config_enable_qty_inc, $enable_qty_increments, $is_decimal_divided, $website_id)";

    $r = $insert;
    

// check row inserted
    $insert = true;

    // get the key=>value pairs and insert into db
    return ( $insert )? true : false;
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
?>