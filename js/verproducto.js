function producto(){
    let xhr = new XMLHttpRequest();
    xhr.open("GET","./php/productosel.php",true);

    xhr.addEventListener('load',()=>{
        let res = JSON.parse(xhr.response);
        console.log(res);

        let producto = document.getElementById('productos');
        producto.innerHTML = '';

        res.forEach((e)=> {
            producto.innerHTML += `
            
                <div class="tarjeta">
                    <div class="tarjeta_img">
                        <img src="./img/${e.foto}" alt="">
                    </div>
                    <div class="tarjeta_txt">
                        <h4>${e.nombre_producto}</h4>
                        <p>${e.descripcion}</p>
                        <p>PRECIO:${e.precio} XFA</p>
                    </div>
                    <div class="tarjeta_precio">
                        <a href="#" onclick="operacion('${e.id_producto}','${e.nombre_producto}','${e.precio}')">Realizar Encargo</a>
                    </div>
                </div>

            `
        });
    
    
    });

    xhr.send();
}

producto();

function operacion(id_producto,nombre,precio){
    console.log(id_producto,nombre,precio);
    let dato = new FormData();
    dato.append('id_producto',id_producto);
    dato.append('nombre',nombre);
    dato.append('precio',precio);

    let xhr = new XMLHttpRequest();
    xhr.open("POST","./php/valor.php",true);
    xhr.addEventListener('load',()=>{
        console.log(xhr.response);
        if(xhr.response==1){
            window.location.href="./loginreserva.php"
        }
        
    })

    xhr.send(dato);
    
}



