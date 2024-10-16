<?php
session_start();

echo '<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Page 3</title>
	<link rel="stylesheet" href="styles.css">
<head>
<body>';
	//<!-- Header (linked) -->
	include_once 'header.php';
	//<!-- Navigation (linked) -->
	include_once 'navigation.php';

    // Connect to MySQL Database
    $servername = "localhost";
    $username = "cl47-app3";
    $password = "bwsWH-Fme";
    $dbname = "cl47-app3";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn -> connect_error)
    {
        die("Connection failed: " . $conn -> connect_error);
    }

    // Initialise variable
    $newsletter = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        // Back-end validation for Page 2
        $dob = filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_STRING);
        $_SESSION['dob'] = $dob;

        // Retrieve data from previous session
        $firstname = $_SESSION['firstname'];
        $surname = $_SESSION['surname'];
        $dob = $_SESSION['dob'];
        $age = $_SESSION['age'];
        $newsletter = $_SESSION['newsletter'];
        $email = $_SESSION['email'];
        $address = $_SESSION['address'];
        $town = $_SESSION['town'];
        $postcode = $_SESSION['postcode'];

        // Debug information
        echo "<p>First Name: $firstname</p>";
        echo "<p>Surname: $surname</p>";
        echo "<p>Date of Birth: $dob</p>";

        // Validate checkbox data
        $newsletter = isset($_POST['newsletter']) ? 1 : 0;
        
        // Debug information
        //echo "Newsletter: $newsletter<br>";

        // Insert data into the database
        $sql = "INSERT INTO tblNewsletter (firstname, surname, dob, age, newsletter, email, address, town, postcode) VALUES ('$firstname', '$surname', '$dob', '$age', '$newsletter', '$email', '$address', '$town', '$postcode')";

        if ($conn -> query($sql) === TRUE)
        {
            echo "Data added successfully!";

            // Close connection
            $conn -> close();
            session_destroy();
            exit();
        }
        else
        {
            $error_message = "Error: " . $sql . "<br>" . $conn -> error;
        }
    }

    //<!-- Footer (linked) -->
    include_once 'footer.php';

echo '
</body>
</html>';

?>