<?php
session_start();
include("connect.php");
$id = $_GET['id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Maratha 96 kuli </title>
<link href="backoffice/images/knt_style.css" rel="stylesheet" type="text/css" />
<link href="stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<?php
$ggg = "SELECT * from bridegroom where bridegroom_id = '".$id."' ";
$ggg_1 =mysqli_query($con,$ggg);
$row_1 =mysqli_num_rows($ggg_1);
if(!$ggg_1)
{
die("error:".mysqli_error());
} 
 $result_1 = mysqli_fetch_array($ggg_1);
 
 
 $asd = "SELECT * from package where package_id = '".$result_1['package_id']."' ";
 $asd_1 = mysqli_query($con,$asd);
 if(!$asd_1)
 {
 die("error:".mysqli_error());
 }
 $result_12 = mysqli_fetch_array($asd_1);  

?>
<body>
<table width="774" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#000000">
  <tr>
    <td bgcolor="#FFFFFF"><table width="100%"  border="0" cellspacing="3" cellpadding="0">
      <tr>
        <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><table width="100%"  border="0" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
                  <tr>
                    <td bgcolor="#FFFFFF"><table width="100%"  border="0" cellspacing="0" cellpadding="0">

                        <tr>
                            <td valign="top">
<script language="JavaScript">
<!--

function right(e) { 
if (navigator.appName == 'Netscape' && (e.which == 3 )) {
	alert("Sorry, Right click is disabled");
	return false;
}
else if (navigator.appName == 'Microsoft Internet Explorer' && (event.button == 2 || event.button == 3)) {
	alert("Sorry, Right click disabled.");
	return false;
}
	return true;
}

document.onmousedown=right;
document.onmouseup=right;
if (document.layers) window.captureEvents(Event.MOUSEDOWN);
if (document.layers) window.captureEvents(Event.MOUSEUP);
window.onmousedown=right;
window.onmouseup=right;
//  End -->
</script>

<link href="css/maratha.css" rel="stylesheet" type="text/css">
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="700" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr> 
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td width="221" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td><? if($result_1['upload_image']!="") { ?><img src="<? echo $result_1['upload_image'];  ?>" width="203" height="270" /><? } else { ?><img src="images/nopreview.png" width="203" height="270" /> <? } ?></td>

              </tr>
              <tr> 
                <td>&nbsp;</td>
              </tr>
              <tr> 
                <td><div align="center" class="HEADER"><?php echo $result_1['register_id'];?></div></td>
              </tr>
            </table></td>
          <td><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffdcca">

              <tr> 
                <td>
                  <table width="100%" border="0" cellspacing="2" cellpadding="4">
                    <tr bgcolor="#FFF4F4"> 
                      <td width="50%"><strong>Name-<?php echo $result_1['firstname'];?></strong></td>
                      <td><strong>Gender :<?php echo $result_1['gender'];?></strong></td>
                    </tr>

                    <tr bgcolor="#FFF4F4"> 
                      <td><strong>Date of Birth :<?php echo $result_1['dateofbirth'];?></strong></td>
                      <td><strong>Height :<?php echo $result_1['height'];?></strong></td>
                    </tr>
                    <tr bgcolor="#FFF4F4">
                      <td><strong>Birth Place :<?php echo $result_1['birth_place'];?></strong></td>

                      <td><strong>Birth Time :<?php echo $result_1['birth_time'];?></strong></td>
                    </tr>
                    <tr bgcolor="#FFF4F4"> 
                      <td><strong>Caste:<?php echo $result_1['caste'];?></strong></td>
                      <td><strong>Gotra & Devak :</strong></td>

                    </tr>
                    <tr bgcolor="#FFF4F4"> 
                      <td><strong>Education : </strong><?php echo $result_1['education'];?><br>                      </td>
                      <td><strong>Occupation : </strong> <?php echo $result_1['occupation'];?></td>
                    </tr>
                    <tr bgcolor="#FFF4F4"> 
                      <td><strong>Blood Group :<?php echo $result_1['blood_group'];?></strong></td>

                      <td><strong>City :<?php echo $result_1['district'];?></strong></td>
                    </tr>
                    <tr bgcolor="#FFF4F4"> 
                      <td><strong>Physical Disabilities (if any) :<?php echo $result_1['physical_disabilities'];?></strong></td>
                      <td><strong>Spectacles :<?php echo $result_1['spectacles'];?></strong></td>

                    </tr>
                    <tr bgcolor="#FFF4F4">
                      <td bgcolor="#FFF4F4"><strong>Complexion :<?php echo $result_1['complexion'];?></strong></td>
                      <td><strong>Mangal :<?php echo $result_1['mangal'];?></strong></td>
                    </tr>
                    <tr bgcolor="#FFF4F4">

                      <td bgcolor="#FFF4F4"><strong>Marital Staus  :<?php echo $result_1['marital_status'];?></strong></td>
                      <td bgcolor="#FFF4F4"><strong>Ras:<?php echo $result_1['ras'];?></strong></td>
                    </tr>
                    <tr bgcolor="#FFF4F4">
                      <td bgcolor="#FFF4F4"><strong>Gan: <?php echo $result_1['gan'];?></strong></td>

                      <td bgcolor="#FFF4F4"><strong>Nadi: <?php echo $result_1['nadi'];?></strong></td>
                    </tr>
                    <tr bgcolor="#FFF4F4">
                      <td bgcolor="#FFF4F4"><strong>Charan: <?php echo $result_1['charan'];?></strong></td>
                      <td bgcolor="#FFF4F4"><strong>Nakshatra: <?php echo $result_1['nakshatra'];?></strong></td>
                    </tr>

                  </table>
                </td>
              </tr>
              <tr> 
                <td>&nbsp;</td>
              </tr>
              <tr> 
                <td class="HEADER"><div align="center"><strong>Family Background 
                    </strong></div></td>
              </tr>

              <tr> 
                <td valign="top"><table width="100%" border="0" cellspacing="2" cellpadding="4">
                    <tr bgcolor="#FFF4F4"> 
                      <td width="50%"><table width="100%" border="0" cellspacing="0" cellpadding="2">
                          <tr> 
                            <td><strong>Father :<?php echo $result_1['father'];?></strong></td>
                            <td><strong><?php echo $result_1['father_name'];?></strong></td>
                          </tr>

                        </table></td>
                      <td><table width="100%" border="0" cellspacing="0" cellpadding="2">
                          <tr> 
                            <td><strong>Mother :<?php echo $result_1['mother'];?><?php echo $result_1['mother_name'];?></strong></td>
                            <!--<td></td>-->
                          </tr>
                        </table></td>
                    </tr>

                    <tr bgcolor="#FFF4F4"> 
                      <td><strong>Mama :<?php echo $result_1['mama_name'];?></strong></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr bgcolor="#FFF4F4"> 
                      <td><strong>Relatives :</strong></td>
                      <td>&nbsp;</td>
                    </tr>

                    <tr bgcolor="#FFF4F4"> 
                      <td><strong>Native Place :</strong></td>
                      <td><?php echo $result_1['names_of_relatives'];?></td>
                    </tr>
                    <tr bgcolor="#FFF4F4"> 
                      <td><table width="100%" border="0" cellspacing="0" cellpadding="2">
                          <tr> 
                            <td><strong>Brothers :<?php echo $result_1['no_of_brothers'];?></strong></td>
                            <td><?php echo $result_1['brother_details'];?></td>

                          </tr>
                        </table></td>
                      <td><table width="100%" border="0" cellspacing="0" cellpadding="2">
                          <tr> 
                            <td><strong>Sisters :<?php echo $result_1['no_of_sisters'];?></strong></td>
                            <td><?php echo $result_1['sister_details'];?></td>
                          </tr>
                        </table></td>

                    </tr>
                    <tr bgcolor="#FFF4F4"> 
                      <td><strong>Family Wealth :<?php echo $result_1['family_property'];?></strong></td>
                      <td>&nbsp;</td>
                    </tr>
                  </table></td>
              </tr>
              <tr> 
                <td>&nbsp;</td>

              </tr>
              <tr> 
                <td class="HEADER"><div align="center"><strong>Expectation</strong></div></td>
              </tr>
              <tr> 
                <td valign="top"><table width="100%" border="0" cellspacing="2" cellpadding="4">
				<tr bgcolor="#FFF4F4"> 					
                      <!--<td width="50%"><strong>Caste :</strong> Maratha 96 K</td>-->
                      <td colspan="2"><strong>Education :<?php echo $result_1['exp_education'];?></strong></td>

                    </tr>	
                    <tr bgcolor="#FFF4F4"> 
                      <td width="50%"><strong>Max Age Difference :<?php echo $result_1['exp_max_age_difference'];?></strong></td>
                      <td><strong>Max Height Difference :<?php echo $result_1['exp_max_height'];?></strong></td>
                    </tr>
				<tr bgcolor="#FFF4F4"> 
                      <td colspan="2"><strong>Marital Status :<?php echo $result_1['exp_marital_status'];?></strong></td>

					
                      <!--<td><strong>Income :</strong> N/A</td>-->
                    </tr>
					<tr bgcolor="#FFF4F4"> 
                      <td width="50%"><strong>Horoscope Needed :<?php echo $result_1['exp_horoscope_needed'];?></strong></td>
                      <td><strong>Preferred Cities/District :<?php echo $result_1['exp_preferred_cities_district'];?></strong></td>
                    </tr>

					
                    <!--<tr bgcolor="#FFF4F4"> 
                      <td><strong>Education :</strong> <br></td>
                      <td><strong>Occupation : </strong> </td>
                    </tr>-->
                    <tr bgcolor="#FFF4F4"> 
                      <td><strong>Handicapped :<?php echo $result_1['exp_horoscope_needed'];?></strong></td>
                      <td><strong>Mangal :</strong><?php echo $result_1['exp_mangal_accepted'];?></td>
                    </tr>
                  </table></td>

              </tr>
              <tr> 
                <td>&nbsp;</td>
              </tr>
            </table></td>
        </tr>
		</table></td>
	  </tr>
	
	  <tr>

	       <td height="29" bgcolor="#840000" colspan="2"><div align="center"></div></td>
       </tr>
	</table>						  </td>
                        </tr>
                    </table></td>
                  </tr>
              </table></td>

            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
