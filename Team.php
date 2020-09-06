<?php
        include 'action.php';
          $results = mysqli_query($db, "SELECT * FROM team");




                ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital@1&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital@1&family=Playfair+Display+SC&display=swap" rel="stylesheet">
    
    
    <link rel="stylesheet" href="css/Team.css">
    <link rel="stylesheet" href="css/style.css">




    <title>Team</title>
</head>
<body >
    <!-----------------------Menu----------------------->
    <nav>
        <div class="logo">
            <img class="logo__logo" src="/Projet-KolnaExplorer/Assets/Image 1.png" alt="">
        </div>
        </div>
        <ul class="navMenu">
            <li><a href="#">Acceuil</a></li>
            <li><a href="#">À propos de nous</a></li>
            <li class="active" id="act"><a href="#">Nos Activités</a>
                <ul class="smenu">
                    <li class="active"><a href="">Activités Principales</a></li>
                    <li class="active"><a href="">Destination</a></li>
                    <li class="active"><a href="">Events</a></li>
                </ul>
            </li>

            <li class="active"><a href="#">Galerie</a></li>
            <li class="active"><a href="#">Blog</a></li>
            <li class="active"><a href="#">Contact</a></li>
        </ul>
        <div class="burger">
            <div class="burger__line1"></div>
            <div class="burger__line2"></div>
            <div class="burger__line3"></div>
        </div>
    </nav>
        <!-----------------------Fin Menu----------------------->
        <!----------------------sectionTeam---------------------->

    <section class="sectionTeam">
        
        <img class=" sectionTeam-photo  "src="Assets/explorer.jpg" alt="">
        <div><h1 class="sectionTeam-title" id="text"></h1></div>

    </section>
            <!----------------------Fin sectionTeam---------------------->


                   <!----------------------sectionTeam2----------------------> 
    <section class="sectionTeam2">
        
            <div class="sectionTeam2-block0"><h1 class="sectionTeam2-block0__title " > Our Team</h1></div>
        <div class="container-team">

        
        <?php while ($row = mysqli_fetch_array($results)) { ?>       
        <div class="sectionTeam2-block1">
            <div class="block1-team1">
            <img class="block1-team1__photo" src="images/<?= $row['team_img'];?>" alt="">
            <div class="logoteam">
                <a  href="<?php echo $row['twitter_path']; ?>" target="_blank"><img class=" logoteam--icone "src="Assets/twitter_tweet_logo_mint_icon_134949-1.png" alt=""></a>
                <a  href="<?php echo $row['facebook_path']; ?>" target="_blank" > <img class=" logoteam--icone "src="Assets/facebook_fb_logo_mint_icon_134940-1.png" alt=""> </a>
                <a   href="<?php echo $row['instagram_path']; ?>" target="_blank"    >  <img class=" logoteam--icone " src="Assets/instagram_ig_logo_mint_icon_134942-1.png" alt=""></a>
                <a   href="<?php echo $row['linkdin_path']; ?>" target="_blank">   <img class=" logoteam--icone " src="Assets/linkedin_in_logo_mint_icon_134943-1.png" alt=""></a>
                </div>
            </div>
            <div class="block1-team2">
                <hr  class=block1-team2--ligne>
            <h1  class="block1-team2__tite1"  ><?php echo $row['team_firstName']; ?></h1>
            <h2   class="block1-team2__tite2"><?php echo $row['team_role']; ?></h2>
            <p   class="block1-team2__tite3"><?php echo $row['team_resum']; ?></p>
            </div>

</div>
    <?php } ?>
