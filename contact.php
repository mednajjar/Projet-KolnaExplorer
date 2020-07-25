
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kolna Explorer</title>

    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/contact.css"> -->
</head>

<body>
    <!--------------------------------------------** M E N u **----------------------------------------------->
    <nav>
        <div class="logo">
            <img class="logo__logo" src="Assets/Image 1.png" alt="">
        </div>
        </div>
        <ul class="navMenu">
            <li><a class="active" href="index.php">Acceuil</a></li>
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
            <li class="active"><a href="contact.php">Contact</a></li>
        </ul>
        <div class="burger">
            <div class="burger__line1"></div>
            <div class="burger__line2"></div>
            <div class="burger__line3"></div>
        </div>
    </nav>
    <!---------------------------------------** F I N **---------------------------------------------->
    <!--  -->
    <section class="contact">
        <!-- section top -->
        <h1 class="contact__title">contact</h1>
        <h3 class="contact__subtitle">Cras eu elit congue, placerat dui ut, tincidunt nisl.</h3>
        <div class="contact__wrapper">
            <div class="wrapper__tel">
                <img class="wrapper__tel--icon" src="Assets/phone.png" alt="phone">
                <h3 class="wrapper__tel--title">Téléphone</h3>
                <p class="wrapper__tel--para">Cras eu elit congue, placerat dui ut, tincidunt nisl.</p>
                <a href="tel:+212-661-123-345" class="wrapper__tel--num">+212661123345</a>
            </div>
            <div class="wrapper__email">
                <img class="wrapper__email--icon" src="Assets/email.png" alt="email">
                <h3 class="wrapper__email--title">Email</h3>
                <p class="wrapper__email--para">Cras eu elit congue, placerat dui ut, tincidunt nisl.</p>
                <a href="mailto:kolnaexplorer@gmail.com" class="wrapper__email--ema">kolnaexplorer@gmail.com</a>
            </div>
            <div class="wrapper__local">
                <img class="wrapper__local--icon" src="Assets/local.png" alt="localisation">
                <h3 class="wrapper__local--title">Localisation</h3>
                <p class="wrapper__local--para">Cras eu elit congue, placerat dui ut, tincidunt nisl.</p>
                <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin"
                    class="wrapper__local--dest">View on Google map</a>
            </div>
        </div>
        <!-- section top END -->
        <!-- section form -->
        <div class="contact__container">
            <div class="contact__form">
            
                <h4 class="contact__form--title">Contacter-Nous!</h4>
            
                    <?php 
                        $name = $subject = $email = $message = "";
                        if($_SERVER['REQUEST_METHOD'] == 'POST'){
                        
                            $name = $_POST['name'];
                            $email = $_POST['email']; 
                            $subject = $_POST['subject'];
                            $message = $_POST['body'];
                            $email_from = 'kolnaexplorer@gmail.com';

                            $email_subject = "New form submission";

                            $email_body = "User Name: $name.\n".
                                                "User Email: $email.\n".
                                                    "User subject: $subject.\n".
                                                        "User Message: $message.\n";


                            $to = "meachkaddour1@gmail.com";

                            $headers = "From: $email_from \r\n";

                            $headers .= "Reply-To: $email \r\n";
                            mail($to,$email_subject,$email_body,$headers);

                            header("Location: contact.php");
                        
                        }
 
                    ?>
                    
                
                <form method="POST" action="contact.php" name="contact-form" id="contact-form">
                   
                    <div class="form__label1">
                        <label>Votre Nom<span class="text-danger"> *</span></label>
                        <img src="Assets/name.png" alt="personne">
                        <input name="name" id="name" type="text" placeholder="First Name :" required>
                    </div>
                    <div class="form__label2">
                        <label>Votre Email<span class="text-danger"> *</span></label>
                        <img src="Assets/gmail.png" alt="gmail">
                        <input name="email" id="email" type="email" placeholder="Your email :" required>
                    </div>
                    <div class="form__label3">
                        <label>Sujet</label>
                        <img src="Assets/subject.png" alt="subject">
                        <input name="subject" id="subject" type="text" placeholder="Sujet" required >
                    </div>
                    <div class="form__label4">
                        <label>Message</label>
                        <img src="Assets/msg.png" alt="message">
                        <textarea name="body" id="comments"  placeholder="Votre Message :" required></textarea>
                    </div>
                    <div class="form__labelSend">
                        <input type="submit" id="submit" name="submit" class="form__btnSend" value="Envoyer le message" required>
                    </div>
                </form>

                <!-- <input type="submit" id="submit" name="send" class="form__btnSend" value="Envoyer le message"> -->
                <div id="simple-msg">
                    
                </div>
            </div>
            <div class="bgImg">
                <img src="Assets/bgcontact.png">
            </div>
        </div>
    </section>
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
                <img class="footerPart__imgPart" src="Assets/Groupe85.png" alt="partenaire">
                <img class="footerPart__imgPart" src="Assets/Groupe85.png" alt="partenaire">
                <img class="footerPart__imgPart" src="Assets/Groupe85.png" alt="partenaire">
                <img class="footerPart__imgPart" src="Assets/Groupe85.png" alt="partenaire">
            </div>
            <div class="footerInfo">
                <!----------------------------------------------------------------->
                <div class="foBloc1">
                    <img class="foBloc1__footerLogo" src="Assets/logo.png" alt="logo">
                    <div class="foBloc1__infoCont">
                        <p><b>Email :</b> kolnaexplorer@gmail.com</p>
                        <p><b>Phone :</b> +212-661-123-456</p>
                    </div>
                    <div class="foBloc1__icofooter">
                        <img class="icofooter" src="Assets/twitter-footer.png" alt="twitter">
                        <img class="icofooter" src="Assets/facebook-footer.png" alt="facebook">
                        <img class="icofooter" src="Assets/insta-footer.png" alt="instagram">
                        <img class="icofooter" src="Assets/youtube-footer.png" alt="youtube">
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