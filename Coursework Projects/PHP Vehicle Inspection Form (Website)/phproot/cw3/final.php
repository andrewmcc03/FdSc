<?php
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
    ) {
        // Database credentials
        $servername = "localhost";
        $username = "cl47-app3";
        $password = "bwsWH-Fme";
        $dbname = "cl47-app3";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and execute SQL query
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
            '$shopRemarks'
        )";

        if ($conn -> query($sql) === TRUE)
        {
            echo "<script>alert('Record inserted successfully!');</script>";
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close database connection
        $conn->close();
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Back-end validation for page 4
        $_SESSION['repairsNeeded'] = isset($_POST['repairsNeeded']) ? $_POST['repairsNeeded'] : 0;

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
        $shopRemarks = filter_input(INPUT_POST, 'shopRemarks', FILTER_SANITIZE_STRING);

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
        insertDataIntoDatabase
        (
            $_SESSION['truckTractorNo'],
            $_SESSION['mileage'],
            $_SESSION['truckTractorTrailerNo'],
            $_SESSION['dollyNo'],
            $_SESSION['dollyTrailerNo'],
            $_SESSION['location'],
            $_SESSION['cabDoorsWindowsPU'],
            $_SESSION['bodyDoorsPU'],
            $_SESSION['oilLeakPU'],
            $_SESSION['greaseLeakPU'],
            $_SESSION['coolantLeakPU'],
            $_SESSION['fuelLeakPU'],
            $_SESSION['gaugesWarningIndicatorsPU'],
            $_SESSION['windshieldWipersWashersPU'],
            $_SESSION['hornsPU'],
            $_SESSION['heaterDefrosterPU'],
            $_SESSION['mirrorsPU'],
            $_SESSION['steeringPU'],
            $_SESSION['lightsPU'],
            $_SESSION['reflectorsPU'],
            $_SESSION['suspensionPU'],
            $_SESSION['tiresPU'],
            $_SESSION['wheelsRimsLugsPU'],
            $_SESSION['batteryPU'],
            $_SESSION['bodyDoorsTU'],
            $_SESSION['tieDownsTU'],
            $_SESSION['lightsTU'],
            $_SESSION['reflectorsTU'],
            $_SESSION['suspensionTU'],
            $_SESSION['tiresTU'],
            $_SESSION['wheelsRimsLugsTU'],
            $_SESSION['brakesTU'],
            $_SESSION['landingGearTU'],
            $_SESSION['kingPinUpperPlateTU'],
            $_SESSION['fifthWheelDollyTU'],
            $_SESSION['otherCouplingDevicesTU'],
            $_SESSION['rearEndProtectionTU'],
            $_SESSION['otherTU'],
            $_SESSION['otherDescription'],
            $_SESSION['noDefects'],
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
            $_SESSION['repairsNeeded'],
            $$shopRemarks
        );
    }

    // Check if the form data from dir-p1.php has been submitted
    if (empty($_SESSION['truckTractorNo']) || empty($_SESSION['mileage']) || empty($_SESSION['truckTractorTrailerNo']) || empty($_SESSION['dollyNo']) || empty($_SESSION['dollyTrailerNo']) || empty($_SESSION['location']))
    {
        header('Location: dir-p1.php'); // Redirect to dir-p1.php if accessed in an invalid way
        exit();
    }
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

    <!-- START OF FINAL PAGE - 'Form Overview Details' section -->

    <form id="formP4" class="form-container-wide" method="post">
        <div class="form-section">
            <div class="info-reminder">
                <h1>Form Overview Details</h1>
                <!-- Display Form Page 1 Data -->
                <h2>1st Page</h2>
                <p><b>Truck/Tractor Number: </b><?php echo $_SESSION['truckTractorNo'] ?? 'N/A'; ?></p>
                <p><b>Mileage: </b><?php echo $_SESSION['mileage'] ?? 'N/A'; ?></p>
                <p><b>Trailer Number: </b><?php echo $_SESSION['truckTractorTrailerNo'] ?? 'N/A'; ?></p>
                <p><b>Dolly Number: </b><?php echo $_SESSION['dollyNo'] ?? 'N/A'; ?></p>
                <p><b>Dolly Trailer Number: </b><?php echo $_SESSION['dollyTrailerNo'] ?? 'N/A'; ?></p>
                <p><b>Location: </b><?php echo $_SESSION['location'] ?? 'N/A'; ?></p>

                <hr> <!-- Horizontal break -->

                <!-- Display Form Page 2 Data -->
                <h2>2nd Page</h2>
                <p><b>Cab/Doors/Windows (PU): </b><?php echo $_SESSION['cabDoorsWindowsPU'] ? 'Yes' : 'No'; ?></p>
                <p><b>Body/Doors (PU): </b><?php echo $_SESSION['bodyDoorsPU'] ? 'Yes' : 'No'; ?></p>
                <p><b>Oil Leak (PU): </b><?php echo $_SESSION['oilLeakPU'] ? 'Yes' : 'No'; ?></p>
                <p><b>Grease Leak (PU): </b><?php echo $_SESSION['greaseLeakPU'] ? 'Yes' : 'No'; ?></p>
                <p><b>Coolant Leak (PU): </b><?php echo $_SESSION['coolantLeakPU'] ? 'Yes' : 'No'; ?></p>
                <p><b>Fuel Leak (PU): </b><?php echo $_SESSION['fuelLeakPU'] ? 'Yes' : 'No'; ?></p>
                <p><b>Gauges/Warning Indicators (PU): </b><?php echo $_SESSION['gaugesWarningIndicatorsPU'] ? 'Yes' : 'No'; ?></p>
                <p><b>Windshield Wipers/Washers (PU): </b><?php echo $_SESSION['windshieldWipersWashersPU'] ? 'Yes' : 'No'; ?></p>
                <p><b>Horns (PU): </b><?php echo $_SESSION['hornsPU'] ? 'Yes' : 'No'; ?></p>
                <p><b>Heater/Defroster (PU): </b><?php echo $_SESSION['heaterDefrosterPU'] ? 'Yes' : 'No'; ?></p>
                <p><b>Mirrors (PU): </b><?php echo $_SESSION['mirrorsPU'] ? 'Yes' : 'No'; ?></p>
                <p><b>Steering (PU): </b><?php echo $_SESSION['steeringPU'] ? 'Yes' : 'No'; ?></p>
                <p><b>Lights (PU): </b><?php echo $_SESSION['lightsPU'] ? 'Yes' : 'No'; ?></p>
                <p><b>Reflectors (PU): </b><?php echo $_SESSION['reflectorsPU'] ? 'Yes' : 'No'; ?></p>
                <p><b>Suspension (PU): </b><?php echo $_SESSION['suspensionPU'] ? 'Yes' : 'No'; ?></p>
                <p><b>Tires (PU): </b><?php echo $_SESSION['tiresPU'] ? 'Yes' : 'No'; ?></p>
                <p><b>Wheels/Rims/Lugs (PU): </b><?php echo $_SESSION['wheelsRimsLugsPU'] ? 'Yes' : 'No'; ?></p>
                <p><b>Battery (PU): </b><?php echo $_SESSION['batteryPU'] ? 'Yes' : 'No'; ?></p>

                <hr> <!-- Horizontal break -->

                <!-- Display Form Page 3 Data -->
                <h2>3rd Page</h2>
                <p><b>Body/Doors (TU): </b><?php echo $_SESSION['bodyDoorsTU'] ? 'Yes' : 'No'; ?></p>
                <p><b>Tie Downs (TU): </b><?php echo $_SESSION['tieDownsTU'] ? 'Yes' : 'No'; ?></p>
                <p><b>Lights (TU): </b><?php echo $_SESSION['lightsTU'] ? 'Yes' : 'No'; ?></p>
                <p><b>Reflectors (TU): </b><?php echo $_SESSION['reflectorsTU'] ? 'Yes' : 'No'; ?></p>
                <p><b>Suspension (TU): </b><?php echo $_SESSION['suspensionTU'] ? 'Yes' : 'No'; ?></p>
                <p><b>Tires (TU): </b><?php echo $_SESSION['tiresTU'] ? 'Yes' : 'No'; ?></p>
                <p><b>Wheels/Rims/Lugs (TU): </b><?php echo $_SESSION['wheelsRimsLugsTU'] ? 'Yes' : 'No'; ?></p>
                <p><b>Brakes (TU): </b><?php echo $_SESSION['brakesTU'] ? 'Yes' : 'No'; ?></p>
                <p><b>Landing Gear (TU): </b><?php echo $_SESSION['landingGearTU'] ? 'Yes' : 'No'; ?></p>
                <p><b>King Pin Upper Plate (TU): </b><?php echo $_SESSION['kingPinUpperPlateTU'] ? 'Yes' : 'No'; ?></p>
                <p><b>Fifth Wheel Dolly (TU): </b><?php echo $_SESSION['fifthWheelDollyTU'] ? 'Yes' : 'No'; ?></p>
                <p><b>Other Coupling Devices (TU): </b><?php echo $_SESSION['otherCouplingDevicesTU'] ? 'Yes' : 'No'; ?></p>
                <p><b>Rear End Protection (TU): </b><?php echo $_SESSION['rearEndProtectionTU'] ? 'Yes' : 'No'; ?></p>
                <p><b>Other (TU): </b><?php echo $_SESSION['otherTU'] ? 'Yes' : 'No'; ?></p>
                <p><b>Other Description (TU): </b><?php echo $_SESSION['otherDescription'] ?? 'N/A'; ?></p>
                <p><b>No Defects: </b><?php echo $_SESSION['noDefects'] ? 'Yes' : 'No'; ?></p>

                <hr> <!-- Horizontal break -->

                <!-- Display Form Page 4 Data -->
                <h2>4th Page</h2>
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
                <p><b>Repairs Needed: </b><?php echo $_SESSION['repairsNeeded'] ? 'Yes' : 'No'; ?></p>
                <p><b>Shop Remarks: </b><?php echo $_SESSION['shopRemarks'] ?? 'N/A'; ?></p>
            </div>
        </div>

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