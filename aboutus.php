<?php
ob_start();
session_start();
include("connect.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>


<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>.: Maratha 96 Kuli :.</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {font-size: 18px}
.style3 {
	color: #9A0000;
	font-weight: bold;
}
-->
</style>
<body>
<!--header-->
<?php include_once('header.php'); ?>
<!--contain-->
<div id="cont">
  <div id="cont-wrap">
    <div id="lft">
      <div id="bx1">
        <div class="topic style1"><strong>Quick Links</strong></div>
        <ul id="bx1">
          <li><a href="bridegroom.php" title="वर">Grooms</a></li>
          <li><a href="bride.php" title="वधु">Brides</a></li>
          <li><a href="divorce_male.php" title="घटस्फोटित">Divorcee Male</a></li>
		  <li><a href="divorce_female.php" title="घटस्फोटित">Divorcee Female</a></li>
		  <li><a href="widower.php" title="विधवा">Widower</a></li>
          <li><a href="widow.php" title="विधूर">Widow</a></li>
          <li><a href="response.php">Response</a></li>
        </ul>
        <div class="style1 topic"><strong>Search</strong></div>
        <ul id="bx1">
          <li><a href="search.php">Advance Search</a></li>
          <li><a href="quick_search.php">Quick Search</a></li>
          <li><a href="search_region.php">Search by Location</a></li>
        </ul>
      </div>
      <div id="bx2"><a href="register.php"><img src="images/ad1.jpg" alt="ad" width="212" height="238" border="0" /></a></div>
    </div>
    <div id="rht">
      <div id="tp"></div>
      <div id="mid">
        <div id="lft">
         <div class="in">
             <img src="images/au.gif" alt="about us" width="611" height="830" />
          </div>
		            
          <div id="bx3"><a href="#"></a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--foot-->
<div id="foot">
  <div id="foot-wrap">
    <p><a href="index.php" class="footerlink">Home</a> - <a href="register.php" class="footerlink">Register</a> - <a href="search.php" class="footerlink">Search</a> - <a href="rules.php" class="footerlink">Rules</a> - <a href="aboutus.php" class="footerlink">About Us</a> - <a href="contactus.php" class="footerlink">Contact Us</a> - <a href="success.php" class="footerlink">Submit Success Stories</a></p>
    <p> Copyright 2010-2011 maratha96kuli.com. All rights reserved.<br />
    </p>
  </div>
</div>
</body></html>