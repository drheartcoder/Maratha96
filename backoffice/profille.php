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
<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000" bgcolor="#FFDCCA">
          <tr>
            <td><table width="105%" border="0" cellpadding="5" cellspacing="0" bgcolor="#FFDCCA">
              <tr>
                <td colspan="4" align="right" valign="top" class="heading_bold"><div align="center">Personal Details </div></td>
                </tr>
              <tr>
                <td width="15%" align="left" valign="top" nowrap="nowrap" class="heading">Name:</td>
                <td width="37%" align="left" valign="top"><?php echo $result_1['firstname'];?></td>
                <td width="27%" align="left" valign="top" nowrap="nowrap"><span class="heading">Blood Group: </span></td>
                <td width="21%" align="left" valign="top"><?php echo $result_1['blood_group'];?></td>
              </tr>
              <tr>
                <td align="left" valign="top" nowrap="nowrap" class="heading">Date Of Birth: </td>
                <td align="left" valign="top"><?php echo $result_1['dateofbirth'];?></td>
                <td align="left" valign="top" nowrap="nowrap" class="heading">Height:</td>
                <td align="left" valign="top"><?php echo $result_1['height'];?></td>
              </tr>
              <tr>
                <td align="left" valign="top" nowrap="nowrap" class="heading">Birth Place:</td>
                <td align="left" valign="top"><?php echo $result_1['birth_place'];?></td>
                <td align="left" valign="top" nowrap="nowrap"><span class="heading">Education:</span></td>
                <td align="left" valign="top"><?php echo $result_1['education'];?></td>
              </tr>
              <tr>
                <td align="left" valign="top" nowrap="nowrap" class="heading">Birth Time:</td>
                <td align="left" valign="top"><?php echo $result_1['birth_time'];?></td>
                <td align="left" valign="top" nowrap="nowrap" class="heading">Occupation : </td>
                <td align="left" valign="top"><?php echo $result_1['occupation'];?></td>
              </tr>
              <tr>
                <td align="left" valign="top" nowrap="nowrap" class="heading">Complexion:</td>
                <td align="left" valign="top"><?php echo $result_1['complexion'];?></td>
                <td align="left" valign="top" nowrap="nowrap" class="heading">Income:</td>
                <td align="left" valign="top"><?php echo $result_1['income'];?></td>
              </tr>
              <tr>
                <td align="left" valign="top" nowrap="nowrap" class="heading">Marital Status:</td>
                <td align="left" valign="top"><?php echo $result_1['marital_status'];?></td>
                <td align="left" valign="top" nowrap="nowrap"><span class="heading">Spectacles/lenses:</span></td>
                <td align="left" valign="top"><?php echo $result_1['spectacles'];?></td>
              </tr>
              <tr>
                <td align="left" valign="top" nowrap="nowrap" class="heading">Caste:</td>
                <td align="left" valign="top"><?php echo $result_1['caste'];?></td>
                <td align="left" valign="top"><span class="heading">Physical Disability(If any) : </span></td>
                <td align="left" valign="top"><?php echo $result_1['physical_disabilities'];?></td>
              </tr>
              
              
            </table></td>
          </tr>
          <tr>
            <td><table width="100%" border="0" cellpadding="5" cellspacing="0">
              <tr>
                <td width="81" align="left" nowrap="nowrap" class="heading">Gotra &amp; Devak:  </td>
                <td width="81"><?php echo $result_1['gotra_devak'];?></td>
                <td width="39" class="heading">&nbsp;</td>
                <td width="103">&nbsp;</td>
                <td width="44" align="left" nowrap="nowrap" class="heading">Mangal:</td>
                <td width="109"><?php echo $result_1['mangal'];?></td>
                <td width="44" align="left" nowrap="nowrap" class="heading">Gan:</td>
                <td width="82"><?php echo $result_1['gan'];?></td>
              </tr>
              <tr>
                <td align="left" valign="top" nowrap="nowrap" class="heading">Nakshtra:</td>
                <td><?php echo $result_1['nakshatra'];?></td>
                <td align="left" nowrap="nowrap" class="heading">Ras:</td>
                <td><?php echo $result_1['ras'];?></td>
                <td align="left" nowrap="nowrap" class="heading">Nadi:</td>
                <td><?php echo $result_1['nadi'];?></td>
                <td align="left" nowrap="nowrap" class="heading">Charan:</td>
                <td><?php echo $result_1['charan'];?></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td height="42" align="center" valign="middle" class="heading_bold">Family Details</td>
          </tr>
          <tr>
            <td bgcolor="#CC6666"><table width="100%" border="0" cellpadding="5" cellspacing="0" bgcolor="#FFDCCA">
              <tr>
                <td width="15%" align="left" valign="top" bgcolor="#FFDCCA" class="heading">Father:</td>
                <td width="37%"><?php echo $result_1['father'];?></td>
                <td width="15%" align="left"><span class="heading">Occuption</span>:</td>
                <td width="33%"><?php echo $result_1['parent_occupation'];?></td>
              </tr>
              <tr>
                <td align="left" valign="top" bgcolor="#FFDCCA" class="heading">Mother:</td>
                <td><?php echo $result_1['mother'];?></td>
                <td align="left" class="heading">Occuption:</td>
                <td><?php echo $result_1['mother_occupation'];?></td>
              </tr>
              <tr>
                <td align="left" valign="top" bgcolor="#FFDCCA" class="heading">Mama:</td>
                <td><?php echo $result_1['mama_name'];?></td>
                <td align="left"><span class="heading">Native Place: </span></td>
                <td><?php echo $result_1['names_of_relatives'];?></td>
              </tr>
              <tr>
                <td align="left" valign="top" bgcolor="#FFDCCA" class="heading">Brothers:</td>
                <td><?php echo $result_1['no_of_brothers'];?></td>
                <td align="left"><span class="heading">Sister:</span></td>
                <td><?php echo $result_1['no_of_sisters'];?></td>
              </tr>
              <tr>
                <td align="left" valign="top" bgcolor="#FFDCCA" class="heading">Wealth:</td>
                <td><?php echo $result_1['family_property'];?></td>
                <td align="left" class="heading">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              
            </table></td>
          </tr>
          <tr>
            <td height="42" align="center" valign="middle" class="heading_bold">Expectation's</td>
          </tr>
          <tr>
            <td><table width="100%" border="0" cellpadding="5" cellspacing="0" bgcolor="#ffdcca">
              <tr>
                <td width="22%" align="left" valign="top" nowrap="nowrap" bgcolor="#FFDCCA" class="heading">Qualification:</td>
                <td width="26%"><?php echo $result_1['exp_education'];?></td>
                <td width="22%" align="left" nowrap="nowrap" class="heading">Max Age Different : </td>
                <td width="30%" bgcolor="#ffdcca"><?php echo $result_1['exp_max_age_difference'];?></td>
              </tr>
              <tr>
                <td align="left" valign="top" nowrap="nowrap" bgcolor="#FFDCCA" class="heading">Max Height Different: </td>
                <td><?php echo $result_1['exp_max_height'];?></td>
                <td align="left"><span class="heading">Mangal:</span></td>
                <td><?php echo $result_1['exp_mangal_accepted'];?></td>
              </tr>
              <tr>

                <td align="left" valign="top" nowrap="nowrap" bgcolor="#FFDCCA" class="heading">Marital Status: </td>
                <td><?php echo $result_1['exp_marital_status'];?></td>
                <td align="left" nowrap="nowrap"><span class="heading">Handicapped:</span></td>
                <td><?php echo $result_1['exp_horoscope_needed'];?></td>
              </tr>
              
              <tr>
                <td align="left" valign="top" nowrap="nowrap" bgcolor="#FFDCCA" class="heading">Horoscope Needed:</td>
                <td><?php echo $result_1['exp_horoscope_needed'];?></td>
                <td align="left" nowrap="nowrap" class="heading">Prefrred Cities/District : </td>
                <td><?php echo $result_1['exp_preferred_cities_district'];?></td>
              </tr>
              
              
              
              
            </table></td>
          </tr>
        </table></td>
        <td width="30" align="left" valign="top">&nbsp;</td>
        <td width="203" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><? if($result_1['upload_image']!="") { ?><img src="<? echo $result_1['upload_image'];  ?>" width="203" height="270" /><? } else { ?><img src="images/nopreview.png" width="203" height="270" /> <? } ?></td>
          </tr>
          <tr>
            <td height="41" align="center" valign="middle"><strong>MEMBER ID MB21714</strong></td>
          </tr>
          
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
