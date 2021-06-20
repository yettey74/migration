<?php
## Functions that relate only to magento databas

// flowchart
// 1. add category
// 2. add catalog_category_entity_datetime



function catalog_category_entity( $array, $table )
{   
    // PDO Connection instantiated per call for security 
    // PDO closes the connection automatically
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "1001";
    $db_database = "magento";
 
    $conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    // secure & valid check
    $insert_id = null;
    //return ( !is_array( $array ) )?? false;
    //return ( !is_string( $table ) )?? false;
   
    $nextEntityID = getNextInsertID( 'catalog_category_entity', 'entity_id' );          //auto
    $attribute_set_id = 3;      // =3 .. not sure why yet
    $parent_id = 1;             // 0 = root
    $created_at = '';      // datetime
    $updated_at = '';         // datetime
    $path = "1/" . $nextEntityID+1;    // append entityid to end for whole path              
    $position = getNextPostion( 'catalog_category_entity', 'position' );//  Relates to position on tree
    $position++;
    $level = 1;                // What level on tree does it belong if root->cat then = 1, if root->cat->cat then = 3.  the paths relate to the entity_id,its relation is th second last number in the path array

    $children_count = 0;        // root = total categories, each entity has children then count
    
    // (1, 3, 0, '2021-06-10 23:14:24', '2021-06-17 16:17:51', '1', 0, 0, 2)


    $sql = "INSERT INTO `catalog_category_entity` (`attribute_set_id`, `parent_id`, `path`, `position`, `level`, `children_count`) VALUES ( :b, :c, :d, :e, :f, :g )";

    $q = $conn->prepare($sql);
    
    $q->execute( array(':b'=>$attribute_set_id, ':c'=>$parent_id, ':d'=>$path, ':e'=>$position,
    ':f'=>$level, ':g'=>$children_count ) );

    if ( $q == true )
    {
        $insert_id = getNextInsertID( 'catalog_category_entity', 'entity_id' );
    } 

    return $insert_id;
}

function catalog_category_entity_datetime( $array )
{    
    $counter = 0;
    /*
    One EAV required for each entity_id.  root requries only one as TLD
    EAV 61
    EAV 62
    */
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "1001";
    $db_database = "magento";
 
    $conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $attribute_id_array = array( '61', '62' );      // EAV 61 + 62
    $store_id = $array[0];                          // id = 0 for single store
    $entity_id = $array[1];                         // id of the category

    // (1, 61, 0, 2, NULL), (1, 62, 0, 2, NULL)

    foreach( $attribute_id_array as $attribute_id )
    {
        $sql = "INSERT INTO `catalog_category_entity_datetime` (`attribute_id`, `store_id`, `entity_id` ) VALUES ( :a, :b, :c )";
        $q = $conn->prepare( $sql );
        $q->execute( array(':a'=>$attribute_id, ':b'=>$store_id, ':c'=>$entity_id ) );
        
        if ( $q == true )
        {
            $counter++;
        }
    }

    return ($counter == 6 )? true : false;
}

function catalog_category_entity_varchar( $entity_id, $table )
{
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "1001";
    $db_database = "magento";
 
    $conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pointer = 0;
    $counter = 0;
    $store_id = 0;
    /*
    One EAV required for each entity_id.  root requries only one as TLD
        EAV 45 name
        EAV 48 image
        EAV 49 meta_title
        EAV 60 custom_design
        EAV 63 page_layout 2columns-right
        EAV 119 url_key
        EVA 120 url_path
        EAV 52 display_mode
    */

    $attribute_id_key_array = array( '45', '48', '49', '52', '60', '63', '119', '120' );      // EAV
    $value_id_value_array = array( 'Vegetables', 'NULL', 'vegetables', 'PRODUCTS', '1', '2columns-right', 'vegetables','NULL' );

    foreach( $attribute_id_key_array as $attribute_id )
    {
        $entity_id;
        $thisKey = $attribute_id_key_array[$pointer];
        $thisValue = $value_id_value_array[$pointer];
        $sql = "INSERT INTO `$table` ( `attribute_id`, `store_id`, `entity_id`, `value`) VALUES ( :a, :b, :c, :d )";
        $q = $conn->prepare( $sql );
        $q->execute( array(':a'=>$thisKey, ':b'=>$store_id, ':c'=>$entity_id, ':d'=>$thisValue ) );
        $pointer++;
        
        if ( $q == true )
        {
            $counter++;
        }
    }

    return ($counter == 8 )? true : false;

}


function catalog_category_entity_int( $entity_id, $table )
{
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "1001";
    $db_database = "magento";
 
    $conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pointer = 0;
    $counter = 0;
    $store_id = 0;
    /*
    One EAV required for each entity_id.  root requries only one as TLD
    EAV 46 is_active
    EAV 53 landing_page
    EAV 54 is_anchor
    EAV 69 include in menu
    EAV 70 custom_use_parent_settings
    EAV 71 custom_apply_to_products
    */

    $attribute_id_key_array = array( '46','53', '54', '69', '70', '71' );      // EAV
    $value_id_value_array = array( '1', NULL, '1', '1', '0', '0','0' );

    foreach( $attribute_id_key_array as $attribute_id )
    {
        $entity_id;
        $thisKey = $attribute_id_key_array[$pointer];
        $thisValue = $value_id_value_array[$pointer];
        $sql = "INSERT INTO `$table` ( `attribute_id`, `store_id`, `entity_id`, `value`) VALUES ( :a, :b, :c, :d )";
        $q = $conn->prepare( $sql );
        $q->execute( array(':a'=>$thisKey, ':b'=>$store_id, ':c'=>$entity_id, ':d'=>$thisValue ) );
        $pointer++;
        
        if ( $q == true )
        {
            $counter++;
        }
    }

    return ($counter == 8 )? true : false;

}

function catalog_category_entity_text( $entity_id, $table )
{    
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "1001";
    $db_database = "magento";
 
    $conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pointer = 0;
    $counter = 0;
    $store_id = 0;
    /*
    One EAV required for each entity_id.  
    root requries only one as TLD  (1, 69, 0, 1, 1)
    all others reqruie full EAV list
    EAV 47 description
    EAV 50 meta_keywords
    EAV 51 meta_description 
     */    
    $attribute_id_key_array = array( '47','50', '51' );      // EAV
    $value_id_value_array = array( NULL, NULL, NULL );
    foreach( $attribute_id_key_array as $attribute_id )
    {
        $entity_id;
        $thisKey = $attribute_id_key_array[$pointer];
        $thisValue = $value_id_value_array[$pointer];
        $sql = "INSERT INTO `catalog_category_entity_text` ( `attribute_id`, `store_id`, `entity_id`, `value`) VALUES ( :a, :b, :c, :d )";
        $q = $conn->prepare( $sql );
        $q->execute( array(':a'=>$thisKey, ':b'=>$store_id, ':c'=>$entity_id, ':d'=>$thisValue ) );
        $pointer++;
        
        if ( $q == true )
        {
            $counter++;
        }
    }

    return ($counter == 8 )? true : false;
    $q = "INSERT INTO `catalog_category_entity_text` (`value_id`, `attribute_id`, `store_id`, `entity_id`, `value`) VALUES ($value_id, $attribute_id, $store_id, '$entity_id', $value )";
    
    $insert = true;

    return ($insert)? true : false;
}

?>