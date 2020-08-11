<?php
include 'config.php'

if(isset($_POST['add'])) {
    $team_firstName=$_POST['team_firstName'];
    $team_role=$_POST['team_role'];
    $team_resum=$_POST['team_resum'];
    $team_img=$_POST['team_img'];
    $facebook_path=$_POST[' facebook_path'];
    $linkdin_path=$_POST['  linkdin_path'];
    $twitter_patth =$_POST[' twitter_patth  '];

    $upload="uploads/".$team_img;
    $upload="uploads/".$facebook_path;
    $upload="uploads/".$linkdin_path;
    $upload="uploads/".$twitter_patth;


    $query="INSERT INTO team( team_img,team_firstNam,team_role,team_resum,facebook_path	,linkdin_path,twitter_patth   )values (?,?,?,?,?,?,?)  ";
    $stmt=$conn->prepare($query);
    $stmt->bind_param("ssss",$team_img,$team_firstName,$team_role,$team_resum,$facebook_path,$linkdin_path,$twitter_patth);
    $stmt->execute();


}


?>