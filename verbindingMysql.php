<?php
function inlog(){
    
$hostname = 'localhost';
$databasename = 'login';
$username = 'root';
$password = '';

$inloggen = new mysqli('localhost', 'root', '', 'login');
return $inloggen;
}
?>
