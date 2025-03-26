function verpedido(){
    let xhr = new XMLHttpRequest();

    xhr.open("GET","./php/selectpedido.php",true);
    xhr.addEventListener('load',function(){
        let pedido = JSON.parse(xhr.response);
        // console.log(pedido);

        let tabla = document.getElementById('pedido_tabla');
        tabla.innerHTML ='';

        pedido.forEach((pedido) => {

            tabla.innerHTML+=`
                <tr>
                    <td class="text-center">${pedido.nombre_cliente}</td>
                    <td class="text-center">${pedido.correo_cliente}</td>
                    <td class="text-center">${pedido.nombre_producto}</td>
                    <td class="text-center">${pedido.cantidad}</td>
                    <td class="text-center">${pedido.total}</td>
                    <td class="text-center estado" id="estado"><p>${pedido.estado}</p></td>
                    <td class="text-center">
                        <button  onclick="confirmarpedido(${pedido.id_pedido})" class="btn btn-success"><i class="fa-solid fa-check"></i></button>
                        <button  onclick="cancelarpedido(${pedido.id_pedido})" class="btn btn-danger"> <i class="fa-solid fa-xmark"></i></i></button>
                        <button  onclick="enviaremail(${pedido.id_pedido})" class="btn btn-primary"><i class="fa-solid fa-paper-plane"></i></button>
                    </td>
                </tr>
            `
        });
        
    });

    xhr.send();
}

verpedido();

function confirmarpedido(id_pedido){
    let dato = new FormData();
    dato.append('id_pedido',id_pedido);
    

    let xhr = new XMLHttpRequest();
    xhr.open("POST","./php/confirmapedido.php",true);

    xhr.addEventListener('load',()=>{
        console.log(xhr.response);  
        if(xhr.status == 200){
            // console.log(xhr.response);
                // alert("Pedido confirmado");
                Swal.fire({
                    title: "PEDIDO CONFIRMADO!",
                    icon: "success",
                    draggable: true
                });
                verpedido();
        }else{
            alert("Error al guardar");
        }
    });


    xhr.send(dato);

}


function cancelarpedido(id_pedido){
    let date = new FormData();
    date.append('id_pedido',id_pedido);

    let xhr = new XMLHttpRequest();
    xhr.open("POST","./php/cancelarpedido.php",true);

    xhr.addEventListener('load',()=>{
        console.log(xhr.response);  
        if(xhr.status == 200){
            // console.log(xhr.response);
                // alert("Pedido confirmado");
                Swal.fire({
                    title: "EL PEDIDO HA SIDO CANCELADO!",
                    icon: "success",
                    draggable: true
                });
                verpedido();
        }else{
            alert("Error al guardar");
        }
    });


    xhr.send(date);
}

function enviaremail(id_pedido){
    let datos = new FormData();
    datos.append('fk_pedido',id_pedido);

    let xhr = new XMLHttpRequest();
    xhr.open("POST","./correos/envio.php",true);

    xhr.onload = function(){
        if(xhr.status == 200){
            if(xhr.response == 1){
                alert("Correo Enviado");
            }else{
                alert("Error");
            }
        }
    }

    xhr.send(datos);
}