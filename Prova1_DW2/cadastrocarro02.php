<?php

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}


if(isset($_POST["nome"]) && !empty($_POST["nome"]) && isset($_POST["ra"]) && !empty($_POST["ra"]) && isset($_POST["placa"]) && !empty($_POST["placa"]))
{

    if(!file_exists("carros.txt")){
        $cadastros = fopen("carros.txt", "a");
    } else{
        $cadastros = fopen("carros.txt", "a");
    }
    
    fwrite($cadastros, $_POST["nome"]." | ".$_POST["ra"]." | ".$_POST["placa"]."\n");
    fwrite($cadastros, "==========================================="."\n");
    fflush($cadastros);
    fclose($cadastros);
    
} 
else 
{
    echo(" AVISO: Ainda faltam informações.");
    echo(" ||  CADASTRO NÃO REALIZADO");
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
        <h3>SESSÃO FINALIZADA</h3>
        <h4>olá <?php printf ("$_POST[nome]")?></h4>

        <p>
        <a href="sair.php" class="btn btn-danger">Sair da conta</a>
        <a href="Navegacao.php" class="btn btn-danger">Menu Inicial</a>
        </p>
    </body>
</html>"

