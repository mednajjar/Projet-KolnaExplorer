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
    
   
    <!-- ---------------------------------------------------** H O M E - P A G E **--------------------------------------------------------- -->
    <section id="homePage" class="homePage">
        <div class="homePage__homeTitle">
            <h1>Home page</h1>
        </div>
        <div class="formDiv">
            <h2 class="formDiv__title">Slider section</h2>
            
            <p><?php  echo $error; ?></p>
           
            <form class="formDiv__myForm" action="" method="post" enctype="multipart/form-data">
                <label class="custom-file-upload">
                    <input id="myinput" type="file" name="file">
                </label>
                <label class="custom-file-upload uploadBtn">
                    <input id="subBtn" type="submit" name="submit" value="Upload">
                    Upload
                </label>
            </form>
           
        </div>
        <h2 class="titleSlide">Les trois dernier photo affiché dans le slide</h2>
        <div class="sectionImg">
     
            
        <?php
        include 'config.php';
         $query = $db->query("SELECT * FROM images ORDER BY id DESC LIMIT 3");
                  if($query->rowCount() > 0){
                    while($row = $query->fetch(PDO::FETCH_ASSOC)){
                        $imageURL = 'uploads/'.$row["image"];
                 
                        ?>
                        <div class="sectionImg__imgSlide"><img height="auto" width="320"  src=" <?php echo $imageURL ; ?>" alt=""></div>
                        <?php
                    
       
            }
        }else{
        ?>
            </div>
                <p class="formDiv__title">No image(s) found...</p>
        <?php
            }
        ?>                           
        
    </section>
    
    <!-- ---------------------------------------------------** H O M E - P A G E **--------------------------------------------------------- -->
    <script src="./js/jscript.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>