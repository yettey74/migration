<?php
// Database configuration via PDO
$db_server = "localhost";
$db_username = "root";
$db_password = "1001";
$db_database = "magento";

$conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>