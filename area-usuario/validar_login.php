<?php

    require_once("config.php");
    session_start();

    // informações do usuário
    $usuario_email = $_POST["usuario_email"];
    $usuario_senha = $_POST["usuario_senha"];
    $_SESSION["is_logged_in"] = 0;

    // Se input inserido:
    if(isset($_POST["usuario_email"]) && isset($_POST["usuario_senha"])){
        
        $user_informations = mysqli_query($conexao,"SELECT * FROM cliente WHERE Email= '".$usuario_email."' AND Senha= '".$usuario_senha."'");

        // $output = $_POST["login-response"];
        
        // Se existir registro:
        if(mysqli_num_rows($user_informations) > 0){
            $_SESSION["is_logged_in"] = 1;
            header("location: index.php");
        }
        else{
            $_SESSION["is_logged_in"] = 0;
            header("location: index.php");
        }
    
    
    }
    else{
        echo "resposta não reconhecida";
        echo "<a href=\"login.php\">Retornar à tela de login</a>";
    }
?>
