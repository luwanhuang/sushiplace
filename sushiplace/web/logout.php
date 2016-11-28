<?php
session_start();

if (!isset($_SESSION['userID']))
{
    //$_SESSION['userID'] = $_SESSION['userID'];
    header("Location: index.php");
}


$_SESSION = array();
if(isset($_COOKIE[session_name()]))
{
  setCookie(session_name(),'',time()-3600,'/');
}
session_destroy();
    header("Location: index.php");
 //echo "<script>window.location.href='index.php'</script>";
?>
