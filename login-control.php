
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/error-message-style.css">
    <link rel="stylesheet" href="./css/login-style.css">
    <link rel="stylesheet" href="./css/headerStyle.css">
    <link rel="stylesheet" href="./css/footerStyle.css">

    <title>Login - Message</title>
</head>
<body>
<?php 
include('header.php');
include('connect.inc.php');


$connector = new Connect();

try
{
    $connector->make_connection();
    $conn = $connector->get_connection();
}
catch(Exception $e)
{
    
    include('server-error-message.php');
    include('footer.html');
    die();
}


if(null == $conn)
{

    include('server-error-message.php');
    include('footer.html');
    die();
}

$username = mysqli_real_escape_string($conn, $_POST['username'] );
$password = mysqli_real_escape_string($conn, $_POST['password']);

$password_hash = hash('sha256', $password);

$sql = "SELECT * FROM user WHERE username = '$username'; ";
$result = $conn->execute_query($sql);

if($result->num_rows == 0){


    include('./server-error-message.php');
    include('footer.php');
    die();

}

$user = $result->fetch_assoc();

if($user['password'] == $password_hash){ 
    $_SESSION['username'] = $username; 
    header('Location: ./director.php');
}


include('./input-error-message.php');
include('footer.php');
die();


?>
    
</body>
</html>


