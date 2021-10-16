<?php

    $isbn = $_GET['isbn'];

    include("../connection.php");

    $sql = "DELETE FROM livros WHERE isbn = $isbn";

    $delete = $conexao->query($sql);

    if($delete == true){
        header('Location: listaLivros.php?delete=ok');
    } else{
        header('Location: listaLivros.php?delete=Erro');
    }

?>