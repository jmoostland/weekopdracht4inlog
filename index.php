

<?php
//session_start();
//require 'verbindingMysql.php';


if (isset($_POST['hidden'])) {
    $inloggen = new mysqli('localhost', 'root', '', 'login');
    $username = $_POST['userName'];
    $password = $_POST['pSd'];
    $sql = "SELECT * FROM `loginsystem` WHERE `uname`='" . $username . "'AND `psd`='" . $password . "'";
    $result = $inloggen->query($sql);
    $num = mysqli_num_rows($result);

    if ($num == 1) {
        $extra = 'welcome.php';
        header("Location: $extra");
    } else {
        $extra1 = 'registreren.php';
        header("Location: $extra1");
    }
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Login System</title>

    </head>
    <body>

        <form action="index.php" method="POST">

            Username <br><input type="text" id= uName name="userName"><br>
            Password <br><input type="password" name="pSd"><br><br>
            <input type="hidden" name="hidden">
            <input type="submit" value="Login">   



        </form>  





    </body>
</html>
