$(document).ready(function () {
    console.log("Busqueda");
    cargaCarrito().then(e=>{
        muestraProductos();
    })
});

window.onload = function () {

}

function muestraProductos() {
    buscaProductos(CAT, KEYWORD, OFF).then(function (result) {
        console.log(result);
        let template = ``;
        let productos = result.data;
        let cantidad = 0;
        if (productos != null) {
            cantidad = productos.length;

            productos.forEach(info => {
                let producto = info.producto;
                let imgGaleria = info.fotos;
                let botonStock = "";
                let found = null;
                if (TMP_CARRITO != null) {
                    found = TMP_CARRITO.find(element => parseInt(element.producto.id_producto) == parseInt(producto.id_producto));
                }

                if (parseInt(producto.stock) <= 0) {
                    botonStock = `<button class="btn btn-secondary btn-sm" type="button" disabled>AGOTADO</button>`;
                } else {
                    if (found != null) {
                        botonStock = `<a href="./cart.php" class="btn btn-primary btn-sm" type="button" >AGREGADO</a>`;
                    } else {
                        botonStock = `<button class="btn btn-success btn-sm" type="button" onClick="addProductoCartB(${producto.id_producto});">Agregar</button>`;
                    }
                }
                let foto = info.fotos.length > 0 ? imgGaleria[0].path : "./assets/img/default-image.jpg";
                let costoActual = producto.descuento > 0 ? parseFloat(producto.costo_promedio) - parseFloat(producto.descuento) : producto.costo_promedio;
                let coste = producto.descuento > 0 ? `<p class="text-danger">
                                                    <del class="text-muted fs-6 mx-4"><i class="fas fa-dollar-sign"></i> ${producto.costo_promedio}</del>
                                                    <strong class="fs-4">$${costoActual}</strong>
                                                </p>` :
                    `<p class="text-success"><strong class="fs-4">$ ${producto.costo_promedio}</strong></p>`;
                template += `<div class="col">
                                <div class="card py-3  p-3">
                                    <img src="${foto}" class="card-img-top" alt="...">
                                    <div class="small">
                                        <h5 class="card-title text-center">${producto.nombre}</h5>
                                         ${coste}
                                         <h6>${producto.categoria} - ${producto.marca}</h6>      
                                        <p class="card-text">${producto.descripcion}</p>
                                        ${botonStock}
                                        <a href="./product.php?idProducto=${producto.id_producto}" class="btn btn-success btn-sm" type="submit">Detalles</a>
                                    </div>
                                </div>
                            </div>`;
            });
        } else {
            template = `<div class="w-100"><h2>No encontramos coincidencias</h2></div>`;
        }
        $("#foundProductos").html(cantidad);
        $("#contanerProductos").html(template);
    })
}

function addProductoCartB(idProducto) {
    agregaProductoCarrito(idProducto,1).then(function (result) {

        if(result.response===1){
            notificacion('success',result.mensaje);
            cargaCarrito();
            muestraProductos();
        }
        else{
            alert("ERROR");
        }
    })
}