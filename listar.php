<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    echo "<script>alert('Usuário não logado!');</script>";
    echo "<meta http-equiv='refresh' content='0; URL=index.php'/>";
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>=Principal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
    <!-- CABEÇARIO DO SITE-->
    <nav class="navbar bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="Recursos/logo.png" alt="" width="50px"></a>
            <a class="btn btn-dark" href="logout.php">Sair</a>
        </div>
    </nav>

   

    <!--RODASPÉ DP SITE-->

    <footer class="footer py-3 bg-dark fixed-bottom">
        <div class="container text-center">
            <h2 class="mt-2">Lista de Usuários Cadastrados</h2>
        <table class="table table-hover mt-2">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Opções</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>

  <?php
      $pdo = new PDO('mysql:host=localhost;dbname=aulasphp','root','');

      /* PREPARAÇÃO PARA REALIZAR UM COMANDO SQL NO BANCO DE DADOS */
      $sql = $pdo->prepare("SELECT id, nome, email FROM 'usuarios'");
  
      /* ENVIO DOS DADOS E GRAVAÇÃO NO BANCO DE DADOS*/
      $sql->execute(array());
  



  
  
  ?>


</table>

           <p class="text-light">Todos os direitos reservados - 2023</p> 
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>