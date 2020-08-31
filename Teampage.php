 









<?php


include 'action.php';







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
                        <div class="block">
                            <h3 class="text-center text-inf">Add Record</h3>
                            <form method="POST" action="Teampage.php" enctype="multipart/form-data"> 

                                <div class="form-group">
                                    <input type="file" name="team_img" class="form-control" >
                                </div>                              
                                <div class="form-group">
                                    <input type="text" name="team_firstName" class="form-control" placeholder="Entrer username"  >
                                </div>
                                <div class="form-group">
                                    <input type="text" name="team_role" class="form-control" placeholder="Enter role"         >
                                </div> 
                                <div class="form-group">
                                    <input type="text" name="team_resum" class="form-control" placeholder="Enter resumer"        >
                                </div>

                                </div>
                                <div class="form-group">
                                    <input type="text" name="facebook_path" class="form-control" placeholder="entre path facebook"        >
                                </div>  
                                <div class="form-group">
                                    <input type="text" name="linkdin_path" class="form-control" placeholder="entrer path linkdin"     >
                                </div>
                                </div> <div class="form-group">
                                    <input type="text" name="twitter_path" class="form-control" placeholder="enter path twitter"        >
                                </div>
                                </div> <div class="form-group">
                                    <input type="text" name="instagram_path" class="form-control" placeholder="enter path twitter"        >
                                </div>                                
                                <div class="form-group">
                                <input type="submit" name="add" class="form-control1">
                                </div>
                
                          
                            </form>
                        </div>

                            
                        
                       

                    </div>
                    <div>
                       

                    </div>
                    
				</div>
			</div>
		</div>
	</div>









</body>
</html>