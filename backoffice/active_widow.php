<?php
ob_start();
include("connect.php");
$id =isset($_GET['id']);

$ddd = "UPDATE bride SET status='1' where bride_id = '".$id."'";
$ddd_1 = mysqli_query($con,$ddd);
if(!$ddd_1)
{
die("error in active query:".mysqli_error());
}
else
{
header("location:widow.php");
exit();
}

?>