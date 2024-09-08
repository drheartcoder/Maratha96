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
.style2 {
	font-size: 14px;
	font-weight: bold;
}
-->
</style>
<?php

if(isset($_POST['done'])!="")
{
	if(isset($_POST['name'])=="")
	{
	$error_name = "Please Enter Name";
	$error=1;
	}
	
	
	/*if (strlen($_POST['email']) < 1) 
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
	
	
	if($_POST['phone']=="")
	{
	$error_phone = "Please Enter Phone No.";
	$error=1;
	}
	*/
		
		if(!preg_match('/^1?[0-9]{10}$/', $_POST['phone']))
		{
			$error_phone = "Please Provide Valid Phone No.";
			$error=1;
		}

	
	
	if(isset($_POST['message'])=="")
	{
	$error_message = "Please Enter Message";
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
	
	$to = "contactmaratha96kuli@gmail.com";
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

<td bgcolor="#FFFFFF">' . $_POST["message"] . '</td>

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
 <form id="form1" name="form1" method="post" action="">
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
          <div class="tp"><br />
            Contact Us <br />
            <br />
          </div>
          <div class="in">
             <p class="style2">Maratha 96 Kuli </p>
            Jijau Maratha Vadhu Var Suchak Kendre.<br />
            
            Plot No 13 Parishram Nivas,
            Near New Maratha Darbar Hotel,<br />
			Kalyan Nagar, Taroda(Bu).<br />
			Nanded - 431605.
            <br />
            <br />
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="25"><br /></td>
              </tr>
              <tr>
                <td height="49"><p><strong>Mobile:</strong> </p>
                  <p> <br />
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Kadam</strong>: 8796849199<br /> 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Adv.Nalawade</strong>:  09421972060<br />
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong> Balaji Mule</strong>: 9822990596<br />
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td>
              </tr>
              <tr>
                <td height="25"><strong>Email:</strong> contactmaratha96kuli@gmail.com</td>
              </tr>
              <tr>
                <td height="25">&nbsp;</td>
              </tr>
            </table>
            <br />
          </div>
		  <div class="tp"><br />
            Enquiry <br />
            <br />
          </div>
          <div class="in">
            <table width="100%" border="0" cellspacing="3" cellpadding="4">
              <tr>
                <td width="13%"><strong>Name*</strong></td>
                <td width="3%"><strong>:</strong></td>
                <td width="84%"><label>
                  <input name="name" type="text" value="<?php echo isset($_POST['name']);?>" id="name" />
                  <font color="#FF0000" size="-1"><?php echo 	isset($error_name);?></font></label></td>
              </tr>
              <tr>
                <td><strong>Email</strong></td>
                <td><strong>:</strong></td>
                <td><label>
                  <input name="email" type="text" value="<?php echo isset($_POST['email']);?>" id="email" />
                  <font color="#FF0000" size="-1"><?php echo 	isset($error_email);?></font></label></td>
              </tr>
              <tr>
                <td><strong>Phone*</strong></td>
                <td><strong>:</strong></td>
                <td><label>
                  <input name="phone" type="text" value="<?php echo isset($_POST['phone']);?>" id="phone" />
                  <font color="#FF0000" size="-1"><?php echo 	isset($error_phone);?></font></label></td>
              </tr>
              <tr>
                <td><strong>Message*</strong></td>
                <td><strong>:</strong></td>
                <td><label>
                    <textarea name="message" id="message"><?php echo isset($_POST['message']);?></textarea>
					<font color="#FF0000" size="-1"><?php echo 	isset($error_message);?></font></label></td>
                </label></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="2"><label>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="done" id="done" value="submit" type="submit" />
				  </label></td>
              </tr>
            </table>
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
</form></body></html>