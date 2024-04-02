<?php
 

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
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div>
        <h1>Bem vindo ao sistema de estacionamento Fatec Araras</h1>
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form1">
                <p>
                    <label>Login</label>
                    <input type="text" name="login" class="form-control">
                    <span class="help-block"></span>
                </p>    
                <p>
                    <label>senha</label>
                    <input type="password" name="senha" class="form-control">
                    <span class="help-block"></span>
                </p>
                <p>
                    <input type="submit" class="btn btn-primary" value="Acessar">
                </p>
            </div>
        </form>
        
    </div>    
</body>
</html>