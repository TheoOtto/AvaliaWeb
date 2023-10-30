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
    <title>AvaliaWeb/Home</title>
    <link rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="styles/post.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  </head>

  <body>
    <header>
      <nav class="navbarcl">
      <a class="logo" href="tela_home.php">AvaliaWeb</a>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <ul class="nav-list">
          <li><a href="tela_home.php">Início</a></li>
          <li><a href="dados_conta.php">Dados da Conta</a></li>
          <li><a href="../Processos/sair.php">Sair</a></li>
          <li><a href="confirma_Delet.html">Deletar</a></li>
        </ul>
      </nav>
      </div>
    </header>
    <main>
        <a href="tela_home.php">
          <button class="plus"> 
            <svg xmlns="http://www.w3.org/2000/svg" width="47" height="47" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
            </svg>
          </button>
        </a>
        <div class="box">
            <form action="../Processos/banco_post.php" method="post">
                <b>Nome</b>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" autocomplete="off" required> 
                </div>
                <br>
                <b>Produto</b>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="titulo" id="titulo" class="inputUser" autocomplete="off" required> 
                </div>
                <br><br>
                <b>Sobre o produto</b>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="descricao" id="descricao" class="inputUser" autocomplete="off" required> 
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </form>
        </div>

        
    </main>
    <script src="../Processos/mobile-navbar.js"></script>
  </body>
</html>