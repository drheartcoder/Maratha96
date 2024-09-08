<?php
include("connect.php");
$id = $_GET['id'];
$des = "DELETE from package where package_id = '".$id."' ";
$des_1 =mysqli_query($con,$des);
if(!$des_1)
{
die("error in delete:".mysqli_error());
}
else
{
echo"delete done";
}



?>