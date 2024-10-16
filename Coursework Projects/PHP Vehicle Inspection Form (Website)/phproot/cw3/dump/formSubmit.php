<?php
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
        echo "<script>alert('Record inserted successfully! (formSubmit.php)');</script>";
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
}
?>