<!--               
       <div class="sectionTeam2-block1">
            <div class="block1-team1">
            <img class="block1-team1__photo" src="Assets/Jonathan_Ive_OTRS-100x100.jpg" alt="">
            <div class="logoteam">
                <a  href=" https://twitter.com/login?lang=fr" target="_blank"><img class=" logoteam--icone "src="Assets/twitter_tweet_logo_mint_icon_134949-1.png" alt=""></a>
                <a  href="https://fr-fr.facebook.com/" target="_blank" > <img class=" logoteam--icone "src="Assets/facebook_fb_logo_mint_icon_134940-1.png" alt=""> </a>
                <a   href="https://www.instagram.com/accounts/login/?hl=fr" target="_blank"    >  <img class=" logoteam--icone " src="Assets/instagram_ig_logo_mint_icon_134942-1.png" alt=""></a>
                <a   href="https://fr.linkedin.com/" target="_blank">   <img class=" logoteam--icone " src="Assets/linkedin_in_logo_mint_icon_134943-1.png" alt=""></a>
                </div>
            </div>
            <div class="block1-team2">
                <hr  class=block1-team2--ligne>
            <h1  class="block1-team2__tite1"  >Nom et Prénon</h1>
            <h2   class="block1-team2__tite2">Role</h2>
            <p   class="block1-team2__tite3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi similique reprehenderit laboriosam quisquam labore consequatur, quis doloribus. Sed laboriosam ea possimus ipsum autem tempore iusto repellat. Vitae necessitatibus dolores aut!</p>
            </div>
    </div>

    <div class="sectionTeam2-block1">
            <div class="block1-team1">
            <img class="block1-team1__photo" src="Assets/Jonathan_Ive_OTRS-100x100.jpg" alt="">
            <div class="logoteam">
                <a  href=" https://twitter.com/login?lang=fr" target="_blank"><img class=" logoteam--icone "src="Assets/twitter_tweet_logo_mint_icon_134949-1.png" alt=""></a>
                <a  href="https://fr-fr.facebook.com/" target="_blank" > <img class=" logoteam--icone "src="Assets/facebook_fb_logo_mint_icon_134940-1.png" alt=""> </a>
                <a   href="https://www.instagram.com/accounts/login/?hl=fr" target="_blank"    >  <img class=" logoteam--icone " src="Assets/instagram_ig_logo_mint_icon_134942-1.png" alt=""></a>
                <a   href="https://fr.linkedin.com/" target="_blank">   <img class=" logoteam--icone " src="Assets/linkedin_in_logo_mint_icon_134943-1.png" alt=""></a>
                </div>
            </div>
            <div class="block1-team2">
                <hr  class=block1-team2--ligne>
            <h1  class="block1-team2__tite1"  >Nom et Prénon</h1>
            <h2   class="block1-team2__tite2">Role</h2>
            <p   class="block1-team2__tite3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi similique reprehenderit laboriosam quisquam labore consequatur, quis doloribus. Sed laboriosam ea possimus ipsum autem tempore iusto repellat. Vitae necessitatibus dolores aut!</p>
            </div>
    </div>
    

    <div class="sectionTeam2-block1">
            <div class="block1-team1">
            <img class="block1-team1__photo" src="Assets/Jonathan_Ive_OTRS-100x100.jpg" alt="">
            <div class="logoteam">
                <a  href=" https://twitter.com/login?lang=fr" target="_blank"><img class=" logoteam--icone "src="Assets/twitter_tweet_logo_mint_icon_134949-1.png" alt=""></a>
                <a  href="https://fr-fr.facebook.com/" target="_blank" > <img class=" logoteam--icone "src="Assets/facebook_fb_logo_mint_icon_134940-1.png" alt=""> </a>
                <a   href="https://www.instagram.com/accounts/login/?hl=fr" target="_blank"    >  <img class=" logoteam--icone " src="Assets/instagram_ig_logo_mint_icon_134942-1.png" alt=""></a>
                <a   href="https://fr.linkedin.com/" target="_blank">   <img class=" logoteam--icone " src="Assets/linkedin_in_logo_mint_icon_134943-1.png" alt=""></a>
                </div>
            </div>
            <div class="block1-team2">
                <hr  class=block1-team2--ligne>
            <h1  class="block1-team2__tite1"  >Nom et Prénon</h1>
            <h2   class="block1-team2__tite2">Role</h2>
            <p   class="block1-team2__tite3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi similique reprehenderit laboriosam quisquam labore consequatur, quis doloribus. Sed laboriosam ea possimus ipsum autem tempore iusto repellat. Vitae necessitatibus dolores aut!</p>
            </div>
    </div>

    <div class="sectionTeam2-block1">
            <div class="block1-team1">
            <img class="block1-team1__photo" src="Assets/Jonathan_Ive_OTRS-100x100.jpg" alt="">
            <div class="logoteam">
                <a  href=" https://twitter.com/login?lang=fr" target="_blank"><img class=" logoteam--icone "src="Assets/twitter_tweet_logo_mint_icon_134949-1.png" alt=""></a>
                <a  href="https://fr-fr.facebook.com/" target="_blank" > <img class=" logoteam--icone "src="Assets/facebook_fb_logo_mint_icon_134940-1.png" alt=""> </a>
                <a   href="https://www.instagram.com/accounts/login/?hl=fr" target="_blank"    >  <img class=" logoteam--icone " src="Assets/instagram_ig_logo_mint_icon_134942-1.png" alt=""></a>
                <a   href="https://fr.linkedin.com/" target="_blank">   <img class=" logoteam--icone " src="Assets/linkedin_in_logo_mint_icon_134943-1.png" alt=""></a>
                </div>
            </div>
            <div class="block1-team2">
                <hr  class=block1-team2--ligne>
            <h1  class="block1-team2__tite1"  >Nom et Prénon</h1>
            <h2   class="block1-team2__tite2">Role</h2>
            <p   class="block1-team2__tite3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi similique reprehenderit laboriosam quisquam labore consequatur, quis doloribus. Sed laboriosam ea possimus ipsum autem tempore iusto repellat. Vitae necessitatibus dolores aut!</p>
            </div>
    </div>
    <div class="sectionTeam2-block1">
            <div class="block1-team1">
            <img class="block1-team1__photo" src="Assets/Jonathan_Ive_OTRS-100x100.jpg" alt="">
            <div class="logoteam">
                <a  href=" https://twitter.com/login?lang=fr" target="_blank"><img class=" logoteam--icone "src="Assets/twitter_tweet_logo_mint_icon_134949-1.png" alt=""></a>
                <a  href="https://fr-fr.facebook.com/" target="_blank" > <img class=" logoteam--icone "src="Assets/facebook_fb_logo_mint_icon_134940-1.png" alt=""> </a>
                <a   href="https://www.instagram.com/accounts/login/?hl=fr" target="_blank"    >  <img class=" logoteam--icone " src="Assets/instagram_ig_logo_mint_icon_134942-1.png" alt=""></a>
                <a   href="https://fr.linkedin.com/" target="_blank">   <img class=" logoteam--icone " src="Assets/linkedin_in_logo_mint_icon_134943-1.png" alt=""></a>
                </div>
            </div>
            <div class="block1-team2">
                <hr  class=block1-team2--ligne>
            <h1  class="block1-team2__tite1"  >Nom et Prénon</h1>
            <h2   class="block1-team2__tite2">Role</h2>
            <p   class="block1-team2__tite3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi similique reprehenderit laboriosam quisquam labore consequatur, quis doloribus. Sed laboriosam ea possimus ipsum autem tempore iusto repellat. Vitae necessitatibus dolores aut!</p>
            </div>
    </div><div class="sectionTeam2-block1">
            <div class="block1-team1">
            <img class="block1-team1__photo" src="Assets/Jonathan_Ive_OTRS-100x100.jpg" alt="">
            <div class="logoteam">
                <a  href=" https://twitter.com/login?lang=fr" target="_blank"><img class=" logoteam--icone "src="Assets/twitter_tweet_logo_mint_icon_134949-1.png" alt=""></a>
                <a  href="https://fr-fr.facebook.com/" target="_blank" > <img class=" logoteam--icone "src="Assets/facebook_fb_logo_mint_icon_134940-1.png" alt=""> </a>
                <a   href="https://www.instagram.com/accounts/login/?hl=fr" target="_blank"    >  <img class=" logoteam--icone " src="Assets/instagram_ig_logo_mint_icon_134942-1.png" alt=""></a>
                <a   href="https://fr.linkedin.com/" target="_blank">   <img class=" logoteam--icone " src="Assets/linkedin_in_logo_mint_icon_134943-1.png" alt=""></a>
                </div>
            </div>
            <div class="block1-team2">
                <hr  class=block1-team2--ligne>
            <h1  class="block1-team2__tite1"  >Nom et Prénon</h1>
            <h2   class="block1-team2__tite2">Role</h2>
            <p   class="block1-team2__tite3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi similique reprehenderit laboriosam quisquam labore consequatur, quis doloribus. Sed laboriosam ea possimus ipsum autem tempore iusto repellat. Vitae necessitatibus dolores aut!</p>
            </div>
    </div> -->

    
    
        </div>









        
      <!-- <div class="sectionTeam2-block1">
            <div class="block1-team1">
            <img class="block1-team1__photo" src="Assets/Jonathan_Ive_OTRS-100x100.jpg" alt="">
            <div class="logoteam">
                <a  href=" https://twitter.com/login?lang=fr" target="_blank"><img class=" logoteam--icone "src="Assets/twitter_tweet_logo_mint_icon_134949-1.png" alt=""></a>
                <a  href="https://fr-fr.facebook.com/" target="_blank" > <img class=" logoteam--icone "src="Assets/facebook_fb_logo_mint_icon_134940-1.png" alt=""> </a>
                <a   href="https://www.instagram.com/accounts/login/?hl=fr" target="_blank"    >  <img class=" logoteam--icone " src="Assets/instagram_ig_logo_mint_icon_134942-1.png" alt=""></a>
                <a   href="https://fr.linkedin.com/" target="_blank">   <img class=" logoteam--icone " src="Assets/linkedin_in_logo_mint_icon_134943-1.png" alt=""></a>
                </div>
            </div>
            <div class="block1-team2">
                <hr  class=block1-team2--ligne>
            <h1  class="block1-team2__tite1"  >Nom et Prénon</h1>
            <h2   class="block1-team2__tite2">Role</h2>
            <p   class="block1-team2__tite3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi similique reprehenderit laboriosam quisquam labore consequatur, quis doloribus. Sed laboriosam ea possimus ipsum autem tempore iusto repellat. Vitae necessitatibus dolores aut!</p>
            </div>
    </div>

        <div class="sectionTeam2-block2">
            <div class="block1-team1">
            <img class="block1-team1__photo" src="Assets/Jonathan_Ive_OTRS-100x100.jpg" alt="">
            <div class="logoteam">
                <a  href=" https://twitter.com/login?lang=fr" target="_blank"><img class=" logoteam--icone "src="Assets/twitter_tweet_logo_mint_icon_134949-1.png" alt=""></a>
                <a  href="https://fr-fr.facebook.com/" target="_blank" > <img class=" logoteam--icone "src="Assets/facebook_fb_logo_mint_icon_134940-1.png" alt=""> </a>
                <a   href="https://www.instagram.com/accounts/login/?hl=fr" target="_blank"    >  <img class=" logoteam--icone " src="Assets/instagram_ig_logo_mint_icon_134942-1.png" alt=""></a>
                <a   href="https://fr.linkedin.com/" target="_blank">   <img class=" logoteam--icone " src="Assets/linkedin_in_logo_mint_icon_134943-1.png" alt=""></a>
                </div>
            </div>
            <div class="block1-team2">
                <hr  class=block1-team2--ligne>
            <h1  class="block1-team2__tite1"  >Nom et Prénon</h1>
            <h2   class="block1-team2__tite2">Role</h2>
            <p   class="block1-team2__tite3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi similique reprehenderit laboriosam quisquam labore consequatur, quis doloribus. Sed laboriosam ea possimus ipsum autem tempore iusto repellat. Vitae necessitatibus dolores aut!</p>
            </div>
        </div>
        
        <div class="sectionTeam2-block3">
            <div class="block1-team1">
            <img  class="block1-team1__photo" src="Assets/Mark_Zuckerberg_at_the_37th_G8_Summit_in_Deauville_018_v1-100x100.jpg" alt="">
            <div class="logoteam">
                <a  href=" https://twitter.com/login?lang=fr" target="_blank"><img class=" logoteam--icone "src="Assets/twitter_tweet_logo_mint_icon_134949-1.png" alt=""></a>
                <a  href="https://fr-fr.facebook.com/" target="_blank" > <img class=" logoteam--icone " src="Assets/facebook_fb_logo_mint_icon_134940-1.png" alt=""> </a>
                <a   href="https://www.instagram.com/accounts/login/?hl=fr" target="_blank"    >  <img class=" logoteam--icone "src="Assets/instagram_ig_logo_mint_icon_134942-1.png" alt=""></a>
                <a   href="https://fr.linkedin.com/" target="_blank">   <img class=" logoteam--icone "src="Assets/linkedin_in_logo_mint_icon_134943-1.png" alt=""></a>
                </div>

            </div>
            <div class="block1-team2">
                <hr  class=block1-team2--ligne>

            <h1   class="block1-team2__tite1">Nom et Prénon</h1>
            <h2  class="block1-team2__tite2">Role</h2>
            <p   class="block1-team2__tite3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi similique reprehenderit laboriosam quisquam labore consequatur, quis doloribus. Sed laboriosam ea possimus ipsum autem tempore iusto repellat. Vitae necessitatibus dolores aut!</p>
            </div>
        </div>

        <div class="sectionTeam2-block4">
            <div class="block1-team1">
            <img class="block1-team1__photo" src="Assets/President-Barack-Obama-100x100.jpg" alt="">
            <div class="logoteam">
                <a  href=" https://twitter.com/login?lang=fr" target="_blank"><img class="logoteam--icone" src="Assets/twitter_tweet_logo_mint_icon_134949-1.png" alt=""></a>
                <a  href="https://fr-fr.facebook.com/" target="_blank" > <img  class=" logoteam--icone"src="Assets/facebook_fb_logo_mint_icon_134940-1.png" alt=""> </a>
                <a   href="https://www.instagram.com/accounts/login/?hl=fr" target="_blank"    >  <img class=" logoteam--icone"src="Assets/instagram_ig_logo_mint_icon_134942-1.png" alt=""></a>
                <a   href="https://fr.linkedin.com/" target="_blank">   <img class=" logoteam--icone "src="Assets/linkedin_in_logo_mint_icon_134943-1.png" alt=""></a>
                </div>

            </div>
            <div class="block1-team2">
                <hr  class=block1-team2--ligne>

            <h1  class="block1-team2__tite1">Nom et Prénon</h1>
            <h2  class="block1-team2__tite2">Role</h2>
            <p  class="block1-team2__tite3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi similique reprehenderit laboriosam quisquam labore consequatur, quis doloribus. Sed laboriosam ea possimus ipsum autem tempore iusto repellat. Vitae necessitatibus dolores aut!</p>
            </div>
        </div>
            -->
            

    
    </section>
                       <!----------------------FinsectionTeam2----------------------> 

                     <!----------------------Footer----------------------> 
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
                <img class="footerPart__imgPart" src="/Projet-KolnaExplorer/Assets/Groupe85.png" alt="partenaire">
                <img class="footerPart__imgPart" src="/Projet-KolnaExplorer/Assets/Groupe85.png" alt="partenaire">
                <img class="footerPart__imgPart" src="/Projet-KolnaExplorer/Assets/Groupe85.png" alt="partenaire">
                <img class="footerPart__imgPart" src="/Projet-KolnaExplorer/Assets/Groupe85.png" alt="partenaire">
            </div>
            <div class="footerInfo">
                <!----------------------------------------------------------------->
                <div class="foBloc1">
                    <img class="foBloc1__footerLogo" src="/Projet-KolnaExplorer/Assets/logo.png" alt="logo">
                    <div class="foBloc1__infoCont">
                        <p><b>Email :</b> kolnaexplorer@gmail.com</p>
                        <p><b>Phone :</b> +212-661-123-456</p>
                    </div>
                    <div class="foBloc1__icofooter">
                        <img class="icofooter" src="/Projet-KolnaExplorer/Assets/twitter-footer.png" alt="twitter">
                        <img class="icofooter" src="/Projet-KolnaExplorer/Assets/facebook-footer.png" alt="facebook">
                        <img class="icofooter" src="/Projet-KolnaExplorer/Assets/insta-footer.png" alt="instagram">
                        <img class="icofooter" src="/Projet-KolnaExplorer/Assets/youtube-footer.png" alt="youtube">
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
                            src="/Projet-KolnaExplorer/Assets/mail.png" alt="mail"> Contacter
                        nous</button>
                    <button class="foBloc5__btnFtr" onclick="location.href='#';"><img class="imgBTN"
                            src="/Projet-KolnaExplorer/Assets/sports.png" alt="sport"> Devenir membre</button>
                </div>
                <!---------------------------------------------------------------->
            </div>

        </div>
        <div class="copyright">
            <h5>Copyright © 2020 Designed <span class="copyright__spano">by YouCode Students</span> </h5>
        </div>

    </div>

                     <!----------------------Fin Footer---------------------->
        <script src="./js/script.js"></script>


</body>
</html>