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
.style3 {
	color: #9A0000;
	font-weight: bold;
}
-->
</style>
<script type="text/javascript">
Object.prototype.addEvent = function(evtType, func) {
   if (this.addEventListener) {
      this.addEventListener(evtType, func, true);
   } else if (this.attachEvent) { 
      this.attachEvent('on' + evtType, func);
   } else { 
      this['on' + evtType] = func;
   }
}

function SlideShow(slideel, faddingSpeed, stopTime, stopOnMouseOver) {  
        var mouseIsOver = false;
        
        if (stopOnMouseOver) {
                slideel.addEvent('mouseover', function() {
                        mouseIsOver = true;
                });

                slideel.addEvent('mouseout', function() {
                        mouseIsOver = false;
                        self.next();
                });
        }
                
        this.next = function() {
                if (mouseIsOver)
                        return;

                this.current.fadeOut();
                this.current = this.current.nextSlide;
                this.current.fadeIn();
        }
        
        function createSlides() {
                var imgs = slideel.getElementsByTagName('img');
                var slides = [];
                
                for (var i = 0; i < imgs.length; i++) {  
                        slides[i] = new SlideShowImage(imgs[i], self);
                }
                
                for (var i = 0; i < slides.length; i++) {
                        if (i == slides.length - 1)
                                slides[i].nextSlide = slides[0];
                        else
                                slides[i].nextSlide = slides[i + 1];
                }
                
                self.current =  slides[0];
                slides[0].fadeIn();
                
                function SlideShowImage(img, slideShow) {
                        img.style.opacity = '0';
        
                        this.fadeIn = function() {
                                var i = 0;
                                while (++i <= 40) {
                                        window.setTimeout(function() {
                                                img.style.opacity = parseFloat(img.style.opacity) + 0.025;
                                        }, i * faddingSpeed);
                                }
                                
                                window.setTimeout(function() {
                                        slideShow.next();
                                }, 40 * faddingSpeed + stopTime);
                        }
        
                        this.fadeOut = function() {
                                var i = 0;
                                while (++i <= 40) {
                                        window.setTimeout(function() {
                                                img.style.opacity = parseFloat(img.style.opacity) - 0.025;
                                        }, i * faddingSpeed);
                                }
                        }
                }
        }
        
        var self = this;
        createSlides(slideel);
}
</script>

<script> 
window.addEvent('load', function() {
        new SlideShow(document.getElementById('slideshow'), 20, 100, true);
});
</script>
</head>

