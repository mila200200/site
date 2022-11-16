<?php 


include "databaseBroker.php";
include "movieclass.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $status= Movie::deleteById($id,$conn);
    if ($status){
        echo "Success";
    }else{
        echo "Failed";
    }
}

?>