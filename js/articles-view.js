window.onscroll = function(){main()}


function main(){
    
    
    let output, sectionElements, indexItems = "";
    sectionElements = document.getElementsByTagName("section");
    
    

    // [loop] definir todas as posições relativas de seus 
    let text ="";
    output = document.getElementById("output");
    indexItems = document.getElementsByClassName("index-item");
    let firstSection = sectionElements[0];

    let sectionYPosition = []
    let sectionHeight = [];
    
    for(let i = 0; i < sectionElements.length; i++){
        
        indexItems[i];
        
        sectionElements[i];
        sectionYPosition.push(sectionElements[i].getBoundingClientRect().y);
        sectionHeight.push(sectionElements[i].getBoundingClientRect().height);


        // se Elemento estiver dentro de intervalo
        if(-sectionYPosition[i] > 0 && -sectionYPosition[i] <= sectionHeight[i]){
          indexItems[i].classList.add("active-section");
        }

        else if(sectionYPosition[0] > 0){
          indexItems[0].classList.add("active-section");
        }

        // se Elemento estiver fora do intervalo
        else{
          indexItems[i].classList.remove("active-section");
          // indexItems[0].classList.add("active-section");
        }

        // text += `${i}º Element Position: ${sectionYPosition[i]}, Height: ${sectionHeight[i]}  <br>`    
    }
    // output.innerHTML = `${text}`
        
}
