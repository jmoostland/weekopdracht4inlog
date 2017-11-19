
<?php
session_start();
include 'verbindingMysql.php';

if (isset($_REQUEST['userName'])) {
    $inloggen = new mysqli('localhost', 'root', '', 'login');
    $user_name = $_REQUEST ['userName'];
    $password = $_REQUEST ['pSd'];
    $sql = "INSERT INTO `loginsystem`(`uname`,`psd`) VALUES ('$user_name','$password')";
    $inloggen->query($sql);
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Registratie</title>

        <style>
            body {
                font-family:Georgia;
                background-image:url("lieveheersbeestje.jpg");
                display:block;
                width: 100%;
                height: 100%;
                position: fixed; left: 0; top: 0;
                background-repeat: no-repeat;
                background-size: cover;
                color: black;
            }

            form{
                padding: 150px;
            }

        </style>
    </head>
    <body>

        <form action="registreren.php" method="POST" href="welcome.php">
            <p><strong>Create an Account</strong></p><br>
            <br><input type="text" id= uName name="userName" placeholder="Username"><br>
            <br><input type="email" name="email" placeholder="Email"><br>
            <br><input type="text" name="pSd" placeholder="Password"><br><br>
            <input type="submit" value="Sign up"><br><br>

            <a> Already have an account?</a>
            <a href="index.php"><strong>Sign in</strong></a>
        </form>  





    </body>
</html>
