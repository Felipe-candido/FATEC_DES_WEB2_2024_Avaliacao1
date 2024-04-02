<?php


session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}



if (!file_exists("carros.txt")) {
    echo "Ainda não há carros cadastrados."."<br>";
} 

else 
{
    $carro = fopen("carros.txt", "r");
    while (!feof($carro)){
        $linha = fgets($carro);
        echo $linha."<br>";
    }
    fclose($carro);
}
    
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Carros</title>
    </head>
    <body>
        <p>
            <a href="sair.php" class="btn btn-danger">Sair da conta</a>
            <a href="Navegacao.php" class="btn btn-danger">Menu Inicial</a>
        </p>
    </body>
</html>



