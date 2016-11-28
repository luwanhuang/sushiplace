

<?php 
Server: sushiplace.database.windows.net,1433 
SQL Database: tm
User Name: luwan
echo '123';
$connectionInfo = array("UID" => "luwan@sushiplace", "pwd" => "Qq741953862", "Database" => "tm", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:sushiplace.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

$checksql = mysql_query("SELECT * FROM [user] WHERE email='376012406@qq.com' AND password = 'q741953862'");
while($row = mysql_fetch_array($checksql)){
	echo $row['email'];
}
echo '456';
?> 

