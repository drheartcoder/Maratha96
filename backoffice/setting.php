<?php
session_start();
include("connect.php");
ob_start(); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>96 Kuli Maratha Backoffice</title>
<link href="images/knt_style.css" rel="stylesheet" type="text/css" />
</head>

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
					<td>
						<table border="0" height="56" width="100%" cellpadding="0" cellspacing="0" align="center" >
							<tr bgcolor="#f3f3f3">	
								<td width="89%" height="40" align="center"><font size="+1" color="black">
							<b><u>Edit Admin Details</u></b></font></td>
								<td width="5%" colspan="2" align="center">&nbsp;</td>
								
							</tr>
					  	</table>
					</td>
				</tr>
				<form method="post" name="form1" action="" enctype="multipart/form-data">
				<tr>
					<td>
				    	<table width="100%" border="1" cellspacing="1" cellpadding="4" bordercolor="#999999" align="center">
				  <?php

$poi = "SELECT * from admin where session = '".session_id()."' ";
$poi_1 = mysqli_query($con,$poi);
$rose = mysqli_num_rows($poi_1);
$result = mysqli_fetch_array($poi_1);


if(isset($_POST['submit'])!="")
{
			if(isset($_POST['username'])=="")
			{
				$error_uname = "Please Enter Your Name";
				$error=1;
			}
			
			if(isset($_POST['password'])=="")
			{
				$error_pwd = "Please Enter Your Name";
				$error=1;
			}
			
			if($error==0)
			{
			
			$up = "UPDATE admin SET username = '".$_POST['username']."',
										password = '".$_POST['password']."'
										WHERE session = '".session_id()."' ";
			$up_1 = mysqli_query($con,$up);
		
					if(!$up_1)
					{
					die("error in insertion:".mysqli_error());
					}
					else
					{
					header("location:mainpage.php");
					exit();
					}
			}
}		


?>

				 		
						<tr>
                        <td width="21%"><p><span class="errfont">*</span>&nbsp;Admin Username</p></td>
                        <td width="79%"><label>
                          <input name="username" type="text" value="<?php echo $result['username']; ?>" size="40" />
                        </label><span class="errfont"><?php echo $error_uname;?></span></td>
                      </tr>
					  <tr bgcolor="#FAFAFA">
                        <td><span class="errfont">*</span>&nbsp;Password </td>
                        <td><label>
                          <input name="password" type="password" value="<?php echo $result['password']; ?>" size="30" />
                        </label><span class="errfont"><?php echo $error_pwd;?></span></td>
                      </tr>
					 
					  <tr>
					  <td colspan="2">&nbsp;</td>
					</tr>
					<tr>
					   <td>&nbsp;</td>
					  <td align="left"><label>
						<input type="submit" name="submit" value="Update Setting" />
					  </label></td>
					</tr>
				  </table>
				
				</td>
			</tr>
				</form>
				<tr>
                  <td align="center"></td>
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