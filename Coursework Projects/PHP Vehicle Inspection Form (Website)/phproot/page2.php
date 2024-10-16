<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    // Back-end validation for Page 1
    $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
    $surname = filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
    $town = filter_input(INPUT_POST, 'town', FILTER_SANITIZE_STRING);
    $postcode = filter_input(INPUT_POST, 'postcode', FILTER_SANITIZE_STRING);

    if (empty($firstname) || empty($surname) || empty($email) || empty($address) || empty($town) || empty($postcode))
    {
        die("Please fill in all fields.");
    }

    // Save data to session
    $_SESSION['firstname'] = $firstname;
    $_SESSION['surname'] = $surname;
    $_SESSION['email'] = $email;
    $_SESSION['address'] = $address;
    $_SESSION['town'] = $town;
    $_SESSION['postcode'] = $postcode;
}
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Page 2</title>

    <!-- JavaScript to validate the date of birth before putting it into SQL -->
    <script>
        function validateDOB()
        {
            // Get form inputs
            var dobInput = document.getElementById('dob');
            var dobFormat = /^\d{4}-\d{2}-\d{2}$/;

            if (dobInput === '')
            {
                alert('Please fill in your date of birth.');
                return false;
            }

            if (!dobFormat.test(dobInput.value))
            {
                alert('Invalid date of birth format. Please use YYYY-MM-DD.');
                return false;
            }

            return true;
        }
    </script>
</head>

<body>
    <!-- Header (linked) -->
	<?php include_once 'header.php'; ?>
	<!-- Navigation (linked) -->
	<?php include_once 'navigation.php'; ?>

    <form action="page3.php" method="post" onsubmit="return validateDOB()">
        <!-- Display Page 1 Data -->
        <p>First Name: <?php echo $_SESSION['firstname']; ?></p>
        <p>Surname: <?php echo $_SESSION['surname']; ?></p>

        <label for="dob">Date of Birth:</label>
        <input type="text" id="dob" name="dob" placeholder="YYYY-MM-DD"><br><br>

        <input type="submit" value="Next">
    </form>
    
    <!-- Footer (linked) -->
	<?php include_once 'footer.php'; ?>

</body>
</html>