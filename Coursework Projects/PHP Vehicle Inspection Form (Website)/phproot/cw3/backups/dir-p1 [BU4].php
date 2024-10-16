<?php
define('MY_APP', true); // Access set to true

// Start the session
session_start();

// Other code for dir-p1.php

// When the form is submitted, set a session variable and redirect to dir-p2.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process the form data
    
    // Set a session variable to indicate that dir-p2.php should be accessible
    $_SESSION['p1_submitted'] = true;

    // Redirect to dir-p2.php
    header('Location: dir-p2.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver's Inspection Report (Part 1 of 4)</title>
    
    <!-- Favicon (tab icon) -->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="styles.css">

    <script>
        document.addEventListener('DOMContentLoaded', function ()
        {
            // Define an array of input field IDs in the desired order
            var inputFieldIds = ['truckTractorNo', 'mileage', 'truckTractorTrailerNo', 'dollyNo', 'dollyTrailerNo', 'location'];

            // Add event listeners to reset the border color, hide error messages, and remove focus when the user starts typing
            inputFieldIds.forEach(function (inputFieldId)
            {
                var inputField = document.getElementById(inputFieldId);
                var errorMessage = document.getElementById('error' + capitaliseFirstLetter(inputFieldId));

                inputField.addEventListener('input', function ()
                {
                    inputField.style.borderColor = '';
                    inputField.style.borderWidth = '';
                    inputField.style.outlineColor = '';
                    inputField.style.outlineWidth = '';
                    errorMessage.textContent = ''; // Clear error message
                });
            });

            // Form submission validation
            function validateFormP1()
            {
                // Variable to track if there are any empty fields
                var hasEmptyField = false;

                for (var i = 0; i < inputFieldIds.length; i++)
                {
                    var inputFieldId = inputFieldIds[i];
                    var inputField = document.getElementById(inputFieldId);
                    var inputValue = inputField.value.trim();
                    var errorMessage = document.getElementById('error' + capitaliseFirstLetter(inputFieldId));

                    if (inputValue === '')
                    {
                        // Set border and outline color and width for invalid fields
                        inputField.style.borderColor = 'rgb(240, 18, 18)';
                        inputField.style.borderWidth = '2px';
                        inputField.style.outlineColor = 'rgb(240, 18, 18)';
                        inputField.style.outlineWidth = '2px';

                        // Set focus on the first invalid field
                        if (!hasEmptyField)
                        {
                            inputField.focus();
                        }

                        // Show error message
                        errorMessage.textContent = 'Please fill in this field.';
                        hasEmptyField = true;
                    }
                    else
                    {
                        // Reset border and outline color and width, and clear error message for valid fields
                        inputField.style.borderColor = '';
                        inputField.style.borderWidth = '';
                        inputField.style.outlineColor = '';
                        inputField.style.outlineWidth = '';
                        errorMessage.textContent = '';
                    }
                }

                if (hasEmptyField)
                {
                    return false;
                }

                return true;
            }

            // Function to capitalise the first letter of a string
            function capitaliseFirstLetter(string)
            {
                return string.charAt(0).toUpperCase() + string.slice(1);
            }

            // Attach the validation function to the form submission
            var form = document.getElementById('formP1');
            form.addEventListener('submit', function (event)
            {
                if (!validateFormP1())
                {
                    event.preventDefault(); // Prevent form submission if validation fails
                }
            });
        });
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

    <form id="formP1" class="form-container" action="dir-p2.php" method="post" onsubmit="return validateFormP1()">
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