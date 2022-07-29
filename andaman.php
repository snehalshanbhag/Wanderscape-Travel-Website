<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="EN">
<head>
	<meta charset="utf-8">
	<title> Andaman-Wanderscape</title>
	<link rel="stylesheet" type="text/css" href="css/traavel.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<header>  
    <nav id="header-nav" class="navbar navbar-default">
      <div class="container">
          <div class="navbar-brand">
             <div class="logo">
             <a href="dashboard.php"><img src="images/logo2.jpg"></a>
               </div>
            <a href="dashboard.php" style="text-decoration: none"><h1>WANDERSCAPE</h1></a>
          </div>
         <ul >
         	<li><a href="dashboard.php" style="text-decoration: none">HOME</a></li>
             <li class="dropdown">
                <a href="javascript:void(0)" style="text-decoration: none" >TOURS</a>
                <div class="dropdown-content">
                <a href="Luxury.php">Luxury Trips</a>
                <a href="travelsolo.php">Travel Solo</a>
                <a href="familytrips.php">Family Trips</a>
                <a href="ad.php">Adventure</a>
                </div>
            </li>
            <li><a href="gift.php" style="text-decoration: none">COUPONS</a></li>
         
          <div class="sign">
            <li><a href="logout.php" style="text-decoration: none">LOGOUT</a></li>
         </div>
         </ul>
        </div>
    </nav>
  </header>
	<h1> - ANDAMAN - </h1>
	<div class="row">
		<div class="column">
	<div id="myNav" class="overlay">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<div class="overlay-content">
			<h6>LOCAL DIALECTS</h6>
				<p>Languages spoken : Hindi, English, Bengali</p>
				<p>Must try Food : <p>1.Fish Curry</p>
				                   <p>2.Amritsari Kulcha</p>
                                   <p>3.Chilli Curry</p>
                                   <p>4.Macher Jhol</p>
                                   <p>5.Coconut Prawn Curry</p>
                                   <p>6.Tandoori Fish</p>
                                   <p>7.Grilled Lobsters</p>
                                   <p>8.Barbeques</p>
                </p>
				<p>Major Religions : Hindu, Christian</p>
				<p>Seasons : Summer(April to June), Monsoon(July to September), Winter(October to March)</p>
				<p>Currency : Indian Rupee</p>
		</div>
    </div>
   <!-- <span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; LOCAL DIALECTS</span>--><span onclick="openNav()"><button> LOCAL DIALECTS </button></span>
    <script>
    	function openNav() {
    		document.getElementById("myNav").style.width = "50%";
    	}
    	function closeNav() {
    		document.getElementById("myNav").style.width = "0%";
        }
    </script>
</div>
<div class="column">
	<div class="modal-modal">
		<button id="myBtn"> ACCOMODATION </button>
		<div id="myModal" class="modal" style="overflow: scroll;">
			<div class="modal-content">
				<span class="close">&times;</span>
				<p><h1> - TOP 3 HOTELS IN ANDAMAN - </h1></p>
				<p><a href="https://www.makemytrip.com/hotels/hotel_dev_haweli-details-port_blair.html"><h2> 1. HOTEL DEV HAWELI </h2></a></p>
				<p>
					<img src="IMAGES\dev1.jpg">
			        <img src="IMAGES\dev2.jpg">
			        <img src="IMAGES\dev3.jpg">
			        <img src="IMAGES\dev4.jpg">
			        <img src="IMAGES\dev5.jpg">
			        <img src="IMAGES\dev6.jpg">
			    </p>
			    <p><a href="https://www.barefoot-andaman.com/"><h2> 2. The Barefoot At Havelock </h2></a></p>
			    <p>
			    	<img src="IMAGES\bare1.jpg">
			        <img src="IMAGES\bare2.jpg">
			        <img src="IMAGES\bare3.jpg">
			        <img src="IMAGES\bare.jpg">
			        <img src="IMAGES\bare5.jpg">
			        <img src="IMAGES\bare6.jpg">
			    </p>
			    <p><a href="http://www.havelockcountryhomes.com/"><h2> 3. Havelock Country Homes </h2></a></p>
			    <p>
			    	<img src="IMAGES\have1.jpg">
			        <img src="IMAGES\have2.jpg">
			        <img src="IMAGES\have3.jpg">
			        <img src="IMAGES\have4.jpg">
			        <img src="IMAGES\have5.jpg">
			        <img src="IMAGES\have6.jpg">
			    </p>
			</div>
			<script>
				var modal = document.getElementById("myModal");
				var btn = document.getElementById("myBtn");
				var span = document.getElementsByClassName("close")[0];
				btn.onclick = function() {
					modal.style.display = "block";
				}
				span.onclick = function() {
					modal.style.display = "none";
				}
				window.onclick = function(event) {
					if (event.target == modal) {
						modal.style.display = "none";
					}
				}
				</script>
		</div>
	</div>
