<?php

require_once("config.php");

?>

<!-- <form action="validar_login.php" method="POST" autocomplete="on">
    <label for="usuario-email">Email: </label>
    <input type="email" name="usuario_email" id="usuario-email" required minlength="15" maxlength="60" autocomplete="email">


    <br>
    <label for="usario-senha">Senha: </label>
    <input type="password" name="usuario_senha" id="usuario-senha" required minlength="1" maxlength="16" autocomplete="current-password">

    <br>
    <input type="submit" value="Enviar">
</form> -->


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>tela de login</title>
    <link rel="stylesheet" href="style/login-user-screen.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="form-wrapper">
      <form action="validar_login.php" method="POST">
        <h1>Login</h1>
        <div class="input-box">
            <label for="usuario-email">Email: </label>
            <input type="email" name="usuario_email" id="usuario-email" required minlength="15" maxlength="60" autocomplete="email">
            <!-- <i class="bx bxs-user"></i> -->
        </div>

        <div class="input-box">
            <label for="usario-senha">Senha: </label>
            <input type="password" name="usuario_senha" id="usuario-senha" required minlength="1" maxlength="16" autocomplete="current-password">
            <!-- <i class="bx bxs-lock-alt"> </i> -->
        </div>

        <div class="Recuperar_senha">
          <label> <input type="checkbox"/>Remember me</label>
          <a href="#">Forgot password</a>
        </div>
        <button type="submit" class="btn">Login</button>

        <div class="register-link">
          <p>Dont have an account <a href="registro-cliente.php"> Register</a></p>
        </div>
        
      </form>
    </div>
  </body>
</html>










