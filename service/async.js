$( document ).ready(function() {
    console.log("ASYNC");
});
/*ASYNC FUNCTIONS*/
async function cargaProductosHome(id,filtro) {
    let ruta = "./webhook/producto_info.php";
    let data = {id:id, filtro:filtro};
    return await loadAsyncGeneral(ruta,data);
}

async function cargaProductosCarrito(filtro) {
    let ruta = "./webhook/loadCarrito.php";
    let data = {filtro:filtro};
    return await loadAsyncGeneral(ruta,data);
}

async function agregaProductoCarrito(idProducto,cantidad) {
    let ruta = "./webhook/addProductCart.php";
    let data = {idProducto:idProducto, cantidad:cantidad};
    return await loadAsyncGeneral(ruta,data);
}

async function updateCantProductoCarrito(idProducto,cantidad) {
    let ruta = "./webhook/updateCantProd.php";
    let data = {idProducto:idProducto, cantidad:cantidad};
    return await loadAsyncGeneral(ruta,data);
}

async function removeProductoCarrito(idProducto) {
    let ruta = "./webhook/removeProd.php";
    let data = {idProducto:idProducto};
    return await loadAsyncGeneral(ruta,data);
}

//ASYNC CARGA DIRECCIONES CLIENTE
async function loadDirecciones(idDir) {
    let ruta = "./webhook/cargaDirecciones.php";
    let data = {idDir:idDir};
    return await loadAsyncGeneral(ruta,data);
}

//ASYNC CARGA DIRECCIONES CLIENTE
async function guardaVenta(idDir,formaPago) {
    let ruta = "./webhook/confirmaVenta.php";
    let data = {idDir:idDir, formaPago:formaPago};
    return await loadAsyncGeneral(ruta,data);
}

//ASYNC CARGA PEDIDOS CLIENTE
async function cargaPedidosCliente(idPedido) {
    let ruta = "../webhook/consultaPedidos.php";
    let data = {idPedido:idPedido};
    return await loadAsyncGeneral(ruta,data);
}

/*CAT&EGORIAS*/
async function cargaCategorias(page) {
    let ruta = page+"webhook/listaCategorias.php";
    let data = {page:page};
    return await loadAsyncGeneral(ruta,data);
}

async function buscaProductos(categoria,keyword,descuento) {
    let ruta = "./webhook/busquedaProductos.php";
    let data = {cat:categoria,keyword:keyword,descuento:descuento};
    return await loadAsyncGeneral(ruta,data);
}

async function loadAsyncGeneral(route,data) {
    return $.ajax({
        url: route,
        type: 'POST',
        data: data,
        dataType: "json",
        error: function(error) {
            console.log(error);
        }
    });
}