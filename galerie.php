<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ------------------------------** jquery bxslider links **--------------------------------------------------- -->
    <link rel="stylesheet" href="css/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- -------------------------------------------------------------------------------------- -->
    <link rel="stylesheet" href="css/galerie.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <!--------------------------------------------** M E N u **----------------------------------------------->
    <nav>
        <div class="logo">
            <img class="logo__logo" src="./Assets/Image 1.png" alt="">
        </div>
        </div>
        <ul class="navMenu">
            <li><a href="index.php">Acceuil</a></li>
            <li><a href="about.php">À propos de nous</a></li>
            <li id="act"><a href="#">Nos Activités</a>
                <ul class="smenu">
                    <li><a href="activite.php">Activités Principales</a></li>
                    <li><a href="destination.php">Destination</a></li>
                    <li><a href="event.php">Events</a></li>
                </ul>
            </li>

            <li class="active"><a href="galerie.php">Galerie</a></li>
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
    <!-------------------------------** H E A D E R - H E R O **---------------------------------------->
    <div class="headerHero">

        <!--------------------------------------------------------------------------------------------------------------->
        <div class="txtHeader">
            <h1 class="txtHeader__tit1">Kolna Explorer</h1>
            <h1 class="txtHeader__tit2">Découvrir la nature</h1>
        </div>
        <!---------------------------------------------------------------------------------------------------------------->
        <div class="btnheader">
            <input type="button" class="btnH1" onclick="location.href='#';" value="Devenir membre" />
            <input type="button" class="btnH1 btnH2" onclick="location.href='#';" value="À propos de nous" />
        </div>
        <!---------------------------------------------------------------------------------------------------------------->
        <div class="imgHero">
        <ul class="sliderHero">
            <?php
            include 'config.php';
            $query = $db->query("SELECT * FROM images ORDER BY id DESC LIMIT 3");
                     if($query->rowCount() > 0){
                       while($row = $query->fetch(PDO::FETCH_ASSOC)){
                           $imageURL = 'uploads/'.$row["image"];
                    
                           ?>
                           <img class="imgHero__imgSld"  src=" <?php echo $imageURL ; ?>" alt="">
                           <?php
                       
          
               }
            }
               ?>
        </ul>
        </div>
        <!---------------------------------------------------------------------------------------------------------------->

    </div>

    <!--------------------------------------** F I N - H E A D E R - H E R O **------------------------------------------>


    <!--------------------------------------** Galerie**------------------------------------------>

    <div class="gal">
        <h1 class="gal__h1">Galerie</h1>
        <div class="galerie">

            <p class="galerie__p1">Voir notre incroyable photos et vidéos</p>
            <div class="galerie__but">
                <button>AFFICHER TOUT</button>
                <button>Photos</button>
                <button>Vidéos</button>
            </div>
            <div class="galerie__img">
                <img src="./Assets/galerie1.png" alt="">
                <img src="./Assets/galerie2.png" alt="">
                <img src="./Assets/galerie3.png" alt="">
                <img src="./Assets/galerie4.png" alt="">
                <img src="./Assets/galerie5.png" alt="">
                <img src="./Assets/galerie6.png" alt="">
                <img src="./Assets/galerie7.png" alt="">
                <img src="./Assets/galerie8.png" alt="">
                <img src="./Assets/galerie9.png" alt="">

            </div>
            <p class="galerie__p2"><a href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a></p>
        </div>
    </div>










    <!--------------------------------------** F I N Galerie**------------------------------------------>


    <!-----------------------------------------------** F O O T E R **------------------------------------------------------->

    <div class="sectionFooter">

        <div class="footerSec">


            <h1 class="footerSec__Tit1">Abonnez-vous à notre newsletter</h1>


            <form>
                <div class="formNewsletter">
                    <input class="formInput" type="text" id="lname" name="lname" placeholder=" Entrer votre email">
                    <input class="formBtn" type="submit" value="Abonner" onclick="location.href='#';">
                </div>
            </form>
        </div>

        <!-----------------------------------------------------last part----------------------------------------------------------------->
        <div class="lastFooter">
            <h1 class="lastFooter__titpart">Nos partenaires</h1>
            <div class="footerPart">
                <img class="footerPart__imgPart" src="./Assets/Groupe85.png" alt="partenaire">
                <img class="footerPart__imgPart" src="./Assets/Groupe85.png" alt="partenaire">
                <img class="footerPart__imgPart" src="./Assets/Groupe85.png" alt="partenaire">
                <img class="footerPart__imgPart" src="./Assets/Groupe85.png" alt="partenaire">
            </div>
            <div class="footerInfo">
                <!----------------------------------------------------------------->
                <div class="foBloc1">
                    <img class="foBloc1__footerLogo" src="./Assets/logo.png" alt="logo">
                    <div class="foBloc1__infoCont">
                        <p><b>Email :</b> kolnaexplorer@gmail.com</p>
                        <p><b>Phone :</b> +212-661-123-456</p>
                    </div>
                    <div class="foBloc1__icofooter">
                        <img class="icofooter" src="./Assets/twitter-footer.png" alt="twitter">
                        <img class="icofooter" src="./Assets/facebook-footer.png" alt="facebook">
                        <img class="icofooter" src="./Assets/insta-footer.png" alt="instagram">
                        <img class="icofooter" src="./Assets/youtube-footer.png" alt="youtube">
                    </div>
                </div>
                <!---------------------------------------------------------------->
                <div class="foBloc2">
                    <h2 class="foBloc2__title1">À propos de nous</h2>
                    <div class="footerLien">
                        <h4 class="foBloc2__title2"><a href="#">Notre équipe</a></h4>
                        <h4 class="foBloc2__title2"><a href="#">Statut</a></h4>
                        <h4 class="foBloc2__title2"><a href="#">Réglement intérieur</a></h4>
                    </div>
                </div>
                <!---------------------------------------------------------------->
                <div class="foBloc3">
                    <h2 class="foBloc3__title1">Nos activités</h2>
                    <div class="footerLien">
                        <h4 class="foBloc3__title2"><a href="#">Randonnée</a></h4>
                        <h4 class="foBloc3__title2"><a href="#">Développement humain</a></h4>
                        <h4 class="foBloc3__title2"><a href="#">Afforestation</a></h4>
                    </div>
                </div>
                <!---------------------------------------------------------------->
                <div class="foBloc4">
                    <h2 class="foBloc4__title"><a href="">Destinations</a></h2>
                    <h2 class="foBloc4__title"><a href="">Galerie</a></h2>
                    <h2 class="foBloc4__title"><a href="">Évènements</a></h2>

                </div>
                <!---------------------------------------------------------------->
                <div class="foBloc5">
                    <button class="foBloc5__btnFtr btnFtr_marg" onclick="location.href='#';"><img class="imgBTN"
                            src="./Assets/mail.png" alt="mail"> Contacter
                        nous</button>
                    <button class="foBloc5__btnFtr" onclick="location.href='#';"><img class="imgBTN"
                            src="./Assets/sports.png" alt="sport"> Devenir membre</button>
                </div>
                <!---------------------------------------------------------------->
            </div>

        </div>
        <div class="copyright">
            <h5>Copyright © 2020 Designed <span class="copyright__spano">by YouCode Students</span> </h5>
        </div>

    </div>



    <!-------------------------------------------** F I N - F O O T E R **--------------------------------------------------->



    <script src="./js/jquery.bxslider.min.js"></script>
    <script src="./js/jscript.js"></script>
    <script src="/js/script.js"></script>
</body>

</html>

</body>

</html>