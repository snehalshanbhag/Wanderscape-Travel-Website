<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="EN">
<head>
	<meta charset="utf-8">
	<title> Maldives-Wanderscape</title>
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
	<h1> - MALDIVES - </h1>
	<div class="row">
		<div class="column">
	<div id="myNav" class="overlay">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<div class="overlay-content">
			<h6>LOCAL DIALECTS</h6>
				<p>Languages spoken : Dhivehi, Mulaku, Huvadhu, Maliku, etc.</p>
				<p>Must try Food : <p>1.Bis kheemiya</p>
				                   <p>2.Boshi mashuni</p>
                                   <p>3.Garudhiya</p>
                                   <p>4.Huni roshi</p>
                                   <p>5.Saagu bondibai</p>
                </p>
				<p>Major Religions : Islam</p>
				<p>Seasons : Dry season(May to december) and wet season(January to April)</p>
				<p>Currency : Maldivian rufiyaa</p>
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
		<div id="myModal" class="modal" style="overflow: scroll">
			<div class="modal-content">
				<span class="close">&times;</span>
				<p><h1> - TOP 3 HOTELS IN MALDIVES - </h1></p>
				<p><a href="http://www.samanngrand.com/"><h2> 1. Samann Grand </h2></a></p>
				<p>
					<img src="IMAGES\sam1.jpg">
			        <img src="IMAGES\sam2.jpg">
			        <img src="IMAGES\sam3.jpg">
			        <img src="IMAGES\sam4.jpg">
			        <img src="IMAGES\sam5.jpg">
			        <img src="IMAGES\sam6.jpg">
			    </p>
			    <p><a href="https://www.somersetinn.com/"><h2> 2. Somerset Inn </h2></a></p>
			    <p>
			    	<img src="IMAGES\som1.jpg">
			        <img src="IMAGES\som2.jpg">
			        <img src="IMAGES\som3.jpg">
			        <img src="IMAGES\som4.jpg">
			        <img src="IMAGES\som5.jpg">
			        <img src="IMAGES\som6.jpg">
			    </p>
			    <p><a href="https://maagirihotel.com/"><h2> 3. Maagiri Hotel </h2></a></p>
			    <p>
			    	<img src="IMAGES\maa1.jpg">
			        <img src="IMAGES\maa2.jpg">
			        <img src="IMAGES\maa3.jpg">
			        <img src="IMAGES\maa4.jpg">
			        <img src="IMAGES\maa5.jpg">
			        <img src="IMAGES\maa6.jpg">
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
	<a href="https://www.google.com/maps?rlz=1C1PRFI_enIN905IN905&q=maldives&gs_lcp=CgZwc3ktYWIQAzIHCAAQsQMQQzIFCAAQkQIyBwgAELEDEEMyBwgAELEDEEMyBAgAEEMyBAgAEEMyBwgAELEDEEMyBAgAEEMyBggAEAcQHjIGCAAQBxAeULTvAVi07wFg8_MBaABwAHgAgAHfAYgB3wGSAQMyLTGYAQCgAQGqAQdnd3Mtd2l6&uact=5&um=1&ie=UTF-8&sa=X&ved=2ahUKEwjpz5atl9bqAhX0zTgGHUVsCM0Q_AUoAXoECCAQAw"><button > MAP </button></a>
