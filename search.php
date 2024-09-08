<?php
$id = isset($_GET['id']);
ob_start();
include("connect.php");
$i=1;
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
	
	
	if (strlen(isset($_POST['email'])) < 1) 
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








<?php
if(isset($_POST['submit'])!="")
{

	if(isset($_POST['gender'])=="Female")
	{
	
	$aaa = "SELECT * from bride where district = '".$_POST['district1']."' and occupation = '".$_POST['occupation']."' and age between '" . $_POST["age1"] . "' and '" . $_POST["age2"] . "' ";
	$aaa_1 = mysqli_query($con,$aaa);
	$ccc = mysqli_num_rows($aaa_1);
	
		if($ccc>0)
		{
			 $mysearchresult = '<table cellspacing="3" cellpadding="3" border="0" width="100%">';
			 
			
             $mysearchresult .= '<tr>
                    <td width="10%" align="center"><strong>Regno</strong></td>
                    <td width="12%" align="center"><strong>Height</strong></td>
					 <td width="16%" align="center"><strong>Date Of Birth </strong></td>
                    <td width="16%" align="center"><strong>Education</strong></td>
                    <td width="17%" align="center"><strong>Location </strong></td>
                    <td width="29%" align="center"><strong>Occupation</strong></td>
                  </tr>';
			 while($ooo = mysqli_fetch_array($aaa_1)) { 
			 
			 
			  if($i%2==0)
								  {
									$color="#f3f3f3";
								  }
								  else
								  {
									$color="#fec180";
								  }
			
			
			
			
			
			 
			 
			 
			 
			  $mysearchresult .= '<tr bgcolor= '. $color.' >
			
                        
						<td><a href="bride_profille.php?id='.$ooo['bride_id'].'" target="_blank">' . $ooo['register_id'] . '</a></td>

		         <td class="tb-td" align="center">' . $ooo['height'] . '</td>
                        <td align="center">' . $ooo['dateofbirth'] . '</td>
                        <td align="center">' . $ooo['education'] . '</td>
                        <td align="center">' .  $ooo['district'] . '</td>
                        <td>' .  $ooo['occupation'] . '</td>
                      </tr>';
				$i++;} 
		  $mysearchresult .= '</table>';
		}
		else
		{
		  $mysearchresult = "No, Matches Found For The Search";
		}



	}

else
	{
	

		$aaa = "SELECT * from bridegroom Where district = '".$_POST['district1']."' and occupation = '".$_POST['occupation']."' and age between '" . $_POST["age1"] . "' and '" . $_POST["age2"] . "'";
		$aaa_1 = mysqli_query($con,$aaa);
		$ccc = mysqli_num_rows($aaa_1);
		if($ccc>0)
		{
			$mysearchresult = '<table cellspacing="3" cellpadding="3" border="0" width="100%">';
			
			
			
             $mysearchresult .= '<tr>
                    <td width="10%" align="center"><strong>Regno</strong></td>
                    <td width="12%" align="center"><strong>Height</strong></td>
					 <td width="16%" align="center"><strong>Date Of Birth </strong></td>
                    <td width="16%" align="center"><strong>Education</strong></td>
                    <td width="17%" align="center"><strong>Location </strong></td>
                    <td width="29%" align="center"><strong>Occupation</strong></td>
                  </tr>';
			while($ooo = mysqli_fetch_array($aaa_1)) { 
			  if($i%2==0)
								  {
									$color="#f3f3f3";
								  }
								  else
								  {
									$color="#fec180";
								  }
			
			  $mysearchresult .= '<tr bgcolor= '. $color.' >
			
                        <td><a href="profille.php?id='.$ooo['bridegroom_id'].'" target="_blank">' . $ooo['register_id'] . '</a></td>
						<td align="center">' . $ooo['height'] . '</td>
                        <td align="center">' . $ooo['dateofbirth'] . '</td>
                        <td align="center">' . $ooo['education'] . '</td>
                        <td align="center">' .  $ooo['district'] . '</td>
                        <td>' .  $ooo['occupation'] . '</td>
                      </tr>';
				$i++;} 
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
	
	$ttt = "SELECT * from bride where district = '".$_POST['district']."' and age between '" . $_POST["age1"] . "' and '" . $_POST["age2"] . "' ";
	$ttt_1 = mysqli_query($con,$ttt);
	$ddd = mysqli_num_rows($ttt_1);
		if($ddd>0)
		{
			$mysearchresult = '<table cellspacing="3" cellpadding="3" border="0" width="100%">';
			
			
			$mysearchresult .= '<tr>
                    <td width="10%" ><strong>Regno</strong></td>
                    <td width="12%"  align="center"><strong>Height</strong></td>
					 <td width="16%"  align="center"><strong>Date Of Birth </strong></td>
                    <td width="16%"  align="center"><strong>Education</strong></td>
                    <td width="17%"  align="center"><strong>Location</strong></td>
                    <td width="29%"  align="center"><strong>Occupation</strong></td>
                  </tr>';
			 while($row = mysqli_fetch_array($ttt_1)) { 
			   if($i%2==0)
								  {
									$color="#f3f3f3";
								  }
								  else
								  {
									$color="#fec180";
								  }
			
              $mysearchresult .= '<tr bgcolor= '. $color.' >
                        <td height="25" align="left"><a href="bride_profille.php?id='.$row['bride_id'].'" target="_blank">' . $row['register_id'] . '</a></td>
                        <td align="center">' . $row['height'] . '</td>
                        <td align="center">' . $row['dateofbirth'] . '</td>
                        <td align="center">' . $row['education'] . '</td>
                        <td align="center">' .  $row['district'] . '</td>
                        <td>' .  $row['occupation'] . '</td>
                      </tr>';
				$i++;} 
		  $mysearchresult .= '</table>';
		}
		else
		{
			$mysearchresult = "No, Matches Found For The Search";
		}



	}

else
	{


		$ttt = "SELECT * from bridegroom Where district = '".$_POST['district']."' and age between '" . $_POST["age1"] . "' and '" . $_POST["age2"] . "' ";
		$ttt_1 = mysqli_query($con,$ttt);
		$ddd = mysqli_num_rows($ttt_1);
		if($ddd>0)
		{
			$mysearchresult = '<table cellspacing="3" cellpadding="3" border="0" width="100%">';
			
			$mysearchresult .= '<tr>
                    <td width="10%"><strong>Regno</strong></td>
                    <td width="12%" align="center"><strong>Height</strong></td>
					 <td width="16%" align="center"><strong>Date Of Birth </strong></td>
                    <td width="16%" align="center"><strong>Education</strong></td>
                    <td width="17%" align="center"><strong>Location </strong></td>
                    <td width="29%" align="center"><strong>Occupation</strong></td>
                  </tr>';
			 while($row = mysqli_fetch_array($ttt_1)) { 
			 if($i%2==0)
								  {
									$color="#f3f3f3";
								  }
								  else
								  {
									$color="#fec180";
								  }
			
              $mysearchresult .= '<tr bgcolor= '. $color.' >
		
                        <td height="25" align="left"><a href="profille.php?id='.$row['bridegroom_id'].'" target="_blank">' . $row['register_id'] . '</a></td>
                        <td align="center">' . $row['height'] . '</td>
                        <td align="center">' . $row['dateofbirth'] . '</td>
                        <td align="center">' . $row['education'] . '</td>
                        <td align="center">' .  $row['district'] . '</td>
                        <td>' .  $row['occupation'] . '</td>
                      </tr>';
				$i++; } 
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
                	<li><a href="bridegroom.php" title="वर">Grooms</a></li>
          <li><a href="bride.php" title="वधु">Brides</a></li>
          <li><a href="divorce.php" title="घटस्फोटित">Divorcee</a></li>
          <li><a href="widow.php" title="विधूर / विधवा">Widow / Widower</a></li>
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
                  <td><table border="0" cellpadding="3" cellspacing="0" width="100%" class="tb">
                    <tbody>
                      
                      <tr>
                        <td width="44%" height="30" align="left" class="tb-td">Name</td>
                        <td width="56%" align="left" class="tb-td"><label>
                          <input name="name" type="text" value="<?php echo isset($_POST['name']);?>" id="name" width="100"/>
                        <br /><font color="#FF0000" size="-1"><?php echo isset($error_name);?></font></label></td>
                      </tr>
                      
                      <tr>
                        <td align="left" class="tb-td">Phone  </td>
                        <td align="left" class="tb-td"><input name="phone" type="text" value="<?php echo isset($_POST['phone']);?>" id="phone" width="100"/><br /><font color="#FF0000" size="-1"><?php echo isset($error_phone);?></font></td>
                      </tr>
                      <tr>
                        <td align="left" class="tb-td">Email </td>
                        <td align="left" class="tb-td"><input name="email" type="text" value="<?php echo isset($_POST['email']);?>" id="email" width="100"/><br /><font color="#FF0000" size="-1"><?php echo isset($error_email);?></font></td>
                      </tr>
                      <tr>
                        <td align="left" class="tb-td">Message  </td>
                        <td align="left" class="tb-td"><label>
                          <textarea name="mess" cols="15" id="mess"><?php echo isset($_POST['mess']);?></textarea>
                        <br /><font color="#FF0000" size="-1"><?php echo isset($error_mess);?></font></label></td>
                      </tr>
                      <tr>
                        <td align="left" class="tb-td">&nbsp;</td>
                        <td align="left" class="tb-td" ><input name="done" id="done" value="submit" type="submit" /></td>
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
                              <td align="left"><input name="gender" type="radio" id="radio" value="Male" checked="checked">
                              Male<input name="gender" id="gender" value="Female" type="radio">
                              Female</td>
                            </tr>
                            <tr>
                              <td align="left">Age : </td>
                              <td align="left">
                                <input name="age1" id="age1" size="2" maxlength="2" type="text">
                              to 
                              <input name="age2" id="age2" size="2" maxlength="2" type="text">
                              </td>
                            </tr>
                            <tr>
                              <td align="left">occupation:</td>
                              <td align="left"><label>
                                <select name="occupation" id="occupation">
                        <option value="S.S.C">S.S.C</option>
                        <option value="H.S.C">H.S.C</option>
                        <option value="Graduate">Graduate</option>
                        <option value="Doctor">Doctor</option>
                        <option value="Engineer">Engineer</option>
                        <option value="Advocate">Advocate</option>
                        <option value="Actor">Actor</option>
                        <option selected="selected" value="Business">Business</option>
						<option value="Other">Other</option>
                      </select>
                              </label></td>
                            </tr>
                            
                            <tr>
                              <td align="left">Location:</td>
                              <td align="left"><label>
                                <select name="district1" id="select">
                                  <option value="nashik">Nashik</option>
                                  <option selected="selected" value="pune">Pune</option>
                                  <option value="Ahmednagar">Ahmednagar</option>
                                  <option value="Jalgaon">Jalgaon</option>
                                  <option value="Akola">Akola</option>
                                  <option value="Jalna">Jalna</option>
                                  <option value="Raigad">Raigad</option>
                                  <option value="Amravati">Amravati</option>
                                  <option value="Kolhapur">Kolhapur</option>
                                  <option value="Ratnagiri">Ratnagiri</option>
                                  <option value="Aurangabad">Aurangabad</option>
                                  <option value="Latur">Latur</option>
                                  <option value="SangliBeed">Sangli Beed</option>
                                  <option value="Mumbai">Mumbai</option>
                                  <option value="Satara">Satara</option>
                                  <option value="Bhandara">Bhandara</option>
                                  <option value="Sindhudurg">Sindhudurg</option>
                                  <option value="Buldhana">Buldhana</option>
                                  <option value="Nagpur">Nagpur</option>
                                  <option value="Solapur">Solapur</option>
                                  <option value="Chandrapur">Chandrapur</option>
                                  <option value="Nanded">Nanded</option>
                                  <option value="Thane">Thane</option>
                                  <option value="Dhule">Dhule</option>
                                  <option value="Nandurbar">Nandurbar</option>
                                  <option value="Wardha">Wardha</option>
                                  <option value="Gadchiroli">Gadchiroli</option>
                                  <option value="Washim">Washim</option>
                                  <option value="Gondia">Gondia</option>
                                  <option value="Osmanabad">Osmanabad</option>
                                  <option value="Yavatmal">Yavatmal</option>
                                  <option value="Hingoli">Hingoli</option>
                                  <option value="Parbhani">Parbhani</option>
								   <option value="Other">Other</option>
								  
                                </select>
                              </label></td>
                            </tr>
                            <tr>
                              <td align="left">&nbsp;</td>
                              <td align="left"><input name="submit" id="submit" value="submit" type="submit" /></td>
                            </tr>
                        </tbody></table></td>
                      </tr>
                  </tbody></table>
                  
           	        <p>&nbsp;</p>
           	        <p>&nbsp;</p>
            	</div>
            <br><br><br><br><br><br>
            	
            
           	  <div id="bx2">
           	      <table width="249" height="186" border="0" cellpadding="0" cellspacing="0">
                  <tbody>
                    <tr>
                      <td><table border="0" cellpadding="0" cellspacing="0" width="100%">
                          <tbody>
                            <tr>
                              <td width="60"><img src="images/ico02.gif" alt="icon" height="41" width="51" /></td>
                              <td class="topic01">Search By Location</td>
                            </tr>
                          </tbody>
                      </table></td>
                    </tr>
                    <tr>
                      <td><table border="0" cellpadding="3" cellspacing="0" width="100%">
                          <tbody>
                            <tr>
                              <td align="left" width="45%">Looking for a : </td>
                              <td align="left"><input name="gender" type="radio" id="radio2" value="Male" checked="checked" />
                                Male
                  <input name="gender" id="radio2" value="Female" type="radio" />
                                Female</td>
                            </tr>
                            <tr>
                              <td align="left">Age: </td>
                              <td align="left"><input name="textfield" id="textfield" size="2" maxlength="2" type="text" />
                                to
                                <input name="textfield2" id="textfield2" size="2" maxlength="2" type="text" />
                              </td>
                            </tr>
                            <tr>
                              <td align="left">Location : </td>
                              <td align="left"><select name="district" id="district">
                                  <option value="nashik">Nashik</option>
                                  <option selected="selected" value="pune">Pune</option>
                                  <option value="Ahmednagar">Ahmednagar</option>
                                  <option value="Jalgaon">Jalgaon</option>
                                  <option value="Akola">Akola</option>
                                  <option value="Jalna">Jalna</option>
                                  <option value="Raigad">Raigad</option>
                                  <option value="Amravati">Amravati</option>
                                  <option value="Kolhapur">Kolhapur</option>
                                  <option value="Ratnagiri">Ratnagiri</option>
                                  <option value="Aurangabad">Aurangabad</option>
                                  <option value="Latur">Latur</option>
                                  <option value="SangliBeed">Sangli Beed</option>
                                  <option value="Mumbai">Mumbai</option>
                                  <option value="Satara">Satara</option>
                                  <option value="Bhandara">Bhandara</option>
                                  <option value="Sindhudurg">Sindhudurg</option>
                                  <option value="Buldhana">Buldhana</option>
                                  <option value="Nagpur">Nagpur</option>
                                  <option value="Solapur">Solapur</option>
                                  <option value="Chandrapur">Chandrapur</option>
                                  <option value="Nanded">Nanded</option>
                                  <option value="Thane">Thane</option>
                                  <option value="Dhule">Dhule</option>
                                  <option value="Nandurbar">Nandurbar</option>
                                  <option value="Wardha">Wardha</option>
                                  <option value="Gadchiroli">Gadchiroli</option>
                                  <option value="Washim">Washim</option>
                                  <option value="Gondia">Gondia</option>
                                  <option value="Osmanabad">Osmanabad</option>
                                  <option value="Yavatmal">Yavatmal</option>
                                  <option value="Hingoli">Hingoli</option>
                                  <option value="Parbhani">Parbhani</option>
                                  <option value="Other">Other</option>
                              </select></td>
                            </tr>
                            <tr>
                              <td align="left">&nbsp;</td>
                              <td align="left"><label>
                                <input name="search" id="search2" value="search" type="submit" />
                              </label></td>
                            </tr>
                          </tbody>
                      </table></td>
                    </tr>
                  </tbody>
       	        </table>
           	  </div>
       	  </div>
        	<div id="mid">
           	  <div id="lft">
               	<div class="tp"><br />
               	<br />
               	  <br />
               	</div>
            <div class="in">
              <table width="600" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    
                     <br /><br /><br /><br /><tr>
                      <td><?php echo isset($mysearchresult);?></td>
                      <td></td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
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
                   	  <div id="tp"></div>
              <div id="in"></div>
                </div>
                    
              </div>
       	  </div>
        </div>
    </div>
</div>
<!--foot-->
<div id="foot">
  <div id="foot-wrap">
    <p><a href="#" class="footerlink">Home</a> - <a href="register.php" class="footerlink">Register</a> - <a href="login.php" class="footerlink">Login</a> - <a href="index.php" class="footerlink">Search</a> - <a href="#" class="footerlink">Privacy Policy</a> - <a href="#" class="footerlink">About Us</a> - <a href="contactus.php" class="footerlink">Contact Us</a> - <a href="#" class="footerlink">Submit Success Stories</a> - <a href="#" class="footerlink">Help</a> - <a href="#" class="footerlink">Sitemap    </a></p>
    <p> Copyright 2010-2011 maratha96kuli.com. All rights reserved.<br />
    </p>
  </div>
</div>
</form></body></html>