<?php
include '../../config.php';
$id=$_GET['id'];

$sql = 'SELECT * FROM events WHERE event_id=:id';
$stmt = $db->prepare($sql);
$stmt->execute([':id' => $id]);
$info = $stmt->fetch(PDO::FETCH_OBJ);


if(isset($_POST['updt'])){
    if(isset($_POST['img']) OR isset($_POST['title']) OR isset($_POST['descrip']) OR isset($_POST['location']) OR isset($_POST['date'])){
    $img= $_POST['img'];
    $title = $_POST['title'];
    $descrip = $_POST['descrip'];
    $descrip = str_replace("'", "\'", $descrip);  
    $location = $_POST['location'];
    $date = $_POST['date']; 
                
                $stmt = $db->prepare("UPDATE events SET event_img = :img, event_title = :title, event_desc = :descrip, event_location = :location, event_date= :date  WHERE event_id=:id");
                $stmt -> execute(array(
                        'id'=>"$id",
                        'img'=>"$img",
                        'title'=>"$title",
                        'descrip'=>"$descrip",
                        'location'=>"$location",
                        'date'=>"$date"

                     
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
        <h2 class="sectionActivity__titleTop">Mdifier les information de la section events </h2>

            <div class="formActivity FormEvents FormEvents2">
                
                <form class="activityForm" action="" method="POST" enctype="multipart/form-data">

                    <label for="" class="activityForm__labelName">Image path :</label>
                    <input type="text" class="activityForm__proTitle" name="img" value="<?= $info->event_img ?>">

                    <label for="" class="activityForm__labelName">Event title :</label>
                    <input type="text" class="activityForm__proTitle" name="title" value="<?= $info->event_title ?>">

                    <label for="" class="activityForm__labelName">Event description :</label>
                    <textarea class="activityForm__description" name="descrip"><?= $info->event_desc ?></textarea>

                    <label for="" class="activityForm__labelName"> Event location :</label>
                    <input type="text" class="activityForm__proTitle" name="location" value="<?= $info->event_location ?>"> 

                    <label for="" class="activityForm__labelName"> Event Date :</label>
                    <input type="text" class="activityForm__proTitle" name="date" value="<?= $info->event_date ?>"> 

                    <input class="activityForm__sendBtn" type="submit" value="Update" name="updt">
                </form>
            </div>
            <div class="returnPage"><a href="./homepage.php">< Return to home page</a></div>
        </div>
</body>
</html>