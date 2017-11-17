

<?php
//session_start();

//require 'verbindingMysql.php';


if (isset($_POST['hidden'])){
    $inloggen = new mysqli('localhost', 'root', '', 'login');
    $username=$_POST['userName'];
    $password=$_POST['pSd'];
    $sql= "SELECT * FROM `loginsystem` WHERE `uname`='".$username."'AND `psd`='".$password."'";
    $result=$inloggen->query($sql);
    $num = mysqli_num_rows ($result);
    
    if($num == 1){
        echo "ingelogd"; 
        echo "<link method='POST' href='welcome.php'>";
    }else{
    echo "wrong";
}
}




//if (isset($_REQUEST['userName'])) {   //isset gebruiken om te kijken of een variabele bestaat en $_REQUEST om de data te verzamelen. $_SESSION om de data naar meerdere pagina's te krijgen.
//    $inloggen = new mysqli('localhost', 'root', '', 'login');
//    $username = $_REQUEST ['userName'];
//    $password = $_REQUEST ['pSd'];
//    $sql = "INSERT INTO `loginsystem`(`uname`,`psd`) VALUES ('$username','$password')";
//    $inloggen->query($sql);
//}


?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Login System</title>
<!--        <script>
            function checkdouble() {
                x = document.getElementById("uName").selectedIndex;
                if (x === x)
                    alert("Please choose a different username");
                }
        </script>-->

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
