<?php

$host = "localhost";
$user = "root";
$password = "root";
$port = "3306";
$database = "librarysystem";

$mysqli = new mysqli($host, $user, $password, $port, $database);

if($msqli->connect_errno)
    echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error; 

?>