<?php
$id = $_GET['id'];
session_start();
include("connect.php");

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>


<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>.: Maratha 96 Kuli :.</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {font-size: 18px}
.style3 {
	color: #9A0000;
	font-weight: bold;
}
-->
</style>
<?php


/*$ggg = "SELECT * from bridegroom where status='1'";
$ggg_1 =mysqli_query($con,$ggg);
$row_1 =mysqli_num_rows($ggg_1);
if(!$ggg_1)
{
die("error:".mysqli_error());
} */

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
$end=10;
}




 	$sqllimit="select * from bridegroom  where status='1' and marital_status='Divorcee'";
	$limittest=mysqli_query($con,$sqllimit);
    $rowlimit=mysqli_num_rows($limittest); 
	
	 $tio="select * from bride where status='1' and marital_status='Divorcee'";
	$hub=mysqli_query($con,$tio);
    $row_limit=mysqli_num_rows($hub); 
	
	
	  

    $sql="select * from bridegroom where status='1' order by bridegroom_id asc limit " .$start.",10";
	
	$agree_list=mysqli_query($con,$sql);
	
	if(!$agree_list)
	{
		mysqli_error();
	}	
		$resultrows = mysqli_num_rows($agree_list);
		
	
	$i=1;




	
	

if(isset($_POST['submit'])!="")
{
$qqq = "SELECT * from bride Where register_id = '".$_POST['rno']."'";
$qqq_1 = mysqli_query($con,$qqq);
$qqq_2 = mysqli_num_rows($qqq_1);

if($qqq_2>0)
{

$mysearchresult = '<table cellspacing="3" cellpadding="3" border="0" width="600">';
			
			
			
             $mysearchresult .= '<tr>
                    <td width="10%"><strong>Regno</strong></td>
                    <td width="12%" align="center"><strong>Height</strong></td>
					 <td width="16%" align="center"><strong>Date Of Birth </strong></td>
                    <td width="16%" align="center"><strong>Education</strong></td>
                    <td width="17%" align="center"><strong>Location</strong></td>
                    <td width="29%" align="center"><strong>Occupation</strong></td>
                  </tr>';
			while($ooo = mysqli_fetch_array($qqq_1)) { 
			
			if($i%2==0)
								  {
									$color="#fec180";
								  }
								  else
								  {
									$color="#f3f3f3";
								  }
			 $mysearchresult .= '<tr bgcolor= '. $color.' >
                        <td><a href="bride_profille.php?id='.$ooo['bride_id'].'" target="_blank">' . $ooo['register_id'] . '</a></td>
						<td align="center">' . $ooo['height'] . '</td>
                        <td align="center">' . $ooo['dateofbirth'] . '</td>
                        <td align="center">' . $ooo['education'] . '</td>
                        <td align="center">' .  $ooo['district'] . '</td>
                        <td>' .  $ooo['occupation'] . '</td>
                      </tr>';
													$i++; } 
		  $mysearchresult .= '</table>'; 
}
		
		
		else
		{
		$ddd = "SELECT * from bridegroom Where register_id = '".$_POST['rno']."'";
$ddd_1 = mysqli_query($con,$ddd);
$ddd_2 = mysqli_num_rows($ddd_1);

if($ddd_2>0)
{

$mysearchresult = '<table cellspacing="3" cellpadding="3" border="0" width="600">';
			
			
			
             $mysearchresult .= '<tr>
                    <td width="16%"><strong>Regno</strong></td>
                    <td width="19%" align="center"><strong>Height</strong></td>
					 <td width="18%" align="center"><strong>Date Of Birth </strong></td>
                    <td width="15%" align="center"><strong>Education</strong></td>
                    <td width="16%" align="center"><strong>Location </strong></td>
                    <td width="16%" align="center"><strong>Occupation</strong></td>
                  </tr>';
			while($vvv = mysqli_fetch_array($ddd_1)) { 
			
			if($i%2==0)
								 {
									$color="#fec180";
								  }
								  else
								  {
									$color="#f3f3f3";
								  }
			
			
			$mysearchresult .= '<tr bgcolor= '. $color.' >
                        <td><a href="profille.php?id='.$vvv['bridegroom_id'].'" target="_blank">' . $vvv['register_id'] . '</a></td>
						<td align="center">' . $vvv['height'] . '</td>
                        <td align="center">' . $vvv['dateofbirth'] . '</td>
                        <td align="center">' . $vvv['education'] . '</td>
                        <td align="center">' .  $vvv['district'] . '</td>
                        <td align="center">' .  $vvv['occupation'] . '</td>
                      </tr>';
													$i++; } 
		  $mysearchresult .= '</table>'; 
}
		else
		{
		 $mysearchresult = "No, Matches Found For The Search";
		}

		
		}
		


}
?>







