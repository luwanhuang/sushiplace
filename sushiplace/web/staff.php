<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Don Swanson Racing School</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css" />
	<!-- JQuery library -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<!-- An external link to the JavaScript file of nav.js -->
	<script type="text/javascript" src="js/nav.js"></script>
	<link rel="stylesheet" type="text/css" href="css/staff.css" />
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
			<h2>Main Staff List</h2>
			<p id="extraInfo">(Click on the below name to see details about this staff)</p>
			<ul>
				<li>
					<a href="#ds">DON SWANSON</a>
				</li>
				<li>
					<a href="#ss">STEPHANIE SULLIVAN</a>
				</li>
				<li>
					<a href="#nk">NICK KUNEWALDER</a>
				</li>
				<li>
					<a href="#dc">DOUG CUMMINGS</a>
				</li>
				<li>
					<a href="#fb">FRANK BAIN</a>
				</li>
				<li>
					<a href="#ssc">SCOTT SCOTT</a>
				</li>
				<li>
					<a href="#jr">JIM RICE</a>
				</li>
				<li>
					<a href="#am">ADAM MITCHELL</a>
				</li>
				<li>
					<a href="#rb">RON BROOKSHIRE</a>
				</li>
				<li>
					<a href="#rs">ROD SUSMAN</a>
				</li>
			</ul>
		</div>
		<div id="staffDetail">
			<h2>Our Staff</h2>
			<table>
				<tr>
					<td>
						<img src="images/ds.jpg" alt="DON SWANSON"/>
					</td>
					<td>
						<div>
							<h3 id="ds">DON SWANSON - FOUNDER / CHIEF INSTRUCTOR</h3>
							<p>
								With a career that started in a Soap Box Derby car to
								racing at major events like the Toyota Grand Prix of Long Beach,
								Don's knowledge and experience in many forms of racing is a
								priceless tool to all student's performance driving or racing
								aspirations. His passion for motor racing is evident in his
								approach of sharing years of valuable driving secrets with
								students. He has always approached driving as a serious yet
								rewarding activity if done correctly. In developing the
								curriculum for the school he has included science, physics and
								geometry as a way to explain the phenomenon of creating speed
								through better understanding and car control techniques.
							</p>
							<p>
								Don has raced karts, hydroplanes, drag cars, sports cars
								(Mazda, Porsche, Ferrari, Mustang, Pontiac, Lotus, BMW, Nissan),
								vintage sports and formula cars (March, Lola, Lotus, Ralt,
								Swift). He has or is racing in IMSA, SCCA PRO, NHRA, ADRA, VARA,
								ALMS, and has held an FIA Grade "A" rating. He was the first
								'privateer' team owner/driver in the history of IMSA to be
								sponsored by a Fortune 500 company. Panasonic, Mazda, Coors
								Beer, GTE, Motorola, Yokohama, Kendall Motor Oil, Firestone, and
								France Telecom were some of the companies that Don was
								significantly sponsored by when he was racing in IMSA. He now
								has many new, exciting marketing partners that he is extremely
								proud to have on board.
							</p>
							<p>
								He has tasted Victory 45 times in his career and has won
								three Championships and holds track records in sports car
								racing. He has been a precision test driver for certification
								companies verifying performance claims made by various sports
								car manufacturers. He is also a graduate of the Skip Barber
								Racing School in the early 80's and actually taught there for 2
								years in the mid-90's.
							</p>
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<img src="images/ss.jpg" alt="STEPHANIE SULLIVAN"/>
					</td>
					<td>
						<div>
							<h3 id="ss">STEPHANIE SULLIVAN - PARTNER</h3>
							<p>
								As an Executive Assistant to CEO's, COO's and Top
								Executives throughout San Diego, Stephanie brings a World of
								corporate knowledge to our racing school. She has worked for
								years at some of the top firms in San Diego including Kodak,
								Alcatel-PVNS, Burnham and several large pharmaceutical
								companies. She handled the day-to-day functions of corporate
								travel, meetings, trade shows, hospitality and also dealt with
								the legality issues of today's hectic business environment.
							</p>
							<p>
								Earlier in life, she was a model in both electronic and
								print media and was a member of a Producers Group at Del Mar TV,
								where she wrote, produced, directed and hosted shows as a
								volunteer for Public Access Television. Besides being a Partner
								of the Don Swanson Racing School, she also heads up Pay It
								Forward Media - PIFM - which is a nonprofit organization that
								teaches under-served high school children how to produce, film
								and edit productions for charity and community events.
							</p>
							<p>
								For Star Trek fans - she also worked for the Son of the
								Creator of Star Trek, Eugene "Rod" Roddenberry as his
								Executive/Personal Assistant. She has a passion for details and
								makes sure every event is created and orchestrated in the most
								productive way possible. She became a Partner in the business
								because she loves cars and racing but most of all because she
								loves working with people. Her photo on the left was taken at
								the Long Beach Grand Prix. Here, she stands up in the
								announcer's booth that looks down over the track.
							</p>
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<img src="images/nk.jpg" alt="NICK KUNEWALDER"/>
					</td>
					<td>
						<div>
							<h3 id="nk">NICK KUNEWALDER - SENIOR STAFF INSTRUCTOR</h3>
							<p>
								We are thrilled to have Nick on our racing school
								instructor staff. He is one of the most experienced, well versed
								instructors in the country. In our continuing efforts to be the
								best performance driving school on the West Coast, having Nick
								on board is an exciting addition. He has been working as a race
								and performance driving instructor. He has been a stunt driver
								for films, a pace driver, test, stunt and corporate driver
								teaching advanced driving techniques. He has instructed at the
								Skip Barber Racing School, Derek Daly Academy of Performance
								Driving, Rally Art, Precision Dynamics, Autopian Motorsports
								Country Club, Automotive Manufacturer Consultants Inc., IMSA -
								Motor Trend Product Testing, 20 /20 Sports Marketing, ESI Event
								Solutions International, Maritz Communications and others.
								Currently, among all of the other things that Nick has going, he
								is the Head Judge for the World Drifting Competition.
							</p>
							<p>
								He has also conducted Corporate Manufacturer Programs for
								Ferrari, BMW, Mercedes, Toyota, Infiniti, Audi, Nissan, Saab,
								Mazda, Dodge, GM, Chrysler, Volkswagen, and Porsche. He has
								raced in the Jim Russel Pro Series, Barber Saab Pro Racing
								Series, IMSA GTU, Formula Atlantic, Indy Lights, American Indy
								Car Series and has been a pace car driver at the Long Beach
								Grand Prix for 5 years. Before his racing career got under way,
								Nick was a professional ski racer competing in the International
								Speed Skiing Tour, the Coors American Pro Tour, Puegeot Pro Tour
								and the World Pro Tour. Nick also graduated from the Skip Barber
								Racing School.
							</p>
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<img src="images/dc.jpg" alt="DOUG CUMMINGS"/>
					</td>
					<td>
						<div>
							<h3 id="dc">
								DOUG CUMMINGS - INSTRUCTOR AND KARTING DIVISION
								DIRECTOR
							</h3>
							<p>
								Here's some quick facts. Doug has been an SCCA racer, a
								Grand American Modified Stock Car driver and an instructor in
								full sized Nextel Cup (NASCAR) cars at California Speedway in
								Fontana, teaching people how to safely drive a stock car at 175
								miles per hour. Doug is the On-Line Radio voice of the Yellow
								Ribbon Team, an interactive organization to help our active
								military families stay in contact. Doug interviews the top
								drivers in racing today as well as celebtrities and athletes.
							</p>
							<p>
								He has also been very active in drag racing events and
								actually owned a very rare Turbocharged Buick Grand National
								car. Doug's enthusiasm for cars and driving and his great
								personality ensures you will have an enjoyable day at any of our
								events that Doug is in charge of.
							</p>
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<img src="images/fb.jpg" alt="FRANK BAIN"/>
					</td>
					<td>
						<div>
							<h3 id="fb">FRANK BAIN - STAFF INSTRUCTOR</h3>
							<p>
								Frank is the newest member of our instructing staff. In
								our continual search for the best instructors available, we are
								pleased to have the services of this talented racing driver.
								Frank Bain has spent over half his life behind the wheel of a
								racing vehicle. Competing in race series throughout North
								America, this young driver grew strong roots in karting earning
								multiple championships before moving onto full size race cars.
								While honing his skills behind the wheel, Bain raised the level
								of his technical ability obtaining an engineering degree from
								Rutgers University.
							</p>
							<p>
								Frank went on to compete in NASCAR Super Late Models,
								Trucks and Modifieds but has spent the bulk of his career in
								open-wheel, racing Midgets, Formula Ford 2000, Star Mazda Pro
								Series and most recently the CART Barber Dodge Pro Series. He
								was the 1998 Northeast Region karting Champion, the 1999 SKUSA
								Liberty Region karting Champion, and the 2000 SKUSA Liberty
								Region karting Champion. He has also worked throughout the
								United States and Canada as a lead instructor / driver in many
								automobile performance programs for many of the World's top
								automotive brands.
							</p>
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<img src="images/ssc.jpg" alt="SCOTT SCOTT"/>
					</td>
					<td>
						<div>
							<h3 id="ssc">
								SCOTT SCOTT - TRANSPORTATION, LOGISTICS AND
								STAFF INSTRUCTOR
							</h3>
							<p>
								Graduate of the Elf Winfield Motor Racing School in
								Europe. Scott was not only a graduate but finished in the top 5
								out of over 200 drivers at the Circuit Paul Ricard in the South
								of France. This was rare for an American driver to go over to
								France and compete with Europe's best racing prospects. Alain
								Prost and many other Formula 1 racing drivers came out of this
								prestigious school which uses Renault Turbo formula cars. Scott
								has also spent time in sports car racing and has done work with
								the Yokohama Racing Tires Division. He has traveled throughout
								the United States and Europe working on professional racing
								teams. He is a quick and smooth racing driver and his natural
								ability comes from his extensive, ongoing training program.
								Scott operates Palm Spring's premiere hiking and guide service,
								Trail Discovery/Desert Safari when he is not sharing his
								valuable years of experience with students.
							</p>
							<p>
								Hiking 20-60 miles a week, Scott has the key ingredient to
								beinG a successful racing driver, physical fitness. The better
								shape you stay in the better you will perform any demanding task
								in your life and Scott epitomizes what a serious racing driver
								trains like. Scott's experience and the knowledge he has gained
								gives him valuable information to share with students.
							</p>
							<p>
								His experience, and the respect he's earned working with
								Destination Management companies as well as major hotel chains
								and travel agencies, adds tremendous value to our staff. The
								professional manner in which Scott handles corporate and
								executive accounts is another reason we are happy to have hime
								on board.
							</p>
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<img src="images/tt.jpg" alt="TY TIPTON"/>
					</td>
					<td>
						<div>
							<h3 id="tt">
								TY TIPTON - PERFORMANCE TECHNICAL DIRECTOR AND
								STAFF INSTRUCTOR
							</h3>
							<p>
								Ty's father has been in the car business for nearly 50
								years. Ty is one of those guys who loves a challenge. He is also
								one who regards any and all problem as an opportunity. This is
								the kind of thinking that creates a champion. Ty has raced
								karts, drag cars and sports cars to many victories including a
								season long NASCAR (short track) Championship in 1996. TY has
								often been criticized as a guy who had the financial means to
								compete with a winning car but you still have to get behind the
								wheel and have the talent and discipline to get the job done. He
								also prepared and worked on his own cars, something he didn't
								have to do. He is a member of our staff because of his
								dedication to the sport of motor racing and his years of
								knowledge in many types of race cars.
							</p>
							<p>
								Ty currently competes in road races in the United States
								and Mexico driving his 1994 Honda Civic which features a 150HP
								1993 Supercharged, Acura 1800 engine. This is a fully race
								prepared car that he drove to a win in class and a 6th overall
								out of 34 cars despite starting dead last at the Los Angeles
								Grand Prix in 1998. He operates the Motorsports Division of
								Tipton Honda and also the new Indian, Triumph and Big Dog
								Motorcycle dealership in El Cajon, California. Ty has been on
								the pole position many many times and has won 20 feature races
								in his stock car racing career.
							</p>
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<img src="images/jr.jpg" alt="JIM RICE"/>
					</td>
					<td>
						<div>
							<h3 id="jr">JIM RICE - STAFF INSTRUCTOR</h3>
							<p>
								A long time runner, bicyclist and overall fitness
								enthusiast, Jim dove into the motor racing pool several years
								ago and continues today in many forms of motor racing. He owns
								and races three different sports cars at the present time
								including a 930 Porsche. Jim's fitness training, much like his
								fellow instructors, has played a big part of his approach and
								success so far in racing. He is a graduate of the Don Swanson
								Racing School and even as a student, DSRS instructors knew that
								Jim had a special aptitude for driving. He has raced bicycles,
								sports cars and race karts where in 1998 he was crowned the
								regional "Rookie of the Year" by the San Diego Karting
								Association (SDKA).
							</p>
							<p>
								Jim was the 2002 125 Electric Start Karting Class
								Champion, with 5 wins and 1 second place finish in the San Diego
								County competition. When Jim is not instructing he owns and
								operates Foot Depot (Previously Sole Performance) in Encinitas.
								He provides customers with computerized custom orthotics
								utilizing Cad/Cam Technology. He also performs specialty shoe
								work for athletes including racing boots and gloves for Mario
								Andretti, Michael Andretti, Jean Alesi, Eddie Irvine, Christian
								Fittipaldi, Johhny Herbert, Ricardo Zonta, Tony Kanaan, and
								other top drivers. He even did running shoe work for Scott
								Tinley, John Howard, Paula Newby Frazier, Heather Fuhr and
								Michele Jones who was a Silver Medalist tri-athlete in the
								Sydny, Austailia Summer Olympics.
							</p>
							<p>
								Jim is a welcomed addition to our instructor staff because
								of his dedication to the science of racing and driving and for
								his understanding of mental preparation for sports in general.
							</p>
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<img src="images/am.jpg" alt="ADAM MITCHELL"/>
					</td>
					<td>
						<div>
							<h3 id="am">ADAM MITCHELL - STAFF INSTRUCTOR</h3>
							<p>
								Adam is a professional dirt and asphalt sprint car and
								midget driver. Adam got his racing career started in Speedway
								Midgets and found himself in the Winner's Circle many times. At
								the advice of a friend, Adam enrolled in the Skip Barber Racing
								School and considered a career in sports cars or open wheel
								Grand Prix style racing.
							</p>
							<p>
								Upon completing the Skip Barber school, some effort was
								made to establish a road racing program but the love of Sprint
								Cars and Midget Racers found him moving to Indianapolis, sharing
								a shop with Stan Fox (Sprint, Midget and Indy Car Driver) and
								racing throughout the Midwest and weekly on ESPN's Thursday
								Night Thunder. After two years of banging wheels with some of
								the sport's biggest stars such as Jeff Gordon, Tony Stewart,
								Rich Vogler, PJ Jones and others, Adam moved back to California
								to carry on his racing career. Most recently you could find him
								at Perris Speedway near Riverside, California.
							</p>
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<img src="images/pg.jpg" alt="PAUL GUZMAN"/>
					</td>
					<td>
						<div>
							<h3 id="pg">PAUL GUZMAN - BILINGUAL STAFF INSTRUCTOR</h3>
							<p>
								As a young boy, Paul played all the stick and ball sports
								just like all the other kids both those games weren't fast
								enough - racing was. In his teens, Paul started racing karts and
								was a driver for one of the most well known names in kart
								racing, Doug Flemming. He won many races and two championships.
								He drove KT 100 and 125 Shifter Karts. He went to the Paul
								Spinard Racing School in Canada and the Dane Peteressi Advanced
								Driving School in Portland, Oregon.
							</p>
							<p>
								He raced in the Formula 2000 series (photo at left)
								against well known drivers such as Jimmy Vassar, Patrick
								Carpentia and David Emperingham and then went on to do what most
								aspiring drivers only dream about - went to the Elf Winfield
								School in Europe at Circuit de Paul Ricard in France. This is
								the same school that fellow instructor, Scott Scott went to. At
								the school he drove a Formula Renault against some of the best
								drivers from Europe. Upon his return to the states, he raced
								some Formula Atlantic and in the Barber Saab Pro Series.
							</p>
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<img src="images/rb.jpg" alt="RON BROOKSHIRE"/>
					</td>
					<td>
						<div>
							<h3 id="rb">RON BROOKSHIRE - STAFF INSTRUCTOR</h3>
							<p>
								Here's some quick facts. Ron is one of the most respected
								competitors in off road racing. He has driven in many types of
								vehicles in off road races including the Baja 500 and the Baja
								1000 and his newest full sized buggy has all of the latest
								sophisticated equipment and components that would make a Formula
								One team proud. Ron's Brookshire Motorsports Team is the first
								team in the history of off road racing to use a Honda 4 cylinder
								powerplant when most people were using VW engines and others.
							</p>
							<p>
								Although he competes in off road racing primarily, we are
								proud to have Ron on board because of his love of road racing as
								well. In fact, he loves road racing so much he attended and is a
								graduate of not only the Bob Bondurant Racing School but is also
								a graduate of the Skip Barber Racing School. Ron is also an
								incredible metal fabricator and has done most of the work on his
								off road race cars.
							</p>
							<p>
								Ron, like most of our staff, can drive just about anything
								and drive it well within a short time.
							</p>
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<img src="images/rs.jpg" alt="ROD SUSMAN"/>
					</td>
					<td>
						<div>
							<h3 id="rs">ROD SUSMAN - STAFF INSTRUCTOR</h3>
							<p>
								Rod brings 30 years of racing experience to our
								instructing staff. He has held racing licenses in SCCA, PCA,
								POC, VARA and HSR. Rod has owned and driven in Formula Fords
								(one of the most famous and popular Formula race cars in the
								World), Spec Racers, Sports 2000s, GT-2 Porsches, BMWs, Datsun
								510 and 1600 series cars and more.
							</p>
							<p>
								He began racing while in College driving Showroom Stock
								sports cars. Some of the highlights from his career include
								qualifying 5 times for the Valvoline Runoffs, the biggest SCCA
								race of the year where all SCCA Regional and National Champions
								from throughout the United States participate. Rod has been an
								active instructor for many sports car clubs including Alfa
								Romeo, Porsche, Pantera/Cobra, Ferrari, SCCA and racing schools.
							</p>
							<p>
								He still competes five to six times a year in VARA and HSR
								events in his Porsche 2.0 Roadster. In addition to his
								extensive driving experience he was also a Touring Professional
								Tennis player and a Minor League Baseball player (first
								baseman). With a background in professional sports, Rod
								has the key ingredient to being a great driver - dedication to
								doing it the best you can.
							</p>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
	
	<footer>
		<ul id="contact">
			<li>Phone: 760 500 1997</li>
			<li>Email: theracingschool@san.rr.com</li>
		</ul>
		<div id="logoMini">
			<a href="index.php">
				<img src="images/logoMini.png" alt="logo"></a>
		</div>
		<ul id="copyright">
			<li>© Copyright 2015 Don Swanson Racing School.</li>
			<li>All Rights Reserved.</li>
		</ul>
	</footer>
</body>
</html>