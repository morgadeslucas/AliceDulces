let sesion = document.getElementById('formulario');

sesion.addEventListener('submit',(e)=>{
    
    e.preventDefault();
    let datos = new FormData(sesion);
    let xhr = new XMLHttpRequest();

    xhr.open("POST","./php/enviologin.php",true);

    xhr.addEventListener('load',function(){
        console.log(xhr.response);
        
        if(xhr.status == 200){
            if(xhr.response == 1){
                alert ("Registro realizado");
                sesion.reset();
                window.location.href="./login.php"
            }else{
                alert("Error al guardar");
            }
        }
    });

    xhr.send(datos);
});