<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="EN">
<head>
	<meta charset="utf-8">
	<title> Vietnam-Wanderscape</title>
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
	<h1> - VIETNAM - </h1>
	<div class="row">
		<div class="column">
	<div id="myNav" class="overlay">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<div class="overlay-content">
			<h6>LOCAL DIALECTS</h6>
				<p>Languages spoken : Vietnamese, English, French, Chinese and Khmer</p>
				<p>Must try Food : <p>1.Pho</p>
				                   <p>2.Cha ca</p>
                                   <p>3.Banh xeo</p>
                                   <p>4.Cao lau</p>
                                   <p>5.Rau muong</p>
                                   <p>6.Nem ran</p>
                                   <p>7.Goi cuon</p>
                                   <p>8.Bun bo Hue</p>
                </p>
				<p>Major Religions : No religion</p>
				<p>Seasons : Dry Winter(November-April) and Summer(May-October) </p>
				<p>Currency : Dong</p>
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
				<p><h1> - TOP 3 HOTELS IN VIETNAM - </h1></p>
				<p><a href="http://bbq-hostel.halonghotels.net/en/"><h2> 1. BBQ Hostel </h2></a></p>
				<p>
					<img src="IMAGES\bbq1.jpg">
			        <img src="IMAGES\bbq2.jpg">
			        <img src="IMAGES\bbq3.jpg">
			        <img src="IMAGES\bbq4.jpg">
			        <img src="IMAGES\bbq5.jpg">
			        <img src="IMAGES\bbq6.jpg">
			    </p>
			    <p><a href="https://valsoleilhotel.com/en/trang-chu/"><h2> 2. Val Soleil Hotel </h2></a></p>
			    <p>
			    	<img src="IMAGES\val1.jpg">
			        <img src="IMAGES\val2.jpg">
			        <img src="IMAGES\val3.jpg">
			        <img src="IMAGES\val4.jpg">
			        <img src="IMAGES\val5.jpg">
			        <img src="IMAGES\val6.jpg">
			    </p>
			    <p><a href="https://www.orbitz.com/Hanoi-Hotels-Dal-Vostro-Hotel-Spa.h23315588.Hotel-Information"><h2> 3. Dal Vostro Hotel & Spa </h2></a></p>
			    <p>
			    	<img src="IMAGES\dal1.jpg">
			        <img src="IMAGES\dal2.jpg">
			        <img src="IMAGES\dal3.jpg">
			        <img src="IMAGES\dal4.jpg">
			        <img src="IMAGES\dal5.jpg">
			        <img src="IMAGES\dal6.jpg">
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
	<a href="https://www.google.com/maps/place/Vietnam/@15.7477194,101.4132682,6z/data=!3m1!4b1!4m5!3m4!1s0x31157a4d736a1e5f:0xb03bb0c9e2fe62be!8m2!3d14.058324!4d108.277199"><button > MAP </button></a>
