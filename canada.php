<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="EN">
<head>
	<meta charset="utf-8">
	<title> Canada-Wanderscape</title>
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
	<h1> - CANADA: THE EPITOME OF ETHNIC DIVERSITY - </h1>
	<div class="row">
		<div class="column">
	<div id="myNav" class="overlay">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<div class="overlay-content">
			<h6>LOCAL DIALECTS</h6>
				<p>Languages spoken : English and French</p>
				<p>Must try Food : <p>1.Poutinr</p>
				                   <p>2.Bannock</p>
                                   <p>3.Butter tarts</p>
                                   <p>4.Nova Scotian Lobster Rolls</p>
                                   <p>5.Montreal Style Bagels</p>
                                   <p>6.Saskatoon berry pie</p>
                                   <p>7.Smoked Meat</p>
                                   <p>8.Peameal Bacon</p>
                </p>
				<p>Major Religions : Catholic and Protestantism</p>
				<p>Seasons : Spring, Summer, Fall and Winter </p>
				<p>Currency : Dollar</p>
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
				<p><h1> - TOP 3 HOTELS IN CANADA - </h1></p>
				<p><a href="https://www.marriott.com/hotels/travel/yyzdl-delta-hotels-toronto/"><h2> 1. Delta Hotels by Marriott Toronto </h2></a></p>
				<p>
					<img src="IMAGES\tor1.jpg">
			        <img src="IMAGES\tor2.jpg">
			        <img src="IMAGES\tor3.jpg">
			        <img src="IMAGES\tor4.jpg">
			        <img src="IMAGES\tor5.jpg">
			        <img src="IMAGES\tor6.jpg">
			    </p>
			    <p><a href="https://www.sterlingniagara.com/"><h2> 2. Sterling Inn & Spa </h2></a></p>
			    <p>
			    	<img src="IMAGES\inn1.jpg">
			        <img src="IMAGES\inn2.jpg">
			        <img src="IMAGES\inn3.jpg">
			        <img src="IMAGES\inn4.jpg">
			        <img src="IMAGES\inn5.jpg">
			        <img src="IMAGES\inn6.jpg">
			    </p>
			    <p><a href="https://www.albertatbay.com/reservations/"><h2> 3. Albert at Bay Suite Hotel  </h2></a></p>
			    <p>
			    	<img src="IMAGES\al1.jpg">
			        <img src="IMAGES\al2.jpg">
			        <img src="IMAGES\al3.jpg">
			        <img src="IMAGES\al4.jpg">
			        <img src="IMAGES\al5.jpg">
			        <img src="IMAGES\al6.jpg">
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
	<a href="https://www.google.com/maps/place/Canada/@35.1453591,-157.6503695,3z/data=!3m1!4b1!4m5!3m4!1s0x4b0d03d337cc6ad9:0x9968b72aa2438fa5!8m2!3d56.130366!4d-106.346771"><button > MAP </button></a>
