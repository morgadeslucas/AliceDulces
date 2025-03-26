let mActual = new bootstrap.Modal(document.getElementById('staticBackdrop'));


function verpago(){
    let xhr = new XMLHttpRequest();

    xhr.open("GET","./php/selectpago.php",true);
    
    xhr.addEventListener('load',function(){
        // console.log(xhr.response);
        let parse = JSON.parse(xhr.response);
        let pago = document.getElementById('tabla_pago');
    
        pago.innerHTML='';
    
        parse.forEach(e => {
            pago.innerHTML+=`
                <tr>
                    <td class="text-center">${e.cliente_nombre}</td>
                    <td class="text-center">${e.cliente_correo}</td>
                    <td class="text-center">${e.fecha_pago}</td>
                    <td class="text-center">${e.monto}</td>
                    <td class="text-center">${e.estado}</td>
                    <td class="text-center">
                        <button type="button" onclick="confirmarpago('${e.id_pago}','${e.id_pedido}','${e.fecha_pago}','${e.monto}','${e.estado}')" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-solid fa-check"></i></button>  
                    </td>
                </tr>
            `
        });
    });
    
    xhr.send();
}

verpago();


function confirmarpago(id_pago,id_pedido,fecha_pago,monto,estado){
    console.log(id_pago,id_pedido,fecha_pago,monto,estado);
    document.getElementById('id_pago').value = id_pago;
    document.getElementById('id_pedido').value= id_pedido;
    document.getElementById('fecha_pago').value = fecha_pago;
    document.getElementById('monto').vaule = monto;
    document.getElementById('estado').value= estado;

    let formulario = document.getElementById('pagos');

    formulario.addEventListener('submit',function(e){
        e.preventDefault();

        let datos = new FormData(formulario);
        let xhr = new XMLHttpRequest();

        xhr.open("POST","./php/actualizarpago.php",true);
        xhr.onload = function(){
            console.log(xhr.response);
            if(xhr.status == 200){
                if(xhr.response == 1){
                    formulario.reset();
                    mActual.hide();
                    Swal.fire({
                        title: "EL pago del padido han sido efectuado ",
                        icon: "success",
                        draggable: true
                    });    
                    verpago();
                }else{
                    alert("Error al guardar");
                }
            }
        }

        xhr.send(datos);
    });
}