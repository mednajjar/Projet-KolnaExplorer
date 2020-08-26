 









<?php


// Initialize message variable


// $msg = "";




// // php code to Insert data into mysql database from input text
// if(isset($_POST['add']))
// {
//     $hostname = "localhost";
//     $username = "root";
//     $password = "";
//     $databaseName = "kolnaexplorer";
        
//     // get values form input image

//     $team_img = $_FILES['team_img']['name'];
//     $target = "images/".basename($team_img);



    
//     // get values form input text and number


//     $teamusername = $_POST['teamusername'];
//     $teamrole = $_POST['teamrole'];
//     $teamresum = $_POST['teamresum'];
//     $facebook_path = $_POST['facebook_path'];
//     $linkdin_path = $_POST['linkdin_path'];
//     $twitter_path = $_POST['twitter_path'];


    
//     // connect to mysql database using mysqli

//     $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
//     // mysql query to insert data

//     $query = "INSERT INTO `team`(`team_img`, `teamusername`, `teamrole`, `teamresum`, `facebook_path`, `linkdin_path`, `twitter_path`) VALUES ('$team_img','$teamusername','$teamrole','$teamresum','$facebook_path','$linkdin_path','$twitter_path')";
    
//     $result = mysqli_query($connect,$query);

//         // $res=mysqli_query($connect,$query);


//         // if($res)
//         // {
//         //     echo 'Data Inserted';
//         // }
        
//         // else{
//         //     echo 'Data Not Inserted';
//         // }



//     $target = "images/".basename($team_img);



//     if (move_uploaded_file($_FILES['team_img']['tmp_name'], $target)) {
//         $msg = "Image uploaded successfully";
        
//     }else{
//         $msg = "Failed to upload image";
//     }
    
// }

// $result = mysqli_query($connect, "SELECT * FROM team");


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
                            <form method="POST" action="Teamaction.php" enctype="multipart/form-data"> 

                                <div class="form-group">
                                        <input type="file" name="team_img" class="form-control" >
                                    </div>                              

                                <div class="form-group">
                                    <input type="text" name=" teamusername " class="form-control" placeholder="firstname"      >
                                </div>
                                <div class="form-group">
                                    <input type="text" name=" teamrole" class="form-control" placeholder="Enter role"         >
                                </div> 
                                <div class="form-group">
                                    <input type="text" name=" teamresum" class="form-control" placeholder="Enter resumer"        >

                                </div>

                                <div class="form-group">
                                    <input type="text" name=" facebook  " class="form-control" placeholder="entre path facebook"        >
                                </div>  
                                <div class="form-group">
                                    <input type="text" name=" linkdin " class="form-control" placeholder="entrer path linkdin"     >
                                </div>
                                </div> <div class="form-group">
                                    <input type="text" name="  twitter " class="form-control" placeholder="enter path twitter"        >
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