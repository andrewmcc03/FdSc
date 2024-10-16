<?php
    define('MY_APP', true); // Access set to true

    // Error reporting
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Start session
    session_start();

    // Function to connect to the database and insert the data
    function insertDataIntoDatabase(
        $truckTractorNo,
        $mileage,
        $truckTractorTrailerNo,
        $dollyNo,
        $dollyTrailerNo,
        $location,
        $cabDoorsWindowsPU,
        $bodyDoorsPU,
        $oilLeakPU,
        $greaseLeakPU,
        $coolantLeakPU,
        $fuelLeakPU,
        $gaugesWarningIndicatorsPU,
        $windshieldWipersWashersPU,
        $hornsPU,
        $heaterDefrosterPU,
        $mirrorsPU,
        $steeringPU,
        $lightsPU,
        $reflectorsPU,
        $suspensionPU,
        $tiresPU,
        $wheelsRimsLugsPU,
        $batteryPU,
        $bodyDoorsTU,
        $tieDownsTU,
        $lightsTU,
        $reflectorsTU,
        $suspensionTU,
        $tiresTU,
        $wheelsRimsLugsTU,
        $brakesTU,
        $landingGearTU,
        $kingPinUpperPlateTU,
        $fifthWheelDollyTU,
        $otherCouplingDevicesTU,
        $rearEndProtectionTU,
        $otherTU,
        $otherDescription,
        $noDefects,
        $remarks,
        $reportingDriver,
        $reportingDriverDate,
        $reportingDriverEmpNo,
        $reviewingDriver,
        $reviewingDriverDate,
        $reviewingDriverEmpNo,
        $maintenanceDate,
        $roNumbers,
        $certifiedBy,
        $maintenanceLocation,
        $repairsNeeded,
        $shopRemarks
    )
    {
        // Database credentials
        $servername = "localhost";
        $username = "cl47-app3";
        $password = "bwsWH-Fme";
        $dbname = "cl47-app3";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn -> connect_error)
        {
            die("Connection failed: " . $conn -> connect_error);
        }

        // Prepare and execute the SQL query
        $sql = "INSERT INTO tblDriversInspectionReports
        (
            TruckOrTractorNo, 
            Mileage, 
            TruckTractorTrailerNo, 
            DollyNo, 
            DollyTrailerNo, 
            Location, 
            CabDoorsWindowsPU, 
            BodyDoorsPU, 
            OilLeakPU, 
            GreaseLeakPU, 
            CoolantLeakPU, 
            FuelLeakPU, 
            GaugesWarningIndicatorsPU, 
            WindshieldWipersWashersPU, 
            HornsPU, 
            HeaterDefrosterPU, 
            MirrorsPU, 
            SteeringPU, 
            LightsPU, 
            ReflectorsPU, 
            SuspensionPU, 
            TiresPU, 
            WheelsRimsLugsPU, 
            BatteryPU, 
            BodyDoorsTU, 
            TieDownsTU, 
            LightsTU, 
            ReflectorsTU, 
            SuspensionTU, 
            TiresTU, 
            WheelsRimsLugsTU, 
            BrakesTU, 
            LandingGearTU, 
            KingPinUpperPlateTU, 
            FifthWheelDollyTU, 
            OtherCouplingDevicesTU, 
            RearEndProtectionTU, 
            OtherTU, 
            OtherDescription, 
            NoDefects, 
            Remarks, 
            ReportingDriver, 
            ReportingDriverDate, 
            ReportingDriverEmpNo, 
            ReviewingDriver, 
            ReviewingDriverDate, 
            ReviewingDriverEmpNo, 
            MaintenanceDate, 
            RONumbers, 
            CertifiedBy, 
            MaintenanceLocation, 
            RepairsNeeded, 
            ShopRemarks
        )
        VALUES
        (
            -- Page 1 --
            '$truckTractorNo',
            '$mileage',
            '$truckTractorTrailerNo',
            '$dollyNo',
            '$dollyTrailerNo',
            '$location',
            
            -- Page 2 --
            '$cabDoorsWindowsPU',
            '$bodyDoorsPU',
            '$oilLeakPU',
            '$greaseLeakPU',
            '$coolantLeakPU',
            '$fuelLeakPU',
            '$gaugesWarningIndicatorsPU',
            '$windshieldWipersWashersPU',
            '$hornsPU',
            '$heaterDefrosterPU',
            '$mirrorsPU',
            '$steeringPU',
            '$lightsPU',
            '$reflectorsPU',
            '$suspensionPU',
            '$tiresPU',
            '$wheelsRimsLugsPU',
            '$batteryPU',
            
            -- Page 3 --
            '$bodyDoorsTU',
            '$tieDownsTU',
            '$lightsTU',
            '$reflectorsTU',
            '$suspensionTU',
            '$tiresTU',
            '$wheelsRimsLugsTU',
            '$brakesTU',
            '$landingGearTU',
            '$kingPinUpperPlateTU',
            '$fifthWheelDollyTU',
            '$otherCouplingDevicesTU',
            '$rearEndProtectionTU',
            '$otherTU',
            '$otherDescription',
            '$noDefects',
            '$remarks',

            -- Page 4 --
            '$reportingDriver',
            '$reportingDriverDate',
            '$reportingDriverEmpNo',
            '$reviewingDriver',
            '$reviewingDriverDate',
            '$reviewingDriverEmpNo',
            '$maintenanceDate',
            '$roNumbers',
            '$certifiedBy',
            '$maintenanceLocation',
            '$repairsNeeded',
            '$shopRemarks
        )";

        if ($conn -> query($sql) === TRUE)
        {
            echo "<script>alert('Record inserted successfully!');</script>";
        }
        else
        {
            echo "<script>alert('Error: " . $sql . "\\n" . $conn -> error . "');</script>";
        }

        // Close the database connection
        $conn -> close();
    }

    // Save data to session first (moved this part up)
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        // Page 4 fields
        $reportingDriver = filter_input(INPUT_POST, 'reportingDriver', FILTER_SANITIZE_STRING);
        $reportingDriverDate = filter_input(INPUT_POST, 'reportingDriverDate', FILTER_SANITIZE_STRING);
        $reportingDriverEmpNo = filter_input(INPUT_POST, 'reportingDriverEmpNo', FILTER_SANITIZE_STRING);
        $reviewingDriver = filter_input(INPUT_POST, 'reviewingDriver', FILTER_SANITIZE_STRING);
        $reviewingDriverDate = filter_input(INPUT_POST, 'reviewingDriverDate', FILTER_SANITIZE_STRING);
        $reviewingDriverEmpNo = filter_input(INPUT_POST, 'reviewingDriverEmpNo', FILTER_SANITIZE_STRING);
        $maintenanceDate = filter_input(INPUT_POST, 'maintenanceDate', FILTER_SANITIZE_STRING);
        $roNumbers = filter_input(INPUT_POST, 'roNumbers', FILTER_SANITIZE_STRING);
        $certifiedBy = filter_input(INPUT_POST, 'certifiedBy', FILTER_SANITIZE_STRING);
        $maintenanceLocation = filter_input(INPUT_POST, 'maintenanceLocation', FILTER_SANITIZE_STRING);
        $repairsNeeded = isset($_POST['repairsNeeded']) ? 1 : 0;
        $shopRemarks = filter_input(INPUT_POST, 'shopRemarks', FILTER_SANITIZE_STRING);

        if (empty($reportingDriver) || empty($reportingDriverDate) || empty($reportingDriverEmpNo) || empty($reviewingDriver) || empty($reviewingDriverDate) || empty($reviewingDriverEmpNo) || empty($maintenanceDate) || empty($roNumbers) || empty($certifiedBy) || empty($maintenanceLocation))
        {
            $emptyFields = array();
            if (empty($reportingDriver)) {
                $emptyFields[] = 'reportingDriver';
            }
            if (empty($reportingDriverDate)) {
                $emptyFields[] = 'reportingDriverDate';
            }
            if (empty($reportingDriverEmpNo)) {
                $emptyFields[] = 'reportingDriverEmpNo';
            }
            //
            if (empty($reviewingDriver)) {
                $emptyFields[] = 'reviewingDriver';
            }
            if (empty($reviewingDriverDate)) {
                $emptyFields[] = 'reviewingDriverDate';
            }
            if (empty($reviewingDriverEmpNo)) {
                $emptyFields[] = 'reviewingDriverEmpNo';
            }
            //
            if (empty($maintenanceDate)) {
                $emptyFields[] = 'maintenanceDate';
            }
            if (empty($roNumbers)) {
                $emptyFields[] = 'roNumbers';
            }
            if (empty($certifiedBy)) {
                $emptyFields[] = 'certifiedBy';
            }
            if (empty($maintenanceLocation)) {
                $emptyFields[] = 'maintenanceLocation';
            }

            if (!empty($emptyFields)) {
                $errorMessage = "Server: Please fill in the following fields (Final): " . implode(', ', $emptyFields);
                die($errorMessage);
            }
        }

        // Save data to session
        $_SESSION['reportingDriver'] = $reportingDriver;
        $_SESSION['reportingDriverDate'] = $reportingDriverDate;
        $_SESSION['reportingDriverEmpNo'] = $reportingDriverEmpNo;
        $_SESSION['reviewingDriver'] = $reviewingDriver;
        $_SESSION['reviewingDriverDate'] = $reviewingDriverDate;
        $_SESSION['reviewingDriverEmpNo'] = $reviewingDriverEmpNo;
        $_SESSION['maintenanceDate'] = $maintenanceDate;
        $_SESSION['roNumbers'] = $roNumbers;
        $_SESSION['certifiedBy'] = $certifiedBy;
        $_SESSION['maintenanceLocation'] = $maintenanceLocation;
        $_SESSION['repairsNeeded'] = $repairsNeeded;
        $_SESSION['shopRemarks'] = $shopRemarks;

        // Call the function to insert data into the database
        insertDataIntoDatabase(
            $truckTractorNo,
            $mileage,
            $truckTractorTrailerNo,
            $dollyNo,
            $dollyTrailerNo,
            $location,
            $cabDoorsWindowsPU,
            $bodyDoorsPU,
            $oilLeakPU,
            $greaseLeakPU,
            $coolantLeakPU,
            $fuelLeakPU,
            $gaugesWarningIndicatorsPU,
            $windshieldWipersWashersPU,
            $hornsPU,
            $heaterDefrosterPU,
            $mirrorsPU,
            $steeringPU,
            $lightsPU,
            $reflectorsPU,
            $suspensionPU,
            $tiresPU,
            $wheelsRimsLugsPU,
            $batteryPU,
            $bodyDoorsTU,
            $tieDownsTU,
            $lightsTU,
            $reflectorsTU,
            $suspensionTU,
            $tiresTU,
            $wheelsRimsLugsTU,
            $brakesTU,
            $landingGearTU,
            $kingPinUpperPlateTU,
            $fifthWheelDollyTU,
            $otherCouplingDevicesTU,
            $rearEndProtectionTU,
            $otherTU,
            $otherDescription,
            $noDefects,
            $remarks,
            $reportingDriver,
            $reportingDriverDate,
            $reportingDriverEmpNo,
            $reviewingDriver,
            $reviewingDriverDate,
            $reviewingDriverEmpNo,
            $maintenanceDate,
            $roNumbers,
            $certifiedBy,
            $maintenanceLocation,
            $repairsNeeded,
            $shopRemarks
        );
    }

    // Check if the form data from dir-p1.php has been submitted
    if (empty($_SESSION['reportingDriver']) || empty($_SESSION['reportingDriverDate']) || empty($_SESSION['reportingDriverEmpNo']) || empty($_SESSION['reviewingDriver']) || empty($_SESSION['reviewingDriverDate']) || empty($_SESSION['reviewingDriverEmpNo']) || empty($_SESSION['maintenanceDate']) || empty($_SESSION['roNumbers']) || empty($_SESSION['certifiedBy']) || empty($_SESSION['maintenanceLocation']))
    {
        header('Location: dir-p1.php'); // Redirect to dir-p1.php if accessed in an invalid way
        exit();
    }

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
    /* Page 3 */
    $bodyDoorsTU = $_SESSION['bodyDoorsTU'];
    $tieDownsTU = $_SESSION['tieDownsTU'];
    $lightsTU = $_SESSION['lightsTU'];
    $reflectorsTU = $_SESSION['reflectorsTU'];
    $suspensionTU = $_SESSION['suspensionTU'];
    $tiresTU = $_SESSION['tiresTU'];
    $wheelsRimsLugsTU = $_SESSION['wheelsRimsLugsTU'];
    $brakesTU = $_SESSION['brakesTU'];
    $landingGearTU = $_SESSION['landingGearTU'];
    $kingPinUpperPlateTU = $_SESSION['kingPinUpperPlateTU'];
    $fifthWheelDollyTU = $_SESSION['fifthWheelDollyTU'];
    $otherCouplingDevicesTU = $_SESSION['otherCouplingDevicesTU'];
    $rearEndProtectionTU = $_SESSION['rearEndProtectionTU'];
    $otherTU = $_SESSION['otherTU'];
    $otherDescription = $_SESSION['otherDescription'];
    $noDefects = $_SESSION['noDefects'];
    $remarks = $_SESSION['remarks'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver's Inspection Report - Form Overview</title>
    
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

    <div class="heading-section">
        <h1>Driver's Inspection Report</h1>
        <p><strong>Please note:</strong> Completion of this report is required by Federal Law, 49 CFR 396.11 & 396.13.</p>
    </div>

    <form id="formP4" class="form-container-wide" action="success.php" method="post">
        <div class="form-section">
            <div class="info-reminder">
                <h1>Form Overview Details</h1>
                <!-- Display Form Page 1 Data -->
                <p><b>Truck/Tractor Number: </b><?php echo $_SESSION['truckTractorNo'] ?? 'N/A'; ?></p>
                <p><b>Mileage: </b><?php echo $_SESSION['mileage'] ?? 'N/A'; ?></p>
                <p><b>Trailer Number: </b><?php echo $_SESSION['truckTractorTrailerNo'] ?? 'N/A'; ?></p>
                <p><b>Dolly Number: </b><?php echo $_SESSION['dollyNo'] ?? 'N/A'; ?></p>
                <p><b>Dolly Trailer Number: </b><?php echo $_SESSION['dollyTrailerNo'] ?? 'N/A'; ?></p>
                <p><b>Location: </b><?php echo $_SESSION['location'] ?? 'N/A'; ?></p>

                <hr> <!-- Horizontal break -->

                <!-- Display Form Page 2 Data -->
                <p><b>Cab/Doors/Windows (PU): </b><?php echo $_SESSION['cabDoorsWindowsPU'] ?? 'N/A'; ?></p>
                <p><b>Body/Doors (PU): </b><?php echo $_SESSION['bodyDoorsPU'] ?? 'N/A'; ?></p>
                <p><b>Oil Leak (PU): </b><?php echo $_SESSION['oilLeakPU'] ?? 'N/A'; ?></p>
                <p><b>Grease Leak (PU): </b><?php echo $_SESSION['greaseLeakPU'] ?? 'N/A'; ?></p>
                <p><b>Coolant Leak (PU): </b><?php echo $_SESSION['coolantLeakPU'] ?? 'N/A'; ?></p>
                <p><b>Fuel Leak (PU): </b><?php echo $_SESSION['fuelLeakPU'] ?? 'N/A'; ?></p>
                <p><b>Gauges/Warning Indicators (PU): </b><?php echo $_SESSION['gaugesWarningIndicatorsPU'] ?? 'N/A'; ?></p>
                <p><b>Windshield Wipers/Washers (PU): </b><?php echo $_SESSION['windshieldWipersWashersPU'] ?? 'N/A'; ?></p>
                <p><b>Horns (PU): </b><?php echo $_SESSION['hornsPU'] ?? 'N/A'; ?></p>
                <p><b>Heater/Defroster (PU): </b><?php echo $_SESSION['heaterDefrosterPU'] ?? 'N/A'; ?></p>
                <p><b>Mirrors (PU): </b><?php echo $_SESSION['mirrorsPU'] ?? 'N/A'; ?></p>
                <p><b>Steering (PU): </b><?php echo $_SESSION['steeringPU'] ?? 'N/A'; ?></p>
                <p><b>Lights (PU): </b><?php echo $_SESSION['lightsPU'] ?? 'N/A'; ?></p>
                <p><b>Reflectors (PU): </b><?php echo $_SESSION['reflectorsPU'] ?? 'N/A'; ?></p>
                <p><b>Suspension (PU): </b><?php echo $_SESSION['suspensionPU'] ?? 'N/A'; ?></p>
                <p><b>Tires (PU): </b><?php echo $_SESSION['tiresPU'] ?? 'N/A'; ?></p>
                <p><b>Wheels/Rims/Lugs (PU): </b><?php echo $_SESSION['wheelsRimsLugsPU'] ?? 'N/A'; ?></p>
                <p><b>Battery (PU): </b><?php echo $_SESSION['batteryPU'] ?? 'N/A'; ?></p>

                <hr> <!-- Horizontal break -->

                <!-- Display Form Page 3 Data -->
                <p><b>Body/Doors (TU): </b><?php echo $_SESSION['bodyDoorsTU'] ?? 'N/A'; ?></p>
                <p><b>Tie Downs (TU): </b><?php echo $_SESSION['tieDownsTU'] ?? 'N/A'; ?></p>
                <p><b>Lights (TU): </b><?php echo $_SESSION['lightsTU'] ?? 'N/A'; ?></p>
                <p><b>Reflectors (TU): </b><?php echo $_SESSION['reflectorsTU'] ?? 'N/A'; ?></p>
                <p><b>Suspension (TU): </b><?php echo $_SESSION['suspensionTU'] ?? 'N/A'; ?></p>
                <p><b>Tires (TU): </b><?php echo $_SESSION['tiresTU'] ?? 'N/A'; ?></p>
                <p><b>Wheels/Rims/Lugs (TU): </b><?php echo $_SESSION['wheelsRimsLugsTU'] ?? 'N/A'; ?></p>
                <p><b>Brakes (TU): </b><?php echo $_SESSION['brakesTU'] ?? 'N/A'; ?></p>
                <p><b>Landing Gear (TU): </b><?php echo $_SESSION['landingGearTU'] ?? 'N/A'; ?></p>
                <p><b>King Pin Upper Plate (TU): </b><?php echo $_SESSION['kingPinUpperPlateTU'] ?? 'N/A'; ?></p>
                <p><b>Fifth Wheel Dolly (TU): </b><?php echo $_SESSION['fifthWheelDollyTU'] ?? 'N/A'; ?></p>
                <p><b>Other Coupling Devices (TU): </b><?php echo $_SESSION['otherCouplingDevicesTU'] ?? 'N/A'; ?></p>
                <p><b>Rear End Protection (TU): </b><?php echo $_SESSION['rearEndProtectionTU'] ?? 'N/A'; ?></p>
                <p><b>Other (TU): </b><?php echo $_SESSION['otherTU'] ?? 'N/A'; ?></p>
                <p><b>Other Description (TU): </b><?php echo $_SESSION['otherDescription'] ?? 'N/A'; ?></p>
                <p><b>No Defects: </b><?php echo $_SESSION['noDefects'] ?? 'N/A'; ?></p>

                <hr> <!-- Horizontal break -->

                <!-- Display Form Page 4 Data -->
                <p><b>Reporting Driver: </b><?php echo $_SESSION['reportingDriver'] ?? 'N/A'; ?></p>
                <p><b>Reporting Driver Date: </b><?php echo $_SESSION['reportingDriverDate'] ?? 'N/A'; ?></p>
                <p><b>Reporting Driver Employee Number: </b><?php echo $_SESSION['reportingDriverEmpNo'] ?? 'N/A'; ?></p>
                <p><b>Reviewing Driver: </b><?php echo $_SESSION['reviewingDriver'] ?? 'N/A'; ?></p>
                <p><b>Reviewing Driver Date: </b><?php echo $_SESSION['reviewingDriverDate'] ?? 'N/A'; ?></p>
                <p><b>Reviewing Driver Employee Number: </b><?php echo $_SESSION['reviewingDriverEmpNo'] ?? 'N/A'; ?></p>
                <p><b>Maintenance Date: </b><?php echo $_SESSION['maintenanceDate'] ?? 'N/A'; ?></p>
                <p><b>RO Numbers: </b><?php echo $_SESSION['roNumbers'] ?? 'N/A'; ?></p>
                <p><b>Certified By: </b><?php echo $_SESSION['certifiedBy'] ?? 'N/A'; ?></p>
                <p><b>Maintenance Location: </b><?php echo $_SESSION['maintenanceLocation'] ?? 'N/A'; ?></p>
                <p><b>Repairs Needed: </b><?php echo $_SESSION['repairsNeeded'] ?? 'N/A'; ?></p>
                <p><b>Shop Remarks: </b><?php echo $_SESSION['shopRemarks'] ?? 'N/A'; ?></p>
            </div>
        </div>
        
        <!-- START OF FINAL PAGE - 'Form Overview Details' section -->

        <div class="form-section">

        </div>

        <input type="submit" value="Submit">

        <p class="part"><i>Form Overview</i></p> 
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