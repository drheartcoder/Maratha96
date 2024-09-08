<?php
	include("connect.php");
?>
<?php
	if(isset($_POST['Update'])!="")
	{
		if($_error==0)
		{				
			$stmt="UPDATE bride
					SET firstname='".$_POST["firstname"]."',
					dateofbirth='".$_POST["dateofbirth"]."',
					birth_place='".$_POST["birth_place"]."',
					birth_time='".$_POST["birth_time"]."',
					permanent_address='".$_POST["permanent_address"]."',
					hobbies='".$_POST["hobbies"]."',
					gender='".$_POST["gender"]."',
					height='".$_POST["height"]."',
					caste='".$_POST["caste"]."',
					gan='".$_POST["gan"]."',
					charan='".$_POST["charan"]."',
					education='".$_POST["education"]."',
					education_level='".$_POST["education_level"]."',
					education_field='".$_POST["education_field"]."',
					working_with='".$_POST["working_with"]."',
					working_as='".$_POST["working_as"]."',
					annual_income='".$_POST["annual_income"]."',
					complexion='".$_POST["complexion"]."',
					blood_group='".$_POST["blood_group"]."',
					marital_status='".$_POST["marital_status"]."',
					personality='".$_POST["personality"]."',
					spectacles='".$_POST["spectacles"]."',
					mangal='".$_POST["mangal"]."',
					address='".$_POST["address"]."',
					telephone='".$_POST["telephone"]."',
					mobile='".$_POST["mobile"]."',
					zip='".$_POST["zip"]."',
					district='".$_POST["district"]."',
					state='".$_POST["state"]."',
					email='".$_POST["email"]."',
					gotra_devak='".$_POST["gotra_devak"]."',
					ras='".$_POST["ras"]."',
					nadi='".$_POST["nadi"]."',
					nakshatra='".$_POST["nakshatra"]."',
					physical_disabilities='".$_POST["physical_disabilities"]."',
					if_specify='".$_POST["if _specify"]."',
					f_prefix='".$_POST["f_prefix"]."',
					father_name='".$_POST["father_name"]."',
					m_prefix='".$_POST["m_prefix"]."',
					mother_name='".$_POST["mother_name"]."',
					father_occupation='".$_POST["father_occupation"]."',
					mother_occupation='".$_POST["mother_occupation"]."',
					native_place='".$_POST["native_place"]."',
					family_property='".$_POST["family_property"]."',
					no_of_brothers='".$_POST["no_of_brothers"]."',
					brother_details='".$_POST["brother_details"]."',
					no_of_sisters='".$_POST["no_of_sisters"]."',
					sister_details='".$_POST["sister_details"]."',
					mama_name='".$_POST["mama_name"]."',
					names_of_relatives='".$_POST["names_of_relatives"]."',
					exp_caste='".$_POST["exp_caste"]."',
					exp_max_height='".$_POST["exp_max_height"]."',
					exp_education='".$_POST["exp_education"]."',
					exp_horoscope_needed='".$_POST["exp_horoscope_needed"]."',
					exp_max_age_difference='".$_POST["exp_max_age_difference"]."',
					exp_marital_status='".$_POST["exp_marital_status"]."',
					exp_income='".$_POST["exp_income"]."',
					exp_mangal_accepted='".$_POST["exp_mangal_accepted"]."',
					exp_preferred_cities_district='".$_POST["exp_preferred_cities_district"]."',
					exp_occupation='".$_POST["exp_occupation"]."',
					other_expectations='".$_POST["other_expectations"]."'
					WHERE bride_id='".$_GET["id"]."'";
    
		 	$result= mysqli_query($con,$stmt);
		 
	 		if(!$result)
   			{
   			    echo mysqli_error();
			 }
			else
			{
				header("location:register.php");
			}			
		}
	}

$cid=$_GET['id'];
$sql="select * from bride where bride_id=".$cid;
$result=mysqli_query($con,$sql);
$result_1=mysqli_fetch_array($result);

	if(isset($_POST['Update'])!="")
	{
		$result_1=$_POST;
	}

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>96 Kuli Maratha Backoffice</title>
<link href="images/knt_style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {font-size: 18px}
-->
</style>
</head>	

