let inicio = document.getElementById('inicio');

inicio.addEventListener('submit',function(e){

    e.preventDefault();
    
    let xhr = new XMLHttpRequest();
    let data = new FormData(inicio);

    if(data.get('email')=="" || data.get('pwd')==""){
        alert("Tu papá, haz las cosas bien");
    }

    xhr.open("POST","./php/iniciarsesion.php",true);
    xhr.onload = function(){
        if(xhr.response == 1){
            window.location.href = "./admin/index.php"
            // alert('Usuario Existente');
        }else{
            console.log(xhr.response);
            
        }
        
    };

    xhr.send(data);
    
});