<?php
 
$databaseHost = 'localhost';
$databaseName = 'test';
$databaseUsername = 'root';
$databasePassword = '';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

// Check for connection success
if(!$mysqli){
    die("connection to this database failed due to" . mysqli_connect_error());
}
// echo "Success connecting to the db";
?>
