<?php


//session_start();              //zonder error toevoegen werkt, poging tot controle gebruiksnaam werkt niet
//include 'verbindingMysql.php';
//if (isset($_REQUEST['userName'])) {
//    $inloggen = new mysqli('localhost', 'root', '', 'login');
//    $user_name = $_REQUEST ['userName'];
//    $password = $_REQUEST ['pSd'];
//    $sql = "INSERT INTO `loginsystem`(`uname`,`psd`) VALUES ('$user_name','$password')";
//    $inloggen->query($sql);
//}


session_start();
include 'verbindingMysql.php';
$inloggen = inlog();
$inloggen = new mysqli('localhost', 'root', '', 'login');
$user_name = $_SESSION['userName'];
$password = $_SESSION['pSd'];
$sql = "SELECT * from `loginsystem` WHERE `uname` = '$user_name'";
$result = $inloggen->query($sql);
$num = mysqli_num_rows($result);



if (mysqli_query($inloggen, "SELECT * from loginsystem WHERE uname = $user_name")){
    echo 'Username taken.';
}elseif (isset($_REQUEST['userName'])) {
    $inloggen = new mysqli('localhost', 'root', '', 'login');
    $user_name = $_REQUEST ['userName'];
    $password = $_REQUEST ['pSd'];
    $sql23 = "INSERT INTO `loginsystem`(`uname`,`psd`) VALUES ('$user_name','$password')";
    $inloggen->query($sql23);
}else{
    echo"gebruikersnaam wordt helaas niet gecontroleerd";
}

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Register</title>

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


        <script>
//            function controle($exists) {
//                $sql3 = "SELECT `uname` FROM `loginsystem` GROUP By `id` HAVING (`uname`) < 0";
//                return $exists;
//            }

        </script>
    </head>
    <body>

        <form action="registreren.php" method="POST" href="welcome.php">
            <p><strong>Create an Account</strong></p><br>
            <br><input type="text" id= uName name="userName" placeholder="Username"><br>
            <!--<br><input type="email" name="email" placeholder="Email"><br>-->
            <br><input type="text" name="pSd" placeholder="Password"><br><br>
            <input type="hidden" name="hidden">
            <input type="submit" value="Sign up"><br><br>

            <a> Already have an account?</a>
            <a href="index.php"><strong>Sign in</strong></a>
        </form>  

    </body>
</html>