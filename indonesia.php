<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="EN">
<head>
	<meta charset="utf-8">
	<title> Indonesia -Wanderscape</title>
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
	<h1> - INDONESIA - </h1>
	<div class="row">
		<div class="column">
	<div id="myNav" class="overlay">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<div class="overlay-content">
			<h6>LOCAL DIALECTS</h6>
				<p>Languages spoken : Indonesian</p>
				<p>Must try Food : <p>1.NASI GORENG: Indonesian fried rice</p>
				                   <p>2.NASI CAMPUR: the National dish</p>
                                   <p>3.CHICKEN SATAY: barbecued yumminess</p>
                                   <p>4.A ROYAL RIJSTTAFEL MEAL: influenced by the Dutch</p>
                                   <p>5.BABI GULING: a suckling pig roast</p>
                                   <p>6.GADO GADO: the Indonesian mega salad!</p>
                                   <p>7.TEMPEH KECAP: fried fermented soyabeans</p>
                                   <p>8.SAYUR URAP: coconut Javanese salad</p>
                </p>
				<p>Major Religions : Islam</p>
				<p>Seasons : Dry season (April to October) and Monsoon season (November to March) </p>
				<p>Currency : Indonesian rupiah</p>
		</div>
    </div>
    <span onclick="openNav()"> <button>LOCAL DIALECTS</button></span>
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
		<div id="myModal" class="modal"style="overflow: scroll;">
			<div class="modal-content"  >
				<span class="close">&times;</span>
				<p><h1> - TOP 3 HOTELS IN INDONESIA - </h1></p>
				<p><a href="https://www.marriott.com/hotels/travel/dpsuw-renaissance-bali-uluwatu-resort-and-spa/"><h2> 1.Renaissance Bali Uluwatu Resort & Spa </h2></a></p>
				<p>
					<img src="IMAGES\rena1.jpg">
			        <img src="IMAGES\rena2.jpg">
			        <img src="IMAGES\rena3.jpg">
			        <img src="IMAGES\rena4.jpg">
			        <img src="IMAGES\rena5.jpg">
			        <img src="IMAGES\rena6.jpg">
			    </p>
			    <p><a href="https://galleryprawirotamanhotel.com/"><h2> 2. Gallery Prawirotaman Hotel </h2></a></p>
			    <p>
			    	<img src="IMAGES\gal6.jpg">
			        <img src="IMAGES\gal4.jpg">
			        <img src="IMAGES\gal1.jpg">
			        <img src="IMAGES\gal2.jpg">
			        <img src="IMAGES\gal5.jpg">
			        <img src="IMAGES\gal3.jpg">
			    </p>
			    <p><a href="https://www.marriott.com/hotels/travel/mesmc-jw-marriott-hotel-medan/"><h2> 3.JW Marriott Hotel Medan </h2></a></p>
			    <p>
			    	<img src="IMAGES\jw1.jpg">
			        <img src="IMAGES\jw2.jpg">
			        <img src="IMAGES\jw3.jpg">
			        <img src="IMAGES\jw4.jpg">
			        <img src="IMAGES\jw5.jpg">
			        <img src="IMAGES\jw6.jpg">
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
	<a href="https://www.yatra.com/"><button>FLIGHTS</button></a>
</div>
<div class="column">
	<a href="https://www.google.co.in/maps/place/Indonesia/@-2.9837357,120.6384308,8.21z/data=!4m5!3m4!1s0x2c4c07d7496404b7:0xe37b4de71badf485!8m2!3d-0.789275!4d113.921327"><button>MAPS</button></a>
