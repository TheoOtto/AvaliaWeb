<?php

    include('../Classes/User.php');
    session_start();

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        include_once('../Classes/Conexao.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

       $instancia = new User();
       $instancia->Logar($email,$senha);

    }
?>