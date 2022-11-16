<?php 

session_start();
include 'databaseBroker.php';

//FIRSTNAME QUERY
if(isset($_POST['save_firstname'])){
    extract($_POST);
    
    $user_id = $_SESSION['user_id'];

    $query = "UPDATE user set first_name='".$_POST['firstName']."' WHERE id=$user_id ";
    
    $sql = mysqli_query($conn, $query);

    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Firstname Modified Successfully-Login again to update data');
    </script>");

    if(session_destroy()){
        header("Location:../index.php");
    }

}

//LASTNAME QUERY
if(isset($_POST['save_lastname'])){
    extract($_POST);
    
    $user_id = $_SESSION['user_id'];

    $query = "UPDATE user set last_name='".$_POST['lastName']."' WHERE id=$user_id ";
    
    $sql = mysqli_query($conn, $query);

    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Lastname Modified Successfully-Login again to update data');
    </script>");

    if(session_destroy()){
        header("Location:../index.php");
    }

}

//EMAIL QUERY
if(isset($_POST['save_email'])){
    extract($_POST);
    
    $user_id = $_SESSION['user_id'];

    $query = "SELECT * FROM  user where email='".$_POST['email']."'";
    $result=mysqli_num_rows(mysqli_query($conn,$query));
    echo $result;
    echo "---------------------";
    if($result>0)
    {  
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Inserted email already exsist! :( ');
    window.location. href='../settings.php';
    </script>");
    
    }
    else
    {

        $query = "UPDATE user 
        set email='".$_POST['email']."' WHERE id=$user_id ";
    
        $sql = mysqli_query($conn, $query);

        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Email Modified Successfully-Login again to update data');
        </script>");

        if(session_destroy()){
            header("Location:../index.php");
            }

    }

 
}

   //PASSWORD QUERY
   if(isset($_POST['save_password'])){
    extract($_POST);
    
    $user_id = $_SESSION['user_id'];

    $query = "UPDATE user set password='".$_POST['password']."' WHERE id=$user_id ";
    
    $sql = mysqli_query($conn, $query);

    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Password Modified Successfully-Login again to update data');
    </script>");

        if(session_destroy()){
        header("Location:../index.php");
        }

    }

?>