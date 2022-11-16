<?php

session_start();
include "php/databaseBroker.php";
require "php/movieclass.php";

if(!isset($_SESSION['user_email'])){
    header('Location: index.php');
    exit();
}

$data = Movie::getAllBestMovies($conn);

if(!$data){
    echo "Error!";
    die();
}

if($data->num_rows==0){
    echo "No movies to show.";
    die();
}
else {


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
    <script src="javascript/javascript.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="jquery/jquery.js"></script>
</head>
<body>
   
    <header>
        <div class="container">
            <section class="logo"> <a href="#"><img src="images/film.png" alt="film" class="logo-icon film"><strong>Movies</strong></a></section>

             <nav>
            <ul>
                <li><a href="movies.php">Movies</a></li>
                <li><a href="aboutUs.php">About us</a></li>
                <li><a href="aboutUs.php#contactus">Contact</a></li>
                <li class="profile-menu">
                    <a href="#"><img src="images/profile-user.png" alt="profile" class="logo-icon"></a>
                    <div class="sub-menu">
                    <div class="dropdown-menu">
                        <a href="profile.php"><img src="images/saved.png" alt="saved">Saved movies</a>
                        <a href="settings.php">My profile</a>
                        <a href="php/logout.php">Log out <img src="images/logout.png" alt="out"></a>
                    </div>
                    </div>
                </li>
                <li class="menu-icon"><a href="#"><img src="images/hamburger.png" alt="menu icon"></a>
                <div class="ham-menu">
                <div class="sub-menu-small-desktops">
                <a href="#">Movies</a>
                <a href="aboutUs.php">About us</a>
                <a href="aboutUs.php#contactus">Contact</a>
                <a href="profile.php"><img src="images/saved.png" alt="saved">Saved movies</a>
                <a href="settings.php">My profile</a>
                <a href="php/logout.php">Log out <img src="images/logout.png" alt="out"></a>
                </div>
                </div>
                </li>
            </ul>
            </nav>
        </div>
    </header>

    <section class="welcome-user">
        <div class="container">
        <div class="welcome"><h2>Welcome <?php echo $_SESSION['user_firstname'] ?> </h2></div>
        </div>
    </section>

    <section class="hero">
        <div class="hero">
        <img src="images/hero-image.jpg" alt="hero image" class="hero-img">
        </div>
        <div class="hero-content">
    
        <div class="container">
        <form action="php/newsletter-signup.php" method="post">
        <h1>Join the club</h1>
        <p>Click the button, leave an e-mail and be one of the first to be notified of the new movies, news & more!</p>
        <button name="submit_form">NEWSLETTER</button>
        </form>
        </div>
        </div> 
    </section>

    <section id="movies" class="best-movies">
        <h2>Best movies</h2>
        <hr>
        <div class="movie-slider">
            <div class="container">
        
        <?php
            while($row = $data->fetch_array()):
        ?>
            <div class="movie" id="<?php echo $row["movie_id"]?>">
                <span class="like"><img src="images/like.png" alt="add"></span>
                <div class="movie-picture">
                    <img src="<?php echo $row['movie_pic']?>" alt="movie-img">
                </div>
                <div class="movie-info">
                    <h5 class="categories"><?php echo $row["category_name"] ?></h5> 
                    <h4 class="movie-title"><?php echo $row["movie_title"] ?></h4>
                    <button class="movie-desc">READ MORE</button>
                </div>
            </div> 
       
    <div id="myDIV" class="hidden" style="display: none;position: fixed;top: 50%;left: auto;right: auto;z-index: 1;background-color: lightblue;border-radius:20px;border: 3px solid cadetblue;width: 70%;">
    <h6 style="font-size: 18px;margin-top: 10px;text-align: center;margin-bottom: 0;">Read-more section</h6>
    <p class="paragraph" style="line-height: 1.3;margin: 15px;font-size: 17px;letter-spacing: 0.5px;" >
    
    </p>
    <button onclick="hideInfo()" style="position: absolute;top: 0;right: 0;margin: 7px;" ><b>X</b></button>
    </div>
    <?php
        endwhile;
        }
        ?>
        </div>
        </div>
        
    </section>

    <footer>

        <div class="footer-nav">
            <div class="container">
                <ul>
                    <li class="list-title">Categories</li>
                    <li><a href="movies.php#movies">Movies</a></li>
                    <li><a href="#">??????</a></li>
                </ul>
                <ul>
                    <li class="list-title">About us</li>
                    <li><a href="aboutUs.php#our-story">Our story</a></li>
                    <li><a href="aboutUs.php#our-team">Our team</a></li>
                </ul>
                <ul>
                    <li class="list-title">Social media</li>
                    <li><a href="https://www.facebook.com/"><img src="images/fb.png" alt="fb" class="social-media-icon"></a></li>
                    <li><a href="https://www.instagram.com/"><img src="images/ig.png" alt="fb" class="social-media-icon"></a></li>
                </ul>
                <ul>
                    <li class="list-title">Customer service</li>
                    <li><a href="aboutUs.php#contactus">Contact</a></li>
                    <li><a href="aboutUs.php#FAQ">FAQ</a></li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            Kristina123455 &copy; All Rights Reserved
        </div>

    </footer>
    
</body>

<script>

    //ADD TO SAVED SECTION

    $(".like").click(function(){
        var elmId = $(this).parent().attr("id");
        //alert(elmId); //ID 
        console.log(elmId);
        req= $.ajax({
                type: "POST",
                url: "php/bestMovies.php",
                data: {'id':elmId},
            });

            req.done(function(res, textStatus, jqXHR){
            if(res=="Success"){
            alert('Movie added');
            console.log('Added');
            }else {
            console.log("Failed to add movie "+res);
            alert("Movie already saved! :)  ");
            }
            console.log(res);
        });
    });

    //READ-MORE BUTTON

    $(".movie-desc").click(function() {
        console.log("Click");
        var elementId = $(this).parent().parent().attr("id");
        //alert(elementId);
        var x = document.getElementById("myDIV");
        if (x.style.display === "none") {
        x.style.display = "block";
        
        req= $.ajax({
                type: "POST",
                url: "php/bestMovies.php",
                data: {'movie_id':elementId},
            });

            req.done(function(res, textStatus, jqXHR){
            if(res=="Failed"){
            $(".paragraph").text("There's no detailed description of the selected film. Contact us if you have any questions :)");
            }else {
            $(".paragraph").text(res);
            }
            console.log(res);
        });
        } else {
        x.style.display = "none";
        }
    });

    function hideInfo(){
        var x = document.getElementById("myDIV");
  
        x.style.display = "none";
        
    }

</script>

</html>