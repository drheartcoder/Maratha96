<?php
include("connect.php");
$id = isset($_GET['id']);
$des = "DELETE from bride where bride_id = '".$id."' ";
$des_1 =mysqli_query($con,$des);
if(!$des_1)
{
die("error in delete:".mysqli_error());
}
else
{
echo"delete done";
header('Location:register.php');
}



?>