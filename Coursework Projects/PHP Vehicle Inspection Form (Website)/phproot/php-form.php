<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="styles.css">

    <!-- JavaScript -->
    <script src="script.js"></script>
</head>
<body>
    <!-- Header (linked) -->
	<?php include_once 'header.php'; ?>
	<!-- Navigation (linked) -->
	<?php include_once 'navigation.php'; ?>

    <h2>Enter your details below</h2>

    <form name="registrationForm" method="POST" action="php-register.php" onsubmit="return validateForm()">
        <label>UserID:</label>
        <input type="text" name="userID"><br><br>

        <label>Email:</label>
        <input type="text" name="username"><br><br>

        <label>Password:</label>
        <input type="password" name="password"><br><br>

        <label>Confirm Password:</label>
        <input type="password" name="confirm_password"><br><br>

        <input type="submit" name="submit" value="Register">
    </form>

    <!-- Footer (linked) -->
	<?php include_once 'footer.php'; ?>

</body>
</html>