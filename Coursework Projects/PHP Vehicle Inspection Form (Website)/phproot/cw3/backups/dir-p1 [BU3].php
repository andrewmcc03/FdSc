<?php
    define('MY_APP', true); // Access set to true
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver's Inspection Report (Part 1 of 4)</title>
    
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

        function validateFormP1() {
            // Reset previous error messages
            resetErrorMessages();

            // Your validation logic goes here
            var isValid = true;

            // Example validation for each field
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

            // Your validation logic for each field goes here
            if (field.value.trim() === '') {
                if (updateErrorMessage) {
                    error.innerText = 'This is a required field.';
                    error.style.color = 'red';
                    field.focus();  // Tab user back to the invalid field
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

    <form class="form-container" action="dir-p2.php" method="post" onsubmit="return validateFormP1()">
        <div class="form-section">
            <label for="truckTractorNo">Truck or Tractor Number</label>
            <input type="text" id="truckTractorNo" name="truckTractorNo">
            <p class="error-message" id="errorTruckTractorNo"></p>

            <label for="mileage">Mileage</label>
            <input type="text" id="mileage" name="mileage">
            <p class="error-message" id="errorMileage"></p>

            <label for="truckTractorTrailerNo">Trailer Number</label>
            <input type="text" id="truckTractorTrailerNo" name="truckTractorTrailerNo">
            <p class="error-message" id="errorTruckTractorTrailerNo"></p>
        </div>

        <hr> <!-- Horizontal break -->

        <div class="form-section">
            <label for="dollyNo">Dolly Number</label>
            <input type="text" id="dollyNo" name="dollyNo">
            <p class="error-message" id="errorDollyNo"></p>

            <label for="dollyTrailerNo">Trailer Number</label>
            <input type="text" id="dollyTrailerNo" name="dollyTrailerNo">
            <p class="error-message" id="errorDollyTrailerNo"></p>

            <label for="location">Location</label>
            <input type="text" id="location" name="location">
            <p class="error-message" id="errorLocation"></p>
        </div>

        <input type="submit" value="Next">

        <p class="part"><i>Part 1 of 4</i></p> 
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