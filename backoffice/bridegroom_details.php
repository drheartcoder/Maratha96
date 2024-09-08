<?php
include("connect.php");
$id = isset($_GET['id']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>96 Kuli Maratha Backoffice</title>
<link href="images/knt_style.css" rel="stylesheet" type="text/css" />
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
?>
<body>

<table border="0" cellpadding="0" cellspacing="0" width="100%">
	
  <tr>
    <td align="center"><table width="85%" border="0" cellpadding="2" cellspacing="0" class="tblborder3">
      <tr>
        <td align="center"><table width="100%" border="0" cellpadding="0" cellspacing="10" class="tblborder">
          <tr>
            <td align="left"><table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr><td colspan="2">&nbsp;</td></tr>
                
            </table></td>
          </tr>
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
				
				<tr><td>&nbsp;</td></tr>
              <tr bgcolor="#ded9d9">
                  <td><table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0" >
                     <tr>
					  
					  <td width="3%"><img src="images/devider.png" width="2" height="39" /></td>
						<td width="80" align="center" valign="middle"><a href="mainpage.php" class="bluelink"><b>Home</b></a></td>
						
						
			
                       					
						
						<td width="2"><img src="images/devider.png" width="2" height="39" /></td>
                        <td width="80" align="center" valign="middle"><a href="bridegroom.php" class="bluelink"><strong>Groom</strong></a></td>
						
						
                        <td width="2"><img src="images/devider.png" width="2" height="39" /></td>
                        <td width="80" align="center" valign="middle"><a href="register.php" class="bluelink"><strong>Bride</strong></a></td>
                        
                        
                        <td width="2"><img src="images/devider.png" width="2" height="39" /></td>
                        <td width="120" align="center" valign="middle"><a href="divorcee_male.php" class="bluelink"><strong>Divorcee-Male</strong></a></td>
                        
                         <td width="2"><img src="images/devider.png" width="2" height="39" /></td>
                        <td width="150" align="center" valign="middle"><a href="divorcee_female.php" class="bluelink"><strong>Divorcee-Female</strong></a></td>
                        
                        
                        <td width="2"><img src="images/devider.png" width="2" height="39" /></td>
                        <td align="center" valign="middle"><a href="widow.php" class="bluelink"><strong>Widow</strong></a></td>
                        
                        <td width="2"><img src="images/devider.png" width="2" height="39" /></td>
                        <td align="center" valign="middle"><a href="widower.php" class="bluelink"><strong>Widower</strong></a></td>
						
						<td width="2"><img src="images/devider.png" width="2" height="39" /></td>
                        <td align="center" valign="middle"><a href="setting.php" class="bluelink"><b>Settings</b></a></td>
				
                        <td width="2"><img src="images/devider.png" width="2" height="39" /></td>
						<td align="center" valign="middle"><a href="logout.php" class="bluelink"><b>Logout</b></a></td>
                       
                      </tr>
                  </table></td>
           </tr>
		    
			
			
				<tr>
                  <td>&nbsp;</td>
                </tr>
				
				<tr>
                  <td align="center"><table cellpadding="3" cellspacing="3" width="100%">
<tr>
<td valign="top">
<table width="100%" border="0" cellspacing="2" cellpadding="4" class="tblborder">
<tr> 
                <td colspan="2" bgcolor="#FFF0F0"><div align="center"><strong> Personal Details</strong>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
                    </div>
                  <a href="edit.php?id=<?php echo $result_1['bridegroom_id'];?>">=>Click Here To Edit Groom Profile</A></td>
</tr>

<tr> 
                <td width="40%" bgcolor="#FFF0F0"><strong>Name </strong></td>

                <td width="60%"><?php echo $result_1['firstname'];?></td>
              </tr>
              
              <tr> 
                <td bgcolor="#FFF0F0" ><strong>Date of Birth</strong></td>
                <td><?php echo $result_1['dateofbirth'];?></td>
              </tr>
              
              <tr>
                <td bgcolor="#FFF0F0"><strong>Birth Time</strong></td>
                <td><?php echo $result_1['birth_time'];?></td>
              </tr>
			  <tr>
                <td bgcolor="#FFF0F0"><strong>Birth Place</strong></td>
                <td><?php echo $result_1['birth_place'];?></td>
              </tr>
			  <tr> 
                <td bgcolor="#FFF0F0"><strong>Blood Group</strong></td>

                <td><?php echo $result_1['blood_group'];?></td>
              </tr>
			  <tr> 
                <td width="40%" bgcolor="#FFF0F0"><strong>Gender</strong></td>
                <td><?php echo $result_1['gender'];?></td>
              </tr>
			   <tr> 
                <td bgcolor="#FFF0F0"><strong>Height </strong>(Ft.inch)</td>
                <td><?php echo $result_1['height'];?></td>
              </tr>
			    <tr> 
                <td bgcolor="#FFF0F0"><p><strong>Caste</strong></p></td>
                <td><?php echo $result_1['caste'];?></td>
              </tr>
			   <tr> 
                <td bgcolor="#FFF0F0"><strong>Complexion</strong></td>
                <td><?php echo $result_1['complexion'];?></td>
              </tr>
			    <tr> 
                <td width="40%" bgcolor="#FFF0F0"><strong>Personality</strong></td>
                <td width="60%"><?php echo $result_1['personality'];?></td>
              </tr>
			  <tr> 
                <td width="40%" height="31" bgcolor="#FFF0F0"><strong>Spectacles</strong>/<strong>Lenses</strong> </td>
                <td><?php echo $result_1['spectacles'];?></td>
              </tr>
			   <tr> 
                <td bgcolor="#FFF0F0"><strong>Physical Disabilities</strong></td>

                <td><?php echo $result_1['physical_disabilities'];?></td>
              </tr>
			     <tr> 
                <td bgcolor="#FFF0F0"><strong>If Yes specify</strong></td>
                <td><?php echo $result_1['if_specify'];?></td>
              </tr>
			    <tr> 
                <td bgcolor="#FFF0F0"><strong>Hobbies</strong></td>

                <td><?php echo $result_1['hobbies'];?></td>
              </tr>
			  <tr> 
                <td bgcolor="#FFF0F0"><strong>Native Place</strong></td>
                <td><?php echo $result_1['native_place'];?></td>
              </tr>
			  <tr> 
                <td bgcolor="#FFF0F0"><strong>Marital Status</strong></td>

                <td><?php echo $result_1['marital_status'];?></td>
              </tr>
			   <tr>
                <td bgcolor="#FFF0F0"><strong>Ras</strong></td>

                <td><?php echo $result_1['ras'];?></td>
              </tr>
			  <tr>
                <td bgcolor="#FFF0F0"><strong>Nadi</strong></td>
                <td><?php echo $result_1['nadi'];?></td>
              </tr>
			   <tr>
                <td bgcolor="#FFF0F0"><strong>Gan</strong></td>
                <td><?php echo $result_1['gan'];?></td>
              </tr>
			  <tr>
                <td bgcolor="#FFF0F0"><strong>Charan</strong></td>
                <td><?php echo $result_1['charan'];?></td>
              </tr>
			  <tr>

                <td bgcolor="#FFF0F0"><strong>Nakshatra</strong></td>
                <td><?php echo $result_1['nakshatra'];?></td>
              </tr>
			   <tr> 
                <td bgcolor="#FFF0F0"><strong>Gotra &amp; Devak</strong></td>
                <td><?php echo $result_1['gotra_devak'];?></td>
              </tr>
			   <tr> 
                <td height="32" bgcolor="#FFF0F0"><strong>Mangal</strong></td>
                <td><?php echo $result_1['mangal'];?></td>
              </tr>  
			   <tr> 
                <td bgcolor="#FFF0F0"><strong>Education </strong></td>

                <td><?php echo $result_1['education'];?></td>
              </tr>
			    <tr> 
                <td bgcolor="#FFF0F0"><strong>Occupation and Income </strong></td>
                <td><?php echo $result_1['occupation'];?></td>
              </tr>
			   <tr> 
                <td bgcolor="#FFF0F0"><strong>Father's Name</strong></td>

                <td><?php echo $result_1['father_name'];?></td>
              </tr>
			  <tr>
                <td bgcolor="#FFF0F0"><strong>Father's Occupation</strong></td>
                <td><?php echo $result_1['father_occupation'];?></td>
              </tr>
			  
			   <tr> 
                <td bgcolor="#FFF0F0"><strong>Mother's Name</strong></td>
                <td><?php echo $result_1['mother_name'];?></td>
              </tr>
			  <tr> 
                <td bgcolor="#FFF0F0"><strong>Mother's Occupation</strong></td>
                <td><?php echo $result_1['mother_occupation'];?></td>
              </tr>
			   	<tr> 
                <td height="39" bgcolor="#FFF0F0"><strong>No. Of Brothers</strong></td>
                <td><?php echo $result_1['no_of_brothers'];?></td>
              </tr>
			   <tr> 
                <td bgcolor="#FFF0F0"><strong>No. Of Sisters</strong></td>

                <td><?php echo $result_1['no_of_sisters'];?></td>
              </tr>
			   <tr> 
                <td bgcolor="#FFF0F0"><strong>Mama's Name</strong></td>
                <td><?php echo $result_1['mama_name'];?></td>
              </tr>

			  <tr> 
                <td valign="top" bgcolor="#FFF0F0"><strong>Family Property</strong></td>
                <td><?php echo $result_1['family_property'];?></td>
			  </tr>	
			   <tr> 
                <td bgcolor="#FFF0F0"><strong>Names of Relatives</strong></td>
                <td><?php echo $result_1['names_of_relatives'];?></td>
              </tr>
			  <tr> 
                <td bgcolor="#FFF0F0"><strong>Current Address</strong></td>
                <td><?php echo $result_1['address'];?></td>
              </tr>
			    <tr> 
                <td bgcolor="#FFF0F0"><strong>Telephone </strong>(e.g. 111-123456)</td>
                <td><?php echo $result_1['telephone'];?></td>
              </tr>
			  <tr> 
                <td bgcolor="#FFF0F0"><strong>Mobile</strong>(e.g. 1234567890)</td>
                <td><?php echo $result_1['mobile'];?></td>
              </tr>
			  
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Email Address</strong></td>
                <td><?php echo $result_1['email'];?></td>
              </tr>
			   <tr> 
                <td bgcolor="#FFF0F0"><strong>Zip</strong></td>
                <td><?php echo $result_1['zip'];?></td>
              </tr>
			  <tr> 
                <td bgcolor="#FFF0F0"><strong>District/Village/City</strong> </td>
                <td><?php echo $result_1['district'];?></td>
              </tr>

              <tr> 
                <td bgcolor="#FFF0F0"><strong>State</strong></td>
                <td><?php echo $result_1['state'];?></td>
              </tr>
			  <tr> 
                <td bgcolor="#FFF0F0"><strong>Permanent Address</strong></td>
                <td><?php echo $result_1['permanent_address'];?></td>
              </tr>
	<tr> 
                    <td bgcolor="#FFF0F0"><strong>Max Height Diff(Ft.inch)</strong></td>
                    <td><?php echo $result_1['exp_max_height'];?></td>
                 </tr>
             <tr> 
                                                    <td bgcolor="#FFF0F0"><strong>Marital 
                                                      Status</strong></td>
                                                    <td><?php echo $result_1['exp_marital_status'];?></td>
                                                  </tr>
           <tr> 
                                                    <td width="45%" bgcolor="#FFF0F0"><strong>Max. 
                                                      Age Difference</strong></td>
                                                    <td><?php echo $result_1['exp_max_age_difference'];?></td>
                                                  </tr>
												   <tr> 
                                                    <td bgcolor="#FFF0F0"><strong>Handicapped 
                                                      Accepted</strong></td>
                                                    <td><?php echo $result_1['exp_horoscope_needed'];?></td>
                                                  </tr>
												  <tr> 
                                                    <td bgcolor="#FFF0F0"><strong>Education</strong></td>
                                                    <td><?php echo $result_1['exp_education'];?></td>
                  </tr>
				   <tr> 
                                                    <td bgcolor="#FFF0F0"><strong>Horoscope 
                                                      Needed</strong></td>

                                                    <td><?php echo $result_1['exp_horoscope_needed'];?></td>
                                                  </tr>
												  <tr> 
                                                    <td height="29" bgcolor="#FFF0F0"><strong>Mangal 
                                                      Accepted</strong></td>
                                                    <td><?php echo $result_1['exp_mangal_accepted'];?></td>
                                                  </tr>
												  <tr> 
                                                    <td height="29" bgcolor="#FFF0F0"><strong>Other Expectations</strong></td>
                                                    <td><?php echo $result_1['other_expectations'];?></td>
                                                  </tr>
              <tr>
                <td colspan="2" bordercolor="#FFFFFF" bgcolor="#FFF0F0">&nbsp;</td>
                </tr>
</table></td>
</tr>

<tr>
<td valign="top">&nbsp;</td>
</tr>
	  <tr> 
         <td>&nbsp;</td>
      </tr>
      <tr> 
         <td bgcolor="#9A0000"><img src="file:///D|/navnath/shaddi/images/spacer.gif" width="1" height="1"></td>
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
    </table></td>
	
  </tr>
</table>

</body>
</html>
