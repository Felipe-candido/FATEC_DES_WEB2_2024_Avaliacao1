<?php

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
    <meta name="viewport" content="width=B, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Navegação</h1>
    <div class="botoes">
        <p>
            <form action="cadastrocarro.php">
                <input type="submit" class="btn btn-light" value="Cadastrar carro">
            </form>
        </p>
        <p>
            <form action="cadastromoto.php">
                <input type="submit" class="btn btn-light" value="Cadastrar moto">
            </form>
        </p>
        <p>
            <form action="ler_carros.php">
                <input type="submit" class="btn btn-light" value="Ver carros">
            </form>
        </p>
        <p>
            <form action="ler_motos.php">
                <input type="submit" class="btn btn-light" value="Ver motos">
            </form>
        </p>
         
        <p>
            <form action="sair.php" method="post">
            <input type="submit" class="btn btn-primary" value="Sair">
            </form>
        </p> 
                
    </div>
</body>
</html>