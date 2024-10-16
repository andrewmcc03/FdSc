<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

//<!-- Header (linked) -->
include_once 'header.php';
//<!-- Navigation (linked) -->
include_once 'navigation.php';

// Function to connect to the database and insert the data
function insertDataIntoDatabase($firstname, $surname, $dob, $newsletter1, $newsletter2)
{
    // Database credentials
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

    // Prepare and execute the SQL query
    $sql = "INSERT INTO tblNewsletter (firstname, surname, dob, newsletter1, newsletter2) VALUES ('$firstname', '$surname', '$dob', '$newsletter1', '$newsletter2')";

    if ($conn -> query($sql) === TRUE)
    {
        echo "<br>Record inserted successfully!<br><br>";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . $conn_error;
    }

    // Close the database connection
    $conn -> close();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    // Back-end validation for Page 3
    $newsletter1 = filter_input(INPUT_POST, 'newsletter1', FILTER_SANITIZE_STRING);
    $newsletter2 = filter_input(INPUT_POST, 'newsletter2', FILTER_SANITIZE_STRING);

    $_SESSION['newsletter1'] = $newsletter1;
    $_SESSION['newsletter2'] = $newsletter2;

    // Retrieve data from previous session
    $firstname = $_SESSION['firstname'];
    $surname = $_SESSION['surname'];
    $dob = $_SESSION['dob'];

    $newsletter1 = isset($_POST['newsletter1']) && $_POST['newsletter1'] == 1 ? 1 : 0;
    $newsletter2 = isset($_POST['newsletter2']) && $_POST['newsletter2'] == 1 ? 1 : 0;

    // Call the function to insert data into the database
    insertDataIntoDatabase
    (
        $firstname,
        $surname,
        $dob,
        $newsletter1,
        $newsletter2
    );
}

// Connect to MySQL database

// Database credentials
$servername = "localhost";
$username = "cl47-app3";
$password = "bwsWH-Fme";
$dbname = "cl47-app3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection and handle errors
if ($conn -> connect_error)
{
    die("Connection failed: " . $conn -> connect_error);
}

// Retrieve data from the database
$sql = "SELECT * FROM tblNewsletter";
$result = $conn -> query($sql);

// Close the database connection
$conn -> close();


if ($result -> num_rows > 0)
{
    echo "<h2>List of users</h2>";

    echo "<table border='1'>";
    echo "<tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Surname</th>
            <th>Date of Birth</th>
            <th>Newsletter 1</th>
            <th>Newsletter 2</th>
          </tr>";

    while ($row = $result -> fetch_assoc())
    {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['firstname'] . "</td>";
        echo "<td>" . $row['surname'] . "</td>";
        echo "<td>" . $row['dob'] . "</td>";
        echo "<td>" . ($row['newsletter1'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . ($row['newsletter2'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}
else
{
    echo "No records found.";
}

//<!-- Footer (linked) -->
include_once 'footer.php';

?>