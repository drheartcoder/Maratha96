<?php
ob_start();
session_start();
include("connect.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>.: Maratha 96 Kuli :.</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {font-size: 18px}
-->
</style>
</head>
<?php

if(isset($_POST['submit'])!="")
{	
	
	if(isset($_POST['firstname'])=="")
	{
	$error_fname = "Please Enter Your Name";
	$error=1;
	}
	
	if(isset($_POST['height'])=="")
	{
	$error_height = "Please Enter Your Height";
	$error=1;
	}
	
	if(isset($_POST['education_level'])=="")
	{
	$error_edu = "Please Enter Your Education Level";
	$error=1;
	}
	
	$dob = $_POST['day']."/".$_POST['mon']."/".$_POST['yy'];

	if($error==0)
	{
	 
	

	if(isset($_POST['gender'])=="Female")

{
	$sql1 = "select * from bride where 1 order by bride_id desc limit 0,1";
	
	$sql1list = mysqli_query($con,$sql1);
	
	$sql1result = mysqli_fetch_array($sql1list);
	
	
	
	
	$sql = "INSERT INTO bride(reg_date,register_id,package_id,firstname,dateofbirth,birth_place,birth_time,address,telephone,mobile,zip,district,state,email,gotra_devak,ras,nadi,gan,charan,nakshatra,education,education_level,education_field,working_with,working_as,annual_income,physical_disabilities,if_specify,f_prefix,father_name,m_prefix, mother_name,mother_occupation,father_occupation, native_place,family_property, personality,spectacles,mangal,permanent_address, hobbies,gender,height,caste, complexion,blood_group,marital_status,no_of_brothers,brother_details,no_of_sisters,sister_details,mama_name,names_of_relatives,exp_caste,exp_max_height,exp_education,exp_handicapped_accepted,exp_horoscope_needed,exp_max_age_difference,exp_marital_status,exp_income,exp_mangal_accepted,exp_preferred_cities_district,exp_occupation, other_expectations,session)
	VALUES(
	'".date('d/m/Y')."',
	'MKB".$sql1result["bride_id"]."',
	'".$_POST['package_id']."',
	'".$_POST['firstname']."',
	'".$dob."',
	'".$_POST['birth_place']."',
	'".$_POST['birth_time']."',
	'".$_POST['address']."',
	'".$_POST['telephone']."',
	'".$_POST['mobile']."',
	'".$_POST['zip']."',
	'".$_POST['district']."',
	'".$_POST['state']."',
	'".$_POST['email']."',
	'".$_POST['gotra_devak']."',
	'".$_POST['ras']."',
	'".$_POST['nadi']."',
	'".$_POST['gan']."',
	'".$_POST['charan']."',
	'".$_POST['nakshatra']."',
	'".$_POST['education']."',
	'".$_POST['education_level']."',
	'".$_POST['education_field']."',
	'".$_POST['working_with']."',
	'".$_POST['working_as']."',
	'".$_POST['annual_income']."',
	'".$_POST['physical_disabilities']."',
	'".$_POST['if_specify']."',
	'".$_POST['f_prefix']."',
	'".$_POST['father_name']."',
	'".$_POST['m_prefix']."',
	'".$_POST['mother_name']."',
	'".$_POST['mother_occupation']."',
	'".$_POST['father_occupation']."',
	'".$_POST['native_place']."',
	'".$_POST['family_property']."',
	'".$_POST['personality']."',
	'".$_POST['spectacles']."',
	'".$_POST['mangal']."',
	'".$_POST['permanent_address']."',
	'".$_POST['hobbies']."',
	'".$_POST['gender']."',
	'".$_POST['height']."',
	'".$_POST['caste']."',
	'".$_POST['complexion']."',
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
	'".$_POST['exp_max_age_difference']."',
	'".$_POST['exp_marital_status']."',
	'".$_POST['exp_income']."',
	'".$_POST['exp_mangal_accepted']."',
	'".$_POST['exp_preferred_cities_district']."',
	'".$_POST['exp_occupation']."',
	'".$_POST['other_expectations']."',
	'".session_id()."'
	)";
	
	$sql_1 = mysqli_query($con,$sql);
	$id =mysqli_insert_id();
	
	
	if(isset($_FILES["upload_image"]["tmp_name"]) != "")
	{
		
		$filename = $_FILES["upload_image"]["name"];
		move_uploaded_file($_FILES["upload_image"]["tmp_name"],$filename);
		$sqlu = "update bride set upload_image='" . $filename . "' where bride_id='" . $id . "'";
		
		$splist = mysqli_query($con,$sqlu);
	}
	
	if(!$sql_1)
	{
	die("error in inserting query:".mysqli_error());
	}
	else
	{
	header("location:register_thank.php");
	exit;
	}
	
}


else
{

$sql1 = "select * from bridegroom where 1 order by bridegroom_id desc limit 0,1";
	
	$sql1list = mysqli_query($con,$sql1);
	
	$sql1result = mysqli_fetch_array($sql1list);
	

$sql = "INSERT INTO bridegroom(reg_date,register_id,package_id,firstname,dateofbirth,birth_place,birth_time,address,telephone,mobile,zip,district,state,email,gotra_devak,ras,nadi,gan,charan,nakshatra,education,education_level,education_field,working_with,working_as,annual_income,physical_disabilities,if_specify,f_prefix,father_name,m_prefix, mother_name,mother_occupation,father_occupation, native_place,family_property, personality,spectacles,mangal,permanent_address, hobbies,gender,height,caste, complexion,blood_group,marital_status,no_of_brothers,brother_details,no_of_sisters,sister_details,mama_name,names_of_relatives,exp_caste,exp_max_height,exp_education,exp_handicapped_accepted,exp_horoscope_needed, exp_max_age_difference,exp_marital_status,exp_income,exp_mangal_accepted,exp_preferred_cities_district,exp_occupation,other_expectations,session)
	VALUES(
	'".date('d/m/Y')."',
	'MKG".$sql1result["bridegroom_id"]."',
	'".$_POST['package_id']."',
	'".$_POST['firstname']."',
	'".$dob."',
	'".$_POST['birth_place']."',
	'".$_POST['birth_time']."',
	'".$_POST['address']."',
	'".$_POST['telephone']."',
	'".$_POST['mobile']."',
	'".$_POST['zip']."',
	'".$_POST['district']."',
	'".$_POST['state']."',
	'".$_POST['email']."',
	'".$_POST['gotra_devak']."',
	'".$_POST['ras']."',
	'".$_POST['nadi']."',
	'".$_POST['gan']."',
	'".$_POST['charan']."',
	'".$_POST['nakshatra']."',
	'".$_POST['education']."',
	'".$_POST['education_level']."',
	'".$_POST['education_field']."',
	'".$_POST['working_with']."',
	'".$_POST['working_as']."',
	'".$_POST['annual_income']."',
	'".$_POST['physical_disabilities']."',
	'".$_POST['if_specify']."',
	'".$_POST['f_prefix']."',
	'".$_POST['father_name']."',
	'".$_POST['m_prefix']."',
	'".$_POST['mother_name']."',
	'".$_POST['mother_occupation']."',
	'".$_POST['father_occupation']."',
	'".$_POST['native_place']."',
	'".$_POST['family_property']."',
	'".$_POST['personality']."',
	'".$_POST['spectacles']."',
	'".$_POST['mangal']."',
	'".$_POST['permanent_address']."',
	'".$_POST['hobbies']."',
	'".$_POST['gender']."',
	'".$_POST['height']."',
	'".$_POST['caste']."',
	'".$_POST['complexion']."',
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
	'".$_POST['exp_max_age_difference']."',
	'".$_POST['exp_marital_status']."',
	'".$_POST['exp_income']."',
	'".$_POST['exp_mangal_accepted']."',
	'".$_POST['exp_preferred_cities_district']."',
	'".$_POST['exp_occupation']."',
	'".$_POST['other_expectations']."',
	'".session_id()."'
	)";
	
	$sql_1 = mysqli_query($con,$sql);
	$id =mysqli_insert_id();
	
	
	
	
	if(isset($_FILES["upload_image"]["tmp_name"]) != "")
	 
	{
		
		$filename = $_FILES["upload_image"]["name"];
		move_uploaded_file($_FILES["upload_image"]["tmp_name"],$filename);
		$sqlu = "update bridegroom set upload_image='" . $filename . "' where bridegroom_id='" . $id . "'";
		
		$splist = mysqli_query($con,$sqlu);
	}
	
	if(!$sql_1)
	{
	die("error in inserting query:".mysqli_error());
	}
	else
	{
	header("location:register_thank.php");
	exit;
			}
	
}

	
	
	
	
	
	
	}



}


?>
<body>
<p>&nbsp;</p>
<form name="form1" method="post" action="" enctype="multipart/form-data">
  <!--header-->
  <?php include_once('header.php'); ?>
  <!--contain-->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <div id="cont">
	<div id="cont-wrap">
	  <div id="lft">
		<div id="bx1">
		  <div class="topic style1"><strong>Quick Links</strong></div>
		  <ul id="bx1">
			<li><a href="bridegroom.php" title="à¤µà¤°">Grooms</a></li>
			<li><a href="bride.php" title="à¤µà¤§à¥">Brides</a></li>
			<li><a href="bridegroom.php" title="à¤˜à¤Ÿà¤¸à¥à¤«à¥‹à¤Ÿà¤¿à¤¤">Divorcee</a></li>
			<li><a href="window.php" title="à¤µà¤¿à¤§à¥‚à¤° / à¤µà¤¿à¤§à¤µà¤¾">Widow / Widower</a></li>
			<li><a href="response.php">Response</a></li>
		  </ul>
		  <div class="style1 topic"><strong>Search</strong></div>
		  <ul id="bx1">
			<li><a href="search.php">Advance Search</a></li>
			<li><a href="quick_search.php">Quick Search</a></li>
			<li><a href="search_region.php">Search by Region</a></li>
		  </ul>
		</div>
		<div id="bx2"><a href="register.php"><img src="images/ad1.jpg" alt="ad" width="212" height="238" border="0" /></a></div>
	  </div>
	  <div id="rht">
		<div id="mid">
		  <div id="lft">
			<div class="tp"><br />
			  Register <br />
			  <br />
			</div>
			<div class="in" style="width:700px;">
			  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="30" align="left" valign="top" class="topic01">* Personal Info:</td>
                </tr>
                <tr>
                  <td><table width="100%" border="0" cellspacing="2" cellpadding="4" class="tblborder">
				<tr>
				  <td width="40%"><strong> Name <font color="#FF0000">*</font></strong></td>
				  <td width="60%"><input name="firstname" type="text" id="firstname" value="<?php echo $_POST['firstname'];?>" size="20" />
					<font color="#FF0000" size="-1"><br />
					<?php echo $error_fname;?></font></td>
				</tr>
				<tr>
				  <td><strong>Date of Birth <font color="#FF0000">*</font></strong></td>
				  <td><select  name="day" id="day">
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
					</select>				  </td>
				</tr>
                <td><strong>Birth Time</strong></td>
				  <td><select  name="hours" id="hours">
					  <option selected value="Hours">Hours</option>
					  <option value="01">01</option>
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
					<select  name="hours" id="hours">
					  <option selected value="min">Min</option>
					  <option value="01">01</option>
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
					  <option value="32">32</option>
					  <option value="33">33</option>
					  <option value="34">34</option>
					  <option value="35">35</option>
					  <option value="36">36</option>
					  <option value="37">37</option>
					  <option value="38">38</option>
					  <option value="39">39</option>
					  <option value="40">40</option>
					  <option value="41">41</option>
					  <option value="42">42</option>
					  <option value="43">43</option>
					  <option value="44">44</option>
					  <option value="45">45</option>
					  <option value="46">46</option>
					  <option value="47">47</option>
					  <option value="48">48</option>
					  <option value="49">49</option>
					  <option value="50">50</option>
					  <option value="51">51</option>
					  <option value="52">52</option>
					  <option value="53">53</option>
					  <option value="54">54</option>
					  <option value="55">55</option>
					  <option value="56">56</option>
					  <option value="57">57</option>
					  <option value="58">58</option>
					  <option value="59">59</option>
					</select>
					<select  name="ampm" id="ampm">
					  <option selected value="Hours">AM</option>
					  <option value="PM">PM</option>
					</select>				  </td>
				<tr>
				  <td><strong>Birth Place</strong></td>
				  <td><input name="birth_place" type="text" value="<?php echo $_POST['birth_place'];?>" id="birth_place" size="20" /></td>
				</tr>
                <tr>
					<td><strong>Blood Group</strong></td>
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
					<td width="40%"><strong>Gender</strong></td>
					<td><select  size="1" name="gender">
						<option selected value="Male">Male</option>
						<option value="Female">Female</option>
					  </select></td>
				  </tr>
                  <tr>
					<td><strong>Height </strong>(Ft.inch)</td>
					<td><select  size="1" name="height">
						<option selected value="Select">Select</option>
						<option value="4ft 5in - 134cm">4ft 5in - 134cm</option>
						<option value="4ft 6in - 137cm">4ft 6in - 137cm</option>
						<option value="4ft 7in - 139cm">4ft 7in - 139cm</option>
						<option value="4ft 8in - 142cm">4ft 8in - 142cm</option>
						<option value="4ft 9in - 144cm">4ft 9in - 144cm</option>
						<option value="4ft 10in - 147cm">4ft 10in - 147cm</option>
						<option value="4ft 11in - 149cm">4ft 11in - 149cm</option>
						<option value="5ft - 152cm">5ft - 152cm</option>
						<option value="5ft 1in - 154cm">5ft 1in - 154cm</option>
						<option value="5ft 2in - 157cm">5ft 2in - 157cm</option>
						<option value="5ft 3in - 160cm">5ft 3in - 160cm</option>
						<option value="5ft 4in - 162cm">5ft 4in - 162cm</option>
						<option value="5ft 5in - 165cm">5ft 5in - 165cm</option>
						<option value="5ft 6in - 167cm">5ft 6in - 167cm</option>
						<option value="5ft 7in - 170cm">5ft 7in - 170cm</option>
						<option value="5ft 8in - 172cm">5ft 8in - 172cm</option>
						<option value="5ft 9in - 175cm">5ft 9in - 175cm</option>
						<option value="5ft 10in - 177cm">5ft 10in - 177cm</option>
						<option value="5ft 11in - 180cm">5ft 11in - 180cm</option>
						<option value="6ft - 182cm">6ft - 182cm</option>
						<option value="6ft 1in - 185cm">6ft 1in - 185cm</option>
						<option value="6ft 2in - 187cm">6ft 2in - 187cm</option>
						<option value="6ft 3in - 190cm">6ft 3in - 190cm</option>
						<option value="6ft 4in - 193cm">6ft 4in - 193cm</option>
						<option value="6ft 5in - 195cm">6ft 5in - 195cm</option>
						<option value="6ft 6in - 198cm">6ft 6in - 198cm</option>
						<option value="6ft 7in - 200cm">6ft 7in - 200cm</option>
						<option value="6ft 8in - 203cm">6ft 8in - 203cm</option>
						<option value="6ft 9in - 205cm">6ft 9in - 205cm</option>
						<option value="6ft 10in - 208cm">6ft 10in - 208cm</option>
						<option value="6ft 11in - 210cm">6ft 11in - 210cm</option>
						<option value="7ft - 213cm">7ft - 213cm</option>
					  </select>					</td>
				  </tr>
                  <tr>
					<td><strong>Complexion</strong></td>
					<td><input type="radio" border="0" name="complexion" style="border:0px" value="veryfair" />
					  Very Fair
					  <input type="radio" border="0" name="complexion" style="border:0px" value="fair" />
					  Fair
					  <input type="radio" border="0" name="complexion" style="border:0px" value="wheatish" />
					  Wheatish
					  <input type="radio" border="0" name="complexion" style="border:0px" value="dark" />
					  Dark </td>
				  </tr>
                  <tr>
					<td width="40%"><strong>Personality</strong></td>
			  <td width="60%">
						<input type="radio" border="0" name="personality" style="border:0px" value="slim" />
					  Slim
					  <input type="radio" border="0" name="personality" style="border:0px" value="athletic" />
					  Athletic
					  <input type="radio" border="0" name="personality" style="border:0px" value="average" />
					  Average
					  <input type="radio" border="0" name="personality" style="border:0px" value="heavy" />
					  Heavy </td>
				  </tr>
                  <tr>
					<td width="40%" height="31"><strong>Spectacles</strong>/<strong>Lenses</strong></td>
					<td><input type="radio" border="0" name="spectacles"  style="border:0px" value="Yes" />
					  Yes
					  <input type="radio" border="0" name="spectacles" style="border:0px" value="No" />
					  No</td>
				  </tr>
                  <td><strong>Physical Disabilities</strong></td>
				  <td><input type="radio" border="0" name="physical_disabilities" style="border:0px" value="Yes" onclick="if_specify.disabled=false" />
					Yes
					<input type="radio" border="0" name="physical_disabilities" style="border:0px" value="No" onclick="if_specify.disabled=true" />
					No </td>
				</tr>
                <tr>
					<td><strong>Hobbies</strong></td>
					<td><input name="hobbies"  type="text" value="<?php echo $_POST['hobbies'];?>" size="20" /></td>
				  </tr>
                  <tr>
				  <td><strong>Native Place</strong></td>
				  <td><input name="native_place" type="text"  id="native_place" value="<?php echo $_POST['native_place'];?>" size="20" /></td>
				</tr>
                <tr>
					<td><strong>Marital Status</strong></td>
					<td><select name="marital_status" size="1" id="marital_status">
						<option value="Unmarried" selected>Unmarried</option>
						<option value="Divorcee">Divorcee</option>
						<option value="Widow">Widow</option>
						<option value="Widower">Widower</option>
					  </select></td>
				  </tr>
							  </table></td>
                </tr>
                <tr>
                  <td height="40" align="left" valign="middle" class="topic01">* Kundali Details:</td>
                </tr>
                <tr>
                  <td><table width="100%" border="0" cellspacing="2" cellpadding="4" class="tblborder">
				
				<tr>
				  <td width="40%"><strong>Ras</strong></td>
				  <td width="60%"><select name="ras">
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
				  <td><strong>Nadi</strong></td>
				  <td><select name="nadi" id="nadi">
					  <option value="">--Select--</option>
					  <option value="Adya">Adya</option>
					  <option value="Madhya">Madhya</option>
					  <option value="Antya">Antya</option>
					</select></td>
				</tr>
				<tr>
				  <td><strong>Gan</strong></td>
				  <td><select name="gan" id="gan">
					  <option value="">--Select--</option>
					  <option value="Dev">Dev</option>
					  <option value="Manushya">Manushya</option>
					  <option value="Rakshas">Rakshas</option>
					</select></td>
				</tr>
				<tr>
				  <td><strong>Charan</strong></td>
				  <td><select name="charan" id="charan">
					  <option value="">--Select--</option>
					  <option value="One">One</option>
					  <option value="Two">Two</option>
					  <option value="Three">Three</option>
					  <option value="Four">Four</option>
					</select></td>
				</tr>
				<tr>
				  <td><strong>Nakshatra</strong></td>
				  <td><input type="text" name="nakshatra" value="<?php echo $_POST['nakshatra'];?>"  /></td>
                  <tr><td><strong>Gotra &amp; Devak</strong></td>
				  <td><input name="gotra_devak" type="text" id="gotra_devak" value="<?php echo $_POST['gotra_devak'];?>"  size="20" />				  </td>
				</tr>
                <tr>
					<td height="32"><strong>Mangal</strong></td>
					<td><input type="radio" border="0" class="TEXTFIELD" name="mangal" style="border:0px" value="Yes" />
					  Yes
					  <input type="radio" border="0" class="TEXTFIELD" name="mangal" style="border:0px" value="No" />
					  No</td>
				  </tr>
			  </table></td>
                </tr>
                <tr>
                  <td height="40" align="left" valign="middle"><span class="topic01">* Education Details &amp; Occupation:</span></td>
                </tr>
                <tr>
                  <td><table width="100%" border="0" cellspacing="2" cellpadding="4" class="tblborder">
			<tr>
				  <td><strong>Age</strong></td>
				  <td><label>
					<input name="age" type="text" id="age" />
					</label></td>
				</tr>
				<tr>
				  <td width="40%"><strong>Education</strong></td>
				  <td width="60%"><input name="education" type="text"  id="education" value="<?php echo $_POST['education']; ?>" size="20" />
					<font color="#FF0000" size="-1"><br />
					<?php /*echo $error_edu;*/?></font></td>
				</tr>
				<tr>
				  <td><strong>Education Level</strong></td>
				  <td> 
				  	<select name="education_level" size="1" id="education_level">
					  <option value="select">Select</option>
					  <option value="bachelors">Bachelors</option>
					  <option value="masters">Masters</option>
					  <option value="doctorate">Doctorate</option>
					  <option value="diploma">Diploma</option>
					  <option value="undergraduate">Undergraduate</option>
					  <option value="associates_degree">Associates Degree</option>
					  <option value="honours_degree">Honours Degree</option>
					  <option value="trade_school">Trade School</option>
					  <option value="high_school">High School</option>
					  <option value="less_than_high_school">Less Than High School</option>
					</select>					</td>
				</tr>
				<tr>
				  <td><strong>Education Field</strong></td>
				  <td><select name="education_field" size="1" id="education_field">
					  <option value="select" selected>Select</option>
					  <option value="advertising_marketing">Advertising / Marketing</option>
					  <option value="administrative_services">Administrative Services</option>
					  <option value="architecture">Architecture</option>
					  <option value="armed_forces">Armed Forces</option>
					  <option value="arts">Arts</option>
					  <option value="commerce">Commerce</option>
					  <option value="computers_it">Computers / IT</option>
					  <option value="education">Education</option>
					  <option value="engineering_technology">Engineering / Technology</option>
					  <option value="fashion">Fashion</option>
					  <option value="finance">Finance</option>
					  <option value="fine_arts">Fine Arts</option>
					  <option value="home_science">Home Science</option>
					  <option value="law">Law</option>
					  <option value="management">Management</option>
					  <option value="medicine">Medicine</option>
					  <option value="nursing_health_sciences">Nursing / Health Sciences</option>
					  <option value="office_administration">Office Administration</option>
					  <option value="science">Science</option>
					  <option value="shipping">Shipping</option>
					  <option value="travel_tourism">Travel & Tourism</option>
					</select></td>
				</tr>
				<tr>
				  <td><strong>Job Details <font color="#FF0000">*</font></strong></td>
				  <td><input name="occupation" type="text" value="<?php /*echo $_POST['occupation'];*/?>"   size="20" />
					<font color="#FF0000" size="-1"><br />
					<?php /*echo $error_occupation;*/?></font></td>
				</tr>
				<tr>
				  <td><strong>Working With</strong></td>
				  <td><select name="working_with" size="1" id="working_with">
					  <option value="select" selected>Select</option>
					  <option value="private_company">Private Company</option>
					  <option value="government_public_sector">Government / Public Sector</option>
					  <option value="defense_civil_services">Defense / Civil Services</option>
					  <option value="business_self_employed">Business / Self Employed</option>
					  <option value="non_working">Non Working</option>
					</select></td>
				</tr>
				<tr>
				  <td><strong>Working As</strong></td>
				  <td><select name="working_as" size="1" id="working_as">  
				    
						<option value="" label="Select" selected="selected">Select</option> 
						<optgroup label="Accounting, Banking &amp; Finance">						</optgroup> 
						<option value="banking_professional" label="Banking Professional">Banking Professional</option> 
						<option value="chartered_accountant" label="Chartered Accountant">Chartered Accountant</option> 
						<option value="company_secretary" label="Company Secretary">Company Secretary</option> 
						<option value="finance_professional" label="Finance Professional">Finance Professional</option> 
						<option value="investment_professional" label="Investment Professional">Investment Professional</option> 
						<option value="accounting_professional_others" label="Accounting Professional (Others)">Accounting Professional (Others)</option> 
						<optgroup label="Administration &amp; HR">						</optgroup> 
						<option value="admin_professional" label="Admin Professional">Admin Professional</option> 
						<option value="human_resources_professional" label="Human Resources Professional">Human Resources Professional</option> 
						<optgroup label="Advertising, Media &amp; Entertainment">						</optgroup> 
						<option value="actor" label="Actor">Actor</option> 
						<option value="advertising_professional" label="Advertising Professional">Advertising Professional</option> 
						<option value="entertainment_professional" label="Entertainment Professional">Entertainment Professional</option> 
						<option value="event_manager" label="Event Manager">Event Manager</option> 
						<option value="journalist" label="Journalist">Journalist</option> 
						<option value="media_professional" label="Media Professional">Media Professional</option> 
						<option value="public_relations_professional" label="Public Relations Professional">Public Relations Professional</option> 
						<optgroup label="Agriculture">						</optgroup> 
						<option value="farming" label="Farming">Farming</option> 
						<option value="horticulturist" label="Horticulturist">Horticulturist</option> 
						<option value="agricultural_professional_others" label="Agricultural Professional (Others)">Agricultural Professional (Others)</option> 
						<optgroup label="Airline &amp; Aviation">						</optgroup> 
						<option value="air_hostess_flight_attendant" label="Air Hostess / Flight Attendant">Air Hostess / Flight Attendant</option> 
						<option value="pilot_copilot" label="Pilot / Co-Pilot">Pilot / Co-Pilot</option> 
						<option value="other_airline_professional" label="Other Airline Professional">Other Airline Professional</option> 
						<optgroup label="Architecture &amp; Design">						</optgroup> 
						<option value="architect" label="Architect">Architect</option> 
						<option value="interior_designer" label="Interior Designer">Interior Designer</option> 
						<option value="landscape_architect" label="Landscape Architect">Landscape Architect</option> 
						<optgroup label="Artists, Animators &amp; Web Designers">						</optgroup> 
						<option value="animator" label="Animator">Animator</option> 
						<option value="commercial_artist" label="Commercial Artist">Commercial Artist</option> 
						<option value="web_ux_designers" label="Web / UX Designers">Web / UX Designers</option> 
						<option value="artist_others" label="Artist (Others)">Artist (Others)</option> 
						<optgroup label="Beauty, Fashion &amp; Jewellery Designers">						</optgroup> 
						<option value="beautician" label="Beautician">Beautician</option> 
						<option value="fashion_designer" label="Fashion Designer">Fashion Designer</option> 
						<option value="hairstylist" label="Hairstylist">Hairstylist</option> 
						<option value="jewellery_designer" label="Jewellery Designer">Jewellery Designer</option> 
						<option value="designer_others" label="Designer (Others)">Designer (Others)</option> 
						<optgroup label="BPO, KPO, &amp; Customer Support">						</optgroup> 
						<option value="customer_support_bpo_kpo_professional" label="Customer Support / BPO / KPO Professional">Customer Support / BPO / KPO Professional</option> 
						<optgroup label="Civil Services / Law Enforcement">						</optgroup> 
						<option value="ias_irs_ies_ifs" label="IAS / IRS / IES / IFS">IAS / IRS / IES / IFS</option> 
						<option value="indian_police_services" label="Indian Police Services (IPS)">Indian Police Services (IPS)</option> 
						<option value="law_enforcement_employee_others" label="Law Enforcement Employee (Others)">Law Enforcement Employee (Others)</option> 
						<optgroup label="Defense">						</optgroup> 
						<option value="airforce" label="Airforce">Airforce</option> 
						<option value="army" label="Army">Army</option> 
						<option value="navy" label="Navy">Navy</option> 
						<option value="defense_services_others" label="Defense Services (Others)">Defense Services (Others)</option> 
						<optgroup label="Education &amp; Training">						</optgroup> 
						<option value="lecturer" label="Lecturer">Lecturer</option> 
						<option value="professor" label="Professor">Professor</option> 
						<option value="research_assistant" label="Research Assistant">Research Assistant</option> 

						<option value="research_scholar" label="Research Scholar">Research Scholar</option> 
						<option value="teacher" label="Teacher">Teacher</option> 
						<option value="training_professional_others" label="Training Professional (Others)">Training Professional (Others)</option> 
						<optgroup label="Engineering">						</optgroup> 
						<option value="civil_engineer" label="Civil Engineer">Civil Engineer</option> 
						<option value="electronics_telecom_engineer" label="Electronics / Telecom Engineer">Electronics / Telecom Engineer</option> 
						<option value="mechanical_production_engineer" label="Mechanical / Production Engineer">Mechanical / Production Engineer</option> 
						<option value="non_it_engineer_others" label="Non IT Engineer (Others)">Non IT Engineer (Others)</option> 
						<optgroup label="Hotel &amp; Hospitality">						</optgroup> 
						<option value="chef_sommelier_food_critic" label="Chef / Sommelier / Food Critic">Chef / Sommelier / Food Critic</option> 
						<option value="catering_professional" label="Catering Professional">Catering Professional</option> 
						<option value="hotel_hospitality_professional_others" label="Hotel &amp; Hospitality Professional (Others)">Hotel &amp; Hospitality Professional (Others)</option> 
						<optgroup label="IT &amp; Software Engineering">						</optgroup> 
						<option value="software_developer_programmer" label="Software Developer / Programmer">Software Developer / Programmer</option> 
						<option value="software_consultant" label="Software Consultant">Software Consultant</option> 
						<option value="hardware_networking_professional" label="Hardware &amp; Networking professional">Hardware &amp; Networking professional</option> 
						<option value="software_professional_others" label="Software Professional (Others)">Software Professional (Others)</option> 
						<optgroup label="Legal">						</optgroup> 
						<option value="lawyer" label="Lawyer">Lawyer</option> 
						<option value="legal_assistant" label="Legal Assistant">Legal Assistant</option> 
						<option value="legal_professional_others" label="Legal Professional (Others)">Legal Professional (Others)</option> 
						<optgroup label="Medical &amp; Healthcare">						</optgroup> 
						<option value="dentist" label="Dentist">Dentist</option> 
						<option value="doctor" label="Doctor">Doctor</option> 
						<option value="medical_transcriptionist" label="Medical Transcriptionist">Medical Transcriptionist</option> 
						<option value="nurse" label="Nurse">Nurse</option> 
						<option value="pharmacist" label="Pharmacist">Pharmacist</option> 
						<option value="physician_assistant" label="Physician Assistant">Physician Assistant</option> 
						<option value="physiotherapist_occupational_therapist" label="Physiotherapist / Occupational Therapist">Physiotherapist / Occupational Therapist</option> 
						<option value="psychologist" label="Psychologist">Psychologist</option> 
						<option value="surgeon" label="surgeon">Surgeon</option> 
						<option value="veterinary_doctor" label="Veterinary Doctor">Veterinary Doctor</option> 
						<option value="therapist_others" label="Therapist (Others)">Therapist (Others)</option> 
						<option value="medical_healthcare_professional_others" label="Medical / Healthcare Professional (Others)">Medical / Healthcare Professional (Others)</option> 
						<optgroup label="Merchant Navy">						</optgroup> 
						<option value="merchant_naval_officer" label="Merchant Naval Officer">Merchant Naval Officer</option> 
						<option value="mariner" label="Mariner">Mariner</option> 
						<optgroup label="Sales &amp; Marketing">						</optgroup> 
						<option value="marketing_professional" label="Marketing Professional">Marketing Professional</option> 
						<option value="sales_professional" label="Sales Professional">Sales Professional</option> 
						<optgroup label="Science">						</optgroup> 
						<option value="biologist_botanist" label="Biologist / Botanist">Biologist / Botanist</option> 
						<option value="physicist" label="Physicist">Physicist</option> 
						<option value="science_professional_others" label="Science Professional (Others)">Science Professional (Others)</option> 
						<optgroup label="Corporate Professionals">						</optgroup> 
						<option value="cxo_chairman_director_president" label="CxO / Chairman / Director / President">CxO / Chairman / Director / President</option> 
						<option value="vp_avp_gm_dgm" label="VP / AVP / GM / DGM">VP / AVP / GM / DGM</option> 
						<option value="Sr_manager" label="Sr. Manager / Manager">Sr. Manager / Manager</option> 
						<option value="consultant_supervisor_team_leads" label="Consultant / Supervisor / Team Leads">Consultant / Supervisor / Team Leads</option> 
						<option value="team_member_staff" label="Team Member / Staff">Team Member / Staff</option> 
						<optgroup label="Others">						</optgroup> 
						<option value="agent_broker_trader_contractor" label="Agent / Broker / Trader / Contractor">Agent / Broker / Trader / Contractor</option> 
						<option value="business_owner_entrepreneur" label="Business Owner / Entrepreneur">Business Owner / Entrepreneur</option> 
						<option value="politician" label="Politician">Politician</option> 
						<option value="social_worker_voluntee_ngo" label="Social Worker / Volunteer / NGO">Social Worker / Volunteer / NGO</option> 
						<option value="sportsman" label="Sportsman">Sportsman</option> 
						<option value="travel_transport_professional" label="Travel &amp; Transport Professional">Travel &amp; Transport Professional</option> 
						<option value="writer" label="Writer">Writer</option> 
						<optgroup label="Non Working">						</optgroup> 
						<option value="student" label="Student">Student</option> 
						<option value="retired" label="Retired">Retired</option> 
						<option value="not_working" label="Not working">Not working</option> 
				</select>				</td>
				</tr>
				<tr>
                  <td><strong>Annual Income</strong></td>
                  <td>
				  	<select name="annual_income" id="annual_income">
                    <option value="" label="Select" selected="selected">Select</option> 
					<option value="Not applicable" label="Not applicable">Not applicable</option> 
					<option value="Less than Rs 50 thousand" label="Less than Rs 50 thousand">Less than Rs 50 thousand</option> 
					<option value="Rs 50 thousand to 1 lakh" label="Rs 50 thousand to 1 lakh">Rs 50 thousand to 1 lakh</option> 
					<option value="Rs 1 lakh to 2 lakhs" label="Rs 1 lakh to 2 lakhs">Rs 1 lakh to 2 lakhs</option> 
					<option value="Rs 2 lakhs to 3 lakhs" label="Rs 2 lakhs to 3 lakhs">Rs 2 lakhs to 3 lakhs</option> 
					<option value="Rs 3 lakhs to 4 lakhs" label="Rs 3 lakhs to 4 lakhs">Rs 3 lakhs to 4 lakhs</option> 
					<option value="Rs 4 lakhs to 5 lakhs" label="Rs 4 lakhs to 5 lakhs">Rs 4 lakhs to 5 lakhs</option> 
					<option value="Rs 5 lakhs to 7 lakhs" label="Rs 5 lakhs to 7 lakhs">Rs 5 lakhs to 7 lakhs</option> 
					<option value="Rs 7 lakhs to 10 lakhs" label="Rs 7 lakhs to 10 lakhs">Rs 7 lakhs to 10 lakhs</option> 
					<option value="Rs 10 lakhs to 15 lakhs" label="Rs 10 lakhs to 15 lakhs">Rs 10 lakhs to 15 lakhs</option> 
					<option value="Rs 15 lakhs to 20 lakhs" label="Rs 15 lakhs to 20 lakhs">Rs 15 lakhs to 20 lakhs</option> 
					<option value="Rs 20 lakhs to 30 lakhs" label="Rs 20 lakhs to 30 lakhs">Rs 20 lakhs to 30 lakhs</option> 
					<option value="Rs 30 lakhs and above" label="Rs 30 lakhs and above">Rs 30 lakhs and above</option> 
					<option value="Dont want to specify" label="Dont want to specify">Dont want to specify</option>
                  </select></td>
                </tr>
				<tr>
				  <td><strong>Father</strong></td>
				  <td><input type="radio" border="0" name="father" style="border:0px" value="Yes" />
					Yes
					<input type="radio" border="0" name="father" style="border:0px" value="No" />
					No</td>
				</tr>
				<tr>
				  <td><strong>Mother</strong></td>
				  <td><input type="radio" border="0" name="mother" style="border:0px" value="Yes" />
					Yes
					<input type="radio" border="0" name="mother" style="border:0px" value="No" />
					No</td>
				</tr>
			  </table></td>
                </tr>
                <tr>
                  <td height="40" align="left" valign="middle"><span class="topic01">* Family Details:</span></td>
                </tr>
                <tr>
                  <td><table width="100%" border="0" cellspacing="2" cellpadding="4" class="tblborder">
				<tr>
				  <td><strong>Age</strong></td>
				  <td><label>
					<input name="age" type="text" id="age" />
					</label></td>
				</tr>
				<tr>
				  <td><strong>Job Details <font color="#FF0000">*</font></strong></td>
				  <td><input name="occupation" type="text" value="<?php /*echo $_POST['occupation'];*/?>"   size="20" />
					<font color="#FF0000" size="-1"><br />
					<?php /*echo $error_occupation;*/?></font></td>
				</tr>
				<tr>
				  <td><strong>Father</strong></td>
				  <td><input type="radio" border="0" name="father" style="border:0px" value="Yes" />
					Yes
					<input type="radio" border="0" name="father" style="border:0px" value="No" />
					No</td>
				</tr>
				<tr>
				  <td width="40%"><strong>Father's Name</strong></td>
				  <td width="60%"><select  size="1" name="f_prefix">
						<option selected value="mr">Mr.</option>
						<option value="f_late">Late</option>
					  </select>&nbsp;
					  <input name="father_name" type="text"  id="father_name" value="<?php echo $_POST['father_name'];?>" size="20" /></td>
				</tr>
				<tr>
				  <td><strong>Father's Occupation</strong></td>
				  <td><input name="father_occupation" type="text" id="father_occupation" value="<?php echo $_POST['father_occupation'];?>"  size="20" /></td>
				</tr>
				<tr>
				  <td><strong>Mother</strong></td>
				  <td><input type="radio" border="0" name="mother" style="border:0px" value="Yes" />
					Yes
					<input type="radio" border="0" name="mother" style="border:0px" value="No" />
					No</td>
				</tr>
				<tr>
				  <td><strong>Mother's Name</strong></td>
				  <td><select  size="1" name="m_prefix">
						<option selected value="mrs">Mrs.</option>
						<option value="m_late">Late</option>
					  </select>&nbsp;<input name="mother_name" type="text"  id="mother_name" value="<?php echo $_POST['mother_name'];?>" size="20" /></td>
				</tr>
				<tr>
				  <td><strong>Mother's Occupation</strong></td>
				  <td><input name="mother_occupation" type="text"  id="mother_occupation" value="<?php echo $_POST['mother_occupation'];?>" size="20" /></td>
				</tr>
                <tr>
					<td height="39"><strong>No. Of Brothers</strong></td>
					<td><input name="no_of_brothers"  type="text"id="no_of_brothers" value="<?php echo $_POST['no_of_brothers'];?>" size="20" /></td>
				  </tr>
				  <tr>
					<td><strong>Brother Details</strong></td>
					<td><input name="brother_details" type="text"  id="brother_details" value="<?php echo $_POST['brother_details'];?>" size="20" /></td>
				  </tr>
				  <tr>
					<td><strong>No. Of Sisters</strong></td>
					<td><input name="no_of_sisters" type="text"  id="no_of_sisters" value="<?php echo $_POST['no_of_sisters'];?>" size="20" /></td>
				  </tr>
				  <tr>
					<td><strong>Sisters Details</strong></td>
					<td><input name="sister_details" type="text"  id="sister_details" value="<?php echo $_POST['sister_details'];?>" size="20" /></td>
				  </tr>
                  <tr>
					<td><strong>Mama's Name</strong></td>
					<td><input name="mama_name" type="text"  id="mama_name" value="<?php echo $_POST['mama_name'];?>" size="20" /></td>
				  </tr>
				<tr>
				  <td valign="top"><strong>Family Property</strong></td>
				  <td><textarea name="family_property" cols="22"  id="family_property"><?php echo $_POST['family_property'];?></textarea></td>
				</tr>
                
				  
				  <tr>
					<td><strong>Names of Relatives</strong></td>
					<td><input name="names_of_relatives" type="text"  id="names_of_relatives" value="<?php echo $_POST['names_of_relatives'];?>" size="20" /></td>
				  </tr>
			  </table></td>
                </tr>
                <tr>
                  <td height="40" align="left" valign="middle"><span class="topic01">* Contact Details:</span></td>
                </tr>
                <tr>
                  <td><table width="100%" border="0" cellspacing="2" cellpadding="4" class="tblborder">
				<tr>
				  <td><strong>Age</strong></td>
				  <td><label>
					<input name="age" type="text" id="age" />
					</label></td>
				</tr>
				<tr>
				  <td width="40%"><strong> Current Address</strong></td>
				  <td width="60%"><textarea  name="address" cols="22"><?php echo $_POST['address'];?></textarea></td>
				</tr>
				<tr>
				  <td><strong>Telephone </strong>(e.g. 111-123456)</td>
				  <td><input name="telephone" type="text" id="telephone" value="<?php echo $_POST['telephone'];?>" size="20" /></td>
				</tr>
				<tr>
				  <td><strong>Mobile No.</strong>(e.g. 1234567890)</td>
				  <td><input name="mobile" type="text" id="mobile" value="<?php echo $_POST['mobile'];?>" size="20" /></td>
				</tr>
                <tr>
				  <td><strong>Email Address</strong></td>
				  <td><input name="email" type="text" value="<?php echo $_POST['email'];?>"   size="20" />				  </td>
				</tr>
				<tr>
				  <td><strong>Zip</strong></td>
				  <td><input name="zip" type="text" value="<?php echo $_POST['zip'];?>" size="20" /></td>
				</tr>
				<tr>
				  <td><strong>District</strong></td>
				  <td><input name="district" type="text"  id="district" value="<?php echo $_POST['district'];?>"  size="20" /></td>
				</tr>
				<tr>
				  <td><strong>State</strong></td>
				  <td><input name="state" type="text" value="<?php echo $_POST['state'];?>"  size="20" />				  </td>
				</tr>
				
                <tr>
					<td><strong>Permanent Address</strong></td>
					<td><textarea name="permanent_address" cols="22"  id="permanent_address"><?php echo $_POST['permanent_address'];?></textarea></td>
				  </tr>
			  </table></td>
                </tr>
                
                <tr>
                  <td height="40" align="left" valign="middle"><span class="topic01">* Expectations:</span></td>
                </tr>
              </table>
			  
			  <td valign="top">&nbsp;</td>
			  <tr>
				<td>&nbsp;</td>
			  </tr>
			  <tr>
				<td><img src="images/spacer.gif" width="1" height="1" /></td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
			  </tr>
			  <tr>
				<td align="left" class="HEADER"><strong><center>
				</center>
			    </strong></td>
			  </tr>
			  <tr>
				<td><table width="100%" border="0" cellspacing="5" cellpadding="0">
					<tr>
					  <td width="50%" valign="top"><table width="100%" height="249" border="0" cellpadding="4" cellspacing="2" class="tblborder">
						  <tr>
							<td width="45%" bgcolor="#FFF0F0"><strong>Caste</strong></td>
							<td><select name="caste" size="1" id="caste">
								<option value="Maratha96kuli" selected>Maratha96kuli</option>
								<option value="Deshmukh">Deshmukh</option>
							  </select></td>
						  </tr>
						  <tr>
							<td><strong>Max Height Diff(Ft.inch)</strong></td>
							<td><input name="exp_max_height" type="text"  id="exp_max_height" value="<?php echo $_POST['exp_max_height'];?>" size="20" /></td>
						  </tr>
                          <tr>
							<td width="45%" bgcolor="#FFF0F0"><strong>Max. 
							  Age Difference</strong></td>
							<td><input name="exp_max_age_difference" type="text"  id="exp_max_age_difference" value="<?php echo $_POST['exp_max_age_difference'];?>" size="20" /></td>
						  </tr>
						  <tr>
							<td><strong>Education</strong></td>
							<td><input name="exp_education" type="text" value="<?php echo $_POST['exp_education'];?>"  size="20" /></td>
						  </tr>
                          <tr>
						  <td><strong>Occupation</strong></td>
						  <td><select name="exp_occupation" size="1" id="exp_occupation">
					  <option value="select" selected>Select</option>
					  <option value="private_company">Private Company</option>
					  <option value="government_public_sector">Government / Public Sector</option>
					  <option value="defense_civil_services">Defense / Civil Services</option>
					  <option value="business_self_employed">Business / Self Employed</option>
					  <option value="non_working">Non Working</option>
					</select></td>
						  </tr>
                          <tr>
							<td><strong>Income</strong></td>
							<td><input name="exp_income" type="text"  id="exp_income" value="<?php echo $_POST['exp_income'];?>" size="20" maxlength="8" /></td>
						  </tr>
						  <tr>
						  
						  
						  <tr>
							<td height="59"><strong>Upload Photo</strong></td>
							<td><input name="upload_image" type="file"  id="upload_image"  size="20" /></td>
						  </tr>
						</table></td>
					  <td valign="top">
					  <table width="100%" height="246" border="0" cellpadding="4" cellspacing="2" class="tblborder">
					 <!-- <table width="100%" border="0" cellspacing="2" cellpadding="6" class="tblborder">-->
						  
						  <tr>
							<td><strong>Marital 
							  Status</strong></td>
							<td><select name="exp_marital_status" size="1" id="exp_marital_status">
								<option selected value= "Unmarried" >Unmarried</option>
								<option value= "Divorcee" >Divorcee</option>
								<option value= "Widow" >Widow</option>
								<option value= "Widower" >Widower</option>
							  </select></td>
						  </tr>
						  
                          <tr>
							<td><strong>Handicapped 
							  Accepted</strong></td>
							<td><input type="radio" name="exp_education" value="Yes" />
							  Yes
							  <input type="radio" name="exp_education" value="No" />
							  No</td>
						  </tr>
                          <tr>
							<td><strong>Horoscope 
							  Needed</strong></td>
							<td><input type="radio" name="exp_horoscope_needed" value="Yes" />
							  Yes
							  <input type="radio" name="exp_horoscope_needed" value="No" />
							  No</td>
						  </tr>
						  <tr>
							<td height="29"><strong>Mangal 
							  Accepted</strong></td>
							<td><input type="radio" name="exp_mangal_accepted" value="Yes" />
							  Yes
							  <input type="radio" name="exp_mangal_accepted" value="No" />
							  No</td>
						  </tr>
						  <tr>
							<!--<td height="71">--><td><strong>Preferred Cities/District</strong></td>
							<td><input name="exp_preferred_cities_district" type="text" value="<?php echo $_POST['exp_preferred_cities_district'];?>" size="20" /></td>
						  </tr>
						  
						  
						  <tr>
					<td><strong>Other Expectations</strong></td>
					<td><textarea maxlength="200" name="other_expectations" cols="22"  id="other_expectations"><?php echo $_POST['other_expectations'];?></textarea></td>
				  </tr>
						</table></td>
					</tr>
					<tr>
					  <td valign="top">&nbsp;</td>
					  <td valign="top">&nbsp;</td>
					</tr>
					<tr>
					  <td valign="top"><div align="center">
						  <input name="submit" type="submit" value="Submit" />
						  &nbsp;&nbsp;&nbsp;&nbsp;
						  <input name="submit2" type="reset" class="BUTTONBACKGROUND" value="Reset" />
						</div></td>
					  <td valign="top">&nbsp;</td>
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
				<td bgcolor="#9A0000"><img src="images/spacer.gif" width="1" height="1" /></td>
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
				<td valign="bottom"><div align="center"> </div></td>
			  </tr>
			</div>
			<div id="bx3"><a href="#"></a></div>
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
</body>
</html>