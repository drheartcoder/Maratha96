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
          <td width="20%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td><? if($result_1['upload_image']!="") { ?><img src="<? echo $result_1['upload_image'];  ?>" width="200" height="350" /><? } else { ?><img src="images/nopreview.png" width="200" height="350" /> <? } ?></td>

              </tr>
              <tr> 
                <td>&nbsp;</td>
              </tr>
              <tr> 
                <td><div align="center" class="HEADER"><strong><?php echo $result_1['register_id'];?></strong></div></td>
              </tr>
            </table></td>
          <td><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffdcca">

              <tr> 
                <td>
                  <table width="101%" height="100" border="0" cellpadding="4" cellspacing="2">
                   <tr> 
                <td colspan="2" height="30px"><div align="center"><strong><font color="#FF0000">Personal Details</font></strong></div></td>
                </tr>
                    <tr bgcolor="#FFF4F4"> 
                      <td width="50%"><strong>Name :</strong>&nbsp;&nbsp;&nbsp;<?php echo $result_1['firstname'];?></td>
                      <td><strong>Gender :</strong>&nbsp;&nbsp;&nbsp;<?php echo $result_1['gender'];?></td>
                    </tr>

                    <tr bgcolor="#FFF4F4"> 
                      <td><strong>Date of Birth :</strong>&nbsp;&nbsp;&nbsp;<?php echo $result_1['dateofbirth'];?></td>
                      <td><strong>Height :</strong>&nbsp;&nbsp;&nbsp;<?php echo $result_1['height'];?></td>
                    </tr>
                    <tr bgcolor="#FFF4F4">
                      <td><strong>Birth Place :</strong>&nbsp;&nbsp;&nbsp;<?php echo $result_1['birth_place'];?></td>

                      <td><strong>Birth Time :</strong>&nbsp;&nbsp;&nbsp;<?php echo $result_1['birth_time'];?></td>
                    </tr>
                    <tr bgcolor="#FFF4F4"> 
                      <td><strong>Caste :</strong>&nbsp;&nbsp;&nbsp;<?php echo $result_1['caste'];?></td>
                      <td bgcolor="#FFF4F4"><strong>Marital Staus :</strong>&nbsp;&nbsp;&nbsp;<?php echo $result_1['marital_status'];?></td>
                    </tr>
                    <tr bgcolor="#FFF4F4"> 
                      <td><strong>Education :</strong>&nbsp;&nbsp;&nbsp;<?php echo $result_1['education'];?><br>                      </td>
                      <td><strong>Occupation :</strong>&nbsp;&nbsp;&nbsp;<?php echo $result_1['working_as'];?></td>
                    </tr>
                    <tr bgcolor="#FFF4F4"> 
                      <td><strong>Blood Group :</strong>&nbsp;&nbsp;&nbsp;<?php echo $result_1['blood_group'];?></td>

                      <td><strong>City :</strong>&nbsp;&nbsp;&nbsp;<?php echo $result_1['city'];?>&nbsp;&nbsp;&nbsp;<strong>Complexion :</strong>&nbsp;&nbsp;&nbsp;<?php echo $result_1['complexion'];?></td>
                    </tr>
                    <tr bgcolor="#FFF4F4"> 
                      <td><strong>Physical Disabilities (if any) :</strong>&nbsp;&nbsp;&nbsp;<?php echo $result_1['physical_disabilities'];?></td>
                      <td><strong>Spectacles :</strong>&nbsp;&nbsp;&nbsp;<?php echo $result_1['spectacles'];?></td>
                    </tr>
                   
                   
                  </table>
                </td>
              </tr>
			  
            
              <tr> 
                <td class=""><div align="center"><strong><font color="#FF0000">Family Background 
                    </font></strong></div></td>
              </tr>

              <tr> 
                <td valign="top">
				
				<table width="102%" height="100" border="0" cellpadding="4" cellspacing="2">
				
				
				
				
                    <tr bgcolor="#FFF4F4"> 
                      <td width="50%">
					  <table width="100%" border="0" cellspacing="0" cellpadding="2">
					  
					
                          <tr> 
                            <td><strong>Father Name:</strong>&nbsp;&nbsp;&nbsp;<?php echo $result_1['f_prefix'];?>&nbsp;<?php echo $result_1['father_name'];?></td>
                            <!--<td><strong>&nbsp;&nbsp;&nbsp;<?php // echo $result_1['father_name'];?></strong></td>-->
                          </tr>
                        </table></td>
                      <td><table width="100%" border="0" cellspacing="0" cellpadding="2">
                          <tr> 
                            <td><strong>Father's Occupation:</strong> &nbsp;&nbsp;&nbsp;<?php echo $result_1['father_occupation']; ?></td>
							<td>&nbsp;</td>
                            <!--<td></td>-->
                          </tr>
                        </table></td>
                    </tr>

                    <tr bgcolor="#FFF4F4"> 
                      <td><strong>Mother Name:</strong>&nbsp;&nbsp;&nbsp;<?php echo $result_1['m_prefix'];?>&nbsp;<?php echo $result_1['mother_name'];?></td>
                      <td><strong>Mother's Occupation:</strong>&nbsp;&nbsp;&nbsp;<?php echo $result_1['mother_occupation'];?></td>
                    </tr> 
                    <tr bgcolor="#FFF4F4"> 
                      <td><strong>Names of Relatives :</strong> &nbsp;&nbsp;&nbsp; <?php echo $result_1['names_of_relatives'];?></td>
                      <td><strong>Family Property  :</strong>&nbsp;&nbsp;&nbsp;<?php echo $result_1['family_property'];?></td>
                    </tr>

                    <tr bgcolor="#FFF4F4"> 
                      <td><strong>Native Place :</strong>&nbsp;&nbsp;&nbsp;<?php echo $result_1['native_place'];?></td>
                      <td><strong>Mama's Name :</strong>&nbsp;&nbsp;&nbsp;<?php echo $result_1['mama_name'];?></td>
                    </tr>
                    <tr bgcolor="#FFF4F4"> 
                      <td><table width="100%" border="0" cellspacing="0" cellpadding="2">
                          <tr> 
                            <td><strong>Brothers :</strong>&nbsp;&nbsp;&nbsp;<?php echo $result_1['no_of_brothers'];?></td>
                          </tr>
                        </table></td>
                      <td><table width="100%" border="0" cellspacing="0" cellpadding="2">
                          <tr> 
                            <td><strong>Sisters :</strong>&nbsp;&nbsp;&nbsp;<?php echo $result_1['no_of_sisters'];?></td>
                          </tr>
                        </table></td>
                    </tr>
                  </table></td>
              </tr>
			  
