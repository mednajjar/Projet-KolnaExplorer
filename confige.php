<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$linkTeam = mysqli_connect("localhost", "root", "");
 
// Check connection
if($linkTeam === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Print host information
echo "Connect Successfully. Host info: " . mysqli_get_host_info($linkTeam);
 
// Close connection
mysqli_close($linkTeam);
?>