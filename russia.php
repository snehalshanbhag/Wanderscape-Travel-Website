<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="EN">
<head>
	<meta charset="utf-8">
	<title> Russia-Wanderscape</title>
	<link rel="stylesheet" type="text/css" href="css/traavel.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<header>
		<nav id="header-nav" class="navbar navbar-default">
      <div class="container">
          <div class="navbar-brand">
             <div class="logo">
             <img src="images/logo2.jpg">
               </div>
           <h1>WANDERSCAPE</h1>
          </div>
         <ul>
         	<li><a href="dashboard.php" style="text-decoration: none">HOME</a></li>
         	 <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn" style="text-decoration: none;">TOURS</a>
    			<div class="dropdown-content">
      			<a href="Luxury.php" style="text-decoration: none;">Luxury Trips</a>
     			<a href="travelsolo.php"style="text-decoration: none;">Travel Solo</a>
      			<a href="familytrips.php"style="text-decoration: none;">Family Trips</a>
      			<a href="ad.php"style="text-decoration: none;">Adventure</a>
    			</div>
            </li>
         	<li><a href="#" style="text-decoration: none;">My PLANS</a></li>
         	<div class="sign">
         	 <li ><a href="logout.php" style="text-decoration: none;" >LOGOUT</a></li>
         	</div>
         </ul> 
     </div>
    </nav>
	</header>
	<h1> - RUSSIA - </h1>
	<div class="row">
		<div class="column">
	<div id="myNav" class="overlay">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<div class="overlay-content">
			<h6>LOCAL DIALECTS</h6>
				<p>Languages spoken : Russian</p>
				<p>Must try Food : <p>1.Bliny</p>
				                   <p>2.Sirniki</p>
                                   <p>3.Kasha</p>
                                   <p>4.Pelmeni</p>
                                   <p>5.Varenniki</p>
                                   <p>6.Pirog</p>
                                   <p>7.Borscht</p>
                                   <p>8.Okroshka</p>
                </p>
				<p>Major Religions : Christianity</p>
				<p>Seasons : Summer(June-August), Autumn(September-October), Winter(November-March), Spring(April-May)</p>
				<p>Currency : Russian Rouble</p>
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
				<p><h1> - TOP 3 HOTELS IN RUSSIA - </h1></p>
				<p><a href="https://www.radissonhotels.com/en-us/hotels/radisson-blu-moscow-olympiyskiy"><h2> 1. Radisson Blu Olympiyskiy Hotel </h2></a></p>
				<p>
					<img src="IMAGES\blu1.jpg">
			        <img src="IMAGES\blu2.jpg">
			        <img src="IMAGES\blu3.jpg">
			        <img src="IMAGES\blu4.jpg">
			        <img src="IMAGES\blu5.jpg">
			        <img src="IMAGES\blu6.jpg">
			    </p>
			    <p><a href="https://www.booking.com/hotel/ru/margarita-sankt-peterburg.en-gb.html?aid=306395&label=ru-KzDZPPdN7ZD1Wvyxf88VDQS107388799349%3Apl%3Ata%3Ap128500%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atiaud-294080458546%3Akwd-186854216%3Alp9040245%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YZVcNNsENnH02-pWD53qm9c&lp_sr_snippet=1"><h2> 2. Margarita Hotel </h2></a></p>
			    <p>
			    	<img src="IMAGES\mar1.jpg">
			        <img src="IMAGES\mar2.jpg">
			        <img src="IMAGES\mar3.jpg">
			        <img src="IMAGES\mar4.jpg">
			        <img src="IMAGES\mar5.jpg">
			        <img src="IMAGES\mar6.jpg">
			    </p>
			    <p><a href="http://www.denart-hotel.ru/en/"><h2> 3. Denart Hotel </h2></a></p>
			    <p>
			    	<img src="IMAGES\den1.jpg">
			        <img src="IMAGES\den2.jpg">
			        <img src="IMAGES\den3.jpg">
			        <img src="IMAGES\den4.jpg">
			        <img src="IMAGES\den5.jpg">
			        <img src="IMAGES\den6.jpg">
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
	<a href="https://www.google.com/maps?rlz=1C1PRFI_enIN905IN905&sxsrf=ALeKk02UDeCAC-gpjieSAXteRV6Kh9xW-A:1595013714053&q=russia&gs_lcp=CgZwc3ktYWIQARgAMgoILhCxAxBDEJMCMggIABCxAxCRAjIHCAAQsQMQQzIECAAQQzIECAAQQzIECAAQQzIHCAAQsQMQQzIHCAAQsQMQQzIECAAQQzIECC4QQzoECAAQR1DZ0QJY2dECYJTZAmgAcAF4AIABf4gBf5IBAzAuMZgBAKABAaoBB2d3cy13aXo&um=1&ie=UTF-8&sa=X&ved=2ahUKEwjklaykgdXqAhWSbn0KHcMrBTMQ_AUoAXoECCEQAw"><button > MAP </button></a>
