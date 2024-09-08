<?php
	$con = mysqli_connect("localhost","root","","maratha9_shaadi");

	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit();
	}
?>