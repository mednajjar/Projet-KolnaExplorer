<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kolna Explorer</title>
    <!-- ------------------------------** jquery bxslider links **--------------------------------------------------- -->
    <link rel="stylesheet" href="css/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- ---------------------------------** swiper js links **----------------------------------------------------- -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- --------------------------------------------------------------------------------------------------- -->
    <link rel="stylesheet" href="css/accueil.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style.min.css">
   
</head>

<body onload="ggg()">

    <!--------------------------------------------** M E N u **----------------------------------------------->
    <nav>
        <div class="logo">
            <img class="logo__logo" src="./Assets/Image 1.png" alt="">
        </div>

        <ul class="navMenu">
            <li><a class="active" href="index.php">Acceuil</a></li>
            <li><a href="about.php">À propos de nous</a></li>
            <li id="act"><a href="#">Nos Activités</a>
                <ul class="smenu">
                    <li><a href="activite.php">Activités Principales</a></li>
                    <li><a href="destination.php">Destination</a></li>
                    <li><a href="event.php">Events</a></li>
                </ul>
            </li>

            <li><a href="galerie.php">Galerie</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        <div class="burger">
            <div class="burger__line1"></div>
            <div class="burger__line2"></div>
            <div class="burger__line3"></div>
        </div>
    </nav>
    <!---------------------------------------** F I N **---------------------------------------------->
       <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./js/jquery.bxslider.min.js"></script>
    <script src="./js/jscript.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/event.js"></script>
</body>

</html>