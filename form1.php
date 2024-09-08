<?php
session_start();
include("connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<?php
if(isset($_POST['submit'])!="")
{	
	if(isset($_POST['firstname'])=="")
	{
	$error_fname = "Please Enter Your First Name";
	$error=1;
	}
	
	if(isset($_POST['lastname'])=="")
	{
	$error_lname = "Please Enter Your Last Name";
	$error=1;
	}
	
	
	if(isset($_POST['occupation'])=="")
	{
	$error_occupation = "Please Enter Your Occupation";
	$error=1;
	}
	
	if(isset($_POST['height'])=="")
	{
	$error_height = "Please Enter Your Height";
	$error=1;
	}
	
	if(isset($_POST['education'])=="")
	{
	$error_edu = "Please Enter Your Education";
	$error=1;
	}
	
	$dob = $_POST['day']."/".$_POST['mon']."/".$_POST['yy'];
	
	if($error==0)
	{
	 
	if(isset($_FILES["upload_image"]["tmp_name"]) != "") 
	{ 
	$filename1 = time()."_" . $_FILES["upload_image"]["name"]; copy($_FILES["upload_image"]["tmp_name"], "/upload/" . $filename1); 
	} 

	
	
	
	$sql = "INSERT INTO bride(firstname,lastname,dateofbirth,address,telephone,zip,district,state,email,gotra_devak,ras,nadi,nakshatra,occupation,physical_disabilities,if_specify,father,father_name,mother,mother_name,parent_occupation,native_place,family_property,personality,birth_place,birth_time,spectacles,mangal,permanent_address,hobbies,gender,height,caste,gan,charan,education,income,complexion,contact_lenses,blood_group,marital_status,no_of_brothers,brother_details,no_of_sisters,sister_details,mama_name,names_of_relatives,exp_caste,exp_max_height,exp_education,exp_handicapped_accepted,exp_horoscope_needed,upload_image,exp_max_age_difference,exp_marital_status,exp_income,exp_mangal_accepted,exp_preferred_cities_district,session)
	VALUES(
	'".$_POST['firstname']."',
	'".$_POST['lastname']."',
	'".$dob."',
	'".$_POST['address']."',
	'".$_POST['telephone']."',
	'".$_POST['zip']."',
	'".$_POST['district']."',
	'".$_POST['state']."',
	'".$_POST['email']."',
	'".$_POST['gotra_devak']."',
	'".$_POST['ras']."',
	'".$_POST['nadi']."',
	'".$_POST['nakshatra']."',
	'".$_POST['occupation']."',
	'".$_POST['physical_disabilities']."',
	'".$_POST['if_specify']."',
	'".$_POST['father']."',
	'".$_POST['father_name']."',
	'".$_POST['mother']."',
	'".$_POST['mother_name']."',
	'".$_POST['parent_occupation']."',
	'".$_POST['native_place']."',
	'".$_POST['family_property']."',
	'".$_POST['personality']."',
	'".$_POST['birth_place']."',
	'".$_POST['birth_time']."',
	'".$_POST['spectacles']."',
	'".$_POST['mangal']."',
	'".$_POST['permanent_address']."',
	'".$_POST['hobbies']."',
	'".$_POST['gender']."',
	'".$_POST['height']."',
	'".$_POST['caste']."',
	'".$_POST['gan']."',
	'".$_POST['charan']."',
	'".$_POST['education']."',
	'".$_POST['income']."',
	'".$_POST['complexion']."',
	'".$_POST['contact_lenses']."',
	'".$_POST['blood_group']."',
	'".$_POST['marital_status']."',
	'".$_POST['no_of_brothers']."',
	'".$_POST['brother_details']."',
	'".$_POST['no_of_sisters']."',
	'".$_POST['sister_details']."',
	'".$_POST['mama_name']."',
	'".$_POST['names_of_relatives']."',
	'".$_POST['exp_caste']."',
	'".$_POST['exp_max_height']."',
	'".$_POST['exp_education']."',
	'".$_POST['exp_handicapped_accepted']."',
	'".$_POST['exp_horoscope_needed']."',
	'".$filename1."',
	'".$_POST['exp_max_age_difference']."',
	'".$_POST['exp_marital_status']."',
	'".$_POST['exp_income']."',
	'".$_POST['exp_mangal_accepted']."',
	'".$_POST['exp_preferred_cities_district']."',
	'".session_id()."'
	)";
	
	$sql_1 = mysqli_query($con,$sql);
	$id =mysqli_insert_id();
	if(!$sql_1)
	{
	die("error in inserting query:".mysqli_error());
	}
	else
	{
	echo"Record Inserted Successfully";
	}
	
	
	
	
	
	}



}


?>

<body>
<form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">

<table width="100%" border="0" cellspacing="2" cellpadding="4" class="border">
              <tr> 
                <td width="40%" bgcolor="d6f6fa"><strong>First Name *</strong></td>

                <td width="60%"><input name="firstname" type="text" id="firstname" value="<?php echo $_POST['firstname'];?>" size="20"><font color="#FF0000" size="-1"><?php echo $error_fname;?></font></td>
              </tr>
              <tr> 
                <td width="40%" bgcolor="d6f6fa"><strong>Last Name *</strong></td>
                <td><input name="lastname" type="text" id="lastname" value="<?php echo $_POST['lastname'];?>"  size="20"><font color="#FF0000" size="-1"><?php echo $error_lname;?></font></td>
              </tr>
              <tr> 
                <td><strong>Date of Birth *</strong></td>
                <td> <select  name="day" id="day">

                    <option selected value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>

                    <option value="07">07</option>
                    <option value="08">08</option>

                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>

                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>

                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>

                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>

                    <option value="31">31</option>
                  </select>
                  <select  name="mon"  id="mon">
                    <option selected value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                  </select>
                  <select  name="yy"  id="yy">
					<option selected value="1950">1950</option>
                    <option value="1951">1951</option>
                    <option value="1952">1952</option>

                    <option value="1953">1953</option>
                    <option value="1954">1954</option>
                    <option value="1955">1955</option>
                    <option value="1956">1956</option>
                    <option value="1957">1957</option>
                    <option value="1958">1958</option>

                    <option value="1959">1959</option>
                    <option value="1960">1960</option>
                    <option value="1961">1961</option>
                    <option value="1962">1962</option>
                    <option value="1963">1963</option>
                    <option value="1964">1964</option>

                    <option value="1965">1965</option>
                    <option value="1966">1966</option>
                    <option value="1967">1967</option>
                    <option value="1968">1968</option>
                    <option value="1969">1969</option>
                    <option value="1970">1970</option>

                    <option value="1971">1971</option>
                    <option value="1972">1972</option>
                    <option value="1973">1973</option>
                    <option value="1974">1974</option>
                    <option value="1975">1975</option>
                    <option value="1976">1976</option>

                    <option value="1977">1977</option>
                    <option value="1978">1978</option>
                    <option value="1979">1979</option>
                    <option value="1980">1980</option>
                    <option value="1981">1981</option>
                    <option value="1982">1982</option>

                    <option value="1983">1983</option>
                    <option value="1984">1984</option>
                    <option value="1985">1985</option>
                    <option value="1986">1986</option>
                    <option value="1987">1987</option>
                    <option value="1988">1988</option>

                    <option value="1989">1989</option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>

                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>

                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                  </select> </td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Address</strong></td>
                <td><textarea  name="address" cols="22"><?php echo $_POST['address'];?></textarea></td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Telephone </strong>(e.g. 111-123456)</td>
                <td><input name="telephone" type="text" id="telephone" value="<?php echo $_POST['telephone'];?>" size="20"></td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Zip</strong></td>
                <td><input name="zip" type="text" value="<?php echo $_POST['zip'];?>" size="20"></td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>District</strong></td>
                <td><input name="district" type="text"  id="district" value="<?php echo $_POST['district'];?>"  size="20"></td>
              </tr>

              <tr> 
                <td bgcolor="#FFF0F0"><strong>State</strong></td>
                <td> <input name="state" type="text" value="<?php echo $_POST['state'];?>"  size="20">                </td>
              </tr>
              
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Email Address</strong></td>
                <td><input name="email" type="text" value="<?php echo $_POST['email'];?>"   size="20">                </td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Gotra &amp; Devak</strong></td>
                <td><input name="gotra_devak" type="text" id="gotra_devak" value="<?php echo $_POST['gotra_devak'];?>"  size="20">                </td>
              </tr>
              <tr>
                <td bgcolor="#FFF0F0"><strong>Ras</strong></td>

                <td><select name="ras">
                  <option value="">--Select--</option>
                  <option value="Mesh">Mesh</option>
                  <option value="Vrushabh">Vrushabh</option>
                  <option value="Mithun">Mithun</option>
                  <option value="Kark">Kark</option>

                  <option value="Sinha">Sinha</option>
                  <option value="Kanya">Kanya</option>
                  <option value="Tula">Tula</option>
                  <option value="Vrushchik">Vrushchik</option>
                  <option value="Dhanu">Dhanu</option>
                  <option value="Makar">Makar</option>

                  <option value="Kumbha">Kumbha</option>
                  <option value="Meen">Meen</option>
                </select></td>
              </tr>
              <tr>
                <td bgcolor="#FFF0F0"><strong>Nadi</strong></td>
                <td><select name="nadi" id="nadi">

                  <option value="">--Select--</option>
                  <option value="Adya">Adya</option>
                  <option value="Madhya">Madhya</option>
                  <option value="Antya">Antya</option>
                </select></td>
              </tr>
              <tr>

                <td bgcolor="#FFF0F0"><strong>Nakshatra</strong></td>
                <td><input type="text" name="nakshatra" value="<?php echo $_POST['nakshatra'];?>"  /></td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Occupation *</strong></td>
                <td><input name="occupation" type="text" value="<?php echo $_POST['occupation'];?>"   size="20"><font color="#FF0000" size="-1"><?php echo $error_occupation;?></font></td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Physical Disabilities</strong></td>

                <td><input type="radio" border="0" name="physical_disabilities" style="border:0px" value="Yes">
                  Yes 
                  <input type="radio" border="0" name="physical_disabilities" style="border:0px" value="No">
                  No </td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>If Yes specify</strong></td>
                <td><textarea name="if_specify" cols="25"  id="if_specify"><?php echo $_POST['if_specify'];?></textarea></td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Father</strong></td>
                <td><input type="radio" border="0" name="father" style="border:0px" value="Yes">
                  Yes 
                  <input type="radio" border="0" name="father" style="border:0px" value="No">
                  No</td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Father's Name</strong></td>

                <td><input name="father_name" type="text"  id="father_name" size="20"></td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Mother</strong></td>
                <td><input type="radio" border="0" name="mother" style="border:0px" value="Yes">
                  Yes 
                  <input type="radio" border="0" name="mother" style="border:0px" value="No">
                  No</td>
              </tr>

              <tr> 
                <td bgcolor="#FFF0F0"><strong>Mother's Name</strong></td>
                <td><input name="mother_name" type="text"  id="mother_name" value="<?php echo $_POST['mother_name'];?>" size="20"></td>
              </tr>
              <tr>
                <td bgcolor="#FFF0F0"><strong>Parent's Occupation</strong></td>
                <td><input name="parent_occupation" type="text" id="parent_occupation" value="<?php echo $_POST['parent_occupation'];?>"  size="20"></td>
              </tr>

              <tr> 
                <td bgcolor="#FFF0F0"><strong>Native Place</strong></td>
                <td><input name="native_place" type="text"  id="native_place" value="<?php echo $_POST['native_place'];?>" size="20"></td>
              </tr>
			  <tr> 
                <td valign="top" bgcolor="#FFF0F0"><strong>Family Property</strong></td>
                <td><textarea name="family_property" cols="22"  id="family_property"><?php echo $_POST['family_property'];?></textarea></td>
              </tr>	
</table>

		   </td>
           <td valign="top">
		      <table width="100%" border="0" cellspacing="2" cellpadding="4" class="border">
              <tr> 
                <td width="40%" bgcolor="#FFF0F0"><strong>Personality</strong></td>
                <td width="60%"><input name="personality" type="text" value="<?php echo $_POST['personality'];?>" size="20"></td>
              </tr>
			  <tr> 
                <td width="40%" bgcolor="#FFF0F0"><strong>Birth Place</strong></td>

                <td><input name="birth_place" type="text" value="<?php echo $_POST['birth_place'];?>" id="birth_place" size="20"></td>
              </tr>
			  <tr> 
                <td width="40%" bgcolor="#FFF0F0"><strong>Birth Time</strong></td>
                <td><input name="birth_time" type="text" value="<?php echo $_POST['birth_time'];?>"  id="birth_time" size="20"></td>
              </tr>
              <tr> 
                <td width="40%" height="31" bgcolor="#FFF0F0"><strong>Spectacles</strong></td>
                <td><input type="radio" border="0" name="spectacles"  style="border:0px" value="Yes">

                  Yes 
                  <input type="radio" border="0" name="spectacles" style="border:0px" value="No">
                  No</td>
              </tr>
              <tr> 
                <td height="32" bgcolor="#FFF0F0"><strong>Mangal</strong></td>
                <td><input type="radio" border="0" class="TEXTFIELD" name="mangal" style="border:0px" value="Yes">
                  Yes 
                  <input type="radio" border="0" class="TEXTFIELD" name="mangal" style="border:0px" value="No">

                  No</td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Permanent Address</strong></td>
                <td><textarea name="permanent_address" cols="22"  id="permanent_address"><?php echo $_POST['permanent_address'];?></textarea></td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Hobbies</strong></td>

                <td><input name="hobbies"  type="text" value="<?php echo $_POST['hobbies'];?>" size="20"></td>
              </tr>
              <tr> 
                <td width="40%" bgcolor="#FFF0F0"><strong>Gender</strong></td>
                <td><select  size="1" name="gender">
                    <option selected value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select></td>

              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Height </strong>(Ft.inch)<strong>*</strong></td>
                <td><input name="height" type="text" id="height" value="<?php echo $_POST['height'];?>" size="20"><font color="#FF0000" size="-1"><?php echo $error_height;?></font></td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><p><strong>Caste</strong></p></td>
                <td><input name="caste" type="text"  id="caste" value="<?php echo $_POST['caste'];?>" size="20"></td>

              </tr>
              <tr>
                <td bgcolor="#FFF0F0"><strong>Gan</strong></td>
                <td><select name="gan" id="gan">
                  <option value="">--Select--</option>
                  <option value="Dev">Dev</option>
                  <option value="Manushya">Manushya</option>

                  <option value="Rakshas">Rakshas</option>
                </select></td>
              </tr>
              <tr>
                <td bgcolor="#FFF0F0"><strong>Charan</strong></td>
                <td><select name="charan" id="charan">
                  <option value="">--Select--</option>

                  <option value="One">One</option>
                  <option value="Two">Two</option>
                  <option value="Three">Three</option>
                  <option value="Four">Four</option>
                </select></td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Education *</strong></td>

                <td><input name="education" type="text"  id="education" value="<?php echo $_POST['education'];?>" size="20"><font color="#FF0000" size="-1"><?php echo $error_edu;?></font></td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Income</strong></td>
                <td><input name="income"  maxlength="8" type="text" value="<?php echo $_POST['income'];?>" size="20"></td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Complexion</strong></td>
                <td><input name="complexion" type="text"  id="complexion" value="<?php echo $_POST['complexion'];?>" size="20"></td>

              </tr>
              <tr> 
                <td height="31" bgcolor="#FFF0F0"><strong>Contact Lenses</strong></td>
                <td><input type="radio" border="0" class="TEXTFIELD" name="contact_lenses" style="border:0px" value="Yes">
                  Yes 
                  <input type="radio" border="0" class="TEXTFIELD" name="contact_lenses" style="border:0px" value="No">
                  No</td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Blood Group</strong></td>

                <td><select name="blood_group" size="1" id="blood_group">
                    <option value="Unspecified" selected>Unspecified</option>
                    <option value="A +ve">A +ve</option>
                    <option value="A -ve">A -ve</option>
                    <option value="B +ve">B +ve</option>
                    <option value="B -ve">B -ve</option>

                    <option value="AB +ve">AB +ve</option>
                    <option value="AB -ve">AB -ve</option>
                    <option value="O +ve">O +ve</option>
                    <option value="O -ve">O -ve</option>
                  </select></td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Marital Status</strong></td>

                <td><select name="marital_status" size="1" id="marital_status">
                    <option value="Unmarried" selected>Unmarried</option>
                    <option value="Divorcee">Divorcee</option>
                    <option value="Widow">Widow</option>
                    <option value="Widower">Widower</option>
                  </select></td>
              </tr>

              <tr> 
                <td height="39" bgcolor="#FFF0F0"><strong>No. Of Brothers</strong></td>
                <td><input name="no_of_brothers"  type="text"id="no_of_brothers" value="<?php echo $_POST['no_of_brothers'];?>" size="20"></td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Brother Details</strong></td>
                <td><input name="brother_details" type="text"  id="brother_details" value="<?php echo $_POST['brother_details'];?>" size="20"></td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>No. Of Sisters</strong></td>

                <td><input name="no_of_sisters" type="text"  id="no_of_sisters" value="<?php echo $_POST['no_of_sisters'];?>" size="20"></td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Sister Dtls</strong></td>
                <td><input name="sister_details" type="text"  id="sister_details" value="<?php echo $_POST['sister_details'];?>" size="20"></td>
              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Mama's Name</strong></td>
                <td><input name="mama_name" type="text"  id="mama_name" value="<?php echo $_POST['mama_name'];?>" size="20"></td>

              </tr>
              <tr> 
                <td bgcolor="#FFF0F0"><strong>Names of Relatives</strong></td>
                <td><input name="names_of_relatives" type="text"  id="names_of_relatives" value="<?php echo $_POST['names_of_relatives'];?>" size="20"></td>
              </tr>
            </table>
		  </td>
        </tr>
      </table></td>

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
         <td class="HEADER"><strong><center>EXPECTATIONS</center></strong></td>
      </tr>
      <tr> 
         <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
           <tr> 
             <td width="50%" valign="top">
			   <table width="100%" border="0" cellspacing="2" cellpadding="4" class="border">
                 <tr> 
                    <td width="45%" bgcolor="#FFF0F0"><strong>Caste</strong></td>

                    <td><input name="exp_caste" type="text"  id="exp_caste" size="20"></td>
                 </tr>
                 <tr> 
                    <td bgcolor="#FFF0F0"><strong>Max Height Diff(Ft.inch)</strong></td>
                    <td><input name="exp_max_height" type="text"  id="exp_max_height" value="<?php echo $_POST['exp_max_height'];?>" size="20"></td>
                 </tr>
                  <tr> 
                                                    <td bgcolor="#FFF0F0"><strong>Education</strong></td>
                                                    <td><input name="exp_education" type="text" value="<?php echo $_POST['exp_education'];?>"  size="20"></td>

                 </tr>
                                                  <tr> 
                                                    <td bgcolor="#FFF0F0"><strong>Handicapped 
                                                      Accepted</strong></td>
                                                    <td><input type="radio" name="exp_education" value="Yes">
                                                      Yes 
                                                      <input type="radio" name="exp_education" value="No">
                                                      No</td>
                                                  </tr>
                                                  <tr> 
                                                    <td bgcolor="#FFF0F0"><strong>Horoscope 
                                                      Needed</strong></td>

                                                    <td><input type="radio" name="exp_horoscope_needed" value="Yes">
                                                      Yes 
                                                      <input type="radio" name="exp_horoscope_needed" value="No">
                                                      No</td>
                                                  </tr>
                                                <tr>
					<td bgcolor="#FFF0F0"><strong>Upload Image</strong></td>
		            <td>

					<input name="upload_image" type="file"  id="upload_image"  size="25"></td>
                                                </tr>	
               </table>
             </td>
                                              <td valign="top"><table width="100%" border="0" cellspacing="2" cellpadding="4" class="border">
                                                  <tr> 
                                                    <td width="45%" bgcolor="#FFF0F0"><strong>Max. 
                                                      Age Difference</strong></td>
                                                    <td><input name="exp_max_age_difference" type="text"  id="exp_max_age_difference" value="<?php echo $_POST['exp_max_age_difference'];?>" size="20"></td>
                                                  </tr>

                                                  <tr> 
                                                    <td bgcolor="#FFF0F0"><strong>Marital 
                                                      Status</strong></td>
                                                    <td><select name="exp_marital_status" size="1" id="exp_marital_status">
                                                        <option selected value= "Unmarried" >Unmarried</option>
                                                        <option value= "Divorcee" >Divorcee</option>
                                                        <option value= "Widow" >Widow</option>
                                                        <option value= "Widower" >Widower</option>

                                                      </select></td>
                                                  </tr>
                                                  <tr> 
                                                    <td bgcolor="#FFF0F0"><strong>Income</strong></td>
                                                    <td><input name="exp_income" type="text"  id="exp_income" value="<?php echo $_POST['exp_income'];?>" size="20" maxlength="8"></td>
                                                  </tr>
                                                  <tr> 
                                                    <td height="29" bgcolor="#FFF0F0"><strong>Mangal 
                                                      Accepted</strong></td>
                                                    <td><input type="radio" name="exp_mangal_accepted" value="Yes">

                                                      Yes 
                                                      <input type="radio" name="exp_mangal_accepted" value="No">
                                                      No</td>
                                                  </tr>
                                                  <tr> 
                                                    <td height="42" bgcolor="#FFF0F0"><strong>Preferred 
                                                      Cities/District</strong></td>
                                                    <td><input name="	exp_preferred_cities_district" type="text" class="TEXTFIELD" value="<?php echo $_POST['exp_preferred_cities_district'];?>" size="20"></td>
                                                  </tr>	
                </table>

			  </td>
           </tr>
                                            <tr> 
                                              <td valign="top">&nbsp;</td>
                                              <td valign="top">&nbsp;</td>
                                            </tr>
                                            <tr> 
                                              <td valign="top"><div align="center"> 
                                                  <input name="submit" type="submit" value="submit">
                                                </div></td>

                                              <td valign="top"><div align="center"> 
                                                  <input name="submit2" type="reset" class="BUTTONBACKGROUND" value="reset">
                                                </div></td>
                                            </tr>
                                          </table></td>
</tr>
                                      <tr> 
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr> 
                                        <td><div align="center">Please send this 
                                            form along with full payment.</div></td>

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
                              
                                <tr> 
                                  <td valign="bottom"><div align="center"> </div></td>
                                </tr>
                              </table>

</form>						  </td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height="1" bgcolor="#840000"></td>
                  </tr>
                  <tr>
                    <td height="1" bgcolor="F2D200"></td>

                  </tr>
  <tr>
                    <td height="29" bgcolor="#840000"><div align="center" class="BOTTOMTEXT">
<table width="100%"  border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td>All contents &amp;copy; copyright www.cromasolution.com. All rights reserved</td>
    <td>Developed By -CromaSolutions <a href="http://designerden.net/" target="_blank" title=" Web Design Dubai"><font color="#FFFFFF">Designerden.net</font></a> </td>

  </tr>
</table>

    </div></td>
</tr>              </table></td>
            </tr>
        </table></td>
      </tr>
    </table></td>

  </tr>
</table>


</body>
</html>
