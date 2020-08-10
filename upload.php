<?php

include "config.php";
$error = "";
if(isset($_POST['submit'])){
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    

    $allowed = array('jpg', 'jpeg', 'png', 'gif');
    
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 2000000){
                $fileDestination = 'uploads/'.$fileName;
               if(move_uploaded_file($fileTmpName, $fileDestination)){
                    
                    $insert = $db->query("INSERT into images (image) VALUES ('".$fileName."')");
                    // header("location: homepage.php?uploadsuccess");
                    $error = "Your image ".$fileName." is loaded with successful";

               }else{
                    $error = "Your file cannot uploaded to the server!";
               }
                
                
            }else{
                $error = "Your file is bigger than 2MB!";
            }
        }else{
            $error = "There was an error uploading your file!";
        }

    }else{
        $error = "You cannot upload files of this type!";
    }
}