</div>
</div>
	<div id="slider">
		<div id="sliderbox">
			<img src="IMAGES/v1.jpg">
			<img src="IMAGES/v2.jpg">
			<img src="IMAGES/v3.jpg">
		</div>
	</div>
	<div>
		<section class="right">
			<div class="box">
				<ul>
					<li><h3>Best time to visit : September to November</h3></li>
				    <li><h3>Mainly Famous for : Scenery</h3></li>
				    <li><h3>Days to travel : 8</h3></li>
				</ul>
			</div>
			<h2>PLACES TO SEE AROUND VIETNAM</h2>
			<p style="color: #057D31">__________________________________________________________________________________________________________________________</p>
		    <h3>VIETNAM</h3>
		    <p>Vietnam, a country nestled in the southern part of Eastern Asia is known for its peaceful and serene environ. Once haunted by the bloodshed and strife of Vietnam War, the streets of the country in its current avatar buzz with youthful energy. Tall and looming skyscrapers, quaint floating markets, mopeds zooming through the roads,  and paddy fields add even more to its overall charms. Oozing overwhelming natural beauty and rich heritage, the country takes you on a journey through its ancient architecture and its vibrant culture.</p>
		    <h3>HO CHI MINH CITY</h3>
		    <p>Commonly referred as Saigon, Ho Chi Minh City is all about dynamism, crowded streets, skyscrapers and urbanization fusing well with culture side including Oriental style pagodas, ancient temples and traditional markets. With a sudden bout of economic uprising, the city offers something for everyone and thus serving as a destination worth visiting.</p>
		    <h3>BINH TAY MARKET</h3>
		    <p>Binh Tay Market, constructed by the French in the 1880s, is located in the centre of Vietnam’s largest Chinatown district. Unlike Ben Thanh Market in District 1, this market mainly serves the local population with its extensive range of fresh fruits, vegetables, poultry, meat and seafood from regions across Vietnam</p>
		    <h3>WAR REMNANTS MUSEUM</h3>
		    <p>The War Remnants Museum is a sobering and unforgettable museum which details the effects of the 30 year long war between America and Vietnam. There are immaculately preserved tanks, planes and other war machines in the outside grounds, but the really hard-hitting information is found inside. Photographs, exhibits and written documentation show the horrific lengths that the American Army lowered themselves to in order to try and defeat the North Vietnamese Army.</p>
		    <h3>CU CHI TUNNELS</h3>
		    <p>This marvellous tourist attraction lets visitors experience what it must have been like for soldiers who used an extensive network of tunnels to move around undetected by their enemies. There is an informative movie to watch, followed by a guided tour of some mock recreations of daily life for the Viet Cong hiding in the jungle. Burnt out tanks make for a great photo prop and then everyone gets to crawl through a small section of the tunnels which has been widened and supported with concrete.</p>
		    <h3>CAO DAI TEMPLE</h3>
		    <p>Cao Dai Temple is the centre of the Cao Dai faith, a religion that has taken bits of Buddhism, Christianity, Islam, Taoism and Confucianism. Tourists are welcome to visit the temple and learn more about this faith that is practiced by a few dedicated followers. Each Cao Dai practitioner wears a white robe to enter the temple with an additional sash to signify their previous religion. The temple itself is very bright and colourful with dragons flying up banisters and a cloud mural decorating the ceiling.</p>
		    <h3>JADE EMPEROR PAGODA</h3>
		    <p>Jade Emperor Pagoda is one of the most revered temples in Ho Chi Minh. Originally built in 1909 by Chinese immigrants this Taoist temple now welcomes Buddhist worshipping and is incredibly atmospheric with incense smoke hanging heavy in the air. Intricate architecture, carvings, statues of Gods and Goddesses and Chinese characters create an exotic and timeless ambiance.</p>
		    <h3>BITEXCO TOWER AND SKY DECK</h3>
		    <p>Bitexco Tower is an ultra modern office tower in Ho Chi Minh, with a characteristic oval extension which acts as a helicopter landing pad. Standing at 262 metres tall, this 68 storey building is the highest in all of Vietnam with a sky deck offering 360 degree views of the city and surrounding area as well as a fantastic sky bar called Alto where you can see all of Ho Chi Minh while enjoying a cocktail and some tapas style international dishes. Head up here for sunset and don’t forget your camera.</p>
		    <h3>REUNIFICATION PALACE</h3>
		    <p>The centre of the allied command and the place where the North Vietnamese claimed victory in the American War, Reunification Palace has played its part in some incredible scenes. This ageing palace has essentially been frozen in time since a North Vietnamese Army tank smashed through its gates in 1975. Visitors will get to discover secret rooms, grand reception halls and the command bunker where General Ngo Dinh Diem conducted his war strategies.</p>
		    <h3>HO CHI MINH CENTRAL POST OFFICE</h3>
		    <p>The Central Post Office in Ho Chi Minh is a glorious example of French colonial architecture, perfectly preserved with as much style as when it first opened in 1891. The building still functions as the city’s main post office and sending a letter or postcard home is highly recommended for a taste of living history. Beautiful from any angle, this building was designed by Gustave Eiffel, who also designed the Eiffel Tower in Paris.</p>
		    <h3>MARIAMMAN HINDU TEMPLE</h3>
		    <p>Mariamman Hindu Temple is a beautiful example of the bright and vibrant architecture of Hindu places of worship. As the only active Hindu temple in Ho Chi Minh, it acts as a community base for the small community of Hindus living in the city. Open every day from 07:00 to 19:00, non Hindus are also welcome to visit, just remember to dress conservatively and take off your shoes before entering the inner temple.</p>
		    
		    <h3>MARBLE MOUNTAINS</h3>
		    <p>Marble Mountains, located just to the south of Da Nang are a cluster of five hills made of marble and limestone. Marble Mountains are highly revered for the Buddhist sanctuaries and other ancient sites found here. Located just off the coastal road, each mountain is said to be dedicated to the 5 natural elements.</p>
		    <h3>GOLDEN BRIDGE</h3>
		    <p>The Golden Bridge, or Cau Vang, located in the Ba Na Hills of Da Nang is famous for its sculpture of two giant hands cradling a golden bridge. The sculpture has acted as a tourist magnet and the bridge is flocked with groups of people strolling or taking selfies. Made up of eight sections, the bridge is about 150 meters long and snakes through the forests of Ba Na Hills.</p>
		   
		    <h3>HAI VAN PASS</h3>
		    <p>Hai Van Pass translated to as “ocean cloud pass”, is a 21 km long strip connecting the cities of Da Nang and Lang Co in the Hue Province. Touted to be the highest pass in Vietnam, at a staggering height of 500 metres above sea level, it is a part of the Annamite range which goes down to the East Vietnamese Sea. The exhilarating Hai Van Pass is prominently known for bike rides amidst the mystical view of mountains and clear skies.</p>
		    <h3>DRAGON BRIDGE</h3>
		    <p>Dragon Bridge is the largest one in Vietnam and lies over the Han River. The bridge stretches for 1,864-foot-long and was built in July 2009. It currently has a six-lane way for traffic to pass. The bridge is the main connecting link between the Da Nang Airport and the main area of the Da Nang City as well as My Khe and Non-Nuoc Beach.</p>
		    <h3>DA NANG CATHEDRAL</h3>
		    <p>Danang Cathedral, also known as Con Ga Church (Rooster Church) is a pink-coloured edifice built by French priest Louis Vallet in 1923. It is known as the Con Ga Church after a rooster that tops its bell-tower. Located on Tran Phu Street in Da Nang, the Da Nang Cathedral is the only church in Da Nang which was built during the French Colonial Rule in Vietnam.</p>
		    <h3>CAO DAI TEMPLE</h3>
		    <p>Accommodating about 50,000 followers at a time, the Cao Dai temple of Da Nang is the largest Cao Dai temple in Central Vietnam. Constructed between 1933 and 1955, this temple renders a unique styled-architecture based on the blended religion frame of reference. The Da Nang Cao Dai temple is one of the 1,000 Cao Dai temples located in the country. The signboard at the entry translates into very peculiar teaching of this religion – that all religions have the same reason and seek tolerance in the world.</p>
		    <h3>HAN RIVER BRIDGE</h3>
		    <p>Han River Bridge is one of the prime examples of ingenious engineering! It is the first swing bridge in Vietnam and stretches over the Han River for 487 metres. Inaugurated in the year 2000, it not only facilitates transport but also links the eastern side of the river to the city centre. While you are in Da Nang, travel to the bridge at around 11 PM on a weekend when the traffic is stopped and the bridge swings on its axis for about 15 to 20 minutes. to allow the shipping traffic in the Han River to pass through. It is the pride of the Da Nang dwellers and an example of the modernity of the city.</p>
		    <h3>HALONG BAY</h3>
		    <p>Halong Bay is a popular bay which is located in the north of Vietnam. The name of this place i.e. Halong means “the place of descending dragons’. This place was not very much known before the 19th century. However in the recent years the popularity of this place has risen to a much greater value.It is a beautiful bay which one can visit in order to enjoy the scenic beauty present all around.</p>
		    <h3>CAT BA ISLAND</h3>
		    <p>Cat Ba Island is a popular island located in the bay. Anyone who visits Ha Long Bay tends to visit the Cat Ba Island. Many tour companies include this as a part of their itinerary. You would find all of the amenities such as drinks, hotels as well as restaurants in this place. Also, here you will find the local people carrying out their prime occupation of fishing.</p>
		</section>
		<section class="left">
			<p><img src="IMAGES/v4.jpg"></p>
		    <p><img src="IMAGES/v5.jpg"></p>
		    <p><img src="IMAGES/v6.jpg"></p>
		    <p><img src="IMAGES/v7.jpg"></p>
		    <p><img src="IMAGES/v8.jpg"></p>
		    <p><img src="IMAGES/v9.jpg"></p>
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