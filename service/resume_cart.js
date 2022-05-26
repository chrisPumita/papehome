$( document ).ready(function() {
    cargaCarritoPageHTML();
});


function cargaCarritoPageHTML() {
    cargaProductosCarrito().then(function (result) {
        let template = "";
        let LISTA = result.data;
        let sumaProductos = 0;
        let subtotal = 0;
        let TOTAL_P = 0;
        if(LISTA != null) {
            LISTA.forEach(
                PROD=>{
                    let cantidad = parseInt(PROD.producto.cantidad);
                    let costo = parseInt(PROD.producto.costo_promedio) - parseInt(PROD.producto.descuento);
                    subtotal = cantidad * costo;
                    sumaProductos+= cantidad;
                    TOTAL_P+= subtotal;
                    template += `<div class="row py-1">
                        <div class="col">${cantidad} ${PROD.producto.nombre}</div>
                        <div class="col text-right">$ ${subtotal.toFixed(2)}</div>
                    </div>`;
                }
            );
        }
        else{
            template = `<div class="alert alert-primary" role="alert">
                              Aun no has agregado nada, visita el catalogo para ver todos nuestros productos <a href="./search.php" class="alert-link"> Seguir Comprando</a>.
                            </div>`;
        }

        let envio = TOTAL_P >= 500 || TOTAL_P == 0 ? 0 : 150;
        let TOTAL = TOTAL_P  + envio;

        let tmp = `<div class="col">${sumaProductos} Productos</div>
                    <div class="col text-right">&dollar; ${TOTAL_P.toFixed(2)}</div>`;
        let tmp_envio = `<div class="col"> Envio</div>
                    <div class="col text-right">&dollar; ${envio.toFixed(2)}</div>`;
        let tmp2 = `<div class="col">TOTAL</div>
                    <div class="col text-right">&dollar; ${TOTAL.toFixed(2)}</div>`;

        $("#container").html(template);
        $("#subtotalBox").html(tmp);
        $("#totalBox").html(tmp2);
        $("#totalEnvio").html(tmp_envio);
    })
}