</div>
<div class="column">
	<a href="https://www.yatra.com/"><button > FLIGHTS </button></a>
</div>
<div class="column">
	<a href="https://www.google.com/maps?q=andaman+and+nicobar&rlz=1C1PRFI_enIN905IN905&um=1&ie=UTF-8&sa=X&ved=2ahUKEwiCudjEmdXqAhUZWX0KHfuxAK0Q_AUoAXoECB8QAw"><button > MAP </button></a>
</div>
</div>
	<div id="slider">
		<div id="sliderbox">
			<img src="IMAGES/anda1.jpg">
			<img src="IMAGES/anda2.jpg">
			<img src="IMAGES/anda3.jpg">
		</div>
	</div>
	<div>
		<section class="right">
			<div class="box">
				<ul>
					<li><h3>Best time to visit : October to May</h3></li>
				    <li><h3>Mainly Famous for : Beaches, Marine wildlife, Sea adventures</h3></li>
				    <li><h3>Days to travel : 6</h3></li>
				</ul>
			</div>
			<h2>PLACES TO SEE AROUND ANDAMAN</h2>
			<p style="color: #057D31">__________________________________________________________________________________________________________________________</p>
		    <h3>ANDAMAN AND NICOBAR ISLANDS</h3>
		    <p>The Andaman Islands are an Indian archipelago in the Bay of Bengal. These roughly 300 islands are known for their palm-lined, white-sand beaches, mangroves and tropical rainforests. Coral reefs supporting marine life such as sharks and rays make for popular diving and snorkeling sites. Indigenous Andaman Islanders inhabit the more remote islands, many of which are off limits to visitors</p>
		    <h3>BARATANG</h3>
		    <p>Baratang Island is an island of the Andaman Islands. It belongs to the North and Middle Andaman administrative district, part of the Indian union territory of Andaman and Nicobar Islands. The island lies 150 km north of Port Blair.</p>
		    <h3>HAVELOCK</h3>
		    <p>It is one of the very famous beaches in the place. If you love scuba diving, you ought to visit this place. There are spots for professional divers to enjoy and there are numerous places where training for amateur divers is provided. Certification courses are also available. This place has a rich coral forest and the most wonderful underwater life. If you love underwater photography, this place is a paradise for you.</p>
		    <h3>ROSS AND SMITH BEACH</h3>
		    <p>A little away from Diglipur Jetty lies a serene and small island, Ross and Smith. The beach is famous for a greenish blue tinted water body, small strip of beach and most importantly, the shallow water. This shallow water allows many underwater activities. Spotting tropical fishes underwater is very common in this region. This is a haven for those who want a leisure and lazy afternoon.</p>
		    <h3>NEIL ISLAND</h3>
		    <p>Though the beach is aesthetically pleasing, the beach is rarely filled with tourists. This is due to the proximity of the more famous Bharatpur beach. The Laxmanpur beach is larger and longer than Bharatpur beach and thus, this silent beach has become a haven for honeymooners. You can always find couples picnicking here. If you are on a romantic vacation, you ought to visit this beach. Not many water activities are available in this beach area.</p>
		    <h3>LALAJI BAY BEACH</h3>
		    <p>Although the island is named as Long Island, this beach in particular is very small and can be scaled on foot. The top activities to enjoy here are focused on the shallow waters in this region. Riding on a ferry to reach this place is the best activity for those who are traveling with children. The place is also famous for lush vegetation. There are a few restaurants near the beach, which allow tourists to enjoy long picnics here.</p>
		    <h3>PORT BLAIR</h3>
		    <p>Wandoor is a small village located near the southern point of the South Andaman. This village is filled with accommodation options and is famous for the beach and small islands near the beach. The main attraction in the beach is the national park. From the national park, you can get access to nearby islands. Boat can be hired here. Forest permits for forest walks and strolling are also available in the park. Jolly Bouy is a small island near the beach, which is famous for sponge corals, red corals, blue corals and many tropical species. You can find many zebra fishes here where snorkeling. Snorkeling near Red Skin Island is also very famous activity. If you are not a fan of snorkeling, you can hire a glass-bottomed boat to watch the corals and fishes and you row.</p>
		    <h3>CELLULAR JAIL</h3>
		    <p>Andaman was a dreadful jail spot during British rule. Freedom fighters were sent to Andaman jail during the struggle. Today, it stands as a heritage spot and as a reminder of the independence struggle. The spot is open from morning 9 to evening 5. English and Hindi based light and sound shows are organized for the tourists to educate about the struggle and the history of the place. The jail is closed during Mondays and all government holidays.</p>
		    <h3>MOUNT HARRIET</h3>
		    <p>The first main attraction in Mount Harriet is the national park. Elephant safari through the park is an important attraction here. Top animals to spot here are Asian elephants, deer, ferals and others. This place is best for birdwatching. Top birds to spot are Andaman wood pigeon, Andaman scops owl, Andaman drongo, white headed starling, Andaman treepie, Andaman boobook and others. Other common fauna are field frog, turtles, lizards and others. Top aquatic fauna are eel, snakehead, sleeper, gobies and others.</p>
		    <h3>NORTH BAY BEACH</h3>
		    <p>Many island cruise trips cover this beach. This beach is very famous among tourists and during tourism season, the crowd is inevitable. The snorkeling, sea walk and others will be closed to tourists during rainy season. Boating in a glass-bottomed boat is recommended during winter season to spot the corals. It takes four hours to scale the whole island and enjoy all activities. Hindi guides are available in the island. There is always boat facilities available from and to Port Blair. Trekking to the lighthouse in the island and jungle trekking are famous land activities here.</p>
		   
		    <h3>AAMKUNJ BEACH</h3>
		    <p>Jetty ride from Cutbert Bay to the beach is the first attraction to enjoy. The eco-park in the beach provides a great experience to the tourists. It is a vast beach with dark sand. It is a shallow water beach and thus, snorkeling and swimming are very common here. There is a tree house in the eco-park that attracts people to get a panoramic view of the whole beach. If you visit during the right season (December and January), you can spot turtles walking towards the water after hatching.</p>
		    <h3>VIPER ISLAND</h3>
		    <p>Cellular jail of Andaman is located in this island. Apart from this, this island’s beach are very famous for ferry rides and picnicking. If you are an adventure seeker, there are a lot of ancient building that are rumored to be haunted. You can explore those, if desired.</p>
		</section>
		<section class="left">
			<p><img src="IMAGES/anda4.jpg"></p>
		    <p><img src="IMAGES/anda5.jpg"></p>
		    <p><img src="IMAGES/anda6.jpg"></p>
		    <p><img src="IMAGES/anda7.jpg"></p>
		    <p><img src="IMAGES/anda8.jpg"></p>
		    <p><img src="IMAGES/anda9.jpg"></p>
		</section>
	</div>
	<footer class="footer" class="container" style="margin-top: 2000px;">
		<div class="frow">
			<div class="fcol">
				<img src="images/logo.jpg">
			</div>
			<div class="fcol">
				<h3>Why Wanderscape?</h3>
				<p>This page was created as a project for Internship with Apsit Skills. It is a travel page which helps you to choose places you wish to visit.</p>
			</div>
			<div class="fcol">
				<ul>
					<li> <a href="dashboard.php" style="text-decoration: none;">Home</a></li>
					<li> <a href="contact.html" style="text-decoration: none;">Contact us</a></li>
                    <li> <a href="about.html" style="text-decoration: none;">About us</a></li>
                </ul>
            </div>
            <div class="fcol">
            	<h3> Address : </h3>
            	<p> ABC, MUMBAI,MAHARASHTRA.</p>
            </div>
        </div>
    </footer>
	
</body>
</html>