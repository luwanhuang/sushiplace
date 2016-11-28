<?php
session_start();
if(isset($_POST['regsubmit'])){
  $username = $_POST['Email'];
  $password = $_POST['password'];
  $confirmpassword = $_POST['confirmpassword'];
  $firstname = $_POST['firstName'];
  $lastname = $_POST['lastName'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $insert_sql = "INSERT INTO user(email, password, firstName, lastName, address, phone)VALUES('$username','$password','$firstname','$lastname',  '$address', '$phone')"; 
echo '123123';}
else echo '000';


  if(!preg_match('/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/', $username)){
    echo "invalid email address";
  exit('Invalid Email<a href="javascript:history.back(-1);">back</a>');
    }

  if(strlen($password) < 6){
    echo "password length is less than 6 character";
  exit('Invalid password<a href="javascript:history.back(-1);">back</a>');
    }

  if($password != $confirmpassword){
    echo "Password not matched";
    exit('Password not matched<a href="javascript:history.back(-1);">back</a>');
  }

  

  include 'connection.php';

  $check_query = mysql_query("SELECT userID FROM user WHERE email = '$username' limit 1");
  if(mysql_fetch_array($check_query)){
    echo $username, 'already exites<a href="javascript:history.back(-1);">back</a>';
    exit;
    }
 


   if(mysql_query($insert_sql, $conn)){
        header("Location: index.php");
       }else {
         echo $insert_sql;
       echo 'Sorry, sign up failed ',mysql_error(),'<br />';
       echo '<a href="javascript:history.back(-1);">Try Again</a>';
      }
?>