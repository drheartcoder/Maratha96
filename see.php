<?php
ob_start();
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
.style4 {font-size: 11px}
.style5 {color: #9A0000}
.style6 {color: #9A0000; font-weight: bold; font-size: 11px; }
.style8 {font-size: 11px; font-weight: bold; }
-->
</style>
</head>
<?php
if(isset($_POST['done'])!="")
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
	
	
	
	if(isset($_POST['mess'])=="")
	{
	$error_mess = "Please Enter Message";
	$error=1;
	}




if($error==0)
	
	{
	
	$to = "randyrock7@gmail.com";
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






}


?>

<?php
if(isset($_POST['submit'])!="")
{

	if(isset($_POST['gender'])=="Female")
	{
	
	$aaa = "SELECT * from bride where district = '".$_POST['district']."' ";
	$aaa_1 = mysqli_query($con,$aaa);
	$ccc = mysqli_num_rows($aaa_1);
		if($ccc>0)
		{
			 $mysearchresult = '<table cellspacing="3" cellpadding="3" border="0" width="100%">';
			while($ooo = mysqli_fetch_array($aaa_1)) { 
             $mysearchresult .= '<tr>
                        <td height="56" align="left"><span class="style4">' . $ooo['register_id'] . '</span></td>
                        <td><span class="style4">' . $ooo['height'] . '</span></td>
                        <td><span class="style4">' . $ooo['dateofbirth'] . '</span></td>
                        <td><span class="style4">' . $ooo['education'] . '</span></td>
                        <td><span class="style4">' .  $ooo['district'] . '</span></td>
                        <td><span class="style4">' .  $ooo['occupation'] . '</span></td>
                      </tr>';
				} 
		  $mysearchresult .= '</table>';
		}
		else
		{
		  $mysearchresult = "No, Matches Found For The Search";
		}



	}

else
	{
	

		$aaa = "SELECT * from bridegroom Where district = '".$_POST['district']."' ";
		$aaa_1 = mysqli_query($con,$aaa);
		$ccc = mysqli_num_rows($aaa_1);
		if($ccc>0)
		{
			$mysearchresult = '<table cellspacing="3" cellpadding="3" border="0" width="100%">';
			while($ooo = mysqli_fetch_array($aaa_1)) { 
             $mysearchresult .= '<tr>
                        <td height="56" align="left"><span class="style4">' . $ooo['register_id'] . '</span></td>
                        <td><span class="style4">' . $ooo['height'] . '</span></td>
                        <td><span class="style4">' . $ooo['dateofbirth'] . '</span></td>
                        <td><span class="style4">' . $ooo['education'] . '</span></td>
                        <td><span class="style4">' .  $ooo['district'] . '</span></td>
                        <td><span class="style4">' .  $ooo['occupation'] . '</span></td>
                      </tr>';
				} 
		  $mysearchresult .= '</table>'; 
		}
		else
		{
		 $mysearchresult = "No, Matches Found For The Search";
		}

	}

}


if(isset($_POST['search'])!="")
{

	if(isset($_POST['gender'])=="Female")
	{
	
	$ttt = "SELECT * from bride where district = '".$_POST['district']."' ";
	$ttt_1 = mysqli_query($con,$ttt);
	$ddd = mysqli_num_rows($ttt_1);
		if($ddd>0)
		{
			$mysearchresult = '<table cellspacing="3" cellpadding="3" border="0" width="100%">';
			while($row = mysqli_fetch_array($ttt_1)) { 
             $mysearchresult .= '<tr>
                        <td height="56" align="left"><span class="style4">' . $row['register_id'] . '</span></td>
                        <td><span class="style4">' . $row['height'] . '</span></td>
                        <td><span class="style4">' . $row['dateofbirth'] . '</span></td>
                        <td><span class="style4">' . $row['education'] . '</span></td>
                        <td><span class="style4">' .  $row['district'] . '</span></td>
                        <td><span class="style4">' .  $row['occupation'] . '</span></td>
                      </tr>';
				} 
		  $mysearchresult .= '</table>';
		}
		else
		{
			$mysearchresult = "No, Matches Found For The Search";
		}



	}

else
	{


		$ttt = "SELECT * from bridegroom Where district = '".$_POST['district']."' ";
		$ttt_1 = mysqli_query($con,$ttt);
		$ddd = mysqli_num_rows($ttt_1);
		if($ddd>0)
		{
			$mysearchresult = '<table cellspacing="3" cellpadding="3" border="0" width="100%">';
			while($row = mysqli_fetch_array($ttt_1)) { 
             $mysearchresult .= '<tr>
                        <td height="56" align="left"><span class="style4">' . $row['register_id'] . '</span></td>
                        <td><span class="style4">' . $row['height'] . '</span></td>
                        <td><span class="style4">' . $row['dateofbirth'] . '</span></td>
                        <td><span class="style4">' . $row['education'] . '</span></td>
                        <td><span class="style4">' .  $row['district'] . '</span></td>
                        <td><span class="style4">' .  $row['occupation'] . '</span></td>
                      </tr>';
				} 
		  $mysearchresult .= '</table>';
		}
		else
		{
			$mysearchresult = "No, Matches Found For The Search";
		}

	}

}



?>

<body>
 <form id="form1" name="form1" method="post" action="">
<!--header-->
<div id="header">
	<div id="head-wrap">
    <div id="ban">
    <div id="search">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="39" align="right" valign="middle"><a href="search.php"><img src="images/search-now.gif" alt="search now" width="128" height="31" border="0" /></a></td>
        </tr>
        <tr>
          <td height="30"><a href="index.php" class="top-link">Home</a><span class="arial12bold">&nbsp;&nbsp; l&nbsp;&nbsp; </span><a href="aboutus.php" class="top-link">About us</a><span class="arial12bold">&nbsp; &nbsp;l&nbsp;&nbsp; </span><a href="contactus.php" class="top-link">Contact us</a></td>
        </tr>
      </table>
    </div>
    </div>
    <div id="nav">
    	<div class="nav-lft"><img src="images/link-lft.png" alt="lft" width="12" height="41"></div>
      <div class="nav-rht"><img src="images/link-rht.png" alt="rht"></div>
    	<ul id="topnav">
    		<li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="register.php">New Registration</a></li>
            <li></li>
          <li><a href="rules.php">Rules</a></li>
            <li><a href="success.php">Success Stories</a></li>
            <li><a href="paymentoption.php">Payment Option</a></li>
            <li><a href="contactus.php">Contact Us </a></li>
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
                	<li><a href="bridegroom.php">Grooms</a></li>
                    <li><a href="bride.php">Brides</a></li>
                    <li><a href="divorcee.php">Divorcee</a></li>
                    <li><a href="widow.php">Widow / Widower</a></li>
                    <li><a href="response.php">Response</a></li>
              </ul>
                 <div class="style1 topic"><strong>Search</strong></div>
<ul id="bx1">
                	<li><a href="search.php">Advance Search</a></li>
                    <li><a href="quick_search.php">Quick Search</a></li>
                    <li><a href="search_region.php">Search by Location</a></li>
              </ul>
            </div>
        	<div id="bx2"><a href="register.php"><img src="images/ad1.jpg" alt="ad" width="212" height="238" border="0"></a></div>
			<div id="enquiry">
			  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><span class="topic style1"><strong>Enquiry</strong></span> </td>
                </tr>
                <tr>
                  <td>&nbsp;	</td>
                </tr>
                <tr>
                  <td><table border="0" cellpadding="3" cellspacing="0" width="100%">
                    <tbody>
                      
                      <tr>
                        <td width="44%" height="30" align="left">Name: </td>
                        <td width="56%" align="left"><label>
                          <input name="name" type="text" value="<?php echo $_POST['name'];?>" id="name" width="100"/>
                        <br /><font color="#FF0000" size="-1"><?php echo $error_name;?></font></label></td>
                      </tr>
                      
                      <tr>
                        <td align="left">Phone : </td>
                        <td align="left"><input name="phone" type="text" value="<?php echo $_POST['phone'];?>" id="phone" width="100"/><br /><font color="#FF0000" size="-1"><?php echo $error_phone;?></font></td>
                      </tr>
                      <tr>
                        <td align="left">Email : </td>
                        <td align="left"><input name="email" type="text" value="<?php echo $_POST['email'];?>" id="email" width="100"/><br /><font color="#FF0000" size="-1"><?php echo $error_email;?></font></td>
                      </tr>
                      <tr>
                        <td align="left">Message : </td>
                        <td align="left"><label>
                          <textarea name="mess" cols="15" id="mess"><?php echo $_POST['mess'];?></textarea>
                        <br /><font color="#FF0000" size="-1"><?php echo $error_mess;?></font></label></td>
                      </tr>
                      <tr>
                        <td align="left">&nbsp;</td>
                        <td align="left"><input name="done" id="done" value="done" type="submit" /></td>
                      </tr>
                    </tbody>
                  </table></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;	</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
              </table>
			</div>
      </div>
        <div id="rht">
        	<div id="tp">
            	<div id="bx1">
            	 
            	    <table border="0" cellpadding="0" cellspacing="0" width="230">
                      <tbody><tr>
                        <td><table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tbody><tr>
                              <td width="60"><img src="images/ico01.gif" alt="icon" height="49" width="49"></td>
                              <td class="topic01">Smart Search</td>
                            </tr>
                        </tbody></table></td>
                      </tr>
                      <tr>
                        <td><table border="0" cellpadding="3" cellspacing="0" width="100%">
                            <tbody><tr>
                              <td align="left" width="45%">Looking for a : </td>
                              <td align="left"><input name="gender" id="radio" value="Male" type="radio">
                              Male<input name="gender" id="gender" value="Female" type="radio">
                              Female</td>
                            </tr>
                            <tr>
                              <td align="left">Age : </td>
                              <td align="left"><label>
                                <input name="textfield" id="textfield" size="2" maxlength="2" type="text">
                              to 
                              <input name="textfield2" id="textfield2" size="2" maxlength="2" type="text">
                              </label></td>
                            </tr>
                            <tr>
                              <td align="left">Graduation : </td>
                              <td align="left"><label>
                              <select name="district" id="district">
                                <option value="nashik">Nashik</option>
                                <option selected="selected" value="pune">Pune</option>
                              </select>
                              </label></td>
                            </tr>
                            
                            <tr>
                              <td align="left">&nbsp;</td>
                              <td align="left"><label>
                                <input name="submit" id="submit" value="submit" type="submit">
                              </label></td>
                            </tr>
                        </tbody></table></td>
                      </tr>
                  </tbody></table>
                  
           	    </div>
            
            	
            
            	<div id="bx2">
            	  
            	    <table border="0" cellpadding="0" cellspacing="0" width="230">
                      <tbody><tr>
                        <td><table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tbody><tr>
                              <td width="60"><img src="images/ico02.gif" alt="icon" height="41" width="51"></td>
                              <td class="topic01">Residential search</td>
                            </tr>
                        </tbody></table></td>
                      </tr>
                      <tr>
                        <td><table border="0" cellpadding="3" cellspacing="0" width="100%">
                            <tbody><tr>
                              <td align="left" width="45%">Looking for a : </td>
                              <td align="left"><input name="gender" id="gender" value="Male" type="radio">
                              Male<input name="gender" id="gender" value="Female" type="radio">
                              Female</td>
                            </tr>
                            <tr>
                              <td align="left">Age: </td>
                              <td align="left"><label>
                                <input name="textfield" id="textfield" size="2" maxlength="2" type="text">
                              to 
                              <input name="textfield2" id="textfield2" size="2" maxlength="2" type="text">
                              </label></td>
                            </tr>
                            <tr>
                              <td align="left">Location : </td>
                              <td align="left"><select name="district" id="district">
                                <option value="nashik">Nashik</option>
                                <option selected="selected" value="pune">Pune</option>
                              </select></td>
                            </tr>
                            
                            <tr>
                              <td align="left">&nbsp;</td>
                              <td align="left"><label>
                                <input name="search" id="search" value="search" type="submit">
                              </label></td>
                            </tr>
                        </tbody></table></td>
                      </tr>
                  </tbody></table>
                 
           	    </div>
            	<div id="bx3"></div>
            </div>
            <div id="mid">
           	  <div id="lft">
               	<div class="tp"><br />
               	  View Profiles<br />
               	  <br />
               	</div>
            <div class="in">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td><table border="0" cellpadding="2" cellspacing="0" width="100%">
                    <tbody>
                      <tr>
                        <td width="10%" height="20" align="left" valign="middle"><span class="style6">Reg.No</span></td>
                        <td width="18%" height="20" align="left" valign="middle"><span class="style3"><span class="style4">Height (ft.inch) </span>
                            </span><span class="style3"><br />
                            </span></td>
                        <td width="13%" height="20" align="left" valign="middle"><span class="style6">Bith Date</span></td>
                        <td width="18%" height="20" align="left" valign="middle"><span class="style6">Education</span></td>
                        <td width="24%" height="20" align="left" valign="middle"><span class="style6">Place of </span><span class="style5"><span class="style8">Residence</span></span></td>
                        <td width="17%" height="20" align="left" valign="middle"><span class="style6">Occupation</span></td>
                      </tr>
                      <tr>
                        <td height="56" colspan="6" align="left"><?php echo $mysearchresult;?></td>
                        </tr>
                    </tbody>
                  </table></td>
                </tr>
                <tr>
                  <td height="25">&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
              </table>
            </div>
                    
            <div id="bx2">
                   	  <div id="tp">Browse the directory</div>
                        <div id="in">
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td align="left" valign="top"><table width="60%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td align="left" valign="top"><table border="0" cellpadding="0" cellspacing="0" width="100%">
                                      <tbody>
                                        <tr>
                                          <td align="center" valign="top" width="137"><img src="images/m01.jpg" alt="lft" height="122" width="122" /></td>
                                          <td align="center" valign="top" width="146"><img src="images/f01.jpg" alt="rht" height="122" width="122" /></td>
                                        </tr>
                                        <tr>
                                          <td height="25" align="center" valign="middle"><a href="#" class="style3">Grooms...</a></td>
                                          <td align="center" valign="middle"><span class="style3"><a href="#" class="style3">Brides</a></span></td>
                                        </tr>
                                      </tbody>
                                  </table></td>
                                </tr>
                              </table></td>
                            </tr>
                          </table>
                        </div>
                </div>
                    
              </div>
           	  <div id="rht">
                <div id="bx1">
            	 
            	    <table border="0" cellpadding="0" cellspacing="0" width="200">
                      <tbody><tr>
                        <td><table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tbody><tr>
                              <td width="60"><img src="images/arrow.png" alt="icon" height="50" width="59"></td>
                              <td class="topic01">Free Joining</td>
                            </tr>
                        </tbody></table></td>
                      </tr>
                      <tr>
                        <td><table border="0" cellpadding="3" cellspacing="0" width="100%">
                            <tbody><tr>
                              <td align="left" width="45%"><strong>Register</strong></td>
                              </tr>
                            <tr>
                              <td align="left">and create your profile and add your photo.</td>
                              </tr>
                            <tr>
                              <td align="left"><strong>Search</strong></td>
                              </tr>
                            <tr>
                              <td align="left">for members who meet your criteria.</td>
                              </tr>
                            <tr>
                              <td align="left"><strong>Contact</strong></td>
                            </tr>
                            <tr>
                              <td align="left">membersyou like via email.</td>
                            </tr>
                        </tbody></table></td>
                      </tr>
                    </tbody></table>
           	    </div>
                <div id="bx3">
                	<a href="#"><img src="images/ad03.jpg" alt="ad" width="235" height="400" border="0" /></a> </div>
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