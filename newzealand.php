<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="EN">
<head>
	<meta charset="utf-8">
	<title> New Zealand-Wanderscape</title>
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
	<h1> - NEW ZEALAND - </h1>
	<div class="row">
		<div class="column">
    <div id="myNav" class="overlay">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<div class="overlay-content">
			<h6>LOCAL DIALECTS</h6>
				<p>Languages spoken : English</p>
				<p>Must try Food : <p>1.Seafood</p>
				                   <p>2.Roast lamb</p>
                                   <p>3.Māori hāngī</p>
                                   <p>4.Fish and chips</p>
                                   <p>5.Cheese and wine</p>
                                   <p>6.Barbeque</p>
                                   <p>7.New Zealand desserts</p>
                                   <p>8.New Zealand lollies (sweets and candies)</p>
                </p>
				<p>Major Religions : No religion</p>
				<p>Seasons : Spring(September-November), Summer(December-February), Autumn/ Fall(March-May)  </p>
				<p>Currency : New Zealand Dollar</p>
		</div>
    </div>
    <span  onclick="openNav()"><button> LOCAL DIALECTS</button></span>
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
				<p><h1 style="color: #7D0541"> - TOP 3 HOTELS IN NEW ZEALAND - </h1></p>
				<p><a href="https://www3.hilton.com/en/hotels/new-zealand/hilton-queenstown-resort-and-spa-ZQNHQHI/index.html"><h2> 1. Hilton Queenstown Resort & Spa</h2></a></p>
				<p>
					<img src="IMAGES\hill1.jpg">
			        <img src="IMAGES\hill6.jpg">
			        <img src="IMAGES\hill2.jpg">
			        <img src="IMAGES\hill3.jpg">
			        <img src="IMAGES\hill4.jpg">
			        <img src="IMAGES\hill5.jpg">
			    </p>
			    <p><a href="https://www.edgewater.co.nz/"><h2> 2. Edgewater Hotel- Lake Wanaka, New Zealand</h2></a></p>
			    <p>
			    	<img src="IMAGES\edge1.jpg">
			        <img src="IMAGES\edge2.jpg">
			        <img src="IMAGES\edge3.jpg">
			        <img src="IMAGES\edge4.jpg">
			        <img src="IMAGES\edge5.jpg">
			        <img src="IMAGES\edge6.jpg">
			    </p>
			    <p><a href="https://www.hilton.com/en/hotels/aklhihi-hilton-auckland/"><h2> 3. Hilton Auckland</h2></a></p>
			    <p>
			    	<img src="IMAGES\hil1.jpg">
			        <img src="IMAGES\hil2.jpg">
			        <img src="IMAGES\hil3.jpg">
			        <img src="IMAGES\hil4.jpg">
			        <img src="IMAGES\hil5.jpg">
			        <img src="IMAGES\hil6.jpg">
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
	<a href="https://www.google.co.in/maps/place/New+Zealand/@-39.3831041,157.3076839,4z/data=!3m1!4b1!4m5!3m4!1s0x6d2c200e17779687:0xb1d618e2756a4733!8m2!3d-40.900557!4d174.885971"><button>MAPS</button></a>
