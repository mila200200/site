<?php     
$to_email = 'kristinaneskovic9@gmail.com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: kristinaneskovic9@gmail.com';
mail($to_email,$subject,$message,$headers);
echo $to_email;
//header("Location: ../aboutUs.php");

//in process....

?>