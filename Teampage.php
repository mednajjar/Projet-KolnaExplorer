 






<?php


// Create database connection
// include 'config.php'

$db = mysqli_connect("localhost", "root", "", "Kolnaexplorer");

// include 'config.php'




// Initialize message variable

$msg = "";




// If upload button is clicked ...


if (isset($_POST['add'])) {





            $team_img = $_FILES['team_img']['name'];
            $target = "images/".basename($team_img);


            $teamusername = $_POST['teamusername'];



            $teamrole = $_POST['teamrole'];


            $teamresum = $_POST['teamresum'];

            $facebookpath  =  $_POST['facebookpath'];

            $linkdinpath =  $_POST['linkdinpath'];

            $twitterpath =  $_POST['twitterpath'];

    // $facebook_path  = mysqli_real_escape_string($db, $_POST['facebook_path']);

    // $linkdin_path = mysqli_real_escape_string($db, $_POST['linkdin_path']);

    // $twitter_path = mysqli_real_escape_string($db, $_POST['twitter_path']);


    



    $target = "images/".basename($team_img);

   

     $sql="INSERT INTO team(team_img, teamusername, teamrole,teamresum,facebookpath,linkdinpath,twitterpath)VALUE('$team_img','$teamusername','$teamrole','$teamresum','$facebookpath','$linkdinpath','$twitterpath') ";


    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['team_img']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
}






$result = mysqli_query($db, "SELECT * FROM team");







?>
    



































        




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

     

     
    <link rel="stylesheet" href="css/Teampage.css">
</head>
<body>
    
<header>
		<div class="logo">team<span>page</span></div>
	</header>
	<div class="nav-btn">Menu</div>
	<div class="container">
		
		<div class="sidebar">
			<nav>
				<a href="#">Team<span>page</span></a>
				<ul>
					<li class="active"><a href="#">Dashboard</a></li>
					<li><a href="#">Followers</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Social</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
		</div>

    

		<div class="main-content">
	
			
      <div class="">
				<div class="">
				
				</div>
				<div class=" container-fluid ">
                    <div class=" row  justify-content-center "></div>
                    <div class="col-md-10">
                        <h3 class="text-center text-dark"> bienvenue page team</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <h3 class="text-center text-inf">Add Record</h3>
                            <form method="POST" action=" teampage.php" enctype="multipart/form-data"> 

                                <div class="form-group">
                                        <input type="file" name="team_img" class="form-control" >
                                    </div>                              

                                <div class="form-group">
                                    <input type="text" name="teamusername" class="form-control" placeholder="firstname"      >
                                </div>
                                <div class="form-group">
                                    <input type="text" name="teamrole" class="form-control" placeholder="Enter role"         >
                                </div> 
                                <div class="form-group">
                                    <input type="text" name=" teamresum" class="form-control" placeholder="Enter resumer"        >

                                </div>

                                <div class="form-group">
                                    <input type="text" name=" facebookpath  " class="form-control" placeholder="entre path facebook"        >
                                </div>  
                                <div class="form-group">
                                    <input type="text" name=" linkdinpath  " class="form-control" placeholder="entrer path linkdin"     >
                                </div>
                                </div> <div class="form-group">
                                    <input type="text" name="  twitterpath " class="form-control" placeholder="enter path twitter"        >
                                </div>
                                
                                
                                <div class="form-group">
                                <input type="submit" name=" add" class="form-control1 "     >
                            </div>
                            </div>
                          
                            </form>
                        </div>
                       

                    </div>
                    
				</div>
			</div>
		</div>
	</div>









</body>
</html>