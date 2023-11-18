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
      <a href="tela_post.php">
        <button class="plus"> 
          <svg xmlns="http://www.w3.org/2000/svg" width="47" height="47" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
          </svg>
        </button>
      </a>
      <div class="box">
        <div class="img"></div>
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
          <hr>
          <div class="stars">
            <form action="../Processos/banco_rating.php" method="POST">
              <span class="star-rating star-5">
                <input type="radio" name="rating" id="1" value="1"><i></i>
                <input type="radio" name="rating" id="2" value="2"><i></i>
                <input type="radio" name="rating" id="3" value="3"><i></i>
                <input type="radio" name="rating" id="4" value="4"><i></i>
                <input type="radio" name="rating" id="5" value="5"><i></i>
              </span>
          </div>
        </div>
        <br>
        <div class="card">
          <div class="card-header">
            Comentários
          </div>
          <div class="card-body">
              <input type="text" name="coments" id="coments" class="inputUser" autocomplete="off">
              <input type="submit" name="submit" id="submit">
            </form>
          </div>
        </div>
      </div>
      <div class="box2">
        <div class="img"></div>
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
          <hr>
          <div class="stars">
            <form action="../Processos/banco_rating.php" method="POST">
              <span class="star-rating star-5">
                <input type="radio" name="rating" id="1" value="1"><i></i>
                <input type="radio" name="rating" id="2" value="2"><i></i>
                <input type="radio" name="rating" id="3" value="3"><i></i>
                <input type="radio" name="rating" id="4" value="4"><i></i>
                <input type="radio" name="rating" id="5" value="5"><i></i>
              </span>
          </div>
        </div>
        <br>
        <div class="card">
          <div class="card-header">
            Comentários
          </div>
          <div class="card-body">
              <input type="text" name="coments" id="coments" class="inputUser" autocomplete="off">
              <input type="submit" name="submit" id="submit">
            </form>
          </div>
        </div>
      </div>
      <a href="#" class="to-top">
        <i class="fas fa-chevron-up"></i>
        <svg xmlns="http://www.w3.org/2000/svg" width="50%" height="50" color="white  " fill="currentColor" class="bi bi-arrow-up-short" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"/>
        </svg>
      </a>

      <script src="../Processos/arrowup.js"></script>
    </main>
  </body>
</html>