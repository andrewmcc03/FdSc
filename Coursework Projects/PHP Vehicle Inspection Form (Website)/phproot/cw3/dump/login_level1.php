<?php
// Start the session
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['username']))
{
    header('Location: login.php');
    exit();
}

// Check access level
$requiredAccessLevel = 1;
if ($_SESSION['accesslevel'] != $requiredAccessLevel)
{
    // Redirect to login.php with an error message
    header("Location: login.php?error=no_permission");
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Access Level 1</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header (linked) -->
    <?php include_once 'header.php'; ?>
    <!-- Navigation (linked) -->
    <?php include_once 'navigation.php'; ?>

    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>

    <p>You have access to content for Access Level 1.</p>

    <!-- Footer (linked) -->
    <?php include_once 'footer.php'; ?>
</body>
</html>