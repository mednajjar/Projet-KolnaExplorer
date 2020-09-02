<?php
session_start();
include '../../config.php';
include '../../upload.php';

if(!$_SESSION['superadmin_login']){
    header("location: ../admin.php"); 
  
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to super-admin dashboard</title>
    <link rel="stylesheet" href="../../css/style.min.css">
    <link rel="stylesheet" href="../../css/supadmin.css">
    <link rel="stylesheet" href="../../css/style.css">

    
</head>

<body>
    <aside class="asideBar">

        <ul class="dashMenu">
            <li onclick="location.href='dashboard.php'" id="menu1" class="dashMenu__dashboard">
                <div class="dashMenu__divico">
                    <img class="dashMenu__imgIco" src="../../Assets/dashicon.png" alt="dash icone">
                </div>
                <b class="dashMenu__list">Dashboard</b>
            </li>

            <li onclick="location.href='homepage.php'" id="menu2" class="activate">
                <div class="dashMenu__divico">
                    <img class="dashMenu__imgIco" src="../../Assets/homeicon.png" alt="home icone">
                </div>
                <b class="dashMenu__list">Home</b>
            </li>
            <li onclick="location.href='eventpage.php'" id="menu3">
                <div class="dashMenu__divico">
                    <img class="dashMenu__imgIco" src="../../Assets/eventicon.png" alt="events icone">
                </div>
                <b class="dashMenu__list">Events</b>
            </li>
            <li onclick="location.href='galeriepage.php'" id="menu4">
                <div class="dashMenu__divico">
                    <img class="dashMenu__imgIco" src="../../Assets/galerieicon.png" alt="galerie icone">
                </div>
                <b class="dashMenu__list">Galerie</b>
            </li>
            <li onclick="location.href='destinationpage.php'" id="menu5">
                <div class="dashMenu__divico">
                    <img class="dashMenu__imgIco" src="../../Assets/desticon.png" alt="destination icone">
                </div>
                <b class="dashMenu__list">Destination</b>
            </li>
            <li onclick="location.href='teampage.php'" id="menu6">
                <div class="dashMenu__divico">
                    <img class="dashMenu__imgIco" src="../../Assets/teamicon.png" alt="team icone">
                </div>
                <b class="dashMenu__list">Team</b>
            </li>
            <li onclick="location.href='partnerpage.php'" id="menu7">
                <div class="dashMenu__divico">
                    <img class="dashMenu__imgIco" src="../../Assets/partnericone.png" alt="partner icone">
                </div>
                <b class="dashMenu__list">Partners</b>
            </li>
            <li onclick="location.href='postpage.php'" id="menu8">
                <div class="dashMenu__divico">
                    <img class="dashMenu__imgIco" src="../../Assets/posticon.png" alt="post icone">
                </div>
                <b class="dashMenu__list">Posts</b>
            </li>
            <li onclick="location.href='categorypage.php'" id="menu9">
                <div class="dashMenu__divico">
                    <img class="dashMenu__imgIco" src="../../Assets/copieicon.png" alt="category icone">
                </div>
                <b class="dashMenu__list">Category</b>
            </li>
            <li onclick="location.href='mediapage.php'" id="menu10">
                <div class="dashMenu__divico">
                    <img class="dashMenu__imgIco" src="../../Assets/mediaicon.png" alt="media icone">
                </div>
                <b class="dashMenu__list">Media</b>
            </li>
           
            <li onclick="location.href='adminpage.php'" id="menu11" class="dashMenu__admin">
                <div class="dashMenu__divico">
                    <img class="dashMenu__imgIco" src="../../Assets/adminicon.png" alt="admin icone">
                </div>
                <b class="dashMenu__list">Ajouter admin</b>
            
            </li>
          
        </ul>

    </aside>
    <div class="topBar">

        <h3 class="topBar__titleAdmin">Welcome to super-admin dashboard </h3>
        <label class="topBar__myLogout" onclick="location.href='logout.php'">Logout</label>

    </div>


    <!-- ---------------------------------------------------** H O M E - P A G E **--------------------------------------------------------- -->
    <section id="homePage" class="homePage">
        <div class="homePage__homeTitle">
            <h1>Home page</h1>
        </div>
        <div class="formDiv">
            <h2 class="formDiv__title">Slider Home Section</h2>

            
            <p class="formDiv__title"><?php if(isset($error)) echo $error; ?></p>
            <form class="formDiv__myForm" action="" method="post" enctype="multipart/form-data">
            
                <label class="custom-file-upload">
                    <input id="myinput1" type="file" name="file">
                </label>
                <label class="custom-file-upload uploadBtn1">
                    <input class="custom-file-upload__subBtn1" type="submit" name="submit" value="Upload">
                    Upload
                </label>
            </form>

        </div>
        <div>
        <h2 class="titleSlide">Les trois dernier photo affiché dans le slide</h2>
        <div class="sectionImg">


            <?php
       
         $query = $db->query("SELECT * FROM images ORDER BY id DESC LIMIT 3");
                  if($query->rowCount() > 0){
                    while($row = $query->fetch(PDO::FETCH_ASSOC)){
                        $imageURL = '../../uploads/'.$row["image"];
                 
                        ?>
            <div class="sectionImg__imgSlide"><img height="auto" width="100%" src=" <?php echo $imageURL ; ?>" alt="">
            </div>
            <?php
                    
       
            }
        }else{
        ?>
        </div>
        <p class="formDiv__title">No image(s) found...</p>
        <?php
            }
        ?>
        </div>

        <div>
        <h2 class="titleSlide">Tablede données</h2>
        <form class="form1" method="POST">
        <table>
                <tr>
                    
                    <th>id</th>
                    <th>SuperAdmin id</th>
                    <th>images</th>
                    <th>Action</th>
                </tr>
        <?php 
        
        // $query = $db->query("SELECT * FROM images ORDER BY id");
        //          if($query->rowCount() > 0){
        //            while($row = $query->fetch(PDO::FETCH_ASSOC)){
        //                $id= $row["id"];
        //                $image = $row["image"];
        $sql = 'SELECT * FROM images';
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $don = $stmt->fetchAll(PDO::FETCH_OBJ);
        foreach($don as $info){
              
   

           
                echo "<tr>
                
                    <td>$info->id</td>
                    <td>$info->spa_id</td>
                    <td>$info->image</td>";
        ?>
                    <td>
                        <label class="labelBtns" >
                        <a class="btnFrm colorRed" href="./delete.php?id=<?= $info->id ?>" onclick="return confirm('Are you sure you want to delete this entry!')">DELETE</a>
                        <a class="btnFrm colorBlue" href="./edit.php?id=<?= $info->id ?>">EDIT</a></label>
                    </td>
                </tr>
        <?php
            
            
        }
            ?>
            </table>
  
            
        </form>
            
        </div>
          
        
        <!-- ----------------------------------------------------------------** Galerie upload **-------------------------------------------------------------------- -->

        <div class="sectionGalerie">
            <div>
                <h2 class="formDiv__title">Slider Galerie Section</h2>

                
                <p class="formDiv__title"><?php if(isset($msg)) echo $msg; ?></p>
                <form class="formDiv__myForm" action="" method="post" enctype="multipart/form-data">
                
                    <label class="custom-file-upload">
                        <input id="myinput2" type="file" name="file">
                    </label>
                    <label class="custom-file-upload uploadBtn2">
                        <input class="custom-file-upload__subBtn2" type="submit" name="upload" value="Upload">
                        Upload
                    </label>
                </form>

            </div>
            <h2 class="titleSlide titleSlideGal">Les cinq dernier photo affiché dans le slide</h2>
            <div class="sectionImg">


                <?php
   
         $query = $db->query("SELECT * FROM galerie ORDER BY gal_id DESC LIMIT 5");
                  if($query->rowCount() > 0){
                    while($row = $query->fetch(PDO::FETCH_ASSOC)){
                        $imgURL = '../../uploads/'.$row["gal_img"];
                 
                        ?>
                <div><img height="auto" width="100%" src=" <?php echo $imgURL ; ?>" alt=""></div>
                <?php
                    
       
            }
        }else{
        ?>
            </div>
            <p>No image(s) found...</p>
            <?php
            }
        ?>


        </div>

        <div class="dataGalerie">
        <h2 class="titleSlide">Tableau des données</h2>
        <form class="form1" method="POST">
        <table id="galerieTable">
                <tr>
                    
                    <th>Id</th>
                    <th>SuperAdmin id</th>
                    <th>Images</th>
                    <th>Action</th>
                </tr>
        <?php 
       
       $sql = 'SELECT * FROM galerie';
       $stmt = $db->prepare($sql);
       $stmt->execute();
       $don = $stmt->fetchAll(PDO::FETCH_OBJ);
       foreach($don as $info){
           
            echo"<tr>
               
                    <td>$info->gal_id</td>
                    <td>$info->spa_id</td>
                    <td>$info->gal_img</td>";
            ?>
                    <td>
                    <label class="labelBtns" >
                    <a class="btnFrm colorRed" href="./delete.php?id=<?= $info->gal_id ?>" onclick="return confirm('Are you sure you want to delete this entry!')">DELETE</a>
                    <a class="btnFrm colorBlue" href="./modifier.php?id=<?= $info->gal_id ?>">EDIT</a></label>
            
                    </td>
                </tr>
            
            <?php
            
        }
            ?>
        </table>
        </form>
        </div>
        <!-- ----------------------------------------** A C T I V I T Y - S E C T I O N **-------------------------------------------------- -->
        <div class="sectionActivity">
        <h2 class="sectionActivity__titleTop">Ajouter les information de la section activités </h2>
            <p class="sectionActivity__titleTop"><?php if(isset($errmsg)) echo $errmsg; ?></p>

            <div class="formActivity">
                
                <form class="activityForm" action="" method="POST" enctype="multipart/form-data">
                <b class="formActivity__titleUpload">Upload project image</b>
                    <label class="activityForm__uploadFile">
                        
                            <input type="file" name="file">
                    </label>

                    <label for="" class="activityForm__labelName"> Title :</label>
                    <input type="text" class="activityForm__proTitle" name="title" placeholder="Title..." required>          

                    <label for="" class="activityForm__labelName">Description :</label>
                    <textarea class="activityForm__description" name="description" placeholder="Description..." required></textarea>

                    <input class="activityForm__sendBtn" type="submit" value="Add" name="Add">
                </form>
            </div>
        </div>
        <!-- ------------------------------------------------** activity table **-------------------------------------------------- -->
        <div class="dataGalerie">
        <h2 class="titleSlide">Table de données</h2>
        <form class="form1" method="POST">
        <table id="galerieTable">
                <tr>
                    
                    <th>Id</th>
                    <th>SuperAdmin id</th>
                    <th>icones</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
        <?php 
       
       $sql = 'SELECT * FROM activity';
       $stmt = $db->prepare($sql);
       $stmt->execute();
       $don = $stmt->fetchAll(PDO::FETCH_OBJ);
       foreach($don as $info){
           
            echo"<tr>
               
                    <td>$info->act_id</td>
                    <td>$info->spa_id</td>
                    <td>$info->act_icone</td>
                    <td>$info->act_title</td>
                    <td>$info->act_desc</td>";
            ?>
                    <td>
                    <label class="labelBtns">
                    <a class="btnFrm colorRed" href="./delete.php?id=<?= $info->act_id ?>" onclick="return confirm('Are you sure you want to delete this entry!')">DELETE</a>
                    <a class="btnFrm colorBlue" href="./update.php?id=<?= $info->act_id ?>">EDIT</a></label>
            
                    </td>
                </tr>
            
            <?php
            
        }
            ?>
        </table>
        </form>
        </div>
        <!-- ---------------------------------------------------------** section destination **--------------------------------------------------------------------- -->
        <div class="sectionActivity">
        <h2 class="sectionActivity__titleTop">Ajouter les information de la section destination </h2>
            <p class="sectionActivity__titleTop"><?php if(isset($alert)) echo $alert; ?></p>

            <div class="formActivity formDestination">
                
                <form class="activityForm" action="" method="POST" enctype="multipart/form-data">
                <b class="formActivity__titleUpload">Upload image</b>
                    <label class="activityForm__uploadFile">
                        
                            <input type="file" name="file">
                    </label>

                    <label for="" class="activityForm__labelName"> Title home :</label>
                    <input type="text" class="activityForm__proTitle" name="titleH" placeholder="Title..." required>

                    <label for="" class="activityForm__labelName"> Info 1 :</label>
                    <input type="text" class="activityForm__proTitle" name="info1" placeholder="info1..." required>
                    
                    <label for="" class="activityForm__labelName"> Info 2 :</label>
                    <input type="text" class="activityForm__proTitle" name="info2" placeholder="info2..." required>

                    <label for="" class="activityForm__labelName"> Info 3 :</label>
                    <input type="text" class="activityForm__proTitle" name="info3" placeholder="info3..." required>
                    
                    <label for="" class="activityForm__labelName"> Title destination :</label>
                    <input type="text" class="activityForm__proTitle" name="titleD" placeholder="Title..." required> 

                    <label for="" class="activityForm__labelName">Title info :</label>
                    <textarea class="activityForm__description" name="infoT" placeholder="Description..." required></textarea>

                    <label for="" class="activityForm__labelName">Description :</label>
                    <textarea class="activityForm__description" name="descrip" placeholder="Description..." required></textarea>

                    <input class="activityForm__sendBtn" type="submit" value="Add" name="ajouter">
                </form>
            </div>
        </div>
        <div>
        <h2 class="titleSlide">Les trois dernier photo affiché</h2>
        <div class="sectionImg">


            <?php
       
         $query = $db->query("SELECT * FROM destination ORDER BY dest_id DESC LIMIT 3");
                  if($query->rowCount() > 0){
                    while($row = $query->fetch(PDO::FETCH_ASSOC)){
                        $image = '../../uploads/'.$row["dest_img"];
                 
                        ?>
            <div class="sectionImg__imgSlide"><img height="auto" width="100%" src=" <?php echo $image ; ?>" alt="">
            </div>
            <?php
                    
       
            }
        }else{
        ?>
        </div>
        <p class="formDiv__title">No image(s) found...</p>
        <?php
            }
        ?>
        </div>
        <!-- ------------------------------------------------** activity table **-------------------------------------------------- -->
        <div class="dataGalerie">
        <h2 class="titleSlide">Table de données</h2>
        <form class="form1" method="POST">
        <table id="galerieTable">
                <tr>
                    
                    <th>Id</th>
                    <th>SuperAdmin id</th>
                    <th>Title home</th>
                    <th>Info 1</th>
                    <th>Info 2</th>
                    <th>Info 3</th>
                    <th>Title destination</th>
                    <th>Title info</th>
                    <th>Description</th>
                    <th>Image path</th>
                    <th>Action</th>
                </tr>
        <?php 
       
       $sql = 'SELECT * FROM destination';
       $stmt = $db->prepare($sql);
       $stmt->execute();
       $don = $stmt->fetchAll(PDO::FETCH_OBJ);
       foreach($don as $info){
           
            echo"<tr>
               
                    <td>$info->dest_id</td>
                    <td>$info->spa_id</td>
                    <td>$info->dest_title_home</td>
                    <td>$info->dest_info1</td>
                    <td>$info->dest_info2</td>
                    <td>$info->dest_info3</td>
                    <td>$info->dest_title_destination</td>
                    <td>$info->dest_info_title</td>
                    <td>$info->dest_desc</td>
                    <td>$info->dest_img</td>
                    
                    ";
            ?>
                    <td>
                    <label class="labelBtns" >
                    <a class="btnFrm colorRed" href="./delete.php?id=<?= $info->dest_id ?>" onclick="return confirm('Are you sure you want to delete this entry!')">DELETE</a>  
                    <a class="btnFrm colorBlue" href="./upd.php?id=<?= $info->dest_id ?>">EDIT</a></label>
            
                    </td>
                </tr>
            
            <?php
            
        }
            ?>
        </table>
        </form>
        </div>
        <!-- ---------------------------------------------------------** section event **--------------------------------------------------------------------- -->
        <div class="sectionActivity">
        <h2 class="sectionActivity__titleTop">Ajouter les information de la section events </h2>
            <p class="sectionActivity__titleTop"><?php if(isset($alrtmsg)) echo $alrtmsg; ?></p>

            <div class="formActivity FormEvents">
                
                <form class="activityForm" action="" method="POST" enctype="multipart/form-data">
                <b class="formActivity__titleUpload">Upload image</b>
                    <label class="activityForm__uploadFile">
                        
                            <input type="file" name="file">
                    </label>

                    <label for="" class="activityForm__labelName">Event title :</label>
                    <input type="text" class="activityForm__proTitle" name="title" placeholder="Title..." required>

                    <label for="" class="activityForm__labelName">Event description :</label>
                    <textarea class="activityForm__description" name="descrip" placeholder="Description..." required></textarea>

                    <label for="" class="activityForm__labelName"> Event location :</label>
                    <input type="text" class="activityForm__proTitle" name="location" placeholder="Location..." required> 

                    <label for="" class="activityForm__labelName"> Event Date :</label>
                    <input type="text" class="activityForm__proTitle" name="date" placeholder="24 Junary,2021..." required> 

                    <input class="activityForm__sendBtn" type="submit" value="Add" name="insert">
                </form>
            </div>
        </div>
        <div>
        <h2 class="titleSlide">Les trois dernier photo affiché</h2>
        <div class="sectionImg">


            <?php
       
         $query = $db->query("SELECT * FROM events ORDER BY event_id DESC LIMIT 3");
                  if($query->rowCount() > 0){
                    while($row = $query->fetch(PDO::FETCH_ASSOC)){
                        $img = '../../uploads/'.$row["event_img"];
                 
                        ?>
            <div class="sectionImg__imgSlide"><img height="auto" width="100%" src=" <?php echo $img ; ?>" alt="">
            </div>
            <?php
                    
       
            }
        }else{
        ?>
        </div>
        <p class="formDiv__title">No image(s) found...</p>
        <?php
            }
        ?>
        </div>
        <!-- ------------------------------------------------** event table **-------------------------------------------------- -->
        <div class="dataGalerie">
        <h2 class="titleSlide">Table de données</h2>
        <form class="form1" method="POST">
        <table id="galerieTable">
                <tr>
                    
                    <th>Id</th>
                    <th>superAdmin id</th>
                    <th>Image path</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Location</th>
                    <th>La date</th>
                    <th>Action</th>
                </tr>
        <?php 
       
       $sql = 'SELECT * FROM events';
       $stmt = $db->prepare($sql);
       $stmt->execute();
       $don = $stmt->fetchAll(PDO::FETCH_OBJ);
       foreach($don as $info){
           
            echo"<tr>
               
                    <td>$info->event_id</td>
                    <td>$info->spa_id</td>
                    <td>$info->event_img</td>
                    <td>$info->event_title</td>
                    <td>$info->event_desc</td>
                    <td>$info->event_location</td>
                    <td>$info->event_date</td>
                    
                    ";
            ?>
                    <td>
                    <label class="labelBtns" >
                    <a class="btnFrm colorRed" href="./delete.php?id=<?= $info->event_id ?>" onclick="return confirm('Are you sure you want to delete this entry!')">DELETE</a>  
                    <a class="btnFrm colorBlue" href="./updt.php?id=<?= $info->event_id ?>">EDIT</a></label>
            
                    </td>
                </tr>
            
            <?php
            
        }
            ?>
        </table>
        </form>
        </div>
        <!-- ---------------------------------------------------------** section Team **--------------------------------------------------------------------- -->
        <div class="sectionActivity">
        <h2 class="sectionActivity__titleTop">Ajouter les information de la section Team </h2>
            <p class="sectionActivity__titleTop"><?php if(isset($alertmsg)) echo $alertmsg; ?></p>

            <div class="formActivity FormTeam">
                
                <form class="activityForm" action="" method="POST" enctype="multipart/form-data">
                <b class="formActivity__titleUpload">Upload image</b>
                    <label class="activityForm__uploadFile">
                        
                            <input type="file" name="file">
                    </label>

                    <label for="" class="activityForm__labelName">Full name :</label>
                    <input type="text" class="activityForm__proTitle" name="fullname" placeholder="Full name..." required>

                    <label for="" class="activityForm__labelName">Role :</label>
                    <input type="text" class="activityForm__proTitle" name="role" placeholder="Role..." required> 

                    <label for="" class="activityForm__labelName">Description :</label>
                    <textarea class="activityForm__description" name="descrip" placeholder="Description..." required></textarea>

                    <label for="" class="activityForm__labelName">Facebook :</label>
                    <input type="text" class="activityForm__proTitle" name="facebook" placeholder="Facebook..." required> 

                    <label for="" class="activityForm__labelName">Linkedin :</label>
                    <input type="text" class="activityForm__proTitle" name="linkedin" placeholder="linkedin..." required> 

                    <label for="" class="activityForm__labelName">Twitter :</label>
                    <input type="text" class="activityForm__proTitle" name="twitter" placeholder="twitter..." required> 

                    <input class="activityForm__sendBtn" type="submit" value="Add" name="push">
                </form>
            </div>
        </div>

        <!-- ------------------------------------------------** Team table **-------------------------------------------------- -->
        <div class="dataGalerie">
        <h2 class="titleSlide">Table de données</h2>
        <form class="form1" method="POST">
        <table id="galerieTable">
                <tr>
                    
                    <th>Id</th>
                    <th>superAdmin id</th>
                    <th>Image</th>
                    <th>Full name</th>
                    <th>Role</th>
                    <th>Description</th>
                    <th>Facebook</th>
                    <th>Linkedin</th>
                    <th>Twitter</th>
                    <th>Action</th>
                </tr>
        <?php 
       
            $sql = 'SELECT * FROM team';
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $don = $stmt->fetchAll(PDO::FETCH_OBJ);
            foreach($don as $info){
                
                    echo"<tr>
                    
                            <td>$info->team_id</td>
                            <td>$info->spa_id</td>
                            <td>$info->team_img</td>
                            <td>$info->team_fullname</td>
                            <td>$info->team_role</td>
                            <td>$info->team_desc</td>
                            <td>$info->team_facebook</td>
                            <td>$info->team_linkedin</td>
                            <td>$info->team_twitter</td>
                            
                            ";
                    ?>
                    <td>
                    <label class="labelBtns" >
                    <a class="btnFrm colorRed" href="./delete.php?id=<?= $info->team_id ?>" onclick="return confirm('Are you sure you want to delete this entry!')">DELETE</a>  
                    <a class="btnFrm colorBlue" href="./edit-team.php?id=<?= $info->team_id ?>">EDIT</a></label>
            
                    </td>
                </tr>
            
            <?php
            
        }
            ?>
        </table>
        </form>
        </div>
         <!-- ------------------------------------------------** Section partner **-------------------------------------------------- -->
         <div class="dataGalerie">
        <div class="sectionActivity">
        <h2 class="sectionActivity__titleTop">Ajouter les information de la section partner </h2>
            <p class="sectionActivity__titleTop"><?php if(isset($errmsg)) echo $errmsg; ?></p>

            <div class="formActivity formPartner">
                
                <form class="activityForm" action="" method="POST" enctype="multipart/form-data">
                <b class="formActivity__titleUpload">Upload logo</b>
                    <label class="activityForm__uploadFile">
                        
                            <input type="file" name="file">
                    </label>

                    <label for="" class="activityForm__labelName">Name :</label>
                    <input type="text" class="activityForm__proTitle" name="name" placeholder="Title..." required>          

                    <input class="activityForm__sendBtn" type="submit" value="Add" name="pushed">
                </form>
            </div>
        </div>
        <!-- ------------------------------------------------** activity table **-------------------------------------------------- -->
        <div class="dataGalerie">
        <h2 class="titleSlide">Table de données</h2>
        <form class="form1" method="POST">
        <table id="galerieTable">
                <tr>
                    
                    <th>Id</th>
                    <th>SuperAdmin id</th>
                    <th>Name</th>
                    <th>Logo path</th>
                    <th>Action</th>
                </tr>
        <?php 
       
       $sql = 'SELECT * FROM partner';
       $stmt = $db->prepare($sql);
       $stmt->execute();
       $don = $stmt->fetchAll(PDO::FETCH_OBJ);
       foreach($don as $info){
           
            echo"<tr>
               
                    <td>$info->part_id</td>
                    <td>$info->spa_id</td>
                    <td>$info->part_name</td>
                    <td>$info->part_logo</td>
                    ";
            ?>
                    <td>
                    <label class="labelBtns" >
                    <a class="btnFrm colorRed" href="./delete.php?id=<?= $info->part_id ?>" onclick="return confirm('Are you sure you want to delete this entry!')">DELETE</a>  
                    <a class="btnFrm colorBlue" href="./edit-partner.php?id=<?= $info->part_id ?>">EDIT</a></label>
            
                    </td>
                </tr>
            
            <?php
            
        }
            ?>
        </table>
        </form>
        </div>
       
    </section>
    <!-- ---------------------------------------------------** H O M E - P A G E **--------------------------------------------------------- -->
   
    <script src=".../js/jscript.js"></script>
    <script src=".../js/script.js"></script>
</body>

</html>