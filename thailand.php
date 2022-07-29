<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="EN">
<head>
	<meta charset="utf-8">
	<title> Thailand-Wanderscape</title>
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
	<h1> - THAILAND - </h1>
	<div class="row">
		<div class="column">
	<div id="myNav" class="overlay">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<div class="overlay-content">
			<h6>LOCAL DIALECTS</h6>
				<p>Languages spoken : Thai, Khmer, Malay and Karen</p>
				<p>Must try Food : <p>1. Tom Yum Goong (Spicy Shrimp Soup)</p>
				                   <p>2. Som Tum (Spicy Green Papaya Salad)</p>
                                   <p>3. Tom Kha Kai (Chicken in Coconut Soup)</p>
                                   <p>4. Gaeng Daeng (Red Curry)</p>
                                   <p>5. Pad Thai (Thai style Fried Noodles)</p>
                                   <p>6. Khao Pad (Fried Rice)</p>
                                   <p>7. Pad Krapow Moo Saap (Fried Basil and Pork)</p>
                </p>
				<p>Major Religions : Buddhism</p>
				<p>Seasons : Summer, Winter and Monsoon</p>
				<p>Currency : Baht</p>
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
				<p><h1> - TOP 3 HOTELS IN THAILAND - </h1></p>
				<p><a href="https://www.siriheritagebangkok.com/"><h2> 1. Siri Heritage Bangkok Hotel </h2></a></p>
				<p>
					<img src="IMAGES\siri1.jpg">
			        <img src="IMAGES\siri2.jpg">
			        <img src="IMAGES\siri3.jpg">
			        <img src="IMAGES\siri4.jpg">
			        <img src="IMAGES\siri5.jpg">
			        <img src="IMAGES\siri6.jpg">
			    </p>
			    <p><a href="https://www.noursabahpattaya.com/"><h2> 2. Noursabah Pattaya </h2></a></p>
			    <p>
			    	<img src="IMAGES\pat1.jpg">
			        <img src="IMAGES\pat2.jpg">
			        <img src="IMAGES\pat3.jpg">
			        <img src="IMAGES\pat4.jpg">
			        <img src="IMAGES\pat5.jpg">
			        <img src="IMAGES\pat6.jpg">
			    </p>
			    <p><a href="http://ritsurin-boutique.gophukethotels.com/en/"><h2> 3. Ritsurin Boutique Hotel </h2></a></p>
			    <p>
			    	<img src="IMAGES\rit1.jpg">
			        <img src="IMAGES\rit2.jpg">
			        <img src="IMAGES\rit3.jpg">
			        <img src="IMAGES\rit4.jpg">
			        <img src="IMAGES\rit5.jpg">
			        <img src="IMAGES\rit6.jpg">
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
	<a href="https://www.google.com/maps/place/Thailand/@13.0003076,96.992706,6z/data=!3m1!4b1!4m5!3m4!1s0x304d8df747424db1:0x9ed72c880757e802!8m2!3d15.870032!4d100.992541"><button > MAP </button></a>
