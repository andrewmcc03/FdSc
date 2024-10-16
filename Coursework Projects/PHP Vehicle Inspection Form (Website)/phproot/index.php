<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Andrew's PHP Webpage</title>
	<link rel="stylesheet" href="styles.css">
<head>

<body>
	<!-- Header (linked) -->
	<?php include_once 'header.php'; ?>
	<!-- Navigation (linked) -->
	<?php include_once 'navigation.php'; ?>

	<!-- Index page content here -->
	<p>This is a simple PHP webpage with a header, some content and footer for implementing PHP.</p>
	
	<?php echo "This is PHP echo text!"; ?>
	
	<?php 
	// Concatenate statement on multiple lines
	echo "<br><br>Current Date and Time: ".(new \DateTime()) -> format('Y-m-d H:i:s');
	?>
	
	<!-- Footer (linked) -->
	<?php include_once 'footer.php'; ?>

</body>

</html>