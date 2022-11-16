<?php
include "php/databaseBroker.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="image/png" href="images/film.png" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOVIES</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="register.css">
</head>
<body>

    <div class="container">

        <div class="sign-up">
            <img src="images/hello.png" alt="welcome">
            <form action="php/registerUser.php" method="post">
                <h2>Register</h2>
                <p>Create your account</p>
                <div class="form-info">
                    <input type="text" name="firstName" placeholder="First Name" required="required">
                    <input type="text" name="lastName" placeholder="Last Name" required="required">      	
                    <input type="email" name="email" placeholder="Email" required="required">
                    <input type="password" name="password" placeholder="Password" required="required">
                    <input type="password" name="confirmPassword" placeholder="Confirm Password" required="required">
                    <div class="box">
                    <label ><input type="checkbox" class="checkbox" name="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></label>
                    </div>
                    <button type="submit" name="register" value="register">Register Now</button>
                </div>
                <div class="sign-in-alt">Already have an account? <a href="index.php">Sign in</a></div>
            </form>
            
        </div>

    </div>
    

</body>
</html>