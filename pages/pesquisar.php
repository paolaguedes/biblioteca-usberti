<?php

$pesquisar = $_POST['pesquisar'];

include("../connection.php");

$sql = "SELECT FROM livros WHERE isbn = $isbn";

$update = $conexao->query($sql);

if($delete == true){
    header('Location: listaLivros.php?delete=ok');
} else{
    header('Location: listaLivros.php?delete=Erro');
}

?>