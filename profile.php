<?php

require "php/databaseBroker.php";
require "php/movieclass.php";

session_start();

if(!isset($_SESSION['user_email'])){
    header('Location: index.php');
    exit();
}

$data = Movie::getAll($_SESSION['user_id'],$conn);

if(!$data){
    echo "Error!";
    die();
}

if($data->num_rows==0){
    echo "Nothing saved.";
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
    <link rel="stylesheet" href="profile.css">
    
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

    <div class="container">

    <div class="table">
    <h2>Liked movies</h2>
    <div class="search search-box">
        <input id="search_text" name="search_text" type="text" placeholder="Search here..."> 
        <button id="btn-search"><img src="images/search.png" alt="search"></button>
        <div id="result">
            
        </div>
    </div>
    <div class="cells load">
    <table class="saved-movies">
        <thead>
            <th></th>
            <th>Movie title</th>
            <th>Category</th>
            <th>Actors</th>
            <th>Share</th>
            <th>Delete</th>
        </thead>
        <tbody id="saved-movies-table">

        <?php
            while($row = $data->fetch_array()):
        ?>

            <tr id="delete" class="record">
                <td><img src="<?php echo $row["movie_pic"] ?>" alt=""></td>
                <td><?php echo $row["movie_title"] ?></td>
                <td><?php echo $row["category_name"] ?></td>
                <td><?php echo $row["actors"] ?></td>
                <td><img src="images/share.png" alt="share" id="share-movie"></td>
                <td><a href="#" class="delbutton" id="<?php echo $row["movie_id"]?>" 
                onclick="deleteAjax(<?php echo $row['movie_id']?>)"><img src="images/bin.png" 
                alt="bin" id="delete-movie"></a></td> 
            </tr>
            <?php
            endwhile;
        }
            ?>

        </tbody>
        <tfoot>

        </tfoot>

    </table>
    </div>

    </div>

    </div>

    <div>
        <p style="text-align:center; margin-top:30px; margin-bottom:30px">Thank you for using our services :)</p>
    </div>

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
    /*
        $(document).ready(function(){
            console.log("JJJJJJJJJJDIWAOSLKJJJJJJJJJJJJJJ");
            setInterval(function(){
                $('#load').load("profile.php").fadeIn("slow");
            }, 1000);
        });*/

        function deleteAjax(id){
                var del_id = id;
                const checked = document.getElementById(id);
                
                var info = 'id='+del_id;
                if(confirm("Are you sure you want to delete this record? There is no undo!")){
                    req= $.ajax({
                       type: "GET",
                       url: "php/deleteSavedMovie.php",
                       data: {'id':del_id},
                    });

                    req.done(function(res, textStatus, jqXHR){
                    if(res=="Failed"){
                        console.log("Failed to delete record "+res);
                    alert("Failed to delete record ");
                   
                    }else {
                    $toHide= checked.closest('tr');
                    $toHide.remove();
                    console.log('Record deleted');
                    }
                    console.log(res);
                    });
                }
        }        

        $('#search_text').on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#saved-movies-table tr").filter(function() {
         $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
        });

    </script>





</body>
</html>