</div>
</div>
	<div id="slider">
		<div id="sliderbox">
			<img src="IMAGES/russia3.jpg">
			<img src="IMAGES/russia1.jpg">
			<img src="IMAGES/russia2.jpg">
		</div>
	</div>
	<div>
		<section class="right">
			<div class="box">
				<ul>
					<li><h3>Best time to visit : June to August</h3></li>
				    <li><h3>Mainly Famous for : Climate, Alcohols</h3></li>
				    <li><h3>Days to travel : 6</h3></li>
				</ul>
			</div>
			<h2>PLACES TO SEE AROUND RUSSIA</h2>
			<p style="color: #057D31">__________________________________________________________________________________________________________________________</p>
		    <h3>RUSSIA</h3>
		    <p>Russia has been popular for being the largest nation in the world. A lot of famous museums such as The Hermitage Museum also have their homes in this country. Apart from the beauty of its architectural works, Russia is also blessed with abundant natural beauty. Nature lovers will fall in love with Lake Baikal and the rest of the beautiful mountains, trees and rolling meadows. Russia has been instrumental in producing some great gems in the field of both literature and music – Anton Chekhov, Igor Stravinsky and Leo Tolstoy to name a few.</p>
		    <h3>ST.PETERSBURG</h3>
		    <p>While St. Petersburg today is Russia’s second most important and populated city, it was once the centre of political power in the country. The Tsarist capital of Russia, St. Petersburg is still home to the glorious heritage of the dynasty, reflected in it’s museums, gardens and many stunning palaces. The city of St. Petersburg captures the imperial history of Russia to perfection. A few days spent here and you will come to realise the grandeur with which the Tsars rules the vast land for two long centuries. There are tons of museums throughout the city, most of them set in imperial buildings, displaying various facets of Russian history. The Hermitage Museum, for example, is one of the world’s finest art collections, occupying a total of 6 major buildings.</p>
		    <h3>HERMITAGE MUSEUM</h3>
		    <p>A monumental museum situated across 6 buildings on the Palace Embankment. It is one of the largest and oldest museums of art and culture in the world, with a collection of over 3 million items! The Hermitage Museum is one of Russia’s most important museums. It is home to one of the biggest collections anywhere in the world, and has a long history since it was established 1764 by Catherine the Great. The museum has several exhibitions dedicated to various styles and eras, such as the Italian Renaissance, the Italian and Spanish fine arts, the Impressionists and post-Impressionists and so on.</p>
		    <h3>CHURCH OF THE SAVIOUR</h3>
		    <p>This historic church was built on the location where Alexander II was fatally wounded, and is an absolute sight to behold. After initiating several reforms in Russia never taken before, Alexander II was subject to many assassination attempts. </p>
		    <h3>ST.ISAAC'S CATHEDRAL</h3>
		    <p>St. Isaac’s Cathedral is the largest orthodox basilica in the world, with stunning Russian-Byzantine architecture and a fully gold plated dome. It serves as both a cathedral and museum today. This magnificent cathedral was completed in 1858, after 40 years of detailed work. The fade of the cathedral is adorned with intricate work, and massive granite columns, a total of 112 of which are used in the entire church. The gold dome at the top is surrounded by 12 statues of angels, which were made by a technology called electrotyping, which meant they are extremely light and thin yet sturdy.</p>
		    <h3>WINTER PALACE</h3>
		    <p>The Imperial Palace of St. Petersburg and the residence of the Tsars. Today it is the main building of the Hermitage Museum. The Winter Palace is the single most popular building in St. Petersburg. It has the richest of imperial histories, and still holds all of it’s grandeur from it’s glory days. The palace design we see today was completed in the 1760s in the Russian Baroque style, and is a piece of genius by the architect Bartholomeo Rastrelli, who’s magnificent works are seen in many imperial buildings of St. Petersburg. The palace is in the shape of a square, with a courtyard in the centre. Inside, it has nearly 1500 rooms. The Hermitage collection was always housed in the Winter Palace, however today it has become the primary reason for the millions that visit the palace everyday. The banquets, rooms, galleries and the intricate architecture inside this massive palace just cannot be missed. The imperial glory of the Winter Palace was restored after the fall of the communist regime, and you have not visited St. Petersburg without visiting the Winter Palace.</p>
		    <h3>MOSCOW</h3>
		    <p>Moscow is Russia’s capital, and its cultural, economic and political heart. It is the largest and the most populated city in Russia, and also a city of huge global influence. It is the country’s biggest tourist destination, home to some of the most historic architectural works in the country. Moscow is a city with a very rich past. It served as Russia’s capital for a long time and after the Bolshevik Revolution became the capital of Russia again. It has one of the best collections of architectural structures in the world. The Kremlin, which serves as the residence of the Russian President today, is an emphatic complex of palaces, cathedrals and walls. The iconic St. Basil’s Cathedral is one of the most unique cathedrals you’ll find anywhere in the world. Moscow has a huge number of museums as well, displaying artworks from throughout the history of Russia. There is even a display of priceless jewellery and state regalia in the Kremlin Armoury. Apart from that, Moscow is home to many splendid gardens and parks that find their origins in the imperial era.</p>
		    <h3>RED SQUARE</h3>
		    <p>The Red Square is the most popular city plaza in Moscow. It is the location of various popular tourist attractions, such as the Kremlin, St. Basil’s Cathedral, Lenin’s Mausoleum, State Historical Museum, GUM shopping mall and the Kazan Cathedral. If you watch a lot of Hollywood movies, you would’ve noticed the Red Square many times. It is a massive city plaza, often considered as the centre of Moscow since a majority of Moscow’s major streets originate here. It was recognised as a UNESCO World Heritage Site, along with the Kremlin building, due to their major role in Russian history. The Red Square is the most popular area in Moscow due to the fact that it houses Moscow’s most popular attractions. The St. Basil’s Cathedral is a fantastic 16th century cathedral, which today serves as a museum.</p>
		    <h3>ST.BASIL'S CATHEDRAL</h3>
		    <p>The cathedral is an absolutely stunning piece of architecture. It is painted in unique and unusual colours and is Moscow’s most popular tourist attraction. The central idea behind the architecture of the cathedral is debated till this date. It has not been ascertained even today as to what inspired Barma and Postnek Yakovlev to come up with the design that they have. The cathedral was initially built in white, but was painted in dazzling colours and patterns as we see it today in the 17th century. The layout has 8 smaller churches surrounding the central 9th church, as opposed to the usual 7 surrounding the centre. Today, St. Basil’s Cathedral serves as a museum, allowing visitors to see the simply breathtaking interiors and the intricacy of the work that was put into it’s construction. It is truly a spectacle and an absolutely enchanting sight at night when it lights up!</p>
		    <h3>SIBERIA</h3>
		    <p>The Siberian Federal District covers 30% area of its country, Russia. Holding over a dozen cities, Siberia boasts of the deepest lake in the world, Lake Baikal. Siberia is an ideal location for travellers who want to encounter with the untouched beauty of nature, mighty mountains, and unexplored enigmas.</p>
		    <h3>LAKE BAIKAL</h3>
		    <p>The deepest lake in the world, Lake Baikal is a must-see if you’re planning your trip to Russia. It has been entitled as a World Heritage Site by UNESCO. You can’t put Lake Baikal off your list if you’re visiting Siberia. A spectacular landscape of clear blue water surrounded with lush green surroundings that captivates you in its charm so badly, that you can’t get over it.With a depth of about 1620 metres, this freshwater lake is home to some indigenous animals like nerpas. Even if you visit the lake during winter, you get assured breathtaking views of the frozen lake, as well as some ‘chilling’ icy-activities. What a splendor it might feel standing (virtually) on the deepest lake in the world!</p>
		    
		    <h3>ALTAI MOUNTAINS</h3>
		    <p>The majestic mountains of Altai stretch over 2000 km with the highest point 4500 meter above the sea level. The Altai mountains have always been in the spotlight of Siberian tourism. You can go for hiking, climbing, rafting, or just spend some lovely time with your family in the woods. The Altai Republic also has two museums which are definitely worth a visit- Altai Museum of Regional Studies and History, and Altai State Art Museum.</p>
		    <h3>TRANS-SIBERIAN RAILWAY</h3>
		    <p>The legendary Trans-Siberian Railway boasts the longest rail road in the world, with 9,289 kilometers of rails. The Great Siberian Route is so amazing that you can travel the entire country just by sitting inside the train holding a cup of coffee in your hand marvelling at the awe-inspiring sights outside the window. It is the best way to inhale the true essence of Russia, combined with excellent services right inside the carriage. The rail stops at most of the significant towns and cities; and you can even plan to get down at a city station and spend some pleasant time there in solace.</p>
		    <h3>SOCHI</h3>
		    <p>Sochi is an idyllic seaside retreat that attracts hundreds of people to it each year, including celebrities and renowned politicians. In 2014, Sochi hosted the Winter Olympics, making it even more popular amongst tourists across the globe. The city is also called the Black Sea Pearl. Think picturesque mountains, pretty shingle beaches and a nightlife to die for! Sochi is a popular spot among tourists, attracting a whopping total of more than 4 million visitors each year. It also has something on offer for everyone _ parks for nature lovers, museums and other sites for history lovers and beautiful beaches for some true R&R.</p>
		    <h3>THE SINGING FOUNTAINS</h3>
		    <p>This is SochiÍs most visited tourist attraction, built back in 1970 and is a beautiful place to visit while youÍre in the city. The Singing Fountains are situated close to the Sochi Trade Gallery. There are pools and streams aplenty here and a wonderful VFX system in place. This gives you the illusion of a singing, dancing fountain. However, these fountains are active and switched on only during summer time and mostly once it begins to get dark.</p>
		</section>
		<section class="left">
			<p><img src="IMAGES/russia4.jpg"></p>
		    <p><img src="IMAGES/russia5.jpg"></p>
		    <p><img src="IMAGES/russia6.jpg"></p>
		    <p><img src="IMAGES/russia7.jpg"></p>
		    <p><img src="IMAGES/russia8.jpg"></p>
		    <p><img src="IMAGES/russia9.jpg"></p>
		</section>
	</div>
	<footer class="footer" class="container" style="margin-top: 2800px;">
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