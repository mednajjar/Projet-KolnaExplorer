




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

    // $sql = "INSERT INTO team (team_img,team_firstName,team_role,team_resum,facebook_path,linkdin_path,twitter_path,instagram_path) VALUES ('".$team_img."','".$team_firstName."','".$team_role."','".$team_resum."','".$facebook_path."','".$linkdin_path."','".$twitter_path."','".$instagram_path."')";
    mysqli_query($db,"INSERT INTO team (team_img,team_firstName,team_role,team_resum,facebook_path,linkdin_path,twitter_path,instagram_path) VALUES ('".$team_img."','".$team_firstName."','".$team_role."','".$team_resum."','".$facebook_path."','".$linkdin_path."','".$twitter_path."','".$instagram_path."')");



      if (move_uploaded_file($_FILES['team_img']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
      }else{
        $msg = "Failed to upload image";
      }
  }






  
  if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM team WHERE id=$id");

		if (count($record) == 1) {
      // $n = mysqli_fetch_array($record);
      $row=$record->fetch_array();

      $team_img = $row['team_img']; 
      $team_firstName = $row['team_firstName'];

      $team_role = $row['team_role'];

      $team_resum = $row['team_resum'];

      $facebook_path=$row['facebook_path'];
      $linkdin_path =$row['linkdin_path'];
      $twitter_path = $row['twitter_path'];
      $instagram_path =$row['instagram_path'];
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
    
  
    mysqli_query($db, "UPDATE team SET  team_img='$team_img', team_firstName='$team_firstName', team_role='$team_role',team_resum='$team_resum', facebook_path='$facebook_path' ,linkdin_path='$linkdin_path',twitter_path='$twitter_path',instagram_path='$instagram_path',  WHERE id=$id");
    $_SESSION['message'] = "Address updated!"; 
    header('location: teampage.php');
  }



  // $result = mysqli_query($db, "SELECT * FROM team");


  // print_r($result->fetch_assoc());
// Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta eligendi ipsam eveniet aliquam assumenda ut accusamus quaerat neque adipisci eaque explicabo repudiandae repellat reprehenderit et accusantium architecto, natus optio. Ratione.


  // if (isset($_GET['delete'])) {
  //   $id=$_GET['delete'];
  //   $sql1=("DELETE FROM team where id=$id");
  //    $_SESSION['message']="reccord has benn delete";
  //   $_SESSION['msg_type']="danger";
  //   header("location:teampage.php");


  // }



  // $team_img = "";
  // $team_firstName = "";
  // $team_role = "";
  // $team_resum = "";
  // $facebook_path="";
  // $linkdin_path ="";
  // $twitter_path ="";
  // $instagram_path ="";


  // if (isset($_GET['edit'])) {
  //   $id=$_GET['edit'];
  //   // $result=("SELECT FROM team where id=$id");

  // // $result=("SELECT FROM team where id=$id");

  // $sql2 =("SELECT * FROM team wherre id=$id");
  // $result=$sql2=("SELECT * FROM team wherre id=$id");




  //   $_SESSION['message']="reccord has benn delete";
  //   $_SESSION['msg_type']="danger";
  //   header("location:teampage.php");
  //   if (count($result)==1) {
  //     $row==$result->fetch_array();

  //     $team_img = $row['team_img'];
  //     $team_firstName = $row['team_firstName'];
  //     $team_role = $row['team_role'];
  //     $team_resum = $row['team_resum'];
  //     $facebook_path=$row['facebook_path'];
  //     $linkdin_path =$row['linkdin_path'];
  //     $twitter_path = $row['twitter_path'];
  //     $instagram_path =$row['instagram_path'];

  //   }


  // }



  // if (isset($_GET['edit'])) {
	// 	$id = $_GET['edit'];
	// 	// $update = true;
  //   $record ="SELECT * FROM team WHERE id=$id";


	// 	if (count($result) == 1 ) {
  //     $row = mysqli_fetch_array($record);
  //     $team_img = $row['team_img'];
  //     $team_firstName = $row['team_firstName'];
  //     $team_role = $row['team_role'];
  //     $team_resum = $row['team_resum'];
  //     $facebook_path=$row['facebook_path'];
  //     $linkdin_path =$row['linkdin_path'];
  //     $twitter_path = $row['twitter_path'];
  //     $instagram_path =$row['instagram_path'];
			
	// }





?>
    
    

           
        

                

