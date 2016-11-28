		<!DOCTYPE html>
<html class="ui-mobile">

<head>
	<meta charset="UTF-8">
	<title>Sushi Place</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css" />
	<link rel="stylesheet" type="text/css" href="CSS/order.css" />
	<!-- JQuery library -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<!-- An external link to the JavaScript file of nav.js -->
	<script type="text/javascript" src="js/nav.js"></script>
	<link rel="stylesheet" type="text/css" href="css/index.css" />

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
	<div id="form1">
		<h2>Welcome to Sushi Place!</h2>
			<form id="myForm" method='POST' action='check.php'>
					<p>
						<label for="Username">Username:</label>
                            <input type="email"  placeholder="Email" name= "username" id="email" >
                    </p>
                    <p>
                    	<label for="Password">Password:
                    	</label>
                            <input type="password"  placeholder="Password" name="password" id="password" >
                    </p>
                        
				<p>
					<input type="submit" name="submit" class="button" value="Sign In"
						id="checkSu">
					<input type="reset" class="button" value="Sign Up" onClick = "parent.location='register.php'" id="checkR"></p>
			</form>
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