<form method="POST" action="" enctype="multipart/form-data" >
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
                <td colspan="2" bgcolor="#FFF0F0"><div align="center"><strong> Personal Details</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>                 </td>
</tr>

<tr> 
				<td width="40%" bgcolor="#FFF0F0"><strong>Image</strong><? echo "$upload_image"; ?></td>
<td ><? if($result_1['upload_image']!="") { ?><img src="../<? echo $result_1['upload_image'];  ?>" width="203" height="270" /><? } else { ?><img src="images/nopreview.png" width="203" height="270" /> <? } ?><br />



<a href="upload/index.php?id=<?php echo $result_1['bride_id'];?>"> <input type="submit" name="sub" value="Upload Photo" onclick=""/></a></td>
                </tr>
				<form action="" method="post" >
				<tr>
				<td width="40%" bgcolor="#FFF0F0"><strong>Name </strong></td>
				
                <td><input type="text" name="firstname" id="firstname" value="<?php echo $result_1['firstname'];?>" /></td>
              </tr>
              
              <tr> 
                <td bgcolor="#FFF0F0" ><strong>Date of Birth</strong></td>
                <td><input type="text" name="dateofbirth" id="dateofbirth" value="<?php echo $result_1['dateofbirth'];?>" /></td>
              </tr>
              <tr>
                <td bgcolor="#FFF0F0"><strong>Birth Place</strong></td>
                <td><input type="text" name="birth_place" id="birth_place" value="<?php echo $result_1['birth_place'];?>" /></td>
              </tr>
              <tr>
                <td bgcolor="#FFF0F0"><strong>Birth Time</strong></td>
                <td><input type="text" name="birth_time" id="birth_time" value="<?php echo $result_1['birth_time'];?>" /></td>
              </tr>			  
			  
