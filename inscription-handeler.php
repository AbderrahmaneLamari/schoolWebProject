
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="./css/inscription-handler-style.css">
    <link rel="stylesheet" href="./css/footerStyle.css">
    <link rel="stylesheet" href="./css/headerStyle.css">
</head>
<body>
<?php 

try
{
    $conn = new mysqli('localhost', 'root', 'root', 'formation_school');

    $firstName = mysqli_real_escape_string($conn, $_POST['name']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $tel = mysqli_real_escape_string($conn, $_POST['tel']);
    $course = mysqli_real_escape_string($conn, $_POST['selectedCourse']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);


    $insertStatement = "INSERT INTO candidates (firstName, lastName, email, address, tel, course) VALUES ('$firstName', '$lastName',  '$email', '$address', '$tel', '$course');";

}
catch(Exception $e)
{
    include('header.html') ;
    echo( "  <div class='connection-error'>
             Sorry, there was a server error, try again later.
             </div>" 
          );
    
    include('footer.html') ;
    die();
}

?>

    <?php include('header.html') ;?>

   <?php 

    try
    {
        $conn->execute_query($insertStatement);
        echo "<div class='connection-success'>
                You have inscripted successfully in $course.
             </div>";
    }
    catch(Exception $e)
    {
        echo "<div class='connection-error'>
        Sorry, there was an error inscripting you. Check the data you entered.
        </div>";
    }
    finally
    {
        $conn->close();
    }
       

   ?>






    <?php include('footer.html'); ?>
</body>
</html>