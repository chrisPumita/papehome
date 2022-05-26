$( document ).ready(function() {
    console.log("CARRGA SHOP")
    cargaCarrito().then(function (result) {
        loadProductos();
        loadPromos();
    })
});

function loadProductos() {
    cargaProductosHome(0,"last").then(function (result) {
        let productos = result.data;
        let template = buildHTMLCardProducto(productos);
        $("#swiper-News").html(template);
    });
}

function loadPromos() {
    cargaProductosHome(0,"offers").then(function (result) {
        let productos = result.data;
        let template = buildHTMLCardProducto(productos);
        $("#swiper-offers").html(template);
    });
}

function buildHTMLCardProducto(LS_PRODUCTOS) {
    let template = "";
    console.log(TMP_CARRITO)
    LS_PRODUCTOS.forEach(
      info=>{
          let producto = info.producto;
          let imgGaleria = info.fotos;

          let botonStock = "";
        let found = null;
        if (TMP_CARRITO!= null) {
            found = TMP_CARRITO.find(element => parseInt(element.producto.id_producto) == parseInt(producto.id_producto));
        }

        if (parseInt(producto.stock) <=0 ) {
            botonStock = `<button class="btn btn-secondary btn-sm" type="button" disabled>AGOTADO</button>`;
        } else {
            if (found != null) {
                botonStock = `<a href="./cart.php" class="btn btn-primary btn-sm" type="button" >AGREGADO</a>`;
            } else {
                botonStock = `<button class="btn btn-success btn-sm" type="button" onClick="addProductoCart(${producto.id_producto});">Agregar</button>`;
            }
        }
          let foto = info.fotos.length > 0 ? imgGaleria[0].path: "./assets/img/default-image.jpg";
          let costoActual = producto.descuento > 0 ? parseFloat(producto.costo_promedio) - parseFloat(producto.descuento) : producto.costo_promedio;
          let coste = producto.descuento >0 ? `<p class="text-danger">
                                                    <del class="text-muted fs-6 mx-4"><i class="fas fa-dollar-sign"></i> ${producto.costo_promedio}</del>
                                                    <strong class="fs-4">$${costoActual}</strong>
                                                </p>`:
                                              `<p class="text-success"><strong class="fs-4">$ ${producto.costo_promedio}</strong></p>`;
                                        template += `<div class="swiper-slide">
                                                            <div class="card px-1">
                                                                <img src="${foto}" class="card-img-top" style="height: 200px;" alt="...">
                                                                <div class="card-body small">
                                                                    <h5 class="card-title">${producto.nombre}</h5>
                                                                    ${coste}
                                                                     ${botonStock}
                                                                     <a href="./product.php?idProducto=${producto.id_producto}" class="btn btn-success btn-sm" type="submit">Detalles</a>
                                                                </div>
                                                            </div>
                                                        </div>`;
          }
    );
    return template;
}


