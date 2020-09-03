<?php
include '../../config.php';
$id=$_GET['id'];

$sql = 'SELECT * FROM team WHERE team_id=:id';
$stmt = $db->prepare($sql);
$stmt->execute([':id' => $id]);
$info = $stmt->fetch(PDO::FETCH_OBJ);


if(isset($_POST['push'])){
    if(isset($_POST['image']) OR isset($_POST['fullname']) OR isset($_POST['role']) OR isset($_POST['descrip']) OR isset($_POST['facebook']) OR isset($_POST['linkedin']) OR isset($_POST['twitter'])){
    $image= $_POST['image'];
    $fullName = $_POST['fullname'];
    $role = $_POST['role'];
    $descrip = $_POST['descrip'];
    $descrip = str_replace("'", "\'", $descrip);  
    $facebook = $_POST['facebook'];
    $linkedin = $_POST['linkedin']; 
    $twitter = $_POST['twitter']; 
                
                $stmt = $db->prepare("UPDATE team SET team_img = :image, team_fullname = :fullname, team_role = :role, team_desc = :descrip, team_facebook= :facebook, team_linkedin = :linkedin, team_twitter= :twitter  WHERE team_id=:id");
                $stmt -> execute(array(
                        'id'=>"$id",
                        'image'=>"$image",
                        'fullname'=>"$fullName",
                        'role'=>"$role",
                        'descrip'=>"$descrip",
                        'facebook'=>"$facebook",
                        'linkedin'=>"$linkedin",
                        'twitter'=>"$twitter"

                     
                ));
                   
                    echo"<script>alert('Your informations is updated successfuly')</script>";
                    header("location: ./homepage.php");

     }else{
        echo"<script>alert('there is an error please try again!)</script>";
    
    }

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
<div class="sectionActivity">
        <h2 class="sectionActivity__titleTop">Modifier les information de la section Team </h2>
            <p class="sectionActivity__titleTop"><?php if(isset($alertmsg)) echo $alertmsg; ?></p>

            <div class="formActivity FormTeam FormTeam2">
                
                <form class="activityForm" action="" method="POST" enctype="multipart/form-data">
                    <label for="" class="activityForm__labelName">Image path :</label>
                    <input type="text" class="activityForm__proTitle" name="image" value="<?= $info->team_img; ?>">

                    <label for="" class="activityForm__labelName">Full name :</label>
                    <input type="text" class="activityForm__proTitle" name="fullname" value="<?= $info->team_fullname; ?>">

                    <label for="" class="activityForm__labelName">Role :</label>
                    <input type="text" class="activityForm__proTitle" name="role" value="<?= $info->team_role; ?>"> 

                    <label for="" class="activityForm__labelName">Description :</label>
                    <textarea class="activityForm__description" name="descrip"><?= $info->team_desc; ?></textarea>

                    <label for="" class="activityForm__labelName">Facebook :</label>
                    <input type="text" class="activityForm__proTitle" name="facebook" value="<?= $info->team_facebook; ?>"> 

                    <label for="" class="activityForm__labelName">Linkedin :</label>
                    <input type="text" class="activityForm__proTitle" name="linkedin" value="<?= $info->team_linkedin; ?>"> 

                    <label for="" class="activityForm__labelName">Twitter :</label>
                    <input type="text" class="activityForm__proTitle" name="twitter" value="<?= $info->team_twitter; ?>"> 

                    <input class="activityForm__sendBtn" type="submit" value="Update" name="push">
                </form>
            </div>
            <div class="returnPage"><a href="./homepage.php">< Return to home page</a></div>
        </div>
</body>
</html>