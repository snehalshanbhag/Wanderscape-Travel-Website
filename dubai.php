<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="EN">
<head>
	<meta charset="utf-8">
	<title> Dubai-Wanderscape</title>
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
	<h1> - DUBAI - </h1>
	<div class="row">
		<div class="column">
	<div id="myNav" class="overlay">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<div class="overlay-content">
			<h6>LOCAL DIALECTS</h6>
				<p>Languages spoken : English, Arabic</p>
				<p>Must try Food : <p>1.Manousheh</p>
				                   <p>2.Iranian Sangak</p>
                                   <p>3.Chelo kebabs</p>
                                   <p>4.Al Harees</p>
                                   <p>5.Al Machboos</p>
                                   <p>6.Mandi</p>
                                   <p>7.OOzie</p>
                </p>
				<p>Major Religions : Islam</p>
				<p>Seasons : Summer and Winter</p>
				<p>Currency : Dirhams</p>
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
				<p><h1> - TOP 3 HOTELS IN DUBAI - </h1></p>
				<p><a href="https://maisanhotel.ae/"><h2> 1. Maisan Hotel </h2></a></p>
				<p>
					<img src="IMAGES\mai1.jpg">
			        <img src="IMAGES\mai2.jpg">
			        <img src="IMAGES\mai3.jpg">
			        <img src="IMAGES\mai4.jpg">
			        <img src="IMAGES\mai5.jpg">
			        <img src="IMAGES\mai6.jpg">
			    </p>
			    <p><a href="https://holiday-inn-dubai-festival-city.hotels-in-dubai.org/en/"><h2> 2. Holiday Inn - Dubai Festival City </h2></a></p>
			    <p>
			    	<img src="IMAGES\fes1.jpg">
			        <img src="IMAGES\fes2.jpg">
			        <img src="IMAGES\fes3.jpg">
			        <img src="IMAGES\fes4.jpg">
			        <img src="IMAGES\fes5.jpg">
			        <img src="IMAGES\fes6.jpg">
			    </p>
			    <p><a href="https://www.rovehotels.com/hotel/rove-dubai-marina/"><h2> 3. Rove Dubai Marina </h2></a></p>
			    <p>
			    	<img src="IMAGES\ro1.jpg">
			        <img src="IMAGES\ro2.jpg">
			        <img src="IMAGES\ro3.jpg">
			        <img src="IMAGES\ro4.jpg">
			        <img src="IMAGES\ro5.jpg">
			        <img src="IMAGES\ro6.jpg">
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
	<a href="https://www.google.com/maps?rlz=1C1PRFI_enIN905IN905&q=dubai&gs_lcp=CgZwc3ktYWIQAzIHCAAQsQMQQzIECAAQQzIHCAAQsQMQQzIECAAQQzIECAAQQzIHCAAQsQMQQzIECAAQQzIECAAQQzIHCAAQsQMQQzIECAAQQzoICAAQ6gIQjwE6AggAOggIABCxAxCDAToFCAAQsQNQ8gtYkhRg2BZoAXAAeACAAa4BiAGMBpIBAzAuNZgBAKABAaoBB2d3cy13aXqwAQo&uact=5&um=1&ie=UTF-8&sa=X&ved=2ahUKEwiI24m6l9bqAhWHzDgGHYF3CwsQ_AUoAXoECCEQAw"><button > MAP </button></a>
