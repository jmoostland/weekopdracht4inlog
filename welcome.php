<?php
session_start();

echo "Welcome on this page " . $_SESSION['userName'];
echo '<br>';

?>
<html>
    <head>
        <style>
            body {
                font-family:Georgia;
                font-size: 30px;
                background-image:url("feest.jpg");
                display:block;
                width: 100%;
                height: 100%;
                position: fixed; left: 0; top: 0;
                background-repeat: no-repeat;
                background-size: cover;
                color: white;
                margin-top: 250px;
                margin-left: 450px;
            }
        </style>   

    </head>
    <body>

        <a href="logout.php">Log out</a>       
    </body>

</html>