<body>
<!--header-->
<div id="header">
	<div id="head-wrap">
    <div id="ban">
    <div id="search">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="39" align="right" valign="middle"><a href="search.php"><img src="images/search-now.gif" alt="search now" width="128" height="31" border="0" /></a></td>
        </tr>
        <tr>
          <td height="30"><a href="index.php" class="top-link">Home</a><span class="arial12bold">&nbsp;&nbsp; l&nbsp;&nbsp; </span><a href="aboutus.php" class="top-link">About us</a><span class="arial12bold">&nbsp; &nbsp;l&nbsp;&nbsp; </span><a href="contactus.php" class="top-link">Contact us</a></td>
        </tr>
      </table>
    </div>
    </div>
    <div id="nav">
    	<div class="nav-lft"><img src="images/link-lft.png" alt="lft" width="12" height="41"></div>
      <div class="nav-rht"><img src="images/link-rht.png" alt="rht"></div>
    	<ul id="topnav">
    		<li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="register.php">New Registration</a></li>
            <li></li>
          <li><a href="rules.php">Rules</a></li>
            <li><a href="paymentoption.php">Payment Option</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
    	</ul>
    </div>
	</div>
</div>
<!--contain-->
<div id="cont">
	<div id="cont-wrap">
    	<div id="lft">
        	<div id="bx1">
           	  <div class="topic style1"><strong>Quick Links</strong></div>
<ul id="bx1">
                	<li><a href="bridegroom.php" title="वर">Grooms</a></li>
          <li><a href="bride.php" title="वधु">Brides</a></li>
          <li><a href="divorce.php" title="घटस्फोटित">Divorcee</a></li>
          <li><a href="widow.php" title="विधूर / विधवा">Widow / Widower</a></li>
          <li><a href="response.php">Response</a></li>
              </ul>
                 <div class="style1 topic"><strong>Search</strong></div>
