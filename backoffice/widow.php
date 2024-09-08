<?php
$id = $_GET['id'];
include("connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>96 Kuli Maratha Backoffice</title>
<link href="images/knt_style.css" rel="stylesheet" type="text/css" /></head>
<?php

$start=$_GET['first'];
$end=$_GET['last'];

if(strlen($_GET['slot']<1))
{
$slot = 0;
}
else
{
$slot = $_GET['slot'];
}

if(strlen($_GET['first']<1) || strlen($_GET['last']<1))
{
$start=0;
$end=25;
}


 $sqllimit="select * from bride where marital_status='Widow'";
	$limittest=mysqli_query($con,$sqllimit);
    $rowlimit=mysqli_num_rows($limittest);   

    $sql="select * from bride where marital_status='Widow' order by bride_id desc limit " .$start.",25";
	
	$agree_list=mysqli_query($con,$sql);
	
	if(!$agree_list)
	{
		mysqli_error();
	}	
		$resultrows = mysqli_num_rows($agree_list);
		
	
	$i=$start+1;

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
					<td>
						<table border="0" height="56" width="100%" cellpadding="0" cellspacing="0" align="center" >
							<tr bgcolor="#f3f3f3">	
								<td width="83%" height="40" align="center"><u><strong><font color="black" size="+1">Widow</font></strong></u></td>
							  <td width="17%" colspan="2" align="left"><br /><br /><span class="normaltxt">Pages : <?php echo print_pages_new($rowlimit,$start,$end,$slot); ?></span></td>
							</tr>
					  	</table>					</td>
				</tr>
				<tr>
					<td><table width="100%" border="1" cellspacing="1" cellpadding="4" bordercolor="#999999" align="center">
                      <tr bgcolor="#ded9d9">
                        <td width="8%" align="left" class="titletxt" style="padding-left:2px;"><strong>Register ID</strong></td>
						<td width="8%" align="left" class="titletxt" style="padding-left:2px;"><strong>Register Date</strong></td>
                        <td width="8%" align="left" class="titletxt" style="padding-left:2px;"><strong>Photo</strong></td>
                        <td width="11%" height="25" align="left" class="titletxt" style="padding-left:2px;"><strong>Name</strong></td>
                        <td width="7%" align="left" class="titletxt" style="padding-left:2px;"><strong>Address</strong></td>
                        <td width="8%" align="left" class="titletxt" style="padding-left:2px;"><strong>Phone</strong></td>
                        <td width="9%" align="left" class="titletxt" style="padding-left:2px;"><strong>Email</strong></td>
                        <td width="15%"  align="left" class="titletxt" style="padding-left:2px;"><strong>ShowDetails</strong></td>
                        <td width="16%"  align="center" class="titletxt"><strong>Status</strong></td>
                        <td width="6%"  align="center" class="titletxt"><strong>Delete</strong></td>
                      </tr>
                      <?php	
					
					 if($resultrows==0)
					{
					  echo "Yet, No New Has Been Added";
					} 
					else
					{
					  while($result=mysqli_fetch_array($agree_list))
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
                      
                      <tr>
                        <td align="left" style="padding-left:2px;" class="normaltxt"><?php echo $result['register_id'];?></td>
						<td align="left" style="padding-left:2px;" class="normaltxt"><?php echo $result['reg_date'];?></td>
                        <td align="left" style="padding-left:2px;" class="normaltxt"><?php if ($result['upload_image']) echo"Available"; else echo"Not Available";?></td>
                        <td align="left" style="padding-left:2px;" class="normaltxt"><?php echo $result['firstname'];?></td>
                        <td align="left" style="padding-left:2px;" class="normaltxt"><?php echo $result['address'];?> </td>
                        <td align="left" style="padding-left:2px;" class="normaltxt"><?php echo $result['telephone'];?></td>
                        <td align="center" class="normaltxt"><?php echo $result['email'];?></td>
                        <td align="center" class="normaltxt"><a href="widow_details.php?id=<?php echo $result['bride_id'];?>">Show Details</a></td>
                        <td align="center" class="normaltxt"><a href="active_widow.php?id=<?php echo $result['bride_id'];?>">Active</a>||<a href="inactive_widow.php?id=<?php echo $result['bride_id'];?>">Inactive</a></td>
						
                        <td align="center" class="normaltxt"><a href="widow_delete.php?id=<?php echo $result['bride_id'];?>" class="bluelink"><img src="images/icon-recycle.gif"/ height="16" alt="" width="16" border="0" title="delete" /></a></td>
                      </tr>
                      <?php  $i++;}//while  
					}
				?>
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
<?php
	       function print_pages_new($total_rows,$start,$end,$slot)
		{
			
			   $total_pages = (int)($total_rows/25);
	            
				$new_slot = 0;
				$count =0;
				
			  for($k=1;$k<=$total_pages;$k++)
			    {
				
		$pagination_new.=$prev_pagination.'<a href="bridegroom.php?first='.$count.'&last=25&slot='.$new_slot.'" class="bluelink">'.$k.'</a>&nbsp;&nbsp;';
		$prev_pagination="";
					
				$count+=25;
				if($k%25==0)
				{
					$new_slot++;
		
					$next_pagination='<a href="bridegroom.php?first='.$count.'&last=25&slot='.$new_slot.'" class="bluelink">&gt;&gt;</a>&nbsp;&nbsp;';

					$a_pages[]=$pagination_new.$next_pagination;
					
					$no_of_pages+=25; 
					$pagination_new="";
					$ft = $count-25;
					
					$lt = $new_slot-1;
					
					$prev_pagination='<a href="bridegroom.php?first='.$ft .'&last=25&slot='. $lt .'" class="bluelink">&lt;&lt;</a>&nbsp;&nbsp;';
				}
				
				}//end of for
				
				if($total_rows%25>0)
				{
				$total_pages+=1;
				
				}
				
				$x =$total_pages-$no_of_pages;
				
			for($m=0;$m<$x;$m++)
			 {
				$n  =$k+($m+1)-1;
				
				if($n<=$total_pages)
				   {
				
				$pagination_new.='<a href="bridegroom.php?first='.$count.'&last=25&slot='.$new_slot.'" class="bluelink">'.$n .'</a>&nbsp;&nbsp;';
				  
				$count +=3;
				   } 
				 else
				   {
				 break;
				   }    
			 }  // end of for
				$a_pages[]=$prev_pagination.$pagination_new; 	  

			 		return($a_pages[$slot]);
			 
	  }    	//end of function 
	  
?>


