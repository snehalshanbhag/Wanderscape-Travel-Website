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
  <section>
    <h1 align="center" >CONNECT WITH US</h1>
    <div class="srow" class="container">
      <div class="scol">
      <p><h5>WANDERSCAPE</h5></p>
      <h6><p> A2,ABC BUILDING,</p>
        <p>XYZ ROAD</p>
        <p>MUMBAI,MAHARASHTRA</p></h6>
    </div>
    <div class="scol">
      <p><h5>MOBILE NO.</h5></p>
      <h6><p>00000000</p>
        <p>11111111</p>
        </h6>
    </div>
    <div class="scol">
      <p><h5>EMAIL ID</h5></p>
      <h6><p>wanderscape@gmail.com</p>
        </h6>
    </div>
  </div>
  </section>
 <footer class="footer" class="container">
  <div class="frow">
    <div class="fcol">
      <a href="index.php"><img src="images/logo.jpg"></a>
    </div>
    <div class="fcol">
      <h6>Why Wanderscape?</h6>
      <p>This page is made as project for internship with Apsit Skills.It is a travel page which helps you to choose places you wish to visit.</p>
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