</div>
</div>
	<div id="slider">
		<div id="sliderbox">
			<img src="IMAGES/thai3.jpg">
			<img src="IMAGES/thai2.jpg">
			<img src="IMAGES/thai1.jpg">
		</div>
	</div>
	<div>
		<section class="right">
			<div class="box">
				<ul>
					<li><h3>Best time to visit : November to April</h3></li>
				    <li><h3>Mainly Famous for : Spa massages, Beaches, Buddhist temples, Nightlife and Shopping</h3></li>
				    <li><h3>Days to travel : 8</h3></li>
				</ul>
			</div>
			<h2>PLACES TO SEE AROUND THAILAND</h2>
			<p style="color: #057D31">__________________________________________________________________________________________________________________________</p>
		    <h3>THAILAND</h3>
		    <p>Thailand, a dreamy beachside paradise, is a country that has managed to retain its cultural integrity in spite of being a major tourist destination. One can find everything here – from pristine beaches to dense forests, ancient monasteries to coral reefs, from Buddhist monks to floating markets and finally the fragrant and rich food to treat your taste buds.</p>
		    <h3>BANGKOK</h3>
		    <p>A city that never sleeps, Bangkok, the capital of Thailand is a modern-day melting pot of contrasting cultures and faiths. Here, towering skyscrapers stand in harmony next to temples and monasteries. The luxury malls and shopping centres compete with the street bazaars and floating markets. Cuisines – both Thai and from around the world are showcased in all their glory on the streets as well as in rooftop restaurants. The nightlife of Bangkok, on the one hand, revolves around flashy nightclubs, rooftop and go-go bars, bright neon light signs and cheap drinks. While on the other, it also includes cabaret shows, muay thai and dance exhibitions and even cultural walking tours. Sites like the Grand Palace, Wat Pho and Wat Phra Kaew showcase the city’s rich history, while the likes of museums such as Art in Paradise and parks such as the Sea Life Ocean World cater to those seeking modern-day experiences.</p>
		    <h3>PATTAYA</h3>
		    <p>Popularly known as Thailand’s Sex capital and party hub, Pattaya is a coastal city in the Gulf of Thailand which over the years has steadily grown out of its infamous tag. The beaches and islands in Pattaya offer a wide variety of watersports, snorkelling options, restaurants, cafes and souvenir shops, making it ideal for families, friends and couples. The nightlife in Pattaya is quite famous for being loud, flashy and handsy. Walking Street in Pattaya is characteristic of bright streets lights and signs hovering over open bars, go-go bars and women standing along the streets. Cabaret shows such as the Alcazar Show and Tiffany’s Cabaret Show also are popular tourist attractions during the night. Located within a two hours drive distance from Bangkok, most tourists to Pattaya come via trains, buses or cars from the capital.</p>
		    <h3>PHUKET</h3>
		    <p>The largest Island in all of Thailand, Phuket has everything Thailand has to offer. Serviced by the Phuket International Airport, the island sees no dearth of travellers during any time of the year. Golden beaches, numerous offshore islands, upbeat markets, a high octane nightlife and thrilling watersports characterise Phuket in a nutshell. Beaches like Surin and Kata cater to families and those individuals with eccentric tastes. Patong beach, on the other hand, caters to all those who like it cheap, loud and crazy, even after the sun sets. Bangla road with its numerous bars, ping pong shows and street food vendors comes alive as the night grows older. Those who shy away from dizzy bright lights and alcohol will find themselves at the Cabaret shows or even at the ever-popular street markets. The Phuket Walking Street or Phuket Weekend markets are places where one can spend hours sifting through various clothes, souvenirs and novelty items.</p>
		    <h3>CHATUCHAK MARKET</h3>
		    <p>The king of markets in Bangkok, and one of the largest markets in the world, Chatuchak is spread over 35 acres with more than 8,000 stalls. Everything ranging from clothing, accessories, handicrafts, furniture, art, food, books, antiques, and many more interesting souvenirs are is available here. Keep your bargaining skills ready to enhance your shopping experience at this bustling market.</p>
		    <h3>GRAND PALACE</h3>
		    <p>The Grand Palace, the residence of royals for several generations, is the perfect place to begin your historical tour in Bangkok. It houses one of the holiest Buddhist temples, Wat Phra Kaew, built in the year 1782. The Grand Palace stands among the top tourist attractions in Bangkok, Thailand, showcasing the rich history of Bangkok.</p>
		    <h3>DUSIT ZOO</h3>
		    <p>The oldest zoo in Thailand, Dusit Zoo lies in the vicinity of Bangkok’s governmental headquarters in the Dusit District. Boasting of a heavy annual footfall, Dusit Zoo exhibits many species, ranging from exotic to rare, such as monkeys, penguins, camels, the albino barking deer and the white Bengal tiger. It also offers tram rides and boating services, which guarantee an uninhibited day of fun.</p>
		    
		    <h3>TIGER CAVE TEMPLE</h3>
		    <p>Tiger Cave is a splendid Buddhist temple in Krabi town which is located in a natural beautiful surrounding. Tiger Cave, or the Wat Tham Sua is a temple located in a serene natural environment. It is mainly known for the Tiger paw prints, the Buddha footprint, and the long array of staircase to reach the top. This climb is a difficult one and you should only go ahead with it if you think you’re ready. The cave is occupied by many monkeys and hence you should be careful about that too. This place is a must visit considering it’s stunning natural location and spirituality.</p>
		    <h3>AYUTTHAYA</h3>
		    <p>Ayutthaya, short for Phra Nakhon Si Ayutthaya, is a small city in Thailand containing archaeological sites like temples, monasteries, palaces, etc. It lies just 80 kilometres north of Bangkok and hence is an ideal destination for a day trip from Bangkok.</p>
		    <h3>TRANG</h3>
		    <p>Trang is a city in Southern Thailand known for its food and culture. It shares the same traditional heritage as the nearby cities of Krabi and Phuket. It is not crowded, but still a very lively city with many natural attractions surrounding it. Most people use Trang just as a transit destination to get to the other cities, but you should definitely stay for a day ot two to experience beautiful local culture and markets.</p>
		    <h3>MAE SOT</h3>
		    <p>Languishing in the western most corner of Thailand, sharing a border with Myanmar, Mae Sot in Tak province is the trading hub of Thailand. The city renowned for its indigenous pottery culture, brims with a variety of products that are reminiscent of its majority of population, which is Burmese. One can expect to find an eclectic range of street food, clothing, jewelry all at an affordable price range here.</p>
		</section>
		<section class="left">
			<p><img src="IMAGES/thai4.jpg"></p>
		    <p><img src="IMAGES/thai5.jpg"></p>
		    <p><img src="IMAGES/thai6.jpg"></p>
		    <p><img src="IMAGES/thai7.jpg"></p>
		    <p><img src="IMAGES/thai8.jpg"></p>
		    <p><img src="IMAGES/thai9.jpg"></p>
		</section>
	</div>
	<footer class="footer" class="container" style="margin-top: 2100px;">
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