<!--			   <tr>
			     <td bgcolor="#FFF0F0"><strong>Age</strong></td>
			     <td><input type="text" name="age" id="age" value="<?php //echo $result_1['age'];?>" /></td>
			     </tr>-->
			   <tr> 
                <td bgcolor="#FFF0F0"><strong>Permanent Address</strong></td>
                <td><input type="text" name="permanent_address" id="permanent_address" value="<?php echo $result_1['permanent_address'];?>" /></td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Hobbies</strong></td>

                <td><input type="text" name="hobbies" id="hobbies" value="<?php echo $result_1['hobbies'];?>" /></td>
              </tr>
              <tr> 
                <td width="40%" bgcolor="#FFF0F0"><strong>Gender</strong></td>
                <td><input type="text" name="gender" id="gender" value="<?php echo $result_1['gender'];?>" /></td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Height </strong>(Ft.inch)</td>
                <td><input type="text" name="height" id="height" value="<?php echo $result_1['height'];?>" /></td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><p><strong>Caste</strong></p></td>
                <td><input type="text" name="caste" id="caste" value="<?php echo $result_1['caste'];?>" /></td>
              </tr>
              <tr>
                <td bgcolor="#FFF0F0"><strong>Gan</strong></td>
                <td><input type="text" name="gan" id="gan" value="<?php echo $result_1['gan'];?>" /></td>
              </tr>
              <tr>
                <td bgcolor="#FFF0F0"><strong>Charan</strong></td>
                <td><input type="text" name="charan" id="charan" value="<?php echo $result_1['charan'];?>" /></td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Education </strong></td>
                <td><input type="text" name="education" id="education" value="<?php echo $result_1['education'];?>" /></td>
              </tr>
			  
			  <tr> 
                <td bgcolor="#FFF0F0"><strong>Education Level </strong></td>
                <td><input type="text" name="education_level" id="education_level" value="<?php echo $result_1['education_level'];?>" /></td>
              </tr>
			  
			  <tr> 
                <td bgcolor="#FFF0F0"><strong>Education Field </strong></td>
                <td><input type="text" name="education_field" id="education_field" value="<?php echo $result_1['education_field'];?>" /></td>
              </tr>
			  
			  <tr> 
                <td bgcolor="#FFF0F0"><strong>Working With </strong></td>
                <td><input type="text" name="working_with" id="working_with" value="<?php echo $result_1['working_with'];?>" /></td>
              </tr>
			  
			  <tr> 
                <td bgcolor="#FFF0F0"><strong>Working As </strong></td>
                <td><input type="text" name="working_as" id="working_as" value="<?php echo $result_1['working_as'];?>" /></td>
              </tr>
			  
			  
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Annual Income</strong></td>
                <td><input type="text" name="annual_income" id="annual_income" value="<?php echo $result_1['annual_income'];?>" /></td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Complexion</strong></td>
                <td><input type="text" name="complexion" id="complexion" value="<?php echo $result_1['complexion'];?>" /></td>
              </tr>
             
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Blood Group</strong></td>

                <td><input type="text" name="blood_group" id="blood_group" value="<?php echo $result_1['blood_group'];?>" /></td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Marital Status</strong></td>

                <td><input type="text" name="marital_status" id="marital_status" value="<?php echo $result_1['marital_status'];?>" /></td>
              </tr>
			  
			  <tr> 
                <td width="40%" bgcolor="#FFF0F0"><strong>Personality</strong></td>
                <td width="60%"><input type="text" name="personality" id="personality" value="<?php echo $result_1['personality'];?>" /></td>
              </tr>
			  
              <tr> 
                <td width="40%" height="31" bgcolor="#FFF0F0"><strong>Spectacles</strong></td>
                <td><input type="text" name="spectacles" id="spectacles" value="<?php echo $result_1['spectacles'];?>" /></td>
              </tr>
              <tr> 
                <td height="32" bgcolor="#FFF0F0"><strong>Mangal</strong></td>
                <td><input type="text" name="mangal" id="mangal" value="<?php echo $result_1['mangal'];?>" /></td>
              </tr>
          
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Address</strong></td>
                <td><input type="text" name="address" id="address" value="<?php echo $result_1['address'];?>" /></td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Telephone </strong>(e.g. 111-123456)</td>
                <td><input type="text" name="telephone" id="telephone" value="<?php echo $result_1['telephone'];?>" /></td>
              </tr>
			  <tr> 
                <td bgcolor="#FFF0F0"><strong>Mobile</strong>(e.g. 1234567890)</td>
                <td><input type="text" name="mobile" id="mobile" value="<?php echo $result_1['mobile'];?>" /></td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Zip</strong></td>
                <td><input type="text" name="zip" id="zip" value="<?php echo $result_1['zip'];?>" /></td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>District</strong></td>
                <td><input type="text" name="district" id="district" value="<?php echo $result_1['district'];?>" /></td>
              </tr>

              <tr> 
                <td bgcolor="#FFF0F0"><strong>State</strong></td>
                <td><input type="text" name="state" id="state" value="<?php echo $result_1['state'];?>" /></td>
              </tr>
              
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Email Address</strong></td>
                <td><input type="text" name="email" id="email" value="<?php echo $result_1['email'];?>" /></td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Gotra &amp; Devak</strong></td>
                <td><input type="text" name="gotra_devak" id="gotra_devak" value="<?php echo $result_1['gotra_devak'];?>" /></td>
              </tr>
              <tr>
                <td bgcolor="#FFF0F0"><strong>Ras</strong></td>

                <td><input type="text" name="ras" id="ras" value="<?php echo $result_1['ras'];?>" /></td>
              </tr>
              <tr>
                <td bgcolor="#FFF0F0"><strong>Nadi</strong></td>
                <td><input type="text" name="nadi" id="nadi" value="<?php echo $result_1['nadi'];?>" /></td>
              </tr>
              <tr>

                <td bgcolor="#FFF0F0"><strong>Nakshatra</strong></td>
                <td><input type="text" name="nakshatra" id="nakshatra" value="<?php echo $result_1['nakshatra'];?>" /></td>
              </tr>
