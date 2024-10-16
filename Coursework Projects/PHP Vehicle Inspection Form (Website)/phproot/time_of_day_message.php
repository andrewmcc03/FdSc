<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time of Day Message</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Header (linked) -->
	<?php include_once 'header.php'; ?>
	<!-- Navigation (linked) -->
	<?php include_once 'navigation.php'; ?>

    <?php
    date_default_timezone_set('Europe/London'); // Sets timezone

    $current_time = date('H:i:s');  // Gets current time
    $time_of_day = '';  // Initialises ToD variable

    // Checks if current time is between 5am and 12pm
    if ($current_time >= '05:00:00' && $current_time < '12:00:00')
    {
        $time_of_day = 'morning';   // Sets ToD to morning
    }
    // Checks if current time is between 12pm and 6pm
    elseif ($current_time >= '12:00:00'&& $current_time < '18:00:00')
    {
        $time_of_day = 'afternoon'; // Sets ToD to afternoon
    }
    // Else the current time is between 6pm and 5am
    else
    {
        $time_of_day = 'evening';   // Sets ToD to evening
    }
    ?>

    <h1>Good <?php echo $time_of_day; ?>!</h1>
    <p>This is a simple greeting based on the time of the day.</p>

    <!-- Footer (linked) -->
	<?php include_once 'footer.php'; ?>

</body>

</html>