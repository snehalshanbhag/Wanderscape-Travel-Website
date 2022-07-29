<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel Solo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
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
          <li><a href="contact.php"style="text-decoration: none">CONTACT US</a></li>
          <li><a href="about.php"style="text-decoration: none">ABOUT US</a></li>
          <div class="sign">
            <li><a href="logout.php" style="text-decoration: none">LOGOUT</a></li>
         </div>
         </ul>
        </div>
    </nav>
  </header>
<h2 align="center">TRAVEL SOLO</h2>

<div class="slider-holder">
        <span id="slider-image-1"></span>
        <span id="slider-image-2"></span>
        <span id="slider-image-3"></span>
        <span id="slider-image-4"></span>

        <div class="image-holder">
            <img src="images/malta1.jpg" class="slider-image" >
            <img src="images/philli.jpg" class="slider-image" >
            <img src="images/amsterdam.jpg" class="slider-image" >
            <img src="images/bali.jpg" class="slider-image" >
        </div>
        <div class="button-holder">
            <a href="#slider-image-1" class="slider-change"></a>
            <a href="#slider-image-2" class="slider-change"></a>
            <a href="#slider-image-3" class="slider-change"></a>
            <a href="#slider-image-4" class="slider-change"></a>
        </div>
    </div>
<h2 align="center">Visit These Places</h2>
<section>
<div class="row" >
	<div class="col">
		<div class="box">
			<div class="imgBx">
				<a href="thailand.php" style="text-decoration: none;"><img src="images/phuket.jpg">
			</div>
			<div class="content">
				<h2>Visit Thailand</h2></a>
				<p>Budget:46700/- per person</p>
				<p>Attraction:River-rides,Beaches,Climate</p>
				<p>Best time to visit:November-March</p>
			</div>
		</div>
	</div>
	<div class="col">
		<div class="box">
			<div class="imgBx">
				<a href="dubai.php" style="text-decoration: none;"><img src="images/dubai.jpg">
			</div>
			<div class="content">
				<h2>Visit Dubai</h2></a>
				<p>Budget:46700/- per person</p>
				<p>Attraction:Deserts,Gardens</p>
				<p>Best time to visit:November-April</p>
			</div>
		</div>
	</div>
	<div class="col">
		<div class="box">
			<div class="imgBx">
				<a href="russia.php" style="text-decoration: none;"><img src="images/russia.jpg">
			</div>
			<div class="content">
				<h2>Visit Russia</h2></a>
				<p>Budget:46700/- per person</p>
				<p>Attraction:Monumemts,Food,Climate</p>
				<p>Best time to visit:June-August</p>
			</div>
		</div>
	</div>
	<div class="col">
		<div class="box">
			<div class="imgBx">
				<a href="egypt.php" style="text-decoration: none;"><img src="images/egypt.jpg">
			</div>
			<div class="content">
				<h2>Visit Egypt</h2></a>
				<p>Budget:46700/- per person</p>
				<p>Attraction:Pyramids,Climate</p>
				<p>Best time to visit:October-April</p>
			</div>
		</div>
	</div>
	<div class="col">
		<div class="box">
			<div class="imgBx">
				<a href="bhutan.php" style="text-decoration: none;"><img src="images/bhutan.jpg">
			</div>
			<div class="content">
				<h2>Visit Bhutan</h2></a>
				<p>Budget:46700/- per person</p>
				<p>Attraction:Temples,Hilly areas,Climate</p>
				<p>Best time to visit:October-December</p>
			</div>
		</div>
	</div>
	<div class="col">
		<div class="box">
			<div class="imgBx">
				<a href="canada.php" style="text-decoration: none;"><img src="images/cannada.jpg">
			</div>
			<div class="content">
				<h2>Visit Canada</h2></a>
				<p>Budget:46700/- per person</p>
				<p>Attraction:Food,Beaches,Climate</p>
				<p>Best time to visit:September-November</p>
			</div>
		</div>
	</div>
	
</div>
</section>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<footer class="footer" class="container" style="margin-top: 100px;">
  <div class="frow">
    <div class="fcol">
      <img src="images/logo.jpg">
    </div>
    <div class="fcol">
      <h6>Why Wanderscape?</h6>
      <p>This page is made as project for internship with Apsit Skills.It is a travel page which helps you to choose places you wish to visit</p>
    </div>
    <div class="fcol">
      <ul>
      	<li> <a href="dashboard.php" style="text-decoration: none;">Home</a></li>
       <li> <a href="contact.php" style="text-decoration: none;">Contact us</a></li>
       <li> <a href="about.php" style="text-decoration: none;">About us</a></li>
      </ul>
	</div>
  <div class="fcol">
    <h6>Address</h6>
    <p> ABC, MUMBAI,MAHARASHTRA.</p>
  </div>
</div>
</footer>
<script src="js/script.js"></script>

</body>
</html>