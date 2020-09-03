<?php
include '../../config.php';
$id=$_GET['id'];

$sql = 'SELECT * FROM destination WHERE dest_id=:id';
$stmt = $db->prepare($sql);
$stmt->execute([':id' => $id]);
$info = $stmt->fetch(PDO::FETCH_OBJ);
$err = "";

if(isset($_POST['change'])){
    if(isset($_POST['titleH']) OR isset($_POST['titleD']) OR isset($_POST['infoT']) OR isset($_POST['descrip']) OR isset($_POST['info1']) OR isset($_POST['info2']) OR isset($_POST['info3']) OR isset($_POST['image'])){
        $image= $_POST['image'];
        $title_H= $_POST['titleH'];   
        $title_D= $_POST['titleD'];   
        $info_title= $_POST['infoT'];
        $info_title= str_replace("'", "\'", $info_title);  
        $descrip= $_POST['descrip'];
        $descrip= str_replace("'", "\'", $descrip);     
        $info1= $_POST['info1'];   
        $info2= $_POST['info2'];   
        $info3= $_POST['info3'];
        
                
                $stmt = $db->prepare("UPDATE destination SET dest_title_home = :titleH, dest_info1 = :info1, dest_info2 = :info2, dest_info3= :info3, dest_title_destination = :titleD, dest_info_title = :infoT, dest_desc= :descrip, dest_img= :image  WHERE dest_id=:id");
                $stmt -> execute(array(
                        'id'=>"$id",
                        'titleH'=>"$title_H",
                        'info1'=>"$info1",
                        'info2'=>"$info2",
                        'info3'=>"$info3",
                        'titleD'=>"$title_D",
                        'infoT'=>"$info_title",
                        'descrip'=>"$descrip",
                        'image'=>"$image",

                     
                ));
                   
                    $err = "Your image path is updated successfuly";
                    header("location: ./homepage.php");

     }else{
        $err = "please try again!";
    
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
        <h2 class="sectionActivity__titleTop">Modifier les information de la section destination </h2>

            <div class="formActivity formDestination formDestination2">
                
                <form class="activityForm" action="" method="POST" enctype="multipart/form-data">                

                    <label for="" class="activityForm__labelName"> Image path :</label>
                    <input type="text" class="activityForm__proTitle" name="image" value="<?= $info->dest_img; ?>">

                    <label for="" class="activityForm__labelName"> Title home :</label>
                    <input type="text" class="activityForm__proTitle" name="titleH" value="<?= $info->dest_title_home; ?>">

                    <label for="" class="activityForm__labelName"> Info 1 :</label>
                    <input type="text" class="activityForm__proTitle" name="info1" value="<?= $info->dest_info1; ?>">
                    
                    <label for="" class="activityForm__labelName"> Info 2 :</label>
                    <input type="text" class="activityForm__proTitle" name="info2" value="<?= $info->dest_info2; ?>">

                    <label for="" class="activityForm__labelName"> Info 3 :</label>
                    <input type="text" class="activityForm__proTitle" name="info3" value="<?= $info->dest_info3; ?>">
                    
                    <label for="" class="activityForm__labelName"> Title destination :</label>
                    <input type="text" class="activityForm__proTitle" name="titleD" value="<?= $info->dest_title_destination; ?>"> 

                    <label for="" class="activityForm__labelName">Title info :</label>
                    <textarea class="activityForm__description" name="infoT" ><?= $info->dest_info_title; ?></textarea>

                    <label for="" class="activityForm__labelName">Description :</label>
                    <textarea class="activityForm__description" name="descrip" ><?= $info->dest_desc; ?></textarea>

                    <input class="activityForm__sendBtn" type="submit" value="Update" name="change">
                </form>
            </div>
            <div class="returnPage"><a href="./homepage.php">< Return to home page</a></div>
        </div>
        
</body>
</html>