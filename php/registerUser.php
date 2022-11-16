<?php
session_start();
include("databaseBroker.php");
if(isset($_POST['register']))
{
    extract($_POST);
    $query = "SELECT * FROM user where email='$email'";
    $sql=mysqli_query($conn,$query);
    if(mysqli_num_rows($sql)>0)
    {
    echo "Sorry, " . $_POST["firstName"] . " Email Already Taken," ?> <a href="../register.php">try again</a> <?php "."; 
	exit();
    }
    else {
        $query="INSERT INTO user VALUES (null,'$firstName', '$lastName', '$email', '$password')";
        $sql=mysqli_query($conn,$query);
        $_SESSION["user_id"]=$row['id'];
        $_SESSION["user_email"] = $_POST['email'];
        $_SESSION["user_pass"]=$_POST['password'];
        $_SESSION["user_firstname"] = $_POST['firstName'];
        $_SESSION["user_lastname"] = $_POST['lastName'];
        
    }
    if(isset($_SESSION["user_email"])){
        header ("Location: ../movies.php");
        }

}
?>