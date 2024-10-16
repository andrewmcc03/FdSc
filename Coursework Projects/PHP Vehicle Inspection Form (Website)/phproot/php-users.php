<?php
echo '<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Users</title>
	<link rel="stylesheet" href="styles.css">
<head>
<body>';
	//<!-- Header (linked) -->
	include_once 'header.php';
	//<!-- Navigation (linked) -->
	include_once 'navigation.php';

	// Connect to the database
	$db_host = "localhost";
	$db_username = "cl47-app3";
	$db_password = "bwsWH-Fme";
	$db_name = "cl47-app3";

	// Create connecton the MySQL database
	$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

	// Check if connection is successful
	if (!$conn)
	{
		// If connection fails, terminate the script and send error message
		die("Connection failed: " . mysqli_connect_error());
	}

	// Retrieve data from the 'tblUsers' table in the database
	$sql = "SELECT * FROM tblUsers";
	$result = mysqli_query($conn, $sql);

	// Output a heading for the list of users
	echo "<h2>List of users</h2>";

	// Check if any records were returned from the 'tblUsers' table in the database
	if (mysqli_num_rows($result) > 0)
	{
		// Output data from the table if there are records
		
		// Create table header
		echo "<table>";
		echo "<tr><th>ID</th><th>Username</th><th>Email</th><th>Password</th><th>Access Level</th></tr>";

		// Loop through each record in the record set
		while ($row = mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			echo "<td>" . $row["userid"] . "</td>";
			echo "<td>" . $row["username"] . "</td>";
			echo "<td>" . $row["email"] . "</td>";
			echo "<td>" . $row["password"] . "</td>";
			echo "<td>" . $row["accesslevel"] . "</td>";
			echo "</tr>";
		}
		// Close the table
		echo "</table>";
	}
	else
	{
		// If no records are found, display message
		echo "No records found";
	}

	// Close database connection
	mysqli_close($conn);

	//<!-- Footer (linked) -->
	include_once 'footer.php';

echo '
</body>
</html>';

?>	<!-- PHP End -->