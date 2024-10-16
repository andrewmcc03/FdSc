<?php
    define('MY_APP', true); // Access set to true
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Forbidden</title>

    <!-- Favicon (tab icon) -->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="styles/styles.css">
</head>

<body>
    <!-- Header (linked) -->
    <?php include_once 'header.php'; ?>
    <!-- Navigation (linked) -->
    <?php include_once 'navigation.php'; ?>

    <!-- Content container -->
    <div class="content-container">
        <div class="content">
            <h1><strong>Error:</strong> Direct access is not allowed</h1>

            <p>You are not allowed to access this page directly.</p>
            <p><a href="index.php">Go back to the home page</a></p>
        </div>
    </div>

    <!-- Footer (linked) -->
    <?php include_once 'footer.php'; ?>

</body>
</html>