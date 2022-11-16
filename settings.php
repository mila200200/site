<?php 
    session_start();
    include "php/databaseBroker.php";
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
    <link rel="stylesheet" href="settings.css">
</head>
<body>
    
    <header>
        <div class="container">
            <section class="logo"> <a href="#"><img src="images/film.png" alt="film" class="logo-icon film"><strong>Movies</strong></a></section>

             <nav>
            <ul>
                <li><a href="movies.php#movies">Movies</a></li>
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
        <div class="account-settings">
        <h2>Account settings <img src="images/account-settings.jpg" alt="acc-settings"></h2>
        <hr>
        <form action="php/update_user_data.php" method="post">
        <div class="info-box">
        <label for="first-name">First name</label>
        <input type="text" id="first-name" name="firstName" placeholder="First Name" value="<?php echo $_SESSION['user_firstname'] ?>">
        <button type="submit" name="save_firstname">Save changes</button>
        </div>

        <div class="info-box">
        <label for="last-name">Last name</label>
        <input type="text" id="last-name" name="lastName" placeholder="Last Name" value="<?php echo $_SESSION['user_lastname'] ?>">
        <button type="submit" name="save_lastname">Save changes</button>
        </div>
    
        <div class="info-box">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Email" value="<?php echo $_SESSION['user_email'] ?>">
        <button type="submit" name="save_email">Save changes</button>
        </div>

        <div class="info-box">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Password" value="<?php echo $_SESSION['user_pass'] ?>">
        <button type="submit" name="save_password">Save changes</button>
        </div>

        <hr>
        </form>

    </div>
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
</body>
</html>