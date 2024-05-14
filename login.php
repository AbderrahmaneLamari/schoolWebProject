<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Adminstration</title>
    <link rel="stylesheet" href="./css/login-style.css">
    <link rel="stylesheet" href="./css/headerStyle.css">
    <link rel="stylesheet" href="./css/footerStyle.css">

</head>
<body>


<?php 

    include('header.php');  

    if(isset($_SESSION['username'])){
        header('Location: ./director.php');
    }
    
?>

    <div id="login-island">
        <div class="login-title">
            Login
        </div>
        <form action="./login-control.php" method="post">

            <div class="input-item">
                <label for="username">User Name</label>
                <input type="text" name="username" id="username" required>
            </div>

            <div class="input-item">
                <label for="username">Password</label>
                <input type="password" name="password" id="password" required>
            </div>

            <div class="input-item">
                <button type="submit">Login</button>
            </div>

        </form>
    </div>
    
    <?php include('footer.html');?>
</body>
</html>