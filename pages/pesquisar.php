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
    <link rel="stylesheet" href="../styles/listaLivros.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>

<body>
    <main>
        <section class="container-list">
            <header class="container-list-header">
                <div class="titulo">
                    <?php
                    if (isset($_POST['delete'])) {
                        if ($_POST['delete'] == 'ok') {
                            echo 'Livro excluído com sucesso!';
                        }
                    }
                    ?>
                    <h1>Livros disponíveis</h1>
                    <a href="listaLivros.php">VOLTAR LISTA DE LIVROS</a>
                </div>
            </header>
            <main>
                <section>

                    <table id="table-id">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Autor</th>
                                <th>Editora</th>
                                <th>Edição</th>
                                <th colspan="3"> </th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php

                            $pesquisar = $_POST['nome_livro'];
                            $result_livro = "SELECT * FROM livros WHERE nomeLivro LIKE '%$pesquisar%' LIMIT 5";
                            $resultado_livro = mysqli_query($conexao, $result_livro);

                            while($row_livros = mysqli_fetch_array($resultado_livro)) {

                                        echo ' <tr class="infos_livro">';
                                        echo ' <td> <p>' . $row_livros['nomeLivro'] . ' </p> </td>';
                                        echo ' <td> <p>' . $row_livros['autor'] . ' </p> </td>';
                                        echo ' <td> <p>' . $row_livros['editora'] . ' </p> </td> ';
                                        echo ' <td> <p>' . $row_livros['edicao'] . ' </p> </td> ';

                                        echo ' <td>';
                                        echo ' <a href="editaLivro.php?isbn='. $row_livros['isbn'] .'">';
                                        echo ' <img class="" src="../img/icon-edit.png" width="30px">';
                                        echo ' </a>';
                                        
                                        //    Botão para abrir e fechar as info do livro
                                        echo ' <a href="javascript://" >';
                                        echo ' <img class="bt-view" src="../img/icon-view.png" width="30px">';
                                        echo ' </a>';

                                        echo ' <a href="delete.php?isbn=' . $row_livros['isbn'] . '">';
                                        echo ' <img src="../img/icon-trush.png" width="30px">  </a> </td> </tr>';
                                        echo ' <tr class="infos_adicionais">';

                                        echo ' <td >';
                                        echo ' <ul>';
                                        echo ' <li> - Edição: ' .$row_livros['edicao'] . '</li>';
                                        echo ' <li> - Categoria: ' . $row_livros['categoria'] . '</li>';
                                        echo ' <li> - Local: ' . $row_livros['local'] . '</li>';
                                        echo ' <li> - Página: ' . $row_livros['pagina'] . '</li>';
                                        echo ' <li> - ISBN: ' . $row_livros['isbn'] . '<li>';
                                        echo ' </ul> </td>';
                                        echo ' </tr>';
                            }
                                    ?>
                        </tbody>
                    </table>
                </section>
            </main>
        </section>
    </main>
    <script type="text/javascript" src="../main.js"></script>
</body>
</html>