</div>
</div>
	<div id="slider">
		<div id="sliderbox">
			<img src="IMAGES/indo3.jpg">
			<img src="IMAGES/indo2.jpg">
			<img src="IMAGES/indo1.jpg">
		</div>
	</div>
	<div>
		<section class="right">
			<div class="box">
				<ul>
					<li><h3>Best time to visit : May to September</h3></li>
				    <li><h3>Mainly Famous for : Beaches and Wildlife</h3></li>
				    <li><h3>Days to travel : 5 days</h3></li>
				</ul>
			</div>
			<h2>PLACES TO SEE AROUND INDONESIA</h2>
			<p style="color: #057D31">__________________________________________________________________________________________________________________________</p>
		    <h3>INDONESIA</h3>
		    <p>Indonesia is a kaleidoscope of taste, sight, sound, and smells bottled up in the world’s largest archipelago. Spread out over a mind-boggling 17,000 islands, the country offers a vast melange of experiences begging to be sampled by visitors from across the world. Ranging from the smouldering volcanoes of central Java to the verdant expanses of Bali’s rice terraces, from Jakarta’s sprawling luxury malls to the untouched marine biosphere of Rajah Ampat and the lush rainforests of Borneo, Indonesia is ripe for adventure for the eager tourist. Coupled with the exceedingly friendly local population, Indonesia is quickly becoming one of the world’s favourite tourist destinations.</p>
		    <h3>BALI</h3>
		    <p>Bali, Indonesia’s most famous island, is located to the west of Java in the Lesser Sunda Islands. It is world-renowned for its scenic rice terraces, fragrant cuisine, stunning beaches and a galore of culture and tradition. With its elaborate temples, endless coastline, some of the world’s best coral reefs, waterfalls and retreats, Bali combines leisure and adventure impeccably. A dizzying combination of spiritual awakening and hard-partying all into one,  Bali is where people from all over the world come to lose themselves in.</p>
		    <h3>ULU WATU</h3>
		    <p>Situated at the south-western tip of Bukit in Bali, Uluwatu attracts surfers of all levels from around the world to its exciting shoreline. The waves are composed of five world-class surf breaks, and the hotels and restaurants overlooking the Indian ocean provide a magnificent view. The Pura Luru Uluwatu temple is another important attraction in this area. Situated at the south-western tip of Bukit in Bali, the short strip of beach called Uluwatu attracts surfers of all levels from around the world to its exciting shoreline. Uluwatu comes from the words “ulu” meaning ‘land’s end’ and “watu” meaning rock. The waves here are composed of five world-class surf breaks, and the hotels and restaurants overlooking the Indian Ocean provide a magnificent view.</p>
		    <h3>TANAH LOT</h3>
		    <p>Located on a beautiful offshore rock in Tabanan regency, Bali, Tanah Lot or ‘Land on the Sea’ is a Hindu shrine believed to be about 500 years old. An amalgamation of Balinese and Hindu mythology, the base of the temple is carved with sea snakes and offers a natural source of holy water, providing visitors with an aesthetic and spiritual experience unlike any other. The Tanah Lot temple can be found some 300 metres (over 980 feet) off the island shore. It is one of seven temples along the Bali coast. In fact, from this beautiful rock temple, you can see the Pura Ulu Watu temple site on the cliffs to the south, and a long sweep of azure waters to the west, near Negara.</p>
		    <h3>KUTA BEACH</h3>
		    <p>Kuta beach heralded the era of tourism in Bali. A few minutes away from the Bali airport, Kuta attracts hundreds of visitors to its golden sands and surf waves making it one of the busiest and liveliest beaches the country has to offer. A plethora of cheap options for accommodation, food and beach clubs make this ideal for young travellers seeking a fun beach holiday.</p>
		    <h3>UBUD PALACE</h3>
		    <p>An itinerary to Bali is incomplete without a stopover at Ubud Palace, located right on the main Jalan Raya Ubud road. Built in the 19th century by the ruler Ida Tjokorda Putu Kandel, the palace’s front section with its gardens and carvings is a visual delight, while international events on art, music and literature are held inside, making this place a cultural repository of Ubud.</p>
		    <h3>NUNGNUNG WATERFALL</h3>
		    <p>Between Bedugul and Ubud lies Air Terjun Nungnung, a beautiful waterfall to refresh your senses. Located about 900m above sea level,the waterfall is surrounded by lush greenery and is a great spot for nature-lovers. However, the water is a little rough for swimming, and the 500-step pathway to access it can prove to be quite the exercise. Crashing from a height of 50m the waterfall makes for a powerful yet, endearing sight. Surrounded by beautiful rocky and green landscapes the Nungnung Waterfall interestingly is also devoid of large crowds. The flight of around 500 steps that takes one to the waterfall is one of the main reasons why the Nungnung Waterfall is relatively less crowded.</p>
		    <h3>SEMINYAK BEACH</h3>
		    <p>Also called the ‘Spa and boutique shopping capital of Bali’, Seminyak beach offers a more upscale experience than its immediate neighbours Kuta and Legian. With a quiet and laid-back atmosphere, this beach has some of the best fine-dining restaurants in Bali in addition to the luxury resorts and villas, making your stay here absolutely pleasurable. Seminyak Beach is one of the poshest and stylish beaches in Bali. This beach is extremely clean and prices to be a great retreat. This beach is visited by a large number of people who come here to relax and enjoy. The white sandy terrain, shimmering blue water and verdant palm trees make the beach look serene and picturesque. The beauty of this beach during the sunset when the sky is filled with myriad shades of colours is inexpressible.</p>
		    <h3>YOGYAKARTA</h3>
		    <p>Located in Central Java, Yogyakarta, or Jogjakarta, is one of Indonesia’s most important cultural, intellectual, and literary hubs, and is the beating heart of Indonesian tradition. A short flight away from the capital Jakarta, Jogja or Yogya, as it is often abbreviated to, is easily accessible from other major tourist destinations around the region such as Bali or Singapore. Bounded by the Indian Ocean to its south, and the fiery active volcano Mount Merapi to the north, Yogyakarta is also home to Indonesia’s largest Hindu temple compound, Prambanan. Its close proximity to the world’s largest Buddhist temple, Borobudur, also underscores its nature as a multicultural mecca, as Jogja is a predominantly Muslim community.</p>
		    <h3>BOROBUDUR</h3>
		    <p>The Borobudur Temple complex is the largest Buddhist temple in the world and is a UNESCO World Heritage Site. One of the most visited attractions in Indonesia, it was built in the 8th-Century. A marvel of Buddhist architecture, with multiple platforms stacked on each other, the temple is capped off with a magnificent dome peering down on top of them. The temple is also adorned with hundreds of relief panels and statues of the Buddha in multiple meditative postures, most of which are still intact today. The temple itself is located just 45 minutes away from the thriving metropolis of Yogyakarta.</p>
		    <h3>JOMBLANG CAVES</h3>
		    <p>The Jomblang Caves are a part of a cave system that reaches the whole of Gunung Kidul. The cave had formed around a thousand years ago when the soil and vegetation had collapsed under the surface of the earth. It had created a sinkhole that was roughly 50 m wide and up to 80 m deep. Over the thousand years, supported by the ‘Heavenly Rays,’ which is a daily 3-hour window of sunlight that enters the cave, helped an incredible underground forest take root.</p>
		    <h3>MERAPI VOLCANO</h3>
		    <p>Mount Merapi, also known as Gunung Merapi is an active volcano situated on the periphery of the Central Java and Yogyakarta territories, Indonesia. It literally translates to to Fire Mountain in Javanese, In fact, it most recently erupted in 2018 and can still be seen spewing ash and smoke at periodic intervals.</p>
		    <h3>WAYANG KULIT</h3>
		    <p>Wayang Kulit is a form of traditional performance art, native to Javanese, Balinese and Lombok cultures in South-East Asia. It is quite a stunner of a puppet show, where carved leather figures are played against light to cast shadows from on a taut linen screen. It has been around for centuries and this much-loved artform is now spreading out from Indonesia to the rest of Asia.</p>
		    <h3>JAKARTA</h3>
		    <p>Indonesia’s capital city, Jakarta is also the nation’s cultural, economic and political centre. Amble leisurely through Kota Baru, or Jakarta’s Old Town, where colonial Dutch architecture remains preserved as they stood during the times before Indonesia’s independence. Take in the heady sights and smells of Glodok, Jakarta’s historic Chinatown area, before heading towards central Jakarta to marvel at MONAS, Indonesia’s National Monument to its freedom struggle.</p>
		    <h3>National Monument Of Indonesia(MONAS)</h3>
		    <p>The largest national museum in South East Asia, Monumen Nasional or National Monument of Indonesia is massive tower located at the center of Merdeka Square. It will take you through the evolution of Indonesia’s culture since its pre-historic times, with many artefacts from each era. The outer yard houses reliefs from the Japanese occupation during World War II and the Proclamation of Independence in 1945.</p>
		    <h3>MESJID ISTIQLAL</h3>
		    <p>Mesjid Istiqlal is a famous mosque in Jakarta. The mosque is so huge that it can accommodate as many as 120,000 people making it the biggest mosque in South East Asia. The mosque is an architectural delight, and resonates peace when one goes inside. It serves as the praying place for the muslims of the country but it is visited by everyone from all walks of life.</p>
		    
		    <h2>THINGS TO DO IN INDONESIA</h2>
			<p style="color: #057D31">__________________________________________________________________________________________________________________________</p>
			<h3>SCUBA DIVING</h3>
			<p>When you think of the prospect of scuba diving in Bali, exploring the majesty under the sea, drinking in the sheer exhilaration, Bali is one of the first places that come to mind. And rightfully so! With an abundance of beaches offering spectacular views and plenty of friendly ocean creatures, you’re bound to have a fantastic time here. But when there’s so much to offer, how are you supposed to choose? Worry not, for we’ve rounded up the best locations and all additional information to go scuba diving in Bali!</p>
			<h3>BALI SAFARI AND NATIONAL PARK</h3>
			<p>The Safari and Marine Park in Gianyar is one of the finest wildlife sanctuaries in Bali. Home to more than 100 animal species the Safari and Marine Park is a complete outdoor package. Wildlife from Indian, African and Indonesian national parks find their place here and can be viewed from the comfort of the safari rides. The Safari and Marine Park is also a leading conversation hub and shelters endangered species, such as the Komodo Dragon and Bali Mynah bird. With luxury stays within the park, water amusement activities, cultural centres and the night safaris, the Safari and Marine Park is a must-visit for wildlife enthusiasts.</p>
		</section>
		<section class="left">
			<p><img src="IMAGES/indo4.jpg"></p>
		    <p><img src="IMAGES/indo5.jpg"></p>
		    <p><img src="IMAGES/indo6.jpg"></p>
		    <p><img src="IMAGES/indo7.jpg"></p>
		    <p><img src="IMAGES/indo8.jpg"></p>
		    <p><img src="IMAGES/indo9.jpg"></p>
		</section>
	</div>
	<footer class="footer" class="container">
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
					<li> <a href="contact.php" style="text-decoration: none;">Contact us</a></li>
                    <li> <a href="about.php" style="text-decoration: none;">About us</a></li>
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
