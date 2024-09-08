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
<?php

if(isset($_POST['submit'])!="")
{

	$sql = "SELECT * from admin where username = '".$_POST['username']."' and password = '".$_POST['password']."' ";
	$sql_1 = mysqli_query($con,$sql);
	$res = mysqli_num_rows($sql_1);
	
	if($res>0)
	{
	
	$result = "UPDATE admin SET session = '".session_id()."' where username = '".$_POST['username']."' and password = '".$_POST['password']."' ";
	$result_1 = mysqli_query($con,$result);
	header("location:mainpage.php");
	exit;
	}
	else
	{
	$error_msg = "Invalid Username or Password";
	}
	
}
	
	


?>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td></tr>
  <tr>
    <td align="center"><table width="55%" border="0" cellpadding="2" cellspacing="0" class="tblborder3">
      <tr>
        <td align="center"><table width="100%" border="0" cellpadding="0" cellspacing="10" class="tblborder" bgcolor="#FF6600">
          <tr>
            <td align="left"><table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr><td colspan="2">&nbsp;</td></tr>
                <tr>
                  <td colspan="2" align="center">&nbsp;</td>
                  
                </tr>
            </table></td>
          </tr>
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
				
				<tr><td>&nbsp;</td></tr>
				
				<tr>
                  <td align="center"><h2>Administrator Login</h2></td>
                </tr>
				
				<tr><td>&nbsp;</td></tr>
				
               <tr>
					<td>
					<form  name="form1" method="post">
					<table align="center" width="50%">
					
					<tr>
					<td align="right"><strong>Username:</strong></td>
					<td><input type="text" name="username" size="25" /></td>
					</tr>
					<tr>
					<td align="right"><strong>Password:</strong></td>
					<td><input type="password" name="password" size="25" /></td>
					</tr>
					
					<tr>
					  <td>&nbsp;</td>
					  <td><font color="#FF0000" size="-1"><?php echo $error_msg;?></font></td>
					  </tr>
					<tr>
					<td>&nbsp;</td>
					<td><input type="submit" name="submit" value="submit" /></td>
					</tr>
					</table>
					</form>
					</td>
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
