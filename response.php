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
	if(isset($_POST['user'])=="")
	{
	$error_user = "Please Enter Your Registration No";
	$error=1;
	}



				if($error==0)
			{
			
			$to = "randyrock7@gmail.com";
				$sub = "96 Kuli Maratha- Response Details";
				$mailbody_client = '<html>
			<head>
			<title>96 Kuli Maratha - Response Details</title>
			</head>
			<body>
			<p>Hello Administrator, Please Check Response Details From Register Id:' . $_POST["user"] . '</p>
			
			<br />
			
			<p>User Want Details OF Above Register ID</p>
			
			<br />
			
			
			<table width="85%" border="0" align="center" cellpadding="10" cellspacing="1" bgcolor="#CCCCCC">
			
			
			<tr>
			
			<td bgcolor="#FFFFFF"><div align="left"><font color="FF0000">*</font><strong>Register Id No 1:</strong></div></td>
			
			<td bgcolor="#FFFFFF">' . $_POST["user1"] . '</td>
			
			</tr>
			
			<tr>
			
			<td bgcolor="#FFFFFF"><div align="left"><font color="FF0000">*</font><strong>Register Id No 2 :</strong></div></td>
			
			<td bgcolor="#FFFFFF">' . $_POST["user2"] . '</td>
			
			</tr>
			
			<tr>
			
			<td bgcolor="#FFFFFF"><div align="left"><font color="FF0000">*</font><strong>Register Id No 3 :</strong></div></td>
			
			<td bgcolor="#FFFFFF">' . $_POST["user3"] . '</td>
			
			</tr>
			
			<tr>
			
			<td bgcolor="#FFFFFF"><div align="left"><font color="FF0000">*</font><strong>Register Id No 4 :</strong></div></td>
			
			<td bgcolor="#FFFFFF">' . $_POST["user4"] . '</td>
			
			</tr>
			
			<tr>
			
			<td bgcolor="#FFFFFF"><div align="left"><font color="FF0000">*</font><strong>Register Id No 5 :</strong></div></td>
			
			<td bgcolor="#FFFFFF">' . $_POST["user5"] . '</td>
			
			</tr>
			
			<tr>
			
			<td bgcolor="#FFFFFF"><div align="left"><font color="FF0000">*</font><strong>Register Id No 6 :</strong></div></td>
			
			<td bgcolor="#FFFFFF">' . $_POST["user6"] . '</td>
			
			</tr>
			
			<tr>
			
			<td bgcolor="#FFFFFF"><div align="left"><font color="FF0000">*</font><strong>Register Id No 7 :</strong></div></td>
			
			<td bgcolor="#FFFFFF">' . $_POST["user7"] . '</td>
			
			</tr>
			
			<tr>
			
			<td bgcolor="#FFFFFF"><div align="left"><font color="FF0000">*</font><strong>Register Id No 8 :</strong></div></td>
			
			<td bgcolor="#FFFFFF">' . $_POST["user8"] . '</td>
			
			</tr>
			
			<tr>
			
			<td bgcolor="#FFFFFF"><div align="left">&nbsp;&nbsp;<strong>Email :</strong></div></td>
			
			<td bgcolor="#FFFFFF">' . $_POST["email"] . '</td>
			
			</tr>
			
			
			<tr>
			
			<td bgcolor="#FFFFFF"><div align="left"><font color="FF0000">*</font><strong>Post Address : </strong></div></td>
			
			<td bgcolor="#FFFFFF">' . $_POST["address"] . '</td>
			
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
      </div>
        <div id="rht">
       	  <div id="tp"></div>
        	<div id="mid">
           	  <div id="lft">
           	    <div id="bx2">
                   	  <div id="tp"><strong>RESPONSE FORM</strong></div>
                        <div id="in">
                          <table width="100%" border="0" cellspacing="2" cellpadding="2">
                            <tr>
                              <td align="left" valign="top"><table width="99%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td align="top" valign="top"><table width="92%" border="0" align="center" cellpadding="0" cellspacing="0">
								    <form name="form1" method="post" action="response.php" onSubmit="return valid(this)" enctype="multipart/form-data">	
                                      <tr> 
                                        <td class="HEADER">&nbsp;</td>
                                      </tr>
                                      <tr> 
                                        <td class="HEADER">&nbsp;</td>

                                      </tr>
                                      <tr> 
                                        <td valign="top"><table width="105%" height="457" border="0" cellpadding="2" cellspacing="2">

                                            <tr>
											 
											 <TD valign="top" align="center"><font color="red"></font></TD>
											
                                              <td valign="top">&nbsp;</td>
                                            </tr>
                                            <tr> 
                                              <td width="100%" valign="top"><table width="112%" height="401" border="0" cellpadding="4" cellspacing="2" bgcolor="#FFFFFF">

                                                  <tr> 
                                                    <td width="45%"><p>I am a member of maratha 96 kuli & my reg. no is  
                                                        <input name="user"  type="text" id="user">
                                                      <font color="#FF0000" size="-1"><br /><?php echo isset($error_user);?></font></p>
                                                      <p>Please furnish me name and address of following members of your bureau</p></td>
                                                  </tr>
                                                  <tr> 
                                                    <td><table width="100%" border="0" cellspacing="2" cellpadding="4">
                                                        <tr> 
                                                          <td width="10">1</td>

                                                          <td><input name="user1" type="text"  id="user1"></td>
                                                          <td>3</td>
                                                          <td><input name="user3" type="text"  id="user3"></td>
                                                        </tr>
                                                        <tr> 
                                                          <td>2</td>
                                                          <td><input name="user2" type="text"  id="user2"></td>
                                                          <td>4</td>
                                                          <td><input name="user4" type="text"  id="user4"></td>
                                                        </tr>
                                                        
                                                      </table></td>
                                                  </tr>

                                                  <tr> 
                                                    <td>Please send me information by &#8211; </td>
                                                  </tr>
                                                  <tr> 
                                                    <td valign="top"><table width="105%" border="0" cellspacing="2" cellpadding="4">
                                                        <tr> 
                                                          
                                                          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">

                                                              <tr> 
                                                                <td width="50%">E-Mail 
                                                                  Address</td>
                                                                <td><input name="email" type="text"  id="email"></td>
                                                              </tr>
                                                            </table></td>
                                                        </tr>
                                                        <tr> 
                                                          
                                                          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                              <tr> 
                                                                <td width="50%">Postal 
                                                                  Address</td>
                                                                <td><input name="address" type="text" id="address"></td>
                                                              </tr>
                                                            </table></td>
                                                        </tr>
                                                        <tr> 
                                                          <td><div align="center"></div></td>

                                                          
                                                        </tr>
                                                        <tr> 
                                                          <td><div align="center"> 
                                                        <input name="submit" type="submit"  id="submit" value="Submit Form">
                                                            </div></td>
                                                         
                                                        </tr>

                                                      </table></td>
                                                  </tr>
                                                </table></td>
                                            </tr>
                                          </table></td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                      </tr>

                                      <tr> 
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr> 
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr> 
                                        <td bgcolor="#9A0000"><img src="images/spacer.gif" width="1" height="1"></td>
                                      </tr>
                                      <tr> 
                                        <td>&nbsp;</td>

                                      </tr>
                                      <tr> 
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr> 
                                        <td>&nbsp;</td>
                                      </tr>
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
</body></html>