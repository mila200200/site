<?php 
session_start();
include "databaseBroker.php";
include "movieclass.php";


if(isset($_POST['id'])){
    $id = $_POST['id'];
    $userID = $_SESSION['user_id'];
    $status= Movie::insertById($userID,$id,$conn);
    if ($status){
        echo "Success";
    }else{
        echo "Failed";
    }
}

if(isset($_POST['movie_id'])){
    $id = $_POST['movie_id'];
    $status= Movie::getDescription($id,$conn);
    if ($status){
        echo $status;
    }else{
        echo "Failed";
    }
}

?>