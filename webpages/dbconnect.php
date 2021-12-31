<html>
	<body>
		<?php
			$servername = "localhost";
			$username = "root"; //username of user
			$password = ""; //password of above user
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