</div>
</div>
	<div id="slider">
		<div id="sliderbox">
			<img src="IMAGES/dubai1.jpg">
			<img src="IMAGES/dubai2.jpg">
			<img src="IMAGES/dubai3.jpg">
		</div>
	</div>
	<div>
		<section class="right">
			<div class="box">
				<ul>
					<li><h3>Best time to visit : November to April</h3></li>
				    <li><h3>Mainly Famous for : Sightseeing and shopping malls</h3></li>
				    <li><h3>Days to travel : 6</h3></li>
				</ul>
			</div>
			<h2>PLACES TO SEE AROUND DUBAI</h2>
			<p style="color: #057D31">__________________________________________________________________________________________________________________________</p>
		    <h3>DUBAI</h3>
		    <p>A city of many faces, Dubai is one of the most popular tourist destinations in the world. Home to the tallest tower in the world, the Burj Khalifa, this global city is known for its lavish architecture, incredible skylines and a plethora of tourist attractions that break records to be the tallest, longest and biggest. Dubai has abundant opportunities when it comes to adventure activities like Desert Safaris through golden Arabian Dunes, Skydiving over the beautiful Palm Islands, Reef and wreck diving, kite surfing, wakeboarding, etc.</p>
		    <h3>BURJ KHALIFA</h3>
		    <p>Towering at a height of 2,700 feet, the Burj Khalifa is currently the tallest tower in the world. With two observation decks, a Las Vegas-inspired fountain, nine of the city’s best luxury hotels and multiple restaurants, this 21st-century architectural marvel must be your number one place to visit when in Dubai or even the UAE. Also, make sure to book your tickets in advance well to avoid last moment hassles.</p>
		    <h3>PALM JUMEIRAH</h3>
		    <p>Palm Jumeirah, Dubai’s magnificent artificial archipelago, is the epitome of beauty created by land reclamation, extending into the Persian Gulf. The archipelago resembles a palm tree with a circle when you take an overhead view of it. It was one of the first major tourism projects in the UAE and currently houses some of Dubai’s top tourist destinations like Atlantis, the Palm, Aquaventure Waterpark and the Lost Chambers Aquarium.</p>
		    <h3>BURJ AL ARAB</h3>
		    <p>Established in the year 1999, Burj Al Arab is one of the premium hotels of Dubai located on an artificial island off Jumeirah Road. Designed in the shape of a sail of a dhow, this iconic landmark houses an array of shiny chauffeur-driven limousines and a private helipad. Talking of luxury, the hotel features an attractive fountain, an admirable lobby and richness induced 203 suites. Standing tall at a height of 180 meters, the royalty factor of the hotel is brought out by its may interior elements adorned in real gold! A prior reservation (on its website) is required to get past the lobby security to visit its restaurant if you are not staying there.</p>
		    <h3>DUBAI AQUARIUM AND UNDERWATER ZOO</h3>
		    <p>Located on the ground floor of the Dubai Mall, the Dubai Aquarium & Underwater Zoo houses over 33,000 marine life occupying the 10 million litres of water within the tank. A unique underwater zoo occupies the level above the tank showcasing a plethora of underwater life that can be found inhabiting the oceans, rivers and other water bodies across the planet. The VR Zoo makes up the third section offering thrilling wildlife adventures via realistically created virtual tours.</p>
		    <h3>THE DUBAI MALL</h3>
		    <p>The Dubai Mall, also known as the home of the Dubai shopping festival, is one of the world’s largest shopping malls with an area of over 500,000 square meters! With more than 1200 stores, a large walk-through aquarium, a world-class ic rink, 14,000 parking spaces and more exciting experiences for shoppers, the mall was voted the best shopping experience in the world by Grazia Magazine in 2010.</p>
		    <h3>GLOBAL VILLAGE DUBAI</h3>
		    <p>Global Village Dubai is claimed to be the world’s most significant tourism, leisure and entertainment project of UAE. It is the region’s first cultural, entertainment, family and shopping destination. Every year, the place receives over 5 million visitors over an area of 17,200,000 sq ft. The compound has various pavilions that each</p>
		    <h3>MIRACLE GARDEN</h3>
		    <p>Miracle Garden is one of the most beautiful and biggest natural flower gardens in the world. Located in Dubailand, it is spread across a vast area of over 72,000 square meters, the garden is the world’s largest natural flower garden featuring over 45 million flowers and plants. The place is a heaven for those seeking nature’s beauty in the city. The garden is open only from mid-November to mid-May.</p>
		    <h3>ATLANTIS THE PALM</h3>
		    <p>With a private sandy beach and 5-star amenities, Atlantis is the first ever resort to be built on the Palm Jumeirah Island in Dubai. Offering mesmerizing views of the Arabian Gulf and being themed on the myth of Atlantis, this resort inculcates a few distinct Arabian elements. Providing unique features such as an underwater aquarium and swimming with dolphin opportunities, Palm Atlantis is surely one of the world’s most popular attraction destination for tourists.</p>
		    <h3>DESERT SAFARI</h3>
		    <p>Dubai, mainly renowned for its great infrastructure, is also known for its adventurous streak. At the heart of Dubai is still its desolated desert. And so, to enjoy the desert a bit more effectively, the city presents various Desert Safari options. The experience is one of its kind and worth every penny spent! Visitors can experience desert camping with a delicious Arabian dinner, belly dancers and other traditional performers. Day safaris hold you in for an adventure as you get to try out Dune Bashing, sandboarding, quad biking, camel rides and more.</p>
		   
		    <h3>BOLLYWOOD PARKS</h3>
		    <p>Bollywood Parks Dubai is the ‘first theme park dedicated to the B-town’ in the world! A part of Dubai Parks and Resorts, it is the perfect location to learn and experience what goes into making a Bollywood film and how the Indian movie industry works. Visitors can visit various remakes of famous Bollywood movie sets like Lagaan, have a 4D movie experience to the movie Krish, the Cinema Circle for dance workshops and more. This place has perfect photo opportunities with the beautiful Indian décor, henna artists, vintage movie posters, mannequins of stars and colourful live performances.</p>
		    <h3>FERRARI WORLD</h3>
		    <p>Ferrari World is the world’s first Ferrari ‘themed’ park offering adrenaline-pumping experiences to its visitors with its unique concepts in its rides. Apart from the thrilling rides, explore the state of the art simulators, live performances, electric go-karts and purchase some authentic Ferrari racing memorabilia.Located on Yas Island, Ferrari World is also the world’s largest indoor theme park comprising of various Ferrari themed rides and attractions.</p>
		</section>
		<section class="left">
			<p><img src="IMAGES/dubai4.jpg"></p>
		    <p><img src="IMAGES/dubai5.jpg"></p>
		    <p><img src="IMAGES/dubai6.jpg"></p>
		    <p><img src="IMAGES/dubai7.jpg"></p>
		    <p><img src="IMAGES/dubai8.jpg"></p>
		    <p><img src="IMAGES/dubai9.jpg"></p>
		</section>
	</div>
	<footer class="footer" class="container" style="margin-top:2300px;">
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