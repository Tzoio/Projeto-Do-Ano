<?php

//print_r($_POST);

if ($_POST['email'] == $_POST['emailconf'] AND $_POST['senha'] == $_POST['senhaconf']) {
   /* CONEXÃO COM O BANCO DE DADOS */
    $pdo = new PDO('mysql:host=localhost;dbname=aulasphp','root','');

    /* PREPARAÇÃO PARA REALIZAR UM COMANDO SQL NO BANCO DE DADOS */
    $sql = $pdo->prepare("INSERT INTO `usuarios` VALUES (null,?,?,?,?,?,?,?,?,?,?,?,?)");

    /* ENVIO DOS DADOS E GRAVAÇÃO NO BANCO DE DADOS*/
    $sql->execute(array($_POST['nome'],
                        $_POST['sobrenome'],
                        $_POST['end'],
                        $_POST['num'],
                        $_POST['cidade'],
                        $_POST['estado'],
                        $_POST['sexo'],
                        $_POST['rg'],
                        $_POST['cpf'],
                        $_POST['datanasc'],
                        $_POST['email'],
                        sha1($_POST['senha']),
));

//echo "Dados gravados corretamente!";
echo "<meta http-equiv='refresh' content='3; URL=index.php'/>";
session_start();
$_SESSION['erro'] = "<div class='alert alert-success' role='alert'> Cradastro Realizado </div>";


} else {
    session_start();
    $_SESSION['erro'] = "<div class='alert alert-success' role='alert'> Cadrasto incorreto </div>";
    echo "usuario e senha Errado macaco";
}


?>