

<?php 

$conn = @mysql_connect("au-cdbr-azure-east-a.cloudapp.net:3306","be068e0dd1d45b","33db9048");
// Check connection
if (!conn){
    die("Failed to connect to MySQL: " . mysql_error());
}
mysql_select_db("acsm_8aedc696221cce0", $conn);
?> 
