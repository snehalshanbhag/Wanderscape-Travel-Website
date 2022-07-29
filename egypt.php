<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="EN">
<head>
	<meta charset="utf-8">
	<title> Egypt-Wanderscape</title>
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
	<h1> - EGYPT - </h1>
	<div class="row">
		<div class="column">
	<div id="myNav" class="overlay">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<div class="overlay-content">
			<h6>LOCAL DIALECTS</h6>
				<p>Languages spoken : Arabic</p>
				<p>Must try Food : <p>1.Kushari</p>
				                   <p>2.Rozz Me'ammar</p>
                                   <p>3.Mulukhiya</p>
                                   <p>4.Fatta</p>
                                   <p>5.Sayadeya</p>
                                   <p>6.Ful Medames</p>
                                   <p>7.Ta'meya</p>
                                   <p>8.Alexandria Liver and Sausages</p>
                </p>
				<p>Major Religions : Islam </p>
				<p>Seasons : Mild Winter(November to April) and Hot Summer(May to October)</p>
				<p>Currency : Egyptian Pound</p>
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
				<p><h1> - TOP 3 HOTELS IN EGYPT - </h1></p>
				<p><a href="https://www.booking.com/hotel/eg/elite-pyramids-boutique.en-gb.html?aid=306395&label=eg-pEXN_pwRDh6oJnoEo%2Ak_BAS107389215389%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atiaud-294080458546%3Akwd-155789616%3Alp9040245%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YZVcNNsENnH02-pWD53qm9c&lp_sr_snippet=1"><h2> 1. Elite Pyramids Boutique Hotel </h2></a></p>
				<p>
					<img src="IMAGES\p1.jpg">
			        <img src="IMAGES\p2.jpg">
			        <img src="IMAGES\p3.jpg">
			        <img src="IMAGES\p4.jpg">
			        <img src="IMAGES\p5.jpg">
			        <img src="IMAGES\p6.jpg">
			    </p>
			    <p><a href="https://www.fourseasons.com/alexandria/"><h2> 2. Four Seasons Hotel Alexandria At San Stefano  </h2></a></p>
			    <p>
			    	<img src="IMAGES\four1.jpg">
			        <img src="IMAGES\four2.jpg">
			        <img src="IMAGES\four3.jpg">
			        <img src="IMAGES\four4.jpg">
			        <img src="IMAGES\four5.jpg">
			        <img src="IMAGES\four6.jpg">
			    </p>
			    <p><a href="https://www.hotel-negresco-nice.com/en"><h2> 3. Negresco Hotel </h2></a></p>
			    <p>
			    	<img src="IMAGES\ne6.jpg">
			        <img src="IMAGES\ne1.jpg">
			        <img src="IMAGES\ne3.jpg">
			        <img src="IMAGES\ne4.jpg">
			        <img src="IMAGES\ne5.jpg">
			        <img src="IMAGES\ne2.jpg">
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
	<a href="https://www.google.com/maps/place/Egypt/@26.6194394,21.8566593,5z/data=!3m1!4b1!4m5!3m4!1s0x14368976c35c36e9:0x2c45a00925c4c444!8m2!3d26.820553!4d30.802498"><button > MAP </button></a>
