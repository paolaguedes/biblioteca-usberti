<?php

if(isset($_POST['submit'])){
        include_once('../connection.php');

        $isbn =  $_POST['isbn'];
        $nomeLivro =  $_POST['nomeLivro'];
        $autor =  $_POST['autor'];
        $edicao =  $_POST['edicao'];
        $categoria =  $_POST['categoria'];
        $editora =  $_POST['editora'];
        $local =  $_POST['local'];
        $pagina =  $_POST['pagina'];
       

    $result = mysqli_query($conexao, "INSERT INTO livros (isbn,nomeLivro,autor,edicao,categoria,editora,local,pagina)
    VALUES ($isbn,'$nomeLivro','$autor',$edicao,'$categoria','$editora','$local',$pagina)");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro :: Biblioteca</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/cadastro.css">
    <link rel="shortcut icon" href="../img/logo.ico" type="image/x-icon">
</head>
<body>
    <main>
        <section>
        <div class="container-section">
            <div class="div-titulo">
                <h1>Ficha</h1>
            </div>
            <form class="form-container" action="cadastro.php" method="POST">
            <div class="form-content">
             <fieldset id="coluna1">
                <label for="nomeLivro">Nome</label>
                <input type="text" name="nomeLivro" id="nomeLivro" required>
                
                <label for="autor">Autor</label>
                <input type="text" name="autor" id="autor" required>
                
                <label for="edicao">Edição</label>
                <input type="number" name="edicao" id="edicao" min="1" required>
                
                <select name="categoria" required>
                    <option>selecione</option>
                     <option value="Ficção">Ficção</option>
                      <option value="Romance">Romance</option>
                     <option value="Literatura">Literatura</option>
                    <option value="Obras literárias">Obras literárias</option>
                   <option value="Educativo">Educativo</option>
                </select>
             </fieldset>

             <fieldset id="coluna2">
                <label id="editora">Editora</label>
                 <input type="text" name="editora" for="editora" required>
                  <label id="local">Local</label>
                   <input type="text" name="local" for="local" required>
                  <label id="pagina">Páginas</label>
                  <input type="number" name="pagina" for="pagina" min="1" required>                
                 <label id="isbn">ISBN (apenas números)</label>
                <input type="text" name="isbn" for="isbn" maxlenght="13" required>
            </fieldset>
        </div>

        <div class="botoes">
            <a href="#"><input type="submit" name="submit" value="CADASTRAR" ></a>
            <a href="#"><input type="reset" name="reset" value="RESETAR"></a>
            <a href="../pages/inicial.php">Menu</a>
        </div>

      </form>   
        </div>
        </section>
    </main>
</body>
</html>