<?php

include "config.php";
// ----------------------------------------upload image in images table-----------------------------------------------


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
                $fileDestination = '../uploads/'.$fileName;
               if(move_uploaded_file($fileTmpName, $fileDestination)){
                    
                    $insert = $db->query("INSERT into images (spa_id, image) VALUES ('1', '".$fileName."')");
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
// ---------------------------------------------upload image in galerie table--------------------------------------------------

if(isset($_POST['upload'])){
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
                $fileDestination = '../uploads/'.$fileName;
               if(move_uploaded_file($fileTmpName, $fileDestination)){
                    
                    $insert = $db->query("INSERT into galerie (spa_id, gal_img) VALUES ('1','".$fileName."')");
                    // header("location: homepage.php?uploadsuccess");
                    $msg = "Your image ".$fileName." is loaded with successful";

               }else{
                    $msg = "Your file cannot uploaded to the server!";
               }
                
                
            }else{
                $msg = "Your file is bigger than 2MB!";
            }
        }else{
            $msg = "There was an error uploading your file!";
        }

    }else{
        $msg = "You cannot upload files of this type!";
    }
}
// -----------------------------------------upload info in activity table----------------------------------------------------


if(isset($_POST['Add'])){
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    
    $title = $_POST['title'];
    $description = $_POST['description'];
    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    

    $allowed = array('jpg', 'jpeg', 'png', 'gif');
    
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 2000000){
                $fileDestination = '../uploads/'.$fileName;
               if(move_uploaded_file($fileTmpName, $fileDestination)){
                    
                    $insert = $db->query("INSERT into activity (spa_id, act_icone, act_title, act_desc) VALUES ('1', '".$fileName."', '".$title."', '".$description."')");
                    // header("location: homepage.php?uploadsuccess");
                    $errmsg = "Your informations is loaded successfuly";

               }else{
                    $errmsg = "Your file cannot uploaded to the server!";
               }
                
                
            }else{
                $errmsg = "Your image is bigger than 2MB!";
            }
        }else{
            $errmsg = "There was an error uploading your image!";
        }

    }else{
        $errmsg = "Please upload image of type jpg, jpeg, png or gif!";
    }
}
// ---------------------------------------------------------------** Upload to destination table **--------------------------------------------------------------------------
if(isset($_POST['ajouter'])){
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];


    $title_H= $_POST['titleH'];   
    $title_D= $_POST['titleD'];   
    $info_title= $_POST['infoT'];
    $info_title= str_replace("'", "\'", $info_title);  
    $descrip= $_POST['descrip'];
    $descrip= str_replace("'", "\'", $descrip);     
    $info1= $_POST['info1'];   
    $info2= $_POST['info2'];   
    $info3= $_POST['info3'];
               
                       
    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    

    $allowed = array('jpg', 'jpeg', 'png', 'gif');
    
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 2000000){
                $fileDestination = '../uploads/'.$fileName;
               if(move_uploaded_file($fileTmpName, $fileDestination)){
                    
                    $insert = $db->query("INSERT into destination (spa_id, dest_title_home, dest_title_destination, dest_info_title, dest_desc, dest_img, dest_info1, dest_info2, dest_info3) VALUES ('1', '".$title_H."', '".$title_D."', '".$info_title."', '".$descrip."', '".$fileName."', '".$info1."', '".$info2."', '".$info3."')");
                    // header("location: homepage.php?uploadsuccess");
                    $alert = "Your informations is loaded successfuly";

               }else{
                    $alert = "Your file cannot uploaded to the server!";
               }
                
                
            }else{
                $alert = "Your image is bigger than 2MB!";
            }
        }else{
            $alert = "There was an error uploading your image!";
        }

    }else{
        $alert = "Please upload image of type jpg, jpeg, png or gif!";
    }
}
// --------------------------------------------------** upload to event table **------------------------------------------------------
if(isset($_POST['insert'])){
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

   
    $title= $_POST['title'];
    $descrip= $_POST['descrip'];  
    $descrip= str_replace("'", "\'", $descrip);    
    $location= $_POST['location'];   
    $date= $_POST['date'];            
                       
    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    

    $allowed = array('jpg', 'jpeg', 'png', 'gif');
    
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 2000000){
                $fileDestination = '../uploads/'.$fileName;
               if(move_uploaded_file($fileTmpName, $fileDestination)){
                    
                    $insert = $db->query("INSERT into events (spa_id, event_img, event_title, event_desc, event_location, event_date) VALUES ('1' , '".$fileName."', '".$title."', '".$descrip."', '".$location."', '".$date."')");
                    // header("location: homepage.php?uploadsuccess");
                    $alrtmsg = "Your informations is loaded successfuly";

               }else{
                    $alrtmsg = "Your file cannot uploaded to the server!";
               }
                
                
            }else{
                $alrtmsg = "Your image is bigger than 2MB!";
            }
        }else{
            $alrtmsg = "There was an error uploading your image!";
        }

    }else{
        $alrtmsg = "Please upload image of type jpg, jpeg, png or gif!";
    }
}
// --------------------------------------------------** upload to team table **------------------------------------------------------
if(isset($_POST['push'])){
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

   
    $fullName= $_POST['fullname'];
    $role= $_POST['role'];
    $descrip= $_POST['descrip'];  
    $descrip= str_replace("'", "\'", $descrip);    
    $facebook= $_POST['facebook'];            
    $linkedin= $_POST['linkedin'];            
    $twitter= $_POST['twitter'];            
                       
    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    

    $allowed = array('jpg', 'jpeg', 'png', 'gif');
    
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 2000000){
                $fileDestination = '../uploads/'.$fileName;
               if(move_uploaded_file($fileTmpName, $fileDestination)){
                    
                    $insert = $db->query("INSERT into team (spa_id, team_img, team_fullname, team_role, team_desc, team_facebook, team_linkedin, team_twitter) VALUES ('1', '".$fileName."', '".$fullName."', '".$role."', '".$descrip."', '".$facebook."', '".$linkedin."', '".$twitter."')");
                    // header("location: homepage.php?uploadsuccess");
                    $alertmsg = "Your informations is loaded successfuly";

               }else{
                    $alertmsg = "Your file cannot uploaded to the server!";
               }
                
                
            }else{
                $alertmsg = "Your image is bigger than 2MB!";
            }
        }else{
            $alertmsg = "There was an error uploading your image!";
        }

    }else{
        $alertmsg = "Please upload image of type jpg, jpeg, png or gif!";
    }
}
// -----------------------------------------upload info in partner table----------------------------------------------------


if(isset($_POST['pushed'])){
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    
    $name = $_POST['name'];
    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    

    $allowed = array('jpg', 'jpeg', 'png', 'gif');
    
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 2000000){
                $fileDestination = '../uploads/'.$fileName;
               if(move_uploaded_file($fileTmpName, $fileDestination)){
                    
                    $insert = $db->query("INSERT into partner (spa_id, part_logo, part_name) VALUES ('1', '".$fileName."', '".$name."')");
                    // header("location: homepage.php?uploadsuccess");
                    $errmsg = "Your informations is loaded successfuly";

               }else{
                    $errmsg = "Your file cannot uploaded to the server!";
               }
                
                
            }else{
                $errmsg = "Your image is bigger than 2MB!";
            }
        }else{
            $errmsg = "There was an error uploading your image!";
        }

    }else{
        $errmsg = "Please upload image of type jpg, jpeg, png or gif!";
    }
}

