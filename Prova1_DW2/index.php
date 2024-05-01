<?php
 
 // METODO PARA INICIAR UMA SESSÃO //
if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    if($_POST['login'] == 'portaria' and $_POST['senha'] == 'FatecAraras'){
        $_SESSION['loggedin'] = TRUE;
        header("location: navegacao.php");
    } else {
        $_SESSION['loggedin'] = FALSE;
    }
}

?>

 

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="estilo2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<body>
    <div class="col-6 center mx-auto">
        <h1>Estacionamento FATEC<h1>
    </div>
    

    <div class="col-6 mx-auto"> 
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            
            <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Login</label>
                    <div class="col-sm-3">
                        <input type="text" name="login" class="form-control">
                    </div>
                    <span class="help-block"></span>
            </div>

            <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Senha</label>
                    <div class="col-sm-3">
                        <input type="password" name="senha" class="form-control">
                    </div>
                    <span class="help-block"></span>
            </div>
            
            <div class="col-sm-2">
                <input type="submit" class="btn btn-primary" value="Acessar">
            </div>
        </form>
        
    </div>    
</body>
</html>