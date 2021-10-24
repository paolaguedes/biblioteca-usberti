<?php
session_start();
include("connection.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login :: Biblioteca</title>
    <link rel="stylesheet" href="style.css">
    <link rel='stylesheet' type='text/css' href='./styles/bg.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./img/logo.ico" type="image/x-icon">
</head>
<body>
    <section class="section-login">
    <div class="div-bg"></div>

        <div class="form-container">
            <form action="index.php" method="POST" class="form-login">
                <fieldset>
                    <legend>
            <img class="logo" src="./img/logo.png">
                    </legend>
                    <label for="txtname">Nome</label>
                    <input id="txtname" type="text" name="administrador" required>                    
                    <label for="txtpass">Senha</label>
                    <input id="txtpass" type="password"  minlength="4" name="senha" required>                    
                    <input id="btn" type="submit" name="btn-entrar" value="ENTRAR" class="btn">
                    <p id="erro" class="erro"></p>
                </fieldset>
            </form>
        </div>
    </section>
    </main>


    <script type='text/javascript' src='./js/validaLogin.js' defer></script>
</body>
</html>