<?php
require('connection.inc.php');

if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!=''){

}else{
	header('location:login.php');
	die();
}
?>
<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Dashboard Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/themify-icons.css">
      <link rel="stylesheet" href="css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="css/flag-icon.min.css">
      <link rel="stylesheet" href="css/cs-skin-elastic.css">
      <link rel="stylesheet" href="css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   </head>
   <body>
      <aside id="left-panel" class="left-panel">
         <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
               <ul class="nav navbar-nav">
                  <li class="menu-title">Menu</li>
                   <li class="menu-item-has-children dropdown">
                     <a href="users.php" > User </a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="admin.php" > Admin </a>
                  </li>
				      
				  
				  
               </ul>
            </div>
         </nav>
      </aside>
      <div id="right-panel" class="right-panel">
         <header id="header" class="header">
            <div class="top-left">
               <div class="navbar-header">
                  <a class="navbar-brand" href="#"><img src="images/logo2.jpg" alt="Logo"></a>
                  <a class="navbar-brand hidden" href="index.php"><img src="images/logo2.jpg" alt="Logo"></a>
                  <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
               </div>
            </div>
            <div class="top-right">
               <div class="header-menu">
                    
                        <p style="padding:10px;">Welcome Admin</p>
                     
                       <p style="padding:10px;"><a  href="logout.php">Logout</a><p> 
                    
                 
               </div>
            </div>
         </header>