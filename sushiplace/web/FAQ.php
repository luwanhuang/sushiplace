<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Sushi Place</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css" />
	<link rel="stylesheet" type="text/css" href="CSS/FAQ.css" />
	<!-- JQuery library -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<!-- An external link to the JavaScript file of nav.js -->
	<script type="text/javascript" src="js/nav.js"></script>
	<!-- An external link to the JavaScript file of FAQ.js -->
	<script type="text/javascript" src="js/FAQ.js"></script>
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
		<div id="menu">
			<input type="text" id="search" placeholder="Enter your question here">
			<input type="button" class="button" id="button2" value="Search">
			<!-- Clicking on the title in the list will show the relevant FAQ content
			on the right side block-->
			<ul id="list">
				<li>
					<a id="faq1"> <strong>about us</strong>
					</a>
				</li>
				<li>
					<a id="faq2"> <strong>contacts</strong>
					</a>
				</li>
				<li>
					<a id="faq3">
						<strong>Prices</strong>
					</a>
				</li>
				<li>
					<a id="faq4">
						<strong>Address</strong>
					</a>
				</li>
			</ul>
		</div>
		<!-- An accordion for displaying the FAQ content by using JQuery. Clicking 
		on the title of each section, the relevant content will show. -->
		<div id="FAQ">
			<h3 id="FAQ1">about us</h3>
			<div class="div_show" id="p1">
				<h4>About Sushi Place</h4>
				<p>
					Sushi Place opened the first store in 1999 at BoxHill. Since then 104 stores have been added in NSW, VIC, QLD, WA, NT and ACT. Sushi Place is one of the fastest growing food businesses in Australia. The Sushi Place team now numbers over 1100 people. Sushi Place chefs make Sushi Place products fresh daily in store.
				</p>
			</div>
			<h3 id="FAQ2">contacts</h3>
			<div class="div_hide" id="p2">
				<h4>how to contacts us</h4>
				<p>
					Address: 75/4560 logan road, brisbane.</p>
				<p>	Phone: 0450170391.</p>
				<p>	Email: huangluwan@gmail.com.
				</p>
			</div>
			<h3 id="FAQ3">Prices</h3>
			<div class="div_hide" id="p3">
				<h4>About The Prices</h4>
				<p>
					the normal roll is $2.9 per. the pack is $10 per.
				</p>
				<p>Please contact us for any pricing questions.</p>
			</div>
			<h3 id="FAQ4">Address</h3>
			<div class="div_hide" id="p4">
				<h4>Find us</h4>
				<p>
					Click here to <a href="maps.php"> find us </a>.
				</p>
				
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