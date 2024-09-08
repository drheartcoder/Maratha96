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








<?php
if(isset($_POST['submit'])!="")
{

	if(isset($_POST['gender'])=="Female")
	{
	
	$aaa = "SELECT * from bride where district = '".$_POST['district']."' and working_as = '".$_POST['occupation']."'";
	$aaa_1 = mysqli_query($con,$aaa);
	$ccc = mysqli_num_rows($aaa_1);
		if($ccc>0)
		{
			 $mysearchresult = '<table cellspacing="3" cellpadding="3" border="0" width="100%">';
			 
			 
			
             $mysearchresult .= '<tr>
                    <td width="10%" align="left"><strong>Regno</strong></td>
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
                        
						<td><a href="pride.profille.php?id='.$ooo['bride_id'].'" target="_blank">' . $ooo['register_id'] . '</a></td>

		         <td class="tb-td" align="center">' . $ooo['height'] . '</td>
                        <td align="center">' . $ooo['dateofbirth'] . '</td>
                        <td align="center">' . $ooo['education'] . '</td>
                        <td align="center">' .  $ooo['district'] . '</td>
                        <td>' .  $ooo['working_as'] . '</td>
                      </tr>';
				$i++; } 
		  $mysearchresult .= '</table>';
		}
		else
		{
		  $mysearchresult = "No, Matches Found For The Search";
		}



	}

else
	{
	

		$aaa = "SELECT * from bridegroom Where district = '".$_POST['district']."' and occupation = '".$_POST['occupation']."' and age between '" . $_POST["age1"] . "' and '" . $_POST["age2"] . "'  ";
		$aaa_1 = mysqli_query($con,$aaa);
		$ccc = mysqli_num_rows($aaa_1);
		if($ccc>0)
		{
			$mysearchresult = '<table cellspacing="3" cellpadding="3" border="0" width="100%">';
			
			
			
             $mysearchresult .= '<tr>
                    <td width="10%" align="left"><strong>Regno</strong></td>
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
                        <td>' .  $ooo['working_as'] . '</td>
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
                        <td width="44%" height="30" align="left" class="tb-td">Name </td>
                        <td width="56%" align="left" class="tb-td"><label>
                          <input name="name" type="text" value="<?php echo isset($_POST['name']);?>" id="name" width="100"/>
                        <br /><font color="#FF0000" size="-1"><?php echo isset($error_name);?></font></label></td>
                      </tr>
                      
                      <tr>
                        <td align="left" class="tb-td">Phone </td>
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
                        <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tbody><tr>
                              <td width="60" height="49"><img src="images/ico01.gif" alt="icon" height="49" width="49"></td>
                              <td class="topic01">Search By Region </td>
                            </tr>
                        </tbody></table></td>
                      </tr>
                      <tr>
                        <td><table width="100%" border="0" align="center" cellpadding="3" cellspacing="0">
                            <tbody><tr>
                              <td align="left" width="45%">Looking For : </td>
                              <td align="left"><input name="gender" id="radio" value="Male" type="radio">
                              Male<input name="gender" id="gender" value="Female" type="radio">
                              Female</td>
                            </tr>
                            
                            <tr>
                              <td align="left">Location:</td>
                              <td align="left"><label><input type="text" name="district" id="district" />
                               
                              </label></td>
                            </tr>
                            <tr>
                              <td height="25" align="left">&nbsp;</td>
                              <td align="left"><input name="submit" id="submit" value="submit" type="submit" /></td>
                            </tr>
                            <tr>
                              <td align="left">&nbsp;</td>
                              <td align="left">&nbsp;</td>
                            </tr>
                            <tr>
                              <td align="left">&nbsp;</td>
                              <td align="left">&nbsp;</td>
                            </tr>
                        </tbody></table></td>
                      </tr>
                  </tbody></table>
                  
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
    <p><a href="#" class="footerlink">Home</a> - <a href="register.php" class="footerlink">Register</a> - <a href="index.php" class="footerlink">Search</a> - <a href="#" class="footerlink">Privacy Policy</a> - <a href="#" class="footerlink">About Us</a> - <a href="contactus.php" class="footerlink">Contact Us</a> - <a href="#" class="footerlink">Submit Success Stories </a>- <a href="#" class="footerlink">Sitemap    </a></p>
    <p> Copyright 2010-2011 maratha96kuli.com. All rights reserved.<br />
    </p>
  </div>
</div>
</form></body></html>