<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Director Page - All the Enrolled Students</title>
    <link rel="stylesheet" href="./css/director-style.css">
    <link rel="stylesheet" href="./css/headerStyle.css">
    <link rel="stylesheet" href="./css/footerStyle.css">
    <link rel="stylesheet" href="./css/error-message-style.css">

</head>
<body>
    


    <?php 
    
        include('connect.inc.php');
    
        $connector = new connect();
        if($connector->error) { die(''); }


        $sqlQry = "SELECT * FROM candidates;";

        $connector->make_connection(); // attempted to make connection to the database.
        $conn = $connector->get_connection();

        if($conn == null){

            include('header.php');
                // put the disply message
                echo "<div class='error-message'>
                         Server Error. Try again later.
                      </div>";
            include('footer.html');
            die();

        }
        
        try
        {
            $results = $conn->execute_query($sqlQry);
            
        }catch(Exception $e)
        {
            include('header.php');
                // put the disply message
                echo "<div class='error-message'>
                         Server Error. Try again later.
                      </div>";
            include('footer.html');
            die();
        }

        if($results->num_rows == 0){


            include('header.php');

            echo "<div class='error-message'>
            No registered students
            </div>";


            include('footer.html');
            die();
        }

        $row = $results->fetch_object();

        if(!$row)
        {
            include('header.php');
                
                echo "<div class='error-message'>
                        Failed to retrieve information. Try again later.
                </div>";

            include('footer.html');
            die();
        }

        include('header.php');

        echo "<div class='students-title'>Inscripted Students</div>";

        echo "<div class='student-container'>
                ";

        $i = 1;                
        while(null != $row)
        {
            $name = $row->firstName;
            $lastname = $row->lastName;
            $email = $row->email;
            $tel = $row->tel;
            $course = $row->course;
            $address = $row->address;

            echo "<div class='output-fields'>

                        <div class='number-block'>
                            $i
                        </div>
                        <div class='left-block'>

                            <div class='output-box'>
                                <label for='name'>First Name</label>
                                <span name='name' id='name' class='text-output'>$name</span>
                            </div>

                            <div class='output-box'>
                                <label for='lname'>Last Name</label>
                                <span name='lname' id='lname' class='text-output'>$lastname</span>
                            </div>
                            
                            <div class='output-box'>
                                <label for='email'>Email</label>
                                <span name='email' id='email' class='text-output'>$email</span>
                            </div>

                        </div>
                        
                        <div class='right-block'>
                            <div class='output-box'>
                                <label for='address'>Address</label>
                                <span name='address' id='address' class='text-output'>$address</span>
                            </div>
                            
                            <div class='output-box'>
                                <label for='tel'>Telephone</label>
                                <span name='tel' id='tel' class='text-output'>$tel</span>
                            </div>

                            <div class='output-box'>
                                <label for='course'>Telephone</label>
                                <span name='course' id='course' class='text-output'>$course</span>
                            </div>

                        </div>


                </div>";


            $row = $results->fetch_object();
            $i++;
        }

        echo "</div>";
    
        //
    ?>


<?php include('footer.html'); ?>

</body>
</html>