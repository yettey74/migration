<?php
include( 'db.php' );
include( 'inc/functions.php' );
include( 'inc/magento2_catalog.php' );
include( 'inc/magento2_product.php' );
include( 'inc/magento2_customer.php' );
include( 'inc/magento2_inventory.php' );


echo'<html>';
echo '<head>';
echo '<title>Migration Home Page</title>';
echo '</head>';
echo '<body align="center">';
/* echo '<h1>Proprietary Migration Tool</h1>';
echo '<h2>P.M.T.</h2>';
echo '<p>please select a schema to migrate from:</p>';
echo '<p>please select file</p>';

echo '<p>Please select a schema to migrate to:</p>';
echo '<p>please select file</p>';
echo '<button type="submit" name="submit">Create migration file</button>';

echo '<p>We need to see what happens to the database when a category is entered<br>
so we can run a command to take a snapshot of the tables first getting tablename and row count only';

echo'<p>after we add a single category we can then run another snapshow and compare the 2.';

echo '<p>From this w can then build the commands required to enter a category</p>';

echo '<h2>Step one<h2>';
echo '<p>Run snapshot</p>';
echo '<button type="button" name="snapshot1">Pre</button>';
echo '<h2>Step Two<h2>';
echo '<p>Run snapshot again</p>';
echo '<button type="button" name="snapshot2">Post</button>';

echo '<h2>Step Three<h2>';
echo '<button type="button" name="compare">Compare</button>';

echo '<p>An analysis of the schema can now be run to see what is the differences</p>'; */

//in the end you want to be able to see what data came from where and where it is to be migrated to.
// bagisto.catgory.id = magento.category.id 
// bagisto categoryName = magento.categories_Name

// once these have been mapped we can start to write the sql statements to migrate the data


// Catalog Product Table
//  So we need to get the relevant data for each table
// in Magento the category start is 

// auto insert a row for a category to test
/*
Enable Category = 1
Include in Menu = 1
Category Name = "test"

Display Settings 
 Display Mode = "Products only"
 Anchor = 1
Default Product Listing Sort By = "position"
Layered Navigation Price Step = "A$"

Search Engine Optimization
URL Key =""
Meta Title =""
Meta Keywords =""
Meta Description =""

Products in Category 
empty

Design
Use Parent Category Settings
Theme = "Magento Luma"
Layout = "2 columns with right bar"
Custom Layout Update = "No update"
Apply Design to Products = "0"  

Schedule Design Update 
empty
*/
// $catalog_category_entity = [];
$catalog_category_entity_array[] = '';
$catalog_category_entity_datetime_array = [];
$catalog_category_entity_varchar_array = [];
$catalog_category_entity_int_array = [];
$catalog_category_entity_text_array = [];

/* catalog_category_entity_datetime( $catalog_category_entity_datetime );
catalog_category_entity_varchar( $catalog_category_entity_varchar );
catalog_category_entity_int( $catalog_category_entity_int );
catalog_category_entity_text( $catalog_category_entity_text ); */

// so now we need a data dump of categories from another system
// get csv file 
$catleadin = '$q = "INSERT INTO `catalog_category_entity` (`entity_id`, `attribute_set_id`, `parent_id`, `created_at`, `updated_at`, `path`, `position`, `level`, `children_count`) VALUES (';
$catleadout = ');';
$catsql = '';
$file = "fnf-category.csv";
$catalog_category_entity = [];
$insertPairs = array();
$insertVals = array();
$sql = "";
$row = 0;
$insert_id = null;

if( ($handle = fopen( $file , "r" )) !== FALSE ){    
    while( ( $data = fgetcsv( $handle, 1000, ",") ) !== FALSE )
    {   
        $tableName = 'catalog_category_entity';
        //$catalog_category_entity = [];          // flush array
        $c = 1;                                 // reset count to start at item 1
        $rowLength = sizeof($data);

        foreach( $data as $key => $value )
        {            
            if( $c > 1 )
            {
                //echo $key . ' => ' . $value;
                // create key => value pairs for sql injection
                $catalog_category_entity[$key] = $value;
            }
            $c++;
        }

        $catalog_category_entity_array[] = $catalog_category_entity;
    }
    fclose( $handle );
} else {
    echo 'No file to find';
    die("Unable to open file!");'categories.csv';
}


if ( catalog_category_entity( $catalog_category_entity_array, 'catalog_category_entity' ) == true )
{
    echo 'Database ' . strtoupper('catalog_category_entity') . ' updated';
} else {
    echo 'Failed to update ' . strtoupper('catalog_category_entity') . '.';
}
echo '<br>';

$store_id = 0;          // id = 0 for single store
$entity_id = getNextInsertID( 'catalog_category_entity', 'entity_id' );
//echo 'Entity: ' . $entity_id;
// we must the rest of the info off to the other tables
$catalog_category_entity_datetime_array = array( $store_id, $entity_id);

if ( catalog_category_entity_datetime( $catalog_category_entity_datetime_array, 'catalog_category_entity_datetime' ) == true )
{
    echo 'Database ' . strtoupper('catalog_category_entity_datetime') . ' updated';
} else {
    echo 'Failed to update ' . strtoupper('catalog_category_entity_datetime') . '.';
}
echo '<br>';

// we must the rest of the info off to the other tables

if ( catalog_category_entity_varchar( $entity_id, 'catalog_category_entity_varchar' ) == true )
{
    echo 'Database ' . strtoupper('catalog_category_entity_varchar') . ' updated';
} else {
    echo 'Failed to update ' . strtoupper('catalog_category_entity_varchar') . '.';
}
echo '<br>';

if ( catalog_category_entity_int( $entity_id, 'catalog_category_entity_int' ) == true )
{
    echo 'Database ' . strtoupper('catalog_category_entity_int') . ' updated';
} else {
    echo 'Failed to update ' . strtoupper('catalog_category_entity_int') . '.';
}
echo '<br>';

if ( catalog_category_entity_text( $entity_id, 'catalog_category_entity_text' ) == true )
{
    echo 'Database ' . strtoupper('catalog_category_entity_text') . ' updated';
} else {
    echo 'Failed to update ' . strtoupper('catalog_category_entity_text') . '.';
}
echo '<br>';

//echo catalog_category_entity( $conn, $catalog_category_entity_array, 'catalog_category_entity' );
echo '</body>';
echo '<html>';
?>