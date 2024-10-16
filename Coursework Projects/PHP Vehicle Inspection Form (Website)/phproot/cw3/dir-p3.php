<?php
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
        $cabDoorsWindowsPU = isset($_POST['cabDoorsWindowsPU']) ? 1 : 0;
        $bodyDoorsPU = isset($_POST['bodyDoorsPU']) ? 1 : 0;
        $oilLeakPU = isset($_POST['oilLeakPU']) ? 1 : 0;
        $greaseLeakPU = isset($_POST['greaseLeakPU']) ? 1 : 0;
        $coolantLeakPU = isset($_POST['coolantLeakPU']) ? 1 : 0;
        $fuelLeakPU = isset($_POST['fuelLeakPU']) ? 1 : 0;
        $gaugesWarningIndicatorsPU = isset($_POST['gaugesWarningIndicatorsPU']) ? 1 : 0;
        $windshieldWipersWashersPU = isset($_POST['windshieldWipersWashersPU']) ? 1 : 0;
        $hornsPU = isset($_POST['hornsPU']) ? 1 : 0;
        $heaterDefrosterPU = isset($_POST['heaterDefrosterPU']) ? 1 : 0;
        $mirrorsPU = isset($_POST['mirrorsPU']) ? 1 : 0;
        $steeringPU = isset($_POST['steeringPU']) ? 1 : 0;
        $lightsPU = isset($_POST['lightsPU']) ? 1 : 0;
        $reflectorsPU = isset($_POST['reflectorsPU']) ? 1 : 0;
        $suspensionPU = isset($_POST['suspensionPU']) ? 1 : 0;
        $tiresPU = isset($_POST['tiresPU']) ? 1 : 0;
        $wheelsRimsLugsPU = isset($_POST['wheelsRimsLugsPU']) ? 1 : 0;
        $batteryPU = isset($_POST['batteryPU']) ? 1 : 0;

        // Save data to session
        $_SESSION['cabDoorsWindowsPU'] = $cabDoorsWindowsPU;
        $_SESSION['bodyDoorsPU'] = $bodyDoorsPU;
        $_SESSION['oilLeakPU'] = $oilLeakPU;
        $_SESSION['greaseLeakPU'] = $greaseLeakPU;
        $_SESSION['coolantLeakPU'] = $coolantLeakPU;
        $_SESSION['fuelLeakPU'] = $fuelLeakPU;
        $_SESSION['gaugesWarningIndicatorsPU'] = $gaugesWarningIndicatorsPU;
        $_SESSION['windshieldWipersWashersPU'] = $windshieldWipersWashersPU;
        $_SESSION['hornsPU'] = $hornsPU;
        $_SESSION['heaterDefrosterPU'] = $heaterDefrosterPU;
        $_SESSION['mirrorsPU'] = $mirrorsPU;
        $_SESSION['steeringPU'] = $steeringPU;
        $_SESSION['lightsPU'] = $lightsPU;
        $_SESSION['reflectorsPU'] = $reflectorsPU;
        $_SESSION['suspensionPU'] = $suspensionPU;
        $_SESSION['tiresPU'] = $tiresPU;
        $_SESSION['wheelsRimsLugsPU'] = $wheelsRimsLugsPU;
        $_SESSION['batteryPU'] = $batteryPU;

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
        $truckTractorNo = $_SESSION['truckTractorNo'];
        $mileage = $_SESSION['mileage'];
        $truckTractorTrailerNo = $_SESSION['truckTractorTrailerNo'];
        $dollyNo = $_SESSION['dollyNo'];
        $dollyTrailerNo = $_SESSION['dollyTrailerNo'];
        $location = $_SESSION['location'];
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
    <title>Driver's Inspection Report (Part 3 of 4)</title>
    
    <!-- Favicon (tab icon) -->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="styles/styles.css">

    <!-- Checkbox Script -->
    <script src="scripts/checkboxP3.js"></script>
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

    <form class="form-container-wide" action="dir-p4.php" method="post">
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
        
        <!-- START OF FORM PAGE 3 - 'Towed Unit(s)' section -->

        <div class="form-section">
            <h1>Towed Unit(s)</h1>
            <div class="form-section">
                <p><i>ATA/VMRS System Code Numbers for Shop Use Only</i></p>
                <p><i><strong>CHECK DEFECTS ONLY.</strong> Explain under REMARKS section.</i></p>
            </div>
            <div class="column-container">
                <!-- 1st column -->
                <div class="column">
                    <div class="checkbox-containerP3">
                        <label for="bodyDoorsTU">
                            <input type="checkbox" id="bodyDoorsTU" name="bodyDoorsTU" value="0" onchange="handleCheckboxChange(this)"><i class="greyscale">71 </i>Body/Doors
                        </label>
                        <label for="tieDownsTU">
                            <input type="checkbox" id="tieDownsTU" name="tieDownsTU" value="0" onchange="handleCheckboxChange(this)"><i class="greyscale">71 </i>Tie Downs
                        </label>
                        <label for="lightsTU">
                            <input type="checkbox" id="lightsTU" name="lightsTU" value="0" onchange="handleCheckboxChange(this)"><i class="greyscale">34 </i>Lights
                        </label>
                        <label for="reflectorsTU">
                            <input type="checkbox" id="reflectorsTU" name="reflectorsTU" value="0" onchange="handleCheckboxChange(this)"><i class="greyscale">34 </i>Reflectors
                        </label>
                    </div>
                </div>
                
                <!-- 2nd column -->
                <div class="column">
                    <div class="checkbox-containerP3">
                        <label for="suspensionTU">
                            <input type="checkbox" id="suspensionTU" name="suspensionTU" value="0" onchange="handleCheckboxChange(this)"><i class="greyscale">16 </i>Suspension
                        </label>
                        <label for="tiresTU">
                            <input type="checkbox" id="tiresTU" name="tiresTU" value="0" onchange="handleCheckboxChange(this)"><i class="greyscale">17 </i>Tires
                        </label>
                        <label for="wheelsRimsLugsTU">
                            <input type="checkbox" id="wheelsRimsLugsTU" name="wheelsRimsLugsTU" value="0" onchange="handleCheckboxChange(this)"><i class="greyscale">18 </i>Wheels/Rims/Lugs
                        </label>
                        <label for="brakesTU">
                            <input type="checkbox" id="brakesTU" name="brakesTU" value="0" onchange="handleCheckboxChange(this)"><i class="greyscale">13 </i>Brakes
                        </label>
                    </div>
                </div>
                
                <!-- 3rd column -->
                <div class="column">
                    <div class="checkbox-containerP3">
                        <label for="landingGearTU">
                            <input type="checkbox" id="landingGearTU" name="landingGearTU" value="0" onchange="handleCheckboxChange(this)"><i class="greyscale">77 </i>Landing Gear
                        </label>
                        <label for="kingPinUpperPlateTU">
                            <input type="checkbox" id="kingPinUpperPlateTU" name="kingPinUpperPlateTU" value="0" onchange="handleCheckboxChange(this)"><i class="greyscale">59 </i>King Pin Upper Plate
                        </label>
                        <label for="fifthWheelDollyTU">
                            <input type="checkbox" id="fifthWheelDollyTU" name="fifthWheelDollyTU" value="0" onchange="handleCheckboxChange(this)"><i class="greyscale">59 </i>Fifth Wheel/Dolly
                        </label>
                        <label for="otherCouplingDevicesTU">
                            <input type="checkbox" id="otherCouplingDevicesTU" name="otherCouplingDevicesTU" value="0" onchange="handleCheckboxChange(this)"><i class="greyscale">59 </i>Other Coupling Devices
                        </label>
                    </div>
                </div>

                <!-- 4th column -->
                <div class="column">
                    <div class="checkbox-containerP3">
                        <label for="rearEndProtectionTU">
                            <input type="checkbox" id="rearEndProtectionTU" name="rearEndProtectionTU" value="0" onchange="handleCheckboxChange(this)"><i class="greyscale">79 </i>Rear End Protection
                        </label>
                        <label for="otherTU">
                            <input type="checkbox" id="otherTU" name="otherTU" value="0" onchange="handleCheckboxChange(this); toggleOtherTextbox();">Other
                        </label>
                        <!-- Text area for 'Other' -->
                        <div id="otherTextboxContainer" style="display: none;">
                            <textarea class="fixed-size-textarea" id="otherDescription" name="otherDescription" rows="3" placeholder="Other defect(s)..."></textarea>
                        </div>

                        <!-- No Defects -->
                        <label id="noDefectsLabel" for="noDefects">
                            <input type="checkbox" id="noDefects" name="noDefects" value="0" onchange="handleNoDefectsChange()">No Defects
                        </label>
                    </div>
                </div>
            </div>
            
            <!-- Remarks -->
            <div class="form-section">
                <div class="remarks">
                    <label for="remarks">Remarks</p>
                        <textarea name="remarks" id="remarks" cols="30" rows="10"></textarea>
                    </label>
                </div>
            </div>
        </div>

        <input type="submit" value="Next">

        <p class="part"><i>Part 3 of 4</i></p> 
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