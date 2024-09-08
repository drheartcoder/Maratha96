<?php 
ob_start();
session_start();
include("connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Marvins Garden</title>
<link href="file:///D|/navnath/admin/images/knt_style.css" rel="stylesheet" type="text/css" />
</head>
<?php
$start=isset($_GET['first']);
$end=isset($_GET['last']);

if(strlen(isset($_GET['slot'])<1))
{
$slot = 0;
}
else
{
$slot = isset($_GET['slot']);
}

if(strlen(isset($_GET['first'])<1) || strlen(isset($_GET['last'])<1))
{
$start=0;
$end=25;
}
    $sqllimit="select * from bride";
	$limittest=mysqli_query($con,$sqllimit);
    $rowlimit=mysqli_num_rows($limittest);   

    $sql="select * from bride where 1 order by bride_id asc limit " .$start.",25";
	
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
					  
					  <td width="1%"><img src="file:///D|/navnath/admin/images/devider.png" width="2" height="39" /></td>
						<td width="14%" align="center" valign="middle"><a href="file:///D|/navnath/admin/mainpage.php" class="bluelink"><b>Home</b></a></td>
						
						<td width="1%"><img src="file:///D|/navnath/admin/images/devider.png" width="2" height="39" /></td>
                        <td width="16%" align="center" valign="middle"><a href="file:///D|/navnath/admin/new_list.php" class="bluelink"><b>New</b></a></td>
						
						<td width="1%"><img src="file:///D|/navnath/admin/images/devider.png" width="2" height="39" /></td>
                        <td width="16%" align="center" valign="middle"><a href="file:///D|/navnath/admin/event_list.php" class="bluelink"><b>Events</b></a></td>
						
                        <td width="1%"><img src="file:///D|/navnath/admin/images/devider.png" width="2" height="39" /></td>
                        <td width="16%" align="center" valign="middle"><a href="file:///D|/navnath/admin/testi_list.php" class="bluelink"><b>Testimonials</b></a></td>
						
						<td width="1%"><img src="file:///D|/navnath/admin/images/devider.png" width="2" height="39" /></td>
                        <td width="16%" align="center" valign="middle"><a href="file:///D|/navnath/admin/setting_list.php" class="bluelink"><b>Settings</b></a></td>
				
                        <td width="1%"><img src="file:///D|/navnath/admin/images/devider.png" width="2" height="39" /></td>
						<td width="16%" align="center" valign="middle"><a href="file:///D|/navnath/admin/logout.php" class="bluelink"><b>Logout</b></a></td>
                       
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
								<td width="83%" height="40" align="center"><font size="+1" color="black">
							<b><u>Event Listing</u></b></font></td>
								<td width="17%" colspan="2" align="left"><a href="file:///D|/navnath/admin/event_add.php" class="bluelink">Add Event</a><br /><br /><span class="normaltxt">Pages : </span><?php echo print_pages_new($rowlimit,$start,$end,$slot); ?></td>
								
							</tr>
					  	</table>
					</td>
				</tr>
				<tr>
					<td>
						<table width="100%" border="1" cellspacing="1" cellpadding="4" bordercolor="#999999" align="center">
							<tr bgcolor="#ded9d9">
							   <td width="12%" height="25" style="padding-left:2px;" align="left" class="titletxt"><b>Serial no.</b></td>
							   <td width="22%" align="left" style="padding-left:2px;" class="titletxt"><b>Title</b></td>
							   <td width="21%" align="left" style="padding-left:2px;" class="titletxt"><b>Info</b></td>
							   <td width="33%"  align="left" style="padding-left:2px;" class="titletxt"><b>Link</b></td>
							   <td width="4%"  align="center" class="titletxt"><b>Edit</b></td>
							   <td width="8%"  align="center" class="titletxt"><b>Delete</b></td>
							</tr>
				<?php	
					if($resultrows==0)
					{
					  echo "Yet, No Event Has Been Added";
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
								<tr bgcolor="<?php echo $color;?>">
								<td align="left" style="padding-left:2px;" class="normaltxt"><?php echo $i; ?></td>
								
								<td align="left" style="padding-left:2px;" class="normaltxt"><a href="file:///D|/navnath/admin/event_edit.php?id=<?php echo $result['bride_id'];?>" class="bluelink"><span class="normaltxt"><?php echo $result["register_id"]; ?></span></a></td>
								
								<td align="left" style="padding-left:2px;" class="normaltxt"><span class="normaltxt" style="padding-left:2px;"><a href="file:///D|/navnath/admin/event_edit.php?id=<?php echo $result['bride_id'];?>" class="bluelink">
								  <?php  
									 $text=$result['firstname'];
									 $date=$result['lastname'];
									 
									 echo $text; ?>
								</a></span></td>
								<td align="left" style="padding-left:2px;" class="normaltxt"><a href="file:///D|/navnath/admin/event_edit.php?id=<?php echo $result['bride_id'];?>" class="bluelink"><span class="normaltxt"><?php echo $date; ?></span></a></td>
								
								<td align="center" class="normaltxt"><a href="file:///D|/navnath/admin/event_edit.php?id=<?php echo $result['bride_id'];?>" class="bluelink"><img src="file:///D|/navnath/admin/images/modify.png"/ height="13" width="13" alt="" border="0" title="edit" /></a></td>
				
				<td align="center" class="normaltxt"><a href="file:///D|/navnath/admin/event_list.php?delete=<?php echo $result['bride_id'];?>" class="bluelink"><img src="file:///D|/navnath/admin/images/icon-recycle.gif"/ height="16" alt="" width="16" border="0" title="delete" /></a></td>
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
<?php
	       function print_pages_new($total_rows,$start,$end,$slot)
		{
			
			   $total_pages = (int)($total_rows/25);
	            
				$new_slot = 0;
				$count =0;
				
			  for($k=1;$k<=$total_pages;$k++)
			    {
				
		$pagination_new.=$prev_pagination.'<a href="register.php?first='.$count.'&last=25&slot='.$new_slot.'" class="bluelink">'.$k.'</a>&nbsp;&nbsp;';
		$prev_pagination="";
					
				$count+=25;
				if($k%25==0)
				{
					$new_slot++;
		
					$next_pagination='<a href="register.php?first='.$count.'&last=25&slot='.$new_slot.'" class="bluelink">&gt;&gt;</a>&nbsp;&nbsp;';

					$a_pages[]=$pagination_new.$next_pagination;
					
					$no_of_pages+=25; 
					$pagination_new="";
					$ft = $count-25;
					
					$lt = $new_slot-1;
					
					$prev_pagination='<a href="register.php?first='.$ft .'&last=25&slot='. $lt .'" class="bluelink">&lt;&lt;</a>&nbsp;&nbsp;';
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
				
				$pagination_new.='<a href="register.php?first='.$count.'&last=25&slot='.$new_slot.'" class="bluelink">'.$n .'</a>&nbsp;&nbsp;';
				  
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
