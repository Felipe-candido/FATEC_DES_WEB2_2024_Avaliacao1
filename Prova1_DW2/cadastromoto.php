<?php
// INICIO DA SESSÃO // 
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="estilo.css">
    <style>
        form{
            position: relative;
            width: 400px;
            color: white;
        }
    </style>
</head>
<body> 
    <!-- TELA DE CADASTRO DAS MOTOS -->
    <form id="cadastro_moto" action="cadastromoto.php" method="post" onsubmit="return validarForm(event)">
            <div class="form-group">
                <label>Nome completo</label>
                <input id="NOME" type="text" name="nome" class="form-control">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>RA</label>
                <input id="RA" type="text" name="ra" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Placa</label>
                <input id="PLACA" type="text" name="placa" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Enviar">
            </div>
        </form>
        <form action="navegacao.php" method="post">
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="voltar">
            </div>
    </form>

    <script>
        // FUNÇÃO PARA VALIDAR O PREENCHIMENTO E ENVIO DO FORMULÁRIO //
        function validarForm(event){
            var form = document.getElementById('cadastro_moto');
            var nome = document.getElementById('NOME').value;
            var ra = document.getElementById('RA').value;
            var placa = document.getElementById('PLACA').value;
            
            // VERIFICA SE HÁ ALGUM CAMPO VAZIO // 
            if(nome.trim() === '' || ra.trim() === '' || placa.trim() === ''){
                alert('Por favor, preencha todos os campos.');
                return false; // IMPEDE O ENVIO DO FORM // 
            }
            alert('Cadastro realizado!');
            return true; // PERMITE O ENVIO DO FORM
        }
    </script>
</body>
</html>


<?php
// CÓDIGO PARA CRIAR O ARQUIVO TXT E GRAVAR AS INFORMAÇÕES RELACIONADAS AS MOTOS //

if(isset($_POST["nome"]) && !empty($_POST["nome"]) && isset($_POST["ra"]) && !empty($_POST["ra"]) && isset($_POST["placa"]) && !empty($_POST["placa"]))
{

    if(!file_exists("motos.txt")){
        $cadastros = fopen("motos.txt", "a");
    } else{
        $cadastros = fopen("motos.txt", "a");
    }

    fwrite($cadastros, $_POST["nome"]." | ".$_POST["ra"]." | ".$_POST["placa"]."\n");
    fwrite($cadastros, "==========================================="."\n");
    fflush($cadastros);
    fclose($cadastros);
    $nome = $_POST["nome"];
    header("location: navegacao.php");
}

?>