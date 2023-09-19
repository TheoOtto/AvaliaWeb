<?php
    session_start();

    include('../Classes/User.php');
    include_once('config.php');

    $logado = $_SESSION['email'];


    $instancia = new User();
    $instancia->Deletar($logado);

    unset($_SESSION['email']);
    unset($_SESSION['senha']);

    header('Location: ../Telas/aviso_delet.html');
?>