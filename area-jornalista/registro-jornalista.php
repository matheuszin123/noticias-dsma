<?php
if(isset($_POST["submit"]))
{
   /* print_r ($_POST["nome"]);
    print_r ($_POST["email"]);
    print_r ($_POST["senha"]);
    print_r ($_POST);
    */
    include_once ("config.php");

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $CPF = $_POST["CPF"];

    $result = mysqli_query($conexao, "INSERT INTO jornalista(nome,email,senha,CPF) 
    VALUES('$nome', '$email', '$senha', '$CPF')");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="css/registro-jornalista.css">
</head>
<body>
    <div class="container">
        <div class="form-image">
            <img src="#" alt=""> 
    </div>
    <div class="form">
        <form action="registro-jornalista.php" method="POST">
            <div class="form-header">
                <div class="title">
                    <h1>Jornalista - Cadastrar</h1>
                </div>
                <div class="login-button">
                    <button><a href="index.html">Entrar</a></button>
                </div>
            </div>

            <div class="input-group">
                <div class="input-box">
                    <label for="fsenha">nome</label>
                    <input id="nome" type="text" name="nome" placeholder="Digite seu primeiro nome" required>
                </div>

                <div class="input-box">
                    <label for="email">email</label>
                    <input id="email" type="email" name="email" placeholder="Digite seu email" required>
                </div>

                <div class="input-box">
                    <label for="senha">senha</label>
                    <input id="senha" type="senha" name="senha" placeholder="Digite sua senha" required>
                </div>
                <div class="input-box">
                    <label for="CPF">CPF</label>
                    <input id="CPF" type="CPF" name="CPF" placeholder="Digite seu CPF" required>
                </div>



            </div>
        
          
            <a href="../area-usuario/registro-cliente.php">Voltar para "Cadastro Cliente"</a>
            <div class="continue-button">
            <input name="submit" type="submit" value="Registrar">
            </div>
        </form>
    </div>
</body>
</html>