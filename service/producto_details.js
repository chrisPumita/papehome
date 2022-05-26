$( document ).ready(function() {
    cargaCarrito().then(e=>{
        infoProducto();
    })
});


function infoProducto() {
    cargaProductosHome(ID_PRODUCTO,"").then(function (result) {
        if (result.numRows>0){
            let elemento = result.data[0];
            let fotos = elemento.fotos;
            let producto = elemento.producto;
            loadFotos(fotos);
            cargaInfo(producto);
        }
        else{
            window.location.href = "./";
        }
    })
}

function cargaInfo(producto) {
    console.log(producto);
    console.log(TMP_CARRITO);
    let botonStock = "";
    let found = null;
    if (TMP_CARRITO!= null) {
        found = TMP_CARRITO.find(element => parseInt(element.producto.id_producto) == parseInt(producto.id_producto));
    }

    if (parseInt(producto.stock) <=0 ) {
        botonStock = `<button class="btn btn-success w-100" role="button" disabled>AGOTADO </button>`;
    } else {
        if (found != null) {
            botonStock = `<a href="./cart.php" class="btn btn-primary w-100 " type="button" >AGREGADO</a>`;
        } else {
            botonStock = `<button class="btn btn-success" type="button" onClick="addProductoCartC(${producto.id_producto});"><i class="fas fa-cart-plus" aria-hidden="true"></i> Agregar</button>`;
        }
    }

    let costoActual = producto.descuento > 0 ? parseFloat(producto.costo_promedio) - parseFloat(producto.descuento) : producto.costo_promedio;
    let coste = producto.descuento >0 ? `<p class="text-danger">
                                                    <del class="text-muted fs-6 mx-4"><i class="fas fa-dollar-sign"></i> ${producto.costo_promedio}</del>
                                                    <strong class="fs-2 mx-4">$${costoActual}</strong>
                                                </p>`:
        `<p class="text-success"><strong class="fs-4">$ ${producto.costo_promedio}</strong></p>`;


    $("#nameProductoBread").html(producto.nombre);
    $("#lblNombre").html(producto.nombre);
    $("#lblSKU").html(producto.sku);
    $("#lblCoste").html(coste);
    $("#lblDesc").html(producto.descripcion);
    $("#btnAdd").html(botonStock);

}

function addProductoCartC(idProducto) {
    agregaProductoCarrito(idProducto,1).then(function (result) {
        if(result.response===1){
            notificacion('success',result.mensaje);
            cargaCarrito();
            window.location.reload();
        }
        else{
            alert("ERROR");
        }
    })
}

function loadFotos(fotos) {
    let template = "";
    if (fotos.length > 0){
        template = `<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">`;
        let cont = 0;
        fotos.forEach((foto)=>{
            let active = cont == 0 ? "active": "";
            cont ++
            template+= `<div class="carousel-item ${active}">
                                <img src="${foto.path}" class="d-block w-100" alt="...">
                           </div>`;
        });
        template+= `</div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>`;
    }
    else{
        template = `<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./assets/img/default-image.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>`;
    }
    $("#myFotosGalery").html(template);
}
