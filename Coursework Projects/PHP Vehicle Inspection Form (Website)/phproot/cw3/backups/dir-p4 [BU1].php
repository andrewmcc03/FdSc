<?php
define('MY_APP', true); // Access set to true

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

//<!-- Header (linked) -->
include_once 'header.php';
//<!-- Navigation (linked) -->
include_once 'navigation.php';

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
        echo "<br>Record inserted successfully!<br><br>";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . $conn_error;
    }

    // Close the database connection
    $conn -> close();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    // Back-end validation for Page 3
    $bodyDoorsTU = filter_input(INPUT_POST, 'bodyDoorsTU', FILTER_SANITIZE_STRING);
    $tieDownsTU = filter_input(INPUT_POST, 'tieDownsTU', FILTER_SANITIZE_STRING);
    $lightsTU = filter_input(INPUT_POST, 'lightsTU', FILTER_SANITIZE_STRING);
    $reflectorsTU = filter_input(INPUT_POST, 'reflectorsTU', FILTER_SANITIZE_STRING);
    $suspensionTU = filter_input(INPUT_POST, 'suspensionTU', FILTER_SANITIZE_STRING);
    $tiresTU = filter_input(INPUT_POST, 'tiresTU', FILTER_SANITIZE_STRING);
    $wheelsRimsLugsTU = filter_input(INPUT_POST, 'wheelsRimsLugsTU', FILTER_SANITIZE_STRING);
    $brakesTU = filter_input(INPUT_POST, 'brakesTU', FILTER_SANITIZE_STRING);
    $landingGearTU = filter_input(INPUT_POST, 'landingGearTU', FILTER_SANITIZE_STRING);
    $kingPinUpperPlateTU = filter_input(INPUT_POST, 'kingPinUpperPlateTU', FILTER_SANITIZE_STRING);
    $fifthWheelDollyTU = filter_input(INPUT_POST, 'fifthWheelDollyTU', FILTER_SANITIZE_STRING);
    $otherCouplingDevicesTU = filter_input(INPUT_POST, 'otherCouplingDevicesTU', FILTER_SANITIZE_STRING);
    $rearEndProtectionTU = filter_input(INPUT_POST, 'rearEndProtectionTU', FILTER_SANITIZE_STRING);
    $otherTU = filter_input(INPUT_POST, 'otherTU', FILTER_SANITIZE_STRING);
    $noDefects = filter_input(INPUT_POST, 'noDefects', FILTER_SANITIZE_STRING);

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
    $_SESSION['noDefects'] = $noDefects;

    // Retrieve data from previous session
    $truckTractorNo = $_SESSION['truckTractorNo'];
    $mileage = $_SESSION['mileage'];
    $truckTractorTrailerNo = $_SESSION['truckTractorTrailerNo'];
    $dollyNo = $_SESSION['dollyNo'];
    $dollyTrailerNo = $_SESSION['dollyTrailerNo'];
    $location = $_SESSION['location'];

    $bodyDoorsTU = isset($_POST['bodyDoorsTU']) && $_POST['bodyDoorsTU'] == 1 ? 1 : 0;
    $tieDownsTU = isset($_POST['tieDownsTU']) && $_POST['tieDownsTU'] == 1 ? 1 : 0;
    $lightsTU = isset($_POST['lightsTU']) && $_POST['lightsTU'] == 1 ? 1 : 0;
    $reflectorsTU = isset($_POST['reflectorsTU']) && $_POST['reflectorsTU'] == 1 ? 1 : 0;
    $suspensionTU = isset($_POST['suspensionTU']) && $_POST['suspensionTU'] == 1 ? 1 : 0;
    $tiresTU = isset($_POST['tiresTU']) && $_POST['tiresTU'] == 1 ? 1 : 0;
    $wheelsRimsLugsTU = isset($_POST['wheelsRimsLugsTU']) && $_POST['wheelsRimsLugsTU'] == 1 ? 1 : 0;
    $brakesTU = isset($_POST['brakesTU']) && $_POST['brakesTU'] == 1 ? 1 : 0;
    $landingGearTU = isset($_POST['landingGearTU']) && $_POST['landingGearTU'] == 1 ? 1 : 0;
    $kingPinUpperPlateTU = isset($_POST['kingPinUpperPlateTU']) && $_POST['kingPinUpperPlateTU'] == 1 ? 1 : 0;
    $fifthWheelDollyTU = isset($_POST['fifthWheelDollyTU']) && $_POST['fifthWheelDollyTU'] == 1 ? 1 : 0;
    $otherCouplingDevicesTU = isset($_POST['otherCouplingDevicesTU']) && $_POST['otherCouplingDevicesTU'] == 1 ? 1 : 0;
    $rearEndProtectionTU = isset($_POST['rearEndProtectionTU']) && $_POST['rearEndProtectionTU'] == 1 ? 1 : 0;
    $otherTU = isset($_POST['otherTU']) && $_POST['otherTU'] == 1 ? 1 : 0;
    $noDefects = isset($_POST['noDefects']) && $_POST['noDefects'] == 1 ? 1 : 0;

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

// Connect to MySQL database

// Database credentials
$servername = "localhost";
$username = "cl47-app3";
$password = "bwsWH-Fme";
$dbname = "cl47-app3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection and handle errors
if ($conn -> connect_error)
{
    die("Connection failed: " . $conn -> connect_error);
}

// Retrieve data from the database
$sql = "SELECT * FROM tblDriversInspectionReports";
$result = $conn -> query($sql);

// Close the database connection
$conn -> close();

// If records are greater than 0 (not 0)
if ($result -> num_rows > 0)
{
    echo "<h2>List of  Driver's Inspection Reports can be found <a href='reports.php'>here</a>.</h2>";

    /* echo "<table border='1'>";
    echo "<tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Surname</th>
            <th>Date of Birth</th>
            <th>Newsletter 1</th>
            <th>Newsletter 2</th>
          </tr>";

    while ($row = $result -> fetch_assoc())
    {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['firstname'] . "</td>";
        echo "<td>" . $row['surname'] . "</td>";
        echo "<td>" . $row['dob'] . "</td>";
        echo "<td>" . ($row['newsletter1'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . ($row['newsletter2'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "</tr>";
    }

    echo "</table>"; */
}
else
{
    echo "No records found.";
}

//<!-- Footer (linked) -->
include_once 'footer.php';

?>