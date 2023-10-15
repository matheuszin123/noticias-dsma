
<?php

// require("config.php");
// require("url.php");




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel=stylesheet href="css/base.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="assets/fontawesome-free-6.4.2-web/css/all.css">
    
    <title>Document</title>
</head>
<body>

<!--    TODO: adicionar funções: REMOÇÃO e EDIÇÃO
        TODO: ADICIONAR validação da tabela
        TODO: [BAIXO] corrigir botão da pesquisa tabela ao clicar no 'x'

-->

    <header class="header">
            <div class="usuario">
                <img class="usuario__foto" src="img/default-profile.png" alt="usuario__foto">
                <div class="usuario__informacoes">
                    <div class="usuario__nome">John Doe</div>
                    <div class="usuario__cargo">Admin</div>
                </div>
            </div>
            <button class="btn btn-deslogar"><a href="../../area-admin/">Sair</a></button>

            

    </header>
    <nav class="nav">
        <ul class="nav__paginas">
            <li class="pagina active"><a class="redirecionar-pagina" href="index.html">Início</a></li>
            <!-- <li class="pagina"><a class="redirecionar-pagina" href="adicionar-usuario.html">Adicionar Usuário</a></li>
            <li class="pagina"><a class="redirecionar-pagina" href="editar.html">Excluir Usuário</a></li> -->
        </ul>
    </nav>


<main>
    
    <form>    
            <input 
            type="search"
            name=""
            id="table__search-input"
            onkeyup="searchFor()"
            placeholder="Pesquisar por...">  
            
            
            <table id="table__users">
            
                <tbody id="table__body">
                        <tr>
                            <th>Cargo</th>
                            <th>Nome Completo</th>
                            <th>Email</th>
                            <th>Ações</th>
                        </tr>

                        <tr>
                            <td>Usuário</td>
                            <td>Primo</td>
                            <td>matheusprimo123@gmail.com</td>
                            <td class="table__action-buttons">
                                <i class="
                                fa-solid fa-pen-to-square fa-xl" style="color: #25e218;" onclick="openEditEvent()"></i>
                                <i class="fa-solid fa-trash-can fa-xl" style="color: #f72008;" onclick="openDeleteEvent()"></i>
                            </td>
                        </tr>


                </tbody>

            
            

        
            </table>
    </form>

    
    <a class="btn-user-action btn-add-user" onclick="openAddUserForms()" href="#">
        Adicionar Usuário
    </a>

<div class="adicionar-usuario_wrapper no-visibility">

    <form class="adicionar-usuario" autocomplete="off">

        <h3 class="cadastro__cabeçalho">Adicionar usuário</h3>

        <div id="cadastro__cargo">
            <label for="input__cargo">Cargo:</label>
            <select id="input__cargo">
                <option disabled value="0"> --- Escolha um cargo--- </option>
                <option selected value="1">Usuário</option>
                <option value="2">Jornalista</option>
                <option value="3">Admin</option>
            </select>
        </div>

        <div id="cadastro__nome-completo">
            <label for="">Nome Completo:</label>
            <input type="text" id="input__nome-completo"></input>
        </div>

        <div id="cadastro__email">
            <label for="">Email:</label>
            <input type="email" name="" id="input__email">

        </div>

        <div id="cadastro__senha">
            <label for="">Senha:</label>
            <input type="password" id="input__senha"></input>
        </div>

        <div id="cadastro__repetir-senha">
            <label for="">Digite a senha novamente:</label>
            <input type="password" id="input__repetir-senha"></input>
        </div>

        <button 
        onclick="add_new_row()"
        class="btn-user-action btn-confirm-user-action"
        >
        Adicionar
        </button>
    </form>

    
</div>

</main>

<!-- ============ POPUP AREA ============ -->

<div id="popupEdit" class="editar-usuario_wrapper no-visibility">
    <form class="editar-usuario" method="post">

        <h3 class="cadastro__cabeçalho">Editar Usuário</h3>

        <hr>

        <div class="user-informations">
            <h4>Dados do Usuário(a)</h4>
            <ol>
                <li><b>id:</b> 1</li>
                <li><b>cargo:</b> Usuário</li>
                <li><b>nome:</b> MATHEUS DE SOUSA SANTOS</li>
                <li><b>email:</b> matheusdesousasantos12@gmail.com</li>
                <li><b>senha:</b> ISSONAOÉOBANCODEDADOOOOSS</li>
            </ol>
        </div>
        
        <hr>

        <div class="editar-usuario__input-container">
            <label class="editar-usuario__cargo" for="">Cargo</label>
            <select name="" id="">
                <option hidden value="0">--- Escolha um cargo abaixo ---</option>
                <option value="1">Usuário</option>
                <option value="2">Jornalista</option>
                <option value="3">Admin</option>
            </select>
        </div>

        <div class="editar-usuario__input-container">
            <label for="editar-usuario__nome">Usuário</label>
            <input id="editar-usuario__nome" type="text">
        </div>
        <div class="editar-usuario__input-container">
            <label class="editar-usuario__email" for="">Email</label>
            <input class="editar-usuario__email" type="text">
        </div>

        <div class="editar-usuario__input-container editar-usuario__senha">
            <label for="">Nova Senha</label>
            <input type="text">
        </div>

        <div class="btn-container editar-usuario__btn-container">
            <button class="btn-user-action btn-confirm-user-action" type="submit">Confirmar</button>
            <button class="btn-user-action btn-cancel-user-action"type="button" onclick="closePopUp()">Cancelar</button>
        </div>
    </form>
</div>

<div id="popupDelete" class="excluir-usuario_wrapper no-visibility">
    <form class="excluir-usuario" method="post">
        <p class="popupMessage_delete-user">Você deseja excluir a conta do Usuário "XYZ"? ???</p>
        <div class="btn-container">
            <button class="btn-user-action btn-confirm-user-action" type="submit">Confirmar</button>
            <button class="btn-user-action btn-cancel-user-action" type="button" onclick="closePopUp()">Cancelar</button>
        </div>
    </form>
</div>

<script src="js/admin-screen-searchUsers.js"></script>
<script src="js/popupActions.js"></script>


</body>
</html>