<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>
<body>
    
    <main>
        <!-- !! USEM 'validar_login.php' no lugar do arquivo HTML dentro do atributo "action"!! -->
        <form id="form-login" action="./home/" method="post">
            <fieldset id="form-login__fieldset">
                <legend><h2>Admin - Tela de login</h2></legend>

                <div class="user-informations">
                <div class="input__usuario">
                    <label for="email_or_username">Usuário ou email</label>
                    <input name="email_or_username" id="email_or_username" type="text" required minlength="8" maxlength="60" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                </div>

                <div class="input__usuario">
                    <label for="password">Senha</label>
                    <input type="password" name="password" id="password" required min="8" max="16">
                </div>
                </div>

                <input class="btn-submit" type="submit" value="Entrar">

            </fieldset>
        </form>

    </main>


</body>
</html>