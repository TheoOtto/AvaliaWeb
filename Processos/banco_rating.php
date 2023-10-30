<?php
    include('../Classes/User.php');
    if(isset($_POST['submit']))
    {
        $rating = $_POST['rating'];
        $coments = $_POST['coments'];

        $instancia = new User();
        $instancia->Rating($rating,$coments);

        header('Location: ../Telas/tela_home.php');
    }
    
?>