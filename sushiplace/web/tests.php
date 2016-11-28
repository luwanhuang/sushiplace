<?php 

$conn = @mysql_connect("au-cdbr-azure-east-a.cloudapp.net:3306","be068e0dd1d45b","33db9048");
// Check connection
if (!conn){
    echo 'failed';
}
else echo 'ok';
mysql_select_db("TM", $conn);
?> 