
let form  = document.getElementById('form');
let modal = new bootstrap.Modal(document.getElementById('staticBackdrop'));
let modalActua = new bootstrap.Modal(document.getElementById('ActualizarProduct'));


form.addEventListener('submit',function(e){
    
    e.preventDefault();

    let data = new FormData(form);
    let xhr = new XMLHttpRequest();
    console.log(data.get('nombre'));
    xhr.open("POST","./php/insertproduct.php",true);
    xhr.onload = function(){
        console.log(xhr.response);
        if(xhr.status == 200){
            // console.log(xhr.response);
            if(xhr.response == 1){
                // alert("Producto guardado");
                form.reset();
                modal.hide();
                Swal.fire({
                    title: "Los datos de " + data.get('nombre') +" han sido registrado ",
                    icon: "success",
                    draggable: true
                });
                verdatos();
                producto();
            }else{
                alert("Error al guardar");
            }
        }
    }

    xhr.send(data);
});




function verdatos(){
    let xhr = new XMLHttpRequest();
    xhr.open("GET","./php/verproductos.php",true);
    xhr.addEventListener('load',function(){
        let respuesta = JSON.parse(xhr.response);
        console.log(respuesta);
        let tbody = document.getElementById('tbody');
        tbody.innerHTML = '';

        respuesta.forEach(e=>{
            
            tbody.innerHTML +=`
                <tr>
                    <td class="text-center">${e.nombre_producto}</td>
                    <td class="text-center">${e.precio}</td>
                    <td class="text-center">${e.stock_disponible}</td>
                    <td class="text-center">${e.descripcion}</td>
                    <td>
                        <button onclick="actualizaproducto('${e.id_producto}','${e.foto}','${e.nombre_producto}','${e.precio}','${e.stock_disponible}','${e.descripcion}')" 
                        type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ActualizarProduct"><i class="fa-solid fa-pen-to-square"></i>
                        </button>
                    </td>
                </tr>
            `
        });
    });

    xhr.send();
}

verdatos();


function actualizaproducto(id_producto,foto,nombre,precio,stock,descripcion){
    // console.log(id_producto,foto,nombre,precio,stock,descripcion);
    document.getElementById('id_producto').value = id_producto;
    document.getElementById('foto').src = "../img/"+foto;
    document.getElementById('nombre').value = nombre;
    document.getElementById('precio').value = precio;
    document.getElementById('stock').value = stock;
    document.getElementById('descripcion').value = descripcion;

    let formu = document.getElementById('formulario');
    formu.addEventListener('submit',function(o){
        o.preventDefault();

        let dato = new FormData(formu);
        let xhr = new XMLHttpRequest();

        xhr.open("POST","./php/actualizarproduct.php",true);
        xhr.onload = function(){
            if(xhr.status == 200){
                if(xhr.response == 1){
                    Swal.fire({
                        title: "Los datos de " + dato.get('nombre') +" han sido actualizados ",
                        icon: "success",
                        draggable: true
                    });
                    verdatos();
                    formu.reset();
                    modalActua.hide();
                }else{
                    alert("Error al guardar");
                }
            }
        }

        xhr.send(dato);
    });
}

// Buscador de los productos

// let buscador = document.getElementById('buscar');

// buscador.addEventListener('keyup',()=>{
//     let caja = buscador.value;
//     console.log(caja);

//     if(caja !=""){
//         buscar_producto(caja);
//     }else{
//         verdatos();
//     }
// });


// function buscar_producto(producto){
//     let datoproduct = producto;
//     let xhr = new XMLHttpRequest();
//     xhr.open("POST","./php/buscarproducto.php",true);
//     xhr.setRequestHeader("Content-type","Aplication/x-www-form-urlencoded");

//     xhr.addEventListener('load',function(){
//         let json = JSON.parse(xhr.responseText);
//         console.log(json);
        
//         let tbody = document.getElementById('tbody');
//         json.forEach((e)=>{
//             tbody.innerHTML +=`
//                 <tr>
//                     <td class="text-center">${e.nombre_producto}</td>
//                     <td class="text-center">${e.precio}</td>
//                     <td class="text-center">${e.stock_disponible}</td>
//                     <td class="text-center">${e.descripcion}</td>
//                     <td>
//                         <button onclick="actualizaproducto('${e.id_producto}','${e.foto}','${e.nombre_producto}','${e.precio}','${e.stock_disponible}','${e.descripcion}')" 
//                         type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ActualizarProduct"><i class="fa-solid fa-pen-to-square"></i>
//                         </button>
//                     </td>
//                 </tr>  
//             `
//         });
//     });

//     xhr.send("buscar="+datoproduct);
// }

function buscar(buscar=''){
    let xhr = XMLHttpRequest();
    xhr.open("GET","./php/buscador.php",true);
    
    xhr.onload = function(){
        if(xhr.status == 200){
            console.log(xhr.response);
            
            // let resp = JSON.parse(xhr.responseText);
            actualizaproducto(resp);
        }

    }

    xhr.send();
}

function iniciarbuscador(){
    let id_buscar = document.getElementById('buscar');
    let conta;

    id_buscar.addEventListener('input',function(){
        conta = setTimeout(()=>{
            verdatos(this.value);
        },200);
    });
}