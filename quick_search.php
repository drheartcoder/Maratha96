<?php
$id = isset($_GET['id']);
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
$qqq = "SELECT * from bride Where register_id = '".$_POST['rno']."'";
$qqq_1 = mysqli_query($con,$qqq);
$qqq_2 = mysqli_num_rows($qqq_1);

if($qqq_2>0)
{

$mysearchresult = '<table cellspacing="3" cellpadding="3" border="0" width="600">';
			
			
			
             $mysearchresult .= '<tr>
                    <td width="10%"><strong>Regno</strong></td>
                    <td width="12%" align="center"><strong>Height</strong></td>
					 <td width="16%" align="center"><strong>Date Of Birth </strong></td>
                    <td width="16%" align="center"><strong>Education</strong></td>
                    <td width="17%" align="center"><strong>Location</strong></td>
                    <td width="29%" align="center"><strong>Occupation</strong></td>
                  </tr>';
			while($ooo = mysqli_fetch_array($qqq_1)) { 
			
			if($i%2==0)
								  {
									$color="#fec180";
								  }
								  else
								  {
									$color="#f3f3f3";
								  }
			 $mysearchresult .= '<tr bgcolor= '. $color.' >
                        <td><a href="bride_profille.php?id='.$ooo['bride_id'].'" target="_blank">' . $ooo['register_id'] . '</a></td>
						<td align="center">' . $ooo['height'] . '</td>
                        <td align="center">' . $ooo['dateofbirth'] . '</td>
                        <td align="center">' . $ooo['education'] . '</td>
                        <td align="center">' .  $ooo['district'] . '</td>
                        <td>' .  $ooo['occupation'] . '</td>
                      </tr>';
													$i++; } 
		  $mysearchresult .= '</table>'; 
}
		
		
		else
		{
		$ddd = "SELECT * from bridegroom Where register_id = '".$_POST['rno']."'";
$ddd_1 = mysqli_query($ddd,$con);
$ddd_2 = mysqli_num_rows($ddd_1);

if($ddd_2>0)
{

$mysearchresult = '<table cellspacing="3" cellpadding="3" border="0" width="600">';
			
			
			
             $mysearchresult .= '<tr>
                    <td width="16%"><strong>Regno</strong></td>
                    <td width="19%" align="center"><strong>Height</strong></td>
					 <td width="18%" align="center"><strong>Date Of Birth </strong></td>
                    <td width="15%" align="center"><strong>Education</strong></td>
                    <td width="16%" align="center"><strong>Location </strong></td>
                    <td width="16%" align="center"><strong>Occupation</strong></td>
                  </tr>';
			while($vvv = mysqli_fetch_array($ddd_1)) { 
			
			if($i%2==0)
								 {
									$color="#fec180";
								  }
								  else
								  {
									$color="#f3f3f3";
								  }
			
			
			$mysearchresult .= '<tr bgcolor= '. $color.' >
                        <td><a href="profille.php?id='.$vvv['bridegroom_id'].'" target="_blank">' . $vvv['register_id'] . '</a></td>
						<td align="center">' . $vvv['height'] . '</td>
                        <td align="center">' . $vvv['dateofbirth'] . '</td>
                        <td align="center">' . $vvv['education'] . '</td>
                        <td align="center">' .  $vvv['district'] . '</td>
                        <td align="center">' .  $vvv['occupation'] . '</td>
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











if(isset($_POST['search'])!="")
{
$qqq = "SELECT * from bride Where firstname LIKE  '".$_POST['name']."%'";
$qqq_1 = mysqli_query($con,$qqq);
$qqq_2 = mysqli_num_rows($qqq_1);


$ooo = "";


if($qqq_2>0)
{

$mysearchresult = '<table cellspacing="3" cellpadding="3" border="0" width="600">';
			
			
			
             $mysearchresult .= '<tr>
                    <td width="16%" align="center"><strong>Regno</strong></td>
                    <td width="19%" align="center"><strong>Height</strong></td>
					 <td width="18%" align="center"><strong>Date Of Birth </strong></td>
                    <td width="15%" align="center"><strong>Education</strong></td>
                    <td width="16%" align="center"><strong>Location </strong></td>
                    <td width="16%" align="center"><strong>Occupation</strong></td>
                  </tr>';
			while($ooo = mysqli_fetch_array($qqq_1)) { 
			
			if($i%2==0)
								  {
									$color="#fec180";
								  }
								  else
								  {
									$color="#f3f3f3";
								  }
			$mysearchresult .= '<tr bgcolor= '. $color.' >
                        <td><a href="bride_profille.php?id='.$ooo['bride_id'].'" target="_blank">' . $ooo['register_id'] . '</a></td>
						<td align="center">' . $ooo['height'] . '</td>
                        <td align="center">' . $ooo['dateofbirth'] . '</td>
                        <td align="center">' . $ooo['education'] . '</td>
                        <td align="center">' .  $ooo['district'] . '</td>
                        <td>' .  $ooo['occupation'] . '</td>
                      </tr>';
													$i++; } 
		  $mysearchresult .= '</table>'; 
}
		
		
		else
		{
		$ddd = "SELECT * from bridegroom Where firstname LIKE '".$_POST['name']."%'";
$ddd_1 = mysqli_query($con,$ddd);
$ddd_2 = mysqli_num_rows($ddd_1);

if($ddd_2>0)
{

$mysearchresult = '<table cellspacing="3" cellpadding="3" border="0" width="600">';
			
			
			
             $mysearchresult .= '<tr>
                    <td width="16%" align="center"><strong>Regno</strong></td>
                    <td width="19%" align="center"><strong>Height</strong></td>
					 <td width="18%" align="center"><strong>Date Of Birth </strong></td>
                    <td width="15%" align="center"><strong>Education</strong></td>
                    <td width="16%" align="center"><strong>Location </strong></td>
                    <td width="16%" align="center"><strong>Occupation</strong></td>
                  </tr>';
			while($vvv = mysqli_fetch_array($ddd_1)) { 
			
			if($i%2==0)
								{
									$color="#fec180";
								  }
								  else
								  {
									$color="#f3f3f3";
								  }
			 $mysearchresult .= '<tr bgcolor= '. $color.' >
                        <td><a href="profille.php?id='.$vvv['bridegroom_id'].'" target="_blank">' . $vvv['register_id'] . '</a></td>
						<td align="center">' . $vvv['height'] . '</td>
                        <td align="center">' . $vvv['dateofbirth'] . '</td>
                        <td align="center">' . $vvv['education'] . '</td>
                        <td align="center">' .  $vvv['district'] . '</td>
                        <td>' .  $vvv['occupation'] . '</td>
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
<form name="form1" method="post" action="">
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
                   	  <div id="tp">Partner Search</div>
                        <div id="in">
                          <table width="100%" border="0" cellspacing="2" cellpadding="2" >
                            <tr>
                              <td align="left" valign="top"><table width="99%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td align="top" valign="top"><table width="100%" border="0" cellspacing="2" cellpadding="2" class="tb">
                                    <tr>
                                      <td colspan="3" class="tb-td"><div align="center"><strong>Search By Registration No.</strong></div></td>
                                    </tr>
                                    <tr>
                                      <td width="39%" class="tb-td"><strong>Enter The</strong> <strong>Registration </strong> <strong>No </strong></td>
                                      <td width="5%" class="tb-td"><strong>:</strong></td>
                                      <td width="56%" class="tb-td">
                                        <label>
                                          <input name="rno" type="text" id="rno" />
                                        </label>
                                      
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="tb-td">&nbsp;</td>
                                      <td class="tb-td">&nbsp;</td>
                                      <td class="tb-td">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td class="tb-td">&nbsp;</td>
                                      <td class="tb-td">&nbsp;</td>
                                      <td class="tb-td">
                                        <label>
                                          <input type="submit" name="submit" value="Search" />
                                        </label></td>
                                    </tr>
                                    <tr>
                                      <td class="tb-td">&nbsp;</td>
                                      <td class="tb-td">&nbsp;</td>
                                      <td class="tb-td">&nbsp;</td>
                                    </tr>
                                  </table></td>
                                </tr>
                              </table><br /><br />
                             <table width="100%" border="0" cellspacing="2" cellpadding="2" class="tb">
                                    <tr>
                                      <td colspan="3" class="tb-td"><div align="center"><strong>Search By Name</strong></div></td>
                                    </tr>
                                    <tr>
                                      <td width="39%" class="tb-td"><strong>Enter The</strong><strong> Name </strong></td>
                                      <td width="5%" class="tb-td"><strong>:</strong></td>
                                      <td width="56%" class="tb-td">
                                        <label>
                                          <input name="name" type="text" id="name" />
                                        </label></td>
                                    </tr>
                                    <tr>
                                      <td class="tb-td">&nbsp;</td>
                                      <td class="tb-td">&nbsp;</td>
                                      <td class="tb-td">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td class="tb-td">&nbsp;</td>
                                      <td class="tb-td">&nbsp;</td>
                                      <td class="tb-td">
                                        <label>
                                          <input type="submit" name="search" value="Search" />
                                        </label></td>
                                    </tr>
                                    <tr>
                                      <td class="tb-td">&nbsp;</td>
                                      <td class="tb-td">&nbsp;</td>
                                      <td class="tb-td">&nbsp;</td>
                                    </tr>
                                  </table></td>
                            </tr></table>
                          
						  
						  <br /><br /><tr>
						  <td><?php echo isset($mysearchresult);?></td>
						  </tr>
						  </table>
                        </div>
                </div>
                    
              </div>
              
              <div id="rht">
                <div id="bx3">
                	<a href="#"></a> </div>
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
</form>
</body></html>