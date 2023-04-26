<?php
//user mysqli_connect for database connection

$databaseHost = 'localhost';
$databaseName = 'usercrud';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>
