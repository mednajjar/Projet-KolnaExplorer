




<?php


session_start();


         // Create database connection
         $db = mysqli_connect('localhost', 'root', '', 'Kolnaexplorer');

  // include "config.php";

  // Initialize message variable
  $msg = "";

  $team_img = "";
  $team_firstName = "";
  $team_role = "";
  $team_resum = "";
  $facebook_path="";
  $linkdin_path ="";
  $twitter_path ="";
  $instagram_path ="";
  $id = 0;
	$update = false;


  // If upload button is clicked ...

  if (isset($_POST['save'])) {

    // Get image name
    
    $team_img = $_FILES['team_img']['name'];
    
      // Get text


      $team_firstName = $_POST['team_firstName'];
      $team_role = $_POST['team_role'];
      $team_resum = $_POST['team_resum'];
      $facebook_path=$_POST['facebook_path'];
      $linkdin_path =$_POST['linkdin_path'];
      $twitter_path = $_POST['twitter_path'];
      $instagram_path =$_POST['instagram_path'];

      $_SESSION['message'] = "Address saved"; 
      header("location:teampage.php");


    // image file directory
    
  	$target = "images/".basename($team_img);

    mysqli_query($db,"INSERT INTO team (team_img,team_firstName,team_role,team_resum,facebook_path,linkdin_path,twitter_path,instagram_path) VALUES ('".$team_img."','".$team_firstName."','".$team_role."','".$team_resum."','".$facebook_path."','".$linkdin_path."','".$twitter_path."','".$instagram_path."')");



      if (move_uploaded_file($_FILES['team_img']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
        echo $msg;

      }else{
        $msg = "Failed to upload image";
        echo $msg;

      }
      
  }




  
  if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM team WHERE id=$id");

          if (count($record) == 1) {
            // $n = mysqli_fetch_array($record);
            $n=$record->fetch_array();
            $team_img = $n['team_img']; 
            $team_firstName = $n['team_firstName'];

            $team_role = $n['team_role'];

            $team_resum = $n['team_resum'];

            $facebook_path=$n['facebook_path'];
            $linkdin_path =$n['linkdin_path'];
            $twitter_path = $n['twitter_path'];
            $instagram_path =$n['instagram_path'];
            header("location:teampage.php");


            
          }
  }
  


  if (isset($_GET['dele'])) {
    $id = $_GET['dele'];
    mysqli_query($db, "DELETE FROM team WHERE id=$id");
    $_SESSION['message'] = "Address deleted!"; 
    header('location:teampage.php');
  }



  if (isset($_POST['update'])) {
    $id = $_POST['id'];
      // Get text 

      $team_img = $_FILES['team_img']['name'];
      $team_firstName = $_POST['team_firstName'];
      $team_role = $_POST['team_role'];
      $team_resum = $_POST['team_resum'];

      $facebook_path=$_POST['facebook_path'];
      $linkdin_path =$_POST['linkdin_path'];
      $twitter_path = $_POST['twitter_path'];
      $instagram_path =$_POST['instagram_path']; 
  
    mysqli_query($db, "UPDATE team  SET team_img='$team_img', team_firstName='$team_firstName', team_role='$team_role',team_resum='$team_resum', facebook_path='$facebook_path' ,linkdin_path='$linkdin_path',twitter_path='$twitter_path',instagram_path='$instagram_path',  WHERE id=$id");
    $_SESSION['message'] = "Address updated!"; 
    header('location: teampage.php');
  }



  // $result = mysqli_query($db, "SELECT * FROM team");


  // print_r($result->fetch_assoc());
// Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta eligendi ipsam eveniet aliquam assumenda ut accusamus quaerat neque adipisci eaque explicabo repudiandae repellat reprehenderit et accusantium architecto, natus optio. Ratione.


  








?>
    
    

           
        

                

