<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="EN">
<head>
	<meta charset="utf-8">
	<title> Bhutan-Wanderscape</title>
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
	<h1> - BHUTAN - </h1>
	<div class="row">
		<div class="column">
	<div id="myNav" class="overlay">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<div class="overlay-content">
			<h6>LOCAL DIALECTS</h6>
				<p>Languages spoken : Dzongkha, Nepali and Tshangla</p>
				<p>Must try Food : <p>1.Ema Datshi</p>
				                   <p>2.Shakam and Khewa Datshi</p>
                                   <p>3.Red Rice</p>
                                   <p>4.Hoentay – Fried Momos</p>
                                   <p>5.Jasha Tshoem – Spicy Stew</p>
                                   <p>6.Puta – Buckwheat Noodles</p>
                                   <p>7.Yaksha Shakam</p>
                                   <p>8.Yaksha Shakam</p>
                                   <p>9.Ara – Traditional Alcoholic Beverage</p>
                </p>
				<p>Major Religions : Buddhism</p>
				<p>Seasons : Spring (March to May), Summer (June to August), Autumn (September to November) and Winter (December to February) </p>
				<p>Currency : Bhutanese Ngultrum and Indian Rupee</p>
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
		<div id="myModal" class="modal"style="overflow: scroll;">
			<div class="modal-content">
				<span class="close">&times;</span>
				<p><h1> - TOP 3 HOTELS IN BHUTAN - </h1></p>
				<p><a href="https://www.oselbhutan.com/"><h2> 1. OSEL </h2></a></p>
				<p>
					<img src="IMAGES\o1.jpg">
			        <img src="IMAGES\o2.jpg">
			        <img src="IMAGES\o3.jpg">
			        <img src="IMAGES\o4.jpg">
			        <img src="IMAGES\o5.jpg">
			        <img src="IMAGES\o6.jpg">
			    </p>
			    <p><a href="http://www.hotelnorbuling.com/"><h2> 2. HOTEL NORBULING </h2></a></p>
			    <p>
			    	<img src="IMAGES\n1.jpg">
			        <img src="IMAGES\n2.jpg">
			        <img src="IMAGES\n3.jpg">
			        <img src="IMAGES\n4.jpg">
			        <img src="IMAGES\n5.jpg">
			        <img src="IMAGES\n6.jpg">
			    </p>
			    <p><a href="http://parkhotelbhutan.com/"><h2> 3. PARK HOTEL </h2></a></p>
			    <p>
			    	<img src="IMAGES\park1.jpg">
			        <img src="IMAGES\park2.jpg">
			        <img src="IMAGES\park3.jpg">
			        <img src="IMAGES\park4.jpg">
			        <img src="IMAGES\park5.jpg">
			        <img src="IMAGES\park6.jpg">
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
	<a href="https://www.google.co.in/maps/place/Bhutan/@27.4700103,89.3145529,8z/data=!3m1!4b1!4m5!3m4!1s0x375b92a573c595cf:0xbb0cac652836bcda!8m2!3d27.514162!4d90.433601"><button > MAP </button></a>
