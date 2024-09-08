<?php
$con = mysqli_connect("localhost","maratha9_shaadi","asd123");
	if(!$con)
	{
	die("database not connected:".mysqli_error());
	}

$select_db = mysqli_select_db("maratha9_shaadi",$con);

	if(!$select_db)
	{
	die("database table not found:".mysqli_error());
	}
	


?>