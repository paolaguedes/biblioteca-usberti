<?php
include("../connection.php");

$usu_codigo = intval($_GET['livro']);

$sql_code = "DELETE * FROM livros WHERE nomeLivro = '$usu_codigo'";
$sql_query = $mysqli->query($sql_code) or die($mysqli->error);

if($sql_query)
    echo "<script>location.href='inicial.php?p=inicial';</script>";
    else
    echo "<script> alert('Não foi possível excluir o livro!'); location.href='inicial.php?p=inicial';</script>" 
?>