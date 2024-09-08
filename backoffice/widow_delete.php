<?php
include("connect.php");
$id = $_GET['id'];

/* $sqllimit="select * from bride where marital_status='Divorcee'";
*/
$des = "DELETE from bride where bride_id = '".$id."' ";
$des_1 =mysqli_query($con,$des);
if(!$des_1)
{
die("error in delete:".mysqli_error());
}
else
{
echo"Delete done";
header('Location:widow.php');
}

?>