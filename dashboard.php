<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wanderscape</title>
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
  <div id="slider">
    <div id="sliderbox">
        <img src="images/img1.jpg">
        <img src="images/img2.jpg">
        <img src="images/img3.jpg">
        <img src="images/img4.jpg">
    
  </div>
</div>
<h1 align="center">-Explore Our Top Destinations-</h1>
<section>
<div class="row">
  <div class="column">
    <div class="boxs"><a href="dubai.php" style="text-decoration: none">
      <div class="imgBx">
        <img src="images/dubai.jpg">
      </div>
      <div class="content">
        <h3>Dubai</h3>
      </div></a>
    </div>
   </div>
   <div class="column">
    <div class="boxs"><a href="bhutan.php" style="text-decoration: none">
      <div class="imgBx">
        <img src="images/Bhutan.jpg">
      </div>
      <div class="content">
        <h3>Bhutan</h3>
      </div></a>
    </div>
   </div>
   <div class="column">
    <div class="boxs"><a href="thailand.php" style="text-decoration: none">
      <div class="imgBx">
        <img src="images/phuket.jpg">
      </div>
      <div class="content">
        <h3>Thailand</h3>
      </div></a>
    </div>
   </div>
   <div class="column">
    <div class="boxs"><a href="singapore.php" style="text-decoration: none">
      <div class="imgBx">
        <img src="images/singapore.jpg">
      </div>
      <div class="content">
        <h3>Singapore</h3>
      </div></a>
    </div>
   </div>
   <div class="column">
    <div class="boxs"><a href="andaman.php" style="text-decoration: none">
      <div class="imgBx">
        <img src="images/a.jpg">
      </div>
      <div class="content">
        <h3>Andaman</h3>
      </div></a>
    </div>
   </div>
</div>
</section>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
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
  
   


  <!-- jQuery (Bootstrap JS plugins depend on it) -->

  <script src="js/script.js"></script>
</body>
</html>