</div>
</div>
	<div id="slider">
		<div id="sliderbox">
			<img src="IMAGES/canada1.jpg">
			<img src="IMAGES/canada2.jpg">
			<img src="IMAGES/canada3.jpg">
		</div>
	</div>
	<div>
		<section class="right">
			<div class="box">
				<ul>
					<li><h3>Best time to visit : Fall(September to November)</h3></li>
				    <li><h3>Mainly Famous for : Magneficient beauty, forest conservation, hospitality, diversity</h3></li>
				    <li><h3>Days to travel : 12</h3></li>
				</ul>
			</div>
			<h2>PLACES TO SEE AROUND CANADA</h2>
			<p style="color: #057D31">__________________________________________________________________________________________________________________________</p>
		    <h3>CANADA</h3>
		    <p>Canada is the second largest country in the world, and it continues to attract tourists with its diversity, hospitality and magnetic. beauty. Whether you are a daredevil or a nature lover, Canada has something for everyone. It is considered to be one of the most ethnically diverse countries in the world. Blessed with all of its natural attractions, it is the ideal place for fishing, rock climbing, canoeing, kayaking, etc. making it every adventurer’s paradise. Everyone in Canada has the luxury of being able to taste food from all over the world thanks to the various communities who have settled here and sprinkled some of their cultures into Canada. Canada is a living example of the magic that can be created when you put all ethnicities together.</p>
		    <h3>CALGARY STAMPEDE</h3>
		    <p>The Calgary Stampede, one of the most famous rodeos in the world, traces its origins back to the traveling wild west shows of the late 1800s and early 1900s. The Stampede has grown over the years, today attracting the best cowboys in the world who compete for $2 million in prize money. Other activities include live concerts, a carnival, lots of food and dancing as this Canadian city hosts the best in the west. A 4 km (2.5 mile) parade opens what Calgary calls “the greatest outdoor show on earth”. The 10-day event is held every July.</p>
		    <h3>VISTORIA'S INNER HARBOUR</h3>
		    <p>Victoria’s Inner Harbour on Vancouver Island is a cool place to visit. There’s the water on one side and stately government buildings on the other since Victoria is the capital of British Columbia. The city hosts a classic boat festival on Labour Day in September, with the harbor filling up with wooden boats. Visitors can also navigate the harbor on kayaks or tour boats. Take time out to have a traditional British tea at the Empress Hotel, a Victoria landmark since the early 1900s; it’s right across from the harbor.</p>
		    <h3>ASTHABASCA FALLS</h3>
		    <p>Jasper National Park in the Alberta province is the largest of Canada’s Rocky Mountain Parks boasting broad valleys, rugged mountains, glaciers, forests, alpine meadows and wild rivers. One of the top attractions is Athabasca Falls, a beautiful waterfall that thunders through a narrow gorge. Even when the water level in the upper Athabasca River is low, huge quantities of water pour over the falls. Several viewing platforms and trails where it is safe to photograph the picturesque scene are located around the falls. Motorists can cross over the falls by taking Highway 93A into the town of Jasper.</p>
		    <h3>VIEUX QUEBEC</h3>
		    <p>Vieux-Québec, or Old Quebec, is an historic district in Quebec City. This is where the French explorer Samuel de Champlain founded Saint Louis Fort in 1608. The military presence here was strong under both the French and the British, with the area being heavily fortified. Today it is a tourist district with many small boutiques and hundreds of historical and photographic points of interest. Visitors will want to take in the Citadel, known as she “Gibraltar of the Americas,” because of its strategic location overlooking the St. Lawrence River. Visitors also will want to take in the iconic Chateau Frontenac, and enjoy the charm of European style shopping on Rue Saint Jean.</p>
		    <h3>NIAGARA FALLS</h3>
		    <p>If there is one destination you’d find in every ‘best places to visit in Canada during summers’ list, it is the Niagara Falls. Built along the spellbinding waterfalls by the same name, this famous city is an ideal place to explore if you’re looking for a magical experience. It is indeed one of the most iconic and best places to visit in Canada. Have a great time enjoying the views and clicking pictures of the cascading falls. You’ll have an unparalleled sightseeing experience when you’ll visit Niagara Falls at night.</p>
		    <h3>WHISTLER THE PERFECT SKI RESORT</h3>
		    <p>Home to one of the largest ski resorts in North America, Whistler is one of the best places in Canada for winter holidays! Skiing, snowshoeing, and tobogganing are few of the thrilling sports to indulge in for enjoying in this captivating snow land. So, if you are a thrill seeker, then Whistler is one of the best places to visit in Canada for you! If you’re traveling from Vancouver to Whistler, then you can call a cab that will make you reach in about 1 hour 30 minutes. You can choose from the best hotels in Edmonton for lavish stay in Canada.</p>
		    <h3>QUEBEC CITY : EXPLORE THE FRENCH INFLUENCE</h3>
		    <p>Renowned as North America’s oldest walled city, and the most beautiful city in Canada and considered top Canada tourist places, which you must visit with your partner if magic, romance, and all things French is what tickles your fancy the most. Have an amazing time with your partner in the magical Quebec city. It is one of the most enchanting places to see in Canada because of art and culture scenes.</p>
		    <h3>CHURCHILL : SEEK TONS OF ADVENTURE</h3>
		    <p>This small town located on Hudson Bay definitely counts as one of the top places to visit in Canada. Known as the polar bear capital of the world, Churchills is the perfect hotspot for travelers who love having a close encounter with wildlife. It is also a great destination for adventure seekers and one can enjoy underwater activities here.</p>
		    <h3>OLD MONTREAL : DISCOVER AN OLD CHARM</h3>
		    <p>If you are wondering where to go in Canada, then make sure Montreal comes to your mind. Old-world charm, spectacular buildings, and horse-drawn carriages are pretty much what describes the fascinating aura of this oldest area in Montreal. For travelers in pursuit of a peaceful & unique experience, this is the perfect place to be! Have a great time with your folks in one of the best places to visit in Canada.</p>
		    <h3>BANFF NATIONAL PARK: A POPULAR DESTINATION</h3>
		    <p>Chances are, you have already heard of Banff National Park in Canada a lot of times. And why not, it is amongst the top Canada destinations every traveler must visit and amongst the best things to do in Alberta, Canada. Turquoise colored lakes, spectacular glaciers, snow capped peaks, and mesmerizing landscapes, everything beautiful can be witnessed here at once. Excited to visit? You should be since it is one of the best places to visit in Canada.</p>
		    <h3>STANLEY PARK: THE FRENCH CONNECTION</h3>
		    <p>Vancouver is one of the most famous French cities in Canada which is a popular destination among travelers. If the red-orange colored trees shown in movies have always tickled your fancy, Stanley Park is one place you have to visit in Canada. The red cedar and Douglas fir trees around with a gorgeous view of the city would not only leave you spellbound but also make you fall for nature again. Do visit the park, especially when searching for some of the famous places in Canada.</p>
		    <h3>BUTCHART GARDENS: A PICTURE PERFECT LAND</h3>
		    <p>Of all the top tourist attractions in Canada, Butchart Gardens is the best place to explore with a camera in hand. With an enchanting display of flowers around, fun boat tours, night illuminations & more, there’s a lot to see and do here that will make your holiday vibrant! Ready to capture some Instagram worthy pictures?</p>
		    <h3>OKANAGAN VALLEY</h3>
		    <p>Known for its wineries and fruit orchards, the Okanagan is one of the best places in Canada to visit. A walk into the regions here makes you feel like you have stepped right into heaven. So, try and savor the beauty around not just with your eyes, but also with your camera. Book yourself a wine tour at one of its wineries!</p>
		    <h3>GROS MORNE NATIONAL PARK</h3>
		    <p>This national park is one of the Canada points of interest you must definitely visit and explore. Geologically diverse and beautiful, it is a part of Long Range Mountains, which makes it even more attractive for a nature admirer like you! Enjoy nature walks and stroll into the wild at this stunning national park.</p>
		    <h3>ALGONQUIN PROVISIONAL PARK</h3>
		    <p>With lush green forests, enchanting rivers & lakes, this place makes for the best tourist places in Canada for anyone who loves nature. You can indulge in wildlife spotting, camping, canoeing, and more activities during your visit, which ensures you take back home more than just pictures. What more can you ask for on a vacation?</p>
		    <h3>LAKE LOUISE</h3>
		    <p>There is no doubt that this lake is one of the most beautiful places in Canada. Apart from admiring the turquoise lakes, the Victoria Glacier, and spectacular mountains in the backdrop, you can also indulge in kayaking or fishing in the summer, and snowshoeing & skiing in the winters amongst the best things to do in Victoria for an exciting vacation in Canada. So, what are you waiting for? Get ready to lose yourself by visiting Lake Louise in Canada.</p>
		    <h3>BAY OF FUNDY</h3>
		    <p>Popular for offering the famous ‘walk on the ocean’ experience, this is one of the most heartwarming Canada tourist attractions. You can witness the highest tides in the world here, and also various species of whales at the same time. This is undeniably one of the most famous places in Canada that you must explore. Excited to visit the Bay of Fundy?</p>
		    <h3>THE YUKON</h3>
		    <p>Sometimes a gorgeous sight is all you need to make your holiday magical. The dance of the northern lights in the sky easily visible from Whitehorse or Dempster Highway makes Yukon one of the best places to travel in Canada, especially during winter. So, do make sure you put this on your list and have a magical trip.</p>
		    <h3>GARIBALDI LAKE</h3>
		    <p>The turquoise waters and the snowy Canada mountains make this place a postcard-perfect beauty. While you can indulge in hiking and a lot of activities here, leaving your camera alone is something you wouldn’t want to do even for a second. Try to capture all the wondrous sights that this park has to offer. Make sure that you include it in your list and it is one of the must-visit places in Canada.</p>
		    <h3>PYRAMID LAKE</h3>
		    <p>If you’re looking for the best tourist places in Canada, this lake should definitely be on your list. Apart from experiences like windsurfing, canoeing, and ice skating, the picturesque beauty of this place makes it a famous tourist spot and a paradise for photographers. Do not forget your camera behind! You can choose from the best guest houses in Ottawa for a comfortable stay in Canada.</p>
		</section>
		<section class="left">
			<p><img src="IMAGES/canada4.jpg"></p>
		    <p><img src="IMAGES/canada5.jpg"></p>
		    <p><img src="IMAGES/canada6.jpg"></p>
		    <p><img src="IMAGES/canada7.jpg"></p>
		    <p><img src="IMAGES/canada8.jpg"></p>
		    <p><img src="IMAGES/canada9.jpg"></p>
		</section>
	</div>
	<footer class="footer" class="container" style="margin-top: 3300px">
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