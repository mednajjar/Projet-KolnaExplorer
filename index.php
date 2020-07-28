<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kolna Explorer</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/accueil.css">
</head>

<body>

    <!--------------------------------------------** M E N u **----------------------------------------------->
    <nav>
        <div class="logo">
            <img class="logo__logo" src="/Assets/Image 1.png" alt="">
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

            <li><a href="glerie.php">Galerie</a></li>
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
            <img class="imgHero__imgSld" src="/Assets/illustration1.png" alt="imgHeader">
        </div>
        <!---------------------------------------------------------------------------------------------------------------->

    </div>
    <!--------------------------------------** F I N - H E A D E R - H E R O **------------------------------------------>
    <!------------------------------------** S E C T I O N - A C T I V I T E S **---------------------------------------->
    <div class="acActivites">
        <h1 class="actit" id="titActiv">Nos Acitivités</h1>
        <div class="blocCart">
            <div class="blocCart__cart1">
                <div class="bCart">
                    <div class="blcImg"><img class="blcImg__ico" src="/Assets/sports.png" alt="sport"></div>
                    <h3 class="bCart__Title">Randonnée</h3>
                    <p class="bCart__Parag">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</br> Omnis dolor
                        optio reiciendis
                        dolore praesentium!</p>
                </div>
            </div>
            <div class="divBtn1">
                <input type="button" class="btnCart" onclick="location.href='#';" value="Voir plus" />
            </div>


            <div class="blocCart__cart2">
                <div class="bCart">
                    <div class="blcImg"><img class="blcImg__ico" src="/Assets/iconfinder.png" alt="inconfinder"></div>
                    <h3 class="bCart__Title">Développement humain</h3>
                    <p class="bCart__Parag">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</br> Omnis dolor
                        optio reiciendis
                        dolore praesentium!</p>
                </div>
            </div>
            <div class="divBtn2">
                <input type="button" class="btnCart" onclick="location.href='#';" value="Voir plus" />
            </div>



            <div class="blocCart__cart3">
                <div class="bCart">
                    <div class="blcImg"><img class="blcImg__ico" src="/Assets/people.png" alt="people"></div>
                    <h3 class="bCart__Title">Afforestation</h3>
                    <p class="bCart__Parag">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</br> Omnis dolor
                        optio reiciendis
                        dolore praesentium!</p>
                </div>
            </div>
            <div class="divBtn3">
                <input type="button" class="btnCart" onclick="location.href='#';" value="Voir plus" />
            </div>


        </div>
    </div>
    <!--------------------------------** F I N - S E C T I O N - A C T I V I T E S **------------------------------------>
    <!----------------------------------** S E C T I O N - D E S T I N A T I O N **-------------------------------------->
    <div class="acDestination">
        <h1 class="actit2">Destination populaire</h1>
        <div class="blocC">
            <div class="blocCart__c1">
                <div class="bCart2">
                    <div class="blcImg2"><img class="blcImg2__ico2" src="/Assets/dest3.png" alt="sport"></div>
                    <div class="acBlcTit">
                        <h2 class="acBlcTit__titH">Randonnée</h2>
                        <h3 class="acBlcTit__acInfo"><a href="#">Information1</a></h3>
                        <h3 class="acBlcTit__acInfo"><a href="#">Information1</a></h3>
                        <h3 class="acBlcTit__acInfo"><a href="#">Information1</a></h3>
                    </div>
                    <div class="divBtn">
                        <input type="button" class="btnCart2" onclick="location.href='#';" value="Voir plus" />
                    </div>
                </div>

            </div>

            <div class="blocCart__c2 ">
                <div class="bCart2">
                    <div class="blcImg2"><img class="blcImg2__ico2" src="/Assets/dest1.png" alt="inconfinder">
                    </div>
                    <div class="acBlcTit">
                        <h2 class="acBlcTit__titH">Développement humain</h2>
                        <h3 class="acBlcTit__acInfo"><a href="#">Information1</a></h3>
                        <h3 class="acBlcTit__acInfo"><a href="#">Information1</a></h3>
                        <h3 class="acBlcTit__acInfo"><a href="#">Information1</a></h3>
                    </div>
                    <div class="divBtn">
                        <input type="button" class="btnCart2" onclick="location.href='#';" value="Voir plus" />
                    </div>
                </div>

            </div>


            <div class="blocCart__c3">
                <div class="bCart2">
                    <div class="blcImg2"><img class="blcImg2__ico2" src="/Assets/dest2.png" alt="people"></div>
                    <div class="acBlcTit">
                        <h2 class="acBlcTit__titH">Afforestation</h2>
                        <h3 class="acBlcTit__acInfo"><a href="#">Information1</a></h3>
                        <h3 class="acBlcTit__acInfo"><a href="#">Information1</a></h3>
                        <h3 class="acBlcTit__acInfo"><a href="#">Information1</a></h3>
                    </div>
                    <div class="divBtn">
                        <input type="button" class="btnCart2" onclick="location.href='#';" value="Voir plus" />
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!------------------------------** F I N - S E C T I O N - D E S T I N A T I O N **---------------------------------->
    <!--------------------------------** E V E N E M E N T - D E S T I N A T I O N **---------------------------------->
    <div class="acEven">
        <h1 class="acEven__evenTit">Nos événements</h1>
        <div class="blcEven">

            <div class="acEvent1">
                <h3 class="evenAc">Event1</h3>
                <p class="evenAc__paragraph">Lorem ipsum dolor sit amet, consectetur</br> adipisicing elit. Laborum
                    obcaecati.</p>
            </div>
            <div class="acEvent2 ">
                <h3 class="evenAc">Event2</h3>
                <p class="evenAc__paragraph">Lorem ipsum dolor sit amet, consectetur</br> adipisicing elit. Laborum
                    obcaecati.</p>
            </div>
            <div class="acEvent3 ">
                <h3 class="evenAc">Event3</h3>
                <p class="evenAc__paragraph">Lorem ipsum dolor sit amet, consectetur</br> adipisicing elit. Laborum
                    obcaecati.</p>
            </div>

            <div class="acEvenR">
                <div class="acEvenR__imgEv"><img class="acEvenR__imgEv--taille" src="/Assets/event1.png" alt="event">
                </div>
            </div>
            <!------------------------------// séparation des infos pour le mettre en grid //--------------------------------->
            <div class="acEvenR2">
                <!---------------------------------------------------------------->
                <div class="acEvenR2__location">
                    <div class="acLoca1">
                        <img class="acLoca1__icoLocation" src="/Assets/Location.png" alt="location">
                        <h3 class="acLoca1__titLocation">Event Location</h3>
                    </div>
                </div>
                <!--------------------------------------------------------------->
                <div class="acPara1">
                    <p>Beni mellal, Maroc</p>
                </div>
                <!--------------------------------------------------------------->
                <div class="acEvenR2__Dat">
                    <div class="acLoca2">
                        <img class="acLoca2__icoDat" src="/Assets/calendar.png" alt="location">
                        <h3 class="acLoca2__titDat">Event Date</h3>
                    </div>
                </div>
                <!-------------------------------------------------->
                <div class="acPara2">
                    <p>24 January, 2021</p>
                </div>
                <!--------------------------------------------------------------->
            </div>
            <!-------------------------------------------------------------------------------------------------------------------->
            <div class="acEvenR__BtnE">
                <input type="button" class="acEvenR__BtnE--B" onclick="location.href='#';" value="Voir plus" />
            </div>

        </div>
    </div>
    <!------------------------------** F I N - E V E N E M E N T - D E S T I N A T I O N **---------------------------------->
    <!-----------------------------------------------** N A T U R E **------------------------------------------------------->
    <div class="natImg">
        <div class="natImg__imgNature"><img class="natImg__imgIMG" src="/Assets/bg__quote.png" alt="nature"></div>

        <div class="natContent">
            <div class="descovNat">
                <h1 class="descovNat__natTit">"Nature is not a place to visit.</br>
                    <span>It's home.</span> "</h1>
                <h2 class="descovNat__natTit2">Rejoignez-nous et venez découvrir la nature ensemble.</h2>
                <div class="natBtn">
                    <input type="button" class="natBtn__B1" onclick="location.href='#';" value="Devenir membre" />
                    <input type="button" class="natBtn__B1 natBtn__B2" onclick="location.href='#';"
                        value="Contactez nous" />
                </div>
            </div>
        </div>
    </div>
    <!-------------------------------------------** F I N - N A T U R E **--------------------------------------------------->
    <!----------------------------------------------** G A L E R I E **------------------------------------------------------>
    <div class="gaSec">
        <h1 class="gaSec__gaTit">Galerie</h1>
        <div class="gaSec__gaSld">
            <img class="gaSec__gaSld--galImg gaSec__gaSld--galImg2" src="/Assets/Rectangle20.png" alt="img">
            <img class="gaSec__gaSld--galImg gaSec__gaSld--galImg4" src="/Assets/Rectangle22.png" alt="img">
            <img class="gaSec__gaSld--galImg gaSec__gaSld--galImg3" src="/Assets/Rectangle23.png" alt="img">
            <img class="gaSec__gaSld--galImg " src="/Assets/Rectangle25.png" alt="img">
            <img class="gaSec__gaSld--galImg gaSec__gaSld--galImg5" src="/Assets/Rectangle20.png" alt="img">
            <img class="gaSec__gaSld--galImg1" src="/Assets/ipkone.png" alt="img">
        </div>


        <input type="button" class="gaSec__gaTit--galbtn" onclick="location.href='#';" value="Voir plus" />

    </div>
    <!-------------------------------------------** F I N - G A L E R I E **------------------------------------------------->
    <!-------------------------------------------------** T E A M **--------------------------------------------------------->
    <div class="teaSec">
        <h1 class="teaSec__teaTit">Notre équipe</h1>
        <!------------------------------------------------------------------->
        <div class="blocTea1">
            <!------------------------------------------*** cart 1 ***------------------------------------------------>
            <div class="teaCart1">
                <div class="teamCartImg"><img class="teaCart__teaImg" src="/Assets/team1.png" alt=""></div>
                <div class="teaCart__teaBlcinfo">
                    <div class="teaCart__teaTitCart">
                        <h2 class="teaCart__teaTitCart1">Nom & prénom</h2>
                        <h3 class="teaCart__teaTitCart2">Rôle</h3>
                    </div>
                </div>
                <div class="blcTeaIco">
                    <img class="blcTeaIco__bTeaImg" src="/Assets/facebook.svg" alt="facebook"
                        onclick="location.href='#';">
                    <img class="blcTeaIco__bTeaImg" src="/Assets/linkedin.svg" alt="linkdin"
                        onclick="location.href='#';">
                    <img class="blcTeaIco__bTeaImg" src="/Assets/twitter.svg" alt="twitter"
                        onclick="location.href='#';">
                </div>
            </div>
            <!------------------------------------------**************------------------------------------------------>
            <!------------------------------------------*** cart 2 ***------------------------------------------------>
            <div class="teaCart2">
                <div class="teamCartImg"><img class="teaCart__teaImg" src="/Assets/team2.png" alt=""></div>
                <div class="teaCart__teaBlcinfo">
                    <div class="teaCart__teaTitCart">
                        <h2 class="teaCart__teaTitCart1">Nom & prénom</h2>
                        <h3 class="teaCart__teaTitCart2">Rôle</h3>
                    </div>
                </div>
                <div class="blcTeaIco">
                    <img class="blcTeaIco__bTeaImg" src="/Assets/facebook.svg" alt="facebook"
                        onclick="location.href='#';">
                    <img class="blcTeaIco__bTeaImg" src="/Assets/linkedin.svg" alt="linkding"
                        onclick="location.href='#';">
                    <img class="blcTeaIco__bTeaImg" src="/Assets/twitter.svg" alt="twitter"
                        onclick="location.href='#';">
                </div>
            </div>
            <!------------------------------------------**************------------------------------------------------>
            <!------------------------------------------*** cart 3 ***------------------------------------------------>
            <div class="teaCart3">
                <div class="teamCartImg"><img class="teaCart__teaImg" src="/Assets/team3.png" alt=""></div>
                <div class="teaCart__teaBlcinfo">
                    <div class="teaCart__teaTitCart">
                        <h2 class="teaCart__teaTitCart1">Nom & prénom</h2>
                        <h3 class="teaCart__teaTitCart2">Rôle</h3>
                    </div>
                </div>
                <div class="blcTeaIco">
                    <img class="blcTeaIco__bTeaImg" src="/Assets/facebook.svg" alt="facebook"
                        onclick="location.href='#';">
                    <img class="blcTeaIco__bTeaImg" src="/Assets/linkedin.svg" alt="linkding"
                        onclick="location.href='#';">
                    <img class="blcTeaIco__bTeaImg" src="/Assets/twitter.svg" alt="twitter"
                        onclick="location.href='#';">
                </div>
            </div>
            <!------------------------------------------**************------------------------------------------------>
            <!------------------------------------------*** cart 4 ***------------------------------------------------>
            <div class="teaCart4">
                <div class="teamCartImg"><img class="teaCart__teaImg" src="/Assets/team4.png" alt=""></div>
                <div class="teaCart__teaBlcinfo">
                    <div class="teaCart__teaTitCart">
                        <h2 class="teaCart__teaTitCart1">Nom & prénom</h2>
                        <h3 class="teaCart__teaTitCart2">Rôle</h3>
                    </div>
                </div>
                <div class="blcTeaIco">
                    <img class="blcTeaIco__bTeaImg" src="/Assets/facebook.svg" alt="facebook"
                        onclick="location.href='#';">
                    <img class="blcTeaIco__bTeaImg" src="/Assets/linkedin.svg" alt="linkding"
                        onclick="location.href='#';">
                    <img class="blcTeaIco__bTeaImg" src="/Assets/twitter.svg" alt="twitter"
                        onclick="location.href='#';">
                </div>
            </div>
            <!------------------------------------------**************------------------------------------------------>
            <!------------------------------------------*** cart 5 ***------------------------------------------------>
            <div class="teaCart5">
                <div class="teamCartImg"><img class="teaCart__teaImg" src="/Assets/team5.png" alt=""></div>
                <div class="teaCart__teaBlcinfo">
                    <div class="teaCart__teaTitCart">
                        <h2 class="teaCart__teaTitCart1">Nom & prénom</h2>
                        <h3 class="teaCart__teaTitCart2">Rôle</h3>
                    </div>
                </div>
                <div class="blcTeaIco">
                    <img class="blcTeaIco__bTeaImg" src="/Assets/facebook.svg" alt="facebook"
                        onclick="location.href='#';">
                    <img class="blcTeaIco__bTeaImg" src="/Assets/linkedin.svg" alt="linkding"
                        onclick="location.href='#';">
                    <img class="blcTeaIco__bTeaImg" src="/Assets/twitter.svg" alt="twitter"
                        onclick="location.href='#';">
                </div>
            </div>
            <!------------------------------------------**************------------------------------------------------>
            <!------------------------------------------*** cart 6 ***------------------------------------------------>
            <div class="teaCart6">
                <div class="teamCartImg"><img class="teaCart__teaImg" src="/Assets/team6.png" alt=""></div>
                <div class="teaCart__teaBlcinfo">
                    <div class="teaCart__teaTitCart">
                        <h2 class="teaCart__teaTitCart1">Nom & prénom</h2>
                        <h3 class="teaCart__teaTitCart2">Rôle</h3>
                    </div>
                </div>
                <div class="blcTeaIco">
                    <img class="blcTeaIco__bTeaImg" src="/Assets/facebook.svg" alt="facebook"
                        onclick="location.href='#';">
                    <img class="blcTeaIco__bTeaImg" src="/Assets/linkedin.svg" alt="linkding"
                        onclick="location.href='#';">
                    <img class="blcTeaIco__bTeaImg" src="/Assets/twitter.svg" alt="twitter"
                        onclick="location.href='#';">
                </div>
            </div>
            <!------------------------------------------**************------------------------------------------------>
        </div>
    </div>
    <!---------------------------------------------** F I N - T E A M **----------------------------------------------------->
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
                <img class="footerPart__imgPart" src="/Assets/Groupe85.png" alt="partenaire">
                <img class="footerPart__imgPart" src="/Assets/Groupe85.png" alt="partenaire">
                <img class="footerPart__imgPart" src="/Assets/Groupe85.png" alt="partenaire">
                <img class="footerPart__imgPart" src="/Assets/Groupe85.png" alt="partenaire">
            </div>
            <div class="footerInfo">
                <!----------------------------------------------------------------->
                <div class="foBloc1">
                    <img class="foBloc1__footerLogo" src="/Assets/logo.png" alt="logo">
                    <div class="foBloc1__infoCont">
                        <p><b>Email :</b> kolnaexplorer@gmail.com</p>
                        <p><b>Phone :</b> +212-661-123-456</p>
                    </div>
                    <div class="foBloc1__icofooter">
                        <img class="icofooter" src="/Assets/twitter-footer.png" alt="twitter">
                        <img class="icofooter" src="/Assets/facebook-footer.png" alt="facebook">
                        <img class="icofooter" src="/Assets/insta-footer.png" alt="instagram">
                        <img class="icofooter" src="/Assets/youtube-footer.png" alt="youtube">
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
                            src="/Assets/mail.png" alt="mail"> Contacter
                        nous</button>
                    <button class="foBloc5__btnFtr" onclick="location.href='#';"><img class="imgBTN"
                            src="/Assets/sports.png" alt="sport"> Devenir membre</button>
                </div>
                <!---------------------------------------------------------------->
            </div>

        </div>
        <div class="copyright">
            <h5>Copyright © 2020 Designed <span class="copyright__spano">by YouCode Students</span> </h5>
        </div>

    </div>



    <!-------------------------------------------** F I N - F O O T E R **--------------------------------------------------->




    <script src="/js/script.js"></script>
</body>

</html>