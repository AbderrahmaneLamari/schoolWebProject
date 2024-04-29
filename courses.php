<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/coursePageStyle.css">
    <link rel="stylesheet" href="./css/mainPageStyle.css">
    <link rel="stylesheet" href="./css/headerStyle.css">
    <link rel="stylesheet" href="./css/defaultStyle.css">
    <title>Available Courses</title>
</head>
<body>

    <?php include('header.html'); ?>
    
    <div class="interface">

        <div class="left-panel panel">
            <a href="#">stuff</a>
            <a href="#">stuff</a>
            <a href="#">stuff</a>
            <a href="#">stuff</a>
        </div>
    
        <div class="main-panel panel">
            
        <?php 

// Directory containing JSON files
$directory = "./course-files";

// Scan the directory for JSON files
$files = array_diff(scandir($directory), array('..', '.'));

// Iterate through the files
foreach ($files as $file) {
    // Check if the file is a JSON file
    if (pathinfo($file, PATHINFO_EXTENSION) === 'json') {
        $jsonfile = file_get_contents("$directory/$file");

        // Check if the file was read successfully
        if ($jsonfile !== false) {
            $course = json_decode($jsonfile, true);

            // Check if JSON decoding was successful
            if ($course !== null) {
                $name = $course["name"];
                $length = $course["length"];
                $image = $course["image"];
                $date = $course["date"];
                $address = $course["address"];
                // Output HTML for the course
                ?>

                <div class='course-item'>
                    <img src='<?php echo $image; ?>' alt='course-image' class='course-img course-info'>
                    <div class="course-info"><a href=<?php echo '#'. $address ?> class='course-info'><?php echo $name; ?></a></div>
                    <div class='course-date course-info'><?php echo $date; ?></div>
                    <div class='course-length course-info'><?php echo $length . 'm'; ?></div>
                </div>
                <?php
            } else {
                // JSON decoding failed
                echo "Failed to decode JSON file: $file";
            }
        } else {
            // Failed to read file
            echo "Failed to read file: $file";
        }
    }
}
?>


        </div>
        
    </div>

    
</body>
</html>