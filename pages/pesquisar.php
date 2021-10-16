<?php
    include("../connection.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Livros :: Biblioteca</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/livro.css">
</head>

<body>
    <main>
        <section class="container-list">
            <header class="container-list-header">
                    <?php
                    if (isset($_POST['delete'])) {
                        if ($_POST['delete'] == 'ok') {
                            echo 'Livro excluído com sucesso!';
                        }
                    }
                    ?>
            </header>
            <main>
                <section class="infos_livro">
                    <h1>Livro(s) encontrado(s)</h1>
                    <a class="btn-livros" href="listaLivros.php">VOLTAR LISTA DE LIVROS</a>

                        <?php

                            $pesquisar = $_POST['nome_livro'];
                            $result_livro = "SELECT * FROM livros WHERE nomeLivro LIKE '%$pesquisar%' LIMIT 5";
                            $resultado_livro = mysqli_query($conexao, $result_livro);

                            while($row_livros = mysqli_fetch_array($resultado_livro)) {
                                        echo '<div class="livro">';
                                        echo ' <p> Nome: ' . $row_livros['nomeLivro'] . ' </p> ';
                                        echo ' <p> Autor: ' . $row_livros['autor'] . ' </p> ';
                                        echo ' <p> Editora: ' . $row_livros['editora'] . ' </p>  ';
                                        echo ' <p> Edição: ' . $row_livros['edicao'] . ' </p> ';
                                        echo ' <p> Edição: ' .$row_livros['edicao'] . '</td>';
                                        echo ' <p> Categoria: ' . $row_livros['categoria'] . '</p>';
                                        echo ' <p> Local: ' . $row_livros['local'] . '</p>';
                                        echo ' <p> Página: ' . $row_livros['pagina'] . '</p>';
                                        echo ' <p> ISBN: ' . $row_livros['isbn'] . '</p>';

                                        echo ' <a href="editaLivro.php?isbn='. $row_livros['isbn'] .'">';
                                        echo ' <img class="" src="../img/icon-edit.png" width="30px">';
                                        echo ' </a>';
                                    

                                        echo ' <a href="delete.php?isbn=' . $row_livros['isbn'] . '">';
                                        echo ' <img src="../img/icon-trush.png" width="30px">  </a>';
                                        echo '</div>';
                            }
                                    ?>

                </section>
            </main>
        </section>
    </main>
    <script type="text/javascript" src="../main.js"></script>
</body>
</html>