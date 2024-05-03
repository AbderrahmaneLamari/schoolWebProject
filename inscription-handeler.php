<?php 

    $conn = new mysqli('localhost', 'root', 'root', 'formation_school');
    if($conn->connect_error){
        die( "Connection error: " . $conn->connect_errno);
    }

    $firstName = mysqli_real_escape_string($conn, $_POST['name']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $tel = mysqli_real_escape_string($conn, $_POST['tel']);
    $course = mysqli_real_escape_string($conn, $_POST['selectedCourse']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);


    $insertStatement = "INSERT INTO candidates (firstName, lastName, email, address, tel, course) VALUES ('$firstName', '$lastName',  '$email', '$address', '$tel', '$course');";

   if($conn->execute_query($insertStatement)){

    echo "You have inscripted successfully!";
   }else{
    echo $conn->errno;
   }
?>