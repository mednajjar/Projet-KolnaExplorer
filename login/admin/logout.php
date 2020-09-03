<?php
session_start();

if($_SESSION['admin_login']){
    session_destroy(); 
    header("location: ../admin.php");  
}

?>