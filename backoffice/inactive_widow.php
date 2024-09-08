<?php
ob_start();
include("connect.php");
$id =$_GET['id'];

$zzz = "UPDATE bride SET status='0' where bride_id = '".$id."'";
$zzz_1 = mysqli_query($con,$zzz);
if(!$zzz_1)
{
die("error in active query:".mysqli_error());
}
else
{
header("location:widow.php");
exit();
}


?>