<?php
include '../../config.php';
$id=$_GET['id'];

$sql = 'SELECT * FROM partner WHERE part_id=:id';
$stmt = $db->prepare($sql);
$stmt->execute([':id' => $id]);
$info = $stmt->fetch(PDO::FETCH_OBJ);

if(isset($_POST['updateImg'])){

    
    if(isset($_POST['logo'])){
        $logo = $_POST['logo'];
                
                $stmt = $db->prepare("UPDATE partner SET part_logo = :logo WHERE part_id=:id");
                $stmt -> execute(array(
                        'id'=>"$id",
                        'logo'=>"$logo",
                     
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
                <b class="editActivityForm__titleImg">Update image from partner table</b>
                    <div class="editActivityForm__divImg">
                    
                    <label for="" class="editActivityForm__labelName"> Image path :</label>
                    <input type="text" class="editActivityForm__imgTitle" value="<?= $info->part_logo; ?>" name="logo">          
                    </div>
                    <input class="editActivityForm__upldBtn" type="submit" value="Update" name="updateImg" onclick="return confirm('Are you sure you want to update this entry?')">
                </form>
    </div>
            <div class="returnPage"><a href="./homepage.php">< Return to home page</a></div>
</body>
</html>