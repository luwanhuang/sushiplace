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
			<h2>Boxes and Packs</h2>
			<p id="extraInfo">(Click on the below name to see details about this pack)</p>
			<ul>
				<li>
					<a href="#ds">Seafood Salad</a>
				</li>
				<li>
					<a href="#ss">Tobiko Pack</a>
				</li>
				<li>
					<a href="#nk">Futomaki Pack (V)</a>
				</li>
				<li>
					<a href="#dc">Assorted Sushi Pack</a>
				</li>
				<li>
					<a href="#fb">Futo Inari Pack</a>
				</li>
				<li>
					<a href="#ssc">Salmon Tuna Sushi Pack</a>
				</li>
			</ul>
		</div>
		<div id="staffDetail">
			<h2>Boxes and Packs</h2>
			<table>
				<tr>
					<td>
						<img src="images/11.jpg" alt="Seafood Salad"/>
					</td>
					<td>
						<div>
							<h3 id="ds">Seafood Salad</h3>
							<p>
								A seafood assortment of prawn and flying fish roe, served with wedges of locally growned tomato, avocado, cucumber and lemon, tossed with Chef's own unique mayonnaise and complemented with locally grown Coral lettuce and fresh parsley.
							</p>
							
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<img src="images/12.jpg" alt="Tobiko Pack"/>
					</td>
					<td>
						<div>
							<h3 id="ss">Tobiko Pack</h3>
							<p>
								8 delicious portions of Tobiko wrapped around a roulade of vinegared rice with a heart of Tasmanian Atlantic Salmon, locally grown avocado and cucumber. Accompanied by traditional wasabi and Asain ginger
							</p>
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<img src="images/13.jpg" alt="Futomaki Pack (V)"/>
					</td>
					<td>
						<div>
							<h3 id="nk">Futomaki Pack (V)</h3>
							<p>
								8 individual portions of Vegetarian Futomaki with tamago, avocado, carrot, cucumber, daikon radish, pickle and sweetened beancurd, accompanied by Chef\'s famous mayonnaise, traditional wasabi and Asian ginger
							</p>
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<img src="images/14.jpg" alt="Assorted Sushi Pack"/>
					</td>
					<td>
						<div>
							<h3 id="dc">
								Assorted Sushi Pack
							</h3>
							<p>
								4 Nigiri portions (salmon, white fish, tuna and prawn) all set on vinegar rice, accompanied by 2 mouthwatering portions of California Roll and 3 "inside-out" Nori Rolls. This very popular selection comes with Asian ginger and traditional wasabi</p>
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<img src="images/15.jpg" alt="Futo Inari Pack"/>
					</td>
					<td>
						<div>
							<h3 id="fb">Futo Inari Pack</h3>
							<p>
								8 piece pack with a 4 and 4 mix of Vegetarian Futomaki with tamago, avocado, carrot, cucumber, daikon radish, pickle and sweetened beancurd and plain Inari - pockets of sweetened beancurd filled with vinegared sesame rice, accompanied by wasabi and Asian ginger
							</p>
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<img src="images/16.jpg" alt="Salmon Tuna Sushi Pack"/>
					</td>
					<td>
						<div>
							<h3 id="ssc">
								Salmon Tuna Sushi Pack
							</h3>
							<p>
								Delicately sliced fillets of Australian yellow fin tuna and Tasmanian Atlantic salmon draped over vinegared rice. Accompanied by Asian ginger and traditional wasabi
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