</div>
</div>
	<div id="slider">
		<div id="sliderbox">
			<img src="IMAGES/mald3.jpg">
			<img src="IMAGES/mald2.jpg">
			<img src="IMAGES/mald1.jpg">
		</div>
	</div>
	<div>
		<section class="right">
			<div class="box">
				<ul>
					<li><h3>Best time to visit : November to April</h3></li>
				    <li><h3>Mainly Famous for : Natural environment</h3></li>
				    <li><h3>Days to travel : 5</h3></li>
				</ul>
			</div>
			<h2>PLACES TO SEE AROUND MALDIVES</h2>
			<p style="color: #057D31">__________________________________________________________________________________________________________________________</p>
		    <h3>MALDIVES</h3>
		    <p>The Maldives, a tropical haven of immaculate beaches located in the Indian Ocean south of Sri Lanka, is an archipelago of 1,192 coral islands grouped into natural atolls, out of which only a few are inhabited. Time stands still in the Maldives as you lie on the white sand beaches, hearing the crystal clear waves crash against the seashore, swim with the manta rays and reef sharks and feast on a wide array of fishes with the locals. The Maldives is ideal for an adventure, honeymoon or leisure holiday.</p>
		    <h3>MALE</h3>
		    <p>One of the world’s smallest national capital, Male is known for its ancient mosque and colourful buildings. With its beauty and progressiveness being talked about the island today has grown into one of the most visited places in the Maldives. It is a casual town best for wandering without pre-planned itineraries. With heritage buildings on the one hand and trees and waters with welcoming shades on the other, Male is a must-visit.</p>
		    
		    <h3>ARTIFICIAL BEACH</h3>
		    <p>Artificial Beach, Male is one of the most beautiful and only human-made beach in the Maldives and for a good reason. With breathtaking views and a pleasant climate, this beach, shaped like a crescent, has earned its spot as one of the most popular and liked tourist destinations. At first glance, the beach does not appear to be an artificial one at all. In fact, even though the water is not as deep as is on the natural beaches, it is a famed swimming spot for the locals and visitors alike.</p>
		    <h3>NATIONAL MUSEUM</h3>
		    <p>The National Museum of Maldives is an ancient building containing a well-maintained collection of artefacts that help in tracing unusual historical events of this archipelago. It aims at instilling patriotic feelings in the citizens of Maldives. The museum has a massive assemblage of royal antiquities ranging from the Buddhist and Islamic era making it a paradise for the lovers of history and crafts.</p>
		    <h3>MAAFUSHI ISLAND</h3>
		    <p>It is not until one steps into the beautiful Maafushi Island in the Maldives does one know how it feels like to stay in a slice of paradise on earth. Maafushi is one of those local Maldivian islands where people go to rejuvenate their fatigued souls and bask in the tranquillity that envelopes this tourist destination. The sudden change of pace from the hectic hustle of the city to the utter sense of serenity is something that is sure to soothe the anxious nerves and help people relax.</p>
		    <h3>DOLPHIN AND WHALE WATCHING WITH SUNSET CRUISES</h3>
		    <p>A relatively more relaxed activity for the leisure lovers, Maldives is ideal for observing these spectacular creatures over the day and soak in the vivid hues while watching the sunset. The Maldives is home to a wide array of species of both dolphins and whales. The consistent tropical climate, moderate sea currents and clear oceans make the Maldives one of the best places for dolphin and whale watching.</p>
		    <h3>GRAND FRIDAY MOSQUE</h3>
		    <p>The Grand Friday Mosque in Male is one attraction that, with its towering golden dome, gathers the attention of all visitors. The mosque is part of the Islamic Centre which is at the Male’s centre and is located right next to the main jetty of Male, thus making it easy to spot, even from the sea.</p>
		    <h3>VAADHOO ISLAND</h3>
		    <p>Raa Atoll is one of the famous atolls in the Maldives, housing some of the best resorts and bucket list worthy sites. One of the islands that form a part of this atoll is the Vaadhoo Island. This spectacular island may have roughly 500 inhabitants but the natural phenomenon occurring here – known as Sea of Stars – is one that captures the attention of people all around the world and leads them straight to the shores of Vaadhoo which delightfully serves them with one of the most memorable sights.</p>
		    <h3>BODUBERU SHOW</h3>
		    <p>The Boduberu is a music form that was founded in Maldives as early as the 11th century. The “music of Maldives”, Boduberu’s art has been passed on from generation to generation to retain the culture of Maldives, of which the music forms a large part. Boduberu is often called and commonly known by the locals as Baburu Lava and is almost always accompanied by dancing and clapping of the hands. The unique dance form is one of the few things individuals must see for themselves to understand the island nation’s heritage and have a truly wholesome experience of the Maldives.</p>
		    <h3>SULTAN PARK</h3>
		    <p>Built beside the demolished Royal Palace in Maldives’ capital city Male, Sultan Park, also known as the Rasrani Bageecha, is a public park formed after transforming the palace’s royal gardens. The giant iron gate at the entrance of the park is the only piece that speaks of the palace’s former glory.</p>
		    <h3>LANDHOO</h3>
		    <p>Having the largest Mangrove vegetation, Landhoo island finds itself on the Southern Miladhunmadulhu Atoll. It is yet another island which boasts of being a centre of Buddhist History in the Maldives. Landhoo Island is a blend of interesting stories and a bundle full of cultural knowledge.</p>
		    <h3>THODDOO BUDDHIST TEMPLE</h3>
		    <p>This place again lays evidence of Buddhism as a culture that once flourished in the Maldives. The site was discovered recently in the 1950s, and retains ruins of Buddhist artefacts. Presently the area holds temple wrecks, roman coins and some silver relics from the ancient times. A Buddhist statue buried in the nearby area is a clear hint that Buddhism was practised long back in the country. The area has become a significant tourist spot and highlights essential details about the religious history of the country.</p>
		    <h3>BAROS ISLAND</h3>
		    <p>A small Island close to Male, set in a jade green stretch of palms trees. The Baros Island resort is created from sandstone and timber and is bundled amidst the exotic flora laid discreetly near a translucent bay. Bask in a perfect romantic getaway in the heart of Baros that redines the experience of Maldives.</p>
		</section>
		<section class="left">
			<p><img src="IMAGES/mald4.jpg"></p>
		    <p><img src="IMAGES/mald5.jpg"></p>
		    <p><img src="IMAGES/mald6.jpg"></p>
		    <p><img src="IMAGES/mald7.jpg"></p>
		    <p><img src="IMAGES/mald8.jpg"></p>
		    <p><img src="IMAGES/mald9.jpg"></p>
		</section>
	</div>
	<footer class="footer" class="container" style="margin-top: 2100px">
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