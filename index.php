<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <style>
        body {
            background-image: url("Recurso/Logo.png");
            background-repeat: no-repeat;
            background-size: 50%; /* A imagem de fundo cobrirá todo o container */
            background-position: center -10.3%; 
            
        }
        img{
            
        }
</style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body class="bg-dark">
   
    <div class="container text-center mt-5 mb-5" id="imagemfundo">
        
        <img src="Recurso/logo.png" alt="" width="200px">
    </div>

    <div class="container text-center">
        <h5 class="text-dark">FRIENDSHIP</h5>
    </div>

    <div class="container text-center">
        <form action="login.php" method="post">
            <label class="form-label text-light" for="usuario">Usuário</label>
            <input class="form-control mb-2" type="email" name="user" id="usuario">
            
            <label class="form-label text-light" for="senha">Senha</label>
            <input class="form-control mb-5" type="password" name="senha" id="senha">

            <input class="btn btn-primary btn-lg" type="submit" value="Verificar">
            <a class="btn btn-danger btn-lg" href="cadastro.php">Cadastrar</a>

        </form>

        <?php
            /* VERIFICA SE EXISTE VALOR NA VAR ERRO E EXIBE NA TELA */
            if (!empty($_SESSION['erro'])) {
                echo $_SESSION['erro'];
                unset($_SESSION['erro']);
            }
        ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>