</div>
</div>
	<div id="slider">
		<div id="sliderbox">
			<img src="IMAGES/bhutan1.jpg">
			<img src="IMAGES/bhutan2.jpg">
			<img src="IMAGES/bhutan3.jpg">
		</div>
	</div>
	<div>
		<section class="right">
			<div class="box">
				<ul>
					<li><h3>Best time to visit : October to December</h3></li>
				    <li><h3>Mainly Famous for : Natural beauty, forest conservation, gross national happiness, great culture & heritage and biodiversity</h3></li>
				    <li><h3>Days to travel : 7</h3></li>
				</ul>
			</div>
			<h2>PLACES TO SEE AROUND BHUTAN</h2>
			<p style="color: #057D31">__________________________________________________________________________________________________________________________</p>
		    <h3>BHUTAN</h3>
		    <p>The ‘Land of the Thunder Dragon’ – Bhutan nestles in the mountainous regions of the Eastern Himalayas and is one of the cleanest countries in the South Asian territory. A remote kingdom that still clings on to its Buddhist culture but embraces modernisation, Bhutan is a land with monasteries, traditional architecture, beautiful valleys, snow-clad mountain views and lush greenery. Being Landlocked the country enjoys significant tourist influx from its neighbours Tibet and India. Following traditional Buddhist culture, Bhutan observes Tantric Buddhism and following Vajrayana Buddhism as the state religion. It has a glorious past and is known to have never been conquered.</p>
		    <h3>PARO</h3>
		    <p>Paro is a small town situated in the Paro Valley of Bhutan. It is one of the most fertile as well as historic valley of Bhutan which is the widest in the Kingdom. It is home to 155 temples and monasteries dating back to the 14th century and also Bhutan’s sole international airport. The Paro Airport is the largest International Airport of Bhutan and has been one of the prime locations for numerous tourist visit. It is known to be the most challenging airport to land on.</p>
		    <h3>TIMPHU</h3>
		    <p>Thimphu is known as the heart of Bhutan nestled in its central-western part. Replaced by Bhutan’s ancient capital – Punakha, Thimphu was declared the capital city of the Himalayan Kingdom in the year 1961. Originally pronounced as ‘Thimbu’, the city is known as the most modernised place in Bhutan with internet cafes, restaurants and pubs.</p>
		    <h3>WANGDUE PHODRANG</h3>
		    <p>Being one of the largest Dzongkhangs (District) of Bhutan, Wangdue Phodrang has everything from monasteries and temple to wildlife and rustic villages. The reason why the region is different as compared to others is that it is very diverse in terms of subtropical forests in the south to cold, snowy areas in the north. With Wangchuck Centennial Park in the northern part and Jigme Dorji National Park in the southeastern region, Wangdue Phodrang is a host of numerous plants and animal species.</p>
		    <h3>JAKAR</h3>
		    <p>Nestled at the foothills of Choekhor Valley, Jakar is the largest and the most beautiful valley in Bumthang. It is popularly known as “Little Switzerland”. Jakar is the principal administrative town of the district of Bumthang. Bumthang consists of four valleys – Tang, Ura, Choekhor and Chumey, out of which Choekhor is the largest and considered the most beautiful. Jakar is a small one-street town that lies at the foothill of this very valley. Being surrounded by tree-lined mountain ranges, dotted with monasteries and Dzongs, it proves to be a treat for both history buffs and nature-lovers. This town was formed by the group of villages below the Jakar Dzong.</p>
		    <h3>PUNAKHA</h3>
		    <p>Punakha is one of the 20 districts (dzongkhags) of Bhutan bordered by the Gasa, Wangdue Phodrang and Thimphu districts. Located at the height of 1200m above sea level, Punakha offers a mesmerising view of the Himalayas. It is also fertile as the two rivers – Po Chhu and Mo Chhu converge here in the Punakha Valley making it an excellent terrain for rice cultivation. Located at a proximal distance from Thimphu around 72kms, Punakha can be reached within 3 hours. It is usually warmer in Punakha as compared to Thimphu or Paro, making it an ideal destination any time of the year.</p>
		    <h3>BUMTHANG</h3>
		    <p>Home to four beautiful mountain valleys and an array of ancient monasteries and temples, Bumthang takes its place as the most historic of all districts in Bhutan. Considered to be the spiritual centre of the Himalayan Kingdom, Bumthang is a beautiful place to visit if one has a keen interest in religion, spirituality and history.</p>
		    <h3>HAA VALLEY</h3>
		    <p>Known as the smallest Dzongkhang (district) of Bhutan, Haa Valley is one of the most picturesque places located at the south-west of Paro. The idyllic wooded forests and paths are ideal for enthusiastic hikers and trekkers. This is also the only place in the world where one can find the cream coloured bloom of Blue Poppy (Meconopsis Superba).</p>
		    <h3>TRONGSA</h3>
		    <p>Trongsa is a hilltop town situated at the centre of Bhutan; hence known to be the heart of the Himalayan Kingdom. It’s translated as “new village” in Dzongkha that has a backdrop of the black mountains offering beautiful views of the surrounding valleys.</p>
		    <h3>TRASHIGANG</h3>
		    <p>Trashigang, called the ‘Jewel of the East’, is a beautiful hill station located in Eastern Bhutan, spread across an altitude ranging from 600 m to over 4000 m. It is the largest district of Bhutan and is immensely beautiful and serene. Trashigang is also a renowned town for trade-in Bhutan, serving as a vital trade centre on the trade route between Assam and Tibet.</p>
		    <h3>ROYAL MANAS NATIONAL PARK</h3>
		    <p>The oldest national park in Bhutan, Royal Manas National Park is one of the largest national parks in the country. Known as the “conservation showpiece of the Kingdom”, it is the largest example of tropical and sub-tropical ecosystems in Bhutan. Occupying south-central Bhutan, it shares its southern borders with Manas Tiger Reserve in India. Rich in wildlife species, including many of the endangered ones, it is a natural marvel that displays the distinct flora and fauna of Bhutan and the Himalayan Region.</p>
		    <h3>DOCHULA PASS</h3>
		    <p>Nestled in the eastern edge of the Himalayas, the Kingdom of Bhutan boasts of spectacular mountain views and some of the happiest people in the world. And with this beautiful outlook of life came the creation of Dochula Pass, a breath-taking mountain pass, in commemoration of Bhutanese soldiers who passed away in military operations for the country.</p>
		    <h2>THINGS TO DO IN BHUTAN</h2>
		    <p style="color: #057D31">__________________________________________________________________________________________________________________________</p>
		    <h3>LAYA GASA TREK</h3>
		    <p>Laya Gasa trek is one of the most popular and scenic long-distance treks in the northern Himalayan region of Bhutan, along the border with Tibet. The Laya Gasa trek begins from Drukgyel in Paro, crosses four Himalayan mountain passes through alpine meadows, finally to arrive at the remote nomadic village of Laya. From Laya, you descend to the hot springs of Gasa where you can enjoy a relaxed day of rejuvenation, and finally ending the trek at Punakha Valley.</p>
		    <h3>MOUNTAIN BIKING</h3>
		    <p>Speeding up your bike en route to the top of the hill and playing with wind and speed while enjoying the beautiful sights from there is one of the best experiences that a man can fathom in his lifetime.  And what’s a better way to get your adrenaline racing than mountain biking in Bhutan? With its vivid landscape and mountainous roads, Bhutan is rapidly becoming one of the favourite places to try one’s hand in mountain biking.</p>
		    <h3>ARCHERY IN BHUTAN</h3>
		    <p>The glory of Bhutan is not hidden from anyone. The country, as beautiful as heaven itself, is known for its vivid culture, vibrant festivals and its richness in sports. It is true that no matter how developed or beautiful a country is, it never becomes complete until its citizens have an unleashed spirit for sports. And it is the royal sport of archery or “Da” (as it is called in Dzongkha, the national language of Bhutan) which completes Bhutan.</p>
		    <h3>RIVER RAFTING</h3>
		    <p>The country which prides itself because of it’s Gross Happiness Index rightly has enough reasons to keep its citizens as well as the tourists happy. Featuring undulating topography, the little Himalayan nation is famous for its extremely high altitudes and precipitous mountains and pristine nature. With a number of rugged, untamed rivers meandering through its map, Bhutan offers the perfect destination for river rafting. Mo Chhu, Paro Chhu in Punakha, Sankosh River, Mangde Chhu, Wang Chhu, Puna Tsang Chhu and the Dangme Chhu are considered to be the best for rafting due to their easy access and safe course.</p>
		    <h3>ROCK CLIMBING IN BHUTAN</h3>
		    <p>If you thought that the trip to the ‘Land Of Thunder Dragons’ was only about exploring the monasteries or the national parks, you are highly mistaken. Adventure junkies looking for new extremities and unconventional tour programs can try out the various outdoor sports like hiking, rafting, and rock climbing. While many tourists love conquering the high cliffs by hiking, some take the adventure a few notches higher with rock climbing which take mental and physical determination, body strength, agility, perfect balance, endurance and also control over the mind.</p>
		    <h3>HIKE UP THE TIGER'S NEST</h3>
		    <p>Tiger’s Nest Monastery, or Paro Taktsang, is one of the most prominent Buddhist sites in Bhutan. Located 900 metres above the upper cliff in the Paro Valley, this monastery is undoubtedly an architectural marvel. Tiger’s nest is known for the trek that has been carried on for years. With a total distance of 6.4 kms, the trek offers mesmerising views of the Paro Valley.</p>
		</section>
		<section class="left">
			<p><img src="IMAGES/bhutan4.jpg"></p>
		    <p><img src="IMAGES/bhutan5.jpg"></p>
		    <p><img src="IMAGES/bhutan6.jpg"></p>
		    <p><img src="IMAGES/bhutan7.jpg"></p>
		    <p><img src="IMAGES/bhutan8.jpg"></p>
		    <p><img src="IMAGES/bhutan9.jpg"></p>
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