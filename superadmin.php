<?php
include 'upload.php';



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to super-admin dashboard</title>
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/supadmin.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <aside class="asideBar">

        <ul class="dashMenu">
            <li onclick="location.href='superadmin.php'" id="menu1" class="dashMenu__dashboard">
                <div class="dashMenu__divico">
                    <img class="dashMenu__imgIco" src="Assets/dashicon.png" alt="dash icone">
                </div>
                <b class="dashMenu__list">Dashboard</b>
            </li>

            <li onclick="location.href='homepage.php'" id="menu2" class="activate">
            <div class="dashMenu__divico">
                <img class="dashMenu__imgIco" src="Assets/homeicon.png" alt="home icone">
            </div>
            <b class="dashMenu__list">Home</b>
        </li>
        <li onclick="location.href='eventpage.php'" id="menu3">
            <div class="dashMenu__divico">
                <img class="dashMenu__imgIco" src="Assets/eventicon.png" alt="events icone">
            </div>
            <b class="dashMenu__list">Events</b>
        </li>
        <li onclick="location.href='galeriepage.php'" id="menu4">
            <div class="dashMenu__divico">
                <img class="dashMenu__imgIco" src="Assets/galerieicon.png" alt="galerie icone">
            </div>
            <b class="dashMenu__list">Galerie</b>
        </li>
        <li onclick="location.href='destinationpage.php'" id="menu5">
            <div class="dashMenu__divico">
                <img class="dashMenu__imgIco" src="Assets/desticon.png" alt="destination icone">
            </div>
            <b class="dashMenu__list">Destination</b>
        </li>
        <li onclick="location.href='teampage.php'" id="menu6">
            <div class="dashMenu__divico">
                <img class="dashMenu__imgIco" src="Assets/teamicon.png" alt="team icone">
            </div>
            <b class="dashMenu__list">Team</b>
        </li>
        <li onclick="location.href='partnerpage.php'" id="menu7">
            <div class="dashMenu__divico">
                <img class="dashMenu__imgIco" src="Assets/partnericone.png" alt="partner icone">
            </div>
            <b class="dashMenu__list">Partners</b>
        </li>
        <li onclick="location.href='postpage.php'" id="menu8">
            <div class="dashMenu__divico">
                <img class="dashMenu__imgIco" src="Assets/posticon.png" alt="post icone">
            </div>
            <b class="dashMenu__list">Posts</b>
        </li>
        <li onclick="location.href='categorypage.php'" id="menu9">
            <div class="dashMenu__divico">
                <img class="dashMenu__imgIco" src="Assets/copieicon.png" alt="category icone">
            </div>
            <b class="dashMenu__list">Category</b>
        </li>
        <li onclick="location.href='mediapage.php'" id="menu10">
            <div class="dashMenu__divico">
                <img class="dashMenu__imgIco" src="Assets/mediaicon.png" alt="media icone">
            </div>
            <b class="dashMenu__list">Media</b>
        </li>
        <li onclick="location.href='adminpage.php'" id="menu11" class="dashMenu__admin">
            <div class="dashMenu__divico">
                <img class="dashMenu__imgIco" src="Assets/adminicon.png" alt="admin icone">
            </div>
            <b class="dashMenu__list">Ajouter admin</b>
        </li>
    </ul>

    </aside>
    <div class="topBar">

        <h3 class="topBar__titleAdmin">Welcome to super-admin dashboard</h3>

    </div>
    <!-- ---------------------------------------------------** D A S H B O A R D **--------------------------------------------------------- -->
    <section id="dash" class="homePage">
        <div class="homePage__blocdiv">
            <img class="homePage__illustimg" src="Assets/illustration-admin.gif" alt="admin">
        </div>
    </section>
  
    <!-- ---------------------------------------------------** D A S H B O A R D **--------------------------------------------------------- -->

    <script src="./js/jscript.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>