<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/cadastro.css">
</head>
<body>
    <main>
        <section>
        <div class="container-section">
            <div class="div-titulo">
                <h1>Ficha</h1>
            </div>
            <div class="content-input">
            <div id="coluna1">
                <label for="nomeLivro">Nome</label>
                <input type="text" name="nomeLivro" id="nomeLivro" required>
                <label for="autor">Autor</label>
                <input type="text" name="autor" id="autor" required>
                <label for="edicao">Edição</label>
                <input type="number" name="edicao" id="edicao" min="1" required>
                <select required>
                    <option>selecione</option>
                    <option value="0">Ficção</option>
                    <option value="1">Romance</option>
                    <option value="2">Literatura</option>
                    <option value="3">Obras literárias</option>
                    <option value="4">Educativo</option>
                </select>
            </div>
            <div id="coluna2">
                <label id="editora">Editora</label>
                <input type="text" name="editora" for="editora" required>
                <label id="local">Local</label>
                <input type="text" name="local" for="local" required>
                <label id="pagina">Páginas</label>
                <input type="number" name="pagina" for="pagina" min="1" required>                
                <label id="isbn">ISBN</label>
                <input type="text" name="isbn" for="isbn" required>
            </div>
        </div>
        <div class="botoes">
        <a href="#"><button >Cadastrar</button></a>
        <a href="../pages/inicial.php">Menu</a>
        </div>
    </div>
        </section>
    </main>
</body>
</html>