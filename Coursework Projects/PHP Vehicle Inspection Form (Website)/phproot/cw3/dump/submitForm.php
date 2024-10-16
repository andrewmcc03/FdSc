<?php
// Include the file containing your insertDataIntoDatabase function
include 'formSubmit.php';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"]))
{
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

    // Redirect back to home
    header("Location: index.php");
    exit();
}
?>