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
-->
</style>
<?php

if(isset($_POST['submit'])!="")
{
	if(isset($_POST['username'])=="")
	{
		$error_user = "Please Enter Your Username";
		$error=1;
	}
	
	if(isset($_POST['password'])=="")
	{
		$error_pwd = "Please Enter Your Password";
		$error=1;
	}


	if($error==0)
	{
	
		if(isset($_POST["gender"])=="Female")
	{
		$aaa="select * from bride where username='" . $_POST["username"] . "'";
		$aaa_1=mysqli_query($con,$aaa);
		$row_1=mysqli_num_rows($aaa_1);
		
		if($row_1>0)
		{ 	
		header("location:register.php");
		exit();
		}
	
		else
		{
		$msg = "invalid username or password";
		}	
	
	
	
	}
	else
	{
		$aaa="select * from bridegroom where username='" . $_POST["username"] . "'";
		$aaa_1=mysqli_query($con,$aaa);
		$row_1=mysqli_num_rows($aaa_1);
		
		if($row_1>0)
		{ 	
		header("location:register.php");
		exit();
		}
		
		else
		{
		$msg = "Invalid Username or Password";
		}	
		
	}

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
            <li><a href="success.php">Sucess Stories</a></li>
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
                	  <li><a href="bridegroom.php">Grooms</a></li>
					  <li><a href="bride.php">Brides</a></li>
					  <li><a href="divorce.php">Divorce</a></li>
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
      </div>
        <div id="rht">
       	  <div id="tp"></div>
        	<div id="mid">
           	  <div id="lft">
               	<div class="tp"><br />
               	Login
               	               	</div>
                <div id="bx2">
                  <div id="in">
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td align="left" valign="top"><table width="60%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td align="left" valign="top"><form id="form2" name="form2" method="post" action="">
                                    <table width="100%" border="0" cellspacing="3" cellpadding="3">
                                      <tr>
                                        <td width="22%"><strong>Username</strong></td>
                                        <td width="5%"><strong>:</strong></td>
                                        <td width="73%"><label>
                                          <input name="username" type="text" id="username" />
                                        <br /><font color="#FF0000" size="-1"><?php echo $error_user;?></font></label></td>
                                      </tr>
                                      <tr>
                                        <td><strong>Password</strong></td>
                                        <td><strong>:</strong></td>
                                        <td><label>
                                          <input name="password" type="password" id="password" />
                                        <br /><font color="#FF0000" size="-1"><?php echo $error_pwd;?></font></label></td>
                                      </tr>
                                     <tr> 
                <td width="40%"><strong>Login As</strong></td>
                <td width="5%"><strong>:</strong></td>
				<td><select  size="1" name="gender">
                    <option selected value="Male">Bridegroom</option>
                    <option value="Female">Bride</option>
                  </select></td>

              </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                        <td><br /><font color="#FF0000" size="-1"><?php echo $msg;?></font></td>
                                        <td><label>
                                          <input type="submit" name="submit" value="submit" />
                                        </label></td>
                                      </tr>
                                    </table>
                                                                    </form>
                                  </td>
                                </tr>
                              </table></td>
                            </tr>
                          </table>
                        </div>
                </div>
                    
                    <div id="bx3"><a href="#"><img src="images/ad02.jpg" alt="ad" width="507" height="100" border="0"></a></div>
              </div>
              
              <div id="rht">
                <div id="bx1">
            	  <form id="form1" name="form1" method="post" action="">
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
                  </form>
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