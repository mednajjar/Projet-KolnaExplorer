<?php
session_start();

if($_SESSION['superadmin_login']){
    session_destroy(); 
    header("location: ../admin.php");  
}

?>