                
<?php
    include('../Classes/User.php');
    if($_POST['senha'] == $_POST['confirmsenha'])
    {
        if(isset($_POST['submit']))
        {

            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];    
            $telefone = $_POST['telefone'];
            $sexo = $_POST['sexo'];
            $data_nasc = $_POST['data_nasc'];
            $estado = $_POST['estado'];
            $cidade = $_POST['cidade'];

            $instancia = new User();
            $instancia->Cadastrar($nome,$email,$senha,$telefone,$sexo,$data_nasc,$estado,$cidade);

            header('Location: ../Telas/tela_login.html');
        }
    }
    else
    {
        header('Location: ../Telas/alerta.html');
    }


?>