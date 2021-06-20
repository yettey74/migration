<?php

function getPath( $table )
{
    // do the math
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "1001";
    $db_database = "magento";

    $conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $q = $conn->query( "SELECT `path` FROM `$table`" );
    // validation

    // math

    return false;
}

function getNextInsertID( $table = '', $field = '' ){
    // check if valid
    
    // do the math
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "1001";
    $db_database = "magento";

    $conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $q = $conn->query( "SELECT MAX(`$field`) as `max` FROM `$table`" );

    if( $q !== FALSE )
    {
        // get the larget number from array
        foreach($q as $r) {
            return $r['max'];
        }
    }

    return false;
}

function getNextPostion( $table , $field ){
    // check if valid
    
    // do the math
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "1001";
    $db_database = "magento";

    $conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $q = $conn->query( "SELECT MAX(`$field`) as `max` FROM `$table`" );

    if( $q !== FALSE )
    {
        // get the larget number from array
        foreach($q as $r) {
            return $r['max'];
        }
    }

    return false;
}

?>