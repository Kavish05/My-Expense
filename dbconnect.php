<?php
	$servername = "fdb31.runhosting.com";
	$username = "4016712_expense"; //username of user
	$password = "expense02"; //password of above user
	$db = "4016712_expense";

	// Create connection

	// Check connection
	if (!$conn = mysqli_connect($servername, $username, $password, $db))
	{
		die("Connection failed: " . mysqli_connect_error());
	}
	//echo "Connected successfully !";
?>