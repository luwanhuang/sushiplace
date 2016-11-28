<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);

session_start();

    //connection to Database
    include 'connection.php';

//login
if (isset($_POST['submit'])){

    //user real escape string to prevent SQL injection

    $username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['password']);

    //check if username and password is blank
    if (!$_POST['username'] | !$_POST['password'])
    {
        echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('You did not complete all of the required fields')
				window.location.href='index.php'
				</SCRIPT>");
        exit();
    }

    //SQL checking in database
    $checksql = mysql_query("SELECT * FROM user WHERE email='$username' AND password = '$password'");
    //if user exist, session logged in and session their username and user ID for future use
    if($row = mysql_fetch_array($checksql))
    {
        //Check successful!
        $_SESSION['firstName'] = $row['firstName'];
        $_SESSION['lastName'] = $row['lastName'];
        $_SESSION['address'] = $row['address'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['phone'] = $row['phone'];
        header("Location: index.php");
        
    }else{
        exit('Login Failed, Invalid User Name or Password! Click here to <a href="javascript:history.back(-1);"> retry </a>');
    }

}



?>
