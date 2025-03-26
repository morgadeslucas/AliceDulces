let total = document.getElementById('total');
let cantidad = document.getElementById('cantidad');

let precio = document.getElementById('precio').value;

total.value=0;

cantidad.addEventListener('keyup',()=>{
    console.log(cantidad.value);
    let totalp = cantidad.value * precio;
    console.log(totalp);
    total.value = totalp;
});

let form = document.getElementById('login');

form.addEventListener('submit',(e)=>{
    e.preventDefault();
    let datos = new FormData(form);
    let xhr = new XMLHttpRequest();

    if(datos.get('total')<= 0 ){
        alert('no se puede realizar ese pedido');
        return
    }

    xhr.open("POST","./php/insertpedido.php",true);

    xhr.addEventListener('load',function(){
        console.log(xhr.response);
        
        if(xhr.status == 200){
            if(xhr.response == 1){
                alert ("Registro realizado");
                form.reset();
                window.location.href="./productos.php"
            }else{
                alert("Error al guardar");
            }
        }
    });

    xhr.send(datos);
})