<!--              <tr> 
                <td bgcolor="#FFF0F0"><strong>Occupation </strong></td>
                <td><input type="text" name="occupation" id="occupation" value="<?php //echo $result_1['occupation'];?>" /></td>
              </tr>-->
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Physical Disabilities</strong></td>

                <td><input type="text" name="physical_disabilities" id="physical_disabilities" value="<?php echo $result_1['physical_disabilities'];?>" /></td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>If Yes specify</strong></td>
                <td><input type="text" name="if_specify" id="if_specify" value="<?php echo $result_1['if_specify'];?>" /></td>
              </tr>
              <tr>
                <td colspan="2" bordercolor="#FFFFFF" bgcolor=""><div align="center"><strong>Family Details </strong></div></td>
                </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>F_Prefix</strong></td>
                <td><input type="text" name="f_prefix" id="f_prefix" value="<?php echo $result_1['f_prefix'];?>" /></td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Father's Name</strong></td>

                <td><input type="text" name="father_name" id="father_name" value="<?php echo $result_1['father_name'];?>" /></td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>M_Prefix</strong></td>
                <td><input type="text" name="m_prefix" id="m_prefix" value="<?php echo $result_1['m_prefix'];?>" /></td>
              </tr>

              <tr> 
                <td bgcolor="#FFF0F0"><strong>Mother's Name</strong></td>
                <td><input type="text" name="mother_name" id="mother_name" value="<?php echo $result_1['mother_name'];?>" /></td>
              </tr>
			  
			   		  
              <tr>
                <td bgcolor="#FFF0F0"><strong>Father's Occupation</strong></td>
                <td><input type="text" name="father_occupation" id="father_occupation" value="<?php echo $result_1['father_occupation'];?>" /></td>
              </tr>

			   <tr>
                <td bgcolor="#FFF0F0"><strong>Mother's Occupation</strong></td>
                <td><input type="text" name="mother_occupation" id="mother_occupation" value="<?php echo $result_1['mother_occupation'];?>" /></td>
              </tr>

              <tr> 
                <td bgcolor="#FFF0F0"><strong>Native Place</strong></td>
                <td><input type="text" name="native_place" id="native_place" value="<?php echo $result_1['native_place'];?>" /></td>
              </tr>
			  <tr> 
                <td valign="top" bgcolor="#FFF0F0"><strong>Family Property</strong></td>
                <td><input type="text" name="family_property" id="family_property" value="<?php echo $result_1['family_property'];?>" /></td>
			  </tr>	
</table>
</td>
</tr>

<tr>
<td valign="top">
<table width="100%" border="0" cellspacing="2" cellpadding="4" class="tblborder">
              
             
              <tr> 
                <td height="39" bgcolor="#FFF0F0"><strong>No. Of Brothers</strong></td>
                <td><input type="text" name="no_of_brothers" id="no_of_brothers" value="<?php echo $result_1['no_of_brothers'];?>" /></td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Brother Details</strong></td>
                <td><input type="text" name="brother_details" id="brother_details" value="<?php echo $result_1['brother_details'];?>" /></td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>No. Of Sisters</strong></td>

                <td><input type="text" name="no_of_sisters" id="no_of_sisters" value="<?php echo $result_1['no_of_sisters'];?>" /></td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Sister Dtls</strong></td>
                <td><input type="text" name="sister_details" id="sister_details" value="<?php echo $result_1['sister_details'];?>" /></td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Mama's Name</strong></td>
                <td><input type="text" name="mama_name" id="mama_name" value="<?php echo $result_1['mama_name'];?>" /></td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Names of Relatives</strong></td>
                <td><input type="text" name="names_of_relatives" id="names_of_relatives" value="<?php echo $result_1['names_of_relatives'];?>" /></td>
              </tr>
            </table>
</td>
</tr>
	  <tr> 
         <td>&nbsp;</td>
      </tr>
      
      <tr> 
         <td>&nbsp;</td>
      </tr>

      <tr> 
         <td class="HEADER"><strong><center>EXPECTATIONS</center></strong></td>
      </tr>

