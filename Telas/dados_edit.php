<?php
    include_once('../Classes/User.php');

        if(!empty($_GET['id']))
        {

            $id = $_GET['id'];

            $conecta = new Conexao();
            $sqlSelect = "SELECT * FROM usuarios WHERE id = $id";
            $result = $conecta->getConnection()->query($sqlSelect);

            $instancia = new User();
            $instancia->Editar($id);

            if($result->num_rows > 0){

                while($dados = mysqli_fetch_assoc($result)){

                    $nome = $dados['nome'];
                    $email =$dados['email'];
                    $senha = $dados['senha'];    
                    $telefone =$dados['telefone'];
                    $sexo = $dados['sexo'];
                    $data_nasc = $dados['data_nasc'];

                }

            }
            else{
                header('Location: dados_conta.php');
            }
            
        }
        else{
            header('Location: dados_conta.php');
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AvaliaWeb/Editar Dados</title>
    <link rel="stylesheet" href="styles/dados_edit.css">

</head>
<body>
    <div class="box">
        <form action="../Processos/saveEdit.php" method="POST">
                <legend><b>Cadastro</b></legend>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" autocomplete="off" value="<?php echo $nome;?>" required> 
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" autocomplete="off" value="<?php echo $email;?>" required> 
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="senha" id="senha" class="inputUser" value="<?php echo $senha;?>" required> 
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="telefone" id="telefone" class="inputUser" autocomplete="off" value="<?php echo $telefone;?>" required> 
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br>
                <div>
                    <p>Sexo:</p>
                    <input type="radio" id="feminino" name="sexo" value="feminino" <?php echo ($sexo == 'feminino') ? 'checked' : ''?>  required>
                    <label for="feminino">Feminino</label>
                    <input type="radio" id="masculino" name="sexo" value="masculino" <?php echo ($sexo == 'masculino') ? 'checked' : ''?> required>
                    <label for="masculino">Masculino</label>
                    <input type="radio" id="outro" name="sexo" value="outro" <?php echo ($sexo == 'outro') ? 'checked' : ''?> required>
                    <label for="outro">Outro</label>
                    <br><br>
                    <label for="data_nasc"><b>Data de Nascimento:</b></label>
                    <input type="date"  name="data_nasc" id="data_nasc" value="<?php echo $data_nasc;?>" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <p><a href="dados_conta.php" class="href">Voltar para seus dados</p></a>
                </div>
                <input type="hidden" name="id" value="<?php echo $id?>">
                <input type="submit" name="update" id="update">
        </form>
    </div>
</body>
</html>