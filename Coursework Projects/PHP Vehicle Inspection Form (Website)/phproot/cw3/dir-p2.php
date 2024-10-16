<?php
    // Start session
    session_start();

    // Save data to session first (moved this part up)
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $truckTractorNo = filter_input(INPUT_POST, 'truckTractorNo', FILTER_SANITIZE_STRING);
        $mileage = filter_input(INPUT_POST, 'mileage', FILTER_SANITIZE_STRING);
        $truckTractorTrailerNo = filter_input(INPUT_POST, 'truckTractorTrailerNo', FILTER_SANITIZE_STRING);
        $dollyNo = filter_input(INPUT_POST, 'dollyNo', FILTER_SANITIZE_STRING);
        $dollyTrailerNo = filter_input(INPUT_POST, 'dollyTrailerNo', FILTER_SANITIZE_STRING);
        $location = filter_input(INPUT_POST, 'location', FILTER_SANITIZE_STRING);

        if (empty($truckTractorNo) || empty($mileage) || empty($truckTractorTrailerNo) || empty($dollyNo) || empty($dollyTrailerNo) || empty($location)) {
            die("Server: Please fill in all fields (Page 2).");
        }

        // Save data to session
        $_SESSION['truckTractorNo'] = $truckTractorNo;
        $_SESSION['mileage'] = $mileage;
        $_SESSION['truckTractorTrailerNo'] = $truckTractorTrailerNo;
        $_SESSION['dollyNo'] = $dollyNo;
        $_SESSION['dollyTrailerNo'] = $dollyTrailerNo;
        $_SESSION['location'] = $location;
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
    <title>Driver's Inspection Report (Part 2 of 4)</title>
    
    <!-- Favicon (tab icon) -->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="styles/styles.css">

    <!-- Validation (P2) Script -->
    <script src="scripts/validationP2.js"></script>
    <!-- Checkbox Script -->
    <script src="scripts/checkboxP2.js"></script>
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

    <form class="form-container-wide" action="dir-p3.php" method="post">
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
        
        <!-- START OF FORM PAGE 2 - 'Power Unit' section -->

        <div class="form-section">
            <h1>Power Unit</h1>
            <div class="form-section">
                <p><i>ATA/VMRS System Code Numbers for Shop Use Only</i></p>
                <p><i><strong>CHECK DEFECTS ONLY.</strong> Explain under REMARKS section (on following page).</i></p>
            </div>
            <div class="column-container">
                <!-- 1st column -->
                <div class="column">
                    <h2>General Condition</h2> <!-- Column Heading 1 -->
                    <div class="checkbox-containerP2">
                        <label for="cabDoorsWindowsPU">
                            <input type="checkbox" id="cabDoorsWindowsPU" name="cabDoorsWindowsPU" value="0" onchange="handleCheckboxChange(this)"><i class="greyscale">02 </i>Cab/Doors/Windows
                        </label>
                        <label for="bodyDoorsPU">
                            <input type="checkbox" id="bodyDoorsPU" name="bodyDoorsPU" value="0" onchange="handleCheckboxChange(this)"><i class="greyscale">02 </i>Body/Doors
                        </label>
                        <label for="oilLeakPU">
                            <input type="checkbox" id="oilLeakPU" name="oilLeakPU" value="0" onchange="handleCheckboxChange(this)">Oil Leak
                        </label>
                        <label for="greaseLeakPU">
                            <input type="checkbox" id="greaseLeakPU" name="greaseLeakPU" value="0" onchange="handleCheckboxChange(this)">Grease Leak
                        </label>
                        <label for="coolantLeakPU">
                            <input type="checkbox" id="coolantLeakPU" name="coolantLeakPU" value="0" onchange="handleCheckboxChange(this)"><i class="greyscale">42 </i>Coolant Leak
                        </label>
                        <label for="fuelLeakPU">
                            <input type="checkbox" id="fuelLeakPU" name="fuelLeakPU" value="0" onchange="handleCheckboxChange(this)"><i class="greyscale">44 </i>Fuel Leak
                        </label>
                    </div>
                </div>
                
                <!-- 2nd column -->
                <div class="column">
                    <h2>In-Cab</h2> <!-- Column Heading 2 -->
                    <div class="checkbox-containerP2">
                        <label for="gaugesWarningIndicatorsPU">
                            <input type="checkbox" id="gaugesWarningIndicatorsPU" name="gaugesWarningIndicatorsPU" value="0" onchange="handleCheckboxChange(this)"><i class="greyscale">03 </i>Gauges/Warning Indicators
                        </label>
                        <label for="windshieldWipersWashersPU">
                            <input type="checkbox" id="windshieldWipersWashersPU" name="windshieldWipersWashersPU" value="0" onchange="handleCheckboxChange(this)"><i class="greyscale">02 </i>Windshield Wipers/Washers
                        </label>
                        <label for="hornsPU">
                            <input type="checkbox" id="hornsPU" name="hornsPU" value="0" onchange="handleCheckboxChange(this)"><i class="greyscale">54 </i>Horns
                        </label>
                        <label for="heaterDefrosterPU">
                            <input type="checkbox" id="heaterDefrosterPU" name="heaterDefrosterPU" value="0" onchange="handleCheckboxChange(this)"><i class="greyscale">01 </i>Heater/Defroster
                        </label>
                        <label for="mirrorsPU">
                            <input type="checkbox" id="mirrorsPU" name="mirrorsPU" value="0" onchange="handleCheckboxChange(this)"><i class="greyscale">02 </i>Mirrors
                        </label>
                        <label for="steeringPU">
                            <input type="checkbox" id="steeringPU" name="steeringPU" value="0" onchange="handleCheckboxChange(this)"><i class="greyscale">15 </i>Steering
                        </label>
                    </div>
                </div>
                
                <!-- 3rd column -->
                <div class="column">
                    <h2>Exterior</h2> <!-- Column Heading 1 -->
                    <div class="checkbox-containerP2">
                        <label for="lightsPU">
                            <input type="checkbox" id="lightsPU" name="lightsPU" value="0" onchange="handleCheckboxChange(this)"><i class="greyscale">34 </i>Lights
                        </label>
                        <label for="reflectorsPU">
                            <input type="checkbox" id="reflectorsPU" name="reflectorsPU" value="0" onchange="handleCheckboxChange(this)"><i class="greyscale">34 </i>Reflectors
                        </label>
                        <label for="suspensionPU">
                            <input type="checkbox" id="suspensionPU" name="suspensionPU" value="0" onchange="handleCheckboxChange(this)"><i class="greyscale">16 </i>Suspension
                        </label>
                        <label for="tiresPU">
                            <input type="checkbox" id="tiresPU" name="tiresPU" value="0" onchange="handleCheckboxChange(this)"><i class="greyscale">17 </i>Tires
                        </label>
                        <label for="wheelsRimsLugsPU">
                            <input type="checkbox" id="wheelsRimsLugsPU" name="wheelsRimsLugsPU" value="0" onchange="handleCheckboxChange(this)"><i class="greyscale">18 </i>Wheels/Rims/Lugs
                        </label>
                        <label for="batteryPU">
                            <input type="checkbox" id="batteryPU" name="batteryPU" value="0" onchange="handleCheckboxChange(this)"><i class="greyscale">32 </i>Battery
                        </label>

                        <!-- No Defects -->
                        <label id="noDefectsLabel" for="noDefects">
                            <input type="checkbox" id="noDefects" name="noDefects" value="0" onchange="handleNoDefectsChange()">No Defects
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <input type="submit" value="Next">

        <p class="part"><i>Part 2 of 4</i></p> 
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