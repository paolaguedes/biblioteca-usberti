<?php
session_start();
require("../connection.php");
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
                    <a href="cadastro.php">VOLTAR CADASTRO</a>
                </div>
                <form action="" method="POST">
                    <fieldset class="campo-pesquisar">
                        <img src="../img/lupa.svg" alt="lupa de pesquisa">
                        <input type="sumit" for="pesquisar" name="pesquisar" placeholder="Pesquisar na biblioteca">
                    </fieldset>
                </form>
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
                                <th> </th>
                                <th> </th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $conexao = new mysqli($host, $user, $password, $database);

                                if (isset($_POST['pesquisar'])) {
                                    $pesquisar = $_POST['pesquisar'];

                                $query = "SELECT * FROM livros WHERE nomeLivro LIKE '%$pesquisar%'";
                                $resultado = $conexao->query($query);
                                
                                    
                                if ($resultado !== false && $resultado->num_rows > 0) {
                                    while ($row = $resultado->fetch_assoc()) {


                                        echo ' <tr class="infos_livro">';
                                        echo ' <td> <p>' . $row['nomeLivro'] . ' </p> </td>';
                                        echo ' <td> <p>' . $row['autor'] . ' </p> </td>';
                                        echo ' <td> <p>' . $row['editora'] . ' </p> </td> ';
                                        echo ' <td> <p>' . $row['edicao'] . ' </p> </td> ';

                                        echo ' <td>';
                                        echo ' <a href="" >';
                                        echo ' <img class="" src="../img/icon-edit.png" width="30px">';
                                        echo ' </a>';
                                        //    Botão para abrir e fechar as info do livro
                                        echo ' <a href="javascript://" >';
                                        echo ' <img class="bt-view" src="../img/icon-view.png" width="30px">';
                                        echo ' </a>';

                                        echo ' <a href="delete.php?isbn=' . $row['isbn'] . '">';
                                        echo ' <img src="../img/icon-trush.png" width="30px">  </a> </td> </tr>';
                                        echo '<tr class="infos_adicionais">';

                                        echo '<td >';
                                        echo '<ul>';
                                        echo ' <li> - Edição: ' . $row['edicao'] . '</li>';
                                        echo '<li> - Categoria: ' . $row['categoria'] . '</li>';
                                        echo '<li> - Local: ' . $row['local'] . '</li>';
                                        echo '<li> - Página: ' . $row['pagina'] . '</li>';
                                        echo '<li> - ISBN: ' . $row['isbn'] . '<li>';
                                        echo '</ul> </td>';
                                        echo '</tr>';
                                    }
                                } 
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