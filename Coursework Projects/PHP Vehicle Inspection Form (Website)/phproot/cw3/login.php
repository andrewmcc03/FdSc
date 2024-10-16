<?php
    define('MY_APP', true); // Access set to true

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
        $sql = "SELECT * FROM tblAdmin WHERE username = '$username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0)
        {
            $userData = $result->fetch_assoc();
            $storedHashedPassword = $userData['password'];

            // Verify the hashed password
            if (password_verify($password, $storedHashedPassword))
            {
                // Password is correct

                // Set username information in the session
                $_SESSION['username'] = $userData['username'];
                $_SESSION['accessLevel'] = $userData['accessLevel'];

                // Redirect based on access level

                // ACCESS LEVEL 1 MEANS ADMIN ACCESS
                if ($userData['accessLevel'] == 1)
                {
                    header("Location: reports.php");
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
    
    <!-- Favicon (tab icon) -->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <title>Login - JJ Keller Autos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header (linked) -->
    <?php include_once 'header.php'; ?>
    <!-- Navigation (linked) -->
    <?php include_once 'navigation.php'; ?>

    <div class="form-container">
        <div class="heading-section">
            <h2>Login</h2>
        </div>

        <form class="form-container" action="login.php" method="post">
            <div class="form-section">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <input type="submit" value="Login">

            <?php
                // Display error message if set
                if (!empty($error_message))
                {
                    echo '<p style="color: red;">' . $error_message . '</p>';
                }
            ?>
        </form>
    </div>

    <!-- Footer (linked) -->
    <?php include_once 'footer.php'; ?>
</body>
</html>
