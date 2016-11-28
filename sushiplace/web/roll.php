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
	<link rel="stylesheet" type="text/css" href="css/roll.css" />
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
		<div id="nameBar">
			<h2>Roll List</h2>
			<p id="extraInfo">(Click on the below name to see details about this roll)</p>
			<ul>
				<li>
					<a href="#ds">White Rice Avocado H/Roll</a>
				</li>
				<li>
					<a href="#ss">White Rice California H/Roll</a>
				</li>
				<li>
					<a href="#nk">White Rice Cooked Tuna H/Roll</a>
				</li>
				<li>
					<a href="#dc">White Rice Crispy Chicken H/Roll</a>
				</li>
				<li>
					<a href="#fb">White Rice Cucumber Avocado H/Roll</a>
				</li>
				<li>
					<a href="#ssc">White Rice Fresh Salmon H/Roll</a>
				</li>
			</ul>
		</div>
		<div id="staffDetail">
			<h2>Hand Roll</h2>
			<table>
				<tr>
					<td>
						<img src="images/1.jpg" alt="White Rice Avocado H/Roll"/>
					</td>
					<td>
						<div>
							<h3 id="ds">White Rice Avocado H/Roll</h3>
							<p>
								Australian avocado dusted with lightly roasted sesame seeds. Circled with premium light, fluffy sushi rice and wrapped in Japanese seaweed
							</p>
							
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<img src="images/2.jpg" alt="White Rice California H/Roll"/>
					</td>
					<td>
						<div>
							<h3 id="ss">White Rice California H/Roll</h3>
							<p>
								A tasty infusion of seafood, Australian avocado, lightly roasted sesame seeds and Chef's own unique mayonnaise, contained in premium light, fluffy sushi rice and wrapped in Japanese seaweed
							</p>
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<img src="images/3.jpg" alt="White Rice Cooked Tuna H/Roll"/>
					</td>
					<td>
						<div>
							<h3 id="nk">White Rice Cooked Tuna H/Roll</h3>
							<p>
								Cooked Tuna infused with Chef's own unique mayonnaise and presented with Australian avocado and lightly roasted sesame seeds. Circled with premium light, fluffy sushi rice and wrapped in Japanese seaweed
							</p>
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<img src="images/4.jpg" alt="White Rice Crispy Chicken H/Roll"/>
					</td>
					<td>
						<div>
							<h3 id="dc">
								White Rice Crispy Chicken H/Roll
							</h3>
							<p>
								Deep fried fillet of Australian chicken, marinated in Chef's special soy marinade and presented with locally grown Coral lettuce with a sprinkling of lightly roasted sesame seeds. Topped with mayonnaise,circled with premium light, fluffy sushi rice and wrapped in Japanese seaweed.</p>

							<p>	Allergy Notice: This product contains Wheat Gluten, Soy, Egg.
							</p>
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<img src="images/5.jpg" alt="White Rice Cucumber Avocado H/Roll"/>
					</td>
					<td>
						<div>
							<h3 id="fb">White Rice Cucumber Avocado H/Roll</h3>
							<p>
								Locally grown cucumber accompanying a wedge of Australian avocado dusted with lightly roasted sesame seeds. Circled with premium light, fluffy sushi rice and wrapped in Japanese seaweed
							</p>
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<img src="images/6.jpg" alt="White Rice Fresh Salmon H/Roll"/>
					</td>
					<td>
						<div>
							<h3 id="ssc">
								White Rice Fresh Salmon H/Roll
							</h3>
							<p>
								Fresh Tasmanian Atlantic Salmon wrapped around Australian avocado and sprinkled with lightly roasted sesame seeds. Circled with premium light, fluffy sushi rice and wrapped in Japanese seaweed


							</p>
						</div>
					</td>
				</tr>
			</table>
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