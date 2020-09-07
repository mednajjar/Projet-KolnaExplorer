 











<?php
                //   print_r($result->fetch_assoc());

        include 'action.php';

         $results = mysqli_query($db, "SELECT * FROM team");
         
                        //    print_r($results->fetch_assoc());

         
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
                             <?php if (isset($_SESSION['message'])): ?>
                                <div class="msg">
                                    <?php 
                                        echo $_SESSION['message']; 
                                        unset($_SESSION['message']);
                                    ?>
                                </div>
                            <?php endif ?>
                    <div class="row">
                        <div class="block">
                            <form method="POST" action="action.php" enctype="multipart/form-data" > 

                                <div class="form-group">
                                    <input type="file" name="team_img" value="<?php echo $team_img;?>" class="form-control team-control" placeholder="Télécharger" >
                                </div>                              
                                <div class="form-group">
                                    <input type="text" name="team_firstName" value="<?php echo $team_firstName;?>" class="form-control" placeholder="Entrer username"  >
                                </div>
                                <div class="form-group">
                                    <input type="text" name="team_role" value= "<?php echo $team_role;?>" class="form-control" placeholder="Enter role">
                                </div> 
                                <div class="form-group">
                                    <textarea name="team_resum" value="<?php echo $team_resum;?>"  class="form-control" placeholder="Enter descriprion" cols="30" rows="20"></textarea>
                                </div>

                                </div>
                                <div class="form-group">
                                    <input type="text" name="facebook_path" value="<?php echo $facebook_path;?>" class="form-control" placeholder="entre path facebook"        >
                                </div>  
                                <div class="form-group">
                                    <input type="text" name="linkdin_path" value= "<?php echo $linkdin_path;?>" class="form-control" placeholder="entrer path linkdin"     >
                                </div>
                                </div> <div class="form-group">
                                    <input type="text" name="twitter_path" value= "<?php echo $twitter_path;?>" class="form-control" placeholder="enter path twitter"        >
                                </div>
                                </div> <div class="form-group">
                                    <input type="text" name="instagram_path" value= "<?php echo $instagram_path; ?>" class="form-control" placeholder="enter path instagram"        >
                                </div> 
                                <div class="form-group">
                                <?php if ($update == true): ?>
                                <button class="btn-team" type="submit" name="update"  >update</button></div>
                                <?php else: ?>                               
                                <div class="form-group">
                                <button class="btn-team" type="submit" name="save">Save</button>
                                <?php endif ?>
                                </div>
                            </form>
                                


                              
                                 <table class="team_table">
                                    <tr>
                                        <th>id</th>
                                        <th>image</th>
                                        <th>firstName</th>
                                        <th>role</th>
                                        <th>resum</th>
                                        <th>facebook</th>
                                        <th>linkdin</th>
                                        <th>twitter</th>
                                        <th>instagram</th>
                                        <th>action</th>

                                   
                                    </tr>
                                <tr>
                                <?php 
                                 $results = mysqli_query($db, "SELECT * FROM team");
                                while ($row = mysqli_fetch_array($results)) { ?>

                                <tr>    <td><?php echo $row['id']; ?></td> 
                                        <td><?php echo $row['team_img']; ?></td> 
                                        <td><?php echo $row['team_firstName']; ?></td> 
                                        <td><?php echo $row['team_role']; ?></td> 
                                        <td><?php echo $row['team_resum']; ?></td> 
                                        <td><?php echo $row['facebook_path']; ?></td> 
                                        <td><?php echo $row['linkdin_path']; ?></td> 
                                        <td><?php echo $row['twitter_path']; ?></td> 
                                        <td><?php echo $row['instagram_path']; ?></td> 
                                        <td class="action-team">
                                            <a href="teampage.php?edit=<?php echo $row['id']; ?>" class="btn btn-edit">edit</a>
                                            <a href="teampage.php?dele=<?php echo $row['id']; ?>" class="btn btn-delete">delete</a>

                                        </td>
                                </tr>
                                	<?php } ?>
                                    
                                  
                                    </table>
                                 </div>   
                
                          
                          
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