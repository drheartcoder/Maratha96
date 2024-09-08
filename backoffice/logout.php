<?php
session_start();
ob_start();
include("connect.php");

$dss = "UPDATE admin set session='' where session='".session_id()."'";
$dss_1 = mysqli_query($con,$dss);
if(!$dss_1)
{
die("error in update:".mysqli_error());
}
else
{
header("location:admin.php");
exit;
}  



?>

