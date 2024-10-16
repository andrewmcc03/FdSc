<?php
    define('MY_APP', true); // Access set to true

    // Start session
    session_start();

    // Save data to session first (moved this part up)
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $truckTractorNo = filter_input(INPUT_POST, 'truckTractorNo', FILTER_SANITIZE_STRING);
        $mileage = filter_input(INPUT_POST, 'mileage', FILTER_SANITIZE_STRING);
        $truckTractorTrailerNo = filter_input(INPUT_POST, 'truckTractorTrailerNo', FILTER_SANITIZE_STRING);
        $dollyNo = filter_input(INPUT_POST, 'dollyNo', FILTER_SANITIZE_STRING);
        $dollyTrailerNo = filter_input(INPUT_POST, 'dollyTrailerNo', FILTER_SANITIZE_STRING);
        $location = filter_input(INPUT_POST, 'location', FILTER_SANITIZE_STRING);

        if (empty($truckTractorNo) || empty($mileage) || empty($truckTractorTrailerNo) || empty($dollyNo) || empty($dollyTrailerNo) || empty($location)) {
            die("Server: Please fill in all fields.");
        }

        // Save data to session
        $_SESSION['truckTractorNo'] = $truckTractorNo;
        $_SESSION['mileage'] = $mileage;
        $_SESSION['truckTractorTrailerNo'] = $truckTractorTrailerNo;
        $_SESSION['dollyNo'] = $dollyNo;
        $_SESSION['dollyTrailerNo'] = $dollyTrailerNo;
        $_SESSION['location'] = $location;
    }

    // Check if the form data from dir-p1.php has been submitted
    if (empty($_SESSION['truckTractorNo']) || empty($_SESSION['mileage']) || empty($_SESSION['truckTractorTrailerNo']) || empty($_SESSION['dollyNo']) || empty($_SESSION['dollyTrailerNo']) || empty($_SESSION['location'])) {
        header('Location: dir-p1.php'); // Redirect to dir-p1.php if accessed in an invalid way
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver's Inspection Report (Part 2 of 4)</title>
    
    <!-- Stylesheet -->
    <link rel="stylesheet" href="styles.css">

    <script>
        // Get form inputs
        var truckTractorNo = document.getElementById('truckTractorNo').value.trim();
        var mileage = document.getElementById('mileage').value.trim();
        var truckTractorTrailerNo = document.getElementById('truckTractorTrailerNo').value.trim();
        var dollyNo = document.getElementById('dollyNo').value.trim();
        var dollyTrailerNo = document.getElementById('dollyTrailerNo').value.trim();
        var location = document.getElementById('location').value.trim();

        document.addEventListener("DOMContentLoaded", function () {
            // Add event listeners to input fields for proactive validation
            addValidationListener('truckTractorNo', 'errorTruckTractorNo');
            addValidationListener('mileage', 'errorMileage');
            addValidationListener('truckTractorTrailerNo', 'errorTruckTractorTrailerNo');
            addValidationListener('dollyNo', 'errorDollyNo');
            addValidationListener('dollyTrailerNo', 'errorDollyTrailerNo');
            addValidationListener('location', 'errorLocation');
        });

        function addValidationListener(fieldName, errorId) {
            var field = document.getElementById(fieldName);

            // Add event listener for blur (losing focus)
            field.addEventListener('blur', function () {
                validateField(fieldName, errorId, true);
            });
        }

        function validateFormP2() {
            // Reset previous error messages
            resetErrorMessages();

            var isValid = true;

            isValid = validateField('truckTractorNo', 'errorTruckTractorNo', isValid);
            isValid = validateField('mileage', 'errorMileage', isValid);
            isValid = validateField('truckTractorTrailerNo', 'errorTruckTractorTrailerNo', isValid);
            isValid = validateField('dollyNo', 'errorDollyNo', isValid);
            isValid = validateField('dollyTrailerNo', 'errorDollyTrailerNo', isValid);
            isValid = validateField('location', 'errorLocation', isValid);

            return isValid;
        }

        function validateField(fieldName, errorId, updateErrorMessage) {
            var field = document.getElementById(fieldName);
            var error = document.getElementById(errorId);

            // If field is empty
            if (field.value.trim() === '') {
                if (updateErrorMessage) {
                    error.innerText = 'This is a required field.';
                    error.style.color = 'red';
                }
                return false;
            } else {
                // Clear error message if the field is not empty
                error.innerText = '';
                return true;
            }
        }

        function resetErrorMessages() {
            // Reset all error messages
            var errorMessages = document.querySelectorAll('.error-message');
            errorMessages.forEach(function (error) {
                error.innerText = '';
            });
        }
    </script>
</head>

<body>
    <!-- Header (linked) -->
    <?php include_once 'header.php'; ?>
    <!-- Navigation (linked) -->
    <?php include_once 'navigation.php'; ?>

    <div class="heading-section">
        <h1>Driver's Inspection Report</h1>
        <p><strong>Please note:</strong> Completion of this report is required by Federal Law, 49 CFR 396.11 & 396.13.</p>
    </div>

    <form class="form-container" action="dir-p3.php" method="post" onsubmit="return validateFormP2()">
        <div class="form-section">
            <div class="info-reminder">
                <!-- Display Form Page 1 Data -->
                <p><b>Truck/Tractor Number: </b><?php echo $_SESSION['truckTractorNo'] ?? 'N/A'; ?></p>
                <p><b>Mileage: </b><?php echo $_SESSION['mileage'] ?? 'N/A'; ?></p>
                <p><b>Trailer Number: </b><?php echo $_SESSION['truckTractorTrailerNo'] ?? 'N/A'; ?></p>
                <p><b>Dolly Number: </b><?php echo $_SESSION['dollyNo'] ?? 'N/A'; ?></p>
                <p><b>Dolly Trailer Number: </b><?php echo $_SESSION['dollyTrailerNo'] ?? 'N/A'; ?></p>
                <p><b>Location: </b><?php echo $_SESSION['location'] ?? 'N/A'; ?></p>
            </div>
        </div>

        <hr> <!-- Horizontal break -->

        <div class="form-section">
            <!-- Empty -->
            <label for="tf1">Temp Field 1</label>
            <input type="text" id="tf1" name="tf1">
            <p class="error-message" id="errorTf1"></p>

            <label for="tf2">Temp Field 2</label>
            <input type="text" id="tf2" name="tf2">
            <p class="error-message" id="errorTf2"></p>

            <label for="tf3">Temp Field 3</label>
            <input type="text" id="tf3" name="tf3">
            <p class="error-message" id="errorTf3"></p>
        </div>

        <input type="submit" value="Next">

        <p class="part"><i>Part 2 of 4</i></p> 
    </form>

    <?php
    // Display error message if set
    if (!empty($error_message))
    {
        echo '<p style="color: red;">' . $error_message . '</p>';
    }
    ?>

    <!-- Footer (linked) -->
    <?php include_once 'footer.php'; ?>

</body>
</html>