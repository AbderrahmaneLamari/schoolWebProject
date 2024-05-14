
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
    include('header.php') ;
    include('./server-error-message.php');
    
    include('footer.html') ;
    die();
}

?>

    <?php include('header.php') ;?>

   <?php 

    try
    {
        $conn->execute_query($insertStatement);
        include('./registered-success-message.php');
    }
    catch(Exception $e)
    {
        include('./input-error-message.php');
    }
    finally
    {
        $conn->close();
    }
       

   ?>






    <?php include('footer.html'); ?>
</body>
</html>