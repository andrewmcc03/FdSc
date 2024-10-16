<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
    <script>
        // Front-end validation function for Page 1
        function validatePage1()
        {
            // Get form inputs
            var firstname = document.getElementById('firstname').value.trim();
            var surname = document.getElementById('surname').value.trim();
            var email = document.getElementById('email').value.trim();
            var address = document.getElementById('address').value.trim();
            var town = document.getElementById('town').value.trim();
            var postcode = document.getElementById('postcode').value.trim();

            // Check if fields are not empty
            if (firstname === '' || surname === '' || email === '' || address === '' || town === '' || postcode === '')
            {
                alert('Please fill in all fields.');
                return false;
            }

            // Basic email validation
            var emailRegex = /^\S+@\S+\.\S+$/;
            if (!emailRegex.test(email))
            {
                alert("Invalid email address.");
                return false;
            }

            // Additional validation if needed

            return true;
        }
    </script>
</head>

<body>
    <!-- Header (linked) -->
	<?php include_once 'header.php'; ?>
	<!-- Navigation (linked) -->
	<?php include_once 'navigation.php'; ?>

    <form action="page2.php" method="post" onsubmit="return validatePage1()">
        <br><label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname"><br><br>

        <label for="surname">Surname:</label>
        <input type="text" id="surname" name="surname"><br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email"><br><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address"><br><br>

        <label for="town">Town:</label>
        <input type="text" id="town" name="town"><br><br>

        <label for="postcode">Postcode:</label>
        <input type="text" id="postcode" name="postcode"><br><br>

        <input type="submit" value="Next">
    </form>

    <!-- Footer (linked) -->
	<?php include_once 'footer.php'; ?>

</body>
</html>