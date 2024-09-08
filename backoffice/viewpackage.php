<?php
$id = $_GET['id'];
include("connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>96 Kuli Maratha Backoffice</title>
<link href="images/knt_style.css" rel="stylesheet" type="text/css" />
</head>
<?php




	$pas = "SELECT * from package";
	$pas_1 = mysqli_query($con,$pas);
	if(!$pas_1)
	{
	die("error in selecting package:".mysqli_error());
	}
	 



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
					  
					  <td width="1%"><img src="images/devider.png" width="2" height="39" /></td>
						<td width="14%" align="center" valign="middle"><a href="mainpage.php" class="bluelink"><b>Home</b></a></td>
						
						
						
						<td width="1%"><img src="images/devider.png" width="2" height="39" /></td>
                        						
						<td width="1%"><img src="images/devider.png" width="2" height="39" /></td>
                        <td width="16%" align="center" valign="middle"><a href="bridegroom.php" class="bluelink"><strong>Groom</strong></a></td>
						
						
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
								<td width="83%" height="40" align="center"><u><strong><font color="black" size="+1">Packages</font></strong></u></td>
							  <td width="17%" colspan="2" align="left"><a href="package.php"><strong>Add Package </strong></a><br />
							  <br /></td>
							</tr>
					  	</table>					</td>
				</tr>
				<tr>
					<td><table width="100%" border="1" cellspacing="1" cellpadding="4" bordercolor="#999999" align="center">
                      <tr bgcolor="#ded9d9">
                        <td width="11%" align="left" class="titletxt" style="padding-left:2px;"><strong>Package Name </strong></td>
                        <td width="10%" align="left" class="titletxt" style="padding-left:2px;"><strong>Package Amount </strong></td>
                        <td width="13%" height="25" align="left" class="titletxt" style="padding-left:2px;"><strong>Package Status </strong></td>
                        <td width="12%"  align="left" class="titletxt" style="padding-left:2px;"><strong>Edit</strong></td>
                        <td width="10%"  align="center" class="titletxt"><strong>Delete</strong></td>
                      </tr>
                     
                      <?php while($row = mysqli_fetch_array($pas_1))
					   { ?>
                      <tr>
                        <td align="left" style="padding-left:2px;" class="normaltxt"><?php echo $row['package_name'];?></td>
                        <td align="left" style="padding-left:2px;" class="normaltxt"><?php echo $row['package_amount'];?></td>
                        <td align="left" style="padding-left:2px;" class="normaltxt"><?php echo $row['package_status'];?></td>
                        <td align="center" class="normaltxt"><div align="left"><a href="edit_package.php?id=<?php echo $row['package_id'];?>"><img src="images/modify.png"/ height="13" alt="" width="13" border="0" title="delete" /></a></div></td>
                        <td align="center" class="normaltxt"><div align="left"><a href="package_delete.php?id=<?php echo $row['package_id'];?>" class="bluelink"><img src="images/icon-recycle.gif"/ height="16" alt="" width="16" border="0" title="delete" /></a></div></td>
                      </tr>
					  <?php } ?>
                    
					
				
                    </table></td>
	</tr>
				
				
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
