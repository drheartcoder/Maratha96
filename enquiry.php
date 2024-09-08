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
<?php

if(isset($_POST['submit'])!="")
{
	if(isset($_POST['name'])=="")
	{
	$error_name = "Please Enter Name";
	$error=1;
	}
	
	
	if (strlen($_POST['email']) < 1) 
	{
	$error_email = "Please Provide Email";
	$error = 1;
	} 
	else 
	{
		if (!preg_match("/^[\ a-z0-9._-]+@[a-z0-9.-]+\.[a-z]{2,6}$/i", $_POST['email'])) 
		{
			$error_email = "Please Provide Valid Email Address";
			$error = 1;
		}
	}
	
	
	if(isset($_POST['phone'])=="")
	{
	$error_phone = "Please Enter Phoneno";
	$error=1;
	}
	
	
	
	


	if($error==0)
	
	{
	
	
	$sql = "INSERT INTO contact(name,email,phone,message)VALUES(
			'".$_POST['name']."',
			'".$_POST['email']."',
			'".$_POST['phone']."',
			'".$_POST['message']."'
			)";
			
	$sql_1 = mysqli_query($con,$sql);
	if(!$sql_1)
	{
	die("error in insert:".mysqli_query());
	}
	
	$to = "info@maratha96kuli.com";
	$sub = "96 Kuli Maratha- Contact Details";
	$mailbody_client = '<html>
<head>
<title>96 Kuli Maratha - Contact Us</title>
</head>
<body>
<p>Hello Administrator, Please Check Contact Us Details from ' . $_POST["name"] . '</p>

<br />

<table width="85%" border="0" align="center" cellpadding="10" cellspacing="1" bgcolor="#CCCCCC">


<tr>

<td bgcolor="#FFFFFF"><div align="left"><font color="FF0000">*</font><strong>Name :</strong></div></td>

<td bgcolor="#FFFFFF">' . $_POST["name"] . '</td>

</tr>

<tr>

<td bgcolor="#FFFFFF"><div align="left">&nbsp;&nbsp;<strong>Email :</strong></div></td>

<td bgcolor="#FFFFFF">' . $_POST["email"] . '</td>

</tr>







<tr>

<td bgcolor="#FFFFFF"><div align="left"><font color="FF0000">*</font><strong>Phoneno :</strong></div></td>

<td bgcolor="#FFFFFF">' . $_POST["phone"] . '</td>

</tr>

<tr>

<td bgcolor="#FFFFFF"><div align="left"><font color="FF0000">*</font><strong>Message : </strong></div></td>

<td bgcolor="#FFFFFF">' . $_POST["mess"] . '</td>

</tr>


</table>

</body>
</html>';

$headers = "Content-type: text/html; charset=iso-8859-1";
@mail($to, $sub, $mailbody_client, $headers);
header("Location: thanks.php");
exit;


}


}


?>




<body>
<!--header-->
<div id="header">
	<div id="head-wrap">
    <div id="ban">
    <div id="search">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="39" align="right" valign="middle"><a href="#"><img src="images/search-now.gif" alt="search now" width="128" height="31" border="0" /></a></td>
        </tr>
        <tr>
          <td height="30"><a href="#" class="top-link">Home</a><span class="arial12bold">&nbsp;&nbsp; l&nbsp;&nbsp; </span><a href="#" class="top-link">About us</a><span class="arial12bold">&nbsp; &nbsp;l&nbsp;&nbsp; </span><a href="contactus.php" class="top-link">Contact us</a></td>
        </tr>
      </table>
    </div>
    </div>
    <div id="nav">
    	<div class="nav-lft"><img src="images/link-lft.png" alt="lft" width="12" height="41"></div>
      <div class="nav-rht"><img src="images/link-rht.png" alt="rht"></div>
    	<ul id="topnav">
    		<li><a href="index.php">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="register.php">New Registration</a></li>
            <li></li>
          <li><a href="#">Rules</a></li>
            <li><a href="#">Membership</a></li>
            <li><a href="success.php">Success Stories</a></li>
            <li><a href="#">Payment Option</a></li>
            <li><a href="#">Enquiry</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
    	</ul>
    </div>
	</div>
</div>
<!--contain-->
<div id="cont">
  <div id="cont-wrap">
    <div id="lft">
      <div id="bx1">
        <div class="topic style1"><strong>Quick Links</strong></div>
        <ul id="bx1">
          <li><a href="#">Rules</a></li>
          <li><a href="enroll.php">Enroll</a></li>
          <li><a href="#">Grooms</a></li>
          <li><a href="#">Brides</a></li>
          <li><a href="#">Divorcee</a></li>
          <li><a href="#">Widow / Widower</a></li>
          <li><a href="#">Response</a></li>
        </ul>
        <div class="style1 topic"><strong>Advance Search</strong></div>
        <ul id="bx1">
          <li><a href="#">AdvancedSearch</a></li>
          <li><a href="#">Quick Search</a></li>
          <li><a href="#">Search by Region</a></li>
        </ul>
      </div>
      <div id="bx2"><a href="#"><img src="images/ad1.jpg" alt="ad" width="212" height="238" border="0" /></a></div>
    </div>
    <div id="rht">
      <div id="tp"></div>
      <div id="mid">
        <div id="lft">
          <div class="tp"><br />
            Enquiry <br />
            <br />
          </div>
          <div class="in">
            <form id="form2" name="form2" method="post" action="">
              <table width="100%" border="0" cellspacing="3" cellpadding="4">
                <tr>
                  <td width="13%"><strong>Name*</strong></td>
                  <td width="3%"><strong>:</strong></td>
                  <td width="84%"><label>
                    <input name="name" type="text" value="<?php echo $_POST['name'];?>" id="name" />
                    <font color="#FF0000" size="-1"><?php echo 	$error_name;?></font></label></td>
                </tr>
                <tr>
                  <td><strong>Email*</strong></td>
                  <td><strong>:</strong></td>
                  <td><label>
                    <input name="email" type="text" value="<?php echo $_POST['email'];?>" id="email" />
                    <font color="#FF0000" size="-1"><?php echo 	$error_email;?></font></label></td>
                </tr>
                <tr>
                  <td><strong>Phone*</strong></td>
                  <td><strong>:</strong></td>
                  <td><label>
                    <input name="phone" type="text" value="<?php echo $_POST['phone'];?>" id="phone" />
                    <font color="#FF0000" size="-1"><?php echo 	$error_phone;?></font></label></td>
                </tr>
                <tr>
                  <td><strong>Message</strong></td>
                  <td><strong>:</strong></td>
                  <td><label>
                      <textarea name="message" id="message"><?php echo $_POST['message'];?></textarea>
                  </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td colspan="2"><label>
                    <input type="submit" name="submit" value="submit" />
                  </label></td>
                </tr>
              </table>
            </form>
          </div>
          <div id="bx2"></div>
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