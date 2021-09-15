<?php
include_once('../connection.php');

if (isset($_POST['livros'])) {
    $livro['isbn'] = filter_input(INPUT_POST, 'isbn');
    $livro['nomeLivro'] = filter_input(INPUT_POST, 'nomeLivro');
    $livro['autor'] = filter_input(INPUT_POST, 'autor');
    $livro['edicao'] = filter_input(INPUT_POST, 'edicao');
    $livro['categoria'] = filter_input(INPUT_POST, 'categoria');
    $livro['editora'] = filter_input(INPUT_POST, 'editora');
    $livro['local'] = filter_input(INPUT_POST, 'local');
    $livro['pagina'] = filter_input(INPUT_POST, 'pagina');

}


function localizarLivro($livro) {

    $conn = conexao();
    $stmt = $conn->prepare("select * from livros where nomeLivro = ? %" . $livro ."%");
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


?>


