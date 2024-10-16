<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Reg</title>
	<link rel="stylesheet" href="styles.css">
<head>

    <!-- Header (linked) -->
	<?php include_once 'header.php'; ?>
	<!-- Navigation (linked) -->
	<?php include_once 'navigation.php'; ?>

    <?php
    // Get the form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate the form data
    if ($password != $confirm_password)
    {
        // If the password in both boxes do not match, send error message
        die("Passwords do not match.");
    }

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Save the user's information to the database
    $db_host = "localhost";
    $db_username = "cl47-app3";
    $db_password = "bwsWH-Fme";
    $db_name = "cl47-app3";

    // Connect to the MySQL database
    $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

    // Checking if the connection was successful
    if (!$conn)
    {
        // If the connection fails, terminate the script with an error message
        die("Connection failed: " . mysqli_connect_error());
    }

    // Create an SQL query to insert user data into the 'tblUsers' table
    $sql = "INSERT INTO tblAdmin (userID, username, password, accessLevel) VALUES ('$userID', '$username', '$hashed_password', '1')";

    // Execute the SQL query
    if (mysqli_query($conn, $sql))
    {
        echo "<br>Registration successful!<br><br>";
        echo "<a href='php-users.php'>Click here to view users</a>";
    }
    else
    {
        // If the query fails, display error message - this is a technical error, for users it needs to be more friendly, offering support
        echo "Error: " . mysqli_error($conn);
    }

    // Close database connection
    mysqli_close($conn);
    ?>

    <!-- Footer (linked) -->
	<?php include_once 'footer.php'; ?>

</html>