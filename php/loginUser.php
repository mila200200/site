<?php
session_start();
if(isset($_POST['login']))
{
    extract($_POST);
    include 'databaseBroker.php';
    $sql=mysqli_query($conn,"SELECT * FROM user where email='$email' and password='$password'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["user_id"]=$row['id'];
        $_SESSION["user_email"] = $row['email'];
        $_SESSION["user_pass"]=$row['password'];
        $_SESSION["user_firstname"] = $row['first_name'];
        $_SESSION["user_lastname"] = $row['last_name'];
    }
    else
    {
        echo "Incorrect username or password. " ?> <a href="../index.php">Try again</a> <?php ".";
    }
    if(isset($_SESSION['user_email'])){
        header("Location: ../movies.php");
    }
}
?>
