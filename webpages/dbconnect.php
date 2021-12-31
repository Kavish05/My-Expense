<?php
	$servername = "fdb31.runhosting.com";
	$username = "4016712_expense"; //username of user
	$password = "Expense*01"; //password of above user
	$db = "expense";

	// Create connection
	//$conn = mysqli_connect($servername, $username, $password, $db);

	// Check connection
	if (!$conn = mysqli_connect($servername, $username, $password, $db))
	{
		die("Connection failed: " . mysqli_connect_error());
	}
	//echo "Connected successfully !";
?>