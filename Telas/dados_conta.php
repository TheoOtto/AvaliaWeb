<?php
session_start();  
include_once('../Classes/User.php');


    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: tela_login.html');

    }
    $logado = $_SESSION['email'];

    

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>AvaliaWeb/Dados da Conta</title>
    <link rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="styles/dados_conta.css" />

  </head>

  <body>
    <header>
      <nav class="navbarcl">
        <a class="logo">AvaliaWeb</a>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <ul class="nav-list">
          <li><a href="tela_home.php">Início</a></li>
          <li><a href="tela_post.php">Postar</a></li>
          <li><a href="../Processos/sair.php">Sair</a></li>
          <li><a href="confirma_Delet.html">Deletar</a></li>
        </ul>
      </nav>
      <div class="titulo">
        <p>Perfil</p>
      </div>
    </header>

    <div class="m-5">
      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Senha</th>
            <th scope="col">Telefone</th>
            <th scope="col">Sexo</th>
            <th scope="col">Data de Nascimento</th>
            <th scope="col">...</th>       
          </tr>
        </thead>
        <tbody>
          <?php
              $instancia = new User();
              $instancia->Select($logado);
          ?>
        </tbody>
      </table>
    </div>


    <script src="../Processos/mobile-navbar.js"></script>
  </body>
</html>