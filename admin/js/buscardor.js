function buscar(buscar=''){
    let xhr = XMLHttpRequest();
    xhr.open("GET","./php/buscador.php",true);
    
    xhr.onload = function(){
        if(xhr.status == 200){
            let resp = JSON.parse(xhr.responseText);
        }
    }

    xhr.send();
}