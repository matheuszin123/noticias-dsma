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

    $result = mysqli_query($conexao, "INSERT INTO nomeeee(nome,email,senha) 
    VALUES('$nome', '$email', '$senha')");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="style/user-account-register.css">
</head>
<body>

    <div class="form">
        <form action="user-account-register.php" method="POST">
            <div class="form-header">
                <div class="title">
                    <h1>Cadastre-se</h1>
                </div>
                <div class="login-button">
                    <button><a href="login-user-screen.php">Login</a></button>
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


            </div>
            <input class="continue-button" name="submit" type="submit" value="Entrar">
        </form>
    </div>
</body>
</html>