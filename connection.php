<?php

    $host = "us-cdbr-east-04.cleardb.com";
    $user = "b092560b1a05c8";
    $password = "b2ed54e0";
    $database = "heroku_165c5fc426a3b16";

    $conexao = new mysqli($host, $user, $password, $database);

    // if($conexao->connect_errno){
    // echo "Falha na conexão";
    // } else {
    // echo "Conexão efetuada";
    // }
    
?>