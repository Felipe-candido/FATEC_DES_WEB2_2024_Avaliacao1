<?php
// INICIO DA SESSÃO // 
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>cadastro finalizado</title>
        <style>
            body{
                background-color: rgba(255, 0, 0, 0.8);
            }
            h3, h4, p, a{
                color: white;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <!-- VARIAVEL QUE RECEBE O NOME DO ALUNO Q FOI CADASTRADO NO ARQUIVO DE MOTO OU CARRO -->
        <?php $aluno_cadastrado = $_GET["aluno"]; ?>
        
        <h3>SESSÃO FINALIZADA</h3>
        <h4>olá <?php echo $aluno_cadastrado?></h4>

        <p>
        <a href="logout" class="btn btn-danger">Sair da conta</a>
        <a href="Navegacao.php" class="btn btn-danger">Menu Inicial</a>
        </p>
    </body>
</html>