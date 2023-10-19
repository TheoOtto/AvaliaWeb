<?php

include('../Classes/User.php');

    if(isset($_POST['update'])){
        
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];    
        $telefone = $_POST['telefone'];
        $sexo = $_POST['sexo'];
        $data_nasc = $_POST['data_nasc'];
        
        $instancia = new User();
        $instancia->SaveEdit($id,$nome,$email,$senha,$telefone,$sexo,$data_nasc,$sqlUpdate,$result);
    }
    header('Location: ../Telas/confirm_update.html');

?>