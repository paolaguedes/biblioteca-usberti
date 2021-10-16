<?php
session_start();
include("../connection.php");

                $adm = mysqli_real_escape_string($conexao, $_POST['administrador']);
                $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
            
                $sql = "SELECT administrador FROM login WHERE administrador = '$adm'";
                $resultado = mysqli_query($conexao, $sql);
            
                if(mysqli_num_rows($resultado) > 0) {
                    $sql = "SELECT * FROM login WHERE administrador = '$adm' AND senha = '$senha'";
                    $resultado = mysqli_query($conexao, $sql);
            
                    if(mysqli_num_rows($resultado) == 1) {
                        $dados = mysqli_fetch_assoc($resultado);
                        header('Location : initial.php');
                    } else {
                    echo "<p>Usuário inexistente.</p>";
                    header('Location : ../index.php');
                }
            
                } else {
                    echo "<p>Usuário inexistente.</p>";
                    header('Location : ../index.php');
                }

                header('Location : initial.php');
?>