<ul id="bx1">
                	<li><a href="search.php">Advance Search</a></li>
                    <li><a href="quick_search.php">Quick Search</a></li>
                    <li><a href="search_region.php">Search by Location</a></li>
              </ul>
            </div>
        	<div id="bx2"><a href="register.php"><img src="images/ad1.jpg" alt="ad" width="212" height="238" border="0"></a></div>
      </div>
	  <form name="form1" method="post" action="">
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Search By The Registration Number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="rno" type="text" id="rno" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Search" />
	  </form>
        <div id="rht">
       	  <div id="tp">
		  <?php  echo"$mysearchresult"; ?>
		  </div>
        	<div id="mid">
           	  <div id="lft1">
               	<div class="tp"><br />
               	List Of Divorcee<br />
               	<br />
               	</div>
				 <div class="in">
              <form id="form2" name="form2" method="post" action="">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="right"></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="0" cellpadding="3" cellspacing="3">
                      <tr>
                        <td width="10%"><strong>Reg No</strong></td>
                        <td width="12%" align="center"><strong>Height</strong></td>
                        <td width="16%" align="center"><strong>Birth Date</strong></td>
                        <td width="16%" align="center"><strong>Education</strong></td>
                        <td width="17%" align="center"><strong>Location</strong></td>
                        <td width="29%" align="center"><strong>Occupation</strong></td>
                      </tr>
                      <?php while($result_1 = mysqli_fetch_array($limittest))
				   {  
				   			if($i%2==0)
								  {
									$color="#f3f3f3";
								  }
								  else
								  {
									$color="#fec180";
								  }
				   
				   
				   ?>
                      <tr bgcolor="<?php echo $color;?>">
                        <td ><a href="#" onclick="window.open('profille.php?id=<?php echo $result_1['bridegroom_id'];?>')"><?php echo $result_1['register_id'];?></a></td>
                        <td align="center" ><?php echo $result_1['height'];?></td>
                        <td align="center" ><?php echo $result_1['dateofbirth'];?></td>
                        <td align="center" ><?php echo $result_1['education'];?></td>
                        <td align="center" ><?php echo $result_1['address'];?></td>
                        <td align="left" ><?php echo $result_1['occupation'];?></td>
                      </tr>
                      <?php $i++; } ?>
					<?php while($result_2 = mysqli_fetch_array($hub))
				   {  
				   
				   
				   
				   if($i%2==0)
								  {
									$color="#f3f3f3";
								  }
								  else
								  {
									$color="#ffe9db";
								  }
				   
				   
				   
				   
				   
				   
				   ?>
                      <tr bgcolor="<?php echo $color;?>">
                        <td><a href="#" onclick="window.open('bride_profille.php?id=<?php echo $result_2['bride_id'];?>')"><?php echo $result_2['register_id'];?></a></td>
                        <td align="center"><?php echo $result_2['height'];?></td>
                        <td align="center"><?php echo $result_2['dateofbirth'];?></td>
                        <td align="center"><?php echo $result_2['education'];?></td>
                        <td align="center"><?php echo $result_2['address'];?></td>
                        <td align="left"><?php echo $result_2['occupation'];?></td>
                      </tr>
                      <?php } $i++; ?>
                    </table></td>
                  </tr>
                  <tr>
                    <td>&nbsp;	</td>
                  </tr>
                  <tr>
                    <td align="right">Pages:<?php echo print_pages_new($rowlimit,$start,$end,$slot); ?></td>
                  </tr>
                </table>
              </form>
              </div>     
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
</body></html>
<?php


	       function print_pages_new($total_rows,$start,$end,$slot)
		{
			
			   $total_pages = (int)($total_rows/10);
	            
				$new_slot = 0;
				$count =0;
				
			  for($k=1;$k<=$total_pages;$k++)
			    {
				
		$pagination_new.=$prev_pagination.'<a href="bridegroom.php?first='.$count.'&last=10&slot='.$new_slot.'" class="bluelink">'.$k.'</a>&nbsp;&nbsp;';
		$prev_pagination="";
					
				$count+=10;
				if($k%10==0)
				{
					$new_slot++;
		
					$next_pagination='<a href="bridegroom.php?first='.$count.'&last=10&slot='.$new_slot.'" class="bluelink">&gt;&gt;</a>&nbsp;&nbsp;';

					$a_pages[]=$pagination_new.$next_pagination;
					
					$no_of_pages+=25; 
					$pagination_new="";
					$ft = $count-25;
					
					$lt = $new_slot-1;
					
					$prev_pagination='<a href="bridegroom.php?first='.$ft .'&last=10&slot='. $lt .'" class="bluelink">&lt;&lt;</a>&nbsp;&nbsp;';
				}
				
				}//end of for
				
				if($total_rows%10>0)
				{
				$total_pages+=1;
				
				}
				
				$x =$total_pages-$no_of_pages;
				
			for($m=0;$m<$x;$m++)
			 {
				$n  =$k+($m+1)-1;
				
				if($n<=$total_pages)
				   {
				
				$pagination_new.='<a href="bridegroom.php?first='.$count.'&last=10&slot='.$new_slot.'" class="bluelink">'.$n .'</a>&nbsp;&nbsp;';
				  
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





