<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/coursePageStyle.css">
    <link rel="stylesheet" href="./css/mainPageStyle.css">
    <link rel="stylesheet" href="./css/headerStyle.css">
    <link rel="stylesheet" href="./css/defaultStyle.css">
    <link rel="stylesheet" href="./css/footerStyle.css">
    <title>Available Courses</title>
</head>
<body>

    <?php include('header.php'); ?>
    


    <div id="coursesTitle">Courses We Offer</div>
    <img id="backImg" src="./images/books background image 2.png" alt="books image">
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
            

                echo "<div class='course-item'>
                    <div class='course-info'><a href='$address' class='course-info'> $name</a></div>
                    <div class='course-date course-info'> $date</div>
                    <div class='course-length course-info'> $length wk</div>
                </div>";

            } else {
                // JSON decoding failed
                echo "Failed to decode JSON file: $file";
            }
            }
             else 
            {
            // Failed to read file
            echo "Failed to read file: $file";
            }
            }
        }
    ?>


</div>
        


<?php include('footer.html'); ?>
</body>
</html>