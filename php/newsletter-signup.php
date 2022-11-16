<?php 

session_start();
if(isset($_POST['submit_form']))
{
    include 'databaseBroker.php';
    $newsletter_email = $_SESSION['user_email'];
    
    $query = "SELECT * FROM  `newsletter` where email_user='$newsletter_email'";
    $result=mysqli_num_rows(mysqli_query($conn,$query));
    
    if($result>0)
    {   
        
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Already subscribed on newsletter list');
        window.location. href='../movies.php';
        </script>");

    }
    else
    {
        $query="INSERT INTO newsletter VALUES (null,'$newsletter_email')";
        $sql=mysqli_query($conn,$query);
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Successfuly subscribed on newsletter list');
        window.location. href='../movies.php';
        </script>");
        
    }

    
}
?>

?>