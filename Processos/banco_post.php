                
<?php
    include('../Classes/User.php');
    if(isset($_POST['submit']))
    {
        $nomePost = $_POST['nome'];
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        // $img = $_FILES['img'];


        $instancia = new User();
        $instancia->Postar($nomePost,$titulo,$descricao);

        header('Location: ../Telas/tela_post.php');
    }
    
?>