<?php
session_start();

//print_r($_POST);

if ( empty($_POST['user']) OR empty($_POST['senha'])) {
    
    /* CRIA UMA VARIÁVEL DE SESSÃO PASSANDO A MENSAGEM DE ERRO */
    $_SESSION['erro'] = "<div class='alert alert-danger' role='alert'>Dados obrigatórios não preenchidos!!</div>";
    
    /* REDIRECIONA A PÁGINA PARA O INDEX */
    echo "<meta http-equiv='refresh' content='0; URL=index.php'/>";

} else {
    
    /* CONEXÃO COM O BANCO DE DADOS */
    $pdo = new PDO('mysql:host=localhost;dbname=aulasphp','root','');

    /* PREPARA A PESQUISA DE DADOS */
    $sql = $pdo->prepare("SELECT * FROM `usuarios` WHERE email=? AND senha=?");

    /* EXECUTA O COMANDO NO BANCO COM OS DADOS PASSADOS */
    $sql->execute(array($_POST['user'], sha1($_POST['senha'])));

    /* ORGANIZA OS DADOS DE FORMA ASSOCIATIVA */
    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

    if (!empty($resultado)) {
        $_SESSION['usuario'] = $_POST['user'];
        echo "<meta http-equiv='refresh' content='0; URL=principal.php'/>";

    } else {
        /* MENSAGEM DE ERRO E REDIRECIONAMENTO */
        $_SESSION['erro'] = "<div class='alert alert-danger' role='alert'>Usuário ou senha não encontrados!</div>";
        echo "<meta http-equiv='refresh' content='0; URL=index.php'/>";
    }
}


?>