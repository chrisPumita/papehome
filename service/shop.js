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
        console.log(result);
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
          let coste = producto.descuento >0 ? `<p class="text-danger">
                                                    <del class="text-muted fs-6 mx-4">$50.00</del>
                                                    <strong class="fs-4">$45.00</strong>
                                                </p>`:
              `<p class="text-success"><strong class="fs-4">$${producto.costo_promedio}</strong></p>`;
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


/*ASYNC FUNCTIONS*/
async function cargaProductosHome(id,filtro) {
    return await cargaProductosHomeAjax(id,filtro);
}

async function cargaProductosHomeAjax(id,filtro) {
    return $.ajax({
        url: "./webhook/producto_info.php",
        type: 'POST',
        data:{id:id, filtro:filtro},
        dataType: "json",
        error: function(error) {
            console.log(error);
            alert("Error interno");
        }
    });
}