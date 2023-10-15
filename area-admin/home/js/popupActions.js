function openEditEvent(){
    // adicionar conteúdo 'editar-usuario.php' => 'index.php'
    // excluir conteúdo 'editar-usuario' se clicado X ou fora

    let formWrapper = document.querySelector(".editar-usuario_wrapper");
    let btnCancel = formWrapper.querySelector(".btn-cancel-user-action");
    formWrapper.classList.remove("no-visibility");
    

    formWrapper.onclick = function(ev){
        if (ev.target == formWrapper || ev.target == btnCancel) {
            formWrapper.classList.add("no-visibility");
            }
            
    }
}





function openDeleteEvent(){

    let formDeleteUserWrapper = document.querySelector("#popupDelete");
    let btnCancel = formDeleteUserWrapper.querySelector(".btn-cancel-user-action");
    formDeleteUserWrapper.classList.remove("no-visibility");

    formDeleteUserWrapper.onclick = function(ev){
        if (ev.target == formDeleteUserWrapper || ev.target == btnCancel) {
            formDeleteUserWrapper.classList.add("no-visibility");
          }
            
    }

}


function openAddUserForms(){

    let formAdicionarUsuarioWrapper = document.querySelector(".adicionar-usuario_wrapper");
    let formAdicionarUsuario = document.querySelector(".adicionar-usuario");
    
    formAdicionarUsuarioWrapper.classList.remove("no-visibility");
   

    formAdicionarUsuarioWrapper.onclick = function(ev){
        if (ev.target == formAdicionarUsuarioWrapper) {
            formAdicionarUsuarioWrapper.classList.add("no-visibility");
          }
            
    }
 
}




function openPopUp(){

}

function closePopUp(){

}