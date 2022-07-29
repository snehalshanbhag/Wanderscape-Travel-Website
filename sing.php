
<!DOCTYPE html>
<html lang="EN">
<head>
	<meta charset="utf-8">
	<title> Singapore-Wanderscape</title>
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
         	<li ><a href="index.php" style="text-decoration: none;" >HOME</a></li>
         	 <li class="dropdown">
                <a href="javascript:void(0)"  style="text-decoration: none;">TOURS</a>
            </li>
         	 
         	<div class="sign">
         	 <li ><a href="registration.php" style="text-decoration: none;" >SIGN IN</a></li>
         	</div>
         </ul> 
     </div>
    </nav>
	</header>
	<h1> - SINGAPORE - </h1>
	<div class="row">
		<div class="column">
    <div id="myNav" class="overlay">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<div class="overlay-content">
			<h6>LOCAL DIALECTS</h6>
				<p>Languages spoken : Malay , English</p>
				<p>Must try Food : <p>1.Hainanese chicken rice.</p>
				                   <p>2.Chilli crab.</p>
                                   <p>3.Laksa.</p>
                                   <p>4.Char kuay teow.</p>
                                   <p>5.Hokkien prawn mee.</p>
                                   <p>6.Barbecued stingray.</p>
                                   <p>7.Fish head curry.</p>
                                   <p>8.Satay.</p>
                </p>
				<p>Major Religions : Buddhism, Hinduism, Christianity, Taoism, and Islam</p>
				<p>Seasons : Dry(March to August) and Wet(September to February) </p>
				<p>Currency : Singaporean dollar</p>
		</div>
    </div>
   <span onclick="openNav()"><button> LOCAL DIALECTS </button></span>
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
				<p><h1 style="color: #7D0541"> - TOP 3 HOTELS IN SINGAPORE - </h1></p>
				<p><a href="https://www.hyatt.com/en-US/hotel/singapore/andaz-singapore/sinaz"><h2> 1. Andaz Singapore – A concept by Hyatt</h2></a></p>
				<p>
					<img src="IMAGES\hyat1.jpg">
			        <img src="IMAGES\hyat2.jpg">
			        <img src="IMAGES\hyat3.jpg">
			        <img src="IMAGES\hyat4.jpg">
			        <img src="IMAGES\hyat5.jpg">
			        <img src="IMAGES\hyat6.jpg">
			    </p>
			    <p><a href="https://www.onefarrer.com/"><h2> 2. One Farrer Hotel</h2></a></p>
			    <p>
			    	<img src="IMAGES\one1.jpg">
			        <img src="IMAGES\one2.jpg">
			        <img src="IMAGES\one3.jpg">
			        <img src="IMAGES\one4.jpg">
			        <img src="IMAGES\one5.jpg">
			        <img src="IMAGES\one6.jpg">
			    </p>
			    <p><a href="https://www.marinabaysands.com/"><h2> 3. Marina Bay Sands</h2></a></p>
			    <p>
			    	<img src="IMAGES\bay1.jpg">
			        <img src="IMAGES\bay2.jpg">
			        <img src="IMAGES\bay3.jpg">
			        <img src="IMAGES\bay4.jpg">
			        <img src="IMAGES\bay5.jpg">
			        <img src="IMAGES\bay6.jpg">
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
	<a href="https://www.google.co.in/maps/place/Singapore/@1.3139961,103.7041625,11z/data=!3m1!4b1!4m5!3m4!1s0x31da11238a8b9375:0x887869cf52abf5c4!8m2!3d1.352083!4d103.819836"><button>MAPS</button></a>
