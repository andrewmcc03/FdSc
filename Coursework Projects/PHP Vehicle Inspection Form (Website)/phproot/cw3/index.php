<?php
    define('MY_APP', true); // Access set to true
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JJ Keller Autos</title>

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

    <!-- Large Image Bar -->
    <div class="image-bar">
        <h1>Welcome to JJ Keller Autos</h1><br>
        <!-- Form button -->
        <a href="dir-p1.php" class="form-btn">Driver's Inspection Report</a>
    </div>

    <!-- Content container 1 -->
    <div class="content-container">
        <div class="content">
            <h2 class="content-heading">What is a Driver Vehicle Inspection Report (DVIR)?</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget urna ac nulla sodales rhoncus vitae ut mauris. Aenean pulvinar metus mi, consectetur rutrum nisi dictum a. Integer felis tellus, tempor nec sem id, egestas aliquam augue. Ut eu turpis eget lectus mattis eleifend vitae eu dolor.
            </p>
            <p>
                Ut est augue, sagittis sed fermentum eget, pharetra ut dui. Curabitur risus eros, iaculis quis magna at, mattis pellentesque tortor. In diam nulla, sollicitudin eget volutpat sed, dapibus nec sapien. Etiam consequat sem et nulla fringilla dictum. Cras risus urna, tincidunt sit amet lectus sed, eleifend vulputate ipsum. Donec eu libero at magna ornare accumsan in a elit. Aenean tincidunt orci augue, non tristique velit interdum in.
            </p>
        </div>
        <div class="image-container">
            <!-- Placeholder for image -->
            <img src="images/what.jpg" alt="What is a Driver Vehicle Inspection Report (DVIR)? [Image]">
        </div>
    </div>

    <!-- Content container 2 -->
    <div class="content-container">
        <div class="image-container">
            <!-- Placeholder for image -->
            <img src="images/how.jpg" alt="How do I complete a DVIR? [Image]">
        </div>
        <div class="content">
            <h2 class="content-heading">How do I complete a DVIR?</h2>
            <p>
                Maecenas dignissim erat quis fringilla placerat. Mauris ac lobortis felis. Vivamus luctus vel lacus quis faucibus. Sed lacus ligula, tristique sit amet aliquam ut, posuere sit amet dolor. Integer elit nunc, accumsan vel dolor eu, pellentesque elementum sem. Aliquam sit amet lectus sed ex pretium ullamcorper vel non lacus. Nam tristique pharetra tincidunt.
            </p>
            <p>
                Aliquam rhoncus luctus urna, eu pulvinar orci suscipit in. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse pellentesque ullamcorper mattis. Donec vulputate mi sed mauris pellentesque, et vestibulum diam sagittis. Suspendisse tellus tellus, volutpat ac venenatis a, ultricies nec dui. Interdum et malesuada fames ac ante ipsum primis in faucibus.
            </p>
        </div>
    </div>

    <!-- Content container 3 -->
    <div class="content-container">
        <div class="content">
            <h2 class="content-heading">Why is a DVIR necessary?</h2>
            <p>
                Nullam scelerisque massa ac ipsum aliquet efficitur. Aliquam gravida orci nulla, at fermentum mauris rutrum a. Vivamus sed est semper, varius mauris in, interdum mauris. Nunc egestas ex sed tellus lobortis, et euismod massa ullamcorper. Sed augue urna, pharetra quis dui sit amet, hendrerit viverra est. Nunc nec risus vulputate, ultricies ipsum sit amet, tincidunt massa.
            </p>
            <p>
                Aenean posuere laoreet maximus. Aliquam erat volutpat. Suspendisse potenti. Quisque sit amet sapien ipsum. Morbi at quam pulvinar, convallis lectus nec, commodo ante. Ut luctus luctus risus, sit amet aliquam velit. Aenean sem justo, semper ac libero nec, suscipit facilisis tellus. Pellentesque dictum quam in suscipit consequat.
            </p>
        </div>
        <div class="image-container">
            <!-- Placeholder for image -->
            <img src="images/why.jpg" alt="Why is a DVIR necessary? [Image]">
        </div>
    </div>

    <!-- End of content -->

    <!-- Footer (linked) -->
    <?php include_once 'footer.php'; ?>

</body>
</html>