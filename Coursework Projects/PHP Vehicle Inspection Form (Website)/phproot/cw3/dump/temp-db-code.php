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
            echo "<script>alert('Error: " . $sql . "\\n" . $conn_error . "');</script>";
        }

        // Close the database connection
        $conn -> close();
    }

    // Save data to session first (moved this part up)
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Check if session data already exists
        if (!isset($_SESSION['truckTractorNo']) || !isset($_SESSION['mileage']) || !isset($_SESSION['truckTractorTrailerNo']) || !isset($_SESSION['dollyNo']) || !isset($_SESSION['dollyTrailerNo']) || !isset($_SESSION['location'])) {
            // Save data to session
            $_SESSION['truckTractorNo'] = $truckTractorNo;
            $_SESSION['mileage'] = $mileage;
            $_SESSION['truckTractorTrailerNo'] = $truckTractorTrailerNo;
            $_SESSION['dollyNo'] = $dollyNo;
            $_SESSION['dollyTrailerNo'] = $dollyTrailerNo;
            $_SESSION['location'] = $location;
        }

        // Retrieve data from previous session
        $truckTractorNo = $_SESSION['truckTractorNo'];
        $mileage = $_SESSION['mileage'];
        $truckTractorTrailerNo = $_SESSION['truckTractorTrailerNo'];
        $dollyNo = $_SESSION['dollyNo'];
        $dollyTrailerNo = $_SESSION['dollyTrailerNo'];
        $location = $_SESSION['location'];
    }
?>