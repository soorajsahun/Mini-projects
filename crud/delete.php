<?php
// establish database connection
    include_once("config.php");

    // getting id of the data from url
    $id=$_GET['id'];

    // writing query to get all rthe data in databse
    $result=mysqli_query($mysqli,"DELETE FROM users WHERE id=$id");

    // redirecting to the  display page  (index.php  in our case)
    header("Location:index.php");
?>