<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/headerStyle.css">
    <link rel="stylesheet" href="./css/defaultStyle.css">
    <link rel="stylesheet" href="./css/formStyle.css">
    <title>Document</title>
</head>
<body>

    <?php include('header.html'); ?>

        <form action="inscriptionHandler.php" method="post" >
        <table>
            <tr>
                <td>
                    <label for="name">Name: </label>
                    
                </td>
                <td>
                    <input type="text" name="name" id="name">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="lastName">Last Name:</label>
                </td>
                <td>
                    <input type="text" name="lastName" id="lastName">
                </td>
            </tr>
            <tr>
                <td>
                <label for="email">Email:</label>
                </td>
                <td>
                    <input type="email" name="emailAddress" id="emailAddress">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="telephone">Telephone Number:</label>
                </td>
                <td>
                    <input type="tel" name="telephoneNumber" id="telephoneNumber">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="selectedCourse">Course:</label>
                </td>
                <td>
                    <select name="selection" id="selection">

                    </select>
                </td>
            </tr>
            <tr id="lastRow">
                <td >
                    <input class="btn" type="submit" value="Inscript">
                </td>
                <td>
                    <input class="btn" type="reset" value="Clear">
                </td>
            </tr>
        </table>
        </form>
    
    <footer>

    </footer>
    
</body>
</html>