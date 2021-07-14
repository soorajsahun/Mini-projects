<?php
// establish database connection
    include_once("config.php");
//get form data
if(isset($_POST['Submit'])){

    $name=mysqli_real_escape_string($mysqli,$_POST['name']);
    $age=mysqli_real_escape_string($mysqli,$_POST['age']);
    $email=mysqli_real_escape_string($mysqli,$_POST['email']);
    // checking empty fields
    if(empty($name)||empty($age)||empty($email)){
        if(empty($name)){
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        if(empty($age)){
            echo "<font color='red'>Age field is empty.</font><br/>";
        }
        if(empty($email)){
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
        // link to previous page
        echo "<br/><h3><a href='javascript:self.history.back();'>Go Back</a></h3>";
    }
    else{
        // insert data to database
        $result=mysqli_query($mysqli,"INSERT INTO `users` (`name`, `age`, `email`) VALUES ('$name', '$age', '$email')");

        // display success message
        echo "<font color='green'><p class='text-primary'><h1>Data added successfully.</h1></p></font>";
        echo "<br/><h3><a href=\"index.php\">View result</a></h3>";
        }
} 

?>