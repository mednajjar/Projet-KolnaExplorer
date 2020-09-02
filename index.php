<?php
 include 'config.php';

?>
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

<body>

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
    <!-------------------------------** H E A D E R - H E R O **---------------------------------------->
    <div class="headerHero">

        <!--------------------------------------------------------------------------------------------------------------->
        <div class="txtHeader">
            <h1 class="txtHeader__tit1">Kolna Explorer</h1>
            <h1 class="txtHeader__tit2">Découvrir la nature</h1>
        </div>
        <!---------------------------------------------------------------------------------------------------------------->
        <div class="btnheader">
            <input type="button" class="btnH1" onclick="location.href='contact.php';" value="Devenir membre" />
            <input type="button" class="btnH1 btnH2" onclick="location.href='propos';" value="À propos de nous" />
        </div>
        <!---------------------------------------------------------------------------------------------------------------->
        <div class="imgHero">
        <ul class="sliderHero">
            <?php
           
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
    <!------------------------------------** S E C T I O N - A C T I V I T E S **---------------------------------------->
    <div class="acActivites">
        <h1 class="actit" id="titActiv">Nos Acitivités</h1>
        
        <div class="blocCart">
        <?php 
       
            $query = $db->query("SELECT * FROM activity ORDER BY act_id DESC LIMIT 3");
                        if($query->rowCount() > 0){
                        while($row = $query->fetch(PDO::FETCH_ASSOC)){
                            $icone = 'uploads/'.$row["act_icone"];
                            $title = $row['act_title'];
                            $desc = $row['act_desc'];
        
        
            echo "<div class='blocCart__cart1'>
            
           
            
                    <div class='bCart'>                    
                        <div class='blcImg'><img class='blcImg__ico' src='$icone' alt='sport'></div>
                        <h1 class='bCart__Title'>$title</h1>
                        <p class='bCart__Parag'>$desc</p>
                    </div>";
        ?>    
                    <div class="divBtn1">
                        <input type="button" class="btnCart" onclick="location.href='activitie.php';" value="Voir plus" />
                    </div>
          
            </div>
            <?php
       }
    }
       ?>

        </div>
       
    </div>
    <!--------------------------------** F I N - S E C T I O N - A C T I V I T E S **------------------------------------>
    <!----------------------------------** S E C T I O N - D E S T I N A T I O N **-------------------------------------->
    <div class="acDestination">
        <h1 class="actit2">Destination populaire</h1>
        <div class="blocC">
        <?php 
       
       $query = $db->query("SELECT * FROM destination ORDER BY dest_id DESC LIMIT 3");
                   if($query->rowCount() > 0){
                   while($row = $query->fetch(PDO::FETCH_ASSOC)){
                       $image = 'uploads/'.$row["dest_img"];
                       $title = $row['dest_title_destination'];
                       $info1 = $row['dest_info1'];
                       $info2 = $row['dest_info2'];
                       $info3 = $row['dest_info3'];
                      
                      
            echo"<div class='blocCart__c1'>
                <div class='bCart2'>
                    <div class='blcImg2'><img class='blcImg2__ico2' src='$image' alt='sport'></div>
                    <div class='acBlcTit'>
                        <h2 class='acBlcTit__titH'>$title</h2>
                        <h3 class='acBlcTit__acInfo'><a href='#'>$info1</a></h3>
                        <h3 class='acBlcTit__acInfo'><a href='#'>$info2</a></h3>
                        <h3 class='acBlcTit__acInfo'><a href='#'>$info3</a></h3>
                    </div>";
            ?>
                    <div class="divBtn">
                        <input type="button" class="btnCart2" onclick="location.href='destination.php';" value="Voir plus" />
                    </div>
                </div>
                </div>
            <?php
                   }
                }

            ?>

            </div>

        </div>
    </div>
    <!------------------------------** F I N - S E C T I O N - D E S T I N A T I O N **---------------------------------->
    <!--------------------------------** E V E N E M E N T - D E S T I N A T I O N **---------------------------------->
    <div class="acEven">
        <h1 class="acEven__evenTit">Nos événements</h1>
        <div class="blcEven" id="myDIV">
        <?php
           
           $query = $db->query("SELECT * FROM events WHERE event_id=8");
                    if($query->rowCount() > 0){
                      while($row = $query->fetch(PDO::FETCH_ASSOC)){
                          $title = $row["event_title"];
                          $descrip = $row["event_desc"];
                   
                          ?>
            <div id="eventId1" class="acEvent1 myBtnEvent Active" onclick="myFunction1()">
                <h3 class="evenAc"><?php echo $title ?></h3>
                <p class="evenAc__paragraph"><?php echo $descrip ?></p>
            </div>
            <?php
                      }}
            ?>
            <?php
           
           $query = $db->query("SELECT * FROM events WHERE event_id=9");
                    if($query->rowCount() > 0){
                      while($row = $query->fetch(PDO::FETCH_ASSOC)){
                          $title = $row["event_title"];
                          $descrip = $row["event_desc"];
                   
                          ?>
            <div id="eventId2" class="acEvent2 myBtnEvent" onclick="myFunction2()">
                <h3 class="evenAc"><?php echo $title ?></h3>
                <p class="evenAc__paragraph"><?php echo $descrip ?>
                </p>
            </div>
            <?php
                      }}
            ?>
            <?php
           
           $query = $db->query("SELECT * FROM events WHERE event_id=10");
                    if($query->rowCount() > 0){
                      while($row = $query->fetch(PDO::FETCH_ASSOC)){
                          $title = $row["event_title"];
                          $descrip = $row["event_desc"];
                   
                          ?>
            <div id="eventId3" class="acEvent3 myBtnEvent" onclick="myFunction3()">
                <h3 class="evenAc"><?php echo $title ?></h3>
                <p class="evenAc__paragraph"><?php echo $descrip ?>
                </p>
            </div>
            <?php
                      }}
            ?>
        
            <div class="acEvenR">
            
            
                <div class="acEvenR__imgEv">
                    <ul id="eventImg">
                    <?php
           
           $query = $db->query("SELECT * FROM events WHERE event_id=8");
           if($query->rowCount() > 0){
             while($row = $query->fetch(PDO::FETCH_ASSOC)){
                 $image = 'uploads/'.$row["event_img"];
                 ?>
                    <li style="display:block; list-style:none"><img class="acEvenR__imgEv--taille" src="<?php echo $image ?>" alt="event"></li>
                    <?php
                      }}
                    ?>
                    <?php
           
           $query = $db->query("SELECT * FROM events WHERE event_id=9");
           if($query->rowCount() > 0){
             while($row = $query->fetch(PDO::FETCH_ASSOC)){
                 $image = 'uploads/'.$row["event_img"];
                 ?>
                    <li style="display:none; list-style:none"><img class="acEvenR__imgEv--taille" src="<?php echo $image ?>" alt="event"></li>
                    <?php
                      }}
                    ?>
                    <?php
           
           $query = $db->query("SELECT * FROM events WHERE event_id=10");
           if($query->rowCount() > 0){
             while($row = $query->fetch(PDO::FETCH_ASSOC)){
                 $image = 'uploads/'.$row["event_img"];
                 ?>
                    <li style="display:none; list-style:none"><img class="acEvenR__imgEv--taille" src="<?php echo $image ?>" alt="event"></li>
                    <?php
                      }}
                    ?>
                    </ul>
                    
                </div>
               
            </div>
           
            <!------------------------------// séparation des infos pour le grid //--------------------------------->
            
            <div class="acEvenR2">
                <!---------------------------------------------------------------->
                <div class="acEvenR2__location" id="activeHover2">
                    <div class="acLoca1">
                        <img class="acLoca1__icoLocation" src="./Assets/Location.png" alt="location">
                        <h3 class="acLoca1__titLocation">Event Location</h3>
                    </div>
                </div>
                <!--------------------------------------------------------------->
                <div class="acPara1">
                    <ul id="myLocation">
                    <?php
           
                        $query = $db->query("SELECT * FROM events WHERE event_id=8");
                        if($query->rowCount() > 0){
                            while($row = $query->fetch(PDO::FETCH_ASSOC)){
                                $location = $row["event_location"];
                    ?>
                        <li style="display:block; list-style:none"><p><?php echo $location ?></p></li>
                        <?php
                      }}
                    ?>
                    <?php
           
                        $query = $db->query("SELECT * FROM events WHERE event_id=9");
                        if($query->rowCount() > 0){
                            while($row = $query->fetch(PDO::FETCH_ASSOC)){
                                $location = $row["event_location"];
                    ?>
                        <li style="display:none; list-style:none"><p><?php echo $location ?></p></li>
                        <?php
                        }}
                    ?>
                    <?php
           
                        $query = $db->query("SELECT * FROM events WHERE event_id=10");
                        if($query->rowCount() > 0){
                            while($row = $query->fetch(PDO::FETCH_ASSOC)){
                                $location = $row["event_location"];
                    ?>
                        <li style="display:none; list-style:none"><p><?php echo $location ?></p></li>
                        <?php
                        }}
                    ?>
                    </ul>
                </div>
                <!--------------------------------------------------------------->
                <div class="acEvenR2__Dat">
                    <div class="acLoca2">
                        <img class="acLoca2__icoDat" src="./Assets/calendar.png" alt="location">
                        <h3 class="acLoca2__titDat">Event Date</h3>
                    </div>
                </div>
                <!-------------------------------------------------->
                <div class="acPara2">
                <ul id="exactDate">
                    <?php
           
                        $query = $db->query("SELECT * FROM events WHERE event_id=8");
                        if($query->rowCount() > 0){
                            while($row = $query->fetch(PDO::FETCH_ASSOC)){
                                $date = $row["event_date"];
                    ?>
                    <li style="display:block; list-style:none"><p><?php echo $date ?></p></li>
                    <?php
                        }}
                    ?>
                    <?php
           
                        $query = $db->query("SELECT * FROM events WHERE event_id=9");
                        if($query->rowCount() > 0){
                            while($row = $query->fetch(PDO::FETCH_ASSOC)){
                                $date = $row["event_date"];
                    ?>
                    <li style="display:none; list-style:none"><p><?php echo $date ?></p></li>
                    <?php
                        }}
                    ?>
                    <?php
           
                        $query = $db->query("SELECT * FROM events WHERE event_id=10");
                        if($query->rowCount() > 0){
                            while($row = $query->fetch(PDO::FETCH_ASSOC)){
                                $date = $row["event_date"];
                    ?>
                    <li style="display:none; list-style:none"><p><?php echo $date ?></p></li>
                    <?php
                        }}
                    ?>
                </div>
                <!--------------------------------------------------------------->
            </div>
            
            <!-------------------------------------------------------------------------------------------------------------------->
            <div class="acEvenR__BtnE">
                <input type="button" class="acEvenR__BtnE--B" onclick="location.href='event.php';" value="Voir plus" />
            </div>
           
        </div>
        
    </div>
    <!------------------------------** F I N - E V E N E M E N T - D E S T I N A T I O N **---------------------------------->
    <!-----------------------------------------------** N A T U R E **------------------------------------------------------->
    <div class="natImg">
        <div class="natImg__imgNature"><img class="natImg__imgIMG" src="./Assets/bg__quote.png" alt="nature"></div>

        <div class="natContent">
            <div class="descovNat">
                <h1 class="descovNat__natTit">"Nature is not a place to visit.</br>
                    <span>It's home.</span> "</h1>
                <h2 class="descovNat__natTit2">Rejoignez-nous et venez découvrir la nature ensemble.</h2>
                <div class="natBtn">
                    <input type="button" class="natBtn__B1" onclick="location.href='contact.php';" value="Devenir membre" />
                    <input type="button" class="natBtn__B1 natBtn__B2" onclick="location.href='contact.php';" value="Contactez nous" />
                </div>
            </div>
        </div>
    </div>
    <!-------------------------------------------** F I N - N A T U R E **--------------------------------------------------->
    <!----------------------------------------------** G A L E R I E **------------------------------------------------------>
    <div class="gaSec">
        <h1 class="gaSec__gaTit">Galerie</h1>
        <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php
           
            $query = $db->query("SELECT * FROM galerie ORDER BY gal_id DESC LIMIT 10");
                     if($query->rowCount() > 0){
                       while($row = $query->fetch(PDO::FETCH_ASSOC)){
                           $imgURL = 'uploads/'.$row["gal_img"];
                    
                           ?>
                        <div class="swiper-slide"><img class="swiper-slide__imgsld" src=" <?php echo $imgURL ; ?>" alt=""></div> 
                         
                   
                           <?php
                       
          
               }
            }
               ?>
            </div>
            <div class="fixedimg">
            <img class="fixedimg__phoneimg" src="./Assets/ipkone.png" alt="img">
            </div>
        </div>


        <input type="button" class="galbtn" onclick="location.href='galerie.php';" value="Voir plus" />

    </div>
    <!-------------------------------------------** F I N - G A L E R I E **------------------------------------------------->
    <!-------------------------------------------------** T E A M **--------------------------------------------------------->
    <div class="teaSec">
        <h1 class="teaSec__teaTit">Notre équipe</h1>
        <!------------------------------------------------------------------->
        <div class="blocTea1">
        <?php 
       
        $query = $db->query("SELECT * FROM team ORDER BY team_id DESC LIMIT 6");
                   if($query->rowCount() > 0){
                   while($row = $query->fetch(PDO::FETCH_ASSOC)){
                       $image = 'uploads/'.$row["team_img"];
                       $fullName = $row['team_fullname'];
                       $role = $row['team_role'];
                       $facebook = $row['team_facebook'];
                       $linkedin = $row['team_linkedin'];
                       $twitter = $row['team_twitter'];
         
            echo"<div class='teaCart1'>
                <div class='teamCartImg'><img class='teaCart__teaImg' src='$image' alt='team image'></div>
                <div class='teaCart__teaBlcinfo'>
                    <div class='teaCart__teaTitCart'>
                        <h2 class='teaCart__teaTitCart1'>$fullName</h2>
                        <h3 class='teaCart__teaTitCart2'>$role</h3>
                    </div>
                </div>";
            ?>
                <div class="blcTeaIco">
                    <img class="blcTeaIco__bTeaImg" src="./Assets/facebook.svg" alt="facebook" onclick="window.open('<?php echo $facebook; ?>','_blank')">
                    <img class="blcTeaIco__bTeaImg" src="./Assets/linkedin.svg" alt="linkdin" onclick="window.open('<?php echo $linkedin; ?>', '_blank')">
                    <img class="blcTeaIco__bTeaImg" src="./Assets/twitter.svg" alt="twitter" onclick="window.open('<?php echo $twitter; ?>','_blank')">
                </div>
            </div>
            <?php
                   }
                }
            ?>
        
            <!------------------------------------------**************------------------------------------------------>
        </div>
    </div>
    <!---------------------------------------------** F I N - T E A M **----------------------------------------------------->
    <!-----------------------------------------------** F O O T E R **------------------------------------------------------->
    <div class="sectionFooter">

        <div class="footerSec">


            <h1 class="footerSec__Tit1">Abonnez-vous à notre newsletter</h1>
            
            <?php include 'newslettre.php' ; ?>
            <form action="index.php" method="POST">
                <div class="formNewsletter">
                    <input class="formInput" type="text" id="lname" name="email" placeholder=" Entrer votre email" required>
                    <input class="formBtn" type="submit" value="Abonner" name="abonner">
                </div>
                
            </form>
            <p class="footerSec__msg"><?php if(isset($email_error)) echo $email_error; ?></p>
        </div>

        <!-----------------------------------------------------last part----------------------------------------------------------------->
        <div class="lastFooter">
            <h1 class="lastFooter__titpart">Nos partenaires</h1>
            
                <div class='footerPart'>
            
                <?php 
       
       $query = $db->query("SELECT * FROM partner ORDER BY part_id DESC LIMIT 4");
         if($query->rowCount() > 0){
         while($row = $query->fetch(PDO::FETCH_ASSOC)){
             $image = 'uploads/'.$row["part_logo"];
             echo"<img class='footerPart__imgPart' src='$image' alt='partenaire'>";
            
                  }
                  ?>
                  </div>
                  <?php
                } 
                
            ?>
            <div class="footerInfo">
                <!----------------------------------------------------------------->
                <div class="foBloc1">
                    <img class="foBloc1__footerLogo" src="./Assets/logo.png" alt="logo">
                    <div class="foBloc1__infoCont">
                        <p class="foBloc1__titleinfor"><b>Email :</b> kolnaexplorer@gmail.com</p>
                        <p class="foBloc1__titleinfor"><b>Phone :</b> +212-661-123-456</p>
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
                    <h2 class="foBloc4__title"><a href="destination.php">Destinations</a></h2>
                    <h2 class="foBloc4__title"><a href="galerie.php">Galerie</a></h2>
                    <h2 class="foBloc4__title"><a href="event.php">Évènements</a></h2>

                </div>
                <!---------------------------------------------------------------->
                <div class="foBloc5">
                    <button class="foBloc5__btnFtr btnFtr_marg" onclick="location.href='contact.php';"><img class="imgBTN"
                            src="./Assets/mail.png" alt="mail"> Contacter
                        nous</button>
                    <button class="foBloc5__btnFtr" onclick="location.href='contact.php';"><img class="imgBTN"
                            src="./Assets/sports.png" alt="sport"> Devenir membre</button>
                </div>
                <!---------------------------------------------------------------->
            </div>

        </div>
        

    </div>
    <div class="copyright">
            <h5>Copyright © 2020 Designed <span class="copyright__spano">by YouCode Students</span> </h5>
        </div>



    <!-------------------------------------------** F I N - F O O T E R **--------------------------------------------------->

    
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./js/jquery.bxslider.min.js"></script>
    <script src="./js/jscript.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/event.js"></script>
</body>

</html>