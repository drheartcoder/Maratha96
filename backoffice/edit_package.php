<?php
ob_start();
$id = $_GET['id'];
include("../connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>96 Kuli Maratha Backoffice</title>
<link href="images/knt_style.css" rel="stylesheet" type="text/css" /></head>
<?php


$poi = "SELECT * from package where package_id = '".$id."' ";
$poi_1 = mysqli_query($con,$poi);
$rose = mysqli_num_rows($poi_1);
$row_11 = mysqli_fetch_array($poi_1);





if(isset($_POST['submit'])!="")
{
	if(isset($_POST['package_name'])=="")
	{
	$error_name = "Please Enter Name";
	$error=1;
	}
	
	if(isset($_POST['package_amount'])=="")
	{
	$error_amount = "Please Enter Amount";
	$error=1;
	}

	if($error==0)
	{
	
	$kkk = "UPDATE package set package_name='".$_POST['package_name']."',
	package_amount='".$_POST['package_amount']."',
	package_status='".$_POST['package_status']."' 
	where package_id = '".$id."' ";
	
	$kkk_1 = mysqli_query($con,$kkk);
	$row_11 = mysqli_fetch_array($kkk_1);
	if(!$kkk_1)
	{
	die("error in update:".mysqli_error());
	}
	header("location:viewpackage.php");
	exit();
	
	
	}
	
	
}



?>

	 
	 
	 
			

<body>
<form id="form1" name="form1" method="post" action="">

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
					  
					  <td width="1%"><img src="images/devider.png" width="2" height="39" /></td>
						<td width="14%" align="center" valign="middle"><a href="mainpage.php" class="bluelink"><b>Home</b></a></td>
						
						
						
						<td width="1%"><img src="images/devider.png" width="2" height="39" /></td>
                        <td width="16%" align="center" valign="middle"><a href="viewpackage.php" class="bluelink"><strong>Package</strong></a></td>
						
						
						<td width="1%"><img src="images/devider.png" width="2" height="39" /></td>
                        <td width="16%" align="center" valign="middle"><a href="bridegroom.php" class="bluelink"><strong>Bridegroom</strong></a></td>
						
						
                        <td width="1%"><img src="images/devider.png" width="2" height="39" /></td>
                        <td width="16%" align="center" valign="middle"><a href="register.php" class="bluelink"><strong>Bride</strong></a></td>
						
						<td width="1%"><img src="images/devider.png" width="2" height="39" /></td>
                        <td width="16%" align="center" valign="middle"><a href="setting.php" class="bluelink"><b>Settings</b></a></td>
				
                        <td width="1%"><img src="images/devider.png" width="2" height="39" /></td>
						<td width="16%" align="center" valign="middle"><a href="logout.php" class="bluelink"><b>Logout</b></a></td>
                       
                      </tr>
                  </table></td>
           </tr>
		    
			
			
				<tr>
                  <td>&nbsp;</td>
                </tr>
				
				<tr>
					<td>
						<table border="0" height="56" width="100%" cellpadding="0" cellspacing="0" align="center" >
							<tr bgcolor="#f3f3f3">	
								<td width="83%" height="40" align="center"><u><strong><font color="black" size="+1">Edit Package </font></strong></u></td>
							  <td width="17%" colspan="2" align="left"><br /><br /></td>
							</tr>
					  	</table>					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
				
				
				<tr>
                  <td align="center"></td>
                </tr>
				
				<tr>
                  <td>&nbsp;</td>
                </tr>
              
            </table>
              <table width="100%" border="1" cellspacing="3" cellpadding="3">
			  
                <tr>
                  <td width="8%"><div align="left"><strong>Name</strong></div></td>
                  <td width="3%"><strong>:</strong></td>
                  <td width="89%">
                    <label>
                      <input name="package_name" type="text" value="<?php echo $row_11['package_name'];?>" id="package_name" />
                      </label>
                                   <?php echo $error_name;?></td>
                </tr>
                <tr>
                  <td><div align="left"><strong>Amount</strong></div></td>
                  <td><strong>:</strong></td>
                  <td>
                    <label>
                      <input name="package_amount" type="text" value="<?php echo $row_11['package_amount'];?>" id="package_amount" />
                      </label>
                                 <?php echo $error_amount;?></td>
                </tr>
                <tr>
                  <td><div align="left"><strong>Status</strong></div></td>
                  <td><strong>:</strong></td>
                  <td>
                    <label>
                    <input name="package_status" type="radio"<?php if($row_11['package_status']=="1"){ ?> checked="checked" <? } ?> value="<?php echo $row_11['package_status'];?>" />
                    </label> 
                    Yes
                    <label>
                    <input name="package_status" type="radio"<?php if($row_11['package_status']=="0"){ ?> checked="checked" <? } ?> value="<?php echo $row_11['package_status'];?>" />
                    No</label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td colspan="2">
                    <label>
                      <input type="submit" name="submit" value="submit" />
                      </label>
                 
                  </td>
                  </tr>
              </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</form>
</body>
</html>
