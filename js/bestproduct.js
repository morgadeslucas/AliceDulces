let xhr = new XMLHttpRequest();

xhr.open("GET","./php/productosforn.php",true);

xhr.addEventListener('load',function(){
    // console.log(xhr.response);
    let resp = JSON.parse(xhr.response);
    let best = document.getElementById('best');

    best.innerHTML='';
    resp.forEach(e => {
        best.innerHTML+=`
                <div class="tarjeta">
                    <div class="tarjeta_img">
                        <img src="./admin/img/${e.foto}" alt="">
                    </div>
                    <div class="tarjeta_txt">
                        <h4>${e.nombre_producto}</h4>
                        <p>${e.descripcion}</p>
                    </div>
                    <div class="tarjeta_precio">
                        <p>${e.precio}</p>
                    </div>
                </div>
        `
    });
    
});

xhr.send();