</div>
</div>

	<div id="slider">
		<div id="sliderbox">
			<img src="IMAGES/sing1.jpg">
			<img src="IMAGES/sing2.jpg">
			<img src="IMAGES/sing4.jpg">
		</div>
	</div>
	<div>
		<section class="right">
			<div class="box">
				<ul>
					<li><h3>Best time to visit : December to June</h3></li>
				    <li><h3>Mainly Famous for : Infrastructure, cruise ride, gardens</h3></li>
				    <li><h3>Days to travel : 10</h3></li>
				</ul>
			</div>
			<h2>PLACES TO SEE AROUND SINGAPORE</h2>
			<p style="color: #057D31">__________________________________________________________________________________________________________________________</p>
		    <h3>SINGAPORE</h3>
		    <p>Singapore has been described as a playground for the rich, and it’s true that the small city-state does have a certain sheen of wealth. But Singapore offers more than just high-end shopping malls, luxury hotels, and fine dining (though it’s worth indulging in those a bit if you can). There is also a vibrant history and diverse ethnic quarters to discover, along with many family-friendly attractions and lovely public spaces that make visiting this slightly futuristic city worthwhile.</p>
		    <h3>MARINA BAY SANDS</h3>
		    <p>The opulent Marina Bay Sands resort complex includes a high-end luxury hotel, a mall with a canal running through it, the ArtScience Museum, and the Marina Bay Sands Skypark Observation Deck—a vantage point for taking in the entire city. The Skypark’s viewing deck and infinity pool are found in the ship (yes, ship) that tops the hotel. Only hotel guests are allowed to use the infinity pool, but anyone can visit the observation deck.</p>
		    <h3>GARDEN BY THE BAY</h3>
		    <p>Once you’ve glimpsed this beautifully designed green space (from the top of the Marina Bay Sands, perhaps) you won’t be able to stay away. Wander through the Bay East Garden, perfect for enjoying the vibrant plant life and escaping the city bustle for a moment.</p>
		    <h3>BOTANIC GARDENS</h3>
		    <p>Not to be confused with the Gardens on the Bay, the Botanic Gardens are also worth a visit. Singapore received its first UNESCO World Heritage nomination for its botanical gardens, and with good reason. The city can sometimes feel like a concrete jungle, albeit a clean and comfortable one, but the botanic gardens preserve pieces of Singapore’s wilder heritage.</p>
		    <h3>SINGAPORE FLYER</h3>
		    <p>If the observation deck at the Marina Bay Sands doesn’t quite do it for you, try taking in high tea while looking out over the city from the Singapore Flyer, the world’s largest giant observation wheel. Choose from several different packages that allow you to be served and pampered while enjoying a view that encompasses not only the Singapore skyline but as far away as the Spice Islands of Indonesia and Malaysia’s Straits of Johor.</p>
		    <h3>UNIVERSAL STUDIOS SINGAPORE</h3>
		    <p>Universal Studios Singapore occupies 49 acres of Resorts World Sentosa. The park is arranged thematically, with each area paying tribute to a location, film, or television show. Destinations include New York City, Hollywood, Madagascar, and a trip back to Ancient Egypt. Fiction-themed areas include Shrek’s Far Far Away, Lost World, and Sci-Fi City, where Battlestar Galactica-themed dueling roller coasters and an indoor dark coaster, Revenge of the Mummy, dominate the thrill rides.</p>
		    <h3>NIGHT SAFARI</h3>
		    <p>Night Safari Singapore puts a new twist on the traditional zoo experience by introducing visitors to the nocturnal lives of the residents. The park’s habitats are divided into four sections, each with its own trail that lets you observe these elusive creatures as they go about their “day.”</p>
		    <h3>MERLION PARK</h3>
		    <p>Singapore’s Merlion is just what it sounds like—the figure of a mythical creature that has the head of a lion and the body and tail of a fish. The Merlion represents the city’s humble start as a fishing village combined with its traditional Malay name Singapura, “lion city.</p>
		    <h3>ASIAN CIVILISATION MUSEUM</h3>
		    <p>If the Raffles Hotel and Fort Canning Park haven’t satisfied your taste for colonial architecture, pay a visit to the Empress Place Building. It was constructed in 1865 and built in the Neoclassical style, and was named in honor of Queen Victoria. It now houses the Asian Civilisations Museum, which delves into the many Asian cultures that helped form Singapore.</p>
		    <h3>SENTOSA ISLAND</h3>
		    <p>Singapore isn’t exactly known as a beach destination, but if you’re really craving some fun in the sun, Sentosa Island is the place to find it. Siloso Beach is a good spot for getting in beach time, and visitors can play volleyball on free courts or go kayaking and skimboarding. There are several other beach attractions as well, plus an Underwater World aquarium, where you can swim with dolphins.</p>
		    <h3>SEA  AQUARIUM</h3>
		    <p>Part of the vibrant Resorts Sentosa World, the South East Asia Aquarium or the SEA Aquarium is one of the largest aquariums in the world, home to more than 800 species of aquatic wildlife. The chief draw of SEA Aquarium is the Open Ocean Tank – world’s largest viewing panel at 36-m long and 8.3m high. This is also the only aquarium in the world to house the giant oceanic manta ray.</p>
		    <h3>BUDDHA TOOTH RELIC TEMPLE</h3>
		    <p>Located in the historic Chinatown district of Singapore, the Buddha Tooth Relic Temple is a Chinese Buddhist Temple. The five-storey temple is famed worldwide for storing what is supposedly the left canine tooth of Lord Buddha, recovered from his funeral pyre in Kushinagar, India.</p>
		    <h3>LITTLE INDIA</h3>
		    <p>Little India is an ethnic neighbourhood of Singapore – a major hub of the Singaporean Indian community. Commonly known as “Tekka”, the historic centre is known for the vibrant culture, buzzing nightlife, binge-worthy street food and world-class shopping.</p>
		    <h3>JURONG BIRD PARK</h3>
		    <p>Jurong Bird Park, located on Jurong Hill in Singapore, is Asia’s largest bird park housing over 5000 birds from around 400 varied species. Spread across 20.2 hectares, the major highlight is the Waterfall Aviary – the world’s largest walk-in aviary.</p>
		    <h3>ART SCIENCE MUSEUM</h3>
		    <p>The ArtScience museum at Marina Bay is a premier exhibition space featuring touring exhibitions, colliding the world of art and science. One of the quirkiest buildings in Singapore, it houses ever-changing themes and displays across its 21 gallery spaces.</p>
		    <h3>SRI MARIAMMAN TEMPLE</h3>
		    <p>The oldest temple in Singapore, Sri Mariamman Temple is located paradoxically in the centre of Chinatown. Dating back to 1827, the exquisite temple is dedicated to Goddess Mariamman, a Hindu deity known for curing illness, disease and epidemics.</p>
		    <h3>MADAME TUSSANDS SINGAPORE</h3>
		    <p>Madame Tussauds Singapore is the Singapore branch of the popular Madame Tussauds wax museum based out of London. The museum in Singapore has life-like wax statues of notable personalities and global icons in the fields of art, music, movies, sports, and politics.</p>
		    <h3>WINGS OF TIME</h3>
		    <p>Wings of Time is a permanent outdoor light show at Siloso Beach. This award-winning show is a magical spectacle of pyrotechnics, robotic water fountains, a thrilling soundtrack, lasers, and a compelling storyline. Wings of Time follows a mythical bird and its two human friends as they course through the fabric of time and explores different landscapes, from stark deserts and deep blue seas to Mayan pyramids and Eastern trade routes. The unique shape of the screening arena right at the beach and the innovative laser show bring a multidimensional viewing experience to the audience. The fascinating story of friendship, hope, and love combined with state-of-the-art animation and visual effects is bound to leave visitors awestruck and inspired.</p>
		</section>
		<section class="left">
			<p><img src="IMAGES/sing3.jpg"></p>
		    <p><img src="IMAGES/sing5.jpg"></p>
		    <p><img src="IMAGES/sing6.jpg"></p>
		    <p><img src="IMAGES/sing7.jpg"></p>
		    <p><img src="IMAGES/sing8.jpg"></p>
		    <p><img src="IMAGES/sing9.jpg"></p>
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