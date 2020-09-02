<?php
include '../../config.php';
$id=$_GET['id'];

$sql = 'SELECT * FROM galerie WHERE gal_id=:id';
$stmt = $db->prepare($sql);
$stmt->execute([':id' => $id]);
$info = $stmt->fetch(PDO::FETCH_OBJ);
$err = "";
if(isset($_POST['modifier'])){

    
    if(isset($_POST['image'])){
        $image = $_POST['image'];
                
                $stmt = $db->prepare("UPDATE galerie SET gal_img = :image WHERE gal_id=:id");
                $stmt -> execute(array(
                        'id'=>"$id",
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
    <div class="formActivityBorder formActivityBorder2">
                
                <form class="editActivityForm" action="" method="POST">
                <b class="editActivityForm__titleImg">Update image from galerie table</b>
                    <div class="editActivityForm__divImg">
                    
                    <label for="" class="editActivityForm__labelName"> Image path :</label>
                    <input type="text" class="editActivityForm__imgTitle" value="<?= $info->gal_img; ?>" name="image">          
                    </div>
                    <input class="editActivityForm__upldBtn" type="submit" value="Update" name="modifier" onclick="return confirm('Are you sure you want to update this entry?')">
                </form>
    </div>
            <div class="returnPage"><a href="./homepage.php">< Return to home page</a></div>
</body>
</html>