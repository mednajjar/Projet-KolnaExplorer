<?php

require_once '../config.php';
session_start();



if(isset($_SESSION['superadmin_login'])){
    header("location: ./superadmin/dashboard.php");
}

if(isset($_SESSION['admin_login'])){
    header("location: ./admin/dashboard.php");
}

if(isset($_REQUEST['submit'])){
    $email = $_REQUEST["email"];
    $pass = $_REQUEST["pass"];
    $role = $_REQUEST["role"];

    if($email AND $pass AND $role){
        try{
            $stmt = $db->prepare("SELECT spa_email, spa_pass, spa_role FROM superadmin WHERE spa_email= :uemail AND spa_pass= :upass AND spa_role= :urole");
            $stmt -> bindParam("uemail", $email);
            $stmt -> bindParam("upass", $pass);
            $stmt -> bindParam("urole", $role);
            $stmt -> execute();

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $dbemail = $row['spa_email'];
                $dbpass = $row['spa_pass'];
                $dbrole = $row['spa_role'];
            }
            if($email!=null AND $pass!=null AND $role!=null)
            {
                if($stmt->rowCount()>0)
                {
                    if($email==$dbemail AND $pass==$dbpass AND $role==$dbrole)
                    {
                        switch($dbrole)
                        {
                            case "superadmin":
                                $_SESSION["superadmin_login"]=$email;
                                header("location: ./superadmin/dashboard.php");
                                break;

                            case "admin":
                                $_SESSION['admin_login']=$email;
                                header("location: ./admin/dashboard.php");
                                break;

                            default:
                            echo"<script>alert('wrong email or password or role')</script>";
                        }
                    }
                    else
                    {
                        echo"<script>alert('wrong email or password or role')</script>";
                    }
                }
                else{
                    echo"<script>alert('wrong email or password or role')</script>";
                }
            }
            else
            {
                echo"<script>alert('wrong email or password or role')</script>";
            }
        }
        catch(PDOException $e)
        {
            $e->getMessage();
        }
    }
    else
    {
        echo"<script>alert('wrong email or password or role')</script>";
    }
}
         

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login to dashboard</title>
        <link rel="stylesheet" href="../css/admin.css">
        <link rel="stylesheet" href="../css/accueil.css">
        <link rel="stylesheet" href="../css/style.min.css">
    </head>
    <body>
    
            
            <div class="form_login">
                <form class="formGroup" action="" method="post">
                    <h2 class="text-center">Admin</h2>       
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="name@exemple..." name="email" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password..." name="pass" required="required">
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="role">
                            <option value="" selected="selected"> - Select role -</option>
                            <option value="superadmin">Superadmin</option>
                            <option value="admin">Admin</option>
                        </select>
                        <div class="form-group">
                            <button type="submit" class="btnLogin" name="submit">Login</button>
                        </div> 
                    
                    </div>      
                </form>
            </div>


    </body>
</html>