<!--			  Kundali Detail-->

			<tr> 
                <td class="HEADER"><div align="center"><strong><font color="#FF0000"> Kundali Detail
                    </font></strong></div></td>
              </tr>
			  <tr>
			  <td valign="top">
			  <table width="101%" height="100" border="0" cellpadding="4" cellspacing="2">
                    
                
                   
                    <tr bgcolor="#FFF4F4">

                      <td height="5" bgcolor="#FFF4F4"><strong>Mangal  :</strong>&nbsp;&nbsp;&nbsp;<?php echo $result_1['mangal'];?></td>
                      <td height="5" bgcolor="#FFF4F4"><strong>Ras :</strong>&nbsp;&nbsp;&nbsp;<?php echo $result_1['ras'];?>&nbsp;&nbsp;&nbsp;<strong>Charan: </strong>&nbsp;&nbsp;&nbsp;<?php echo $result_1['charan'];?></td>
                    </tr>
                    <tr bgcolor="#FFF4F4">
                      <td height="5" bgcolor="#FFF4F4"><strong>Gan:</strong> &nbsp;&nbsp;&nbsp;<?php echo $result_1['gan'];?></td>

                      <td height="5" bgcolor="#FFF4F4"><strong>Nadi:</strong> &nbsp;&nbsp;&nbsp;<?php echo $result_1['nadi'];?></td>
                    </tr>
                    <tr bgcolor="#FFF4F4">
                      <td height="5" bgcolor="#FFF4F4"><strong>Gotra & Devak :</strong>&nbsp;&nbsp;&nbsp;<?php echo $result_1['gotra_devak'];?></td>
                      <td height="5" bgcolor="#FFF4F4"><strong>Nakshatra:</strong> &nbsp;&nbsp;&nbsp;<?php echo $result_1['nakshatra'];?></td>
                    </tr>
					
                  </table>
			  </td>
			  </tr>
			   
			  
              <tr> 
                <td class="HEADER"><div align="center"><strong><font color="#FF0000">Expectation</font></strong></div></td>
              </tr>
              <tr> 
                <td valign="top"><table width="102%" height="100" border="0" cellpadding="4" cellspacing="2">
				<tr bgcolor="#FFF4F4"> 					
                      <td width="50%"><strong>Education :</strong>&nbsp;&nbsp;&nbsp;<?php echo $result_1['exp_education'];?></td>
                      <td colspan="2"><strong>Marital Status :</strong>&nbsp;&nbsp;&nbsp;<?php echo $result_1['exp_marital_status'];?></td>
                    </tr>	
                    <tr bgcolor="#FFF4F4"> 
                      <td width="50%"><strong>Max Height Difference :</strong>&nbsp;&nbsp;&nbsp;<?php echo $result_1['exp_max_height'];?></td>
                      <td><strong>Handicapped Accepted:</strong>&nbsp;&nbsp;&nbsp;<?php echo $result_1['exp_horoscope_needed'];?></td>
                    </tr>
					
					<tr bgcolor="#FFF4F4"> 
                      <td width="50%"><strong>Max Age Difference :</strong>&nbsp;&nbsp;&nbsp;<?php echo $result_1['exp_max_age_difference'];?></td>
                      <td><strong>Horoscope Needed :</strong>&nbsp;&nbsp;&nbsp;<?php echo $result_1['exp_horoscope_needed'];?></td>
                    </tr>
					
					<tr bgcolor="#FFF4F4"> 
                      <td width="50%"><strong>Other Expectations :</strong>&nbsp;&nbsp;&nbsp;<?php echo $result_1['other_expectations'];?></td>
                      <td><strong>Mangal Accepted:</strong>&nbsp;&nbsp;&nbsp;<?php echo $result_1['exp_mangal_accepted'];?></td>
                    </tr>

					
                    <!--<tr bgcolor="#FFF4F4"> 
                      <td><strong>Education : <br></td>
                      <td><strong>Occupation :  </td>
                    </tr>-->
                  </table></td>

              </tr>
            
            </table></td>
        </tr>
		</table></td>
	  </tr>
	
	  <tr>

	       <td height="29" bgcolor="#840000" colspan="2"><div align="center">All contents &copy; copyright www.maratha96kuli.com. All rights reserved.</div></td>
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
