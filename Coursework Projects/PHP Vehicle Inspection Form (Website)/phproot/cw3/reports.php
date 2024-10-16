<?php
    // Start the session
    session_start();

    // Check if the user is not logged in
    if (!isset($_SESSION['username']))
    {
        header('Location: login.php');
        exit();
    }

    // Check access level
    $requiredAccessLevel = 1;
    if ($_SESSION['accessLevel'] != $requiredAccessLevel)
    {
        // Redirect to login.php with an error message
        header("Location: login.php?error=no_permission");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inspection Reports</title>

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

    <?php
        // Connect to the database
        $db_host = "localhost";
        $db_username = "cl47-app3";
        $db_password = "bwsWH-Fme";
        $db_name = "cl47-app3";

        // Create connecton the MySQL database
        $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

        // Check if connection is successful
        if (!$conn)
        {
            // If connection fails, terminate the script and send error message
            die("Connection failed: " . mysqli_connect_error());
        }

        // Retrieve data from the 'tblDriversInspectionReports' table in the database
        $sql = "SELECT * FROM tblDriversInspectionReports";
        $result = mysqli_query($conn, $sql);
    ?>

    <!-- START OF Inspection Reports Table -->
    <?php

    // Check if any records were returned from the 'tblDriversInspectionReports' table in the database
    if (mysqli_num_rows($result) > 0)
    {
        // Output data from the table if there are records
        
        // Create table header
        echo '<div class="reports-container">';
        // Output a heading for the list of reports
        echo '<h1>Inspection Reports</h1>';
        echo '<table class="reports-table">';
        echo
        "<tr>
            <th>Report ID</th>
            <th>Truck/Tractor Number</th>
            <th>Mileage</th>
            <th>Truck/Tractor Trailer Number</th>
            <th>Dolly Number</th>
            <th>Dolly Trailer Number</th>
            <th>Location</th>
            <th>Cab/Doors/Windows (PU)</th>
            <th>Body/Doors (PU)</th>
            <th>Oil Leak (PU)</th>
            <th>Grease Leak (PU)</th>
            <th>Coolant Leak (PU)</th>
            <th>Fuel Leak (PU)</th>
            <th>Gauges/Warning Indicators (PU)</th>
            <th>Windshield Wipers/Washers (PU)</th>
            <th>Horns (PU)</th>
            <th>Heater/Defroster (PU)</th>
            <th>Mirrors (PU)</th>
            <th>Steering (PU)</th>
            <th>Lights (PU)</th>
            <th>Reflectors (PU)</th>
            <th>Suspension (PU)</th>
            <th>Tires (PU)</th>
            <th>Wheels/Rims/Lugs (PU)</th>
            <th>Battery (PU)</th>
            <th>Body/Doors (TU)</th>
            <th>Tie Downs (TU)</th>
            <th>Lights (TU)</th>
            <th>Reflectors (TU)</th>
            <th>Suspension (TU)</th>
            <th>Tires (TU)</th>
            <th>Wheels/Rims/Lugs (TU)</th>
            <th>Brakes (TU)</th>
            <th>Landing Gear (TU)</th>
            <th>King Pin/Upper Plate (TU)</th>
            <th>Fifth Wheel/Dolly (TU)</th>
            <th>Other Coupling Devices (TU)</th>
            <th>Rear End Protection (TU)</th>
            <th>Other (TU)</th>
            <th>Other Description</th>
            <th>No Defects</th>
            <th>Remarks</th>
            <th>Reporting Driver</th>
            <th>Reporting Driver Date</th>
            <th>Reporting Driver Employee Number</th>
            <th>Reviewing Driver</th>
            <th>Reviewing Driver Date</th>
            <th>Reviewing Driver Employee Number</th>
            <th>Maintenance Date</th>
            <th>RO Numbers</th>
            <th>Certified By</th>
            <th>Maintenance Location</th>
            <th>Repairs Needed</th>
            <th>Shop Remarks</th>
        </tr>";

        // Loop through each record in the record set
        while ($row = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>" . $row["InspectionReportID"] . "</td>";
            echo "<td>" . $row["TruckOrTractorNo"] . "</td>";
            echo "<td>" . $row["Mileage"] . "</td>";
            echo "<td>" . $row["TruckTractorTrailerNo"] . "</td>";
            echo "<td>" . $row["DollyNo"] . "</td>";
            echo "<td>" . $row["DollyTrailerNo"] . "</td>";
            echo "<td>" . $row["Location"] . "</td>";
            echo "<td>" . ($row["CabDoorsWindowsPU"] == 1 ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row["BodyDoorsPU"] == 1 ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row["OilLeakPU"] == 1 ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row["GreaseLeakPU"] == 1 ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row["CoolantLeakPU"] == 1 ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row["FuelLeakPU"] == 1 ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row["GaugesWarningIndicatorsPU"] == 1 ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row["WindshieldWipersWashersPU"] == 1 ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row["HornsPU"] == 1 ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row["HeaterDefrosterPU"] == 1 ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row["MirrorsPU"] == 1 ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row["SteeringPU"] == 1 ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row["LightsPU"] == 1 ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row["ReflectorsPU"] == 1 ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row["SuspensionPU"] == 1 ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row["TiresPU"] == 1 ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row["WheelsRimsLugsPU"] == 1 ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row["BatteryPU"] == 1 ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row["BodyDoorsTU"] == 1 ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row["TieDownsTU"] == 1 ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row["LightsTU"] == 1 ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row["ReflectorsTU"] == 1 ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row["SuspensionTU"] == 1 ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row["TiresTU"] == 1 ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row["WheelsRimsLugsTU"] == 1 ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row["BrakesTU"] == 1 ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row["LandingGearTU"] == 1 ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row["KingPinUpperPlateTU"] == 1 ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row["FifthWheelDollyTU"] == 1 ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row["OtherCouplingDevicesTU"] == 1 ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row["RearEndProtectionTU"] == 1 ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row["OtherTU"] == 1 ? 'Yes' : 'No') . "</td>";
            echo "<td>" . $row["OtherDescription"] . "</td>";
            echo "<td>" . ($row["NoDefects"] == 1 ? 'Yes' : 'No') . "</td>";
            echo "<td>" . $row["Remarks"] . "</td>";
            echo "<td>" . $row["ReportingDriver"] . "</td>";
            echo "<td>" . $row["ReportingDriverDate"] . "</td>";
            echo "<td>" . $row["ReportingDriverEmpNo"] . "</td>";
            echo "<td>" . $row["ReviewingDriver"] . "</td>";
            echo "<td>" . $row["ReviewingDriverDate"] . "</td>";
            echo "<td>" . $row["ReviewingDriverEmpNo"] . "</td>";
            echo "<td>" . $row["MaintenanceDate"] . "</td>";
            echo "<td>" . $row["RONumbers"] . "</td>";
            echo "<td>" . $row["CertifiedBy"] . "</td>";
            echo "<td>" . $row["MaintenanceLocation"] . "</td>";
            echo "<td>" . ($row["RepairsNeeded"] == 1 ? 'Yes' : 'No') . "</td>";
            echo "<td>" . $row["ShopRemarks"] . "</td>";
            echo "</tr>";
        }
        // Close the table
        echo '</table>';
        echo '</div>';
    }
    else
    {
        // If no records are found, display message
        echo '<h1 style="text-align: center; margin: 50px;">No records found.</h1>';
    }

    ?>

    <!-- END OF Inspection Reports Table -->

    <!-- Footer (linked) -->
    <?php include_once 'footer.php'; ?>

</body>
</html>