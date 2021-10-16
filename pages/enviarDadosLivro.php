<?php

session_start();
include_once('../connection.php');

$isbn =$_GET['isbn'];

$nomeLivro = filter_input(INPUT_POST, 'nomeLivro', FILTER_SANITIZE_STRING);
$autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_STRING);
$edicao = filter_input(INPUT_POST, 'edicao', FILTER_SANITIZE_NUMBER_INT);
$categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING);
$editora = filter_input(INPUT_POST, 'editora', FILTER_SANITIZE_STRING);
$local = filter_input(INPUT_POST, 'local', FILTER_SANITIZE_STRING);
$pagina = filter_input(INPUT_POST, 'pagina', FILTER_SANITIZE_NUMBER_INT);

$result_livro ="UPDATE livros SET nomeLivro = '$nomeLivro',
                autor = '$autor', edicao = '$edicao', categoria = '$categoria',
                editora = '$editora', local = '$local', pagina = '$pagina'
                WHERE isbn = '$isbn'";
//$resultado_livro = mysqli_query($conexao, $result_livro);
mysqli_query($conexao,$result_livro);

//header("Location: listaLivros.php");