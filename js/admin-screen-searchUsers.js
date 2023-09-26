function searchFor(){

    let filter,input,table, tbody, trBody, txtValue, td;

    input = document.getElementById("table__search-input");
    filter = input.value.toUpperCase();

    table = document.getElementById("table__users");
    tbody = table.getElementsByTagName("tbody")[0];
    trBody = tbody.getElementsByTagName("tr");
    

    // rows > yours data
    let temp_filter_response = [];
    for(let i = 1; i < trBody.length; i++){
        
        td = trBody[i].getElementsByTagName("td");


        // pegar todos os conteúdos da célula informada acima
        for(let cell_row = 0; cell_row < td.length; cell_row++){
            txtValue = td[cell_row].innerText || td[cell_row].textContent;
            temp_filter_response.push(txtValue.toUpperCase().indexOf(filter)) // return response > -1 or === -1            
        }
        
        // validação dos valores

        if(!temp_filter_response.every( x = (y) => {return y === -1;})){
            trBody[i].style.display = "";
        }


        else{
            trBody[i].style.display = "none";
        }

        temp_filter_response = [];
    }
}




function openAddUserForms(){

    let formAdicionarUsuarioWrapper = document.querySelector(".adicionar-usuario_wrapper");
    let formAdicionarUsuario = document.querySelector(".adicionar-usuario");
    
    formAdicionarUsuarioWrapper.classList.remove("no-visibility");
   

    formAdicionarUsuarioWrapper.onclick = function(event){
        if (event.target == formAdicionarUsuarioWrapper) {
            formAdicionarUsuarioWrapper.classList.add("no-visibility");
          }
            
    }
 
}




function add_new_row() {
    
    
    
    let table, tbody, cargo, nome_completo, email, password, new_row;

    table = document.getElementById("table__users");
    tbody = document.getElementById("table__body");
    
    cargo = document.getElementById("input__cargo");
    let cargoValue, cargoText;
    cargo.addEventListener("change", function(){
        cargo.value;
        cargo.options[cargo.selectedIndex].text;
    })
    
    cargoText = cargo.options[cargo.selectedIndex].text;


    nome_completo = document.getElementById("input__nome-completo").value;
    email = document.getElementById("input__email").value;
    password = document.getElementById("input__senha").value;

    new_row = `

        <tr>
            <td>${cargoText}</td>
            <td>${nome_completo}</td>
            <td>${email}</td>
            <td class="table__action-buttons">
            <i class="
            fa-solid fa-pen-to-square fa-xl" style="color: #25e218;"></i>
            <i class="fa-solid fa-trash-can fa-xl" style="color: #f72008;"></i>
        </td>
        </tr>
    
    `;

    tbody.innerHTML += new_row;
}



