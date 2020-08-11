


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


// }


<?php

$id=" ";
   $team_firstName="";
   $team_img="";
   $team_resum="";
   $team_role="";
   $facebook_path="";
   $linkdin_path="";
   $twitter_path="";
include 'config.php';
    
    
    if(isset($_POST['add'])){                    
    
        //test values on input
        $team_firstName =valid_data ($_POST['team_firstName']);
        $team_role= valid_data($_POST[' team_role']);
        $team_resum=valid_data($_POST['team_resum']);
        $team_img= $_FILES['team_img']['name'];
        $facebook_path= $_FILES['facebook_path']['name'];
        $linkdin_path= $_FILES['linkdin_path']['name'];
        $twitter_path= $_FILES['twitter_path']['name'];



        $upload="uploads/".$team_img;
        $upload="uploads/".$facebook_path;
        $upload="uploads/".$linkdin_path;
        $upload="uploads/".$twitter_path;


         //insert values in  db
        $sth = $db->prepare("
        INSERT INTO team(team_img, team_firstName, team_role,team_resum,facebook_path,linkdin_path,	twitter_patth )
        VALUES(:team_img, :	team_firstName	, :team_role,:	team_resum,:facebook_path,:	linkdin_path:,:	twitter_patth)");


        $sth->bindParam(':team_firstName',$team_firstName);
        $sth->bindParam(':team_role',$team_role);
        $sth->bindParam(':team_resum',$team_resum);

        $sth->bindParam(':team_img',$team_img);
        $sth->bindParam(':twitter_path',$twitter_path);
        $sth->bindParam(':facebook_path',$facebook_path);
        $sth->bindParam(':linkdin_path',$linkdin_path);
        $sth->execute();


        move_uploaded_file($_FILES['team_img']['tmp_name'],$upload);
        move_uploaded_file($_FILES['twitter_path']['tmp_name'],$upload);
        move_uploaded_file($_FILES['facebook_path']['tmp_name'],$upload);
        move_uploaded_file($_FILES['linkdin_path']['tmp_name'],$upload);
?>