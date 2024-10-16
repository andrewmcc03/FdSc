<?php
    define('MY_APP', true); // Access set to true
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
    <link rel="stylesheet" href="styles/styles.css">

    <!-- Validation (P1) Script -->
    <script src="scripts/validationP1.js"></script>
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
            <input type="number" id="mileage" name="mileage">
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