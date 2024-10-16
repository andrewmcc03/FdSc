<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    // Back-end validation for Page 2
    $dob = filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_STRING);

    if (empty($dob))
    {
        die("Please fill in the Date of Birth field.");
    }

    // Save data to session
    $_SESSION['dob'] = $dob;

    // Retrieve data from previous session
    $firstname = $_SESSION['firstname'];
    $surname = $_SESSION['surname'];
    $dob = $_SESSION['dob'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Page 3</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header (linked) -->
    <?php include_once 'header.php'; ?>
    <!-- Navigation (linked) -->
    <?php include_once 'navigation.php'; ?>

    <form action="page4.php" method="post">
        <!-- Display Page 2 Data -->
        <p>First Name: <?php echo $_SESSION['firstname']; ?></p>
        <p>Surname: <?php echo $_SESSION['surname']; ?></p>
        <p>Date of Birth: <?php echo $_SESSION['dob']; ?></p>
        
        <label for="newsletter1">
            <input type="checkbox" id="newsletter1" name="newsletter1" value="1">Newsletter Option 1
        </label><br><br>

        <label for="newsletter2">
            <input type="checkbox" id="newsletter2" name ="newsletter2" value="1">Newsletter Option 2
        </label><br><br>

        <input type="submit" value="Next">
    </form>

    <!-- Footer (linked) -->
    <?php include_once 'footer.php'; ?>
</body>
</html>