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
                validateField(fieldName, errorId, false);
            });
        }

        function validateFormP1(event) {
            // Prevent the default form submission
            event.preventDefault();

            // Reset previous error messages
            resetErrorMessages();

            var isValid = true;

            isValid = validateField('truckTractorNo', 'errorTruckTractorNo', true) && isValid;
            isValid = validateField('mileage', 'errorMileage', isValid) && isValid;
            isValid = validateField('truckTractorTrailerNo', 'errorTruckTractorTrailerNo', isValid) && isValid;
            isValid = validateField('dollyNo', 'errorDollyNo', isValid) && isValid;
            isValid = validateField('dollyTrailerNo', 'errorDollyTrailerNo', isValid) && isValid;
            isValid = validateField('location', 'errorLocation', isValid) && isValid;

            // If the form is not valid, focus on the first invalid field
            if (!isValid) {
                focusFirstInvalidField();
            }

            // If the form is valid, you can proceed with form submission or perform any other action
            if (isValid) {
                // Your form submission logic here
                // For example: document.getElementById('yourFormId').submit();
            }
        }

        // Attach the validateFormP1 function to the form's submit event
        document.getElementById('formP1').addEventListener('submit', validateFormP1);

        
        function validateField(fieldName, errorId, updateErrorMessage) {
            var field = document.getElementById(fieldName);
            var error = document.getElementById(errorId);

            // If field is empty
            if (field.value.trim() === '') {
                if (updateErrorMessage) {
                    error.innerText = 'This is a required field.';
                    error.style.color = 'red';
                    field.classList.add('error-border');
                }
                return false;
            } else {
                // Clear error message if the field is not empty
                error.innerText = '';
                
                // Remove the 'error-border' class and add 'valid' class for styling
                field.classList.remove('error-border');
                field.classList.add('valid');

                return true;
            }
        }

        function resetErrorMessages() {
            // Reset all error messages and remove styling classes
            var errorMessages = document.querySelectorAll('.error-message');
            errorMessages.forEach(function (error) {
                error.innerText = '';
            });

            var fields = document.querySelectorAll('.valid');
            fields.forEach(function (field) {
                field.classList.remove('valid');
            });
        }

        function focusFirstInvalidField() {
            var invalidField = document.querySelector('.error-border');
            if (invalidField) {
                invalidField.focus();
            }
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

    <form class="form-container" id="formP1" action="dir-p2.php" method="post" onsubmit="return validateFormP1()">
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