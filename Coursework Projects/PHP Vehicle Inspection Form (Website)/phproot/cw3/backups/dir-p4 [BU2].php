<?php
    define('MY_APP', true); // Access set to true

    // Error reporting
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Start session
    session_start();

    // Save data to session first (moved this part up)
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        // Identify which checkboxes are and aren't checked (1 or 0)
        $bodyDoorsTU = isset($_POST['bodyDoorsTU']) ? 1 : 0;
        $tieDownsTU = isset($_POST['tieDownsTU']) ? 1 : 0;
        $lightsTU = isset($_POST['lightsTU']) ? 1 : 0;
        $reflectorsTU = isset($_POST['reflectorsTU']) ? 1 : 0;
        $suspensionTU = isset($_POST['suspensionTU']) ? 1 : 0;
        $tiresTU = isset($_POST['tiresTU']) ? 1 : 0;
        $wheelsRimsLugsTU = isset($_POST['wheelsRimsLugsTU']) ? 1 : 0;
        $brakesTU = isset($_POST['brakesTU']) ? 1 : 0;
        $landingGearTU = isset($_POST['landingGearTU']) ? 1 : 0;
        $kingPinUpperPlateTU = isset($_POST['kingPinUpperPlateTU']) ? 1 : 0;
        $fifthWheelDollyTU = isset($_POST['fifthWheelDollyTU']) ? 1 : 0;
        $otherCouplingDevicesTU = isset($_POST['otherCouplingDevicesTU']) ? 1 : 0;
        $rearEndProtectionTU = isset($_POST['rearEndProtectionTU']) ? 1 : 0;
        $otherTU = isset($_POST['otherTU']) ? 1 : 0;
        // 'otherDescription' is a TEXT field, tied to 'otherTU'
        $otherDescription = isset($_POST['otherDescription']) && !empty($_POST['otherDescription']) ? $_POST['otherDescription'] : "";
        $noDefects = isset($_POST['noDefects']) ? 1 : 0;
        // 'remarks' is a TEXT field, tied to 'otherTU'
        $remarks = isset($_POST['remarks']) && !empty($_POST['remarks']) ? $_POST['remarks'] : "";

        // Save data to session
        $_SESSION['bodyDoorsTU'] = $bodyDoorsTU;
        $_SESSION['tieDownsTU'] = $tieDownsTU;
        $_SESSION['lightsTU'] = $lightsTU;
        $_SESSION['reflectorsTU'] = $reflectorsTU;
        $_SESSION['suspensionTU'] = $suspensionTU;
        $_SESSION['tiresTU'] = $tiresTU;
        $_SESSION['wheelsRimsLugsTU'] = $wheelsRimsLugsTU;
        $_SESSION['brakesTU'] = $brakesTU;
        $_SESSION['landingGearTU'] = $landingGearTU;
        $_SESSION['kingPinUpperPlateTU'] = $kingPinUpperPlateTU;
        $_SESSION['fifthWheelDollyTU'] = $fifthWheelDollyTU;
        $_SESSION['otherCouplingDevicesTU'] = $otherCouplingDevicesTU;
        $_SESSION['rearEndProtectionTU'] = $rearEndProtectionTU;
        $_SESSION['otherTU'] = $otherTU;
        $_SESSION['otherDescription'] = $otherDescription;
        $_SESSION['noDefects'] = $noDefects;
        $_SESSION['remarks'] = $remarks;

        // Check if session data already exists
        if (!isset($_SESSION['truckTractorNo']) || !isset($_SESSION['mileage']) || !isset($_SESSION['truckTractorTrailerNo']) || !isset($_SESSION['dollyNo']) || !isset($_SESSION['dollyTrailerNo']) || !isset($_SESSION['location']))
        {
            // Save data to session
            $_SESSION['truckTractorNo'] = $truckTractorNo;
            $_SESSION['mileage'] = $mileage;
            $_SESSION['truckTractorTrailerNo'] = $truckTractorTrailerNo;
            $_SESSION['dollyNo'] = $dollyNo;
            $_SESSION['dollyTrailerNo'] = $dollyTrailerNo;
            $_SESSION['location'] = $location;
        }

        // Retrieve data from previous session
        /* Page 1 */
        $truckTractorNo = $_SESSION['truckTractorNo'];
        $mileage = $_SESSION['mileage'];
        $truckTractorTrailerNo = $_SESSION['truckTractorTrailerNo'];
        $dollyNo = $_SESSION['dollyNo'];
        $dollyTrailerNo = $_SESSION['dollyTrailerNo'];
        $location = $_SESSION['location'];
        /* Page 2 */
        $cabDoorsWindowsPU = $_SESSION['cabDoorsWindowsPU'];
        $bodyDoorsPU = $_SESSION['bodyDoorsPU'];
        $oilLeakPU = $_SESSION['oilLeakPU'];
        $greaseLeakPU = $_SESSION['greaseLeakPU'];
        $coolantLeakPU = $_SESSION['coolantLeakPU'];
        $fuelLeakPU = $_SESSION['fuelLeakPU'];
        $gaugesWarningIndicatorsPU = $_SESSION['gaugesWarningIndicatorsPU'];
        $windshieldWipersWashersPU = $_SESSION['windshieldWipersWashersPU'];
        $hornsPU = $_SESSION['hornsPU'];
        $heaterDefrosterPU = $_SESSION['heaterDefrosterPU'];
        $mirrorsPU = $_SESSION['mirrorsPU'];
        $steeringPU = $_SESSION['steeringPU'];
        $lightsPU = $_SESSION['lightsPU'];
        $reflectorsPU = $_SESSION['reflectorsPU'];
        $suspensionPU = $_SESSION['suspensionPU'];
        $tiresPU = $_SESSION['tiresPU'];
        $wheelsRimsLugsPU = $_SESSION['wheelsRimsLugsPU'];
        $batteryPU = $_SESSION['batteryPU'];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver's Inspection Report (Part 4 of 4)</title>
    
    <!-- Favicon (tab icon) -->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="styles/styles.css">

    <!-- Validation (P4) Script -->
    <script src="scripts/validationP4.js"></script>
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

    <form id="formP4" class="form-container-wide" action="final.php" method="post" onsubmit="return validateFormP4()">
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
        
        <!-- START OF FORM PAGE 4 - 'Final Details' section -->

        <h1>Report/Review Details</h1>
        <div class="form-section">

            <label for="reportingDriver">Reporting Driver</label>
            <input type="text" id="reportingDriver" name="reportingDriver">
            <p class="error-message" id="errorReportingDriver"></p>

            <label for="reportingDriverDate">Date of Report</label>
            <input type="date" id="reportingDriverDate" name="reportingDriverDate">
            <p class="error-message" id="errorReportingDriverDate"></p>

            <label for="reportingDriverEmpNo">Reporting Driver Employee Number</label>
            <input type="text" id="reportingDriverEmpNo" name="reportingDriverEmpNo">
            <p class="error-message" id="errorReportingDriverEmpNo"></p>

            <hr> <!-- Horizontal break -->

            <label for="reviewingDriver">Reviewing Driver</label>
            <input type="text" id="reviewingDriver" name="reviewingDriver">
            <p class="error-message" id="errorReviewingDriver"></p>

            <label for="reviewingDriverDate">Date of Review</label>
            <input type="date" id="reviewingDriverDate" name="reviewingDriverDate">
            <p class="error-message" id="errorReviewingDriverDate"></p>

            <label for="reviewingDriverEmpNo">Reviewing Driver Employee Number</label>
            <input type="text" id="reviewingDriverEmpNo" name="reviewingDriverEmpNo">
            <p class="error-message" id="errorReviewingDriverEmpNo"></p>

            <hr> <!-- Horizontal break -->

            <h2>Maintenance Action</h2>

            <label for="maintenanceDate">Maintenance Date</label>
            <input type="date" id="maintenanceDate" name="maintenanceDate">
            <p class="error-message" id="errorMaintenanceDate"></p>

            <div class="">
                <label id="repairsNeededLabel" for="repairsNeeded">
                    <input type="checkbox" id="repairsNeeded" name="repairsNeeded" value="0">Repairs Needed?
                </label>
            </div>

            <label for="roNumbers">R.O.#'s</label>
            <input type="text" id="roNumbers" name="roNumbers">
            <p class="error-message" id="errorRoNumbers"></p>

            <label for="certifiedBy">Certified By</label>
            <input type="text" id="certifiedBy" name="certifiedBy">
            <p class="error-message" id="errorCertifiedBy"></p>

            <label for="maintenanceLocation">Maintenance Location</label>
            <input type="text" id="maintenanceLocation" name="maintenanceLocation">
            <p class="error-message" id="errorMaintenanceLocation"></p>

            <!-- Shop Remarks -->
            <div class="form-section">
                <div class="remarks">
                    <label for="remarks">Shop Remarks</p>
                        <textarea name="shopRemarks" id="shopRemarks" cols="30" rows="5"></textarea>
                    </label>
                </div>
            </div>
        </div>

        <input type="submit" value="Next">

        <p class="part"><i>Part 4 of 4</i></p> 
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