</div>
</div>
	<div id="slider">
		<div id="sliderbox">
			<img src="IMAGES/egypt1.jpg">
			<img src="IMAGES/egypt2.jpg">
			<img src="IMAGES/egypt3.jpg">
		</div>
	</div>
	<div>
		<section class="right">
			<div class="box">
				<ul>
					<li><h3>Best time to visit : October to April</h3></li>
				    <li><h3>Mainly Famous for : Ancient civilization, Monuments like Giza pyramids and Great Sphinx</h3></li>
				    <li><h3>Days to travel : 7</h3></li>
				</ul>
			</div>
			<h2>PLACES TO SEE AROUND EGYPT</h2>
			<p style="color: #057D31">__________________________________________________________________________________________________________________________</p>
		    <h3>EGYPT</h3>
		    <p>Egypt is a country that brings to mind the exotic. Beautiful pyramids, mysterious mummies and lots of gold. That is what everybody perceives Egypt as. But it is so much more. There is Cairo, its most famous city, the river Nile, desert adventures, its temples and mosques and the general aura of history rooted in the culture that pervades the entire country.</p>
		    <h3>CAIRO</h3>
		    <p>Cairo, the capital of Egypt, is essentially a stunning white desert and one of the greatest megacities in the world. Exotic with its rich history and cultures, Cairo is one city that travellers absolutely love. Go beyond the modern hustle and you will find the ancient yet strikingly brilliant architecture that has been standing since centuries. Full of vigour, you can get the true feel of the daily Egyptian life in this city that attracts millions of tourists from all over the world.</p>
		    <h3>PYRAMIDS OF GIZA</h3>
		    <p>Fantastically attractive, the pyramids of Giza are a must-visit for all the tourists. These fourth dynasty funerary pyramids are located on the edge of the city and have been wooing travellers since centuries. Pyramids of Giza have always been one of the best highlights of the city. The heat and the dust appear to be trivial to explorers when they experience the superb Pyramid of Cheops, which is the biggest pyramid in the Giza collection. Otherwise called the Great Pyramid or the Pyramid of Khufu, it has a plain wonderful tomb chamber with a sarcophagus.</p>
		    <h3>AL-AZHAR MOSQUE</h3>
		    <p>A remarkable establishment in the heart of the city, Al-Azhar Mosque is the most marvellous building which attracts millions of visitors throughout the year. Having built in AD972, It is really old and on of the prime landmarks in the city. Al-Azhar Mosque is right in the centre of the downtown area and in addition to being a mosque, it is one of the oldest universities in the world. The spectacular landmark has a huge primary gateway allowing visitors to enter inside and explore the stunning architecture of this marvel. The five minarets of the mosque can be clearly seen and felt. Visitors often sit inside and pray in the central hall to get some respite from the outer busy world.</p>
		    <h3>THE CITADEL</h3>
		    <p>Right on the foothills of the enormous Mokattam, the fortress of the Saladin Citadel was established in the year 1176. It is one of the most remarkable creations of military infrastructure, which attracts a large number of tourists every year. Nicknamed the ‘Alabaster Mosque’, the most famous church in the Egypt is well known for the remarkable white stone with which the entire monument is built. Wander about the surroundings and witness on of the most fantastic views in the city. Walk in the northeast direction and you will come across the magnificent El-Nasir mosque , which is essentially a complex of many small museums standing together.</p>
		    <h3>ASFOUR CRYSTAL FACTORY</h3>
		    <p>Egypt has always been a home to crystals, stones and gems. The scattering bling of the bright crystals is a treat to the eyes.
		    The world famous Asfour Crystal factory has some really delightful, imaginative pieces for its visitors. Travellers come to witness the intricately made crystals, both big and small. Chandeliers with the sparkling and twinkling lights are well appreciated by one and all. The beautiful works in the showroom make it an enchanted spce. There is also a museum-like room attached to the factory which display all the greatest works to the tourists.</p>
		    <h3>RHODA ISLAND</h3>
		    <p>Situated along the amazing Nile in Central Cairo, Rhoda Island is a great mix of Al-Manyal museums and green gardens. Rhoda Island is one of the most ancient landmarks in the whole of Egypt and is a lucrative spot for tourists from over the world. The flawless Island of Rhoda is located towards the south of gezira. An abode to Monastili Palace, which is a huge landmark attraction for every visitor, describes the magnificent Egyptian architecture. With a fascinating history, this island is bound to woo travellers whenever they are in the city of Cairo.</p>
		    <h3>AL-AZHAR PARK</h3>
		    <p>Spread across a sprawling area of 30 hectares, the Al-Azhar Park in Cairo is another place which is going to leave you spellbound with its beauty. The park is surrounded by some of the most historic and significant districts of Cairo city, and is a must visit place for tourists as well as local residents of the city. Initially existing as a vast dumping site for the city’s garbage back during the 1980s, the city, as well as the Al-Azhar Park has undergone significant transformation. Present day, the park is playing a crucial role in amplifying the panorama of the place.</p>
		    <h3>LUXOR</h3>
		    <p>Luxor is famously known as a religious hotbed of Egypt. Located in Southern Egypt, Luxor is a beautiful city, divided into several districts. It has beautiful temples, rivers, a sprawling desert and the famous Western Valley Ruins. Luxor was the then city of Thebes and it had a number of different names. ¥The city of the 100 gates, ¥Southern City, etc were some of the names accorded to it. Today, it is visited by hundreds of tourists every year, on account of its popular spots such as the Luxor Temple, Karnak Temple, Valley of the Kings and Valley of the Queens, to name a few. Divided into East Bank and West Bank, the city has lots of sites to see as well as lots of things to do.</p>
		    <h3>KARNAK</h3>
		    <p>Karnak is an ancient temple site and was also the main religious centre of the New Kingdom. It was built for the local God, Amun. Located at the East Bank in Thebes, Karnak is filled with ancient architecture in the form of temples, shrines, elaborate gateways known as pylons, etc. The walls inside are festooned with intricate carvings such as those of religious festivals, coronations and more. It also houses the Amen-ra temple and more than 200 constructions.</p>
		    <h3>MUMMIFICATION MUSEUM</h3>
		    <p>If you have ever been intrigued by the process of embalming and mummification that the Egyptians were masters, at visit the Mummification Museum in downtown Luxor. This museum presents illustrations of the entire process of mummification. The objects used for mummification, mummies of both humans and animals, information on what kind of items used to be buried earlier along with the dead, are the kinds of things you can expect to find in this museum.</p>
		    <h3>VALLEY OF THE KINGS</h3>
		    <p>The Valley of the Kings lies along the banks of River Nile. It essentially contains all of 63 tombs, including those of the greatest ancient pharaohs like Hatshepsut and Thutmose I. This ancient valley was formed naturally, as a result of years and years of rainfall. Out of the 63 tombs located here, 26 belong to the kings and the rest belong to members of the royal family and those with good social standing. Carved from the cliffs themselves, these tombs are not left bare, but are covered with drawings and depictions of their then religious beliefs.</p>
		</section>
		<section class="left">
			<p><img src="IMAGES/egypt4.jpg"></p>
		    <p><img src="IMAGES/egypt5.jpg"></p>
		    <p><img src="IMAGES/egypt6.jpg"></p>
		    <p><img src="IMAGES/egypt7.jpg"></p>
		    <p><img src="IMAGES/egypt8.jpg"></p>
		    <p><img src="IMAGES/egypt9.jpg"></p>
		</section>
	</div>
	<footer class="footer" class="container" style="margin-top: 2200px;">
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