<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Sushi Place</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css" />
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
		<div id="leftDiv">
			<h3>Sushi Facts</h3>
			<p>
				Sushi dates back to at least the second century A.D., beginning as a method of preserving fish in China. The word “sushi” actually refers to rice that has been seasoned with vinegar, sugar, and salt, and contrary to popular belief, Sushi does not mean raw fish at all. Raw fish sliced and served by itself is called sashimi. Good sushi rice is somewhat chewy, and sticky to the touch. Sushi is traditionally eaten with the fingers, in one or two bites, although many people use chopsticks. It is not considered polite to pass food from one person to another using chopsticks, as this parallels a Japanese funeral ceremony. It is more appropriate to use the blunt end of your chopsticks and pass the food you want to share from one plate to the next. The Japanese usually eat miso soup not at the beginning of the meal, but at the end—to aid digestion. Knives used by sushi chefs are the direct descendants of samurai swords, and the blades should traditionally be sharpened every day. Sake is a Japanese rice wine made of fermented rice, malt and water. Sake has an alcoholic content of 16% to 19% and its taste varies from sweet to dry. You can drink it warm or cold. When drinking Sake with Sushi, you usually warm it up to body temperature.  
			</p>
		</div>
		<div id="rightDiv">
			<h3>Sushi Culture</h3>
			<video controls="controls" preload="auto">
				<source src="images/sushi.mp4" type="video/mp4">
				Sorry, your browser does not support this video!</video>
			<div>
				<h3>Open Time</h3>
				<p class="dateInfo">Monday to Thursday: 9:00am to 5:00pm</p>
				<p class="dateInfo">Friday: 9:00am to 4:30pm</p>
			</div>
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