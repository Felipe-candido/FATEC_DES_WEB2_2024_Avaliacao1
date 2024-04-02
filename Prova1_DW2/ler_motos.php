<?php

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}


if (!file_exists("motos.txt")) {
    echo "Ainda não há motos cadastradas."."<br>";
} 
else 
{
    $moto = fopen("motos.txt", "r");
    while (!feof($moto)){
        $linha = fgets($moto);
        echo $linha."<br>";
    }
    fclose($moto);
}


?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Motos</title>
    </head>
    <body>
        <p>
            <a href="sair.php" class="btn btn-danger">Sair da conta</a>
            <a href="Navegacao.php" class="btn btn-danger">Menu Inicial</a>
        </p>
    </body>
</html>