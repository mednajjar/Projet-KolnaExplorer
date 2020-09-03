<?php
include '../../config.php';
$id=$_GET['id'];

$sql = 'SELECT * FROM activity WHERE act_id=:id';
$stmt = $db->prepare($sql);
$stmt->execute([':id' => $id]);
$info = $stmt->fetch(PDO::FETCH_OBJ);
$err = "";

if(isset($_POST['Modifier'])){
    if(isset($_POST['title']) OR isset($_POST['icone']) OR isset($_POST['descrip'])){
    $title = $_POST['title'];
    $icone = $_POST['icone'];
    $descrip = $_POST['descrip'];   
                
                $stmt = $db->prepare("UPDATE activity SET act_icone = :icone, act_title = :title, act_desc = :descrip  WHERE act_id=:id");
                $stmt -> execute(array(
                        'id'=>"$id",
                        'icone'=>"$icone",
                        'title'=>"$title",
                        'descrip'=>"$descrip"

                     
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
        <h2 class="sectionActivity__titleTop">Modifier les information sur la section activités </h2>
            <p class="sectionActivity__titleTop"><?php if(isset($err)) echo $err; ?></p>

            <div class="formActivity">
                
                <form class="activityForm" action="" method="POST">

                    <label for="" class="activityForm__labelName"> Icone path:</label>
                    <input type="text" class="activityForm__proTitle" name="icone" value="<?= $info->act_icone; ?>"> 

                    <label for="" class="activityForm__labelName"> Title :</label>
                    <input type="text" class="activityForm__proTitle" name="title" value="<?= $info->act_title; ?>" >         

                    <label for="" class="activityForm__labelName">Description :</label>
                    <textarea class="activityForm__description" name="descrip"><?= $info->act_desc; ?></textarea>

                    <input class="activityForm__sendBtn" type="submit" value="Update" name="Modifier" onclick="return confirm('Are you sure you want to update this entry?')">
                </form>
            </div>
            <div class="returnPage"><a href="./homepage.php">< Return to home page</a></div>
</div>
</body>
</html>