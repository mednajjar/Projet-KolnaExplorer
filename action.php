




<?php





         // Create database connection
  $db = mysqli_connect("localhost", "root", "", "Kolnaexplorer");
  // include "config.php";

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['add'])) {
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



  	// image file directory
  	$target = "images/".basename($team_img);

  	$sql = "INSERT INTO team (team_img,team_firstName,team_role,team_resum,facebook_path,linkdin_path,twitter_path,instagram_path) VALUES ('".$team_img."','".$team_firstName."','".$team_role."','".$team_resum."','".$facebook_path."','".$linkdin_path."','".$twitter_path."','".$instagram_path."')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['team_img']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }



  $result = mysqli_query($db, "SELECT * FROM team");


  // print_r($result->fetch_assoc());









?>
    
    

           
        

                

