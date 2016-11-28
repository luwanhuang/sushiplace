<?php 
session_start();
//connection to Database
include 'connection.php';

//checking database
include 'check.php';
$email= $_SESSION['email'];
$checksql = mysql_query("SELECT * FROM user WHERE email='$email'");
if($checksql===FALSE){
die(mysql_error());}
    //if user exists, session logged in and session their username and user ID for future use
    while($row = mysql_fetch_array($checksql))
    {
        //Check successful!
        $firstName = $row['firstName'];
        $lastName = $row['lastName'];
        $password= $row['password'];
        $phone = $row['phone'];
        $email = $row['email'];
        $address = $row['address']; 
}      
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Sushi Place</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css" />
	<link rel="stylesheet" type="text/css" href="CSS/order.css" />
	<!-- JQuery library -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<!-- An external link to the JavaScript file of nav.js -->
	<script type="text/javascript" src="js/nav.js"></script>
	<!-- An external link to the JavaScript file of FAQ.js -->
	<script type="text/javascript" src="js/order.js"></script>
</head>

<body>
	 <?php
session_start();
$firstName = $_SESSION['firstName'];
$lastName = $_SESSION['lastName'];
if (isset($firstName)) {
    $id = "1";
}
else $id = "0";
?>
<script language='javascript'>
var cid="<?php echo $id; ?>";
</script>
    <header>
		<div id="logo">
			<a href="index.php">
				<img src="images/logo.jpg"  width="200px" height="110px" alt="logo"></a>
		</div>
		<div id="title">
			<h1 id="halfTitle">Sushi Place</h1>
		</div>
		<div id="orderButton">
			<a href="order.php">
				<input class="button" id="button1"
				type="button" value="Order Now!"></a>
		</div>
		<div id="phoneInfo">Phone Number: 0450170391</div>
		<div id="pInfo">   
		 <script>   if (cid==0) {
   						document.getElementById("pInfo").style.display="none";
								} </script>                 
			
			<a >
			        <h4>
                    <?php
                    session_start();
                    $firstName = $_SESSION['firstName'];
                    $lastName = $_SESSION['lastName'];
                    echo $firstName . " " . $lastName;
                    ?>
                    <br>
                </h4>
             </a>
                </div>	
		<nav>
			<ul id="topNav">
				<li>
					<a  href="index.php">Home</a>
				</li>
				<li>
					<a href="FAQ.php">FAQ</a>
				</li>
				<li>
					<a href="comments.php">Comment</a>
				</li>
				<!--
				This is a drop-down menu for sushi pages created by using JQuery.
				When mouse is over the sushi button, the hide menu will slide up;
 				and when the mouse leaves the sushi button or the drop-down menu,
 				the drop-down menu will slide up and hide again.
				-->
				<li>
					<a >sushi</a>
					<ul id="hideNav1" class="hideNav">
						<li>
							<a href="roll.php">Sushi Roll</a>
						</li>
						<li>
							<a href="pack.php">Sushi Pack</a>
						</li>
					</ul>
				</li>	
				<li id="login">
						<script>   if (cid==1) {
   						document.getElementById("login").style.display="none";
								} </script> 
					<a href="login.php">Log In</a>
				</li>	
				<li id="logout">
						<script>   if (cid==0) {
   						document.getElementById("logout").style.display="none";
								} </script>   
					<a href="logout.php">Log Out</a>
				</li>	
			</ul>
		</nav>
	</header>

	<div id="content">
		<div id="form">
			<h2>Order Sushi Now!</h2>
			<!-- 
			The form content is validated and some error messages would show if there
			is any invalid content entered by users. The form will not be submitted 
			if there is any invalid content in the form or the two check boxes are
			not checked (they are checked by default). If the form is submitted 
			successfully, some text will show telling people the form is submitted.
			Clicking on the "reset" button will hide all error and the "submitted 
			successfully" messages.
			
			All text inputs should not be empty or there is a error message for this.
			
			"First Name" and "Last Name" inputs only allow English letters.
  
 			"Birth Date" input needs a valid date in form of "YYYY/MM/DD" and
 			this date should not be a future date.
 
 			"Email" input needs a "@" and a ".", both "@" and "." should not be in
			the beginning and end of the content users entered.

			"Phone" inputs only allow numbers.

			"Preferred Date" input needs a valid date in form of "YYYY/MM/DD" and
			this date should not be a past date.
			-->
			<form id="myForm">
				<p>
					<label for="first_name">First Name</label>
					<input type='text'
						placeholder="First Name" id="first_name" class="required" value="<?php echo $firstName; ?>"></p>
				<p>
					<label for="last_name">Last Name</label>
					<input type='text'
						placeholder="Last Name" id="last_name" class="required" value="<?php echo $lastName; ?>" ></p>
				<p>
					<label for='email'>Email</label>
					<input type='text'
						placeholder="Email" id="email" class="required" value="<?php echo $email; ?>"></p>
				<p>
					<label for="phone">Phone</label>
					<input type="text"
						placeholder="Phone" id="phone" class="required" value="<?php echo $phone; ?>"></p>
				<p>
				<p>
					<label for="address">Address</label>
					<input type="text"
						placeholder="address" id="address" class="required" value="<?php echo $address; ?>"></p>
				<p>
					<label for="date">Preferred Date</label>
					<input type=text
						placeholder="YYYY/MM/DD" id="date" class="required"></p>
				<p>
					<label for="describe">what you want</label>
				</p>
				<p>
					<input type="text"
						placeholder="order" id="order" class="required">
				</p>
				<p>
					<input type="submit" name="submit" class="button" value="Submit"
						id="checkSub">
					<input type="reset" class="button"
						value="Reset" id="checkRe"></p>
			</form>
			<p id="submitHide">
				Have submitted successfully, please check your
				email.
			</p>
		</div>
	</div>
	
		<footer>
		<ul id="contact">
			<li>Phone: 0450170391</li>
			<li>Email: huangluwan@gmail.com</li>
		</ul>
		<div id="logoMini">
			<a href="index.php">
				<img src="images/logoMini.png" alt="logo"></a>
		</div>
		<ul id="copyright">
			<li>© Copyright 2016 Sushi Place.</li>
			<li>All Rights Reserved.</li>
		</ul>
	</footer>
</body>
</html>