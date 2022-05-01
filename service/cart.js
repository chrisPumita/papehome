$( document ).ready(function() {
    console.log("CARGANDO CARRITO")
    cargaCarrito();
});

window.onload = function() {

  };


var TMP_CARRITO;

async function cargaCarrito() {
    cargaProductosCarrito().then(function (result) {
        let productos =  result.data;
        TMP_CARRITO = result.data;
        console.log(TMP_CARRITO)
        iconCartNav(result.data);
        
    })
    return await true;
}

function iconCartNav(productos) {
    if (TMP_CARRITO != null){
        let total= 0;
        productos.forEach(function(a){
            total += a.producto.stock >0 ? parseInt(a.producto.cantidad): 0;
        });
        $("#cantProductos").html(total);
    }
    else{
        $("#cantProductos").html("0");
    }
}

 function cargaCarritoPageHTML() {
     cargaProductosCarrito().then(function (result) {

         let template = "";
         let LISTA = result.data;
         let sumaProductos = 0;
         let total = 0;
         console.log(LISTA);
         LISTA.forEach(
             PROD=>{
                let none = "";
                 let precioFinal = parseFloat(PROD.producto.costo_promedio) - parseFloat(PROD.producto.descuento);
                 let subtotal = precioFinal * parseInt(PROD.producto.cantidad);
                 let cantSelect = "";
                 if(parseInt(PROD.producto.stock)>0){
                     for (let i = 0; i < parseInt(PROD.producto.stock); i++) {
                         let select = parseInt(PROD.producto.cantidad) == i+1 ? "selected" : "";
                         cantSelect += `<option value="${(i+1)}" ${select}>${(i+1)}</option>`;
                     }
                     sumaProductos += parseInt(PROD.producto.cantidad);
                     total += subtotal;
                 }
                 else{
                     cantSelect = `<option value="0" selected="">-AGOTADO-</option>`;
                     none = 'd-none';
                 }
                 let foto = (PROD.fotos).length > 0 ? PROD.fotos[0].path: './assets/img/default-image.jpg';



                 let coste = parseFloat(PROD.producto.descuento) > 0 ? `<div class="col small"><del class="text-muted"><i class="fas fa-dollar-sign"></i> ${PROD.producto.costo_promedio}</del>
                                                    <strong class="fs-6 text-danger">$${precioFinal.toFixed(2)}</strong></div>`:`<strong class="fs-6">$ ${PROD.producto.costo_promedio}</strong>`;

                 template += `<div class="row border-top border-bottom">
                <div class="row main align-items-center">
                    <div class="col-2">
                        <img src="${foto}" class="card-img-top" alt="...">
                    </div>
                    <div class="col">
                        <div class="row text-muted">${PROD.producto.categoria}</div>
                        <div class="row">${PROD.producto.marca} - ${PROD.producto.nombre} </div>
                    </div>
                    <div class="col-2">
                        <select class="form-select form-select-sm w-75" aria-label=".form-select-sm example">
                            ${cantSelect}
                        </select>
                    </div>
                    <div class="col-3 ${none}">
                        <div class="row text-muted">${coste}</div>
                        <div class="row d-flex">
                            <div class="col">
                             <span>x${parseInt(PROD.producto.cantidad)} </span><strong>$${subtotal.toFixed(2)}</strong>               
                            </div>

                        </div>
                    </div>
                    <div class="col-auto"><svg class="svg-inline--fa fa-times fa-w-11" role="button" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" data-fa-i2svg=""><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg><!-- <i class="fas fa-times" role="button"></i> Font Awesome fontawesome.com --></div>
                </div>
            </div>`;
             }
         );

         let tmp = `<div class="col">${sumaProductos} Productos</div>
                    <div class="col text-right">&dollar; ${total.toFixed(2)}</div>`;
         let tmp2 = `<div class="col">TOTAL</div>
                    <div class="col text-right">&dollar; ${total.toFixed(2)}</div>`;

         $("#container").html(template);
         $("#subtotalBox").html(tmp);
         $("#totalBox").html(tmp2);
     })
}

function addProductoCart(idProducto) {
    agregaProductoCarrito(idProducto,1).then(function (result) {
        console.log(result);
        if(result.response===1){
            notificacion('success',result.mensaje);
            cargaCarrito();
            try {
                loadProductos();
                loadPromos();
            } catch (error) {
                console.log("OTHER PAGE")
            }
        }
        else{
            alert("ERROR");
        }
    })
}