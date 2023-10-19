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
        <a class="logo">AvaliaWeb</a>
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
        <h1>Poste Aqui</h1>
        <br>
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
                <!-- <label for="img" >Selecione uma imagem:</label>
                <input class="form-input" type="file" name="img" accept="image/*" id="img">
                <br> -->
                <input type="submit" name="submit" id="submit">
            </form>
        </div>

        
    </main>
    <script src="../Processos/mobile-navbar.js"></script>
  </body>
</html>