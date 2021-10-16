<?php
session_start();
include_once('../connection.php');

$isbn =$_GET['isbn'];


/*
if(mysqli_affected_rows($conexao)){
    $_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
    header("Location: listaLivros.php");
} else{
    $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
    header("Location: listaLivros.php");
}*/
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar :: Biblioteca</title>
    <link rel="stylesheet" href="../styles/cadastro.css">
</head>
<body>
    <main>
        <section>
        <div class="container-section">
            <div class="div-titulo">
                <h1>Ficha</h1>
            </div>
            <form class="form-container" action="enviarDadosLivro.php?isbn=<?php echo $isbn ?>" method="POST">
            <div class="form-content">
                <?php

            $livro = "SELECT * from livros WHERE isbn = '$isbn'";
            $query = mysqli_query($conexao, $livro);
            $row_livro = mysqli_fetch_assoc($query);
            ?>
             <fieldset id="coluna1">
                <label for="nomeLivro">Nome</label>
                <input type="text" name="nomeLivro" id="nomeLivro" value="<?php echo $row_livro['nomeLivro'];?>" required>
                
                <label for="autor">Autor</label>
                <input type="text" name="autor" id="autor" value="<?php echo $row_livro['autor'];?>" required> 
                
                <label for="edicao">Edição</label>
                <input type="number" name="edicao" id="edicao" value="<?php echo $row_livro['edicao'];?>" min="1" required>
                
                <select name="categoria" value="<?php echo $row_livro['categoria'];?>" required>
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
                 <input type="text" name="editora" for="editora" value="<?php echo $row_livro['editora'];?>" required>
                  <label id="local">Local</label>
                   <input type="text" name="local" for="local" value="<?php echo $row_livro['local'];?>" required>
                  <label id="pagina">Páginas</label>
                  <input type="number" name="pagina" for="pagina" value="<?php echo $row_livro['pagina'];?>" min="1" required>                
                 <label id="isbn">ISBN</label>
                <input type="text" name="isbn" for="isbn" value="<?php echo $row_livro['isbn'];?>" maxlenght="" required>
            </fieldset>
        </div>

        <div class="botoes">
            <a href="#"><input type="submit" name="edit" value="EDITAR" ></a>
            <a href="#"><input type="reset" name="reset" value="RESETAR"></a>
            <a href="../pages/inicial.php">Menu</a>
        </div>

      </form>
        </div>
        </section>
    </main>
</body>
</html>