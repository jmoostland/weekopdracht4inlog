<?php
$hostname = 'localhost';
$databasename = 'login';
$username = 'root';
$password = '';

if (isset($_REQUEST['userName'])) {   //isset gebruiken om te kijken of een variabele bestaat en $_REQUEST om de data te verzamelen. $_SESSION om de data naar meerdere pagina's te krijgen.
    $inloggen = new mysqli('localhost', 'root', '', 'login');
    $username = $_REQUEST ['userName'];
    $password = $_REQUEST ['pSd'];
    $sql = "INSERT INTO `loginsystem`(`uname`,`psd`) VALUES ('$username','$password')";
    $inloggen->query($sql);
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Login System</title>
        <script>
            function checkdouble() {
                x = document.getElementById("uName").selectedIndex;
                if (x === x)
                    alert("Please choose a different username");
                }

        </script>

    </head>
    <body>

        <form action="index.php" method="POST">

            Username <br><input type="text" id= uName name="userName"><br>
            Password <br><input type="text" name="pSd"><br><br>
            <input type="submit" value="Login">   



        </form>  





    </body>
</html>
