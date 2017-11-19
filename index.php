

<?php

session_start();
//require 'verbindingMysql.php';


if (isset($_POST['hidden'])) {
    $inloggen = new mysqli('localhost', 'root', '', 'login');
    $user_name = $_POST['userName'];
    $password = $_POST['pSd'];
    $sql = "SELECT * FROM `loginsystem` WHERE `uname`='" . $user_name . "'AND `psd`='" . $password . "'";
    $result = $inloggen->query($sql);
    $num = mysqli_num_rows($result);

    if ($num == 1) {
        $sql2 = "SELECT * FROM `loginsystem` WHERE `uname`='" . $user_name . "'AND `psd`='" . $password . "'";
        $result1 = $inloggen->query($sql2);
        $fetch = mysqli_fetch_assoc($result2);
        
        $_SESSION['userName'] = $user_name;
        $_SESSION['id'] = $fetch['id'];
        header("Location: welcome.php");
    } else { //wanneer het password of username verkeerd is ga je naar registreren
        $extra1 = 'registreren.php';
        header("Location: $extra1");
    }
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Login System</title>
        <style>
            body {
                font-family:Georgia;
                background-image:url("Rode Vuurvlinder.JPG");
                display:block;
                width: 100%;
                height: 100%;
                position: fixed; left: 0; top: 0;
                background-repeat: no-repeat;
                background-size: cover;
                color: black;
            }
            form{
                margin-top: 250px;
                margin-left: 850px;
            }
            a{
                font-family:Georgia;
                color: black; 
            }

        </style>
    </head>
    <body>

        <form action="index.php" method="POST">

            <br><input type="text" id= uName name="userName" placeholder="Username"><br>
            <br><input type="password" name="pSd" placeholder="Password"><br><br>
            <input type="hidden" name="hidden">
            <input type="submit" value="Login"><br><br>
            <a>If you are a registered member please log in.<br> 
                If you are not registered yet please sign up.</a><br>

            <a href="registreren.php"><strong>Sign up here</strong></a>


        </form>  





    </body>
</html>