<?php
$i=1;
	
	$sql1 = "select * from bride where status='1' order by bride_id desc limit 0,3";
	
	$sql1list = mysqli_query($con,$sql1);

	$sql12 = "select * from bridegroom where status='1' order by bridegroom_id desc limit 0,3";
	
	$sql1list2 = mysqli_query($con,$sql12);

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
			 $mysearchresult = '<table cellspacing="3" cellpadding="3" border="0" width="100%" class="tb">';
			 
			 
			
             $mysearchresult .= '<tr>
                    <td width="16%" class="tb-td"><strong>Regno</strong></td>
                    <td width="19%" class="tb-td"><strong>Height</strong></td>
					 <td width="18%" class="tb-td"><strong>Date Of Birth </strong></td>
                    <td width="15%" class="tb-td"><strong>Education</strong></td>
                    <td width="16%" class="tb-td"><strong>Place of Residence </strong></td>
                    <td width="16%" class="tb-td"><strong>Working As</strong></td>
                  </tr>';
			 while($ooo = mysqli_fetch_array($aaa_1)) { 
			 $mysearchresult .= '<tr>
                        <td height="56" align="left" class="tb-td"><a href="show_details.php?id='.$ooo['bride_id'].'">' . $ooo['register_id'] . '</a></td>
                        <td class="tb-td">' . $ooo['height'] . '</td>
                        <td class="tb-td">' . $ooo['dateofbirth'] . '</td>
                        <td class="tb-td">' . $ooo['education'] . '</td>
                        <td class="tb-td">' .  $ooo['district'] . '</td>
                        <td class="tb-td">' .  $ooo['working_as'] . '</td>
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
			$mysearchresult = '<table cellspacing="3" cellpadding="3" border="0" width="100%" class="tb">';
			
			
			
             $mysearchresult .= '<tr>
                    <td width="16%" class="tb-td"><strong>Regno</strong></td>
                    <td width="19%" class="tb-td"><strong>Height</strong></td>
					 <td width="18%" class="tb-td"><strong>Date Of Birth </strong></td>
                    <td width="15%" class="tb-td"><strong>Education</strong></td>
                    <td width="16%" class="tb-td"><strong>Place of Residence </strong></td>
                    <td width="16%" class="tb-td"><strong>Working As</strong></td>
                  </tr>';
			while($ooo = mysqli_fetch_array($aaa_1)) { 
			 $mysearchresult .= '<tr>
                        <td height="56" align="left" class="tb-td"><a href="bridegroom_details.php?id='. $ooo['bridegroom_id'].'">' . $ooo['register_id'] . '</a></td>
                        <td class="tb-td">' . $ooo['height'] . '</td>
                        <td class="tb-td">' . $ooo['dateofbirth'] . '</td>
                        <td class="tb-td">' . $ooo['education'] . '</td>
                        <td class="tb-td">' .  $ooo['district'] . '</td>
                        <td class="tb-td">' .  $ooo['working_as'] . '</td>
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
			$mysearchresult = '<table cellspacing="3" cellpadding="3" border="0" width="100%" class="tb">';
			
			
			$mysearchresult .= '<tr>
                    <td width="16%" class="tb-td"><strong>Regno</strong></td>
                    <td width="19%" class="tb-td"><strong>Height</strong></td>
					 <td width="18%" class="tb-td"><strong>Date Of Birth </strong></td>
                    <td width="15%" class="tb-td"><strong>Education</strong></td>
                    <td width="16%" class="tb-td"><strong>Place of Residence </strong></td>
                    <td width="16%" class="tb-td"><strong>Working As</strong></td>
                  </tr>';
			 while($row = mysqli_fetch_array($ttt_1)) { 
			
             $mysearchresult .= '<tr>
                        <td height="56" align="left" class="tb-td"><a href="show_details.php?id='.$row['bride_id'].'">' . $row['register_id'] . '</a></td>
                        <td class="tb-td">' . $row['height'] . '</td>
                        <td class="tb-td">' . $row['dateofbirth'] . '</td>
                        <td class="tb-td">' . $row['education'] . '</td>
                        <td class="tb-td">' .  $row['district'] . '</td>
                        <td class="tb-td">' .  $row['working_as'] . '</td>
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
			$mysearchresult = '<table cellspacing="3" cellpadding="3" border="0" width="100%" class="tb">';
			
			$mysearchresult .= '<tr>
                    <td width="16%" class="tb-td"><strong>Regno</strong></td>
                    <td width="19%" class="tb-td"><strong>Height</strong></td>
					 <td width="18%" class="tb-td"><strong>Date Of Birth </strong></td>
                    <td width="15%" class="tb-td"><strong>Education</strong></td>
                    <td width="16%" class="tb-td"><strong>Place of Residence </strong></td>
                    <td width="16%" class="tb-td"><strong>Working As</strong></td>
                  </tr>';
			 while($row = mysqli_fetch_array($ttt_1)) { 
			
             $mysearchresult .= '<tr>
                        <td height="56" align="left" class="tb-td"><a href="bridegroom_details.php?id='. $row['bridegroom_id'].'">' . $row['register_id'] . '</a></td>
                        <td class="tb-td">' . $row['height'] . '</td>
                        <td class="tb-td">' . $row['dateofbirth'] . '</td>
                        <td class="tb-td">' . $row['education'] . '</td>
                        <td class="tb-td">' .  $row['district'] . '</td>
                        <td class="tb-td">' .  $row['working_as'] . '</td>
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
	$error_phone = "Please Enter Phoneno";
	$error=1;
	}
	*/
	
	if(!preg_match('/^1?[0-9]{10}$/', $_POST['phone']))
	
		{
			$error_phone = "Please Provide Valid Phone No.";
			$error=1;
		}
	
	
	if(isset($_POST['mess'])=="")
	{
	$error_mess = "Please Enter Message";
	$error=1;
	}




if($error==0)
	
	{
	
	$to = "contact@maratha96kuli.com";
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
 <form id="form1" name="form1" method="post" action="">
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
      <div id="bx2"><a href="#">
	  
	  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="212" height="238" title="Banner">
        <param name="movie" value="banner01.swf" />
        <param name="quality" value="high" />
        <embed src="banner01.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="212" height="238"></embed>
	    </object>
		
		
	  </a></div>
      <div id="enquiry">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><span class="topic style1"><strong>Enquiry</strong></span> </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
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
            <td>&nbsp;</td>
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
            <tbody>
              <tr>
                <td><img src="images/welcome.gif" alt="welcome" width="500" height="277" border="0" usemap="#Map" />&nbsp;</td>
              </tr>
              <tr>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div id="bx3"></div>
      </div>
      <div id="mid">
        <div id="lft">
          <div class="tp"><br />
          Latest Brides
          <br />
            <br />
          </div>
          <div class="in">
		  <tr>
                <td>&nbsp;</td>
              </tr>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><table width="100%" border="0" cellspacing="3" cellpadding="3">
                  <tr>
                    <td width="10%"><strong>Reg No</strong></td>
                    <td width="12%" align="center"><strong>Height</strong></td>
                    <td width="16%" align="center"><strong>Birth Date</strong></td>
                    <td width="16%" align="center"><strong>Location</strong></td>
                    <td width="17%" align="center"><strong>Education</strong></td>
                    <td width="29%" align="center"><strong>Occupation</strong></td>
                  </tr>
                  <?php while($sql1result = mysqli_fetch_array($sql1list)) { 
				  
				   if($i%2==0)
								  {
									$color="#f3f3f3";
								  }
								  else
								  {
									$color="#fec180";
								  }
				  
				   
                      
				  
				   ?>
				<tr bgcolor="<?php echo $color;?>">
				  
				  <td><a href="#" onclick="window.open('bride_profille.php?id=<?php echo $sql1result['bride_id'];?>')"><?php echo $sql1result['register_id'];?></a></td>
                    <td align="center"><?php echo $sql1result['height'];?></td>
                    <td align="center"><?php echo $sql1result['dateofbirth'];?></td>
                    <td align="center"><?php echo $sql1result['district'];?></td>
                    <td align="center"><?php echo $sql1result['education'];?></td>
                    <td align="left"><?php echo $sql1result['working_as'];?></td>
                  </tr><?php $i++; } ?>
                </table></td>
              </tr>
              <tr>
                <td height="25">&nbsp;</td>
              </tr>
            </table>
          </div>
		  <div class="tp"><br />
          Latest Grooms
          <br />
          </div>
		  <div class="in">
		    <table width="100%" border="0" cellspacing="3" cellpadding="3">
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td height="25"><table width="100%" border="0" cellspacing="3" cellpadding="3">
                      <tr>
                        <td width="10%"><strong>Reg No</strong></td>
                        <td width="12%" align="center"><strong>Height</strong></td>
                        <td width="16%" align="center"><strong>Birth Date</strong></td>
                        <td width="16%" align="center"><strong>Location</strong></td>
                        <td width="17%" align="center"><strong>Education</strong></td>
                        <td width="29%" align="center"><strong>Occupation</strong></td>
                      </tr>
                      <?php while($sql1result2 = mysqli_fetch_array($sql1list2)) { 
					
				   if($i%2==0)
								  {
									$color="#fec180";
								  }
								  else
								  {
									$color="#f3f3f3";
								  }
				
					  ?>
                      <tr bgcolor="<?php echo $color;?>">
                        <td><a href="#" onclick="window.open('profille.php?id=<?php echo $sql1result2['bridegroom_id'];?>')"><?php echo $sql1result2['register_id'];?></a></td>
                        <td align="center"><?php echo $sql1result2['height'];?></td>
                        <td align="center"><?php echo $sql1result2['dateofbirth'];?></td>
                        <td align="center"><?php echo $sql1result2['district'];?></td>
                        <td align="center"><?php echo $sql1result2['education'];?></td>
                        <td align="left"><?php echo $sql1result2['working_as'];?></td>
                      </tr>
                      <?php $i++; } ?>
                    </table>
                  <p>&nbsp; </p></td>
              </tr>
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><?php echo isset($mysearchresult);?></td>
                    </tr>
                  </table>
                    <p>&nbsp;</p>
                  <p>&nbsp; </p></td>
              </tr>
            </table>
		  </div>
          </div>
        <div id="rht">
          <div id="bx1">
            <table border="0" cellpadding="0" cellspacing="0" width="200">
              <tbody>
                <tr>
                  <td><table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tbody>
                      <tr>
                        <td width="60"><img src="images/arrow.png" alt="icon" height="50" width="59" /></td>
                        <td class="topic01">Free Joining</td>
                      </tr>
                    </tbody>
                  </table></td>
                </tr>
                <tr>
                  <td><table border="0" cellpadding="3" cellspacing="0" width="100%">
                    <tbody>
                      <tr>
                        <td align="left" width="45%"><span  id="slideshow" style="position: relative">
        <a href="register.php"><img  src="images/welcome1.jpg" style="position: absolute; top: 0px; left: 10px" /></a>
        <a href="register.php"><img  src="images/welcome1.jpg" style="position: absolute; top: 0px; left: 10px" /></a>
       
</span></td>
                      </tr>
                      <tr>
                        <td align="left">&nbsp;</td>
                      </tr>
                    </tbody>
                  </table></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="bx3"> <a href="#">
		  
		  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="235" height="400" title="Banner1">
            <param name="movie" value="s.swf" />
            <param name="quality" value="high" />
            <embed src="s.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="235" height="400"></embed>
		    </object>
			
		  </a> </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--foot-->
<div id="foot">
  <div id="foot-wrap">
    <p><a href="index.php" class="footerlink">Home</a> - <a href="register.php" class="footerlink">Register</a> - <a href="search.php" class="footerlink">Search</a> - <a href="rules.php" class="footerlink">Rules</a> - <a href="aboutus.php" class="footerlink">About Us</a> - <a href="contactus.php" class="footerlink">Contact Us</a> - <a href="success.php" class="footerlink">Submit Success Stories</a></p>
    <p> Copyright 2010-2011 maratha96kuli.com. All rights reserved.</p>
    <p>Website created and designed  by <a href="http://cromasolutions.com">croma solutions</a> <br />
    </p>
  </div>
</div>
</form>
<map name="Map" id="Map">
  <area shape="rect" coords="536,261,734,450" href="http://www.maratha96kuli.com/register.php" />
</map></body></html>