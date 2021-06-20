<?php
//echo print_R( $bagisto );
function isReadable( $file )
{
    if( fopen( $file , "r" ) ){
        return true;
    }

    return false;
}

function isWriteable( $file )
{
    if( fopen( $file , "w" ) ){
        return true;
    }

    return false;
}


function fileRead ( $file )
{
    $handle= '';

    if( ($handle = fopen( $file , "r" )) !== FALSE ){
        return $handle;
    }

    return false;
}

function fileWrite ( $file )
{
    $handle= '';
    
    isWrite( $file );

    if( ($handle = fopen( $file , "w" )) !== FALSE ){
        return $handle;
    }

    return false;
}
function ifFileRead ( $file )
{

    if( ($handle = fopen( $file , "r" )) !== FALSE ){
        return $handle;
    }

    return false;
}
?>