<?php
include("connect.php");
$id = $_GET['id'];
$des = "DELETE from bridegroom where bridegroom_id = '".$id."' ";
$des_1 =mysqli_query($con,$des);
if(!$des_1)
{
die("error in delete:".mysqli_error());
}
else
{
echo"Delete done";
header('Location:bridegroom.php');
}



?>