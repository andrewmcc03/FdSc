<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

//<!-- Header (linked) -->
include_once 'header.php';
//<!-- Navigation (linked) -->
include_once 'navigation.php';

// Function to connect to the database and insert the data
function insertDataIntoDatabase($firstname, $surname, $dob, $newsletter1, $newsletter2)
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
    $sql = "INSERT INTO tblDriversInspectionReports (firstname, surname, dob, newsletter1, newsletter2) VALUES ('$firstname', '$surname', '$dob', '$newsletter1', '$newsletter2')";

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
    $newsletter1 = filter_input(INPUT_POST, 'newsletter1', FILTER_SANITIZE_STRING);
    $newsletter2 = filter_input(INPUT_POST, 'newsletter2', FILTER_SANITIZE_STRING);

    $_SESSION['newsletter1'] = $newsletter1;
    $_SESSION['newsletter2'] = $newsletter2;

    // Retrieve data from previous session
    $firstname = $_SESSION['firstname'];
    $surname = $_SESSION['surname'];
    $dob = $_SESSION['dob'];

    $newsletter1 = isset($_POST['newsletter1']) && $_POST['newsletter1'] == 1 ? 1 : 0;
    $newsletter2 = isset($_POST['newsletter2']) && $_POST['newsletter2'] == 1 ? 1 : 0;

    // Call the function to insert data into the database
    insertDataIntoDatabase
    (
        $firstname,
        $surname,
        $dob,
        $newsletter1,
        $newsletter2
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


if ($result -> num_rows > 0)
{
    echo "<h2>List of users</h2>";

    echo "<table border='1'>";
    echo "<tr>
            <th>Inspection Report ID</th>
            <th>Truck Or Tractor No</th>
            <th>Mileage</th>
            <th>Truck Tractor Trailer No</th>
            <th>Dolly No</th>
            <th>Dolly Trailer No</th>
            <th>Location</th>
            <th>Cab Doors Windows PU</th>
            <th>Body Doors PU</th>
            <th>Oil Leak PU</th>
            <th>Grease Leak PU</th>
            <th>Coolant Leak PU</th>
            <th>Fuel Leak PU</th>
            <th>Gauges Warning Indicators PU</th>
            <th>Windshield Wipers Washers PU</th>
            <th>Horns PU</th>
            <th>Heater Defroster PU</th>
            <th>Mirrors PU</th>
            <th>Steering PU</th>
            <th>Lights PU</th>
            <th>Reflectors PU</th>
            <th>Suspension PU</th>
            <th>Tires PU</th>
            <th>Wheels Rims Lugs PU</th>
            <th>Battery PU</th>
            <th>Body Doors TU</th>
            <th>Tie Downs TU</th>
            <th>Lights TU</th>
            <th>Reflectors TU</th>
            <th>Suspension TU</th>
            <th>Tires TU</th>
            <th>Wheels Rims Lugs TU</th>
            <th>Brakes TU</th>
            <th>Landing Gear TU</th>
            <th>King Pin Upper Plate TU</th>
            <th>Fifth Wheel Dolly TU</th>
            <th>Other Coupling Devices TU</th>
            <th>Rear End Protection TU</th>
            <th>Other TU</th>
            <th>Other Description</th>
            <th>No Defects</th>
            <th>Remarks</th>
            <th>Reporting Driver</th>
            <th>Reporting Driver Date</th>
            <th>Reporting Driver Emp No</th>
            <th>Reviewing Driver</th>
            <th>Reviewing Driver Date</th>
            <th>Reviewing Driver Emp No</th>
            <th>Maintenance Date</th>
            <th>RO Numbers</th>
            <th>Certified By</th>
            <th>Maintenance Location</th>
            <th>Repairs Needed</th>
            <th>Shop Remarks</th>    
          </tr>";

    while ($row = $result -> fetch_assoc())
    {
        echo "<tr>";
        echo "<td>" . $row['InspectionReportID'] . "</td>";
        echo "<td>" . $row['TruckOrTractorNo'] . "</td>";
        echo "<td>" . $row['Mileage'] . "</td>";
        echo "<td>" . $row['TruckTractorTrailerNo'] . "</td>";
        echo "<td>" . $row['DollyNo'] . "</td>";
        echo "<td>" . $row['DollyTrailerNo'] . "</td>";
        echo "<td>" . $row['Location'] . "</td>";
        echo "<td>" . ($row['CabDoorsWindowsPU'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . ($row['BodyDoorsPU'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . ($row['OilLeakPU'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . ($row['GreaseLeakPU'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . ($row['CoolantLeakPU'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . ($row['FuelLeakPU'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . ($row['GaugesWarningIndicatorsPU'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . ($row['WindshieldWipersWashersPU'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . ($row['HornsPU'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . ($row['HeaterDefrosterPU'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . ($row['MirrorsPU'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . ($row['SteeringPU'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . ($row['LightsPU'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . ($row['ReflectorsPU'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . ($row['SuspensionPU'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . ($row['TiresPU'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . ($row['WheelsRimsLugsPU'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . ($row['BatteryPU'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . ($row['BodyDoorsTU'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . ($row['TieDownsTU'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . ($row['LightsTU'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . ($row['ReflectorsTU'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . ($row['SuspensionTU'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . ($row['TiresTU'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . ($row['WheelsRimsLugsTU'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . ($row['BrakesTU'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . ($row['LandingGearTU'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . ($row['KingPinUpperPlateTU'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . ($row['FifthWheelDollyTU'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . ($row['OtherCouplingDevicesTU'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . ($row['RearEndProtectionTU'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . ($row['OtherTU'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . $row['OtherDescription'] . "</td>";
        echo "<td>" . ($row['NoDefects'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . $row['Remarks'] . "</td>";
        echo "<td>" . $row['ReportingDriver'] . "</td>";
        echo "<td>" . $row['ReportingDriverDate'] . "</td>";
        echo "<td>" . $row['ReportingDriverEmpNo'] . "</td>";
        echo "<td>" . $row['ReviewingDriver'] . "</td>";
        echo "<td>" . $row['ReviewingDriverDate'] . "</td>";
        echo "<td>" . $row['ReviewingDriverEmpNo'] . "</td>";
        echo "<td>" . $row['MaintenanceDate'] . "</td>";
        echo "<td>" . $row['RONumbers'] . "</td>";
        echo "<td>" . $row['CertifiedBy'] . "</td>";
        echo "<td>" . $row['MaintenanceLocation'] . "</td>";
        echo "<td>" . ($row['RepairsNeeded'] == 1 ? 'Yes' : 'No') . "</td>";
        echo "<td>" . $row['ShopRemarks'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}
else
{
    echo "No records found.";
}

//<!-- Footer (linked) -->
include_once 'footer.php';

?>