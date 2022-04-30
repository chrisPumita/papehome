$( document ).ready(function() {
    loadProductos();
    loadPromos();
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
    LS_PRODUCTOS.forEach(
      info=>{
          let producto = info.producto;
          let imgGaleria = info.fotos;
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
                                                                     <button class="btn btn-success btn-sm" type="submit">Agregar</button>
                                                                     <a href="./product.php?idProducto=${producto.id_producto}" class="btn btn-success btn-sm" type="submit">Detalles</a>
                                                                </div>
                                                            </div>
                                                        </div>`;
          }
    );
    return template;
}


