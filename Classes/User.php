<?php

include('Conexao.php');

class User
{
    private $conn;

    function __construct()
    {
        $this->conn = new Conexao();
    }
   
    function Cadastrar($nome,$email,$senha,$telefone,$sexo,$data_nasc){
        $result = mysqli_query($this->conn->getConnection(), "INSERT INTO usuarios(nome,email,senha,telefone,sexo,data_nasc)
        VALUES ('$nome','$email','$senha','$telefone','$sexo', '$data_nasc')");
    }

    function Logar($email, $senha){
        $sql = "SELECT * FROM usuarios WHERE email =  '$email' and senha = '$senha'";
        $result = $this->conn->getConnection()->query($sql);

        session_start();

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: ../Telas/erro_login.html');
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: ../Telas/tela_home.php');
        }
        
    }

    function Postar($nomePost,$titulo, $descricao){
        // $sql = "INSERT INTO postar(nome,titulo, descricao)
        // VALUES ('$nomePost','$titulo','$descricao')";
        // $result = mysqli_query($this->conn->getConnection(), $sql);

        $result = mysqli_query($this->conn->getConnection(), "INSERT INTO postar(nome,titulo, descricao)
        VALUES ('$nomePost','$titulo','$descricao')");

    }

    function Post(){
        $sqlSelect = "SELECT * FROM postar";
        $result = mysqli_query($this->conn->getConnection(), $sqlSelect);
    
    }

    function Deletar($logado){
        $delet = mysqli_query($this->conn->getConnection(), "DELETE FROM usuarios WHERE email = '$logado'");
    }
    
    function Sair(){
        session_start();
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('location: ../Telas/tela_login.html');
    }

    function Editar($id){
        $conecta = new Conexao();
        $sqlSelect = "SELECT * FROM usuarios WHERE id = $id";
        $result = $conecta->getConnection()->query($sqlSelect);
    }

    function SaveEdit($id,$nome,$email,$senha,$telefone,$sexo,$data_nasc,$sqlUpdate){
        $conecta = new Conexao();
        $sqlUpdate = "UPDATE usuarios SET nome = '$nome', email = '$email', senha = '$senha', telefone = '$telefone',
        sexo = '$sexo', data_nasc = '$data_nasc' WHERE id = '$id'";
        $result = $conecta->getConnection()->query($sqlUpdate);
    }

    function Select($logado){
        $sql = "SELECT * FROM usuarios WHERE email = '$logado'";
        $result = $this->conn->getConnection()->query($sql);

        while($dados = mysqli_fetch_assoc($result))
        {
          echo "<try>";
          echo "<td>".$dados['id']."</td>";
          echo "<td>".$dados['nome']."</td>";
          echo "<td>".$dados['email']."</td>";
          echo "<td>".$dados['senha']."</td>";
          echo "<td>".$dados['telefone']."</td>";
          echo "<td>".$dados['sexo']."</td>";
          echo "<td>".$dados['data_nasc']."</td>";
          echo "<td>
                  <a class = 'btn btn-sm  btn-primary' href='../Telas/dados_edit.php?id=$dados[id]'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                      <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                      <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                    </svg>
                  </a>
                </td>";
          echo "</try>";
        }
    }

    function Rating($rating,$coments){
        $result = mysqli_query($this->conn->getConnection(), "INSERT INTO rating(rating,coments)
        VALUES ('$rating','$coments')");
    }
}