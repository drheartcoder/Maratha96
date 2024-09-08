<?php
ob_start();
include("connect.php");
$id =isset($_GET['id']);

$ddd = "UPDATE bridegroom SET status='1' where bridegroom_id = '".$id."'";
$ddd_1 = mysqli_query($con,$ddd);
if(!$ddd_1)
{
die("error in active query:".mysqli_error());
}
else
{
header("location:bridegroom.php");
exit();
}


?>