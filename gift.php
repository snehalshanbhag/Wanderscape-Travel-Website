<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Gift Vouchers</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	  <link rel="stylesheet" href="css/bootstrap.min.css">
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
  <section>
  	<div class="coupon">
  <div class="container">
    <h3><a href="https://thedubaimall.com/DUBAI MALL">DUBAI MALL</a></h3>
  </div>
  <img src="images/dubai1.jpg" alt="Avatar" style="width:100%;">
  <div class="container" style="background-color:white">
    <h2><b>20% OFF YOUR PURCHASE</b></h2>
   
  </div>
  <div class="container">
    <p>Use Promo Code: <span class="promo">BOH232</span></p>
    <p class="expire">Expires: Jan 03, 2021</p>
  </div>
</div>
<div class="coupon"style="margin-top: 20px;">
  <div class="container">
    <h3><a href="https://www.newzealand.com/int/plan/business/adventure-park/">NEW ZEALAND ADVENTURE CENTRE</a></h3>
  </div>
  <img src="images/ad3.jpg" alt="Avatar" style="width:100%;">
  <div class="container" style="background-color:white">
    <h2><b>35% OFF ON ANY ADVENTURE </b></h2>
  
  </div>
  <div class="container">
    <p>Use Promo Code: <span class="promo">NZH295</span></p>
    <p class="expire">Expires: Jan 03, 2021</p>
  </div>
</div>
<div class="coupon" style="margin-top: 20px;">
  <div class="container">
    <h3> <a href="https://www.marriott.com/hotels/travel/mesmc-jw-marriott-hotel-medan/">JW MARRIOT HOTEL MEDAN INDONESIA</a></h3>
  </div>
  <img src="images/bali.jpg" alt="Avatar" style="width:100%;">
  <div class="container" style="background-color:white">
    <h2><b>10% OFF YOUR PURCHASE</b></h2>
 
  </div>
  <div class="container">
    <p>Use Promo Code: <span class="promo">JJW789</span></p>
    <p class="expire">Expires: Jan 03, 2021</p>
  </div>
</div>
  </section>
  <footer class="footer" class="container" style="margin-top: 100px;">
  <div class="frow">
    <div class="fcol">
      <a href="dashboard.php"><img src="images/logo.jpg"></a>
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
</body>
</html>