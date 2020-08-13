<?php
require_once 'config.php';

// try {
//     $sql = 'SELECT * FROM images ORDER BY id';

//     $q = $db->query($sql);
//     $q->setFetchMode(PDO::FETCH_ASSOC);
// } catch (PDOException $e) {
//     die("Could not connect to the database $dsn :" . $e->getMessage());
// }
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title>PHP MySQL Query Data Demo</title>
        <link rel="stylesheet" href="css/admin.css">
        <link rel="stylesheet" href="css/accueil.css">
    </head>
    <body>
    
            
            <div class="login-form">
                <form class="formGroup" action="admin.php" method="post">
                    <h2 class="text-center">Log in</h2>       
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" required="required">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btnLogin">Log in</button>
                    </div>       
                </form>
            </div>





        








    </body>
</div>
</html>