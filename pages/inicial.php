<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicial :: Biblioteca</title>
    <link rel="stylesheet" href="../styles/style-inicial.css" />
</head>
<body>
    <?php
    include("../components/bg.php");
    ?>
    <header>
        <section class="container-inicial">
            <div class="content-inicial">
            <div class="logo-container">
                <img class="logo" src="../img/logo.png" alt="">
            </div>
            <div class="div-text">
                <h1>Biblioteca</h1>
                <a href="../index.php">Sair</a>
            </div>
        </div>
        </section>
    </header>
    <main>
        <div class="cards-container">
        <section class="section-cards">
            <a href="listaLivros.php">
                <div>
                    <p>Disponíveis</p>
                    <img src="../img/icon-books.png" alt="">
                </div>
            </a>
            <a href="cadastro.php">
                <div id="div-laptop">
                    <p>Cadastrar</p>
                    <img src="../img/icon-laptop.png" alt="">
                </div>
            </a>
        </section>
    </div>
    </main>
</body>

</html>