<?php
// Start the session
session_start();

// Database credentials
$servername = "localhost";
$username = "cl47-app3";
$password = "bwsWH-Fme";
$dbname = "cl47-app3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection and handle errors
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

// Error message variable
$error_message = '';

// Check for unauthorized access parameter
if (isset($_GET['error']) && $_GET['error'] === 'no_permission')
{
    $error_message = "You do not have permission to access this page.";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    // SQL query to retrieve hashed password
    $sql = "SELECT * FROM tblUsers WHERE username = '$username'";
    $result = $conn -> query($sql);

    if ($result -> num_rows > 0)
    {
        $userData = $result -> fetch_assoc();
        $storedHashedPassword = $userData['password'];

        // Verify the hashed password
        if (password_verify($password, $storedHashedPassword))
        {
            // Password is correct

            // Set username information in the session
            $_SESSION['username'] = $userData['username'];
            $_SESSION['accesslevel'] = $userData['accesslevel'];

            // Redirect based on access level
            if ($userData['accesslevel'] == 1)
            {
                header("Location: login_level1.php");
                exit();
            }
            elseif ($userData['accesslevel'] == 2)
            {
                header("Location: login_level2.php");
                exit();
            }
            elseif ($userData['accesslevel'] == 0)
            {
                header("Location: php-users.php");
                exit();
            }
        }
        else
        {
            // Password is incorrect
            $error_message = "Invalid username or password.";
        }
    }
    else
    {
        // Username not found
        $error_message = "Invalid username or password.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header (linked) -->
    <?php include_once 'header.php'; ?>
    <!-- Navigation (linked) -->
    <?php include_once 'navigation.php'; ?>

    <h2>Login Form</h2>

    <?php
    // Display error message if set
    if (!empty($error_message))
    {
        echo '<p style="color: red;">' . $error_message . '</p>';
    }
    ?>

    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>

    <!-- Footer (linked) -->
    <?php include_once 'footer.php'; ?>
</body>
</html>