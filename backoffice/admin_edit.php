<?php
session_start();
include("connect.php");
ob_start();
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
	
	if(isset($_POST['username'])=="")
	{
		$error_uname = "Please Enter Username";
		$error=1;
	}
	
	if(isset($_POST['password'])=="")
	{
		$error_pass = "Please Enter Password";
		$error=1;
	}
	
	
	if($error==0)
		{
		
		$up = "UPDATE admin SET username = '".$_POST['username']."',
									password = '".$_POST['password']."'
									WHERE session = '".session_id."' ";
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

<body>
<form id="form1" name="form1" method="post" action="">
<table  width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
<tr><td valign="middle" style="padding-top:100px;">
  <table  width="500" height="163" border="0" align="center" cellpadding="2" cellspacing="2" bordercolor="#FF0000" bgcolor="#d6f6fa" class="border">
    <tr>
      <td colspan="3"></td>
    </tr>
    
    <tr>
      <td colspan="3"><div align="center"><strong>Admin Panel </strong></div></td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td width="49%"><div align="right"><strong>Username</strong></div></td>
      <td colspan="2"><strong>:</strong>        <label>
        <input name="username" type="text" id="username" />
      <font color="#FF0000" size="-1"><br /><?php echo $error_uname;?></font></label></td>
    </tr>
    <tr>
      <td><div align="right"><strong>Password</strong></div></td>
      <td colspan="2"><strong>:</strong>        <label>
        <input name="password" type="password" id="password" />
      <font color="#FF0000" size="-1"><br /><?php echo $error_pass;?></font></label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><label>
        <input type="submit" name="submit" value="submit" />
      </label></td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
  </table>
  </td></tr>
  </table>
</form>
</body>
</html>
