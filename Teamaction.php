

<!-- 
// include 'config.php'

// if(isset($_POST['add'])) {
//     $team_firstName=$_POST['team_firstName'];
//     $team_role=$_POST['team_role'];
//     $team_resum=$_POST['team_resum'];
//     $team_img=$_POST['team_img'];
//     $facebook_path=$_POST[' facebook_path']['name'];
//     $linkdin_path=$_POST['  linkdin_path']['name']  ;
//     $twitter_patth =$_POST[' twitter_patth  ']['name'];

//     $upload="uploads/".$team_img;
//     $upload="uploads/".$facebook_path;
//     $upload="uploads/".$linkdin_path;
//     $upload="uploads/".$twitter_patth;


    // $query="INSERT INTO team( team_img,team_firstNam,team_role,team_resum,facebook_path	,linkdin_path,twitter_patth   )values (?,?,?,?,?)  ";
//     $query="INSERT INTO team( team_img,team_firstNam,team_role,team_resum,facebook_path	,linkdin_path,twitter_patth   )values (:team_img,:team_firstNam,:team_role,team_resum,:facebook_path,:linkdin_path,:twitter_path )  ";

//     $stmt=$conn->prepare($query);
//     $stmt->bind_param("ssss",$team_img,$team_firstName,$team_role,$team_resum,$facebook_path,$linkdin_path,$twitter_patth);
//     $stmt->execute();


// } -->

<?php





// $msg=" ";
// $css_class=" ";

    
    
    // if(isset($_POST['add'])){      

    //     // echo "<pre>",print_r( $_FILES['team_img']['name'] ),"<pre>";   
    //     echo "<pre>" , print_r( $_POST)  ,  "</pre>";   

    //     die();   
    // }



        //test values on input


        // $team_firstName =valid_data ($_POST['team_firstName']);
        // $team_role= valid_data($_POST[' team_role']);
        // $team_resum=valid_data($_POST['team_resum']);
        // $team_img= $_FILES['team_img']['name'];
        // $facebook_path= $_POST['facebook_path'];
        // $linkdin_path= $_POST['linkdin_path'];
        // $twitter_path= $_POST['twitter_path'];

        // $upload=time().'_'."uploads/".$team_img;
  


         //insert values in  db
        // $sth = $db->prepare("
        // INSERT INTO team(team_img, team_firstName, team_role,team_resum,facebook_path,linkdin_path,	twitter_patth )
        // VALUES(:team_img, :	team_firstName	, :team_role,:	team_resum,:facebook_path,:	linkdin_path:,:	twitter_patth)");


        // $sth->bindParam(':team_firstName',$team_firstName);
        // $sth->bindParam(':team_role',$team_role);
        // $sth->bindParam(':team_resum',$team_resum);

        // $sth->bindParam(':team_img',$team_img);
        // $sth->bindParam(':twitter_path',$twitter_path);
        // $sth->bindParam(':facebook_path',$facebook_path);
        // $sth->bindParam(':linkdin_path',$linkdin_path);
        // $sth->execute();


        // move_uploaded_file($_FILES['team_img']['tmp_name'],$upload);
      

                // move_uploaded_file($_FILES['team_img']['tmp_name'],$upload1);



        // if (move_uploaded_file($_FILES['team_img']['tmp_name'],$upload))
        //  {
        //     $sql="INSERT INTO team(team_img, team_firstName, team_role,team_resum,facebook_path,linkdin_path,	twitter_patth )VALUE('$team_img','$team_firstName','$team_role','$team_resum','$facebook_path','$linkdin_path','$twitter_path') ";
        //     if (mysqli_query($sql,$db)) {
                
        //         $msg="image uploadded";
        //         $css_class="alert-success";
        //     }
        //     else {
        //         $msg="Database erreur:Failed to upload to upload";
        //         $css_class="alert-danger";
        
        //     }  
            
        // }
        





        // $msg = "";




        // // php code to Insert data into mysql database from input text



        
        // if(isset($_POST['add']))
        // {
        //     $hostname = "localhost";
        //     $username = "root";
        //     $password = "";
        //     $databaseName = "kolnaexplorer";
                
        //     // get values form input image
        
        //     $ team_img = $_FILES['team_img']['name'];


        //     $target = "images/".basename($team_img);
        
        
        
            
        //     // get values form input text and number
        
        
        //     $teamusername = $_POST['teamusername']; 
        //     $teamrole = $_POST['teamrole'];
        //     $teamresum = $_POST['teamresum'];


        //     $facebook = $_POST['facebook'];
        //     $linkdin = $_POST['linkdin'];
        //     $twitter = $_POST['twitter'];
        //     $instagram=$_POST['instagram'];
        
        
            
        //     // connect to mysql database using mysqli
        
        //     $connect = mysqli_connect($hostname, $username, $password, $databaseName);
            
        //     // mysql query to insert data
        
        //     $query = "INSERT INTO team(`team_img`, `teamusername`, `teamrole`, `teamresum`,`facebook`,`linkdin`,`twitter`,` instagram`) VALUES ('$team_img','$teamusername','$teamrole','$teamresum','$facebook','$linkdin','$twitter','$instagram')";
            
        //     // $result = mysqli_query($connect,$query);
        
        //         $res=mysqli_query($connect,$query);
        
        
        //         if($res)

        //         {
        //             echo 'Data Inserted';
        //         }
                
        //         else{
        //             echo 'Data Not Inserted';
        //         }
        
        
        
        //     $target = "images/".basename($team_img);
        
        
        
        //     if (move_uploaded_file($_FILES['team_img']['tmp_name'], $target)) {
        //         $msg = "Image uploaded successfully";
                
        //     }else{
        //         $msg = "Failed to upload image";
        //     }
            
        // }
        
        // $result = mysqli_query($connect, "SELECT * FROM team");






         // Create database connection
  $db = mysqli_connect("localhost", "root", "", "Kolnaexplorer");

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









?>
    
    

           
        

                

