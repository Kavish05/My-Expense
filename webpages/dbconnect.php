<html>
	<body>
		<?php
			$servername = "fdb31.runhosting.com";
			$username = "4016712_expense"; //username of user
			$password = "Expense01"; //password of above user
			$db = "expense";

			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $db);

			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			//echo "Connected successfully !";
		?>
	</body>
</html>