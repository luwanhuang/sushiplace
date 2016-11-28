<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Sushi Place</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css" />
	<link rel="stylesheet" type="text/css" href="CSS/comments.css" />
	<!-- JQuery library -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<!-- An external link to the JavaScript file of nav.js -->
	<script type="text/javascript" src="js/nav.js"></script>
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
		<div id="comments">
			<h2>Customers Comments</h2>
			<div id="comments_images">
				<img src="images/comment1.jpg" alt="holli">
				<img
					src="images/comment2.jpg" alt="arvin">
				<img
					src="images/comment3.jpg" alt="loki">
				<img
					src="images/comment4.jpg" alt="Kyle Ybarra">
	</div>
			<ul id="comments_ul">
				<li>
					<div class="detailed_comments">
						<p>
							Local friends have recommended we try this place for years. Finally went and were sadly disappointed. The place is dirty and run down looking. Wait staff likes to point out large color pictures of menu items to help you choose. It would help if they wiped the cobwebs away from in front of at least one picture. Food was OK...
						</p>
						</p>
					</div>
				</li>
				<li>
					<div class="detailed_comments">
						<p>
							Friends took us to this establishment in this liitle town at the end of the highway. We all,had some variation of sushi - not a particular favorite of mine. But I found the whole experience quite decent though not as good as a well-prepared steak. The place was clean, the staff friendly.
						</p>
					</div>
				</li>
				<li>
					<div class="detailed_comments">
						<p>
							We'd heard good things about this restaurant and were extremely disappointed. Restaurant was packed at the end of a lunch rush and host was rude, servers snapped at us before we even sat down. Restaurant was unclean with food all over the floor and even the walls. The sushi rolls were imaginative, but did not deliver on taste or presentation....
						</p>
					</div>
				</li>
				<li>
					<div class="detailed_comments">
						<p>
							Have been all over the world, tasting foods at the finest restaurants. To be frank, Sushi Rock is truly an experience in dining above all others. The food is so original and unique, combining flavor and texture as I've never tasted. The ingredients are organic, home grown and fresh caught. So delicious I went back for four days straight, wanting.
						</p>
					</div>
				</li>
			</ul>
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