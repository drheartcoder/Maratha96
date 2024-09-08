<?php
$id = isset($_GET['id']);
include("connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Marvins Garden</title>
<link href="images/knt_style.css" rel="stylesheet" type="text/css" /></head>
<?php




$bbb = "select * from bride";
$bbb_1 = mysqli_query($con,$bbb,);
$resultrow = mysqli_num_rows($bbb_1);

if(!$bbb_1)
{
die("error in select:".mysqli_error());
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
                        <td width="16%" align="center" valign="middle"><a href="new_list.php" class="bluelink"><strong>Package</strong></a></td>
						
						
						
                        <td width="1%"><img src="images/devider.png" width="2" height="39" /></td>
                        <td width="16%" align="center" valign="middle"><a href="testi_list.php" class="bluelink"><strong>Register User </strong></a></td>
						
						<td width="1%"><img src="images/devider.png" width="2" height="39" /></td>
                        <td width="16%" align="center" valign="middle"><a href="setting_list.php" class="bluelink"><b>Settings</b></a></td>
				
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
								<td width="83%" height="40" align="center"><strong><u><font color="black" size="+1">Register User </font></u></strong></td>
								<td width="17%" colspan="2" align="left"><a href="new_add.php" class="bluelink">Add New</a><br /><br /><span class="normaltxt">Pages : </span></td>
								
							</tr>
					  	</table>
					</td>
				</tr>
				<tr>
					<td>
						<table width="100%" border="1" cellspacing="1" cellpadding="4" bordercolor="#999999" align="center">
							<tr bgcolor="#ded9d9">
							   <td width="16%" height="25" align="left" class="titletxt" style="padding-left:2px;"><strong>Firstname</strong></td>
							   <td width="16%" align="left" class="titletxt" style="padding-left:2px;"><strong>Lastname</strong></td>
							   <td width="15%" align="left" class="titletxt" style="padding-left:2px;"><strong>Address</strong></td>
							   <td width="17%" align="left" class="titletxt" style="padding-left:2px;"><strong>Phone</strong></td>
							   
							    <td width="14%" align="left" class="titletxt" style="padding-left:2px;"><strong>Email</strong></td> 
							   
							   
							   
							   <td width="14%"  align="left" class="titletxt" style="padding-left:2px;"><strong>ShowDetails</strong></td>
							   <td width="8%"  align="center" class="titletxt"><strong>Delete</strong></td>
							   
							</tr>
				<?php	
					
					
					 if($resultrow==0)
					{
					  echo "Yet, No New Has Been Added";
					} 
					else
					{
					  while($bb_res = mysqli_fetch_array($bbb_1))
						{ 
								  if($i%2==0)
								  {
									$color="#f3f3f3";
								  }
								  else
								  {
									$color="#ded9d9";
								  }
								  						
								?> 
								<tr bgcolor="<?php echo $color;?>">
						
								<tr>
								<td align="left" style="padding-left:2px;" class="normaltxt"><?php echo $bb_res['firstname'];?></td>
								
								<td align="left" style="padding-left:2px;" class="normaltxt"><span class="normaltxt"><?php echo $bb_res['lastname'];?></span></td>
								
								<td align="left" style="padding-left:2px;" class="normaltxt"><span class="normaltxt">
								   <?php echo $bb_res['address'];?></span>
								</td>
								<td align="left" style="padding-left:2px;" class="normaltxt"><span class="normaltxt"><?php echo $bb_res['telephone'];?></span></td>
								
								<td align="center" class="normaltxt"><?php echo $bb_res['email'];?></td>
								<td align="center" class="normaltxt"><?php echo $bb_res['caste'];?></td>
				
				<td align="center" class="normaltxt"><a href="delete.php?id=<?php echo $bb_res['bride_id'];?>" class="bluelink"><img src="images/icon-recycle.gif"/ height="16" alt="" width="16" border="0" title="delete" /></a></td>
								</tr>
							   <?php  $i++;}//while  
					}
				?>
				</table>
				</td>
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
