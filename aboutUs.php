<?php

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
    <link rel="stylesheet" href="aboutUs.css">
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

    <div class="container">

    <div  class="about-us">
    <div id="our-story" class="about-us-content">
    <h1>Our story</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi modi mollitia tenetur voluptas temporibus molestiae quam, dolor laborum cupiditate nesciunt totam provident nemo tempora, sequi adipisci atque dolores magnam porro. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita quaerat quae velit. Unde placeat et doloremque nemo nisi amet dolore officia illum eos, labore beatae omnis neque. Repudiandae, aspernatur corrupti. Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum iure rerum quo deleniti amet mollitia numquam et doloremque cum, eveniet, modi minus perspiciatis, provident optio? Eos fugit odit cumque qui. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus dolores dignissimos cupiditate numquam debitis optio facilis quisquam magni veritatis fugit, consequatur repellendus, et maiores neque voluptatum minima itaque unde quia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo nihil perspiciatis ipsa enim dolorum perferendis porro, temporibus, nulla illo omnis quia et quisquam provident dolores inventore? Tenetur laudantium praesentium hic!</p>
    </div>
    <img src="images/watchingTV.jpg" alt="watching TV" id="guy">
    </div>

    <div id="our-team" class="our-team">
    <h1>Our team</h1> <hr>
    <div class="slide-show">
        <a class="button" onclick="slider(-1)"><img src="images/previous.png" alt="previous" class="previous"></a>
        <a class="button" onclick="slider(1)"><img src="images/next.png" alt="next" class="next"></a>

    <div class="team-member fade">
        <div class="image">
            <img src="images/man1.png" alt="member1">
        </div>
        <div class="member-info">
            <h3>Borko</h3>
            <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores possimus dignissimos deleniti voluptates, amet, distinctio pariatur reprehenderit voluptatem dicta modi provident tempore molestias ab, porro incidunt hic voluptas neque corporis. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis vero corrupti aperiam quaerat enim nulla, autem dignissimos voluptatibus optio explicabo excepturi amet maxime tenetur modi, distinctio quo ex sint commodi!</p>
        </div>
    </div>

    <div class="team-member fade">
        <div class="image">
            <img src="images/girl1.png" alt="member2">
        </div>
        <div class="member-info">
            <h3>Milica</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, architecto. Quas, aliquam nam velit nisi fugit ipsa, accusantium deserunt quibusdam dolor laboriosam, iure consequatur reiciendis quam minima nesciunt iusto doloremque. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis vero corrupti aperiam quaerat enim nulla, autem dignissimos voluptatibus optio explicabo excepturi amet maxime tenetur modi, distinctio quo ex sint commodi!</p>
        </div>
    </div>

    <div class="team-member fade">
        <div class="image">
            <img src="images/man2.png" alt="member3">
        </div>
        <div class="member-info">
            <h3>Darko</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis facilis ipsum id maxime error. Ab quo voluptatibus neque facere quos necessitatibus ratione. Eum porro tenetur modi veniam, atque perspiciatis sit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis vero corrupti aperiam quaerat enim nulla, autem dignissimos voluptatibus optio explicabo excepturi amet maxime tenetur modi, distinctio quo ex sint commodi!</p>
        </div>
    </div>

    <div class="team-member fade">
        <div class="image">
            <img src="images/girl2.png" alt="member4">
        </div>
        <div class="member-info">
            <h3>Marija</h3>
            <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. At laborum aliquam, non sit quo velit dolorem ipsum provident impedit repudiandae dignissimos accusantium voluptatum excepturi neque. Impedit vel ratione possimus doloribus. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis vero corrupti aperiam quaerat enim nulla, autem dignissimos voluptatibus optio explicabo excepturi amet maxime tenetur modi, distinctio quo ex sint commodi!</p>
        </div>
    </div>

    </div>

    </div>
    <div id="contactus" class="contact-us">
        <h1>Contact us</h1>
        <hr>
        <div class="contact-content">
            <div class="message">
                <p>We'd <img src="images/heart.png" alt="heart"> to help! Feel free to email us!</p>
            </div>
            <div class="email-box">
                <div class="email-form">
                    <form action="php/sendMail.php" method="post">
                    <input type="text" name="subject" placeholder="Subject name">
                    <input type="text" name="mail" placeholder="Email for feedback...">
                    <textarea name="btn_send" id="idMessage" cols="30" rows="10" placeholder="Your message..."></textarea>
                    <button id="btn_sendmsg">Send <img src="images/send.png" alt="send"></button>
                    </form>
                </div>
                <div class="email-info">
                    <ul>
                        <li><img src="images/location.png" alt="location">City name, SRB</li>
                        <li><img src="images/phone.png" alt="phone">+381-6********</li>
                        <li><img src="images/email.png" alt="email">company@gmail.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    
    <div id="FAQ" class="FAQ">
        <h1>Frequently asked questions <img src="images/ghost.png" alt=""></h1>
        <div class="FAQ-box">
        <details ontoggle="myfunction()">
        <summary>
        <div class="question">
            <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elitit?</h3>
            <img src="images/arrow.png" alt="arrow">
        </div>
        </summary>
        <div class="answer">
            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, ut! Dolores accusamus blanditiis tempora et illum voluptatem, pariatur quisquam deserunt aliquam, numquam velit. Quam optio veniam reprehenderit? Possimus, cumque inventore!</h4>
        </div>
    </details>
        </div>
        
        <div class="FAQ-box">
            <details ontoggle="myfunction()">
                <summary>
                <div class="question">
                    <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elitit?</h3>
                    <img src="images/arrow.png" alt="arrow">
                </div>
                </summary>
                <div class="answer">
                    <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, ut! Dolores accusamus blanditiis tempora et illum voluptatem, pariatur quisquam deserunt aliquam, numquam velit. Quam optio veniam reprehenderit? Possimus, cumque inventore!</h4>
                </div>
            </details>
        </div>

        <div class="FAQ-box">
            <details ontoggle="myfunction()">
                <summary>
                <div class="question">
                    <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elitit?</h3>
                    <img src="images/arrow.png" alt="arrow" id="arrow">
                </div>
                </summary>
                <div class="answer">
                    <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, ut! Dolores accusamus blanditiis tempora et illum voluptatem, pariatur quisquam deserunt aliquam, numquam velit. Quam optio veniam reprehenderit? Possimus, cumque inventore!</h4>
                </div>
            </details>
    </div>
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
<script>
    function myfunction(){
    console.log("Arrow clicked");
}
</script>

<script>
    function sendMail(){
        const emailTo = 'kristinaneskovic9@gmail.com'
        const emailCC = 'cc@example.com'
        const emailSub = 'subject'
        const emailBody = 'body'
        window.open(`mailto:${emailTo}?cc=${emailCC}&subject=${emailSub}&body=${emailBody}`, '_self');
    }
</script>

</html>