<tr>
<td valign="top">
<table width="100%" border="0" cellspacing="3" cellpadding="3" class="t">
           <tr> 
             <td width="50%" valign="top">
			   <table width="100%" height="176" border="0" cellpadding="4" cellspacing="2" class="tblborder">
                 <tr> 
                    <td width="45%" bgcolor="#FFF0F0"><strong>Caste</strong></td>

                    <td><input type="text" name="exp_caste" id="exp_caste" value="<?php echo $result_1['exp_caste'];?>" /></td>
                 </tr>
                 <tr> 
                    <td bgcolor="#FFF0F0"><strong>Max Height Diff(Ft.inch)</strong></td>
                    <td><input type="text" name="exp_max_height" id="exp_max_height" value="<?php echo $result_1['exp_max_height'];?>" /></td>
                 </tr>
                  <tr> 
                                                    <td bgcolor="#FFF0F0"><strong>Education</strong></td>
                                                    <td><input type="text" name="exp_education" id="exp_education" value="<?php echo $result_1['exp_education'];?>" /></td>
                  </tr>
				  <tr> 
                                                    <td bgcolor="#FFF0F0"><strong>Handicapped 
                                                      Accepted</strong></td>
                                                    <td><input type="text" name="exp_horoscope_needed" id="exp_horoscope_needed" value="<?php echo $result_1['exp_horoscope_needed'];?>" /></td>
                                                  </tr>
                                                  <tr> 
                                                    <td bgcolor="#FFF0F0"><strong>Horoscope 
                                                      Needed</strong></td>

                                                    <td><input type="text" name="exp_horoscope_needed" id="exp_horoscope_needed" value="<?php echo $result_1['exp_horoscope_needed'];?>" /></td>
                                                  </tr>
               </table>
             </td>
                                              <td valign="top"><table width="100%" border="0" cellspacing="2" cellpadding="4" class="tblborder">
                                                  <tr> 
                                                    <td width="45%" bgcolor="#FFF0F0"><strong>Max. 
                                                      Age Difference</strong></td>
                                                    <td><input type="text" name="exp_max_age_difference" id="exp_max_age_difference" value="<?php echo $result_1['exp_max_age_difference'];?>" /></td>
                                                  </tr>

                                                  <tr> 
                                                    <td bgcolor="#FFF0F0"><strong>Marital 
                                                      Status</strong></td>

                                                    <td><input type="text" name="exp_marital_status" id="exp_marital_status" value="<?php echo $result_1['exp_marital_status'];?>" /></td>
                                                  </tr>
                                                  <tr> 
                                                    <td bgcolor="#FFF0F0"><strong>Expected Income</strong></td>
                                                    <td><input type="text" name="exp_income" id="exp_income" value="<?php echo $result_1['exp_income'];?>" /></td>
                                                  </tr>
                                                  <tr> 
                                                    <td height="29" bgcolor="#FFF0F0"><strong>Mangal 
                                                      Accepted</strong></td>
                                                    <td><input type="text" name="exp_mangal_accepted" id="exp_mangal_accepted" value="<?php echo $result_1['exp_mangal_accepted'];?>" /></td>
                                                  </tr>
                                                  <tr> 
                                                    <td height="64" bgcolor="#FFF0F0"><strong>Preferred 
                                                      Cities/District</strong></td>
                                                    <td><input type="text" name="exp_preferred_cities_district" id="exp_preferred_cities_district" value="<?php echo $result_1['exp_preferred_cities_district'];?>" /></td>
                                                  </tr>	
												  
												  <tr> 
                                                    <td bgcolor="#FFF0F0"><strong>Expected Occupation</strong></td>
                                                    <td><input type="text" name="exp_occupation" id="exp_occupation" value="<?php echo $result_1['exp_occupation'];?>" /></td>
                                                  </tr>
												  
												  <tr> 
                                                    <td bgcolor="#FFF0F0"><strong>Other Expectations</strong></td>
                                                    <td><input type="text" name="other_expectations" id="other_expectations" value="<?php echo $result_1['other_expectations'];?>" /></td>
                                                  </tr>
                </table>

			  </td>
           </tr>
                                            <tr> 
                                              <td valign="top">&nbsp;</td>
                                              <td valign="top">&nbsp;</td>
                                            </tr>
                                            <tr> 
                                              <td valign="top"><div align="center"></div></td>

                                              <td valign="top"><div align="center">
											  <input type="submit" name="Update" id="Update" value="Update">
											<!--  <a href="bridegroom.php?id=<?php //echo $result_1['bridegroom_id'];?>"><input type="submit" name="save" value="SAVE" align="center" /></a>-->
											  </div></td>
											  
                                            </tr>
                              </table>
</td>
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
</form>