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

            $conecta = new Conexao();
            $sqlSelect = "SELECT * FROM postar";
            $result = $conecta->getConnection()->query($sqlSelect);

            $instancia = new User();
            $instancia->Post();


             while($dados = mysqli_fetch_assoc($result)){

                $nome = $dados['nome'];
                $titulo =$dados['titulo'];
                $descricao = $dados['descricao'];  
              }

            
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

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
          <li><a href="tela_post.php">Postar</a></li>
          <li><a href="dados_conta.php">Dados da Conta</a></li>
          <li><a href="../Processos/sair.php">Sair</a></li>
          <li><a href="confirma_Delet.html">Deletar</a></li>
        </ul>
      </nav>
      </div>
    </header>
    <main>

      <div class="card">
        <div class="card-header">
          <?php echo $nome?>
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p><?php echo $titulo?></p>
            <footer class="blockquote-footer"><?php echo $descricao?></footer>
          </blockquote>
        </div>
      </div>

    </main>
    <script src="../Processos/mobile-navbar.js"></script>
  </body>
</html>