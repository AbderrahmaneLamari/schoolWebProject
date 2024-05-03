<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/headerStyle.css">
    <link rel="stylesheet" href="./css/defaultStyle.css">
    <link rel="stylesheet" href="./css/formStyle.css">
    <title>Inscription</title>
</head>
<body>

        <?php include('./header.html'); ?>

        <div class="inscription">
            <div class="title">
                Inscription
            </div>
            <form action="inscription-handeler.php" method="post">

                <div class="input-fields">
                <div class="input-box">
                    <label for="name">First Name</label>
                    <input type="text" name="name" id="firstname" class="text-input" placeholder="Enter your first name" required>
                </div>
                

                <div class="input-box">
                    <label for="lastName">Last Name</label>
                    <input type="text" name="lname" id="lastname" class="text-input" placeholder="Enter your last name" required>
                </div>
                

                <div class="input-box">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="text-input" placeholder="Enter your email" required>
                </div>
                
                <div class="input-box">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" class="text-input" placeholder="Enter your address" required>
                </div>
                

                <div class="input-box">
                    <label for="tel">Telephone</label>
                    <input type="tel" name="tel" id="tel" class="text-input" placeholder="Enter your phone number" required>
                </div>

                <div class="input-box">
                    <label for="selectedCourse">Course</label>
                    <select name="selectedCourse" id="selectedCourse" class="text-input" >
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

                                            // Output HTML for the course
                                            echo "<option value='$name'>$name</option>";
                                        }
                                        else 
                                        {
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
                    </select>
                </div>
                </div>
                
                <div class="submission-field">
                    <input type="submit" value="Inscript">
                </div>

                
            </form>
        </div>
        
    
    <footer>

    </footer>
    
</body>
</html>