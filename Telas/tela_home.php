<?php
    session_start();
    //print_r($_SESSION);

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
    <title>AvaliaWeb/Home</title>
    <link rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="styles/home.css" />

  </head>

  <body>
    <header>
      <nav class="navbarcl">
        <a class="logo">AvaliaWeb</a>
        <div class="logado">
          <?php
             echo "Bem vindo $logado";    
          ?>
        </div>
        
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <ul class="nav-list">
          <li><a href="#">Início</a></li>
          <li><a href="dados_conta.php">Dados da Conta</a></li>
        </ul>
        <div class="linkes">
            <a href="../Processos/sair.php" class="linkes">Sair</a>
            <a href="confirma_Delet.html">Deletar</a>
        </div>
      </nav>
      </div>
    </header>
    <main></main>
    <script src="mobile-navbar.js"></script>
  </body>
</html>