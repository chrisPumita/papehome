$( document ).ready(function() {
    console.log("Carrito CART")
    cargaCarrito();
    muestraCategorias();
});

function muestraCategorias() {
    //containerCategorias
    cargaCategorias("./").then(function (result) {
        let categorias = result.data;
        let template = ``;
        categorias.forEach(cat=>{
            template += `<li><a class="dropdown-item" href="./search.php?cat=${cat.categoria}&keword=none&off=none">${cat.categoria}</a></li>`;
        })
        $("#containerCategorias").html(template);
    })
}

var TMP_CARRITO;

async function cargaCarrito() {
    cargaProductosCarrito().then(function (result) {
        let productos =  result.data;
        TMP_CARRITO = result.data;
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
         let subtotal = 0;
         let total = 0;
         if(LISTA != null) {
             LISTA.forEach(
                 PROD=>{
                     let none = "";
                     let precioFinal = parseFloat(PROD.producto.costo_promedio) - parseFloat(PROD.producto.descuento);
                     let subtotal_p = precioFinal * parseInt(PROD.producto.cantidad);
                     let cantSelect = "";
                     if(parseInt(PROD.producto.stock)>0){
                         for (let i = 0; i < parseInt(PROD.producto.stock); i++) {
                             let select = parseInt(PROD.producto.cantidad) == i+1 ? "selected" : "";
                             cantSelect += `<option value="${PROD.producto.id_producto}" ${select}>${(i+1)}</option>`;
                         }
                         sumaProductos += parseInt(PROD.producto.cantidad);
                         subtotal += subtotal_p;
                     }
                     else{
                         cantSelect = `<option value="0" selected="">-AGOTADO-</option>`;
                         none = 'd-none';
                     }

                     let foto = (PROD.fotos).length > 0 ? PROD.fotos[0].path: './assets/img/default-image.jpg';
                     let coste = parseFloat(PROD.producto.descuento) > 0 ?
                         `<div class="col small"><del class="text-muted"><i class="fas fa-dollar-sign"></i> ${PROD.producto.costo_promedio}</del>
                                                    <strong class="fs-6 text-danger">$${precioFinal.toFixed(2)}</strong></div>`
                         :`<strong class="fs-6">$ ${PROD.producto.costo_promedio}</strong>`;

                     template += `<div class="row border-top border-bottom">
                <div class="row main align-items-center">
                    <div class="col-2">
                        <img src="${foto}" class="card-img-top" alt="...">
                    </div>
                    <div class="col-10 col-md-4">
                        <div class="row text-muted">${PROD.producto.categoria}</div>
                        <div class="row">${PROD.producto.marca} - ${PROD.producto.nombre} </div>
                    </div>
                    <div class="col-4 col-md-2">
                        <select class="form-select form-select-sm w-auto selectCant" aria-label=".form-select-sm example">
                            ${cantSelect}
                        </select>
                    </div>
                    <div class="col-4 col-md-3 d-md-block d-flex ${none}">
                        <div class="row text-muted">${coste}</div>
                        <div class="row d-flex">
                            <div class="col">
                             <span>x ${parseInt(PROD.producto.cantidad)} </span><strong>$${subtotal_p.toFixed(2)}</strong>               
                            </div>

                        </div>
                    </div>
                    <div class="col-auto" >
                        <i class="fas fa-times" role="button" onClick="removeCartProduct(${PROD.producto.id_producto});"></i>
                    </div>
                </div>
            </div>`;
                 }
             );
         }
         else{
             template = `<div class="alert alert-primary" role="alert">
                              Aun no has agregado nada, visita el catalogo para ver todos nuestros productos <a href="./search.php" class="alert-link"> Seguir Comprando</a>.
                            </div>`;
         }


         let envio = subtotal >= 500 || subtotal==0 ? 0 : 150;
         total = subtotal  + envio;

         let tmp = `<div class="col">${sumaProductos} Productos</div>
                    <div class="col text-right">&dollar; ${subtotal.toFixed(2)}</div>`;
         let tmp_envio = `<div class="col"> Envio</div>
                    <div class="col text-right">&dollar; ${envio.toFixed(2)}</div>`;
         let tmp2 = `<div class="col">TOTAL</div>
                    <div class="col text-right">&dollar; ${total.toFixed(2)}</div>`;

         $("#container").html(template);
         $("#subtotalBox").html(tmp);
         $("#totalBox").html(tmp2);
         $("#totalEnvio").html(tmp_envio);
     })
}

function addProductoCart(idProducto) {
    agregaProductoCarrito(idProducto,1).then(function (result) {
        
        if(result.response===1){
            notificacion('success',result.mensaje);
            cargaCarrito();
            try {
                loadProductos();
                loadPromos();
            } catch (error) {
                
            }
        }
        else{
            alert("ERROR");
        }
    })
}

//selectCant
$(document).on("change", ".selectCant", function ()
{
    var select = $(this)[0];
    var cant = select.options[select.selectedIndex].text;
    var id_producto = select.options[select.selectedIndex].value;
    
    updateCantProductoCarrito(id_producto,cant).then(function (result) {
        cargaCarrito();
        cargaCarritoPageHTML();
    })
});


function removeCartProduct(id) {
    removeProductoCarrito(id).then(function(result){
        
        notificacion('success',result.mensaje);
        cargaCarrito();
        cargaCarritoPageHTML();
    });
}