</div>
</div>
	<div id="slider">
		<div id="sliderbox">
			<img src="IMAGES/new1.jpg">
			<img src="IMAGES/new2.jpg">
			<img src="IMAGES/new3.jpg">
		</div>
	</div>
	<div>
		<section class="right">
			<div class="box">
				<ul>
					<li><h3>Best time to visit : October to April</h3></li>
				    <li><h3>Mainly Famous for : Scenic views</h3></li>
				    <li><h3>Days to travel : 10</h3></li>
				</ul>
			</div>
			<h2>PLACES TO SEE AROUND NEW ZEALAND</h2>
			<p style="color: #057D31">__________________________________________________________________________________________________________________________</p>
		    <h3>NEW ZEALAND</h3>
		    <p>New Zealand lies in the Pacific Ocean, to the southwest. New Zealand promises beautiful landscapes and serene, equally beautiful coastlines that you can drive along, listening to the sound of the surf. The country is also known for its adventure sports activities as well as its museums, art galleries and other heritage attractions.</p>
		    <h3>AUCKLAND</h3>
		    <p>Auckland is one of New Zealand’s oldest and most historic cities, and also its largest and most populous. It also serves as one of the most important tourist hubs of the country. Situated by 2 large harbours, this vibrant city combines natural beauty and city flamboyance, drawing in visitors for leisure and business alike all year round.</p>
		    <h3>QUEENSTOWN</h3>
		    <p>This little town in the Southern Island is not for the faint hearted! With a plethora of activities for the thrill seeker, coupled with some marvellous and picturesque attractions make Queenstown quite a memorable visit.</p>
		    <h3>ROTORUA</h3>
		    <p>Considered to be an epitome of the flourishing Maori culture, the tinsel town is set on volcanic landscape and enveloped in stunning mountain peaks, meandering streams, dense woods, mesmerizing waterfalls and several gorgeous fresh water lakes. Popularly known as a ‘geothermal wonderland’, it is home to several bubbling mud pools, steamy hot water springs, smoky white clouds and an overall breathtaking scenery. These natural hot springs are perfect for bathing and relaxing in and are the highlight of the town.</p>
		    <h3>WELLINGTON</h3>
		    <p>Known for its vibrant creative culture that is intensified by the sumptuous cuisine, delicious wine, world class craft beer and kicking coffee, Wellington is the capital city and the most populous urban town in New Zealand. Guarded by majestic mountains and snuggled between cosy hills, the city also has a flat waterfront downtown and a hooked shaped harbour to accentuate its beauty further. Other than the pleasant climate, beaches and the lively culture, the town resonates with the celebrations and festivities of several events, carnivals, festivals and fairs that are frequently held here.</p>
		    <h3>CHRISTCHURCH</h3>
		    <p>Christchurch is New Zealand’s third largest city and the largest city of the South Island. It is a hub for English culture and heritage in New Zealand, combined with some of the best gardens in the world, earning it international acclaim as the ‘Garden City’. The modern buildings of the city, blended with the Gothic architecture of remnants of the Victorian era heritage of Christchurch and the Canterbury region.</p>
		    <h3>INVERCARGILL</h3>
		    <p>Southernmost and Westernmost city of New Zealand It is one of the southernmost cities of the world. Invercargill is the commercial centre in the Southland region. This region is a rich farmland and is surrounded by conservation loand and has a lot of marine reserves.</p>
		    <h3>GISBORNE</h3>
		    <p>Largest settlement in the Gisborne district A city in the northeastern part of New Zealand, this settlement was initially known as Turanga and renamed after the colonial secretary of New Zealand – William Gisborne</p>
		    <h3>TE ANAU</h3>
		    <p>A small peaceful town in the south island of New Zealand A gateway for hiking in the Fiordland national park, the town of Te Anau lies on the eastern shore of Lake Te Anau which is the largest lake in the south island and the second largest in New Zealand. The primary sources of income of Te Anau is tourism and agriculture.</p>
		    <h3>DUNEDIN</h3>
		    <p>Cosily tucked up in the steep hills of the Otago region in the South Island area, Dunedin is the best-kept secret of New Zealand. Named so because of the Gaelic name for Edingburgh, Dun Eidann, the city is also popularly known as the “Edinburgh of New Zealand” and identifies strongly with its Scottish heritage.</p>
		    <h3>TAURANGA</h3>
		    <p>Situated in the north-western corner of the Bay of Plenty, Tauranga is the most populous city in the region and the fifth largest urban area in New Zealand. Circumscribed by Auckland, Rotorua and Hamilton, Tauranga is home to some of the world’s most stunning beaches, the majestic Mount Maunganui and the gorgeous views it offers and of course the most picturesque and scenic landscape that it has got.</p>
		    <h3>BASTION POINT</h3>
		    <p>Bastion Point is a scenic destination located in Orakei, Auckland, New Zealand. It is basically a vast expanse of coastal land that overlooks the Waitemata Harbour. Its charming surroundings draw a considerable number of visitors each year. Several tour buses often make a pitstop at the harbour for it provides a great view of the river. There are gardens, lawns, meadows and several other beautiful features that make Bastion Point an Aucklander’s favourite haunt. It is also popular for its tranquil, clean and pollution-free atmosphere.</p>
		    <h3>HUNUA RANGES</h3>
		    <p>Hunua Ranges are located in the North Island of New Zealand. The destination is situated to the southeast of Auckland City and is a block of hilly terrain that forms the suburb. This destination thus has a rich source of natural reservoirs and dense forests. The place is also sparsely populated which makes it a perfect destination for those seeking a place to escape their stressful city lives. Hunua Ranges is also famous for eco-tourism. Here, travellers get to explore the natural surroundings that include the mountain slopes, the peaks, the natural reserves and the water bodies.</p>
		    <h3>NAPIER</h3>
		    <p>Burrowed into Hawke’s Bay on New Zealand’s North Island, Napier is the country’s 6th largest urban area. A romantically evocative city replete with buildings that ooze old-world charm and aesthetic, this port-city hugging the North Island’s east coast, lies 300 km away from the capital Wellington.</p>
		    <h3>WAIPARA</h3>
		    <p>Located just 60 kilometres north of the city of Christchurch, the small valley town of Waipara boasts of having the most flavourful and well-made wines in this part of the country. With vineyards that stretch into the distance, surrounded by gentle hills, Waipara is great for a weekend trip, away from the hustle and bustle of Christchurch.</p>
		    <h3>KAIKOURA</h3>
		    <p>Kaikoura, which lies on the east coast of the South Island of New Zealand, is the perfect place for a weekend getaway from the cities of Picton or Christchurch. It boasts of having the most successful whale and dolphin spotting tours, with an almost hundred per cent spotting rate. One can see various kinds of whales, including sperm whales, orcas, humpback whales and even the mighty blue whale! You could also book a tour to go swimming in the ocean with these gentle, harmless giants. There are multiple whale and dolphin spotting tours that operate here, both on boats and on choppers!</p>
		    <h3>BAY OF ISLANDS</h3>
		    <p>The Bay of Islands is one of New Zealand’s most spectacular destinations to visit year round. Its sheltered waters make it the perfect place to view a variety of marine life, including dolphins, whales and seals. Regarded as the birthplace of New Zealand, the region affords a unique insight into early European settlement and Māori culture, making a visit to the Bay a must-do on any New Zealand itinerary. The Bay of Islands has a long, fascinating and often wild history. Once a booming, bustling and bawdy seafaring centre, it’s now a peaceful and pristine spot, and offers the perfect base for exploring Northland.</p>
		    <h3>AKAROA</h3>
		    <p>Akaroa, a town in South Island, New Zealand is one of the most historic and bi-cultural places to visit. This town is located on the banks of the peninsula and is Southeast of Christchurch. The main employer industry in Akaroa is tourism, with tourists from across the world working here seasonally, giving this town an exotic vibe.</p>
		    <h3>GREYMOUTH</h3>
		    <p>Greymouth is a town with a history of jade hunting, gold mining and dramatic river floods. Sample the beer and listen to wild west coast stories. Once the site of the Maori pa Mawhera (which means ‘wide spread river mouth’, in reference to the town’s river mouth location), Greymouth is considered the heart of the West Coast. It is the largest town on the South Island’s west coast and the arrival point for the Tranz Alpine from Christchurch.The area has a history of gold mining, which can be appreciated at the local museum and nearby Shantytown. Local brewery Monteith’s is something of a New Zealand legend; it runs tours that include a tasting session.</p>
		    <h3>GLACIERS</h3>
		    <p>New Zealand contains many stunning glaciers, most located near the Main Divide in the Southern Alps in the South Island. The Fox and Franz Josef Glaciers – some of New Zealand’s largest and most-visited – descend down from the Southern Alps and flow almost to sea level. Seeing ancient rivers of ice descending past emerald green rainforest is a sight you’ll never forget.</p>
		</section>
		<section class="left">
			<p><img src="IMAGES/new4.jpg"></p>
		    <p><img src="IMAGES/new5.jpg"></p>
		    <p><img src="IMAGES/new6.jpg"></p>
		    <p><img src="IMAGES/new7.jpg"></p>
		    <p><img src="IMAGES/new8.jpg"></p>
		    <p><img src="IMAGES/new9.jpg"></p>
		</section>
	</div>
	<footer class="footer" class="container" >
		<div class="frow">
			<div class="fcol">
				<img src="IMAGES/logo.jpg">
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